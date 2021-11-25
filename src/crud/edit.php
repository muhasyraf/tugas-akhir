<html>
<title>Edit</title>
    <style>
        body
        {
            background-image: url('https://initiate.alphacoders.com/download/wallpaper/824134/images4/jpg/441375230761372');
            background-repeat: no-repeat;
            background-size: cover;
        }
        div 
        {
            color:white;
        }

    </style>


<head>
  <?php
    include('../template/header.php');
    require('../../config/config_db.php');

    $id = $_GET['id'];
    $query = "SELECT * FROM film WHERE id = $id";
    $film = mysqli_query($mysqli, $query);

    if(isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $genre = $_POST['genre'];
        $tahun = $_POST['tahun'];
        $studio = $_POST['studio'];
        $sutradara = $_POST['sutradara'];

        $query = "INSERT INTO film(judul, genre, tahun, studio, sutradara) VALUES('$judul','$genre','$tahun', '$studio', '$sutradara')";

      $result = mysqli_query($mysqli, $query);
    }
  ?>

  <title>Edit User</title>
</head>
</head>

<body>
  <div style = "font-family:monaco" class="container row">
    <div class="col-8 mx-auto">
      <a class="btn btn-primary mb-4" href="../../index.php" role="button">Ke halaman utama</a>

      <h3>Edit Film</h3>
      <hr>

      <form action="" method="POST">
        <?php if(isset($result)) : ?>
        <div class="alert alert-success" role="alert">
          successfully edit user
        </div>
        <?php endif ?>
        <?php foreach($film as $films) : ?>
            <div class="form-group">
          <label for="judul">Judul film</label>
          <input type="text" name="judul" class="form-control" id="judul" placeholder="masukkan judul film"
          value="<?= $films['judul']?>"
            required>
        </div>
        <div class="form-group">
          <label for="genre">Genre</label>
          <select name="genre" class="form-control" id="genre" value="<?= $films['tahun']?>" reuired>
          <option value='default' selected='selected'>Pilih genre yang mencolok</option>
		      <option value='drama'>Drama</option>
		      <option value='komedi'>Komedi</option>
		      <option value='horor'>Horor</option>
		      <option value='petualangan'>Petualangan</option>
		      <option value='aksi'>Aksi</option>
          <option value='dokumenter'>Dokumenter</option>
		      <option value='romantis'>Romantis</option>
		      <option value='fantasi'>Fantasi</option>
		      <option value='fiksiIlmiah'>Fiksi Ilmiah</option>
		      <option value='thriller'>Thriller</option>
          <option value='misteri'>Misteri</option>
		      <option value='biografi'>Biografi</option>
		      <option value='musikal'>Musikal</option>
		      <option value='noir'>Noir</option>
	        </select>
         
        </div>
        <div class="form-group">
        <label for="tahun">Tahun rilis</label>
          <select name="tahun" class="form-control" id="tahun" placeholder="Masukan tahun rilis" required>
          <option value='default' selected='selected'>Masukan tahun liris</option>
          <?php
                for ($i=1900; $i<=2021 ; $i++) {
            ?>
            <option value="<?php echo $i; ?>">
            <?php echo $i; ?></option>
            <?php
                }
            ?>
        </select>
        </div>
        <div class="form-group">
          <label for="studio">Studio</label>
          <input type="text" name="studio" class="form-control" id="studio" placeholder="Masukkan studio film"
          value="<?= $films['studio']?>" required>
        </div>
        <div class="form-group">
          <label for="sutradara">Sutradara</label>
          <input type="text" name="sutradara" class="form-control" id="sutradara" placeholder="Masukkan sutradara film"
          value="<?= $films['sutradara']?>" required>
        </div>

        <?php endforeach ?>

        <button type="submit" name="submit" class="btn btn-outline-dark">Kirim</button>
      </form>
    </div>
  </div>

  <?php
 
    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $genre = $_POST['genre'];
        $tahun = $_POST['tahun'];
        $producer = $_POST['studio'];
        $sutradara = $_POST['sutradara'];
        
        // include database connection file
        include_once('../../config/config_db.php');
                
        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO film(judul,genre,tahun,studio,sutradara) VALUES('$judul','$genre','$tahun','$studio','$sutradara')");
        
        // Show message when user added
        echo "Data film berhasil diubah. <a href='index.php'>View Users</a>";
    }
    ?>
</body>

</html>