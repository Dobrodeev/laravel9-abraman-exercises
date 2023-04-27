<?php use Illuminate\Support\Facades\DB; ?>
<?php $tasks = DB::select('select * from tasks'); ?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Завдання</h1>

        <!-- При переходженні за посиланням, $task->counter збільшується на 1 -->
        @foreach ($tasks as $task)
            <p><a href="{{ route('task-update', ['id' => $task->id]) }}">{{ $task->id }}</a> | {{ $task->name }} | {{ $task->counter }}</p>
        @endforeach
    </body>
</html>
