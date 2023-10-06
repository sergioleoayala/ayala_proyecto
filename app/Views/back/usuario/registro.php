 <h1>Registrarse</h1>
    <h2>Alta como cliente</h2>

    <p> Por favor complete sus datos para dar de alta como cliente: </p>
<?php $validation = \Config\Services::validation(); ?>
<form method="post" action="<?php echo base_url('/enviar-form') ?>">
    <?=csrf_field();?>
    <?php if(!empty (session()->getFlashdata('fail'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('fail');?></div>
    <?php endif?>
    <?php if(!empty (session()->getFlashdata('success'))):?>
    <div class="alert alert-danger"><?=session()->getFlashdata('success');?></div>
    <?php endif?>
       <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header p-3 mb-2 bg-warning-subtle">
                        Registro de Usuario
                    </div>
                    <div class="card-body">
                        <form action="registro_procesar.php" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="nombre" name="nombre" required>
                                <?php if ($validation->getError('nombre')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('nombre');?>
                                    </div>}
                                    <?php }?>
                            </div>
                            <div class="form-group">
                                <label for="apellido">Apellido</label>
                                <input type="text" class="form-control" id="apellido" placeholder="apellido" name="apellido" required>
                                 <?php if ($validation->getError('apellido')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('apellido');?>
                                    </div>}
                                    <?php }?>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" placeholder="correo electrónico"required>
                                <?php if ($validation->getError('email')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('email');?>
                                    </div>}
                                    <?php }?>
                            </div>
                            <div class="form-group">
                                <label for="localidad">Localidad</label>
                                <input type="text" class="form-control" id="localidad" name="localidad" placeholder="localidad" required>
                                <?php if ($validation->getError('localidad')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('localidad');?>
                                    </div>}
                                    <?php }?>
                            </div>
                            <div class="form-group">
                                <label for="usuario">Usuario</label>
                                <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" required>
                                <?php if ($validation->getError('usuario')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('usuario');?>
                                    </div>}
                                    <?php }?>
                            </div>
                            <div class="form-group">
                                <label for="contrasena">Contraseña</label>
                                <input type="password" class="form-control" id="contrasena" placeholder="contraseña" name="pass" required>
                                <?php if ($validation->getError('pass')) {?>
                                    <div class='alert alert-danger mt-2'>
                                        <?= $error = $validation->getError ('pass');?>
                                    </div>}
                                    <?php }?>
                            </div>
                            <input type="submit" value="guardar" class="btn btn-warning">
                            <input type="reset" value="cancelar" class="btn btn-secondary">
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>