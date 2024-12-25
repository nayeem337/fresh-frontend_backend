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


<section class="elementor-section elementor-top-section elementor-element elementor-element-2d6a895 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="2d6a895" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-55c192f" data-id="55c192f" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-c7d13b7 elementor-widget elementor-widget-heading" data-id="c7d13b7" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h1 class="elementor-heading-title elementor-size-default">Our Packages</h1>		</div>
</div>
<div class="elementor-element elementor-element-349c634 elementor-widget elementor-widget-heading" data-id="349c634" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-default">Best Web Design Company in Bangladesh</h4>		</div>
</div>


{{-- <section class="elementor-section elementor-inner-section elementor-element elementor-element-b2c4d48 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b2c4d48" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default">




        @php
        $packages= \App\Models\Package::all();

        @endphp


        @foreach ($packages as $package)




        <div class="container p-5 my-5 mx-5" style="margin-right:50px">
            <div class="row" style="text-align: center">



                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="icon-box">
                                    <!-- You can replace this with your image -->
                                    <img src="{{ asset($package->image) }}" alt="" class="img-fluid" style="width: 75px; height:75px; border-radius:5px">
                                </div>
                                <h5 class="card-title" style="text-align: center">{{ $package->title }}</h5>
                                <p class="card-text">{{ $package->sub_title }}</p>
                                <div class="price">
                                    <span style="color: #008000; font-size:17px" class="currency">৳</span>
                                    <span class="amount" style="color: #008000; font-size:17px">{{ $package->price }}</span>
                                </div>
                                <a href="#" class="btn">Order Now</a>
                                <div class="divider"></div>

                                <div>
                                    {!! $package->featurs !!}

                                </div>


                            </div>
                        </div>
                    </div>




            </div>
        </div>

        @endforeach



</div>
</section> --}}



<section class="elementor-section elementor-inner-section elementor-element elementor-element-b2c4d48 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="b2c4d48" data-element_type="section">
    <div class="elementor-container elementor-column-gap-default" style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">

        @php
        $packages = \App\Models\Package::all();
        @endphp
<div class="container p-5 my-5 mx-5" style="margin-right: 10px; display: flex; justify-content: center; flex-direction: column; align-items: center;">
            <div class="row" style="text-align: center; display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">
        @foreach ($packages as $package)

        

                <div class="col-md-4 mb-4" style="display: flex; justify-content: center; align-items: center;">
                    <div class="card" style="width: 100%; text-align: center; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <div class="icon-box">
                                <!-- You can replace this with your image -->
                                <img src="{{ asset($package->image) }}" alt="" class="img-fluid" style="width: 75px; height: 75px; border-radius: 5px;">
                            </div>
                            <h5 class="card-title" style="text-align: center;">{{ $package->title }}</h5>
                            <p class="card-text">{{ $package->sub_title }}</p>
                            <div class="price">
                                <span style="color: #008000; font-size: 17px;" class="currency">৳</span>
                                <span class="amount" style="color: #008000; font-size: 17px;">{{ $package->price }}</span>
                            </div>
                            <a href="#" class="btn" style="background-color: #008000; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none; display: inline-block;">Order Now</a>
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


    </div>
</section>





</div>
</div>
</div>
</section>
