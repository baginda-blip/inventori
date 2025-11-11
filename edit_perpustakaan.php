<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
   $id = $_POST['id'];
   $buku = $_POST['buku'];
   $penulis = $_POST['penulis'];
   $peminjam = $_POST['peminjam'];
   $id_peminjam = $_POST['id_peminjam'];
   $waktu_pinjaman = $_POST['waktu_pinjaman'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE perpustakaan SET buku ='$buku', penulis ='$penulis', peminjam ='$peminjam', id_peminjam ='$id_peminjam', waktu_pinjaman ='$waktu_pinjaman' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index_perpustakaan.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM perpustakaan WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $buku = $user_data['buku'];
    $penulis = $user_data['penulis'];
    $peminjam = $user_data['peminjam'];
    $id_peminjam = $user_data['id_peminjam'];
    $waktu_pinjaman = $user_data['waktu_pinjaman'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index_perpustakaan.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit_perpustakaan.php">
        <table border="0">
            <tr> 
                <td>buku</td>
                <td><input type="text" name="buku" value=<?php echo $buku;?>></td>
            </tr>
            <tr> 
                <td>penulis</td>
                <td><input type="text" name="penulis" value=<?php echo $penulis;?>></td>
            </tr>
            <tr> 
                <td>peminjam</td>
                <td><input type="text" name="peminjam" value=<?php echo $peminjam;?>></td>
            </tr>
            <tr> 
                <td>id_peminjam</td>
                <td><input type="text" name="id_peminjam" value=<?php echo $id_peminjam;?>></td>
            </tr>
            <tr> 
                <td>waktu_pinjaman</td>
                <td><input type="date" name="waktu_pinjaman" value=<?php echo $waktu_pinjaman;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>