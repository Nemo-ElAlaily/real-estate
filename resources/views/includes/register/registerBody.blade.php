<!-- START SECTION -->
<div id="login">
    <div class="login">
        <form autocomplete="off">
            <div class="form-group">
                <label>{{ __('login.Your Name') }}</label>
                <input class="form-control" type="text">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>{{ __('login.Your Last Name') }}</label>
                <input class="form-control" type="text">
                <i class="ti-user"></i>
            </div>
            <div class="form-group">
                <label>{{ __('login.email')}}</label>
                <input class="form-control" type="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>{{ __('login.password')}}</label>
                <input class="form-control" type="password" id="password1">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="form-group">
                <label>{{ __('login.Confirm') }} {{ __('login.password')}}</label>
                <input class="form-control" type="password" id="password2">
                <i class="icon_lock_alt"></i>
            </div>
            <div id="pass-info" class="clearfix"></div>
            <a href="#0" class="btn_1 rounded full-width add_top_30">{{ __('login.Register Now!') }}</a>
            <div class="text-center add_top_10">{{ __('login.have account')}} <strong><a href="{{ route('login') }}">{{ __('login.login')}}</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION -->