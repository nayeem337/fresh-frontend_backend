
@extends('frontend.master')
@section('title')
    About
@endsection

@section('content')


@endsection




<main id="content" class="site-main post-977 page type-page status-publish hentry">





@php
$softwares=\App\Models\Software::where('id', $page->id);
@endphp

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-100 pb-100 md-pt-70 md-pb-70">
        <div class="container">
           <div style="text-align:center; margin-bottom: 60px">
                <h3>Best Prestigious Clients We Have Work With</h3>
            <h5>Best Web Design Company in Bangladesh</h5>
           </div>






            <div class="row grid">

                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($softwares->banner_image ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $softwares->short_title !!}
                            </div>
                        </div>
                    </div>

            </div>



            <div class="row grid" style="margin-top: 50px">


                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des2 !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image2 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>



            </div>



            <div class="row grid">

                <div class="col-md-6 grid-item filter1" style="margin-top: 50px">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image3 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des3 !!}
                            </div>
                        </div>
                    </div>

            </div>




            <div class="row grid" style="margin-top: 50px">


                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des4 !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image4 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>



            </div>





            <div class="row grid">

                <div class="col-md-6 grid-item filter1" style="margin-top: 50px">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image5 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des5 !!}
                            </div>
                        </div>
                    </div>

            </div>


            <div class="row grid" style="margin-top: 50px">


                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des6 !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image6 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>



            </div>




            <div class="row grid">

                <div class="col-md-6 grid-item filter1" style="margin-top: 50px">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image7 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des7 !!}
                            </div>
                        </div>
                    </div>

            </div>




            <div class="row grid" style="margin-top: 50px">


                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des8 !!}
                        </div>
                    </div>
                </div>

                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image8 ) }}" width="80%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>



            </div>














        </div>
    </div>
    <!-- Popular Courses Section End -->


</div>

</main>
