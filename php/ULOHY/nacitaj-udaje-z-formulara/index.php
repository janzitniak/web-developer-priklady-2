<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <title>Formulár na prijatie do zamestnania</title>
</head>
<body>
<form action="spracuj-formular.php" method="POST">
    <label for="meno">Zadaj meno študenta:</label>
    <input type="text" name="meno" id="meno"><br>
    Zadaj dátum narodenia:
    <input type="date" name="datum"><br>
    Zadaj nástup do zamestnania:
    <input type="text" name="nastup"><br>
    Zadaj známku z maturitnej skúšky:
    <input type="number" name="znamka" step="0.1"><br>
    <input type="submit" value="Odoslať">
</form>
</body>
</html>