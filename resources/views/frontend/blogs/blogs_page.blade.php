@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')




      <!-- Main content Start -->
      <div class="main-content">
        <!-- Breadcrumbs Start -->
        <div class="rs-breadcrumbs breadcrumbs-overlay">
            <div class="breadcrumbs-img">
                <img src="{{asset($banner->image)}}" alt="Breadcrumbs Image">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">publication Details</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>{{ $banner->title }}</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->


        {{-- Blog section start --}}

        <div class="rs-inner-blog orange-color pt-100 pb-100 md-pt-70 md-pb-70">

            <div class="container">


        <div class="rs-carousel owl-carousel" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="1" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="3" data-md-device-nav="false" data-md-device-dots="false">
            @if($blogs != null)
                @foreach($blogs as $blog)
                <div class="blog-item">
                <div class="image-part">
                    <img src="{{asset($blog->main_image)}}" width="100" alt="" height="50px">
                </div>
                    @php
                    $timestamp = strtotime($blog->created_at); $month = date('M', $timestamp);$year = date('Y', $timestamp);
                    @endphp


                <div class="blog-content">
                    <ul class="blog-meta">
                        <li>
                            <i class="fa fa-calendar"> </i>{{ $month }} {{ $blog->created_at->format('d') }}, {{$year}}
                        </li>
                    </ul>
                    <h3 class="title"><a href="{{route('blogs.details',['id'=>$blog->id])}}">{{ Str::limit($blog->title, 20) }}</a></h3>

                    <div class="desc">
                        {!! Str::limit($blog->short_details, 50) !!}
                    </div>

                    {{ Str::limit($blog->title, 20) }}

                    <div class="btn-btm">

                        <div class="rs-view-btn  btn btn-danger d-flex">
                            <a href="{{route('blogs.details',['id'=>$blog->id])}}" class="text-">Read More</a>
                        </div>
                    </div>
                </div>



            </div>
                @endforeach
            @endif
        </div>

    </div>

</div>


        {{-- Blog section end --}}






    </div>




@endsection
