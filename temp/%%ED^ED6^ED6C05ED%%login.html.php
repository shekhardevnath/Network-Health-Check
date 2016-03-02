<?php /* Smarty version 2.6.6, created on 2010-02-20 10:23:30
         compiled from C:/wamp/www/nm_tx/standard/login/login.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'ucfirst', 'C:/wamp/www/nm_tx/standard/login/login.html', 121, false),)), $this); ?>
<html>
<head>
<title>User Login</title>

<?php if ($this->_tpl_vars['SYSTEM_PRODUCTION_MODE'] != 'Yes'): ?>
<!--

 ** THIS NOTE ONLY SHOWS IN DEVELOPMENT MODE ***

 Purpose:
 This template is used to show the login form

-->
<?php endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">

<!-- load the standard cascading style sheet -->
<link rel="stylesheet" href="<?php echo $this->_tpl_vars['SYSTEM_COMMON_CSS_DIR']; ?>
/default.project.css" type="text/css">

<!-- load javascript error/success messages for javascripts -->
<script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/messages.js"></script>

<!-- load standard javascript library for apps -->
<script language="JavaScript" src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_JAVASCRIPT_DIR']; ?>
/common.js"></script>

<!-- load current application specific javascript -->
<script language="JavaScript" src="<?php echo $this->_tpl_vars['REL_TEMPLATE_DIR']; ?>
/<?php echo $this->_tpl_vars['SYSTEM_APP_PREFIX']; ?>
.js"></script>

<!-- setup default info -->
<script language="JavaScript">

 //
 // Set cancel URL
 //
 <?php if ($this->_tpl_vars['cancel_url'] != ""): ?>
    var CANCEL_URL = "<?php echo $this->_tpl_vars['cancel_url']; ?>
";
 <?php else: ?>
    // Default cancel
    var CANCEL_URL = "/";

 <?php endif; ?>

 //
 // Generate error information (if any)
 //
 var alertPopup        = false;
 var errorMsgList      = new Array();
 var errorMsgFieldList = new Array();
 var i = 0;

 <?php if ($this->_tpl_vars['errors'] != ""): ?>

   // Show alert() message for errors?

   <?php unset($this->_sections['row']);
$this->_sections['row']['name'] = 'row';
$this->_sections['row']['loop'] = is_array($_loop=$this->_tpl_vars['errors']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['row']['show'] = true;
$this->_sections['row']['max'] = $this->_sections['row']['loop'];
$this->_sections['row']['step'] = 1;
$this->_sections['row']['start'] = $this->_sections['row']['step'] > 0 ? 0 : $this->_sections['row']['loop']-1;
if ($this->_sections['row']['show']) {
    $this->_sections['row']['total'] = $this->_sections['row']['loop'];
    if ($this->_sections['row']['total'] == 0)
        $this->_sections['row']['show'] = false;
} else
    $this->_sections['row']['total'] = 0;
if ($this->_sections['row']['show']):

            for ($this->_sections['row']['index'] = $this->_sections['row']['start'], $this->_sections['row']['iteration'] = 1;
                 $this->_sections['row']['iteration'] <= $this->_sections['row']['total'];
                 $this->_sections['row']['index'] += $this->_sections['row']['step'], $this->_sections['row']['iteration']++):
$this->_sections['row']['rownum'] = $this->_sections['row']['iteration'];
$this->_sections['row']['index_prev'] = $this->_sections['row']['index'] - $this->_sections['row']['step'];
$this->_sections['row']['index_next'] = $this->_sections['row']['index'] + $this->_sections['row']['step'];
$this->_sections['row']['first']      = ($this->_sections['row']['iteration'] == 1);
$this->_sections['row']['last']       = ($this->_sections['row']['iteration'] == $this->_sections['row']['total']);
?>
      errorMsgList[i]      = "<?php echo $this->_tpl_vars['errors'][$this->_sections['row']['index']]['javascript_error_msg']; ?>
";
      errorMsgFieldList[i] = "<?php echo $this->_tpl_vars['errors'][$this->_sections['row']['index']]['error_field']; ?>
";
      i++;
   <?php endfor; endif; ?>

 <?php endif; ?>

</script>
<link rel="stylesheet" href="/nm_tx/common/css/default.project.css" type="text/css">

</head>

<!-- the onLoad function showErrors() displays errors (if any) -->
<body onLoad="showErrors(document.loginForm);">
	
<table border="0" cellspacing="0" cellpadding="0" width="100%" bgcolor="black">
	<tr>
		<td style="width: 100px"></td>
	  <td>
	  	<table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="white">
	  		<tr>
	  			<td>
	  				<table width="100%" border="0" bgcolor="black">
            	<tr>
            		<td width="33%" align="left"><img src="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/Logo.png" height="120" width="120"></td>		
               	<td align="center" nowrap><font size="5" color="#0f84ac" style="font-family: Telenor">SOC Back Office Support</font></td>   	
               	<td width="33%" align="right">&nbsp<td>
              </tr>
            </table>
	  			</td>	  			
	  		</tr>
	  		<tr>
	  			<td height="650" background="<?php echo $this->_tpl_vars['SYSTEM_COMMON_IMAGE_DIR']; ?>
/back8.gif">
	  				<div align="center">
              <table width="450" border="0" cellspacing="0" cellpadding="0" bgcolor="white">
              <form name="loginForm" onSubmit="return dologinFormSubmit();" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST">
                <tr>
                <td colspan="3" bgcolor="#000000"><img src="/nm_tx/common/image/qaqc/dark_blue.gif" width="1" height="1"></td>
                </tr>
                <tr>
                  <td rowspan="3"><img src="/nm_tx/common/image/login/mainLeft.png" width="47" height="212"></td>
                  <td>
              	<table width="100%"  border="0" cellspacing="0" cellpadding="5">
              		<tr>
              			<td>&nbsp;</td>
              		</tr>
              		<tr>
              			<td class="text" align="center">
              				<strong>Type:</strong>
              				<select name="type">
              					<option value="">Select One</option>
              					<option value="CSN">CSN</option>
              					<option value="Radio">Radio</option>
              					<option value="Transport">Transport</option>
              				</select>
              				<strong>(For BO Users Only)</strong>
              			</td>
              		</tr>
              	</table></td>
                  <td rowspan="3" align="right"><img src="/nm_tx/common/image/login/mainRight.png" width="41" height="212"></td>
                </tr>
                <tr>
                  <td><table width="100%"  border="0" cellspacing="0" cellpadding="5">
                    <tr>
                      <td width="29%" align="right" id="loginid" class="field_label"><?php echo ((is_array($_tmp=@constant('LOGIN_ID_FIELD'))) ? $this->_run_mod_handler('ucfirst', true, $_tmp) : ucfirst($_tmp)); ?>
</td>
                      <td width="71%" class="inputFields"><input class="textfield" size=30 type="text" name="loginid" value="<?php echo $this->_tpl_vars['loginid']; ?>
"></td>
                    </tr>
                    <tr>
                      <td align="right" class="field_label" id="password">Password</td>
                      <td class="inputFields"><input class="textfield" size=30 type="password" name="password" value="<?php echo $this->_tpl_vars['password']; ?>
"></td>
                    </tr>
                    <tr>
                      <td>&nbsp;</td>
                      <td class="inputFields"><input class="button" type="submit" value=" Login ">&nbsp;&nbsp;&nbsp;<input class="button" type="button" onClick="return doCancel();"  value=" Cancel "></td>
                    </tr>
                    <tr>
                    	<td>&nbsp</td>
                    	<td><input type="checkbox" name="remember_me" checked> Remember Me</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td valign="bottom"><img src="/nm_tx/common/image/login/mainMiddle.png" width="372" height="32"></td>
                </tr>
              <input type=hidden name="cmd" value="">
              
              </form>
              </table>            
            </div>
	  			</td>	  			
	  		</tr>
	  		<tr>
	  			<td>
	  				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => @constant('FOOTER'), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	  			</td>	  			
	  		</tr>
	    </table>	
	  </td>
	  <td style="width:100px"></td>
	</tr>
</table>
</body>
</html>