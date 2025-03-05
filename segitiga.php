<!doctype html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Santosa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
  </head>
  
  <body>
    <!-- nav -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
          <a class="navbar-brand">Ahmad Santosa</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kontak.html">Kontak</a>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bulan.php">Bulan</a>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Segitiga</a>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kubus.php">Kubus</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- isi -->
     <div class="container-header">
        <h1>Segitiga</h1>
        <br>
     </div>

     <div class="container-content">
        <img class="img-content" src="triangle-line-black-icon-png_281642.jpg">
     </div>
    <center>
      <form action="#" method="post">
      <br><br>
      <tr>
        <td>
          mau alasnya berapa cm : <input type="number" name="alas"><br>
        </td>
        <td>
          mau tingginya berapa cm : <input type="number" name="tinggi"><br>
        </td>
      </tr>
      <input type="submit" value="Kirim">
      <input type="reset" value="Reset">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $luas = ($alas * $tinggi) / 2;
    echo "Lsegitiga = 1/2 x $alas x $tinggi = $luas cm^2";
    }
    ?>
    </center>
    

     <!-- footer -->
     <footer class: ="container-footer">
      <div>
        <p class="mb-0">&copy;2025</p>
      </div>
     </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  
</html>