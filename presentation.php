<?php
require_once("PHP/session.php");
// Ternario
$VisitorId = $_GET['VisitorId'] ?? null;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                      
                        
                            
                            
                           
                          <div class="col-lg-6 d-none d-lg-block "></div> 
                            
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">¿Eres un visitante?</h1>
                                        <p class="mb-4">Registra tus datos para poder entrar al Instituto Tecnologico de Aguascalientes</p>
                                    </div>
                                        <form class="user" action="PHP/auth/auth-visitor.php" method="POST">
                                        <div class="p-3">
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" name="id" aria-describedby="emailHelp"
                                                placeholder="Ingresa tu numero de control o empleado">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="Ingresar numero">
                                        </div> 
                                    </form>
                                    <a href="visitors.php" class="btn btn-primary btn-user btn-block">
                                            Registrar nuevo visitante
                                        </a>

                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="security-guards.php">Soy vigilante</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="home.php">Soy administrador</a>
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>

                <div class="col-xl-10 col-lg-12 col-md-9">
                    <?php
                    
                        if($VisitorId && $VisitorId > 0){
                            include "VisitorInfo.php";
                        }
                    ?>
                </div>

            </div>

            

            

        </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>