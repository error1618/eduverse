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
VIRTED  </title>
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link id="pagestyle" href="../assets/css/index.css" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
</head>
@php $lang= $_COOKIE['selectedLanguage'] ?? 'en' @endphp

<body >


  @include('header')
    

  <main class="main-content  mt-0">
    <section class="min-vh-100 mb-8">
      <div class="page-header align-items-start min-vh-50 pt-5 pb-11 m-3 border-radius-lg" style="background-image: url('../assets/img/vasily-koloda-8CqDvPuo_kI-unsplash.jpg');">
        <span class="mask bg-gradient-dark opacity-6 bg-hb"></span>
        <div class="container">
       
          <div class="row justify-content-center">
              <span style="text-align:center">
              <br><br><br>
              <h1 class="text-white mb-2 mt-5 inline" style="display:inline;color:#3dd6ff !important">@if ($lang=='en') Welcome @elseif($lang=='fr')Bienvenue @elseif($lang=='es') ! مرحبا بكم @endif</h1><h1 class="text-white mb-2 mt-5 inline" style="display:inline"> @if ($lang=='en') To VIRTED! @elseif($lang=='fr')à VIRTED! @elseif ($lang=='es') في فيرتيد@endif</h1>
              <br>
              <p class="text-lead text-white"><br>@if ($lang=='en') Your Gate to success @elseif($lang=='fr')Votre Chemin vers le succès @elseif($lang=='as')طريقك نحو النجاح @endif</p>
              <br>
              <br>
     
              <p class="text-lead text-white"><h5 class="text-lead text-white">@if ($lang=='en')Our platform connects passionate teachers with eager students, creating a @elseif($lang=='fr')Notre plateforme met en relation des enseignants passionnés avec des étudiants enthousiastes, créant ainsi une @elseif ($lang=='es') ,منصتنا تسعى لجعل التواصل بين المعلم و التلميد اسهل  @endif </p>
              @if ($lang=='en') vibrant community of knowledge sharing and growth. @elseif($lang=='fr')communauté dynamique de partage des connaissances et de croissance.  @elseif($lang=='es') .سعيا نحو تشكيل مجتمع نابض لمشاركة المعرفة  @endif</h5></p>  
            </span>
          </div>
          <div class="row justify-content-center">
            <div class="col-lg-5 text-center mx-auto mx-n">
               @if (Route::has('login'))
            @auth
            <a   class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0 mb-0-2 " style="border-radius: 100px;"  href="{{ route('profile.show') }}">
                        @if ($lang == 'en')  Go To The Dashboard
                        @elseif ($lang == 'fr') Accéder au Dashboard
                        @elseif ($lang == 'es') الذهاب للمنصة
                        @endif
                    </span>
</a>
          </a>
            @else
            <a class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0 mb-0-2"  style="    border-radius: 100px;" href="{{route('login')}}">@if ($lang=='en') Log In @elseif($lang=='fr') Se Connecter  @elseif($lang=='es') تسجيل الدخول @endif</a>
              @if (Route::has('register'))
              <a class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0 mb-0-1"  style="    border-radius: 100px;" href="{{ route('register') }}">@if ($lang=='en') Sign Up @elseif($lang=='fr') Enregistrer @elseif($lang=='es') التسجيل @endif</a>
              @endif

              @endauth
              @endif
  
            </div>
          </div>
        </div>
      </div>
      
      </div>

      <!-- Start main content -->
      <div class="container-fluid py-4">
       <div class="row" style="flex-wrap: wrap;justify-content: center;">
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">@if ($lang=='en') Posts @elseif($lang=='fr')Publications @elseif($lang=='es') المنشورات  @endif</p>
                      <h5 class="font-weight-bolder mb-0">

                        <?php
                        use App\Models\Post;
                                             
                        ?>      
                    
                    <div class="counter">
                      <span class="count">0</span>
                    </div>
                    
                        <script>
                          // Get the count element
                          let countElement = document.querySelector('.count');
                          
                          // Set the target number
                          let targetNumber = "{{Post::count()}}";
                          console.log(targetNumber)
                          // Function to animate the count
                          function animateCount(targetNumber,countElement) {
                            const duration = 2000; // Animation duration in milliseconds
                            const interval = 10; // Update interval in milliseconds
                            const step = Math.ceil(targetNumber / (duration / interval));
                          
                            let currentNumber = 0;
                          
                            const countInterval = setInterval(() => {
                              currentNumber += step;
                              if (currentNumber >= targetNumber) {
                                clearInterval(countInterval);
                                currentNumber = targetNumber;
                              }
                              countElement.textContent = currentNumber;
                            }, interval);
                          
                            countElement.classList.add('animate');
                          }
                          
                          // Call the animateCount function to start the animation
                          animateCount(targetNumber,countElement);
                          
                            </script>


                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                    <div class="icon icon-shape icon-xxs shadow border-radius-sm bg-gradient-primary text-center me-2 d-flex align-items-center justify-content-center" style=" width:48px;height: 48px;">
                    <svg width="50px" height="20px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <title>document</title>
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(154.000000, 300.000000)">
                              <path class="color-background opacity-6" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z"></path>
                              <path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                        </div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">@if ($lang=='en') Courses @elseif($lang=='fr') Cours  @elseif($lang=='es') دروس @endif</p>
                      <h5 class="font-weight-bolder mb-0">
                        <div class="counter">
                          <span class="count">
      
                            <?php
                            use App\Models\Course;
                                                 
                            ?>      
                        
                        <div class="counter">
                          <span class="count1">0</span>
                        </div>
                        
                            <script>
                        
                               countElement = document.querySelector('.count1');
                              targetNumbers = "{{Course::count()}}";
                              console.log(targetNumbers) 
                              animateCount(targetNumbers,countElement);
                                </script>
                        </span>
                      </div>
                    </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> 
          <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
            <div class="card">
              <div class="card-body p-3">
                <div class="row">
                  <div class="col-8">
                    <div class="numbers">
                      <p class="text-sm mb-0 text-capitalize font-weight-bold">@if ($lang=='en') Users @elseif($lang=='fr') Utilisateurs  @elseif($lang=='es') مستخدمون @endif</p>
                      <h5 class="font-weight-bolder mb-0">
                        <?php
                        use App\Models\User;
                                             
                        ?>      
                    
                    <div class="counter">
                      <span class="count3">0</span>
                    </div>
                    
                        <script>
                          // Get the count element
                           countElement = document.querySelector('.count3');
                          
                          // Set the target number
                          targetNumberss = "{{User::count()}}";
                          console.log(targetNumberss)
                    
                          // Call the animateCount function to start the animation
                          animateCount(targetNumberss,countElement);
                          
                            </script>

                
                      </h5>
                    </div>
                  </div>
                  <div class="col-4 text-end">
                    <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                      <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
     
        </div>
        
        @if ($lang=='es') 
        <div class="row mt-4" style="text-align:right">
        @else
        <div class="row mt-4">
        @endif
        <div class="col-lg-5">
            <div class="h-100 p-3" >
                <div class="card-body position-relative z-index-1 d-flex flex-column " >
                  <h5 class=" font-weight-bolder mb-4 pt-2" style="margin-bottom: 0px">@if($lang=='en')Find Teachers & Peers Across the Country! @elseif($lang=='fr')Trouvez des Enseignants et des Camarades à Travers le Pays ! @elseif($lang=='es') ! قم بالعثور على إقرانك و مدرسين من انجاء التراب الوطني    @endif</h5>
                  <p class="">@if ($lang=='fr') Notre plateforme met en relation des enseignants et des élèves, offrant une destination unique pour une éducation de qualité. Avec une interface conviviale, les élèves peuvent trouver le cours ou l'enseignant approprié, se connecter avec eux via chat ou forums, et acquérir de nouvelles compétences grâce à des cours captivants. Rejoignez-nous dès aujourd'hui pour débloquer d'innombrables possibilités de croissance personnelle et professionnelle ! @elseif($lang=='en')Our platform connects teachers and students, providing a one-stop destination for quality education. th an easy-to-use interface,
                    We students can find the right course or teacher, connect with them through chat or forums, 
                    and gain new skills through engaging courses. Join us today to unlock endless possibilities for personal and professional growth! @elseif($lang=='es') منصتنا وجهة واحدة سهلة الاستخدام,  حيث يلتقي الطلاب بالمعلمين و الأساتدة  اينما يمكنهم مشاركة الدروس او التواصل مباشرة عبر الدردشة او المنتدى التعليمي, سجل الآن و مهد طريقك نحو النجاح  @endif</p>  
                </p>
                  <a class="text-white text-sm font-weight-bold mb-0 icon-move-right mt-auto" href="javascript:;">
                    @if ($lang=='en')Read more @else @if ($lang=='fr')Lire plus @endif @endif </a>
                    <div class="card-body p-3">
                <div class="timeline timeline-one-side">
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="fas fa-book" style="color:#2636ff;"></i>
                    </span>
                    <div class="timeline-content">
                      <h6 class="text-dark text-sm font-weight-bold mb-0">@if($lang=='en')Courses @elseif($lang=='fr') Cours  @elseif($lang=='es') دروس @endif</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">@if($lang=='en') Teachers can offer Courses, upload materials and much more. @elseif($lang=='fr')Les enseignants peuvent proposer des cours, téléverser des documents et bien plus encore.  @elseif($lang=='es').يمكنك كمعلم ان تقوم برفع ملفات دراسية و اكثر من دلك بكثير @endif </p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">  
                    <i class="fas fa-comments" style="color:#2636ff"></i>
                    </span>
                    <div class="timeline-content" >
                      <h6 class="text-dark text-sm font-weight-bold mb-0">@if($lang=='fr' || $lang=='en') Forums  @elseif($lang=='es') المنتدى @endif</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">@if($lang=='en')Stuck? need help? or you just want to share you thoughts?, here you can do all you want!
                        @elseif($lang=='fr')Bloqué ? Besoin d'aide ? Ou vous voulez simplement partager vos pensées ? Ici, vous pouvez faire tout ce que vous voulez !  @elseif($lang=='es') !أتشعر بالحيرة؟ تحتاج إلى مساعدة؟ قم بمشاركة أفكارك أو سؤالك مع الـآخرين  @endif</p>
                    </div>
                  </div>
                  <div class="timeline-block mb-3">
                    <span class="timeline-step">
                    <i class="fas fa-comment" style="color:#2636ff"></i>
                    </span>
                    <div class="timeline-content" >
                      <h6 class="text-dark text-sm font-weight-bold mb-0">@if($lang=='en')Chat @elseif($lang=='fr')Chat  @elseif($lang=='es') الدردشة @endif</h6>
                      <p class="text-secondary font-weight-bold text-xs mt-1 mb-0">@if($lang=='en')You can contact other users directly from the chat in your profile! @elseif($lang=='fr')Vous pouvez contacter d'autres utilisateurs directement depuis la messagerie dans votre profil!  @elseif($lang=='es')  ! يمكنك ايضا التواصل مع المستخدمين الآخرين في أي وقت @endif</p>
                    </div>
                  </div>
                  
                 
                </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">              
          <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <div class="card-header pb-0">
              <h6>@if($lang=='en')Top users @elseif($lang=='fr') Top Utilisateurs @elseif($lang=='es') أفضل المستخدمين  @endif</h6>
            </div>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> @if($lang=='en') User @elseif($lang=='fr')Utilisateurs  @elseif($lang=='es') المستحدم @endif</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2"> @if($lang=='en')Posts @elseif($lang=='fr') Publications @elseif($lang=='es') المنشورات  @endif</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> @if($lang=='en')Courses @elseif($lang=='fr') Cours @elseif($lang=='es') الدروس  @endif</th>
                      <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"> @if($lang=='en') Likes @elseif($lang=='fr')Likes @elseif($lang=='es') الاعجابات  @endif</th>
                      <th class="text-secondary opacity-7"></th>
                    </tr>
                  </thead>
                  @foreach ($users as $user)
                    
                  <tbody>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                          <img src="../{{$user->profile_photo_path}}" class="avatar avatar-sm me-3" alt="user1">
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                          <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $user->total_posts }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <span class="badge badge-sm bg-gradient-success">{{ $user->total_courses }}</span>
                      </td>
                      <td class="align-middle text-center">
                        <span class="text-secondary text-xs font-weight-bold">{{ $user->total_likes }}</span>
                      </td>
                      <td class="align-middle">
                          <i class="fas fa-arrow-up ml-2"></i> 
                      </td>
                      
                    </tr>
                   @endforeach
                  </tbody>
                </table>
              </div>
            </div>
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