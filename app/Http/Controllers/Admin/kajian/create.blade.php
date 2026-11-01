
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Kajian - Masjid Besar Ciparay</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 24px;
            font-family: Arial, sans-serif;
            background: #f1f6fc;
            color: #243447;
        }

        .container {
            max-width: 700px;
            margin: 30px auto;
        }

        .card {
            background: white;
            padding: 28px;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
        }

        h1 {
            color: #174a7e;
            margin-top: 0;
        }

        label {
            display: block;
            margin: 18px 0 8px;
            font-weight: bold;
        }

        input, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            font-size: 15px;
            font-family: inherit;
        }

        textarea {
            min-height: 110px;
            resize: vertical;
        }

        .error {
            color: #dc3545;
            font-size: 13px;
            margin-top: 5px;
        }

        .btn {
            display: inline-block;
            margin-top: 22px;
            padding: 12px 18px;
            border: none;
            border-radius: 8px;
            background: #1769aa;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn-back {
            background: #64748b;
            margin-left: 8px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="card">
            <h1>Tambah Jadwal Kajian</h1>
            <p>Masjid Besar Ciparay</p>

            <form action="{{ route('admin.kajian.store') }}" method="POST">
                @csrf

                <label for="judul">Judul Kajian</label>
                <input
                    type="text"
                    id="judul"
                    name="judul"
                    value="{{ old('judul') }}"
                    required
                >
                @error('judul')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="pemateri">Nama Pemateri</label>
                <input
                    type="text"
                    id="pemateri"
                    name="pemateri"
                    value="{{ old('pemateri') }}"
                    required
                >
                @error('pemateri')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="tanggal">Tanggal Kajian</label>
                <input
                    type="date"
                    id="tanggal"
                    name="tanggal"
                    value="{{ old('tanggal') }}"
                    required
                >
                @error('tanggal')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="waktu">Waktu Kajian</label>
                <input
                    type="time"
                    id="waktu"
                    name="waktu"
                    value="{{ old('waktu') }}"
                    required
                >
                @error('waktu')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="lokasi">Lokasi</label>
                <input
                    type="text"
                    id="lokasi"
                    name="lokasi"
                    value="{{ old('lokasi', 'Masjid Besar Ciparay') }}"
                    required
                >
                @error('lokasi')
                    <div class="error">{{ $message }}</div>
                @enderror

                <label for="deskripsi">Deskripsi (Opsional)</label>
                <textarea
                    id="deskripsi"
                    name="deskripsi"
                >{{ old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="error">{{ $message }}</div>
                @enderror

                <button type="submit" class="btn">
                    Simpan Kajian
                </button>

                <a href="{{ route('admin.kajian.index') }}" class="btn btn-back">
                    Kembali
                </a>
            </form>
        </div>
    </div>
</body>
</html>
