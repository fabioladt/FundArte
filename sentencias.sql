CREATE VIEW solar_vista AS SELECT nombre, fecha_inicio, fecha_fin, imagen
  FROM evento WHERE fecha_fin >= current_date ORDER BY fecha_inicio;

CREATE VIEW cafeto_vista AS SELECT nombre, fecha_inicio, fecha_fin, imagen
  FROM exposicion WHERE fecha_fin >= current_date ORDER BY fecha_inicio;

CREATE VIEW cafeto_vista AS SELECT nombre, fecha_inicio, fecha_fin, imagen
  FROM exposicion WHERE fecha_fin >= current_date ORDER BY fecha_inicio;