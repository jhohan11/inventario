## Sistema de inventario

Aplicación web para registrar productos y consultar las existencias disponibles en un inventario. 

## ¿Qué hace el proyecto?

- Muestra los productos almacenados en la base de datos.
- Permite registrar nuevos productos.
- Valida datos agregados.
- Indica si un producto está disponible o agotado según su cantidad.

## Tecnologías utilizadas

- **PHP** para la lógica del servidor y la generación de las vistas.
- **HTML5** para la estructura de la interfaz.
- **CSS** para los estilos visuales, ubicado en `css/estilos.css`.
- **MySQL o MariaDB** para almacenar los productos.
- **PDO de PHP** para conectar con la base de datos y ejecutar consultas preparadas.

## Requisitos

Para ejecutar el proyecto se necesita instalar:

- PHP 7.4 o una versión posterior.
- MySQL o MariaDB.
- La extensión `pdo_mysql` habilitada en PHP.
- Un servidor web, como Apache mediante XAMPP o laragon.
- heidi para visualizar la base de datos.

También se puede utilizar el servidor integrado de PHP para realizar pruebas locales.

## Instalación

1. Clona o copia este proyecto dentro de la carpeta pública de tu servidor web.

2. Inicia el servicio de **Apache** y el servicio de **MySQL** desde XAMPP.

3. abrir desde heidi mariaDB y visualizar.

4. Crea una base de datos llamada `inventario`.

5. Importa el archivo  `base_datos.sql` en la base de datos `inventario`. Este archivo crea la tabla `productos` y contiene algunos registros de ejemplo.

	Desde la consola de MySQL también puedes hacerlo con:

	```bash
	mysql -u root -p inventario < base_datos.sql
	```

## Configuración

La conexión se encuentra en `config/conexion.ejemplo.php`. La configuración predeterminada es:

```php
$servidor = 'localhost';
$baseDatos = 'inventario';
$usuario = 'TU_USUARIO';
$contrasena = 'TU_CONTRASENA';
```

## Ejecución

### Con Apache

Con Apache y MySQL iniciados, abre en el navegador:

```text
http://localhost/inventario/
```

### Con el servidor integrado de PHP

Desde la carpeta raíz del proyecto ejecuta:

```bash
php -S localhost:8000
```

Después, visita:

```
http://localhost:8000/
```


## Uso del proyecto
1. Abre la aplicación en el navegador.
2. Escribe el nombre del producto.
3. Introduce la cantidad disponible.
4. Pulsa Registrar producto`.
5. Comprueba el nuevo registro en la tabla de productos.
