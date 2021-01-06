
<!-- Topbar -->
<div class="header-top">
    <div class="container">
        <div class="top-info hidden-sm-down">
            <div class="call-header">
                <p dir="ltr"><i class="fas fa-phone" aria-hidden="true"></i> (234) 0200 17813</p>
            </div>
            <div class="address-header">
                <p dir="ltr"><i class="fas fa-map-marker-alt" aria-hidden="true"></i> {{ __('header.address')}} </p>
            </div>
            <div class="mail-header">
                <p dir="ltr"><i class="fas fa-envelope" aria-hidden="true"></i> info@findhouses.com</p>
            </div>
        </div>
        <div class="top-social hidden-sm-down">
            <div class="login-wrap m-auto">
                <ul class="d-flex">
                    <li><a href="login.html"><i class="fa fa-user"></i> {{ __('header.login') }}</a></li>
                    <li><a href="register.html"><i class="fa fa-sign-in-alt"></i> {{ __('header.register')}}</a></li>
                </ul>
            </div>
            <div class="social-icons-header m-auto">
                <div class="social-icons">
                    <a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a>
                </div>
            </div>

            <div class="dropdown m-auto">
                <button class="btn-dropdown dropdown-toggle" type="button" id="dropdownlang" data-toggle="dropdown" aria-haspopup="true">

                    @if(App::getLocale() == 'en' )
                        <img src="{{ asset('/public/images/English.svg') }}" alt="Language Flag" width="20" class="mx-1" dir="ltr">
                        English
                    @else
                        <img src="{{ asset('/public/images/العربية.svg') }}" alt="Language Flag" width="20" class="mx-1" dir="<img src="{{ asset('/public/images/English.svg') }}" alt="Language Flag" width="20" class="mx-1" dir="ltr">
                        العربية
                    @endif
                 </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownlang" dir="ltr">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        <li>
                            <a class="dropdown-item px-0" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                            <img class="img-fluid mx-1" src="{{ asset('/public/images/'. $properties['native'] . '.svg') }}" alt="{{ $properties['native'] }}" width="20">
                            {{ $properties['native'] }}
                            </a>
                        </li>
                    @endforeach     
               </ul>

              </div>


        </div>
    </div>
</div>
<!-- Topbar / End -->