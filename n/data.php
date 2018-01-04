<?php
$user ='root';
$pass ='';
$db ='tez';
$db1 = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
echo "ok ok";
$query = "SELECT email FROM english";
$response = @mysqli_query($db1,$query);
if($response)
{ 
while($row = mysqli_fetch_array($response)){
$name[] = $row["email"];
}
}
else 
{
echo "sorry";
}

      $email = 'assistanttez@gmail.com';                    
                    $password = '9895981200' ;
                   
					
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

                    $mail->setFrom('from@example.com', 'drive.tez');

                    $mail->addReplyTo('replyto@example.com', 'drive.tezs');
              
			   

                    $mail->Subject = $subject;

                    $mail->msgHTML($message);
			 for($i=0;$i<480;$i++)
				 {      $to_id = $name[$i];
		            $mail->addAddress($name[$i]);
                   if( $mail->send())
				   {echo $name[$i];
				   echo '</br>';}
				echo $i;	
			 }    
                
?>