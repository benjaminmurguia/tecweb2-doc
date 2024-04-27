   
   <?php
// Iniciar la sesión
session_start();


?>
   <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
    </style>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4 login-container">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4 class="text-center">Inicio de sesión</h4>
                    </div>
                    <div class="card-body">
                        <form action="models/procesar_login.php" method="POST">
                            <div class="form-group">
                                <label for="username">Nombre de usuario:</label>
                                <input type="text" id="username" name="username" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña:</label>
                                <input type="password" id="password" name="password" class="form-control" required>
                            </div>
                            <?php if(isset($_GET['error']) && $_GET['error'] == 1): ?>
                                <div class="alert alert-danger" role="alert">
                                    Usuario o contraseña incorrectos.
                                </div>
                            <?php endif; ?>
                            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
