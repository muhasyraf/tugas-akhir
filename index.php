<?php
// Create database connection using config file
require("./config/config_db.php");

// Fetch all users data from database
$query = "SELECT * FROM film ORDER BY created_at DESC";
$film = mysqli_query($mysqli, $query);
?>

<!doctype html>
<html lang="en">

<head>
    <?php
    include('./src/template/header.php');
  ?>

    <title>Home - Users</title>
    <style>
        body
        {
            background-image: url('https://i.pinimg.com/originals/cd/8d/17/cd8d17c8391461fce0ae00ea802f11bb.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

</html>

<body>
    <div class="container row">
        <div style = "font-family:monaco" class="col-20 mx-auto">
            <a class="btn btn-dark" href="./src/crud/create.php" role="button">Buat daftar film baru</a>


            <?php if(isset($_GET['delete'])) : ?>
            <div class="alert alert-success" role="alert">
                daftar telah berhasil dihapus
            </div>
            <?php endif ?>
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Judul Film</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Tahun Rilis</th>
                        <th scope="col">Studio</th>
                        <th scope="col">Sutradara</th>
                    </tr>
                </thead>                    <tbody>
                    <?php foreach ($film as $key => $films) :?>
                    <tr>
                        <th scope="row"><?php echo $key+1?>.</th>
                        <td><?php echo $films['judul']?></td>
                        <td><?php echo $films['genre']?></td>
                        <td><?php echo $films['tahun']?></td>
                        <td><?php echo $films['studio']?></td>
                        <td><?php echo $films['sutradara']?></td>
                        <td>
                            <a class="btn btn-outline-light" href="./src/crud/edit.php?id=<?= $films['id']?>"
                                role=" button">Edit</a> <a class="btn btn-outline-danger"
                                href="./src/crud/delete.php?id=<?= $films['id']?>" role="button"
                                onclick="return confirm('Yakin nih mau dihapus?');">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
</body>