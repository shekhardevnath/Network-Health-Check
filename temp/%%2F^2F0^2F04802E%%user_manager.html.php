<?php /* Smarty version 2.6.6, created on 2011-02-14 19:47:41
         compiled from C:/wamp/www/nm_tx/user_manager/user_manager.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/user_manager/user_manager.html', 11, false),array('function', 'html_options', 'C:/wamp/www/nm_tx/user_manager/user_manager.html', 94, false),)), $this); ?>
<?php if ($this->_tpl_vars['cmd'] != ""): ?>

<script language="JavaScript" src="/ext/ajax/cpaint.inc.js"></script>

<script language="javascript">
   var uid = '<?php echo $this->_tpl_vars['uid']; ?>
';
</script>

<script language="JavaScript">

var stateName = "<?php if ($this->_tpl_vars['state']):  echo ((is_array($_tmp=$this->_tpl_vars['state'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp));  endif; ?>";

<?php echo '

function flipType(v)
{
  if(v == "US" )
  {
	  document.userManagerForm.state1.style.display = "inline";
	  selectOption(document.userManagerForm.state1, stateName);
     document.userManagerForm.state2.style.display = "none";
	  document.userManagerForm.state2.value = "";
	}
	else
	{
     document.userManagerForm.state1.style.display = "none";
	  selectOption(document.userManagerForm.state1, "0");
     document.userManagerForm.state2.style.display = "inline";
	  document.userManagerForm.state2.value = stateName;
  }
}

function selectOption(ComboBox,KeyValue)
{
	var count = ComboBox.options.length
	for(i=0; i<count; i++)
	{
		if(ComboBox.options[i].value == KeyValue)
		{
			ComboBox.options[i].selected=true;
		}
	}
}

'; ?>


</script>

<body onLoad="flipType('<?php echo $this->_tpl_vars['country']; ?>
'); showAddressInfo();">
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
       <td class="contentHeaderText">User Manager <?php if ($this->_tpl_vars['uid']): ?> [ <a class="hotlink" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=edit">Add User</a> ] <?php endif; ?></td>
       <td align="right" valign="top"><a class="hotlink" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
">Back</a></td>
    </tr>
    <?php if ($this->_tpl_vars['message'] != ""): ?>
    <tr>
       <td colspan="2"><div class="message"><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</div></td>
    </tr>
    <?php endif; ?>
    </table>
    <br />

    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
    <form name="userManagerForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" onsubmit="return doFormSubmit();" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['uid']; ?>
">
    <input type="hidden" name="cmd" value="add">

    <table border="0">
    <tr>
       <td>
       <table border="0" >
           <tr>
               <td>
               <label class="label" id="name">Name</label><br class="br"/>
               <input type="text" name="name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" size="30" maxsize="100">
               </td>
               <td>
               <label class="label" id="group_name">Group Name</label><br class="br"/>
               <select name="group_id">
               <option value="">Select a Group Name</option>
               <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_name_list'][0],'output' => $this->_tpl_vars['group_name_list'][1],'selected' => $this->_tpl_vars['group_id']), $this);?>

               </select>
               </td>
               <td>
               <label class="label" id="sub_group_name">Sub Group Name</label><br class="br"/>
               <select name="sub_group_id">
               <option value="0">Select One</option>
               <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['sub_group_name_list'][0],'output' => $this->_tpl_vars['sub_group_name_list'][1],'selected' => $this->_tpl_vars['sub_group_id']), $this);?>

               </select>
               </td>
           </tr>
       </table>
       <br />
       <table border="0" >
           <tr>
               <td>
               <label class="label" id="username">Username</label><br class="br"/>
               <input type="text" name="username" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['username'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" onBlur="checkDuplicateUser()" size="30" maxsize="50">
               </td>
               <td>
               <label class="label" id="user_type">User Type</label><br class="br"/>
               <select name="user_type">
               <option value="">Select a User Type</option>
               <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_type_list'],'output' => $this->_tpl_vars['user_type_list'],'selected' => $this->_tpl_vars['user_type']), $this);?>

               </select>
               </td>
           </tr>
       </table>
       <br />
       <table border="0" >
           <tr>
               <td>
               <label class="label" id="password">Password</label><br class="br"/>
               <input type="password" name="password" size="30" maxsize="128">
               </td>
               <td>
               <label class="label" id="conf_pass">Confirm Password</label><br class="br"/>
               <input type="password" name="conf_pass" size="30" maxsize="128">
               </td>
           </tr>
       </table>
       <br />
       <table border="0" >
           <tr>
               <td>
               <label class="label" id="email">Email</label><br class="br"/>
               <input type="text" class="textfield" name="email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
"  onBlur="checkDuplicateEmail()" size="30" maxsize="128">
               </td>               
           </tr>
       </table>
      </br>
       <table border="0">
         <tr>
         <td colspan=2><br class="br" />
         <input type="submit"  class="button" name="submit" <?php if ($this->_tpl_vars['uid'] != ''): ?> value=" Update " <?php else: ?> value=" Save " <?php endif; ?>>
         <input type="reset"  class="button" name="submit" value=" Reset ">
         </td>
         </tr>
       </table>

       </td>

    </tr>
    </table>


    </form>
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

<?php else: ?>

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
       <td class="contentHeaderText">Available User(s)</td>
       <td align="right"><a class="hotlink" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=edit">Add a new User</a></td>
    </tr>
    <?php if ($this->_tpl_vars['message'] != ""): ?>
    <tr>
       <td colspan="2"><div class="message"><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</div></td>
    </tr>
    <?php endif; ?>
    </table>
    <br />

    <iframe src="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=list&status=Active" height="300px" width="100%" frameborder="0"></iframe>

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

<?php endif; ?>
</body>