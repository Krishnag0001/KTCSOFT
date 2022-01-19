<?php  
  session_start();
  include 'config.php';

if($_POST['expence_name'])
{
$date1=$_POST['date_id'].' '.date("h:i:sa");
$sql = "INSERT INTO expences (expence_name, amount, comment,created_date)
          VALUES ('".$_POST["expence_name"]."','".$_POST['amount']."','".$_POST['comment']."','".$date1."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:add_expences.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>