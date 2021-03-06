CREATE TABLE Materiales(
  Clave NUMERIC(5),
  Descripcion VARCHAR(50),
  Costo NUMERIC(8,2)
);

CREATE TABLE Provedores(
  RFC NUMERIC(5),
  RazonSocial VARCHAR(50)
);

CREATE TABLE Proyectos(
  Numero NUMERIC(5),
  Denominacion VARCHAR(50)
);

CREATE TABLE Entregan(
  Clave NUMERIC(5),
  RFC NUMERIC(5),
  Numero NUMERIC(5),
  Fecha DATETIME,
  Cantidad NUMERIC(8,2)
);