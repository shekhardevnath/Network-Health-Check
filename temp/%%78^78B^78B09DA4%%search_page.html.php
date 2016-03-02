<?php /* Smarty version 2.6.6, created on 2010-01-19 19:15:35
         compiled from C:/wamp/www/nm_tx/search_page/search_page.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'C:/wamp/www/nm_tx/search_page/search_page.html', 121, false),)), $this); ?>
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
            new Ajax.Autocompleter("category_name", "category_choices", "/nm_tx/search_page/search_page.php?cmd=category_list");         
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
    	<form name="searchForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" enctype="multipart/form-data">
    	<input type="hidden" name="cmd" value="search">	
    	<table  class="contentHeader" border="0" width="100%">
  	  <tr>
  	    <tr>
          <td class="contentHeaderText">Search Page</td>         
        </tr>
  	   </tr>
  	  </table>
  	  <br/>
  	  <table border="0" cellspacing="4">
  	  	<tr>
  	  		<td>
  	  			<label class="label">Start Date</label><br/>
  	  			<input type="text" name="start_date" value="<?php echo $this->_tpl_vars['start_date']; ?>
" readonly>
  	  			<input type="button" value="Cal" onclick="displayCalendar(document.searchForm.start_date,'yyyy-mm-dd',this)">
  	  		</td>
  	  		<td>
  	  			<label class="label">End Date</label><br/>  	  			
  	  			<input type="text" name="end_date" value="<?php echo $this->_tpl_vars['end_date']; ?>
" readonly>  	  			
  	  			<input type="button" value="Cal" onclick="displayCalendar(document.searchForm.end_date,'yyyy-mm-dd',this)">  	  			
  	  		</td>  	  		
  	  	</tr>
  	  	<tr>
  	  		<td>
  	  			<label class="label">Node A</label><br>
  	  			<input type="text" name="node_a" value="<?php echo $this->_tpl_vars['node_a']; ?>
">
  	  		</td>
  	  		<td>
  	  			<label class="label">Node B</label><br>
  	  			<input type="text" name="node_b" value="<?php echo $this->_tpl_vars['node_b']; ?>
">
  	  		</td>  	  		
  	  	</tr>
  	  	<tr>
  	  		<td>
  	  			<label class="label">Problem Component</label><br>
  	  			<input type="text" name="problem_component" value="<?php echo $this->_tpl_vars['problem_component']; ?>
">
  	  		</td>
  	  		<td>
  	  			<label class="label">User Name</label><br>
  	  			<input type="text" name="user_name" value="<?php echo $this->_tpl_vars['user_name']; ?>
">
  	  		</td>
  	  	</tr>
  	  	<tr>
  	  		<td>
  	  			<label class="label">Fault No.</label><br>
  	  			<input type="text" name="fault_id" value="<?php echo $this->_tpl_vars['fault_id']; ?>
">
  	  		</td>
  	  		<td>
  	  			<label class="label">Problem Category</label><br>
  	  			<input type="text" name="category_name" value="<?php echo $this->_tpl_vars['category_name']; ?>
" id="category_name" size="20">
  	  	  	<div id="category_choices" class="autocomplete"></div>
  	  		</td>
  	  	</tr>
  	  	<tr>
  	  		<td colspan="2">  	  			
    				<label class="label">Status</label><br>
    				<select name="status" onChange="JavaScript:document.showFaultForm.submit();">
    				  <option value="">All</option>
  	  			    <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['status_list'],'output' => $this->_tpl_vars['status_list'],'selected' => $this->_tpl_vars['status']), $this);?>

  	  			</select>    				
  	  		</td>
  	  	</tr>
  	  	<tr>
  	  		<tr>
  	  			<td colspan="3">
  	  				<br>
  	  				<input type="submit" class="submit" name="search" value="Search">
  	  				<input type="reset" class="reset" name="reset" value="Reset">
  	  			</td>
  	  		</tr>
  	  	</tr>
  	  </table>
  	  </form>
  	  
  	  <!--Search Result starts here-->
  	  <?php if ($this->_tpl_vars['list']): ?>
  	  <table  class="contentHeader" border="0" width="100%">
  	  <tr>
  	    <tr>
          <td class="contentHeaderText">Search Result</td>         
        </tr>
  	   </tr>
  	  </table>
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
             <?php if ($this->_tpl_vars['USER_TYPE'] == 'NM_TX'): ?>
             myTable.AddLine("<a href='/nm_tx/fault_manager/fault_manager.php?fault_id=<?php echo $this->_tpl_vars['item']->fault_id; ?>
&cmd=edit_fault'><?php echo $this->_tpl_vars['item']->fault_id; ?>
</a>","<?php echo $this->_tpl_vars['item']->problem_category; ?>
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
)","<a href='JavaScript:void(0)' onClick=\"showFaultDetailsPopUP(<?php echo $this->_tpl_vars['item']->fault_id; ?>
);\">View</a>");
             <?php else: ?>
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
)","<a href='JavaScript:void(0)' onClick=\"showFaultDetailsPopUP(<?php echo $this->_tpl_vars['item']->fault_id; ?>
);\">View</a>");	
             <?php endif; ?>
          <?php else: ?>
          	  <?php if ($this->_tpl_vars['USER_TYPE'] == 'NM_TX'): ?> 
              myTable.AddLine("<a href='/nm_tx/fault_manager/fault_manager.php?fault_id=<?php echo $this->_tpl_vars['item']->fault_id; ?>
&cmd=edit_fault'><?php echo $this->_tpl_vars['item']->fault_id; ?>
</a>","<?php echo $this->_tpl_vars['item']->problem_category; ?>
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
)","<a href=JavaScript:void(0); onClick=showFaultDetailsPopUP(<?php echo $this->_tpl_vars['item']->fault_id; ?>
);>View</a>");
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
)","<a href=JavaScript:void(0); onClick=showFaultDetailsPopUP(<?php echo $this->_tpl_vars['item']->fault_id; ?>
);>View</a>");
              <?php endif; ?>
          <?php endif; ?>
          
          if(i%2==0)
           myTable.AddLineProperties("class='reportEvenRow' onmouseover=\"this.className='reportRowSelected';\" onmouseout=\"this.className='reportEvenRow';\"");
          else
           myTable.AddLineProperties("class='reportOddRow'  onmouseover=\"this.className='reportRowSelected';\" onmouseout=\"this.className='reportOddRow';\"");
        
          ++i;
        <?php endforeach; unset($_from); endif; ?>
        </script>
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
  	  <?php endif; ?>
  	  <!--Search Result ends here-->
  	  
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

<script>
	callAutoComplete();                  
</script>

</html>