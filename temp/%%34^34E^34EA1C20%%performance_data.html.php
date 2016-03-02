<?php /* Smarty version 2.6.6, created on 2015-06-03 12:48:47
         compiled from C:/wamp/www//nm_tx/acvt_manager/performance_data.html */ ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>
	</head>
	<body bgcolor="black">
		<div width="100%" align="right">
		  <font color="white">
		  	Alarm = <?php echo $this->_tpl_vars['data']->alarm; ?>
, Fault = <?php echo $this->_tpl_vars['data']->fault; ?>
, Activity = <?php echo $this->_tpl_vars['data']->activity; ?>
<br>
		  	GPTTS = <?php echo $this->_tpl_vars['data']->gptts; ?>
, 
		  </font>
		  <font color="red">
		  	<b>Pending = <?php echo $this->_tpl_vars['data']->pending; ?>
</b>
		  </font>		  
	  </div>
	</body>
</html>