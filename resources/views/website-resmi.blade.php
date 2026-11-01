<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#4f9be8">

    <title>Website Resmi | Masjid Besar Ciparay</title>

    <meta name="description" content="Informasi resmi Masjid Besar Ciparay, pendidikan, artikel, kajian, kantin, BMT, dan kegiatan masyarakat.">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --primary: #2878c7;
            --primary-dark: #155ca5;
            --primary-light: #eaf4ff;
            --blue-soft: #f4f9ff;
            --text: #18324b;
            --muted: #64778b;
            --white: #ffffff;
            --border: #e3edf6;
            --shadow: 0 12px 35px rgba(25, 83, 135, 0.09);
            --radius: 20px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
            scroll-padding-top: 100px;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            color: var(--text);
            background: #ffffff;
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        img {
            max-width: 100%;
            display: block;
        }

        button,
        input {
            font: inherit;
        }

        .container {
            width: min(1140px, calc(100% - 40px));
            margin: 0 auto;
        }

        /* NAVIGASI */

        .navbar {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(255, 255, 255, 0.96);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid var(--border);
        }

        .nav-inner {
            min-height: 78px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 24px;
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 12px;
            flex-shrink: 0;
        }

        .brand-mark {
            width: 48px;
            height: 48px;
            border-radius: 14px;
            overflow: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--primary-light);
        }

        .brand-mark img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }

        .brand-name {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 14px;
            font-weight: 800;
            line-height: 1.35;
        }

        .brand-subtitle {
            font-size: 11px;
            color: var(--muted);
        }

        .nav-links {
            display: flex;
            align-items: center;
            gap: 22px;
        }

        .nav-links a {
            font-size: 13px;
            font-weight: 600;
            color: #455c72;
            transition: color 0.2s;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-cta {
            background: var(--primary);
            color: white !important;
            padding: 10px 16px;
            border-radius: 11px;
        }

        .nav-cta:hover {
            background: var(--primary-dark);
        }

        .menu-toggle {
            display: none;
            border: 1px solid var(--border);
            background: white;
            color: var(--text);
            padding: 8px 12px;
            border-radius: 10px;
            cursor: pointer;
        }

        /* HERO */

        .hero {
            position: relative;
            overflow: hidden;
            padding: 82px 0 76px;
            background:
                radial-gradient(circle at 90% 15%, #d8ebff 0, transparent 28%),
                linear-gradient(135deg, #f4f9ff 0%, #ffffff 58%, #eaf4ff 100%);
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr 0.9fr;
            align-items: center;
            gap: 54px;
        }

        .eyebrow {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 7px 13px;
            background: #e2f0ff;
            color: var(--primary-dark);
            border-radius: 100px;
            font-size: 12px;
            font-weight: 700;
            margin-bottom: 20px;
        }

        .hero h1 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(32px, 4.4vw, 54px);
            line-height: 1.2;
            letter-spacing: -1.7px;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--primary);
        }

        .hero-description {
            color: var(--muted);
            font-size: 16px;
            max-width: 560px;
            margin-bottom: 28px;
        }

        .hero-actions {
            display: flex;
            align-items: center;
            flex-wrap: wrap;
            gap: 12px;
        }

        .btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 12px 19px;
            border-radius: 12px;
            font-size: 13px;
            font-weight: 700;
            transition: 0.2s;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 7px 18px rgba(40, 120, 199, 0.2);
        }

        .btn-primary:hover {
            background: var(--primary-dark);
            transform: translateY(-2px);
        }

        .btn-outline {
            border: 1px solid #d7e6f5;
            color: var(--text);
            background: white;
        }

        .btn-outline:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .hero-image {
            position: relative;
            min-height: 350px;
            border-radius: 28px;
            overflow: hidden;
            background: #dcecff;
            box-shadow: 0 24px 60px rgba(31, 83, 132, 0.17);
        }

        .hero-image img {
            width: 100%;
            height: 380px;
            object-fit: cover;
        }

        .hero-image-placeholder {
            min-height: 350px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
            color: var(--primary-dark);
        }

        .hero-image-placeholder .symbol {
            font-size: 65px;
            margin-bottom: 10px;
        }

        .hero-image-placeholder p {
            font-size: 13px;
            margin-top: 5px;
        }

        .hero-badge {
            position: absolute;
            left: 18px;
            right: 18px;
            bottom: 18px;
            background: rgba(255, 255, 255, 0.95);
            padding: 15px 18px;
            border-radius: 15px;
            box-shadow: var(--shadow);
        }

        .hero-badge strong {
            display: block;
            font-size: 14px;
        }

        .hero-badge span {
            color: var(--muted);
            font-size: 12px;
        }

        /* QUICK LINKS */

        .quick-section {
            position: relative;
            margin-top: -25px;
            z-index: 2;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
        }

        .quick-card {
            display: flex;
            align-items: center;
            gap: 13px;
            padding: 19px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 17px;
            box-shadow: var(--shadow);
            transition: 0.2s;
        }

        .quick-card:hover {
            transform: translateY(-4px);
            border-color: #b9d9f7;
        }

        .quick-icon {
            flex-shrink: 0;
            width: 44px;
            height: 44px;
            border-radius: 13px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: var(--primary-light);
            font-size: 21px;
        }

        .quick-card strong {
            display: block;
            font-size: 13px;
        }

        .quick-card span {
            display: block;
            color: var(--muted);
            font-size: 11px;
        }

        /* SECTION UMUM */

        .content-section {
            padding: 82px 0;
        }

        .content-section.soft {
            background: var(--blue-soft);
        }

        .section-head {
            display: flex;
            align-items: end;
            justify-content: space-between;
            gap: 20px;
            margin-bottom: 32px;
        }

        .kicker {
            color: var(--primary);
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-size: 11px;
            font-weight: 800;
            margin-bottom: 9px;
        }

        .section-head h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: clamp(25px, 3vw, 34px);
            line-height: 1.3;
            letter-spacing: -0.7px;
        }

        .section-intro {
            max-width: 630px;
            margin-top: 12px;
            color: var(--muted);
            font-size: 14px;
        }

        .text-link {
            display: inline-flex;
            align-items: center;
            gap: 7px;
            margin-top: auto;
            padding-top: 15px;
            color: var(--primary);
            font-size: 13px;
            font-weight: 700;
        }

        .text-link:hover {
            color: var(--primary-dark);
        }

        /* PROFIL */

        .profile-grid {
            display: grid;
            grid-template-columns: 0.85fr 1.15fr;
            gap: 45px;
            align-items: center;
        }

        .profile-art {
            min-height: 310px;
            background: linear-gradient(140deg, #dceeff, #f4f9ff);
            border-radius: 25px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 30px;
        }

        .profile-art .symbol {
            font-size: 78px;
            margin-bottom: 12px;
        }

        .profile-art strong {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 20px;
        }

        .profile-art p {
            color: var(--muted);
            font-size: 13px;
        }

        .profile-content h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 30px;
            line-height: 1.3;
            margin-bottom: 17px;
        }

        .profile-content p {
            color: var(--muted);
            font-size: 14px;
            margin-bottom: 14px;
        }

        .profile-points {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-top: 22px;
        }

        .profile-point {
            background: white;
            border: 1px solid var(--border);
            border-radius: 13px;
            padding: 13px;
            font-size: 12px;
            font-weight: 700;
        }

        .profile-point span {
            display: block;
            font-size: 11px;
            font-weight: 400;
            color: var(--muted);
        }

        /* KARTU */

        .cards-3 {
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 20px;
        }

        .service-card {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            padding: 27px;
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            transition: 0.25s;
        }

        .service-card:hover {
            transform: translateY(-5px);
            border-color: #c4def6;
            box-shadow: var(--shadow);
        }

        .service-icon {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 55px;
            height: 55px;
            margin-bottom: 20px;
            border-radius: 16px;
            background: var(--primary-light);
            font-size: 26px;
        }

        .service-card h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            margin-bottom: 10px;
        }

        .service-card p {
            color: var(--muted);
            font-size: 13px;
            margin-bottom: 5px;
        }

        /* ARTIKEL */

        .article-card {
            overflow: hidden;
            background: white;
            border: 1px solid var(--border);
            border-radius: var(--radius);
            transition: 0.25s;
        }

        .article-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow);
        }

        .article-image {
            height: 190px;
            overflow: hidden;
            background: #e6f2ff;
        }

        .article-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .article-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 50px;
            color: var(--primary);
            background: linear-gradient(135deg, #e5f2ff, #f7fbff);
        }

        .article-body {
            padding: 21px;
        }

        .article-date {
            color: var(--primary);
            font-size: 11px;
            font-weight: 700;
            margin-bottom: 8px;
        }

        .article-body h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            line-height: 1.5;
            margin-bottom: 10px;
        }

        .article-body p {
            font-size: 12px;
            color: var(--muted);
        }

        .empty-state {
            grid-column: 1 / -1;
            padding: 35px;
            text-align: center;
            border: 1px dashed #bfd7ee;
            background: white;
            border-radius: 18px;
            color: var(--muted);
        }

        .empty-state strong {
            display: block;
            color: var(--text);
            margin-bottom: 5px;
        }

        /* PENDIDIKAN */

        .education-card {
            display: flex;
            flex-direction: column;
            padding: 27px;
            border-radius: var(--radius);
            background: white;
            border: 1px solid var(--border);
        }

        .education-icon {
            font-size: 34px;
            margin-bottom: 15px;
        }

        .education-card h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 18px;
            margin-bottom: 9px;
        }

        .education-card p {
            font-size: 13px;
            color: var(--muted);
        }

        /* BMT */

        .bmt-panel {
            display: grid;
            grid-template-columns: 1fr auto;
            align-items: center;
            gap: 30px;
            padding: 38px;
            background: linear-gradient(120deg, #eaf4ff, #f7fbff);
            border: 1px solid #d9eafa;
            border-radius: 24px;
        }

        .bmt-panel h2 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 29px;
            line-height: 1.3;
            margin-bottom: 13px;
        }

        .bmt-panel p {
            max-width: 700px;
            font-size: 14px;
            color: var(--muted);
        }

        .bmt-symbol {
            font-size: 75px;
        }

        /* KAJIAN */

        .kajian-list {
            display: grid;
            gap: 14px;
        }

        .kajian-item {
            display: grid;
            grid-template-columns: 80px 1fr auto;
            gap: 20px;
            align-items: center;
            padding: 20px;
            background: white;
            border: 1px solid var(--border);
            border-radius: 16px;
        }

        .kajian-date {
            padding: 12px 8px;
            text-align: center;
            background: var(--primary-light);
            color: var(--primary-dark);
            border-radius: 12px;
        }

        .kajian-date strong {
            display: block;
            font-size: 22px;
            line-height: 1.2;
        }

        .kajian-date span {
            display: block;
            font-size: 10px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .kajian-info h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            margin-bottom: 4px;
        }

        .kajian-info p {
            font-size: 12px;
            color: var(--muted);
        }

        .kajian-time {
            font-size: 12px;
            font-weight: 700;
            color: var(--primary);
            white-space: nowrap;
        }

        /* KONTAK */

        .contact-grid {
            display: grid;
            grid-template-columns: 0.9fr 1.1fr;
            gap: 25px;
        }

        .contact-info {
            padding: 30px;
            border-radius: 22px;
            background: linear-gradient(145deg, #1766ad, #368bd5);
            color: white;
        }

        .contact-info h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 23px;
            margin-bottom: 12px;
        }

        .contact-info > p {
            font-size: 13px;
            color: #e5f2ff;
            margin-bottom: 23px;
        }

        .contact-item {
            display: flex;
            gap: 13px;
            padding: 14px 0;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        .contact-item .contact-icon {
            font-size: 21px;
        }

        .contact-item strong {
            display: block;
            font-size: 13px;
        }

        .contact-item span,
        .contact-item a {
            display: block;
            font-size: 12px;
            color: #e5f2ff;
        }

        .contact-map {
            overflow: hidden;
            min-height: 350px;
            border-radius: 22px;
            border: 1px solid var(--border);
            background: #eaf4ff;
        }

        .contact-map iframe {
            display: block;
            width: 100%;
            height: 100%;
            min-height: 350px;
            border: 0;
        }

        /* FOOTER */

        .footer {
            padding: 40px 0 20px;
            background: #102e49;
            color: white;
        }

        .footer-top {
            display: grid;
            grid-template-columns: 1.2fr 0.8fr 0.8fr;
            gap: 35px;
            padding-bottom: 30px;
        }

        .footer h3 {
            font-family: 'Plus Jakarta Sans', sans-serif;
            font-size: 16px;
            margin-bottom: 13px;
        }

        .footer p,
        .footer a {
            color: #c2d3e2;
            font-size: 12px;
        }

        .footer-links {
            display: grid;
            gap: 8px;
        }

        .footer a:hover {
            color: white;
        }

        .footer-bottom {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.14);
            color: #c2d3e2;
            font-size: 11px;
        }

        /* RESPONSIVE */

        @media (max-width: 950px) {
            .nav-links {
                gap: 13px;
            }

            .nav-links a {
                font-size: 12px;
            }

            .quick-grid {
                grid-template-columns: repeat(2, 1fr);
            }

            .hero-grid {
                gap: 30px;
            }

            .cards-3 {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }

            .cards-3 > :last-child:nth-child(odd) {
                grid-column: 1 / -1;
            }
        }

        @media (max-width: 700px) {
            .container {
                width: min(100% - 30px, 560px);
            }

            .nav-inner {
                min-height: 70px;
                flex-wrap: wrap;
                gap: 10px;
                padding: 10px 0;
            }

            .brand-mark {
                width: 42px;
                height: 42px;
            }

            .menu-toggle {
                display: block;
            }

            .nav-links {
                display: none;
                width: 100%;
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                padding: 8px 0 12px;
            }

            .nav-links.open {
                display: flex;
            }

            .nav-links a {
                padding: 11px 5px;
                border-bottom: 1px solid var(--border);
                font-size: 13px;
            }

            .nav-cta {
                text-align: center;
                margin-top: 8px;
            }

            .hero {
                padding: 55px 0 55px;
            }

            .hero-grid,
            .profile-grid,
            .contact-grid {
                grid-template-columns: 1fr;
            }

            .hero-grid {
                gap: 32px;
            }

            .hero-image,
            .hero-image-placeholder {
                min-height: 260px;
            }

            .hero-image img {
                height: 300px;
            }

            .hero h1 {
                letter-spacing: -1px;
            }

            .quick-grid {
                gap: 10px;
            }

            .quick-card {
                padding: 13px;
                gap: 9px;
            }

            .quick-icon {
                width: 38px;
                height: 38px;
                font-size: 18px;
            }

            .quick-card strong {
                font-size: 12px;
            }

            .quick-card span {
                font-size: 10px;
            }

            .content-section {
                padding: 60px 0;
            }

            .section-head {
                align-items: flex-start;
                flex-direction: column;
            }

            .cards-3 {
                grid-template-columns: 1fr;
            }

            .cards-3 > :last-child:nth-child(odd) {
                grid-column: auto;
            }

            .service-card,
            .education-card {
                padding: 23px;
            }

            .profile-grid {
                gap: 25px;
            }

            .profile-art {
                min-height: 240px;
            }

            .bmt-panel {
                grid-template-columns: 1fr;
                padding: 27px;
                gap: 15px;
            }

            .bmt-panel h2 {
                font-size: 24px;
            }

            .bmt-symbol {
                font-size: 48px;
            }

            .kajian-item {
                grid-template-columns: 65px 1fr;
                gap: 13px;
                padding: 14px;
            }

            .kajian-time {
                grid-column: 2;
                white-space: normal;
            }

            .contact-map,
            .contact-map iframe {
                min-height: 280px;
            }

            .footer-top {
                grid-template-columns: 1fr;
                gap: 25px;
            }
        }

        @media (max-width: 380px) {
            .quick-grid {
                grid-template-columns: 1fr;
            }

            .profile-points {
                grid-template-columns: 1fr;
            }

            .hero-actions .btn {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVIGASI -->
    <header class="navbar">
        <div class="container nav-inner">

            <a href="{{ url('/website-resmi') }}" class="brand">
                <div class="brand-mark">
                    <img
                        src="{{ asset('images/logo-masjid.png') }}"
                        alt="Logo Masjid Besar Ciparay"
                        onerror="this.style.display='none'; this.parentElement.innerHTML='🕌';"
                    >
                </div>

                <div>
                    <div class="brand-name">Masjid Besar Ciparay</div>
                    <div class="brand-subtitle">Website Resmi</div>
                </div>
            </a>

            <button class="menu-toggle" id="menuToggle" type="button"
                    aria-label="Buka menu navigasi"
                    aria-expanded="false">
                ☰ Menu
            </button>

            <nav class="nav-links" id="navLinks">
                <a href="#beranda">Beranda</a>
                <a href="#profil">Profil</a>
                <a href="#layanan">Layanan</a>
                <a href="#pendidikan">Pendidikan</a>
                <a href="#artikel">Artikel</a>
                <a href="#kajian">Kajian</a>
                <a href="#kontak">Kontak</a>
                <a href="{{ url('/reservasi') }}" class="nav-cta">
                    Reservasi Akad
                </a>
            </nav>

        </div>
    </header>

    <main>

        <!-- HERO -->
        <section class="hero" id="beranda">
            <div class="container hero-grid">

                <div>
                    <div class="eyebrow">
                        🕌 Pusat Kegiatan Umat
                    </div>

                    <h1>
                        Selamat Datang di
                        <span>Masjid Besar Ciparay</span>
                    </h1>

                    <p class="hero-description">
                        Pusat kegiatan keislaman dan kemasyarakatan.
                        Temukan informasi ibadah, pendidikan, kajian,
                        layanan masjid, serta berbagai kegiatan untuk
                        masyarakat melalui website resmi kami.
                    </p>

                    <div class="hero-actions">
                        <a href="#layanan" class="btn btn-primary">
                            Jelajahi Layanan →
                        </a>

                        <a href="#profil" class="btn btn-outline">
                            Tentang Masjid
                        </a>
                    </div>
                </div>

                <div class="hero-image">
                    <img
                        src="{{ asset('images/masjid-besar-ciparay.jpg') }}"
                        alt="Masjid Besar Ciparay"
                        onerror="this.style.display='none'; this.nextElementSibling.style.display='flex';"
                    >

                    <div class="hero-image-placeholder" style="display:none;">
                        <div class="symbol">🕌</div>
                        <strong>Masjid Besar Ciparay</strong>
                        <p>Pusat kegiatan keislaman dan kemasyarakatan</p>
                    </div>

                    <div class="hero-badge">
                        <strong>Masjid Besar Ciparay</strong>
                        <span>Tempat ibadah, pendidikan, dan pelayanan umat</span>
                    </div>
                </div>

            </div>
        </section>

        <!-- AKSES CEPAT -->
        <section class="quick-section">
            <div class="container quick-grid">

                <a href="{{ url('/jadwal-kajian') }}" class="quick-card">
                    <div class="quick-icon">📅</div>
                    <div>
                        <strong>Jadwal Kajian</strong>
                        <span>Agenda pengajian</span>
                    </div>
                </a>

                <a href="{{ url('/kantin') }}" class="quick-card">
                    <div class="quick-icon">☕</div>
                    <div>
                        <strong>Kantin Masjid</strong>
                        <span>Informasi kantin</span>
                    </div>
                </a>

                <a href="{{ url('/reservasi') }}" class="quick-card">
                    <div class="quick-icon">💍</div>
                    <div>
                        <strong>Reservasi Akad</strong>
                        <span>Layanan akad nikah</span>
                    </div>
                </a>

                <a href="#kontak" class="quick-card">
                    <div class="quick-icon">📍</div>
                    <div>
                        <strong>Lokasi Masjid</strong>
                        <span>Alamat dan peta</span>
                    </div>
                </a>

            </div>
        </section>

        <!-- PROFIL MASJID -->
        <section class="content-section" id="profil">
            <div class="container profile-grid">

                <div class="profile-art">
                    <div class="symbol">🕌</div>
                    <strong>Masjid Besar Ciparay</strong>
                    <p>Beribadah, belajar, dan tumbuh bersama masyarakat</p>
                </div>

                <div class="profile-content">
                    <div class="kicker">Profil Masjid</div>

                    <h2>Lebih dari tempat beribadah</h2>

                    <p>
                        Masjid Besar Ciparay menjadi bagian dari kehidupan
                        masyarakat sebagai tempat beribadah, menimba ilmu,
                        menjalin silaturahmi, dan melaksanakan berbagai
                        kegiatan sosial keagamaan.
                    </p>

                    <p>
                        Melalui website resmi ini, masyarakat dapat
                        memperoleh informasi mengenai layanan masjid,
                        kegiatan pendidikan, jadwal kajian, artikel,
                        serta informasi lainnya dengan lebih mudah.
                    </p>

                    <div class="profile-points">
                        <div class="profile-point">
                            📖 Pendidikan Islam
                            <span>Wadah belajar dan pembinaan umat</span>
                        </div>

                        <div class="profile-point">
                            🤝 Pelayanan Masyarakat
                            <span>Mendukung kegiatan sosial keagamaan</span>
                        </div>

                        <div class="profile-point">
                            🕌 Kegiatan Ibadah
                            <span>Informasi kajian dan agenda masjid</span>
                        </div>

                        <div class="profile-point">
                            💙 Kebersamaan
                            <span>Membangun silaturahmi masyarakat</span>
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <!-- ARTIKEL DAN BERITA -->
        <section class="content-section soft" id="artikel">
            <div class="container">

                <div class="section-head">
                    <div>
                        <div class="kicker">Informasi Terbaru</div>
                        <h2>Artikel dan Berita Masjid</h2>
                        <p class="section-intro">
                            Baca informasi, berita, dan artikel keislaman
                            yang diterbitkan melalui website Masjid Besar
                            Ciparay.
                        </p>
                    </div>
                </div>

                <div class="cards-3">

                    @forelse (($artikels ?? collect())->take(3) as $artikel)
                        <article class="article-card">

                            <div class="article-image">
                                @if (!empty($artikel->gambar))
                                    <img
                                        src="{{ asset('storage/' . $artikel->gambar) }}"
                                        alt="{{ $artikel->judul ?? 'Artikel Masjid Besar Ciparay' }}"
                                        loading="lazy"
                                    >
                                @else
                                    <div class="article-placeholder">📖</div>
                                @endif
                            </div>

                            <div class="article-body">
                                <div class="article-date">
                                    {{ $artikel->created_at ? $artikel->created_at->format('d M Y') : 'Informasi Masjid' }}
                                </div>

                                <h3>
                                    {{ $artikel->judul ?? 'Artikel Masjid Besar Ciparay' }}
                                </h3>

                                <p>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($artikel->isi ?? $artikel->konten ?? $artikel->deskripsi ?? ''), 120) }}
                                </p>
                            </div>

                        </article>
                    @empty
                        <div class="empty-state">
                            <strong>Belum ada artikel yang diterbitkan</strong>
                            <p>Artikel terbaru akan ditampilkan di bagian ini.</p>
                        </div>
                    @endforelse

                </div>

            </div>
        </section>

        <!-- LAYANAN MASJID -->
        <section class="content-section" id="layanan">
            <div class="container">

                <div class="section-head">
                    <div>
                        <div class="kicker">Layanan Masjid</div>
                        <h2>Ruang untuk tumbuh bersama</h2>
                        <p class="section-intro">
                            Masjid bukan hanya tempat beribadah, tetapi juga
                            ruang belajar dan kegiatan sosial bagi masyarakat.
                        </p>
                    </div>
                </div>

                <div class="cards-3">

                    <!-- KARTU KANTIN -->
                    <article class="service-card">
                        <div class="service-icon">☕</div>

                        <h3>Kantin Masjid</h3>

                        <p>
                            Informasi fasilitas kantin di lingkungan
                            Masjid Besar Ciparay. Kunjungi halaman kantin
                            untuk mengetahui informasi selengkapnya.
                        </p>

                        <a class="text-link" href="{{ url('/kantin') }}">
                            Lihat informasi kantin →
                        </a>
                    </article>

                    <!-- KARTU KEGIATAN KEISLAMAN -->
                    <article class="service-card">
                        <div class="service-icon">🕌</div>

                        <h3>Kegiatan Keislaman</h3>

                        <p>
                            Temukan informasi kegiatan dakwah, pengajian,
                            pembinaan ibadah, dan agenda keislaman
                            Masjid Besar Ciparay.
                        </p>

                        <a class="text-link"
                           href="{{ url('/kegiatan-keislaman') }}">
                            Lihat kegiatan keislaman →
                        </a>
                    </article>

                    <!-- KARTU INFAQ DAN DONASI -->
                    <article class="service-card">
                        <div class="service-icon">💙</div>

                        <h3>Infaq dan Donasi</h3>

                        <p>
                            Informasi dukungan untuk kegiatan dan kebutuhan
                            masjid dapat ditanyakan melalui pengurus.
                        </p>

                        <a class="text-link" href="{{ url('/infak-donasi') }}">
                            Informasi infaq dan donasi →
                        </a>
                    </article>

                </div>
            </div>
        </section>

        <!-- PENDIDIKAN -->
        <section class="content-section soft" id="pendidikan">
            <div class="container">

                <div class="section-head">
                    <div>
                        <div class="kicker">Pendidikan</div>
                        <h2>Belajar dan bertumbuh bersama</h2>
                        <p class="section-intro">
                            Mendukung pendidikan agama dan pembinaan generasi
                            melalui kegiatan belajar yang bermanfaat bagi
                            masyarakat.
                        </p>
                    </div>
                </div>

                <div class="cards-3">

    <!-- KARTU MDT MBC -->
    <article class="education-card">
        <div class="education-icon">📚</div>

        <h3>Madrasah Diniyah Takmiliyah</h3>

        <p>
            Kenali profil MDT MBC, kegiatan belajar santri,
            materi pembelajaran agama, dan informasi pendaftaran.
        </p>

        <a href="{{ url('/profil-mdt-mbc') }}" class="text-link">
            Lihat profil MDT MBC →
        </a>
    </article>

    <!-- KARTU TK SMB -->
    <article class="education-card">
        <div class="education-icon">🧒</div>

        <h3>TK SMB</h3>

        <p>
            Kenali profil TK SMB, kegiatan pembelajaran anak,
            pengembangan karakter, dan informasi pendaftaran.
        </p>

        <a href="{{ url('/profil-tk-smb') }}" class="text-link">
            Lihat profil TK SMB →
        </a>
    </article>

    <!-- KARTU PEMBINAAN AL-QUR'AN -->
    <article class="education-card">
        <div class="education-icon">📖</div>

        <h3>Pembinaan Al-Qur'an</h3>

        <p>
            Informasi kegiatan belajar membaca Al-Qur'an
            dan pembinaan keislaman di lingkungan masjid.
        </p>

        <a href="{{ url('/kegiatan-keislaman') }}" class="text-link">
            Lihat kegiatan keislaman →
        </a>
    </article>

</div>
        <!-- JADWAL KAJIAN -->
        <section class="content-section soft" id="kajian">
            <div class="container">

                <div class="section-head">
                    <div>
                        <div class="kicker">Agenda Masjid</div>
                        <h2>Jadwal Kajian</h2>
                        <p class="section-intro">
                            Informasi kajian dan kegiatan keagamaan yang
                            terjadwal di Masjid Besar Ciparay.
                        </p>
                    </div>

                    <a href="{{ url('/jadwal-kajian') }}"
                       class="btn btn-outline">
                        Semua Jadwal →
                    </a>
                </div>

                <div class="kajian-list">

                    @forelse (($kajians ?? collect())->sortBy('tanggal')->take(5) as $kajian)
                        <article class="kajian-item">

                            <div class="kajian-date">
                                <strong>
                                    {{ $kajian->tanggal ? \Carbon\Carbon::parse($kajian->tanggal)->format('d') : '--' }}
                                </strong>

                                <span>
                                    {{ $kajian->tanggal ? \Carbon\Carbon::parse($kajian->tanggal)->translatedFormat('M Y') : 'Jadwal' }}
                                </span>
                            </div>

                            <div class="kajian-info">
                                <h3>{{ $kajian->judul ?? 'Kajian Keislaman' }}</h3>

                                <p>
                                    Pemateri:
                                    {{ $kajian->pemateri ?? 'Informasi menyusul' }}
                                </p>

                                <p>
                                    Lokasi:
                                    {{ $kajian->lokasi ?? 'Masjid Besar Ciparay' }}
                                </p>
                            </div>

                            <div class="kajian-time">
                                🕒 {{ $kajian->waktu ?? 'Waktu menyusul' }}
                            </div>

                        </article>
                    @empty
                        <div class="empty-state">
                            <strong>Belum ada jadwal kajian</strong>
                            <p>Informasi jadwal kajian akan ditampilkan di sini.</p>
                        </div>
                    @endforelse

                </div>

            </div>
        </section>

        <!-- KONTAK -->
        <section class="content-section" id="kontak">
            <div class="container">

                <div class="section-head">
                    <div>
                        <div class="kicker">Hubungi Kami</div>
                        <h2>Informasi dan Lokasi Masjid</h2>
                        <p class="section-intro">
                            Silakan hubungi pengurus untuk memperoleh
                            informasi lebih lanjut mengenai layanan
                            dan kegiatan Masjid Besar Ciparay.
                        </p>
                    </div>
                </div>

                <div class="contact-grid">

                    <div class="contact-info">
                        <h3>Masjid Besar Ciparay</h3>

                        <p>
                            Pusat kegiatan keislaman dan kemasyarakatan.
                            Kami siap membantu memberikan informasi
                            mengenai layanan masjid.
                        </p>

                        <div class="contact-item">
                            <div class="contact-icon">📍</div>
                            <div>
                                <strong>Lokasi Masjid</strong>
                                <span>
                                    Ciparay, Kabupaten Bandung,
                                    Jawa Barat
                                </span>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">💬</div>
                            <div>
                                <strong>Hotline WhatsApp</strong>
                                <a href="https://wa.me/?text={{ urlencode('Assalamu’alaikum, saya ingin bertanya mengenai informasi Masjid Besar Ciparay.') }}"
                                   target="_blank" rel="noopener noreferrer">
                                    Hubungi melalui WhatsApp →
                                </a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">💍</div>
                            <div>
                                <strong>Reservasi Akad Nikah</strong>
                                <a href="https://s.id/akadnikahMBC"
                                   target="_blank" rel="noopener noreferrer">
                                    Buka formulir reservasi →
                                </a>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">🌐</div>
                            <div>
                                <strong>Website Resmi</strong>
                                <span>Informasi layanan Masjid Besar Ciparay</span>
                            </div>
                        </div>

                    </div>

                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps?q=Masjid%20Besar%20Ciparay%20Bandung&output=embed"
                            title="Peta lokasi Masjid Besar Ciparay"
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"
                            allowfullscreen>
                        </iframe>
                    </div>

                </div>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="footer">
        <div class="container">

            <div class="footer-top">

                <div>
                    <h3>Masjid Besar Ciparay</h3>
                    <p>
                        Pusat kegiatan keislaman dan kemasyarakatan.
                        Menyediakan informasi mengenai layanan,
                        pendidikan, kajian, dan kegiatan masjid.
                    </p>
                </div>

                <div>
                    <h3>Navigasi</h3>
                    <div class="footer-links">
                        <a href="#profil">Profil Masjid</a>
                        <a href="#layanan">Layanan Masjid</a>
                        <a href="#pendidikan">Pendidikan</a>
                        <a href="#artikel">Artikel dan Berita</a>
                        <a href="#kajian">Jadwal Kajian</a>
                    </div>
                </div>

                <div>
                    <h3>Layanan</h3>
                    <div class="footer-links">
                        <a href="{{ url('/kantin') }}">Kantin Masjid</a>
                        <a href="{{ url('/kegiatan-keislaman') }}">Kegiatan Keislaman</a>
                        <a href="{{ url('/jadwal-kajian') }}">Jadwal Kajian</a>
                        <a href="https://s.id/akadnikahMBC"
                           target="_blank" rel="noopener noreferrer">
                            Reservasi Akad Nikah
                        </a>
                        <a href="#kontak">Kontak dan Lokasi</a>
                    </div>
                </div>

            </div>

            <div class="footer-bottom">
                <span>
                    © {{ date('Y') }} Masjid Besar Ciparay.
                    Seluruh hak cipta dilindungi.
                </span>

                <span>Dibuat untuk pelayanan informasi masyarakat.</span>
            </div>

        </div>
    </footer>

    <script>
        const menuToggle = document.getElementById('menuToggle');
        const navLinks = document.getElementById('navLinks');

        if (menuToggle && navLinks) {
            menuToggle.addEventListener('click', function () {
                navLinks.classList.toggle('open');

                const isOpen = navLinks.classList.contains('open');

                menuToggle.setAttribute('aria-expanded', isOpen);
                menuToggle.innerHTML = isOpen ? '✕ Tutup' : '☰ Menu';
            });

            navLinks.querySelectorAll('a').forEach(function (link) {
                link.addEventListener('click', function () {
                    navLinks.classList.remove('open');
                    menuToggle.setAttribute('aria-expanded', 'false');
                    menuToggle.innerHTML = '☰ Menu';
                });
            });
        }
    </script>

</body>
</html>