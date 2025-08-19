<!doctype html>
<html lang="en" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $kullanici = \App\Models\Kullanici::findOrFail(request()->kullanici_id);

    
  $paket = \App\Models\Paket::find($kullanici->paket_id);

    // Kullanım yüzdelerini hesapla
    // $internetYuzde = 100 - (($kullanici->harcanan_internet / $paket->internet) * 100);
    // $dakikaYuzde = 100 - (($kullanici->harcanan_dakika / $paket->dakika) * 100);
    // $smsYuzde = 100 - (($kullanici->harcanan_sms / $paket->sms) * 100);
     ?>
    
               <div class="col">
                <div class="card radius-10">
                   <div class="card-body">
                     <div class="d-flex align-items-center gap-2">
                       <div class="fs-5" style="color: #ffc107;">✉️</div>
                       <div><p class="mb-0" style="color: #ffc107; font-weight: 600;">SMS</p></div>
                     </div>
                     <div class="progress mt-3" style="height: 20px;">
                       <div class="progress-bar bg-warning" role="progressbar" 
                            <!-- style="width: {{ $smsYuzde }}%"  -->
                            <!-- aria-valuenow="{{ $smsYuzde }}"  -->
                            aria-valuemin="0" 
                            aria-valuemax="100">
                         <!-- {{ number_format($smsYuzde, 1) }}% -->
                       </div>
                     </div>
                     <div class="mt-2">
                       <span style="color: #666;">Kalan: {{ $kalanSMS }} SMS</span>
                       <span class="float-end" style="color: #666;">Toplam: {{ $paket->sms }} SMS</span>
                     </div>
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #ffc107;">{{ $kullanici->harcanan_sms }} SMS</h4>
                        <p class="mb-0 font-13">Bu Ay Kullanılan</p>
                      </div>
                      <div class="ms-auto">
                        <!-- <div class="w_chart" id="chart7" data-percent="{{ $smsYuzde }}"> -->
                          <span class="w_percent"></span>
	  <link href="assets/css/pace.min.css" rel="stylesheet" />
	  <script src="assets/js/pace.min.js"></script>

    <!--plugins-->
    <link href="assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />

    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">

    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

    <title>Turkcell Pro - Kullanım Panosu</title>
  </head>
  <body>
    

 <!--start wrapper-->
    <div class="wrapper">
       <!--start sidebar -->
       <aside class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
          <div>
            <h4 class="logo-text" style="color: #0066cc;">
              📱 <span style="background: linear-gradient(45deg, #0066cc, #00aaff, #0099ff); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;">Turkcell</span> <span style="color: #ff6600;">Pro</span>
            </h4>
          </div>
          <div class="toggle-icon ms-auto"><ion-icon name="menu-sharp"></ion-icon>
          </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
          <li>
            <a href="profile.html">
              <div class="parent-icon"><ion-icon name="person-sharp"></ion-icon>
              </div>
              <div class="menu-title">Profil</div>
            </a>
          </li>
          <li>
            <a href="dashboard.html">
              <div class="parent-icon"><ion-icon name="speedometer-sharp"></ion-icon>
              </div>
              <div class="menu-title">Kullanım Panosu</div>
            </a>
          </li>
          <li>
            <a href="tarifeler.html">
              <div class="parent-icon"><ion-icon name="pricetags-sharp"></ion-icon>
              </div>
              <div class="menu-title">Tarife Kataloğu</div>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <div class="parent-icon"><ion-icon name="card-sharp"></ion-icon>
              </div>
              <div class="menu-title">Faturalar</div>
            </a>
          </li>
          <li>
            <a href="javascript:;">
              <div class="parent-icon"><ion-icon name="settings-sharp"></ion-icon>
              </div>
              <div class="menu-title">Ayarlar</div>
            </a>
          </li>
        </ul>
        <!--end navigation-->
        
        </ul>
        <!--end navigation-->
     </aside>
     <!--end sidebar -->

        <!--start top header-->
          <header class="top-header">
            <nav class="navbar navbar-expand gap-3">
             <div class="top-navbar-right ms-auto">
              <ul class="navbar-nav align-items-center">
                <li class="nav-item">
                  <a class="nav-link dark-mode-icon" href="javascript:;">
                    <div class="mode-icon">
                      <ion-icon name="moon-sharp"></ion-icon> 
                    </div>
                  </a>
                </li>
              </ul>
             </div>
          </header>
        <!--end top header-->


        <!-- start page content wrapper-->
        <div class="page-content-wrapper">
          <!-- start page content-->
         <div class="page-content">

          <div class="container-fluid">
            <!-- Hat Türü Bilgisi -->
            <div class="row mb-4">
               <div class="col-12">
                 <div class="card radius-10" style="background: linear-gradient(45deg, #0066cc, #00aaff); border: none;">
                   <div class="card-body text-center">
                     <div class="d-flex align-items-center justify-content-center gap-3">
                       <div style="font-size: 2rem;">📋</div>
                       <div class="text-white">
                         @if(isset($kullanici))
                         <h5 class="mb-0 text-white">Hat Türü: {{ $kullanici->hat_turu }}</h5>
                         <p class="mb-0 text-white-50">Premium Müşteri</p>
                       </div>
                       <div style="font-size: 2rem;">✅</div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div class="row">
               <div class="col-12">
                 <h5 class="mb-3" style="color: #0066cc; font-weight: 600;">
                   📊 Kalan Kullanımlarım
                 </h5>
               </div>
             </div>

             <div class="row row-cols-1 row-cols-lg-3">
              <div class="col">
                <div class="card radius-10">
                   <div class="card-body">
                     <div class="d-flex align-items-center gap-2">
                       <div class="fs-5" style="color: #0066cc;">📶</div>
                       <div><p class="mb-0" style="color: #0066cc; font-weight: 600;">İnternet</p></div>
                     </div>
                     <div class="progress mt-3" style="height: 20px;">
                       <div class="progress-bar bg-gradient-primary" role="progressbar" 
                            <!-- style="width: {{ $internetYuzde }}%"  -->
                            <!-- aria-valuenow="{{ $internetYuzde }}"  -->
                            aria-valuemin="0" 
                            aria-valuemax="100">
                         <!-- {{ number_format($internetYuzde, 1) }}% -->
                       </div>
                     </div>
                     <div class="mt-2">
                       <span style="color: #666;">Kalan: {{ $kalanInternet }} GB</span>
                       <span class="float-end" style="color: #666;">Toplam: {{ $paket->internet }} GB</span>
                     </div>
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #0066cc;">{{ $kullanici->kalan_gb }} GB</h4>
                        <p class="mb-0 font-13">Bu Ay Kullanılan</p>
                      </div>
                      <div class="ms-auto">
                        <div class="w_chart" id="chart8" data-percent="68">
                          <span class="w_percent"></span>
                        </div>
                      </div>
                     </div>
                   </div>
                  </div>
               </div>
               <div class="col">
                <div class="card radius-10">
                   <div class="card-body">
                     <div class="d-flex align-items-center gap-2">
                       <div class="fs-5" style="color: #28a745;">📞</div>
                       <div><p class="mb-0" style="color: #28a745; font-weight: 600;">Dakika</p></div>
                     </div>
                     <div class="progress mt-3" style="height: 20px;">
                       <div class="progress-bar bg-success" role="progressbar" 
                            <!-- style="width: {{ $dakikaYuzde }}%"  -->
                            <!-- aria-valuenow="{{ $dakikaYuzde }}"  -->
                            aria-valuemin="0" 
                            aria-valuemax="100">
                         <!-- {{ number_format($dakikaYuzde, 1) }}% -->
                       </div>
                     </div>
                     <div class="mt-2">
                       <span style="color: #666;">Kalan: {{ $kalanDakika }} DK</span>
                       <span class="float-end" style="color: #666;">Toplam: {{ $paket->dakika }} DK</span>
                     </div>
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #28a745;">{{ $kullanici->harcanan_dakika }} DK</h4>
                        <p class="mb-0 font-13">Bu Ay Kullanılan</p>
                      </div>
                     </div>
                   </div>
                  </div>
               </div>
               <div class="col">
                <div class="card radius-10">
                   <div class="card-body">
                     <div class="d-flex align-items-center gap-2">
                       <div class="fs-5" style="color: #ffc107;">💬</div>
                       <div><p class="mb-0" style="color: #ffc107; font-weight: 600;">SMS</p></div>
                     </div>
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #ffc107;">{{ $kullanici->kalan_sms }} SMS</h4>
                        <p class="mb-0 font-13">Bu Ay Kullanılan</p>
                      </div>
                      <div class="ms-auto">
                        <div class="w_chart" id="chart10" data-percent="52">
                          <span class="w_percent"></span>
                           @else
          <p></p>
        @endif
                        </div>
                      </div>
                     </div>
                   </div>
                  </div>
               </div>
             </div><!--end row-->

            

          </div>
          <!-- end page content-->
         </div>
         


         <!--Start Back To Top Button-->
		     <a href="javaScript:;" class="back-to-top"><ion-icon name="arrow-up-outline"></ion-icon></a>
         <!--End Back To Top Button-->
  
         <!--start switcher-->
         <div class="switcher-body">
          <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling"><ion-icon name="color-palette-sharp" class="me-0"></ion-icon></button>
          <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false" tabindex="-1" id="offcanvasScrolling">
            <div class="offcanvas-header border-bottom">
              <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
              <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
              <h6 class="mb-0">Theme Variation</h6>
              <hr>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1" checked>
                <label class="form-check-label" for="LightTheme">Light</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
                <label class="form-check-label" for="DarkTheme">Dark</label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3">
                <label class="form-check-label" for="SemiDark">Semi Dark</label>
              </div>
              <hr/>
              <h6 class="mb-0">Header Colors</h6>
              <hr/>
              <div class="header-colors-indigators">
                <div class="row row-cols-auto g-3">
                  <div class="col">
                    <div class="indigator headercolor1" id="headercolor1"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor2" id="headercolor2"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor3" id="headercolor3"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor4" id="headercolor4"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor5" id="headercolor5"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor6" id="headercolor6"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor7" id="headercolor7"></div>
                  </div>
                  <div class="col">
                    <div class="indigator headercolor8" id="headercolor8"></div>
                  </div>
                </div>
              </div>
              
            </div>
          </div>
         </div>
         <!--end switcher-->


         <!--start overlay-->
          <div class="overlay"></div>
         <!--end overlay-->

     </div>
  <!--end wrapper-->


    <!-- JS Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/plugins/simplebar/js/simplebar.min.js"></script>
    <script src="assets/plugins/metismenu/js/metisMenu.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <!--plugins-->
    <script src="assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js"></script>
    <script src="assets/plugins/apexcharts-bundle/js/apexcharts.min.js"></script>
    <script src="assets/plugins/easyPieChart/jquery.easypiechart.js"></script>
    <script src="assets/js/widgets.js"></script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>