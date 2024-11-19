<DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input</title>
</head>
<body>
    <h1>Form Input</h1>
    <form method="POST">
        Nama: <input type="text" name="nama" required><br><br>
        Tanggal Lahir: <input type="date" name="tanggal_lahir" required><br><br>
        Pekerjaan: 
        <select name="pekerjaan" required>
            <option value="Karyawan">Karyawan</option>
            <option value="Desainer">Desainer</option>
            <option value="Manajer">Manajer</option>
        </select><br><br>
        <button type="submit" name="submit">Submit</button>
    </form>
    
    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $tanggal_lahir = $_POST['tanggal_lahir'];
        $pekerjaan = $_POST['pekerjaan'];

        $umur = date('Y') - date('Y', strtotime($tanggal_lahir));

        $gaji = ($pekerjaan == "Karyawan") ? 8000000 :
                (($pekerjaan == "Desainer") ? 6000000 : 12000000);

        echo "<h2>Hasil</h2>";
        echo "Nama: $nama<br>";
        echo "Umur: $umur tahun<br>";
        echo "Pekerjaan: $pekerjaan<br>";
        echo "Gaji: Rp " . number_format($gaji, 0, ',', '.');
    }
    ?>
</body>
</html>