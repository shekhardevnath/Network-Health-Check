<?php /* Smarty version 2.6.6, created on 2011-02-13 11:50:55
         compiled from C:/wamp/www/nm_tx/acvt_manager/acvt_manager_indv.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/acvt_manager/acvt_manager_indv.html', 23, false),array('modifier', 'date_format', 'C:/wamp/www/nm_tx/acvt_manager/acvt_manager_indv.html', 39, false),)), $this); ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">    
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>
    <script language="JavaScript" src="/nm_tx/acvt_manager/acvt_manager.js"></script>       
    <script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
	</head>
	<body background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">
		<form name="acvtManagerForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onsubmit="return doSubmit('acvt_manager')">
			<input type="hidden" value="add" name="cmd">
			<input type="hidden" value="acvt_manager" name="page">
			<br>
			<?php if ($this->_tpl_vars['msg'] != ''): ?>
			  <p> <font color="green" size="4"><?php echo $this->_tpl_vars['msg']; ?>
</font> </p>
			<?php endif; ?>			
			<h3 align="left"><u>Please submit your activity here:</u></h3>
			<table border="0" cellpadding="5" cellspacing="0" bgcolor="white">
				<tr>
					<td><label class="label">Activity Type:</label></td>
					<td>
						<select name="activity_type" id='activity_type'>
							<option value="" label="Select One">Select One</option>
							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['category_list'],'output' => $this->_tpl_vars['category_list']), $this);?>

							<option value="Other" label="Other">Other</option>
						</select>
					</td>			      		
				</tr>
				<tr>
					<td><label class="label">Assign To:</label></td>
					<td>
						<select name="assigned_to" id='assigned_to'>
							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_list'],'output' => $this->_tpl_vars['user_list']), $this);?>

						</select>
					</td>
				</tr>
				<tr>
					<td><label class="label">Deadline:</label></td>
					<td>
						<input name="dead_line" id="dead_line" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
" onclick="NewCal('dead_line','yyyymmdd',true,24)">
					</td>
				</tr>
				<tr>
					<td><label class="label">Comment:</label></td>
					<td><textarea name="comment" id="comment" rows="5" cols="50"></textarea></td>
				</tr>
				<tr align="center">
					<td colspan="2">
						<input type="submit" class="submit" name="submit" value="Submit">
  	    	  <input type="reset" class="reset" name="reset" value=" Reset ">
					</td>
				</tr>
			</table>
			<br>
			<table border="0" width="100%">
		  	<tr bgcolor="black"><td></td></tr>		  		
		  </table>
		  <br>
		  <table width="100%" cellspacing="1" cellpadding="5" border="0" bgcolor="white">
			<tr bgcolor="#7C93F4">
				<td align="center"><b>Activity ID</b></td>
				<td><b>Activity Type</b></td>
				<td align="center"><b>Creator</b></td>
				<td align="center"><b>Create Date</b></td>
				<td align="center"><b>Deadline</b></td>
				<td><b>Comment</b></td>	
				<td align="center"><b>Holding</b></td>			
				<td align="center"><b>Status</b></td>				
			</tr>
			<?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
			<tr bgcolor="#BFCAF9">
				<td align="center"><a href="JavaScript:void(0)" onclick="showDetailPopup(<?php echo $this->_tpl_vars['row']->activity_id; ?>
)"><?php echo $this->_tpl_vars['row']->activity_id; ?>
</a></td>
				<td><?php echo $this->_tpl_vars['row']->activity_type; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['row']->creator; ?>
</td>
				<td align="center"><?php echo $this->_tpl_vars['row']->create_date; ?>
</td>				
				<td align="center"><?php echo $this->_tpl_vars['row']->dead_line; ?>
</td>				
				<td><b><?php echo $this->_tpl_vars['row']->assigned_by; ?>
</b>(<?php echo $this->_tpl_vars['row']->assigned_date; ?>
): <?php echo $this->_tpl_vars['row']->comment; ?>
</td>				
				<td align="center"><?php echo $this->_tpl_vars['row']->holding_by; ?>
</td>				
				<td align="center"><?php echo $this->_tpl_vars['row']->status; ?>
</td>				
			</tr>
			<?php endforeach; unset($_from); endif; ?>
		</table>
		</form>
	</body>
</html>