<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Masonry</title>
</head>
<body>
@foreach($blocks as $block)
    <div class="card" style="height: {{ $block->rand_height . 'px' }}; width: max-content; color: red">
        {{ $block->rand_num }}
    </div>
@endforeach
</body>
</html>

