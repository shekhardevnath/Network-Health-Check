<?php /* Smarty version 2.6.6, created on 2010-11-11 17:28:44
         compiled from C:/wamp/www/nm_tx/meeting_training_info/meeting_training_info.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/meeting_training_info/meeting_training_info.html', 22, false),array('function', 'html_options', 'C:/wamp/www/nm_tx/meeting_training_info/meeting_training_info.html', 38, false),)), $this); ?>
<link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
<script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>

<body>
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
       <td class="contentHeaderText">Meeting/Training Information Module</td>       
    </tr>
    <?php if ($this->_tpl_vars['message'] != ""): ?>
    <tr bgcolor="white">
       <td><div align="center"><b><font color="green"><?php echo ((is_array($_tmp=$this->_tpl_vars['message'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</font></b></div></td>
    </tr>
    <?php endif; ?>
    </table>
    <br/>
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
    <form name="meetingTrainingInfoForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onsubmit="return doFormSubmit();">
    	<table border="0" cellpadding="2">
    		<input type="hidden" name="cmd" value="add">
    		<tr>
    			<td><label class="label">Select (Meeting/Training)</label></td>
    			<td colspan="2">
    				<select name="module" id="module" onchange="changeTitle()">
    	  			<option value="">Select One</option>
  	    			<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['module'],'output' => $this->_tpl_vars['module']), $this);?>
  	  			  
  	    		 </select>
    			</td>    			
    		</tr>
    		<tr>
    			<td><label class="label" name="t_title" id="t_title">Title</label></td>
    			<td colspan="2"><input type="text" name="title" id="title" size="35"></td>
    		</tr>
    		<tr>
    			<td><label class="label" name="l_comment" id="l_comment">Comment</label></td>
    			<td colspan="2"><input type="text" name="comment" id="comment" size="35"></td>
    		</tr>
    		<tr>
    			<td><label class="label" name="d_title" id="d_title">Select Date</label></td>
    			<td colspan="2">
    				<input type="text" name="date" id="date" value="<?php echo $this->_tpl_vars['date']; ?>
" readonly size="12">
  	        <input type="button" value="Cal" onclick="displayCalendar(document.meetingTrainingInfoForm.date,'yyyy-mm-dd',this)">  	      	  	  			
    			</td>    			
    		</tr>
    		<tr><td colspan="3"><br></td></tr>
    		<tr>
    			<td colspan="2"><label class="label"><font size="2">BO & NSS Members</font><label></td>
    			<td colspan="2"><label class="label"><font size="2">Participants</font><label></td>
    		</tr>    		
    		<tr>    			
    			<td>
    				<select name="user_list[]" id="user_list" size="18" multiple style="width:170">              
              <?php if (count($_from = (array)$this->_tpl_vars['users'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                 <option value="<?php echo $this->_tpl_vars['item']->uid; ?>
"><?php echo $this->_tpl_vars['item']->name; ?>
</<option>
              <?php endforeach; unset($_from); endif; ?>              
            </select>
    			</td>
    			<td valign="center" align="center">
    				<input type="button" value=">>" onclick="addSelectedOptions()"><br><br>
    				<input type="button" value="<<" onclick="removeSelectedOptions()">
    			</td>
    			<td>
    				<select name="selected_user_list[]" id="selected_user_list" size="18" multiple style="width:170">
            </select>
    			</td>
    		</tr>
    		<tr><td colspan="3"><br></td></tr>
    		<tr>
    			<td colspan="3"><input type="submit" name="submit" value="Submit"> &nbsp <input type="reset" name="reset" value=" Reset "></td>
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
</body>