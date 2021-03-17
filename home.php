<html>
<title>home</title>
<body>
    <h2>Student List</h2>
    <table cellpadding="20">
        <tr>
            <td>Ma SV</td>
            <td>Ten SV</td>
            <td>SDT</td>
            <td>Anh</td>
        </tr>
        <?php
            $con=mysqli_connect("localhost","root","","phpclass");
            $sql="select * from sinhvien ";
            $result=mysqli_query($con,$sql);
            while($row=mysqli_fetch_assoc($result)){
                $str="<tr><td>".$row['StudentCode']."</td><td>".$row['FullName']."</td><td>".$row['Phone']."</td><td>".'<img height="50" width="50" src="data:image;base64,'.$row['Img'].' "> '."</td></tr>";
                echo($str);
            }
            mysqli_close($con); 
        ?>
    </table>
    <a href="addNew.php">Add new</a>
    <a href="delete.php">Delete</a>
</body>
</html>