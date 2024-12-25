@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')

    <!-- Slider Section Start -->
    @include('frontend.slider.slider')
    <!-- Slider Section End -->

{{--    about page start--}}
    <!--@include('frontend.about.about')-->
  <!--Counter One Start-->
    @include('frontend.counter.counter')
    <!--Counter One End-->
    {{--    about page end--}}

    <!-- Categories Section Start -->
    @include('frontend.services.services')
    <!-- Categories Section End -->


    <!-- Project Section Start -->
    @include('frontend.project.project')
     <!-- Project Section end -->




{{--    gallery start--}}
    <!-- Events Section Start -->
    @include('frontend.sponsor.sponsor_page')
    <!-- Events Section End -->
    {{--    gallery end--}}


      <!-- Company Details Start -->
      @include('frontend.company-profile.company-details')
      <!-- Company Details End -->


      <!-- Client Section Start -->
      @include('frontend.client.client')
      <!-- Client Section End -->








@endsection
