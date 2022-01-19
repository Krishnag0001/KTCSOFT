<?php  
  session_start();
  include 'config.php';

if($_POST['customer_name'])
{
//$date1=$_POST['date1'].' '.date("h:i:sa");
$sql = "UPDATE customer SET customer_name='".$_POST["customer_name"]."', customer_address='".$_POST["customer_address"]."', customer_mobile_no='".$_POST["customer_mobile_no"]."',customer_GST_NO='".$_POST["customer_gst"]."' WHERE id_customer='".$_POST["customer_id"]."' ";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:edit_customer.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>