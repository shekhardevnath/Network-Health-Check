<?php /* Smarty version 2.6.6, created on 2012-01-10 17:47:09
         compiled from C:/wamp/www/nm_tx/nsi/incident_history.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/nsi/incident_history.html', 9, false),array('modifier', 'replace', 'C:/wamp/www/nm_tx/nsi/incident_history.html', 34, false),array('modifier', 'substr', 'C:/wamp/www/nm_tx/nsi/incident_history.html', 37, false),)), $this); ?>
<html>
<head>
<title>Incident History</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
</head>
<body style="background-color:#FFFFFF">
  <table width="100%" cellpadding="5" cellspacing="1" border="0" bgcolor="white">
    <tr bgcolor="#558ED5">
	  <td colspan="12" style="height:25px" align="center"><b><font color="white" size="2">History of Incident "<?php echo ((is_array($_tmp=$this->_tpl_vars['history'][0]->general_title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
".</font></b></td>
	<tr>
    <tr bgcolor="#7C93F4">
	  <td align="center"><b>Totice Type<b></td>
	  <td align="center"><b>FT/ST<b></td>
	  <td><b>RT/ERT/ET<b></td>
	  <td><b>Title<b></td>
	  <td><b>Reason<b></td>
	  <td><b>Impact<b></td>
	  <td><b>Status<b></td>
	  <td><b>Message<b></td>
	  <td><b>Recipient<b></td>	  
	  <td align="center"><b>User<b></td>
	  <td align="center"><b>Time<b></td>
	  <td align="center"><b>SMS Sent<b></td>
	</tr>
	<?php if (count($_from = (array)$this->_tpl_vars['history'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	<tr bgcolor="#BFCAF9">
	  <td align="center"><?php echo $this->_tpl_vars['row']->notice_type; ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['row']->ft_st; ?>
</td>
	  <td><?php echo $this->_tpl_vars['row']->rt_et; ?>
</td>
	  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->title)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
	  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->reason)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
	  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->impact)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
	  <td><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->status)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
	  <td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['row']->message)) ? $this->_run_mod_handler('replace', true, $_tmp, "@#*", "<br>") : smarty_modifier_replace($_tmp, "@#*", "<br>")))) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
	  <td><?php echo $this->_tpl_vars['row']->recipient; ?>
</td>	  
	  <td align="center"><?php echo $this->_tpl_vars['row']->send_by; ?>
</td>
	  <td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->send_time)) ? $this->_run_mod_handler('substr', true, $_tmp, 0, 16) : substr($_tmp, 0, 16)); ?>
</td>
	  <td align="center"><?php echo $this->_tpl_vars['row']->sms_sent; ?>
</td>
	</tr>
	<?php endforeach; unset($_from); endif; ?>
  </table>
</body>
</html>