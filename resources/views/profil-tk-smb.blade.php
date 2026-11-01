<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil TK SMB | Masjid Besar Ciparay</title>

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
        <div class="label">Profil Pendidikan Anak</div>

        <h1>Taman Kanak-Kanak SMB</h1>

        <p>
            Ruang belajar dan bertumbuh bagi anak usia dini melalui
            kegiatan yang mendukung perkembangan karakter, kreativitas,
            kemandirian, dan pengenalan nilai-nilai kebaikan.
        </p>

        <a class="cta" href="#informasi">Kenali TK SMB ↓</a>
    </div>
</section>

<main class="container content" id="informasi">

    <h2>Tentang TK SMB</h2>

    <p style="color:#64778b; margin-top:10px;">
        TK SMB merupakan layanan pendidikan anak usia dini di lingkungan
        Masjid Besar Ciparay. Pendidikan anak usia dini membantu
        mempersiapkan anak untuk berkembang dalam aspek sosial,
        emosional, bahasa, kognitif, fisik, serta nilai agama dan budi
        pekerti melalui kegiatan belajar yang sesuai dengan tahap
        perkembangan mereka.
    </p>

    <div class="grid">

        <article class="card">
            <h3>🧒 Tujuan Pendidikan</h3>
            <p>
                Mendukung tumbuh kembang anak, membangun kebiasaan baik,
                mengembangkan rasa percaya diri, serta menumbuhkan sikap
                mandiri dan peduli terhadap lingkungan.
            </p>
        </article>

        <article class="card">
            <h3>🎨 Kegiatan Pembelajaran</h3>
            <ul>
                <li>Belajar melalui bermain</li>
                <li>Mengenal huruf, angka, dan warna</li>
                <li>Kegiatan seni dan kreativitas</li>
                <li>Pembiasaan doa dan perilaku baik</li>
                <li>Latihan bersosialisasi dan bekerja sama</li>
            </ul>
        </article>

        <article class="card">
            <h3>🌱 Pengembangan Karakter</h3>
            <p>
                Anak didorong untuk belajar berbagi, menjaga kebersihan,
                menghormati orang lain, mengikuti kegiatan bersama,
                dan membiasakan perilaku positif.
            </p>
        </article>

        <article class="card">
            <h3>👨‍👩‍👧 Kerja Sama dengan Orang Tua</h3>
            <p>
                Komunikasi antara orang tua dan pihak sekolah membantu
                mendukung proses belajar, kebiasaan baik, serta
                perkembangan anak di sekolah maupun di rumah.
            </p>
        </article>

    </div>

    <div class="card wide">
        <h3>Informasi Pendaftaran</h3>

        <p>
            Untuk memperoleh informasi mengenai penerimaan peserta didik
            baru, kelompok usia, jadwal belajar, persyaratan, dan biaya
            pendidikan TK SMB, silakan menghubungi pengelola sekolah.
        </p>

        <a class="cta"
           href="https://wa.me/?text={{ urlencode('Assalamu’alaikum, saya ingin bertanya mengenai informasi pendaftaran TK SMB Masjid Besar Ciparay.') }}"
           target="_blank"
           rel="noopener noreferrer">
            Tanya Informasi TK melalui WhatsApp
        </a>
    </div>

</main>

<footer>
    © {{ date('Y') }} Masjid Besar Ciparay
</footer>

</body>
</html>