
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kantin Masjid | Masjid Besar Ciparay</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: #f5faff;
            color: #203b59;
            line-height: 1.7;
        }

        .navbar {
            background: white;
            padding: 18px 7%;
            border-bottom: 1px solid #dcebf8;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 15px;
        }

        .brand {
            font-size: 17px;
            font-weight: 800;
            color: #2f6fb5;
        }

        .back {
            text-decoration: none;
            color: #2f6fb5;
            font-size: 14px;
            font-weight: 700;
        }

        .container {
            width: min(1050px, 90%);
            margin: auto;
        }

        .hero {
            margin-top: 35px;
            min-height: 320px;
            padding: 55px 45px;
            border-radius: 25px;
            background: linear-gradient(120deg, #2f6fb5, #8ccaff);
            color: white;
            display: flex;
            align-items: center;
        }

        .hero-content {
            max-width: 650px;
        }

        .label {
            display: inline-block;
            background: rgba(255,255,255,.18);
            border: 1px solid rgba(255,255,255,.4);
            padding: 6px 13px;
            border-radius: 30px;
            font-size: 12px;
        }

        h1 {
            font-size: clamp(32px, 5vw, 48px);
            line-height: 1.2;
            margin: 18px 0 12px;
        }

        .hero p {
            font-size: 15px;
            max-width: 570px;
            color: #f4faff;
        }

        .section {
            padding: 45px 0;
        }

        .section h2 {
            font-size: 27px;
            margin-bottom: 10px;
        }

        .intro {
            color: #647b94;
            max-width: 750px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 18px;
            margin-top: 25px;
        }

        .card {
            padding: 25px;
            background: white;
            border: 1px solid #dcebf8;
            border-radius: 20px;
            box-shadow: 0 10px 28px rgba(79,155,232,.08);
        }

        .icon {
            width: 52px;
            height: 52px;
            border-radius: 15px;
            display: grid;
            place-items: center;
            font-size: 25px;
            background: #e8f4ff;
            margin-bottom: 15px;
        }

        .card h3 {
            margin: 0 0 8px;
            font-size: 18px;
        }

        .card p {
            color: #647b94;
            font-size: 14px;
            margin-bottom: 0;
        }

        .info {
            margin-top: 25px;
            padding: 25px;
            border: 1px solid #cfe6fb;
            border-radius: 20px;
            background: #e8f4ff;
        }

        .info h3 {
            margin-top: 0;
        }

        footer {
            margin-top: 25px;
            padding: 25px 15px;
            text-align: center;
            background: #e4f2ff;
            color: #365a7d;
            font-size: 12px;
        }

        @media (max-width: 700px) {
            .navbar {
                padding: 15px 5%;
            }

            .brand {
                font-size: 14px;
            }

            .hero {
                padding: 35px 25px;
                min-height: 300px;
            }

            .grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

<header class="navbar">
    <div class="brand">Masjid Besar Ciparay</div>

    <a class="back" href="{{ url('/website-resmi') }}">
        ← Kembali ke Website Resmi
    </a>
</header>

<main class="container">

    <section class="hero">
        <div class="hero-content">
            <span class="label">Fasilitas Ruang Bersama</span>

            <h1>Kantin Masjid Besar Ciparay</h1>

            <p>
                Ruang pendukung kenyamanan jamaah dan pengunjung
                untuk memenuhi kebutuhan konsumsi ketika beraktivitas
                di lingkungan Masjid Besar Ciparay.
            </p>
        </div>
    </section>

    <section class="section">
        <h2>Tentang Kantin</h2>

        <p class="intro">
            Kantin Masjid Besar Ciparay merupakan fasilitas
            pendukung di lingkungan masjid yang menjadi bagian
            dari ruang bersama masyarakat. Keberadaannya diharapkan
            dapat memberikan kenyamanan bagi jamaah dan pengunjung
            serta mendukung kegiatan keagamaan dan sosial.
        </p>

        <div class="grid">

            <article class="card">
                <div class="icon">☕</div>
                <h3>Makanan dan Minuman</h3>
                <p>
                    Fasilitas kantin untuk memenuhi kebutuhan
                    konsumsi jamaah dan pengunjung masjid.
                </p>
            </article>

            <article class="card">
                <div class="icon">🤝</div>
                <h3>Ruang Kebersamaan</h3>
                <p>
                    Mendukung suasana kebersamaan dan silaturahmi
                    di lingkungan Masjid Besar Ciparay.
                </p>
            </article>

            <article class="card">
                <div class="icon">🕌</div>
                <h3>Lingkungan Masjid</h3>
                <p>
                    Menjadi salah satu fasilitas pendukung
                    aktivitas masyarakat di sekitar masjid.
                </p>
            </article>

        </div>

        <div class="info">
            <h3>Informasi Kantin</h3>

            <p>
                Untuk mengetahui menu yang tersedia, harga,
                jam operasional, dan informasi pengelolaan kantin,
                silakan menghubungi pengurus Masjid Besar Ciparay.
            </p>
        </div>
    </section>

</main>

<footer>
    © {{ date('Y') }} Masjid Besar Ciparay.
    Website resmi informasi dan layanan masjid.
</footer>

</body>
</html>
