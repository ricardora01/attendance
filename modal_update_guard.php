

<!-- Modal Update-->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Actualiza guardia de seguridad</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <form class="user" action="PHP/security-guards/update-guard.php" method="POST">
        <div class="modal-body">
        <?php
        //echo json_encode($door_list[$id]);
        ?>
                <div class="form-group">
                    <input type="hidden" class="form-control form-control-user"
                         name="id" aria-describedby="emailHelp"
                        placeholder="Ingresa nobre del acceso" value="<?php echo $guard_list[$id]['GuardId'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputEmail" name="name" aria-describedby="emailHelp"
                        placeholder="Ingresa nombre" value="<?php echo $guard_list[$id]['FirstName'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="lastname" placeholder="Ingresa Apellido"
                        value="<?php echo $guard_list[$id]['LastName'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="employeeid" placeholder="Ingresa numero de empleado"
                        value="<?php echo $guard_list[$id]['EmployeeId'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="password" placeholder="Ingresa contraseña del guardia"
                        value="<?php echo $guard_list[$id]['Password'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="workinghours" placeholder="Ingresa turno de trabajo"
                        value="<?php echo $guard_list[$id]['WorkingHours'];  ?>">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control form-control-user"
                        id="exampleInputPassword" name="cellphone" placeholder="Ingresa numero de celular"
                        value="<?php echo $guard_list[$id]['Cellphone'];  ?>">
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
