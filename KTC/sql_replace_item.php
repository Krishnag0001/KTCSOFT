<?php  
  session_start();
  include 'config.php';

if($_POST['name'])
{
	//$gst_rate1=($_POST['our_rate'] * $_POST['gst_per']/100);
	//$gst_rate=$gst_rate1+$_POST['our_rate'];
$date1=$_POST['replace_date'].' '.date("h:i:sa");
$sql = "INSERT INTO replace_goods (good_id, party_id, quantity, weight_in_kg, amount, transportation, created_date)
          VALUES ('".$_POST["name"]."','".$_POST['party_name']."','".$_POST['qty']."','".$_POST['weight_qty']."','".$_POST['amount']."', '".$_POST['transportation']."','".$date1."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				//$_SESSION["last_id_good"] = $conn->insert_id;


					$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['name']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']-$_POST['qty'];

    	$sql22 = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["name"]."' ";


            if (mysqli_query($conn,$sql22) === TRUE)
			{
				header('location:edit_goods.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
    else
{
echo "Error: " . $conn->error . "<br>";

}












			








	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}


  ?>