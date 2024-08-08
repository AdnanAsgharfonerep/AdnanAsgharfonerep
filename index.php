<?php include'connection.php'; ?>
<style>
    .forn1 {
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
<form action="" method="POST" class="forn1">
    <h1>Student Form</h1>
    <input type="text" name="firstname" placeholder="firstname"><br><br>
    <input type="text" name="lastname" placeholder="lastname"><br><br>
    <input type="number" name="age" placeholder="phone...."><br><br>

    <input type="submit" name="submit" value="SAVE">
    <button><a href="view.php">View</a></button>
</form>
<?php 
if (isset($_POST['submit'])) {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $age=$_POST['age'];
    
    $query="INSERT INTO student(firstname,lastname,age) VALUES ('$fname','$lname','$age')";
    $data=mysqli_query($conn,$query);
    if ($data) {
        ?>
        <script>alert("save successfully")</script>
        <?php
    }else{
        ?>
        <script>alert("failed try again")</script>
        <?php
    }
}
?>