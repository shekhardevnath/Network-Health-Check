<?php /* Smarty version 2.6.6, created on 2009-09-20 12:18:09
         compiled from C:/wamp/www/nm_tx/standard/user_home/admin_navigation.html */ ?>
<!--hide nevigation bar starts-->
<table border="0" width="100%">
<tr>
   <td align="right">
   <a href='javascript:void(0)' onclick="hideDiv('sidebar'); showDiv('nosidebar');" title="Hide Sidebar">
   <img id="hideSidebar" src="/nm_tx/common/image/table/close.gif" border="0" alt="Hide Sidebar" onmouseover="showImg('hideSidebar', '/nm_tx/common/image/table/close_hvr.gif');" onmouseout="showImg('hideSidebar', '/nm_tx/common/image/table/close.gif');">
   </a>
   </td>
</tr>
</table>
<!--hide nevigation bar ends-->

<table border="0" width="100%">
<tr>
   <?php if ($this->_tpl_vars['nav_item'] == 'home'): ?>
      <td class="navOn">Home</td>
   <?php else: ?>
      <td class="nav"><a href="/nm_tx/home.php">Home</a></td>
   <?php endif; ?>
</tr>
<tr>
   <td class="nav"><a href="/nm_tx/standard/logout/logout.php">Logout</a></td>
</tr>
</table>

<br />

<!--the nevigations for 'System Tools' starts-->
<table class="navHeader" border="0" width="100%">
<tr>
   <td width="10"><img src="/nm_tx/common/image/table/mini_arrowright.gif"></td>
   <td>
   <a href='javascript:void(0)' onclick="toggle('system');">System Tools</a>
   </td>
</tr>
</table>

<div id="system">
<table border="0" width="100%">
<tr>
   <td>&nbsp;</td>
   <td>
      <table width="100%">
         <tr>
         <?php if ($this->_tpl_vars['nav_item'] == 'user'): ?>
            <td class="navOn">User Manager</td>
         <?php else: ?>
            <td class="nav"><a href="/nm_tx/user_manager/user_manager.php">User Manager</a></td>
         <?php endif; ?>
         </tr>
         <tr>
         <?php if ($this->_tpl_vars['nav_item'] == 'group'): ?>
            <td class="navOn">Group Manager</td>
         <?php else: ?>
            <td class="nav"><a href="/nm_tx/group_manager/group_manager.php">Group Manager</a></td>
         <?php endif; ?>
         </tr>         
      </table>
   </td>
</tr>
</table>
</div>
<!--the nevigations for 'System Tools' ends-->

<!--the nevigations for 'Report' starts-->
<table class="navHeader" border="0" width="100%">
<tr>
   <td width="10"><img src="/nm_tx/common/image/table/mini_arrowright.gif"></td>
   <td>
   <a href='javascript:void(0)' onclick="toggle('system1');">Reports</a>
   </td>
</tr>
</table>

<div id="system1">
<table border="0" width="100%">
<tr>
   <td>&nbsp;</td>
   <td>
      <table width="100%">
         <tr>
         <?php if ($this->_tpl_vars['nav_item'] == 'tnm'): ?>
            <td class="navOn">TNM Report</td>
         <?php else: ?>
            <td class="nav"><a href="/nm_tx/report_manager/report_manager.php?cmd=tnm">TNM Report</a></td>
         <?php endif; ?>
         </tr>
         <tr>
         <?php if ($this->_tpl_vars['nav_item'] == 'nm_tx'): ?>
            <td class="navOn">NM_TX Report</td>
         <?php else: ?>
            <td class="nav"><a href="/nm_tx/report_manager/report_manager.php?cmd=nm_tx">NM_TX Report</a></td>
         <?php endif; ?>
         </tr>         
         <tr>
         <?php if ($this->_tpl_vars['nav_item'] == 'recurrent_fault'): ?>
            <td class="navOn">Recurrent Fault</td>
         <?php else: ?>
            <td class="nav"><a href="/nm_tx/report_manager/report_manager.php?cmd=recurrent_fault">Recurrent Fault</a></td>
         <?php endif; ?>
         </tr>
         <tr>         
            <td class="nav"><a href="/of_report.php" target="_blank">OF Report</a></td>         
         </tr>         
      </table>
   </td>
</tr>
</table>
</div>
<!--the nevigations for 'Report' ends-->
<!--the nevigations for 'Others' starts-->
<table class="navHeader" border="0" width="100%">
<tr>
   <td width="10"><img src="/nm_tx/common/image/table/mini_arrowright.gif"></td>
   <td>
   <a href='javascript:void(0)' onclick="toggle('system2');">Others</a>
   </td>
</tr>
</table>

<div id="system2">
<table border="0" width="100%">
<tr>
   <td>&nbsp;</td>
   <td>
      <table width="100%">
         <tr>
         <?php if ($this->_tpl_vars['nav_item'] == 'meeting_training'): ?>
            <td class="navOn">Meeting/Training Info</td>
         <?php else: ?>
            <td class="nav"><a href="/nm_tx/meeting_training_info/meeting_training_info.php">Meeting/Training Info</a></td>         
         <?php endif; ?>
         </tr>         
      </table>
   </td>
</tr>
</table>
</div>
<!--the nevigations for 'Others' ends-->

<br />