<?php
	include("_connection.php");
	$querystr = "select kategorie, wert from testdaten;";
	$result = mysqli_query($conn, $querystr);
	
	class Event {};
	$events = array();

	foreach($result as $row) {
		$e = new Event();
		$e->kategorie = $row['kategorie'];
		$e->wert = $row['wert'];
		$events[] = $e;
	}
	
	echo json_encode($events);
	
?>