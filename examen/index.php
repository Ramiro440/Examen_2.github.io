<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Inicido de sesión</title>
</head>

<body class="d-flex justify-content-center vh-100 align-items-center">
    <form action="lib/login.php" method="POST">

        <div class="d-flex justify-content-center ">
            <h1>Cuidad</h1>
            <input type="city" name="city" id="city" class="form-control">
        </div>
        
        <div>
        <select class="form-select" aria-label="Default select example">
            <option selected>Cancún</option>
            <option value="1">PLaya del Carmen</option>
            <option value="2">Mérida</option>
            
        </select>
        <div class="d-flex justify-content-center ">
            <input type="submit" value="Consultar" Class="btn btn-primary">
        </div>
    </form>
</body>
</html>