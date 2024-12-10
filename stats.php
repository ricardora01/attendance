<?php
//require_once("PHP/session.php");
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
                    <h1 class="h3 mb-4 text-gray-800">Estadisticas</h1>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                Visitantes en el dia</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php

                                                                                                    date_default_timezone_set("America/Mexico_City");
                                                                                                    $Date = date("Y-m-d");
                                                                                                     try {
                                                                                                        require('PHP/database.php');
                                                                                                        //echo $Date;


                                                                                                        $sql = "SELECT COUNT(DateIn) as Access1 FROM `accesslog` WHERE DateIn = '$Date';";
                                                                                                        $statement = $conn->query($sql);
                                                                                
                                                                                                        $Access = $statement->fetchAll(PDO::FETCH_ASSOC);

                                                                                                        //echo json_encode($Access);
                                                                                                        
                                                                                                      //  echo json_encode($Access);
                                                                                                    } catch(PDOException $e) {
                                                                                                        die();
                                                                                                        echo "Error: " . $e->getMessage();
                                                                                                    }
                                                                                                    //$Access_str = json_encode($Access);
                                                                                                    echo $Access[0]['Access1'];
                                                                                                    ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Visitantes dentro del Instituto Tecnológico de Aguascalientes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                                    
                                                                                                            try {
                                                                                                                require('PHP/database.php');
                                                                                                               // $sql = "SELECT COUNT(AccessLogId) as Access1 FROM `accesslog`;";
                                                                                                                $sql = "SELECT COUNT(AccessLogId) as AccessIn FROM accesslog WHERE DateOut IS NULL AND DateIn = '$Date';";
                                                                                                                $statement = $conn->query($sql);
                                                                                                                $AccessI = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                                                                                
                                                                                                                //  echo json_encode($Access);
                                                                                                            }   catch(PDOException $e) {
                                                                                                                die();
                                                                                                                echo "Error: " . $e->getMessage();
                                                                                                            }
                                                                                                                //$Access_str = json_encode($Access);
                                                                                                                echo $AccessI[0]['AccessIn'];
                                                                                                    ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas  fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Visitantes que han salido
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                                                                                                    
                                                                                                    try {
                                                                                                        require('PHP/database.php');
                                                                                                       // $sql = "SELECT COUNT(AccessLogId) as Access1 FROM `accesslog`;";
                                                                                                        $sql = "SELECT COUNT(AccessLogId) as AccessOut FROM `accesslog` WHERE DateOut IS NOT NULL AND DateIn = '$Date';";
                                                                                                        $statement = $conn->query($sql);
                                                                                                        $AccessO = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                                                                        
                                                                                                        //  echo json_encode($Access);
                                                                                                    }   catch(PDOException $e) {
                                                                                                        die();
                                                                                                        echo "Error: " . $e->getMessage();
                                                                                                    }
                                                                                                        //$Access_str = json_encode($Access);
                                                                                                        echo $AccessO[0]['AccessOut'];
                                                                                            ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Fecha</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                                date_default_timezone_set("America/Mexico_City");
                                                                                                $DateIn = date("Y-m-d");
                                                                                                echo $DateIn;
                                                                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                                <!-- Donut Chart -->
                            <div class="col-md-6 col-12">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Accesos</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4">
                                            <canvas id="myPieChart"></canvas>
                                        </div>
                                        <hr>
                                        Registro de las puertas usadas como accesos al Instituto Tecnológico de Aguascalientes
                                    </div>
                                </div>
                            </div>
                             <!-- Donut Chart -->
                            <div class="col-md-6 col-12">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">Departamentos</h6>
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-pie pt-4">
                                            <canvas id="myPieChart2"></canvas>
                                        </div>
                                        <hr>
                                        Registro de departamentos visitados en el Instituto Tecnológico de Aguascalientes
                                    </div>
                                </div>
                            </div>
                        
                    </div>

                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               Total de visitantes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <?php
                                                                                                     try {
                                                                                                        require('PHP/database.php');
                                                                                                        $sql = "SELECT COUNT(AccessLogId) as Access1 FROM `accesslog`;";
                                                                                                        $statement = $conn->query($sql);
                                                                                                        $Access = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                                                                        
                                                                                                      //  echo json_encode($Access);
                                                                                                    } catch(PDOException $e) {
                                                                                                        die();
                                                                                                        echo "Error: " . $e->getMessage();
                                                                                                    }
                                                                                                    //$Access_str = json_encode($Access);
                                                                                                    echo $Access[0]['Access1'];
                                                                                                    ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Annual) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Total de visitantes dentro del Instituto Tecnológico de Aguascalientes</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                                    
                                                                                                            try {
                                                                                                                require('PHP/database.php');
                                                                                                               // $sql = "SELECT COUNT(AccessLogId) as Access1 FROM `accesslog`;";
                                                                                                                $sql = "SELECT COUNT(AccessLogId) as AccessIn FROM `accesslog` WHERE TimeOut IS NULL;";
                                                                                                                $statement = $conn->query($sql);
                                                                                                                $AccessI = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                                                                                
                                                                                                                //  echo json_encode($Access);
                                                                                                            }   catch(PDOException $e) {
                                                                                                                die();
                                                                                                                echo "Error: " . $e->getMessage();
                                                                                                            }
                                                                                                                //$Access_str = json_encode($Access);
                                                                                                                echo $AccessI[0]['AccessIn'];
                                                                                                    ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas  fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Tasks Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Total de visitantes que han salido
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?php
                                                                                                    
                                                                                                                try {
                                                                                                                    require('PHP/database.php');
                                                                                                                // $sql = "SELECT COUNT(AccessLogId) as Access1 FROM `accesslog`;";
                                                                                                                    $sql = "SELECT COUNT(AccessLogId) as AccessOut FROM `accesslog` WHERE TimeOut IS NOT NULL;";
                                                                                                                    $statement = $conn->query($sql);
                                                                                                                    $AccessO = $statement->fetchAll(PDO::FETCH_ASSOC);
                                                                                                                    
                                                                                                                    //  echo json_encode($Access);
                                                                                                                }   catch(PDOException $e) {
                                                                                                                    die();
                                                                                                                    echo "Error: " . $e->getMessage();
                                                                                                                }
                                                                                                                    //$Access_str = json_encode($Access);
                                                                                                                    echo $AccessO[0]['AccessOut'];
                                                                                                             ?></div>
                                                </div>
                                                
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                                Fecha</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php
                                                                                                date_default_timezone_set("America/Mexico_City");
                                                                                                $DateIn = date("Y-m-d");
                                                                                                echo $DateIn;
                                                                                                ?>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
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

    

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <?php
    require('PHP/database.php');
        /// Primero ejecutamos la consulta
        try {
            $sql = "SELECT door.DoorName, Count(*) AS Contador FROM accesslog JOIN door ON accesslog.DoorId = door.DoorId GROUP BY accesslog.DoorId";
            $statement = $conn->query($sql);
            $doors = $statement->fetchAll(PDO::FETCH_ASSOC);
            //echo json_encode($doors);
        } catch(PDOException $e) {
            die();
            echo "Error: " . $e->getMessage();
        }
    // Despues recorremos cada valor y lo asignamos a un nuevo array, donde solo almacenaremos los nombre de las puertas
        $label_door = [];
        foreach($doors as $door){
            array_push($label_door, $door['DoorName']);
        }
    // Recorremos de neuvo cada valor y esta vez asignamos en un nuevo array solo los valores del contador
        $count_door = [];
        foreach($doors as $door){
            array_push($count_door, $door['Contador']);
        }
    ?>
    <script>
        var count_door =<?php echo json_encode($count_door); ?>;//asignamos a una variable de javascript el valor del array de php count_department
        var label_door =<?php echo json_encode($label_door); ?>; //asignamos a una variable de javascript el valor del array de php label_department

                // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart");
        var myPieChart = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: label_door, // asignamos array de javascript
            datasets: [{
            data: count_door, // asignamos array de javascript
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', "#3275a8", "#71309c"],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', "#21547a", "#532473" ],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            legend: {
            display: false
            },
            cutoutPercentage: 80,
        },
        });

    </script>

    
 
    <?php
        /// Primero ejecutamos la consulta
        try {
            //require('PHP/database.php');
            $sql = "SELECT department.Name, Count(*) AS contador FROM accesslog JOIN department 
            ON accesslog.DepartmentToVisitId = department.Department GROUP BY DepartmentToVisitId";
            $statement = $conn->query($sql);
            $deparments = $statement->fetchAll(PDO::FETCH_ASSOC);
        } catch(PDOException $e) {
            die();
            echo "Error: " . $e->getMessage();
        }
    // Despues recorremos cada valor y lo asignamos a un nuevo array, ddonde solo almacenaremos los nombre de los departamentos
        $label_department = [];
        foreach($deparments as $department){
            array_push($label_department, $department['Name']);
        }
    // Recorremos de neuvo cada valor y esta vez asignamos en un nuevo array solo los valores del contador
        $count_department = [];
        foreach($deparments as $department){
            array_push($count_department, $department['contador']);
        }
    ?>
    <script>
        var count_depatrment =<?php echo json_encode($count_department); ?>;//asignamos a una variable de javascript el valor del array de php count_department
        var label_department =<?php echo json_encode($label_department); ?>; //asignamos a una variable de javascript el valor del array de php label_department
           
                // Set new default font family and font color to mimic Bootstrap's default styling
        Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';

        // Pie Chart Example
        var ctx = document.getElementById("myPieChart2");
        var myPieChart2 = new Chart(ctx, {
        type: 'doughnut',
        data: {
            labels: label_department, // asignamos array de javascript
            datasets: [{
            data:count_depatrment, // asignamos array de javascript
            backgroundColor: ['#4e73df', '#1cc88a', '#36b9cc', "#3275a8", "#71309c"],
            hoverBackgroundColor: ['#2e59d9', '#17a673', '#2c9faf', "#21547a", "#532473" ],
            hoverBorderColor: "rgba(234, 236, 244, 1)",
            }],
        },
        options: {
            maintainAspectRatio: false,
            tooltips: {
            backgroundColor: "rgb(255,255,255)",
            bodyFontColor: "#858796",
            borderColor: '#dddfeb',
            borderWidth: 1,
            xPadding: 15,
            yPadding: 15,
            displayColors: false,
            caretPadding: 10,
            },
            legend: {
            display: false
            },
            cutoutPercentage: 80,
        },
        });

    </script>

</body>

</html>