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
  <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}" />
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
  <link href="../assets/css/forums.css" rel="stylesheet" />
  <link href="../assets/css/general.css" rel="stylesheet" />

  @php
   $lang= $_COOKIE['selectedLanguage'] ?? 'en' 
@endphp


</head>

<body class="g-sidenav-show bg-gray-100">

    @include('bar')
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
 


    @if(auth()->check())


    <div id="post-creates" class="create-post">
          
    <div class="d-flex flex-column flex-info">
    <h6 class="mb-3  ">
    @if ($lang == 'en') User Want to share your expertise or ask a question? Start a post by clicking the pen below!
        @elseif ($lang == 'fr') Vous souhaitez partager votre expertise ou poser une question ? Démarrez une publication en cliquant sur le stylo ci-dessous !
        @elseif ($lang == 'es') هل ترغب في مشاركة خبرتك أو طرح سؤال؟ ابدأ منشورًا بالنقر على القلم أدناه!
      @endif    
    </h6>
    <span> 
    @if ($lang == 'en') Kindly adhere to our community guidelines when sharing.
        @elseif ($lang == 'fr') Veuillez respecter nos directives communautaires lors de vos partages.
        @elseif ($lang == 'es') يرجى الالتزام بإرشادات المجتمع عند المشاركة. 
       @endif
   </span>
    </div>
    <i id="post-writes" class="fas fa-pencil-alt ms-auto text-dark cursor-pointer" data-bs-toggle="tooltip" data-bs-placement="top" aria-hidden="true" aria-label="Edit Card" data-bs-original-title="Write"></i><span class="sr-only">Write</span>
    <div class="ms-auto text-end">
    
    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
    @endif
    
    
    <form method='POST' action="<?php echo route('post.create'); ?>"  id="post-create" style="width:auto;" enctype="multipart/form-data">
                @csrf
                <label for="title" class="lb ">

                @if ($lang == 'en') Title:
    @elseif ($lang == 'fr') Titre :
    @elseif ($lang == 'es') العنوان:
    @endif

                </label>
                <input name="title" class="post-it form-control" style="width: 400px;height:40px;" id="title" placeholder="Title" required>
                <label for="content"  class="lb" >

                @if ($lang == 'en') Content:
    @elseif ($lang == 'fr') Contenu :
    @elseif ($lang == 'es') المحتوى:
      @endif

                </label>
                <textarea id="content" name="body" placeholder="Write something..." class="post-it" rows="8" cols="50" ></textarea>
                
                <div class="file-upload">
                  <button class="file-upload-btn btn mb-0 btn bg-gradient-dark mb-0 file-upload-btn btn mb-0" type="button" onclick="$('.file-upload-input').trigger( 'click' )">@if ($lang=='en') Add an image @elseif($lang=='fr')Ajouter une image @elseif($lang=='es') اضف صورة @endif</button>

                  <div class="image-upload-wrap">
                    <div class="drag-text">
                    <input class="file-upload-input"  name="image[]" type='file' onchange="readURL(this);" accept="image/*"  multiple/>
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
                     -->           </div>
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

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="languages">
        <span class="filtered">
            @if ($lang == 'en') Languages
            @elseif ($lang == 'fr') Langues
            @elseif ($lang == 'es') لغات
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="sports">
        <span class="filtered">
            @if ($lang == 'en') Sports
            @elseif ($lang == 'fr') Sports
            @elseif ($lang == 'es') رياضة
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="business_and_entrepreneurship">
        <span class="filtered">
            @if ($lang == 'en') Business and innovation
            @elseif ($lang == 'fr') Business et innovation
            @elseif ($lang == 'es') أعمال وابتكار
            @endif
        </span>
    </label>
</div>

<div class "filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="politics">
        <span class="filtered">
            @if ($lang == 'en') Politics
            @elseif ($lang == 'fr') Politique
            @elseif ($lang == 'es') سياسة
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="arts_and_culture">
        <span class="filtered">
            @if ($lang == 'en') Arts and Culture
            @elseif ($lang == 'fr') Arts et Culture
            @elseif ($lang == 'es') فنون وثقافة
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="technology">
        <span class="filtered">
            @if ($lang == 'en') Technology
            @elseif ($lang == 'fr') Technologie
            @elseif ($lang == 'es') تكنولوجيا
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="education">
        <span class="filtered">
            @if ($lang == 'en') Education
            @elseif ($lang == 'fr') Education
            @elseif ($lang == 'es') تعليم
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="Q&A">
        <span class="filtered">
            @if ($lang == 'en') Q&A
            @elseif ($lang == 'fr') Q&R
            @elseif ($lang == 'es') سؤال وجواب
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="general">
        <span class="filtered">
            @if ($lang == 'en') General
            @elseif ($lang == 'fr') Général
            @elseif ($lang == 'es') عام
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="career">
        <span class="filtered">
            @if ($lang == 'en') Career
            @elseif ($lang == 'fr') Carrière
            @elseif ($lang == 'es') وظيفة
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="high_school">
        <span class="filtered">
            @if ($lang == 'en') High School
            @elseif ($lang == 'fr') Lycée
            @elseif ($lang == 'es') المدرسة الثانوية
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="elementary_school">
        <span class="filtered">
            @if ($lang == 'en') Elementary School
            @elseif ($lang == 'fr') École primaire
            @elseif ($lang == 'es') المدرسة الابتدائية
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="middle_school">
        <span class="filtered">
            @if ($lang == 'en') Middle School
            @elseif ($lang == 'fr') Collège
            @elseif ($lang == 'es') المدرسة المتوسطة
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="university">
        <span class="filtered">
            @if ($lang == 'en') University
            @elseif ($lang == 'fr') Université
            @elseif ($lang == 'es') جامعة
            @endif
        </span>
    </label>
</div>

<div class="filter">
    <label>
        <input type="checkbox" class="filter" name="tags[]" value="religion">
        <span class="filtered">
            @if ($lang == 'en') Religion
            @elseif ($lang == 'fr') Religion
            @elseif ($lang == 'es') ديانة
            @endif
        </span>
    </label>
</div>



                </div> 
            
      
                <!--<input type="file" name="image[]" accept="image/*" class="btn bg-gradient-dark mb-0" multiple>-->
                <input type="submit" value="Post" class="btn bg-gradient-dark mb-0 file-upload-btn btn mb-0" href="javascript:;">
               </form>               
    </div>
    </div> 
    @endif
        <div class="col-12 mt-4">
          <div class="card mb-4 cardi">
            
          @if ($lang == 'es')
          <div class="card-header pb-0 p-3" style="text-align:right">
          @else
          <div class="card-header pb-0 p-3">
          @endif 
          
    <h6 class="mb-1">
        @if ($lang == 'en') Posts
        @elseif ($lang == 'fr') Publications
        @elseif ($lang == 'es') المنشورات
        @endif      
   
      </h6>

      
      @if ($lang == 'en') here to share knowledge
      @elseif ($lang == 'fr') Ici pour partager des connaissances
      @elseif ($lang == 'es') هنا لمشاركة المعرفة
      @endif
  </p>
    
</div>

            <div class="posts card-body p-3">
              <div class="row p-g">
               
                
                
                
                
<!--


################################## here ###################################


-->
@foreach($posts as $post)
<div class="post col-xl-3 col-md-6 mb-xl-0 mb-4">
  <div class="card card-blog card-plain">
    <div class="position-relative">
      <a class="d-block shadow-xl border-radius-xl">
           <?php 
           try{
            $images =  json_decode($post->images()->get(['image']),true); 
            echo '<img src="'.asset($images[0]["image"]).'" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg p-image">';
           }catch(Exception $error){
            echo '<img style="width:100%" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAADCCAMAAAB6zFdcAAAAhFBMVEX///8rKikAAAAoJyb7+/vo6OgyMTBLSkklJCMiISAQDgz39/cTEQ+3t7ceHRwWFRPe3t4bGRjv7+9TUlFycXEJBgE5ODefn56JiIhiYWHq6up6enppaWjAwMCioaHV1dWDgoLJycmrq6uVlZVEQ0KHh4eSkpI2NTRMS0qqqqlubW0/Pj3ClDLdAAAEZ0lEQVR4nO3bbXuaMBQGYBqwJrxKgSqtVp2snfb//79VXddtnoMgShby3J/NdYXHkHccBwAAAAAAAAAAAAAAAAAAAAAAwHwPy2g6y8tsXFXjrMy/T6P1SHedeuStN6Uv/DCNlZLSdaWUKk4TX4hqFdkQxNM2E34q70hunIh4tdZdx9uKMsE9/1cOvnhe6q7orXibMDwTwC+xeF/oru1NbETaKIAD6d8PL4WFSponcHgnimqiu9JXFZTCbRfBvi2I77rrfUXrULVOYC99G8xQubmgEXw2hUh35a8jLy5MYE+86q7+NZQtO8N/FM+6H6C7rMWISApz3Y/QVdk1go8QDG8JebcX4cg3uk+YdukOv5g8OizFuadzpfogz42dwth5gpfWPptMCiGz+W43z1xRJHXTKPde97NcKo9rnioR5Xbp/f7tJNqJkI8snWl8jg7W/Jvghu42OCkQvftsCsLMBdQb+0Aq/EYXWSiu6cis38pfR+RzERRzjy0150oJE7fY7rhmILZ1xTbMG2RiQ1iwf+iZDaIXJgQDe4SM2To8F4HjzOi5ZWzcjsoT82/60/Nlf5Dxuenta31dL/RaSZUNyo7o/ArTdtzp//JOnM4KCCtyhEwbNKH/SUD/lclLo9J0Q5BN2tB/ZE2OCq5qWJxuReFNq3x1U7I7SGpnBmeLi4eb1vnaduQqUDQtTjejwqwZwiM1SYxXTYuPyL0X36zpMtmpNR/cHsjyoVFHkIGI1UlLaDHJYTIwakst2M52lS8KP/kji+avAjM4mpXBUTBZf3vdVeExC9miKdN9olnvwt8OWeTjFkMbPdP2TZssd0IvOg2bH3TDLDp93fXqE71mMm290Amzdk6bLbiGYcysu82aKneyovfSzD1rau+VOae16FWYcadTzbaghuCZ25KPDT1xbI+/vGRLMwgq9qQ6NGxD9VIjxd5BkI+6K9ePdc1VTkvmBtOaizuCOasfmLrbrInht/OaCaqae4yxgcfu7U3SmhtZyor+cFF3sV3e2TAz4G5dHCOQNuwesSuEQwTKhgjYFcIhAteGCPKwJgJ1b0NfUBtB/M5f4huOVV0EqRXzgtq7/eFcd/X6sKgbEQb1dSOL2UP/FUHTOytme+S/AHeNvJ7c3iv/rZOK7dgvqHkT0sqGacGHkl0q+lYMCB8mbDMQ1uyiP3PNQFhznuSxx0kGXjq60IKZJFsUgZPTr4IlG8hH9NwgtKY7dLjJgbJiofgpIrsDW85VjzbU4appH6p0RN7tt+r+oeNUxIGCiV9xdkF1B/FGd636RQ0LJl/JvgD52Zthn+p0RX6jYVmXSF7KbvzF1zCQGRj2+WJX1LvgSt216heZgUX3kffIDKy4bvIlEPKEsqwdeG/jU5ZNlQEAAOAfI5ruavXJEzTd9eoTc+KKDJABMkAGyAAZIANkgAyQATJABsjAQQZ7yAAZ7CEDZLCHDJDBnidcil0ZhPcUy24kAQAAAAAAAAAAAAAAAAAAAADAsPwE7eo0R45Or2sAAAAASUVORK5CYII=" alt="img-blur-shadow" class="img-fluid shadow border-radius-lg p-image">';
           }
            ?>

          </a>
    </div>
    @if ($lang == 'es')
    <div class="card-body px-1 pb-0" style="text-align:right;text-align: -webkit-right; ">
    @else
    <div class="card-body px-1 pb-0">
    @endif 


    @if ($post->created_at)
    <p class="text-gradient text-dark mb-2  ">{{ $post->created_at->diffForHumans() }}</p>
    @endif
      <a href="javascript:;">
        <h5 class='p-title'>
        {{ $post->title }}
        </h5>
      </a>
      <script>
        /*
      <!--<p class="mb-4  ">      </p>-->
           // php /*echo implode(' ', array_slice(str_word_count($post->body, 1), 0, 10)).'...'; */ 
         // echo rtrim(substr($post->body, 0, 48),'\n'); ?>
      </script> 
      <div class="mb-4  ">         
           <?php
          if(!(rtrim(substr("{$post->body}", 0, 48),'\n'))){
           echo rtrim(substr("{$post->body}", 0, 48),'\n'); 
          }else{
            echo "{$post->body}";
          }
           ?>
      </div>
          <br>          
          <br>

      <div class="d-flex align-items-center justify-content-between">
      <form method="GET" action="{{ route('post.show', $post->id) }}">
      <button type="submit" name="view-post" class="btn btn-outline-primary btn-sm mb-0">
    @if ($lang == 'en') View post
    @elseif ($lang == 'fr') Voir la publication
    @elseif ($lang == 'es') عرض المنشور
    @endif
</button>
<p class="mb-4  " style="display:inline;font-size:x-small !important">
    &nbsp;&nbsp;{{ $post->reply_count }}
    @if ($lang == 'en') comments
    @elseif ($lang == 'fr') commentaires
    @elseif ($lang == 'es') تعليقات
    @endif
</p>

      </form>
      
        <div class="avatar-group mt-2">
          <span style='font-size:12px;vertical-align: super;'>{{ $post->creator->name }}</span>
          <a href="javascript:;" class="avatar avatar-xs rounded-circle" data-bs-toggle="tooltip" data-bs-placement="bottom" title="{{ $post->creator->name }}">
          <img alt="Image placeholder" style="height:90%" src="../{{ $post->creator->profile_photo_path }}">
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

@endforeach


<div class="paginate">{{ $posts->links() }}</div>


<!--


################################## here ###################################


-->











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
  </script>





@if (Route::has('login'))


<script src="https://cdn.socket.io/4.6.0/socket.io.min.js" integrity="sha384-c79GN5VsunZvi+Q/WObgk2in0CbZsHnjEqvFxC5DxHn9lTfNce2WW6h2pH6u/kF+" crossorigin="anonymous"></script>

<script src="../assets/js/connection.js" ></script>


@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/crypto-js/3.1.2/rollups/aes.js" integrity="sha256-/H4YS+7aYb9kJ5OKhFYPUjSJdrtV6AeyJOtTkw6X72o=" crossorigin="anonymous"></script>
<input type="hidden" id="ctk" value='{{ csrf_token() }}'>
<script>
  // Initialize TinyMCE after the library is loaded
  tinymce.init({
      selector: '#myTextarea'
  });
</script>
@include("shared")

</body>

</html>