<?php /* Smarty version 2.6.6, created on 2011-07-11 10:42:43
         compiled from C:/wamp/www/nm_tx/subleased/subleased.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/subleased/subleased.html', 45, false),array('modifier', 'date_format', 'C:/wamp/www/nm_tx/subleased/subleased.html', 172, false),)), $this); ?>
<script language="javascript" type="text/javascript" src="datetimepicker.js"></script>
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
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
    <table border="0" width="100%">
    <tr align="center">
      <?php if ($this->_tpl_vars['USER_TYPE'] == 'BO' || $this->_tpl_vars['USER_TYPE'] == 'NSS'): ?>
      <td bgcolor="#558ED5" style="height:25px"><font size="2" color="white"><b>Subleased Client: Availability, Tracking & Access Support</b></font></td>
      <?php else: ?>
      <td bgcolor="#558ED5" style="height:25px"><font size="2" color="white"><b>Subleased Client: Access Support</b></font></td>
      <?php endif; ?>
    </tr>
    <tr>
    	<td>
    		<br>    		 
    		<?php if ($this->_tpl_vars['USER_TYPE'] == 'BO' || $this->_tpl_vars['USER_TYPE'] == 'NSS'): ?>    		
    		  <form name="subleasedForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onSubmit="return submitFormBO();">
    		  	<input type="hidden" value="<?php echo $this->_tpl_vars['operation']; ?>
" name="cmd">
    		  	<input type="hidden" value="<?php echo $this->_tpl_vars['fa_id']; ?>
" name="fa_id">
    		    <table cellpadding="5" cellspacing="1" border="0" bgcolor="#4D0099">
    		    	<tr bgcolor="white">
    		    		<td><label class="label">Type:</label></td>
    		    		<td><label class="label">Client Name:</label></td>    		  		
    		    		<td><label class="label">Subcenter:</label></td>
    		    		<td><label class="label">Fault End:</label></td>  
    		    		<td><label class="label">PCM/Site Name:</label></td>  		  		
    		    		<td><label class="label">Start Time:</label></td>
    		    		<td><label class="label">End Time:</label></td>    		  		
    		      </tr>
    		      <tr bgcolor="white">
    		    		<td>
    		    			<select name="type" id="type">
    		    				<option value="">Select One</option>
    		    				<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['type_list'],'output' => $this->_tpl_vars['type_list'],'selected' => $this->_tpl_vars['type']), $this);?>

    		    			</select>
    		    		</td>
    		    		<td>
    		    			<select name="client_name" id="client_name">
    		    				<option value="">Select One</option>
    		    				<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['client_list'],'output' => $this->_tpl_vars['client_list'],'selected' => $this->_tpl_vars['client_name']), $this);?>
    						
    		    			</select>
    		    		</td>    		  		
    		    		<td>
    		    			<select name="subcenter" id="subcenter">
    		    				<option value="">Select One</option>
    		    				<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['subcenter_list']->id,'output' => $this->_tpl_vars['subcenter_list']->name,'selected' => $this->_tpl_vars['subcenter']), $this);?>
    						    		  				
    		    			</select>
    		    		</td>
    		    		<td>
    		    			<select name="fault_end" id="fault_end">
    		    				<option value="">Select One</option>
    		    				<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_end_list'],'output' => $this->_tpl_vars['fault_end_list'],'selected' => $this->_tpl_vars['fault_end']), $this);?>
    						
    		    			</select>
    		    		</td>
    		    		<td><input type="text" value="<?php echo $this->_tpl_vars['pcm_name']; ?>
" name="pcm_name"></td>    		  		
    		    		<td style="width:155px">
    		    			<input type="text" value="<?php echo $this->_tpl_vars['ft_st']; ?>
" name="ft_st" size="19">
    		    			<div style="position:absolute">
    		    				<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('ft_st','yyyymmdd',true,24)">
    		    			</div>
    		    		</td>
    		    		<td style="width:155px">
    		    			<input type="text" value="<?php echo $this->_tpl_vars['rt_et']; ?>
" name="rt_et" size="19">
    		    			<div style="position:absolute">
    		    				<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('rt_et','yyyymmdd',true,24)">
    		    			</div>
    		    		</td>    		  		
    		      </tr>
    		      <tr bgcolor="white">
    		      	<td><label class="label">Comment:</label></td>
    		      	<td><textarea name="bo_comment" rows="3" cols="27"><?php echo $this->_tpl_vars['bo_comment']; ?>
</textarea></td>
    		      	<td colspan="6"><input type="submit" class="submit" value="<?php if ($this->_tpl_vars['operation'] == 'update'): ?>  Update  <?php else: ?>  Submit  <?php endif; ?>"></td>
    		      </tr>
    		    </table>
    	    </form>
    	  <?php elseif ($this->_tpl_vars['operation'] == 'update'): ?>
    	    <form name="subleasedFormOther" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">  
    	    	<input type="hidden" value="<?php echo $this->_tpl_vars['operation']; ?>
" name="cmd">
    		  	<input type="hidden" value="<?php echo $this->_tpl_vars['fa_id']; ?>
" name="fa_id">
    		    <table cellpadding="5" cellspacing="1" border="0" bgcolor="#4D0099">
    		    	<tr bgcolor="white">    		    		
    		    		<td><label class="label">Fault End:</label></td>      		    		
    		    		<td><label class="label">Start Time:</label></td>
    		    		<td><label class="label">End Time:</label></td>
    		    		<td><label class="label">Comment:</label></td>    		  		
    		    		<td><label class="label">Action:</label></td>    		  		
    		      </tr>
    		      <tr bgcolor="white">    		    		
    		    		<td>
    		    			<select name="fault_end" id="fault_end">
    		    				<option value="">Select One</option>
    		    				<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_end_list'],'output' => $this->_tpl_vars['fault_end_list'],'selected' => $this->_tpl_vars['fault_end']), $this);?>
    						
    		    			</select>
    		    		</td>    		    		
    		    		<td style="width:155px">
    		    			<input type="text" value="<?php echo $this->_tpl_vars['ft_st']; ?>
" name="ft_st" size="19">
    		    			<div style="position:absolute">
    		    				<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('ft_st','yyyymmdd',true,24)">
    		    			</div>
    		    		</td>
    		    		<td style="width:155px">
    		    			<input type="text" value="<?php echo $this->_tpl_vars['rt_et']; ?>
" name="rt_et" size="19">
    		    			<div style="position:absolute">
    		    				<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('rt_et','yyyymmdd',true,24)">
    		    			</div>
    		    		</td>
    		    		<td><textarea name="rom_comment" rows="3" cols="27"><?php echo $this->_tpl_vars['rom_comment']; ?>
</textarea></td> 
    		    		<td><input type="submit" class="submit" value="  Update  "></td>   		  		
    		      </tr>
    		    </table>
    	    </form>
    	  <?php endif; ?>
    	</td>
    </tr>    
    </table>
    <table width="100%" cellspacing="0" cellpadding="1" border="0" bgcolor="black">
    	<tr><td></td></tr>
    </table>
    <br>    
    <!-- Start Search   -->    
    <form name="searchForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
    	<input type="hidden" value="search" name="cmd">
    	<font size="3"><b>Search Information:</b></font>
    	<table cellpadding="5" cellspacing="1" border="0" bgcolor="#4D0099"">
    		<?php if ($this->_tpl_vars['USER_TYPE'] == 'BO' || $this->_tpl_vars['USER_TYPE'] == 'NSS'): ?>
    		<tr bgcolor="white">
    			<td><label class="label">Type:</label></td>
    		  <td><label class="label">Client Name:</label></td>    		  		
    		  <td><label class="label">Subcenter:</label></td>
    		  <td><label class="label">Fault End:</label></td>      		  
    		  <td><label class="label">From Start Time:</label></td>
    		  <td><label class="label">To Start Time:</label></td>    		  		
    		  <td><label class="label">Action</label></td>    		  		
    		</tr>
    		<tr bgcolor="white">
    			<td>
    				<select name="type" id="type">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['type_list'],'output' => $this->_tpl_vars['type_list']), $this);?>

    				</select>
    			</td>
    			<td>
    				<select name="client_name" id="client_name">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['client_list'],'output' => $this->_tpl_vars['client_list']), $this);?>
    						
    				</select>
    			</td>    		  		
    			<td>
    				<select name="subcenter" id="subcenter">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['subcenter_list']->id,'output' => $this->_tpl_vars['subcenter_list']->name), $this);?>
    						    		  				
    				</select>
    			</td>
    			<td>
    				<select name="fault_end" id="fault_end">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_end_list'],'output' => $this->_tpl_vars['fault_end_list']), $this);?>
    						
    				</select>
    			</td>    			
    			<td style="width:155px">
    				<input type="text" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
" name="from" size="19">
    				<div style="position:absolute">
    					<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('from','yyyymmdd',true,24)">
    				</div>
    			</td>
    			<td style="width:155px">
    				<input type="text" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
" name="to" size="19">
    				<div style="position:absolute">
    					<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('to','yyyymmdd',true,24)">
    				</div>
    			</td>
    			<td><input type="submit" class="submit" value="  Search  "></td>    		  		
    		</tr>
    		<?php else: ?>
    		<tr bgcolor="white">    			
    		  <td><label class="label">Client Name:</label></td>    		  		
    		  <td><label class="label">Subcenter:</label></td>
    		  <td><label class="label">Fault End:</label></td>      		  
    		  <td><label class="label">From Start Time:</label></td>
    		  <td><label class="label">To Start Time:</label></td>    		  		
    		  <td><label class="label">Action</label></td>    		  		
    		</tr>
    		<tr bgcolor="white">    			
    			<td>
    				<select name="client_name" id="client_name">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['client_list'],'output' => $this->_tpl_vars['client_list']), $this);?>
    						
    				</select>
    			</td>    		  		
    			<td>
    				<select name="subcenter" id="subcenter">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['subcenter_list']->id,'output' => $this->_tpl_vars['subcenter_list']->name), $this);?>
    						    		  				
    				</select>
    			</td>
    			<td>
    				<select name="fault_end" id="fault_end">
    					<option value="">Select One</option>
    					<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['fault_end_list'],'output' => $this->_tpl_vars['fault_end_list']), $this);?>
    						
    				</select>
    			</td>    			
    			<td style="width:155px">
    				<input type="text" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
" name="from" size="19">
    				<div style="position:absolute">
    					<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('from','yyyymmdd',true,24)">
    				</div>
    			</td>
    			<td style="width:155px">
    				<input type="text" value="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y-%m-%d %H:%M:%S") : smarty_modifier_date_format($_tmp, "%Y-%m-%d %H:%M:%S")); ?>
" name="to" size="19">
    				<div style="position:absolute">
    					<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="NewCal('to','yyyymmdd',true,24)">
    				</div>
    			</td>
    			<td><input type="submit" class="submit" value="  Search  "></td>    		  		
    		</tr>
    		<?php endif; ?>
    	</table>
    </form>
    <!-- End Search   -->
    
    <table width="100%" cellspacing="0" cellpadding="1" border="0" bgcolor="black">
    	<tr><td></td></tr>
    </table>
    <br>
    <table cellpadding="5" cellspacing="1" border="0" width="100%">
      <tr bgcolor="#558ED5">
      	<td><font color="white"><b>Type</b></font></label></td>
      	<td><font color="white"><b>Client Name</b></font></label></td>    		  		
      	<td><font color="white"><b>Subcenter</b></font></label></td>
      	<td><font color="white"><b>Fault End</b></font></label></td>  
      	<td><font color="white"><b>PCM/Site Name</b></font></label></td>  		  		
      	<td><font color="white"><b>Start Time</b></font></label></td>
      	<td><font color="white"><b>End Time</b></font></label></td>    		  		
      	<td><font color="white"><b>BO Comment</b></font></label></td>    		  			
      	<td><font color="white"><b>ROM Comment</b></font></label></td>
      	<td><font color="white"><b>Action</b></font></label></td>	
      </tr>
      <?php if (count($_from = (array)$this->_tpl_vars['entries'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
      <tr bgcolor="#D0D8E8">
      	<td><?php echo $this->_tpl_vars['row']->type; ?>
</td>
      	<td><?php echo $this->_tpl_vars['row']->client_name; ?>
</td>    		  		
      	<td><?php echo $this->_tpl_vars['row']->name; ?>
</td>
      	<td><?php echo $this->_tpl_vars['row']->fault_end; ?>
</td>  
      	<td><?php echo $this->_tpl_vars['row']->pcm_name; ?>
</td>  		  		
      	<td><?php echo $this->_tpl_vars['row']->ft_st; ?>
</td>
      	<td><?php echo $this->_tpl_vars['row']->rt_et; ?>
</td>
      	<td><?php echo $this->_tpl_vars['row']->bo_comment; ?>
</td>
      	<td><?php echo $this->_tpl_vars['row']->rom_comment; ?>
</td>
      	<td><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=edit&fa_id=<?php echo $this->_tpl_vars['row']->fa_id; ?>
">Edit</a></td>
      </tr>
      <?php endforeach; unset($_from); endif; ?>
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