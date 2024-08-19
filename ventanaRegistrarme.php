<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row align-middle">
            <div class="col-4 mx-auto formulario" style="margin: 100px;">
                <form method="POST">
                    <h1 style="text-align: center;">CREAR CUENTA</h1>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Correo electronico</label>
                        <input type="email" class="form-control" id="exampleInputEmail1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Confirmar contraseña</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3 d-grid gap-2 col-8 mx-auto">
                        <button class="btn btn-primary" type="submit">REGISTRAR</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>