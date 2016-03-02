<?php /* Smarty version 2.6.6, created on 2012-04-23 20:54:35
         compiled from C:/wamp/www/nm_tx/mni_portal/mni_portal.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/mni_portal/mni_portal.html', 23, false),array('function', 'html_options', 'C:/wamp/www/nm_tx/mni_portal/mni_portal.html', 52, false),)), $this); ?>
<link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
<script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>
<script language="JavaScript" type="text/javascript" src="/nm_tx/ext/prototype/prototype.js"></script>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>

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
    <table  class="contentHeader" border="0" width="100%">
    <tr align="center">
       <td class="contentHeaderText">MNI Portal</td>       
    </tr>
    <?php if ($this->_tpl_vars['message'] != ""): ?>
    <tr bgcolor="white">
       <td><div align="center"><b><font color="green"><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</font></b></div></td>
    </tr>
    <?php endif; ?>
    </table>
    <br/>
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
    <?php if ($this->_tpl_vars['notice_id']): ?>	
    <form name="hcPortalForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?notice_id=<?php echo $this->_tpl_vars['notice_id'];  if ($this->_tpl_vars['mni_id']): ?>&mni_id=<?php echo $this->_tpl_vars['mni_id'];  endif; ?>" method="POST" enctype="multipart/form-data" onSubmit="return doSubmit(this);">
	
    	<?php if ($this->_tpl_vars['USER_TYPE'] == 'BO' && $this->_tpl_vars['cmd'] != 'edit' && $this->_tpl_vars['cmd'] != 'search'): ?>
    	<table border="0" cellpadding="10" cellspacing="1" bgcolor="black">
    		<tr bgcolor="white">
    			<td width="431" valign="top">
    	      <table border="0" cellpadding="2" cellspacing="2">
    	      	<input type="hidden" value="1" id="file_browser_count" name="file_browser_count">
				<?php if ($this->_tpl_vars['mni_id']): ?>
    	      	<input type="hidden" name="cmd" value="update">
				<input type="hidden" name="mni_id"  id="mni_id" value="<?php echo $this->_tpl_vars['mni_id']; ?>
">
				<?php else: ?>
				<input type="hidden" name="cmd" value="add">
				<input type="hidden" name="notice_id"  id="notice_id" value="<?php echo $this->_tpl_vars['notice_id']; ?>
">
				<input type="hidden" name="add_default_recipient"  id="add_default_recipient" value="yes">
				<?php endif; ?>
    	      	<tr>
					<td><label class="label" name="down_time_label" id="down_time_label">Group:</label></td>
    	      		<td colspan="2"><select style="width:315px" name="group_list" id="group_list" ondblclick="addSelectedOptions();" onChange="addDefaultRecipients(this);">    	  							
            							<option value="">Select One</option>
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group'],'output' => $this->_tpl_vars['group'],'selected' => $this->_tpl_vars['mni_group_name']), $this);?>

            						
    	      						</select>
					</td>
    	      	</tr>
				<tr>
					<td><label class="label" name="down_time_label" id="down_time_label">Platform:</label></td>
    	      		<td colspan="2">    	  							
            							<?php if ($this->_tpl_vars['mni_id']): ?>
            								<input name="platform" type="text" size="50" value="<?php echo $this->_tpl_vars['selected_platform_mni']; ?>
">
            							<?php else: ?>
											<input name="platform" type="text" size="50" value="<?php echo $this->_tpl_vars['selected_platform_outage']; ?>
">
										<?php endif; ?>
    	      						
					</td>
    	      	</tr>
				
    	      	<tr>
    	      		<td><label class="label" name="down_time_label" id="down_time_label">Down Time:</label></td>
    	      		<td>
					<?php if ($this->_tpl_vars['mni_id']): ?>
						<input name="down_time" readonly="" type="text" size="50" value="<?php echo $this->_tpl_vars['mni_ft_st']; ?>
" onClick="NewCal('down_time','yyyymmdd',true,24)">
					<?php else: ?>
						<input name="down_time" readonly="" type="text" size="50" value="<?php echo $this->_tpl_vars['ft_date']; ?>
 <?php echo $this->_tpl_vars['ft_st']; ?>
:00" onClick="NewCal('down_time','yyyymmdd',true,24)">
					<?php endif; ?>	
					</td>
    	      	</tr>
    	    
    	      	<tr>
    	      		<td><label class="label" name="restoration_time_label" id="restoration_time_label">Restoration Time:</label></td>
    	      		<td>
					<?php if ($this->_tpl_vars['mni_id']): ?>
						<input name="restoration_time" readonly="" type="text" size="50" value="<?php echo $this->_tpl_vars['mni_rt_et']; ?>
" onClick="NewCal('restoration_time','yyyymmdd',true,24)">
					<?php else: ?>
						<input name="restoration_time" readonly="" type="text" size="50" value="<?php echo $this->_tpl_vars['rt_date']; ?>
 <?php echo $this->_tpl_vars['rt_et']; ?>
:00" onClick="NewCal('restoration_time','yyyymmdd',true,24)">
					<?php endif; ?>	
					</td>
    	      	</tr>
    	      	<tr>
    	      		<td><label class="label">Fault Description:</label></td>
    	      		<td><?php if ($this->_tpl_vars['mni_id']): ?>
    	      				<textarea name="fault_description" id="fault_description" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['fault_description']; ?>
</textarea>
						<?php else: ?>
							<textarea name="fault_description" id="fault_description" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['title']; ?>
</textarea>
						<?php endif; ?>
    	      		</td>
    	      	</tr>
				<tr>
    	      		<td><label class="label">Impact Analysis:</label></td>
    	      		<td><?php if ($this->_tpl_vars['mni_id']): ?>
    	      				<textarea name="impact_analysis" id="impact_analysis" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['impact_analysis']; ?>
</textarea>
						<?php else: ?>	
							<textarea name="impact_analysis" id="impact_analysis" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['impact']; ?>
</textarea>
						<?php endif; ?>
    	      		</td>
    	      	</tr>
				<tr>
    	      		<td><label class="label">BO Comments:</label></td>
    	      		<td>
    	      			<textarea name="bo_findings" id="bo_findings" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['mni_bo_findings']; ?>
</textarea>
    	      		</td>
    	      	</tr>    	      	
    	
    	      
			<?php if ($this->_tpl_vars['mni_id']): ?>
			
			 <tr>
    	      		<td><label class="label">Root Cause:</label></td>
    	      		<td>
    	      			<textarea name="root_cause" id="root_cause" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['root_cause']; ?>
</textarea>
    	      		</td>
    	     </tr>
			 <tr>
    	      		<td><label class="label">Restoration Process:</label></td>
    	      		<td>
    	      			<textarea name="restoration_process" id="restoration_process" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['restoration_process']; ?>
</textarea>
    	      		</td>
    	     </tr>
		<?php if ($this->_tpl_vars['is_vendor'] == 'yes'): ?> 
			 <tr>
    	      		<td><label class="label">Vendor Feedback:</label></td>
    	      		<td>
    	      			<textarea name="vendor_feedback" id="vendor_feedback" value="" rows="3" cols="49"><?php echo $this->_tpl_vars['vendor_feedback']; ?>
</textarea>
    	      		</td>
    	     </tr>
		<?php else: ?>
			<tr>
    	      		<td><label class="label">Vendor Feedback:</label></td>
    	      		<td>
    	      			No Vendor Needed
    	      		</td>
    	     </tr>	 
		<?php endif; ?>
		 	 <tr>
    	      		<td><label class="label">Pending at:</label></td>
    	      		<td>
    	      			<input name="pending_at" type="text" value="<?php echo $this->_tpl_vars['pending_at']; ?>
" style="width:100%">
    	      		</td>
    	     </tr>
			 <tr>
					<td><label class="label" name="down_time_label" id="down_time_label">MNI Status:</label></td>
    	      		<td colspan="2"><select style="width:315px" name="mni_status_list" id="mni_status_list" onChange="checkAPStatus();">    	  							
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['mni_status_list'],'output' => $this->_tpl_vars['mni_status_list'],'selected' => $this->_tpl_vars['mni_status']), $this);?>

            						
    	      						</select>
					</td>
    	     </tr>	   
			 </table>
			  <table width="105%" cellspacing="1" cellpadding="2" border="0">
			  	
					<tr bgcolor="#7C93F4">
						<td align="center"><b>Action Point</b></td>
						<td align="center"><b>Responsible</b></td>
						<td align="center"><b>Deadline</b></td>
						<td align="center"><b>Status</b></td>
						<td align="center"><b></b></td>
					</tr>
					
					<?php if (isset($this->_foreach['ap'])) unset($this->_foreach['ap']);
$this->_foreach['ap']['total'] = count($_from = (array)$this->_tpl_vars['ap']);
$this->_foreach['ap']['show'] = $this->_foreach['ap']['total'] > 0;
if ($this->_foreach['ap']['show']):
$this->_foreach['ap']['iteration'] = 0;
    foreach ($_from as $this->_tpl_vars['item']):
        $this->_foreach['ap']['iteration']++;
        $this->_foreach['ap']['first'] = ($this->_foreach['ap']['iteration'] == 1);
        $this->_foreach['ap']['last']  = ($this->_foreach['ap']['iteration'] == $this->_foreach['ap']['total']);
?>
					
					<tr bgcolor="#BFCAF9">
						<td align="center"><textarea name="ap_text[]" id="ap_text" value="" rows="2" cols="29"><?php echo $this->_tpl_vars['item']->ap; ?>
</textarea></td>
						<td align="center"><input name="responsible[]" type="text" value="<?php echo $this->_tpl_vars['item']->responsible; ?>
" style="width:100%"></td>
						<td align="center"><input name="deadline[]" id="deadline<?php echo $this->_foreach['ap']['iteration']; ?>
" type="text" value="<?php echo $this->_tpl_vars['item']->deadline; ?>
" readonly="" style="width:100%" onClick="displayCalendar(deadline<?php echo $this->_foreach['ap']['iteration']; ?>
,'yyyy-mm-dd',this);"></td>
						<td align="center"><select style="width:55px" name="ap_status_list[]" id="ap_status_list<?php echo $this->_foreach['ap']['iteration']; ?>
" onChange="checkAPStatus();">    	  							
            									<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['ap_status_list'],'output' => $this->_tpl_vars['ap_status_list'],'selected' => $this->_tpl_vars['item']->status), $this);?>

    	      							   </select>
						</td>
						<td align="center"><b></b></td>
    				</tr>
					
					<?php endforeach; unset($_from); endif; ?>
					<input type="hidden" name="id_count"  id="id_count" value="<?php echo $this->_foreach['ap']['iteration']; ?>
">
				<tbody id='add_ap_table' bgcolor="#00CCFF">	
				</tbody>	
			  </table>
			  <a href="JavaScript:void(0);" onClick="addRow();checkAPStatus();">Add More</a>
			<?php else: ?>
			  </table>  
			<?php endif; ?> 
    	    </td>
    	    <td width="361" valign="top">
    	    	<table border="0" cellpadding="5" cellspacing="1">
      	    				<tr bgcolor="#F8F8F8">
      	    					<td width="54">
      	    						<label class="label">Option:</label>
   	    					  </td>
      	    					<td width="283">
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
      	    						<select <?php if ($this->_tpl_vars['mni_id']): ?>size="6"<?php else: ?>size="3"<?php endif; ?> multiple style="width:320px" name="searching_list" id="searching_list" ondblclick="addSelectedOptions();">    	  							
            							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['search_list'],'output' => $this->_tpl_vars['search_list']), $this);?>

            						</select>
      	    					</td>    	  					
      	    				</tr>
      	    				<tr>
   	    					  <td colspan="2" align="center">
   	    						<label class="label">To</label>
   	    						<input type="image" name="search" src="/nm_tx/common/image/down_arrow.png" border="0" width="20" height="28" onClick="return addSelectedOptionsTo();">
   	    						<label class="label"> &nbsp;&nbsp;Cc</label>
   	    						<input type="image" name="search4" src="/nm_tx/common/image/down_arrow.png" border="0" width="20" height="28" onClick="return addSelectedOptionsCc();"></td>
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
   	    					  <td colspan="2">
      	    						<label class="label">Email To:</label><br>
									<select <?php if ($this->_tpl_vars['mni_id']): ?>size="6"<?php else: ?>size="3"<?php endif; ?> multiple style="width:320px" name="recipient_list_to[]" id="recipient_list_to" ondblclick="removeSelectedOptionsTo();"><?php if ($this->_tpl_vars['mni_id']): ?>
									    	<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['mni_email_to'],'output' => $this->_tpl_vars['mni_email_to']), $this);?>

										<?php else: ?>	    							
      	    								<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['recipient_list'],'output' => $this->_tpl_vars['recipient_list']), $this);?>

										<?php endif; ?>
            						</select>
								<input type="image" name="search2" src="/nm_tx/common/image/up_arrow.png" border="0" width="20" height="28" onClick="return removeSelectedOptionsTo();">      	    					</td>    	  					
      	    				</tr>
      	    				<tr bgcolor="#F8F8F8">
   	    					  <td colspan="2">
								<label class="label">Email Cc:</label><br>
      	    						<select <?php if ($this->_tpl_vars['mni_id']): ?>size="6"<?php else: ?>size="3"<?php endif; ?> multiple style="width:320px" name="recipient_list_cc[]" id="recipient_list_cc" ondblclick="removeSelectedOptionsCc();"><?php if ($this->_tpl_vars['mni_id']): ?>
									    	<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['mni_email_cc'],'output' => $this->_tpl_vars['mni_email_cc']), $this);?>

										<?php else: ?>	    							
      	    								<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['recipient_list'],'output' => $this->_tpl_vars['recipient_list']), $this);?>

										<?php endif; ?>   
	         						</select>
   	    						<input type="image" name="search3" src="/nm_tx/common/image/up_arrow.png" border="0" width="20" height="28" onClick="return removeSelectedOptionsCc();">      	    					</td>    	  					
      	    				</tr>
   			  </table>
    	    </td>
    	    <td width="58" valign="middle">
    	    	
				<?php if ($this->_tpl_vars['mni_id']): ?>
				<input type="submit" name="resend_mail" value="Resend Mail">
				<br>
				<br>
				<br>
				<input type="submit" name="save_mni" value="  Save MNI ">
				<br>
				<br>
				<br>
				<input type="reset" name="reset2" value="     Reset    ">
				<?php else: ?>
				<input type="submit" name="send_mail" value="Send Mail">
				<br>
				<br>
				<br>
				<input type="reset" name="reset2" value="   Reset   ">
				<?php endif; ?>

			</td>
    	  </tr>
      </table>
      <?php endif; ?>

    </form>
    <?php endif; ?>    
    <table width="100%" border="0" bgcolor="black" cellspacing="0">
    	<tr><td></td></tr>
    </table>
    <form name="hcSearchPage" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
    <?php if ($this->_tpl_vars['cmd'] != 'edit'): ?>	    
    <table cellspacing="0" cellpadding="0" border="0">
    	<input type="hidden" name="cmd" value="search">
    	<tr>
    		<td><label class="label">MNI ID:&nbsp</label> </td>
    		<td><input type="text" name="search_mni_id" size="5" value="<?php echo $this->_tpl_vars['search_mni_id']; ?>
"></td>
    		<td><label class="label">&nbsp Start Date:&nbsp </label></td>
    		<td>
    			<input type="text" name="search_start_date" id="search_start_date" size="12" readonly="" value="<?php if ($this->_tpl_vars['search_start_date']):  echo $this->_tpl_vars['search_start_date'];  else:  echo $this->_tpl_vars['today'];  endif; ?>"  onClick="displayCalendar(search_start_date,'yyyy-mm-dd',this);">  	  			
    		</td>    		
    		<td><label class="label">&nbsp End Date:&nbsp</label> </td>
    		<td>
    			<input type="text" name="search_end_date" id="search_end_date" size="12" readonly="" value="<?php if ($this->_tpl_vars['search_end_date']):  echo $this->_tpl_vars['search_end_date'];  else:  echo $this->_tpl_vars['today'];  endif; ?>"  onClick="displayCalendar(search_end_date,'yyyy-mm-dd',this);">
    		</td>
			<td><label class="label">&nbsp Group:&nbsp</label> </td>
			<td>
    			<input type="text" name="search_group" size="12" value="<?php echo $this->_tpl_vars['search_group']; ?>
">
    		</td>
			<td><label class="label">&nbsp Pending at:&nbsp</label> </td>
			<td>
    			<input type="text" name="search_pending_at" size="12" value="<?php echo $this->_tpl_vars['search_pending_at']; ?>
">
    		</td>
    		<td>&nbsp&nbsp&nbsp&nbsp <input type="submit" name="search_submit" value="Search"></td>
    	</tr>
    </table>
    <?php endif; ?>
    </form>
    <table width="100%" cellspacing="1" cellpadding="2" border="0">
    	<tr bgcolor="#7C93F4">
    		<td align="center"><b>MNI ID</b></td>
    		<td align="center"><b>Notice ID</b></td>
			<td align="center"><b>Group</b></td>
    		<td align="center"><b>Fault Description</b></td>
    		<td align="center"><b>BO Findings</b></td>
    		<td align="center"><b>Pending at</b></td>
    		<td align="center"><b>Status</b></td>
    	</tr>
    	<?php if ($this->_tpl_vars['mni']): ?>
    	<?php if (count($_from = (array)$this->_tpl_vars['mni'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    	<tr bgcolor="#BFCAF9">
    		<td align="center">
    			<?php if ($this->_tpl_vars['item']->status == 'open'): ?>
				<?php if ($this->_tpl_vars['USERNAME'] == 'afzal' || $this->_tpl_vars['USERNAME'] == 'alaul' || $this->_tpl_vars['USERNAME'] == 'chinmoy' || $this->_tpl_vars['USERNAME'] == 'krayhan'): ?>
    			<a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?notice_id=<?php echo $this->_tpl_vars['item']->notice_id; ?>
&mni_id=<?php echo $this->_tpl_vars['item']->mni_id; ?>
"><?php echo $this->_tpl_vars['item']->mni_id; ?>
</a>
				<?php else: ?>
				<?php echo $this->_tpl_vars['item']->mni_id; ?>

				<?php endif; ?>
    			<?php else: ?>
    			<?php echo $this->_tpl_vars['item']->mni_id; ?>

    			<?php endif; ?>
    		</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->notice_id; ?>
</td>
		<td align="center"><?php echo $this->_tpl_vars['item']->group_name; ?>
</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->fault_description; ?>
</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->bo_findings; ?>
</td>
		<td align="center"><?php if ($this->_tpl_vars['item']->status == 'open'):  echo $this->_tpl_vars['item']->pending_at;  endif; ?></td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->status; ?>
</td>
    	</tr>
    	<?php endforeach; unset($_from); endif; ?>
    	<?php endif; ?>
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