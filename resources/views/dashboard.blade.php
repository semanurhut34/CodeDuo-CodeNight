<!doctype html>
<html l    <!--Theme Styles-->
    <link href="assets/css/dark-theme.css" rel="stylesheet" />
    <link href="assets/css/semi-dark.css" rel="stylesheet" />
    <link href="assets/css/header-colors.css" rel="stylesheet" />

    <!-- Custom styles for sidebar overflow fix -->
    <style>
      .page-content-wrapper {
        overflow-x: hidden !important;
      }
      .page-content {
        overflow-x: hidden !important;
      }
      .container-fluid {
        overflow-x: hidden !important;
        max-width: 100% !important;
      }
      .row {
        margin-left: 0 !important;
        margin-right: 0 !important;
      }
      .col, .col-md-3, .col-md-4, .col-12 {
        padding-left: 12px !important;
        padding-right: 12px !important;
      }
      /* Sidebar açık durumda sayfa genişliğini sınırla */
      @media (min-width: 992px) {
        .sidebar-wrapper.toggled ~ .page-content-wrapper {
          width: calc(100% - 240px) !important;
          overflow-x: hidden !important;
        }
      }
    </style>

      <title>Code Duo - Kullanım Panosu</title>n" class="light-theme">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <!-- loader-->
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
                         <h5 class="mb-0 text-white">Hat Türü: Faturalı</h5>
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
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #0066cc;">8.5 GB</h4>
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
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #28a745;">420 dk</h4>
                        <p class="mb-0 font-13">Bu Ay Kullanılan</p>
                      </div>
                      <div class="ms-auto">
                        <div class="w_chart" id="chart9" data-percent="84">
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
                       <div class="fs-5" style="color: #ffc107;">💬</div>
                       <div><p class="mb-0" style="color: #ffc107; font-weight: 600;">SMS</p></div>
                     </div>
                     <div class="d-flex align-items-center mt-3">
                      <div>
                        <h4 class="mb-0" style="color: #ffc107;">156 SMS</h4>
                        <p class="mb-0 font-13">Bu Ay Kullanılan</p>
                      </div>
                      <div class="ms-auto">
                        <div class="w_chart" id="chart10" data-percent="52">
                          <span class="w_percent"></span>
                        </div>
                      </div>
                     </div>
                   </div>
                  </div>
               </div>
             </div><!--end row-->

             <!-- Kullanım Detay Grafikleri -->
             <div class="row mt-4">
               <div class="col-12">
                 <h5 class="mb-3" style="color: #0066cc; font-weight: 600;">
                   📈 Kullanım Detayları
                 </h5>
               </div>
             </div>

             <div class="row row-cols-1 row-cols-lg-3">
               <!-- Günlük Kullanım -->
               <div class="col mb-3">
                 <div class="card radius-10" style="height: 160px;">
                   <div class="card-body text-center p-3">
                     <h6 class="mb-2" style="color: #0066cc; font-weight: 600; font-size: 0.85rem;">📅 Günlük</h6>
                     
                     <!-- 3 Grafik Yan Yana -->
                     <div class="d-flex justify-content-around align-items-center" style="height: 100px;">
                       <!-- İnternet -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#0066cc 0% 65%, #e6e6e6 65% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #0066cc;">1GB</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">İnternet</div>
                       </div>
                       
                       <!-- Dakika -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#28a745 0% 45%, #e6e6e6 45% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #28a745;">45dk</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">Dakika</div>
                       </div>
                       
                       <!-- SMS -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#28a745 0% 30%, #e6e6e6 30% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #28a745;">12</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">SMS</div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <!-- Haftalık Kullanım -->
               <div class="col mb-3">
                 <div class="card radius-10" style="height: 160px;">
                   <div class="card-body text-center p-3">
                     <h6 class="mb-2" style="color: #0066cc; font-weight: 600; font-size: 0.85rem;">📊 Haftalık</h6>
                     
                     <!-- 3 Grafik Yan Yana -->
                     <div class="d-flex justify-content-around align-items-center" style="height: 100px;">
                       <!-- İnternet -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#ffc107 0% 85%, #e6e6e6 85% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #ffc107;">6.8GB</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">İnternet</div>
                       </div>
                       
                       <!-- Dakika -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#ffc107 0% 70%, #e6e6e6 70% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #ffc107;">285dk</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">Dakika</div>
                       </div>
                       
                       <!-- SMS -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#28a745 0% 60%, #e6e6e6 60% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #28a745;">78</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">SMS</div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <!-- Geçen Ay Kullanım -->
               <div class="col mb-3">
                 <div class="card radius-10" style="height: 160px;">
                   <div class="card-body text-center p-3">
                     <h6 class="mb-2" style="color: #0066cc; font-weight: 600; font-size: 0.85rem;">📆 Geçen Ay</h6>
                     
                     <!-- 3 Grafik Yan Yana -->
                     <div class="d-flex justify-content-around align-items-center" style="height: 100px;">
                       <!-- İnternet -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#dc3545 0% 90%, #e6e6e6 90% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.6rem; font-weight: bold; color: #dc3545;">18.2GB</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">İnternet</div>
                       </div>
                       
                       <!-- Dakika -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#dc3545 0% 95%, #e6e6e6 95% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.6rem; font-weight: bold; color: #dc3545;">1240dk</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">Dakika</div>
                       </div>
                       
                       <!-- SMS -->
                       <div class="text-center">
                         <div class="progress-chart mx-auto" style="width: 60px; height: 60px; position: relative;">
                           <div style="width: 60px; height: 60px; border-radius: 50%; background: conic-gradient(#ffc107 0% 80%, #e6e6e6 80% 100%); display: flex; align-items: center; justify-content: center;">
                             <div style="background: white; border-radius: 50%; width: 45px; height: 45px; display: flex; flex-direction: column; align-items: center; justify-content: center;">
                               <div style="font-size: 0.7rem; font-weight: bold; color: #ffc107;">245</div>
                             </div>
                           </div>
                         </div>
                         <div style="font-size: 0.6rem; color: #666; margin-top: 2px;">SMS</div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div><!--end usage charts row-->

             <!-- Ay Sonu Tahmin Bölümü -->
             <div class="row mt-4">
               <div class="col-12">
                 <h5 class="mb-3" style="color: #0066cc; font-weight: 600;">
                   🔮 Ay Sonu Tahminleri
                 </h5>
               </div>
             </div>

             <div class="row">
               <!-- Kalan Gün Bilgisi -->
               <div class="col-md-4 mb-3">
                 <div class="card radius-10" style="background: linear-gradient(45deg, #17a2b8, #20c997); border: none;">
                   <div class="card-body text-center text-white">
                     <div style="font-size: 2rem; margin-bottom: 10px;">📅</div>
                     <h4 class="mb-1">12 Gün</h4>
                     <p class="mb-0" style="font-size: 0.9rem;">Ay Sonuna Kalan</p>
                     <small style="opacity: 0.8;">&nbsp;</small>
                   </div>
                 </div>
               </div>

               <!-- Beklenen İnternet Tüketimi -->
               <div class="col-md-4 mb-3">
                 <div class="card radius-10" style="background: linear-gradient(45deg, #0066cc, #00aaff); border: none;">
                   <div class="card-body text-center text-white">
                     <div style="font-size: 2rem; margin-bottom: 10px;">📶</div>
                     <h4 class="mb-1">24.5 GB</h4>
                     <p class="mb-0" style="font-size: 0.9rem;">Beklenen Toplam İnternet</p>
                     <small style="opacity: 0.8;">Günlük ort: 1.2GB</small>
                   </div>
                 </div>
               </div>

               <!-- Beklenen Dakika Tüketimi -->
               <div class="col-md-4 mb-3">
                 <div class="card radius-10" style="background: linear-gradient(45deg, #28a745, #20c997); border: none;">
                   <div class="card-body text-center text-white">
                     <div style="font-size: 2rem; margin-bottom: 10px;">📞</div>
                     <h4 class="mb-1">960 dk</h4>
                     <p class="mb-0" style="font-size: 0.9rem;">Beklenen Toplam Dakika</p>
                     <small style="opacity: 0.8;">Günlük ort: 35dk</small>
                   </div>
                 </div>
               </div>
             </div>

             <!-- Uyarı/Öneri Kartları -->
             <div class="row mt-2">
               <div class="col-md-6 mb-3">
                 <div class="card radius-10" style="border-left: 4px solid #ffc107;">
                   <div class="card-body">
                     <div class="d-flex align-items-center gap-2">
                       <div style="font-size: 1.5rem;">⚠️</div>
                       <div>
                         <h6 class="mb-1" style="color: #ffc107;">İnternet Kullanım Uyarısı</h6>
                         <p class="mb-0" style="font-size: 0.85rem;">Mevcut hızla ay sonunda 4.5GB aşım bekleniyor.</p>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>

               <div class="col-md-6 mb-3">
                 <div class="card radius-10" style="border-left: 4px solid #28a745;">
                   <div class="card-body">
                     <div class="d-flex align-items-center gap-2">
                       <div style="font-size: 1.5rem;">💡</div>
                       <div>
                         <h6 class="mb-1" style="color: #28a745;">Tasarruf Önerisi</h6>
                         <p class="mb-0" style="font-size: 0.85rem;">Premium pakete geçerek aylık 45₺ tasarruf edebilirsiniz.</p>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

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

    <!-- Custom Progress Charts -->
    <script>
      // Global kullanım verilerini tutan değişken
      let usageData = {
        daily: {
          internet: { used: 1.0, total: 15, unit: 'GB' },
          minutes: { used: 45, total: 500, unit: 'dk' },
          sms: { used: 12, total: 100, unit: 'SMS' }
        },
        weekly: {
          internet: { used: 6.8, total: 15, unit: 'GB' },
          minutes: { used: 285, total: 500, unit: 'dk' },
          sms: { used: 78, total: 100, unit: 'SMS' }
        },
        lastMonth: {
          internet: { used: 18.2, total: 20, unit: 'GB' },
          minutes: { used: 1240, total: 1500, unit: 'dk' },
          sms: { used: 245, total: 300, unit: 'SMS' }
        }
      };

      $(document).ready(function() {
        // Progress chart çizim fonksiyonu
        function drawProgressChart(canvas, percentage, color) {
          const ctx = canvas.getContext('2d');
          const centerX = canvas.width / 2;
          const centerY = canvas.height / 2;
          const radius = 45;
          
          // Canvas'ı temizle
          ctx.clearRect(0, 0, canvas.width, canvas.height);
          
          // Arka plan çemberi
          ctx.beginPath();
          ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI);
          ctx.lineWidth = 8;
          ctx.strokeStyle = '#e6e6e6';
          ctx.stroke();
          
          // Progress çemberi - yüzdeye göre renk belirleme
          let progressColor = color;
          if (percentage >= 90) {
            progressColor = '#dc3545'; // Kırmızı - kritik seviye
          } else if (percentage >= 70) {
            progressColor = '#ffc107'; // Sarı - dikkat seviyesi
          } else {
            progressColor = '#28a745'; // Yeşil - güvenli seviye
          }
          
          const startAngle = -Math.PI / 2;
          const endAngle = startAngle + (2 * Math.PI * percentage / 100);
          
          ctx.beginPath();
          ctx.arc(centerX, centerY, radius, startAngle, endAngle);
          ctx.lineWidth = 8;
          ctx.lineCap = 'round';
          ctx.strokeStyle = progressColor;
          ctx.stroke();
        }
        
        // Kullanım verilerini güncelleme fonksiyonu
        function updateUsageData(newData) {
          usageData = { ...usageData, ...newData };
          renderCharts();
        }
        
        // Grafikleri render etme fonksiyonu
        function renderCharts() {
          const charts = document.querySelectorAll('.progress-chart canvas');
          const textElements = document.querySelectorAll('.progress-chart + div div:first-child, .progress-chart > div div:first-child');
          
          // Chart verilerini hesapla
          const chartData = [
            // Günlük
            { 
              percentage: Math.round((usageData.daily.internet.used / usageData.daily.internet.total) * 100),
              text: `${usageData.daily.internet.used}${usageData.daily.internet.unit}`,
              color: '#0066cc'
            },
            { 
              percentage: Math.round((usageData.daily.minutes.used / usageData.daily.minutes.total) * 100),
              text: `${usageData.daily.minutes.used}${usageData.daily.minutes.unit}`,
              color: '#28a745'
            },
            { 
              percentage: Math.round((usageData.daily.sms.used / usageData.daily.sms.total) * 100),
              text: `${usageData.daily.sms.used}`,
              color: '#ffc107'
            },
            
            // Haftalık
            { 
              percentage: Math.round((usageData.weekly.internet.used / usageData.weekly.internet.total) * 100),
              text: `${usageData.weekly.internet.used}${usageData.weekly.internet.unit}`,
              color: '#0066cc'
            },
            { 
              percentage: Math.round((usageData.weekly.minutes.used / usageData.weekly.minutes.total) * 100),
              text: `${usageData.weekly.minutes.used}${usageData.weekly.minutes.unit}`,
              color: '#28a745'
            },
            { 
              percentage: Math.round((usageData.weekly.sms.used / usageData.weekly.sms.total) * 100),
              text: `${usageData.weekly.sms.used}`,
              color: '#ffc107'
            },
            
            // Geçen Ay
            { 
              percentage: Math.round((usageData.lastMonth.internet.used / usageData.lastMonth.internet.total) * 100),
              text: `${usageData.lastMonth.internet.used}${usageData.lastMonth.internet.unit}`,
              color: '#0066cc'
            },
            { 
              percentage: Math.round((usageData.lastMonth.minutes.used / usageData.lastMonth.minutes.total) * 100),
              text: `${usageData.lastMonth.minutes.used}${usageData.lastMonth.minutes.unit}`,
              color: '#28a745'
            },
            { 
              percentage: Math.round((usageData.lastMonth.sms.used / usageData.lastMonth.sms.total) * 100),
              text: `${usageData.lastMonth.sms.used}`,
              color: '#ffc107'
            }
          ];
          
          // Grafikleri çiz ve metinleri güncelle
          charts.forEach((canvas, index) => {
            if (chartData[index]) {
              drawProgressChart(canvas, chartData[index].percentage, chartData[index].color);
              
              // İlgili text elementini güncelle
              const textContainer = canvas.parentElement.querySelector('div[style*="position: absolute"] > div:first-child');
              if (textContainer) {
                textContainer.textContent = chartData[index].text;
              }
            }
          });
        }
        
        // İlk render
        renderCharts();
        
        // Üstteki kalan kullanım barlarını aktif et
        initializeTopUsageCharts();
        
        // Laravel API'den veri çek
        fetchUsageDataFromAPI();
        
        // Her 5 dakikada bir güncelle
        setInterval(fetchUsageDataFromAPI, 5 * 60 * 1000);
        
        // Global fonksiyon - backend'den çağrılabilir
        window.updateUsageCharts = updateUsageData;
      });
      
      // Üstteki kullanım progress barları için
      function initializeTopUsageCharts() {
        // w_chart elementlerini bul
        const wCharts = document.querySelectorAll('.w_chart');
        
        wCharts.forEach(function(element) {
          const percent = element.getAttribute('data-percent') || 0;
          
          // Canvas oluştur
          const canvas = document.createElement('canvas');
          canvas.width = 70;
          canvas.height = 70;
          
          // Element içeriğini temizle ve canvas ekle
          element.innerHTML = '';
          element.appendChild(canvas);
          
          const ctx = canvas.getContext('2d');
          const centerX = 35;
          const centerY = 35;
          const radius = 25;
          
          // Arka plan çemberi
          ctx.beginPath();
          ctx.arc(centerX, centerY, radius, 0, 2 * Math.PI);
          ctx.lineWidth = 6;
          ctx.strokeStyle = '#e6e6e6';
          ctx.stroke();
          
          // Progress çemberi - renk belirleme
          let progressColor = '#0066cc';
          if (element.id === 'chart9') {
            progressColor = '#28a745'; // Dakika - yeşil
          } else if (element.id === 'chart10') {
            progressColor = '#ffc107'; // SMS - sarı
          }
          
          // Progress yüzdesine göre renk değiştir
          if (percent >= 90) {
            progressColor = '#dc3545'; // Kritik - kırmızı
          } else if (percent >= 70) {
            progressColor = '#ffc107'; // Dikkat - sarı
          } else if (percent < 50) {
            progressColor = '#28a745'; // İyi - yeşil
          }
          
          const startAngle = -Math.PI / 2;
          const endAngle = startAngle + (2 * Math.PI * percent / 100);
          
          ctx.beginPath();
          ctx.arc(centerX, centerY, radius, startAngle, endAngle);
          ctx.lineWidth = 6;
          ctx.lineCap = 'round';
          ctx.strokeStyle = progressColor;
          ctx.stroke();
          
          // Ortada yüzde yazısı
          ctx.fillStyle = progressColor;
          ctx.font = 'bold 12px Arial';
          ctx.textAlign = 'center';
          ctx.fillText(percent + '%', centerX, centerY + 4);
        });
      }
      
      // Backend API entegrasyonu için Laravel fonksiyonu
      function fetchUsageDataFromAPI() {
        // Laravel CSRF token'ını al
        const csrfToken = $('meta[name="csrf-token"]').attr('content');
        
        // Laravel API çağrısı
        $.ajax({
          url: '/api/usage-data', // Laravel route'u
          method: 'GET',
          headers: {
            'X-CSRF-TOKEN': csrfToken,
            'Content-Type': 'application/json',
            'Accept': 'application/json'
          },
          success: function(response) {
            // Laravel'den gelen veri formatı doğrudan kullanılabilir
            console.log('Laravel\'den gelen veri:', response);
            window.updateUsageCharts(response);
          },
          error: function(xhr, status, error) {
            console.error('Laravel API hatası:', {
              status: xhr.status,
              message: xhr.responseJSON?.message || error,
              errors: xhr.responseJSON?.errors || null
            });
            
            // Hata durumunda varsayılan verilerle devam et
            console.log('Varsayılan veriler kullanılıyor...');
          }
        });
      }
      
      // Sayfa hazır olduğunda Laravel API'den veri çek
      $(document).ready(function() {
        fetchUsageDataFromAPI();
        
        // Her 5 dakikada bir güncelle (isteğe bağlı)
        setInterval(fetchUsageDataFromAPI, 5 * 60 * 1000);
      });
    </script>

    <!-- Main JS-->
    <script src="assets/js/main.js"></script>


  </body>
</html>