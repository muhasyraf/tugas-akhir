<html>

<title>Create</title>
    <style>
        body
        {
            background-image: url('https://initiate.alphacoders.com/download/wallpaper/824134/images4/jpg/441375230761372');
            background-repeat: no-repeat;
            background-size: cover;
        }
        h3 {
          color: white;
        }
       .form-group {
         color: white;
       }
        select {
          background-color: black;
        }

    </style>

<head>
  <?php
    include('../template/header.php');
    require('../../config/config_db.php');

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['submit'])) {
        $judul = $_POST['judul'];
        $genre = $_POST['genre'];
        $tahun = $_POST['tahun'];
        $studio = $_POST['studio'];
        $sutradara = $_POST['sutradara'];

        $query = "INSERT INTO film(judul, genre, tahun, studio, sutradara) VALUES('$judul','$genre','$tahun', '$studio', '$sutradara')";
                
        // Insert user data into table
        $result = mysqli_query($mysqli, $query );
    }
  ?>
    
    <body>
  <div style = "font-family:monaco" class="container row">
    <div class="col-8 mx-auto">
      <a class="btn btn-dark mb-4" href="../../index.php" role="button">Kembali ke halaman utama</a>
      <h3>Tambah Film</h3>
      <hr>

      <form action="" method="POST">
        <?php if(isset($result)) : ?>
        <div class="alert alert-success" role="alert">
          Daftar telah berhasil ditambah
        </div>
        <?php endif ?>

        <div class="form-group">
          <label for="judul">Judul film</label>
          <input type="text" name="judul" class="form-control" id="judul" placeholder="masukkan judul film"
            required>
        </div>
        <div class="form-group">
          <label for="genre">Genre</label>
          <select name="genre" class="form-control" id="genre" required>
          <option value='default' selected='selected'>Pilih genre utama</option>
		      <option value='Drama'>Drama</option>
		      <option value='Komedi'>Komedi</option>
		      <option value='Horor'>Horor</option>
		      <option value='Petualangan'>Petualangan</option>
		      <option value='Aksi'>Aksi</option>
          <option value='Dokumenter'>Dokumenter</option>
		      <option value='Romantis'>Romantis</option>
		      <option value='Fantasi'>Fantasi</option>
		      <option value='Fiksi Ilmiah'>Fiksi Ilmiah</option>
		      <option value='Thriller'>Thriller</option>
          <option value='Misteri'>Misteri</option>
		      <option value='Biografi'>Biografi</option>
		      <option value='Musikal'>Musikal</option>
		      <option value='Noir'>Noir</option>
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
            required>
        </div>
        <div class="form-group">
          <label for="sutradara">Sutradara</label>
          <input type="text" name="sutradara" class="form-control" id="sutradara" placeholder="Masukkan sutradara film"
            required>
        </div>

        <button type="submit" name="submit" class="btn btn-dark">Kirim</button>
      </form>
    </div>
  </div>
</body>

</head>
</head>

</html>