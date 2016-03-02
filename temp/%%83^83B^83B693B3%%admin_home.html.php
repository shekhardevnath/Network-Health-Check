<?php /* Smarty version 2.6.6, created on 2009-09-20 12:18:09
         compiled from C:/wamp/www/nm_tx/standard/user_home/admin_home.html */ ?>
<html>
<head>
<title>Transmission Network Manager</title>
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">

<script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/sorttable.js"></script>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/CalendarPopup.js"></script>
<script language="JavaScript" src="<?php echo $this->_tpl_vars['REL_TEMPLATE_DIR']; ?>
/<?php echo $this->_tpl_vars['SYSTEM_APP_PREFIX']; ?>
.js"></script>
</head>

<body>

<!-- header include call starts here -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['USER_HEADER'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- header include call ends here -->

<div class="mainContentArea" align="center">
<table border="0" cellpadding="5" cellspacing="0" class="mainTable" width="100%">
<tr>


<td valign="top" width="10">

   <!-- navigation sidebar starts here -->
   <div id="nosidebar" style="display:none">
   <a href='javascript:void(0)' onclick="showDiv('sidebar'); hideDiv('nosidebar');" title="Show Sidebar">
   <img id="showSidebar" src="/nm_tx/common/image/table/max.gif" border="0" alt="Show Sidebar" onmouseover="showImg('showSidebar', '/nm_tx/common/image/table/max_hvr.gif');" onmouseout="showImg('showSidebar', '/nm_tx/common/image/table/max.gif');">
   </a>
   </div>

   <div id="sidebar" style="display:inline">
   <table width="200" border="0" cellspacing="0" cellpadding="0">
   <tr>
      <td align="right" width="10" height="10"><img src="/nm_tx/common/image/table/top_lft.gif"></td>
      <td background="/nm_tx/common/image/table/top_mid.gif"></td>
      <td align="left" width="10" height="10"><img src="/nm_tx/common/image/table/top_rht.gif"></td>
   </tr>
   <tr>
      <td align="right" width="10" background="/nm_tx/common/image/table/lft_border.gif"></td>
      <td bgcolor="#FFFFFF" align="left">

      <!-- navigation include call starts here -->
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['USER_NAVIGATION'], 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <!-- navigation include call ends here -->

      </td>
      <td align="left" width="10" background="/nm_tx/common/image/table/rht_border.gif"></td>
   </tr>
   <tr>
      <td align="right" width="10" height="10"><img src="/nm_tx/common/image/table/bttm_lft.gif"></td>
      <td background="/nm_tx/common/image/table/bttm_mid.gif"></td>
      <td align="left" width="10" height="10"><img src="/nm_tx/common/image/table/bttm_rht.gif"></td>
   </tr>
   </table>
   </div>
   <!-- navigation sidebar ends here -->

</td>

<td valign="top">
<!-- main contents block starts here -->
<?php echo $this->_tpl_vars['contents']; ?>

<!-- main contents block ends here -->
</td>

<td width="10">&nbsp;</td>
</tr>
</table>

<!-- footer include call starts here -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => @constant('FOOTER'), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- footer include call ends here -->
<div>

</body>
</html>