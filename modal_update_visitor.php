<?php
    try {
        require('PHP/database.php');
        $sql = "SELECT * FROM visitor WHERE VisitorId = $id";
        $statement = $conn->query($sql);
        $visitor = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        die();
        echo "Error: " . $e->getMessage();
    }
?>
<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar visitante</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="user" action="PHP/visitors/update-visitors.php" method="POST">
        <div class="modal-body">

        <?php
            //echo json_encode($visitor);
        ?>
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user"
                         name="id" aria-describedby="emailHelp"
                        placeholder="Ingresa nobre del acceso" value="<?php echo $visitor[0]['VisitorId'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="FirstName" aria-describedby="emailHelp"
                        placeholder="Ingresa nombre del visitante" value="<?php echo  $visitor[0]['FirstName']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="LastName" 
                        placeholder="Ingresa Apellidos del visitante" value="<?php echo  $visitor[0]['LastName']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="DocumentTypeId" aria-describedby="emailHelp"
                        placeholder="Ingresa Tipo de identificación" value="<?php echo  $visitor[0]['DocumentTypeId']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="DocumentNumber" 
                        placeholder="Numero de identificación" value="<?php echo  $visitor[0]['DocumentNumber']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="Cellphone" aria-describedby="emailHelp"
                        placeholder="Ingresa numero de celular" value="<?php echo  $visitor[0]['Cellphone']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="StateId" 
                        placeholder="Ingresa estado" value="<?php echo  $visitor[0]['StateId']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="Street" aria-describedby="emailHelp"
                        placeholder="Ingresa Calle" value="<?php echo  $visitor[0]['Street']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="Suburb" 
                        placeholder="Ingresa Colonia" value="<?php echo  $visitor[0]['Suburb']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="ExteriorNumber" 
                        placeholder="Ingresa numero exterior" value="<?php echo $visitor[0]['ExteriorNumber']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="InteriorNumber" 
                        placeholder="Ingresa numero interior" value="<?php echo  $visitor[0]['InteriorNumber']?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="ZipCode" 
                        placeholder="Ingresa codigo postal" value="<?php echo  $visitor[0]['ZipCode']?>">
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
