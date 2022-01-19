<?php  
  session_start();
  include 'config.php';

if($_GET['id'])
{




					$sql23 = "DELETE FROM ledger_account WHERE id_ledger_account ='".$_GET["id"]."' ";


            if (mysqli_query($conn,$sql23) === TRUE)
			{
				header('location:ledger.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}




}


  ?>