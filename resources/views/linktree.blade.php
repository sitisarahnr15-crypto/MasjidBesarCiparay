<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masjid Besar Ciparay</title>

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
            max-width: 480px;
            margin: auto;
        }

        .card {
            background: #fff;
            border: 1px solid #e0edfa;
            border-radius: 28px;
            padding: 30px 22px;
            text-align: center;
            box-shadow: 0 15px 45px rgba(94, 156, 210, .13);
        }

        .logo {
            width: 105px;
            height: 105px;
            margin: 0 auto 18px;
            border-radius: 50%;
            border: 4px solid #d9edff;
            background: linear-gradient(145deg, #a9d9fc, #6eafe4);
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 48px;
        }

        .badge {
            display: inline-block;
            background: #edf7ff;
            color: #5288b5;
            border-radius: 30px;
            padding: 7px 15px;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            margin-bottom: 13px;
        }

        h1 {
            font-size: 25px;
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

        .line {
            width: 55px;
            height: 4px;
            background: #a8d7fa;
            border-radius: 10px;
            margin: 23px auto;
        }

        .section-title {
            text-align: left;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #82a6c5;
            margin: 25px 0 12px;
        }

        .link {
            display: flex;
            align-items: center;
            gap: 13px;
            width: 100%;
            padding: 13px;
            margin-bottom: 11px;
            text-align: left;
            text-decoration: none;
            color: #416d93;
            background: #fff;
            border: 1px solid #dfedfa;
            border-radius: 15px;
            transition: .25s ease;
        }

        .link:hover {
            background: #f0f8ff;
            border-color: #a7d2f5;
            transform: translateY(-3px);
            box-shadow: 0 7px 18px rgba(94, 156, 210, .10);
        }

        .icon {
            width: 45px;
            height: 45px;
            flex-shrink: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #eaf5ff;
            border-radius: 13px;
            font-size: 22px;
        }

        .link-text {
            flex: 1;
            min-width: 0;
        }

        .link-text strong {
            display: block;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 4px;
        }

        .link-text small {
            display: block;
            font-size: 10px;
            color: #91a7bb;
            line-height: 1.6;
        }

        .arrow {
            font-size: 23px;
            color: #a2c5e3;
        }

        .contact {
            margin-top: 24px;
            padding: 21px 16px;
            border-radius: 17px;
            background: linear-gradient(135deg, #9fd2f7, #78b9eb);
            color: #fff;
        }

        .contact h2 {
            font-size: 15px;
            margin-bottom: 8px;
        }

        .contact p {
            font-size: 11px;
            line-height: 1.9;
        }

        .contact a {
            display: inline-block;
            margin-top: 13px;
            background: #fff;
            color: #4787b8;
            padding: 10px 16px;
            border-radius: 20px;
            text-decoration: none;
            font-size: 11px;
            font-weight: 700;
        }

        footer {
            margin-top: 23px;
            font-size: 10px;
            color: #91a7bb;
            line-height: 1.9;
        }

        @media (max-width: 380px) {
            .card {
                padding: 25px 15px;
            }

            h1 {
                font-size: 22px;
            }
}

  .logo {
    width: 90px;
    height: 90px;
    margin: 0 auto 18px;
    border-radius: 50%;
    border: 4px solid #d9edff;
    background: #ffffff;
    display: flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
}

.logo img {
    width: 100%;
    height: 100%;
    object-fit: contain;
    padding: 5px;
}
        
    </style>
</head>

<body>
<main class="container">
    <section class="card">

        <div class="logo">
    <img src="{{ asset('images/logo-masjid.png') }}"
         alt="Logo Masjid Besar Ciparay">
</div>

        <div class="badge">RUMAH IBADAH & UMAT</div>

        <h1>Masjid Besar Ciparay</h1>

        <p class="intro">
            Selamat datang di halaman informasi Masjid Besar Ciparay.<br>
            Pusat ibadah, ilmu, dan kebersamaan umat.
        </p>

        <div class="line"></div>

        <p class="section-title">INFORMASI MASJID</p>

        
<a href="{{ url('/website-resmi') }}" class="link">
    <div class="icon">🌐</div>
    <div class="link-text">
        <strong>Website Resmi</strong>
        <small>Artikel, informasi, dan kegiatan masjid</small>
    </div>
    <span class="arrow">›</span>
</a>

<a href="{{ route('jadwal.kajian') }}" class="link">
    <div class="icon">📖</div>
    <div class="link-text">
        <strong>Jadwal Kajian</strong>
        <small>Informasi kajian keagamaan</small>
    </div>
    <span class="arrow">›</span>
</a>

        <a href="#" class="link">
            <div class="icon">📅</div>
            <div class="link-text">
                <strong>Agenda Kegiatan</strong>
                <small>Jadwal kegiatan masjid</small>
            </div>
            <span class="arrow">›</span>
        </a>

<a href="{{ route('infak.donasi') }}" class="link">
    <div class="icon">🤲</div>

    <div class="link-text">
        <strong>Infak & Donasi</strong>
        <small>Informasi dan layanan infak & donasi masjid</small>
    </div>

    <span class="arrow">›</span>
</a>


        <p class="section-title">LAYANAN MASJID</p>

        <a href="{{ route('reservasi') }}" class="link">
            <div class="icon">💍</div>
            <div class="link-text">
                <strong>Reservasi Akad Nikah</strong>
                <small>Klik untuk membuka formulir pendaftaran</small>
            </div>
            <span class="arrow">›</span>
        </a>

        

<!-- Hotline WhatsApp -->
<a href="#pilihan-whatsapp" class="link"
   onclick="document.getElementById('pilihan-whatsapp').style.display='block'; return false;">
    <div class="icon">📱</div>
    <div class="link-text">
        <strong>Hotline WhatsApp</strong>
        <small>Hubungi pengurus sesuai keperluan Anda</small>
    </div>
    <span class="arrow">›</span>
</a>

<!-- Pilihan Keperluan WhatsApp -->
<div id="pilihan-whatsapp"
     style="display:none; margin:15px 0; padding:20px;
            background:#f4f9ff; border:1px solid #dcecff;
            border-radius:18px; text-align:left;">

    <h3 style="font-size:15px; color:#386b99; margin-bottom:8px;">
        Hubungi Pengurus Masjid
    </h3>

    <p style="font-size:11px; color:#849bb0; margin-bottom:15px;">
        Silakan pilih keperluan Anda. Pesan WhatsApp akan
        disiapkan secara otomatis.
    </p>

    <button type="button" class="pilihan-wa"
        onclick="hubungiWA('Informasi Umum')">
        💬 Informasi Umum
    </button>

    <button type="button" class="pilihan-wa"
        onclick="hubungiWA('Jadwal Kajian')">
        📖 Jadwal Kajian
    </button>

    <button type="button" class="pilihan-wa"
        onclick="hubungiWA('Reservasi Akad Nikah')">
        💍 Reservasi Akad Nikah
    </button>

    <button type="button" class="pilihan-wa"
        onclick="hubungiWA('Infak dan Donasi')">
        🤲 Infak dan Donasi
    </button>

    <button type="button" class="pilihan-wa"
        onclick="hubungiWA('Kegiatan Masjid')">
        📅 Kegiatan Masjid
    </button>

    <button type="button" class="pilihan-wa"
        onclick="hubungiWA('Keperluan Lainnya')">
        ✉️ Keperluan Lainnya
    </button>

    <button type="button"
        onclick="document.getElementById('pilihan-whatsapp').style.display='none'"
        style="width:100%; margin-top:8px; padding:10px;
               border:0; background:transparent; color:#849bb0;
               cursor:pointer;">
        Tutup
    </button>
</div>

<style>
    .pilihan-wa {
        display: block;
        width: 100%;
        padding: 12px;
        margin-bottom: 9px;
        border: 1px solid #dcecff;
        border-radius: 12px;
        background: #fff;
        color: #416d93;
        font-family: 'Poppins', sans-serif;
        font-size: 12px;
        text-align: left;
        cursor: pointer;
        transition: .2s ease;
    }

    .pilihan-wa:hover {
        background: #eaf5ff;
        border-color: #a7d2f5;
        transform: translateX(3px);
    }
</style>

<script>
    function hubungiWA(keperluan) {
        const nomorWA = '6285134345876';

        const pesan =
            "Assalamu'alaikum Warahmatullahi Wabarakatuh.\n\n" +
            "Yth. Pengurus Masjid Besar Ciparay,\n\n" +
            "Perkenalkan, saya ingin menghubungi pengurus " +
            "terkait: " + keperluan + ".\n\n" +
            "Mohon informasi lebih lanjut mengenai keperluan tersebut.\n\n" +
            "Terima kasih.\n\n" +
            "Wassalamu'alaikum Warahmatullahi Wabarakatuh.";

        const url = 'https://wa.me/' + nomorWA +
                    '?text=' + encodeURIComponent(pesan);

        window.open(url, '_blank', 'noopener,noreferrer');
    }
</script>


<!-- Lokasi Masjid -->
<a href="https://www.google.com/maps/search/?api=1&query=Masjid+Besar+Ciparay+Bandung"
   class="link"
   target="_blank"
   rel="noopener noreferrer">
    <div class="icon">📍</div>
    <div class="link-text">
        <strong>Lokasi Masjid</strong>
        <small>Informasi lokasi Masjid Besar Ciparay</small>
    </div>
    <span class="arrow">›</span>
</a>

        <div class="contact">
            <h2>🤍 Mari Makmurkan Masjid</h2>
            <p>
                Bersama membangun kebersamaan, mempererat ukhuwah,
                dan meningkatkan kegiatan ibadah.
            </p>

            <a href="https://wa.me/6285134345876"
               target="_blank" rel="noopener noreferrer">
                Hubungi Hotline WhatsApp
            </a>
        </div>

        <footer>
            © {{ date('Y') }} Masjid Besar Ciparay<br>
            Beribadah • Belajar • Bersilaturahmi
        </footer>

    </section>
</main>
</body>
</html>
