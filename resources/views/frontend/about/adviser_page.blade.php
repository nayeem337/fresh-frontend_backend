@extends('frontend.master')
@section('title')
   Adviser
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
                <h1 class="page-title">Adviser</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li>Home</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Team Section Start -->
        <div id="rs-team" class="rs-team  orange-color pt-94 pb-100 md-pt-64 md-pb-70 ">
            <div class="container">
                {{-- <h2 class="text-center mb-5">{{$banner->title??null}}</h2> --}}
                <h2 class="text-center mb-5 ">Our Advisor</h2>
                <div class="row">

                    @foreach($advisers as $adviser)
                    <div class="col-lg-4 col-sm-6 mb-30">
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row g-0">
                              <div class="col-md-5">
                                <img src="{{asset($adviser->image)}}" class="img-fluid rounded-start" alt="...">


                              </div>
                              <div class="col-md-7">
                                <div class="card-body">
                                    <h4 class=" " style="background: #fe8c00;
                                    background: -webkit-linear-gradient(to left, #f83600, #fe8c00);
                                    background: linear-gradient(to left, #f83600, #fe8c00);
                                    padding:10px;">{{$adviser->name}}</h4>
                                  <a href=""><p class="p-2 text-dark" >  {{ $adviser->designation	 ? Str::limit($adviser->designation, 150) : 'N/A' }}</p></a>
                                  {{-- {!!  Str::limit($blog->short_details, 120) !!} --}}
                                  <hr>
                                 <div class="card-footerx pb-4">
                                    <ul class="social-links float-right" style="display: flex; ">

                                        <li style="padding: 0px 10px; font-size:25px;"><a href="{{ $adviser->facebook  }}" class="text-primary" ><i class="fa-brands fa-facebook"></i></a></li>
                                        <li style="padding: 0px 10px; font-size:25px;" class="text-danger"><a href="{{ $adviser->youtube }}" class="text-danger"><i class="fa-brands fa-youtube"></i></a></li>
                                        <li style="padding: 0px 10px; font-size:25px;" class="text-info"><a href="{{ $adviser->linkdin}}" class="text-info"><i class="fa-brands fa-linkedin"></i></i></a></li>
                                        <li style="padding: 0px 10px; font-size:25px;"><a href="{{ $adviser->instagram }}" class="text-pink"><i class="fa-brands fa-instagram"></i></a></li>

                                   </ul>
                                 </div>
                                </div>
                              </div>
                            </div>
                          </div>
                    </div>
                    @endforeach

                </div>
                {{-- {!! $advisers->links() !!} --}}
            </div>
        </div>
        <!-- Team Section End -->


    </div>
    <!-- Main content End -->
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
@endsection
