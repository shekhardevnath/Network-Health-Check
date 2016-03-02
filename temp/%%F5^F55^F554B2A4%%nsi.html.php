<?php /* Smarty version 2.6.6, created on 2012-06-02 07:16:54
         compiled from C:/wamp/www/nm_tx/nsi/nsi.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/nsi/nsi.html', 43, false),array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/nsi/nsi.html', 95, false),array('modifier', 'substr', 'C:/wamp/www/nm_tx/nsi/nsi.html', 280, false),)), $this); ?>
<link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
<script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>
<script language="JavaScript" type="text/javascript" src="/nm_tx/ext/prototype/prototype.js"></script>
<body>
<!--start main contents table-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right" width="10" height="10"><img src="/nm_tx/common/image/table/top_lft.gif"></td>
    <td background="/nm_tx/common/image/table/top_mid.gif"></td>
    <td align="left" width="10" height="10"><img src="/nm_tx/common/image/table/top_rht.gif"></td>
  </tr>
  <tr>
    <td align="right" width="10" background="/nm_tx/common/image/table/lft_border.gif"></td>
    <td bgcolor="#FFFFFF" align="left" class="contentArea">    
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->    
      <table border="0" width="100%">
      <tr align="center">
        <td bgcolor="#558ED5" style="height:25px"><font size="2" color="white"><b>Network Service Incident</b></font></td>      
      </tr>      
      <tr>      	
      	<td>
      	  <!--SMS send application stars here-->
      	  <form name="sendSMSForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onSubmit="return doSubmit(this);">
	          <input type="hidden" name="cmd" value="save_and_sms">
	          <input type="hidden" name="notice_id"  id="notice_id" value="<?php echo $this->_tpl_vars['notice_id']; ?>
">
      	    <table border="0" cellpadding="10" cellspacing="1" bgcolor="black">
      	    	<tr bgcolor="white">
      	    		<td>
      	    			<table border="0" cellspacing="1" cellpadding="5">
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label">Group:</lable></td>
      	    					<td><label class="label">Fault Type:</lable></td>
      	    					<td><label class="label">Notice Type:</lable></td>
      	    					<td><label class="label">Visible:</lable></td>
      	    					<td><label class="label">Outage:</lable></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td>
      	    						<select name="group_name">
      	    							<option value="">Select One</option>
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_list'],'output' => $this->_tpl_vars['group_list'],'selected' => $this->_tpl_vars['group_name']), $this);?>

            						</select>
      	    					</td>
								<td>
      	    						<select name="fault_type" id="fault_type" onChange="addDefaultRecipients(this); smsBox('show_hide', this); check(this);">
      	    							<option value="">Select One</option>
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_type_list'],'output' => $this->_tpl_vars['fault_type_list'],'selected' => $this->_tpl_vars['fault_type']), $this);?>

            						</select>
      	    					</td>
      	    					<td>
      	    						<select name="notice_type" id="notice_type" onChange="prepareSMS();" style="widows:90px">
      	    							<option value="">Select One</option>
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['notice_type_list'],'output' => $this->_tpl_vars['notice_type_list'],'selected' => $this->_tpl_vars['notice_type']), $this);?>

            						</select>
      	    					</td>
      	    					<td>
      	    						<select name="visible_list" id="visible" disabled="disabled" style="width:65px">
										<option value="">Select One</option>      	    							
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['visible'],'output' => $this->_tpl_vars['visible'],'selected' => $this->_tpl_vars['visibility']), $this);?>

            						</select>
									<input type="hidden" name="visible" value="<?php echo $this->_tpl_vars['visibility']; ?>
" id="hidden_visible">
      	    					</td>      	    					
      	    					<td>
      	    						<select name="outage">
      	    							<option value="">Select One</option>
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['outage_list'],'output' => $this->_tpl_vars['outage_list'],'selected' => $this->_tpl_vars['outage']), $this);?>

            						</select>
      	    					</td>
      	    				</tr> 
							
							<!--- Start Modification by Amjad -->							
							<tr bgcolor="#F8F8F8">
      	    					<td colspan="3" align="center"><label class="label">Notification:</lable></td>
      	    					<td colspan="3" align="center"><label class="label">SubCenter:</lable></td>
								</tr> 
							<tr bgcolor="#F8F8F8">								
							   <td colspan="3" align="center">
									<input type="radio" name="notification" value="Fault" onClick="changeVisible(this);">Fault &nbsp; &nbsp; &nbsp;
									<input type="radio" name="notification" value="Incident"  onClick="changeVisible(this);">Incident &nbsp; &nbsp; &nbsp;
									<input type="radio" name="notification" value="Commercial"  onClick="changeVisible(this);">Commercial
								</td>									
							    <td colspan="3" align="center">
      	    						<select name="sub_name" id="sub_name"   disabled="disabled" onChange="addSubRecipients(this); smsBox('show_hide', this);">
      	    							<option  value="" >Select One</option>
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['subcenter_name'],'output' => $this->_tpl_vars['subcenter_name'],'selected' => $this->_tpl_vars['sub_name']), $this);?>

            						</select> 									
								</td>
							</tr>
							<!--- End Modification by Amjad -->		
												    	    				     	    				
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label">General Title:</lable></td>
      	    					<td colspan="4"><textarea rows="2" cols="65" id="general_title" name="general_title"><?php echo ((is_array($_tmp=$this->_tpl_vars['general_title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>      	    				
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label" id="label_st">ST:</lable></td>
      	    					<td colspan="4">
								  <input type="text" size="53" onKeyUp="prepareSMS();" onKeyDown="prepareSMS();" id="text_ft" name="text_ft" value="<?php echo $this->_tpl_vars['text_ft']; ?>
">
								  <input type="text" size="10" id="ft_date" name="ft_date" readonly value="<?php echo $this->_tpl_vars['ft_date']; ?>
"
								         onClick="displayCalendar(document.sendSMSForm.ft_date,'yyyy-mm-dd',this);" onChange="prepareSMS();">	 
								</td>								
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label" id="label_et">ET:</lable></td>
      	    					<td colspan="4">
								  <input type="text" size="53" onKeyUp="prepareSMS();" onKeyDown="prepareSMS();" id="text_et" name="text_et" value="<?php echo $this->_tpl_vars['text_et']; ?>
">
								  <input type="text" size="10" id="rt_date" name="rt_date" readonly value="<?php echo $this->_tpl_vars['rt_date']; ?>
"
								         onClick="displayCalendar(document.sendSMSForm.rt_date,'yyyy-mm-dd',this);" onChange="prepareSMS();">	 
								</td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label">Title:</lable></td>
      	    					<td colspan="4"><textarea rows="2" cols="65" onKeyUp="prepareSMS();" onKeyDown="prepareSMS();" id="title" name="title"><?php echo ((is_array($_tmp=$this->_tpl_vars['title'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label">Reason:</lable></td>
      	    					<td colspan="4"><textarea rows="2" cols="65" onKeyUp="prepareSMS();" onKeyDown="prepareSMS();" id="reason" name="reason"><?php echo ((is_array($_tmp=$this->_tpl_vars['reason'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label">Impact:</lable></td>
      	    					<td colspan="4"><textarea rows="2" cols="65" onKeyUp="prepareSMS();" onKeyDown="prepareSMS();" id="impact" name="impact"><?php echo ((is_array($_tmp=$this->_tpl_vars['impact'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td><label class="label">Status:</lable></td>
      	    					<td colspan="4"><textarea rows="2" cols="65" onKeyUp="prepareSMS();" onKeyDown="prepareSMS();" id="status" name="status"><?php echo ((is_array($_tmp=$this->_tpl_vars['status'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>      	    				
      	    				<tr bgcolor="#F8F8F8" id="sms_tr">
      	    					<td>
								  <label class="label" id="sms_text">Message:</lable><br><br>								  
								</td>
      	    					<td colspan="4">
								  <div id='add_remove' style="display:none">
								    <img src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/add.png" width="20" height="20" onClick="smsBox('add', this);">
								    <img src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/close.gif" width="20" height="20" onClick="smsBox('remove', this)">
								  </div>
								  <!--<div style="height:136px; overflow:auto; background:#FFFFFF">-->
								    <textarea rows="10" cols="65" id="sms" name="sms" onKeyUp="chLimitExceedWorning(this);"><?php echo ((is_array($_tmp=$this->_tpl_vars['sms'][0])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
									<textarea rows="10" cols="65" id="sms1" name="sms1" onKeyUp="chLimitExceedWorning(this);" style=<?php if ($this->_tpl_vars['sms'][1]): ?>"display:block"<?php else: ?>"display:none"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['sms'][1])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
									<textarea rows="10" cols="65" id="sms2" name="sms2" onKeyUp="chLimitExceedWorning(this);" style=<?php if ($this->_tpl_vars['sms'][2]): ?>"display:block"<?php else: ?>"display:none"<?php endif; ?>><?php echo ((is_array($_tmp=$this->_tpl_vars['sms'][2])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
								  <!--</div>	-->
								</td>
      	    				</tr>
      	    			</table>
      	    		</td>
      	    		<td valign="top">
      	    			<table border="0" cellpadding="5" cellspacing="1">
      	    				<tr bgcolor="#F8F8F8">
      	    					<td>
      	    						<label class="label">Option:</label>
      	    					</td>
      	    					<td>
      	    						<select style="width:255px" name="option" id="option" onChange="loadSearchList(this);">
      	    							<option value="group">Group</option>
      	    							<option value="employee">Employee</option>    	  							
            						</select>
      	    					</td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td>
      	    						<label class="label">Search:</label>
      	    					</td>
      	    					<td>
      	    						<input type="text" value="" style="width:255px" name="filter" id="filter" onKeyUp="filterList(this);">
      	    					</td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td colspan="2">
      	    						<select size="13" multiple style="width:320px" name="searching_list" id="searching_list" ondblclick="addSelectedOptions();">    	  							
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['search_list'],'output' => $this->_tpl_vars['search_list']), $this);?>

            						</select>
      	    					</td>    	  					
      	    				</tr>
      	    				<tr>
      	    					<td colspan="2" align="center">
      	    						<input type="image" name="search" src="/nm_tx/common/image/down_arrow.png" border="0" width="20" height="28" onClick="return addSelectedOptions();">    	  						
      	    						<input type="image" name="search" src="/nm_tx/common/image/up_arrow.png" border="0" width="20" height="28" onClick="return removeSelectedOptions();">    	  						
      	    					</td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td colspan="2">
      	    						<label class="label">Recipient List:</label>
      	    					</td>    	  					
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td colspan="2">
      	    						<select size="13" multiple style="width:320px" name="recipient_list[]" id="recipient_list" ondblclick="removeSelectedOptions();">        							
      	    							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['recipient_list'],'output' => $this->_tpl_vars['recipient_list']), $this);?>

            						</select>
      	    					</td>    	  					
      	    				</tr>
      	    			</table>
      	    		</td>
      	    		<td>
      	    			<input type="submit" value=" Send SMS  " name="send_sms"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
      	    			<input type="submit" value=" Save Data " name="save_data">
      	    		</td>
      	    	</tr>
      	    </table>
      	  </form>
      	  <!--SMS send application ends here-->      	  
      	</td>      	
      </tr>   
	  <!--SMS Search application starts here-->
	  <tr>
	  <form name="searchForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="cmd" value="search">
	    <td bgcolor="#000000">		
		  <table cellpadding="5" cellspacing="1" border="0" bgcolor="#FFFFFF" width="100%">
		    <tr bgcolor="white">
			  <td>
			    <label class="label">Date From: </label>
				<input name="date_from" value="<?php echo $this->_tpl_vars['date_from']; ?>
" size="10" onClick="displayCalendar(document.searchForm.date_from,'yyyy-mm-dd',this);">
			  </td>	
			  <td>
			    <label class="label">Date To: 
				</label><input name="date_to" value="<?php echo $this->_tpl_vars['date_to']; ?>
" size="10" onClick="displayCalendar(document.searchForm.date_to,'yyyy-mm-dd',this);">
			  </td>
			  <td>
			    <label class="label">Group:</label>
				<select name="search_group_name">
      	    	  <option value="">All</option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_list'],'output' => $this->_tpl_vars['group_list'],'selected' => $this->_tpl_vars['search_group_name']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Fault Type:</label>
				<select name="search_fault_type">
      	    	<option value="">All</option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_type_list'],'output' => $this->_tpl_vars['fault_type_list'],'selected' => $this->_tpl_vars['search_fault_type']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Visible:</label>
				<select name="search_visible">
      	    	  <option value="">All</option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['visible'],'output' => $this->_tpl_vars['visible'],'selected' => $this->_tpl_vars['search_visible']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Outage:</label>
				<select name="search_outage">
      	    	  <option value="">All</option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['outage_list'],'output' => $this->_tpl_vars['outage_list'],'selected' => $this->_tpl_vars['search_outage']), $this);?>

            	</select>
			  </td>
			  <td><input type="submit" value="Search History" name="searchHistory"></td>
			</tr>
		  </table>		
		</td>
	  </tr>
	  </form>  
      <!--SMS Search application ends here-->   
      <tr>
      	<td>
      		<table width="100%" cellspacing="1" cellpadding="5" border="0">
      			<tr bgcolor="#7C93F4">
      				<td align="center"><b>Incident ID</b></td>
      				<td align="center"><b>Incident Type</b></td>
					<td align="center"><b>Visible to All</b></td>
					<td align="center"><b>Fault Type</b></td>
					<td align="center"><b>Outage</b></td>
      				<td><b>Title</b></td>
      				<td align="center"><b>Group</b></td>      				
      				<td align="center"><b>User</b></td>
      				<td align="center"><b>Time</b></td>
      				<td align="center"><b>Action</b></td>
      			</tr>
      			<?php if (count($_from = (array)$this->_tpl_vars['all_notices'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
      			  <tr bgcolor="#BFCAF9">
      				  <td align="center"><?php echo $this->_tpl_vars['row']->notice_id; ?>
</td>
      				  <td align="center"><?php echo $this->_tpl_vars['row']->notice_type; ?>
</td>
					  <td align="center"><?php echo $this->_tpl_vars['row']->visible_to_all; ?>
</td>
					  <td align="center"><?php echo $this->_tpl_vars['row']->fault_type; ?>
</td>
					  <td align="center"><?php echo $this->_tpl_vars['row']->outage; ?>
</td>
      				  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->general_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
      				  <td align="center"><?php echo $this->_tpl_vars['row']->notice_group; ?>
</td>      				  
      				  <td align="center"><?php echo $this->_tpl_vars['row']->send_by; ?>
</td>
      				  <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->send_time)) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 16) : substr($_tmp, 0, 16)); ?>
</td>
      				  <td>
					    <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?notice_id=<?php echo $this->_tpl_vars['row']->notice_id; ?>
">Update</a>
						/<a href="/nm_tx/mni_portal/mni_portal.php?notice_id=<?php echo $this->_tpl_vars['row']->notice_id; ?>
">MNI</a>
						/<a href="JavaScript:void(0);" onClick="showHistory('<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=popup&notice_id=<?php echo $this->_tpl_vars['row']->notice_id; ?>
');">History</a>
					  </td>
      			  </tr>
      			<?php endforeach; unset($_from); endif; ?>
      		</table>
      	</td>
      </tr>    
      </table>        
    <!-------------------------------------->
    <!--the application template ends here-->
    <!-------------------------------------->    
    </td>
    <td align="left" width="10" background="/nm_tx/common/image/table/rht_border.gif"></td>
  </tr>
  <tr>
    <td align="right" width="10" height="10"><img src="/nm_tx/common/image/table/bttm_lft.gif"></td>
    <td background="/nm_tx/common/image/table/bttm_mid.gif"></td>
    <td align="left" width="10" height="10"><img src="/nm_tx/common/image/table/bttm_rht.gif"></td>
  </tr>
</table>
<!--end main contents table-->
</body>