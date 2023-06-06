<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Resultados de búsqueda</title>
    <link rel="stylesheet" type="text/css" href="AccesoriosStyle.css">
    
</head>
<body>
    <h1>Resultados de búsqueda</h1>

    <?php
    // Verificar si se ha enviado el término de búsqueda
    if (isset($_GET['searchTerm'])) {
        // Obtener el término de búsqueda
        $searchTerm = $_GET['searchTerm'];

        // Realizar la lógica de búsqueda y mostrar los resultados
        // Aquí puedes usar una base de datos o una estructura de datos para buscar los productos según el término

        // Ejemplo de resultados de búsqueda
        $products = array(
            array(
                'id' => 1,
                'name' => 'Gorro acanalado tejido',
                'description' => 'Gorro tejido en punto acanalado suave con doblez.',
                'price' => 29.95,
                'image' => 'ruta-de-la-imagen-1.jpg' // Ruta de la imagen del primer producto
            ),
            array(
                'id' => 2,
                'name' => 'Bufanda',
                'description' => 'Bufanda tejida en punto fino suave con flecos en los extremos.',
                'price' => 39.95,
                'image' => 'ruta-de-la-imagen-2.jpg' // Ruta de la imagen del segundo producto
            ),
            // Agrega los demás productos aquí
            array(
                'id' => 3,
                'name' => 'Gorro de lana',
                'description' => 'Gorro tejido en punto acanalado de lana suave con doblez.',
                'price' => 54.95,
                'image' => 'ruta-de-la-imagen-3.jpg' // Ruta de la imagen del tercer producto
            ),
            array(
                'id' => 4,
                'name' => 'Bufanda acanalada',
                'description' => 'Bufanda tejida en punto acanalado suave.',
                'price' => 29.95,
                'image' => 'ruta-de-la-imagen-4.jpg' // Ruta de la imagen del cuarto producto
            ),
            // Agrega más productos según sea necesario
        );
        

        if (!empty($searchTerm)) {
            $matchingProducts = array_filter($products, function ($product) use ($searchTerm) {
                return stripos($product['name'], $searchTerm) !== false;
            });

            if (!empty($matchingProducts)) {
                echo '<ul>';

                foreach ($matchingProducts as $product) {
                    echo '<li>';
                    echo '<img src="' . $product['image'] . '" alt="' . $product['name'] . '">';
                    echo '<h3>' . $product['name'] . '</h3>';
                    echo '<p>' . $product['description'] . '</p>';
                    echo '<p>Precio: $' . $product['price'] . '</p>';
                    echo '<form method="POST" action="agregar_al_carrito.php">';
                    echo '<input type="hidden" name="product_id" value="' . $product['id'] . '">';
                    echo '<button type="submit">Agregar al carrito</button>';
                    echo '</form>';
                    echo '</li>';
                }

                echo '</ul>';
            } else {
                echo '<p>No se encontraron resultados para "' . $searchTerm . '".</p>';
            }
        } else {
            echo '<p>Ingrese un término de búsqueda.</p>';
        }
    } else {
        echo '<p>No se ha especificado un término de búsqueda.</p>';
    }
    ?>

    <footer>
        <p>Derechos de autor &copy; 2023 Accesorios para Varones. Todos los derechos reservados.</p>
    </footer>
</body>
</html>

