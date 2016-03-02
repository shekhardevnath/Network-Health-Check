<?php /* Smarty version 2.6.6, created on 2012-06-03 10:19:03
         compiled from C:/wamp/www/nm_tx/gptts_kpi/gptts_kpi.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/gptts_kpi/gptts_kpi.html', 58, false),)), $this); ?>
<html>
	<head>
	  <link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
      <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>    
      <link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
	  <script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>
	</head>

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
    	<table border="0" bgcolor="#5151FF" width="100%">
    		<tr><td class="contentHeaderText" align="center">GPTTS KPI Followup</td></tr>
    	</table>
    	<br> 	    	
  	  <table border="0" bgcolor="black" cellpadding="5" cellspacing="1">  	    
	    <form name="trListForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST">
        <input type="hidden" name="cmd" value="show">	
  	    <tr bgcolor="white">  	      	    	
		    <td>
  	    	  <label class="label">Group Name:</label><br>  	    	  
  	    	</td>
			<td>
  	    	  <label class="label">User Name:</label><br>  	    	  
  	    	</td>
			<td>
  	    	  <label class="label">Severity:</label><br>  	    	  
  	    	</td>
  	    	<td>
  	    	  <label class="label">Start Date:</label><br>  	    	  
  	    	</td>
  	    	<td>
  	    	  <label class="label">End Date:</label><br>  	    	  
  	    	</td>  	    	
			<td>
  	    	  <label class="label">Time 23-06:</label><br>  	    	  
  	    	</td>  	    	
           	<td rowspan="2">
  	    		<input type="submit" class="submit" name="show" value="  Show  ">
  	    	</td>
			<?php if ($this->_tpl_vars['data']): ?>
			<td rowspan="2">
  	    	    <input type="button" value=" Export " onClick="exportData();">
  	    	</td>
			<?php endif; ?>		  	    	  	      
  	    </tr>
		<tr bgcolor="white">
		  <td>
		    <select name="groupname">
			  <option value="all">All</option>
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_list'][1],'output' => $this->_tpl_vars['group_list'][0],'selected' => $this->_tpl_vars['group_name']), $this);?>

			</select>
		  </td>		    
		  <td>
		    <select name="username">
			  <option value="all">All</option>
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_list'],'output' => $this->_tpl_vars['user_list'],'selected' => $this->_tpl_vars['user_name']), $this);?>

			</select>
		  </td>
		  <td>
		    <select name="severity">
			  <option value="all">All</option>
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['severity_list'][1],'output' => $this->_tpl_vars['severity_list'][0],'selected' => $this->_tpl_vars['severity']), $this);?>

			</select>
		  </td>		  
		  <td>
		    <input type="text" value="<?php echo $this->_tpl_vars['start_date']; ?>
" name="start_date"  size="10" onClick="displayCalendar(document.trListForm.start_date,'yyyy-mm-dd',this)" readonly>
		  </td>
		  <td>
		    <input type="text" value="<?php echo $this->_tpl_vars['end_date']; ?>
" name="end_date" size="10" onClick="displayCalendar(document.trListForm.end_date,'yyyy-mm-dd',this)" readonly>
		  </td>
		  <td>
		    <select name="night_window">
			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['night_window_l'],'output' => $this->_tpl_vars['night_window_l'],'selected' => $this->_tpl_vars['night_window']), $this);?>

			</select>
		  </td>		  
		</tr>
		</form>     	    
  	  </table>
	  <br>
	  <?php if ($this->_tpl_vars['data']): ?>
	  <table width="100%" cellpadding="5" cellspacing="1" bgcolor="white">
	    <tr bgcolor="#5151FF">
		  <td><b>Group Name</b></td><td><b>User Name</b></td><td><b>Ticket#</b></td><td><b>Severity</b></td><td><b>Ticket Type</b></td>
		  <td><b>Specific Problem</b></td><td><b>Event Time</b></td><td><b>Escalation Time</b></td><td><b>MTTE (Minute)<b></td>
		</tr>
		<?php if (count($_from = (array)$this->_tpl_vars['data'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		<tr bgcolor="#8888FF">
		  <td><?php echo $this->_tpl_vars['item']->GROUPNAME; ?>
</td><td><?php echo $this->_tpl_vars['item']->USERNAME; ?>
</td><td><?php echo $this->_tpl_vars['item']->TICKET_NO; ?>
</td><td><?php echo $this->_tpl_vars['item']->SEVERITY; ?>
</td><td><?php echo $this->_tpl_vars['item']->TICKET_TYPE; ?>
</td>
          <td><?php echo $this->_tpl_vars['item']->SPECIFIC_PROBLEM; ?>
</td><td><?php echo $this->_tpl_vars['item']->EVENT_TIME; ?>
</td><td><?php echo $this->_tpl_vars['item']->ESCALATION_TIME; ?>
</td><td><?php echo $this->_tpl_vars['item']->MTTE_MINUTE; ?>
</td>
		</tr> 
		<?php endforeach; unset($_from); endif; ?>
	  </table> 
	  <?php else: ?>	   
	   <p align="left"><font size="+1"><b>Nothing to show...........</b></font></p>
	  <?php endif; ?> 	  
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