-- Crear la base de datos si no existe
CREATE DATABASE IF NOT EXISTS inversiones_bolsa;

-- Seleccionar la base de datos para usar
USE inversiones_bolsa;

-- Crear tabla 'inversiones'
CREATE TABLE IF NOT EXISTS inversiones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_fondo VARCHAR(255) NOT NULL,
    categoria VARCHAR(255) NOT NULL,
    valor_inversion DECIMAL(10, 2) NOT NULL,
    fecha_inversion DATE NOT NULL,
    rentabilidad_esperada DECIMAL(4, 2) NOT NULL,
    tasa_retorno_anual DECIMAL(4, 2) NULL
);

-- Insertar datos de muestra en la tabla 'inversiones'
INSERT INTO inversiones (nombre_fondo, categoria, valor_inversion, fecha_inversion, rentabilidad_esperada, tasa_retorno_anual) VALUES
('Fondo Indexado S&P 500', 'Renta Variable', 10000.00, '2022-01-15', 7.00, 7.50),
('Fondo Indexado Nasdaq 100', 'Renta Variable', 15000.00, '2022-02-20', 8.00, NULL),
('Fondo de Bonos Internacionales', 'Renta Fija', 8000.00, '2022-03-01', 4.50, 4.75),
('Fondo Indexado Europa Stoxx 50', 'Renta Variable', 12000.00, '2022-04-25', 6.50, NULL),
('Fondo Indexado Emergentes', 'Renta Variable', 5000.00, '2022-06-10', 9.00, 9.50);