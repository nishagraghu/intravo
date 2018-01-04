<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Send email via Gmail SMTP server in PHP</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
     
          <?php
        
              require 'phpmailer/PHPMailerAutoload.php';
              
                  $user ='root';
                  $pass ='';
                  $db ='taz';
                  $db1 = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");

                  $query = "SELECT gmail FROM taz1";
                  $response = @mysqli_query($db1,$query);
                  if($response)
                       { 
                            
								while($row = mysqli_fetch_array($response)){
                                $name[$i] = $row["gmail"];
								if($name[$i] == NULL)
								{	$name[$i] ='nishag619@gmail.com';}
								$i++;
                        }
                        }
                  else 
                       {
                        echo "sorry";
                        }
                   $email = 'assistanttez@gmail.com';                    
                    $password = '98959' ;
                   
					
                    $message = 'Check out Tez, a simple and secure payments app by Google. Make your first payment and we both get ₹51! https://g.co/tez/p96nk';
                    $subject = 'Check out Tez';

                    $mail = new PHPMailer;

                    $mail->isSMTP();

                    $mail->Host = 'smtp.gmail.com';

                    $mail->Port = 587;

                    $mail->SMTPSecure = 'tls';

                    $mail->SMTPAuth = true;

                    $mail->Username = $email;

                    $mail->Password = $password;

                    $mail->setFrom('from@example.com', 'First Last');

                    $mail->addReplyTo('replyto@example.com', 'First Last');
			 
				   
		            
                    

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);
                for($j=0;$j<480;$j++)
				 {      
			        			 
		           	 $mail->addAddress($name[$i]);
                    if (!$mail->send()) {
                       $error = "Mailer Error: " . $mail->ErrorInfo;
                        ?><script>alert('<?php echo $error ?>');</script><?php
                    } 
                    else {
					echo '<script>alert("Message sent!''");</script>';
					echo $name[$j];
				
                        echo "<br>";
                    }
               }
        ?>
    </body>
</html>
