<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Ejemplo de Formulario de Alta</title>
    </head>
    <body>
        <form action="datos.php" method="POST">
            Nombre: <input type="text" name="nombre"><br/>
            Edad: <input type="number" name="edad"><br/>
            Ciudad <select name="ciudad"><br/>
                <option>Barcelona</option>
                <option>Girona</option>
                <option>Lleida</option>
                <option>Tarragona</option>
            </select>
            <br/>
            Sexo: 
            <input type="radio" name="sexo" value="hombe">
            <input type="radio" name="sexo" value="mujer">
            <input type="submit" name="enviar" value="Enviar datos">
        </form>
    </body>
</html>
