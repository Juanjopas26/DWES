DROP TABLE IF EXISTS departamentos CASCADE;
DROP TABLE IF EXISTS empleados CASCADE;

CREATE TABLE departamentos (
    id              BIGSERIAL       PRIMARY KEY,
    codigo          VARCHAR(2)      NOT NULL UNIQUE,
    denominacion    VARCHAR(255)    NOT NULL,
    localidad       VARCHAR(255)    
);

CREATE TABLE empleados (
    id              BIGSERIAL       PRIMARY KEY,
    numero          VARCHAR(2)      NOT NULL UNIQUE,
    nombre          VARCHAR(255)    NOT NULL,
    apellidos       VARCHAR(255)    NOT NULL,
    departamento_id int             NOT NULL,

CONSTRAINT fk_departamentoid FOREIGN KEY (departamento_id) REFERENCES departamentos(id)
);



-----------

INSERT INTO departamentos (codigo, denominacion, localidad)
VALUES  ('10', 'Informatica', 'Sanlúcar'),
        ('20', 'Administrativo', NULL),
        ('30', 'Matemáticas', 'Chipiona');


INSERT INTO empleados (numero, nombre, apellidos, departamento_id)
VALUES  ('3', 'Juan José', 'Pascualvaca Velázquez', '1'),
        ('5', 'Victor Manuel', 'Camacho Galina', '2'),
        ('8', 'Eduardo', 'Sumariva Salgado', '3');

