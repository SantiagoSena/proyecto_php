<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"/>
    <link rel="stylesheet" href="Css/tables.css">
    <title>Ventasa</title>
</head>

<body>

    <div class="container-botones">
        <div class="boton-modal">
            <label for="btn-modal-agregar">Agregar Ventasa</label>          
        </div>            
    </div>   

    <input type="checkbox" id="btn-modal-agregar" class="checkbox-hidden">
    <div class="container-modal" id="container-modal-agregar">
        <div class="content-modal">
            <div class="tittle">
                <span>Registrar Venta</span>
            </div>   

            <form id="productoForm" action="insertar_venta.php" method="post">
                <div class="row">
                    <label>ID Venta</label>
                    <input type="text" name="id_venta" required>
                </div>

                <div class="row">
                    <label>Fecha Emisión</label>
                    <input type="date" name="fecha_emision" required>
                </div>

                <div class="row block">
                    <button class="agregarbtn" type="button" id="agregarProductoBtn">Agregar Producto</button>
                    <div class="row" id="productosContainer">
                        <!-- Aquí se mostrará el campo de producto -->
                    </div>
                </div>

                <div class="row">
                    <label>Cantidad</label>
                    <input type="number" name="cantidad" required>
                </div>

                <div class="row">
                    <label>Valor</label>
                    <input type="number" name="valor_producto" required>
                </div>

                <div class="row">
                    <label>Valor SubTotal</label>
                    <input type="number" name="valor_subtotal" required>
                </div>

                <div class="row">
                    <label>Valor Total</label>
                    <input type="number" name="valor_total" required>
                </div>

                <div class="row block">
                    <input class="btn" type="submit" value="Agregar Venta">
                </div>
            </form>                    
            <label for="btn-modal-agregar" class="cerrar-modal"></label>
            <script src="script.js"></script>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
