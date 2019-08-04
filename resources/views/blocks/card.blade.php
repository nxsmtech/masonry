<div class="card flex flex-col justify-center" style="height: {{ $block->rand_height . 'px' }}; background-color: {{ $block->color }}">
    <div class="text-white text-center">
        <h1> {{$loop->iteration}}</h1>
        <p> {{ $block->rand_num }}</p>
    </div>
</div>