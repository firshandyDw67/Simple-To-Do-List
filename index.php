<?php
include 'koneksi.php';
$data = query("SELECT * FROM list");

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>To Do List</title>
  <link rel="stylesheet" href="style.css?v2">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>
<body>
  <div class="tema">
    <img src="icon/moon.png" id="icon">
  </div>
  

  <div class="container">
    <div class="judul">
      <h1>To-Do List App</h1>
    </div>
    <div class="card"> 
      <form action="tambah_aksi.php" method="post">
        <input type="text" name="list" placeholder="Add To-Do">
        <input type="submit" name="tambah" value="Add">
      </form>
      <div class="list">
        <?php foreach($data as $d) : ?>
        <ol>
          <li>
            <div class="aksi">
                  <input type="checkbox" class="checkbox">
                  <a href="hapus.php?id=<?php echo $d['id']; ?>">&#10006;</a>
            </div>
            <p class="text"><?php echo $d['pesan']; ?></p>
          </li>
        </ol>
        <?php endforeach; ?>
      </div>
    </div>
  </div>

  <footer>
    <p>Made with <i class="bi bi-heart-fill love"></i> by Shandy</p>
    <p><a href="instagram.com/firshndydw67_/"><i class="bi bi-instagram"></i> firshndydw67_</a></p>
  </footer>
  <script src="script.js?v2"></script>
</body>
</html>