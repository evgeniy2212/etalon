@extends('welcome')

@section('content')

    {{--<div class="row admin-content">--}}

        @include('admin-menu')

        @yield('admin-content')

    {{--</div>--}}

@endsection
