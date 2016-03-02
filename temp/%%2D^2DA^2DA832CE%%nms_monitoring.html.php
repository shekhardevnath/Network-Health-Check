<?php /* Smarty version 2.6.6, created on 2010-06-27 11:09:07
         compiled from C:/wamp/www/nm_tx/nms_monitoring/nms_monitoring.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/nms_monitoring/nms_monitoring.html', 48, false),array('modifier', 'date_format', 'C:/wamp/www/nm_tx/nms_monitoring/nms_monitoring.html', 109, false),)), $this); ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/sorttable.js"></script>      
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
    <td bgcolor="#FFFFFF" align="left" class="contentArea" background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">    	
    	
    	<form name="nmsMonitoringForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" onsubmit="return doFormSubmit('You are going to submit?');" enctype="multipart/form-data">
    	
    	<!--Content Area for monitoring entry Starts Here-->    	
    	<input type="hidden" name="cmd" value="save">	
    	<table  class="contentHeader" border="0" width="100%">
  	    <tr>
          <td class="contentHeaderText">NMS Monitoring Page</td>
          <td align="right"><?php if (! $this->_tpl_vars['report']): ?><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=report">Show Report</a><?php else: ?><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
">Back</a><?php endif; ?></td>
        </tr>        
  	  </table>  	  
  	  <?php if ($this->_tpl_vars['msg']): ?>
  	    <br>
  	    <table border="0">
  	    	<tr>
          	<td><?php echo $this->_tpl_vars['msg']; ?>
</td>
          </tr>
  	    </table>
  	  <?php endif; ?>
  	  <?php if (! $this->_tpl_vars['report']): ?>
  	    <br>  	 
  	    <table>
  	    	<tr>
  	    		<td><b>Select Shift:</b></td>
  	    		<td>
  	    			<select name="shift" id="shift">
    	  				<option value="">Select One</option>
  	    			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['shift'],'output' => $this->_tpl_vars['shift']), $this);?>
  	  			  
  	    		  </select>
  	    		</td>
  	    	</tr>
  	    </table>
  	    <br>
  	    <table border="0" cellspacing="2" cellpadding="5">
  	    	<tr class="tbl_header">
  	        <td>NMS</td><td>Monitored</td><td>Comment</td>
  	    	</tr>  	  	
  	    	<tr class="reportEvenRow">
  	    		<td><b>ONMS</b></td>
  	    		<td align="center"><input type="checkbox" name="onms"></td>
  	    		<td><input type="text" value="" size="35" name="comment_onms"></td>
  	    	</tr>
  	    	<tr class="reportEvenRow">
  	    		<td><b>Outage Entry</b></td>
  	    		<td align="center"><input type="checkbox" name="timescan"></td>
  	    		<td><input type="text" value="" size="35" name="comment_timescan"></td>
  	    	</tr>  	  	
  	    	<tr class="reportEvenRow">
  	    		<td><b>TNMS-1</b></td>
  	    		<td align="center"><input type="checkbox" name="tnms_1"></td>
  	    		<td><input type="text" value="" size="35" name="comment_tnms_1"></td>
  	    	</tr>  	  	
  	    	<tr class="reportEvenRow">
  	    		<td><b>TNMS-2</b></td>
  	    		<td align="center"><input type="checkbox" name="tnms_2"></td>
  	    		<td><input type="text" value="" size="35" name="comment_tnms_2"></td>
  	    	</tr>
  	    	<tr class="reportEvenRow">
  	    		<td><b>TNMS-3</b></td>
  	    		<td align="center"><input type="checkbox" name="tnms_3"></td>
  	    		<td><input type="text" value="" size="35" name="comment_tnms_3"></td>
  	    	</tr>  	  	  	  	
  	    </table>
  	    <br>
  	    <table border="0">
  	    	<tr>
  	    		<td><input type="submit" value="Submit"></td><td><input type="reset" value="Reset"></td>
  	    	</tr>
  	    </table>  	  
  	    <!--Content Area for monitoring entryEnds Here-->  	  	    	  
  	  <?php else: ?>
  	    <br>
  	    <table border="0" cellpadding="5">
  	    	<tr>
  	        <td><b>Select Date:</b></td>
  	        <td>
  	        	<input type="hidden" name="cmd" value="show">  	      	
  	        	<input type="text" name="report_date" value="<?php echo $this->_tpl_vars['report_date']; ?>
" readonly size="12">
  	        	<input type="button" value="Cal" onclick="displayCalendar(document.nmsMonitoringForm.report_date,'yyyy-mm-dd',this)">  	      	  	  			
  	        </td>  	      
  	    	</tr>
  	    	<tr>
  	    		<td> </td>
  	    		<td><input type="submit" class="submit" value="  Show  "></td>
  	    	</tr>
  	    </table>
  	    <br>
  	    <table border="0" cellpadding="2" cellspacing="1" bgcolor="black">
  	    	<tr bgcolor="white"><td colspan="5" align="center"><b>NMS Monitoring Status of <?php echo ((is_array($_tmp=$this->_tpl_vars['report_date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%A, %B %e, %Y") : smarty_modifier_date_format($_tmp, "%A, %B %e, %Y")); ?>
</b></td></tr>
  	    	<tr class="tbl_header">
  	    		<td>Shift</td><td>NMS</td><td>Monitored</td><td>MonitoredBy/CommentBy</td><td>Comment</td>
  	    	</tr>  	  	
  	    	<tr class="reportEvenRow">  	  		
  	    		<td rowspan="5" class="reportOddRow">Morning</td><td><?php echo $this->_tpl_vars['nms'][0]; ?>
</td><td><?php if (! $this->_tpl_vars['m']['onms'][0]): ?>No<?php endif;  echo $this->_tpl_vars['m']['onms'][0]; ?>
</td><td><?php echo $this->_tpl_vars['m']['onms'][1]; ?>
</td><td><?php echo $this->_tpl_vars['m']['onms'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][1]; ?>
</td><td><?php if (! $this->_tpl_vars['m']['timescan'][0]): ?>No<?php endif;  echo $this->_tpl_vars['m']['timescan'][0]; ?>
</td><td><?php echo $this->_tpl_vars['m']['timescan'][1]; ?>
</td><td><?php echo $this->_tpl_vars['m']['timescan'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][2]; ?>
</td><td><?php if (! $this->_tpl_vars['m']['tnms_1'][0]): ?>No<?php endif;  echo $this->_tpl_vars['m']['tnms_1'][0]; ?>
</td><td><?php echo $this->_tpl_vars['m']['tnms_1'][1]; ?>
</td><td><?php echo $this->_tpl_vars['m']['tnms_1'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][3]; ?>
</td><td><?php if (! $this->_tpl_vars['m']['tnms_2'][0]): ?>No<?php endif;  echo $this->_tpl_vars['m']['tnms_2'][0]; ?>
</td><td><?php echo $this->_tpl_vars['m']['tnms_2'][1]; ?>
</td><td><?php echo $this->_tpl_vars['m']['tnms_2'][2]; ?>
</td>
  	    	</tr>  	  	     
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][4]; ?>
</td><td><?php if (! $this->_tpl_vars['m']['tnms_3'][0]): ?>No<?php endif;  echo $this->_tpl_vars['m']['tnms_3'][0]; ?>
</td><td><?php echo $this->_tpl_vars['m']['tnms_3'][1]; ?>
</td><td><?php echo $this->_tpl_vars['m']['tnms_3'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td rowspan="5" class="reportOddRow">Evening</td><td><?php echo $this->_tpl_vars['nms'][0]; ?>
</td><td><?php if (! $this->_tpl_vars['e']['onms'][0]): ?>No<?php endif;  echo $this->_tpl_vars['e']['onms'][0]; ?>
</td><td><?php echo $this->_tpl_vars['e']['onms'][1]; ?>
</td><td><?php echo $this->_tpl_vars['e']['onms'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][1]; ?>
</td><td><?php if (! $this->_tpl_vars['e']['timescan'][0]): ?>No<?php endif;  echo $this->_tpl_vars['e']['timescan'][0]; ?>
</td><td><?php echo $this->_tpl_vars['e']['timescan'][1]; ?>
</td><td><?php echo $this->_tpl_vars['e']['timescan'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][2]; ?>
</td><td><?php if (! $this->_tpl_vars['e']['tnms_1'][0]): ?>No<?php endif;  echo $this->_tpl_vars['e']['tnms_1'][0]; ?>
</td><td><?php echo $this->_tpl_vars['e']['tnms_1'][1]; ?>
</td><td><?php echo $this->_tpl_vars['e']['tnms_1'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][3]; ?>
</td><td><?php if (! $this->_tpl_vars['e']['tnms_2'][0]): ?>No<?php endif;  echo $this->_tpl_vars['e']['tnms_2'][0]; ?>
</td><td><?php echo $this->_tpl_vars['e']['tnms_2'][1]; ?>
</td><td><?php echo $this->_tpl_vars['e']['tnms_2'][2]; ?>
</td>
  	    	</tr>  	  	     
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][4]; ?>
</td><td><?php if (! $this->_tpl_vars['e']['tnms_3'][0]): ?>No<?php endif;  echo $this->_tpl_vars['e']['tnms_3'][0]; ?>
</td><td><?php echo $this->_tpl_vars['e']['tnms_3'][1]; ?>
</td><td><?php echo $this->_tpl_vars['e']['tnms_3'][2]; ?>
</td>
  	    	</tr>  	  	  	  	
  	    	<tr class="reportEvenRow">  	  		
  	    		<td rowspan="5" class="reportOddRow">Night</td><td><?php echo $this->_tpl_vars['nms'][0]; ?>
</td><td><?php if (! $this->_tpl_vars['n']['onms'][0]): ?>No<?php endif;  echo $this->_tpl_vars['n']['onms'][0]; ?>
</td><td><?php echo $this->_tpl_vars['n']['onms'][1]; ?>
</td><td><?php echo $this->_tpl_vars['n']['onms'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][1]; ?>
</td><td><?php if (! $this->_tpl_vars['n']['timescan'][0]): ?>No<?php endif;  echo $this->_tpl_vars['n']['timescan'][0]; ?>
</td><td><?php echo $this->_tpl_vars['n']['timescan'][1]; ?>
</td><td><?php echo $this->_tpl_vars['n']['timescan'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][2]; ?>
</td><td><?php if (! $this->_tpl_vars['n']['tnms_1'][0]): ?>No<?php endif;  echo $this->_tpl_vars['n']['tnms_1'][0]; ?>
</td><td><?php echo $this->_tpl_vars['n']['tnms_1'][1]; ?>
</td><td><?php echo $this->_tpl_vars['n']['tnms_1'][2]; ?>
</td>
  	    	</tr>
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][3]; ?>
</td><td><?php if (! $this->_tpl_vars['n']['tnms_2'][0]): ?>No<?php endif;  echo $this->_tpl_vars['n']['tnms_2'][0]; ?>
</td><td><?php echo $this->_tpl_vars['n']['tnms_2'][1]; ?>
</td><td><?php echo $this->_tpl_vars['n']['tnms_2'][2]; ?>
</td>
  	    	</tr>  	  	     
  	    	<tr class="reportEvenRow">  	  		
  	    		<td><?php echo $this->_tpl_vars['nms'][4]; ?>
</td><td><?php if (! $this->_tpl_vars['n']['tnms_3'][0]): ?>No<?php endif;  echo $this->_tpl_vars['n']['tnms_3'][0]; ?>
</td><td><?php echo $this->_tpl_vars['n']['tnms_3'][1]; ?>
</td><td><?php echo $this->_tpl_vars['n']['tnms_3'][2]; ?>
</td>
  	    	</tr>
  	    </table>  	    	    	  
  	  <?php endif; ?>  	  
  	  </form>
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
<!--function used for autocomplete-->
</html>