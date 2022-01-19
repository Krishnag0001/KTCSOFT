<?php  
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src *; script-src 'self' 'unsafe-inline' 'unsafe-eval' *; style-src  'self' 'unsafe-inline' *"> -->

    <title>KTC</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="css/bootstrap-theme.min.css" crossorigin="anonymous">
<link rel="icon" href="abc.ico">

<!-- Latest compiled and minified JavaScript -->
<script src="js/jquery-2.1.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<SCRIPT language="javascript">
</SCRIPT>
</head>
<body>
	
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
       <a class="navbar-brand" href="index.php"><font color="orange">KTC</font></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li  class="dropdown">
         <a href="index.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Sales <span class="caret"></span></a>
            <ul class="dropdown-menu">
            <li><a href="index.php"> Create Bill</a></li>
            <li><a href="view_bill.php">View Bills</a></li>
            <li><a href="add_expences.php">Add Expences</a></li>
            <li><a href="cash.php">Cash Paid</a></li>

            
                      </ul>   
        </li>
          
               <li><a href="report.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="report.php">Report</a></li>
                        <li><a href="show_quantity_report.php">Quantity Report</a></li>
             <li><a href="view_expences.php">View Expences</a></li>
                         <li><a href="view_replace.php">View Replacement</a></li>
            <li><a href="backup.php">Backup</a></li>
            </ul>
                  </li>
        <li  class="dropdown"><a href="add_customer.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Create Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="add_customer.php">Add Customer</a></li>
            <li><a href="add_party.php">Add Party</a></li>
            <li><a href="add_goods.php">Add Goods</a></li>
            <li><a href="add_quantity.php">Add Goods Quantity</a></li>
            </ul>
                  </li>

                         <li  class="dropdown"><a href="ledger.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ledger Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="ledger.php">Ledger Account</a></li>
            <li><a href="add_party_ledger.php">Party Ledger Account</a></li>
            
            </ul>
                  </li>

                <li  class="dropdown active"><a href="edit_customer.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="edit_customer.php">Edit Customer</a></li>
            <li><a href="edit_goods.php">Edit Goods</a></li>
                 <li><a href="edit_party.php">Edit Party</a></li>
            </ul>
                  </li>


        <!-- <li class="dropdown"><a href="retail.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Retail Account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="retail.php">Retail Account</a></li>
            <li><a href="add_retail.php">Add Retail Customer</a></li>
            <li><a href="view_retail.php">View Retailer Good</a></li>
            
            <li><a href="modify_retail.php">Modify Retailer</a></li>
                      </ul>   
        </li>
 -->
        </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

       <form action="edit_goods_details.php" method="POST">  
                    
                            <center><h3 class="box-title">Edit Good </h3> 
                      
<?php

      //$_SESSION["last_id"] = 0;
      //DB Config
      include 'config.php';
      $query_importer = "SELECT * FROM goods ORDER BY goods_name ASC";
      $result_importer = mysqli_query($conn,$query_importer);
                                
                               echo '<table><tr><td>Good Name:</td> <td><select name="name" id="name" class="form-control" style="width:400px;">
 <option value="0">---Select Good---</option>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'('.$row['HSN_code'].')</option>';
    }
}
echo '</select></td></tr></table>
<br><br>
<input type="submit" value="View Good" id="good" name="good" class="btn btn-primary">
 <br>
</form>  
..........................................................................................................................................................................................
 </center>
 <form action="sql_replace_item.php" method="POST">  
                    
                            <center><h3 class="box-title">Replace Good </h3> ';


      //$_SESSION["last_id"] = 0;
      //DB Config
      include 'config.php';
      $query_importer = "SELECT * FROM goods ORDER BY goods_name ASC";
      $result_importer = mysqli_query($conn,$query_importer);
                                
                               echo '<table><tr><td>Goods Name:</td> <td><select name="name" id="name" class="form-control" style="width:400px;">
 <option value="0">---Select Good---</option>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        echo '<option value="'.$row['id_goods'].'">'.$row['goods_name'].'</option>';
    }
}
echo '</select></td></tr>

<tr><td>Party Name:</td> <td><select name="party_name" id="party_name" class="form-control" style="width:400px;">
 <option value="0">---Select Party---</option>';
 $query_importer2 = "SELECT * FROM party ORDER BY party_name ASC";
      $result_importer2 = mysqli_query($conn,$query_importer2);
if(mysqli_num_rows($result_importer2) > 0)
{
    while($row2 = mysqli_fetch_assoc($result_importer2))
    {
        echo '<option value="'.$row2['id_party'].'">'.$row2['party_name'].'</option>';
    }
}
echo '</select></td></tr>

<tr><td>Quantity:</td> <td><input type="number" step="any" class="form-control" id="qty" name="qty" required></td></tr>
<tr><td>Weight(in KG):</td> <td><input type="text" class="form-control" id="weight_qty" name="weight_qty" required></td></tr>
<tr><td>Amount:</td> <td><input type="text" class="form-control" id="amount" name="amount" required></td></tr>
<tr><td>Transportation:</td> <td><input type="text" class="form-control" id="transportation" name="transportation" required></td></tr>
<tr><td>Date:</td> <td><input type="date" class="form-control" id="replace_date" name="replace_date" value="'.date("Y-m-d").'" required></td></tr>

</table>';


?>
<br><br>
<input type="submit" value="Replace Good" id="good" name="good" class="btn btn-primary">
 </center>
</form>  
</body>  
</html>  
