<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST'){
	$nama = $_POST['nama'];
	$deskripsi = $_POST['deskripsi'];
	$tanggal_mulai = $_POST['tanggal_mulai'];
	$tanggal_akhir = $_POST['tanggal_akhir'];
	$jumlah_sprint = $_POST['jumlah_sprint'];
	$budget = $_POST['budget'];
	$status = $_POST['status'];
	$persen = $_POST['persen'];
	$semester_id = $_POST['semester_id'];
	$scrummaster_id = $_POST['scrummaster_id'];
	$tim_id = $_POST['tim_id'];
	$created_by = $_POST['created_by'];

	require_once("connect.php");

	$query = "INSERT INTO project (nama, deskripsi, tanggal_mulai, tanggal_akhir, jumlah_sprint, budget, status, persen, semester_id, scrummaster_id, tim_id, created_by) VALUES ('$nama', '$deskripsi', '$tanggal_mulai', '$tanggal_akhir', '$jumlah_sprint', '$budget', '$status', '$persen', '$semester_id', '$scrummaster_id', '$tim_id', '$created_by')";

	if ( mysqli_query($conn, $query) ){
		$response['success'] = true;
		$response['message'] = "Successfully";
	} else {
		$response['success'] = false;
		$response['message'] = "Failure!";
	}
} else {
	$response['success'] = false;
	$response['message'] = "Error!";
}

echo json_encode($response);
