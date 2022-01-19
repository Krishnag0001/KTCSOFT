<?php  
  session_start();
  include 'config.php';

if($_POST['party_name'])
{
$date1=$_POST['debit_date'].' '.date("h:i:sa");
$sql = "INSERT INTO party_ledger (invoice_no, party_id, debit_amount, created_date)
          VALUES ('".$_POST["invoice_no"]."','".$_POST['party_name']."','".$_POST['debit_amount']."','".$date1."')";


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