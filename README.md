# hytorc-encuestas

## Requerimientos del proyecto
- Base de datos Mysql 5.6 o superior
- PHP 7.4 o superior
- Servidor Apache o Nginx

## Configuración de parametros de conexión de la base de datos  

### Configuración de la conexión a la base de datos
Se requiere modificar el archivo `includes/class-gm-Database.php` y cambiar en el siguiente fragmento de código  los parametros según nuestra conexión a la base de datos.  
~~~~
public function get_con(){
    return mysqli_connect("host", "user", "password", "database");
}
~~~~

### Configuración de la cuenta de email  
Para poder realizar envíos de emails será necesario contar con una cuenta con configuración smtp, esto evitará que nuestros correos lleguen a espam,
dicha configuración se realiza desde el archivo `includes/class-gm-mailer.php` en el siguiente fragmento de código:  
~~~~
$mail->Host = 'smtp.mailtrap.io'; // Servidor smtp
$mail->SMTPAuth = true; //Dejarlo por default
$mail->Port = 2525; //Puerto SMTP
$mail->Username = '476394cf8ad5d1'; //Correo electrónico (usuario)
$mail->Password = 'bd669d8fb53b93'; Contraseña
~~~~

## Funcionamiento de la plataforma  
Para que el formulario de inicio pueda procesar información se requiere recibir parametros mediante la url de la siguiente manera:  
`https://hytorc.monola.me/?factura=158&nombre=Angel%20Gutierrez%20Monola&rep-ventas=Juan%20Gonzales&email=gutierrez.monola@gmail.com&encuesta=ventas`  

**Donde:**  
- **https://hytorc.monola.me/** Es el dominio en donde la plataforma quedé instalada
- **factura:** Es el número de la factura del cliente
- **nombre:** Es el nombre del cliente, los espacios deben ser representados por `%20` 
- **rep-ventas:** Corresponde al nombre completo del representante de ventas. 
- **email:** Es el correo electrónico del cliente  
- **encuesta:** Es el tipo de encuesta que el cliente debe responder, este parametro solo acepta tres posibles valores: ventas, renta-equipo, mantenimiento

## Ejecutar projecto utilizando Docker
- Execute ``$ docker-compose build ``
- Execute ``$ docker-compose up -d``

## Descripción de las preguntas y sus campos en la base de datos. 

`ID` Identificador del cliente  
`nombre` Nombre  
``rep_ventas`` Representante de ventas  
``correo_electronico`` Correo electrónico  
``date`` Fecha  
``tipo_encuesta`` Tipo de la encuesta  
``id_factura`` ID de la factura  

### Preguntas encuesta Servicio / Ventas
`ventas_p1` ¿Los equipos suministrados estuvieron de acuerdo con las especificaciones técnicas acordadas?. 
`ventas_p2` ¿Los precios permanecieron fijos durante la vigencia del contrato o acuerdo?.  
`ventas_p3` ¿Los equipos se suministraron en el plazo acordado?  
`ventas_p4` ¿Los equipos se suministraron en el lugar de entrega o ubicación solicitada?   
`ventas_p5` ¿La documentación entregada por el personal de COISA fue la requerida?  
`ventas_p6` ¿COISA se comprometió a asegurar y proteger los equipos contra algún riesgo, ante, durante y después
de la operación o entrega?  
`ventas_p7` ¿Está satisfecho con el servicio proporcionado por COISA en los equipos HYTORC?  
`ventas_p8` ¿El representante de Ventas atiende con prontitud mis necesidades?  

### Preguntas encuesta Servicios / Mantenimiento ##
`servicios_p1` ¿Tiempo de respuesta del diagnóstico de sus equipos (Cotización)?.  
`servicios_p2` ¿La cotización del Servicio fue clara, completa y sin ambigüedades?. 
`servicios_p3` ¿Cómo fue el tiempo de entrega de sus equipos?.  
`servicios_p4` Después del servicio brindado, ¿Cómo operan sus equipos?.  
`servicios_p5` ¿Cómo fue la calidad en el servicio proporcionado?.  

### Preguntas encuesta Servicio / Renta equipo ##
`renta_p1` ¿El equipo se entregó en el plazo acordado?.  
`renta_p2` ¿El Equipo Operó correctamente?.  
`renta_p3` ¿El equipo cumplía con las Especificaciones requeridas?
`renta_p4` ¿Cómo califica Nuestros servicios?

## Estructura SQL de la tabla ##

~~~
CREATE TABLE `registros` (
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
  `estatus` VARCHAR(45) NULL,
  `fecha_registro` DATETIME NULL,
  PRIMARY KEY (`id`));
~~~



