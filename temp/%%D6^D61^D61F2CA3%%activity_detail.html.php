<?php /* Smarty version 2.6.6, created on 2011-02-13 11:51:20
         compiled from C:/wamp/www/nm_tx/acvt_manager/activity_detail.html */ ?>
<html>
	<head>
		<title>History of Activity#<?php echo $this->_tpl_vars['activity_id']; ?>
</title>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>    
	</head>
	<body background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">
		<h3 align="center"><u>History of Activity <?php echo $this->_tpl_vars['activity_id']; ?>
:</u></h3>
		<table width="100%" cellpadding="5" cellspacing="1" bgcolor="black">
			<tr bgcolor="#7C93F4">
				<td align="center"><b>Date</b></td><td align="center"><b>Assigned By</b></td><td align="center"><b>Assigned To</b></td><td><b>Comment</b></td>
			</tr>
			<?php if (count($_from = (array)$this->_tpl_vars['history'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
			<?php if ($this->_tpl_vars['row']->assigned_to != ""): ?>
			<tr bgcolor="#BFCAF9">				
				<td align="center"><?php echo $this->_tpl_vars['row']->assigned_date; ?>
</td><td align="center"><?php echo $this->_tpl_vars['row']->assigned_by; ?>
</td><td align="center"><?php echo $this->_tpl_vars['row']->assigned_to; ?>
</td><td><?php echo $this->_tpl_vars['row']->comment; ?>
</td>				
			</tr>
			<?php else: ?>
			<tr bgcolor="#BFCAF9">				
				<td align="center"><?php echo $this->_tpl_vars['row']->assigned_date; ?>
</td><td align="center"><?php echo $this->_tpl_vars['row']->assigned_by; ?>
</td><td align="center">Closed</td><td><?php echo $this->_tpl_vars['row']->comment; ?>
</td>				
			</tr>
			<?php endif; ?>
			<?php endforeach; unset($_from); endif; ?>
		</table>
	</body>
</html>