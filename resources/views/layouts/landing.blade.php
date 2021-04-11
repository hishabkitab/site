@extends('view::layouts.master')

@section('module-style')
    <link rel="stylesheet" type="text/css" href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/css/site.css') }}">
@endsection

@section('body')
    <!-- Header -->
    <header>
        @include('site::partials.navbar')

        @yield('promo-block')
    </header>
    <!-- End Header -->

    <main role="main">
        @yield('content')
    </main>

    @include('site::partials.footer')

@endsection

@section('module-script')
    <script src="{{ asset('/js/global.js') }}"></script>
@endsection
