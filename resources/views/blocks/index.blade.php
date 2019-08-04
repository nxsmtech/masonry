@extends ('layouts.app')

@section ('content')
    <div class="grid lg:flex lg:flex-wrap -mx-3">
        @foreach($blocks as $block)
            <div class="grid-item grid-item--width2 lg:w-1/3 p-2">
                @include('blocks.card')
            </div>
        @endforeach
    </div>

    <div hidden>
        {{ $blocks->links() }}
    </div>
@endsection
