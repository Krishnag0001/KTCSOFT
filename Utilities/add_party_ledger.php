<?php  
  session_start();
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    
    <!-- <meta http-equiv="Content-Security-Policy" content="default-src *; script-src 'self' 'unsafe-inline' 'unsafe-eval' *; style-src  'self' 'unsafe-inline' *"> -->

    <title>Utilities</title>
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
      <a class="navbar-brand" href="index.php"><font color="orange">Utilities</font></a>
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
          
        <li  class="dropdown"><a href="report.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Report <span class="caret"></span></a>
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

                 <li  class="dropdown active"><a href="ledger.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Ledger Account <span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="ledger.php">Ledger Account</a></li>
            <li><a href="add_party_ledger.php">Party Ledger Account</a></li>
            
            </ul>
                  </li>

                <li  class="dropdown"><a href="edit_customer.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Edit Account <span class="caret"></span></a>
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
<center>
<table border="1" width="1000px">
  <tr><td>
       <form action="sql_add_party_ledger.php" method="POST">  
                    
                            <center><h3 class="box-title">Add to Party Ledger</h3> 
                      
<?php

      //$_SESSION["last_id"] = 0;
      //DB Config
      include 'config.php';
                                
                               echo '<table width="400px">';

                                $query_importer = "SELECT * FROM party ORDER BY party_name ASC";
      $result_importer = mysqli_query($conn,$query_importer);
                                
                               echo '<tr><td>Party Name:</td> <td><select name="party_name" id="party_name" class="form-control" required>
 <option value="0">---Select Party---</option>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        echo '<option value="'.$row['id_party'].'">'.$row['party_name'].'</option>';
    }
}
echo '</select></td></tr>';
echo '</td></tr>
<tr><td>Debit Amount:</td> <td><input type="text" class="form-control" id="debit_amount" name="debit_amount" required></td></tr>

<tr><td>Invoice No.:</td> <td><input type="text" class="form-control" id="invoice_no" name="invoice_no" required></td></tr>

<tr><td>Date:</td> <td><input type="date" class="form-control" id="debit_date" name="debit_date" value="'.date("Y-m-d").'"></td></tr>
</table>';

echo '<br><br>
<input type="submit" value="Add to Ledger" id="view_bill" name="view_bill" class="btn btn-primary"><br>

</form>  
</center><br>
</td> 











<td rowspan="2">
 <form action="party_ledger_account.php" method="POST">  
                    
                            <center><h3 class="box-title">View Party Ledger</h3>';


       echo '<table width="400px">';

                                $query_importer = "SELECT * FROM party ORDER BY party_name ASC";
      $result_importer = mysqli_query($conn,$query_importer);
                                
                               echo '<tr><td>Party Name:</td> <td><select name="party_name" id="party_name" class="form-control" required>
 <option value="0">---Select Party---</option>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        echo '<option value="'.$row['id_party'].'">'.$row['party_name'].'</option>';
    }
}
echo '</select></td></tr>';
echo '</td></tr>

</table>';

echo '<br><br>
<input type="submit" value="View Ledger" id="view_bill333 name="view_bill333" class="btn btn-primary">
 </center>
</form>             
</tr>













<tr><td>
 <form action="sql_add_cash_paid_party_ledger.php" method="POST">  
                    
                            <center><h3 class="box-title">Cash Paid to Party Ledger</h3>';


       echo '<table width="400px">';

                                $query_importer = "SELECT * FROM party ORDER BY party_name ASC";
      $result_importer = mysqli_query($conn,$query_importer);
                                
                               echo '<tr><td>Party Name:</td> <td><select name="party_name" id="party_name" class="form-control" required>
 <option value="0">---Select Party---</option>';
if(mysqli_num_rows($result_importer) > 0)
{
    while($row = mysqli_fetch_assoc($result_importer))
    {
        echo '<option value="'.$row['id_party'].'">'.$row['party_name'].'</option>';
    }
}
echo '</select></td></tr>';
echo '</td></tr>
<tr><td>Credited Amount:</td> <td><input type="text" class="form-control" id="credit_amount" name="credit_amount" required></td></tr>

<tr><td>Comment:</td> <td><input type="text" class="form-control" id="comment" name="comment" required></td></tr>

<tr><td>Date:</td> <td><input type="date" class="form-control" id="credit_date" name="credit_date" value="'.date("Y-m-d").'"></td></tr>
</table>';

echo '<br><br>
<input type="submit" value="Cash Paid to Ledger" id="view_bill33" name="view_bill33" class="btn btn-primary">
 </center>
</form>   <br>
</td></tr>';





?><br>
</td>
</table>
</center>
</body>  
</html>  
