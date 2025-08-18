@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @php
        $perCol = config("editable-benefits-block.perCol");
        $hasGridImage = false;
        if ($isFullPage) {
            $gridClass = "lg:w-1/3";
            if ($perCol === 4) { $gridClass .= " xl:w-1/4"; }
        } else {
            $gridClass = "";
        }
    @endphp

    @if ($block->render_title)
        <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
    @endif
    <div class="row">
        @foreach($block->items as $item)
            @if (!$hasGridImage && $item->recordable->image_id) @php($hasGridImage = true) @endif
        @endforeach
        @foreach($block->items as $item)
            <div class="col w-full md:w-1/2 {{ $gridClass }} mb-indent">
                <x-ebb::types.benefits.item :$item :$hasGridImage />
            </div>
        @endforeach
    </div>
@endif
