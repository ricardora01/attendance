<?php
$id = $_GET ["id"] ??  null;
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

     <!-- Custom styles for this page -->
     <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

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
                    <h1 class="h3 mb-4 text-gray-800">Bitacora de visitantes</h1>

                     <!-- DataTales Example -->
                     <div class="card shadow mb-4">
                        <div class="card-header py-3">
                           <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            Agregar acceso
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID de visitante</th>
                                            <th>Fecha de entrada</th>
                                            <th>Hora de entrada</th>
                                            <th>Puerta</th>
                                            <th>Departamento a visitar</th>
                                            <th>Persona a la que visita</th>
                                            <th>Motivo de visita</th>
                                            <th>ID guardia</th>
                                            <th>Fecha de salida</th>
                                            <th>Hora de salida</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>ID de visitante</th>
                                            <th>Fecha de entrada</th>
                                            <th>Hora de entrada</th>
                                            <th>Puerta</th>
                                            <th>Departamento a visitar</th>
                                            <th>Persona a la que visita</th>
                                            <th>Motivo de visita</th>
                                            <th>ID guardia</th>
                                            <th>Fecha de salida</th>
                                            <th>Hora de salida</th>
                                            <th>Acciones</th>
                                            
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                            include "PHP/auth/access.php";
                                            //echo json_encode($access_list);

                                                foreach ($access_list as $access) {
                                                    echo "
                                                    <tr>
                                                        <td>". $access['AccessLogId'] ."</td>,
                                                        <td>". $access['VisitorId']  ."</td>
                                                        <td>". $access['DateIn'] ."</td>
                                                        <td>". $access['TimeIn'] ."</td>
                                                        <td>". $access['Door'] ."</td>
                                                        <td>". $access['department'] ."</td>
                                                        <td>". $access['PersonToVisiti'] ."</td>
                                                        <td>". $access['VisitMotive'] ."</td>
                                                        <td>". $access['GuardId'] ."</td>
                                                        <td>". $access['DateOut'] ."</td>
                                                        <td>". $access['TimeOut'] ."</td>
                                                        <td>
                                                            <a href='php/auth/visitout.php?id=".$access['AccessLogId']."' class='btn btn-success btn-icon-split btn-sm'>
                                                                <span class='icon text-white-50'>
                                                                    <i class='fas fa-check'></i>
                                                                </span>
                                                                <span class='text'>Registrar salida</span>
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
                <h5 class="modal-title" id="exampleModalLabel">Agrega el nuevo acceso</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="user" action="PHP/doors/create-door.php" method="POST">
                <div class="modal-body">
                
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="exampleInputEmail" name="name" aria-describedby="emailHelp"
                                placeholder="Ingresa nobre del acceso">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user"
                                id="exampleInputPassword" name="description" placeholder="Ingresa descripcion del acceso">
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
    

      <?php if($id && $id >= 0){
        include "modal_update.php";
      } ?>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <script type="text/javascript">
        $(window).on('load', function() {
            $('#exampleModal2').modal('show');
        });
    </script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/datatables-demo.js"></script>

</body>

</html>