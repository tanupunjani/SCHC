<?php
			
		if(!empty($_FILES)) {
			$image = addslashes($_FILES['file']['tmp_name']);
			$name = addslashes($_FILES['file']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
			saveimage($name, $image);

		} displayimage();

		function saveimage($name, $image)
			{
				$conn = mysqli_connect("localhost", "Admin", "WestH1ll", "photos");
				$sql = "insert into aboutus1 (name,image) values ('$name','$image')";
				$result = mysqli_query($conn, $sql);
				
			}

?>