Proyecto: Aplicación Web para subir archivos
Descripción

Esta aplicación web, construida con Laravel y Livewire que desarrolle siguiendo este tutorial(https://www.youtube.com/watch?v=fmbm2938Pec), permite a los usuarios:

    Registrarse: Crear una nueva cuenta de usuario.
![imagen](https://github.com/user-attachments/assets/c15ab3b1-ddd4-42b3-a7c7-ae0994100f2d)

    Iniciar sesión: Acceder a su cuenta personal.
![imagen](https://github.com/user-attachments/assets/296bd38f-7c75-4c28-80a8-034db902dfbd)

    Subir archivos: Agregar fotos y GIFs.
![imagen](https://github.com/user-attachments/assets/e29d8349-2c7e-44c5-9932-dd54a8217ba6)

    Buscar: Realizar búsquedas dentro de los archivos subidos.
![imagen](https://github.com/user-attachments/assets/feadc6dd-4308-4d5a-a5ee-9cd81820d4c4)

    Eliminar archivos: Borrar archivos previamente subidos.
![imagen](https://github.com/user-attachments/assets/b5660cad-9ee2-43d8-a928-c000e8d89e75)

    Cambiar tema: Alternar entre el modo claro y oscuro.
![imagen](https://github.com/user-attachments/assets/b3e45370-1b2b-40d5-9b4c-1679724480d2)


Tecnologías Utilizadas

    Laravel 11
    Livewire 3
    Alpine
    Tailwind - DaisyUI
    MySQL

Instalación

    Clonar el repositorio:
    Bash

    git clone https://github.com/CeciliaGarcia15/my_files_yt.git



    Instalar dependencias:
    Bash

    composer install
    npm install
    
    


    Configurar la base de datos:

    Copia el archivo .env.example a .env y configura los datos de tu base de datos.

    Generar la clave de la aplicación:
    Bash
    
    php artisan key:generate

    Ejecutar las migraciones:
    Bash
    
    php artisan migrate


    En otra pestaña de la consola
    npm run dev

    Iniciar el servidor de desarrollo:
    Bash
    
    php artisan serve

    
    Accede a la aplicación en http://127.0.0.1:8000
    

Uso

    Registro: Visita la página de registro para crear una nueva cuenta.
    Inicio de sesión: Inicia sesión con tus credenciales.
    Subir archivos: Utiliza el formulario correspondiente para seleccionar y subir archivos.
    Buscar archivos: Introduce palabras clave en el campo de búsqueda.
    Eliminar archivos: Haz clic en el botón de eliminar junto al archivo que deseas borrar.
    Cambiar tema: Utiliza el interruptor o botón para cambiar entre el modo claro y oscuro.

