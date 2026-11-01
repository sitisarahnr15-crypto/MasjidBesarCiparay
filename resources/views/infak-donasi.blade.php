
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Infak & Donasi | Masjid Besar Ciparay</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #eaf5ff, #ffffff, #dceeff);
            color: #365d80;
            min-height: 100vh;
            padding: 35px 16px;
        }

        .container {
            width: 100%;
            max-width: 680px;
            margin: auto;
        }

        .card {
            background: #fff;
            border: 1px solid #e0edfa;
            border-radius: 28px;
            padding: 30px;
            box-shadow: 0 15px 45px rgba(94, 156, 210, .13);
        }

        .back {
            display: inline-block;
            text-decoration: none;
            color: #5288b5;
            font-size: 13px;
            font-weight: 600;
            margin-bottom: 28px;
        }

        .back:hover {
            color: #285985;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .icon-header {
            width: 90px;
            height: 90px;
            margin: 0 auto 18px;
            border-radius: 26px;
            background: linear-gradient(145deg, #e6f4ff, #c9e5ff);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 43px;
            box-shadow: 0 8px 20px rgba(94, 156, 210, .12);
        }

        .badge {
            display: inline-block;
            background: #edf7ff;
            color: #5288b5;
            border-radius: 30px;
            padding: 8px 14px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 13px;
        }

        h1 {
            font-size: 28px;
            font-weight: 800;
            line-height: 1.4;
            color: #386b99;
            margin-bottom: 10px;
        }

        .intro {
            font-size: 12px;
            line-height: 1.9;
            color: #849bb0;
        }

        .hero {
            position: relative;
            overflow: hidden;
            background: linear-gradient(135deg, #386b99, #79b8e8);
            border-radius: 22px;
            padding: 28px 22px;
            color: white;
            text-align: center;
            margin: 28px 0;
        }

        .hero::before {
            content: "";
            position: absolute;
            width: 150px;
            height: 150px;
            border: 1px solid rgba(255,255,255,.18);
            border-radius: 50%;
            top: -70px;
            right: -35px;
        }

        .hero-icon {
            font-size: 35px;
            margin-bottom: 12px;
        }

        .hero h2 {
            font-size: 20px;
            margin-bottom: 10px;
        }

        .hero p {
            font-size: 12px;
            line-height: 1.9;
            color: #eff8ff;
        }

        .section-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #82a6c5;
            margin: 28px 0 13px;
        }

        .program {
            display: flex;
            align-items: flex-start;
            gap: 14px;
            padding: 18px;
            margin-bottom: 12px;
            border: 1px solid #dfedfa;
            border-radius: 18px;
            background: #fff;
            transition: .25s ease;
        }

        .program:hover {
            background: #f7fbff;
            border-color: #a7d2f5;
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(94, 156, 210, .09);
        }

        .program-icon {
            width: 48px;
            height: 48px;
            flex-shrink: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #eaf5ff;
            border-radius: 14px;
            font-size: 24px;
        }

        .program-content {
            flex: 1;
            min-width: 0;
        }

        .program h3 {
            color: #386b99;
            font-size: 14px;
            margin-bottom: 6px;
        }

        .program p {
            color: #849bb0;
            font-size: 11px;
            line-height: 1.9;
        }

        .payment-card {
            border: 1px solid #dfedfa;
            border-radius: 18px;
            padding: 21px;
            margin-bottom: 14px;
            background: linear-gradient(145deg, #ffffff, #f7fbff);
        }

        .payment-heading {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .payment-icon {
            width: 45px;
            height: 45px;
            border-radius: 13px;
            background: #eaf5ff;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px;
        }

        .payment-heading h3 {
            color: #386b99;
            font-size: 15px;
        }

        .payment-heading p {
            font-size: 10px;
            color: #91a7bb;
            margin-top: 3px;
        }

        .payment-info {
            background: #fff;
            border: 1px solid #e5eff9;
            border-radius: 12px;
            padding: 15px;
        }

        .label {
            color: #91a7bb;
            font-size: 10px;
            margin-bottom: 5px;
        }

        .value {
            color: #386b99;
            font-size: 13px;
            font-weight: 700;
            margin-bottom: 14px;
        }

        .value:last-child {
            margin-bottom: 0;
        }

        .qris-box {
            border: 2px dashed #c9def2;
            border-radius: 16px;
            padding: 25px 15px;
            text-align: center;
            background: #fff;
        }

        .qris-box .qris-icon {
            font-size: 42px;
            margin-bottom: 10px;
        }

        .qris-box h3 {
            color: #386b99;
            font-size: 14px;
            margin-bottom: 7px;
        }

        .qris-box p {
            color: #91a7bb;
            font-size: 11px;
            line-height: 1.8;
        }

        .notice {
            background: #fff8e8;
            border: 1px solid #f2dfb1;
            border-radius: 13px;
            padding: 15px;
            margin-top: 20px;
            color: #795d24;
            font-size: 11px;
            line-height: 1.9;
        }

        .contact {
            display: block;
            width: 100%;
            padding: 16px;
            margin-top: 24px;
            background: linear-gradient(135deg, #386b99, #79b8e8);
            color: #fff;
            border-radius: 14px;
            text-align: center;
            text-decoration: none;
            font-size: 13px;
            font-weight: 700;
            box-shadow: 0 8px 20px rgba(94, 156, 210, .18);
            transition: .25s ease;
        }

        .contact:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 25px rgba(94, 156, 210, .25);
        }

        .closing {
            text-align: center;
            color: #849bb0;
            font-size: 11px;
            line-height: 1.9;
            margin-top: 24px;
        }

        footer {
            margin-top: 25px;
            font-size: 10px;
            color: #91a7bb;
            line-height: 1.9;
            text-align: center;
        }

        @media (max-width: 480px) {
            body {
                padding: 18px 12px;
            }

            .card {
                padding: 23px 16px;
                border-radius: 23px;
            }

            h1 {
                font-size: 25px;
            }

            .hero {
                padding: 24px 17px;
            }

            .program {
                padding: 15px;
            }
        }
    </style>
</head>

<body>
<main class="container">
    <section class="card">

        <a href="{{ url('/') }}" class="back">
            ← Kembali ke Halaman Utama
        </a>

        <header class="header">
            <div class="icon-header">🤲</div>

            <div class="badge">KEPEDULIAN & KEMAKMURAN MASJID</div>

            <h1>Infak & Donasi</h1>

            <p class="intro">
                Masjid Besar Ciparay
                <br>
                Bersama berbagi kebaikan dan mendukung
                kegiatan keislaman serta kemasyarakatan.
            </p>
        </header>

        <section class="hero">
            <div class="hero-icon">🕌</div>

            <h2>Mari Makmurkan Masjid</h2>

            <p>
                Setiap kebaikan memiliki arti.
                Mari bersama mendukung kegiatan masjid,
                pendidikan Al-Qur'an, dan kepedulian sosial.
            </p>
        </section>

        <p class="section-title">PILIHAN PROGRAM DONASI</p>

        <article class="program">
            <div class="program-icon">🕌</div>

            <div class="program-content">
                <h3>Infak Operasional Masjid</h3>

                <p>
                    Mendukung kebutuhan operasional, kebersihan,
                    pemeliharaan fasilitas, dan kenyamanan jamaah.
                </p>
            </div>
        </article>

        <article class="program">
            <div class="program-icon">📖</div>

            <div class="program-content">
                <h3>Pendidikan dan Kegiatan Keagamaan</h3>

                <p>
                    Mendukung kajian Islam, pembelajaran Al-Qur'an,
                    pendidikan santri, dan kegiatan keagamaan masjid.
                </p>
            </div>
        </article>

        <article class="program">
            <div class="program-icon">💙</div>

            <div class="program-content">
                <h3>Donasi Sosial</h3>

                <p>
                    Mendukung kegiatan sosial dan kemasyarakatan
                    sesuai program yang dikelola pengurus masjid.
                </p>
            </div>
        </article>

        <p class="section-title">CARA MENYALURKAN DONASI</p>

        <section class="payment-card">
            <div class="payment-heading">
                <div class="payment-icon">🏦</div>

                <div>
                    <h3>Transfer Bank</h3>
                    <p>Informasi rekening resmi masjid</p>
                </div>
            </div>

            <div class="payment-info">
                <div class="label">Nama Bank</div>
                <div class="value">BNI</div>

                <div class="label">Nomor Rekening</div>
                <div class="value">1371020197</div>

                <div class="label">Nama Pemilik Rekening</div>
                <div class="value">Masjid Besar Ciparay</div>
            </div>
        </section>

        <section class="payment-card">
            <div class="payment-heading">
                <div class="payment-icon">📱</div>

                <div>
                    <h3>Donasi melalui QRIS</h3>
                    <p>Gunakan QRIS resmi yang telah diverifikasi</p>
                </div>
            </div>

            <div class="qris-box">
                <div class="qris-icon">▦</div>

                <h3>QRIS Masjid Besar Ciparay</h3>

                <p>
                    Gambar QRIS resmi dapat ditambahkan di sini
                    setelah file gambar tersedia.
                </p>
            </div>
        </section>

        <div class="notice">
            <strong>Perhatian:</strong>
            Pastikan nomor rekening atau QRIS merupakan milik
            penerima resmi yang telah dikonfirmasi oleh pengurus
            Masjid Besar Ciparay sebelum melakukan transaksi.
        </div>

        <a
            href="https://wa.me/6285134345876?text={{ rawurlencode('Assalamu’alaikum, saya ingin bertanya mengenai informasi infak dan donasi Masjid Besar Ciparay.') }}"
            class="contact"
            target="_blank"
            rel="noopener noreferrer"
        >
            💬 Tanya Informasi Donasi via WhatsApp
        </a>

        <p class="closing">
            Jazakumullahu khairan atas kepedulian Anda.
            <br>
            Semoga setiap kebaikan menjadi amal yang penuh berkah.
        </p>

        <footer>
            © {{ date('Y') }} Masjid Besar Ciparay
            <br>
            Beribadah • Belajar • Bersilaturahmi
        </footer>

    </section>
</main>
</body>
</html>