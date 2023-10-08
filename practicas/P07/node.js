const express = require("express");
const mysql = require("mysql");
const bodyParser = require("body-parser");

const app = express();
const port = 3000;

app.use(bodyParser.json());

const db = mysql.createConnection({
    host: "localhost",
    user: "root",
    password: "Edg401193",
    database: "p07"
});

db.connect(err => {
    if (err) {
        console.error("Error al conectar a la base de datos MySQL: " + err.message);
    } else {
        console.log("Conexión a MySQL exitosa");
    }
});

app.post("/guardar_producto", (req, res) => {
    const { nombre, marca, modelo, precio, detalles, unidades, imagen } = req.body;

    // Realiza la inserción en la base de datos aquí utilizando el objeto 'db'

    // Después de insertar, puedes enviar una respuesta de éxito o error
    // res.status(200).send("Producto guardado correctamente");
    // res.status(500).send("Error al guardar el producto");
});

app.listen(port, () => {
    console.log(`Servidor escuchando en el puerto ${port}`);
});
