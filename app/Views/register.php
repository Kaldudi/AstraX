<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar ke X</title>
    <link rel="stylesheet" href="<?= base_url('login.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-content">
            <div class="left-section">
                <h1 style="font-size: 48px; margin-bottom: 32px;">Bergabung dengan X sekarang.</h1>
                
                <div class="auth-buttons">
                    <div class="input-group">
                        <input type="text" id="reg-name" placeholder=" " class="floating-input">
                        <label for="reg-name" class="floating-label">Nama</label>
                    </div>

                    <div class="input-group">
                        <input type="email" id="reg-email" placeholder=" " class="floating-input">
                        <label for="reg-email" class="floating-label">Email</label>
                    </div>

                    <div class="input-group">
                        <input type="password" id="reg-password" placeholder=" " class="floating-input">
                        <label for="reg-password" class="floating-label">Kata Sandi</label>
                    </div>
                    
                    <button class="btn btn-primary" id="register-btn" disabled style="margin-top: 24px;">Daftar</button>
                    
                    <p class="terms">
                        Dengan mendaftar, Anda menyetujui <a href="#">Syarat Layanan</a>, <a href="#">Kebijakan Privasi</a>, dan <a href="#">Penggunaan Cookie</a> kami.
                    </p>

                    <div style="margin-top: 40px; font-size: 15px; color: var(--text-color);">
                        Sudah punya akun? <a href="<?= base_url('login') ?>" style="color: var(--primary-color); text-decoration: none; font-weight: bold;">Masuk</a>
                    </div>
                </div>
            </div>
            
            <div class="right-section">
                <img src="<?= base_url('Images/AstraX.jpg') ?>" class="large-logo" alt="AstraX Logo" style="border-radius: 50%;">
            </div>
        </div>
        
        <footer class="footer">
            <a href="#">Tentang</a>
            <a href="#">Dapatkan Aplikasi</a>
            <a href="#">Grok</a>
            <a href="#">Bantuan</a>
            <a href="#">Persyaratan</a>
            <a href="#">Privasi</a>
            <a href="#">Kuki</a>
            <a href="#">Karier</a>
            <a href="#">Iklan dan Bisnis</a>
            <a href="#">Pengembang</a>
            <a href="#">Berita</a>
            <a href="#">Aksesibilitas</a>
            <span>© 2026 X Corp.</span>
        </footer>
    </div>
    <script>
        const inputs = [document.getElementById('reg-name'), document.getElementById('reg-email'), document.getElementById('reg-password')];
        const btn = document.getElementById('register-btn');

        inputs.forEach(input => {
            input.addEventListener('input', function() {
                const allFilled = inputs.every(i => i.value.trim().length > 0);
                if (allFilled) {
                    btn.removeAttribute('disabled');
                    btn.classList.add('active');
                } else {
                    btn.setAttribute('disabled', 'true');
                    btn.classList.remove('active');
                }
            });
        });

        btn.addEventListener('click', function() {
            alert('Akun berhasil dibuat! Silakan masuk dengan dummy email.');
            window.location.href = 'login.html';
        });
    </script>
</body>
</html>
