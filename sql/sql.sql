create table usuario(
	ci int primary key,
	usuario varchar(20),
	password varchar(20),
	css varchar(20),
	tipo varchar(20)
);
create table persona(
	ci int primary key,
	nomcompleto varchar(55),
	fecnac date,
	depto  varchar(2),
	FOREIGN key(ci) REFERENCES usuario(ci)
);
create table nota(
	ci int,
	sigla varchar(20),
	nota1 int,
	nota2 int,
	nota3 int,
	notafinal int,
	primary key(ci,sigla),
	FOREIGN key(ci) REFERENCES persona(ci)
	
)




INSERT INTO `usuario` (`ci`, `usuario`, `password`, `css`, `tipo`) VALUES ('111', 'aaa', '123', 'css1', 'estudiante');
INSERT INTO `usuario` (`ci`, `usuario`, `password`, `css`, `tipo`) VALUES ('222', 'bbb', '123', 'css2', 'estudiante');
INSERT INTO `usuario` (`ci`, `usuario`, `password`, `css`, `tipo`) VALUES ('333', 'ccc', '123', 'css1', 'estudiante');

INSERT INTO `persona` (`ci`, `nomcompleto`, `fecnac`, `depto`) VALUES ('111', 'juan perez lopez', '1998-04-05', '02');
INSERT INTO `persona` (`ci`, `nomcompleto`, `fecnac`, `depto`) VALUES ('333', 'miguel perez lopez', '1998-04-05', '02');
INSERT INTO `persona` (`ci`, `nomcompleto`, `fecnac`, `depto`) VALUES ('222', 'jose rodriguez hernandez', '1998-04-05', '03');

INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('111', 'inf-111', '70', '70', '70', '70');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('111', 'lab-111', '70', '70', '70', '70');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('111', 'inf-121', '65', '70', '75', '70');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('111', 'inf-131', '80', '80', '60', '75');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('111', 'inf-141', '100', '50', '75', '75');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('222', 'inf-111', '70', '70', '70', '70');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('222', 'lab-111', '70', '70', '70', '70');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('333', 'inf-121', '65', '70', '75', '70');
INSERT INTO `nota` (`ci`, `sigla`, `nota1`, `nota2`, `nota3`, `notafinal`) VALUES ('333', 'inf-131', '80', '80', '60', '75');













