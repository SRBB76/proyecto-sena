create database lcrapidas;	

use lcrapidas;


create table usuarios(
id_usuarios int primary key auto_increment not null,
nombre varchar(50) not null,
email varchar(50) not null,
ndu varchar(100) not null,
cdu varchar(100) not null
);


create table cliente_domicilio (
id_cliente_domicilio int primary key auto_increment not null,
nombre varchar(50),		
apellido varchar(50),		
direccion varchar(50),		
movil varchar(10) not null,	
email varchar(50),	
cedula int,
tipo_comida varchar(20) not null,
tipo_bebida varchar(20) not null,
tipo_pago varchar(20) not null,
comentarios varchar(1000)
);	

create table cliente_local (
id_cliente_local int primary key auto_increment not null,
nombre varchar(50) not null,		
apellido varchar(50),
tipo_comida varchar(20) not null,
tipo_bebida varchar(20),
tipo_pago varchar(20) not null
);

create table contacto (
id_contacto int primary key auto_increment not null,
nombre varchar(50) not null,
apellido varchar(50) not null,
email varchar(50) not null,
asunto varchar(250) not null,
comentarios varchar(1000) not null
);

create table tipo_pago(
id_tipo_pago int primary key auto_increment not null,
descripcion varchar(50) not null
);
		
create table departamento(
id_departamento int primary key auto_increment not null,
tipo varchar(10) not null,
funcion varchar(30) not null
);

create table jefe(
id_jefe int primary key auto_increment not null,
jefe varchar(30) not null
);

create table productos(
id_producto int primary key auto_increment not null,
producto varchar(50),
precio int not null,
tipo varchar(20)
);

create table empleado(
id_empleado int primary key auto_increment not null,
id_departamento int not null,
id_jefe int not null,
nombre varchar(20) not null,
apellido varchar(20) not null,
cedula int not null,
direccion varchar(50),
sexo char(1),
edad int,
movil varchar(10) not null,
email varchar(50) not null,
funcion varchar(20) not null,
constraint fk_id_departamento foreign key (id_departamento) references departamento(id_departamento),
constraint fk_id_jefe foreign key (id_jefe) references jefe(id_jefe)
);


create table pedido_local (
id_pedido_local int primary key auto_increment not null,
id_cliente_local int,
id_tipo_pago int,
id_empleado int,
foreign key (id_cliente_local) references cliente_local(id_cliente_local),
foreign key (id_tipo_pago) references tipo_pago(id_tipo_pago),
foreign key (id_empleado) references empleado(id_empleado)
);

create table pedido_domicilio (
id_pedido_domicilio int auto_increment not null,
id_cliente_domicilio int,
id_tipo_pago int,
id_empleado int,
primary key (id_pedido_domicilio),
constraint fk_id_cliente_domicilio foreign key (id_cliente_domicilio) references cliente_domicilio(id_cliente_domicilio),
constraint fk_id_tipo_pago foreign key (id_tipo_pago) references tipo_pago(id_tipo_pago),
constraint fk_id_empleado foreign key (id_empleado) references empleado(id_empleado)
);

create table detalle_pedido_local (
id_detalle_pedido_local int primary key auto_increment not null,
id_cliente_local int,
id_producto int,
foreign key(id_cliente_local) references cliente_local(id_cliente_local),
foreign key(id_producto) references productos(id_producto)
);

create table detalle_pedido_domicilio (
id_detalle_pedido_domicilio int primary key auto_increment not null,
id_cliente_domicilio int,
id_producto int,
foreign key(id_cliente_domicilio) references cliente_domicilio(id_cliente_domicilio),
foreign key(id_producto) references productos(id_producto)
);




insert into tipo_pago(
descripcion
)

values
('Efectivo'),
('Tarjeta debito'),
('Tarjeta credito'),
('Daviplata'),
('Nequi'),
('Movii'),
('Cheque'),
('Cripto')
;

	
insert into departamento(
tipo,
funcion
)

values 
('Interior','Atención adentro del local'),
('Exterior','Atención afuera del local')
;

insert into jefe(
jefe
)

values(
'Juan Sebastian Osorio Franco'),
('Diego Alejandro Forero'
);


insert into empleado (
id_departamento,
id_jefe,
nombre,
apellido,
cedula,
direccion,
sexo,
edad,
movil,
email,
funcion
)

values 
	(1,1,'Estewil', 'Quesada',5283, 'Cr 25 A No. 56-59','M',20,3205561944,'rijorib437@outlook.com', 'Cajero'),
	(1,1,'Julian', 'Romero', 1151,'Cl 31 No. 41-09','M',26,3133012189, 'drooggemaakten@gmail.com','Contador'),
	(1,1,'Patricia', 'Alvear', 4627, 'Cr 46A No. 81-52','F',34,3215696705,'Lumblut40@gmail.com','Cocinero'),
	(1,1,'Ivonne', 'Juliette', 3885,'Cl 44 No. 3 E-33','F',28,3239898344,'fmedabbesej@outlook.com', 'Cocinero'),
	(1,1,'July','Pulido', 1153,'Cr 25A No. 1-31','F',22,3015152429, 'nahmed_wahed121y@outlook.com', 'Cocinero'),
	(1,1,'Gabriel','Nieto', 1043,'Cr 49 No. 63-53','M',19, 3042140742, 'fruandubeuxr@yahoo.es.com',	'Cocinero'),
	(2,2,'Camilo','Jimenez', 1008, 'Cl 22 No. 92-346', 'M', 30, 3433856622,	'saibharathdas98y@outlook.com',	'Marketing'),
	(2,2, 'Pablo','Uribe',1016, 'Cr 29 No. 26-68', 'M', 18, 3517694376,	'amedtel@gmail.com', 'Repartidor'),
	(2,2, 'Oscar', 'Ulloa', 1298, 'Av. 3 n35-61', 'M', 21, 3034633234,	'tedammmmfh@outlook.com', 'Repartidor'),
	(2,2, 'Karen', 'Pulido',	2846, 'Cr 42 B No. 373 C-53', 'F', 22, 3242408989,	'xanas-wolff@gmail.com', 'Repartidor')
	;

insert into productos(
producto,
precio,
tipo
)

values
('pizza',15000, 'tipo_comida'),
('pizza_champiñones',20000, 'tipo_comida'),
('pizza_criolla', 22000, 'tipo_comida'),
('pollo_apanado', 25000, 'tipo_comida'),
('pollo_asado', 20000, 'tipo_comida'),
('pollo_agridulce', 22000, 'tipo_comida'),
('hamburguesa_1_carne', 5000, 'tipo_comida'),
('hamburguesa_2_carne', 10000, 'tipo_comida'),
('hamburguesa_4_carne', 15000, 'tipo_comida'),
('salchipapa_peq', 4000, 'tipo_comida'),
('salchipapa_med', 10000, 'tipo_comida'),
('salchipapa_gra', 20000, 'tipo_comida'),
('sprite', 4000, 'tipo_bebida'),
('coca_cola', 4000, 'tipo_bebida'),
('pepsi', 4000, 'tipo_bebida'),
('colombiana', 4000, 'tipo_bebida'),
('aguila', 2500, 'tipo_bebida'),
('andina', 2500, 'tipo_bebida'),
('poker', 2500, 'tipo_bebida'),
('jugo_natural', 5000, 'tipo_bebida'),
('jugo_leche', 6000, 'tipo_bebida'),
('cola_pola', 3500, 'tipo_bebida')
;


insert into cliente_local(
	nombre, 
	apellido, 
	tipo_comida, 
	tipo_bebida, 
	tipo_pago
	) 

values 
	('Juan','Franco','pizza','sprite',8),
	('Johan','Dominguez','pollo-agridulce','pepsi',1),
	('Catalina','Sepulveda','salchipapa_med','coca_cola',5),
	('Robert', 'Rodriguez','salchipapa_med','jugo_natural',2),
	('Adriana','Monterroza','salchipapa_gra','jugo_leche',7),
	('Alexander','Carvajal','pollo_apanado','colombiana',3),
	('Marcela','Rey','pizza_champiñones','cola_pola',4),
	('Liliana','Cruz','pizza_champiñones',null,8),
	('Felipe','Monroy','pollo-agridulce','aguila',6),
	('Catalina','Acero','pollo_asado','andina',1),
	('Patricia','Mahecha','hamburguesa_1_carne',null,2),
	('Lisseth','Blanco','hamburguesa_4_carne','pepsi',3),
	('Maria','Rocha','pizza',null,1),
	('Brigite','Polanco','pollo_agridulce','coca_cola',1),
	('Villamizar','Aristizabal','hamburguesa_1_carne',null,1)
	;


insert into pedido_local(
	id_cliente_local,
	id_tipo_pago, 
	id_empleado
	)

values
(1,8,1),
(2,1,10),
(3,5,3),
(4,2,1),
(5,7,4),
(6,3,4),
(7,4,3),
(8,8,6),
(9,6,6),
(10,1,1),
(11,2,9),
(12,3,10),
(13,1,4),
(14,1,3),
(15,1,5
);


insert into detalle_pedido_local(
id_cliente_local,
id_producto
)

values(
 1, 1),
(1, 13),
(2, 6),
(2, 15),
(3, 11),
(3, 14),
(4, 11),
(4, 20),
(5, 12),
(5, 21),
(6, 4),
(6, 16),
(7, 2),
(7, 14),
(8, 2),
(8, null),
(9, 6),
(9, 17),
(10, 5),
(10, 18),
(11, 7),
(11, null),
(12, 9),
(12, 15),
(13, 1),
(14, 6),
(14, 14),
(15, 7),
(15, null);


insert into pedido_domicilio(
id_cliente_domicilio,
id_tipo_pago, 
id_empleado
	)

values
(1,8,10);


insert into detalle_pedido_domicilio(
id_cliente_domicilio,
id_producto
)

values(
 1, 4),
(1, 21);



alter table cliente_local
add Email varchar(50);

alter table empleado
add lugar_de_nacimiento varchar(30);

alter table empleado 
drop column lugar_de_nacimiento;

alter table cliente_local
drop column Email;

alter table cliente_local
add factura int;

alter table cliente_local
drop column factura;


describe cliente_local;
describe cliente_domicilio;
describe tipo_pago;
describe departamento;
describe jefe;
describe empleado;
describe productos;
describe detalle_pedido_local;
describe detalle_pedido_domicilio;
describe pedido_local;
describe pedido_domicilio;
describe usuarios;


select * from cliente_local;
select * from cliente_domicilio;
select * from tipo_pago;
select * from departamento;
select * from jefe;
select * from empleado;
select * from productos;
select * from detalle_pedido_local;
select * from detalle_pedido_domicilio;
select * from pedido_local;
select * from pedido_domicilio;
select * from usuarios;


select * from productos
where Tipo <> 'tipo_bebida';

select * from productos
where Tipo <> 'Comer';


select * from cliente_local
where nombre like '%a%';


select * from empleado
where sexo not like 'M%';

select edad from empleado
where edad in (20,21,22);

select * from productos 
where precio between 4000 and 6000
order by precio desc;

select * from departamento
where id_departamento not in (1);


select
id_cliente_local as Cliente,   
id_tipo_pago as 'Tipo de Pago', 
id_empleado as Empleado 
from pedido_local 
order by Empleado;



select pd.id_cliente_domicilio, dpd.id_producto
from pedido_domicilio pd 
join detalle_pedido_domicilio dpd
on dpd.id_cliente_domicilio = pd.id_cliente_domicilio;


select pl.id_cliente_local, t.descripcion
from pedido_local pl
join tipo_pago t 
on pl.id_tipo_pago = t.id_tipo_pago
order by pl.id_cliente_local desc;

select 
c.nombre as 'Nombre del Cliente',
c.apellido as "Apellido del Cliente",
e.nombre as "Nombre del Empleado",
dpl.id_producto as 'ID del Producto'
from ((( pedido_local p
join empleado e on e.id_empleado = p.id_empleado)
join cliente_local c on c.id_cliente_local = p.id_cliente_local)
join detalle_pedido_local dpl on dpl.id_cliente_local = p.id_cliente_local)
order by c.nombre desc;



select e.nombre
from empleado e;

select last_insert_id();

select id_cliente_local, nombre
from cliente_local 
order by id_cliente_local limit 5;

select nombre
from empleado 
where id_jefe = 2
union 
select id_jefe
from jefe;

select producto, min(precio) as 'minimo a maximo'
from productos 
group by precio;


select producto, count(*)
from productos 
where precio < 10000
group by precio;


select min(precio), p.id_producto
from productos p
group by producto
having count(precio) < 10000
order by count(precio);


select id_producto, precio,
case 
when precio > 15000 then 'El precio es mayor a 15000'
when precio < 10000 then 'El precio es menor a 10000'
else 'el precio es 15000 o es 10000'
end as Precios
from productos;


update cliente 
set nombre = 'Juan Alberto', cedula = 4177
where id_cliente = 1;

update empleado
set id_jefe = 0
where edad >= 25;

delete from productos
where precio > 4500;


select * from productos; 


create view empleado_publico as
select id_empleado, nombre, apellido, movil
from empleado;

select * from empleado_publico;



select * 
into outfile 'e:/ tabla_producto.txt'
from productos;

select * 
into outfile 'e:/ tabla_empleado.txt'
from empleado;

select * 
into outfile 'e:/ tabla_pedido_local.txt'
from pedido_local;

select * 
into outfile 'e:/ tabla_departamento.txt'
from departamento;

select * 
into outfile 'e:/ tabla_tipo_pago.txt'
from tipo_pago;

select * 
into outfile 'e:/ tabla_empleado.txt'
fields terminated by 'Aqui termina'
optionally enclosed by '-'
lines starting by 'Aqui inicia'
from empleado;

