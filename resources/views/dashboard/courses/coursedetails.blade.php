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
  <link href="../assets/css/coursesdetail.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />

  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/css/bootstrap.min.css">
  @php
      $lang= $_COOKIE['selectedLanguage'] ?? 'en' 
   @endphp
   
</head>

<body class="g-sidenav-show  bg-gray-100">
      @include('bar')
      <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
     
    <div class="container-fluid py-4">                                                                  
      <div class="row">
          <div class="row">
            @if($course->cover)
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../{{ $course->cover }}'); background-position-y: 50%;">
            @else
            <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAhFBMVEX///8rKikAAAAoJyb7+/vo6OgyMTBLSkklJCMiISAQDgz39/cTEQ+3t7ceHRwWFRPe3t4bGRjv7+9TUlFycXEJBgE5ODefn56JiIhiYWHq6up6enppaWjAwMCioaHV1dWDgoLJycmrq6uVlZVEQ0KHh4eSkpI2NTRMS0qqqqlubW0/Pj3ClDLdAAAEZ0lEQVR4nO3bbXuaMBQGYBqwJrxKgSqtVp2snfb//79VXddtnoMgShby3J/NdYXHkHccBwAAAAAAAAAAAAAAAAAAAAAAwHwPy2g6y8tsXFXjrMy/T6P1SHedeuStN6Uv/DCNlZLSdaWUKk4TX4hqFdkQxNM2E34q70hunIh4tdZdx9uKMsE9/1cOvnhe6q7orXibMDwTwC+xeF/oru1NbETaKIAD6d8PL4WFSponcHgnimqiu9JXFZTCbRfBvi2I77rrfUXrULVOYC99G8xQubmgEXw2hUh35a8jLy5MYE+86q7+NZQtO8N/FM+6H6C7rMWISApz3Y/QVdk1go8QDG8JebcX4cg3uk+YdukOv5g8OizFuadzpfogz42dwth5gpfWPptMCiGz+W43z1xRJHXTKPde97NcKo9rnioR5Xbp/f7tJNqJkI8snWl8jg7W/Jvghu42OCkQvftsCsLMBdQb+0Aq/EYXWSiu6cis38pfR+RzERRzjy0150oJE7fY7rhmILZ1xTbMG2RiQ1iwf+iZDaIXJgQDe4SM2To8F4HjzOi5ZWzcjsoT82/60/Nlf5Dxuenta31dL/RaSZUNyo7o/ArTdtzp//JOnM4KCCtyhEwbNKH/SUD/lclLo9J0Q5BN2tB/ZE2OCq5qWJxuReFNq3x1U7I7SGpnBmeLi4eb1vnaduQqUDQtTjejwqwZwiM1SYxXTYuPyL0X36zpMtmpNR/cHsjyoVFHkIGI1UlLaDHJYTIwakst2M52lS8KP/kji+avAjM4mpXBUTBZf3vdVeExC9miKdN9olnvwt8OWeTjFkMbPdP2TZssd0IvOg2bH3TDLDp93fXqE71mMm290Amzdk6bLbiGYcysu82aKneyovfSzD1rau+VOae16FWYcadTzbaghuCZ25KPDT1xbI+/vGRLMwgq9qQ6NGxD9VIjxd5BkI+6K9ePdc1VTkvmBtOaizuCOasfmLrbrInht/OaCaqae4yxgcfu7U3SmhtZyor+cFF3sV3e2TAz4G5dHCOQNuwesSuEQwTKhgjYFcIhAteGCPKwJgJ1b0NfUBtB/M5f4huOVV0EqRXzgtq7/eFcd/X6sKgbEQb1dSOL2UP/FUHTOytme+S/AHeNvJ7c3iv/rZOK7dgvqHkT0sqGacGHkl0q+lYMCB8mbDMQ1uyiP3PNQFhznuSxx0kGXjq60IKZJFsUgZPTr4IlG8hH9NwgtKY7dLjJgbJiofgpIrsDW85VjzbU4appH6p0RN7tt+r+oeNUxIGCiV9xdkF1B/FGd636RQ0LJl/JvgD52Zthn+p0RX6jYVmXSF7KbvzF1zCQGRj2+WJX1LvgSt216heZgUX3kffIDKy4bvIlEPKEsqwdeG/jU5ZNlQEAAOAfI5ruavXJEzTd9eoTc+KKDJABMkAGyAAZIANkgAyQATJABsjAQQZ7yAAZ7CEDZLCHDJDBnidcil0ZhPcUy24kAQAAAAAAAAAAAAAAAAAAAADAsPwE7eo0R45Or2sAAAAASUVORK5CYII='); background-position-y: 50%;">
            @endif
              <span class="mask bg-gradient-primary opacity-6"></span>
            </div>             
            
            <div class="col-md-12 mb-lg-0 mb-4">
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-6 d-flex align-items-center">
                      <h3 class="mb-0">{{$course->title}}</h3>
                    </div>
                    <div class="col-6 text-end" style="margin:5px;width: 95%; text-align:right">
                      <a class="btn bg-gradient-dark mb-0" href="/profile/users?id={{$course->user_id}}" >&nbsp;&nbsp;@if ($lang=='en')Contact teacher @else @if($lang=='fr')Contactez l'enseignant @else تواصل مع المعلم @endif @endif</a>
                    </div>
                  </div>
                </div>
                @if ($lang=='es')
                    <div class="col-6 text-end" style="margin:5px;width: 95%; text-align:right">
                    @else
                    <div class="col-6 text-end" style="margin:5px;width: 95%; text-align:left">
                    @endif
                <p class="mb-0">{{$course->description}}</p>
                </div>
                <div class="card-body p-3">
                  <div class="row">
                  </div>
                </div>
              </div>
            </div>
          </div>







          <style>



          </style>
      
      @if (count($videos)>0)
      <div class="col-md-12 mb-lg-0 mb-4">
 
      <div class="scrollcards card mt-4" style="flex-direction: row;">
        
     
        @foreach ($videos as $vid)
        <div class="card"     style="width: fit-content;">
        <iframe width="560" height="315" src="{{preg_replace('/(&t=\d+|\/watch\?v=)/', '/', preg_replace('/\.com\//', '.com/embed/', $vid->video))}}" frameborder="0" allowfullscreen></iframe>
   </div>

   @endforeach
     
     
      
    </div>

    
 
          </div>

@endif


        
      </div>
      <div class="row">
        <div class="col-md-7 mt-4">
          <div class="card">
            <div class="card-header pb-0 px-3">
              <h6 class="mb-0">@if ($lang=='fr') Détails du cours @else @if($lang=='en')Course information @else معلومات عن الدورة @endif @endif</h6>
            </div>
            <div class="card-body pt-4 p-3">
              <ul class="list-group">
                <li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">@if ($lang=='fr') A propos de l'enseignant @else @if($lang=='en')About the teacher @else معلومات شخصية عن المعلم  @endif  @endif</h6>
                    <span class="mb-2 text-xs">@if ($lang=='fr') Nom de l'enseignant: @else @if($lang=='en')Teacher's name: @else اسم المعلم  @endif @endif <span class="text-dark font-weight-bold ms-sm-2">{{app('App\Http\Controllers\UserController')->getTeacher($course->user_id)['name']}}</span></span>
                    <span class="mb-2 text-xs">@if ($lang=='fr') Diplome:  @else @if($lang=='en')Degree: @else شهادة  @endif @endif <span class="text-dark font-weight-bold ms-sm-2">{{app('App\Http\Controllers\UserController')->getTeacher($course->user_id)['degree']}}</span></span>
                    <span class="mb-2 text-xs">@if ($lang=='fr') Spécialité:  @else @if($lang=='en')Field: @else تخصص  @endif @endif<span class="text-dark font-weight-bold ms-sm-2">{{app('App\Http\Controllers\UserController')->getTeacher($course->user_id)['diploma']}}</span></span>
                  </div>
                  <div class="ms-auto text-end">
               
                  </div>                
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">@if ($lang=='fr')A propos du cours  @else @if($lang=='en')About the course @else حول الدورة  @endif @endif</h6>
                    <span class="mb-2 text-xs">@if ($lang=='fr')Titre:  @else @if($lang=='en')Title: @else العنوان  @endif @endif <span class="text-dark font-weight-bold ms-sm-2">{{$course->title}}</span></span>
                    <span class="mb-2 text-xs">@if ($lang=='fr')Matière:  @else @if($lang=='en')Module: @else الموضوع  @endif @endif<span class="text-dark ms-sm-2 font-weight-bold">{{$course->module}}</span></span>
                    <span class="text-xs">@if ($lang=='fr')Niveau:  @else @if($lang=='en')Level: @else المستوى @endif @endif <span class="text-dark ms-sm-2 font-weight-bold">{{$course->level}}</span></span>
                  </div>
                </li>
                <li class="list-group-item border-0 d-flex p-4 mb-2 mt-3 bg-gray-100 border-radius-lg">
                  <div class="d-flex flex-column">
                    <h6 class="mb-3 text-sm">@if ($lang=='fr') A propos de la séance @else @if($lang=='en')About the session @else حول العرض  @endif @endif</h6>
                    <span class="mb-2 text-xs">@if ($lang=='fr') Durée:  @else @if($lang=='en')Duration: @else مدة العرض  @endif @endif <span class="text-dark font-weight-bold ms-sm-2">{{$course->duration}}</span></span>
                    <span class="mb-2 text-xs">@if ($lang=='fr') Type de séance:  @else @if($lang=='en')Session type: @else نوع العرض   @endif @endif<span class="text-dark ms-sm-2 font-weight-bold">{{$course->place}} </span></span>
                    @if($course->place === 'presential')
                    <span class="mb-2 text-xs">@if ($lang=='fr') Adresse:  @else @if($lang=='en')Address: @else العنوان  @endif @endif <span class="text-dark font-weight-bold ms-sm-2">{{$course->address}}</span></span>
                    @endif
                     <span class="text-xs">@if ($lang=='fr') Prix @else @if($lang=='en')Price: @else  سعر الدورة @endif @endif <span class="text-dark ms-sm-2 font-weight-bold">{{$course->price}} </span></span>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-5 mt-4">
          <div class="card h-100 ovh" >
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-6 d-flex align-items-center">
                  <h6 class="mb-0">@if ($lang=='fr') Support de cours @else @if($lang=='en')Course material @else - الملخصات والتمارين - المستندات المتعلقة بالدورة @endif @endif</h6>
                </div>
               
              </div>
            </div>
            <div class="card-body p-3 pb-0">
              <ul class="list-group">
                @foreach($course->resources as $resource)
               <li class="list-group-item border-0 d-flex justify-content-between ps-0 mb-2 border-radius-lg">
                 <div class="d-flex flex-column">
                   <h6 class="mb-1 text-dark font-weight-bold text-sm">{{ $resource->file_title }}</h6>
                     <span class="text-xs">{{ $resource->file_type }}</span>
                 </div>
                 <div class="d-flex align-items-center text-sm">
                   <button class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" onclick="displayResource('../{{  $resource->file_path  }}')"><i class="fas fa-file-pdf text-lg me-1"></i> @if ($lang=='fr') Ouvrir @else @if($lang=='en')View @else عرض الوثيقة @endif @endif</button>
                     <a href="../{{$resource->file_path }}" class="btn btn-link text-dark text-sm mb-0 px-0 ms-4" download><i class="fas fa-download text-lg me-1"></i> @if ($lang=='fr') Télécharger @else @if($lang=='en')Download @else تحميل الوثيقة @endif @endif</a>
                </div>
               </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
     </div>
      </div>
    </div>
      
    </div>
  </main>
  <div class="fixed-plugin">
 
    <div class="card shadow-lg ">
      <div class="card-header pb-0 pt-3 ">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="form-check form-switch ps-0">
          <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-dark w-100" href="https://www.creative-tim.com/product/soft-ui-dashboard">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Soft%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>


          <footer class="footer pt-3  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                 <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
      
        </div>
      </div>
    </div>
  </div>

  

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

    function displayResource(fileUrl) {
    // Open a new window or tab to display the file
    window.open(fileUrl, '_blank');
  }
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  @include("shared")
</body>

</html>