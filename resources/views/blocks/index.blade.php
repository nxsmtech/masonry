@extends ('layouts.app')

@section ('content')
    <div class="grid lg:flex lg:flex-wrap -mx-3">
        <div class="grid-sizer lg:w-1/3 sm:w-full w-full float-left"></div>
        @foreach($blocks as $block)
            <div class="grid-item lg:w-1/3 sm:w-full w-full p-2">
                @include('blocks.card')
            </div>
        @endforeach
    </div>
@endsection
