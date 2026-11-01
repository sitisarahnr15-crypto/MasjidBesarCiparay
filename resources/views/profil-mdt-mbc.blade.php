<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil MDT MBC | Masjid Besar Ciparay</title>

    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: #18324b;
            background: #f5f9ff;
            line-height: 1.8;
        }

        a {
            text-decoration: none;
        }

        .container {
            width: min(1050px, calc(100% - 36px));
            margin: auto;
        }

        header {
            background: white;
            border-bottom: 1px solid #e3edf6;
            padding: 18px 0;
        }

        .nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .brand {
            font-weight: 800;
            color: #18324b;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .back {
            color: #2878c7;
            font-size: 13px;
            font-weight: 700;
        }

        .hero {
            padding: 65px 0;
            background: linear-gradient(135deg, #e4f1ff, #ffffff);
        }

        .label {
            color: #2878c7;
            font-weight: 800;
            font-size: 12px;
            letter-spacing: 1.5px;
            text-transform: uppercase;
        }

        h1, h2, h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            line-height: 1.4;
        }

        h1 {
            font-size: clamp(30px, 5vw, 43px);
            margin: 12px 0;
        }

        .hero p {
            max-width: 700px;
            color: #64778b;
        }

        .content {
            padding: 45px 0 70px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 20px;
            margin-top: 25px;
        }

        .card {
            background: white;
            padding: 25px;
            border: 1px solid #e3edf6;
            border-radius: 18px;
        }

        .card h3 {
            font-size: 17px;
            margin-bottom: 10px;
        }

        .card p, .card li {
            color: #64778b;
            font-size: 14px;
        }

        .card ul {
            padding-left: 20px;
        }

        .wide {
            margin-top: 20px;
        }

        .cta {
            display: inline-block;
            margin-top: 20px;
            padding: 12px 18px;
            border-radius: 11px;
            background: #2878c7;
            color: white;
            font-weight: 700;
            font-size: 13px;
        }

        footer {
            background: #102e49;
            color: white;
            padding: 22px;
            text-align: center;
            font-size: 12px;
        }

        @media (max-width: 650px) {
            .grid {
                grid-template-columns: 1fr;
            }

            .hero {
                padding: 45px 0;
            }
        }
    </style>
</head>

<body>

<header>
    <div class="container nav">
        <a class="brand" href="{{ url('/website-resmi') }}">
            🕌 Masjid Besar Ciparay
        </a>

        <a class="back" href="{{ url('/website-resmi') }}#pendidikan">
            ← Kembali
        </a>
    </div>
</header>

<section class="hero">
    <div class="container">
        <div class="label">Profil Pendidikan Islam</div>

        <h1>Madrasah Diniyah Takmiliyah MBC</h1>

        <p>
            Wadah pendidikan keagamaan untuk membantu santri mengenal,
            memahami, dan mengamalkan ajaran Islam dalam kehidupan
            sehari-hari.
        </p>

        <a class="cta" href="#informasi">Kenali MDT MBC ↓</a>
    </div>
</section>

<main class="container content" id="informasi">

    <h2>Tentang MDT MBC</h2>

    <p style="color:#64778b; margin-top:10px;">
        Madrasah Diniyah Takmiliyah Masjid Besar Ciparay merupakan bagian
        dari kegiatan pendidikan Islam di lingkungan masjid. Kegiatan
        pembelajaran diarahkan untuk mendukung perkembangan pengetahuan
        agama, pembiasaan ibadah, dan pembentukan akhlak santri.
    </p>

    <div class="grid">

        <article class="card">
            <h3>📚 Tujuan Pendidikan</h3>
            <p>
                Mendukung santri agar semakin mengenal ajaran Islam,
                memahami dasar-dasar ibadah, serta membiasakan perilaku
                yang baik dalam kehidupan sehari-hari.
            </p>
        </article>

        <article class="card">
            <h3>📖 Materi Pembelajaran</h3>
            <ul>
                <li>Pembelajaran membaca Al-Qur'an</li>
                <li>Dasar-dasar ibadah dan fikih</li>
                <li>Akidah dan akhlak</li>
                <li>Doa harian dan praktik keagamaan</li>
            </ul>
            <p style="margin-top:10px;">
                Materi disesuaikan dengan kurikulum dan program
                pembelajaran madrasah.
            </p>
        </article>

        <article class="card">
            <h3>🧑‍🏫 Kegiatan Santri</h3>
            <p>
                Kegiatan belajar bersama guru, latihan membaca Al-Qur'an,
                pembiasaan doa, praktik ibadah, dan aktivitas pembinaan
                karakter sesuai program madrasah.
            </p>
        </article>

        <article class="card">
            <h3>🤝 Peran Orang Tua</h3>
            <p>
                Orang tua dapat mendukung proses belajar santri melalui
                pendampingan di rumah, pembiasaan ibadah, serta komunikasi
                dengan pihak madrasah mengenai perkembangan belajar.
            </p>
        </article>

    </div>

    <div class="card wide">
        <h3>Informasi Pendaftaran dan Administrasi</h3>

        <p>
            Untuk memperoleh informasi mengenai pendaftaran santri baru,
            jadwal belajar, biaya pendidikan, dan persyaratan administrasi,
            silakan menghubungi pengurus atau pengelola MDT MBC.
        </p>

        <a class="cta"
           href="https://wa.me/?text={{ urlencode('Assalamu’alaikum, saya ingin bertanya mengenai informasi MDT Masjid Besar Ciparay.') }}"
           target="_blank"
           rel="noopener noreferrer">
            Tanya Informasi MDT melalui WhatsApp
        </a>
    </div>

</main>

<footer>
    © {{ date('Y') }} Masjid Besar Ciparay
</footer>

</body>
</html>