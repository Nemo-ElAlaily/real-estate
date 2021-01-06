<!-- START SECTION PROPERTIES FOR SALE -->
<section class="recently portfolio bg-white-1 home18">
    <div class="container">
        <div class="sec-title">
            <h2><span>{{ __('index.title')}} </span>{{ __('index.For Sale')}}</h2>
            <p>{{ __('index.subtitle')}}</p>
        </div>
        <div class="portfolio col-xl-12">
            <div class="slick-lancers">
                @include('includes.index.cards.forSaleCard')
                @include('includes.index.cards.forSaleCard')
                @include('includes.index.cards.forSaleCard')
                @include('includes.index.cards.forSaleCard')
                @include('includes.index.cards.forSaleCard')
                @include('includes.index.cards.forSaleCard')
            </div>
        </div>
    </div>
    <div class="bg-all">
        <a href="#" class="btn btn-outline-light">{{ __('index.View All')}}</a>
    </div>
</section>
<!-- END SECTION PROPERTIES FOR SALE -->