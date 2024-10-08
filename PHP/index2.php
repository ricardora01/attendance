<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row">
        <div class="col-3">
        
        </div>
        <div class="col-6">
<form class="card p-4" action="login2.php" method="POST">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Usuario</label>
                    <input name="user" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingrsa tu usuario">
                </div>
                <div class="mb-3">
                     <label for="exampleFormControlInput1" class="form-label">Contraseña</label>
                     <input name="password"type="password" class="form-control" id="exampleFormControlInput1" placeholder="Ingresa tu contraseña">
                </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary" type="submit">Iniciar sesión</button>
                    </div>
                 </div>
</form>
        <div class="col-3">
        
    </div>
        <!--
        <div class="col"style="background-color:pink">
        Column
        </div>-->
        </div>
    </div>
    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>  
</body>
</html>