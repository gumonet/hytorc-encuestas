# hytorc-encuestas

- Execute ``$ docker-compose build ``
- Execute ``$ docker-compose up -d``

# Descripción de las preguntas y sus campos en la base de datos. 

`ID` Identificador del cliente  
`nombre` Nombre  
``rep_ventas`` Representante de ventas  
``correo_electronico`` Correo electrónico  
``date`` Fecha  
``tipo_encuesta`` Tipo de la encuesta  
``id_factura`` ID de la factura  

## Preguntas encuesta Servicio / Ventas ##
`ventas_p1` ¿Los equipos suministrados estuvieron de acuerdo con las especificaciones técnicas acordadas?. 
`ventas_p2` ¿Los precios permanecieron fijos durante la vigencia del contrato o acuerdo?.  
`ventas_p3` ¿Los equipos se suministraron en el plazo acordado?  
`ventas_p4` ¿Los equipos se suministraron en el lugar de entrega o ubicación solicitada?   
`ventas_p5` ¿La documentación entregada por el personal de COISA fue la requerida?  
`ventas_p6` ¿COISA se comprometió a asegurar y proteger los equipos contra algún riesgo, ante, durante y después
de la operación o entrega?  
`ventas_p7` ¿Está satisfecho con el servicio proporcionado por COISA en los equipos HYTORC?  
`ventas_p8` ¿El representante de Ventas atiende con prontitud mis necesidades?  

## Preguntas encuesta Servicios / Mantenimiento ##
`servicios_p1` ¿Tiempo de respuesta del diagnóstico de sus equipos (Cotización)?.  
`servicios_p2` ¿La cotización del Servicio fue clara, completa y sin ambigüedades?. 
`servicios_p3` ¿Cómo fue el tiempo de entrega de sus equipos?.  
`servicios_p4` Después del servicio brindado, ¿Cómo operan sus equipos?.  
`servicios_p5` ¿Cómo fue la calidad en el servicio proporcionado?.  

## Preguntas encuesta Servicio / Renta equipo ##
`renta_p1` ¿El equipo se entregó en el plazo acordado?.  
`renta_p2` ¿El Equipo Operó correctamente?.  
`renta_p3` ¿El equipo cumplía con las Especificaciones requeridas?
`renta_p4` ¿Cómo califica Nuestros servicios?

## Estructura SQL de la tabla ##

~~~
CREATE TABLE `homestead`.`registros` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `cliente_id` VARCHAR(45) NULL,
  `nombre` VARCHAR(200) NULL,
  `rep_ventas` VARCHAR(200) NULL,
  `correo_electronico` VARCHAR(200) NULL,
  `date` DATE NULL,
  `tipo_encuesta` VARCHAR(100) NULL,
  `id_factura` VARCHAR(4100) NULL,
  `ventas_p1` VARCHAR(45) NULL,
  `ventas_p2` VARCHAR(45) NULL,
  `ventas_p3` VARCHAR(45) NULL,
  `ventas_p4` VARCHAR(45) NULL,
  `ventas_p5` VARCHAR(45) NULL,
  `ventas_p6` VARCHAR(45) NULL,
  `ventas_p7` VARCHAR(45) NULL,
  `ventas_p8` VARCHAR(45) NULL,
  `servicios_p1` VARCHAR(45) NULL,
  `servicios_p2` VARCHAR(45) NULL,
  `servicios_p3` VARCHAR(45) NULL,
  `servicios_p4` VARCHAR(45) NULL,
  `servicios_p5` VARCHAR(45) NULL,
  `renta_p1` VARCHAR(45) NULL,
  `renta_p2` VARCHAR(45) NULL,
  `renta_p3` VARCHAR(45) NULL,
  `renta_p4` VARCHAR(45) NULL,
  `fecha_registro` DATETIME NULL,
  PRIMARY KEY (`id`));
~~~



