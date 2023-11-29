<x-app-layout style="display: content">

    @php
    $lang= $_COOKIE['selectedLanguage'] ?? 'en' 
 @endphp
 

<h5 style="margin:10px">@if($lang=='en')Update your Profile Information Here, To update your Profile picture, just click on it !@else @if ($lang=='fr')Mettez à jour vos informations de profil ici. Pour mettre à jour votre photo de profil, il vous suffit de cliquer dessus ! @endif @endif</h5>
<br>
@if (Laravel\Fortify\Features::canUpdateProfileInformation())
                <div class=" sm:mt-0">
                    @livewire('profile.update-profile-information-form')
                </div>
                @endif
            @if (Laravel\Fortify\Features::enabled(Laravel\Fortify\Features::updatePasswords()))
                <div class="mt-10 sm:mt-0">
                    @livewire('profile.update-password-form')
                </div>

            @endif

</x-app-layout>
<style>
    .form-control{
        width: auto;
    }
    .bfh{
        display: flex;
        align-items: center;
        justify-content: center;
    }
    button{
        width: 117px!important;
        max-width: fit-content;
    }
    .mt-10{
        display: contents;
    width: fit-content;
    }
    button[type=submit] {
        background-image: linear-gradient(310deg, #ff2121 0%, #fd2191 100%);
        align-self: center;
        justify-self: center;
        width: auto !important;
        border-radius: 8px;
    }
    .items-center{
        display: grid;
        box-shadow: none !important;
        margin: 10px;
    }
    input,label{
        margin:auto !important;
        text-align: center !important;
    }
   label{
    padding-top: 5px!important;
   }
    
   
</style>