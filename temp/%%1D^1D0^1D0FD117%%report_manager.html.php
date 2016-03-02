<?php /* Smarty version 2.6.6, created on 2009-10-25 10:56:15
         compiled from C:/wamp/www/nm_tx/report_manager/report_manager.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'C:/wamp/www/nm_tx/report_manager/report_manager.html', 79, false),)), $this); ?>
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
    <td bgcolor="#FFFFFF" align="left" class="contentArea">    	
    	
    	<!--Content Area Starts Here-->
    	<form name="searchForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
    	<?php if ($this->_tpl_vars['report'] == 'tnm'): ?>	
    	<input type="hidden" name="cmd" value="tnm_report">
    	<?php endif; ?>
    	<?php if ($this->_tpl_vars['report'] == 'nm_tx'): ?>
    	<input type="hidden" name="cmd" value="nm_tx_report">
    	<?php endif; ?>  
    	<?php if ($this->_tpl_vars['report'] == 'recurrent_fault'): ?>
    	<input type="hidden" name="cmd" value="recurrent_fault_report">
    	<?php endif; ?>  
    	<table  class="contentHeader" border="0" width="100%">
  	    <tr>
          <td class="contentHeaderText">Report Manager</td>         
        </tr>  	  
  	  </table>
  	  <br/>
  	  <table border="0" cellspacing="4">
  	  	<tr>
  	  		<td>
  	  			<label class="label">Start Date</label><br/>
  	  			<input type="text" name="start_date" value="<?php echo $this->_tpl_vars['start_date']; ?>
" readonly>
  	  			<input type="button" value="Cal" onclick="displayCalendar(document.searchForm.start_date,'yyyy-mm-dd',this)">
  	  		</td>
  	  		<td>
  	  			<label class="label">End Date</label><br/>  	  			
  	  			<input type="text" name="end_date" value="<?php echo $this->_tpl_vars['end_date']; ?>
" readonly>  	  			
  	  			<input type="button" value="Cal" onclick="displayCalendar(document.searchForm.end_date,'yyyy-mm-dd',this)">  	  			
  	  		</td>
  	  	<tr>
  	  		<tr>
  	  			<td colspan="3">
  	  				<br>
  	  				<input type="submit" class="submit" name="show" value="Show Report">
  	  				<input type="reset" class="reset" name="reset" value="Reset">
  	  			</td>
  	  		</tr>
  	  	</tr>
  	  </table>
  	  </form>
  	  
  	  <!--TNM report starts here-->
  	  <?php if ($this->_tpl_vars['report'] == 'tnm'): ?>
  	    <?php if ($this->_tpl_vars['r1'][0]->total_faults != 0): ?>
  	    <table  class="contentHeader" border="0" width="100%">
  	      <tr>
            <td class="contentHeaderText"></td>         
          </tr>  	  
  	    </table>
  	    <br>  	  
  	    <table border="0" cellspacing="2" cellpadding="5">
  	    	<tr>
  	    		<td bgcolor="#83A2D1"><b>Total Faults</b></td>
  	  			<td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r1'][0]->total_faults; ?>
</td>
  	    	</tr>
  	    	<tr>
  	    		<td bgcolor="#83A2D1"><b>MTTR</b></td>
  	  			<td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r2'][0]->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    	</tr>
  	    	<tr>
  	    		<td bgcolor="#83A2D1"><b>MTTE</b></td>
  	  			<td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r3'][0]->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    	</tr>
  	    	<tr class="tbl_header" align="center">
  	    		<td colspan="2">Total Faults by Status</td>
  	    	</tr>
  	    	<tr bgcolor="#83A2D1">
  	    		<td><b>Status</b></td>
  	  			<td align="right"><b>Total Faults</b></td>
  	    	</tr>
  	    	<?php if (count($_from = (array)$this->_tpl_vars['r4'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    	<tr bgcolor="#DCE8FA">
  	    		<td><?php echo $this->_tpl_vars['row']->status; ?>
</td><td align="right"><?php echo $this->_tpl_vars['row']->Total; ?>
</td>
  	    	</tr>
  	    	<?php endforeach; unset($_from); endif; ?>  	    	
  	    	<tr class="tbl_header" align="center">
  	    		<td colspan="2">Total Solved Faults by Severity</td>
  	    	</tr>
  	    	<tr bgcolor="#83A2D1">
  	    		<td><b>Severity</b></td>
  	  			<td align="right"><b>Total Faults</b></td>
  	    	</tr>
  	    	<?php if (count($_from = (array)$this->_tpl_vars['r5'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    	<tr bgcolor="#DCE8FA">
  	    		<td><?php echo $this->_tpl_vars['row']->severity; ?>
</td><td align="right"><?php echo $this->_tpl_vars['row']->Total; ?>
</td>
  	    	</tr>
  	    	<?php endforeach; unset($_from); endif; ?>  	    	
  	    	<tr class="tbl_header" align="center">
  	    		<td colspan="2">MTTR by Severity</td>
  	    	</tr>
  	    	<tr bgcolor="#83A2D1">
  	    		<td><b>Severity</b></td>
  	  			<td align="right"><b>MTTR</b></td>
  	    	</tr>
  	    	<?php if (count($_from = (array)$this->_tpl_vars['r6'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    	<tr bgcolor="#DCE8FA">
  	    		<td><?php echo $this->_tpl_vars['row']->severity; ?>
</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    	</tr>
  	    	<?php endforeach; unset($_from); endif; ?>  	    	
  	    	<tr class="tbl_header" align="center">
  	    		<td colspan="2">Total Escalated Faults by Severity</td>
  	    	</tr>
  	    	<tr bgcolor="#83A2D1">
  	    		<td><b>Severity</b></td>
  	  			<td align="right"><b>Total Faults</b></td>
  	    	</tr>
  	    	<?php if (count($_from = (array)$this->_tpl_vars['r7'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    	<tr bgcolor="#DCE8FA">
  	    		<td><?php echo $this->_tpl_vars['row']->severity; ?>
</td><td align="right"><?php echo $this->_tpl_vars['row']->Total; ?>
</td>
  	    	</tr>
  	    	<?php endforeach; unset($_from); endif; ?>
  	    	
  	    	<tr bgcolor="#83A2D1">
  	    		<td><b>Total Remote Support</b></td><td align="right"><?php echo $this->_tpl_vars['r8'][0]->Total; ?>
</td>
  	    	</tr>
  	    	
  	    	</table>
  	      <?php endif; ?>
  	    <?php endif; ?>  
  	  <!--TNM report ends here-->
  	  
  	  <!--NM_TX report starts here-->
  	  <?php if ($this->_tpl_vars['report'] == 'nm_tx'): ?>
  	    <table  class="contentHeader" border="0" width="100%">
  	        <tr>
              <td class="contentHeaderText"></td>         
            </tr>  	  
  	    </table>
  	    <table border="0">
  	    	<!--Print MTTR & MTTE by ticket type-->
  	    	<tr>
  	    		<td>
  	    			<table border="0" cellpadding="3">
  	    				<tr class="tbl_header" align="center">
  	    					<td>TR Type</td><td>Total TRs</td><td>MTTE(Hour)</td><td>MTTR(Hour)</td>
  	    				</tr>  	    				
  	    				<!--
  	    				<tr class="tbl_header" align="center">
  	    					<td>TR Type</td><td>Total TRs</td><td>Cleared TRs</td><td>Not Cleared TRs</td><td>MTTE(Hour)</td><td>MTTR(Hour)</td>
  	    				</tr>  	    				
  	    				<tr>
  	    				  <td bgcolor="#83A2D1">Daily</td><td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r5'][0]->TOTAL; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r6'][0]->TOTAL_TR_DAILY_CLEARED; ?>
</td>
  	    				  <td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r5'][0]->TOTAL_TR_DAILY-$this->_tpl_vars['r6'][0]->TOTAL_TR_DAILY_CLEARED; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r3'][0]->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r1'][0]->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    				</tr>
  	    				<tr>
  	    				  <td bgcolor="#83A2D1">Quality</td><td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r7'][0]->TOTAL; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r8'][0]->TOTAL_TR_QUALITY_CLEARED; ?>
</td>
  	    				  <td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r7'][0]->TOTAL_TR_QUALITY-$this->_tpl_vars['r8'][0]->TOTAL_TR_QUALITY_CLEARED; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r4'][0]->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r2'][0]->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    				</tr>
  	    				-->
  	    				<tr>
  	    				  <td bgcolor="#83A2D1">Daily</td><td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r5'][0]->TOTAL; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r3'][0]->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r1'][0]->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    				</tr>
  	    				<tr>
  	    				  <td bgcolor="#83A2D1">Quality</td><td bgcolor="#DCE8FA" align="right"><?php echo $this->_tpl_vars['r7'][0]->TOTAL; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r4'][0]->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['r2'][0]->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    				</tr>
  	    			</table>
  	    		</td>
  	    	</tr>
  	    	<!--Print MTTR & MTTE by severity-->
  	    	<tr>
  	    		<td>
  	    			<table border="0" cellpadding="3">
  	    				<tr class="tbl_header" align="center">
  	    					<td>Severity</td><td>MTTE(Hour)</td><td>MTTR(Hour)</td>
  	    				</tr>
  	    				<?php if (count($_from = (array)$this->_tpl_vars['mtte_mttr'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    				<tr>
  	    				  <td bgcolor="#83A2D1"><?php echo $this->_tpl_vars['row']->SEVERITY; ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td><td bgcolor="#DCE8FA" align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    				</tr>
  	    				<?php endforeach; unset($_from); endif; ?>
  	    				</table>
  	    		</td>
  	    	</tr>
  	    	<!--Print indivisual MTTR & MTTE and 10 Tickets with higher MTTR & MTTE-->
  	    	<!--
  	    	<tr>
  	    		<td>
  	    			<table border="0">
  	    				<tr  valign="top">
  	    			    <td>
  	    			    	<table border="0" cellpadding="3">
  	    			    		<tr class="tbl_header" align="center"><td colspan="2">Indivisual MTTE (Daily TR)</td></tr>
  	    			    		<tr bgcolor="#83A2D1">
  	    			    			<td>User</td><td align="right">MTTE</td>
  	    			    		</tr>
  	    			    		<?php if (count($_from = (array)$this->_tpl_vars['r10'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    			    		<tr bgcolor="#DCE8FA">
  	    			    			<td><?php echo $this->_tpl_vars['row']->ESCALATIONBY; ?>
</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTE_IND_DAILY)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    			    		</tr>
  	    			    		<?php endforeach; unset($_from); endif; ?>
  	    			    	</table>
  	    			    </td>
  	    			    <td>
  	    			    	<table border="0" cellpadding="3">
  	    			    		<tr class="tbl_header" align="center"><td colspan="2">Indivisual MTTE (Quality TR)</td></tr>
  	    			    		<tr bgcolor="#83A2D1">
  	    			    			<td>User</td><td  align="right">MTTE</td>
  	    			    		</tr>
  	    			    		</tr>
  	    			    		<?php if (count($_from = (array)$this->_tpl_vars['r11'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    			    		<tr bgcolor="#DCE8FA">
  	    			    			<td><?php echo $this->_tpl_vars['row']->ESCALATIONBY; ?>
</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTE_IND_QUALITY)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    			    		</tr>
  	    			    		<?php endforeach; unset($_from); endif; ?>
  	    			    	</table>
  	    			    </td>
  	    			    <td>
  	    			    	<table border="0" cellpadding="3">
  	    			    		<tr class="tbl_header" align="center"><td colspan="2">TRs Having High MTTE (Daily TR)</td></tr>
  	    			    		<tr bgcolor="#83A2D1">
  	    			    			<td align="center">TR No.</td><td  align="right">MTTE(Hour)</td>
  	    			    		</tr>
  	    			    		</tr>
  	    			    		<?php if (count($_from = (array)$this->_tpl_vars['r12'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    			    		<tr bgcolor="#DCE8FA">
  	    			    			<td align="center"><?php echo $this->_tpl_vars['row']->TRNO; ?>
</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTE)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    			    		</tr>
  	    			    		<?php endforeach; unset($_from); endif; ?>
  	    			    	</table>
  	    			    </td>
  	    			    <td>
  	    			    	<table border="0" cellpadding="3">
  	    			    		<tr class="tbl_header" align="center"><td colspan="2">TRs Having High MTTR (Daily TR)</td></tr>
  	    			    		<tr bgcolor="#83A2D1">
  	    			    			<td align="center">TR No.</td><td  align="right">MTTR(Hour)</td>
  	    			    		</tr>
  	    			    		</tr>
  	    			    		<?php if (count($_from = (array)$this->_tpl_vars['r13'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    			    		<tr bgcolor="#DCE8FA">
  	    			    			<td align="center"><?php echo $this->_tpl_vars['row']->TRNO; ?>
</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->MTTR)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    			    		</tr>
  	    			    		<?php endforeach; unset($_from); endif; ?>
  	    			    	</table>
  	    			    </td>
  	    			  </tr>
  	    		  </table>
  	    		</td>
  	    	</tr>
  	    	-->
  	    	<tr>
  	    		<td>
  	    			<table border="0" cellpadding="3">
  	    			 	<tr class="tbl_header" align="center">
  	    			 		<td>Transmission Outage Category</td><td>Duration(Hour)</td>
  	    			 	</tr>
  	    			 	<?php $this->assign('total', '0'); ?>
  	    			 	<?php if (count($_from = (array)$this->_tpl_vars['r9'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	    			 	<tr bgcolor="#DCE8FA">
  	    			 		<td><?php echo $this->_tpl_vars['row']->reason; ?>
</td><td align="right"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->outage)) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</td>
  	    			 		<?php $this->assign('total', ($this->_tpl_vars['total']+$this->_tpl_vars['row']->outage)); ?>
  	    			 	</tr>
  	    			 	<?php endforeach; unset($_from); endif; ?>
  	    			 	<tr bgcolor="#83A2D1">
  	    			 		<td><b>Total</b></td><td align="right"><b><?php echo ((is_array($_tmp=$this->_tpl_vars['total'])) ? $this->_run_mod_handler('string_format', true, $_tmp, "%.2f") : smarty_modifier_string_format($_tmp, "%.2f")); ?>
</b></td>
  	    			 	</tr>
  	    			</table>
  	    		</td>
  	    	</tr>
  	    </table>  	    	  
  	  <!--NM_TX report ends here-->
  	  <?php endif; ?>
  	  <?php if ($this->_tpl_vars['report'] == 'recurrent_fault'): ?>
  	  <table border="0" cellpadding="3">
  	  	<tr class="tbl_header">
  	  		<td>Problem Component</td><td align="center">No. of Tickets</td><td align="center">Ticket Details</td>
  	  		<?php if (count($_from = (array)$this->_tpl_vars['rec_faults'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
  	  		<tr  bgcolor="#DCE8FA">
  	  			<td><?php echo $this->_tpl_vars['row']->PROBLEM_COMPONENT; ?>
</td><td align="center"><?php echo $this->_tpl_vars['row']->TOTAL; ?>
</td><td align="center"><a href="JavaScript:void(0);" onclick="showTRDetailsPopUP('<?php echo $this->_tpl_vars['row']->PROBLEM_COMPONENT; ?>
', '<?php echo $this->_tpl_vars['start_date']; ?>
', '<?php echo $this->_tpl_vars['end_date']; ?>
');">Show</a></td>
  	  		</tr>
  	  		<?php endforeach; unset($_from); endif; ?>
  	  	</tr>
  	  </table>
  	  <?php endif; ?>
  	  <!--Content Area Starts Here-->  	  
  	  
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