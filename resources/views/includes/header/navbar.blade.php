<!-- Navbar -->
<div id="header">
    <div class="container row mx-auto">
        <!-- Left Side Content -->
        <div class="col-lg-9">
            <!-- Logo -->
            <div id="logo">
                <a href="{{ route('homepage')}}"><img src="{{ asset('public/images/logo.svg') }}" alt=""></a>
            </div>
            <!-- Mobile Navigation -->
            <div class="mmenu-trigger">
                {{-- <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button> --}}
                <button class="navbar-toggler hamburger hamburger--collapse" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class=""><i class="fas fa-bars fa-lg"></i></span>
                  </button>
            </div>
            <!-- Main Navigation -->
            <nav id="navigation" class="style-1">
                <ul id="responsive">
                    <li><a class="current" href="{{ route('homepage')}}">{{ __('header.Home')}}</a></li>
                    <li><a href="#">{{ __('header.Properties')}}</a></li>
                    <li><a href="#">{{ __('header.Agencies')}}</a></li>
                    <li><a href="#">{{ __('header.Blog')}}</a></li>
                    <li><a href="#">{{ __('header.Contact')}}</a>
                    </li>
                </ul>
            </nav>
            <div class="clearfix"></div>
            <!-- Main Navigation / End -->
        </div>
        <!-- Left Side Content / End -->

        <!-- Right Side Content / End -->
        <div class="col-lg-3 hidden-lg-down">
            <!-- Header Widget -->
            <div class="header-widget">
                <a href="#" class="button border">{{ __('header.Submit Property')}}</a>
            </div>
            <!-- Header Widget / End -->
        </div>
        <!-- Right Side Content / End -->

    </div>
</div>
<!-- Navbar / End -->

