
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4f9be8">

    <title>Kegiatan Keislaman | Masjid Besar Ciparay</title>

    <meta name="description"
          content="Informasi kegiatan keislaman Masjid Besar Ciparay.">

    <style>
        :root {
            --navy: #2f6fb5;
            --blue: #4f9be8;
            --soft: #e8f4ff;
            --ink: #203b59;
            --muted: #647b94;
            --line: #dcebf8;
            --page: #f5faff;
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--page);
            color: var(--ink);
            line-height: 1.7;
        }

        a {
            text-decoration: none;
            color: inherit;
        }

        .container {
            width: min(1100px, calc(100% - 36px));
            margin: auto;
        }

        header {
            background: white;
            border-bottom: 1px solid var(--line);
        }

        .nav {
            min-height: 75px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 15px;
        }

        .brand {
            font-weight: 800;
            font-size: 17px;
        }

        .brand small {
            display: block;
            font-size: 12px;
            color: var(--muted);
            font-weight: 500;
        }

        .btn {
            display: inline-block;
            padding: 11px 17px;
            border-radius: 11px;
            background: var(--navy);
            color: white;
            font-weight: 700;
            font-size: 13px;
            border: 1px solid var(--navy);
        }

        .btn:hover {
            background: var(--blue);
        }

        .btn-outline {
            background: white;
            color: var(--navy);
            border-color: var(--line);
        }

        .hero {
            padding: 42px 0 28px;
        }

        .hero-panel {
            padding: clamp(28px, 6vw, 58px);
            border-radius: 26px;
            color: white;
            background:
                linear-gradient(110deg,
                    rgba(35,105,174,.94),
                    rgba(79,155,232,.82)),
                url("{{ asset('images/masjid-besar-ciparay.jpg') }}")
                center/cover;
        }

        .label {
            display: inline-block;
            padding: 6px 12px;
            border: 1px solid rgba(255,255,255,.4);
            border-radius: 30px;
            font-size: 12px;
            font-weight: 700;
        }

        h1 {
            font-size: clamp(30px, 5vw, 46px);
            line-height: 1.2;
            margin: 18px 0 12px;
        }

        .hero p {
            max-width: 650px;
            margin-bottom: 24px;
            color: #f1f8ff;
        }

        section {
            padding: 35px 0;
        }

        .section-heading {
            margin-bottom: 23px;
        }

        .kicker {
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 11px;
            font-weight: 800;
        }

        h2 {
            margin: 5px 0;
            font-size: clamp(25px, 3vw, 33px);
            line-height: 1.3;
        }

        .intro {
            color: var(--muted);
            max-width: 680px;
            font-size: 14px;
        }

        .activity-grid {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 18px;
        }

        .activity-card {
            background: white;
            padding: 24px;
            border: 1px solid var(--line);
            border-radius: 20px;
            box-shadow: 0 10px 28px rgba(79,155,232,.07);
        }

        .activity-icon {
            width: 54px;
            height: 54px;
            display: grid;
            place-items: center;
            border-radius: 16px;
            background: var(--soft);
            font-size: 27px;
            margin-bottom: 15px;
        }

        .activity-card h3 {
            font-size: 18px;
            margin: 0 0 8px;
        }

        .activity-card p {
            font-size: 13px;
            color: var(--muted);
            margin: 0;
        }

        .schedule-panel {
            padding: 27px;
            border: 1px solid var(--line);
            background: white;
            border-radius: 22px;
        }

        .schedule-panel p {
            color: var(--muted);
            font-size: 14px;
        }

        .schedule-actions {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 18px;
        }

        .note {
            margin-top: 18px;
            padding: 15px;
            background: var(--soft);
            border-radius: 12px;
            color: var(--muted);
            font-size: 12px;
        }

        footer {
            margin-top: 35px;
            padding: 23px 0;
            background: #e4f2ff;
            border-top: 1px solid var(--line);
            color: #365a7d;
            font-size: 12px;
        }

        @media (max-width: 760px) {
            .activity-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }

        @media (max-width: 520px) {
            .nav {
                min-height: 68px;
            }

            .brand {
                font-size: 14px;
            }

            .nav .btn {
                padding: 9px 11px;
                font-size: 11px;
            }

            .hero {
                padding-top: 23px;
            }

            .hero-panel {
                border-radius: 20px;
            }

            .activity-grid {
                grid-template-columns: 1fr;
            }

            .schedule-panel {
                padding: 21px;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container nav">
        <a class="brand" href="{{ url('/website-resmi') }}">
            Masjid Besar Ciparay
            <small>Kegiatan Keislaman</small>
        </a>

        <a class="btn btn-outline"
           href="{{ url('/website-resmi') }}">
            ← Kembali
        </a>
    </div>
</header>

<main>

    <!-- HERO -->
    <div class="container hero">
        <div class="hero-panel">
            <span class="label">🕌 Dakwah dan Pembinaan Umat</span>

            <h1>Kegiatan Keislaman</h1>

            <p>
                Masjid Besar Ciparay menjadi ruang untuk memperdalam
                ilmu agama, mempererat silaturahmi, dan menumbuhkan
                semangat beribadah melalui berbagai kegiatan keislaman.
            </p>

            <a class="btn"
               style="background:white;color:#2f6fb5;border-color:white"
               href="{{ route('jadwal.kajian') }}">
                Lihat Jadwal Kajian →
            </a>
        </div>
    </div>

    <!-- JENIS KEGIATAN -->
    <section>
        <div class="container">
            <div class="section-heading">
                <div class="kicker">Aktivitas Masjid</div>
                <h2>Kegiatan untuk Jamaah</h2>
                <p class="intro">
                    Informasi mengenai kegiatan keislaman yang dapat
                    menjadi sarana belajar, beribadah, dan mempererat
                    hubungan antarjamaah.
                </p>
            </div>

            <div class="activity-grid">

                <article class="activity-card">
                    <div class="activity-icon">📖</div>
                    <h3>Kajian Islam</h3>
                    <p>
                        Sarana menambah wawasan keislaman melalui
                        pembahasan Al-Qur'an, hadis, akhlak, dan
                        kehidupan sehari-hari.
                    </p>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">🤲</div>
                    <h3>Pengajian Jamaah</h3>
                    <p>
                        Kegiatan untuk memperdalam ilmu agama,
                        mempererat ukhuwah, dan meningkatkan
                        kebersamaan di lingkungan masjid.
                    </p>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">🕋</div>
                    <h3>Pembinaan Ibadah</h3>
                    <p>
                        Informasi pembelajaran dan bimbingan ibadah
                        bagi jamaah sesuai program yang diselenggarakan
                        oleh pengurus masjid.
                    </p>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">🌙</div>
                    <h3>Kegiatan Ramadan</h3>
                    <p>
                        Informasi kegiatan keagamaan Ramadan,
                        seperti tausiah, tadarus, dan aktivitas
                        ibadah sesuai agenda masjid.
                    </p>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">🎤</div>
                    <h3>Peringatan Hari Besar Islam</h3>
                    <p>
                        Informasi kegiatan peringatan hari besar Islam
                        sebagai sarana memperkuat keimanan dan
                        kebersamaan masyarakat.
                    </p>
                </article>

                <article class="activity-card">
                    <div class="activity-icon">❤️</div>
                    <h3>Kegiatan Sosial Keagamaan</h3>
                    <p>
                        Informasi kegiatan sosial yang mendorong
                        kepedulian, gotong royong, dan semangat
                        berbagi di lingkungan masyarakat.
                    </p>
                </article>

            </div>
        </div>
    </section>

    <!-- JADWAL KAJIAN -->
    <section>
        <div class="container">
            <div class="schedule-panel">
                <div class="kicker">Agenda Kegiatan</div>
                <h2>Jadwal Kajian Masjid</h2>

                <p>
                    Ingin mengetahui tanggal, waktu, pemateri,
                    dan lokasi kajian? Buka halaman jadwal kajian
                    untuk melihat informasi agenda yang dikelola
                    melalui website resmi Masjid Besar Ciparay.
                </p>

                <div class="schedule-actions">
                    <a class="btn" href="{{ route('jadwal.kajian') }}">
                        Buka Jadwal Kajian →
                    </a>

                    <a class="btn btn-outline"
                       href="{{ url('/website-resmi') }}#kontak">
                        Hubungi Pengurus
                    </a>
                </div>

                <div class="note">
                    Catatan: Jenis kegiatan di atas merupakan informasi
                    umum. Jadwal, pelaksanaan, dan ketersediaan setiap
                    kegiatan perlu dikonfirmasi kepada pengurus masjid.
                </div>
            </div>
        </div>
    </section>

</main>

<footer>
    <div class="container">
        © {{ date('Y') }} Masjid Besar Ciparay.
        Website resmi informasi dan layanan masjid.
    </div>
</footer>

</body>
</html>
