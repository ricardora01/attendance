<!-- Modal Update-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agrega el documento</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form class="user" action="PHP/document-type/update-document.php" method="POST">
        <div class="modal-body">
        <?php
        //echo json_encode($door_list[$id]);
        ?>
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user"
                         name="id" aria-describedby="emailHelp"
                        placeholder="Ingresa nobre del acceso" value="<?php echo $document_list[$id]['DocumentTypeId'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="name" aria-describedby="emailHelp"
                        placeholder="Ingresa nombre del documento" value="<?php echo $document_list[$id]['Name'];  ?>">
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