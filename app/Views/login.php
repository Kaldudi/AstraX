<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk ke X</title>
    <link rel="stylesheet" href="<?= base_url('login.css') ?>">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;800&display=swap" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="login-content">
            <div class="left-section">
                <h1>Sedang tren<br>saat ini.</h1>
                
                <div class="auth-buttons">
                    <button class="btn btn-outline">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M17.84 15.34c-1.12-.13-2.22-.38-3.26-.74-.3-.1-.63-.02-.85.2l-2.2 2.2c-2.83-1.44-5.15-3.75-6.59-6.59l2.2-2.21c.28-.27.36-.66.25-1.01C7.03 6.13 6.78 5.03 6.65 3.91 6.55 3.01 5.76 2.31 4.84 2.31H3.04C2.04 2.31 1.21 3.14 1.25 4.14 1.63 13.91 9.4 21.68 19.17 22.06c1 .04 1.83-.79 1.83-1.79v-1.8c0-.92-.7-1.71-1.6-1.81z"/></svg>
                        <span>Lanjutkan dengan telepon</span>
                    </button>
                    <button class="btn btn-outline">
                        <svg viewBox="0 0 48 48" width="20" height="20"><path fill="#EA4335" d="M24 9.5c3.54 0 6.71 1.22 9.21 3.6l6.85-6.85C35.9 2.38 30.47 0 24 0 14.62 0 6.51 5.38 2.56 13.22l7.98 6.19C12.43 13.7 17.74 9.5 24 9.5z"/><path fill="#4285F4" d="M46.98 24.55c0-1.57-.15-3.09-.38-4.55H24v9.02h12.94c-.58 2.96-2.26 5.48-4.78 7.18l7.73 6c4.51-4.18 7.09-10.36 7.09-17.65z"/><path fill="#FBBC05" d="M10.53 28.59c-.48-1.45-.76-2.99-.76-4.59s.27-3.14.76-4.59l-7.98-6.19C.92 16.46 0 20.12 0 24c0 3.88.92 7.54 2.56 10.78l7.97-6.19z"/><path fill="#34A853" d="M24 48c6.48 0 11.93-2.13 15.89-5.81l-7.73-6c-2.15 1.45-4.92 2.3-8.16 2.3-6.26 0-11.57-4.22-13.47-9.91l-7.98 6.19C6.51 42.62 14.62 48 24 48z"/></svg>
                        <span>Lanjutkan dengan Google</span>
                    </button>
                    <button class="btn btn-outline">
                        <svg viewBox="0 0 24 24" width="20" height="20" fill="currentColor"><path d="M17.05 20.28c-.98.95-2.05.8-3.08.35-1.09-.46-2.09-.48-3.24 0-1.44.62-2.2.44-3.06-.35C2.79 15.25 3.51 7.59 9.05 7.31c1.35.07 2.29.74 3.08.8 1.18-.19 2.24-.86 3.64-.8 1.49.07 2.87.69 3.75 1.95-3.09 1.76-2.58 6.13.25 7.42-.68 1.63-1.63 2.76-2.72 3.6zM12.03 7.25C11.9 4.8 13.92 2.91 16.14 3c.18 2.65-2.5 4.54-4.11 4.25z"/></svg>
                        <span>Lanjutkan dengan Apple</span>
                    </button>
                    
                    <div class="divider">
                        <span>atau</span>
                    </div>
                    
                    <form action="<?= base_url('login') ?>" method="POST" style="width: 100%;">
                        <div class="input-group">
                            <input type="text" id="email" name="email" placeholder=" " class="floating-input" required>
                            <label for="email" class="floating-label">Email atau nama pengguna</label>
                        </div>
                        
                        <div class="input-group" style="margin-top: 15px;">
                            <input type="password" id="password" name="password" placeholder=" " class="floating-input" required>
                            <label for="password" class="floating-label">Kata sandi</label>
                        </div>
                        
                        <?php if (session()->getFlashdata('error')): ?>
                            <div style="color: #ff3333; margin-top: 10px; font-size: 14px; padding-left: 8px;"><?= session()->getFlashdata('error') ?></div>
                        <?php endif; ?>
                        
                        <button type="submit" class="btn btn-primary active" id="continue-btn" style="width: 100%; margin-top: 20px; cursor: pointer; border: none; font-size: 15px; font-weight: bold;">Masuk</button>
                    </form>
                    
                    <p class="terms">
                        Dengan melanjutkan, Anda menyetujui <a href="#">Syarat Layanan</a>, <a href="#">Kebijakan Privasi</a>, dan <a href="#">Penggunaan Cookie</a> kami.
                    </p>

                    <div style="margin-top: 40px; font-size: 15px; color: var(--text-color);">
                        Belum punya akun? <a href="<?= base_url('register') ?>" style="color: var(--primary-color); text-decoration: none; font-weight: bold;">Daftar</a>
                    </div>
                </div>
            </div>
            
            <div class="right-section">
                <img src="<?= base_url('Images/AstraX.jpg') ?>" class="large-logo" alt="AstraX Logo" style="border-radius: 50%;">
            </div>
        </div>
        
        <div class="qr-box">
            <p>Pindai untuk mendapatkan aplikasi</p>
            <div class="qr-code">
                <img src="https://api.qrserver.com/v1/create-qr-code/?size=100x100&data=https://twitter.com" alt="QR Code">
                <div class="qr-center-logo">
                    <img src="<?= base_url('Images/AstraX.jpg') ?>" style="width: 100%; height: 100%; border-radius: 4px;">
                </div>
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
        document.getElementById('username').addEventListener('input', function() {
            const btn = document.getElementById('continue-btn');
            if (this.value.trim().length > 0) {
                btn.removeAttribute('disabled');
                btn.classList.add('active');
            } else {
                btn.setAttribute('disabled', 'true');
                btn.classList.remove('active');
            }
        });

        document.getElementById('continue-btn').addEventListener('click', function() {
            const email = document.getElementById('username').value.trim();
            if (email === 'albertfedlyano@gmail.com') {
                window.location.href = 'index.html';
            } else {
                alert('Email tidak terdaftar. Gunakan email dummy: albertfedlyano@gmail.com');
            }
        });
    </script>
</body>
</html>
