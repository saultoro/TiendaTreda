select tblestudios.Institucion,MAX(tblestudios.Fecha), tblpersona.CC, tblpersona.Nombre from tblestudios INNER JOIN
tblpersona ON 
tblpersona.CC=tblestudios.FKPersona
GROUP by tblpersona.CC

