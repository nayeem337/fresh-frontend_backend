



<div data-elementor-type="header" data-elementor-id="10902" class="elementor elementor-10902 elementor-location-header" data-elementor-post-type="elementor_library">





    <div class="elementor-element elementor-element-7ff352b7 e-flex e-con-boxed e-con e-parent" data-id="7ff352b7" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0,&quot;sticky_anchor_link_offset&quot;:0}">
            <div class="e-con-inner">
<div class="elementor-element elementor-element-4c8d7d1f e-con-full e-flex e-con e-child" data-id="4c8d7d1f" data-element_type="container">
        <div class="elementor-element elementor-element-7e053da elementor-widget elementor-widget-theme-site-logo elementor-widget-image" data-id="7e053da" data-element_type="widget" data-widget_type="theme-site-logo.default">
        <div class="elementor-widget-container">
                            <a href="/">
                                @php $logo = \App\Models\Logo::latest()->first() @endphp
    <img width="220" height="55" src="{{asset($logo->logo_image1??null)}}" class="attachment-full size-full wp-image-11473" alt="ZAMAN IT LOGO" />				</a>
                            </div>
        </div>
        </div>
<div class="elementor-element elementor-element-13115f39 e-con-full e-flex e-con e-child" data-id="13115f39" data-element_type="container">
        <div class="elementor-element elementor-element-a9c2a41 elementor-nav-menu__align-end elementor-nav-menu--stretch elementor-nav-menu__text-align-center elementor-hidden-tablet elementor-hidden-mobile elementor-nav-menu--dropdown-tablet elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu" data-id="a9c2a41" data-element_type="widget" data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;svg class=\&quot;e-font-icon-svg e-fas-caret-down\&quot; viewBox=\&quot;0 0 320 512\&quot; xmlns=\&quot;http:\/\/www.w3.org\/2000\/svg\&quot;&gt;&lt;path d=\&quot;M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z\&quot;&gt;&lt;\/path&gt;&lt;\/svg&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}" data-widget_type="nav-menu.default">
        <div class="elementor-widget-container">
                <nav aria-label="Menu" class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
        <ul id="menu-1-a9c2a41" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-32"><a href="index.html" aria-current="page" class="elementor-item elementor-item-active">Home</a></li>







    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9688"><a href="#" class="elementor-item elementor-item-anchor">About Us</a>
        <ul class="sub-menu elementor-nav-menu--dropdown">
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2301">
                <a href="{{ route('company.profile') }}" class="elementor-sub-item">Company Profile</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2324">
                <a href="{{ route('ceo.message') }}" class="elementor-sub-item">CEO Messages</a>
            </li>
            <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9258">
                <a href="{{ route('photo.gallery') }}" class="elementor-sub-item">Photo Gallery</a>
            </li>
        </ul>
    </li>


<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-953"><a href="#" class="elementor-item elementor-item-anchor">Website</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1161"><a href="{{ route('buy.domain') }}" class="elementor-sub-item">Domain Registration</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215"><a href="{{ route('web.hosting') }}" class="elementor-sub-item">Hosting Bangladesh</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1267"><a href="{{ route('web.development') }}" class="elementor-sub-item">Website Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1325"><a href="{{ route('ecommerce.website') }}" class="elementor-sub-item">Ecommerce Website</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-972"><a href="#" class="elementor-item elementor-item-anchor">Software</a>
<ul class="sub-menu elementor-nav-menu--dropdown">

    @php
    $softwares= \App\Models\Software::all();    
    @endphp
    @foreach ($softwares as $software)     
    
    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8975"><a href="/software/details/{{ $software->id  }}" class="elementor-sub-item">{{ $software->title }}</a></li>
                                

    @endforeach

    





{{-- 
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8979"><a href="{{ route('hr.payroll') }}" class="elementor-sub-item">HR &#038; Payroll Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8982"><a href="{{ route('pos.software') }}" class="elementor-sub-item">Pos Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8978"><a href="{{ route('hospitam.management') }} " class="elementor-sub-item">Hospital ERP</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8980"><a href="{{ route('inventory.management') }} " class="elementor-sub-item">Inventory Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8976"><a href="{{ route('erp.software') }}" class="elementor-sub-item">ERP Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8985"><a href="{{ route('school.management') }}" class="elementor-sub-item">School Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8977"><a href="{{ route('freight.software') }}" class="elementor-sub-item">Freight Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8981"><a href="{{ route('pharmacy.software') }}" class="elementor-sub-item">Pharmacy Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8986"><a href="{{ route('travel.software') }}" class="elementor-sub-item">Travel Agency Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8984"><a href="{{ route('restaurant.management') }}" class="elementor-sub-item">Restaurant Management Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8983"><a href="{{ route('prescription.management') }}" class="elementor-sub-item">Prescription Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8988"><a href="{{ route('bulk.sms.management') }}" class="elementor-sub-item">Bulk Sms Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8987"><a href="{{ route('whatsapp.marketing') }}" class="elementor-sub-item">WhatsApp Marketing Software</a></li>

 --}}


</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1058"><a href="#" class="elementor-item elementor-item-anchor">Bulk SMS</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1072"><a href="sms/index.html" class="elementor-sub-item">Bulk SMS BD</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1077"><a href="sms-marketing/index.html" class="elementor-sub-item">SMS Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1076"><a href="masking-sms/index.html" class="elementor-sub-item">Masking SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1075"><a href="non-masking-sms/index.html" class="elementor-sub-item">Non Masking SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6665"><a href="sms-api/index.html" class="elementor-sub-item">SMS API</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6695"><a href="otp-verification/index.html" class="elementor-sub-item">OTP Verification SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1074"><a href="location-based-sms/index.html" class="elementor-sub-item">Location Based SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1073"><a href="election-sms/index.html" class="elementor-sub-item">Election SMS</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-974"><a href="#" class="elementor-item elementor-item-anchor">Products</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1057"><a href="cctv/index.html" class="elementor-sub-item">CCTV Camera</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1524"><a href="pabx/index.html" class="elementor-sub-item">PABX</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1054"><a href="wifi-camera-dhaka/index.html" class="elementor-sub-item">Wi-Fi Camera</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1056"><a href="kk-cctv/index.html" class="elementor-sub-item">KK CCTV</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1055"><a href="attendance-machine/index.html" class="elementor-sub-item">Attendance Machine</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-973"><a href="#" class="elementor-item elementor-item-anchor">Marketing</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1043"><a href="digital-marketing-agency/index.html" class="elementor-sub-item">Digital Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1041"><a href="whatsapp-marketing/index.html" class="elementor-sub-item">WhatsApp Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045"><a href="email-marketing/index.html" class="elementor-sub-item">Email Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1040"><a href="voice-message/index.html" class="elementor-sub-item">Voice Message</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1044"><a href="seo-expert/index.html" class="elementor-sub-item">SEO</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1042"><a href="telemarketing/index.html" class="elementor-sub-item">Telemarketing</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="contact-us/index.html" class="elementor-item">Contact Us</a></li>
</ul>			</nav>
            <div class="elementor-menu-toggle" role="button" tabindex="0" aria-label="Menu Toggle" aria-expanded="false">
    <svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--open e-font-icon-svg e-eicon-menu-bar" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M104 333H896C929 333 958 304 958 271S929 208 896 208H104C71 208 42 237 42 271S71 333 104 333ZM104 583H896C929 583 958 554 958 521S929 458 896 458H104C71 458 42 487 42 521S71 583 104 583ZM104 833H896C929 833 958 804 958 771S929 708 896 708H104C71 708 42 737 42 771S71 833 104 833Z"></path></svg><svg aria-hidden="true" role="presentation" class="elementor-menu-toggle__icon--close e-font-icon-svg e-eicon-close" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg"><path d="M742 167L500 408 258 167C246 154 233 150 217 150 196 150 179 158 167 167 154 179 150 196 150 212 150 229 154 242 171 254L408 500 167 742C138 771 138 800 167 829 196 858 225 858 254 829L496 587 738 829C750 842 767 846 783 846 800 846 817 842 829 829 842 817 846 804 846 783 846 767 842 750 829 737L588 500 833 258C863 229 863 200 833 171 804 137 775 137 742 167Z"></path></svg>			<span class="elementor-screen-only">Menu</span>
</div>
            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" aria-hidden="true">
        <ul id="menu-2-a9c2a41" class="elementor-nav-menu"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-8 current_page_item menu-item-32"><a href="index.html" aria-current="page" class="elementor-item elementor-item-active" tabindex="-1">Home</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-9688"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">About Us</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2301"><a href="company-profile/index.html" class="elementor-sub-item" tabindex="-1">Company Profile</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2324"><a href="founder-ceo-messages/index.html" class="elementor-sub-item" tabindex="-1">CEO Messages</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-9258"><a href="photo-gallery/index.html" class="elementor-sub-item" tabindex="-1">Photo Gallery</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-953"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Website</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1161"><a href="buy-domain-bd/index.html" class="elementor-sub-item" tabindex="-1">Domain Registration</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1215"><a href="website-hosting-bangladesh/index.html" class="elementor-sub-item" tabindex="-1">Hosting Bangladesh</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1267"><a href="website/index.html" class="elementor-sub-item" tabindex="-1">Website Development</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1325"><a href="ecommerce-website-design/index.html" class="elementor-sub-item" tabindex="-1">Ecommerce Website</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-972"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Software</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8975"><a href="accounting-software-in-bangladesh/index.html" class="elementor-sub-item" tabindex="-1">Accounting &#038; Inventory Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8979"><a href="hr-software-in-bangladesh/index.html" class="elementor-sub-item" tabindex="-1">HR &#038; Payroll Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8982"><a href="pos-software/index.html" class="elementor-sub-item" tabindex="-1">Pos Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8978"><a href="hospital-management-system-software/index.html" class="elementor-sub-item" tabindex="-1">Hospital ERP</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8980"><a href="inventory-management-software/index.html" class="elementor-sub-item" tabindex="-1">Inventory Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8976"><a href="erp-software/index.html" class="elementor-sub-item" tabindex="-1">ERP Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8985"><a href="school-management-system/index.html" class="elementor-sub-item" tabindex="-1">School Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8977"><a href="freight-forwarding-software/index.html" class="elementor-sub-item" tabindex="-1">Freight Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8981"><a href="pharmacy-management-system-software/index.html" class="elementor-sub-item" tabindex="-1">Pharmacy Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8986"><a href="travel-agency-management-system/index.html" class="elementor-sub-item" tabindex="-1">Travel Agency Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8984"><a href="restaurant-management-system/index.html" class="elementor-sub-item" tabindex="-1">Restaurant Management Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8983"><a href="prescription-management-software/index.html" class="elementor-sub-item" tabindex="-1">Prescription Management</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8988"><a href="bulk-sms-software/index.html" class="elementor-sub-item" tabindex="-1">Bulk Sms Software</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8987"><a href="whatsapp-marketing-software/index.html" class="elementor-sub-item" tabindex="-1">WhatsApp Marketing Software</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-1058"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Bulk SMS</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1072"><a href="sms/index.html" class="elementor-sub-item" tabindex="-1">Bulk SMS BD</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1077"><a href="sms-marketing/index.html" class="elementor-sub-item" tabindex="-1">SMS Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1076"><a href="masking-sms/index.html" class="elementor-sub-item" tabindex="-1">Masking SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1075"><a href="non-masking-sms/index.html" class="elementor-sub-item" tabindex="-1">Non Masking SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6665"><a href="sms-api/index.html" class="elementor-sub-item" tabindex="-1">SMS API</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-6695"><a href="otp-verification/index.html" class="elementor-sub-item" tabindex="-1">OTP Verification SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1074"><a href="location-based-sms/index.html" class="elementor-sub-item" tabindex="-1">Location Based SMS</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1073"><a href="election-sms/index.html" class="elementor-sub-item" tabindex="-1">Election SMS</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-974"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Products</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1057"><a href="cctv/index.html" class="elementor-sub-item" tabindex="-1">CCTV Camera</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1524"><a href="pabx/index.html" class="elementor-sub-item" tabindex="-1">PABX</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1054"><a href="wifi-camera-dhaka/index.html" class="elementor-sub-item" tabindex="-1">Wi-Fi Camera</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1056"><a href="kk-cctv/index.html" class="elementor-sub-item" tabindex="-1">KK CCTV</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1055"><a href="attendance-machine/index.html" class="elementor-sub-item" tabindex="-1">Attendance Machine</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-973"><a href="#" class="elementor-item elementor-item-anchor" tabindex="-1">Marketing</a>
<ul class="sub-menu elementor-nav-menu--dropdown">
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1043"><a href="digital-marketing-agency/index.html" class="elementor-sub-item" tabindex="-1">Digital Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1041"><a href="whatsapp-marketing/index.html" class="elementor-sub-item" tabindex="-1">WhatsApp Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1045"><a href="email-marketing/index.html" class="elementor-sub-item" tabindex="-1">Email Marketing</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1040"><a href="voice-message/index.html" class="elementor-sub-item" tabindex="-1">Voice Message</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1044"><a href="seo-expert/index.html" class="elementor-sub-item" tabindex="-1">SEO</a></li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1042"><a href="telemarketing/index.html" class="elementor-sub-item" tabindex="-1">Telemarketing</a></li>
</ul>
</li>
<li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-34"><a href="contact-us/index.html" class="elementor-item" tabindex="-1">Contact Us</a></li>
</ul>			</nav>
        </div>
        </div>
        <div class="elementor-element elementor-element-f4787a7 elementor-hidden-desktop elementor-view-default elementor-widget elementor-widget-icon" data-id="f4787a7" data-element_type="widget" data-widget_type="icon.default">
        <div class="elementor-widget-container">
            <div class="elementor-icon-wrapper">
    <a class="elementor-icon" href="#elementor-action%3Aaction%3Dpopup%3Aopen%26settings%3DeyJpZCI6Ijk2NTgiLCJ0b2dnbGUiOmZhbHNlfQ%3D%3D">
    <svg aria-hidden="true" class="e-font-icon-svg e-fas-align-right" viewBox="0 0 448 512" xmlns="http://www.w3.org/2000/svg"><path d="M16 224h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16zm416 192H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm3.17-384H172.83A12.82 12.82 0 0 0 160 44.83v38.34A12.82 12.82 0 0 0 172.83 96h262.34A12.82 12.82 0 0 0 448 83.17V44.83A12.82 12.82 0 0 0 435.17 32zm0 256H172.83A12.82 12.82 0 0 0 160 300.83v38.34A12.82 12.82 0 0 0 172.83 352h262.34A12.82 12.82 0 0 0 448 339.17v-38.34A12.82 12.82 0 0 0 435.17 288z"></path></svg>			</a>
</div>
        </div>

        </div>




        </div>
            </div>
        </div>
</div>







