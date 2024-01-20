<?php
include_once('./Clases/Estudiante.php');
include_once('./Clases/EstudianteGraduado.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estudiantes</title>
</head>
<body>
    <h1>Estudiantes</h1>
    <?php
        $estudiante1 = new Estudiante("María", "22", "2º");
        $estudiante2 = new Estudiante("Pedro", "18", "1º");
        $estudiante3 = new EstudianteGraduado("Elena", "23", "3º", "posgrado");
        $estudiante4 = new EstudianteGraduado("Pablo", "24", "3º", "doctorado");
        $estudiante5 = new Estudiante("Carlos", "20", "2º");

        $estudiante1->agregarNota(9);
        $estudiante1->agregarNota(10);
        $estudiante1->agregarNota(7);

        $estudiante2->agregarNota(5);
        $estudiante2->agregarNota(7);
        $estudiante2->agregarNota(6);

        $estudiante3->agregarNota(10);
        $estudiante3->agregarNota(8.5);
        $estudiante3->agregarNota(9);

        $estudiante4->agregarNota(7);
        $estudiante4->agregarNota(7.5);
        $estudiante4->agregarNota(8.5);
        
        echo $estudiante1;
        echo $estudiante2;
        echo $estudiante5; //prueba de que sale el mensaje de notas no registradas
    ?>
    <h1>Estudiantes Graduados</h1>
    <?php
        echo $estudiante3;
        echo $estudiante4;
    ?>
</body>
</html>