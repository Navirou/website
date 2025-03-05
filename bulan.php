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
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kontak.html">Kontak</a>
              </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Bulan</a>
              </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="segitiga.php">Segitiga</a>
              </li>
                    <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="kubus.php">Kubus</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

    <!-- isi -->
     <div class="container-header">
        <h1 class="cv">Bulan</h1>
        <br>
     </div>

     <div class="container-content">
        <img class="img-content" src="5eb4db6a846b2.jpg">
        <br><br>
     </div>
     <center>
      <br><br>
    <form action="#" method="post">
      Pilih Angka 1-12 : <br><input type="number" name="angka">
      <br>
      <input type="submit" value="Kirim">
      <input type="reset" value="Reset">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka[] = $_POST['angka'];
      if ($_POST['angka'] == 1) {
        echo "Bulan Januari";
        } elseif ($_POST['angka'] == 2) {
        echo "Bulan Februari";
        } elseif ($_POST['angka'] == 3) {
          echo "Bulan Maret";
        } elseif ($_POST['angka'] == 4) {
          echo "Bulan April";
        } elseif ($_POST['angka'] == 5) {
          echo "Bulan Mei";
        } elseif ($_POST['angka'] == 6) {
          echo "Bulan Juni";
        } elseif ($_POST['angka'] == 7) {
          echo "Bulan Juli";
        } elseif ($_POST['angka'] == 8) {
          echo "Bulan Agustus";
        } elseif ($_POST['angka'] == 9) {
          echo "Bulan September";
        } elseif ($_POST['angka'] == 10) {
          echo "Bulan Oktober";
        } elseif ($_POST['angka'] == 11) {
          echo "Bulan November";
        } elseif ($_POST['angka'] == 12) {
          echo "Bulan Desember";
        } elseif (empty($_POST['angka'])) {
          echo "Pilih Angka 1-12";
        } else {
          echo "Pilih angka yang sesuai";}
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