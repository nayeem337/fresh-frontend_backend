 <div id="rs-popular-courses" class="rs-popular-courses main-home event-bg pt-70 pb-50 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-45">
            <div class="sub-title">Services </div>
            @foreach($titles as $data)
                @if($data->page == 'courses' )
                    <h2 class="title black-color">{{$data->title}}</h2>

                @endif
            @endforeach
        </div>


        @php
        $software=\App\Models\Software::all();
        @endphp

        <div class="row">
            @foreach($software as $service)
            <div class="col-lg-4 col-md-6 mb-30">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part">
                            <a href="/software/details/{{$service->id}}"><img src="{{asset($service->banner_image)}}" style="height: 200px;" height="250px" width="100%" alt=""></a>
                        </div>
                        <div class="content-part">


                            <h3 class="title"><a href="{{route('services.details',['id'=>$service->id])}}">{{$service->title}}</a></h3>
                            <h6>{!! $service->short_title !!}</h6>

                            <a href="/software/details/{{$service->id}}" class="link" style="color: #FF5421"> @if(session()->get('language') == 'bangla') বিস্তারিত   @else Details @endif </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>




<style>


/* Basic card style */
.card {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    border: 1px solid #393838;
    padding: 50px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
}

/* Icon Box Styling */
.icon-box {
    text-align: center;
    margin-bottom: 20px;
}

/* Price section */
.price {
    font-size: 24px;
    font-weight: bold;
}

.currency {
    font-size: 16px;
}

/* Divider line */
.divider {
    border-top: 1px solid #ddd;
    margin: 15px 0;
}


.btn {
    background-color: #008000; /* Green color */
    color: #fff;
    text-decoration: none;
    padding: 10px 15px;
    border-radius: 5px;
    text-align: center;
    display: block;
    width: 100%;
    margin-top: 10px;
}

.btn:hover {
    background-color: #095611;
    color: #fff;
}



</style>






<section class="" >


        @php
        $packages = \App\Models\Package::all();
        $number = \App\Models\WebsiteLinks::latest()->first()
        @endphp
   <div class="container " >
            <div class="row" >
        @foreach ($packages as $package)



                <div class="col-md-4 mb-4" s>
                    <div class="card" >
                        <div class="card-body">
                            <div class="icon-box">
                                <!-- You can replace this with your image -->
                                <img src="{{ asset($package->image) }}" alt="" class="img-fluid" style="width: 75px; height: 75px; border-radius: 5px;">
                            </div>
                            <h5 class="card-title" style="text-align: center;">{{ $package->title }}</h5>
                            <p class="card-text">{{ $package->sub_title }}</p>
                            <div class="price">
                                <span style="color: #0178A7; font-size: 17px;" class="currency">৳</span>
                                <span class="amount" style="color: #0178A7; font-size: 17px;">{{ $package->price }}</span>
                            </div>

                            <a href="tel:{{ $number->number }}" class="btn" style="background-color: #0178A7; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;">Call: {{ $number->number }}</a>

                            <div class="divider" style="border-top: 1px solid #ddd; margin: 15px 0;"></div>

                            <div>
                                {!! $package->featurs !!}
                            </div>

                        </div>
                    </div>
                </div>


        @endforeach

            </div>
        </div>


</section>



 <div id="rs-popular-courses" class="rs-popular-courses main-home event-bg pt-50 pb-50 md-pt-70 md-pb-70">
    <div class="container">
        <div class="sec-title3 text-center mb-45">

            @foreach($titles as $data)
                @if($data->page == 'courses' )
                    <h2 class="title black-color">{{$data->title}}</h2>

                @endif
            @endforeach
        </div>


        <div class="row">
            @foreach($services as $service)
            <div class="col-lg-3 col-md-4 col-sm-6 col-12 mb-30">
                <div class="courses-item">
                    <div class="courses-grid">
                        <div class="img-part" style="width: 100%; height:200px">
                            <a href="{{ route('services.details', ['id' => $service->id]) }}">
                                <!-- Make the image have a fixed size -->
                                <img src="{{ asset($service->main_image) }}" width="100%" style="object-fit: cover;" alt="">
                            </a>
                        </div>
                        <div class="content-part">
                            <h5 class="">
                                <a style="font-size: 14px" href="{{ route('services.details', ['id' => $service->id]) }}">{{ $service->service_title }}</a>
                            </h5>
                            <a href="{{ route('services.details', ['id' => $service->id]) }}" class="link" style="color: #FF5421">
                                @if(session()->get('language') == 'bangla')
                                    বিস্তারিত
                                @else
                                    Details
                                @endif
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div>
</div>





