<?php include 'Connection.php';
$id = $_GET['id'];
$select="SELECT * FROM student WHERE id='$id'";
$data=mysqli_query($conn,$select);
$row=mysqli_fetch_array($data);

?>
 <style>
    .forn3 {
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
<div>
<div>
    <form action="" method="POST" class="forn3">
        <h1>Update Student DATA </h1>
        <input type="text" name="firstname"  value="<?php echo $row['firstname']; ?>" ><br><br>
        <input type="text" name="lastname" placeholder="Last name" value="<?php echo $row['lastname'] ?>"><br><br>
        <input type="number" name="age" placeholder="Age" value="<?php echo $row['age'] ?>"><br><br>
        <input type="submit" name="update" value="Update">
        <button><a href="view.php">Back</a></button>


    </form>
<?php
if (isset($_POST['update'])) {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['age'];
    
    $update="UPDATE student SET firstname='$fname',lastname='$lname',age='age' WHERE id='$id'";
    $data=mysqli_query($conn,$update);
    if ($data) {
        ?>
        <script>
            alert("data Update successfully");
            window.open('http://localhost/crudfonerep/view.php','_self');
        </script>
        <?php
    } else {
        echo "Failed to insert data: " . mysqli_error($conn);
    }
} 
?>
</div>