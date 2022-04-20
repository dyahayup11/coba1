<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
	<form>
		<div>
				<label>Nama</laber><br>
				<input name="nama" type="text" placeholder="isikan nama">
		</div>
		<div>
				<label>domisili</label><br>
				<input name="domisili" type="text" placeholder="isikan domisili">
		</div>
		<div>
				<label>gender</label><br>
				<input type="radio" name="gender" value="Female"> Female <input type="radio" name="gender" value="Male"> Male
		</div>
		<div>
			<button>Submit</button>
		</div>
	</form>
	
	<?php
		$nama=@$_GET['nama'];
		$domisili=@$_GET['domisili'];
		$gender=@$_GET['gender'];
			
			if($nama){
				echo "<strong>Nama :</strong>{$nama}<br>";
			}
			
			if ($domisili){
				echo "<strong>Domisili:</strong>{$domisili}<br>";
			}
			if ($gender){
				echo "<strong>Gender:</strong>{$gender}<br>";
			}
?>
	
</body>
</html>
	
 