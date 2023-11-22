<?php
include "db_conn-book.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>book</title>
    <link rel="stylesheet" href="style.css">
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
    <?php
    if (isset($_GET["msg"])) {
      $msg = $_GET["msg"];
      echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
      ' . $msg . '
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    ?>
    <a href="add-book.php" class="btn btn-dark mb-3">Add Book</a>

    <table class="table table-hover text-center">
      <thead class="table-dark">
        <tr>
          <th style="color: white; " scope="col">ID</th>
          <th style="color: white; " scope="col">User</th>
          <th style="color: white; " scope="col">Genre</th>
        </tr>
      </thead>
      <tbody>
        <?php
        

          
          $sql = "SELECT * FROM `buku`";
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row["id"] ?></td>
            <td><?php echo $row["user"] ?></td>
            <td><?php echo $row["genre"] ?></td>
          </tr>
        <?php
        }
        ?>
      </tbody>
    </table>
  </div>

</body>
</html>