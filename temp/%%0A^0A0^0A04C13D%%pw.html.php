<?php /* Smarty version 2.6.6, created on 2015-09-23 10:25:38
         compiled from C:/wamp/www//nm_tx/pw/pw.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www//nm_tx/pw/pw.html', 55, false),array('modifier', 'date_format', 'C:/wamp/www//nm_tx/pw/pw.html', 83, false),array('modifier', 'stripslashes', 'C:/wamp/www//nm_tx/pw/pw.html', 98, false),)), $this); ?>
<link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
<script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>
<script language="JavaScript" type="text/javascript" src="/nm_tx/ext/prototype/prototype.js"></script>
<script language="JavaScript" type="text/javascript" src="/nm_tx/pw/DateTimePicker/datetimepicker.js"></script>
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
        <td bgcolor="#558ED5" style="height:25px"><font size="2" color="white"><b>Daily Planned Worked Management</b></font></td>
      </tr>      
      <tr>      	
      	<td>
      	  <!--SMS send application stars here-->
      	  <form name="sendSMSForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onSubmit="return doSubmitPW(this);">
	          <input type="hidden" name="cmd" value="pw_save">
	          <input type="hidden" name="pw_no" value="<?php echo $this->_tpl_vars['pw_no']; ?>
">
	          <input type="hidden" name="pw_id" value="<?php echo $this->_tpl_vars['pw_id']; ?>
">
      	    <table border="0" cellpadding="10" cellspacing="1" bgcolor="black">
      	    	<tr bgcolor="white" valign="top">
      	    		<td>
      	    			<table border="0" cellspacing="1" cellpadding="5" id="msg_tbl">
      	    				<tr bgcolor="#F8F8F8">
                               <td colspan="5">
                                  <table border="0" cellspacing="1" cellpadding="5">
                                    <tr bgcolor="#F8F8F8">
              	    					<td id="type_label" width="17%"><label class="label">Type:</lable></td>
      	            					<td id="severity_label" width="13%"><label class="label">Severity:</lable></td>
      	    	        				<td width="20%" id="initiator_group_label"><label class="label">Initiator Group:</lable></td>
      	    	        				<td width="20%" id="executor_group_label"><label class="label">Executor Group:</lable></td>
      	    			        		<td  width="10%" align="left" id="outage_label"><label class="label">Outage:</lable></td>
      	    					        <td align="left" id="date_label"><label class="label">PW For:</lable></td>
                                    </tr>
                                   </table>
      	    				   </td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
                               <td colspan="5">
                                  <table border="0" cellspacing="1" cellpadding="5">
                                    <tr bgcolor="#F8F8F8">
      	    					        <td>
      	    						        <select name="pw_notice_type"  onchange="setDefaultGroups()">
      	    							      <option value=""></option>
            							         <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_notice_type_list'],'output' => $this->_tpl_vars['pw_notice_type_list'],'selected' => $this->_tpl_vars['pw_notice_type']), $this);?>

            						        </select>
      	    					        </td>
      	    					        <td>
      	    						        <select name="pw_severity" onchange="setAsSeverity(this)">
      	    							      <option value=""></option>
            							        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_severity_list'],'output' => $this->_tpl_vars['pw_severity_list'],'selected' => $this->_tpl_vars['pw_severity']), $this);?>

            						        </select>
      	    					        </td>
      	    					        <td>
      	    						       <select name="pw_originator_group" onchange="setDefaultExecutorGroup(this);checkPWType();">
      	    							      <option value=""></option>
            							        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_originator_group_list'],'output' => $this->_tpl_vars['pw_originator_group_list'],'selected' => $this->_tpl_vars['pw_originator_group']), $this);?>

            						       </select>
      	    					        </td>
      	    					        <td>
      	    						        <select name="pw_executor_group" onchange="checkPWType();">
      	    							      <option value=""></option>
            							      <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_executor_group_list'],'output' => $this->_tpl_vars['pw_executor_group_list'],'selected' => $this->_tpl_vars['pw_executor_group']), $this);?>

            						        </select>
      	    					        </td>
      	    					        <td align="left">
      	    						        <select name="outage_flag">
      	    							      <option value=""></option>
            							      <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['outage_list'],'output' => $this->_tpl_vars['outage_list'],'selected' => $this->_tpl_vars['outage_flag']), $this);?>

            						        </select>
      	    					        </td>
      	    					        <td align="left">
                                           <input type="Text" class="text" id="pw_execution_date" maxlength="20" size="10" name="pw_execution_date" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['pw_execution_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d") : smarty_modifier_date_format($_tmp, "%Y-%m-%d")); ?>
">
                                           <a href="javascript:NewCal('pw_execution_date','yyyymmdd',true,24,'dropdown',false)"><img src="/nm_tx/pw/images/cal.gif" width="16" height="16" border="0" alt="Pick a date" align="center"></a>
      	    					        </td>
                                    </tr>
                                   </table>
      	    				   </td>
      	    				</tr>
      	    				<tr>
      	    					<td colspan="5" style="height:1px"></td>
      	    				</tr>
      	    				<tr>
      	    					<td colspan="5" style="height:7px"></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8" id="pw_tr1">
      	    					<td><label class="label">PW Message:</lable></td>
      	    					<td colspan="4"><textarea rows="16" cols="90" id="pw_sms1" name="pw_sms1"><?php echo ((is_array($_tmp=$this->_tpl_vars['pw_sms1'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8" id="pw_tr2" <?php if ($this->_tpl_vars['pw_sms2'] != ""): ?> style="display:inline" <?php else: ?> style="display:none" <?php endif; ?>>
      	    					<td><label class="label">2nd Part (if needed):</lable></td>
      	    					<td colspan="4"><textarea rows="12" cols="90" id="pw_sms2" name="pw_sms2"><?php echo ((is_array($_tmp=$this->_tpl_vars['pw_sms2'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8"  id="pw_tr3" <?php if ($this->_tpl_vars['pw_sms3'] != ""): ?> style="display:inline" <?php else: ?>  style="display:none" <?php endif; ?>>
      	    					<td><label class="label">3rd Part (if needed):</lable></td>
      	    					<td colspan="4"><textarea rows="12" cols="90" name="pw_sms3"><?php echo ((is_array($_tmp=$this->_tpl_vars['pw_sms3'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8"  id="pw_tr4" <?php if ($this->_tpl_vars['pw_sms4'] != ""): ?> style="display:inline" <?php else: ?> style="display:none" <?php endif; ?>>
      	    					<td><label class="label">4th Part (if needed):</lable></td>
      	    					<td colspan="4"><textarea rows="12" cols="90" name="pw_sms4"><?php echo ((is_array($_tmp=$this->_tpl_vars['pw_sms4'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8" id="pw_tr5" <?php if ($this->_tpl_vars['pw_sms5'] != ""): ?> style="display:inline" <?php else: ?> style="display:none" <?php endif; ?>>
      	    					<td><label class="label">5th Part (if needed):</lable></td>
      	    					<td colspan="4"><textarea rows="12" cols="90" name="pw_sms5"><?php echo ((is_array($_tmp=$this->_tpl_vars['pw_sms5'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
      	    					<td>&nbsp;</td>
      	    					<td colspan="4" align="right"><input type="button" name="Contd" value="Add more Contd Part" onclick="addPWContdPart();"></td>
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
      	    				<tr bgcolor="#F8F8F8" id="recipient_label">
      	    					<td colspan="2">
      	    						<label class="label">Recipient List:</label>
      	    					</td>    	  					
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8" id="recipient_box">
      	    					<td colspan="2">
      	    						<select size="13" multiple style="width:320px" name="recipient_list[]" id="recipient_list" ondblclick="removeSelectedOptions();">        							
      	    							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['recipient_list'],'output' => $this->_tpl_vars['recipient_list']), $this);?>

            						</select>
      	    					</td>    	  					
      	    				</tr>
      	    			</table>
      	    		</td>
      	    		<td>
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
      <input type="hidden" name="cmd" value="search_pw">
	    <td bgcolor="#000000">		
		  <table cellpadding="5" cellspacing="1" border="0" bgcolor="#FFFFFF" width="100%">
		    <tr bgcolor="white">
			  <td>
			    <label class="label">Date From: </label>
				<input name="date_from" value="<?php echo $this->_tpl_vars['date_from']; ?>
" size="12" onClick="displayCalendar(document.searchForm.date_from,'yyyy-mm-dd',this);">
			  </td>	
			  <td>
			    <label class="label">Date To: 
				</label><input name="date_to" value="<?php echo $this->_tpl_vars['date_to']; ?>
" size="12" onClick="displayCalendar(document.searchForm.date_to,'yyyy-mm-dd',this);">
			  </td>
			  <td>
			    <label class="label">Message Type:</label>
				<select name="search_message_type">
      	    	  <option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_notice_type_list'],'output' => $this->_tpl_vars['pw_notice_type_list'],'selected' => $this->_tpl_vars['search_message_type']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Group:</label>
				<select name="search_group_name">
      	    	  <option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_originator_group_list'],'output' => $this->_tpl_vars['pw_originator_group_list'],'selected' => $this->_tpl_vars['search_group_name']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Severity:</label>
				<select name="search_fault_severity">
      	    	<option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pw_severity_list'],'output' => $this->_tpl_vars['pw_severity_list'],'selected' => $this->_tpl_vars['search_fault_severity']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Outage:</label>
				<select name="search_outage">
      	    	  <option value=""></option>
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
      				<td align="center" colspan="9"><b>Message Details</b></td>
      				<td align="center"><b>Action</b></td>
      			</tr>

                 <?php if (count($_from = (array)$this->_tpl_vars['pw_list'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['obj']):
?>
      			  <tr <?php if ($this->_tpl_vars['key']%2 == 0): ?> bgcolor="#EEEEEE" <?php else: ?> bgcolor="#EEFFEE" <?php endif; ?>>
                      <td colspan="9" width="90%">
                                      <!--textarea name="pw_details_view" rows="30" cols="100"  id="pw_details_view"-->
                                            <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->pw_sms1)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<br />
                                            <?php if ($this->_tpl_vars['obj']->pw_sms2 != ""): ?>
                                              <br /><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->pw_sms2)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<br />
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['obj']->pw_sms3 != ""): ?>
                                              <br /><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->pw_sms3)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<br />
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['obj']->pw_sms4 != ""): ?>
                                              <br /><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->pw_sms4)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<br />
                                            <?php endif; ?>
                                            <?php if ($this->_tpl_vars['obj']->pw_sms5 != ""): ?>
                                              <br /><?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->pw_sms5)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
<br />
                                            <?php endif; ?>
                                            <b><br />SMS To</b>: <?php echo $this->_tpl_vars['obj']->pw_smsto; ?>

                                      <!--/textarea-->
                       </td>
                       <td align="center">
                           <a href=<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=modify_pw&pw_id=<?php echo $this->_tpl_vars['key']; ?>
>Modify</a>&nbsp|&nbsp;<a onclick="return doConfirm('Are you sure, you delete the message?');" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=delete_pw&pw_id=<?php echo $this->_tpl_vars['key']; ?>
">Delete</a>&nbsp;|&nbsp;<a href=<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=write_pw>New</a>
                           <br /><br /><br />
                           <img id="box<?php echo $this->_tpl_vars['key']; ?>
" <?php if ($this->_tpl_vars['obj']->flag == ''): ?> src="/nm_tx/pw/images/sms1.jpg" alt="Send SMS" <?php else: ?> src="/nm_tx/pw/images/sms2.jpg" alt="SMS Sent, Click to Send Again!" <?php endif; ?> height="50" width="70" onclick="sendPWSMS('<?php echo $this->_tpl_vars['key']; ?>
',this);" style="cursor: hand;">
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