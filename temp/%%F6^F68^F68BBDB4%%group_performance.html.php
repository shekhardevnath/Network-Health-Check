<?php /* Smarty version 2.6.6, created on 2015-09-23 10:25:33
         compiled from C:/wamp/www//nm_tx/acvt_manager/group_performance.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'replace', 'C:/wamp/www//nm_tx/acvt_manager/group_performance.html', 63, false),)), $this); ?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">    
    <script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>    
	</head>
	<body background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back1.png">
		<br>
		<table border="0" cellpadding="5" cellspacing="1" width="100%">
			<tr>
				<td width="35%" valign="top">
		      <table width="100%" cellpadding="15" cellspacing="1" border="0" bgcolor="black" align="center">
		      	<tr bgcolor="white">
		      		<td width="100%">		      			
		      			<h4 align="center"><u>Search by Date:(yyyy-mm-dd)</u></h4>
		      			<table border="0" cellspacing="2" cellpadding="5" align="center">
		      				<form name="acvtManagerForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
		      	      <input type="hidden" value="show" name="cmd">
		      	      <input type="hidden" value="group_performance" name="page">
		      				<tr>
		      					<td><label class="label">Start Date: </label></td>
		      					<td><input type="text" value=<?php echo $this->_tpl_vars['start_date']; ?>
 name="start_date" size="15"></td>
		      				</tr>
		      				<tr>
		      					<td><label class="label">End Date: </label></td>
		      					<td><input type="text" value=<?php echo $this->_tpl_vars['end_date']; ?>
 name="end_date" size="15"></td>
		      				</tr>
		      				<tr align="right">
		      	       	<td colspan="2">
		      	      		<input type="submit" class="submit" name="search" value="Search">  	  			  	  
		      	      	</td>
		      	      </tr>
		      	      </form>
		      			</table>
		      		</td>
		      	</tr>
		      	<tr bgcolor="white">
		      		<td width="100%">		      			
		      			<h4 align="center"><u>Overall Status:</u></h4>
		      			<h5 align="center">
		      				You are viweing result of date between <?php echo $this->_tpl_vars['start_date']; ?>
 and <?php echo $this->_tpl_vars['end_date']; ?>
.
		      			</h5>
		      			<div align="center">
		      				<b>Alarm=<?php echo $this->_tpl_vars['total']->alarm; ?>
, Fault=<?php echo $this->_tpl_vars['total']->fault; ?>
, Activity=<?php echo $this->_tpl_vars['total']->activity; ?>
, GPTTS=<?php echo $this->_tpl_vars['total']->gptts; ?>
 
		      			<font color="red">Pending=<?php echo $this->_tpl_vars['total']->pending; ?>
</font></b>
		      			</div>
		      		</td>
		      	</tr>		      	
		      </table>
		    </td>
		    <td width="65%">		
		      <table border="0" cellspacing="1" cellpadding="5" width="100%" align="center" bgcolor="white">
		      	<tr bgcolor="#7C93F4" align="center">
		      		<td><b>User Name</b></td>
		      		<td><b>Alarm</b></td>
		      		<td><b>Fault</b></td>
		      		<td><b>Activity</b></td>
		      		<td><b>GPTTS</b></td>
		      		<td><b>Pending</b></td>
		      	</tr>
		      	<?php if ($this->_tpl_vars['list'] != ""): ?>
		      	<?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
		      	  <tr align="center" bgcolor="#BFCAF9">
		      	  	<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->user)) ? $this->_run_mod_handler('replace', true, $_tmp, "'", "") : smarty_modifier_replace($_tmp, "'", "")); ?>
</td>
		      	  	<td><?php echo $this->_tpl_vars['item']->alarm; ?>
</td>
		      	  	<td><?php echo $this->_tpl_vars['item']->fault; ?>
</td>
		      	  	<td><?php echo $this->_tpl_vars['item']->activity; ?>
</td>
		      	  	<td><?php echo $this->_tpl_vars['item']->gptts; ?>
</td>
		      	  	<td><?php echo $this->_tpl_vars['item']->pending; ?>
</td>
		      	  </tr>
		      	<?php endforeach; unset($_from); endif; ?>
		      	<?php endif; ?>
		      </table>
		   </td>
	</body>
</html>