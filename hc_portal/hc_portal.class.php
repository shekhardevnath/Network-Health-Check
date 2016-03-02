<?php
class hcPortalApp extends DefaultApplication
{
   /**
   * Constructor
   * @return true
   */

   function run()
   {
   	 //prepare HC type array
   	  $this->hcType[] = (object) array('hc_type' => 'IN',       'platform' => 'AIR, SDP & DDS');
   	  $this->hcType[] = (object) array('hc_type' => 'MPBN',     'platform' => 'Router & Switch'); 	
   	  $this->hcType[] = (object) array('hc_type' => 'PS CORE',  'platform' => 'SGSN, GGSN, FIREWALL, eDNS & GIS_DNS_RADIOUS'); 	  	 
   	  $this->hcType[] = (object) array('hc_type' => 'RFS',      'platform' => 'ERS, VS, & mMoney');   	  
	  $this->hcType[] = (object) array('hc_type' => 'VAS_DMS',  'platform' => 'DMS');
   	  $this->hcType[] = (object) array('hc_type' => 'VAS_MMS',  'platform' => 'MMSC');
   	  $this->hcType[] = (object) array('hc_type' => 'VAS_P4M',  'platform' => 'Pay4Me'); 	
   	  $this->hcType[] = (object) array('hc_type' => 'VAS_PRBT', 'platform' => 'PRBT'); 	 	
   	  $this->hcType[] = (object) array('hc_type' => 'VAS_SMS',  'platform' => 'SMSC'); 	 	
   	  $this->hcType[] = (object) array('hc_type' => 'VAS_UMB',  'platform' => 'UMB');   	  
   	  $this->hcType[] = (object) array('hc_type' => 'VAS_VSMS', 'platform' => 'VoiceSMS'); 	  	  
   	     	  
      $cmd = getUserField('cmd');

      switch ($cmd)
      {           
        case 'add'    : $screen = $this->saveRecord();   break;
        case 'update' : $screen = $this->updateRecord(); break;
        case 'edit'   : $screen = $this->showEditor();   break;
        case 'search' : $screen = $this->search();       break;           
        default       : $screen = $this->showMainPage();
      }

      echo $this->displayScreen($screen);      

      return true;

   }

   function showMainPage()
   {
   	  $info['table']  = GROUP_TBL;
   	  $info['fields'] = array('group_id','name','group_email');
   	  $info['debug']  = false;
   	  $info['where']  = '1 order by name';
   	  
   	  $data['group']   = select($info);   	     	  
   	  $data['hc_type'] = $this->hcType;
   	  
   	  unset($info);
   	  
   	  $info['table'] = HC_PORTAL_TBL;
   	  $info['debug'] = false;
   	  
   	  if($_SESSION['user_type'] == 'BO')
   	    $info['where'] = 'group_id=' . $_SESSION['group_id'] . ' and status="Open" order by hc_id desc limit 0,100';
   	  else
   	    $info['where'] = 'res_group_id='. $_SESSION['group_id'] .' and status="Open" order by hc_id desc limit 0,100';
   	      	  
   	  $data['hc'] = select($info);
   	  
   	  $data['start_date'] = date("Y-m-d");
  	  $data['end_date']   = date("Y-m-d");
   	     	  
      return createPage(HC_PORTAL_TEMPLATE, $data);
   }
   
   function search()
   {
   	 $hcID = getUserField('hc_id');
   	 
   	 $data['hc_id']      = $hcID;
   	 $data['start_date'] = getUserField('start_date') ? getUserField('start_date') : date("Y-m-d");
  	 $data['end_date']   = getUserField('end_date')   ? getUserField('end_date')   : date("Y-m-d");
   	 
   	 $info['table'] = HC_PORTAL_TBL;
   	 $info['debug'] = false;
   	 
   	 if($hcID)
   	 {
   	 	 $info['where'] = 'hc_id=' . $hcID;
   	 }
   	 else
   	 {
   	 	 $startDate = getUserField('start_date');
   	 	 $dateParts = explode('-', getUserField('end_date'));  		
  		 $endDate   = date("Y-m-d", mktime(0, 0, 0, $dateParts[1], $dateParts[2]+1, $dateParts[0]));
  		 
  		 if($_SESSION['user_type'] == 'BO')
   	    $info['where'] = 'group_id=' . $_SESSION['group_id'];
   	   else
   	    $info['where'] = 'res_group_id='. $_SESSION['group_id'];
  		 
  		 $info['where'] .= ' and hc_date between ' . q($startDate) . ' and ' . q($endDate) . ' order by hc_id desc';
   	 }
   	 
   	 $data['hc']  = select($info);
   	 $data['cmd'] = 'search'; 
   	 
   	 return createPage(HC_PORTAL_TEMPLATE, $data);
   }
   
   function showEditor()
   {
   	 $data['cmd']   = 'edit';   	 
   	 
   	 $info['table'] = HC_PORTAL_TBL;
   	 $info['debug'] = false;
   	 $info['where'] = 'hc_id=' . getUserField('hc_id'); 
   	 
   	 $data['hc']    = select($info);
   	 $data['hc_id'] = getUserField('hc_id');
   	 
   	 return createPage(HC_PORTAL_TEMPLATE, $data);
   }
   
   function saveRecord()
   {
   	 $data['group_id']         = $_SESSION['group_id'];
   	 $data['sub_group_id']     = $_SESSION['sub_group_id'];
   	 $data['hc_type']          = getUserField('hc_type');
   	 $data['platform']         = getPlatform(getUserField('hc_type'), $this->hcType);
   	 $data['hc_by']            = $_SESSION['username'];
   	 $data['hc_date']          = date("Y-m-d H:i:s");
   	 $data['comment']          = getUserField('comment');
   	 $data['res_group_id']     = getUserField('res_group_id');   	    	 
   	 $data['email_to']         = implode(',', getUserField('selected_to_recipient_list'));
   	 $data['email_cc']         = implode(',', getUserField('selected_cc_recipient_list'));
   	 $data['status']           = stristr(STATUS_CHECK_ID, $data['email_to']) ? 'Close' : 'Open';
   	 
   	 $info['table'] = HC_PORTAL_TBL;
   	 $info['debug'] = false;
   	 $info['data']  = $data;
   	 
   	 $result = insert($info);
   	 
   	 //save the attachment
   	 if($result)
   	 { 
   	 	 $hcIncr              = 1;
   	 	 $attachment          = array();
   	 	 $attachmentCount     = getUserField('file_browser_count');   	 	    	 	 
   	 	 $attachmentYearPath  = DOCUMENTS_DIR . '/hc/' . date('Y');
   	 	 $attachmentMonthPath = $attachmentYearPath . '/' . date('F');
   	 	 
   	 	 if(!file_exists($attachmentYearPath))
			 {
			   mkdir($attachmentYearPath);
			 }
			 if(!file_exists($attachmentMonthPath))
			 {
			   mkdir($attachmentMonthPath);
			 }
			 
			 for($incr=1; $incr<=$attachmentCount; $incr++)
			 {			 
			   $destPath  = $attachmentMonthPath . '/' . $result['newid'] . '_' . $_FILES['attachment' . $incr]['name'];
			   $fileSaved = move_uploaded_file($_FILES['attachment' . $incr]['tmp_name'], $destPath);			   
			   
			   if($fileSaved)
			   { 
			   	 $attachment[] = $destPath;		   	 
			     $relAttachment .= '<a href="' . ATTACHMENT_DIR . '/' . date('Y') . '/' . date('F') . '/' . $result['newid'] . '_' . $_FILES['attachment' . $incr]['name'] . '">HC' . $hcIncr++ . '</a> ';			     
			   }
			 }
			 
			 if($relAttachment)
			 {
			 	 unset($info);
			 	 
			 	 $info['table'] = HC_PORTAL_TBL;
			 	 $info['debug'] = false;
			 	 $info['data']  = array('attachment' => $relAttachment); 
			 	 $info['where'] = 'hc_id=' . $result['newid'];
			 	 
			 	 $uptated = update($info);			 	 
			 }
			 
			 //send mail
   	   $mailFrom[$_SESSION['email']] = $_SESSION['name'];
   	   $mailTo  = getRecipient($data['email_to']);
   	   $mailCC  = getRecipient($data['email_cc']);
   	   $subject = getUserField('hc_type') . " Health Check (ID # ". $result['newid'] .") Status of " . date("Y-m-d");
   	   $body    = "<font face='Calibri'>Dear concerned,<br><br>Today's Health Check of " . getUserField('hc_type') . " has been done with the BO comment below: <br><br>\""
   	              . stripslashes(getUserField('comment')) . "\"
   	              <br>Please provide <a href='". FEEDBACK_URL ."'>feedback</a> here.
   	              <br>Regards,<br>" . $_SESSION['name']. "</font>";
   	   
   	   //send mail
   	   sendMail($mailFrom, $mailTo, $mailCC, $mailBCC, $subject, $body, $attachment);
   	   
   	   //add a record to activity manager for the user   	   
   	   unset($info);
   	   unset($data);
   	   
   	   $data['group_id']      = $_SESSION['group_id'];
   	   $data['sub_group_id']  = $_SESSION['sub_group_id'];
   	   $data['activity_type'] = 'HC of ' . getUserField('hc_type');
   	   $data['creator']       = $_SESSION['username'];
   	   $data['create_date']   = date("Y-m-d H:i:s");
   	   $data['holding_by']    = $_SESSION['username'];
   	   $data['status']        = 'Close';
   	   
   	   $info['table'] = ACTIVITY_MANAGER_TBL;
   	   $info['debug'] = false;
   	   $info['data']  = $data;
   	   
   	   $result = insert($info);
   	      	   
   	   unset($info);
   	   unset($data);
   	   
   	   $data['activity_id']   = $result['newid'];
   	   $data['assigned_by']   = $_SESSION['username'];
   	   $data['assigned_to']   = '';
   	   $data['assigned_date'] = date("Y-m-d H:i:s");
   	   $data['dead_line']     = date("Y-m-d H:i:s");
   	   $data['comment']       = 'HC of ' . getUserField('hc_type') . ' done.';
   	   
   	   $info['table'] = ACTIVITY_LOG_TBL;
   	   $info['debug'] = false;
   	   $info['data']  = $data;
   	   
   	   $result = insert($info);
   	 }
   	 
   	 header('location: ' . HC_PORTAL_URL);
     exit;   	 
   }
   
   function updateRecord()
   {
   	 $hcID     = getUserField('hc_id');
   	 $feedback = getUserField('feedback');
   	 
   	 $info['table'] = HC_PORTAL_TBL;
   	 $info['debug'] = false;
   	 $info['where'] = 'hc_id=' . $hcID;
   	 
   	 $result = select($info);
   	 $hcData = $result[0];
   	 
   	 //update necessary data
   	 $data['feedback']      = $feedback;
   	 $data['feedback_by']   = $_SESSION['username'];
   	 $data['feedback_date'] = date("Y-m-d H:i:s");
   	 $data['status']        = 'Close';
   	 
   	 $info['data'] = $data;   	 
   	 
   	 $result = update($info);
   	 
   	 //send mail
   	 if($result)
   	 {
   	   $mailFrom[$_SESSION['email']] = $_SESSION['name'];
   	   $mailTo  = getRecipient($hcData->email_to);
   	   $mailCC  = getRecipient($hcData->email_cc);
   	   $subject = "Feedback: " . $hcData->hc_type . " Health Check (ID # ". $hcData->hc_id .") Status of " . substr($hcData->hc_date, 0, 10);
   	   $body    = "<font face='Calibri'>Dear concerned,<br><br>Please find the feedback below: <br><br>\""
   	              . stripslashes($feedback) . 
   	              "\"
   	              <br>BO comment was:<br>
   	              \"" . stripslashes($hcData->comment) . "\"
   	              <br>Regards,<br>" . $_SESSION['name']. "</font>";
   	   
   	   $mailTo[$hcData->hc_by . '@grameenphone.com'] = $hcData->hc_by;           
   	   
   	   sendMail($mailFrom, $mailTo, $mailCC, $mailBCC, $subject, $body, $attachment);   	   
   	 }

     header('location: ' . HC_PORTAL_URL);
     exit;   	 
   } 
}