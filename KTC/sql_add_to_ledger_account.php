<?php  
  session_start();
  include 'config.php';

if($_POST['name'])
{
$date1=$_POST['date_id'].' '.date("h:i:sa");
$sql = "INSERT INTO ledger_account (customer_id, invoice_id, debit_amount, created_date)
          VALUES ('".$_POST["name"]."','".$_POST['invoice_no']."','".$_POST['amount']."','".$date1."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:ledger.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>