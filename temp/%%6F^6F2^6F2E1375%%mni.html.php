<?php /* Smarty version 2.6.6, created on 2012-01-01 14:22:28
         compiled from C:/wamp/www/nm_tx/mni/mni.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'C:/wamp/www/nm_tx/mni/mni.html', 89, false),array('function', 'debug', 'C:/wamp/www/nm_tx/mni/mni.html', 250, false),)), $this); ?>
<html>
	<head>  
	<link rel="stylesheet" href="/nm_tx/ext/calender/rfnet.css?random=20051112" media="screen"></link>
    <script language="JavaScript" src="/nm_tx/ext/calender/datetimepicker.js?random=20060118"></script>
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

    <table  class="contentHeader" border="0" width="100%">
      <tr>
        <td class="contentHeaderText" align="center">MNI</td>       
      </tr>
	
	</table>
	
	<br><br>
	
	 <table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="white">
    	<tr height="23">
   

	<td id=2 width="150" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'mni_manager'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=MNI_Manager_New"  style="text-decoration:none"><font color="white"><b>MNI Manager (New)</b></font></a>
    </td>
	 <td id=3 width="150" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'meeting_manager'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=MNI_Manager_Search"  style="text-decoration:none"><font color="white"><b>MNI Manager (Search)</b></font></a>
    </td>
    

<tr></tr>	
	
	 <div id=Menu5 style="position: absolute; border: 1px solid #000000; visibility:hidden; z-ndex: 1">
                   

	
	<td width="100" align="center" ></td>
    <td width="100" align="center" ></td>
	<td width="100" align="center" ></td>
	<td width="100" align="center" ></td>		
	
	</tr>
	 
	<tr bgcolor="black"><td colspan="10"></td></tr>
	
    
	</table> 
    
    <br/>
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
	
		
	<?php if ($this->_tpl_vars['page'] == 'MNI_Manager_New'): ?> 
	
	</sel><form name="MNI_Manager_New_Form" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
      			 
     
	 <input type="hidden" value="addMNI" name="cmd">
	    <input type="hidden" name="sl" value="<?php echo $this->_tpl_vars['sl']; ?>
">
   <input type="hidden" name="fault_id" value="<?php echo $this->_tpl_vars['fault_id']; ?>
">

	 
	 
	 <table align="center" border="1">
	 
	 <tr>
  <td align="center" colspan="7">
 <h5>Create a new MNI
  </td>
	
  </tr>
	 
	 <tr>
	 
	 <td width="200px">
	 Down Time:
	 <input type="Text" class="text" id="down_time" maxlength="15" size="15" name="down_time" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['down_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
" style="background-color:;">
     <a href="javascript:NewCal('down_time','yyyymmdd',true,24,'dropdown',false)"><img src="/nm_tx/common/image/icons/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
	 </td>
	 <td width="200px">
	 Escalation Time:
	 <input type="Text" class="text" id="escalated_time" maxlength="15" size="15" name="escalated_time" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['escalated_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
" style="background-color:;">
     <a href="javascript:NewCal('escalated_time','yyyymmdd',true,24,'dropdown',false)"><img src="/nm_tx/common/image/icons/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
	 </td>
	 
	 <td width="200px">
	Restoration Time: 
	<input type="Text" class="text" id="restoration_time" maxlength="15" size="15" name="restoration_time" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['restoration_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
" style="background-color:;">
    <a href="javascript:NewCal('restoration_time','yyyymmdd',true,24,'dropdown',false)"><img src="/nm_tx/common/image/icons/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a>
	 </td>
	 
	 <td width="200px">
	 Total outage: 
	 
	 </td>
	 <td width="400px">
	  
	  Concerned Group:
	 <select name="fault_catagory">
                              <option value="">--Select Fault Type--</option>
                              <option value="CSP_BSS" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_BSS'): ?> selected <?php endif; ?>>CSP_BSS</option>
                              <option value="CSP_CSS" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_CSS'): ?> selected <?php endif; ?>>CSP_CSS</option>
                              <option value="CSP_PSS" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_PSS'): ?> selected <?php endif; ?>>CSP_PSS</option>
                              <option value="CSP_IN" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_IN'): ?> selected <?php endif; ?>>CSP_IN</option>

                              <option value="RTS_IPTS" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_IPTS'): ?> selected <?php endif; ?>>RTS_IPTS</option>
                              <option value="RTS_OTS" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_OTS'): ?> selected <?php endif; ?>>RTS_OTS</option>
                              <option value="RTS_MTS" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_MTS'): ?> selected <?php endif; ?>>RTS_MTS</option>
                              <option value="RTS_RAN" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_RAN'): ?> selected <?php endif; ?>>RTS_RAN</option>

                              <option value="Railway Fiber" <?php if ($this->_tpl_vars['fault_type'] == 'Railway Fiber'): ?> selected <?php endif; ?>>Railway Fiber</option>
                              <option value="GP Fiber" <?php if ($this->_tpl_vars['fault_type'] == 'GP Fiber'): ?> selected <?php endif; ?>>GP Fiber</option>
                              <option value="ADM" <?php if ($this->_tpl_vars['fault_type'] == 'ADM'): ?> selected <?php endif; ?>>ADM</option>
                              <option value="High Capacity Microwave" <?php if ($this->_tpl_vars['fault_type'] == 'High Capacity Microwave'): ?> selected <?php endif; ?>>High Capacity Microwave</option>

                              <option value="ROD" <?php if ($this->_tpl_vars['fault_type'] == 'ROD'): ?> selected <?php endif; ?>>ROD</option>
                              <option value="ROS" <?php if ($this->_tpl_vars['fault_type'] == 'ROS'): ?> selected <?php endif; ?>>ROS</option>
                              <option value="ROC" <?php if ($this->_tpl_vars['fault_type'] == 'ROC'): ?> selected <?php endif; ?>>ROC</option>
                              <option value="ROK" <?php if ($this->_tpl_vars['fault_type'] == 'ROK'): ?> selected <?php endif; ?>>ROK</option>
                              <option value="ROB" <?php if ($this->_tpl_vars['fault_type'] == 'ROB'): ?> selected <?php endif; ?>>ROB</option>
                              <option value="OVR_RFSO" <?php if ($this->_tpl_vars['fault_type'] == 'OVR_RFSO'): ?> selected <?php endif; ?>>OVR_RFSO</option>
                              <option value="OVR_VAS" <?php if ($this->_tpl_vars['fault_type'] == 'OVR_VAS'): ?> selected <?php endif; ?>>OVR_VAS</option>
                              <option value="OVR_OSS" <?php if ($this->_tpl_vars['fault_type'] == 'OVR_OSS'): ?> selected <?php endif; ?>>OVR_OSS</option>
                              <option value="ITPUG" <?php if ($this->_tpl_vars['fault_type'] == 'ITPUG'): ?> selected <?php endif; ?>>ITPUG</option>
                              <option value="ILS" <?php if ($this->_tpl_vars['fault_type'] == 'ILS'): ?> selected <?php endif; ?>>ILS</option>
                              <option value="External Power Problem" <?php if ($this->_tpl_vars['fault_type'] == 'External Power Problem'): ?> selected <?php endif; ?>>External Power Problem</option>
                              <option value="Internal Power Problem" <?php if ($this->_tpl_vars['fault_type'] == 'Internal Power Problem'): ?> selected <?php endif; ?>>Internal Power Problem</option>
                              <option value="ADM Problem" <?php if ($this->_tpl_vars['fault_type'] == 'ADM Problem'): ?> selected <?php endif; ?>>ADM Problem</option>
                           </select>

	 </td>
	 <!--
	 <td width="125px">
	 Escalated to Vendor:  
		
	<select value="Select" name="escalated_to_vendor">
	<option value="No">No</option>
	<option value="Yes">Yes</option>
		</select>
	 </td>
	 
	 <td width="125px">
	 MNI Status:  
		
	<select value="Select" name="mni_status">
	<option value="Open">Open</option>
	<option value="On-going">On-going</option>
	<option value="Close">Close</option>
		</select>
	 </td>
	 -->
	 </tr>
  <tr>
    <td colspan="3">
	Fault Description: <br /><textarea name="fault_description" id="fault_description" rows="3" cols="70"></textarea>
	</td>
	
    <td colspan="4"> 
	BO Findings/Comments: <br /><textarea name="bo_findings" id="bo_findings" rows="3" cols="70"></textarea>
	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	Affected Equipment/Node/System: <br /><textarea name="affected_node" id="affected_node" rows="3" cols="70"></textarea>
	</td>
	<!--
	<td colspan="4">
	Rectification Process: <br /><textarea name="rectification_process" id="rectification_process" rows="3" cols="70"></textarea>
	</td>
	
  </tr>
  <tr>
    -->
    <td colspan="3">
	Corelated Equipment/Node/System (if any): 
    	      			              <a href="JavaScript:Void(0);" onClick="addCorelatedNode();"><font size="2">Click Here</font></a>
    	      			              <div id="file_browser_container">    	      				
    	      			              </div>
		
	</td>
	<!--
    <td colspan="4">
	Vendor Findings/Comments (if Escalated):
	<a href="JavaScript:Void(0);" onClick="addVendorFindings();"><font size="2">Click Here</font></a>
    	      			              <div id="file_browser_container3">    	      				
    	      			              </div>
							
	</td>
	-->
  </tr>
  <tr>
    
    <td colspan="6">
	Impact Analysis: <br /><textarea name="impact_analysis" id="impact_analysis" rows="3" cols="170"></textarea>
	</td>
	
	<!--
    <td colspan="4">
	Recommendations from this incident: <br /><textarea name="recomendation" id="recomendation" rows="3" cols="70"></textarea>
	</td>
  </tr>
  -->
  <tr>
  <td align="center" colspan="6">
  <input type="submit" class="submit" name="submit" value="Create">
  <input type="reset" class="reset" name="reset" value="Reset">     
  </td>
	
  </tr>
 
</table>

	
	 
	<!-- Name of the Fault: <br /><textarea name="fault_name" id="fault_name" rows="5" cols="160"></textarea><br /><br /> -->
	<!-- Affected Equipment/Node/System: <br /><textarea name="affected_node" id="affected_node" rows="5" cols="160"></textarea><br /><br />-->
	<!-- Corelated Equipment/Node/System: <br /><textarea name="corelated_node" id="corelated_node" rows="5" cols="160"></textarea><br /><br /> -->
    <!--Remedy Group Findings/Comments: <br /><textarea name="remedy_group_findings" id="remedy_group_findings" rows="5" cols="160"></textarea><br /><br />-->
    <!--Action Taken By Remedy Group: <br /><textarea name="action_taken_by" id="action_taken_by" rows="5" cols="160"></textarea><br /><br />-->
	<!-- <br /><textarea name="vendor_findings" id="vendor_findings" rows="5" cols="160"></textarea><br /><br />-->
	<!--Probable Reason: <br /><textarea name="probable_reason" id="probable_reason" rows="5" cols="160"></textarea><br /><br />-->
	<!--Event Chronology: <br /><textarea name="event_choronology" id="event_choronology" rows="5" cols="160"></textarea><br /><br />-->
	 
	
	</form>
	
	<?php elseif ($this->_tpl_vars['page'] == 'Concerned_MNI_View'): ?> 

		
	</sel><form name="MNI_View_Form" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST"  onenctype="multipart/form-data">
      			 
     
	    <input type="hidden" name="sl" value="<?php echo $this->_tpl_vars['sl']; ?>
">
   

	<!-- <?php echo smarty_function_debug(array(), $this);?>
 -->
	 
	 
	 <table align="center" border="1">
	 
	 
  
  <?php if ($this->_tpl_vars['list']): ?>
	 <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	  <tr>
	 <td width="200px">
	 
	 
	 	<h6> Fault Category: </h6><?php echo $this->_tpl_vars['row']->fault_catagory; ?>

	  
	 </td>
	 <td width="200px">
	 <h6>Down Time: </h6><?php echo $this->_tpl_vars['row']->down_time; ?>

	 </td>
	 <td width="200px">
	<h6> Escalation Time: </h6><?php echo $this->_tpl_vars['row']->escalated_time; ?>

	 </td>
	 <td width="200px">
	<h6> Restoration Time: </h6><?php echo $this->_tpl_vars['row']->restoration_time; ?>

	 </td>
	 <td width="200px">
	<h6> Total outage: </h6>
	 </td>
	 <td width="200px">
	<h6> Escalated to Vendor:  </h6>
	 
	 <?php echo $this->_tpl_vars['row']->escalated_to_vendor; ?>

	 <!--
	 <a href="JavaScript:Void(0);" onClick="EscalatedToVendor();"><font size="1">Change Data</font></a>
    	      			              <div id="file_browser_container1"> </div>
	 -->
		 </td>
	 
	 </tr>
  <tr>
    <td colspan="3">
	<h6>Fault Description: </h6><?php echo $this->_tpl_vars['row']->fault_description; ?>

	</td>
	
    <td colspan="3"> 
	<h6>BO Findings/Comments: </h6><?php echo $this->_tpl_vars['row']->bo_findings; ?>

	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	<h6>Affected Equipment/Node/System: </h6><?php echo $this->_tpl_vars['row']->affected_node; ?>

	</td>
	<td colspan="3">
	<h6>Rectification Process: </h6>	<?php echo $this->_tpl_vars['row']->rectification_process; ?>

	
	<a href="JavaScript:Void(0);" onClick="RectificationProcess();"><font size="1"><br>Add Data</font></a>
    	      			              <div id="file_browser_container2">    	      				
    	      			              </div>
	
	
	
	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	<h6>Corelated Equipment/Node/System </h6>(if any): <?php echo $this->_tpl_vars['row']->corelated_node; ?>
   	      			             
		
	</td>
    <td colspan="3">
	<h6>Vendor Findings/Comments (if Escalated):</h6> <?php echo $this->_tpl_vars['row']->vendor_findings; ?>

	<a href="JavaScript:Void(0);" onClick="addVendorFindings();"><font size="1"><br>Change Status & Add Data</font></a>
    	      			              <div id="file_browser_container3">    	      				
    	      			              </div>
							
	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	<h6>Impact Analysis: </h6><?php echo $this->_tpl_vars['row']->impact_analysis; ?>

	
	</td>
    <td colspan="3">
	<h6>Recommendations from this incident: </h6><?php echo $this->_tpl_vars['row']->recomendation; ?>

	
	<a href="JavaScript:Void(0);" onClick="recomendation();"><font size="1"><br>Add Data</font></a>
    	      			              <div id="file_browser_container4">    	      				
    	      			              </div>
			
	</td>
  </tr>
  
  <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>
  
  <tr>
  <td align="center" colspan="6">
  
    <?php if (! $this->_tpl_vars['list']): ?>
	<tr>
  <td align="center" colspan="6">
 <h5>If you want to show the MNI
  </td>
	
  </tr>
 
  <tr>
  <td>
  Type your Windows User Name: <input name="concerned_user_id" id="concerned_user_id" type="text">
  </td>
  </tr>
	<input type="hidden" value="updateMNI" name="cmd">
	<tr><td align="center"><input type="submit" class="submit" name="submit" value="Click Here" ></td>
	</tr>
	
	
	
	<?php endif; ?>
	
	
	<?php if ($this->_tpl_vars['list']): ?>
	
	<input type="hidden" value="updateMNI" name="cmd">
    <!--<input type="hidden" value="viewMNI" name="cmd2">-->
	<input type="submit" class="submit" name="submit" value="Update Data">
	<?php endif; ?>
  </td>
	
  </tr>
 
</table>

	
	 
	<!-- Name of the Fault: <br /><textarea name="fault_name" id="fault_name" rows="5" cols="160"></textarea><br /><br /> -->
	<!-- Affected Equipment/Node/System: <br /><textarea name="affected_node" id="affected_node" rows="5" cols="160"></textarea><br /><br />-->
	<!-- Corelated Equipment/Node/System: <br /><textarea name="corelated_node" id="corelated_node" rows="5" cols="160"></textarea><br /><br /> -->
    <!--Remedy Group Findings/Comments: <br /><textarea name="remedy_group_findings" id="remedy_group_findings" rows="5" cols="160"></textarea><br /><br />-->
    <!--Action Taken By Remedy Group: <br /><textarea name="action_taken_by" id="action_taken_by" rows="5" cols="160"></textarea><br /><br />-->
	<!-- <br /><textarea name="vendor_findings" id="vendor_findings" rows="5" cols="160"></textarea><br /><br />-->
	<!--Probable Reason: <br /><textarea name="probable_reason" id="probable_reason" rows="5" cols="160"></textarea><br /><br />-->
	<!--Event Chronology: <br /><textarea name="event_choronology" id="event_choronology" rows="5" cols="160"></textarea><br /><br />-->
	 
	
	</form>
	
	
	
	<?php elseif ($this->_tpl_vars['page'] == 'MNI_Manager_Search'): ?> 
	
	</sel><form name="MNI_Manager_New_Search" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" >
      			 
     MNI_Manager_(Search)<br /><br />
	 <input type="hidden" value="searchMNI" name="cmd">
	  	      
	
	<table border="1">
  <tr>
    <td width="200px">
	Date From: <br />
	<input type="Text" class="text" id="date_from" maxlength="20" size="20" name="date_from" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['date_from'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
" style="background-color:;">
    <a href="javascript:NewCal('date_from','yyyymmdd',true,24,'dropdown',false)"><img src="/nm_tx/common/image/icons/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br /><br />
	</td>
    <td width="200px">
			
	Date To: <br />
	<input type="Text" class="text" id="date_to" maxlength="20" size="20" name="date_to" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['date_to'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %T") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %T")); ?>
" style="background-color:;">
    <a href="javascript:NewCal('date_to','yyyymmdd',true,24,'dropdown',false)"><img src="/nm_tx/common/image/icons/cal.gif" width="16" height="16" border="0" alt="Pick a date"></a><br /><br />
	</td>
    <td width="200px">
	
	 MNI Status:
	<select name="status">
	<option ></option>
	<option value="Open">Open</option>
	<option value="On-going">On-going</option>
	<option value="Closed">Closed</option>
	</select>
	<br /><br />
	
	</td>
    <td width="200px">
	
   Submitted By:
	<select name="submitted_by">
	<option value=""></option>
	<!--<option value="<?php echo $this->_tpl_vars['nodeA']; ?>
"><?php echo $this->_tpl_vars['nodeA']; ?>
</option>-->
	<?php if ($this->_tpl_vars['list']): ?>
	<?php if (count($_from = (array)$this->_tpl_vars['submitted_by_name'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->submitted_by; ?>
"><?php echo $this->_tpl_vars['row']->submitted_by; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	<?php endif; ?>
	
	
	</select>
	
	<br /><br />
	</td>
    <td width="200px">
	
	
	 Submitted To:
	 <select name="submitted_to" style="font-size:10;">
                              <option value="">-- Select --</option>
                              <option value="CSP_BSS" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_BSS'): ?> selected <?php endif; ?>>CSP_BSS</option>
                              <option value="CSP_CSS" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_CSS'): ?> selected <?php endif; ?>>CSP_CSS</option>
                              <option value="CSP_PSS" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_PSS'): ?> selected <?php endif; ?>>CSP_PSS</option>
                              <option value="CSP_IN" <?php if ($this->_tpl_vars['fault_type'] == 'CSP_IN'): ?> selected <?php endif; ?>>CSP_IN</option>

                              <option value="RTS_IPTS" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_IPTS'): ?> selected <?php endif; ?>>RTS_IPTS</option>
                              <option value="RTS_OTS" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_OTS'): ?> selected <?php endif; ?>>RTS_OTS</option>
                              <option value="RTS_MTS" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_MTS'): ?> selected <?php endif; ?>>RTS_MTS</option>
                              <option value="RTS_RAN" <?php if ($this->_tpl_vars['fault_type'] == 'RTS_RAN'): ?> selected <?php endif; ?>>RTS_RAN</option>

                              <option value="Railway Fiber" <?php if ($this->_tpl_vars['fault_type'] == 'Railway Fiber'): ?> selected <?php endif; ?>>Railway Fiber</option>
                              <option value="GP Fiber" <?php if ($this->_tpl_vars['fault_type'] == 'GP Fiber'): ?> selected <?php endif; ?>>GP Fiber</option>
                              <option value="ADM" <?php if ($this->_tpl_vars['fault_type'] == 'ADM'): ?> selected <?php endif; ?>>ADM</option>
                              <option value="High Capacity Microwave" <?php if ($this->_tpl_vars['fault_type'] == 'High Capacity Microwave'): ?> selected <?php endif; ?>>High Capacity Microwave</option>

                              <option value="ROD" <?php if ($this->_tpl_vars['fault_type'] == 'ROD'): ?> selected <?php endif; ?>>ROD</option>
                              <option value="ROS" <?php if ($this->_tpl_vars['fault_type'] == 'ROS'): ?> selected <?php endif; ?>>ROS</option>
                              <option value="ROC" <?php if ($this->_tpl_vars['fault_type'] == 'ROC'): ?> selected <?php endif; ?>>ROC</option>
                              <option value="ROK" <?php if ($this->_tpl_vars['fault_type'] == 'ROK'): ?> selected <?php endif; ?>>ROK</option>
                              <option value="ROB" <?php if ($this->_tpl_vars['fault_type'] == 'ROB'): ?> selected <?php endif; ?>>ROB</option>
                              <option value="OVR_RFSO" <?php if ($this->_tpl_vars['fault_type'] == 'OVR_RFSO'): ?> selected <?php endif; ?>>OVR_RFSO</option>
                              <option value="OVR_VAS" <?php if ($this->_tpl_vars['fault_type'] == 'OVR_VAS'): ?> selected <?php endif; ?>>OVR_VAS</option>
                              <option value="OVR_OSS" <?php if ($this->_tpl_vars['fault_type'] == 'OVR_OSS'): ?> selected <?php endif; ?>>OVR_OSS</option>
                              <option value="ITPUG" <?php if ($this->_tpl_vars['fault_type'] == 'ITPUG'): ?> selected <?php endif; ?>>ITPUG</option>
                              <option value="ILS" <?php if ($this->_tpl_vars['fault_type'] == 'ILS'): ?> selected <?php endif; ?>>ILS</option>
                              <option value="External Power Problem" <?php if ($this->_tpl_vars['fault_type'] == 'External Power Problem'): ?> selected <?php endif; ?>>External Power Problem</option>
                              <option value="Internal Power Problem" <?php if ($this->_tpl_vars['fault_type'] == 'Internal Power Problem'): ?> selected <?php endif; ?>>Internal Power Problem</option>
                              <option value="ADM Problem" <?php if ($this->_tpl_vars['fault_type'] == 'ADM Problem'): ?> selected <?php endif; ?>>ADM Problem</option>
                           </select>
	<br /><br />
	
	</td>
    <td width="200px">
	
	 Category:
	<select name="catagory">
	<option></option>
	<option value="Core_Network">Core Network</option>
	<option value="Service_Network">Service Network</option>
	<option value="Transmission_Network">Transmission Network</option>
	</select>
	<br /><br />
	</td>
	
	
  </tr>
  
 <tr>
    <td colspan="6" align="center">
	<input type="submit" class="submit" name="submit" value="Search">
  	<input type="reset" class="reset" name="reset" value="Reset">
	</td>
  </tr>
  
</table>


	
	
	<br /><br />
	
	
	 <table align="center" border="1">
	 
	 <tr>
	 <?php if ($this->_tpl_vars['list']): ?>
	 <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	  
  <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>
	 
  <td align="center" colspan="6">
 <h5>Total Number of MNI found: <?php echo $this->_tpl_vars['row']->sl; ?>

  </td>
	
  </tr>
  </table>
  <?php if ($this->_tpl_vars['list']): ?>
	 <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 <table align="center" border="1">
	  
	   <tr>
    <td  colspan="6" bgcolor="#000000"><?php echo $this->_tpl_vars['row']->sl; ?>
</td>
  </tr>
	  
	  <tr>
	 <td width="200px">
	 
	 
	 	<h6> Fault Category: </h6><?php echo $this->_tpl_vars['row']->fault_catagory; ?>

	  
	 </td>
	 <td width="200px">
	 <h6>Down Time: </h6><?php echo $this->_tpl_vars['row']->down_time; ?>

	 </td>
	 <td width="200px">
	<h6> Escalation Time: </h6><?php echo $this->_tpl_vars['row']->escalated_time; ?>

	 </td>
	 <td width="150px">
	<h6> Restoration Time: </h6><?php echo $this->_tpl_vars['row']->restoration_time; ?>

	 </td>
	 <td width="100px">
	<h6> Total outage: </h6>
	
		 </td>
	 <td width="150px">
	<h6> Escalated to Vendor:  </h6>
	 
	 <?php echo $this->_tpl_vars['row']->escalated_to_vendor; ?>

	 </td>
	 
	 <td width="200px">
	 <h6>MNI Status: </h6>
	 <?php echo $this->_tpl_vars['row']->mni_status; ?>

	 
	 <?php if ($this->_tpl_vars['row']->mni_status == 'Open'): ?> 
		&nbsp;

	<a href='mni.php?page=Concerned_MNI_View&sl=<?php echo $this->_tpl_vars['row']->sl; ?>
&page=re_send_mail'>Resend MNI Mail</a>
	
	<?php endif; ?>
	 </td>
	 
	 </tr>
  <tr>
    <td colspan="3">
	<h6>Fault Description: </h6><?php echo $this->_tpl_vars['row']->fault_description; ?>

	</td>
	
    <td colspan="4"> 
	<h6>BO Findings/Comments: </h6><?php echo $this->_tpl_vars['row']->bo_findings; ?>

	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	<h6>Affected Equipment/Node/System: </h6><?php echo $this->_tpl_vars['row']->affected_node; ?>

	</td>
	<td colspan="4">
	<h6>Rectification Process: </h6>	<?php echo $this->_tpl_vars['row']->rectification_process; ?>

	
	
	
	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	<h6>Corelated Equipment/Node/System </h6>(if any): <?php echo $this->_tpl_vars['row']->corelated_node; ?>
   	      			             
		
	</td>
    <td colspan="4">
	<h6>Vendor Findings/Comments </h6>(if Escalated): <?php echo $this->_tpl_vars['row']->vendor_findings; ?>

						
	</td>
	
  </tr>
  <tr>
    
    <td colspan="3">
	<h6>Impact Analysis: </h6><?php echo $this->_tpl_vars['row']->impact_analysis; ?>

	
	</td>
    <td colspan="4">
	<h6>Recommendations from this incident: </h6><?php echo $this->_tpl_vars['row']->recomendation; ?>

	
	</td>
  </tr>
   
  </table>
  
  <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>
  
 </form>
	
	
		<?php elseif ($this->_tpl_vars['page'] == 'send_mail'): ?> 
	
	<form name="Send_Mail" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onSubmit="doFormSubmit();">
   <input type="hidden" value="sendMAIL" name="cmd">
   <input type="hidden" name="sl" value="<?php echo $this->_tpl_vars['sl']; ?>
">
   <input type="hidden" name="fault_id" value="<?php echo $this->_tpl_vars['fault_id']; ?>
">
	<h6> Compose Mail </h6>
	
	
	<table border="1">
	
  <tr>
    
    <td width="300px"> Select Group Name for TO:
    <select name="to_group_recipient_list[]" id="to_group_recipient_list">
	<option value="<?php echo $this->_tpl_vars['group_name']; ?>
"><?php echo $this->_tpl_vars['group_name']; ?>
</option>
	<?php if (count($_from = (array)$this->_tpl_vars['group_email_id'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->group_email; ?>
"><?php echo $this->_tpl_vars['row']->name; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	</select></td>
    <td width="50"><input type="button" value=">>" onClick="addSelectedOptions('to_group_recipient_list')">
	   <input type="button" value="<<" onClick="removeSelectedOptions('selected_to_group_recipient_list')"></td>
	<td width="100"><select name="selected_to_group_recipient_list[]" id="selected_to_group_recipient_list" size="4" multiple style="width:100"></select></td>
    <td width="450">Select Individual Name for TO:
   <select name="to_individual_recipient_list[]" id="to_individual_recipient_list">
	<option value="<?php echo $this->_tpl_vars['emp_name']; ?>
"><?php echo $this->_tpl_vars['emp_name']; ?>
</option>
	<?php if (count($_from = (array)$this->_tpl_vars['emp_name_list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->email; ?>
"><?php echo $this->_tpl_vars['row']->emp_name; ?>
, <?php echo $this->_tpl_vars['row']->phone_no; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	</select></td>
    <td width="50"> <input type="button" value=">>" onClick="addSelectedOptions('to_individual_recipient_list')">
	   <input type="button" value="<<" onClick="removeSelectedOptions('selected_to_individual_recipient_list')">
	  </td>
    <td width="100"><select name="selected_to_individual_recipient_list[]" id="selected_to_individual_recipient_list" size="4" multiple style="width:100"></select></td>
  </tr>
  <tr>
    <td>Select Group Name for CC:
     <select name="cc_group_recipient_list[]" id="cc_group_recipient_list">
	 <option value="<?php echo $this->_tpl_vars['group_name']; ?>
"><?php echo $this->_tpl_vars['group_name']; ?>
</option>
	 <?php if (count($_from = (array)$this->_tpl_vars['group_email_id'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 <option value="<?php echo $this->_tpl_vars['row']->group_email; ?>
"><?php echo $this->_tpl_vars['row']->name; ?>
</option>
	 <?php endforeach; unset($_from); endif; ?>
	 </select></td>
    <td><input type="button" value=">>" onClick="addSelectedOptions('cc_group_recipient_list')">
	<input type="button" value="<<" onClick="removeSelectedOptions('selected_cc_group_recipient_list')"></td>
    <td><select name="selected_cc_group_recipient_list[]" id="selected_cc_group_recipient_list" size="4" multiple style="width:100"></select></td>
    <td>Select Individual Name for CC:
   <select name="cc_individual_recipient_list[]" id="cc_individual_recipient_list">
	<option value="<?php echo $this->_tpl_vars['emp_name']; ?>
"><?php echo $this->_tpl_vars['emp_name']; ?>
</option>
	<?php if (count($_from = (array)$this->_tpl_vars['emp_name_list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->email; ?>
"><?php echo $this->_tpl_vars['row']->emp_name; ?>
, <?php echo $this->_tpl_vars['row']->phone_no; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	</select></td>
    <td><input type="button" value=">>" onClick="addSelectedOptions('cc_individual_recipient_list')">
	<input type="button" value="<<" onClick="removeSelectedOptions('selected_cc_individual_recipient_list')"></td>
    <td><select name="selected_cc_individual_recipient_list[]" id="selected_cc_individual_recipient_list" size="4" multiple style="width:100"></select></td>
  </tr>
  <tr >
    <td colspan="6"><br>Subject: MNI Report For "<?php echo $this->_tpl_vars['fault_description']; ?>
" on date of <?php echo $this->_tpl_vars['submit_date']; ?>
;<br><br></td>
    
  </tr>
  <tr>
    
	<?php if ($this->_tpl_vars['list2']): ?>
	 <?php if (count($_from = (array)$this->_tpl_vars['list2'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	  
  <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>
	<td colspan="6">	
		

	Dear concerned ,<br><br>Please find the MNI Report details by clicking the following link. <br><br><a href='mni.php?page=Concerned_MNI_View&sl=<?php echo $this->_tpl_vars['row']->sl; ?>
'> View/Update This MNI Report.</a> <br><br>Regards,<br>  <?php echo $this->_tpl_vars['name']; ?>
  <br>Email: <?php echo $this->_tpl_vars['email']; ?>

			  

<!--
Dear concerned ,<br><br>Please find the MNI Report details by clicking the following link. <br><br><a href='concerned_mni.php'> View/Update This MNI Report.</a> <br><br>Regards,<br>  <?php echo $this->_tpl_vars['name']; ?>
  <br>Email: <?php echo $this->_tpl_vars['email']; ?>
	
	
-->		</td>
  </tr>
  
  
  <tr>
    <td  align="center"colspan="6">	<input type="submit" class="submit" name="submit" value="Send Mail">
	<input type="reset" class="reset" name="reset" value="Reset"></td>
  </tr
></table>

	
	<table>
    
  

</table>


	
	</form>



		<?php elseif ($this->_tpl_vars['page'] == 're_send_mail'): ?> 
	
	<form name="Send_Mail" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onSubmit="doFormSubmit();">
   <input type="hidden" value="resendMAIL" name="cmd">
   <input type="hidden" name="sl" value="<?php echo $this->_tpl_vars['sl']; ?>
">
   <input type="hidden" name="fault_id" value="<?php echo $this->_tpl_vars['fault_id']; ?>
">
	<h6> Compose Mail </h6>
	
	
	<table border="1">
<!--	
  <tr>
    
    <td width="300px"> Select Group Name for TO:
    <select name="to_group_recipient_list[]" id="to_group_recipient_list">
	<option value="<?php echo $this->_tpl_vars['group_name']; ?>
"><?php echo $this->_tpl_vars['group_name']; ?>
</option>
	<?php if (count($_from = (array)$this->_tpl_vars['group_email_id'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->group_email; ?>
"><?php echo $this->_tpl_vars['row']->name; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	</select></td>
    <td width="50"><input type="button" value=">>" onClick="addSelectedOptions('to_group_recipient_list')">
	   <input type="button" value="<<" onClick="removeSelectedOptions('selected_to_group_recipient_list')"></td>
	<td width="100"><select name="selected_to_group_recipient_list[]" id="selected_to_group_recipient_list" size="4" multiple style="width:100"></select></td>
    <td width="450">Select Individual Name for TO:
   <select name="to_individual_recipient_list[]" id="to_individual_recipient_list">
	<option value="<?php echo $this->_tpl_vars['emp_name']; ?>
"><?php echo $this->_tpl_vars['emp_name']; ?>
</option>
	<?php if (count($_from = (array)$this->_tpl_vars['emp_name_list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->email; ?>
"><?php echo $this->_tpl_vars['row']->emp_name; ?>
, <?php echo $this->_tpl_vars['row']->phone_no; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	</select></td>
    <td width="50"> <input type="button" value=">>" onClick="addSelectedOptions('to_individual_recipient_list')">
	   <input type="button" value="<<" onClick="removeSelectedOptions('selected_to_individual_recipient_list')">
	  </td>
    <td width="100"><select name="selected_to_individual_recipient_list[]" id="selected_to_individual_recipient_list" size="4" multiple style="width:100"></select></td>
  </tr>
  <tr>
    <td>Select Group Name for CC:
     <select name="cc_group_recipient_list[]" id="cc_group_recipient_list">
	 <option value="<?php echo $this->_tpl_vars['group_name']; ?>
"><?php echo $this->_tpl_vars['group_name']; ?>
</option>
	 <?php if (count($_from = (array)$this->_tpl_vars['group_email_id'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 <option value="<?php echo $this->_tpl_vars['row']->group_email; ?>
"><?php echo $this->_tpl_vars['row']->name; ?>
</option>
	 <?php endforeach; unset($_from); endif; ?>
	 </select></td>
    <td><input type="button" value=">>" onClick="addSelectedOptions('cc_group_recipient_list')">
	<input type="button" value="<<" onClick="removeSelectedOptions('selected_cc_group_recipient_list')"></td>
    <td><select name="selected_cc_group_recipient_list[]" id="selected_cc_group_recipient_list" size="4" multiple style="width:100"></select></td>
    <td>Select Individual Name for CC:
   <select name="cc_individual_recipient_list[]" id="cc_individual_recipient_list">
	<option value="<?php echo $this->_tpl_vars['emp_name']; ?>
"><?php echo $this->_tpl_vars['emp_name']; ?>
</option>
	<?php if (count($_from = (array)$this->_tpl_vars['emp_name_list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
		 <option value="<?php echo $this->_tpl_vars['row']->email; ?>
"><?php echo $this->_tpl_vars['row']->emp_name; ?>
, <?php echo $this->_tpl_vars['row']->phone_no; ?>
</option>
	<?php endforeach; unset($_from); endif; ?>
	</select></td>
    <td><input type="button" value=">>" onClick="addSelectedOptions('cc_individual_recipient_list')">
	<input type="button" value="<<" onClick="removeSelectedOptions('selected_cc_individual_recipient_list')"></td>
    <td><select name="selected_cc_individual_recipient_list[]" id="selected_cc_individual_recipient_list" size="4" multiple style="width:100"></select></td>
  </tr>
  
  -->
  
  <tr>
  <td>
  TO:
  <br><br>
  CC:
  </td>
  </tr>
  
  <tr >
    <td colspan="6"><br>Subject: Long Pending MNI Report For "<?php echo $this->_tpl_vars['fault_description']; ?>
" on date of <?php echo $this->_tpl_vars['submit_date']; ?>
 at your end.<br><br></td>
    
  </tr>
  <tr>
    
	<?php if ($this->_tpl_vars['list2']): ?>
	 <?php if (count($_from = (array)$this->_tpl_vars['list2'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	  
  <?php endforeach; unset($_from); endif; ?>
  <?php endif; ?>
	<td colspan="6">	
		

	Dear concerned ,<br><br>Please find the MNI Report details by clicking the following link. <br><br><a href='mni.php?page=Concerned_MNI_View&sl=<?php echo $this->_tpl_vars['row']->sl; ?>
'> View/Update This MNI Report.</a> <br><br>Regards,<br>  <?php echo $this->_tpl_vars['name']; ?>
  <br>Email: <?php echo $this->_tpl_vars['email']; ?>

			  

<!--
Dear concerned ,<br><br>Please find the MNI Report details by clicking the following link. <br><br><a href='concerned_mni.php'> View/Update This MNI Report.</a> <br><br>Regards,<br>  <?php echo $this->_tpl_vars['name']; ?>
  <br>Email: <?php echo $this->_tpl_vars['email']; ?>
	
	
-->		</td>
  </tr>
  
  
  <tr>
    <td  align="center"colspan="6">	<input type="submit" class="submit" name="submit" value="Send Mail">
	<input type="reset" class="reset" name="reset" value="Reset"></td>
  </tr
></table>

	
	<table>
    
  

</table>


	
	</form>



	<?php endif; ?>
	
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
</html>