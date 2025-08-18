@props(["item", "hasGridImage" => false])
@php($hasImage = $item->recordable->image_id)
<div class="h-full flex flex-col">
    @if ($hasImage)
        <div class="inline-block mb-indent md:mb-indent-double">
            <img src="{{ route('thumb-img', ['template' => 'benefit-record', 'filename' => $item->recordable->image->file_name]) }}"
                 alt="" class="rounded-base">
        </div>
    @elseif($hasGridImage)
        <div class="inline-block mb-indent md:mb-indent-double h-[100px]"></div>
    @endif
    @if ($item->title)
        <h4 class="text-lg xs:text-xl font-semibold mb-indent">{{ $item->title }}</h4>
    @endif
    @if ($item->recordable->description)
        <div class="prose max-w-none prose-p:leading-6">
            {!! $item->recordable->markdown !!}
        </div>
    @endif
</div>
