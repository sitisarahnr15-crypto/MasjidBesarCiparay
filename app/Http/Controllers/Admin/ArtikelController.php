<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Cloudinary\Cloudinary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->get();

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
            $upload = (new Cloudinary())->uploadApi()->upload(
                $request->file('gambar')->getRealPath(),
                [
                    'asset_folder' => 'artikel',
                ]
            );

            $data['gambar'] = $upload['secure_url'];
            $data['cloudinary_public_id'] = $upload['public_id'];
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
            $data['slug'] = $this->buatSlugUnik(
                $data['judul'],
                $artikel->id
            );
        }

        if ($data['status'] === 'published' && empty($data['tanggal_publikasi'])) {
            $data['tanggal_publikasi'] =
                $artikel->tanggal_publikasi?->toDateString()
                ?? now()->toDateString();
        }

        // Simpan lokasi gambar lama sebelum menggantinya.
        $gambarLama = $artikel->gambar;
        $publicIdLama = $artikel->cloudinary_public_id;

        if ($request->hasFile('gambar')) {
            $upload = (new Cloudinary())->uploadApi()->upload(
                $request->file('gambar')->getRealPath(),
                [
                    'asset_folder' => 'artikel',
                ]
            );

            $data['gambar'] = $upload['secure_url'];
            $data['cloudinary_public_id'] = $upload['public_id'];
        }

        $artikel->update($data);

        // Hapus gambar lama setelah gambar baru berhasil disimpan.
        if ($request->hasFile('gambar')) {
            $this->hapusGambar($gambarLama, $publicIdLama);
        }

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil diperbarui.');
    }

    public function destroy(Artikel $artikel)
    {
        $this->hapusGambar(
            $artikel->gambar,
            $artikel->cloudinary_public_id
        );

        $artikel->delete();

        return redirect()->route('admin.artikel.index')
            ->with('success', 'Artikel berhasil dihapus.');
    }

    private function hapusGambar(?string $gambar, ?string $publicId): void
    {
        if ($publicId) {
            (new Cloudinary())->uploadApi()->destroy(
                $publicId,
                [
                    'resource_type' => 'image',
                    'type' => 'upload',
                ]
            );

            return;
        }

        // Gambar lama yang masih tersimpan di penyimpanan lokal.
        if ($gambar && !filter_var($gambar, FILTER_VALIDATE_URL)) {
            Storage::disk('public')->delete($gambar);
        }
    }

    private function buatSlugUnik(
        string $judul,
        ?int $kecualiId = null
    ): string {
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
