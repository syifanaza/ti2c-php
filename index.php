<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <style>
        body {
            background-color: #642B73;  
            background: -webkit-linear-gradient(to right, #C6426E, #642B73);  
            background: linear-gradient(to right, #C6426E, #642B73); 
            font-family: times new roman, georgia;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 200px auto;
            padding: 50px;
            background-color: #FEFAF6;
            border-radius: 10px;
            box-shadow: #102C57;
            text-align: center;
        }
        h1 {
            color: #102C57;
            margin-bottom: 40px;
            font-size: 40px;
        }
        .menu {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 40px;
        }
        .menu-item {
            margin: 0 20px;
        }
        a {
            text-decoration: none;
            padding: 15px 30px;
            background-color: #49243E;
            color: #fff;
            border-radius: 25px;
            transition: background-color 0.3s;
            font-size: 18px;
            display: inline-block;
        }
        a:hover {
            background-color: #704264;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Formulir Biodata</h1>
        <div class="menu">
            <div class="menu-item"><a href="form.php">Tambah Biodata</a></div>
            <div class="menu-item"><a href="hasil.php">Lihat Hasil Biodata</a></div>
        </div>
    </div>
</body>
</html>
