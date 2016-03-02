<?php /* Smarty version 2.6.6, created on 2015-05-17 12:07:06
         compiled from C:/wamp/www/nm_tx/standard/user_home/default_header.html */ ?>
<?php if ($this->_tpl_vars['USER_TYPE'] == 'BO'): ?>
  <script language="JavaScript" src="/nm_tx/ext/prototype/prototype.js"></script>
  <script language="JavaScript" src="/nm_tx/fault_popup_manager/fault_popup_manager.js"></script>
  
  <?php if ($this->_tpl_vars['type'] == 'Transport'): ?>
    <script language="JavaScript" src="/nm_tx/others_popup_manager/alarm_follow_up.js"></script>
  <?php endif; ?>		
  
  <!--
  <script language="JavaScript" src="/nm_tx/others_popup_manager/long_duration_sites.js"></script>	
  -->
<?php endif; ?>
<!--Alart for Radio Team-->
<?php if ($this->_tpl_vars['SUB_GROUP_ID'] == 2): ?>
  <script language="JavaScript" src="/nm_tx/others_popup_manager/long_time_outage.js"></script>	
<?php endif; ?>
<!-- Show NMS monitoring alert for Surveillance -->
<?php if ($this->_tpl_vars['USERNAME'] == 'amahbubul' || $this->_tpl_vars['USERNAME'] == 'msaiful'): ?>
  <script language="JavaScript" src="/nm_tx/fault_popup_manager/nms_monitoring_alert.js"></script>	
<?php endif; ?>

<table width="100%" border="0" bgcolor="black">
	<tr>
		<td width="20%" align="left"><img src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/Logo.png" height="100" width="100"></td>		
   	<td align="center" nowrap><font size="5" color="#0f84ac" style="font-family: Telenor">SOC Back Office Support</font></td>   	
   	<td width="20%" align="right">
   		<font color="white">Welcome, <b><i><?php echo $this->_tpl_vars['USERNAME']; ?>
 [<?php if ($this->_tpl_vars['type'] != ""): ?> <?php echo $this->_tpl_vars['type']; ?>
 <?php else: ?> All <?php endif; ?>]</i></b>!</font><br>
   		<?php if ($this->_tpl_vars['USER_TYPE'] != 'BO'): ?>
   		  <br>
   		  <iframe src ="/nm_tx/acvt_manager/acvt_manager.php?page=performance_data" width="210" align="right" height="40" scrolling="no" frameborder="0" id="iframe_data"></iframe>   		  
   		<?php endif; ?>
   		<br><br><br><br>
   		<div align="right">   		
		    <a href="/nm_tx/standard/logout/logout.php"><b>Logout</b></a>		   		
		  <div>
   	<td>
  </tr>  
</table>