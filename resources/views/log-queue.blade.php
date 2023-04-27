<?php use Illuminate\Support\Facades\DB; ?>
<?php
    $logs = DB::select('select * from task_logs where task_logs.status = 0;');
    array_reverse($logs);
?>

<!DOCTYPE html>
<html>
    <body>
        <h1>Черга</h1>       
        
        <table>
            <tr>
                <th>id</th>
                <th>task_id</th>
                <th>created_at</th>
            </tr>
            @foreach ($logs as $log)
                <tr>
                    <td>{{ $log->id }}</td>
                    <td>{{ $log->task_id }}</td>
                    <td>{{ $log->created_at }}</td>
                </tr>
            @endforeach
        </table>
        
        <p><a href="{{ route('tasklog-update') }}">Прийняти до роботи</a></p>
    </body>
</html>
