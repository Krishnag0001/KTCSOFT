<?php  
  session_start();
  include 'config.php';

if($_POST['cash']!=0)
{
$date1=$_POST['date1'].' '.date("h:i:sa");
$sql = "INSERT INTO cash_payment (customer_id, payment, created_date)
          VALUES ('".$_POST["name"]."','".$_POST['cash']."','".$date1."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{	



				$_SESSION["last_id"] = $conn->insert_id;
				//header('location:index.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}

$sql2 = "INSERT INTO ledger_account (customer_id, invoice_id, credit_amount, created_date)
          VALUES ('".$_POST["name"]."','".$_SESSION["last_id"]."','".$_POST['cash']."','".$date1."')";


            if (mysqli_query($conn,$sql2) === TRUE)
			{	
						header('location:index.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>