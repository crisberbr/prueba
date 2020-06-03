
<?php


$conexion=mysqli_connect("localhost", "root","","theme");
if(!empty ($_POST ['name'])){
$name=$_POST['name'];
$owner=$_POST['owner'];	
$species=$_POST['species'];
$sex=$_POST['sex'];
$birth=$_POST['birth'];
$death=$_POST['death'];



mysqli_query($conexion, "INSERT INTO pet (name, owner, species, sex, birth, death) VALUES ('$name','$owner', '$species', '$sex' ,'$birth', '$death')");

}
?>
<?php

$conexion=mysqli_connect("localhost", "root","","theme");

?>
<html>
<head>
<title>PET</title>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<meta charset="utf-8">
</head>
<body>
<table class="table table-bordered">
  	
		<thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Owner</th>
      <th scope="col">Species</th>
      <th scope="col">Sex</th>
	  <th scope="col">Birth</th>
	  <th scope="col">Death</th>
    </tr>
  </thead>
<?php foreach ($conexion->query('SELECT * from pet') as $row){ ?> 
 <tbody>
  <tr>
    
	
    <td><?php echo $row['name'] ?></td>
    <td><?php echo $row['owner'] ?></td>
	<td><?php echo $row['species'] ?></td>
	<td><?php echo $row['sex'] ?></td>
	<td><?php echo $row['birth'] ?></td>
	<td><?php echo $row['death'] ?></td>
 </tr>
<?php
	}
?>
</table>
<body>