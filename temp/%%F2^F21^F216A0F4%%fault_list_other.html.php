<?php /* Smarty version 2.6.6, created on 2009-09-20 12:40:25
         compiled from C:/wamp/www/nm_tx/fault_manager/fault_list_other.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/fault_manager/fault_list_other.html', 73, false),)), $this); ?>
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
    <script>
    	var myTable = new SortTable("myTable");
    	//Add the coloums of the table as name,attribute,alignment,content type
      myTable.AddColumn("Fault NO.",        "", "center",   "");
      myTable.AddColumn("Category",         "", "left",     "");
      myTable.AddColumn("Components",       "", "left",     "");
      myTable.AddColumn("NodeA",            "", "left",     "");
      myTable.AddColumn("NodeB",            "", "left",     "");      
      myTable.AddColumn("Impact",           "", "left",     "");
      myTable.AddColumn("Finding",          "", "left",     "");      
      myTable.AddColumn("Attachment",       "", "center",   "");      
      myTable.AddColumn("Status",           "", "center",   "");      
      myTable.AddColumn("Severity",         "", "center",   "");      
      myTable.AddColumn("Submit By",        "", "center",   "");     
      myTable.AddColumn("Last Updated By",  "", "center",   ""); 
      myTable.AddColumn("View_Detail",      "", "center",   "");
      
      var i=1;
      
      <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        <?php if ($this->_tpl_vars['item']->attachment == ''): ?>
         myTable.AddLine("<?php echo $this->_tpl_vars['item']->fault_id; ?>
","<?php echo $this->_tpl_vars['item']->problem_category; ?>
","<?php echo $this->_tpl_vars['item']->problem_component; ?>
","<?php echo $this->_tpl_vars['item']->node_a; ?>
","<?php echo $this->_tpl_vars['item']->node_b; ?>
","<?php echo $this->_tpl_vars['item']->impact; ?>
","<?php echo $this->_tpl_vars['item']->finding; ?>
","","<b><?php echo $this->_tpl_vars['item']->status; ?>
</b>","<?php echo $this->_tpl_vars['item']->severity; ?>
","<?php echo $this->_tpl_vars['item']->submit_by; ?>
<br>(<?php echo $this->_tpl_vars['item']->submit_date; ?>
)","<?php echo $this->_tpl_vars['item']->last_updated_by; ?>
<br>(<?php echo $this->_tpl_vars['item']->last_update_date; ?>
)","<a href=<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=show_details&fault_id=<?php echo $this->_tpl_vars['item']->fault_id; ?>
>View</a>");
        <?php else: ?> 
         myTable.AddLine("<?php echo $this->_tpl_vars['item']->fault_id; ?>
","<?php echo $this->_tpl_vars['item']->problem_category; ?>
","<?php echo $this->_tpl_vars['item']->problem_component; ?>
","<?php echo $this->_tpl_vars['item']->node_a; ?>
","<?php echo $this->_tpl_vars['item']->node_b; ?>
","<?php echo $this->_tpl_vars['item']->impact; ?>
","<?php echo $this->_tpl_vars['item']->finding; ?>
","<a href='<?php echo $this->_tpl_vars['item']->attachment; ?>
' target='_blank'>Show</a>","<b><?php echo $this->_tpl_vars['item']->status; ?>
</b>","<?php echo $this->_tpl_vars['item']->severity; ?>
","<?php echo $this->_tpl_vars['item']->submit_by; ?>
<br>(<?php echo $this->_tpl_vars['item']->submit_date; ?>
)","<?php echo $this->_tpl_vars['item']->last_updated_by; ?>
<br>(<?php echo $this->_tpl_vars['item']->last_update_date; ?>
)","<a href=<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=show_details&fault_id=<?php echo $this->_tpl_vars['item']->fault_id; ?>
>View</a>");
        <?php endif; ?>
        
        if(i%2==0)
         myTable.AddLineProperties("class='reportEvenRow' onmouseover=\"this.className='reportRowSelected';\" onmouseout=\"this.className='reportEvenRow';\"");
        else
         myTable.AddLineProperties("class='reportOddRow'  onmouseover=\"this.className='reportRowSelected';\" onmouseout=\"this.className='reportOddRow';\"");

        ++i;
      <?php endforeach; unset($_from); endif; ?>
    </script>
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
    	
    	<table  class="contentHeader" border="0" width="100%">
  	  <tr>
  	    <tr>
          <td class="contentHeaderText">Available Network Faults</td>         
        </tr>
  	   </tr>
  	  </table>
    	<br>    	
    	<!--Start of search and pagination area-->    	
    	<table border="0" width="100%">
    		<tr>
    			<td>
    				<table border="0">
    					<form name="showFaultForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
    					<tr>
    						<td>
    							<label class="label">User</label><br>
    							<select name="user" onChange="JavaScript:document.showFaultForm.submit();">
    								<option value="">All</option>
  	  					    <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_list'],'output' => $this->_tpl_vars['user_list'],'selected' => $this->_tpl_vars['user']), $this);?>

  	  				    </select>
    						</td>
    						<td>
    							<label class="label">Status</label><br>
    							<select name="status" onChange="JavaScript:document.showFaultForm.submit();">
    								<option value="">All</option>
  	  					    <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['status_list'],'output' => $this->_tpl_vars['status_list'],'selected' => $this->_tpl_vars['status']), $this);?>

  	  				    </select>
    					  </td> 
    					</tr>
    				  </form>
    				</table>
    			</td>
    			<!--Codes for Pagination starts here-->
    			<td align="right">
    				<label class="label">Go To Page:</label>  				
    				<?php unset($this->_sections['pagination_loop']);
$this->_sections['pagination_loop']['loop'] = is_array($_loop=$this->_tpl_vars['num_of_pages']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['pagination_loop']['name'] = 'pagination_loop';
$this->_sections['pagination_loop']['show'] = true;
$this->_sections['pagination_loop']['max'] = $this->_sections['pagination_loop']['loop'];
$this->_sections['pagination_loop']['step'] = 1;
$this->_sections['pagination_loop']['start'] = $this->_sections['pagination_loop']['step'] > 0 ? 0 : $this->_sections['pagination_loop']['loop']-1;
if ($this->_sections['pagination_loop']['show']) {
    $this->_sections['pagination_loop']['total'] = $this->_sections['pagination_loop']['loop'];
    if ($this->_sections['pagination_loop']['total'] == 0)
        $this->_sections['pagination_loop']['show'] = false;
} else
    $this->_sections['pagination_loop']['total'] = 0;
if ($this->_sections['pagination_loop']['show']):

            for ($this->_sections['pagination_loop']['index'] = $this->_sections['pagination_loop']['start'], $this->_sections['pagination_loop']['iteration'] = 1;
                 $this->_sections['pagination_loop']['iteration'] <= $this->_sections['pagination_loop']['total'];
                 $this->_sections['pagination_loop']['index'] += $this->_sections['pagination_loop']['step'], $this->_sections['pagination_loop']['iteration']++):
$this->_sections['pagination_loop']['rownum'] = $this->_sections['pagination_loop']['iteration'];
$this->_sections['pagination_loop']['index_prev'] = $this->_sections['pagination_loop']['index'] - $this->_sections['pagination_loop']['step'];
$this->_sections['pagination_loop']['index_next'] = $this->_sections['pagination_loop']['index'] + $this->_sections['pagination_loop']['step'];
$this->_sections['pagination_loop']['first']      = ($this->_sections['pagination_loop']['iteration'] == 1);
$this->_sections['pagination_loop']['last']       = ($this->_sections['pagination_loop']['iteration'] == $this->_sections['pagination_loop']['total']);
?>
              <?php if ($this->_tpl_vars['displayed_page'] == $this->_sections['pagination_loop']['iteration']): ?>
                  <b><?php echo $this->_sections['pagination_loop']['iteration']; ?>
</b>
              <?php else: ?>                 
                 <a class="hotlink" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?start=<?php echo $this->_sections['pagination_loop']['iteration']*$this->_tpl_vars['rows_per_page']-$this->_tpl_vars['rows_per_page'];  if ($this->_tpl_vars['user'] != ''): ?>&user=<?php echo $this->_tpl_vars['user'];  endif;  if ($this->_tpl_vars['status'] != ''): ?>&status=<?php echo $this->_tpl_vars['status'];  endif; ?>"><?php echo $this->_sections['pagination_loop']['iteration']; ?>
</a>
              <?php endif; ?>
            <?php endfor; endif; ?>
    			</td>
    			<!--Codes for Pagination ends here-->
    		</tr>
    		</tr>
    	</table>    	
    	<!--End of search and pagination area-->
    	
    	<br>
    	<table bgcolor="#FFFFFF" border="0" width="100%">
    		<tr class="tbl_header" align="center">
    			<td>Fault No.</td>
    			<td>Category</td>
    			<td>Component</td>
    			<td>Node A</td>
    			<td>Node B</td>
    			<td>Impact</td>
    			<td>Findings</td>
    			<td>Attachment</td>
    			<td>Status</td>
    			<td>Severity</td>
    			<td>Submit By</td>    			
    			<td>Last Updated By</td>
    			<td>View Details</td>
    		</tr>
        <script>
      	  myTable.WriteRows();
        </script>
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