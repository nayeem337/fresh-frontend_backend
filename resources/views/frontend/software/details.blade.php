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
                <img src="{{asset($page->image_main)}}" alt="Breadcrumbs Image" style="height: 450px">
            </div>
            <div class="breadcrumbs-text white-color">
                <h1 class="page-title">{{$page->title}}</h1>
                <ul>
                    <li>
                        <a class="active" href="{{route('front.page')}}">Home</a>
                    </li>
                    <li> Details</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumbs End -->

        <!-- Intro Courses -->
        <section class="intro-section">
            <div class="container">
                <div class="row clearfix">
                    <!-- Content Column -->
                    <div class="col-lg-12 md-mb-50">
                        <!-- Intro Info Tabs-->
                        <div class="intro-info-tabs">
                            <div class="tab-content tabs-content" id="myTabContent">
                                <div class="tab-pane tab fade show active" id="prod-overview" role="tabpanel" aria-labelledby="prod-overview-tab">
                                    <div class="content white-bg pt-30">


                                        <!-- Cource Overview -->
                                        <div class="col-xl-12 p-5">
                                            <div class="service-desc">

                                                {{-- top section start --}}

                                                <div class="row " style="margin-top:50px; margin-bottom:50px">

                                                    <div class="col-md-6 grid-item " style="margin-top:30px">
                                                        <div class="mb-30" style="">

                                                            <div class="content-part ">
                                                                <h2>{!! $page->short_title !!}</h2>
                                                                <p>{!! $page->short_des !!}</p>
                                                                <a href="" class="btn" style="background-color:blue; padding:13px 25px; color:#fff">Call Now: 0123456789</a>

                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6 grid-item " style="">
                                                        <div class="mb-30" style="">

                                                            <div class="content-part ">
                                                                <div class="image-sec">
                                                                    <img src="{{ asset($page->banner_image) }}" width="80%" alt="" style="height: 350px !important">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>

                                            {{-- top section end --}}






                    @php
                    $features= \App\Models\SoftwareFeature::where('software_id', $page->id)->get();

                    @endphp


                    @if($features->isNotEmpty())
                        <!-- Popular Courses Section Start -->
                        <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color" style="margin-top:50px; margin-bottom:50px">
                            <div class="container">
                            <div style="text-align:center; margin-bottom:55px">
                                    <h5 style="color:green">Application Features</h5>
                                    <h3>Best Software in Bangladesh</h3>

                            </div>
                                <div class="row grid">
                                    @foreach($features as $feature)
                                        <div class="col-lg-3 col-md-3 col-sm-6 col-12 grid-item filter1" style="">
                                            <div class="mb-30" style="border: 1px solid #dfe9eb;transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px; text-align:center; border-radius:8px ">
                                                <div class="">
                                                    <img src="{{asset($feature->image)}}" width="50%" style="padding: 10px; object-fit: cover;" alt="">
                                                    <h5 style="font-size: 13px; color:#343067; text-align:center">{{ $feature->title }}</h5>
                                                </div>

                                                <div class="content-part ">

                                                    <h3 class="title text-center"><a style="color: #FF5421" href=""></a></h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>

                            </div>
                        </div>
                        {{-- Software features end --}}

                        @endif



                {{-- software description start --}}

                <div class="row " style="margin-bottom: 65px">

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                            <div class="content-part ">
                                <div class="image-sec">
                                    <img src="{{ asset($page->image1) }}" width="80%" alt="" style="height: 350px !important">
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-6 grid-item filter1" style="">
                            <div class="mb-30" style="">

                                <div class="content-part ">
                                    {!! $page->des1 !!}
                                </div>
                            </div>
                        </div>

                </div>



                <div class="row " style="margin-bottom: 65px">
                        <div class="col-md-6 grid-item filter1" style="">
                            <div class="mb-30" style="">

                                <div class="content-part ">
                                    {!! $page->des2 !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 grid-item filter1" style="">
                            <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                                <div class="content-part ">
                                    <div class="image-sec">
                                        <img src="{{ asset($page->image2) }}" width="80%" alt="" style="height: 350px !important">
                                    </div>
                                </div>
                            </div>
                        </div>

                </div>



                <div class="row " style="margin-bottom: 65px">

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                            <div class="content-part ">
                                <div class="image-sec">
                                    <img src="{{ asset($page->image3) }}" width="80%" alt="" style="height: 350px !important">
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-6 grid-item filter1" style="">
                            <div class="mb-30" style="">

                                <div class="content-part ">
                                    {!! $page->des3 !!}
                                </div>
                            </div>
                        </div>

                </div>


                <div class="row " style="margin-bottom: 65px">
                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $page->des4 !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                            <div class="content-part ">
                                <div class="image-sec">
                                    <img src="{{ asset($page->image4) }}" width="80%" alt="" style="height: 350px !important">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>




                <div class="row " style="margin-bottom: 65px">

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                            <div class="content-part ">
                                <div class="image-sec">
                                    <img src="{{ asset($page->image5) }}" width="80%" alt="" style="height: 350px !important">
                                </div>
                            </div>
                        </div>
                    </div>

                        <div class="col-md-6 grid-item filter1" style="">
                            <div class="mb-30" style="">

                                <div class="content-part ">
                                    {!! $page->des5 !!}
                                </div>
                            </div>
                        </div>

                </div>



    {{-- software description end --}}






                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- End intro Courses -->

    </div>
    <!-- Main content End -->
@endsection
