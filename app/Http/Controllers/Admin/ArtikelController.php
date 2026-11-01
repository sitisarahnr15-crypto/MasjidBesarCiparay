<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
   public function index()
{
    $artikels = \App\Models\Artikel::latest()->get();

    return view('admin.artikel.index', compact('artikels'));
}

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal_publikasi' => 'nullable|date',
            'status' => 'required|in:draft,published',
        ]);

        $data['slug'] = $this->buatSlugUnik($data['judul']);

        if ($data['status'] === 'published' && empty($data['tanggal_publikasi'])) {
            $data['tanggal_publikasi'] = now()->toDateString();
        }

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('artikel', 'public');
        }

        Artikel::create($data);

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil ditambahkan.');
    }

    public function show(Artikel $artikel)
    {
        return redirect()->route('admin.artikel.edit', $artikel);
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $data = $request->validate([
            'judul' => 'required|string|max:255',
            'kategori' => 'nullable|string|max:255',
            'ringkasan' => 'nullable|string|max:500',
            'isi' => 'required|string',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'tanggal_publikasi' => 'nullable|date',
            'status' => 'required|in:draft,published',
        ]);

        if ($data['judul'] !== $artikel->judul) {
            $data['slug'] = $this->buatSlugUnik($data['judul'], $artikel->id);
        }

        if ($data['status'] === 'published' && empty($data['tanggal_publikasi'])) {
            $data['tanggal_publikasi'] =
                $artikel->tanggal_publikasi?->toDateString()
                ?? now()->toDateString();
        }

        if ($request->hasFile('gambar')) {
            if ($artikel->gambar) {
                Storage::disk('public')->delete($artikel->gambar);
            }

            $data['gambar'] = $request->file('gambar')->store('artikel', 'public');
        }

        $artikel->update($data);

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Artikel $artikel)
    {
        if ($artikel->gambar) {
            Storage::disk('public')->delete($artikel->gambar);
        }

        $artikel->delete();

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }

    private function buatSlugUnik(string $judul, ?int $kecualiId = null): string
    {
        $slugDasar = Str::slug($judul) ?: 'artikel';
        $slug = $slugDasar;
        $nomor = 2;

        while (
            Artikel::where('slug', $slug)
                ->when($kecualiId !== null, function ($query) use ($kecualiId) {
                    $query->where('id', '!=', $kecualiId);
                })
                ->exists()
        ) {
            $slug = $slugDasar . '-' . $nomor;
            $nomor++;
        }

        return $slug;
    }
}
