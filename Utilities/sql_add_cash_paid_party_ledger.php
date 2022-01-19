<?php  
  session_start();
  include 'config.php';

if($_POST['party_name'])
{
$date1=$_POST['credit_date'].' '.date("h:i:sa");
$sql = "INSERT INTO party_ledger (party_id, credit_amount, comment, created_date)
          VALUES ('".$_POST['party_name']."','".$_POST['credit_amount']."','".$_POST['comment']."','".$date1."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:add_party_ledger.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>