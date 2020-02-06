<?php

header("Content-type:application/json");

require_once("connect.php");

// $query = mysqli_query($conn, "select * from project");

$query = mysqli_query($conn, "select project.id, project.nama, deskripsi, tanggal_mulai, tanggal_akhir, jumlah_sprint, budget, status, persen, semester.nama as semester_id, scrummaster.nama as scrummaster_id, tim.nama as tim_id, project.created_by, project.created_at, project.updated_at from project
inner join semester on semester.id = project.semester_id
inner join scrummaster on scrummaster.id = project.scrummaster_id
inner join tim on tim.id = project.tim_id");

$response = array();

while($row = mysqli_fetch_assoc($query)){
	array_push($response,
	array(
		'id'			=> $row['id'],
		'nama'			=> $row['nama'],
		'deskripsi'		=> $row['deskripsi'],
		'tanggal_mulai'		=> $row['tanggal_mulai'],
		'tanggal_akhir'		=> $row['tanggal_akhir'],
		'jumlah_sprint'		=> $row['jumlah_sprint'],
		'budget'		=> $row['budget'],
		'status'		=> $row['status'],
		'persen'		=> $row['persen'],
		'semester_id'		=> $row['semester_id'],
		'scrummaster_id'	=> $row['scrummaster_id'],
		'tim_id'		=> $row['tim_id'],
		'created_by'		=> $row['created_by'],
		'created_at'		=> $row['created_at'],
		'updated_at'		=> $row['updated_at'],
	));
}

echo json_encode($response);

?>
