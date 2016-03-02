<?php /* Smarty version 2.6.6, created on 2009-09-20 12:18:29
         compiled from C:/wamp/www/nm_tx/group_manager/group_list.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'C:/wamp/www/nm_tx/group_manager/group_list.html', 21, false),)), $this); ?>
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
   myTable.AddColumn("Name",         "", "left",   "");      
   myTable.AddColumn("Group Email",  "", "center", "");   
   myTable.AddColumn("Create Date",  "", "center", "");
   myTable.AddColumn("Action",       "", "center", "");

   var i = 1;

   //Now populate the coloums with the group data
   <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['item']):
?>
      myTable.AddLine("<?php echo $this->_tpl_vars['item']->name; ?>
","<?php echo $this->_tpl_vars['item']->group_email; ?>
","<?php echo ((is_array($_tmp=$this->_tpl_vars['item']->create_date)) ? $this->_run_mod_handler('date_format', true, $_tmp, '%m/%d/%Y') : smarty_modifier_date_format($_tmp, '%m/%d/%Y')); ?>
","<a href='<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?id=<?php echo $this->_tpl_vars['item']->group_id; ?>
&cmd=edit' target='_top'>Edit</a>&nbsp;|&nbsp;<a onClick='return doConfirm(PROMPT_DELETE_CONFIRM);' href='<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?id=<?php echo $this->_tpl_vars['item']->group_id; ?>
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
            <td><a href="javascript:SortRows(myTable,3); onclick=toggleSort(6)">Group Email</a>
                <img src="/nm_tx/common/image/s_asc.png" border="0" style="display:none" id="7">
                <img src="/nm_tx/common/image/s_desc.png" border="0" style="display:none" id="8">
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
         <td>No Group(s) available...</td>
      </tr>
  </table>
  <?php endif; ?>

</body>
</html>