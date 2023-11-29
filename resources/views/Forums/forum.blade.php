<!--
=========================================================
* Soft UI Dashboard - v1.0.7
=========================================================

* Product Page: https://www.creative-tim.com/product/soft-ui-dashboard
* Copyright 2023 Creative Tim (https://www.creative-tim.com)
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
    Soft UI Dashboard by Creative Tim
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
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  <!-- Nepcha Analytics (nepcha.com) -->
  <!-- Nepcha is a easy-to-use web analytics. No cookies and fully compliant with GDPR, CCPA and PECR. -->
  <script defer data-site="YOUR_DOMAIN_HERE" src="https://api.nepcha.com/js/nepcha-analytics.js"></script>
  <link href="../assets/css/general.css" rel="stylesheet" /> 
  <link href="../assets/css/forums.css" rel="stylesheet" /> 

  @php $lang= $_COOKIE['selectedLanguage'] ?? 'en' @endphp

</head>


  <body class="g-sidenav-show bg-gray-100" > 
    @include('bar')
    
    <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

  <div class="container-fluid">
  <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100  ps--active-y">
      <div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('../assets/img/curved-images/curved11-small.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6"></span>
      </div>
      <div class="card card-body blur shadow-blur mx-4 mt-n6 overflow-hidden">
        <div class="row gx-4">
          <form method="get" action="{{route('post.search')}}">
            <div class="input-group">
              <button type="submit" style="background:transparent;border:none">
                <span class="input-group-text text-body">
                  <i class="fas fa-search" aria-hidden="true"></i>
                </span>
              </button>
              <input style="padding-left:10px;padding-right:10px;border-radius:5px" name="search" type="text" class="form-control" placeholder="Type here...">
            </div>
            <div class="filters">
              <div class="filters">
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="science">
                    <span class="filtered"> @if ($lang == 'en') Science @elseif ($lang == 'fr') Sciences @elseif ($lang == 'es') علوم @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="languages">
                    <span class="filtered"> @if ($lang == 'en') Languages @elseif ($lang == 'fr') Langues @elseif ($lang == 'es') لغات @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="sports">
                    <span class="filtered"> @if ($lang == 'en') Sports @elseif ($lang == 'fr') Sports @elseif ($lang == 'es') رياضة @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="business_and_entrepreneurship">
                    <span class="filtered"> @if ($lang == 'en') Business and innovation @elseif ($lang == 'fr') Business et innovation @elseif ($lang == 'es') الأعمال والابتكار @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="politics">
                    <span class="filtered"> @if ($lang == 'en') Politics @elseif ($lang == 'fr') Politiques @elseif ($lang == 'es') سياسة @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="arts_and_culture">
                    <span class="filtered"> @if ($lang == 'en') Art and culture @elseif ($lang == 'fr') Art et culture @elseif ($lang == 'es') فن وثقافة @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="technology">
                    <span class="filtered"> @if ($lang == 'en') Technology @elseif ($lang == 'fr') Technology @elseif ($lang == 'es') تكنولوجيا @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="education">
                    <span class="filtered"> @if ($lang == 'en') Education @elseif ($lang == 'fr') Education @elseif ($lang == 'es') تعليم @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="Q&A">
                    <span class="filtered"> @if ($lang == 'en') Q&A @elseif ($lang == 'fr') Q&A @elseif ($lang == 'es') أسئلة وأجوبة @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="general">
                    <span class="filtered"> @if ($lang == 'en') General @elseif ($lang == 'fr') Général @elseif ($lang == 'es') عام @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="career">
                    <span class="filtered"> @if ($lang == 'en') Career @elseif ($lang == 'fr') Carrière @elseif ($lang == 'es') مهنة @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="hight_school">
                    <span class="filtered"> @if ($lang == 'en') High School @elseif ($lang == 'fr') Lycée @elseif ($lang == 'es') المدرسة الثانوية @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="elementary_school">
                    <span class="filtered"> @if ($lang == 'en') Elementary School @elseif ($lang == 'fr') École primaire @elseif ($lang == 'es') المدرسة الابتدائية @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="middle_school">
                    <span class="filtered"> @if ($lang == 'en') Middle School @elseif ($lang == 'fr') École moyenne @elseif ($lang == 'es') المدرسة المتوسطة @endif </span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="university">
                    <span class="filtered">@if ($lang=='en') University @elseif($lang=='fr')Univérsité @elseif ($lang == 'es') الجامعة @endif</span>
                  </label>
                </div>
                <div class="filter">
                  <label>
                    <input type="checkbox" class="filter" name="tags[]" value="religion">
                    <span class="filtered">@if ($lang=='en') Religion @elseif($lang=='fr')Religion @elseif ($lang == 'es') الدين @endif</span>
                  </label>
                </div>
              </div>
            </div>
          </form>
        </div>
    </div> @if(auth()->check()) <div id="post-creates" class="create-post">
      <div class="d-flex flex-column flex-info">
        <h6 class="mb-3 notfull"> @if ($lang == 'en') User Want to share your expertise or ask a question? Start a post by clicking the pen below! @elseif ($lang == 'fr') Vous souhaitez partager votre expertise ou poser une question ? Démarrez une publication en cliquant sur le stylo ci-dessous ! @elseif ($lang == 'es') هل ترغب في مشاركة خبرتك أو طرح سؤال؟ ابدأ منشورًا بالنقر على القلم أدناه! @endif </h6>
        <span> @if ($lang == 'en') Kindly adhere to our community guidelines when sharing. @elseif ($lang == 'fr') Veuillez respecter nos directives communautaires lors de vos partages. @elseif ($lang == 'es') يرجى الالتزام بإرشادات المجتمع عند المشاركة. @endif </span>
      </div>
      <div class="row">
      <i id="post-writes" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer "  data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Card" data-bs-original-title="Write">
      @if ($lang == 'en')    @elseif ($lang == 'fr')  Écris quelque chose. @elseif ($lang == 'es') اكتب شيئًا. @endif
      </i>  
      </div>
      <span class="sr-only">Write</span>
      <div class="ms-auto text-end" style="display: contents;">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('post.create') }}" id="post-create" style="max-width: 800px; margin: 0 auto;" enctype="multipart/form-data">
        @csrf

        <label for="title" class="lb">
            @if ($lang == 'en') Title:
            @elseif ($lang == 'fr') Titre :
            @elseif ($lang == 'es') العنوان:
            @endif
        </label>

        <input name="title" class="post-it form-control" style="width: 100%;" id="title" placeholder="Title" required>

        <label for="content" class="lb">
            @if ($lang == 'en') Content:
            @elseif ($lang == 'fr') Contenu :
            @elseif ($lang == 'es') المحتوى:
            @endif
        </label>

        <textarea id="content" name="body" placeholder="Write something..." class="post-it" rows="8" style="width: 100%;" cols="50"></textarea>

        <div class="file-upload">
            <button class="file-upload-btn btn mb-0 btn bg-gradient-dark mb-0" type="button" onclick="$('.file-upload-input').trigger('click')">
                @if ($lang=='en') Add an image
                @elseif($lang=='fr') Ajouter une image
                @elseif($lang=='es') اضف صورة
                @endif
            </button>

            <div class="image-upload-wrap">
                <div class="drag-text">
                    <input class="file-upload-input" name="image[]" type='file' onchange="readURL(this);" accept="image/*" multiple />
                    <span>
                        @if ($lang == 'en') Drag and drop a file or select add Image
                        @elseif ($lang == 'fr') Faites glisser et déposez un fichier ou sélectionnez Ajouter une image
                        @elseif ($lang == 'es') اسحب وأسقط ملفًا أو حدد إضافة صورة
                        @endif
                    </span>
                </div>
            </div>

            <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                    <!-- <button type="button" onclick="removeUpload()" class="remove-image btn bg-gradient-primary w-100 px-3 mb-2 active">Remove <span class="image-title">Uploaded Image</span></button>
                    -->
                </div>
            </div>
        </div>

        <div class="filters">
            <div class="filter">
                <label>
                    <input type="checkbox" class="filter " name="tags[]" value="science">
                    <span class="filtered">
                        @if ($lang == 'en') Science
                        @elseif ($lang == 'fr') Sciences
                        @elseif ($lang == 'es') علوم
                        @endif
                    </span>
                </label>
            </div>
            <!-- Add more filter items similarly -->
        </div>
        @if ($lang == 'en')         <input type="submit" value="Post" class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0" href="javascript:;">

                        @elseif ($lang == 'fr')         <input type="submit" value="Publié" class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0" href="javascript:;">

                        @elseif ($lang == 'es')         <input type="submit" value="أنشر" class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0" href="javascript:;">

                        @endif
    </form>
</div>

    </div> @endif 
    






    <div class="col-12 mt-4">
<div class="card mb-4">
<div class="card-header pb-0 p-3">
<div class="card mb-4"> @if ($lang == 'es') <div class="card-header pb-0 p-3" style="text-align:right"> @else <div class="card-header pb-0 p-3"> @endif <h6 class="mb-1"> @if ($lang == 'en') Posts @elseif ($lang == 'fr') Publications @elseif ($lang == 'es') المنشورات @endif </h6> @if ($lang == 'en') here to share knowledge @elseif ($lang == 'fr') Ici pour partager des connaissances @elseif ($lang == 'es') هنا لمشاركة المعرفة @endif </p>
</div>
<div class="card-body p-3">
<div class="row">

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
<p class="text-white notfull opacity-8 mb-0">&nbsp;&nbsp;</p>
<h6 class="text-white mb-0">&nbsp;&nbsp;</h6>
</div>
<div>
<p class="text-white notfull opacity-8 mb-0">&nbsp;</p>
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
@if ($lang == 'es')
    <div class="card-body px-1 pb-0" style="text-align:right;text-align: -webkit-right; ">
    @else
    <div class="card-body px-1 pb-0">
    @endif <p class="text-gradient text-dark mb-2 notfull"></p>
<a href="javascript:;">
<h5>
{{ $post->title }}<
</h5>
</a>
<p class="mb-4 notfull">
<p class="mb-4 notfull">
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
                          <p class="mb-4 notfull" style="display:inline;font-size:x-small !important"> &nbsp;&nbsp;{{ $post->reply_count }} @if ($lang == 'en') comments @elseif ($lang == 'fr') commentaires @elseif ($lang == 'es') تعليقات @endif </p>
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



<div class="list-group-item border-0 ps-0 pb-0 if-ar" style="margin:20px">
<div class="paginate">{{ $posts->links() }}
</div>
</div>
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
            <p class="notfull">Choose between 2 different sidenav types.</p>
          </div>
          <div class="d-flex">
            <button class="btn bg-gradient-primary w-100 px-3 mb-2 active" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
            <button class="btn bg-gradient-primary w-100 px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
          </div>
          <p class="notfull d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
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
              <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet </a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
              <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share </a>
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
    <script src="../assets/js/forums.js"></script>
    <script src="../assets/js/uploader.js"></script>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script>
      tinymce.init({
        selector: 'textarea[name="body"]',
        plugins: 'anchor autolink charmap codesample emoticons  link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'VIRTED',
        extended_valid_elements: 'p[strong],strong', // Add the desired elements and attributes here
      });
    </script> @if (Route::has('login')) <script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>
    <script src="../assets/js/connection.js"></script> @endif <script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
    <input type="hidden" id="ctk" value='{{ csrf_token() }}'>
    <script>
      // Initialize TinyMCE after the library is loaded
      tinymce.init({
        selector: '#myTextarea'
      });
    </script> @include("shared")
  </body>
</html>