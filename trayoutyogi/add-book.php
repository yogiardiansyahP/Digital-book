<?php
include "db_conn-book.php";

if (isset($_POST["submit"])) {
   $user = $_POST['user'];
   $genre = $_POST['genre'];
   

   $sql = "INSERT INTO buku (user,genre) VALUES ('$user','$genre')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: pinjam-buku.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="style.css">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

   <title>Book</title>
</head>

<body>
   

<div class="container-navbar">
        <div class="navbar"></div>
        <span  class="logo"> <a href="user.html">O-Book</a></span>
            <div class="links-navbar">
                <div class="dropdown">
                    <button class="dropbtn">Menu
                      <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-content">
                      <a href="./struktur-organisasi.html">Struktur Organisasi</a>
                      <a href="./pengumuman.html">Pengumuman</a>
                      <a href="./tata tertib.html">Tata Tertib</a>
                      <a href="./galery.html">Galery</a>
                      <a href="./faq.html">FAQ</a>
                      <a href="./berita.html">Berita</a>
                    </div>
                  </div>

                <a style="text-decoration: none; color: white;" href="index.php" class="logout">Log out</a>
            </div>
        </div>
</div>

   <div class="container">
      <div class="text-center mb-4">
         <h3>New Book</h3>
         <p class="text-muted">Confirm</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">Name:</label>
                  <input style="color: white;" type="text" class="form-control" name="user" placeholder="David">
                  <label class="form-label">Genre:</label>
                  <input style="color: white;" type="text" class="form-control" name="genre" placeholder="fiction">
            </div>
            <div>
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="admin.php" class="btn btn-danger">Cancel</a>
            </div>
         </form>
      </div>
   </div>


   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>