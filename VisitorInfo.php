<?php

try {
    require('PHP/database.php');
    $sql = "
    SELECT visitor.VisitorId, visitor.FirstName, visitor.LastName, 
    documenttype.Name AS Document, visitor.DocumentNumber, visitor.Cellphone, 
    state.Name as State FROM visitor 
    JOIN state ON visitor.StateId = state.StateId 
    JOIN documenttype ON visitor.DocumentTypeId = documenttype.DocumentTypeId 
    WHERE VisitorId = $VisitorId;";
    $statement = $conn->query($sql);
    $visitor = $statement->fetchAll(PDO::FETCH_ASSOC);
    //echo json_encode($visitor);
} catch(PDOException $e) {
    die();
    echo "Error: " . $e->getMessage();
}

?>

<!-- Dropdown Card Example -->
<div class="card shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div
        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Informacion del visitante</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in"
                aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">Dropdown Header:</div>
                <a class="dropdown-item" href="#">Ingresar</a>
                <!--
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>-->
            </div>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Campo</th>
      <th scope="col">Informacion</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Nombres</th>
      <td><?php echo $visitor[0]['FirstName']; echo $visitor[0]['LastName']; ?></td>
    </tr>
    <tr>
      <th scope="row">Documento</th>
      <td><?php echo $visitor[0]['Document'] ?></td>
    </tr>
    <tr>
      <th scope="row">Numero Documento</th>
      <td><?php echo $visitor[0]['DocumentNumber'] ?></td>
    </tr>
    <tr>
      <th scope="row">Celular</th>
      <td><?php echo $visitor[0]['Cellphone'] ?></td>
    </tr>
    <tr>
      <th scope="row">Estado</th>
      <td><?php echo $visitor[0]['State'] ?></td>
    </tr>
    <form action="PHP/auth/accesslog.php" method="POST">
    <tr>
      <th scope="row">Motivo de la visita</th>
      <td>
         <input type="hidden" class="form-control form-control-user" name="visitorId" 
            placeholder="Ingresa el motivo de la visita" value="<?php echo $VisitorId ?>">
        <input type="text" class="form-control form-control-user" name="motive" 
                        placeholder="Ingresa el motivo de la visita" value="">
      </td>
    </tr>
    <tr>
      <th scope="row">Persona a visitar</th>
      <td>
        <input type="text" class="form-control form-control-user" name="personToVisit" 
                        placeholder="Ingresa persona a visitar" value="">
      </td>
    </tr>
    <tr>
      <th scope="row">Departamento a visitar</th>
      <td>
        <?php
            include "PHP/department/departments.php";
            //echo json_encode($document_type_list);
            ?>

            <!--<div class="form-group">
            <input type="text" class="form-control form-control-user"
                id="exampleInputPassword" name="StateId" placeholder="Ingresa estado">-->
                <select class="form-select form-control form-control-user" aria-label="Default select example"
                name="departmentToVisit">
                    <option selected>Open this select menu</option>
                    <?php
                    foreach($department_list as $option)
                    {
                        echo "<option value='". $option['Department'] ."'>". $option['Name'] ."</option>";
                    }
                    ?>
                </select>
      </td>
    </tr>
  </tbody>
</table>
<input type="submit" class="btn btn-primary btn-user btn-block" value="Registrar entrada">
</form>
    </div>
</div>