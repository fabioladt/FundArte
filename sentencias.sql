CREATE VIEW solar_vista AS SELECT nombre, fecha_inicio, fecha_fin, imagen
  FROM evento WHERE fecha_fin >= current_date ORDER BY fecha_inicio;

CREATE VIEW cafeto_vista AS SELECT nombre, fecha_inicio, fecha_fin, imagen
  FROM exposicion WHERE fecha_fin >= current_date ORDER BY fecha_inicio;

CREATE VIEW clase_vista AS SELECT nombre, fecha_inicio, fecha_fin, imagen, 
case 
	when tipo=1 then 'Danza' 
	when tipo=2 then 'Musica'
	when tipo=3 then 'Teatro'
	when tipo=4 then 'Yoga'
	end as tipoN
  FROM clase WHERE fecha_fin >= current_date 
  ORDER BY fecha_inicio;