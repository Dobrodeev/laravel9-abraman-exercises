<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>

        <div>
            <h2>Зроблені задачі</h2>
            
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Task ID</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tasks_done as $task_done)
                <tr><td>{{ $task_done->id }}</td><td>{{ $task_done->task_id }}</td><td>{{ $task_done->status }}</td></tr>
                @endforeach
              </tbody>
            </table>

            <h3>Задачі в процесі</h3>

            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Task ID</th>
                  <th scope="col">Status</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($tasks_queued as $task_queued)
                <tr><td>{{ $task_queued->id }}</td><td>{{ $task_queued->task_id }}</td><td>{{ $task_queued->status }}</td></tr>
                @endforeach
              </tbody>
            </table>

        </div>
        
      </body>
</html>
