# Sistema de Tickets para Gestión de Incidencias

## Tecnologías Utilizadas

- PHP
- MySQL
- Bootstrap

## Características y Funcionalidades

### Control de Accesos

- Registro/Login para Administradores y Clientes.

### Roles de Usuarios

- Administradores
- Clientes

### Niveles de Incidencias

- Baja
- Media
- Alta
- Urgente

## Dashboards

### Dashboard para Administradores

- Ver tickets asignados.
- Ver tickets cerrados.
- Ver tickets pendientes.

### Dashboard para Clientes

- Ver tickets enviados.
- Ver tickets respondidos.
- Ver tickets cerrados.

### Pagina para Responder a Tickets

- Administradores y clientes pueden responder a tickets.

---

## Estructura de Base de Datos

### Tablas

1. `cliente`
    - `id_cliente`: Identificador único para cada cliente.
    - `nombre_cliente`: Nombre del cliente.
    - `email`: Correo electrónico del cliente.
    - `password`: Contraseña del cliente.

2. `administrador`
    - `id_administrador`: Identificador único para cada administrador.
    - `nombre_administrador`: Nombre del administrador.
    - `email`: Correo electrónico del administrador.
    - `password`: Contraseña del administrador.
    - `id_area`: Área a la que pertenece el administrador.

3. `area`
    - `id_area`: Identificador único para cada área.
    - `nombre_area`: Nombre de la área.

4. `nivel`
    - `id_nivel`: Identificador único para cada nivel de incidencia.
    - `nombre_nivel`: Nombre del nivel de incidencia (Baja, Media, Alta, Urgente).

5. `estatus`
    - `id_estatus`: Identificador único para cada estado del ticket.
    - `nombre_estatus`: Nombre del estado del ticket (Abierto, Proceso, Pausado, Cerrado).

6. `ticket`
    - `id_ticket`: Identificador único para cada ticket.
    - `id_cliente`: Cliente que creó el ticket.
    - `id_administrador`: Administrador asignado al ticket.
    - `id_area`: Área a la que se asignó el ticket.
    - `incidencia`: Descripción de la incidencia.
    - `id_nivel`: Nivel de urgencia de la incidencia.
    - `id_estatus`: Estado actual del ticket.
    - `fecha_creacion`: Fecha en que se creó el ticket.
    - `fecha_cerrado`: Fecha en que se cerró el ticket.

7. `comentario`
    - `id_comentario`: Identificador único para cada comentario.
    - `id_ticket`: Ticket al que está asociado el comentario.
    - `comentario`: Texto del comentario.
    - `fecha_creacion`: Fecha en que se creó el comentario.

### Relaciones

- Un `cliente` puede tener múltiples `tickets`, pero cada `ticket` pertenece a un único `cliente`.
- Un `administrador` puede gestionar múltiples `tickets`, pero cada `ticket` puede ser gestionado por un solo `administrador`.
- Cada `ticket` puede tener múltiples `comentarios`, pero cada `comentario` pertenece a un único `ticket`.
- Cada `ticket` pertenece a una `área`, `nivel` y `estatus` específicos.