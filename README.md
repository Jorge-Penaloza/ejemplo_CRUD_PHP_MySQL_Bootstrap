# Ejemplo CRUD con PHP, MySQL, y Bootstrap

Este repositorio presenta un sistema CRUD (Create, Read, Update, Delete) desarrollado con PHP, MySQL, JavaScript y HTML. Se ha utilizado Bootstrap para garantizar un diseño adaptativo y responsivo.

## Diseño de Prototipo

El proyecto está estructurado en varios archivos, cada uno con un propósito específico. A continuación, se presenta una descripción detallada de cada archivo:

### Tabla 1: Archivos del Proyecto

| Nombre archivo | Directorio | Descripción |
|----------------|------------|-------------|
| `index.php` | raíz | Página principal que muestra una tabla con los registros de vehículos. Ofrece opciones para consultar, insertar, modificar y eliminar datos. |
| `dB.php` | raíz | Clase que gestiona la conexión a la base de datos. Esta clase, desarrollada originalmente en Programación Avanzada 1, permite recibir datos en vectores y retornar matrices bidimensionales con los resultados de las consultas. |
| `insertar.php` | raíz | Formulario para agregar nuevos registros de vehículos. |
| `insert.php` | raíz | Procedimiento que procesa los datos del formulario `insertar.php` y los añade a la base de datos. |
| `modificar.php` | raíz | Formulario para modificar registros existentes de vehículos. |
| `update.php` | raíz | Procedimiento que actualiza los datos del formulario `modificar.php` en la base de datos. |
| `mostrar.php` | raíz | Formulario para visualizar registros de vehículos. |
| `eliminar.php` | raíz | Procedimiento que elimina registros de la tabla de vehículos mostrada en `index.php`. |
| `estilos.css` | css | Hoja de estilos que define la apariencia de la web. |
| `funciones.js` | js | Scripts que añaden funcionalidad dinámica a la página web CRUD. |

## Características Adicionales

- **Bootstrap**: Se ha utilizado Bootstrap para garantizar un diseño adaptativo y responsivo, permitiendo que la interfaz se adapte a diferentes tamaños de pantalla.
- **Documentación**: Se incluye un archivo [Jorge_Peñaloza_Control6.docx](https://github.com/Jorge-Penaloza/ejemplo_CRUD_PHP_MySQL_Bootstrap/blob/main/Jorge_Pe%C3%B1aloza_Control6.docx) que proporciona una explicación detallada de los códigos utilizados en este proyecto.

## Autor

Desarrollado por [Jorge Peñaloza](https://github.com/Jorge-Penaloza).
