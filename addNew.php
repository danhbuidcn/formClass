
<form method="post" enctype="multipart/form-data">
    <span>Student Code</span>
    <input type="number" name="stCode">
    <span>Full Name</span>
    <input type="text" name="fName">
    <span>Phone</span>
    <input type="number" name="phone">
    <span>Image</span>
    <input type="file" name="img">
    <input type="submit" value="save" name="submit">
</form>
<a href="home.php">Home</a>
<?php 
    if(isset($_POST['submit'])){
        $stCode=isset($_POST['stCode'])?$_POST['stCode']:"";
        $fName=isset($_POST['fName'])?$_POST['fName']:"";
        $phone=isset($_POST['phone'])?$_POST['phone']:"";
        $img=0;
        if(getimagesize($_FILES['img']['tmp_name']) == FALSE)
        {
            echo "Please select an image.";
        }
        else
        {
            $img= addslashes($_FILES['img']['tmp_name']);
            $img= file_get_contents($img);
            $img= base64_encode($img);
        }
        $con=mysqli_connect("localhost","root","","phpclass");
        $sql="insert into sinhvien values('$stCode','$fName','$phone','$img')";
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