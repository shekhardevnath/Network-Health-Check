<?php /* Smarty version 2.6.6, created on 2011-03-16 12:28:27
         compiled from C:/wamp/www/nm_tx/hc_portal/hc_portal.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/hc_portal/hc_portal.html', 21, false),)), $this); ?>
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
    <tr align="center">
       <td class="contentHeaderText">Health Check Portal</td>       
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
    <form name="hcPortalForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onsubmit="return doFormSubmit();">
    	<?php if ($this->_tpl_vars['USER_TYPE'] == 'BO' && $this->_tpl_vars['cmd'] != 'edit' && $this->_tpl_vars['cmd'] != 'search'): ?>
    	<table border="0" cellpadding="0" cellspacing="5">
    		<tr>
    			<td valign="top">
    	      <table border="0" cellpadding="2" cellspacing="2">
    	      	<input type="hidden" value="1" id="file_browser_count" name="file_browser_count">
    	      	<input type="hidden" name="cmd" value="add">
    	      	<tr>
    	      		<td colspan="2">&nbsp</td>
    	      	</tr>
    	      	<tr>
    	      		<td><label class="label">HC Type:</label></td>
    	      		<td>
    	      			<select name="hc_type" id="hc_type">
    	        			<option value="">Select One</option>    	        			
    	        			<?php if (count($_from = (array)$this->_tpl_vars['hc_type'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                       <option value="<?php echo $this->_tpl_vars['item']->hc_type; ?>
"><?php echo $this->_tpl_vars['item']->hc_type; ?>
</<option>
                    <?php endforeach; unset($_from); endif; ?>                  	        			  			
  	          		 </select>
    	      		</td>    			
    	      	</tr>
    	      	<tr>
    	      		<td><label class="label">Responsible Group:</label></td>
    	      		<td>
    	      			<select name="res_group_id" id="res_group_id">
    	        			<option value="">Select One</option>
    	        			<?php if (count($_from = (array)$this->_tpl_vars['group'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                       <option value="<?php echo $this->_tpl_vars['item']->group_id; ?>
"><?php echo $this->_tpl_vars['item']->name; ?>
</<option>
                    <?php endforeach; unset($_from); endif; ?>              
  	          		 </select>
    	      		</td>    			
    	      	</tr>
    	      	<tr>
    	      		<td><label class="label" name="l_comment" id="l_comment">Comment:</label></td>
    	      		<td><textarea name="comment" id="comment" rows="5" cols="40"></textarea></td>
    	      	</tr>
    	      	<tr>
    	      		<td><label class="label">Attachment</label></td>
    	      		<td>
    	      			<input type="file" name="attachment1" size="25">    	      			
    	      			<a href="JavaScript:Void(0);" onclick="addFileBrowser();"><font size="4">+</font></a>
    	      			<div id="file_browser_container">    	      				
    	      			</div>
    	      		</td>
    	      	</tr>    	      	
    	      </table>
    	    </td>
    	    <td valign="tp">
    	    	<table border="0" cellpadding="2" cellspacing="2">
    	    		<tr>
    	    			<td colspan="3"><label class="label">Mail TO Recipients:</label></td>    	    			
    	    		</tr>
    	    		<tr>    			
    	      		<td>
    	      			<select name="to_recipient_list[]" id="to_recipient_list" size="11" multiple style="width:80">              
                    <?php if (count($_from = (array)$this->_tpl_vars['group'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                       <option value="<?php echo $this->_tpl_vars['item']->group_id; ?>
"><?php echo $this->_tpl_vars['item']->name; ?>
</<option>
                    <?php endforeach; unset($_from); endif; ?>              
                  </select>
    	      		</td>
    	      		<td valign="center" align="center">
    	      			<input type="button" value=">>" onclick="addSelectedOptions('to_recipient_list')"><br><br>
    	      			<input type="button" value="<<" onclick="removeSelectedOptions('selected_to_recipient_list')">
    	      		</td>
    	      		<td>
    	      			<select name="selected_to_recipient_list[]" id="selected_to_recipient_list" size="11" multiple style="width:80">
                  </select>
    	      		</td>
    	      	</tr>
    	    	</table>
    	    </td>
    	    <td valign="tp">
    	    	<table border="0" cellpadding="2" cellspacing="2">
    	    		<tr>
    	    			<td colspan="3"><label><label class="label">Mail CC Recipients:</label></td>
    	    		</tr>
    	    		<tr>    			
    	      		<td>
    	      			<select name="cc_recipient_list[]" id="cc_recipient_list" size="11" multiple style="width:80">              
                    <?php if (count($_from = (array)$this->_tpl_vars['group'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
                       <option value="<?php echo $this->_tpl_vars['item']->group_id; ?>
"><?php echo $this->_tpl_vars['item']->name; ?>
</<option>
                    <?php endforeach; unset($_from); endif; ?>              
                  </select>
    	      		</td>
    	      		<td valign="center" align="center">
    	      			<input type="button" value=">>" onclick="addSelectedOptions('cc_recipient_list')"><br><br>
    	      			<input type="button" value="<<" onclick="removeSelectedOptions('selected_cc_recipient_list')">
    	      		</td>
    	      		<td>
    	      			<select name="selected_cc_recipient_list[]" id="selected_cc_recipient_list" size="11" multiple style="width:80">
                  </select>
    	      		</td>
    	      	</tr>
    	    	</table>
    	    </td>
    	  </tr>
    	  <tr>    	  	
    	   	<td colspan="3"><input type="submit" name="submit" value="Submit"> &nbsp <input type="reset" name="reset" value=" Reset "></td>   	    
    	  </tr>
      </table>
      <?php endif; ?>
      <?php if ($this->_tpl_vars['cmd'] == 'edit'): ?>
      <input type="hidden" name="cmd" value="update">
      <input type="hidden" name="hc_id" value="<?php echo $this->_tpl_vars['hc_id']; ?>
">
      <table cellspacing="5" cellpadding="2" border="0">
      	<tr>
      		<td><label class="label">Feedback:</label></td>
      		<td><textarea name="feedback" id="feedback" value="" rows="5" cols="50"></textarea></td>
      	</tr>
      	<tr align="right">
      		<td colspan="2"><input type="submit" name="submit" value="Submit"> &nbsp <input type="reset" name="reset" value=" Reset "></td>
      	</tr>
      </table>
      <?php endif; ?>
    </form>    
    <table width="100%" border="0" bgcolor="black" cellspacing="0">
    	<tr><td></td></tr>
    </table>
    <form name="hcSearchPage" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
    <?php if ($this->_tpl_vars['cmd'] != 'edit'): ?>	    
    <table cellspacing="0" cellpadding="0" border="0">
    	<input type="hidden" name="cmd" value="search">
    	<tr>
    		<td><label class="label">HC ID:&nbsp</label></td>
    		<td><input type="text" name="hc_id" size="5" value="<?php echo $this->_tpl_vars['hc_id']; ?>
"></td>
    		<td><label class="label">&nbsp Start Date:&nbsp</label></td>
    		<td>
    			<input type="text" name="start_date" size="12" value="<?php echo $this->_tpl_vars['start_date']; ?>
">
    			<input type="button" value="Cal" onclick="displayCalendar(document.hcSearchPage.start_date,'yyyy-mm-dd',this)">  	  			
    		</td>    		
    		<td><label class="label">&nbsp End Date:&nbsp</label></td>
    		<td>
    			<input type="text" name="end_date" size="12" value="<?php echo $this->_tpl_vars['end_date']; ?>
">
    			<input type="button" value="Cal" onclick="displayCalendar(document.hcSearchPage.end_date,'yyyy-mm-dd',this)">  	  			
    		</td>
    		<td>&nbsp&nbsp&nbsp&nbsp<input type="submit" name="search_submit" value="Search"></td>
    	</tr>
    </table>
    <?php endif; ?>
    </form>
    <table width="100%" cellspacing="1" cellpadding="2" border="0">
    	<tr bgcolor="#7C93F4">
    		<td align="center"><b>HC ID</b></td>
    		<td align="center"><b>HC Type</b></td>
    		<td><b>Platform</b></td>
    		<td align="center"><b>Done By</b></td>
    		<td align="center"><b>HC Date</b></td>
    		<td><b>Comment</b></td>
    		<td><b>Attachment</b></td>    		
    		<td><b>Feedback</b></td>
    		<td align="center"><b>Feedback Date</b></td>
    		<td align="center"><b>Status</b></td>
    	</tr>
    	<?php if ($this->_tpl_vars['hc']): ?>
    	<?php if (count($_from = (array)$this->_tpl_vars['hc'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
    	<tr bgcolor="#BFCAF9">
    		<td align="center">
    			<?php if ($this->_tpl_vars['item']->status == 'Open'): ?>
    			<a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=edit&hc_id=<?php echo $this->_tpl_vars['item']->hc_id; ?>
"><?php echo $this->_tpl_vars['item']->hc_id; ?>
</a>
    			<?php else: ?>
    			<?php echo $this->_tpl_vars['item']->hc_id; ?>

    			<?php endif; ?>
    		</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->hc_type; ?>
</td>
    		<td><?php echo $this->_tpl_vars['item']->platform; ?>
</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->hc_by; ?>
</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->hc_date; ?>
</td>
    		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['item']->comment)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
    		<td><?php echo $this->_tpl_vars['item']->attachment; ?>
</td>    		
    		<td><?php echo $this->_tpl_vars['item']->feedback_by; ?>
: <?php echo ((is_array($_tmp=$this->_tpl_vars['item']->feedback)) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->feedback_date; ?>
</td>
    		<td align="center"><?php echo $this->_tpl_vars['item']->status; ?>
</td>
    	</tr>
    	<?php endforeach; unset($_from); endif; ?>
    	<?php endif; ?>
    </table>
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