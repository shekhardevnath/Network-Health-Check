<?php /* Smarty version 2.6.6, created on 2009-09-20 12:18:17
         compiled from C:/wamp/www/nm_tx/user_manager/user_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'C:/wamp/www/nm_tx/user_manager/user_list.html', 24, false),array('function', 'html_options', 'C:/wamp/www/nm_tx/user_manager/user_list.html', 45, false),)), $this); ?>
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
   myTable.AddColumn("Name",      "", "left",   "");
   myTable.AddColumn("Username",  "", "left",   "");
   myTable.AddColumn("Group",     "", "left",   "");
   myTable.AddColumn("Email",     "", "left",   "");
   myTable.AddColumn("User Type", "", "center", "");  
   myTable.AddColumn("Date",      "", "center", "");
   myTable.AddColumn("Action",    "", "center", "");

   var i = 1;

   //Now populate the coloums with the user data
   <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
      myTable.AddLine("<?php echo $this->_tpl_vars['item']->name; ?>
","<?php echo $this->_tpl_vars['item']->username; ?>
","<?php echo $this->_tpl_vars['item']->group_name; ?>
","<?php echo $this->_tpl_vars['item']->email; ?>
","<?php echo $this->_tpl_vars['item']->user_type; ?>
","<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->create_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m/%d/%Y') : smarty_modifier_date_format($_tmp, '%m/%d/%Y')); ?>
","<a href='<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?id=<?php echo $this->_tpl_vars['item']->uid; ?>
&cmd=edit' target='_top'>Edit</a>&nbsp;|&nbsp;<a onClick='return doConfirm(PROMPT_DELETE_CONFIRM);' href='<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?id=<?php echo $this->_tpl_vars['item']->uid; ?>
&cmd=delete' target='_top'>Delete<a/>");

      if(i%2==0)
         myTable.AddLineProperties("class='reportEvenRow' onmouseover=\"this.className='reportRowSelected';\" onmouseout=\"this.className='reportEvenRow';\"");
      else
         myTable.AddLineProperties("class='reportOddRow'  onmouseover=\"this.className='reportRowSelected';\" onmouseout=\"this.className='reportOddRow';\"");

      ++i;
   <?php endforeach; unset($_from); endif; ?>

</script>
</head>

<body class="whiteBody">
<form method="post" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=list" name="userListForm">
   <table border="0" cellpadding="1" cellspacing="0">
         <tr>
            <td>
            <label class="label" id="user_type">User Type</label><br class="br"/>
            <select name="user_type" class="list" onchange="javascript:document.userListForm.submit();">
            <option value="">All</option>
            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['user_type_list'],'output' => $this->_tpl_vars['user_type_list'],'selected' => $this->_tpl_vars['user_type']), $this);?>

            </select>
            </td>
            <td width="5"></td>
            <td>
            <label class="label" id="status">Group</label><br class="br"/>
            <select name="group_id" class="list" onchange="javascript:document.userListForm.submit();">
            <option value="">All</option>
            <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['group_name_list'][0],'output' => $this->_tpl_vars['group_name_list'][1],'selected' => $this->_tpl_vars['group_id']), $this);?>

            </select>
            </td>
         </tr>
   </table>
</form>

   <?php if ($this->_tpl_vars['list']): ?>
   <table bgcolor="#FFFFFF" border="0" width="100%">
      <SCRIPT>
         //This variable holds the number of click event that a user
         //did on the table header, it is require to find the display order
         var counter = 0;
      </SCRIPT>

      <?php $this->assign('toggleCount', 0); ?>
         <tr class="tbl_header" align="center">
            <td><a href="javascript:SortRows(myTable,0); onclick=toggleSort(0);">Name</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="1">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="2">
            </td>
            <td><a href="javascript:SortRows(myTable,1); onclick=toggleSort(2);">Username</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="3">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="4">
            </td>
            <td><a href="javascript:SortRows(myTable,2); onclick=toggleSort(4);">Group</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="5">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="6">
            </td>
            <td><a href="javascript:SortRows(myTable,3); onclick=toggleSort(6);">Email</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="7">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="8">
            </td>
            <td><a href="javascript:SortRows(myTable,4); onclick=toggleSort(8)">User Type</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="9">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="10">
            </td>
            <td><a href="javascript:SortRows(myTable,5); onclick=toggleSort(10)">Create Date</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="11">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="12">
            </td>
            <td>Action</td>
         </tr>

           <SCRIPT>myTable.WriteRows()</SCRIPT>

  </table>
  <?php else: ?>
  <table border="0" width="100%">
      <tr>
         <td>No User(s) available...</td>
      </tr>
  </table>
  <?php endif; ?>

</body>
</html>