
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Admin | Masjid Besar Ciparay</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet">

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
        }

        .sidebar {
            position: fixed;
            inset: 0 auto 0 0;
            width: 245px;
            padding: 28px 18px;
            background: #fff;
            border-right: 1px solid #dfedfa;
        }

        .brand {
            font-size: 17px;
            font-weight: 800;
            color: #386b99;
            line-height: 1.6;
            margin-bottom: 35px;
        }

        .brand small {
            display: block;
            font-size: 10px;
            font-weight: 400;
            color: #91a7bb;
        }

        .menu-label {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #91a7bb;
            margin-bottom: 12px;
        }

        .menu {
            display: block;
            padding: 13px 14px;
            margin-bottom: 8px;
            border-radius: 12px;
            text-decoration: none;
            color: #6485a3;
            font-size: 12px;
            transition: .2s ease;
        }

        .menu.active,
        .menu:hover {
            background: #eaf5ff;
            color: #386b99;
        }

        .content {
            margin-left: 245px;
            padding: 35px;
        }

        .header {
            margin-bottom: 30px;
        }

        .header h1 {
            font-size: 25px;
            color: #386b99;
            margin-bottom: 8px;
        }

        .header p {
            font-size: 12px;
            color: #849bb0;
        }

        .welcome {
            background: linear-gradient(120deg, #9fd2f7, #78b9eb);
            color: white;
            border-radius: 20px;
            padding: 28px;
            margin-bottom: 25px;
        }

        .welcome h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .welcome p {
            font-size: 12px;
            line-height: 1.9;
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 18px;
        }

        .card {
            padding: 23px;
            border: 1px solid #dfedfa;
            border-radius: 18px;
            background: white;
            transition: .2s ease;
        }

        .card:hover {
            border-color: #a7d2f5;
            box-shadow: 0 8px 24px rgba(94, 156, 210, .08);
        }

        .card .icon {
            font-size: 27px;
            margin-bottom: 15px;
        }

        .card h3 {
            color: #386b99;
            font-size: 15px;
            margin-bottom: 8px;
        }

        .card p {
            color: #849bb0;
            font-size: 11px;
            line-height: 1.8;
            margin-bottom: 17px;
        }

        .button {
            display: inline-block;
            padding: 10px 15px;
            background: #eaf5ff;
            border-radius: 10px;
            color: #386b99;
            font-size: 11px;
            font-weight: 700;
            text-decoration: none;
            transition: .2s ease;
        }

        .button:hover {
            background: #d5eaff;
            transform: translateY(-1px);
        }

        .note {
            margin-top: 22px;
            padding: 16px;
            background: #fff;
            border: 1px solid #dfedfa;
            border-radius: 14px;
            color: #849bb0;
            font-size: 11px;
            line-height: 1.9;
        }

        @media (max-width: 700px) {
            .sidebar {
                position: static;
                width: 100%;
                border-right: 0;
                border-bottom: 1px solid #dfedfa;
            }

            .content {
                margin-left: 0;
                padding: 22px 16px;
            }

            .cards {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<aside class="sidebar">
    <div class="brand">
        🕌 Masjid Besar Ciparay
        <small>Panel Administrasi Website</small>
    </div>

    <div class="menu-label">MENU UTAMA</div>

    <a href="{{ route('admin.dashboard') }}" class="menu active">
        🏠 Dashboard
    </a>

    <a href="{{ route('admin.artikel.index') }}" class="menu">
        📝 Artikel & Berita
    </a>

    <a href="{{ route('admin.kajian.index') }}" class="menu">
        📖 Jadwal Kajian
    </a>

    <a href="{{ url('/') }}" class="menu">
        🌐 Lihat Website
    </a>
</aside>

<main class="content">

    <header class="header">
        <h1>Dashboard Admin</h1>
        <p>Kelola informasi dan konten Masjid Besar Ciparay.</p>
    </header>

    <section class="welcome">
        <h2>Assalamu'alaikum 👋</h2>
        <p>
            Selamat datang di panel pengelolaan website Masjid Besar
            Ciparay. Kamu dapat mengelola artikel, berita, dan jadwal
            kajian melalui halaman administrasi.
        </p>
    </section>

    <section class="cards">

        <div class="card">
            <div class="icon">📝</div>
            <h3>Artikel & Berita</h3>
            <p>
                Tambahkan artikel, unggah foto kegiatan, edit berita,
                dan publikasikan informasi Masjid Besar Ciparay.
            </p>

            <a href="{{ route('admin.artikel.index') }}" class="button">
                Kelola Artikel →
            </a>
        </div>

        <div class="card">
            <div class="icon">📖</div>
            <h3>Jadwal Kajian</h3>
            <p>
                Kelola tema kajian, nama pemateri, tanggal, waktu,
                lokasi, dan informasi kegiatan.
            </p>

            <a href="{{ route('admin.kajian.index') }}" class="button">
                Kelola Jadwal →
            </a>
        </div>

    </section>

    <div class="note">
        ℹ️ Dashboard administrasi website Masjid Besar Ciparay.
        Artikel dan jadwal kajian dikelola melalui halaman admin
        dan dapat ditampilkan pada website publik setelah integrasi
        halaman publik selesai.
    </div>

</main>

</body>
</html>
