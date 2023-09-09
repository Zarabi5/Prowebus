sistema_tickets/
|-- assets/
|   |-- css/
|   |   |-- bootstrap.min.css
|   |   |-- main.css
|   |-- js/
|   |   |-- bootstrap.min.js
|   |   |-- jquery.min.js
|   |   |-- main.js
|   |-- images/
|
|-- includes/
|   |-- db.php
|   |-- functions.php
|   |-- header.php
|   |-- footer.php
|
|-- roles/
|   |-- admin/
|   |   |-- dashboard.php
|   |   |-- manage-tickets.php
|   |   |-- manage-users.php
|   |-- client/
|   |   |-- dashboard.php
|   |   |-- my-tickets.php
|
|-- auth/
|   |-- login.php
|   |-- register.php
|   |-- logout.php
|
|-- common/
|   |-- view-ticket.php
|   |-- reply-ticket.php
|
|-- sql/
|   |-- database.sql
|
|-- .gitignore
|-- README.md
|-- index.php



```plaintext
sistema_tickets/
|-- assets/
|   |-- css/
|   |   |-- bootstrap.min.css
|   |   |-- main.css
|   |-- js/
|   |   |-- bootstrap.min.js
|   |   |-- jquery.min.js
|   |   |-- main.js
|   |-- images/
|
|-- includes/
|   |-- db.php
|   |-- functions.php
|   |-- header.php
|   |-- footer.php
|
|-- roles/
|   |-- admin/
|   |   |-- dashboard.php
|   |   |-- manage-tickets.php
|   |   |-- manage-users.php
|   |-- client/
|   |   |-- dashboard.php
|   |   |-- my-tickets.php
|
|-- auth/
|   |-- login.php
|   |-- register.php
|   |-- logout.php
|
|-- common/
|   |-- view-ticket.php
|   |-- reply-ticket.php
|
|-- sql/
|   |-- database.sql
|
|-- .gitignore
|-- README.md
|-- index.php
```

### Descripción de carpetas y archivos

- **assets**: Contiene todos los archivos estáticos como CSS, JS e imágenes.
  
- **includes**: Contiene archivos PHP que se incluirán en múltiples archivos, como la conexión a la base de datos y funciones comunes.

- **roles**: Contiene las páginas específicas para cada rol (administrador y cliente).

- **auth**: Contiene los archivos relacionados con la autenticación (login, registro, cierre de sesión).

- **common**: Contiene páginas que son comunes entre diferentes roles, como la visualización y respuesta a tickets.

- **sql**: Contiene los archivos SQL para crear la base de datos y tablas.

- **.gitignore**: (Opcional) Para ignorar archivos que no deberían ser rastreados por Git.

- **README.md**: Documentación del proyecto.

- **index.php**: Página de inicio del proyecto.