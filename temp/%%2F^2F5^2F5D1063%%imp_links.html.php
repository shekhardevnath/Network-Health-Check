<?php /* Smarty version 2.6.6, created on 2012-05-29 09:09:28
         compiled from C:/wamp/www/nm_tx/imp_links/imp_links.html */ ?>
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
<table width="100%" border="0" cellspacing="0" cellpadding="0" background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">
  <tr>
    <td align="right" width="10" height="10"><img src="/nm_tx/common/image/table/top_lft.gif"></td>
    <td background="/nm_tx/common/image/table/top_mid.gif"></td>
    <td align="left" width="10" height="10"><img src="/nm_tx/common/image/table/top_rht.gif"></td>
  </tr>
  <tr>
    <td align="right" width="10" background="/nm_tx/common/image/table/lft_border.gif"></td>
    <td align="left" class="contentArea">
	    <br>
    	<table border=0 cellpadding=5 cellspacing=2 align="center" bgcolor="white" width="300">    	
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">  	  	
  	  		<td><a href="IIG Link TX Data.htm" target="_blank"><b><font color="white">IIG Link TX Data</font></b></a></td>
  	  	</tr>  	  	
		<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">  	  	
  	  		<td><a href="ROBI_Subleased_link.htm" target="_blank"><b><font color="white">Robi Suleased TX Data</font></b></a></td>
  	  	</tr>  	  	
  	  	<?php if ($this->_tpl_vars['link'] == 'dwdm'): ?>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\WDM_On_Air_Traffic.xls"><b><font color="white">DWDM On Air Traffic</font></b></a></td>
  	  	</tr>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\DWDM Services.xls"><b><font color="white">DWDM On Air Services</font></b></a></td>
  	  	</tr>
  	  	<?php endif; ?>
  	  	<?php if ($this->_tpl_vars['link'] == 'mpbn'): ?>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\hiT-router connectivity matrix.xls"><b><font color="white">hiT-Router Connectivity (MPBN)</font></b></a></td>
  	  	</tr>  	  	
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\BW_Calculation_(SDH).xls"><b><font color="white">BW Calculation (SDH)</font></b></a></td>
  	  	</tr>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\Services in MPBN.xls"><b><font color="white">Services in MPBN</font></b></a></td>
  	  	</tr>
  	  	<?php endif; ?>  	  	
  	  	<?php if ($this->_tpl_vars['link'] == 'pdh'): ?>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\Summary PDH.xls"><b><font color="white">PDH Summary</font></b></a></td>
  	  	</tr>
  	  	<?php endif; ?>
  	  	<?php if ($this->_tpl_vars['link'] == sdh): ?>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\Client Contact Point_25-06-09.doc"><b><font color="white">Subleased Client Contact</font></b></a></td>
  	  	</tr>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\Critical_MUX_Site_List.xls"><b><font color="white">Critical Mux/Site List</font></b></a></td>
  	  	</tr>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\PABX E1.xls"><b><font color="white">PABX E1</font></b></a></td>
  	  	</tr>
  	  	<tr bgcolor="#0099FF" align="center" onMouseOver="mouseOver(this);" onMouseOut="mouseOut(this);">
  	  		<td><a href="\imp_files\Backbone Network (v 61)_17 05 2009.ppt"><b><font color="white">TX Backbone</font></b></a></td>
  	  	</tr>
  	  	<?php endif; ?>
  	  </table>
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