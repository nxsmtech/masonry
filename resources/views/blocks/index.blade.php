@extends ('layouts.app')

@section ('content')
    <div class="grid" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": 200 }'>
        @foreach($blocks as $block)
            <div class="grid-item grid-item--width2">
                <div class="card"
                     style="height: {{ $block->rand_height . 'px' }}; background-color: {{ $block->color }}">
                    <div class="text-grey-darkest">{{ $block->rand_num }}</div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

