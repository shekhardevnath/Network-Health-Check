<?php /* Smarty version 2.6.6, created on 2009-09-20 12:18:29
         compiled from C:/wamp/www/nm_tx/group_manager/group_manager.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'stripslashes', 'C:/wamp/www/nm_tx/group_manager/group_manager.html', 51, false),)), $this); ?>
<?php if ($this->_tpl_vars['cmd'] != ""): ?>

<script language="JavaScript" src="/ext/ajax/cpaint.inc.js"></script>

<script language="JavaScript">

   <?php if (count($_from = (array)$this->_tpl_vars['user_list'])):
    foreach ($_from as $this->_tpl_vars['user'] => $this->_tpl_vars['this']):
?>
      var user_<?php echo $this->_tpl_vars['user']; ?>
_id = new Array();
      var user_<?php echo $this->_tpl_vars['user']; ?>
_name = new Array();

      <?php $this->assign('i', 0); ?>
      <?php if (count($_from = (array)$this->_tpl_vars['this'])):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['uname']):
?>
         user_<?php echo $this->_tpl_vars['user']; ?>
_id[<?php echo $this->_tpl_vars['i']; ?>
]   = '<?php echo $this->_tpl_vars['uid']; ?>
'
         user_<?php echo $this->_tpl_vars['user']; ?>
_name[<?php echo $this->_tpl_vars['i']; ?>
] = '<?php echo $this->_tpl_vars['uname']; ?>
'
         <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
      <?php endforeach; unset($_from); endif; ?>
   <?php endforeach; unset($_from); endif; ?>

   mem_id   = new Array();
   mem_name = new Array();

   <?php $this->assign('i', 0); ?>
   <?php if (count($_from = (array)$this->_tpl_vars['team_member_list'])):
    foreach ($_from as $this->_tpl_vars['uid'] => $this->_tpl_vars['uname']):
?>
      mem_id[<?php echo $this->_tpl_vars['i']; ?>
]   = '<?php echo $this->_tpl_vars['uid']; ?>
'
      mem_name[<?php echo $this->_tpl_vars['i']; ?>
] = '<?php echo $this->_tpl_vars['uname']; ?>
'
      <?php $this->assign('i', $this->_tpl_vars['i']+1); ?>
   <?php endforeach; unset($_from); endif; ?>

</script>

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
       <td class="contentHeaderText">Group Manager <?php if ($this->_tpl_vars['group_id']): ?> [ <a class="hotlink" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=edit">Add Group</a> ] <?php endif; ?></td>
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
    <form name="groupManagerForm" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
" method="POST" onsubmit="return doFormSubmit();" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $this->_tpl_vars['group_id']; ?>
">
    <input type="hidden" name="cmd" value="add">
       <table border="0" >
           <tr>
               <td>
               <label class="label" id="name">Group Name</label><br class="br"/>
               <input type="text" name="name" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['name'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" size="25" maxsize="50" onBlur="javascript:checkGroup();">
               </td>
               <td>
               <label class="label" id="group_email">Email</label><br class="br"/>
               <input type="text" name="group_email" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['group_email'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
" size="25" maxsize="128">
               </td>               
           </tr>
       </table>
       <br />
        <table border="0" >
           <tr>
               <td>
               <label class="label" id="desc">Description</label><br class="br"/>
               <textarea name="description" cols="80" rows="10"><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('stripslashes', true, $_tmp) : stripslashes($_tmp)); ?>
</textarea>
               </td>
           </tr>
       </table>              
       <br/>
       <table border="0">
          <tr>
          <td colspan=2><br class="br" />
          <input type="submit" class="button" name="submit" <?php if ($this->_tpl_vars['group_id'] != ''): ?> value=" Update " <?php else: ?> value=" Save " <?php endif; ?>>
          <input type="reset"  class="button" name="submit" value=" Reset ">
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
       <td class="contentHeaderText">Available Group(s)</td>
       <td align="right"><a class="hotlink" href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=edit">Add a new Group</a></td>
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