<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include_once "inc/nav.php"; ?>
    <h1>Pagina Principal</h1>
    <br>
    <?php $nombre = $_POST['nombre']; ?>
    <?php $asignatura = $_POST['asignatura'];  ?>
    <?php $frutas = $_POST['frutas'];  ?>
    <?php echo $nombre . " - " . $asignatura . " - " . $frutas; ?> 


    <?php require_once "inc/footer.php"; ?>
    
</body>
</html>

