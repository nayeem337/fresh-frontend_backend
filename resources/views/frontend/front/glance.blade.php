


<div class="elementor-element elementor-element-28da065 e-flex e-con-boxed e-con e-parent" data-id="28da065" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="e-con-inner">
<div class="elementor-element elementor-element-78fcd84 elementor-widget elementor-widget-heading" data-id="78fcd84" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">At a Glance​</h2>		</div>
</div>
    </div>
</div>


		<div class="elementor-element elementor-element-90e69b1 e-flex e-con-boxed e-con e-parent" data-id="90e69b1" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="e-con-inner">


         @php
        $glances= \App\Models\Glance::all();

        @endphp

    @foreach ( $glances as  $glance)



     <div class="elementor-element elementor-element-cb632d1 e-con-full e-flex e-con e-child" data-id="cb632d1" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;none&quot;,&quot;animation_delay&quot;:500}">


        <div class="elementor-element elementor-element-daac570 elementor-position-top elementor-widget elementor-widget-image-box" data-id="daac570" data-element_type="widget" data-widget_type="image-box.default">
            <div class="elementor-widget-container">
            <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="512" height="512" src="{{ asset($glance->image) }}" class="attachment-full size-full wp-image-152" alt="print icon" srcset="{{ asset($glance->image) }} 512w, {{ asset($glance->image) }} 300w, {{ asset($glance->image) }} 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">{{ $glance->title }}</h3><p class="elementor-image-box-description">{{ $glance->counter }}</p></div></div>
    </div>
        </div>


    </div>

    @endforeach



            </div>
        </div>

