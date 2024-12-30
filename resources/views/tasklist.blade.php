{{-- <?php
    foreach ($tasks as $task) {
        echo $task;
    }
?> --}}

{{-- <ul>
    <?php foreach ($tasks as $task) : ?>
        <li><?= $task ?></li>
    <?php endforeach; ?>
</ul> --}}

@extends('pastel-layout')

@section('content')
<ul>
    @foreach ($tasks as $task)
    <li>{{ $task }}</li>
    @endforeach
    {{ $foo }}
</ul>
@endsection

@section('title')
Tömb
@endsection