<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <link href="styleD.css" rel="stylesheet">
    <title>Registro Curriculum Vitae</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        $name=$_POST['complete_name'];
        $exp=$_POST['EL'];
        $form=$_POST['forma'];
        $idiot=$_POST['idi'];
        $ap=$_POST['aptitut'];
        $ha=$_POST['habilitys'];

        $dat_CV = "Nombre: $name\nExperiencia: $exp\nFormacion: $form\nIdiomas: $idiot\nAptitudes: $ap\nHabilidades: $ha\n\n";

        file_put_contents("datos.txt", $dat_CV, FILE_APPEND);
    }
    ?>
        <div class="button2">
            <a href="Dinamica.html">Regresar</a>
        </div>
        <div class="button2">
            <a href="CV.php">Ver Curriculum</a>
        </div>
</body>
</html>