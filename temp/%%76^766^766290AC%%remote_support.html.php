<?php /* Smarty version 2.6.6, created on 2010-01-11 16:19:19
         compiled from C:/wamp/www/nm_tx/remote_support/remote_support.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/remote_support/remote_support.html', 80, false),)), $this); ?>
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
    
    <?php echo '
      <style type="text/css">
         .autocomplete 
         {
            position:absolute;
            /*width:145px;*/
            background-color:white;
            border:1px solid #888;
            margin:0px;
            padding:0px;
         }
         .autocomplete ul 
         {
            list-style-type:none;
            margin:0px;
            padding:0px;
         }
         .autocomplete ul li.selected { background-color: #D6E1F2;}
         .autocomplete ul li 
         {
            list-style-type:none;
            display:block;
            margin:0;
            padding:2px;
            /*height:32px;*/
            cursor:pointer;
         }
      </style>
      <script language="JavaScript" src="/nm_tx/ext/scriptaculous/lib/prototype.js"></script>	  
      <script language="JavaScript" src="/nm_tx/ext/scriptaculous/src/scriptaculous.js"></script>
      
      <script type="text/javascript">
         function callAutoComplete()
         {
            new Ajax.Autocompleter("ne_name", "ne_choices", "/nm_tx/remote_support/remote_support.php?cmd=ne_list");         
         }         
      </script>
      '; ?>

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
    	
    	<!--Content Area Starts Here-->
    	<form name="remoteSupportForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" onsubmit="return doFormSubmit('Submit Entry?');" enctype="multipart/form-data">
    	<input type="hidden" name="cmd" value="add">	
    	<table  class="contentHeader" border="0" width="100%">
  	    <tr>
          <td class="contentHeaderText">Remote Support Entry Page</td>         
        </tr>
  	  </table>
  	  <br><br>  	  
  	  <table border="0" cellspacing="5">
  	  	<tr valign="top">
  	  		<td><label class="label">Site Name</label></td>
  	  		<td><label class="label">Support Details</label></td>
  	  	</tr>  	  	
  	  	<tr valign="top">
  	  	  <td>
  	  	  	<input type="text" value="" name="ne_name" id="ne_name" size="20">
  	  	  	<div id="ne_choices" class="autocomplete"></div>
  	  	  </td>
  	  	  <td>
  	  	  	<select name="support_details[]" id="support_details" multiple size="15" onchange="changeStatus();" style="width:175px">    					
  	  			  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['support_list'],'output' => $this->_tpl_vars['support_list']), $this);?>

  	  			  <option value="others">OTHERS</option>
  	  		  </select>&nbsp
  	  		  <div name="support_details_div" id="support_details_div" style="display:none">
  	  		  	<input type="text" name="support_details_others" id="support_details_others" style="width:175px">
  	  		  </div>
  	  	  </td>  	  	  
  	  	</tr>
  	  	<tr>
  	  		<td colspan="2"><input type="submit" class="submit" name="submit" value="   Add   "></td>
  	  	</tr>
  	  </table>
  	  </form>
  	  
  	  <!--Display support contents Starts here-->
  	  <?php if ($this->_tpl_vars['list']): ?>
  	  <table  class="contentHeader" border="0" width="100%">
  	    <tr>
          <td class="contentHeaderText"><font color="black">You have total <<?php echo $this->_tpl_vars['total']; ?>
> entries and showing latest 20 entries for better display.</font></td>
        </tr>
  	  </table>
  	  <br>
  	  <table border="0" cellspacing="2" cellpadding="5">
  	  	<tr class="tbl_header">
  	  		<td>Site Name</td>
  	  		<td>Support Details</td>
  	  		<td>Support Date</td>
  	  	</tr>
  	  	<?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
  	  	<tr class="reportEvenRow">
  	  		<td><?php echo $this->_tpl_vars['item']->ne_name; ?>
</td>
  	  		<td><?php echo $this->_tpl_vars['item']->support_details; ?>
</td>
  	  		<td><?php echo $this->_tpl_vars['item']->support_date; ?>
</td>
  	  	</tr>
  	  	<?php endforeach; unset($_from); endif; ?>  	  	
  	  </table>
  	  <?php else: ?>
  	  <table  class="contentHeader" border="0" width="100%">
  	   <tr>
          <td class="contentHeaderText" align="center"><font color="black">You have not submitted any entry yet.</font></td>
        </tr>
  	  </table>
  	  <br>
  	  <?php endif; ?>  	  
  	  <!--Display support contents Ends here-->
  	  
  	  
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
<!--function used for autocomplete-->
<script>
	callAutoComplete();                  
</script>
</html>