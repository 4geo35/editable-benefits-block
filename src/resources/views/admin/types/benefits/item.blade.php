@php($hasImage = $item->recordable->image_id)
<div class="h-full flex flex-col">
    @if ($hasImage)
        <div class="inline-block mb-indent-half md:mb-indent">
            <img src="{{ route('thumb-img', ['template' => 'benefit-record', 'filename' => $item->recordable->image->file_name]) }}"
                 alt="" class="rounded-base">
        </div>
    @endif
    @if ($item->title)
        <h4 class="text-h4-mobile sm:text-h4 font-semibold mb-indent-half">{{ $item->title }}</h4>
    @endif
    @if ($item->recordable->description)
        <div class="prose max-w-none prose-p:leading-6">
            {!! $item->recordable->markdown !!}
        </div>
    @endif
</div>
