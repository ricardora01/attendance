<?php
$id = $_GET['id'];
//echo $id;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php
            include 'menu.php';
        ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

        <!--topbar-->
             <?php
                include 'topbar.php';
            ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Registro de visitantes</h1>

                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar datos nuevos
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Tipo de identificación</th>
                                            <th>Numero de identificación</th>
                                            <th>Numero de celular</th>
                                            <th>Estado</th>
                                            <th>Calle</th>
                                            <th>Colonia</th>
                                            <th>Numero exterior</th>
                                            <th>Numero interior</th>
                                            <th>Codigo Postal</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nombre</th>
                                            <th>Apellidos</th>
                                            <th>Tipo de identificación</th>
                                            <th>Numero de identificación</th>
                                            <th>Numero de celular</th>
                                            <th>Estado</th>
                                            <th>Calle</th>
                                            <th>Colonia</th>
                                            <th>Numero exterior</th>
                                            <th>Numero interior</th>
                                            <th>Codigo Postal</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                            include "PHP/visitors/visitors.php";
                                            //echo json_encode($door_list);

                                                foreach ($visitor_list as $key => $visitor) { //Se agrego key y se agrego en en href de botton update
                                                    echo "
                                                    <tr>
                                                        <td> ". $visitor['VisitorId'] ."</td>,
                                                        <td>". $visitor['FirstName'] ."</td>
                                                        <td>". $visitor['LastName'] ."</td>
                                                        <td>". $visitor['DocumentTypeId'] ."</td>
                                                        <td>". $visitor['DocumentNumber'] ."</td>
                                                        <td>". $visitor['Cellphone'] ."</td>
                                                        <td>". $visitor['StateId'] ."</td>
                                                        <td>". $visitor['Street'] ."</td>
                                                        <td>". $visitor['Suburb'] ."</td>
                                                        <td>". $visitor['ExteriorNumber'] ."</td>
                                                        <td>". $visitor['InteriorNumber'] ."</td>
                                                        <td>". $visitor['ZipCode'] ."</td>
                                                        <td class='text-center'>
                                                            <a href='visitors.php?id=".$key."' class='btn btn-warning btn-circle btn-sm'> 
                                                                <i class='fas fa-exclamation-triangle'></i>
                                                            </a>
                                                            <a href='PHP/visitors/delete-visitors.php?id=".$visitor['VisitorId'] ."' class='btn btn-danger btn-circle btn-sm'>
                                                                <i class='fas fa-trash'></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    ";
                                                }
                                        ?>


                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Agrega nuevo visitante</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="PHP/visitors/create-visitors.php" method="POST">
            <div class="modal-body">
               
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="FirstName" aria-describedby="emailHelp"
                            placeholder="Ingresa nombre del visitante">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="LastName" placeholder="Ingresa Apellidos del visitante">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="DocumentType" aria-describedby="emailHelp"
                            placeholder="Ingresa Tipo de identificación">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="DocumentNumber" placeholder="Numero de identificación">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="Cellphone" aria-describedby="emailHelp"
                            placeholder="Ingresa numero de celular">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="StateId" placeholder="Ingresa estado">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="Street" aria-describedby="emailHelp"
                            placeholder="Ingresa Calle">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="Suburb" placeholder="Ingresa Colonia">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="ExteriorNumber" placeholder="Ingresa numero exterior">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="InteriorNumber" placeholder="Ingresa numero interior">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="ZipCode" placeholder="Ingresa codigo postal">
                    </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-user" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary btn-user" value="Guardar cambios">
            </div>
            </form>
            </div>
        </div>
    </div>

    <?php

    // Conficion para saber si la pagina tiene el id con un valor existente
    if($id && $id >=0){
        // se incluye el archivo modal update
        include 'modal_update_visitor.php';
    }

    ?>


    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- se abre el modal de update cuando carga la pagina -->
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#exampleModal2').modal('show');
        });
    </script>

</body>

</html>