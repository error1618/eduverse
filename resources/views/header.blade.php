<style>
 
.language-select {
  -webkit-appearance: none;
  -moz-appearance: none;
  appearance: none;
  background: transparent;
  border: none;
  outline: none;
  padding: 8px;
  cursor: pointer;
  font-size: 12px; /* Adjust the font size as needed */
  background-repeat: no-repeat;
  background-position: right center;
  padding-right: 20px; /* Adjust the padding to accommodate the icon */
}

    </style>

    
<div class="container position-sticky z-index-sticky top-0">
<div class="row">
<div class="col-12">

<nav class="navbar navbar-expand-lg blur blur-rounded top-0 z-index-3 shadow position-absolute my-3 py-2 start-0 end-0 mx-4">
<div class="container-fluid pe-0">
<a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="{{route('index')}}">
VIRTED
</a>
<button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon mt-2">
<span class="navbar-toggler-bar bar1"></span>
<span class="navbar-toggler-bar bar2"></span>
<span class="navbar-toggler-bar bar3"></span>
</span>
</button>
<div class="collapse navbar-collapse " id="navigation">
<ul class="navbar-nav mx-mt">
<li class="nav-item">
<a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="{{route('profile.show')}}">
<i class="fa fa-chart-pie opacity-6 text-dark me-1" aria-hidden="true"></i>

@if ($lang=='en')Dashboard @elseif ($lang=='fr')Dashboard @elseif ($lang=='es')المنصة@endif

</a>
</li>

@if (Route::has('login'))
    @auth
<li class="nav-item">
<a class="nav-link me-2" href="{{ route('logout') }}" >
<i class="fa fa-user opacity-6 text-dark me-1" aria-hidden="true"></i>
@if ($lang=='en')Log Out @elseif ($lang=='fr')Se Déconnecter   @elseif ($lang=='es') الخروج @endif
</a>
</li>
@else
@if (Route::has('register'))
<li class="nav-item">
<a class="nav-link me-2" href="{{ route('register') }}">
<i class="fas fa-user-circle opacity-6 text-dark me-1" aria-hidden="true"></i>
@if ($lang=='en')Sign Up @elseif ($lang=='fr')Enregistrer  @elseif ($lang=='es') التسجيل @endif 
</a>
</li>
<li class="nav-item">
<a class="nav-link me-2" href="{{ route('login') }}">
<i class="fas fa-key opacity-6 text-dark me-1" aria-hidden="true"></i>
@if ($lang=='en')Sign In @elseif ($lang=='fr')Se Connecter  @elseif ($lang=='es')الدخول@endif 
</a>
</li>

@endif
@endauth
@endif


<li class="nav-item d-flex align-items-center">
<i class="fa fa-language" aria-hidden="true"></i>
  <select id="languageSelect" class="language-select">
  <option value="en"><i class="flag-icon flag-icon-us"></i> English</option>
  <option value="fr"><i class="flag-icon flag-icon-fr"></i> Français</option>
  <option value="es"><i class="flag-icon flag-icon-sa"></i> Arabic</option>
</select>


  
  <script>
  document.getElementById('languageSelect').addEventListener('change', function() {
    var selectedValue = this.value;
    if (selectedValue === 'en' || selectedValue === 'fr' || selectedValue === 'es') {
      window.location.href = window.location.pathname + '?lang=' + selectedValue;
    }
  });
  </script>
  
</li>

</ul>

</div>
</div>
</nav>


<script>
  document.addEventListener('DOMContentLoaded', function() {
      var languageSelect = document.getElementById('languageSelect');

      var selectedLanguage = getCookie('selectedLanguage') || 'en';
      
      languageSelect.value = selectedLanguage;

      languageSelect.addEventListener('change', function() {
          var selectedLanguage = this.value;
          setCookie('selectedLanguage', selectedLanguage, 365); // Store in a cookie for 1 year
      });
  });

  function setCookie(name, value, days) {
      var expires = "";
      if (days) {
          var date = new Date();
          date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
          expires = "; expires=" + date.toUTCString();
      }
      document.cookie = name + "=" + (value || "") + expires + "; path=/";
  }

  function getCookie(name) {
      var nameEQ = name + "=";
      var ca = document.cookie.split(';');
      for(var i = 0; i < ca.length; i++) {
          var c = ca[i];
          while (c.charAt(0) == ' ') c = c.substring(1, c.length);
          if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length, c.length);
      }
      return null;
  }
</script>



</div>
</div>
</div>

