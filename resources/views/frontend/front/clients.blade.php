<div class="container">
    <div class="row">



		<div class="" data-id="5bf40bb" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
<div class="elementor-element elementor-element-3b56be5 e-con-full e-flex e-con e-child" data-id="3b56be5" data-element_type="container">
        <div class="elementor-element elementor-element-fcb4893 elementor-widget elementor-widget-heading" data-id="fcb4893" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">
    <h2 class="elementor-heading-title elementor-size-default">Best Prestigious Clients We Have Work With</h2>		</div>
        </div>


        <div class="elementor-element elementor-element-7ac0cd7 elementor-widget elementor-widget-text-editor" data-id="7ac0cd7" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">
                    <div class="flex max-w-full flex-col flex-grow"><div class="min-h-8 text-message flex w-full flex-col items-end gap-2 whitespace-normal break-words [.text-message+&amp;]:mt-5" dir="auto" data-message-author-role="assistant" data-message-id="bde0a23c-81a9-4b78-b525-c41314cc10ca" data-message-model-slug="gpt-4o"><div class="flex w-full flex-col gap-1 empty:hidden first:pt-[3px]"><div class="markdown prose w-full break-words dark:prose-invert dark"><p>Best Web Design Company in Bangladesh</p></div></div></div></div>						</div>
        </div>
        </div>
            </div>
        </div>



        @php
        $clients= \App\Models\Client::all();

        @endphp

@foreach ( $clients as  $client)



<div class="" data-id="c9865dc" data-element_type="container" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="e-con-inner">
<div class="elementor-element elementor-element-28d8e98 e-grid e-con-full e-con e-child" data-id="28d8e98" data-element_type="container">


    <div class="elementor-element elementor-element-2ae0cf2 elementor-widget elementor-widget-image" data-id="2ae0cf2" data-element_type="widget" data-widget_type="image.default">
        <div class="elementor-widget-container">
            <img decoding="async" width="132" height="132" src="{{ asset($client->image) }}" class="attachment-full size-full wp-image-9447" alt="Square Logo" />
        </div>
    </div>


    </div>
            </div>
        </div>

        @endforeach

    </div>
</div>
