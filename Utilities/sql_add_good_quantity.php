<?php  
  session_start();
  include 'config.php';

if($_POST['good17'])
{

$query_goods_list = "SELECT * FROM goods_quantity where id_good='".$_POST['good17']."'";
      $result_goods17 = mysqli_query($conn,$query_goods_list);

      //$quantity_old=0;

      if(mysqli_num_rows($result_goods17) > 0)
{
    while($row = mysqli_fetch_assoc($result_goods17))
    {
    	$quantity_new=$row['goods_quantity']+$_POST['quantity'];

    	$sql = "UPDATE goods_quantity SET goods_quantity='".$quantity_new."' WHERE id_good='".$_POST["good17"]."' ";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

    }
    else
{
$sql = "INSERT INTO goods_quantity (id_good, goods_quantity)
          VALUES ('".$_POST["good17"]."','".$_POST['quantity']."')";


            if (mysqli_query($conn,$sql) === TRUE)
			{
				header('location:add_quantity.php');
	      }
      else
				{
						echo "Error: " . $conn->error . "<br>";
				}


}

}

// //if()//
// //$date1=$_POST['date1'].' '.date("h:i:sa");
// $sql = "UPDATE goods SET goods_name='".$_POST["good_name"]."', HSN_code='".$_POST["hsn_code"]."' WHERE id_goods='".$_POST["good_id"]."' ";


//             if (mysqli_query($conn,$sql) === TRUE)
// 			{
// 				header('location:index.php');
// 	      }
//       else
// 				{
// 						echo "Error: " . $conn->error . "<br>";
// 				}


//}


  ?>