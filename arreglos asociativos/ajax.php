<?php
    if(isset($_POST)){
        $empleados=[
            [
            'Nombre'=>$_POST['nombre'],
            'Edad'=>$_POST['edad'],
            'Cedula'=>$_POST['cedula'],
            'Sueldo'=>$_POST['sueldo'],
            'Departamento'=>$_POST['departamento'],
            'Trabajo'=>$_POST['trabajo']
            ],
            [
                'Nombre'=>$_POST['nombre_dos'],
                'Edad'=>$_POST['edad_dos'],
                'Cedula'=>$_POST['cedula_dos'],
                'Sueldo'=>$_POST['sueldo_dos'],
                'Departamento'=>$_POST['departamento_dos'],
                'Trabajo'=>$_POST['trabajo_dos']
            ],
            [
                'Nombre'=>$_POST['nombre_tres'],
                'Edad'=>$_POST['edad_tres'],
                'Cedula'=>$_POST['cedula_tres'],
                'Sueldo'=>$_POST['sueldo_tres'],
                'Departamento'=>$_POST['departamento_tres'],
                'Trabajo'=>$_POST['trabajo_tres']
            ]
        ];
        echo '<h1>Viendo datos:</h1>';
        foreach ($empleados as $empleado){
            echo 'El nombre del empleado es:'. $empleado['Nombre'].'<br>';
            echo 'La edad del empleado es:'. $empleado['Edad'].'<br>';
            echo 'La cedula del empleado es:'. $empleado['Cedula'].'<br>';
            echo 'El sueldo del empleado es de: $'. $empleado['Sueldo'].'<br>';
            echo 'El departamento del empleado queda en:'. $empleado['Departamento'].'<br>';
            echo 'El trabajo del empleado queda en:'. $empleado['Trabajo'].'<br>';
            echo '<hr>';
        }

    }
?>
