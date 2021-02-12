<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arreglos asociativos con AJAX</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
        .padre{
            width: 600px;
            height: 350px;
            margin: auto;
        }
        .padre div{
            width: 33.33%;
            float: left;
        }
        #resultado{
            width: 100%;
        }
    </style>
    <script>
        function visualizar() {

                    var parametros = {
                        "nombre" : $('#nombre').val(),
                        "edad" : $('#edad').val(),
                        "cedula": $('#cedula').val(),
                        "sueldo": $('#sueldo').val(),
                        "departamento": $('#departamento').val(),
                        "trabajo": $('#trabajo').val(),
                        "nombre_dos" : $('#nombre_dos').val(),
                        "edad_dos" : $('#edad_dos').val(),
                        "cedula_dos": $('#cedula_dos').val(),
                        "sueldo_dos": $('#sueldo_dos').val(),
                        "departamento_dos": $('#departamento_dos').val(),
                        "trabajo_dos": $('#trabajo_dos').val(),
                        "nombre_tres" : $('#nombre_tres').val(),
                        "edad_tres" : $('#edad_tres').val(),
                        "cedula_tres": $('#cedula_tres').val(),
                        "sueldo_tres": $('#sueldo_tres').val(),
                        "departamento_tres": $('#departamento_tres').val(),
                        "trabajo_tres": $('#trabajo_tres').val()
                    };

                    $.ajax({
                        url: "ajax.php",
                        type: "post",
                        data: parametros,
                        beforeSend: function() {
                            $("#resultado").html("Procesando, espere por favor...");
                        },
                        fail: function() {
                            $("#resultado").html("Error al realizar el calculo");
                        },
                        success: function(response) {
                            $("#resultado").html(response);
                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                            console.log(textStatus, errorThrown);
                        }
                    });
        }
    </script>
</head>
<body>
<div class="padre">
    <div>
        <h3>Empleado 1</h3>
        Nombre <br>
        <input type="text" name="nombre" id="nombre"><br>
        Edad <br>
        <input type="text" name="edad" id="edad"><br>
        Cedula <br>
        <input type="number" name="cedula" id="cedula"><br>
        Sueldo <br>
        <input type="number" name="sueldo" id="sueldo"><br>
        Departamento <br>
        <input type="text" name="departamento" id="departamento"><br>
        Trabajo <br>
        <input type="text" name="trabajo" id="trabajo"><br>
    </div>
    <div>
        <h3>Empleado 2</h3>
        Nombre <br>
        <input type="text" name="nombre_dos" id="nombre_dos"><br>
        Edad <br>
        <input type="text" name="edad_dos" id="edad_dos"><br>
        Cedula <br>
        <input type="number" name="cedula_dos" id="cedula_dos"><br>
        Sueldo <br>
        <input type="number" name="sueldo_dos" id="sueldo_dos"><br>
        Departamento <br>
        <input type="text" name="departamento_dos" id="departamento_dos"><br>
        Trabajo <br>
        <input type="text" name="trabajo_dos" id="trabajo_dos"><br>
    </div>
    <div>
        <h3>Empleado 3</h3>
        Nombre <br>
        <input type="text" name="nombre_tres" id="nombre_tres"><br>
        Edad <br>
        <input type="text" name="edad_tres" id="edad_tres"><br>
        Cedula <br>
        <input type="number" name="cedula_tres" id="cedula_tres"><br>
        Sueldo <br>
        <input type="number" name="sueldo_tres" id="sueldo_tres"><br>
        Departamento <br>
        <input type="text" name="departamento_tres" id="departamento_tres"><br>
        Trabajo <br>
        <input type="text" name="trabajo_tres" id="trabajo_tres"><br>
        <button onclick="visualizar();">Agregar</button>
    </div>
</div>

    <div id="resultado">
    </div>
</body>
</html>