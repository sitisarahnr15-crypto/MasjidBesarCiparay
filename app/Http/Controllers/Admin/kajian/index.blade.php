
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kelola Kajian - Masjid Besar Ciparay</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f1f6fc;
            color: #243447;
        }

        .container {
            max-width: 1100px;
            margin: 40px auto;
            padding: 24px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 16px;
            flex-wrap: wrap;
            margin-bottom: 24px;
        }

        h1 {
            margin: 0 0 8px;
            color: #174a7e;
        }

        p {
            color: #64748b;
        }

        .btn {
            display: inline-block;
            padding: 11px 16px;
            border: none;
            border-radius: 8px;
            background: #1769aa;
            color: white;
            text-decoration: none;
            cursor: pointer;
            font-size: 14px;
        }

        .btn:hover {
            background: #125487;
        }

        .btn-danger {
            background: #dc3545;
        }

        .btn-secondary {
            background: #64748b;
        }

        .card {
            padding: 22px;
            background: white;
            border-radius: 14px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.05);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            min-width: 700px;
        }

        th, td {
            padding: 14px 12px;
            border-bottom: 1px solid #e5edf5;
            text-align: left;
        }

        th {
            background: #edf5fc;
            color: #174a7e;
        }

        .alert {
            padding: 14px;
            margin-bottom: 20px;
            background: #d1fae5;
            color: #065f46;
            border-radius: 8px;
        }

        .actions {
            display: flex;
            gap: 8px;
            align-items: center;
        }

        .actions form {
            margin: 0;
        }

        .empty {
            padding: 25px;
            text-align: center;
            color: #64748b;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div>
                <h1>Kelola Jadwal Kajian</h1>
                <p>Masjid Besar Ciparay</p>
            </div>

            <a href="{{ route('admin.kajian.create') }}" class="btn">
                + Tambah Kajian
            </a>
        </div>

        @if (session('success'))
            <div class="alert">
                {{ session('success') }}
            </div>
        @endif

        <div class="card">
            <table>
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
                    @forelse ($kajians as $kajian)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kajian->judul }}</td>
                            <td>{{ $kajian->pemateri }}</td>
                            <td>{{ $kajian->tanggal->format('d-m-Y') }}</td>
                            <td>{{ substr($kajian->waktu, 0, 5) }}</td>
                            <td>{{ $kajian->lokasi }}</td>
                            <td>
                                <div class="actions">
                                    <a
                                        href="{{ route('admin.kajian.edit', $kajian->id) }}"
                                        class="btn"
                                    >
                                        Edit
                                    </a>

                                    <form
                                        action="{{ route('admin.kajian.destroy', $kajian->id) }}"
                                        method="POST"
                                        onsubmit="return confirm('Yakin ingin menghapus kajian ini?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="empty">
                                Belum ada jadwal kajian. Silakan tambahkan jadwal baru.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <p>
            <a href="{{ route('admin.dashboard') }}" class="btn btn-secondary">
                Kembali ke Dashboard
            </a>
        </p>
    </div>
</body>
</html>
