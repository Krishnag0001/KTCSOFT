<?php  
  session_start();
  include 'config.php';

if($_POST['party_name'])
{
//$date1=$_POST['date1'].' '.date("h:i:sa");
$sql = "INSERT INTO party (party_name, party_address, party_mobile_no, party_GST_NO)
          VALUES ('".$_POST["party_name"]."','".$_POST['party_address']."','".$_POST['party_mobile_no']."','".$_POST['party_gst']."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:add_party.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>