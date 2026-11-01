
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Jadwal Kajian | Masjid Besar Ciparay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; }
        body { margin: 0; padding: 25px 15px; font-family: 'Poppins', sans-serif; background: #f2f7fc; color: #365d80; }
        .container { max-width: 650px; margin: auto; }
        .back { display: inline-block; margin-bottom: 18px; color: #5288b5; text-decoration: none; font-size: 13px; }
        .panel { background: white; border: 1px solid #dfedfa; border-radius: 18px; padding: 25px; }
        h1 { color: #386b99; font-size: 23px; margin-top: 0; }
        .intro { font-size: 12px; line-height: 1.8; color: #849bb0; }
        label { display: block; margin: 17px 0 7px; font-size: 13px; font-weight: 600; }
        input, textarea { width: 100%; padding: 12px; border: 1px solid #d5e5f4; border-radius: 9px; font: inherit; font-size: 13px; color: #365d80; }
        textarea { min-height: 100px; resize: vertical; }
        .error { color: #b84747; font-size: 12px; margin-top: 5px; }
        .button { display: inline-block; margin-top: 20px; padding: 12px 17px; border: 0; border-radius: 9px; background: #78b9eb; color: white; font: inherit; font-size: 13px; font-weight: 700; cursor: pointer; text-decoration: none; }
        .cancel { background: #edf4fa; color: #386b99; margin-left: 6px; }
    </style>
</head>
<body>
<main class="container">
    <a class="back" href="{{ route('admin.kajian.index') }}">← Kembali ke Daftar Jadwal</a>
    <section class="panel">
        <h1>Tambah Jadwal Kajian</h1>
        <p class="intro">Masukkan informasi kajian. Jadwal yang disimpan akan ditampilkan pada halaman publik Jadwal Kajian.</p>

        @if ($errors->any())
            <div class="error">Mohon periksa kembali data yang diisi.</div>
        @endif

        <form action="{{ route('admin.kajian.store') }}" method="POST">
            @csrf

            <label for="judul">Judul Kajian</label>
            <input id="judul" name="judul" value="{{ old('judul') }}" required>
            @error('judul') <div class="error">{{ $message }}</div> @enderror

            <label for="pemateri">Nama Pemateri / Ustaz</label>
            <input id="pemateri" name="pemateri" value="{{ old('pemateri') }}" required>
            @error('pemateri') <div class="error">{{ $message }}</div> @enderror

            <label for="tanggal">Tanggal Kajian</label>
            <input type="date" id="tanggal" name="tanggal" value="{{ old('tanggal') }}" required>
            @error('tanggal') <div class="error">{{ $message }}</div> @enderror

            <label for="waktu">Waktu Kajian</label>
            <input type="time" id="waktu" name="waktu" value="{{ old('waktu') }}" required>
            @error('waktu') <div class="error">{{ $message }}</div> @enderror

            <label for="lokasi">Lokasi</label>
            <input id="lokasi" name="lokasi" value="{{ old('lokasi', 'Masjid Besar Ciparay') }}" required>
            @error('lokasi') <div class="error">{{ $message }}</div> @enderror

            <label for="deskripsi">Deskripsi Kajian (opsional)</label>
            <textarea id="deskripsi" name="deskripsi">{{ old('deskripsi') }}</textarea>
            @error('deskripsi') <div class="error">{{ $message }}</div> @enderror

            <button class="button" type="submit">Simpan Jadwal</button>
            <a class="button cancel" href="{{ route('admin.kajian.index') }}">Batal</a>
        </form>
    </section>
</main>
</body>
</html>
