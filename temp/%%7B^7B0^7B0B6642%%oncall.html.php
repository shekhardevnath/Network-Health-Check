<?php /* Smarty version 2.6.6, created on 2015-06-03 12:48:53
         compiled from C:/wamp/www//nm_tx/oncall/oncall.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www//nm_tx/oncall/oncall.html', 62, false),array('modifier', 'substr', 'C:/wamp/www//nm_tx/oncall/oncall.html', 101, false),)), $this); ?>
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
       <td class="contentHeaderText" align="center">OnCall Management System</td>       
    </tr>
    </table>
    <br/>
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
    <br>
    <table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="white">
    	<tr height="23">
    		<td width="100" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'view'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    			  <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=view" style="text-decoration:none"><font color="white"><b>View OnCall</b></font></a>
    		</td>
    		<td width="100" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'add'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    			<a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=add"  style="text-decoration:none"><font color="white"><b>Add OnCall</b></font></a>
    	  </td>
    		<td width="100" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'edit'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    			<a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=edit" style="text-decoration:none"><font color="white"><b>Edit OnCall</b></font></a>
    	  </td>
    	  <td width="100" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'team_leader'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    			<a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=team_leader" style="text-decoration:none"><font color="white"><b>Team Leader</b></font></a>
    	  </td>
    		<td bgcolor="white" align="center"><font color="#AD0000" size="2"><b><?php echo $this->_tpl_vars['msg']; ?>
</b></font></td>
    	</tr>
    	<tr bgcolor="black"><td colspan="5"></td></tr>
    </table>    
    <?php if ($this->_tpl_vars['page'] == 'view'): ?>
      <form name="viewOnCallForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
        <table border="0" cellspacing="1" cellpadding="1" style="margin-top:15px;">
        	<tr>
        		<td valign="top">
        			<table border="0" cellpadding="0" cellspacing="0" style="margin-left:10px; margin-right:10px;">
        				<tr>
        					<td><label class="label">OnCall Date:</label></td>
        					<td>&nbsp;&nbsp;&nbsp;<input type="text" size="12" value="<?php echo $this->_tpl_vars['oncall_date']; ?>
" name="oncall_date" onChange="document.viewOnCallForm.submit();"></td>
        					<td>&nbsp;<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" valign="bottom" onClick="displayCalendar(document.viewOnCallForm.oncall_date,'yyyy-mm-dd',this);"></td>
        				</tr>
        				<tr>
        					<td colspan="3">&nbsp;</td>
        				</tr>
        				<tr>
        					<td>
        						<label class="label">Select Group:</label><br>
        						<select name="group_id" id="group_id" size="20" style="width:90px" onClick="document.viewOnCallForm.sub_group_id.value=''; document.viewOnCallForm.submit();">
        							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_list']->id,'output' => $this->_tpl_vars['group_list']->name,'selected' => $this->_tpl_vars['group']), $this);?>

        						</select>
        					</td>
        					<td colspan="2" valign="top">
        						&nbsp;&nbsp;&nbsp;<label class="label">Select Section:</label><br>
        						&nbsp;&nbsp;
        						<select name="sub_group_id" id="sub_group_id" size="20" style="width:120px" onChange="document.viewOnCallForm.submit();">
        							<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['section_list']->id,'output' => $this->_tpl_vars['section_list']->name,'selected' => $this->_tpl_vars['section']), $this);?>

        						</select>
        					</td>
        				</tr>
        			</table>
        	  </td>
        	  <td bgcolor="#3D3D3D">
        	  </td>
        	  <td valign="top">
        	  	<?php if ($this->_tpl_vars['oncall_list'] != ""): ?>
        	  	  <table border="0" cellpadding="0" cellspacing="1" style="margin-left:10px;" bgcolor="black">        	  		
        			  	<tr bgcolor="white">        					
        			  		<td align="center" style="height:25px"><font size="2"><b>OnCall information of date <?php echo $this->_tpl_vars['oncall_date']; ?>
</b></font></td>
        			  	</tr>
        			  	<tr>
        			  		<td>
        			  			<table cellspacing="1" cellpadding="5" border="0" bgcolor="white" style="width:750px;">
        			  				<tr bgcolor="#4F81BD">
        			  					<td align="center"><font color="white"><b>Group</b></font></td>
        			  					<td><font color="white"><b>Section</b></font></td>
        			  					<td><font color="white"><b>Name</b></font></td>
        			  					<td align="center"><font color="white"><b>Mobile</b></font></td>
        			  					<td align="center"><font color="white"><b>Priority</b></font></td>
        			  					<td align="center"><font color="white"><b>Date From</b></font></td>
        			  					<td align="center"><font color="white"><b>Date To</b></font></td>
        			  					<td><font color="white"><b>Comment</b></font></td>
        			  				</tr>
        			  				<?php if (count($_from = (array)$this->_tpl_vars['oncall_list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        			  				<tr bgcolor="<?php echo $this->_tpl_vars['row']->color; ?>
">
        			  					<td align="center"><?php echo $this->_tpl_vars['row']->group_name; ?>
</td>
        			  					<td><?php echo $this->_tpl_vars['row']->sub_group_name; ?>
</td>
        			  					<td><?php echo $this->_tpl_vars['row']->name; ?>
</td>
        			  					<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['row']->mobile)) ? $this->_run_mod_handler('substr', true, $_tmp, 8, 6) : substr($_tmp, 8, 6)); ?>
</td>
        			  					<td align="center"><?php echo $this->_tpl_vars['row']->priority; ?>
</td>
        			  					<td align="center"><?php echo $this->_tpl_vars['row']->date_from; ?>
</td>
        			  					<td align="center"><?php echo $this->_tpl_vars['row']->date_to; ?>
</td>
        			  					<td><?php echo $this->_tpl_vars['row']->comment; ?>
</td>
        			  				</tr>
        			  				<?php endforeach; unset($_from); endif; ?>
        			  			</table>
        			  		</td>
        			  	</tr>        				
        			  </table>
        			<?php else: ?>        			         					
        			 	<div style="margin-top:150px; margin-left:150px;"><font size="2"><b>OnCall information of date <?php echo $this->_tpl_vars['oncall_date']; ?>
 is unavailable.<b></font></div>       			 
        		  <?php endif; ?>
        	  </td>      	
        	</tr>
        </table>
      </form>
    <?php elseif ($this->_tpl_vars['page'] == 'add'): ?>
      <form name="addOnCallForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data" onsubmit="return doSubmit();">
      	<input type="hidden" value="1" id="total_row" name="total_row">
      	<input type="hidden" value="add" name="page">
      	<input type="hidden" value="save" name="cmd">
      	<table border="0" cellspacing="0" cellspacing="0">
      		<tr>
      			<td>
      	      <table cellpadding="1" cellspacing="4" border="0" width="100%">
      	      	<tr>
      	      	  <td valign="middle"><label class="label">Date From: </label></td>	
      	      	  <td valign="middle"><input type="text" size="12" value="<?php echo $this->_tpl_vars['date_from']; ?>
" name="date_form"></td>      		   
      	      	  <td valign="middle">
      	      	  	<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="displayCalendar(document.addOnCallForm.date_form,'yyyy-mm-dd',this);">
      	      	  </td>
      	      	  <td valign="middle"><label class="label">Date To: </label></td>
      	      	  <td valign="middle"><input type="text" size="12" value="<?php echo $this->_tpl_vars['date_to']; ?>
" name="date_to"></td>
      	      	  <td valign="middle">
      	      	  	<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" onClick="displayCalendar(document.addOnCallForm.date_to,'yyyy-mm-dd',this);">
      	      	  </td>
      	      	  <td valign="middle">
      	      	  	<label class="label">Section: </label>
      	      	  	<select name="section" id="section">
      	      	  		<option value="">Select Section</option>
							        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['section']->id,'output' => $this->_tpl_vars['section']->name), $this);?>

						        </select>
      	      	  </td>
      	      	</tr>
      	      </table>
      	    </td>
      	  </tr>
      	  <tr>
      	    <td>
      	      <br>
      	      <table cellspacing="1" cellpadding="4" border="0" bgcolor="blue" width="100%">
      	      	<tbody id='oncall_add_table'> 
      	      	<tr bgcolor="white">
      	      		<td><label class="label">Name</label></td>
      	      		<td><label class="label">Mobile#(6 Digit)</label></td>
      	      		<td><label class="label">Priority</label></td>
      	      		<td><label class="label">Comment</label></td>
      	      		<td align="center"><label class="label">Action</label></td>      			
      	      	</tr>
      	      	<tr bgcolor="white">
      	      		<td><input type="text" name="name_1"></td>
      	      		<td><input type="text" name="mobile_1" size="15" maxlength="6"></td>
      	      		<td>
      	      			<select name="priority_1" id="priority_1" style="width:90px">
							        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['priority'],'output' => $this->_tpl_vars['priority']), $this);?>

						        </select>
      	      		</td>
      	      	  <td><textarea name="comment_1" rows="2" cols="20"></textarea></td>      			
      	      		<td align="center"><img src="/nm_tx/common/image/add.png" width="22" height="22" onClick="addRow();"></td>      			
      	      	</tr>
      	        </tbody>
      	      </table>
      	    </td>
      	  </tr>
      	  <tr>
      	    <td>
      	      <br>
      	      <input type="submit" class="submit" value="Add OnCall">
      	    </td>
      	  </tr>
      	</table>
      </form>
    <?php elseif ($this->_tpl_vars['page'] == 'edit'): ?>       
      <table border="0" cellpadding="1" cellspacing="1" style="margin-left:50px; margin-top:15px;">
      	<tr>
      		<td valign="top">      		
      			<form name="searchOnCallForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
      			  <input type="hidden" value="edit" name="page">
      	      <input type="hidden" value="search" name="cmd">
      			  <table cellpadding="0" cellspacing="0" valign="top" style="margin-right:10px">
      	      	<tr>
      	      	  <td><label class="label">OnCall Date: </label></td>	
      	      	  <td>&nbsp;&nbsp;<input type="text" size="12" value="<?php echo $this->_tpl_vars['oncall_date']; ?>
" name="oncall_date"></td>
      	      	  <td align="right">
      	      	  	&nbsp;&nbsp;<img src="/nm_tx/common/image/icons/calendar.gif" width="20" height="20" valign="bottom" onClick="displayCalendar(document.searchOnCallForm.oncall_date,'yyyy-mm-dd',this);">
      	      	  </td>
      	      	</tr>
      	      	<tr>      	      	  
      	      	  <td valign="middle"><label class="label">Section: </label></td>
      	      	  <td colspan="2" align="right">
      	      	  	<br>	
      	      	  	<select name="section" id="section">
      	      	  		<option value="">Select Section</option>
							        <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['section_list']->id,'output' => $this->_tpl_vars['section_list']->name,'selected' => $this->_tpl_vars['section']), $this);?>

						        </select>
      	      	  </td>      	      	  
      	      	</tr>
      	      	<tr align="right">
      	      		<td colspan="3"><br><input type="submit" class="submit" value=" Search "></td>
      	      	</tr>
      	      </table>
      	    </form>
      		</td>
      		<td bgcolor="#3D3D3D">      			
      		</td>
      		<td>
      			<form name="editOnCallForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
      			<input type="hidden" value="edit"           name="page">
      			<input type="hidden" value="update"         name="cmd">
      			<input type="hidden" value=""               name="oncall_id">	
      			<input type="hidden" value="<?php echo $this->_tpl_vars['oncall_date']; ?>
" name="oncall_date">
      			<input type="hidden" value="<?php echo $this->_tpl_vars['section']; ?>
"     name="section">
      			<table style="margin-left:10px;" cellspacing="1" cellpadding="1">
      				<tr>
      					<td align="center">
      						<?php if ($this->_tpl_vars['oncall'] != ''): ?>
      						  <table cellpadding="4" cellspacing="1" bgcolor="blue">
      						  	<tr bgcolor="white">
      						  		<td><label class="label">Name</label></td>
      						  		<td><label class="label">Mobile#(6 Digit)</label></td>
      						  		<td><label class="label">Priority</label></td>
      						  		<td><label class="label">Date From</label></td>
      						  		<td><label class="label">Date To</label></td>
      						  		<td><label class="label">Comment</label></td>
      						  		<td><label class="label">Action</label></td>
      						  	</tr>
      						  	<?php if (count($_from = (array)$this->_tpl_vars['oncall'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
      						  	<tr bgcolor="white">
      						  		<td><input name="name_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" id=""name_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" value="<?php echo $this->_tpl_vars['row']->name; ?>
" disabled></td>
      						  		<td><input type="text" name="mobile_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" id="mobile_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" size="15" maxlength="6" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['row']->mobile)) ? $this->_run_mod_handler('substr', true, $_tmp, 8, 6) : substr($_tmp, 8, 6)); ?>
" disabled></td>
      						  		<td>      						  			      	      	  		      
							            <select name="priority_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" id="priority_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" style="width:90px" disabled>
							                <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['priority'],'output' => $this->_tpl_vars['priority'],'selected' => $this->_tpl_vars['row']->priority), $this);?>

						                </select>
						              </select>
      						  		</td>
      						  		<td><input type="text" name="date_from_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" id="date_from_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" value="<?php echo $this->_tpl_vars['row']->date_from; ?>
" size="12" disabled onClick="displayCalendar(document.editOnCallForm.date_from_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
,'yyyy-mm-dd',this);"></td>
      						  		<td><input type="text" name="date_to_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" id="date_to_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" value="<?php echo $this->_tpl_vars['row']->date_to; ?>
" size="12" disabled onClick="displayCalendar(document.editOnCallForm.date_to_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
,'yyyy-mm-dd',this);"></td>
      						  		<td><textarea name="comment_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
" id=""comment_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
"" rows="2" cols="20" disabled><?php echo $this->_tpl_vars['row']->comment; ?>
</textarea></td>
      						  		<td align="center">
      						  			<div style="display:block" id="edit_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
"><img src="/nm_tx/common/image/icons/edit.gif" onClick="changeState(<?php echo $this->_tpl_vars['row']->oncall_id; ?>
);" alt="Click to Edit."></div>
      						  			<div style="display:none" id="update_<?php echo $this->_tpl_vars['row']->oncall_id; ?>
">
      						  				<img src="/nm_tx/common/image/icons/save.gif" width="18" height="18" onClick="submitEditForm(<?php echo $this->_tpl_vars['row']->oncall_id; ?>
,'update');" alt="Click to Save.">&nbsp;
      						  				<img src="/nm_tx/common/image/icons/delete.gif" onClick="submitEditForm(<?php echo $this->_tpl_vars['row']->oncall_id; ?>
,'delete');" alt="Click to Delete.">
      						  			</div>
      						  		</td>
      						  	</tr>
      						  	<?php endforeach; unset($_from); endif; ?>
      						  </table>
      						<?php else: ?>
      					<div style="margin-top:20px; margin-left:150px;"><font size="2"><b>OnCall information of date <?php echo $this->_tpl_vars['oncall_date']; ?>
 is unavailable.<b></font></div>
      						<?php endif; ?>
      				  </td>
      				</tr>
      			</table> 
      		  </form>
      		</td>
      	</tr>
      </table>
    <?php elseif ($this->_tpl_vars['page'] == 'team_leader'): ?>
      <br>
      <table cellspacing="1" cellpadding="0" bgcolor="black" align="center">
      	<tr bgcolor="white">
      		<td align="center" style="height:25px">
      			<font size="2"><b>Team Leader Information Page.</b></font>
      		</td>
      	</tr>
      	<tr bgcolor="white">	
      		<td>
      			<table style="width:750px" cellpadding="5" cellspacing="1" border="0">
      				<tr bgcolor="#4F81BD">
      					<td align="center"><font color="white"><b>Region</b></font></td>
      					<td><font color="white"><b>Subcenter</b></font></td>
      					<td><font color="white"><b>Name</b></font></td>
      					<td align="center"><font color="white"><b>Mobile</b></font></td>
      					<td><font color="white"><b>Comment</b></font></td>
      					<td align="center"><font color="white"><b>Action</b></font></td>      					
      				</tr>
      				
      				<!---update operation if requested-->
      				<?php if ($this->_tpl_vars['cmd'] == 'edit'): ?>
      				<form name="editTeamLeaderForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
      				<input type="hidden" name="cmd" value="update">
      				<input type="hidden" name="page" value="team_leader">
      				<input type="hidden" name="team_leader_id" value="<?php echo $this->_tpl_vars['team_leader_list'][0]->team_leader_id; ?>
">
      				<tr bgcolor="#D0D8E8">
        				<td align="center"><?php echo $this->_tpl_vars['team_leader_list'][0]->region; ?>
</td>
        				<td><?php echo $this->_tpl_vars['team_leader_list'][0]->subcenter; ?>
</td>
        				<td><input type="text" name="name" value="<?php echo $this->_tpl_vars['team_leader_list'][0]->name; ?>
" size="25"></td>
        				<td align="center"><input type="text" name="mobile" value="<?php echo $this->_tpl_vars['team_leader_list'][0]->mobile; ?>
" size="16"></td>
        				<td><textarea name="comment" rows="2" cols="20"><?php echo $this->_tpl_vars['team_leader_list'][0]->comment; ?>
</textarea></td>
        				<td align="center"><input type="submit" class="submit" value="Update"></td>
        			</tr>
        		  </form>
      				<?php else: ?>
      				<?php if (count($_from = (array)$this->_tpl_vars['team_leader_list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
        			<tr bgcolor="<?php echo $this->_tpl_vars['row']->color; ?>
">
        				<td align="center"><?php echo $this->_tpl_vars['row']->region; ?>
</td>
        				<td><?php echo $this->_tpl_vars['row']->subcenter; ?>
</td>
        				<td><?php echo $this->_tpl_vars['row']->name; ?>
</td>
        				<td align="center"><?php echo $this->_tpl_vars['row']->mobile; ?>
</td>
        				<td><?php echo $this->_tpl_vars['row']->comment; ?>
</td>
        				<td align="center"><a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=team_leader&cmd=edit&team_leader_id=<?php echo $this->_tpl_vars['row']->team_leader_id; ?>
">Edit</a></td>
        			</tr>
        			<?php endforeach; unset($_from); endif; ?>
        			<?php endif; ?>
      			</table>
      		</td>
      	</tr>
      </table>
    <?php endif; ?>
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