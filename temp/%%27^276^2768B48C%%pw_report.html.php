<?php /* Smarty version 2.6.6, created on 2012-01-09 17:08:59
         compiled from C:/wamp/www/nm_tx/pw/pw_report.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/pw/pw_report.html', 41, false),array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/pw/pw_report.html', 92, false),)), $this); ?>
<link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
<script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>
<script language="JavaScript" type="text/javascript" src="/nm_tx/ext/prototype/prototype.js"></script>
<script language="JavaScript" type="text/javascript" src="/nm_tx/pw/DateTimePicker/datetimepicker.js"></script>
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
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->    
      <table border="0" width="100%">
      <tr align="center">
        <td bgcolor="#558ED5" style="height:25px"><font size="2" color="white"><b>CM Weekly Report</b></font></td>
      </tr>      
	  <tr>
	  <form name="searchForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
      <input type="hidden" name="cmd" value="pw_report">
	    <td bgcolor="#000000">
		  <table cellpadding="5" cellspacing="1" border="0" bgcolor="#FFFFFF" width="100%">
		    <tr bgcolor="white">
			  <td>
			    <label class="label">Date From: </label>
				<input name="date_from" value="<?php echo $this->_tpl_vars['date_from']; ?>
" size="12" onClick="displayCalendar(document.searchForm.date_from,'yyyy-mm-dd',this);">
			  </td>
			  <td>
			    <label class="label">Date To:
				</label><input name="date_to" value="<?php echo $this->_tpl_vars['date_to']; ?>
" size="12" onClick="displayCalendar(document.searchForm.date_to,'yyyy-mm-dd',this);">
			  </td>
			  <!--td>
			    <label class="label">Message Type:</label>
				<select name="search_message_type">
      	    	  <option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pwr_notice_type_list'],'output' => $this->_tpl_vars['pwr_notice_type_list'],'selected' => $this->_tpl_vars['search_message_type']), $this);?>

            	</select>
			  </td-->
			  <td>
			    <label class="label">Group:</label>
				<select name="search_group_name">
      	    	  <option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pwr_originator_group_list'],'output' => $this->_tpl_vars['pwr_originator_group_list'],'selected' => $this->_tpl_vars['search_group_name']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Severity:</label>
				<select name="search_fault_severity">
      	    	<option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['pwr_severity_list'],'output' => $this->_tpl_vars['pwr_severity_list'],'selected' => $this->_tpl_vars['search_fault_severity']), $this);?>

            	</select>
			  </td>
			  <td>
			    <label class="label">Outage:</label>
				<select name="search_outage">
      	    	  <option value=""></option>
            	  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['outage_list'],'output' => $this->_tpl_vars['outage_list'],'selected' => $this->_tpl_vars['search_outage']), $this);?>

            	</select>
			  </td>
			  <td><input type="submit" value="Search History" name="searchHistory"></td>
			</tr>
		  </table>
		</td>
	  </tr>
	  </form>
      <!--SMS Search application ends here-->   
      <tr>
      	<td>
      		<table width="100%" cellspacing="1" cellpadding="5" border="0">
      			<tr bgcolor="#7C93F4">
      				<td align="center" width="7%"><b>PW Date</b></td>
      				<td align="center" colspan="3"><b>A_Text</b></td>
      				<td align="center" colspan="3"><b>B_Text</b></td>
      				<td align="center"><b>Outage</b></td>
      				<td align="center"><b>Status</b></td>
      				<td align="center"><b>Initiator Group</b></td>
      				<td align="center"><b>Executor Group</b></td>
      				<td align="center"><b>Type</b></td>
      			</tr>

                 <?php if (count($_from = (array)$this->_tpl_vars['report_data_list'])):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['obj']):
?>
      			  <tr <?php if ($this->_tpl_vars['key']%2 == 0): ?> bgcolor="#EEEEEE" <?php else: ?> bgcolor="#EEFFEE" <?php endif; ?>>
                      <td>
                             <?php echo $this->_tpl_vars['obj']->pw_date; ?>

                      </td>
                      <td colspan="3">
                             <?php echo ((is_array($_tmp=$this->_tpl_vars['obj']->a_text)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>

                      </td>
                      <td colspan="3">
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
                 <tr>
                   <td colspan="12" align="right"><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=export">Export</a></td>
                 </tr>
      		</table>
      	</td>
      </tr>    
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
