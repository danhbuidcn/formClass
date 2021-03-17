
<form method="post">
    <span>Student Code</span>
    <input type="number" name="stCode">
    <input type="submit" value="Delete" name="submit">
</form>
<a href="home.php">Home</a>
<?php 
    if(isset($_POST['submit'])){
        $stCode=isset($_POST['stCode'])?$_POST['stCode']:"";
        $con=mysqli_connect("localhost","root","","phpclass");
        $sql="delete from sinhvien where StudentCode='$stCode' ";
        $result=mysqli_query($con,$sql);
        if($result)
                {
                    echo "<script>alert('Successfull !');</script>";
                }
                else
                {
                    echo "<script>alert('Fail !');</script>";
                }

                mysqli_close($con);
    }

?>