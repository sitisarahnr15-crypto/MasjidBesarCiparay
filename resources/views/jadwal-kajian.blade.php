
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Kajian | Masjid Besar Ciparay</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(135deg, #eaf3ff, #d8e8ff);
            color: #243247;
            min-height: 100vh;
            padding: 35px 16px;
        }

        .container {
            max-width: 760px;
            margin: 0 auto;
        }

        .card {
            background: #ffffff;
            border-radius: 24px;
            padding: 30px;
            box-shadow: 0 12px 35px rgba(35, 75, 130, 0.12);
        }

        .back {
            display: inline-block;
            color: #245ca6;
            text-decoration: none;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 25px;
        }

        .back:hover {
            color: #123b75;
        }

        .header {
            text-align: center;
            margin-bottom: 25px;
        }

        .icon-header {
            width: 76px;
            height: 76px;
            border-radius: 22px;
            background: #e8f1ff;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 38px;
            margin: 0 auto 16px;
        }

        .badge {
            display: inline-block;
            background: #e8f1ff;
            color: #245ca6;
            font-size: 11px;
            font-weight: bold;
            letter-spacing: 1px;
            padding: 8px 13px;
            border-radius: 20px;
            margin-bottom: 13px;
        }

        h1 {
            font-size: 30px;
            color: #183d70;
            margin-bottom: 12px;
        }

        .intro {
            color: #68778b;
            font-size: 14px;
            line-height: 1.7;
        }

        .info {
            background: #f2f7ff;
            border: 1px solid #e0ebfa;
            border-radius: 15px;
            padding: 17px;
            font-size: 14px;
            line-height: 1.8;
            margin-bottom: 28px;
        }

        .section-title {
            font-size: 12px;
            font-weight: bold;
            letter-spacing: 1.5px;
            color: #56708f;
            margin-bottom: 16px;
        }

        .jadwal {
            background: #ffffff;
            border: 1px solid #dce8f8;
            border-left: 5px solid #3675c9;
            border-radius: 16px;
            padding: 22px;
            margin-bottom: 16px;
            box-shadow: 0 5px 16px rgba(35, 75, 130, 0.06);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .jadwal:hover {
            transform: translateY(-3px);
            box-shadow: 0 9px 22px rgba(35, 75, 130, 0.12);
        }

        .kategori {
            display: inline-block;
            color: #245ca6;
            background: #e8f1ff;
            font-size: 10px;
            font-weight: bold;
            letter-spacing: 1px;
            border-radius: 20px;
            padding: 7px 11px;
            margin-bottom: 12px;
        }

        .jadwal h2 {
            font-size: 21px;
            color: #183d70;
            line-height: 1.5;
            margin-bottom: 8px;
        }

        .ustaz {
            font-size: 14px;
            color: #64748b;
            margin-bottom: 16px;
        }

        .detail {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .detail span {
            background: #f3f7fc;
            color: #40546d;
            font-size: 12px;
            line-height: 1.5;
            padding: 9px 11px;
            border-radius: 9px;
        }

        .deskripsi {
            color: #64748b;
            font-size: 14px;
            line-height: 1.7;
            margin-top: 15px;
        }

        .kosong {
            text-align: center;
            padding: 35px 20px;
            background: #f5f8fd;
            border: 1px dashed #c6d8f0;
            border-radius: 16px;
            color: #68778b;
            font-size: 14px;
            line-height: 1.8;
        }

        .kosong .emoji {
            font-size: 38px;
            margin-bottom: 12px;
        }

        .kosong strong {
            display: block;
            color: #244b7f;
            margin-bottom: 5px;
        }

        .whatsapp {
            display: block;
            text-align: center;
            background: #245ca6;
            color: #ffffff;
            text-decoration: none;
            padding: 15px 18px;
            border-radius: 12px;
            font-size: 14px;
            font-weight: bold;
            margin-top: 25px;
            transition: background 0.2s;
        }

        .whatsapp:hover {
            background: #183f79;
        }

        .catatan {
            text-align: center;
            color: #718096;
            font-size: 12px;
            line-height: 1.7;
            margin-top: 18px;
        }

        footer {
            text-align: center;
            color: #718096;
            font-size: 12px;
            margin-top: 25px;
            line-height: 1.8;
        }

        @media (max-width: 520px) {
            body {
                padding: 18px 12px;
            }

            .card {
                padding: 22px 17px;
                border-radius: 20px;
            }

            h1 {
                font-size: 26px;
            }

            .jadwal {
                padding: 18px 15px;
            }

            .jadwal h2 {
                font-size: 19px;
            }

            .detail {
                flex-direction: column;
            }

            .detail span {
                display: block;
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
                <div class="icon-header">📖</div>

                <span class="badge">INFORMASI KEAGAMAAN</span>

                <h1>Jadwal Kajian</h1>

                <p class="intro">
                    Masjid Besar Ciparay
                    <br>
                    Informasi agenda kajian dan kegiatan keislaman masjid.
                </p>
            </header>

            <div class="info">
                Assalamu'alaikum warahmatullahi wabarakatuh.
                <br>
                Silakan lihat informasi jadwal kajian berikut.
                Semoga menjadi sarana menambah ilmu dan mempererat
                ukhuwah Islamiyah.
            </div>

            <p class="section-title">AGENDA KAJIAN</p>

            @if (isset($kajians) && $kajians->isNotEmpty())

                @foreach ($kajians as $kajian)

                    <article class="jadwal">

                        <span class="kategori">AGENDA KAJIAN</span>

                        <h2>{{ $kajian->judul }}</h2>

                        <p class="ustaz">
                            Pemateri: {{ $kajian->pemateri }}
                        </p>

                        <div class="detail">
                            <span>
                                📅
                               {{ \Carbon\Carbon::parse($kajian->tanggal)->format('d-m-Y') }}                            </span>

                            <span>
                                🕒
                                {{ substr($kajian->waktu, 0, 5) }} WIB
                            </span>

                            <span>
                                📍 {{ $kajian->lokasi }}
                            </span>
                        </div>

                        @if ($kajian->deskripsi)
                            <p class="deskripsi">
                                {{ $kajian->deskripsi }}
                            </p>
                        @endif

                    </article>

                @endforeach

            @else

                <div class="kosong">
                    <div class="emoji">📚</div>

                    <strong>Jadwal kajian sedang diperbarui.</strong>

                    Silakan hubungi pengurus masjid untuk mendapatkan
                    informasi jadwal kajian terbaru.
                </div>

            @endif

            <a
                href="https://wa.me/6285134345876"
                class="whatsapp"
                target="_blank"
                rel="noopener noreferrer"
            >
                💬 Hubungi Pengurus Masjid
            </a>

            <p class="catatan">
                Jadwal dapat berubah sewaktu-waktu.
                <br>
                Silakan konfirmasi kepada pengurus masjid untuk informasi terbaru.
            </p>

            <footer>
                © 2026 Masjid Besar Ciparay
                <br>
                Pusat Kegiatan Keislaman dan Kemasyarakatan
            </footer>

        </section>
    </main>
</body>
</html>
