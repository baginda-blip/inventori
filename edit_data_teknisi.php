<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{   
    $id = $_POST['id'];
   $nama_teknisi= $_POST['nama_teknisi'];
   $tahun = $_POST['alamat'];
   $merek= $_POST['no_hp'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE data_teknisi SET nama_teknisi='$nama_teknisi',alamat='$alamat',no_hp='$no_hp' WHERE id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM data_teknisi WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_teknisi = $user_data['nama_teknisi'];
    $alamat = $user_data['alamat'];
    $no_hp= $user_data['no_hp'];
}
?>
<html>
<head>  
    <title>Edit User Data</title>
</head>

<body>
    <a href="index.php">Home</a>
    <br/><br/>

    <form name="update_user" method="post" action="edit.php">
        <table border="0">
            <tr> 
                <td>Nama teknisi</td>
                <td><input type="text" name="nama_teknisi" value=<?php echo $nama_teknisi;?>></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat" value=<?php echo $alamat;?>></td>
            </tr>
            <tr> 
                <td>no_hp</td>
                <td><input type="text" name="no_hp" value=<?php echo $no_hp;?>></td>
            </tr>
            <tr>
                <td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
                <td><input type="submit" name="update" value="Update"></td>
            </tr>
        </table>
    </form>
</body>
</html>