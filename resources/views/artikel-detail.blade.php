
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $artikel->judul }} | Masjid Besar Ciparay</title>
    <meta name="description" content="{{ $artikel->ringkasan }}">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            background: #f5f8fd;
            color: #24344d;
            font-family: 'DM Sans', sans-serif;
            line-height: 1.8;
        }

        a { text-decoration: none; }

        .navbar {
            background: #fff;
            border-bottom: 1px solid #e7edf6;
            padding: 17px 7%;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            color: #174780;
            font-weight: 800;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .brand-icon {
            display: grid;
            place-items: center;
            width: 43px;
            height: 43px;
            border-radius: 14px;
            color: white;
            background: linear-gradient(135deg, #2365ae, #78b8ed);
            font-size: 23px;
        }

        .brand small {
            display: block;
            color: #7b8ba3;
            font-size: 11px;
            font-weight: 500;
        }

        .container {
            max-width: 900px;
            width: 90%;
            margin: 0 auto;
        }

        .back {
            display: inline-block;
            margin: 30px 0 20px;
            color: #2865a6;
            font-weight: 700;
        }

        .article-header {
            padding: 35px;
            border: 1px solid #e6edf7;
            border-radius: 25px;
            background: white;
            box-shadow: 0 12px 40px rgba(35, 75, 125, .06);
        }

        .category {
            display: inline-block;
            padding: 6px 14px;
            border-radius: 30px;
            background: #eaf4ff;
            color: #2465a7;
            font-size: 12px;
            font-weight: 800;
            text-transform: uppercase;
        }

        h1 {
            margin: 18px 0 12px;
            color: #153d6b;
            font: 800 clamp(28px, 5vw, 43px)/1.25 'Plus Jakarta Sans', sans-serif;
            letter-spacing: -1px;
        }

        .summary {
            color: #697b93;
            font-size: 17px;
        }

        .meta {
            margin-top: 22px;
            color: #8795a9;
            font-size: 13px;
        }

        .cover {
            width: 100%;
            max-height: 460px;
            margin: 25px 0;
            border-radius: 22px;
            object-fit: cover;
            background: #e8f1fb;
        }

        .article-content {
            padding: 35px;
            border: 1px solid #e6edf7;
            border-radius: 25px;
            background: white;
            box-shadow: 0 12px 40px rgba(35, 75, 125, .04);
        }

        .article-content h2 {
            color: #174780;
            font-family: 'Plus Jakarta Sans', sans-serif;
        }

        .article-text {
            color: #45556c;
            font-size: 16px;
            overflow-wrap: anywhere;
        }

        .bottom-link {
            display: inline-block;
            margin-top: 28px;
            padding: 12px 20px;
            border-radius: 12px;
            background: #1d5b9e;
            color: white;
            font-weight: 700;
        }

        .footer {
            padding: 30px 15px;
            margin-top: 45px;
            background: #eaf2fc;
            color: #647995;
            text-align: center;
            font-size: 13px;
        }

        @media (max-width: 600px) {
            .article-header, .article-content {
                padding: 23px;
            }

            .navbar { padding: 14px 5%; }
            .summary { font-size: 15px; }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <a class="brand" href="{{ url('/website-resmi') }}">
            <span class="brand-icon">☪</span>
            <span>
                Masjid Besar Ciparay
                <small>Pusat kegiatan keislaman dan kemasyarakatan</small>
            </span>
        </a>
    </header>

    <main class="container">
        <a class="back" href="{{ url('/website-resmi') }}">← Kembali ke Website Resmi</a>

        <section class="article-header">
            <span class="category">{{ $artikel->kategori ?: 'Informasi Masjid' }}</span>

            <h1>{{ $artikel->judul }}</h1>

            @if($artikel->ringkasan)
                <p class="summary">{{ $artikel->ringkasan }}</p>
            @endif

            <div class="meta">
                Masjid Besar Ciparay
                @if($artikel->tanggal_publikasi)
                    · {{ \Carbon\Carbon::parse($artikel->tanggal_publikasi)->translatedFormat('d F Y') }}
                @endif
            </div>
        </section>

        @if($artikel->gambar)
            <img
                class="cover"
                src="{{ asset('storage/' . $artikel->gambar) }}"
                alt="{{ $artikel->judul }}"
            >
        @else
            <img
                class="cover"
                src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                alt="Masjid Besar Ciparay"
            >
        @endif

        <article class="article-content">
            <h2>Isi Artikel</h2>

            <div class="article-text">{!! nl2br(e($artikel->isi)) !!}</div>

            <a class="bottom-link" href="{{ url('/website-resmi') }}">
                ← Kembali ke Daftar Artikel
            </a>
        </article>
    </main>

    <footer class="footer">
        © 2026 Masjid Besar Ciparay. Seluruh hak cipta dilindungi.
    </footer>
</body>
</html>
