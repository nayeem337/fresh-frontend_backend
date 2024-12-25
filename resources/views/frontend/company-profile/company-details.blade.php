<style>
    /* .content-part {
        color: #ffffff;
    } */
</style>



@php
 $companyDetail= \App\Models\CompanyInfo::first();

@endphp


    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-50 pb-50 md-pt-70 md-pb-70" style="background-color: #ffffff">
        <div class="container">

           <div style="text-align:center; margin-bottom: 60px">
                <h3>Best Prestigious Clients We Have Work With</h3>
            <h5>Best Web Design Company in Bangladesh</h5>
           </div>

           @if (!empty($companyDetail->des1))

            <div class="row ">

                @if (!empty($companyDetail->image1))
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image1 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif

                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des1 !!}
                            </div>
                        </div>
                    </div>

            </div>

            @endif



            @if (!empty($companyDetail->des2))
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des2 !!}
                        </div>
                    </div>
                </div>

                @if (!empty($companyDetail->image2))
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image2 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>
            @endif




            @if (!empty($companyDetail->des3))
            <div class="row ">

                @if (!empty($companyDetail->image3))
                <div class="col-md-6 grid-item filter1" style="margin-top: 50px">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image3 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des3 !!}
                            </div>
                        </div>
                    </div>


            </div>
            @endif




            @if (!empty($companyDetail->des4))
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des4 !!}
                        </div>
                    </div>
                </div>

                @if (!empty($companyDetail->image4))
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image4 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            @endif




            @if (!empty($companyDetail->des5))

            <div class="row ">

                @if (!empty($companyDetail->image5))
                <div class="col-md-6 grid-item filter1" style="margin-top: 50px">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image5 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des5 !!}
                            </div>
                        </div>
                    </div>




            </div>

            @endif





            @if (!empty($companyDetail->des6))
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des6 !!}
                        </div>
                    </div>
                </div>

                @if (!empty($companyDetail->image6))
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image6 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>

            @endif




            @if (!empty($companyDetail->des7))

            <div class="row ">
                @if (!empty($companyDetail->image7))
                <div class="col-md-6 grid-item filter1" style="margin-top: 50px">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image7 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif


                    <div class="col-md-6 grid-item filter1" style="">
                        <div class="mb-30" style="">

                            <div class="content-part ">
                                {!! $companyDetail->des7 !!}
                            </div>
                        </div>
                    </div>

            </div>

            @endif



            @if (!empty($companyDetail->des8))
            <div class="row " style="margin-top: 50px">
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="">

                        <div class="content-part ">
                            {!! $companyDetail->des8 !!}
                        </div>
                    </div>
                </div>



                @if (!empty($companyDetail->image8))
                <div class="col-md-6 grid-item filter1" style="">
                    <div class="mb-30" style="transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">

                        <div class="content-part ">
                            <div class="image-sec">
                                <img src="{{ asset($companyDetail->image8 ) }}" width="100%" alt="" style="height: 350px !important">
                            </div>
                        </div>
                    </div>
                </div>
                @endif

            </div>

            @endif











        </div>
    </div>
    <!-- Popular Courses Section End -->


</div>
