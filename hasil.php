<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: background-color: background-color: #642B73;  
            background: -webkit-linear-gradient(to right, #C6426E, #642B73);  
            background: linear-gradient(to right, #C6426E, #642B73); 
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
            background-color: #fff;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #49243E
;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #fff;
        }
        .container {
            text-align: center;
            margin-top: 20px;
        }
        h2 {
            color: #fff;
            margin-bottom: 20px;
            font-size: 25px;
        }
        .btn {
            background-color: #49243E;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background-color: #704264;
        }
    </style>
</head>
<body>
    <h2 style="text-align:center;">Hasil Biodata</h2>
    <?php
    include 'koneksi.php';

    $sql = "SELECT * FROM siswa";
    $result = $koneksi->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Tempat Tanggal Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Agama</th>
                <th>Usia</th>
            </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['no']."</td>";
            echo "<td>".$row['nama']."</td>";
            echo "<td>".$row['alamat']."</td>";
            echo "<td>".$row['tempat_tanggal_lahir']."</td>";
            echo "<td>".$row['jenis_kelamin']."</td>";
            echo "<td>".$row['agama']."</td>";
            echo "<td>".$row['usia']."</td>"; 
    }
    echo "</table>"; 
}
    $koneksi->close();
    ?>
    <div class="container">
        <a href="index.php" class="btn">Kembali ke Menu</a>
    </div>
</body>
</html>