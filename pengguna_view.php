<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Pengguna</title>
</head>
<body>
    <h2>CRUD Pengguna</h2>
    <h3>Create</h3>
    <form action="create_pengguna.php" method="post">
        Nama Pengguna: <input type="text" name="NamaPengguna"><br><br>
        Password: <input type="password" name="Password"><br><br>
        Nama Depan: <input type="text" name="NamaDepan"><br><br>
        Nama Belakang: <input type="text" name="NamaBelakang"><br><br>
        No Hp: <input type="text" name="NoHp"><br><br>
        Alamat: <input type="text" name="Alamat"><br><br>
        <input type="submit" value="Tambah Pengguna">
    </form>

    <h3>Read</h3>
    <?php
        // Tampilkan data pengguna dari database di sini
        // Gunakan PHP untuk mengambil data dari database
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "tugas_tk";
    
        // Buat koneksi
        $conn = new mysqli($servername, $username, $password, $dbname);
    
        // Periksa koneksi
        if ($conn->connect_error) {
            die("Koneksi gagal: " . $conn->connect_error);
        }
    
        // Query untuk mengambil data
        $sql = "SELECT * FROM Pengguna";
        $result = $conn->query($sql);
    
        if ($result->num_rows > 0) {
            // Tampilkan data dalam bentuk tabel
            echo "<table border='1'>";
            echo "<tr><th>ID Pengguna</th><th>Nama Pengguna</th><th>Nama Depan</th><th>Nama Belakang</th><th>No Hp</th><th>Alamat</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td>".$row["IDPengguna"]."</td><td>".$row["NamaPengguna"]."</td><td>".$row["NamaDepan"]."</td><td>".$row["NamaBelakang"]."</td><td>".$row["NoHp"]."</td><td>".$row["Alamat"]."</td></tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>

    <h3>Update</h3>
    <form action="update_pengguna.php" method="post">
        ID Pengguna yang akan diubah: <input type="text" name="IDPengguna"><br><br>
        Nama Pengguna Baru: <input type="text" name="NamaPenggunaBaru"><br><br>
        <input type="submit" value="Update Pengguna">
    </form>

    <h3>Delete</h3>
    <form action="delete_pengguna.php" method="post">
        ID Pengguna yang akan dihapus: <input type="text" name="IDPengguna"><br><br>
        <input type="submit" value="Hapus Pengguna">
    </form>
</body>
</html>