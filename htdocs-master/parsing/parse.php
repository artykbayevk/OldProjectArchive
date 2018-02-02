<?php 
	$conn = mysqli_connect("localhost","root","","lip");

	if (!$conn) {
    	die("Connection failed: " . mysqli_connect_error());
	}
	$sql = "SELECT * FROM car_mark";
	$result = mysqli_query($conn, $sql);

	public HttpRequest::__construct([string $url[, int $request_method = HTTP_METH_GET[, array $options]]]);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
	    while($row = mysqli_fetch_assoc($result)) {
	        $data = 
	        	array(
	        		'carMark_id' => $row['id_car_mark'],
	        		'name' => $row['name'],
	        		'name_rus' => $row['name_rus']
	        	);

	        $http = new HttpRequest("http://localhost:300/api/", HttpRequest::METH_POST);
	        $http->setOptions(array(
   				'timeout' => 10,
    			'redirect' => 4
			));
	        $http->addPostFields($data);
	        $response = $http->send();
	        //echo json_encode($data);
	        //echo "id: " . $row["id_car_mark"]. " - Name: " . $row["name"]. " " . $row["id_car_type"]. "<br>";
	    }
	} else {
    	echo "0 results";
	}

	mysqli_close($conn);

?>