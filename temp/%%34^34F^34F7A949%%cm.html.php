<?php /* Smarty version 2.6.6, created on 2012-05-28 14:28:04
         compiled from C:/wamp/www/nm_tx/pw/cm.html */ ?>
<body>
     <form method=post action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?cmd=pw_copy">
       <table><tr><td><input type=radio value=pw name=type <?php echo $this->_tpl_vars['pws']; ?>
>PW&nbsp;&nbsp;<input type=radio value=pwr name=type <?php echo $this->_tpl_vars['pwrs']; ?>
>PWR
     &nbsp;&nbsp;<input type=checkbox name=include <?php echo $this->_tpl_vars['is']; ?>
><b>Include_SMS_To</b>
     &nbsp;&nbsp;Date:&nbsp;<input type=text name=pw_execution_date value="<?php echo $this->_tpl_vars['pwd']; ?>
">&nbsp;[<b>Format&nbsp;2012-04-22</b>]
     &nbsp;&nbsp;&nbsp<input type=submit value='Get Data'></td></tr>
     <tr><td><textarea cols=195 rows=30><?php echo $this->_tpl_vars['data']; ?>
</textarea> </td></tr>
     </table>
     </form>
</body>