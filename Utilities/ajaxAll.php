<?php
session_start();
      //Include database configuration file
      include('config.php');
      //$q = intval($_GET['q']);
      //Get all Breed data
      if($_GET["id_goods"])
      {
        $query = "SELECT * FROM goods where id_goods=".$_GET["id_goods"]."";


        //"SELECT  FROM districts WHERE state_id = ".$_GET["q"]." ORDER BY name ASC";
        $result= mysqli_query($conn,$query);

            // echo '<select>';
            //   echo '<option value="0">-Select Districts-</option>';
            while($row = mysqli_fetch_assoc($result))
            {
                echo $row['our_rate'].','.$row['qty_type'];
            }
            // echo '</select>';
          }


    ?>
