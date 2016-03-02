<?php /* Smarty version 2.6.6, created on 2011-02-18 11:42:28
         compiled from C:/wamp/www/nm_tx/acvt_manager/assigned_me.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/acvt_manager/assigned_me.html', 32, false),array('modifier', 'date_format', 'C:/wamp/www/nm_tx/acvt_manager/assigned_me.html', 41, false),)), $this); ?>
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
		<?php if ($this->_tpl_vars['edit'] != ''): ?>
		  <form name="acvtManagerForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onsubmit="return doSubmit('assigned_me')">
			  <input type="hidden" value="update" name="cmd">
			  <input type="hidden" value="assigned_me" name="page">	
			  <input type="hidden" value="<?php echo $this->_tpl_vars['activityId']; ?>
" name="activity_id">	
			  <br><h4><u>Edit panel of Activity <?php echo $this->_tpl_vars['activityId']; ?>
:</u></h4>		  
		    <table border="0" cellpadding="5" cellspacing="1" bgcolor="white">
		    	<tr>
		    	  <td>
		    		  <label class="label">Action: </label>		    		  
		    	  </td>
		    	  <td>
		    	  	<select name="action" id="action" onchange="showHideUser('action');">
		    		  <option value="">Select</option>
		    		  <option value="assign_to">Assign To</option>
		    		  <option value="close">Close</option>
		    		  </select>
		    	  </td>
		    	</tr>		    	
		    	<tr id="tr_user" style="display:none">
		    		<td><label class="label">Users: </label></td>
		    		<td>
		    			<select name="assigned_to" id='assigned_to'>
			      		  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_list'],'output' => $this->_tpl_vars['user_list']), $this);?>

			      	</select>
		    		</td>
		    	</tr>
		    	<tr id="tr_deadline" style="display:none">
		    		<td>
		    			<label class="label">Deadline:</label>		    			
		    		</td>
		    		<td>
		    			<input name="dead_line" id="dead_line" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
" onclick="NewCal('dead_line','yyyymmdd',true,24)">
		    		</td>
		    	</tr>
		    	<tr>
		    		<td>
		    			<label class="label">Comment: </label>		    			
		    		</td>
		    		<td><textarea name="comment" id="comment" rows="5" cols="50"></textarea></td>
		    	</tr>
		    	<tr>
		    		<td colspan="2" align="center">
		    			<input type="submit" class="submit" name="submit" value="Submit">
              <input type="reset" class="reset" name="reset" value=" Reset ">
		    		</td>
		    	</tr>
		    </table>
		  </form>
		  <table border="0" width="100%">
		  	<tr bgcolor="black"><td></td></tr>		  		
		  </table>
		  <br>
		<?php else: ?>
		  <table width="100%" cellspacing="2" cellpadding="2">
		  	<tr>
		  		<td align="left"><h3><u>Activities that are assigned to you:</u></h3></td>
		  		<td align="right">
		  			<form name="acvtManagerFormSearch" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
			      <input type="hidden" value="search" name="cmd">
			      <input type="hidden" value="assigned_me" name="page">
			      <label class="label">Status: </label>
			      <select name="status" id="status">
			      	<option value="">All</option>
			      	<option value="close" <?php echo $this->_tpl_vars['close']; ?>
>Close</option>
			      	<option value="open" <?php echo $this->_tpl_vars['open']; ?>
>Open</option>			      	
			      </select>
			      <label class="label">Start Date: </label>
			      <input type="text" value="<?php echo $this->_tpl_vars['start_date']; ?>
" name="start_date" id="start_date" size="10">
			      <label class="label">End Date: </label>
			      <input type="text" value="<?php echo $this->_tpl_vars['end_date']; ?>
" name="end_date" id="end_date" size="10">
			      <input type="submit" class="submit" name="search" value="Search">            
			    </form>
		  		</td>
		  	</tr>
		  </table>		  
		  <?php if ($this->_tpl_vars['msg'] != ''): ?>
		    <p> <font color="green" size="4"><?php echo $this->_tpl_vars['msg']; ?>
</font> </p>
		  <?php endif; ?>
		<?php endif; ?>
		<table width="100%" cellspacing="1" cellpadding="5" border="0" bgcolor="white">
			<tr bgcolor="#7C93F4">
				<td align="center"><b>Activity ID</b></td>
				<td><b>Activity Type</b></td>
				<td align="center"><b>Creator</b></td>
				<td align="center"><b>Create Date</b></td>
				<td align="center"><b>Deadline</b></td>
				<td><b>Comment</b></td>				
				<td align="center"><b>Status</b></td>
				<td align="center"><b>Action</b></td>
			</tr>
			<?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
			<tr bgcolor="#BFCAF9">
				<td align="center"><?php echo $this->_tpl_vars['row']->activity_id; ?>
</td>
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
				<td align="center"><?php echo $this->_tpl_vars['row']->status; ?>
</td>
				<td align="center">
					<?php if ($this->_tpl_vars['row']->status != 'Close'): ?>
					  <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=assigned_me&cmd=edit&activity_id=<?php echo $this->_tpl_vars['row']->activity_id; ?>
">Edit</a>
					<?php else: ?>
					  NA
					<?php endif; ?>
					/<a href="JavaScript:void(0)" onclick="showDetailPopup(<?php echo $this->_tpl_vars['row']->activity_id; ?>
)">Detail</a>
				</td>
			</tr>
			<?php endforeach; unset($_from); endif; ?>
		</table>
	</body>
</html>