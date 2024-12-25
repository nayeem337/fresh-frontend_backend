


<div class="elementor-element elementor-element-82ef616 e-flex e-con-boxed e-con e-parent" data-id="82ef616" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="e-con-inner">
<div class="elementor-element elementor-element-e917adb elementor-widget elementor-widget-heading" data-id="e917adb" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<p class="elementor-heading-title elementor-size-default">Top 10 Best Web Design Company in Bangladesh</p>		</div>
</div>
<div class="elementor-element elementor-element-dec5b3f elementor-widget elementor-widget-heading" data-id="dec5b3f" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Professional Web Design Services in Bangladesh</h2>		</div>
</div>
<div class="elementor-element elementor-element-b4e4abb e-grid e-con-full e-con e-child" data-id="b4e4abb" data-element_type="container">

    @php
        $gallers= \app\Models\Gallery::where('type',0)->get();

    @endphp
@foreach ( $gallers as  $galler)


    <div class="elementor-element elementor-element-225e79e elementor-position-top elementor-widget elementor-widget-image-box" data-id="225e79e" data-element_type="widget" data-widget_type="image-box.default">
    <div class="elementor-widget-container">
    <div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="512" height="512" src="{{ asset($galler->image) }}" class="attachment-full size-full wp-image-10958" alt="NGO Website" srcset="{{ asset($galler->image) }} 512w, {{ asset($galler->image) }} 300w,{{ asset($galler->image) }} 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">{{ $galler->title }}</h3></div></div>		</div>
    </div>
    @endforeach
</div>
    </div>
</div>

