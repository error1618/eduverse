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
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  
  <link href="../assets/css/general.css" rel="stylesheet" />

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
  <link href="../assets/css/forumsview.css" rel="stylesheet" />
  @php
   $lang= $_COOKIE['selectedLanguage'] ?? 'en' 
@endphp

</head>

<body class="g-sidenav-show bg-gray-100">
    @include('bar')
   
 
    <!-- End Navbar -->
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved11-small.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
        <form method="get" action="{{route('post.search')}}">
              <div class="input-group">
                <button type="submit" style="background:transparent;border:none"  >
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                </button>
                <input style="padding-left:10px;padding-right:10px;border-radius:5px" name="search" type="text" class="form-control" placeholder="Type here...">
              </div>
              <div class="filters">
              <div class="filters">
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="science">
            <span class="filtered">
                @if ($lang == 'en') Science @elseif ($lang == 'fr') Sciences @elseif ($lang == 'es') علوم @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="languages">
            <span class="filtered">
                @if ($lang == 'en') Languages @elseif ($lang == 'fr') Langues @elseif ($lang == 'es') لغات @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="sports">
            <span class="filtered">
                @if ($lang == 'en') Sports @elseif ($lang == 'fr') Sports @elseif ($lang == 'es') رياضة @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="business_and_entrepreneurship">
            <span class="filtered">
                @if ($lang == 'en') Business and innovation @elseif ($lang == 'fr') Business et innovation @elseif ($lang == 'es') الأعمال والابتكار @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="politics">
            <span class="filtered">
                @if ($lang == 'en') Politics @elseif ($lang == 'fr') Politiques @elseif ($lang == 'es') سياسة @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="arts_and_culture">
            <span class="filtered">
                @if ($lang == 'en') Art and culture @elseif ($lang == 'fr') Art et culture @elseif ($lang == 'es') فن وثقافة @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="technology">
            <span class="filtered">
                @if ($lang == 'en') Technology @elseif ($lang == 'fr') Technology @elseif ($lang == 'es') تكنولوجيا @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="education">
            <span class="filtered">
                @if ($lang == 'en') Education @elseif ($lang == 'fr') Education @elseif ($lang == 'es') تعليم @endif
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="Q&A">
            <span class="filtered">
                @if ($lang == 'en') Q&A @elseif ($lang == 'fr') Q&A @elseif ($lang == 'es') أسئلة وأجوبة @endif 
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="general">
            <span class="filtered">
                @if ($lang == 'en') General @elseif ($lang == 'fr') Général @elseif ($lang == 'es') عام @endif
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="career">
            <span class="filtered">
                @if ($lang == 'en') Career @elseif ($lang == 'fr') Carrière @elseif ($lang == 'es') مهنة  @endif
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="hight_school">
            <span class="filtered">
                @if ($lang == 'en') High School @elseif ($lang == 'fr') Lycée @elseif ($lang == 'es') المدرسة الثانوية  @endif
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="elementary_school">
            <span class="filtered">
                @if ($lang == 'en') Elementary School @elseif ($lang == 'fr') École primaire @elseif ($lang == 'es') المدرسة الابتدائية  @endif
            </span>
        </label>
    </div>
    <div class="filter">
        <label>
            <input type="checkbox" class="filter" name="tags[]" value="middle_school">
            <span class="filtered">
                @if ($lang == 'en') Middle School @elseif ($lang == 'fr') École moyenne @elseif ($lang == 'es') المدرسة المتوسطة  @endif
            </span>
        </label>
    </div>


                  <div class="filter">
                    <label>
                    <input type="checkbox" class="filter" name="tags[]" value="university" ><span class="filtered">@if ($lang=='en') University @elseif($lang=='fr')Univérsité  @elseif ($lang == 'es') الجامعة @endif</span>
                    </label>
                  </div>
                  <div class="filter">
                    <label>
                    <input type="checkbox" class="filter" name="tags[]" value="religion" ><span class="filtered">@if ($lang=='en') Religion @elseif($lang=='fr')Religion  @elseif ($lang == 'es') الدين @endif</span>
                    </label>
                  </div>
                </div> 
                </div>
           </form>
        </div>
      </div>
    </div>
    <div class="col-12 mt-4 ">
    <!----    ############################################                -->
    <div class="col-12 mt-4 ">
    <!----    ############################################                -->
    <div class="">
      <div class="card mb-4" style="margin: 50px!important;">
          <div class="oneline">
          <div class="info   card-body mx-4 ">
      <div class="row gx-4">
        <div class="col-auto">
          <div class="avatar avatar-xl position-relative">
            <img src="../{{$post->creator->profile_photo_path}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm prf-im">
          </div>
        </div>
        <div class="col-auto my-auto">
          <div class="h-100">
            <h5 class="mb-1">
             <a href='/profile/users?id={{$post->creator->id}}'>{{ $post->creator->name }}</a>
            </h5>
            <p class="mb-0 font-weight-bold text-sm">
              {{ $post->creator->status }}
            </p>
            <div class="list-group-item border-0 ps-0 pb-0">
                  @if ($post->creator->instagram || $post->creator->linkedin || $post->creator->facebook || $post->creator->twiter)  
                  <strong class="text-dar k text-sm">Social:</strong> &nbsp;
                  @endif
                  @if ($post->creator->facebook)
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{$post->creator->facebook}}">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  @endif
                  @if ($post->creator->twiter)
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{$post->creator->twiter}}">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                  @endif
                  @if ($post->creator->instagram)
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="{{$post->creator->instagram}}">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                  @endif
                  @if ($post->creator->linkedin)
                  <a class="btn btn-linkedin btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $post->creator->linkedin }}">
                      <i class="fab fa-linkedin-in fa-lg"></i>
                  </a>
                  @endif
              </div>
          </div>
        </div>
      </div>
    </div>  
    <div class="card-header pb-0 px-3" >
    @if ($lang == 'en')         <h6 class="mb-0">Home > Forums</h6>
    @elseif ($lang == 'fr')  <h6 class="mb-0">Accueil > Forums</h6>
    @elseif ($lang == 'es')  <h6 class="mb-0" style="text-align: right">الصفحة الرئيسية > المنتدى</h6>
    @endif
        </div>


  </div>

        @if ($lang == 'es')        <div class="card-body pt-4 p-3" style="padding:50px !important;text-align: right!important;"> 
        @else <div class="card-body pt-4 p-3" style="padding:50px !important" > 
        @endif
            @if(auth()->id() == $post->creator->id) 
            @if ($lang == 'es')                 <div class="ms-auto text-end" style="float:left">

        @else             <div class="ms-auto text-end">

        @endif
            <form method='GET' action="<?php echo route('post.delete',$post); ?>">
                <button type="submit" value="delete" class="btn btn-link text-danger text-gradient px-3 mb-0">
                <i class="far fa-trash-alt me-2" aria-hidden="true"></i>
@if ($lang == 'en') Delete
@elseif ($lang == 'fr') Supprimer
@elseif ($lang == 'es') حذف
@endif                </button>
                </form>
              <form method='GET'  action="{{ route('post.edit', $post ) }}">
                @csrf
                <button type="submit"  value="edit" class="btn btn-link text-dark px-3 mb-0">
                <i class="fas fa-pencil-alt text-dark me-2" aria-hidden="true"></i>
                @if ($lang == 'en') Edit
@elseif ($lang == 'fr') Modifier
@elseif ($lang == 'es') تعديل
@endif               </button>
            </form>
     
       
            </div>
            @endif 
            <h4>{{ $post->title }}</h4>
        @if ($lang == 'es')  <hr color="grey" size="5" width="50%" style="float: right!important;"> 
        @else          
        @endif
          <br>
          <br>
          <div class="post-body" style="margin-bottom:100px;">
          <style>
            iframe{
              width:auto;
              height:auto;
            }
            </style>
            <!--{{ $post->body }}-->
            
            <?php
              $text = $post->body;
              $clean = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $text);
              echo $clean;
            ?>
          </div>

          <div class="w3-content w3-display-container" ">
          @foreach($images as $img) 
                <img class="mySlides" src='{{ asset($img["image"]) }} ' style="width:100%">             
          @endforeach
          @if(count($images))
          <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)" >&#10094;</button>
          <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
          @endif
          </div>
   
          <br>
          @foreach($tags as $tag) 
          <div class='tag' style="float:left;">
              {{$tag}}
          </div>        
          @endforeach

          <br>


              <span style="display: inline; float:right; align-items: center;">
                   <p style="display:inline; marging-bottom:8px" id = "upvote-count">   {{$post->upvotes}}<input style="display:none" type="hidden" class="post" value="{{ $post }}"></p>
                     <svg id="upvote" width="36" height="36">
                         
                         <path d="M2 10h32L18 26 2 10z" transform="scale(.5,.8) rotate(180, 18, 18)" fill="currentColor"></path>
                    </svg>
                      @if ($results!="[]")
                       <script>
                          let btn =  document.getElementById('upvote').classList.add("on");  
                       </script>
                      @endif
              </span>

          <br>
          <hr color="grey" size="5" width="90%">
          <div id="comments">
          <div id="rpl-sc" class="replies">
          @foreach($post->replies as $reply) 
              @include('Forums.reply')
          @endforeach
          </div>
          </div>
         
         <div class='row'>
         <div class="col-md-8 col-md-offset-2" style="width: 100%;">
         @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
        @endif
         @if(auth()->check())
            <form method='POST' id='comment-form'>
               <input type="hidden" id="im" value="{{auth()->user()->profile_photo_path}}">
               <input type="hidden" id="un" value="{{ auth()->user()->name }}">
                <div class='form-group'>
                    <textarea name='body' id='body' class='form-control' placeholder='@if ($lang=='en')Write your comment here  @else @if($lang=='fr')Commenter la publication  @endif @endif' rows='1' ></textarea>
                </div>
                <button type="submit" class="btn bg-gradient-dark mb-0" style="height:auto; width:auto;">@if ($lang == 'en') Comment
                @elseif ($lang == 'fr') Commenter
@elseif ($lang == 'es') تعليق
@endif</button>
              </button>
            </form>
        @else

        <p>@if ($lang == 'en') Please <a href="{{ route('login') }}">sign in</a> to post a reply to this post.
@elseif ($lang == 'fr') Veuillez <a href="{{ route('login') }}">vous connecter</a> pour poster une réponse à cette publication.
@elseif ($lang == 'es') يرجى <a href="{{ route('login') }}">تسجيل الدخول</a> لنشر رد على هذه المشاركة.
@endif</p>
        @endif
        </div>
        </div>


      </div>
    </div>
   
    <!----    ############################################                -->
  </div>
  </div>


    
    </div>
  </div>
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
        </div>
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/user.js"></script>

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
  <script src="../assets/js/forums.js" type="module"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
  @if (Route::has('login'))


<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>

<script src="../assets/js/connection.js" ></script>


@endif




<input type="hidden" id="ctk" value='{{ csrf_token() }}'>

@include("shared")


</body>

</html>