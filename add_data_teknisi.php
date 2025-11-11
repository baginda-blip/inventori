<html>
<head>
    <title>data teknisi</title>
</head>

<body>
    <a href="index_data_teknisi.php">Go to Home</a>
    <br/><br/>
<p>Belajar Pemrograman Web</p>
    <form action="add_data_teknisi.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama teknisi</td>
                <td><input type="text" name="nama_teknisi"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>no_hp</td>
                <td><input type="text" name="no_hp"></td>
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
        $nama_teknisi= $_POST['nama_teknisi'];
        $alamat = $_POST['alamat'];
        $no_hp= $_POST['no_hp'];

        // include database connection file
        include_once("config.php");

        // Insert user data into table
        $result = mysqli_query($mysqli, "INSERT INTO data_teknisi(nama_teknisi,alamat,no_hp) VALUES('$nama_teknisi','$alamat','$no_hp')");

        // Show message when user added
        echo "User added successfully. <a href='index_data_teknisi.php'>View data_teknisi</a>";
    }
    ?>
</body>
</html>