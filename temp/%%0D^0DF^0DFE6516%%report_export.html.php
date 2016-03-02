<?php /* Smarty version 2.6.6, created on 2012-01-29 17:52:38
         compiled from C:/wamp/www/nm_tx/pw/report_export.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/pw/report_export.html', 20, false),)), $this); ?>
      		<table width="100%" cellspacing="1" cellpadding="1" border="0">
                <tbody>
      			<tr bgcolor="#7C93F4">
      				<th align="center" width="7%"><b>PW Date</b></th>
      				<th align="center"><b>A_Text</b></th>
      				<th align="center"><b>B_Text</b></th>
      				<th align="center"><b>Outage</b></th>
      				<th align="center"><b>Status</b></th>
      				<th align="center"><b>Initiator Group</b></th>
      				<th align="center"><b>Executor Group</b></th>
      				<th align="center"><b>Type</b></th>
      			</tr>

                 <?php if (count($_from = (array)$this->_tpl_vars['report_data_list'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['obj']):
?>
      			  <tr <?php if ($this->_tpl_vars['key']%2 == 0): ?> bgcolor="#EEEEEE" <?php else: ?> bgcolor="#EEFFEE" <?php endif; ?>>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->pw_date; ?>

                      </td>
                      <td>
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->a_text)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

                      </td>
                      <td>
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->b_text)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

                      </td>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->outage_flag; ?>

                      </td>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->status; ?>

                      </td>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->initiator; ?>

                      </td>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->executor; ?>

                      </td>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->severity; ?>

                      </td>
                 </tr>
                <?php endforeach; unset($_from); endif; ?>
             </tbody>
      </table>