<?php include 'Connection.php';
$id = $_GET['id'];
$query = "DELETE FROM student WHERE id = '$id'";
$data = mysqli_query($conn, $query);

if ($data){
    ?>
    <script type="text/javascript">
        alert("Deleted");
        window.open("http://localhost/HAMZU/view.php","_self");
    </script>
    <?php
   }else{
    ?>
    <script type="text/javascript">
        alert("Please try again");
    </script>
    <?php
   }
    
?>