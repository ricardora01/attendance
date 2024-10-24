
    <!-- Modal -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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

            <?php
             //json_encode($visitor_list[$id]);
            ?>
               
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="FirstName" aria-describedby="emailHelp"
                            placeholder="Ingresa nombre del visitante" value="<?php echo  $visitor_list[$id]['FirstName']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="LastName" 
                            placeholder="Ingresa Apellidos del visitante" value="<?php echo  $visitor_list[$id]['LastName']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="DocumentType" aria-describedby="emailHelp"
                            placeholder="Ingresa Tipo de identificación" value="<?php echo  $visitor_list[$id]['DocumentTypeId']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="DocumentNumber" 
                            placeholder="Numero de identificación" value="<?php echo  $visitor_list[$id]['DocumentNumber']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="Cellphone" aria-describedby="emailHelp"
                            placeholder="Ingresa numero de celular" value="<?php echo  $visitor_list[$id]['Cellphone']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="StateId" 
                            placeholder="Ingresa estado" value="<?php echo  $visitor_list[$id]['StateId']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputEmail" name="Street" aria-describedby="emailHelp"
                            placeholder="Ingresa Calle" value="<?php echo  $visitor_list[$id]['Street']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="Suburb" 
                            placeholder="Ingresa Colonia" value="<?php echo  $visitor_list[$id]['Suburb']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="ExteriorNumber" 
                            placeholder="Ingresa numero exterior" value="<?php echo  $visitor_list[$id]['ExteriorNumber']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="InteriorNumber" 
                            placeholder="Ingresa numero interior" value="<?php echo  $visitor_list[$id]['InteriorNumber']?>">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control form-control-user"
                            id="exampleInputPassword" name="ZipCode" 
                            placeholder="Ingresa codigo postal" value="<?php echo  $visitor_list[$id]['ZipCode']?>">
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
