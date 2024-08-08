<?php include'Connection.php';

$id=$_GET['id'];
$query=("DELETE FROM student WHERE id='$id'");
$data=mysqli_query($conn,$query);
if ($data) {
    ?>
    <script>alert("Data delete Successfull") 
        window.open('http://localhost/crudfonerep/view.php','_self')
    </script>
    
    <?php
    # code...
}else{
    ?>
    <script>alert("Try again")</script>
    <?php
}
?>
