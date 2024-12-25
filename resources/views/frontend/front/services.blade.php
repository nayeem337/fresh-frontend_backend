
<div class="elementor-element elementor-element-7717427 e-flex e-con-boxed e-con e-parent" data-id="7717427" data-element_type="container">
    <div class="e-con-inner">
<div class="elementor-element elementor-element-a10c7cc e-flex e-con-boxed e-con e-child" data-id="a10c7cc" data-element_type="container">
    <div class="e-con-inner">
<div class="elementor-element elementor-element-2e9a298 elementor-widget elementor-widget-heading" data-id="2e9a298" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Our Services</h2>		</div>
</div>
<div class="elementor-element elementor-element-bce0f64 elementor-widget elementor-widget-heading" data-id="bce0f64" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<span class="elementor-heading-title elementor-size-default">Elevate your digital presence with Zaman IT Services. Specializing in best web design company in Bangladesh also software development, web design creation, bulk SMS solutions, and CCTV integration, we provide comprehensive tech services to enhance your business operations. ZAMAN IT is the best web design company in Bangladesh.</span>		</div>
</div>
    </div>
</div>
    </div>
</div>





<section class="elementor-section elementor-top-section elementor-element elementor-element-4917be62 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="4917be62" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

     <div class="elementor-container elementor-column-gap-default">
        @foreach ($all_services as $service)
        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-755f3016" data-id="755f3016" data-element_type="column" data-settings="{&quot;animation&quot;:&quot;none&quot;}">
             <div class="elementor-widget-wrap elementor-element-populated">




                <div class="col-12 col-md-6 col-lg-4 elementor-element elementor-element-0707cd0 elementor-flip-box--effect-zoom-in elementor-widget elementor-widget-flip-box" data-id="0707cd0" data-element_type="widget" data-widget_type="flip-box.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-flip-box" tabindex="0">
                            <div class="elementor-flip-box__layer elementor-flip-box__front">
                                <div class="elementor-flip-box__layer__overlay">

                                    <div class="elementor-flip-box__layer__inner">
                                        <div class="elementor-flip-box__image">
                                            {{-- <img decoding="async" width="512" height="512" src="wp-content/uploads/2024/06/software.png" class="attachment-full size-full wp-image-1767" alt="software icon" srcset="https://zaman-it.com/wp-content/uploads/2024/06/software.png 512w, https://zaman-it.com/wp-content/uploads/2024/06/software-300x300.png 300w, https://zaman-it.com/wp-content/uploads/2024/06/software-150x150.png 150w" sizes="(max-width: 512px) 100vw, 512px" /> --}}

                                            <img decoding="async" src="{{ asset($service->banner_image) }}" class="attachment-full size-full wp-image-1767" alt="software icon" style="width: 65px; height:65px" />
                                        </div>
                                        <h3 class="elementor-flip-box__layer__title"> {{ $service->service_title ?? null }} </h3>

                                        <div class="elementor-flip-box__layer__description">
                                            {!! $service->service_details_small !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-flip-box__layer elementor-flip-box__back">
                                <div class="elementor-flip-box__layer__overlay">
                                    <div class="elementor-flip-box__layer__inner">
                                        <a class="elementor-flip-box__button elementor-button elementor-size-sm" href="software/index.html"> More Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>







            </div>
       </div>
       @endforeach

    </div>
</section>



<div class="elementor-element elementor-element-7a11ae2 e-flex e-con-boxed e-con e-parent" data-id="7a11ae2" data-element_type="container">
    <div class="e-con-inner">
<div class="elementor-element elementor-element-28c4bea elementor-mobile-align-center elementor-align-center elementor-widget elementor-widget-button" data-id="28c4bea" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="https://wa.me/+8801973009007" target="_blank" rel="noopener">
        <span class="elementor-button-content-wrapper">
        <span class="elementor-button-icon">
<svg aria-hidden="true" class="e-font-icon-svg e-fab-whatsapp" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M380.9 97.1C339 55.1 283.2 32 223.9 32c-122.4 0-222 99.6-222 222 0 39.1 10.2 77.3 29.6 111L0 480l117.7-30.9c32.4 17.7 68.9 27 106.1 27h.1c122.3 0 224.1-99.6 224.1-222 0-59.3-25.2-115-67.1-157zm-157 341.6c-33.2 0-65.7-8.9-94-25.7l-6.7-4-69.8 18.3L72 359.2l-4.4-7c-18.5-29.4-28.2-63.3-28.2-98.2 0-101.7 82.8-184.5 184.6-184.5 49.3 0 95.6 19.2 130.4 54.1 34.8 34.9 56.2 81.2 56.1 130.5 0 101.8-84.9 184.6-186.6 184.6zm101.2-138.2c-5.5-2.8-32.8-16.2-37.9-18-5.1-1.9-8.8-2.8-12.5 2.8-3.7 5.6-14.3 18-17.6 21.8-3.2 3.7-6.5 4.2-12 1.4-32.6-16.3-54-29.1-75.5-66-5.7-9.8 5.7-9.1 16.3-30.3 1.8-3.7.9-6.9-.5-9.7-1.4-2.8-12.5-30.1-17.1-41.2-4.5-10.8-9.1-9.3-12.5-9.5-3.2-.2-6.9-.2-10.6-.2-3.7 0-9.7 1.4-14.8 6.9-5.1 5.6-19.4 19-19.4 46.3 0 27.3 19.9 53.7 22.6 57.4 2.8 3.7 39.1 59.7 94.8 83.8 35.2 15.2 49 16.5 66.6 13.9 10.7-1.6 32.8-13.4 37.4-26.4 4.6-13 4.6-24.1 3.2-26.4-1.3-2.5-5-3.9-10.5-6.6z"></path></svg>			</span>
                    <span class="elementor-button-text">WhatsApp </span>
    </span>
    </a>
</div>
        </div>
</div>
<div class="elementor-element elementor-element-669d3e6 elementor-mobile-align-right elementor-widget elementor-widget-button" data-id="669d3e6" data-element_type="widget" data-widget_type="button.default">
<div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6IjI0NDAiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
        <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text">Order Now</span>
    </span>
    </a>
</div>
        </div>
</div>
    </div>
</div>
