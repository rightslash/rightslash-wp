<?php  
	if(isset($_REQUEST['send'])){
		$sub = $_REQUEST['subject'];
		$name = $_REQUEST['c_name'];	
		$desc = $_REQUEST['message'];
		$email = $_REQUEST['c_email'];
		
        $to = 'rightslash24@gmail.com';
        $subject = 'You have new contact request from your client';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        $body = '
            <table class="table table-condensed" width="400">
                <tr>
                    <th align="left" width="50%">Name</th>
                    <td align="left">'.$name.'</td>
                </tr>
                <tr>
                    <th align="left" width="50%">Email</th>
                    <td align="left">'.$email.'</td>
                </tr>
                <tr>
                    <th align="left">Subject</th>  
                    <td align="left">'.$sub.'</td>
                </tr>
                <tr>
                    <th align="left">Description</th>  
                    <td align="left">'.$desc.'</td>
                </tr>

            </table>
        ';

		//$sql = "insert into feedback (`ticket_no`,`communication`,`efficiency`,`satisfaction`,`comments`,`status`) values ('$ticket_no','$communication','$effiency','$satisfaction','$comments',0)";
		//echo $sql;
		if(mail($to,$subject,$body,$headers))
		{
			echo "Thank you for contact with us";
		}
		else
		{ 
			echo "error";
		}
	}

?>