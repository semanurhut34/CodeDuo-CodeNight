<!doctype html>
<html lang="en" class="light-theme">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet" />
  <script src="assets/js/pace.min.js"></script>

  <!--plugins-->
  <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/icons.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

  <title>Code Duo</title>
</head>

<body>

  <div class="login-bg-overlay au-reset-password-basic"></div>

  <!--start wrapper-->
  <div class="wrapper">
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-white p-3">
        <div class="container-fluid">
          <a href="javascript:;" class="navbar-brand">
            <h3 class="mb-0" style="font-weight: 700; text-shadow: 0 4px 8px rgba(0, 102, 204, 0.3); letter-spacing: 1px; font-size: 1.8rem; color: #0066cc;">
              📱 <span style="background: linear-gradient(45deg, #0066cc, #00aaff, #0099ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Turkcell</span> <span style="color: #ff6600;">Pro</span>
            </h3>
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          </div>
        </div>
      </nav>
    </header>
    <div class="container">
      <div class="row">
        <div class="col-xl-5 col-lg-6 col-md-7 mx-auto">
          <div class="reset-passowrd">
            <div class="card radius-10 w-100 mt-8">
              <div class="card-body p-4">
                <div class="text-center">
                  <div class="mb-3">
                    <span style="font-size: 3rem;">📱</span>
                  </div>
                  <h4 style="color: #0066cc; font-weight: 600;">Müşteri Girişi</h4>
                  <p style="color: #666;">Kullanım detaylarınızı görüntülemek ve size özel tarifeleri keşfetmek için giriş yapın</p>
                </div>
                <form class="form-body row g-3" action="{{ route('profile') }}" method="POST">

                  @csrf
                  <div class="col-12">
    <label class="form-label" style="font-weight: 500;">Kullanıcı Seçiniz</label>
   <select class="form-select" name="kullanici_id" required>
    <option value="">Kullanıcı seçiniz...</option>
    @foreach($kullanicilar as $kullanici)
        <option value="{{ $kullanici->id }}">
            {{ $kullanici->adi }} {{ $kullanici->soyadi }} - {{ $kullanici->numara }}
        </option>
    @endforeach
</select>

</div>

                  <div class="col-12 col-lg-12">
                    <div class="d-grid">
    <button type="submit"  class="btn btn-primary" style="background: linear-gradient(45deg, #0066cc, #00aaff); border: none; font-weight: 600;">
        🚀 Giriş Yap
    </button>
</div>

                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="my-5">
      <div class="container">
        <div class="d-flex align-items-center gap-4 fs-5 justify-content-center social-login-footer">
          <a href="javascript:;">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-linkedin"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-github"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-facebook"></ion-icon>
          </a>
          <a href="javascript:;">
            <ion-icon name="logo-pinterest"></ion-icon>
          </a>
        </div>
        <div class="text-center">
          <p class="my-4">Copyright © 2021 UI Admin by Codervent.</p>
        </div>
      </div>
    </footer>
  </div>
  <!--end wrapper-->



</body>

</html>
