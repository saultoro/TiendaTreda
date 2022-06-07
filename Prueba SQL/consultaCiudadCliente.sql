
select tblcliente.cedula, CONCAT(tblcliente.primer_nombre,tblcliente.primer_apellido), tblciudad.nombre,
if(tblcliente.dias_mora BETWEEN 1 and 20, "Riesgo Bajo",if(tblcliente.dias_mora BETWEEN 21 and 25, "Riesgo Medio",if(tblcliente.dias_mora >35, "Riesgo Alto","Riesgo no identificado"))) AS riesgo
FROM tblcliente INNER JOIN tblciudad ON
tblciudad.id=tblcliente.id_ciudad
ORDER BY tblcliente.dias_mora ASC

