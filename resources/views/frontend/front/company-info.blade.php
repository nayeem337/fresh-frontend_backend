

@php
    $information= \App\Models\CompanyInfo::first();

@endphp


<div class="elementor-element elementor-element-d82e30d e-flex e-con-boxed e-con e-parent" data-id="d82e30d" data-element_type="container">



    <div class="e-con-inner">
<div class="elementor-element elementor-element-821c846 e-flex e-con-boxed e-con e-child" data-id="821c846" data-element_type="container">
    <div class="e-con-inner">

        {!! $information->detail !!}






    </div>
</div>

</div>











</div>
