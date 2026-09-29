<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="include/index.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre">
        
        <br>

        <label for="asignatura">asignatura</label>
        <select name="asignatura" id="asignatura">
            <option value="matematicas">Matematicas</option>
            <option value="fisica">Fisica</option>
            <option value="quimica">Quimica</option>
            <option value="programacion">Programacion</option>
        </select>
        
        <br><br>

        <label for="option-1">
            <input type="checkbox" value="Manzana" id="option-1" name="frutas">
            Manzana
        </label>

        <br> <br> <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>