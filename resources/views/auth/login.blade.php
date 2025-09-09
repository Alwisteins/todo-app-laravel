<!doctype html>
<html lang="id" data-bs-theme="auto">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login • Aplikasi</title>

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
      body { min-height: 100vh; }
      .brand { letter-spacing: .5px; }
    </style>
  </head>
  <body class="bg-light d-flex align-items-center">

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-sm-10 col-md-7 col-lg-5 col-xl-4">
          <div class="text-center mb-4">
            <div class="fw-bold fs-4 brand">TODOAPP</div>
            <div class="text-muted">Silakan masuk ke akun Anda</div>
          </div>

          <div class="card shadow-sm border-0">
            <div class="card-body p-4 p-md-4">
              <form class="needs-validation" action="{{ route('auth.handleLogin') }}" method="post" novalidate>
                <!-- Jika pakai framework, tambahkan CSRF token di sini -->
                @csrf

                <div class="mb-3">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="nama@contoh.com" required>
                  <div class="invalid-feedback">Mohon masukkan email yang valid.</div>
                </div>

                <div class="mb-3">
                  <label for="password" class="form-label">Kata Sandi</label>
                  <div class="input-group" id="passwordWrapper">
                    <input type="password" class="form-control" id="password" name="password" minlength="6" required>
                    <button class="btn btn-outline-secondary" type="button" id="togglePassword" aria-label="Tampilkan/Sembunyikan kata sandi">Tampilkan</button>
                    <div class="invalid-feedback">Kata sandi minimal 6 karakter.</div>
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="1" id="remember" name="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                  </div>
                  <a href="#" class="small">Lupa kata sandi?</a>
                </div>

                <button class="btn btn-primary w-100" type="submit">Masuk</button>

                <div class="text-center mt-3">
                  <span class="text-muted">Belum punya akun?</span>
                  <a href="#">Daftar</a>
                </div>
              </form>
            </div>
          </div>

          <p class="text-center text-muted mt-3 mb-0 small">&copy; <span id="year"></span> TODOAPP</p>
        </div>
      </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script>
      // Tahun otomatis
      document.getElementById('year').textContent = new Date().getFullYear();

      // Validasi Bootstrap
      (() => {
        const forms = document.querySelectorAll('.needs-validation');
        Array.from(forms).forEach(form => {
          form.addEventListener('submit', event => {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      })();

      // Toggle show/hide password
      const toggleBtn = document.getElementById('togglePassword');
      const pwdInput = document.getElementById('password');
      toggleBtn.addEventListener('click', () => {
        const isPwd = pwdInput.getAttribute('type') === 'password';
        pwdInput.setAttribute('type', isPwd ? 'text' : 'password');
        toggleBtn.textContent = isPwd ? 'Sembunyikan' : 'Tampilkan';
      });
    </script>
  </body>
</html>
