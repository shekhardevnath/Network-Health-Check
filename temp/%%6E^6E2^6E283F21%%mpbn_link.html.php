<?php /* Smarty version 2.6.6, created on 2011-11-28 07:37:06
         compiled from C:/wamp/www/nm_tx/mpbn_link/mpbn_link.html */ ?>
<link rel="stylesheet" href="/nm_tx/ext/calender/calendar.css?random=20051112" media="screen"></link>
<script language="JavaScript" src="/nm_tx/ext/calender/calendar.js?random=20060118"></script>

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
       <td class="contentHeaderText" align="center">MPBN Link Info</td>       
    </tr>
	
	</table>
	
	<br><br>
	 <table border="0" cellpadding="0" cellspacing="1" width="100%" bgcolor="white">
    	<tr height="23">
   
   
	<td width="150" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'mpbn'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=mpbn" style="text-decoration:none"><font color="white"><b>Search by MPBN Nodes</b></font></a>
    </td>
    <td width="150" align="center" bgcolor="<?php if ($this->_tpl_vars['page'] == 'mux'): ?>#3D3D3D<?php else: ?>#7A7AFF<?php endif; ?>">
    <a href="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=mux"  style="text-decoration:none"><font color="white"><b>Search by MUX Nodes</b></font></a>
    </td>
	
	<td width="100" align="center" ></td>
    <td width="100" align="center" ></td>
	<td width="100" align="center" ></td>
	<td width="100" align="center" ></td>		
	
	</tr>
	 
	<tr bgcolor="black"><td colspan="5"></td></tr>
	
    
	</table> 
    
    <br/>
    <!---------------------------------------->
    <!--the application template starts here-->
    <!---------------------------------------->
	
	
   <?php if ($this->_tpl_vars['page'] == 'mpbn'): ?> 
	<form name="searchByMPBN" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=mpbn" method="POST"  enctype="multipart/form-data">
      			 
      	      
			  <input type="hidden" value="searchMPBN" name="cmd">
			   <input type="hidden" value="searchMPBN" name="cmd2">
		
	<strong>Serch by MPBN nodes</strong> </br></br>
	
	
	Node Type: <select name="hop_type">

	<option value="">Select Node Type</option>
	<option value="DWDM">DWDM</option>
	<option value="hiT">hiT</option>
	
	</select>
	
	Route Type:  <select name="route_type">
	<option value="">Select Route Type</option>
	<option value="W">Worker</option>
	<option value="P">Protection</option>
	
	</select>
	
	Router:  <select name="router">
	<option value="">Select Router</option>
	<option value="R1">R1</option>
	<option value="R2">R2</option>
	
	</select>
	
</br></br>
 
Node A:
<select name="nodeA">
	<option>Select Node A</option>
	<?php if (count($_from = (array)$this->_tpl_vars['site_name_a'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	
	 <option value="<?php echo $this->_tpl_vars['row']->site_a; ?>
"><?php echo $this->_tpl_vars['row']->site_a; ?>
</option>
	
	<?php endforeach; unset($_from); endif; ?>
	
	
	
	<?php if (count($_from = (array)$this->_tpl_vars['site_name_b'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	
	
	 	 <option value="<?php echo $this->_tpl_vars['row']->site_b; ?>
"><?php echo $this->_tpl_vars['row']->site_b; ?>
</option>
		 
	<?php endforeach; unset($_from); endif; ?>
	
	
	
</select>

Node B:
<select name="nodeB">
	<option>Select Node B</option>
	<?php if (count($_from = (array)$this->_tpl_vars['site_name_a'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 
	 <option value="<?php echo $this->_tpl_vars['row']->site_a; ?>
"><?php echo $this->_tpl_vars['row']->site_a; ?>
</option>
	
	<?php endforeach; unset($_from); endif; ?>
	<?php if (count($_from = (array)$this->_tpl_vars['site_name_b'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 
	 <option value="<?php echo $this->_tpl_vars['row']->site_b; ?>
"><?php echo $this->_tpl_vars['row']->site_b; ?>
</option>
	
	<?php endforeach; unset($_from); endif; ?>
</select>




	</br></br></br>
	<input type="submit" class="submit" name="submit" value="Search">
  	<input type="reset" class="reset" name="reset" value="Reset">
	 </br> </br> </br>

	<table width="75" border="2">
	
	
	<?php if ($this->_tpl_vars['list']): ?>
		
	 <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
    <td bgcolor="#FFFF00"><strong><?php echo $this->_tpl_vars['row']->hop_name; ?>
</strong></td>
		<?php endforeach; unset($_from); endif; ?>
	
	<div bgcolor="#C0C0C0">MPBN Location A: <strong><?php echo $this->_tpl_vars['row']->site_a; ?>
</strong></div>
	<div bgcolor="#C0C0C0">MPBN Location B: <strong><?php echo $this->_tpl_vars['row']->site_b; ?>
</strong></div>
	<div bgcolor="#C0C0C0">Router: <strong><?php echo $this->_tpl_vars['row']->router; ?>
</strong></div>
	<div bgcolor="#C0C0C0">Route Type: <strong><?php echo $this->_tpl_vars['row']->route_type; ?>
</strong></div>
	<div bgcolor="#C0C0C0">Hope Type: <strong><?php echo $this->_tpl_vars['row']->hop_type; ?>
</strong></div>	
	<div><br></div>
	
	
	
	
	<?php else: ?>
	
		<div style= "width:265px" style=" color:#FF0000"><strong>No result found for your requested data.</strong></div>
	<?php endif; ?>
	
	</table>
	</form>
	<?php else: ?>
	
	<form name="searchByMUX" action="<?php echo $this->_tpl_vars['SCRIPT_NAME']; ?>
?page=mux" method="POST" enctype="multipart/form-data">
      			 
      	      
			<input type="hidden" value="searchMUX" name="cmd">
			  
		
	<strong>Serch by MUX nodes</strong> </br></br>
	
	
	Node Type: <select name="hop_type">
	<option value="">Select Node Type</option>
	<option value="hiT">hiT</option>
	<option value="DWDM">DWDM</option>
	</select>
	
	
	
</br></br>
<!--
    Node A: <input  value="Type Node A" type="text" name="nodeA"/>
    Node B: <input value="Type Node B"type="text" name="nodeB"/>
-->	
	Node A:
<select name="nodeA">
	<option>Select Node A</option>
	<?php if (count($_from = (array)$this->_tpl_vars['hop_names'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 
	 <option value="<?php echo $this->_tpl_vars['row']->hop_name; ?>
"><?php echo $this->_tpl_vars['row']->hop_name; ?>
</option>
	
	<?php endforeach; unset($_from); endif; ?>
</select>
	
	Node B:
<select name="nodeB">
	<option>Select Node B</option>
	<?php if (count($_from = (array)$this->_tpl_vars['hop_names'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	 
	 <option value="<?php echo $this->_tpl_vars['row']->hop_name; ?>
"><?php echo $this->_tpl_vars['row']->hop_name; ?>
</option>
	
	<?php endforeach; unset($_from); endif; ?>
	
</select>

	

	</br></br></br>
	<input type="submit" class="submit" name="submit" value="Search">
  	<input type="reset" class="reset" name="reset" value="Reset">
	 </br> </br> </br>


	<table width="75" border="2">

	<?php if ($this->_tpl_vars['list']): ?>
	<div></div>
	<td bgcolor="#C0C0C0"><strong>Node_A</strong></td></td>
	<td bgcolor="#C0C0C0"><strong>Node_B</strong></td></td>
	<td bgcolor="#C0C0C0"><strong>Router_1/2</strong></td></td>
	<td bgcolor="#C0C0C0"><strong>Route_Type</strong></td></td>
	
	
	 <?php if (count($_from = (array)$this->_tpl_vars['list'])):
    foreach ($_from as $this->_tpl_vars['row']):
?>
	
  
<tr></tr>
   <td bgcolor="#3366FF"><?php echo $this->_tpl_vars['row']->site_a; ?>
</td></td>
   <td bgcolor="#3366FF"><?php echo $this->_tpl_vars['row']->site_b; ?>
</td></td>
   <td bgcolor="#3366FF" align="center"><?php echo $this->_tpl_vars['row']->router; ?>
</td></td>
   <td bgcolor="#3366FF" align="center"><?php echo $this->_tpl_vars['row']->route_type; ?>
</td></td>
   <tr></tr>
   
     	  
	<?php endforeach; unset($_from); endif; ?>
	
	<div bgcolor="#C0C0C0">Node A: <strong><?php echo $this->_tpl_vars['nodeA']; ?>
</strong></div>
	<div bgcolor="#C0C0C0">Node B: <strong><?php echo $this->_tpl_vars['nodeB']; ?>
</strong></div>
	<div bgcolor="#C0C0C0">Node Type: <strong><?php echo $this->_tpl_vars['row']->hop_type; ?>
</strong></div>
	<div></div>
	<tr></tr>
	<?php else: ?>
	
	<div style= "width:265px" style=" color:#FF0000"><strong>No result found for your requested data.</strong></div>
	
		
	
	<?php endif; ?>
	
	</table>
	</form>
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