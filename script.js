const agregarProductoBtn = document.getElementById('agregarProductoBtn');
const productosContainer = document.getElementById('productosContainer');
const productoForm = document.getElementById('productoForm');
let productoCounter = 0; // Contador de productos agregados

// Agregamos un evento de clic al botón "Agregar Producto"
agregarProductoBtn.addEventListener('click', () => {
    productoCounter++; // Incrementamos el contador de productos
    const nuevoProducto = document.createElement('div');
    nuevoProducto.innerHTML = `
        <label for="id_producto${productoCounter}">ID Producto ${productoCounter}:</label>
        <input type="text" id="id_producto${productoCounter}" name="id_producto${productoCounter}" required><br>

        <label for="Producto${productoCounter}">Producto ${productoCounter}:</label>
        <input type="text" id="Producto${productoCounter}" name="Producto${productoCounter}" required><br>
    `;
    productosContainer.appendChild(nuevoProducto);
});

// Manejar el envío del formulario
productoForm.addEventListener('submit', (event) => {
    event.preventDefault(); // Prevenir el envío del formulario
    // Recopilar y mostrar los datos de todos los campos de producto
    for (let i = 1; i <= productoCounter; i++) {
        //const idProducto = document.getElementById(`id_producto${i}`).value;
        const Productos = document.getElementById(`Producto${i}`).value;
        console.log(`Producto${i}: ${Productos}`);
    }
});
