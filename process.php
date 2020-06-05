<?php include 'connect.php';?>

<?php  
//print_r($_POST);

$info1_name = $_POST['info1_name'];
$info2_name = $_POST['info1_name'];


/*mysqli_query($connect, "INSERT INTO mamber (info1_name, info2_name) 
                        VALUES ('$info1_name', '$info2_name') ");
*/

    $check = "select * from mamber  where info1_name = '$info1_name' ";

    $result1 = mysqli_query($connect, $check) or die("Error Check");
    $num=mysqli_num_rows($result1);
      
     if($num > 0)
    {
        echo "<script>";
        echo "alert(' ข้อมูลซ้ำ กรุณาเพิ่มใหม่อีกครั้ง !');";
        echo "window.location='form.php';";
        echo "</script>";
        }else{ 

            $sql = "INSERT INTO mamber
		(info1_name, info2_name)
		
 		VALUES
		('$info1_name', '$info2_name') "; 
	$result = mysqli_query($connect, $sql) or die ("Error in query: $sql()");
 
 }

        mysqli_close($connect);
        //บันทึกสำเร็จแจ้งเตือนและกระโดดกลับไปหน้าฟอร์ม   ปล.การทำระบบจริงๆ อาจกระโดดไปหน้าอื่นที่เรากำหนด
	if($result){
        echo "<script type='text/javascript'>";
            echo "alert('SUCCESSFULLY');";
            echo "window.location='form.php';";
        echo "</script>";
  }
  else{
//ถ้าบันทึกไม่สำเร็จแสดงข้อความ Error และกระโดดกลับไปหน้าฟอร์ม
        echo "<script type='text/javascript'>";
            echo "alert('Error!');";
            echo "window.location='form.php';";
        echo "</script>";
  }


      /*  if(mysqli_affected_rows($connect) > 0){

            echo '<p>Member Added  </p>';
            echo '<a href ="index.html"> Back to Homepage </a>';

        } else{
            echo 'Member not Added';
            echo mysqli_error($connect);

        }  
        */
    
?>