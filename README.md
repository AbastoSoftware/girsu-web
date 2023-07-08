# Manual de Usuario - Instalación y Actualización de la Web
## Instalación

### Apache:
Instala Apache en tu servidor siguiendo los pasos adecuados para tu sistema operativo. 
Para la documentación visita el [sitio web oficial](https://httpd.apache.org/docs/2.4/es/install.html)

### Descargar la web:

Clona el repositorio de la web desde GitHub utilizando el siguiente comando:

bash:

    git clone https://github.com/AbastoSoftware/girsu-web.git

## Instalar dependencias:

Navega hasta el directorio raíz de la web y ejecuta el siguiente comando para instalar las dependencias:

        npm install package.json

### Configuración de Apache:

Configura Apache para que apunte al directorio raíz de la web.
        Asegúrate de tener los permisos adecuados para que Apache pueda acceder a los archivos y directorios.

## Actualización

### Obtener los últimos cambios:
Navega hasta el directorio raíz de la web y ejecuta el siguiente comando para obtener los últimos cambios del repositorio:

    git pull origin master

### Actualizar dependencias:

Ejecuta el siguiente comando para actualizar las dependencias de la web:

    npm update

## Construir la web:

Utiliza el siguiente comando para construir la web utilizando Gulp:

    sudo gulp build

## Reiniciar Apache:

Reinicia Apache para aplicar los cambios:

        sudo service apache2 restart

Con estos pasos, podrás instalar la web desde cero en un servidor con Apache y actualizarla cuando haya cambios en el repositorio. Asegúrate de seguir las instrucciones con atención y adaptarlas a tu entorno específico.
Ante cualquier duda comunicarse con soporte@abastosoftware.ar