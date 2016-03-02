<?php /* Smarty version 2.6.6, created on 2015-09-23 10:25:32
         compiled from C:/wamp/www//nm_tx/acvt_manager/assigned_group.html */ ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>  
    <script language="JavaScript" src="/nm_tx/acvt_manager/acvt_manager.js"></script>  
	</head>
	<body background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">
		<br><h3><u>Activities that are assigned to Group:</u></h3>
		<?php if ($this->_tpl_vars['msg'] != ''): ?>
		 <p> <font color="green" size="4"><?php echo $this->_tpl_vars['msg']; ?>
</font> </p>
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
					<a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=assigned_group&cmd=assign&activity_id=<?php echo $this->_tpl_vars['row']->activity_id; ?>
">Assign Me</a>
					/<a href="JavaScript:void(0)" onclick="showDetailPopup(<?php echo $this->_tpl_vars['row']->activity_id; ?>
)">Detail</a>					
				</td>
			</tr>
			<?php endforeach; unset($_from); endif; ?>
		</table>
	</body>
</html>