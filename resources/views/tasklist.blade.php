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

<ul>
    @foreach ($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
    {{ $foo }}
</ul>