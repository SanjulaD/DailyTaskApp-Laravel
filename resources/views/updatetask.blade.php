<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Task | Laravel</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

</head>
<body>
    <div class="container text-center">
        <form action="#" method="post">
                <br>
                <input class="form-control" type="text" name="task" value="{{$taskdata->task}}">
                <input class="form-control" type="hidden" name="task" value="{{$taskdata->id}}">
                <br>
                <input type="submit" value="Submit" class="btn btn-danger">
                <input type="reset" value="Clear" class="btn btn-success">    
        </form>
    </div>

</body>
</html>