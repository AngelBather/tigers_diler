CREATE DATABASE Diller;
USE Diller;

CREATE TABLE Usuarios(
ID Int Primary Key Auto_Increment Not Null,
Usuario Varchar(20),
Pass NVarchar(20)
);

CREATE TABLE Metodo_Pago(
ID Int Primary Key Auto_Increment Not Null,
Tipo_Pago Varchar(25) Not Null,
Codigo_Tarjeta Nvarchar(40) Not Null,
Cantidad_Gastada Nvarchar(30) Not Null
);


CREATE TABLE Captura_Compra(
ID Int Primary Key Auto_Increment Not Null,
Nombre Varchar(40),
Apellido Varchar(40),
Compras Varchar(1000)
);


CREATE TABLE Vehiculos(
 ID Int Primary Key Auto_Increment Not Null,
 Marca varchar (20),
 Modelo varchar(20),
 Precio nvarchar(10),
 Categoria varchar(20)
);

INSERT INTO Vehiculos(ID,Marca,Modelo,Precio,Categoria)
Values('','Ferrari','458 Italia','10.000.000$','Super Deportivo'),
	  ('','Mclaren','720S','8.000.000$','Super Deportivo'),
      ('','Lamborghini','Veneno','9.000.000$','Super Deportivo'),
      ('','Maserati','Gran Turismo','12.000.000$','Deportivo'),
      ('','BMW','ZL1','14.000.000$','Deportivo'),
      ('','Audi','R8','17.000.000$','Super Deportivo'),
      ('','Bugatti','Chiron','12.000.000$','Super Deportivo'),
      ('','Lamborghini','Sexto Elemento','18.500.000','Super Deportivo'),
      ('','Roll Royce','Cullinan','19.500.000','Super Deportivo');
      
      
      select * from Captura_Compra;
      select * from Usuarios;
      select * from Vehiculos;
      
	  truncate table Captura_Compra;
      truncate table Usuarios;