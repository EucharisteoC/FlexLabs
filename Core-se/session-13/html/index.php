<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session 13 | Basic HTML & CSS</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="page-container">
        <img src="images/logo.jpeg" alt="Session-13 - Basic HTML & CSS">
    </header>
    <main class ="page-container">
        <section>
            <h1 id="page-title">Tambah Customer Baru</h1>
            <p class="intro">Catat informasi customer baru agar tim bisa menghubungi mereka dengan mudah</p>
        </section>

        <section class="form-card">
            <h2 id="form-title">Informasi Customer</h2>
            <p class="form-note">Kolom bertanda <span class="required">*</span> wajib diisi. </p>
        </section>

        <form action="" id="customerForm">
            <div class="form-grid">
                <div class="form-group">
                    <label for="customerName">Nama Lengkap<span class="required">*</span></label>
                    <input type="text" name="customerName" id="customerName" placeholder="Contoh: Nadia Putri">
                </div>
                <div class="form-group">
                    <label for="customerEmail">Email<span class="required">*</span></label>
                    <input type="email" name="customerEmail" id="customerEmail" placeholder="Contoh: nadia.putri@gmail.com">
                </div>
                <div class="form-group">
                    <label for="customerPhone">Nomor HP<span class="required">*</span></label>
                    <input type="text" name="customerPhone" id="customerPhone" placeholder="Contoh: 08128122000">
                </div>
                <div class="form-group">
                    <label for="customerType">Tipe<span class="required">*</span></label>
                    <select name="customerType" id="customerType">
                        <option value="">Pilih tipe customer</option>
                        <option value="Individu">Individu</option>
                        <option value="Bisnis">Bisnis</option>
                        <option value="Organisasi">Organisasi</option>
                    </select>
            </div>
            <div class="form-group">
                <label for="customerCity">Kota<span class="required">*</span></label>
                <input type="text" name="customerCity" id="customerCity" placeholder="Contoh: Jakarta">
            </div>
            <div class="form-group">
                <label for="customerAddress">Alamat<span class="required">*</span></label>
                <textarea name="customerAddress" id="customerAddress" placeholder="Contoh: Nama jalan, kecamatan, dan detail lainnya"></textarea>
            </div>
            <div class="form-action">
                <button class="button-secondary" type="reset">Hapus Data</button>
                <button class="button-primary" type="submit">Simpan Data</button>
            </div>
        </form>

    </main>

</body>
</html>