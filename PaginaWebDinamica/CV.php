<!DOCTYPE html>
<html>
<head>
    <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;600;700;800&family=Quicksand&display=swap" rel="stylesheet">
    <title>Curriculum Vitae</title>
    <style>
        body
        {
            height: 200vh;
            justify-content: center;
            align-items: center;
            padding-left: 10px;
            background: linear-gradient(135deg,#B983FF,#99FEFF);
        }
        .cv-container 
        {
            background-color: #fff;
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 
        {
            font-size: 28px;
            color: #B983FF;
            border-bottom: 2px solid;
            padding-bottom: 10px;
            margin: 0 0 20px;
        }
        .section 
        {
            margin-top: 20px;
        }
        .section-title 
        {
            font-size: 24px;
            color: #555;
            margin-bottom: 10px;
        }
        pre 
        {
            white-space: pre-line;
            font-size: 16px;
            color: black;
            font-family: 'Poppins',sans-serif;
        }
        .boton 
        {
            outline: none;
            color: white;
            border: none;
            font-size: 18px;
            font-weight: 500;
            border-radius: 5px;
            letter-spacing: 1px;
            background: linear-gradient(135deg,#4facfe,#43e97b);
            margin-top: 20px;
            margin-bottom: 30px;
            margin-left: 22%;
        }
        .boton:hover 
        {
            background: linear-gradient(135deg,#4facfe,#43e97b)
        }
    </style>
</head>
<body>
    <div class="cv-container">
        <?php
        $dat_CV = file_get_contents("datos.txt");

        $cvArray = explode("\n\n", $dat_CV);
        $cont = 0;

        foreach ($cvArray as $cv) 
        {
            $cont += 1;
            if ($cont < $cv) 
            {
                echo "<h1>Curriculum Vitae</h1>";
            }
            echo "<div class='section'>";
            echo "<pre>$cv</pre>";
            echo "</div>";
        }
        ?>
    </div>
    <a class="boton" href="Dinamica.html">Regresar</a>
</body>
</html>