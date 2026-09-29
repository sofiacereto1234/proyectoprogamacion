<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="include/index3.php" method="POST">

        <label for="asignatura">asignatura</label>
        <select  id="asignatura" name="asignatura[]" multiple>
            <option value="matematicas">Matematicas</option>
            <option value="fisica">Fisica</option>
            <option value="quimica">Quimica</option>
            <option value="programacion">Programacion</option>
        </select>
        
        <br><br>

        <label for="option-2">
            <input type="checkbox" value="Manzana" id="option-2" name="frutas[]">
            Manzana
        </label>
        <label for="option-1">
            <input type="checkbox" value="uva" id="option-1" name="frutas[]">
            Uva
        </label>
        <label for="option-3">
            <input type="checkbox" value="pera" id="option-3" name="frutas[]">
            Pera
        </label>

        <br> <br> <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>