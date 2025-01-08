# Evaluación FactoriaBiz

- Comandos necesarios para instalar y probar el proyecto

$ composer install
$ npm install

$ copy .env.example .env

$ php artisan key:generate

$ php artisan migrate 
$ php artisan db:seed
$ php artisan db:seed --class=UserSeeder

$ php artisan serve 
$ npm run dev

- Organización de las carpetas de mi proyecto

Principalmente he hecho uso de la carpeta '/app', que contiene el código principal de la aplicación, en concreto de los controladores y modelos. 
'/database' ya que contiene todo lo relacionado con la base de datos, en ella se encuentran los archivos de migraciones, para crear o modificar tablas, los archivos de factories, para generar datos de prueba, y los seeders que insertan los datos de prueba en la base de datos.
'/resources/views'donde he creado las plantillas Blade, es decir, las vistas de la aplicacion. Dentro de esta carpeta he creado otras subcarpetas en concreto para gestionar y ver con más facilidad cada aspecto a la hora de operar con CRUD de los clientes, categorías y productos.
Y por último '/routes', que contiene el archivo 'web.php', el cual maneja las rutas de la aplicación web.

- Flujo de trabajo

La estructura de la base de datos para poder definir las tablas y sus relaciones.
Configuración Inicial de Laravel y Jetstream.
Creación de migraciones y modelos.
Desarrollo de los controladores y definir las rutas correspondientes.
Implementación de las vistas necesarias.
Poblar Datos de prueba con Seeders y Factories.


- "Crea un acceso público a tu página donde se visualicen los productos
de la misma. Un acceso público es aquel que muestra la información sin
necesidad de autenticar a un usuario."

En este ejercicio, no he podido encontrar mi error pero quería explicar como lo he intentado hacer.
Primero en el archivo 'web.php' crearía la ruta pública con esta línea de código.

Route::get('/products', [ProductController::class, 'publicIndex'])->name('products.publicIndex');

Segundo crearía el método publicIndex en el controlador ProductController. Muy parecido por no decir igual al método index. Con el único cambio de hacer el return a su vista correspondiente.
Y por último mostraría la información de los productos para usuarios no autenticados en su vista correspondiente, en un nuevo archivo llamado 'publicIndex.blade.php'