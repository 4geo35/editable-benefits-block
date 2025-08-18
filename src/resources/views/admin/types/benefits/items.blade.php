<div class="mx-auto w-11/12 mt-indent-half space-y-indent-half" x-collapse x-show="expanded">
    @foreach($items as $item)
        <div class="card">
            <div class="card-header">
                <div class="flex items-center justify-between">
                    @include("eb::admin.types.includes.priority-buttons")
                    @include("eb::admin.types.includes.edit-delete-buttons")
                </div>
            </div>
            <div class="card-body">
                @php($hasImage = $item->recordable->image_id)
                <div class="h-full flex flex-col">
                    @if ($hasImage)
                        <div class="inline-block mb-indent md:mb-indent-double">
                            <img src="{{ route('thumb-img', ['template' => 'benefit-record', 'filename' => $item->recordable->image->file_name]) }}"
                                 alt="" class="rounded-base">
                        </div>
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
                @include("eb::admin.types.includes.help-info")
            </div>
        </div>
    @endforeach
</div>
