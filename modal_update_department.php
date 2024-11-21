<?php
    try {
        require('PHP/database.php');
        $sql = "SELECT * FROM department WHERE Department = $id";
        $statement = $conn->query($sql);
        $department = $statement->fetchAll(PDO::FETCH_ASSOC);
    } catch(PDOException $e) {
        die();
        echo "Error: " . $e->getMessage();
    }
?>

<!-- Modal Update-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega el nuevo acceso</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form class="user" action="PHP/department/update-department.php" method="POST">
        <div class="modal-body">
        <?php
        //echo json_encode($door_list[$id]);
        ?>
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user"
                         name="id" aria-describedby="emailHelp"
                        placeholder="Ingresa nobre del acceso" value="<?php echo $department[0]['Department'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="name" aria-describedby="emailHelp"
                        placeholder="Ingresa nombre del departamento" value="<?php echo $department[0]['Name'];  ?>">
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
