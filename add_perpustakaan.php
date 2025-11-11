<html>
<head>
    <title>perpustakaan</title>
</head>

<body>
    <a href="index_perpustakaan.php">Go to Home</a>
    <br/><br/>
<p>Belajar Pemrograman Web</p>
    <form action="add_perpustakaan.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>buku</td>
                <td><input type="text" name="buku"></td>
            </tr>
            <tr> 
                <td>penulis</td>
                <td><input type="text" name="penulis"></td>
            </tr>
            <tr> 
                <td>peminjam</td>
                <td><input type="text" name="peminjam"></td>
            </tr>
            <tr> 
                <td>id_peminjam</td>
                <td><input type="text" name="id_peminjam"></td>
            </tr>
            <tr> 
                <td>waktu_pinjaman</td>
                <td><input type="date" name="waktu_pinjaman"></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    // Check If form submitted, insert form data into users table.
    if(isset($_POST['Submit'])) {
        $buku = $_POST['buku'];
        $penulis = $_POST['penulis'];
        $peminjam = $_POST['peminjam'];
        $id_peminjam = $_POST['id_peminjam'];
        $waktu_pinjaman = $_POST['waktu_pinjaman'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO perpustakaan(buku,penulis,peminjam,id_peminjam,waktu_pinjaman) VALUES('$buku','$penulis','$peminjam','$id_peminjam','$waktu_pinjaman')");

        // Show message when user added
        echo "User added successfully. <a href='index_perpustakaan.php'>View perpustakaan</a>";
    }
    ?>
</body>
</html>