<?php /* Smarty version 2.6.6, created on 2012-05-21 12:57:42
         compiled from C:/wamp/www/nm_tx/tr_follow_up/esm_tr_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'C:/wamp/www/nm_tx/tr_follow_up/esm_tr_list.html', 38, false),)), $this); ?>
<html>
  <head>
	<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
    
 <!--start main contents table-->
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right" width="10" height="10"><img src="/nm_tx/common/image/table/top_lft.gif"></td>
    <td background="/nm_tx/common/image/table/top_mid.gif"></td>
    <td align="left" width="10" height="10"><img src="/nm_tx/common/image/table/top_rht.gif"></td>
  </tr>
  <tr>
    <td align="right" width="10" background="/nm_tx/common/image/table/lft_border.gif"></td>
    <td align="center" class="contentArea" bgcolor="#F0F0F0">   
      <table bgcolor="black" cellpadding="5" cellspacing="1" border="0" width="100%">
	    <tr bgcolor="gray">
		  <td colspan="8" align="center"><font size="3"><b>Ticket list that are pending at TRANSPORT end and raised by ESM</b></font></td>
		</tr>
	    <tr bgcolor="#CCCCCC">
		  <td align="center"><b>Ticket#</b></td>
		  <td><b>Problem Category</b></td>
		  <td><b>Specific Problem</b></td>
		  <td><b>Problem Component</b></td>
		  <td><b>Ticket Type</b></td>
		  <td><b>Event Time</b></td>
		  <td><b>Received Time</b></td>
		  <td align="right"><b>Duration (Hr)</b></td>
		</tr>
		<?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		<tr <?php if ($this->_tpl_vars['row']->DURATION > 36): ?> bgcolor="red" <?php else: ?> bgcolor="white" <?php endif; ?>>
		  <td align="center"><?php echo $this->_tpl_vars['row']->ID; ?>
</td>
		  <td><?php echo $this->_tpl_vars['row']->PROBLEM_CATEGORY; ?>
</td>
		  <td><?php echo $this->_tpl_vars['row']->SPECIFIC_PROBLEM; ?>
</td>
		  <td><?php echo $this->_tpl_vars['row']->PROBLEM_COMPONENT; ?>
</td>
		  <td><?php echo $this->_tpl_vars['row']->TICKET_TYPE; ?>
</td>
		  <td><?php echo $this->_tpl_vars['row']->EVENT_TIME; ?>
</td>
		  <td><?php echo $this->_tpl_vars['row']->SEND_TIME; ?>
</td>
		  <td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->DURATION)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.2f') : smarty_modifier_string_format($_tmp, '%.2f')); ?>
</td>
		</tr>
		<?php endforeach; unset($_from); endif; ?>
	  </table>
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

</html>