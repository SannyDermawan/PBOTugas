<!DOCTYPE html>
<html>
<head>
    <title>Form Lebaran</title>
</head>
<body>

<h2>Form Data Lebaran</h2>

<form method="POST">
    Nama: <br>
    <input type="text" name="nama" required><br><br>

    Alamat: <br>
    <input type="text" name="alamat" required><br><br>

    Jumlah THR: <br>
    <input type="number" name="thr" required><br><br>

    <button type="submit" name="submit">Submit</button>
</form>

<hr>

<?php
class DataLebaran {
    public $nama;
    public $alamat;
    public $thr;

    function __construct($nama, $alamat, $thr) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->thr = $thr;
    }

    function tampilkanData() {
        return "
        Nama: $this->nama <br>
        Alamat: $this->alamat <br>
        THR: Rp " . number_format($this->thr, 0, ',', '.') . "
        ";
    }
}

if(isset($_POST['submit'])) {
    $data = new DataLebaran($_POST['nama'], $_POST['alamat'], $_POST['thr']);
    echo "<h3>Hasil Input:</h3>";
    echo $data->tampilkanData();
}
?>

</body>
</html>