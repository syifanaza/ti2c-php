<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Biodata</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #642B73;  
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
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff; 
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
            color: #49243E; 
        }
        label {
            font-weight: bold;
            color: #49243E; 
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], select, input[type="number"] {
            width: calc(100% - 30px); /* Menyesuaikan lebar untuk mengakomodasi span */
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box; 
        }
        span {
            display: inline-block;
            width: 100%;
            padding: 10px;
            text-align: center;
            color: #666;
        }
        button {
            width: 100%;
            padding: 12px 20px;
            background-color: #49243E; 
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            font-size: 15px;
            margin-top: 10px; 
        }
        button:hover {
            background-color: #704264;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Biodata</h2>
        <form action="proses.php" method="post">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="alamat">Alamat:</label>
            <input type="text" id="alamat" name="alamat" required>

            <label for="tempat_tanggal_lahir">Tempat Tanggal Lahir:</label>
            <input type="text" id="tempat_tanggal_lahir" name="tempat_tanggal_lahir" required>

            <label for="jenis_kelamin">Jenis Kelamin:</label>
            <select id="jenis_kelamin" name="jenis_kelamin" required onchange="changeBackgroundColor()">
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>

            <label for="agama">Agama:</label>
            <input type="text" id="agama" name="agama" required>

            <label for="usia">Usia:</label>
            <div style="display: flex;"> 
                <input type="number" id="usia" name="usia" required>
                <span>Tahun</span>
            </div>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>
