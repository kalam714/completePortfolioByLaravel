<!DOCTYPE html>
<html lang="en">
@include('frontend.layouts.header')

<body>
    <!-- ******HEADER****** --> 
    @include('frontend.layouts.header2')


    @yield('content')

@include('frontend.layouts.footer')       