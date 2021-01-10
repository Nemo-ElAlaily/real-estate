<!-- START FOOTER -->
<footer class="first-footer">
    <div class="top-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">
                    <div class="netabout">
                        <a href="{{ route('homepage') }}" class="logo">
                            <img src="{{ asset('public/images/logo-footer.svg') }}" alt="netcom">
                        </a>
                        <p>{{ __('index.lorem')}}</p>
                    </div>
                    <div class="contactus">
                        <ul>
                            <li>
                                <div class="info">
                                    <i class="fa fa-map-marker px-2" aria-hidden="true"></i>
                                    <p class="in-p">95 South Park Avenue, USA</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-phone px-2" aria-hidden="true"></i>
                                    <p class="in-p">+456 875 369 208</p>
                                </div>
                            </li>
                            <li>
                                <div class="info">
                                    <i class="fa fa-envelope px-2" aria-hidden="true"></i>
                                    <p class="in-p ti">support@findhouses.com</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="navigation">
                        <h3>{{ __('footer.Navigation') }}</h3>
                        <div class="nav-footer">
                            <ul>
                                <li><a href="#">{{ __('header.Home') }}</a></li>
                                <li><a href="#">{{ __('header.Properties') }}</a></li>                                
                                <li class="no-mgb"><a href="#">{{ __('header.Agencies') }}</a></li>
                            </ul>
                            <ul class="nav-right">
                                <li><a href="#">{{ __('footer.About Us') }}</a></li>
                                <li><a href="#">{{ __('header.Blog') }}</a></li>
                                <li class="no-mgb"><a href="#">{{ __('header.Contact') }}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="newsletters">
                        <h3>{{ __('footer.newsletter')}}</h3>
                        <p>{{ __('footer.newsletter paragraph')}}</p>
                    </div>
                    <form class="bloq-email mailchimp form-inline" method="post">
                        <label for="subscribeEmail" class="error"></label>
                        <div class="email">
                            <input type="email" id="subscribeEmail" name="EMAIL" placeholder="{{ __('footer.Enter Your Email') }}">
                            <input type="submit" value="{{ __('footer.Subscribe') }}">
                            <p class="subscription-success"></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="second-footer">
        <div class="container">
            <p>{{ __('footer.copyright') }}</p>
            <p>Made With <i class="fa fa-heart" aria-hidden="true"></i> By TMAC-s</p>
        </div>
    </div>
</footer>