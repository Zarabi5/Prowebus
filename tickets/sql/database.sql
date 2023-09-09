-- Tabla Cliente
CREATE TABLE cliente (
    id_cliente INT PRIMARY KEY AUTO_INCREMENT,
    nombre_cliente VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255)
);

-- Tabla Administrador
CREATE TABLE administrador (
    id_administrador INT PRIMARY KEY AUTO_INCREMENT,
    nombre_administrador VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    id_area INT,
    FOREIGN KEY (id_area) REFERENCES area(id_area)
);

-- Tabla Area
CREATE TABLE area (
    id_area INT PRIMARY KEY AUTO_INCREMENT,
    nombre_area VARCHAR(255)
);

-- Tabla Nivel
CREATE TABLE nivel (
    id_nivel INT PRIMARY KEY AUTO_INCREMENT,
    nombre_nivel VARCHAR(255)
);

-- Tabla Estatus
CREATE TABLE estatus (
    id_estatus INT PRIMARY KEY AUTO_INCREMENT,
    nombre_estatus VARCHAR(255)
);

-- Tabla Ticket
CREATE TABLE ticket (
    id_ticket INT PRIMARY KEY AUTO_INCREMENT,
    id_cliente INT,
    id_administrador INT,
    id_area INT,
    incidencia TEXT,
    id_nivel INT,
    id_estatus INT,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    fecha_cerrado DATETIME,
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente),
    FOREIGN KEY (id_administrador) REFERENCES administrador(id_administrador),
    FOREIGN KEY (id_area) REFERENCES area(id_area),
    FOREIGN KEY (id_nivel) REFERENCES nivel(id_nivel),
    FOREIGN KEY (id_estatus) REFERENCES estatus(id_estatus)
);

-- Tabla Comentario
CREATE TABLE comentario (
    id_comentario INT PRIMARY KEY AUTO_INCREMENT,
    id_ticket INT,
    comentario TEXT,
    fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_ticket) REFERENCES ticket(id_ticket)
);