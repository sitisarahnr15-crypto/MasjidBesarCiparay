<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Akad Nikah | Masjid Besar Ciparay</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #eaf5ff, #ffffff, #dceeff);
            color: #416b90;
            padding: 30px 15px;
            min-height: 100vh;
        }

        .container {
            max-width: 520px;
            margin: auto;
        }

        .back {
            display: inline-block;
            color: #528cbd;
            text-decoration: none;
            font-size: 12px;
            margin-bottom: 18px;
            font-weight: 600;
        }

        .card {
            background: #fff;
            padding: 28px 23px;
            border-radius: 23px;
            border: 1px solid #dfedfa;
            box-shadow: 0 12px 40px #8abce522;
        }

        .icon {
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            background: #eaf5ff;
            border-radius: 20px;
            font-size: 34px;
            margin: 0 auto 15px;
        }

        h1 {
            text-align: center;
            font-size: 21px;
            color: #386b99;
            margin-bottom: 10px;
        }

        .intro {
            font-size: 11px;
            text-align: center;
            line-height: 1.9;
            color: #849bb0;
            margin-bottom: 24px;
        }

        .info {
            background: #edf7ff;
            padding: 13px;
            border-radius: 12px;
            font-size: 11px;
            line-height: 1.8;
            margin-bottom: 22px;
        }

        .group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            font-size: 11px;
            font-weight: 600;
            margin-bottom: 7px;
            color: #42698d;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            font-family: inherit;
            font-size: 12px;
            border: 1px solid #d5e6f5;
            border-radius: 10px;
            background: #fff;
            color: #365d80;
            outline: none;
        }

        input:focus, select:focus, textarea:focus {
            border-color: #80bce9;
        }

        textarea {
            resize: vertical;
            min-height: 80px;
        }

        button {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #78b9eb;
            color: #fff;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
        }

        button:hover {
            background: #559fd8;
        }

        .hotline {
            display: block;
            margin-top: 12px;
            padding: 12px;
            text-align: center;
            border: 1px solid #cce5fb;
            border-radius: 12px;
            color: #4c8dbb;
            text-decoration: none;
            font-size: 12px;
            font-weight: 600;
        }

        /* ============================================================
           PEMISAH antara formulir dan bagian pertanyaan
           ============================================================ */
        .pemisah {
            display: flex;
            align-items: center;
            gap: 12px;
            margin: 30px 0 24px;
        }

        .pemisah::before,
        .pemisah::after {
            content: '';
            flex: 1;
            height: 1px;
            background: #e0edfa;
        }

        .pemisah span {
            font-size: 10px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #a2c5e3;
            white-space: nowrap;
        }

        /* ============================================================
           BLOK PERTANYAAN (di bawah formulir)
           ============================================================ */
        .section-judul {
            text-align: center;
            font-size: 14px;
            font-weight: 700;
            color: #386b99;
            margin-bottom: 6px;
        }

        .section-sub {
            text-align: center;
            font-size: 10px;
            line-height: 1.7;
            color: #91a7bb;
            margin-bottom: 16px;
        }

        .quick-title {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            color: #82a6c5;
            margin-bottom: 6px;
        }

        .quick-sub {
            font-size: 10px;
            line-height: 1.7;
            color: #91a7bb;
            margin-bottom: 13px;
        }

        .quick-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 9px;
        }

        .quick-item {
            display: flex;
            align-items: center;
            gap: 9px;
            padding: 11px 12px;
            text-align: left;
            text-decoration: none;
            color: #416d93;
            background: #f6fbff;
            border: 1px solid #dfedfa;
            border-radius: 13px;
            transition: .25s ease;
        }

        .quick-item:hover {
            background: #eaf5ff;
            border-color: #a7d2f5;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(94, 156, 210, .12);
        }

        .quick-item span:first-child {
            font-size: 17px;
            flex-shrink: 0;
        }

        .quick-item span:last-child {
            font-size: 10px;
            font-weight: 600;
            line-height: 1.5;
        }

        .opsi-list {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 9px;
            margin-bottom: 20px;
        }

        .opsi {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 10px 12px;
            border: 1px solid #dfedfa;
            border-radius: 13px;
            background: #f6fbff;
            font-size: 10px;
            font-weight: 600;
            color: #416d93;
            cursor: pointer;
            transition: .25s ease;
        }

        .opsi:hover {
            border-color: #a7d2f5;
            background: #eaf5ff;
        }

        .opsi input {
            width: auto;
            margin: 0;
            accent-color: #78b9eb;
        }

        .btn-tanya {
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 12px;
            background: #78b9eb;
            color: #fff;
            font-family: inherit;
            font-size: 12px;
            font-weight: 700;
            cursor: pointer;
            transition: .25s ease;
        }

        .btn-tanya:hover {
            background: #559fd8;
        }

        .tanya-grup {
            margin-top: 26px;
        }

        footer {
            text-align: center;
            color: #91a7bb;
            font-size: 10px;
            line-height: 1.8;
            margin-top: 20px;
        }

        @media (max-width: 380px) {
            .card {
                padding: 23px 16px;
            }

            h1 {
                font-size: 18px;
            }

            .quick-grid,
            .opsi-list {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>
<main class="container">

    <a href="{{ route('home') }}" class="back">
        ← Kembali ke halaman utama
    </a>

    <section class="card">

        <div class="icon">💍</div>

        <h1>Pendaftaran Akad Nikah</h1>

        <p class="intro">
            Masjid Besar Ciparay<br>
            Silakan lengkapi formulir untuk mengajukan pendaftaran akad nikah.
        </p>

        <div class="info">
            📌 <strong>Informasi:</strong><br>
            Formulir ini merupakan pengajuan awal. Jadwal dan persyaratan
            akan dikonfirmasi oleh pengurus Masjid Besar Ciparay.
        </div>

        <!-- ============================================================
             BAGIAN 1 — FORMULIR PENDAFTARAN (di atas)
             ============================================================ -->
        <form id="formPendaftaran">

            <div class="group">
                <label for="namaPria">Nama calon pengantin pria *</label>
                <input type="text" id="namaPria" required
                       placeholder="Nama lengkap calon pengantin pria">
            </div>

            <div class="group">
                <label for="namaWanita">Nama calon pengantin wanita *</label>
                <input type="text" id="namaWanita" required
                       placeholder="Nama lengkap calon pengantin wanita">
            </div>

            <div class="group">
                <label for="namaWali">Nama wali / penanggung jawab</label>
                <input type="text" id="namaWali"
                       placeholder="Nama wali atau penanggung jawab">
            </div>

            <div class="group">
                <label for="telepon">Nomor WhatsApp pemohon *</label>
                <input type="tel" id="telepon" required
                       placeholder="Contoh: 081234567890">
            </div>

            <div class="group">
                <label for="tanggal">Tanggal akad yang diajukan *</label>
                <input type="date" id="tanggal" required>
            </div>

            <div class="group">
                <label for="waktu">Waktu akad yang diajukan *</label>
                <select id="waktu" required>
                    <option value="">Pilih waktu</option>
                    <option value="Pagi">Pagi</option>
                    <option value="Siang">Siang</option>
                    <option value="Sore">Sore</option>
                </select>
            </div>

            <div class="group">
                <label for="alamat">Alamat pemohon *</label>
                <textarea id="alamat" required
                          placeholder="Masukkan alamat lengkap"></textarea>
            </div>

            <div class="group">
                <label for="catatan">Catatan tambahan</label>
                <textarea id="catatan"
                          placeholder="Informasi tambahan jika ada"></textarea>
            </div>

            <button type="submit">
                Kirim Pendaftaran via WhatsApp
            </button>

        </form>

        <a href="https://wa.me/6285134345876"
           class="hotline" target="_blank" rel="noopener noreferrer">
            📱 Hubungi Hotline WhatsApp
        </a>

        <!-- ============================================================
             PEMISAH
             ============================================================ -->
        <div class="pemisah">
            <span>ATAU</span>
        </div>

        <!-- ============================================================
             BAGIAN 2 — SEPUTAR PERTANYAAN (di bawah)
             ============================================================ -->
        <p class="section-judul">Punya Pertanyaan?</p>
        <p class="section-sub">
            Belum perlu mendaftar. Pilih topik di bawah, WhatsApp akan
            terbuka dengan pertanyaan yang sudah tertulis otomatis.
        </p>

        <div class="tanya-grup">
            <p class="quick-title">TANYA CEPAT</p>
            <p class="quick-sub">
                Klik salah satu topik — pesan langsung siap dikirim.
            </p>

            <div class="quick-grid">
                <a class="quick-item" href="#" data-tanya="persyaratan">
                    <span>📋</span><span>Persyaratan Nikah</span>
                </a>

                <a class="quick-item" href="#" data-tanya="biaya">
                    <span>💰</span><span>Biaya &amp; Administrasi</span>
                </a>

                <a class="quick-item" href="#" data-tanya="jadwal">
                    <span>📅</span><span>Cek Jadwal Kosong</span>
                </a>

                <a class="quick-item" href="#" data-tanya="alur">
                    <span>📝</span><span>Alur &amp; Tahapan</span>
                </a>

                <a class="quick-item" href="#" data-tanya="ruangan">
                    <span>🏛️</span><span>Ruang &amp; Fasilitas</span>
                </a>

                <a class="quick-item" href="#" data-tanya="lainnya">
                    <span>❓</span><span>Pertanyaan Lain</span>
                </a>
            </div>
        </div>

        <div class="tanya-grup">
            <p class="quick-title">TANYA LANGSUNG PENGURUS</p>
            <p class="quick-sub">
                Pilih topik, tulis pertanyaan Anda, lalu kirim lewat WhatsApp.
            </p>

            <div class="opsi-list" id="opsiList">
                <label class="opsi"><input type="radio" name="topik" value="persyaratan" checked> Persyaratan</label>
                <label class="opsi"><input type="radio" name="topik" value="biaya"> Biaya</label>
                <label class="opsi"><input type="radio" name="topik" value="jadwal"> Jadwal</label>
                <label class="opsi"><input type="radio" name="topik" value="alur"> Alur</label>
                <label class="opsi"><input type="radio" name="topik" value="lainnya"> Lainnya</label>
            </div>

            <div class="group">
                <label for="pertanyaan">Pertanyaan Anda</label>
                <textarea id="pertanyaan"
                          placeholder="Contoh: Apakah akad nikah bisa dilaksanakan hari Sabtu pagi?"></textarea>
            </div>

            <button type="button" class="btn-tanya" id="btnTanya">
                💬 Kirim Pertanyaan via WhatsApp
            </button>
        </div>

    </section>

    <footer>
        © {{ date('Y') }} Masjid Besar Ciparay<br>
        Beribadah • Belajar • Bersilaturahmi
    </footer>

</main>

<script>
    /* ============================================================
       Nomor resmi pengurus. Format 62..., tanpa + dan tanpa 0 depan.
         0812-3456-7890  ->  6281234567890
       ============================================================ */
    const nomorWhatsAppMasjid = '6285134345876';

    /* Rapikan nomor: 0812... / +62... / 812... -> 62... */
    function normalisasiNomor(nomor) {
        let angka = String(nomor).replace(/\D/g, '');

        if (angka.startsWith('0')) {
            angka = '62' + angka.slice(1);
        } else if (angka.startsWith('620')) {
            angka = '62' + angka.slice(3);
        } else if (angka.startsWith('8')) {
            angka = '62' + angka;
        }

        return angka;
    }

    /* Buka WhatsApp dengan pesan yang sudah terisi */
    function bukaWhatsApp(pesan) {
        const nomorMasjid = normalisasiNomor(nomorWhatsAppMasjid);

        if (nomorMasjid.length < 10 || nomorMasjid.length > 15) {
            alert('Nomor WhatsApp pengurus belum diatur.');
            return;
        }

        const url = 'https://wa.me/' + nomorMasjid +
            '?text=' + encodeURIComponent(pesan);

        window.open(url, '_blank', 'noopener,noreferrer');
    }

    /* ============================================================
       PESAN OTOMATIS
       \u2019 = kutip ’ — jangan diganti kutip lurus, string bisa putus.
       ============================================================ */
    const sapaan = 'Assalamu\u2019alaikum warahmatullahi wabarakatuh.';

    const labelTopik = {
        persyaratan: 'persyaratan akad nikah',
        biaya: 'biaya dan administrasi akad nikah',
        jadwal: 'ketersediaan jadwal akad nikah',
        alur: 'alur dan tahapan pendaftaran akad nikah',
        ruangan: 'ruang dan fasilitas masjid',
        lainnya: 'layanan akad nikah'
    };

    const pesanSiap = {
        persyaratan:
            'Mohon informasi persyaratan akad nikah di Masjid Besar Ciparay, ' +
            'baik syarat dari masjid maupun berkas dari KUA.',

        biaya:
            'Mohon informasi rincian biaya dan administrasi akad nikah ' +
            'di Masjid Besar Ciparay.',

        jadwal:
            'Mohon informasi jadwal akad nikah yang masih tersedia, ' +
            'beserta ketentuan hari dan jam pelaksanaannya.',

        alur:
            'Mohon dijelaskan alur dan tahapan pendaftaran akad nikah ' +
            'di Masjid Besar Ciparay, dari awal sampai hari pelaksanaan.',


        ruangan:
            'Mohon informasi ruang dan fasilitas masjid yang bisa digunakan ' +
            'untuk prosesi akad nikah.',

        lainnya:
            'Saya ingin bertanya mengenai layanan akad nikah ' +
            'di Masjid Besar Ciparay.'
    };

    function susunPesanTopik(topik, pertanyaanTambahan) {
        let pesan = sapaan + '\n\n';
        pesan += 'Saya ' + (pertanyaanTambahan ? 'ingin bertanya' : 'ingin menanyakan') +
                 ' mengenai ' + (labelTopik[topik] || labelTopik.lainnya) + '.\n\n';

        if (pertanyaanTambahan) {
            pesan += pertanyaanTambahan + '\n\n';
        } else {
            pesan += pesanSiap[topik] + '\n\n';
        }

        pesan += 'Mohon informasi dan arahannya. Terima kasih.';
        return pesan;
    }

    /* --- Klik kartu TANYA CEPAT --- */
    document.querySelectorAll('[data-tanya]').forEach(function (tombol) {
        tombol.addEventListener('click', function (event) {
            event.preventDefault();

            const topik = this.getAttribute('data-tanya');
            bukaWhatsApp(susunPesanTopik(topik, ''));
        });
    });

    /* --- Tombol TANYA LANGSUNG PENGURUS --- */
    document.getElementById('btnTanya').addEventListener('click', function () {
        const dipilih = document.querySelector('input[name="topik"]:checked');
        const topik = dipilih ? dipilih.value : 'lainnya';
        const pertanyaan = document.getElementById('pertanyaan').value.trim();

        if (!pertanyaan) {
            alert('Silakan tulis pertanyaan Anda terlebih dahulu.');
            document.getElementById('pertanyaan').focus();
            return;
        }

        bukaWhatsApp(susunPesanTopik(topik, pertanyaan));
    });

    /* --- Hotline ikut membawa pesan --- */
    document.querySelector('.hotline').href =
        'https://wa.me/' + normalisasiNomor(nomorWhatsAppMasjid) +
        '?text=' + encodeURIComponent(susunPesanTopik('lainnya', ''));

    /* --- Tanggal minimal = hari ini --- */
    const tanggalInput = document.getElementById('tanggal');
    const sekarang = new Date();

    tanggalInput.min =
        sekarang.getFullYear() + '-' +
        String(sekarang.getMonth() + 1).padStart(2, '0') + '-' +
        String(sekarang.getDate()).padStart(2, '0');

    /* --- Formulir pendaftaran akad nikah --- */
    document.getElementById('formPendaftaran')
        .addEventListener('submit', function (event) {
            event.preventDefault();

            const namaPria = document.getElementById('namaPria').value.trim();
            const namaWanita = document.getElementById('namaWanita').value.trim();
            const namaWali = document.getElementById('namaWali').value.trim();
            const telepon = document.getElementById('telepon').value.trim();
            const tanggal = document.getElementById('tanggal').value;
            const waktu = document.getElementById('waktu').value;
            const alamat = document.getElementById('alamat').value.trim();
            const catatan = document.getElementById('catatan').value.trim();

            const teleponRapi = normalisasiNomor(telepon);

            if (teleponRapi.length < 10 || teleponRapi.length > 15) {
                alert('Nomor WhatsApp pemohon tidak valid. Contoh: 081234567890');
                return;
            }

            const pesan =
                sapaan + '\n\n' +
                'Saya ingin mengajukan pendaftaran akad nikah di Masjid Besar Ciparay.\n\n' +
                'Nama calon pengantin pria: ' + namaPria + '\n' +
                'Nama calon pengantin wanita: ' + namaWanita + '\n' +
                'Nama wali/penanggung jawab: ' + (namaWali || '-') + '\n' +
                'Nomor WhatsApp pemohon: ' + teleponRapi + '\n' +
                'Tanggal akad yang diajukan: ' + tanggal + '\n' +
                'Waktu akad: ' + waktu + '\n' +
                'Alamat: ' + alamat + '\n' +
                'Catatan: ' + (catatan || '-') + '\n\n' +
                'Mohon informasi persyaratan dan konfirmasi ketersediaan jadwal. ' +
                'Terima kasih.';

            bukaWhatsApp(pesan);
        });
</script>

</body>
</html>