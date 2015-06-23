<?php

define('IN_ECS', true);
require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . '/includes/cls_json.php');








    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "it@pbcc.ca";
    $email_subject = "=?UTF-8?B?".base64_encode($_REQUEST['contact-subject'])."?=";
	
	$headers = '';
	$message = '';

  function died($errorParam) {
	  
	  	$json   = new JSON;
		
        // your error code can go here
        $error  = '<font style="font-size:1.4em;">' . $_LANG['contact_error_sorry'] . '</font>';
        $error .= '<font style="font-size:1.4em;">' . $_LANG['contact_error_appears'] . '</font>';
        $error .= '<font style="font-size:1.4em;">' . $errorParam."<br /><br />" . '</font>';
        $error .= '<font style="font-size:1.4em;">' . $_LANG['contact_error_fix'] . '</font>';
		
        $result = array('error' => $errorParam, 'message' => $message, 'content' => $headers);

		clear_cache_files();
	
		die($json->encode($result));
    }

    // validation expected data exists
    /*if(!isset($_REQUEST['contact-name']) ||
        !isset($_REQUEST['contact-email']) ||
        !isset($_REQUEST['contact-subject']) ||
        !isset($_REQUEST['contact-content'])) {
        died($_LANG['contact_error']);      
		
    }*/

    $full_name = $_REQUEST['contact-name']; // required
    $email_from = $_REQUEST['contact-email']; // required
    $subject = $_REQUEST['contact-subject'];
    $message= $_REQUEST['contact-content']; // required

    $error_message = '<ul>';
	if($_REQUEST['contact-email'] == ''){$error_message .= '<li><font style="font-size:1.4em;">' . $_LANG['contact_email_empty'] . '</font></li>';}
	else {
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
		if(!preg_match($email_exp,$email_from)) {
			$error_message .= '<li><font style="font-size:1.4em;">' . $_LANG['contact_email_invalid'] . '</font></li>';
		}
	}
	if($_REQUEST['contact-name'] == ''){$error_message .= '<li><font style="font-size:1.4em;">' . $_LANG['contact_name_empty'] . '</font></li>';}
	//if($_REQUEST['contact-subject'] == ''){$error_message .= '<li><font style="font-size:1.4em;">' . $_LANG['contact_subject_empty'] . '</font></li>';}
	if($_REQUEST['contact-content'] == ''){$error_message .= '<li><font style="font-size:1.4em;">' . $_LANG['contact_content_empty'] . '</font></li>';}
	$error_message .= '</ul>';
	//$error_message = '';
  if($error_message != "<ul></ul>") {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
	$email_from = '<'.$_REQUEST['contact-email'].'>';

    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Full Name: ".clean_string($full_name)."\n";
    $email_message .= "E-mail: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($subject)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

$headers = $email_from;
$mail->CharSet = "utf-8"; //ÉèÖÃ×Ö·û¼¯±àÂë
$message = '';
if(!(mail($email_to, $email_subject, $email_message, $headers))) {
	
	/*$message .= '<a href="#close" title="Close" class="close">X</a>';
	$message .= '<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
				<td style="verticle-align:middle;">';
    $message .= '<i class="glyphicon glyphicon-remove-circle" style="color:#C51919;font-size:1.8em;"></i>';
	$message .= '</td>';
	$message .= '<td width="10">';
	$message .= '</td>';
	$message .= '<td style="verticle-align:middle;">';
	$message .= '<font style="font-size:1.4em;">' . $_LANG['contact_result_fail'] . '</font>';
	$message .= '</td>
				</tr>
				</table>';*/
				
	$message .= '<font style="font-size:1.4em;">' . $_LANG['contact_result_fail'] . '</font>';
	
	
} else {
	
	/*$message .= '<a href="#close" title="Close" class="close">X</a>';
	$message .= '<table border="0" cellspacing="0" cellpadding="0" style="width:100%;">
				<tr>
				<td style="verticle-align:middle;">';
    $message .= '<i class="glyphicon glyphicon-ok-circle" style="color:#19C589;font-size:1.8em;"></i>';
	$message .= '</td>';
	$message .= '<td width="10">';
	$message .= '</td>';
	$message .= '<td style="verticle-align:middle;">';
	$message .=  '<font style="font-size:1.4em;">' . $_LANG['contact_result_success'] . '</font>';
	$message .= '</td>
				</tr>
				</table>';*/
	
	$message .=  '<font style="font-size:1.4em;">' . $_LANG['contact_result_success'] . '</font>';
	
	
}

	$json   = new JSON;
	

	$result = array('error' => $error, 'message' => $message, 'content' => $headers);


    clear_cache_files();
	
    die($json->encode($result));
?>