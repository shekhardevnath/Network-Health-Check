<?php /* Smarty version 2.6.6, created on 2011-02-13 11:50:51
         compiled from C:/wamp/www/nm_tx/acvt_manager/acvt_manager.html */ ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">    
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>    
    <script type="text/javascript" src="tabber.js"></script>
    <link rel="stylesheet" href="tabber.css" TYPE="text/css" MEDIA="screen">      
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
    	<h3 align="center">Activity & Performance Manager</h3>    	
      <div class="tabber">
        <div class="tabbertab">
	        <h2 onclick="alert('done');">Assigned Me</h2>
	        <iframe src ="/nm_tx/acvt_manager/acvt_manager.php?page=assigned_me" width="100%" height="500" frameborder="0" id="iframe0"></iframe>	        
        </div>
        <div class="tabbertab">
	        <h2>Assigned Group</h2>
	        <iframe src ="/nm_tx/acvt_manager/acvt_manager.php?page=assigned_group" width="100%" height="500" frameborder="0" id="iframe1"></iframe>	        
        </div>
        <div class="tabbertab">
	        <h2>Activity Manager</h2>
	        <iframe src ="/nm_tx/acvt_manager/acvt_manager.php?page=acvt_manager" width="100%" height="500" frameborder="0" id="iframe2"></iframe>	        
        </div>
        <div class="tabbertab">
	        <h2>Fault Log</h2>
	        <iframe src ="/nm_tx/tbased_fault_log/tbased_fault_log.php" width="100%" height="500" frameborder="0" id="iframe3"></iframe>	        
        </div>
        <div class="tabbertab">
	        <h2>Group Performance</h2>
	        <iframe src ="/nm_tx/acvt_manager/acvt_manager.php?page=group_performance" width="100%" height="500" frameborder="0" id="iframe4"></iframe>	        
        </div>
      </div>
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