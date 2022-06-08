<html>   

<head>   
<title>Guardamos los datos en la base de datos el producto de la tienda</title>   
</head>   

<body>   
<?php   

// Recibimos por POST los datos procedentes del formulario   

$sku = $_POST["sku"];   
$descripcion = $_POST["descripcion"];   
$valor = $_POST["valor"]; 
$Tiendas = $_POST["Tiendas"]; 
$Producto = $_POST["Producto"]; 
//$fecha = date("d-m-Y");   

// Abrimos la conexion a la base de datos   
include("abre_conexion.php");   

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$_GRABAR_SQL = "INSERT INTO $tblproducto (Tiendas, Producto,SKU,Nombre,Descripcion,Valor) VALUES ('$Tiendas','$Producto', '$sku','$descripcion','$valor')";   
mysql_query($_GRABAR_SQL);  

// Cerramos la conexion a la base de datos   
include("cierra_conexion.php");   

// Confirmamos que el registro ha sido insertado con exito   

echo "   
<p>Los datos han sido guardados con exito.</p>   

<p><a href='javascript:history.go(-1)'>VOLVER ATRÁS</a></p>   
";   
?>   
</body>   

</html>  