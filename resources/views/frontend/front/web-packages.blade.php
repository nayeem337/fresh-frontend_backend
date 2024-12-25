

<div class="elementor-element elementor-element-0f5e877 e-flex e-con-boxed e-con e-parent" data-id="0f5e877" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="e-con-inner">
<div class="elementor-element elementor-element-6f81285 elementor-widget elementor-widget-heading" data-id="6f81285" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;none&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="heading.default">
<div class="elementor-widget-container">
<p class="elementor-heading-title elementor-size-default">Best Web Design Company in Dhaka, Bangladesh</p>		</div>
</div>
<div class="elementor-element elementor-element-b2f99fa elementor-widget elementor-widget-heading" data-id="b2f99fa" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">
<h2 class="elementor-heading-title elementor-size-default">Additional Benefits in Our Web Design Packages</h2>		</div>
</div>
<div class="elementor-element elementor-element-a583f0f e-grid e-con-full e-con e-child" data-id="a583f0f" data-element_type="container">

    @php
    $gallers= \app\Models\Gallery::where('type',1)->get();

@endphp
@foreach ( $gallers as  $galler)

<div class="elementor-element elementor-element-f2d503c elementor-position-top elementor-widget elementor-widget-image-box" data-id="f2d503c" data-element_type="widget" data-widget_type="image-box.default">
<div class="elementor-widget-container">
<div class="elementor-image-box-wrapper"><figure class="elementor-image-box-img"><img decoding="async" width="512" height="512" src="{{ asset($galler->image) }}" class="attachment-full size-full wp-image-11038" alt="Responsive Design" srcset="{{ asset($galler->image) }} 512w, {{ asset($galler->image) }} 300w, {{ asset($galler->image) }} 150w" sizes="(max-width: 512px) 100vw, 512px" /></figure><div class="elementor-image-box-content"><h3 class="elementor-image-box-title">{{ $galler->title }}</h3></div></div>		</div>
</div>
@endforeach



</div>
    </div>
</div>
