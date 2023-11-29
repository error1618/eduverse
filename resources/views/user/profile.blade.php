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
  <link rel="stylesheet"  href="../assets/css/chat.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />

  <title>
Eduverse  </title>
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
  <link href="../assets/css/profile.css" rel="stylesheet" />    

</head>
<input id="ctk" type="hidden" value="{{csrf_token()}}">
<body class="g-sidenav-show bg-gray-100">
@php
   $lang= $_COOKIE['selectedLanguage'] ?? 'en' 
@endphp
@include('bar')

  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">
   
    <div class="container-fluid">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved14.jpg'); background-position-y: 70%;filter: hue-rotate(3deg);">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <div class="col-auto">
            <div class="avatar avatar-xl position-relative">
              <img id="profile-picture" src="{{$user->profile_photo_path}}" alt="profile_image" class="w-100 border-radius-lg shadow-sm prf-im">
            </div>
          </div>
          <div class="col-auto my-auto">
            <div class="h-100">
              <h5 class="mb-1">
                {{$user->name}}
              </h5>
              
              <p class="mb-0 font-weight-bold  ">
                {{$user->status}}
                
              </p>
              
            </div>
          </div>
          <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
            <div class="nav-wrapper position-relative end-0">
              <ul class="nav nav-pills nav-fill p-1 bg-transparent" role="tablist">
                <li class="nav-item tablinks" onclick="openTab(event, 'profile')">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true" >
                    <svg class="text-dark" width="16px" height="16px" viewBox="0 0 42 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g transform="translate(-2319.000000, -291.000000)" fill="#FFFFFF" fill-rule="nonzero">
                          <g transform="translate(1716.000000, 291.000000)">
                            <g transform="translate(603.000000, 0.000000)">
                              <path class="color-background" d="M22.7597136,19.3090182 L38.8987031,11.2395234 C39.3926816,10.9925342 39.592906,10.3918611 39.3459167,9.89788265 C39.249157,9.70436312 39.0922432,9.5474453 38.8987261,9.45068056 L20.2741875,0.1378125 L20.2741875,0.1378125 C19.905375,-0.04725 19.469625,-0.04725 19.0995,0.1378125 L3.1011696,8.13815822 C2.60720568,8.38517662 2.40701679,8.98586148 2.6540352,9.4798254 C2.75080129,9.67332903 2.90771305,9.83023153 3.10122239,9.9269862 L21.8652864,19.3090182 C22.1468139,19.4497819 22.4781861,19.4497819 22.7597136,19.3090182 Z">
                              </path>
                              <path class="color-background" d="M23.625,22.429159 L23.625,39.8805372 C23.625,40.4328219 24.0727153,40.8805372 24.625,40.8805372 C24.7802551,40.8805372 24.9333778,40.8443874 25.0722402,40.7749511 L41.2741875,32.673375 L41.2741875,32.673375 C41.719125,32.4515625 42,31.9974375 42,31.5 L42,14.241659 C42,13.6893742 41.5522847,13.241659 41,13.241659 C40.8447549,13.241659 40.6916418,13.2778041 40.5527864,13.3472318 L24.1777864,21.5347318 C23.8390024,21.7041238 23.625,22.0503869 23.625,22.429159 Z" opacity="0.7"></path>
                              <path class="color-background" d="M20.4472136,21.5347318 L1.4472136,12.0347318 C0.953235098,11.7877425 0.352562058,11.9879669 0.105572809,12.4819454 C0.0361450918,12.6208008 6.47121774e-16,12.7739139 0,12.929159 L0,30.1875 L0,30.1875 C0,30.6849375 0.280875,31.1390625 0.7258125,31.3621875 L19.5528096,40.7750766 C20.0467945,41.0220531 20.6474623,40.8218132 20.8944388,40.3278283 C20.963859,40.1889789 21,40.0358742 21,39.8806379 L21,22.429159 C21,22.0503869 20.7859976,21.7041238 20.4472136,21.5347318 Z" opacity="0.7"></path>
                            </g>
                          </g>
                        </g>
                      </g>
                    </svg>
                    <span class="ms-1">@if ($lang=='en') Profile @elseif($lang=='fr') Profil @elseif($lang=='es') الملف الشخصي @endif</span>
                  </a>
                </li>
                <li class="nav-item tablinks" onclick="openTab(event, 'settings')">
                  <a class="nav-link mb-0 px-0 py-1 active " data-bs-toggle="tab" href="javascript:;" role="tab" aria-selected="true" >
                  <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
<title>settings</title>
<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g transform="translate(-2020.000000, -442.000000)" fill="#FFFFFF" fill-rule="nonzero">
<g transform="translate(1716.000000, 291.000000)">
<g transform="translate(304.000000, 151.000000)">
<polygon class="color-background" opacity="0.596981957" points="18.0883333 15.7316667 11.1783333 8.82166667 13.3333333 6.66666667 6.66666667 0 0 6.66666667 6.66666667 13.3333333 8.82166667 11.1783333 15.315 17.6716667">
</polygon>
<path class="color-background" d="M31.5666667,23.2333333 C31.0516667,23.2933333 30.53,23.3333333 30,23.3333333 C29.4916667,23.3333333 28.9866667,23.3033333 28.48,23.245 L22.4116667,30.7433333 L29.9416667,38.2733333 C32.2433333,40.575 35.9733333,40.575 38.275,38.2733333 L38.275,38.2733333 C40.5766667,35.9716667 40.5766667,32.2416667 38.275,29.94 L31.5666667,23.2333333 Z" opacity="0.596981957"></path>
<path class="color-background" d="M33.785,11.285 L28.715,6.215 L34.0616667,0.868333333 C32.82,0.315 31.4483333,0 30,0 C24.4766667,0 20,4.47666667 20,10 C20,10.99 20.1483333,11.9433333 20.4166667,12.8466667 L2.435,27.3966667 C0.95,28.7083333 0.0633333333,30.595 0.00333333333,32.5733333 C-0.0583333333,34.5533333 0.71,36.4916667 2.11,37.89 C3.47,39.2516667 5.27833333,40 7.20166667,40 C9.26666667,40 11.2366667,39.1133333 12.6033333,37.565 L27.1533333,19.5833333 C28.0566667,19.8516667 29.01,20 30,20 C35.5233333,20 40,15.5233333 40,10 C40,8.55166667 39.685,7.18 39.1316667,5.93666667 L33.785,11.285 Z">
</path>
</g>
</g>
</g>
</g>
</svg>
                    <span class="ms-1">
                        @if ($lang=='en')
                            Settings
                        @elseif ($lang=='fr')
                            Paramètres
                        @elseif ($lang=='es')
                            الإعدادات
                        @endif
                    </span>
                  </a>
                </li>
                <li class="nav-item tablinks"  >
                <a class="nav-link mb-0 px-0 py-1 active "  href="{{route('calendar.index')}}" target="_blank" >
                <svg class="text-dark" width="16px" height="16px" viewBox="0 0 40 44" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
<g transform="translate(-1870.000000, -591.000000)" fill="#FFFFFF" fill-rule="nonzero">
<g transform="translate(1716.000000, 291.000000)">
<g transform="translate(154.000000, 300.000000)">
<path class="color-background" d="M40,40 L36.3636364,40 L36.3636364,3.63636364 L5.45454545,3.63636364 L5.45454545,0 L38.1818182,0 C39.1854545,0 40,0.814545455 40,1.81818182 L40,40 Z" opacity="0.603585379"></path>
<path class="color-background" d="M30.9090909,7.27272727 L1.81818182,7.27272727 C0.814545455,7.27272727 0,8.08727273 0,9.09090909 L0,41.8181818 C0,42.8218182 0.814545455,43.6363636 1.81818182,43.6363636 L30.9090909,43.6363636 C31.9127273,43.6363636 32.7272727,42.8218182 32.7272727,41.8181818 L32.7272727,9.09090909 C32.7272727,8.08727273 31.9127273,7.27272727 30.9090909,7.27272727 Z M18.1818182,34.5454545 L7.27272727,34.5454545 L7.27272727,30.9090909 L18.1818182,30.9090909 L18.1818182,34.5454545 Z M25.4545455,27.2727273 L7.27272727,27.2727273 L7.27272727,23.6363636 L25.4545455,23.6363636 L25.4545455,27.2727273 Z M25.4545455,20 L7.27272727,20 L7.27272727,16.3636364 L25.4545455,16.3636364 L25.4545455,20 Z">
</path>
</g>
</g>
</g>
</g>
</svg>
                    <span class="ms-1">@if ($lang=='en') Planner @elseif($lang=='fr')Planificateur @elseif($lang=='es')المخطط @endif</span>
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid py-4">
      <div class="row">
        @if ($lang=="es")
        <span id="profile" class="tabcontent active" style="flex-wrap: wrap;   float: right;  text-align: right;">
        @else
        <span id="profile" class="tabcontent active" style="flex-wrap: wrap;">
        @endif
        
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
              <div class="row">
                <div class="col-md-8 d-flex align-items-center">
                <h6 class="mb-0">@if ($lang=='en') Profile information @elseif($lang=='fr')À propos de vous @elseif($lang=='es')معلومات الملف الشخصي @endif</h6>
                </div>
                <br>
                <div class="">
                <br>
                  <a href="javascript:;">
                    <i id="edf"  class="fas fa-user-edit text-secondary  " data-bs-toggle="tooltip" data-bs-placement="top"  aria-label="Edit Profile" data-bs-original-title="Edit Profile"></i>
                    <span class="sr-only">@if ($lang=='en') Edit profile @elseif($lang=='fr')Modifier mon profil @elseif($lang=='es')تعديل الملف الشخصي @endif</span>
                    </a>
                </div>

                <!--<div class="col-md-4 text-end">
                  <a href="javascript:;">
                    <i id="edf" class="fas fa-user-edit text-secondary  " data-bs-toggle="tooltip" data-bs-placement="top" title="Edit Profile"></i>
                  </a>
                </div>-->
              </div>
            </div>
            <div class="card-body p-3">
              
            
              
              @if($lang=='es')
              <p class="" style="text-align: right;float: right; padding-right:20px">
               
                {{$user->description}}
                
                <form  action="{{route('update.info')}}" style="display:none;margin-right:20px;margin-top:50px" method='POST' id="edfp" class="ed-rp" >
                @csrf
                <textarea  name='body' id='body' class='form-control' placeholder='Describe yourself . . .' rows='1' cols='50' style="text-align: right;float: right;" ></textarea>
                <button type="submit"  value="edit" class="btn btn-link text-dark px-3 mb-0 editbt">submit</button>
                </form>  
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group" style="text-align: right;float: right;">
              @else
              <p class="">
               
                {{$user->description}}
                
                <form  action="{{route('update.info')}}" style="display:none;margin-right:20px;margin-top:50px" method='POST' id="edfp" class="ed-rp" >
                @csrf
                <textarea  name='body' id='body' class='form-control' placeholder='Describe yourself . . .' rows='1' cols='50' ></textarea>
                <button type="submit"  value="edit" class="btn btn-link text-dark px-3 mb-0 editbt">submit</button>
                </form>  
              </p>
              <hr class="horizontal gray-light my-4">
              <ul class="list-group" >
               @endif
            

@if ($lang=='en')
<li class="list-group-item border-0 ps-0  ">
    <strong class="text-dark">Full name:</strong> &nbsp; {{$user->lastname}} {{$user->name}}
</li>
<li class="list-group-item border-0 ps-0  ">
    <strong class "text-dark">Email:</strong> &nbsp; {{$user->email}}
</li>
<li class="list-group-item border-0 ps-0  ">
    <strong class="text-dark">Location:</strong> &nbsp; {{$user->region}}
</li>
@elseif($lang=='fr')
<li class="list-group-item border-0 ps-0  ">
    <strong class="text-dark">Nom et prénom: </strong> &nbsp; {{$user->lastname}} {{$user->name}}
</li>
<li class="list-group-item border-0 ps-0  ">
    <strong class "text-dark">Email: </strong> &nbsp; {{$user->email}}
</li>
<li class="list-group-item border-0 ps-0  ">
    <strong class="text-dark">Adresse: </strong> &nbsp; {{$user->region}}
</li>
@elseif($lang=='es')
<li class="list-group-item border-0 ps-0  ">
    {{$user->lastname}} {{$user->name}} <strong class="text-dark">: الاسم الكامل </strong> &nbsp;
</li>
<li class="list-group-item border-0 ps-0  ">
   {{$user->email}} <strong class "text-dark">: الايميل</strong> &nbsp; 
</li>
<li class="list-group-item border-0 ps-0  ">
     {{$user->region}}<strong class="text-dark">: الموقع   </strong> &nbsp;
</li>
@endif
            
@if($user->status == "teacher")
    <li class="list-group-item border-0 ps-0  ">
        <strong class="text-dark">@if ($lang=='en') Degree: @elseif($lang=='fr')Niveau académique: @elseif($lang=='es')الدرجة العلمية: @endif</strong> &nbsp; {{$user->degree}}
    </li>
    <li class="list-group-item border-0 ps-0  ">
        <strong class="text-dark">@if ($lang=='en') Field: @elseif($lang=='fr')Spécialité: @elseif($lang=='es')التخصص: @endif</strong> &nbsp; {{$user->diplomaField}}
    </li>
@endif
                <li class="list-group-item border-0 ps-0 pb-0">
                
                
                @if ($user->instagram || $user->linkedin || $user->facebook || $user->twiter)  
                <li class="list-group-item border-0 ps-0 pb-0">
    <strong class="text-dark  ">@if ($lang=='en') Social Media: @elseif($lang=='fr')Reseaux Sociaux: @elseif($lang=='es')مواقع التواصل الاجتماعي: @endif</strong> &nbsp;
</li>                  @endif
                  @if ($user->facebook)
                  <a class="btn btn-facebook btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->facebook}}">
                    <i class="fab fa-facebook fa-lg"></i>
                  </a>
                  @endif
                  @if ($user->twiter)
                  <a class="btn btn-twitter btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->twiter}}">
                    <i class="fab fa-twitter fa-lg"></i>
                  </a>
                  @endif
                  @if ($user->instagram)
                  <a class="btn btn-instagram btn-simple mb-0 ps-1 pe-2 py-0" href="{{$user->instagram}}">
                    <i class="fab fa-instagram fa-lg"></i>
                  </a>
                  @endif
                  @if ($user->linkedin)
                  <a class="btn btn-linkedin btn-simple mb-0 ps-1 pe-2 py-0" href="{{ $user->linkedin }}">
                      <i class="fab fa-linkedin-in fa-lg"></i>
                  </a>
                  @endif
                </li>
              </ul>
            </div>
          </div>
        
        </div>
        
        
        
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
            <h6 class="mb-0">@if ($lang=='en') Earned badges @elseif($lang=='fr')Badges débloqués @elseif($lang=='es')الشارات المكتسبة @endif</h6>
            </div>
            <div class="card-body p-3">
            <div>
              @foreach ($user->Badges($user->id) as $badge)
                <img class="bdg" src="{{$badge->badge}}" title="{{$badge->description}}" >
              @endforeach
              </div>             
            </div>
          </div>
        </div>
        
        
        
        
        
        
        
        
        <div class="col-12 col-xl-4">
          <div class="card h-100">
            <div class="card-header pb-0 p-3">
            <h6 class="mb-0">@if ($lang=='en') Conversations @elseif($lang=='fr')Conversations @elseif($lang=='es')المحادثات @endif</h6>
            </div>
            <!--       ###############################################                        -->


            <div class="card-body p-3">
              <ul class="list-group chat-ppl" >
              @livewireStyles
               <livewire:messager/>
              @livewireScripts  
              </ul>
            </div>

         <!--       ###############################################                        -->

          </div>

        </div>


        


        <div class="col-12 mt-4">
          <div class="card mb-4 cardi">
            <div class="card-header pb-0 p-3">
            <h6 class="mb-1">@if ($lang=='en') My posts @elseif($lang=='fr')Mes publications @elseif($lang=='es')مشاركاتي @endif</h6>
              <p class=" "></p>
            </div>
            <div class="posts card-body p-3">
              <div class="row p-g">
          









 @foreach($posts as $post)

<div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
<div class="card card-blog card-plain">
<div class="position-relative">
<a class="d-block shadow-xl border-radius-xl">
<?php 
try{
            $images =  json_decode($post->images()->get(['image']),true); 
            echo '
            <div style="background-size: cover;background-image: url('.asset($images[0]["image"]).');" class="overflow-hidden position-relative border-radius-xl" >';
           }catch(Exception $error){
            echo '
            <div class="overflow-hidden position-relative border-radius-xl" style="background-image: url(\'../assets/img/curved-images/curved14.jpg\');">
            <span class="mask bg-gradient-dark"></span>';
          }
           ?>
<div class="card-body position-relative z-index-1 p-3">
<h5 class="text-white mt-4 mb-5 pb-2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
<div class="d-flex">
<div class="d-flex">
<div class="me-4">
<p class="text-white   opacity-8 mb-0">&nbsp;&nbsp;</p>
<h6 class="text-white mb-0">&nbsp;&nbsp;</h6>
</div>
<div>
<p class="text-white   opacity-8 mb-0">&nbsp;</p>
<h6 class="text-white mb-0">&nbsp;</h6>
</div>
</div>
<div class="ms-auto w-20 d-flex align-items-end justify-content-end">
</div>
</div>
</div>
</div>


           
</a>
</div>
<div class="card-body px-1 pb-0">
<p class="text-gradient text-dark mb-2  ">{{ $post->title }}</p>
<a href="javascript:;">
<h5>
{{ $post->title }}</h5>
</a>
<p class="mb-4  ">
<p class="mb-4  notfull">
<?php
          if(!(rtrim(substr("{$post->body}", 0, 48),'\n'))){
           echo strip_tags(rtrim(substr("{$post->body}", 0, 48),'\n')); 
          }else{
            echo strip_tags("{$post->body}");
          }
           ?></p>
</p>
<div class="d-flex align-items-center justify-content-between">
<form method="GET" action="{{ route('post.show', $post->id) }}">
<button type="Submit" class="btn btn-outline-primary btn-sm mb-0"> @if ($lang == 'en') View post @elseif ($lang == 'fr') Voir la publication @elseif ($lang == 'es') عرض المنشور @endif </button>
                          <p class="mb-4  " style="display:inline;font-size:x-small !important"> &nbsp;&nbsp;{{ $post->reply_count }} @if ($lang == 'en') comments @elseif ($lang == 'fr') commentaires @elseif ($lang == 'es') تعليقات @endif </p>
   </form>
   
 
   <div class="avatar-group mt-2">
  <span style='font-size:12px;vertical-align: super; text-align:right'>{{ $post->creator->name }}</span>
  <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" >
  <img alt="Image placeholder"src="../{{ $post->creator->profile_photo_path }}" style="width:50px!important,height:50px!important">
</a>
</div>
</div>
</div>
</div>
</div>

@endforeach


@if (count($posts) > 0)
    <a href="{{ url(route('post.user', ['id' => auth()->id()])) }}" class="see-all">
        <br><br>
        <strong>
            @if ($lang == 'en') VIEW ALL @elseif ($lang == 'fr') VOIR TOUT  @elseif ($lang == 'es') الكــل @endif
        </strong>
    </a>
@endif


</div>
          </div>
        </div>
      </div>
      </div>
      </div>





      </span>

      <span id="settings" class="nav-item tablinks row tabcontent" >
     
            @include('profile.show')
    
      </span>


        <span id="Calender" class="tabcontent">
     

        
        </span>
      
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
          <p class=" ">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="  d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
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
        </div>*
      </div>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
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
<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  <input type="hidden" id="ctk" value='{{ csrf_token() }}'>
  @include("shared")



@if (Route::has('login'))


<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>

<script src="../assets/js/connection.js" ></script>


@endif


</body>

</html>