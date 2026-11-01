<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Jadwal Kajian | Masjid Besar Ciparay</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f2f7fc;
            color: #365d80;
            padding: 30px 16px;
        }

        .container {
            max-width: 1100px;
            margin: auto;
        }

        .back {
            display: inline-block;
            margin-bottom: 20px;
            color: #5288b5;
            text-decoration: none;
            font-size: 13px;
        }

        .header {
            background: linear-gradient(120deg, #9fd2f7, #78b9eb);
            color: white;
            padding: 28px;
            border-radius: 20px;
            margin-bottom: 22px;
        }

        .header h1 {
            font-size: 24px;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 12px;
            line-height: 1.8;
        }

        .panel {
            background: white;
            border: 1px solid #dfedfa;
            border-radius: 18px;
            padding: 24px;
            overflow-x: auto;
        }

        .top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
            margin-bottom: 22px;
            flex-wrap: wrap;
        }

        .top h2 {
            font-size: 18px;
            color: #386b99;
        }

        .button {
            display: inline-block;
            border: none;
            padding: 11px 16px;
            border-radius: 10px;
            background: #78b9eb;
            color: white;
            text-decoration: none;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        .button:hover {
            background: #5288b5;
        }

        .success {
            padding: 13px 15px;
            border-radius: 10px;
            background: #eaf8ef;
            color: #267344;
            font-size: 12px;
            margin-bottom: 18px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            min-width: 750px;
        }

        .table th,
        .table td {
            padding: 14px 12px;
            border-bottom: 1px solid #e8f0f8;
            text-align: left;
            font-size: 12px;
        }

        .table th {
            background: #f0f8ff;
            color: #386b99;
        }

        .table td {
            color: #6485a3;
        }

        .action {
            display: flex;
            gap: 7px;
            align-items: center;
        }

        .edit {
            background: #eaf5ff;
            color: #386b99;
        }

        .delete {
            background: #fff0f0;
            color: #b84747;
        }

        .empty {
            padding: 25px;
            text-align: center;
            color: #849bb0;
            font-size: 13px;
            line-height: 2;
        }

        @media (max-width: 600px) {
            body {
                padding: 18px 10px;
            }

            .header {
                padding: 22px;
            }

            .header h1 {
                font-size: 20px;
            }

            .panel {
                padding: 16px;
            }
        }
    </style>
</head>

<body>
<main class="container">

    <a href="{{ route('admin.dashboard') }}" class="back">
        ← Kembali ke Dashboard
    </a>

    <header class="header">
        <h1>📖 Kelola Jadwal Kajian</h1>
        <p>
            Masjid Besar Ciparay<br>
            Tambah, lihat, dan kelola informasi jadwal kajian masjid.
        </p>
    </header>

    <section class="panel">
        <div class="top">
            <h2>Daftar Agenda Kajian</h2>

            <a href="{{ route('admin.kajian.create') }}" class="button">
                + Tambah Jadwal
            </a>
        </div>

        @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif

        @if ($kajians->isEmpty())
            <div class="empty">
                📚<br>
                <strong>Belum ada jadwal kajian.</strong><br>
                Klik tombol Tambah Jadwal untuk memasukkan agenda pertama.
            </div>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Judul Kajian</th>
                        <th>Pemateri</th>
                        <th>Tanggal</th>
                        <th>Waktu</th>
                        <th>Lokasi</th>
                        <th>Aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($kajians as $kajian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kajian->judul }}</td>
                            <td>{{ $kajian->pemateri }}</td>
                            <td>{{ $kajian->tanggal->format('d-m-Y') }}</td>
                            <td>{{ substr($kajian->waktu, 0, 5) }}</td>
                            <td>{{ $kajian->lokasi }}</td>

                            <td>
                                <div class="action">
                                    <a href="{{ route('admin.kajian.edit', $kajian->id) }}"
                                       class="button edit">
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.kajian.destroy', $kajian->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus jadwal ini?')">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="button delete">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </section>

</main>
</body>
</html>
