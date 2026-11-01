
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Edit Artikel - Masjid Besar Ciparay</title>
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; font-family: Arial, sans-serif; background: #f3f6fb; color: #243247; }
        header { background: #123b69; color: white; padding: 22px 5%; }
        main { max-width: 850px; margin: 30px auto; padding: 0 20px; }
        .card { background: white; border-radius: 12px; padding: 25px; box-shadow: 0 3px 15px #152d4a12; }
        label { display: block; font-weight: bold; margin: 17px 0 7px; }
        input, textarea, select {
            width: 100%; padding: 11px; border: 1px solid #ccd5e2;
            border-radius: 7px; font: inherit;
        }
        textarea { min-height: 150px; resize: vertical; }
        .buttons { display: flex; gap: 10px; margin-top: 22px; }
        a, button { border: 0; border-radius: 7px; padding: 11px 16px; text-decoration: none; cursor: pointer; font-size: 14px; }
        .primary { background: #174f88; color: white; }
        .secondary { background: #e5edf7; color: #174f88; }
        .error { color: #b42318; font-size: 13px; margin-top: 5px; }
        .hint { color: #64748b; font-size: 13px; }
        .preview { max-width: 250px; max-height: 180px; object-fit: cover; border-radius: 8px; margin-top: 10px; display: block; }
    </style>
</head>
<body>

<header>
    <h2>Masjid Besar Ciparay</h2>
    <div>Panel Admin · Edit Artikel</div>
</header>

<main>
    <h1>Edit Artikel</h1>
    <p>Perbarui informasi artikel yang sudah tersimpan.</p>

    <section class="card">
        <form action="{{ route('admin.artikel.update', $artikel->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label for="judul">Judul Artikel *</label>
            <input id="judul" name="judul" value="{{ old('judul', $artikel->judul) }}" required>
            @error('judul') <div class="error">{{ $message }}</div> @enderror

            <label for="kategori">Kategori</label>
            <input id="kategori" name="kategori" value="{{ old('kategori', $artikel->kategori) }}" placeholder="Contoh: Kajian, Berita, Kegiatan">
            @error('kategori') <div class="error">{{ $message }}</div> @enderror

            <label for="ringkasan">Ringkasan Artikel</label>
            <textarea id="ringkasan" name="ringkasan" maxlength="500" style="min-height:90px" placeholder="Ringkasan singkat untuk halaman depan">{{ old('ringkasan', $artikel->ringkasan) }}</textarea>
            @error('ringkasan') <div class="error">{{ $message }}</div> @enderror

            <label for="isi">Isi Artikel *</label>
            <textarea id="isi" name="isi" required placeholder="Tuliskan isi artikel lengkap di sini...">{{ old('isi', $artikel->isi) }}</textarea>
            @error('isi') <div class="error">{{ $message }}</div> @enderror

            <label>Gambar Saat Ini</label>

            @if($artikel->gambar)
                <img
                    class="preview"
                    src="{{ str_starts_with($artikel->gambar, 'http') ? $artikel->gambar : asset('storage/' . $artikel->gambar) }}"
                    alt="Gambar artikel saat ini"
                >
            @else
                <p class="hint">Belum ada gambar artikel.</p>
            @endif

            <label for="gambar">Ganti Gambar Artikel</label>
            <input type="file" id="gambar" name="gambar" accept=".jpg,.jpeg,.png,.webp">
            <p class="hint">Kosongkan jika tidak ingin mengganti gambar. Format JPG, PNG, atau WEBP. Maksimal 2 MB.</p>
            @error('gambar') <div class="error">{{ $message }}</div> @enderror

            <label for="tanggal_publikasi">Tanggal Publikasi</label>
            <input
                type="date"
                id="tanggal_publikasi"
                name="tanggal_publikasi"
                value="{{ old('tanggal_publikasi', $artikel->tanggal_publikasi ? \Carbon\Carbon::parse($artikel->tanggal_publikasi)->format('Y-m-d') : '') }}"
            >
            @error('tanggal_publikasi') <div class="error">{{ $message }}</div> @enderror

            <label for="status">Status Artikel *</label>
            <select id="status" name="status" required>
                <option value="draft" {{ old('status', $artikel->status) === 'draft' ? 'selected' : '' }}>Draft (belum diterbitkan)</option>
                <option value="published" {{ old('status', $artikel->status) === 'published' ? 'selected' : '' }}>Terbitkan</option>
            </select>
            @error('status') <div class="error">{{ $message }}</div> @enderror

            <div class="buttons">
                <button type="submit" class="primary">Simpan Perubahan</button>
                <a href="{{ route('admin.artikel.index') }}" class="secondary">Kembali</a>
            </div>
        </form>
    </section>
</main>

</body>
</html>
