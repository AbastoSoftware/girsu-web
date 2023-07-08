# Manual de Usuario - Instalación y Actualización de la Web
## Instalación

### Apache:
Para la documentación visita el [sitio web oficial](https://httpd.apache.org/docs/2.4/es/install.html)

Instala un servidor web local: Puedes utilizar Apache, Nginx u otro servidor web compatible con PHP. 
Para instalar Apache en Ubuntu utilizando el siguiente comando en la terminal:

```bash
sudo apt update
sudo apt install apache2
```
Una vez instalado, puedes iniciar el servidor web Apache utilizando:

```bash
sudo systemctl start apache2
```
## Configura PHP 
Asegúrate de tener PHP instalado en tu máquina local. Puedes instalar PHP en Xubuntu utilizando el siguiente comando en la terminal:

```bash
sudo apt install php
```
Verifica la instalación de PHP ejecutando el comando php --version en la terminal. Deberías ver la información de la versión de PHP.

### Instalar sendmail 
Instala la librería sendmail de php, utilizada en el formulario de contacto de la web.

```bash
sudo apt install sendmail
```

## Descargar el código fuente de la web desde el repositorio

Clona el repositorio en el directorio correspondiente, utilizando el siguiente comando. En el caso de Apache, el directorio raíz del servidor web suele ser /var/www/html.

```bash
git clone https://github.com/AbastoSoftware/girsu-web.git
```

## Instalar dependencias:

Navega hasta el directorio raíz de la web y ejecuta el siguiente comando para instalar las dependencias:

```bash
npm install package.json
```

### Configuración de Apache:

Configura Apache para que apunte al directorio raíz de la web.
Asegúrate de tener los permisos adecuados para que Apache pueda acceder a los archivos y directorios.

## Actualización

### Obtener los últimos cambios:
Navega hasta el directorio raíz de la web y ejecuta el siguiente comando para obtener los últimos cambios del repositorio:

```bash
git pull origin master
```

### Actualizar dependencias:

Ejecuta el siguiente comando para actualizar las dependencias de la web:

```bash
npm update
```

## Construir la web:

Utiliza el siguiente comando para construir la web utilizando Gulp:
```bash
sudo gulp build
```

## Reiniciar Apache:

Reinicia Apache para aplicar los cambios:

```bash
sudo service apache2 restart
```

Con estos pasos, podrás instalar la web desde cero en un servidor con Apache y actualizarla cuando haya cambios en el repositorio. Asegúrate de seguir las instrucciones con atención y adaptarlas a tu entorno específico.
Ante cualquier duda comunicarse con soporte@abastosoftware.ar