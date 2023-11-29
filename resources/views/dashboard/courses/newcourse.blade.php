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
  <link href="../assets/css/courses.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="../assets/css/soft-ui-dashboard.css?v=1.0.7" rel="stylesheet" />
  @php
     $lang= $_COOKIE['selectedLanguage'] ?? 'en' 
  @endphp
</head>

<body class="g-sidenav-show  bg-gray-100">
  
     @include('bar')
  
     <div class="main-content position-relative bg-gray-100 max-height-vh-100 h-100">

  

      


<!-- seaaaaaaaaaaaaaaaaaaaachhhhhhhhhhhherrrrrrrr-->


<div class="page-header min-height-300 border-radius-xl mt-4" id="coverPreview" style="background-image: url('../assets/img/curved-images/curved11-small.jpg'); background-position-y: 50%;">
        <span class="mask bg-gradient-primary opacity-6" ></span>
</div>

<div class="row  search-eng" style="top:-100px;display:relative;">
<div class="col-md-7 mt-4 search-eng">
<div class="card search-eng">
<div class="card-header pb-0 px-3">
  <h6 class="mb-0">
    @if ($lang=='en') Add a new course 
    @else 
        @if($lang=='fr') Ajouter un nouveau cours 
        @else 
            @if($lang=='es') إضافة دورة جديدة 
            @endif 
        @endif
    @endif
</h6>
</div>
<div class="card-body pt-4 p-3" >
<ul class="list-group">
<li class="list-group-item border-0 d-flex p-4 mb-2 bg-gray-100 border-radius-lg mb1618" style="display: flex !important;justify-content: center;
    justify-items: center;">

<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data">

<div class="container-fluid py-4" >
      <div class="row center">
        <div class="col-lg-8 ">
          <div class="row ">
          
<form action="{{ route('courses.store') }}" method="POST" enctype="multipart/form-data"  class="center">
        @csrf
   

                          
                      <div class="col-md-6 mb-md-0 mb-4  ">
                      <br>
                      <label for="materialUpload" class="text-dark" style="width:auto">
                        @if ($lang=='en') Title  
                        @else 
                            @if($lang=='fr') Titre 
                            @else 
                                @if($lang=='es') العنوان 
                                @endif 
                            @endif
                        @endif
                    </label>
                                          <input type="text" name="title" placeholder="e.g Geometry in the space" class="form-control" maxlength="255">
                        <div>
                          <label for="materialUpload" class="text-dark" style="width:auto">
                            @if ($lang=='en') Duration 
                            @else 
                                @if($lang=='fr') Durée  
                                @else 
                                    @if($lang=='es') المدة 
                                    @endif 
                                @endif
                            @endif
                        </label>
                                                  <input type="number" name="duration" id="duration" class="form-control ">
                        </div>
                          
                        <div id="addressField" class="col-md-6" style="display: none">
                                     <label for="materialUpload" class="text-dark" style="width:auto">
                                     @if ($lang=='en') Address/Place  
                                     @elseif($lang=='fr') l'Adresse
                                    @elseif($lang=='es') عوان الموقع 
                                    @endif    
                                </label>
                                    <input type="text" name="address" class="form-control ">
                        </div>

                        <div class="col-md-6 mb-md-0 mb-4">
                          <label for="materialUpload" class="text-dark" style="width:auto">
                              @if ($lang=='en') Price  
                              @else 
                                  @if($lang=='fr') Prix 
                                  @else 
                                      @if($lang=='es') السعر 
                                      @endif 
                                  @endif
                              @endif
                          </label>
                          <input name="price" type="number" min="0" class="form-control " required>
                      </div>
                      <div class="col-md-6 mb-md-0 mb-4">
                          <label for="materialUpload" class="text-dark" style="width:auto" maxlength="1000">
                              @if ($lang=='en') Description  
                              @else 
                                  @if($lang=='fr') Description  
                                  @else 
                                      @if($lang=='es') الوصف  
                                      @endif 
                                  @endif
                              @endif
                          </label>
                          <textarea name="description" type="text" class="form-control " required></textarea>
                      </div>
                      


                      </div>
                      
                      <div class="col-md-6 ">
                      <br>
                      <label for="materialUpload" class="text-dark" style="width:auto">
                        @if ($lang=='en') Module 
                        @else 
                            @if($lang=='fr') Matière 
                            @else 
                                @if($lang=='es') الوحدة 
                                @endif 
                            @endif
                        @endif
                    </label> <br>
                      <select id="moduleFilter" name="module" class="form-control" style="display:inline;width:auto">
                       
                        <option value="mathematics" selected>
                            @if ($lang=='en') Mathematics 
                            @else 
                                @if($lang=='fr') Mathématiques 
                                @else 
                                    @if($lang=='es') الرياضيات 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="physics">
                            @if ($lang=='en') Physics 
                            @else 
                                @if($lang=='fr') Physique 
                                @else 
                                    @if($lang=='es') الفيزياء 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="chemistry">
                            @if ($lang=='en') Chemistry 
                            @else 
                                @if($lang=='fr') Chimie 
                                @else 
                                    @if($lang=='es') الكيمياء 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="biology">
                            @if ($lang=='en') Biology 
                            @else 
                                @if($lang=='fr') Biologie 
                                @else 
                                    @if($lang=='es') علم الأحياء 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="computer-science">
                            @if ($lang=='en') Computer Science 
                            @else 
                                @if($lang=='fr') Informatique 
                                @else 
                                    @if($lang=='es') علوم الحاسوب 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="history">
                            @if ($lang=='en') History 
                            @else 
                                @if($lang=='fr') Histoire 
                                @else 
                                    @if($lang=='es') التاريخ 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="geography">
                            @if ($lang=='en') Geography 
                            @else 
                                @if($lang=='fr') Géographie 
                                @else 
                                    @if($lang=='es') الجغرافيا 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="literature">
                            @if ($lang=='en') Literature 
                            @else 
                                @if($lang=='fr') Littérature 
                                @else 
                                    @if($lang=='es') الأدب 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="foreign-languages">
                            @if ($lang=='en') Foreign Languages 
                            @else 
                                @if($lang=='fr') Langues étrangères 
                                @else 
                                    @if($lang=='es') اللغات الأجنبية 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="economics">
                            @if ($lang=='en') Economics 
                            @else 
                                @if($lang=='fr') Économie 
                                @else 
                                    @if($lang=='es') الاقتصاد 
                                    @endif 
                                @endif
                            @endif
                        </option>
                    </select> <br>
                
                    <label for="materialUpload" class="text-dark" style="width:auto  ">
                      @if ($lang=='en') Level 
                      @else 
                          @if($lang=='fr') Niveau 
                          @else 
                              @if($lang=='es') المستوى 
                              @endif 
                          @endif
                      @endif
                  </label>
                  <br>
                                          <select name="level"  class="form-control ">
                       
                        <option value="primary-1" >
                            @if ($lang=='en') Primary School - Year 1 
                            @else 
                                @if($lang=='fr') Ecole primaire 1ère année 
                                @else 
                                    @if($lang=='es') المدرسة الابتدائية - الصف الأول 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="primary-2">
                            @if ($lang=='en') Primary School - Year 2 
                            @else 
                                @if($lang=='fr') Ecole primaire 2ème année 
                                @else 
                                    @if($lang=='es') المدرسة الابتدائية - الصف الثاني 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="primary-3">
                            @if ($lang=='en') Primary School - Year 3 
                            @else 
                                @if($lang=='fr') Ecole primaire 3ème année 
                                @else 
                                    @if($lang=='es') المدرسة الابتدائية - الصف الثالث 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="primary-4">
                            @if ($lang=='en') Primary School - Year 4 
                            @else 
                                @if($lang=='fr') Ecole primaire 4ème année 
                                @else 
                                    @if($lang=='es') المدرسة الابتدائية - الصف الرابع 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="primary-5">
                            @if ($lang=='en') Primary School - Year 5 
                            @else 
                                @if($lang=='fr') Ecole primaire 5ème année 
                                @else 
                                    @if($lang=='es') المدرسة الابتدائية - الصف الخامس 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="primary-6">
                            @if ($lang=='en') Primary School - Year 6 
                            @else 
                                @if($lang=='fr') Ecole primaire 6ème année 
                                @else 
                                    @if($lang=='es') المدرسة الابتدائية - الصف السادس 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="middle-1">
                            @if ($lang=='en') Middle school - Year 1 
                            @else 
                                @if($lang=='fr') Collège 1ère année 
                                @else 
                                    @if($lang=='es') المدرسة المتوسطة - الصف الأول 
                                    @endif 
                                @endif
                            @endif
                        </option>
                        <option value="middle-2">
                          @if ($lang=='en') Middle school - Year 2 
                          @else 
                              @if($lang=='fr') Collège 2ème année 
                              @else 
                                  @if($lang=='es') المدرسة المتوسطة - الصف الثاني 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="middle-3">
                          @if ($lang=='en') Middle school - Year 3 
                          @else 
                              @if($lang=='fr') Collège 3ème année 
                              @else 
                                  @if($lang=='es') المدرسة المتوسطة - الصف الثالث 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="middle-4">
                          @if ($lang=='en') Middle school - Year 4 
                          @else 
                              @if($lang=='fr') Collège 4ème année 
                              @else 
                                  @if($lang=='es') المدرسة المتوسطة - الصف الرابع 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="high-1">
                          @if ($lang=='en') Secondary school - Year 1 
                          @else 
                              @if($lang=='fr') Lycée 1ère année 
                              @else 
                                  @if($lang=='es') المدرسة الثانوية - الصف الأول 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="high-2">
                          @if ($lang=='en') Secondary school - Year 2 
                          @else 
                              @if($lang=='fr') Lycée 2ème année 
                              @else 
                                  @if($lang=='es') المدرسة الثانوية - الصف الثاني 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="high-3" selected>
                          @if ($lang=='en') Secondary school - Year 3 
                          @else 
                              @if($lang=='fr') Lycée 3ème année 
                              @else 
                                  @if($lang=='es') المدرسة الثانوية - الصف الثالث 
                                  @endif 
                              @endif
                          @endif
                      </option>
               
                      <option value="undergraduate-1">
                          @if ($lang=='en') Undergraduate - Year 1 
                          @else 
                              @if($lang=='fr') Licence 1ère année 
                              @else 
                                  @if($lang=='es') البكالوريوس - السنة الأولى 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="undergraduate-2">
                          @if ($lang=='en') Undergraduate - Year 2 
                          @else 
                              @if($lang=='fr') Licence 2ème année 
                              @else 
                                  @if($lang=='es') البكالوريوس - السنة الثانية 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="undergraduate-3">
                          @if ($lang=='en') Undergraduate - Year 3 
                          @else 
                              @if($lang=='fr') Licence 3ème année 
                              @else 
                                  @if($lang=='es') البكالوريوس - السنة الثالثة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="undergraduate-4">
                          @if ($lang=='en') Undergraduate - Year 4 
                          @else 
                              @if($lang=='fr') Licence 4ème année 
                              @else 
                                  @if($lang=='es') البكالوريوس - السنة الرابعة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="master-1">
                          @if ($lang=='en') Master's Degree - Year 1 
                          @else 
                              @if($lang=='fr') Master 1 
                              @else 
                                  @if($lang=='es') الماجستير - السنة الأولى 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="master-2">
                          @if ($lang=='en') Master's Degree - Year 2 
                          @else 
                              @if($lang=='fr') Master 2 
                              @else 
                                  @if($lang=='es') الماجستير - السنة الثانية 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-1">
                          @if ($lang=='en') PhD - Year 1 
                          @else 
                              @if($lang=='fr') PhD 1 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة الأولى 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-2">
                          @if ($lang=='en') PhD - Year 2 
                          @else 
                              @if($lang=='fr') PhD 2 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة الثانية 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-3">
                          @if ($lang=='en') PhD - Year 3 
                          @else 
                              @if($lang=='fr') PhD 3 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة الثالثة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-4">
                          @if ($lang=='en') PhD - Year 4 
                          @else 
                              @if($lang=='fr') PhD 4 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة الرابعة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-5">
                          @if ($lang=='en') PhD - Year 5 
                          @else 
                              @if($lang=='fr') PhD 5 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة الخامسة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-6">
                          @if ($lang=='en') PhD - Year 6 
                          @else 
                              @if($lang=='fr') PhD 6 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة السادسة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="phd-7">
                          @if ($lang=='en') PhD - Year 7 
                          @else 
                              @if($lang=='fr') PhD 7 
                              @else 
                                  @if($lang=='es') الدكتوراه - السنة السابعة 
                                  @endif 
                              @endif
                          @endif
                      </option>
                    </select>  
                    <label for="materialUpload" class="text-dark" style="width:auto  ">
                      @if ($lang=='en') Teaching method 
                      @else 
                          @if($lang=='fr') Méthode d'enseignement 
                          @else 
                              @if($lang=='es') طريقة التدريس 
                              @endif 
                          @endif
                      @endif
                  </label>
                  <select name="place" id="studyFormat" class="form-control " onchange="toggleAddressField()">
                      <option value="online">
                          @if ($lang=='en') Online 
                          @else 
                              @if($lang=='fr') En ligne 
                              @else 
                                  @if($lang=='es') عبر الإنترنت 
                                  @endif 
                              @endif
                          @endif
                      </option>
                      <option value="presential">
                          @if ($lang=='en') Presential 
                          @else 
                              @if($lang=='fr') En présentiel 
                              @else 
                                  @if($lang=='es') وجودي 
                                  @endif 
                              @endif
                          @endif
                      </option>
                  </select>
                  <label for="materialUpload" class="text-dark" style="width:auto  ">
                      @if ($lang=='en') Post cover 
                      @else 
                          @if($lang=='fr') Couverture de la publication 
                          @else 
                              @if($lang=='es') غلاف المنشور 
                              @endif 
                          @endif
                      @endif
                  </label>
                  <input type="file" name="cover"  id="cover" accept="image/*" maxlength="2097152" class="  form-control btn btn-primary btn-sm w-100 mb-0"  onchange="previewImage(event)" >
                  <br> <br> <br>
                  
                      </div> 
           
<div class="center" style="overflow: visible">

<div id="videoFields">
            <div class="video-input">
                <label for="videoLink">Video Link 1:</label>
                <input type="text" class="form-control  video-input" name="videoLink[]" placeholder="Enter Video Link">
            </div>
    </div>
    <button type="button"  class="btn btn-outline-primary btn-sm" id="addVideo">Add Video</button>
    </div>
           
                      
                <div class="center" style="overflow: visible">
    <label for="materialUpload" class="btn btn-outline-primary btn-sm" style="width:auto">
        @if ($lang=='en') Add material 
        @else 
            @if($lang=='fr') Ajouter des ressources 
            @else 
                @if($lang=='es') إضافة المواد 
                @endif 
            @endif
        @endif
    </label>



    <input type="file" id="materialUpload" name="resources[]" class="d-none" accept=".pdf, image/*"  multiple>
</div>



<button type="submit" class="btn bg-gradient-primary mt-3 w-100" >
    @if ($lang=='en') ADD COURSE 
    @else 
        @if($lang=='fr') PUBLIER LE COURS 
        @else 
            @if($lang=='es') إضافة الدورة 
            @endif 
        @endif
    @endif
</button>

    </form> 
  
    </form> 


    

    <div class="row center">
<div class="card-body p-3 pb-0">
                              <ul class="list-group" id="courseMaterialsList">
                                <!-- Uploaded files will be dynamically added here -->
                              </ul>
    </div>
    </div>
<div>        
<div>        
<div>        
<div>        


</li>
<li> 

  </li>





            </div>
          </div>
        </div>
      </div>
      </div>
     
      <footer class="footer py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mb-4 mx-auto text-center">
            
            <a  href="mailto:minassat.VIRTED@gmail.com" target="_blank" class="text-secondary me-xl-5 me-3 mb-sm-0 mb-2">
              Contact Us
            </a>
            
          </div>
         
        <div class="row">
          <div class="col-8 mx-auto text-center mt-1">
            <p class="mb-0 text-secondary">
              Copyright © <script>
                document.write(new Date().getFullYear())
              </script> Soft by Creative Tim.
            </p>
          </div>
        </div>
      </div>
    </footer>
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
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    function toggleAddressField() {
    var addressField = document.getElementById("addressField");
    var studyFormat = document.getElementById("studyFormat").value;

    if (studyFormat === "presential") {
      addressField.style.display = "block";
      document.getElementById("address").style.display = "block";
    } else {
      addressField.style.display = "none";
      document.getElementById("address").style.display = "none";
    }
  }
  </script>

  <script src="../assets/js/courses.js">
  <script src="../assets/js/addcourses.js">


</script> 
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.7"></script>
  @include("shared")
</body>

</html>