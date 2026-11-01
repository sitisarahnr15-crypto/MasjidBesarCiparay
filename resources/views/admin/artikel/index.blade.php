
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4f9be8">
    <title>Kelola Artikel | Masjid Besar Ciparay</title>

    <style>
        :root {
            --navy: #2f6fb5;
            --blue: #4f9be8;
            --blue-soft: #e8f4ff;
            --ink: #203b59;
            --muted: #647b94;
            --line: #dcebf8;
            --white: #fff;
            --page: #f5faff;
            --red: #d84b55;
            --radius: 22px;
            --shadow: 0 12px 34px rgba(79,155,232,.10);
        }

        * {
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            margin: 0;
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            color: var(--ink);
            background: var(--page);
            line-height: 1.65;
        }

        a {
            color: inherit;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
        }

        button, select {
            font: inherit;
        }

        /* LAYOUT */
        .layout {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 245px minmax(0, 1fr);
        }

        /* MENU UTAMA */
        .sidebar {
            position: sticky;
            top: 0;
            height: 100vh;
            overflow-y: auto;
            background: rgba(255,255,255,.97);
            border-right: 1px solid var(--line);
            padding: 27px 17px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 0 8px 25px;
            border-bottom: 1px solid var(--line);
        }

        .brand-icon {
            display: grid;
            place-items: center;
            flex: 0 0 45px;
            width: 45px;
            height: 45px;
            overflow: hidden;
            border-radius: 15px;
            background: linear-gradient(145deg, #8ccaff, #4f9be8);
            color: white;
            font-size: 23px;
        }

        .brand strong {
            display: block;
            font-size: 13px;
            line-height: 1.4;
        }

        .brand small {
            display: block;
            margin-top: 3px;
            color: var(--muted);
            font-size: 11px;
        }

        .menu-label {
            margin: 25px 10px 10px;
            color: #8299b1;
            font-size: 10px;
            font-weight: 850;
            letter-spacing: 1.4px;
        }

        .menu-link {
            display: block;
            margin: 5px 0;
            padding: 12px 13px;
            border-radius: 12px;
            color: #415a74;
            font-size: 13px;
            font-weight: 700;
            transition: .2s ease;
        }

        .menu-link:hover,
        .menu-link.active {
            background: var(--blue-soft);
            color: var(--navy);
        }

        .menu-link.active {
            box-shadow: inset 3px 0 0 var(--blue);
        }

        /* KONTEN UTAMA */
        .main {
            width: 100%;
            min-width: 0;
            max-width: 1500px;
            margin: 0 auto;
            padding: 30px clamp(20px, 3vw, 42px);
        }

        .topline {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            margin-bottom: 35px;
        }

        .topline small {
            color: var(--muted);
            font-size: 12px;
        }

        .user-label {
            padding: 9px 14px;
            border: 1px solid var(--line);
            border-radius: 12px;
            background: white;
            font-size: 12px;
            font-weight: 700;
        }

        .eyebrow {
            color: var(--blue);
            font-size: 11px;
            font-weight: 850;
            letter-spacing: 1.6px;
            text-transform: uppercase;
        }

        h1 {
            margin: 7px 0 10px;
            font-size: clamp(27px, 3vw, 36px);
            line-height: 1.2;
            letter-spacing: -.8px;
        }

        .intro {
            max-width: 650px;
            margin: 0;
            color: var(--muted);
            font-size: 14px;
        }

        /* TOMBOL */
        .button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 17px;
            border: 1px solid var(--navy);
            border-radius: 12px;
            background: var(--navy);
            color: white;
            font-size: 13px;
            font-weight: 750;
            cursor: pointer;
            transition: .2s ease;
        }

        .button:hover {
            transform: translateY(-1px);
            border-color: var(--blue);
            background: var(--blue);
        }

        .button-light {
            border-color: #cdddf0;
            background: white;
            color: var(--navy);
        }

        .button-light:hover {
            border-color: var(--blue);
            background: var(--blue);
            color: white;
        }

        .button-danger {
            border-color: #f4d1d1;
            background: #fff0f0;
            color: var(--red);
        }

        .button-danger:hover {
            border-color: var(--red);
            background: var(--red);
            color: white;
        }

        .page-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 9px;
        }

        /* ALERT */
        .alert {
            margin: 22px 0;
            padding: 14px 17px;
            border-radius: 14px;
            font-size: 13px;
        }

        .alert-success {
            border: 1px solid #c6ecd8;
            background: #e9f9f0;
            color: #176b47;
        }

        .alert-error {
            border: 1px solid #f4d1d1;
            background: #fff0f0;
            color: #9c343b;
        }

        /* STATISTIK */
        .stats {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 17px;
            margin: 30px 0;
        }

        .stat {
            display: flex;
            align-items: center;
            gap: 15px;
            min-width: 0;
            padding: 22px;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: white;
            box-shadow: var(--shadow);
        }

        .stat-icon {
            display: grid;
            place-items: center;
            flex: 0 0 47px;
            width: 47px;
            height: 47px;
            border-radius: 15px;
            background: var(--blue-soft);
            color: var(--navy);
            font-size: 22px;
        }

        .stat strong {
            display: block;
            font-size: 26px;
            line-height: 1.3;
        }

        .stat small {
            color: var(--muted);
            font-size: 12px;
        }

        /* PANEL ARTIKEL */
        .panel {
            overflow: hidden;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            background: white;
            box-shadow: var(--shadow);
        }

        .panel-head {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
            padding: 22px 24px;
            border-bottom: 1px solid var(--line);
        }

        .panel-head h2 {
            margin: 0;
            font-size: 19px;
            line-height: 1.4;
        }

        .panel-head p {
            margin: 5px 0 0;
            color: var(--muted);
            font-size: 12px;
        }

        .filter {
            display: flex;
            gap: 9px;
        }

        .filter select {
            min-width: 145px;
            padding: 10px 12px;
            outline-color: var(--blue);
            border: 1px solid var(--line);
            border-radius: 12px;
            background: white;
            color: var(--ink);
        }

        .table-wrap {
            width: 100%;
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 16px 19px;
            border-bottom: 1px solid #edf3fa;
            text-align: left;
            vertical-align: middle;
            font-size: 12px;
        }

        th {
            background: #f5faff;
            color: var(--muted);
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: .8px;
            white-space: nowrap;
        }

        tbody tr:last-child td {
            border-bottom: 0;
        }

        tbody tr:hover {
            background: #f8fbff;
        }

        .article-title {
            min-width: 180px;
        }

        .article-title strong {
            display: block;
            margin-bottom: 5px;
            font-size: 13px;
        }

        .article-title small {
            color: var(--muted);
            overflow-wrap: anywhere;
        }

        .status {
            display: inline-block;
            padding: 5px 10px;
            border-radius: 9px;
            font-size: 10px;
            font-weight: 800;
        }

        .published {
            background: #e7f8ef;
            color: #188252;
        }

        .draft {
            background: #fff4dc;
            color: #9b6a0b;
        }

        .actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 7px;
        }

        .actions .button {
            padding: 9px 11px;
            font-size: 11px;
        }

        .delete-form {
            display: inline;
            margin: 0;
        }

        /* KONDISI KOSONG */
        .empty {
            padding: 55px 20px;
            text-align: center;
            color: var(--muted);
        }

        .empty-icon {
            margin-bottom: 10px;
            font-size: 40px;
        }

        .empty h3 {
            margin: 0 0 8px;
            color: var(--ink);
        }

        .empty p {
            margin: 0 0 20px;
            font-size: 13px;
        }

        .bottom-note {
            padding: 25px 0 5px;
            color: var(--muted);
            font-size: 11px;
        }

        /* RESPONSIF */
        @media (max-width: 1000px) {
            .layout {
                grid-template-columns: 210px minmax(0, 1fr);
            }

            .main {
                padding: 25px 20px;
            }

            .stats {
                gap: 10px;
            }

            .stat {
                padding: 16px;
            }
        }

        @media (max-width: 720px) {
            .layout {
                grid-template-columns: 1fr;
            }

            .sidebar {
                position: relative;
                height: auto;
                overflow: visible;
                padding: 16px;
                border-right: 0;
                border-bottom: 1px solid var(--line);
            }

            .brand {
                padding-bottom: 15px;
            }

            .menu-label {
                margin-top: 17px;
            }

            .main {
                padding: 24px 13px;
            }

            .topline {
                margin-bottom: 25px;
            }

            .stats {
                grid-template-columns: 1fr;
            }

            .stat {
                padding: 17px;
            }

            .panel-head {
                align-items: flex-start;
                flex-direction: column;
                padding: 18px;
            }

            .filter {
                width: 100%;
            }

            .filter select {
                flex: 1;
                min-width: 0;
            }

            .page-actions,
            .page-actions .button {
                width: 100%;
            }

            th, td {
                padding: 13px 14px;
            }
        }
    </style>
</head>

<body>
<div class="layout">

    <aside class="sidebar">
        <div class="brand">
            <div class="brand-icon">🕌</div>
            <div>
                <strong>Masjid Besar Ciparay</strong>
                <small>Website Administration</small>
            </div>
        </div>

        <div class="menu-label">MENU UTAMA</div>

        <a class="menu-link" href="{{ route('admin.dashboard') }}">
            ⌂ Dashboard
        </a>

        <a class="menu-link active" href="{{ route('admin.artikel.index') }}">
            ▤ Artikel &amp; Berita
        </a>

        <a class="menu-link" href="{{ route('admin.kajian.index') }}">
            ◷ Jadwal Kajian
        </a>

        <div class="menu-label">WEBSITE</div>

        <a class="menu-link" href="{{ url('/website-resmi') }}" target="_blank" rel="noopener">
            ↗ Lihat Website
        </a>
    </aside>

    <main class="main">

        <div class="topline">
            <small>Administrasi / Artikel</small>
            <div class="user-label">✦ Panel Admin</div>
        </div>

        <div class="page-heading">
            <div class="eyebrow">Pusat Konten</div>
            <h1>Artikel &amp; Berita</h1>
            <p class="intro">
                Kelola berita, informasi kegiatan, dan publikasi Masjid Besar Ciparay.
            </p>
        </div>

        @if (session('success'))
            <div class="alert alert-success">
                ✓ {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-error">
                Ada data yang belum valid. Silakan periksa kembali formulir artikel.
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        @php
            $totalArtikel = $artikels->count();
            $totalTerbit = $artikels->where('status', 'published')->count();
            $totalDraft = $totalArtikel - $totalTerbit;
        @endphp

        <div class="stats">
            <div class="stat">
                <div class="stat-icon">▤</div>
                <div>
                    <strong>{{ $totalArtikel }}</strong>
                    <small>Total Artikel</small>
                </div>
            </div>

            <div class="stat">
                <div class="stat-icon">↗</div>
                <div>
                    <strong>{{ $totalTerbit }}</strong>
                    <small>Artikel Terbit</small>
                </div>
            </div>

            <div class="stat">
                <div class="stat-icon">✎</div>
                <div>
                    <strong>{{ $totalDraft }}</strong>
                    <small>Artikel Draft</small>
                </div>
            </div>
        </div>

        <section class="panel">

            <div class="panel-head">
                <div>
                    <h2>Daftar Artikel</h2>
                    <p>Semua artikel yang tersimpan di sistem.</p>
                </div>

                <div class="page-actions">
                    <a class="button" href="{{ route('admin.artikel.create') }}">
                        ＋ Tambah Artikel
                    </a>
                </div>
            </div>

            @if ($artikels->isEmpty())

                <div class="empty">
                    <div class="empty-icon">📝</div>
                    <h3>Belum Ada Artikel</h3>
                    <p>
                        Mulai isi website masjid dengan berita dan informasi kegiatan.
                    </p>
                    <a class="button" href="{{ route('admin.artikel.create') }}">
                        ＋ Buat Artikel Pertama
                    </a>
                </div>

            @else

                <div class="panel-head">
                    <div>
                        <strong>Artikel tersimpan</strong>
                        <p>Gunakan pilihan status untuk menyaring daftar.</p>
                    </div>

                    <div class="filter">
                        <select id="filterStatus" aria-label="Filter status artikel">
                            <option value="semua">Semua Status</option>
                            <option value="published">Terbit</option>
                            <option value="draft">Draft</option>
                        </select>
                    </div>
                </div>

                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Artikel</th>
                                <th>Kategori</th>
                                <th>Status</th>
                                <th>Tanggal Publikasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($artikels as $artikel)
                                <tr data-status="{{ $artikel->status }}">

                                    <td class="article-title">
                                        <strong>{{ $artikel->judul }}</strong>
                                        <small>{{ $artikel->slug }}</small>
                                    </td>

                                    <td>
                                        {{ $artikel->kategori ?: 'Umum' }}
                                    </td>

                                    <td>
                                        @if ($artikel->status === 'published')
                                            <span class="status published">Terbit</span>
                                        @else
                                            <span class="status draft">Draft</span>
                                        @endif
                                    </td>

                                    <td>
                                        @if ($artikel->tanggal_publikasi)
                                            {{ \Illuminate\Support\Carbon::parse($artikel->tanggal_publikasi)->format('d M Y') }}
                                        @else
                                            Belum ditentukan
                                        @endif
                                    </td>

                                    <td>
                                        <div class="actions">

                                            <a class="button button-light"
                                               href="{{ route('admin.artikel.edit', $artikel) }}">
                                                ✎ Edit
                                            </a>

                                            <form class="delete-form"
                                                  action="{{ route('admin.artikel.destroy', $artikel) }}"
                                                  method="POST"
                                                  onsubmit="return confirm('Yakin ingin menghapus artikel ini?')">

                                                @csrf
                                                @method('DELETE')

                                                <button class="button button-danger" type="submit">
                                                    Hapus
                                                </button>
                                            </form>

                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div style="padding: 16px 20px; border-top: 1px solid #edf3fa;">
                    <small style="color: #647b94;">
                        Menampilkan {{ $totalArtikel }} artikel.
                    </small>
                </div>

            @endif

        </section>

        <div class="bottom-note">
            © {{ date('Y') }} Masjid Besar Ciparay · Panel Administrasi
        </div>

    </main>
</div>

<script>
    const filterStatus = document.getElementById('filterStatus');

    if (filterStatus) {
        filterStatus.addEventListener('change', function () {
            const selected = this.value;

            document.querySelectorAll('tbody tr[data-status]').forEach(function (row) {
                row.style.display =
                    selected === 'semua' || row.dataset.status === selected
                        ? ''
                        : 'none';
            });
        });
    }
</script>

</body>
</html>
