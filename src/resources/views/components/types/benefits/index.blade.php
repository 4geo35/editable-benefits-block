@props(["block", "isFullPage" => true])
@if ($block->items->count())
    @php($perCol = config("editable-benefits-block.perCol"))
    @if ($block->render_title)
        <x-tt::h2 class="mb-indent-half">{{ $block->render_title }}</x-tt::h2>
    @endif
    <div class="row">
        @php($hasGridImage = false)
        @foreach($block->items as $item)
            <div class="col w-full md:w-1/2 lg:w-1/3 {{ $perCol === 4 ? 'xl:w-1/4' : '' }} mb-indent">
                @if (!$hasGridImage && $item->recordable->image_id) @php($hasGridImage = true) @endif
                <x-ebb::types.benefits.item :$item :$hasGridImage />
            </div>
        @endforeach
    </div>
@endif
