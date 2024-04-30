<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proses Simpan Data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: background-color: #642B73;  
            background: -webkit-linear-gradient(to right, #C6426E, #642B73);  
            background: linear-gradient(to right, #C6426E, #642B73); 
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            width: 400px;
            padding: 70px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            color: #49243E;
            margin-bottom: 20px;
            font-size: 25px;
        }
        p {
            margin-bottom: 20px;
        }
        button {
            padding: 15px 20px;
            background-color: #49243E;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 15px;

        }
        button:hover {
            background-color: #704264;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Proses Simpan Data</h2>
        <?php include 'koneksi.php';

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            $nama = $_POST['nama'];
            $alamat = $_POST['alamat'];
            $tempat_tanggal_lahir = $_POST['tempat_tanggal_lahir'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $usia = $_POST['usia'];

            $sql = "INSERT INTO siswa (nama, alamat, tempat_tanggal_lahir, jenis_kelamin, agama, usia) 
                    VALUES ('$nama', '$alamat', '$tempat_tanggal_lahir', '$jenis_kelamin', '$agama', '$usia')";

            if (mysqli_query($koneksi, $sql)) {
                echo "<p>Data berhasil disimpan.</p>"; 
                echo "<a href='index.php'><button>Kembali ke Menu</button></a>";
            } else {
                echo "<p>Error: " . $sql . "<br>" . mysqli_error($koneksi) . "</p>"; 
            }

            mysqli_close($koneksi);
        }
        ?>
    </div>
</body>
</html>
