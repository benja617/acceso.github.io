const mysql = require('mysql');

// Crear una conexión con la base de datos
const connection = mysql.createConnection({
  host: 'localhost',
  username: 'root',
  password: '',
  database: 'agenda'
});

// Función para validar los datos
function validarDatos(datos) {
  // Validar que todos los campos requeridos estén presentes
  if (!datos.user || !datos.password) {
    return false;
  }

  // Validar el tipo de dato de cada campo
  if (typeof datos.user !== 'string' || typeof datos.password !== 'string') {
    return false;
  }

  // Validar que la edad sea un número positivo
  if (datos.user < 0) {
    return false;
  }

  // Validar cualquier otra regla de validación necesaria

  return true;
}

// Ejemplo de uso
const datosUsuario = {
  rut: '12345678',
  clave: '123456789',
};

if (validarDatos(datosUsuario)) {
  // Los datos son válidos, realizar la inserción en la base de datos
  connection.query('INSERT INTO usuarios SET ?', datosUsuario, (error, results) => {
    if (error) {
      console.error('Error al insertar en la base de datos:', error);
    } else {
      console.log('Datos insertados correctamente');
    }
  });
} else {
  console.error('Los datos no son válidos');
}

// Cerrar la conexión a la base de datos al terminar
connection.end();
