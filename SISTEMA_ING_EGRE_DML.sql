INSERT INTO CENTRO(id, descripcion, telefono, direccion )
values(default, "Lavanderia Pacholi Casa Matriz", "021585120", "San Lorenzo" )

INSERT INTO CENTRO
values(default, "Lavanderia Pacholi Suc 2",  "021555369", "Asuncion" )

UPDATE CENTRO SET descripcion = "Lavanderia Pacholi Sucursal 2"
WHERE id = 2;

INSERT INTO CENTRO
values(default, "Prueba",  "0", "Asuncion" )

DELETE FROM CENTRO WHERE descripcion = "Lavanderia prueba"

--IMPORTANTISIMO
SELECT * FROM CENTRO;

SELECT descripcion FROM CENTRO;

SELECT descripcion FROM CENTRO where direccion like "Asuncion";

INSERT INTO USUARIO VALUES ("123", "German Garmendia", "098112345", 1);
INSERT INTO USUARIO VALUES ("456", "Hikaru Nakamura", "124684", 1);
INSERT INTO USUARIO VALUES ("789", "Starjuuki", "4589215", 2);

INSERT INTO CLIENTE VALUES("369", "Ibai Llanos", "096584123", "España casi Mcal Lopez", "123");

INSERT INTO CLIENTE VALUES("369", "Schumaher", "096584123", "Cambyreta", "123");
INSERT INTO CLIENTE VALUES("558", "Ayton Senna", "098514523", "Quiindy", "456");
INSERT INTO CLIENTE VALUES("789", "Verstappen", "096789652", "Capiatá", "456");
INSERT INTO CLIENTE VALUES("442", "Hamilton", "098632145", "Villa Florida", "123");
INSERT INTO CLIENTE VALUES("136", "Segio Perez", "098736251", "Encarnación", "789");


SELECT CLIENTE.nombre_apellido from CLIENTE, USUARIO
WHERE CLIENTE.usuario_id = usuario.cedula
and usuario.cedula = "123";