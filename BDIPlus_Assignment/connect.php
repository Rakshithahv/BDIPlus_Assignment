<?php
$conn = mysqli_connect("localhost","root"," ","db_connect");

$FIRST_NAME = $_POST['FIRST_NAME'];

$LAST_NAME = $_POST['LAST_NAME'];
$CONTACT.NO = $_POST['CONTACT.NO'];



$sql = "INSERT INTO 'Data' ('SL.NO', 'fldFIRST_NAME, 'fldLAST_NAME', 'fldCONTACT.NO', ) VALUES ('0', '$txtFirst_Name', '$txtLast_name', '$txtContact.no')";

// insert in database 
$rs = mysqli_query($conn, $sql);

if($rs)
{
	echo "Contact Records Inserted";
}


?>         
