<?php /* Smarty version 2.6.6, created on 2015-09-23 10:25:34
         compiled from C:/wamp/www//nm_tx/tbased_fault_log/tbased_fault_log.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www//nm_tx/tbased_fault_log/tbased_fault_log.html', 50, false),array('modifier', 'stripslashes', 'C:/wamp/www//nm_tx/tbased_fault_log/tbased_fault_log.html', 126, false),)), $this); ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>
    <script language="JavaScript" src="/nm_tx/tbased_fault_log/tbased_fault_log.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/sorttable.js"></script>      
    <link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
    <script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>
    <script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
    <script language="JavaScript" src="/nm_tx/ext/prototype/prototype.js"></script>
	</head>
<body background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">
  <!--start main contents table-->
  <table width="100%" border="0" cellspacing="0" cellpadding="0">
    <tr>    
      <td bgcolor="#FFFFFF" align="left" class="contentArea" background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">    	
      	<h3><u>Please submit your fault here:</u></h3>
      		
      	<?php if ($this->_tpl_vars['action'] == ''): ?>
      	<form name="gpttsDataForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">    		      		
      		<input type="hidden" name="cmd" value="gptts_data">
      	  <table bgcolor="#9CDFFF" border="0" cellpadding="5" cellspacing="1">
      	  	<tr bgcolor="white">
      	  		<td>Ref. GPTTS#: </td>
      	  		<td><input type="text" name="gptts_id" value="<?php echo $this->_tpl_vars['gptts_id']; ?>
"></td>
      	  		<td><input type="submit" class="submit" name="show" value="Get Fault Details"></td>
      	  	</tr>
      	  </table>
      	  <br><br>
      	  <table width="100%">
      	  	<tr bgcolor="black">
      	  		<td></td>
      	  	</tr>
      	  </table>
    	  </form>
    	  <?php endif; ?>
    	  <form name="faultLogForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onsubmit="return doSubmit();">
    	  	<br>
    	  	<input type="hidden" name="cmd" value=<?php if ($this->_tpl_vars['action']): ?>"update"<?php else: ?>"save"<?php endif; ?>>
    	  	<input type="hidden" name="log_id" value="<?php echo $this->_tpl_vars['log_id']; ?>
">
    	  	<table bgcolor="#9CDFFF" cellpadding="5" cellspacing="1" border="0">
    	  		<tr bgcolor="white">
    	  			<td>
    	  				Fault Category
    	  			</td>
    	  			<td colspan="2">
    	  				<select name="fault_category" id="fault_category" onchange="getSeverity();">
    	  					<option value="">Select One</option>
    	  					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_category_list'],'output' => $this->_tpl_vars['fault_category_list'],'selected' => $this->_tpl_vars['fault_category']), $this);?>

    	  					<option value="Other">Other</option>
    	  				</select>
    	  			</td>
    	  			<td>
    	  				Fault Severity
    	  			</td>
    	  			<td colspan="4">
    	  				<select name="severity" id="severity">
    	  					<option value="">Select One</option>
    	  					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['severity_list'],'output' => $this->_tpl_vars['severity_list'],'selected' => $this->_tpl_vars['severity']), $this);?>
  	  					
    	  				</select>
    	  			</td>
    	  		</tr>
    	  		<tr bgcolor="white">
    	  			<td>Fault/Component</td>
    	  			<td>How Solved    </td>
    	  			<td>Event Time    </td>
    	  			<td>Clear Time    </td>
    	  			<td>Group Name    </td>
    	  			<td>Solved By     </td>
    	  			<td>Fault Type    </td>
    	  			<td>Fault Scope   </td>
    	  		</tr>
    	  		<tr bgcolor="white">
    	  			<td><textarea name="fault_details" rows="2" cols="20"><?php echo $this->_tpl_vars['fault_details']; ?>
</textarea> </td>
    	  			<td><textarea name="how_solved" rows="2" cols="20"><?php echo $this->_tpl_vars['how_solved']; ?>
</textarea> </td>
    	  			<td><input type="text" name="event_time" id="event_time" value="<?php echo $this->_tpl_vars['event_time']; ?>
" onclick="NewCal('event_time','yyyymmdd',true,24)"> </td>
    	  			<td><input type="text" name="clear_time" id="clear_time" value="<?php echo $this->_tpl_vars['clear_time']; ?>
" onclick="NewCal('clear_time','yyyymmdd',true,24)"> </td>
    	  			<td>
    	  				<select name="group_name">
    	  					<option value="">Select One</option>
    	  					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_name_list'],'output' => $this->_tpl_vars['group_name_list'],'selected' => $this->_tpl_vars['group_name']), $this);?>

    	  				</select>
    	  			</td>
    	  			<td>
    	  				<select name="solved_by">
    	  					<option value="">Select One</option>
    	  					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['solved_by_list'],'output' => $this->_tpl_vars['solved_by_list'],'selected' => $this->_tpl_vars['solved_by']), $this);?>

    	  				</select>
    	  			</td>
    	  			<td>
    	  				<select name="fault_type">
    	  					<option value="">Select One</option>
    	  					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_type_list'],'output' => $this->_tpl_vars['fault_type_list'],'selected' => $this->_tpl_vars['fault_type']), $this);?>

    	  				</select>
    	  			</td>
    	  			<td>
    	  				<select name="scope">
    	  					<option value="">Select One</option>
    	  					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['scope_list'],'output' => $this->_tpl_vars['scope_list'],'selected' => $this->_tpl_vars['scope']), $this);?>

    	  				</select>
    	  			</td>
    	  		</tr>
    	  		<tr bgcolor="white">
    	  			<td colspan="8">
    	  				<input type="submit" class="submit"  value= <?php if ($this->_tpl_vars['action']): ?>"Update Fault Info"<?php else: ?>"Add Fault Info"<?php endif; ?>>
    	  			</td>
    	  		</tr>
    	  	</table>
    	  	<br><br>
      	  <table width="100%">
      	  	<tr bgcolor="black">
      	  		<td></td>
      	  	</tr>
      	  </table>
    	  </form>
    	  <!-- display the log list -->
    	  <?php if ($this->_tpl_vars['list']): ?>
        <table border="0" cellspacing="1" cellpadding="5" bgcolor="white">
        	<tr bgcolor="#9CDF90">
        		<td>Fault Category</td><td>Severity</td><td>Fault/Component</td><td>How Solved</td><td>Event Time</td><td>Clear Time</td>
        		<td>Group Name</td><td>Solved By</td><td>Fault Type</td><td>Fault Scope</td><td>Added By</td><td>Action</td>
        	</tr>        	
          <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
          <tr bgcolor="#9CDFFF">
            <td><?php echo $this->_tpl_vars['item']->fault_category; ?>
</td><td><?php echo $this->_tpl_vars['item']->severity; ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->fault_details)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td><td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->how_solved)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td><td><?php echo $this->_tpl_vars['item']->event_time; ?>
</td>
            <td><?php echo $this->_tpl_vars['item']->clear_time; ?>
</td><td><?php echo $this->_tpl_vars['item']->group_name; ?>
</td><td><?php echo $this->_tpl_vars['item']->solved_by; ?>
</td><td><?php echo $this->_tpl_vars['item']->fault_type; ?>
</td>
            <td><?php echo $this->_tpl_vars['item']->scope; ?>
</td><td align="center"><?php echo $this->_tpl_vars['item']->submit_by; ?>
</td>
            <td align="center">
            	<?php if ($this->_tpl_vars['USERNAME'] == $this->_tpl_vars['item']->submit_by): ?>
            	  <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?log_id=<?php echo $this->_tpl_vars['item']->log_id; ?>
&cmd=edit">Edit</a>
            	<?php else: ?>
            	 NA
            	<?php endif; ?>
            </td>
          </tr>
          <?php endforeach; unset($_from); endif; ?>          
        </table>
        <?php endif; ?>
      </td>  
    </tr>  
  </table>
  <!--end main contents table-->
</body>
</html>