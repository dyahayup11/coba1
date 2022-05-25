<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

   // ini namanya ternary (if else 1 line)

   //  jika value diisi maka variable ada datanya

   $nama = isset($_POST['nama']) ? $_POST['nama'] : '';
   $domisili = isset($_POST['domisili']) ? $_POST['domisili'] : '';
   $gender = isset($_POST['gender']) ? $_POST['gender'] : '';

   // redirect ke halaman view (view.php) dengan membawa value yang ditambahkan dari form
   // maksud code setelah tanda ? di view.php?  itu artinya url parameter
   // name=value_name&domisli=value_domisili  ... dan seterusnya
   header("Location: view.php?nama=$nama&domisili=$domisili&gender=$gender");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Form Revisi</title>
</head>

<body>
<!-- action dikosongkan karena aksi berada dalam 1 file yang sama -->
<!-- pake method post, di form tambahkan tag method="POST", kalo get make method="GET" -->
   <form action="" method="POST">
      <div>
         <label>Nama</laber><br>
            <input name="nama" type="text" placeholder="isikan nama" required>
      </div>
      <div>
         <label>domisili</label><br>
         <input name="domisili" type="text" placeholder="isikan domisili" require>
      </div>
      <div>
         <label>gender</label><br>
         <input type="radio" name="gender" value="Female"> Female <input type="radio" name="gender" value="Male"> Male
      </div>
      <div>
         <button type="submit">Submit</button>
      </div>
   </form>

</body>
</html>