<?php
session_start();
include('dbcon.php');


if(isset($_POST['delete_btn'])){
	$id         = $_POST['id_key'];
	
	$ref_table  = "contacts/".$id;
	$deleteData = $database->getReference($ref_table)->remove();
	if($deleteData){
		$_SESSION['status'] = "Data Delete Successfully";
		header("Location: index.php");
	}else{
		$_SESSION['status'] = "Data Not Delete";
		header("Location: index.php");
	}
}

if(isset($_POST['update_data'])){
	$id         = $_POST['id'];
	$firstname 	= $_POST['firstname'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$phone 		= $_POST['phone'];

	$updateData  = [
		'firstname' => $firstname,
		'lastname'  => $lastname,
		'email'     => $email,
		'phone'     => $phone,

	];


	$ref_table = "contacts/".$id;
	$updatequery = $database->getReference($ref_table)->update($updateData);
	if($updatequery){
		$_SESSION['status'] = "Data Update Successfully";
		header("Location: index.php");
	}else{
		$_SESSION['status'] = "Data Not Updateed";
		header("Location: index.php");
	}
}

if(isset($_POST['save_data'])){
	$firstname 	= $_POST['firstname'];
	$lastname 	= $_POST['lastname'];
	$email 		= $_POST['email'];
	$phone 		= $_POST['phone'];


	$postData  = [
		'firstname' => $firstname,
		'lastname'  => $lastname,
		'email'     => $email,
		'phone'     => $phone,

	];
	$ref_table = "contacts";
	$postRef = $database->getReference($ref_table)->push($postData);

	if($postRef){
		$_SESSION['status'] = "Data Inserted Successfully";
		header("Location: add-contacts.php");
	}else{
		$_SESSION['status'] = "Data Not Inserted";
		header("Location: add-contacts.php");
	}
}




?>