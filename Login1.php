<?php
// Mensaje de bienvenida al sistema.

echo "Bienvenido al sistema.\n";

// Solicitamos al usuario y clave para iniciar sesión.

$usuario = readline("Por favor, ingrese su usuario:\n");
$clave = readline("Por favor, ingrese su clave:\n");

// Declaramos un array para almacenar los datos del personal.


$personal = [];

// Verificamos las credenciales de inicio de sesión.

if ($usuario == "David" && $clave == "David321") {
    // Preguntamos cuántos empleados desea registrar.
    $cantidad = readline("¿Cuántos empleados desea registrar?:\n");

    // Registramos los empleados usando un bucle for.
    for ($i = 0; $i < $cantidad; $i++) {
        echo "Empleado " . ($i + 1) . ":\n";
        $nombreEmpleado = readline("Nombre: ");
        $identificacion = readline("Identificación (DNI): ");
        $altura = readline("Altura: ");
        $edadEmpleado = readline("Edad: ");
        $sexo = readline("Sexo (M o F): ");
        $masa = readline("Peso (kg): ");
        $esFumador = readline("¿Es fumador? (si o no): ");

        // Almacenamos los datos del empleado en un array asociativo.

        $datosEmpleado = [
            'nombre' => $nombreEmpleado,
            'dni' => $identificacion,
            'altura' => $altura,
            'edad' => $edadEmpleado,
            'sexo' => $sexo,
            'peso' => $masa,
            'fumador' => $esFumador,
        ];

        // Añadimos el empleado al array de personal.

        $personal[] = $datosEmpleado;
    }

    // Solicitamos el nombre y DNI del empleado a buscar.

    $nombreBusqueda = readline("Ingrese el nombre del empleado que desea buscar: ");
    $dniBusqueda = readline("Ingrese el DNI del empleado que desea buscar: ");

    // Bandera para determinar si encontramos al empleado.

    $empleadoHallado = false;

    // Recorremos el array de personal para buscar coincidencias.

    foreach ($personal as $empleado) {
        if ($empleado['nombre'] == $nombreBusqueda && $empleado['dni'] == $dniBusqueda) {

            // Mostramos los datos del empleado encontrado.
            
            echo "Nombre: " . $empleado['nombre'] . "\n";
            echo "Identificación: " . $empleado['dni'] . "\n";
            echo "Peso: " . $empleado['peso'] . "\n";
            echo "Edad: " . $empleado['edad'] . "\n";
            echo "Altura: " . $empleado['altura'] . "\n";
            echo "Sexo: " . $empleado['sexo'] . "\n";
            echo "¿Es fumador?: " . $empleado['fumador'] . "\n";
            $empleadoHallado = true;
            break; // Salimos del ciclo foreach una vez encontrado el empleado.

        }
    }

    // Si no se encontró al empleado, mostramos un mensaje.

    if (!$empleadoHallado) {

        echo "El empleado no fue encontrado.\n";
    }
} else {
    // Mensaje de error si las credenciales son incorrectas.

    echo "Credenciales incorrectas. Por favor, verifique su usuario y clave.\n";
}
?>
