<?php  
  session_start();
  include 'config.php';

if($_POST['customer_name'])
{
//$date1=$_POST['date1'].' '.date("h:i:sa");
$sql = "INSERT INTO customer (customer_name, customer_address, customer_mobile_no,customer_GST_NO)
          VALUES ('".$_POST["customer_name"]."','".$_POST['customer_address']."','".$_POST['customer_mobile_no']."','".$_POST['customer_gst']."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:add_customer.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>