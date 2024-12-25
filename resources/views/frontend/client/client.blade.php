
@php
$clients= \App\Models\Client::all();

@endphp

    <!-- Popular Courses Section Start -->
    <div id="rs-popular-courses" class="rs-popular-courses style1 orange-color pt-10 pb-50 md-pt-70 md-pb-70" style="background-color: #ffffff">
        <div class="container">
           <div style="text-align:center; margin-bottom:55px">
                <h3>Best Prestigious Clients We Have Work With</h3>
            <h5>Best Web Design Company in Bangladesh</h5>
           </div>
            <div class="row grid">
                @foreach($clients as $client)
                    <div class="col-lg-2 col-md-2 grid-item filter1" style="">
                        <div class="mb-30" style="border: 1px solid #dfe9eb;transition: all 0.3s ease;box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;">
                            <div class="">
                                <img src="{{asset($client->image)}}" width="100%" style="height: 150px;padding: 10px; object-fit: cover;" alt="">
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
    <!-- Popular Courses Section End -->


{{-- </div> --}}
