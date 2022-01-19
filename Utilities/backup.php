<?php
include 'config.php';
$return="";
$tables = '*';
	//get all of the tables
	if($tables == '*')
	{
		$tables = array();
		$result = mysqli_query($conn,'SHOW TABLES');
		while($row = mysqli_fetch_row($result))
		{
			$tables[] = $row[0];
		}
	}
	else
	{
		$tables = is_array($tables) ? $tables : explode(',',$tables);
	}

	//cycle through
	foreach($tables as $table)
	{
		$result = mysqli_query($conn,'SELECT * FROM '.$table);
		$num_fields = mysqli_num_fields($result);

		$return.= 'SET FOREIGN_KEY_CHECKS=0; DROP TABLE IF EXISTS '.$table.';';
		$row2 = mysqli_fetch_row(mysqli_query($conn,'SHOW CREATE TABLE '.$table));
		$return.= "\n\n".$row2[1].";\n\n";

		for ($i = 0; $i < $num_fields; $i++)
		{
			while($row = mysqli_fetch_row($result))
			{
				$return.= 'INSERT INTO '.$table.' VALUES(';
				for($j=0; $j < $num_fields; $j++)
				{
					$row[$j] = addslashes($row[$j]);
					$row[$j] = ereg_replace("\n","\\n",$row[$j]);
					if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; }
					if ($j < ($num_fields-1)) { $return.= ','; }
				}
				$return.= ");\n";
			}
		}
		$return.="\n\n\n";
	}

	//save file
	$handle = fopen('backup/ktcrough.sql','w+');
	fwrite($handle,$return);
	fclose($handle);

// use \PHPMailer\src\PHPMailer;
// use \PHPMailer\src\Exception;

// $email = new PHPMailer();
// $email->SetFrom('mayurkharat03@gmail.com', 'KhandelwalTC Backup'); //Name is optional
// $email->Subject   = 'Message Subject';
// $email->Body      = $bodytext;
// $email->AddAddress( 'mayurkharat03@gmail.com' );

// $file_to_attach = 'backup/khandelwaltc.sql';

// $email->AddAttachment( $file_to_attach , 'khandelwaltc.sql' );

// return $email->Send();


// $to = "mayurkharat03@gmail.com";
// $subject = "Your password with attachment test";
// $from = "mayurkharat03@gmail.com";
// $headers = "From: $from\r\n";
// $headers .= "MIME-Version: 1.0\r\n"
//   ."Content-Type: multipart/mixed; boundary=\"1a2a3a\"";
 
// $message .= "If you can see this MIME than your client doesn't accept MIME types!\r\n"
//   ."--1a2a3a\r\n";
 
// $message .= "Content-Type: text/html; charset=\"iso-8859-1\"\r\n"
//   ."Content-Transfer-Encoding: 7bit\r\n\r\n"
//   ."hey my <b>good</b> friend here is a picture of me"
//   ."<p>Your password is : <span style='color:red'><b>User@1$#!</b></span></p> \r\n"
//   ."--1a2a3a\r\n";
 
// $file = file_get_contents("backup/khandelwaltc.sql");
 
// $message .= "Content-Type: image/jpg; name=\"picture.jpg\"\r\n"
//   ."Content-Transfer-Encoding: base64\r\n"
//   ."Content-disposition: attachment; file=\"picture.jpg\"\r\n"
//   ."\r\n"
//   .chunk_split(base64_encode($file))
//   ."--1a2a3a--";
 
// // Send email
 
// $success = mail($to,$subject,$message,$headers);
//    if (!$success) {
//   echo "Mail to " . $to . " failed .";
//    }else {
//   echo "Success : Mail was send to " . $to ;
//    }


require 'php-mailer-master/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'contactktcjalna@gmail.com';                 // SMTP username
$mail->Password = 'Ktc@240999';                           // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('contactktcjalna@gmail.com', 'Mailer');
$mail->addAddress('contactktcjalna@gmail.com');               // Name is optional
$mail->addAttachment('backup/ktcrough.sql');         // Add attachments
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Backup Rough';
$mail->Body    = 'This is auto generated email please dont reply.';


if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent<br>';
}










echo '<html>
<body>
Backup Completed <a href="index.php">Click Here to Go Back</a>
</body>
</html>
'

?>
