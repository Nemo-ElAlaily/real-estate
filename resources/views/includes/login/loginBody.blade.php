<!-- START SECTION LOGIN -->
<div id="login">
    <div class="login">
        <form>
            <div class="access_social">
                <a href="#0" class="social_bt facebook">{{ __('login.Login with') }} {{ __('login.Facebook') }}</a>
                <a href="#0" class="social_bt google">{{ __('login.Login with') }} {{ __('login.Google')}}</a>
                <a href="#0" class="social_bt linkedin">{{ __('login.Login with') }} {{ __('login.Linkedin') }}</a>
            </div>
            <div class="divider"><span>{{ __('login.or')}}</span></div>
            <div class="form-group">
                <label>{{ __('login.email')}}</label>
                <input type="email" class="form-control" name="email" id="email">
                <i class="icon_mail_alt"></i>
            </div>
            <div class="form-group">
                <label>{{ __('login.password') }}</label>
                <input type="password" class="form-control" name="password" id="password" value="">
                <i class="icon_lock_alt"></i>
            </div>
            <div class="fl-wrap filter-tags clearfix add_bottom_30">
                <div class="checkboxes float-left">
                    <div class="filter-tags-wrap">
                        <input id="check-b" type="checkbox" name="check" class="mx-2">
                        <label for="check-b">{{ __('login.remember me') }}</label>
                    </div>
                </div>
            <div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">{{ __('login.Forgot Password?') }}</a></div>
            </div>
            <a href="#0" class="btn_1 rounded full-width">{{ __('login.Login to Find Houses')}}</a>
            <div class="text-center add_top_10">{{ __('login.New to Find Houses?')}} <strong><a href="{{ route('register') }}">{{ __('login.sign up') }}</a></strong></div>
        </form>
    </div>
</div>
<!-- END SECTION LOGIN -->