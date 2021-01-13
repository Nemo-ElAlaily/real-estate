<div class="col-lg-9 col-md-12 blog-pots">

    @include('includes.properties.body.bodyHeader')

    <div class="row featured portfolio-items px-3">
        
        @include('includes.properties.body.singleProperty')

        @include('includes.properties.body.singleProperty')

        @include('includes.properties.body.singleProperty')

        @include('includes.properties.body.singleProperty')


    </div>

</div>
<!-- sidebar start --> 
<aside class="col-lg-3 col-md-12 car">
    <div class="widget">
        
        @include('includes.properties.body.sidebar.sidebarHeader')

        @include('includes.properties.body.sidebar.searchFields')

        @include('includes.properties.body.sidebar.recent')

        @include('includes.properties.body.sidebar.tags')

    </div>
</aside>

@include('includes.pagination')