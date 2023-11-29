


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
VIRTED
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
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <style>
    .vlc{
        display: flex;
        align-items: center;
        flex-wrap: nowrap;
        justify-content: center;
    }
    .grn{
        color: rgb(9, 227, 46);
    }
   </style>

</head>
@php $lang= $_COOKIE['selectedLanguage'] ?? 'en' @endphp

<body class="">
 @include('header')
  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class=" align-items-start min-vh-43 pt-5 pb-11 m-3 border-radius-lg"  >      
      </div>
      <div class="container">
        <div class="row mt-lg-n10 mt-md-n11 mt-n10">
          <div class="col-xl-4 col-lg-5 col-md-7 mx-auto">
            <div class="card z-index-0">
              <div class="card-header text-center pt-4">
              <h3 class="font-weight-bolder text-info text-gradient">@if ($lang=='en') Welcome to VIRTED @elseif($lang=='fr')Bienvenue à VIRTED! @elseif($lang=='es')مــرحبا بك في فيرتيد @endif </h3>
                  <p class="mb-0">@if($lang=='en')Please fill the required fields to register @elseif ($lang=='fr')Veuillez remplir les champs obligatoires pour vous inscrire. @endif</p>
                          
              </div>
              <div class="card-body">
     
              <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        @if ($lang=='en')    
        <div class="mb-4 text-sm text-gray-600">
        {{ __('Before continuing, could you verify your email address by clicking on the link we just emailed to you? If you did not receive the email, we will gladly send you another.') }}
        </div>
        @elseif ($lang=='fr')    
        <div class="mb-4 text-sm text-gray-600">
        {{ __('Avant de continuer, pourriez-vous vérifier votre adresse e-mail en cliquant sur le lien que nous venons de vous envoyer par e-mail ? Si vous n\'avez pas reçu l\'e-mail, nous vous en enverrons volontiers un autre.') }}
        </div>
        @elseif ($lang=='es')    
        <div class="mb-4 text-sm text-gray-600" style="text-align:right">
        {{ __(' قبل المتابعة، هل يمكنك التحقق من عنوان بريدك الإلكتروني عن طريق النقر على الرابط الذي أرسلناه لك عبر البريد الإلكتروني؟ إذا لم تستلم البريد الإلكتروني، فسنرسل لك واحدًا آخر بسرور.') }}
        </div>
        @endif
        
         

        @if (session('status') == 'verification-link-sent')
            @if ($lang == 'en')
            <div class="mb-4 font-medium text-sm text-green-600 grn">
            {{ __('A new verification link has been sent to the email address you provided in your profile settings.') }}
            @elseif ($lang == 'fr')
            <div class="mb-4 font-medium text-sm text-green-600 grn">
            {{ __('Un nouveau lien de vérification a été envoyé à l\'adresse e-mail que vous avez fournie dans les paramètres de votre profil.') }}
            <div class="mb-4 font-medium text-sm text-green-600 grn" style="text-align:right">
            @elseif ($lang == 'es')
            {{ __('تم إرسال رابط التحقق الجديد إلى عنوان البريد الإلكتروني الذي قدمته في إعدادات ملف التعريف الخاص بك.') }}
            @endif
            </div>


        @endif

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('verification.send') }}">
                @csrf

                <div class='vlc'>
                    <x-button type="submit" class="btn btn-round btn-sm mb-0 btn-outline-primary me-2" >
                    @if ($lang == 'en')
                        {{ __('Resend Verification Email') }}
                    @elseif ($lang == 'fr')
                        {{ __('Renvoyer l\'email de vérification') }}
                    @elseif ($lang == 'es')
                        {{ __('إعادة إرسال رسالة التحقق عبر البريد الإلكتروني') }}
                    @endif
                    </x-button>
                </div>
            </form>
        </div>
    </x-authentication-card>

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
  </main>
  <!--   Core JS Files   -->
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
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>

</body>

</html>