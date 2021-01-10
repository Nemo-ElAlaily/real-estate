<!-- START SECTION BLOG -->
<section class="blog-section bg-white-2 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>{{__('index.blog title')}} </span> {{__('index.&')}}  {{__('index.articles')}}</h2>
            <p>{{ __('index.blog subtitle')}}</p>
        </div>
        <div class="news-wrap">
            <div class="row">
                @include('includes.index.cards.tips')
                @include('includes.index.cards.tips')
                @include('includes.index.cards.tips')
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->