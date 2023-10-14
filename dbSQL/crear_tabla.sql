CREATE TABLE `concesionario`.`autos` 
( 
    `matricula` VARCHAR(10) NOT NULL , 
    `serial_motor` VARCHAR(20) NOT NULL , 
    `serial_carroceria` VARCHAR(30) NOT NULL , 
    `marca` VARCHAR(20) NOT NULL , 
    `modelo` VARCHAR(20) NOT NULL , 
    `anio` INT(10) NOT NULL , 
    `color` VARCHAR(15) NOT NULL , 
    `precio` DECIMAL(14,2) NOT NULL , 
    PRIMARY KEY (`matricula`(10))
) ENGINE = InnoDB;