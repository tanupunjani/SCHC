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
				$sql = "insert into images (name,image) values ('$name','$image')";
				$result = mysqli_query($conn, $sql);
				
			}

			function displayimage() {

				$conn = mysqli_connect("localhost", "Admin", "WestH1ll", "photos");
				$sql = "select * from images where id=(select max(id) from images)";
				$result = mysqli_query($conn, $sql);

				if ($row = mysqli_fetch_row($result))
				{

					echo '<img height="300px" width="300px" src="data:image;base64,'.$row[2].' ">';
				}
				mysqli_close($conn);
			}

?>