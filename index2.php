<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bufete de Abogados</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

<?php
// Ejemplo de diálogo de alerta en PHP
echo "<script>alert('¡Bienvenido a nuestro bufete de abogados!');</script>";

// Ejemplo de operadores de igualdad y relación
$edad = 25;
$mayoria_edad = 18;
if ($edad >= $mayoria_edad) {
    echo "<p>Eres mayor de edad.</p>";
} else {
    echo "<p>Eres menor de edad.</p>";
}

// Operador de incremento
$visitas = 0;
$visitas++;
echo "<p>Esta página ha sido visitada $visitas veces durante esta sesión.</p>";
?>

<header>
    <div class="container">
        <h1>Bufete de Abogados</h1>
        <p>Soluciones legales a su alcance</p>
    </div>
</header>
<nav class="main-nav">
    <ul>
        <li><a href="#servicios">Servicios</a></li>
        <li><a href="#equipo">Nuestro Equipo</a></li>
        <li><a href="#contacto">Contacto</a></li>
    </ul>
</nav>
<main>
    <section id="servicios" class="section">
        <h2>Servicios</h2>
        <?php
        // Uso de un bucle "for" para mostrar una lista de servicios
        $servicios = ["Asesoría Legal", "Litigios", "Derecho Corporativo", "Derecho Familiar", "Contratos y Negociaciones"];
        for ($i = 0; $i < count($servicios); $i++) {
            echo "<li>" . $servicios[$i] . "</li>";
        }
        ?>
    </section>
    <section id="equipo" class="section">
        <h2>Nuestro Equipo</h2>
        <p>Contamos con un equipo de abogados expertos en diversas áreas del derecho, comprometidos con brindarle el mejor servicio.</p>
    </section>
    <section id="contacto" class="section">
        <h2>Contacto</h2>
        <p>Teléfono: +34 123 456 789</p>
        <p>Email: contacto@bufetedeabogados.com</p>
        <p>Dirección: Calle Ejemplo, 123, Ciudad, País</p>
        <?php
        // Uso de bucle "while" para mostrar un mensaje varias veces (demostrativo)
        $contador = 1;
        while ($contador <= 3) {
            echo "<p>Mensaje $contador: Estamos aquí para ayudarte.</p>";
            $contador++;
            if ($contador > 3) {
                break; // Detenemos el bucle cuando se alcanza el número deseado
            }
        }
        ?>
    </section>
</main>
<footer>
    <p>&copy; 2024 Bufete de Abogados. Todos los derechos reservados.</p>
</footer>

</body>
</html>

