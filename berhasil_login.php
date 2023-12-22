<?php 
 
session_start();
 
if (!isset($_SESSION['username'])) {
    header("Location: index_admin.php");
}
 
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Berhasil Login</title>
<style>
    body {
            width: 100%;
            min-height: 100vh;
            background-color: #E4DCCF;
            background-position: center;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            
            padding: 20px;
            background-color: #FFFFFF;
            border-radius: 10px;
            
        }

        </style>
</head>
<body>
    <div class="container-logout">
        <form action="" method="POST" class="login-username">
            <?php echo "<h2>Selamat Datang, " . $_SESSION['username'] ."!". "</h2>"; ?>
             



            <div class="input-group">
            <a href="http://localhost/ASK-ME/index_admin.php?page=data&actions=tampil" class="btn">Data Siswa</a>

            <div class="input-group">
            <a href="logout.php" class="btn">Logout</a>
            </div>
        </form>
    </div>
</body>
</html>