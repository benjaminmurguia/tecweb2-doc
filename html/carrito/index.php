<?php
// Iniciar o reanudar la sesión
session_start();

// Función para añadir un producto al carrito
function agregarAlCarrito($id, $cantidad) {
    if (!isset($_SESSION['carrito'])) {
        $_SESSION['carrito'] = array();
    }
    if (isset($_SESSION['carrito'][$id])) {
        $_SESSION['carrito'][$id] += $cantidad;
    } else {
        $_SESSION['carrito'][$id] = $cantidad;
    }
}

// Función para eliminar un producto del carrito
function eliminarDelCarrito($id) {
    if (isset($_SESSION['carrito'][$id])) {
        unset($_SESSION['carrito'][$id]);
    }
}

// Función para vaciar el carrito
function vaciarCarrito() {
    $_SESSION['carrito'] = array();
}

// Procesar acciones del usuario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] == 'agregar') {
        agregarAlCarrito($_POST['id'], $_POST['cantidad']);
    } elseif ($_POST['action'] == 'eliminar') {
        eliminarDelCarrito($_POST['id']);
    } elseif ($_POST['action'] == 'vaciar') {
        vaciarCarrito();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Compra y Venta</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
        }
        .container {
            display: flex;
            justify-content: space-between;
            margin: 20px;
        }
        .productos,
        .carrito {
            flex: 1;
            margin-right: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 10px;
            margin-bottom: 5px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        form {
            display: inline;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <header>
        <h1>Sistema de Compra y Venta</h1>
    </header>
    <div class="container">
        <div class="productos">
            <h2>Productos Disponibles</h2>
            <ul>
                <li>
                    Producto 1 - $10
                    <form method="post">
                        <input type="hidden" name="id" value="1">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="action" value="agregar">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </li>
                <li>
                    Producto 2 - $20
                    <form method="post">
                        <input type="hidden" name="id" value="2">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="action" value="agregar">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </li>
                <li>
                    Producto 3 - $30
                    <form method="post">
                        <input type="hidden" name="id" value="3">
                        <input type="hidden" name="cantidad" value="1">
                        <input type="hidden" name="action" value="agregar">
                        <button type="submit">Agregar al carrito</button>
                    </form>
                </li>
            </ul>
        </div>
        <div class="carrito">
            <h2>Carrito de Compras</h2>
            <ul>
                <?php if (!empty($_SESSION['carrito'])): ?>
                    <?php foreach ($_SESSION['carrito'] as $id => $cantidad): ?>
                        <li>
                            Producto <?php echo $id; ?> - Cantidad: <?php echo $cantidad; ?>
                            <form method="post">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                                <input type="hidden" name="action" value="eliminar">
                                <button type="submit">Eliminar del carrito</button>
                            </form>
                        </li>
                    <?php endforeach; ?>
                <?php else: ?>
                    <li>No hay productos en el carrito</li>
                <?php endif; ?>
            </ul>
            <form method="post">
                <input type="hidden" name="action" value="vaciar">
                <button type="submit">Vaciar carrito</button>
            </form>
        </div>
    </div>
</body>
</html>