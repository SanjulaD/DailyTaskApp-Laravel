<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daily Task Application | Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="text-center"><br>
           <h1>Daily Tasks</h1>
           </br>
            <div class="row">
                <div class="col-md-12">

                @foreach( $errors->all() as $error )

                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>

                @endforeach


                    <form action="/saveTask" method="post">
                        {{csrf_field()}}

                        <input type="text" placeholder="Enter Your Task Here" class="form-control" name="task">
                        </br>
                        <input type="submit" value="SAVE" class="btn btn-primary">
                        <input type="button" value="CLEAR" class="btn btn-warning">
                    </form>
                    </br>
                    <br>
                    <table class="table table-striped table-dark table-bordered table-hover">
                        <th>ID</th>
                        <th>Task</th>
                        <th>Completed</th>

                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>{{ $task->task }}</td>
                            <td>{{ $task->iscompleted }}</td>
                        </tr>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>    
    </div>
    
</body>
</html>