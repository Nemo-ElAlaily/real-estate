@extends('layouts.main')

@section('content')

    @include('includes.header.info-bar') 
    
    @include('includes.header.navbar') 

    @include('includes.login.loginSlider')

    @include('includes.login.loginBody')

    @include('includes.footer.footer')

@endsection