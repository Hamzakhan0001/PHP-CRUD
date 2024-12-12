<?php include 'Connection.php' ;
 $id=$_GET['id'];
$select = "SELECT * FROM student WHERE id='$id'";
$data = mysqli_query($conn, $select);
$row = mysqli_fetch_array($data);
?>
<div>
<form action="" method="POST">
            <input value="<?php echo $row['firstname'] ?>" name="firstname"
            placeholder="firstname"><br><br>

            <input value="<?php echo $row['lastname'] ?>" type="text" name="lastname"
            placeholder="lastname"><br><br>

            <input value="<?php echo $row['age'] ?>" type="number" name="age"
            placeholder="age"><br><br>

            <input type="submit" name="update_btn"
            value="Update">

            <button><a href="view.php">Back</a></button>
            </form>
</div>

<?php 
            //update data//


            if (isset($_POST['update_btn'])){
                $fname = $_POST['firstname'];
                $lname = $_POST['lastname'];
                $age = $_POST['age'];

       $query = "UPDATE student SET firstname = '$fname', lastname = '$lname', age = '$age' WHERE id = '$id'";
       $data = mysqli_query($conn, $query);

       if ($data){
        ?>
        <script type="text/javascript">
            alert("Data updated successfully");
            //update krne k baad seedha wapis ajaengy window.open ki help se//
            window.open("http://localhost/HAMZU/view.php","_self")
        </script>
        <?php
       }else{
        ?>
        <script type="text/javascript">
            alert("Please try again");
        </script>
        <?php
       }
            }
            ?>
