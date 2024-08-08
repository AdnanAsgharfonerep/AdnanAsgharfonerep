<?php include'connection.php';   ?>
<style>
    .form2 {
    width: 300px; /* Form ka width set karein */
    margin: 0 auto; /* Left aur right margin ko auto rakhein */
    padding: 20px;
    border: 1px solid #ccc;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

/* Poore page mein center karne ke liye */
body {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh; /* Poore viewport height ke liye */
    margin: 0;
    background-color: #f5f5f5;
}
</style>

<table border="2px" cellpadding="10" cellspaceing="0" class="form2">
    
    <tr>
    
        <th>FName</th>
        <th>LName</th>
        <th>Age</th>
        <th colspan="2">Action</th>
    </tr>

<?php
$query="SELECT*FROM student";
$data=mysqli_query($conn,$query);
$result=mysqli_num_rows($data);
if ($result) {
    while ($row=mysqli_fetch_assoc($data)) {
        ?>
        <tr>
            <th><?php echo $row['firstname'] ?></th>
            <th><?php echo $row['lastname'] ?></th>
            <th><?php echo $row['age'] ?></th>
            <td><a  href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
            <td><a onclick="return confirm('Sure you want delete')" href="delete.php?id=<?php echo $row['id'];?>">Delete</a></td>

        </tr>
        <?php
    }
    # code...
}else{
    echo"data not found";
}
 ?>
 </table>