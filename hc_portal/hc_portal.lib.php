<?php
function getPlatform($hcType, $hcTypeArray)
{
	$platform = '';
	
	for($incr=0 ; $incr < count($hcTypeArray) ; $incr++)
	{ 
		if($hcType == $hcTypeArray[$incr]->hc_type)
		  $platform = $hcTypeArray[$incr]->platform;  		
	}
	
	return $platform;
}

function sendMail( $from, $to, $cc, $bcc, $sub, $body, $attach)
{
  $phpMailer   = new phpMailer();
  if(count($from))
    foreach($from as $email => $fullname)
      $phpMailer->set_from($email , $fullname);
  
  if(count($to))
    foreach($to as $email => $fullname)
      $phpMailer->add_to($email , $fullname);
  
  if(count($cc))
    foreach($cc as $email => $fullname)
      $phpMailer->add_cc($email , $fullname);
  
  if(count($bcc))
    foreach($bcc as $email => $fullname)
      $phpMailer->add_bcc($email , $fullname);
  
  $phpMailer->set_subject($sub);
  $phpMailer->set_html(nl2br($body));
  
  if(count($attach))
    foreach($attach as $attachment)      
      $phpMailer->add_attachment($attachment, basename($attachment),'');
  
  $phpMailer->set_smtp_host("10.10.20.194");
  
  if ($phpMailer->send())  
    return true;  
  else
    return false;
}

function getRecipient($recipient)
{
	if($recipient)
	{
		$groups = explode(',', $recipient);
		
		$info['table'] = GROUP_TBL;
		$info['debug'] = false;
		$info['where'] = '';
		
		foreach($groups as $groupID)
		  $info['where'] .= $info['where'] ? ' or group_id=' . $groupID : 'group_id=' . $groupID;
		
		$result = select($info);
		
		foreach($result as $row)
		  $data[$row->group_email] = $row->name;
	}
	return $data;
}
?>