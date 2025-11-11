<style type="text/css">
    .header{
        background-color: orange;
    }
</style>
<?php

include_once("config.php");


$result = mysqli_query($mysqli, "SELECT * FROM data_teknisi ORDER BY id DESC");
?>

<html>
<head>    
    <title>Sim Rs</title>
</head>

<body>
    <b>Data teknisi rumah sakit</b><br>
<a href="add_data_teknisi.php">Tambah Data teknisi</a><br/><br/>

    <table width='80%' border=1>

    <tr class="header">
         <th>No</th><th>nama_teknisi</th> <th>alamat</th> <th>no_hp</th> <th>aksi</th>
    </tr>
    <?php  
    $i=1;
    while($user_data = mysqli_fetch_array($result)) {         
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$user_data['nama_teknisi']."</td>";
        echo "<td>".$user_data['alamat']."</td>";
        echo "<td>".$user_data['no_hp']."</td>";       
        echo "<td><a href='edit_data_teknisi.php?id=$user_data[id]'>Edit</a> | <a href='delete_data_teknisi.php?id=$user_data[id]'>Delete</a></td></tr>"; 
        $i++;       
    }
    ?>
    </table>
</body>
</html>