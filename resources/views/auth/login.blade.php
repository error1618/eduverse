<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    EDUVERSE
  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/index.css" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
</head>
@php $lang= $_COOKIE['selectedLanguage'] ?? 'en' @endphp
<body class="">
  @include('header')
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                  
                  @if ($lang=='en')
                  <div class="card-header pb-0 text-left bg-transparent">

                  <h3 class="font-weight-bolder text-info text-gradient"> Welcome back</h3>
                  <p class="mb-0">Enter your email and password to sign in</p>
                  </div>

                  @elseif($lang=='fr')
                  <div class="card-header pb-0 text-left bg-transparent">

                  <h3 class="font-weight-bolder text-info text-gradient">Bienvenue de retour</h3>
                  <p class="mb-0">Entrez votre adresse e-mail et votre mot de passe pour vous connecter</p>
                  </div>

                  @elseif($lang=='es')
                  <div class="card-header pb-0 text-left bg-transparent" style="    text-align: right;">

                  <h3 class="font-weight-bolder text-info text-gradient" >مرحبًا مرة أخرى</h3>
                  <p class="mb-0">أدخل بريدك الإلكتروني وكلمة المرور لتسجيل الدخول</p>
                  </div>

                  @endif
                

                <div class="card-body">

                <x-authentication-card>
           
                <x-validation-errors class="mb-4" />
                @if (session('status'))
                     <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
                     </div>
                 @endif
                 @if (Cookie::has('blocked') && Cookie::get('your_cookie_name') == 0)
                  // Your code here
                  <p>__('your account has been blocked for sevel days')</p>
                  @endif



                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                    

                    @if ($lang=='en') 
                    <div class="mb-3">
                    <label for="email" >Email</label>
                    <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="email-addon" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                    </div>
                    
                    @elseif($lang=='fr')
                    <div class="mb-3">
                    <label for="email" >Email</label>
                    <input type="email" class="form-control" placeholder="email" aria-label="email" aria-describedby="email-addon" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" />
                    </div>

                    @elseif($lang=='es')
                    <div class="mb-3" style="text-align: right;">

                    <label for="email" >الايميل</label>

                    <input  style="text-align: right;"  type="email" class="form-control" placeholder="الايــميل" aria-label="email" aria-describedby="email-addon" id="email" name="email" :value="old('email')" required autofocus autocomplete="email" />                    
                    </div>

                    @endif

                    <div class="mb-3">
                    
                      @if ($lang=='en') 
                      <label for="password">Password</label>
                      <div class="mb-3">
                      <x-input type="password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="password-addon" id="password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="mb-3">
                    </div>                    
                    @elseif($lang=='fr')
                    <label for="password">Mot de Pass</label>

                    <div class="mb-3">
                      <x-input type="password" class="form-control" placeholder="Mot de pass" aria-label="Password" aria-describedby="password-addon" id="password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="mb-3">
                    </div> 
                    @elseif($lang=='es')
                    <div class="mb-3" style="text-align: right;">
                    <label for="password">كلمة المرور</label>

                      <x-input  style="text-align: right;"  type="password" class="form-control" placeholder="كلمة مرور" aria-label="Password" aria-describedby="password-addon" id="password" name="password" required autocomplete="current-password" />
                    </div>
                    <div class="mb-3">
                    </div> 
                    @endif
                    
                    </div>
                    @if ($lang=='en') 
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="remember_me" name="remember" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>                   
                    @elseif($lang=='fr')
                    <div class="form-check form-switch">
                      <input  class="form-check-input" type="checkbox" id="remember_me" name="remember" checked="">
                      <label class="form-check-label" for="rememberMe">Se souvenir de moi</label>
                    </div>
                    @elseif($lang=='es')
                    <div class="form-check form-switch" style="     float: right;">
                      <input class="form-check-input" type="checkbox" id="remember_me" name="remember" checked="">
                      <label class="form-check-label" for="rememberMe">تذكرني</label>
                    </div>
                    @endif
                    
                    <div class="flex items-center justify-end ">
                    @if (Route::has('password.request'))
                    
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        @if ($lang=='en') 
                        {{ __('Forgot your password?') }}
                        @elseif($lang=='fr')
                        {{ __('Mot de passe oublié ?') }}
                        @elseif($lang=='es')
                        {{ __('هل نسيت كلمة السر؟') }}
                        @endif

                    </a>
                    @endif
                    <div class="text-center">
                      <x-button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0"  >
                      @if ($lang=='en') 
                      Sign in
                        @elseif($lang=='fr')
                        Se Connecter
                        @elseif($lang=='es')
                        تسجيل الدخول
                        @endif  
                     </x-button>
                    </div>
                  </form>
                  </x-authentication-card>
                
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-4 text-sm mx-auto">
                    
                    
                    @if ($lang=='en') 
                    Don't have an account?
                    <a  class="text-info text-gradient font-weight-bold" href="{{ route('register') }}">
                    Sign Up
                    @elseif($lang=='fr')
                    Vous n'avez pas de compte ?
                    <a  class="text-info text-gradient font-weight-bold" href="{{ route('register') }}">
                    Enregistrer
                    @elseif($lang=='es')
                    ليس لديك حساب؟
                    <a  class="text-info text-gradient font-weight-bold" href="{{ route('register') }}">
                    التسجيل
                    @endif

                    </a>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>

  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
</body>

</html>