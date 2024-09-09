<!doctype html>
<?php
include 'koneksi.php';
$id = "";
$judul = "";
$pengarang = "";
$penerbit = "";
$kategori = "";
// $gambar = $data['gambar'];
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $query = "SELECT * FROM tb_buku WHERE id='$id'";
    $sql = mysqli_query($konek, $query);
    $data = mysqli_fetch_array($sql);
    $judul = $data['judul'];
    $pengarang = $data['pengarang'];
    $penerbit = $data['penerbit'];
    $kategori = $data['kategori'];
    $gambar = $data['gambar'];
}
?>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Data Buku</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand">Data Buku</a>
            </div>
        </nav>

        <!-- Typography -->
        <figure class="text-center mt-5">
            <blockquote class="blockquote">
                <p>Data Buku yang Tersedia</p>
            </blockquote>
            <figcaption class="blockquote-footer">
                <cite title="Source Title">Kelola Data Buku</cite>
            </figcaption>
        </figure>

        <!-- Form Control -->
        <form action="proses.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?= $id; ?>">
            <div class="mb-3 row">
                <label for="judul" class="col-sm-2 col-form-label">Judul</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="judul" name="judul" value="<?= $judul ?>"
                        placeholder="Masukkan Judul Buku">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="pengarang" class="col-sm-2 col-form-label">Pengarang</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="pengarang" name="pengarang" value="<?= $pengarang ?>"
                        placeholder="Masukkan Nama Pengarang">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="penerbit" class="col-sm-2 col-form-label">Penerbit</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?= $penerbit ?>"
                        placeholder="Masukkan Nama Penerbit">
                </div>
            </div>

            <div class="mb-3 row">
                <label for="kategori" class="col-sm-2 col-form-label">Kategori</label>
                <div class="col-sm-10">
                    <select name="kategori" id="kategori" class="form-control">
                        <option value="Umum" <?php if ($kategori == "Umum") echo "selected"; ?>>Umum</option>
                        <option value="Komputer" <?php if ($kategori == "Komputer") echo "selected"; ?>>Komputer
                        </option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
                <div class="col-sm-10">
                    <input type="file" class="form-control" id="gambar" name="gambar">
                </div>
            </div>

            <div class="mb-3 row">
                <?php
                if (isset($_GET['edit'])) {
                    echo "<button type='submit' class='btn btn-primary' name='btnProses' value='edit'>Simpan Perubahan</button>";
                } else {
                    echo "<button type='submit' class='btn btn-primary' name='btnProses' value='tambah'>Tambah Data</button>";
                }
                ?>

            </div>
        </form>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>