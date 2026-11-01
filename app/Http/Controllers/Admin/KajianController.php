<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kajian;
use Illuminate\Http\Request;

class KajianController extends Controller
{
    public function index()
    {
        $kajians = Kajian::orderBy('tanggal')
            ->orderBy('waktu')
            ->get();

        return view('admin.kajian.index', compact('kajians'));
    }

    public function create()
    {
        return view('admin.kajian.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'pemateri' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        Kajian::create($validated);

        return redirect()
            ->route('admin.kajian.index')
            ->with('success', 'Agenda kajian berhasil ditambahkan.');
    }

    public function show(string $id)
    {
        return redirect()->route('admin.kajian.index');
    }

    public function edit(string $id)
    {
        $kajian = Kajian::findOrFail($id);

        return view('admin.kajian.edit', compact('kajian'));
    }

    public function update(Request $request, string $id)
    {
        $kajian = Kajian::findOrFail($id);

        $validated = $request->validate([
            'judul' => 'required|string|max:255',
            'pemateri' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'waktu' => 'required|date_format:H:i',
            'lokasi' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
        ]);

        $kajian->update($validated);

        return redirect()
            ->route('admin.kajian.index')
            ->with('success', 'Agenda kajian berhasil diperbarui.');
    }

    public function destroy(string $id)
    {
        $kajian = Kajian::findOrFail($id);
        $kajian->delete();

        return redirect()
            ->route('admin.kajian.index')
            ->with('success', 'Agenda kajian berhasil dihapus.');
    }
}
