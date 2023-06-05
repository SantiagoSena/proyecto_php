<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Vista/Css/domicilios.css">
    <title>Domicilio ASAGO</title>
</head>
<body>
    <div class="app">
        <header class="header">
            <div class="imagen_logo">
                <a href="index.php">
                    <img src="imagenes/logo_empresa.png" alt="Logo" width="70" height="70" class="d-inline-block align-text-top">
                </a>
            </div>
            <div class="logo">ASAGO</div>   
        </header>
        <div class="navigation">
            <div class="inicio"><a href="index.php">Inicio</a></div>
        </div>
        <div class="main">
            <div class="form">
                <div class="title">Datos personales</div>
                <div>
                    <form>
                        <div class="caja">
                            <label for="Nombres">Nombres</label>
                            <input type="text" name="Nombres" id="Nombres" required>
                        </div>
                        <div class="caja">
                            <label for="Apellidos">Apellidos</label>
                            <input type="text" name="Apellidos" id="Apellidos" required>
                        </div>
                        <div class="caja">
                            <label for="Tipo de documento">Tipo de documento</label>
                            <select>
                                <option value="">Seleccione tipo documento</option>
                                <option value="CC">CC</option>
                                <option value="CE">CE</option>
                                <option value="Passport">Passport</option>
                            </select>
                        </div>
                        <div class="caja">
                            <label for="Numero de documento">Numero de documento</label>
                            <input type="number" name="Numero de documento" id="Numero de documento" required>
                        </div>
                        <div class="caja">
                            <label for="Correo">Correo</label>
                            <input type="email" name="Correo" id="Correo" required>
                        </div>
                        <div class="caja">
                            <label for="Celular">Celular</label>
                            <input type="tel" name="Celular" id="Celular" required>
                        </div>
                </div>
            </div>
            <div class="receipt">
                <div class="title">Resumen del pedido</div>
                <div class="value-table">
                    <div class="value">
                        <div class="name">Subtotal</div>
                        <div class="value_amount">$50.000</div>
                    </div>
                    <div class="value">
                        <div class="name">Envío</div>
                        <div class="value_amount">$5.000</div>
                    </div>
                    <div class="value">
                        <div class="name">Total a pagar</div>
                        <div class="value_amount">$55.000</div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="resume">
            <div class="total">
                <div class="total-title">Total</div>
                <div>$55.000</div>
            </div>
            <button type="submit">Pagar</button>
        </footer>
    </form>
    </div>
</body>
</html>