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

@extends('layout')

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