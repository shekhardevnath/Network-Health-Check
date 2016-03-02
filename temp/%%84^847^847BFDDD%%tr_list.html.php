<?php /* Smarty version 2.6.6, created on 2011-09-15 09:16:06
         compiled from C:/wamp/www/nm_tx/tr_follow_up/tr_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'string_format', 'C:/wamp/www/nm_tx/tr_follow_up/tr_list.html', 67, false),array('function', 'html_options', 'C:/wamp/www/nm_tx/tr_follow_up/tr_list.html', 111, false),)), $this); ?>
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

      	  
    <script>
    	var myTable = new SortTable("myTable");
    	//Add the coloums of the table as name,attribute,alignment,content type
    	myTable.AddColumn("Ticket#",                   "", "center",   "");    	
      myTable.AddColumn("PROBLEMCATEGORY",           "", "left",   "");
      myTable.AddColumn("PROBLEMCOMPONENT",          "", "left",   ""); 
      myTable.AddColumn("TICKETTYPE",                "", "center",   "");           
      myTable.AddColumn("ESCALATIONTIME",            "", "center",   "");      
      myTable.AddColumn("DURATION",                  "", "center",   "");      
      myTable.AddColumn("STATUS",                    "", "center",   "");     
      myTable.AddColumn("HOLDINGGROUP",              "", "center",   "");            
      myTable.AddColumn("HOLDINGDETAILS",            "", "center",   "");            
      
      var i=1;
      
      <?php if (count($_from = (array)$this->_tpl_vars['list_gptts'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
        
        myTable.AddLine("<?php echo $this->_tpl_vars['item']->ID; ?>
","<?php echo $this->_tpl_vars['item']->PROBLEM_CATEGORY; ?>
","<?php echo $this->_tpl_vars['item']->PROBLEM_COMPONENT; ?>
","<?php echo $this->_tpl_vars['item']->TICKET_TYPE; ?>
",
                        "<?php echo $this->_tpl_vars['item']->ESCALATION_TIME; ?>
","<?php echo $this->_tpl_vars['item']->STATUS; ?>
","<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->DURATION)) ? $this->_run_mod_handler('string_format', true, $_tmp, '%.0f') : smarty_modifier_string_format($_tmp, '%.0f')); ?>
","<?php echo $this->_tpl_vars['item']->HOLDING_GROUP; ?>
","<a href=JavaScript:void(0); onClick=showTicketDetailsPopUP(<?php echo $this->_tpl_vars['item']->ID; ?>
);>View</a>");
        
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
    	<table border="0" class="contentHeader" width="100%">
    		<tr><td class="contentHeaderText" align="center">Grameenphone Trouble Ticket Followup Engine</td></tr>
    	</table>
    	<br> 	    	
  	  <table border="0">  	    
  	    <tr>  	    
  	    	<form name="trListForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST">
  	      <input type="hidden" name="cmd" value="show">	
  	    	<td>
  	    		<label class="label">Start Date</label><br>
  	    	  <input type="text" value="<?php echo $this->_tpl_vars['start_date']; ?>
" name="start_date">
  	    	  <input type="button" value="Date" onclick="displayCalendar(document.trListForm.start_date,'yyyy-mm-dd',this)">
  	    	</td>
  	    	<td>
  	    		<label class="label">End Date</label><br>
  	    	  <input type="text" value="<?php echo $this->_tpl_vars['end_date']; ?>
" name="end_date">
  	    	  <input type="button" value="Date" onclick="displayCalendar(document.trListForm.end_date,'yyyy-mm-dd',this)">  	  			
  	    	</td>  	    	
          <td>
          	<label class="label">Subcenter</label><br>
    	  		<select name="gptts_group_id">
    	  			<option value="">All Subcenter</option>
  	    		  <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['gptts_group_id_list'],'output' => $this->_tpl_vars['gptts_group_name_list'],'selected' => $this->_tpl_vars['gptts_group_id']), $this);?>

  	    		</select>
  	    	</td>
  	    	<td>
  	    		<label class="label">Ticket Type</label><br>
  	    		<select name="ticket_type">
  	    			<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['ticket_type_list'],'output' => $this->_tpl_vars['ticket_type_list'],'selected' => $this->_tpl_vars['ticket_type']), $this);?>

  	    		</select>
  	    	</td>
  	    	<td>      
  	    	  <label class="label">User Gruop</label><br>
  	    		<select name="user_group">
  	    			<?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_group_id_list'],'output' => $this->_tpl_vars['user_group_name_list'],'selected' => $this->_tpl_vars['user_group']), $this);?>

  	    		</select>
  	    	</td>
  	    	<td>
  	    		<br><input type="submit" class="submit" name="show_details" value="Show Details">
  	    	</td>		  	    	
  	      </form>   
  	    </tr>  	    
  	  </table>
  	  <br>
  	  <table bgcolor="#FFFFFF" border="0" width="100%">  	  	
  	  	<tr align="left">
  	  		<td colspan="9"><input type="button" value="Export All" onclick="showTicketDetailsPopUP();"><br><br></td>
  	  	</tr>       
  	  	<tr class="tbl_header" align="center">
    			<td>Ticket#</td>    			
    			<td align="left">Problem Category</td>
    			<td align="left">Problem Component</td>    	    			
    			<td>Ticket Type</td>    			
    			<td>Escalation Time</td>    			
    			<td>Status</td>    			
    			<td>Total Duration (Day)</td>    			
    			<td>Current Holding Group</td>    			    			
    			<td>Holding Group/Duration Details</td>
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