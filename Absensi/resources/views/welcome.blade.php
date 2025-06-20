<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>HALAMAN LOGIN</title>
  <!-- base:css -->
  <link rel="stylesheet" href="../../vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../vendors/css/vendor.bundle.base.css">
  <!-- inject:css -->
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="shortcut icon" href="../../images/favicon.png" />
  <style>
    html, body {
      height: 100%;
      margin: 0;
    }
    .full-page-wrapper {
      min-height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #f5f5f5;
    }
    .auth-form-light {
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    .brand-logo h1 {
      text-align: center;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container-fluid full-page-wrapper">
    <div class="col-lg-4">
      <div class="auth-form-light text-left py-5 px-4 px-sm-5">
        <div class="brand-logo mb-4">
          <h1>Selamat Datang</h1>
        </div>
        <h4 class="text-center">Halo! Silakan masuk ke akun Anda</h4>
        <h6 class="font-weight-light text-center mb-4">Login untuk melanjutkan.</h6>

        <form class="pt-3">
          <div class="form-group">
            <input type="email" class="form-control form-control-lg" placeholder="Email atau Nama Pengguna">
          </div>
          <div class="form-group">
            <input type="password" class="form-control form-control-lg" placeholder="Kata Sandi">
          </div>
          <div class="mt-3">
            <a class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" href="../../index.html">MASUK</a>
          </div>
          <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
              <label class="form-check-label text-muted">
                <input type="checkbox" class="form-check-input"> Ingat saya
              </label>
            </div>
            <a href="#" class="auth-link text-black">Lupa kata sandi?</a>
          </div>
          <div class="mb-2">
            <button type="button" class="btn btn-block btn-facebook auth-form-btn">
              <i class="mdi mdi-facebook me-2"></i> Masuk dengan Facebook
            </button>
          </div>
          <div class="text-center mt-4 font-weight-light">
            Belum punya akun? <a href="register.html" class="text-primary">Daftar</a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- base:js -->
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../js/jquery.cookie.js" type="text/javascript"></script>
  <script src="../../js/off-canvas.js"></script>
  <script src="../../js/hoverable-collapse.js"></script>
  <script src="../../js/template.js"></script>
</body>
</html>
