@extends('layouts.main')

@section('content')

    @include('includes.header.info-bar') 
    
    @include('includes.header.navbar') 

    @include('includes.register.registerSlider')

    @include('includes.register.registerBody')

    @include('includes.footer.footer')

@endsection