<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
</head>
<body>
    <div class="navbar navbar-dark bg-dark mb-5">
        <a href="#" class="navbar-brand">Search Users to Database</a>
    </div>
    <div class="card w-25 mx-auto m-auto">
        <div class="card-body">
            <form action="mostrar.php" method="GET">
                <div class="form-group">
                    <input type="text" placeholder="insert a Nombre" name="nombre" class="form-control">
                </div>
                    <input type="submit" value="Search" class="btn btn-success btn-block">
            </form>
        </div>
    </div>
</body>
</html>