<?php
include 'employee.html';
?>
<style>
#wrapper{
    width: 90%;
    margin: 50px auto 0;
    background-color: #fff;
}
</style>
<div id="main-content">
    <h2>All Records</h2>
    <?php
     $con=mysqli_connect("localhost","root","Shrish@2004","gross");
     if(!$con)
     {
       die("connection to this database failed due to " .mysqli_connect_error());
     }
     $sql="SELECT * FROM `employer_table` order by `emp_id`;";
     $result=mysqli_query($con,$sql) or die("query unsuccessful");

     if(mysqli_num_rows($result)>0) {
    ?>
    <table cellpadding="7px">
        <thead>
        <th>empid</th>
        <th>name</th>
        <th>salary</th>
        <th>workplace</th>
        <th>join date</th>
        <th>designation</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row=mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td><?php echo $row['emp_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['salary']; ?></td>
                <td><?php echo $row['workplace']; ?></td>
                <td><?php echo $row['join_date']; ?></td>
                <td><?php echo $row['designation']; ?></td>
                <td>
                    <a href='edit.php?id=<?php echo $row['emp_id'];?>'>Edit</a>
                    <a href='delete.php?id=<?php echo $row['emp_id'];?>'>Delete</a>
                </td>
            </tr>
            <?php } ?>
           
        </tbody>
    </table>
    <?php }else{
        echo "<h2>no record found<h2>";
    } 
    mysqli_close($con);
    ?>
</div>
</div>
</body>
</html>
