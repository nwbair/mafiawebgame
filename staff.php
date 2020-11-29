<?php if (in_array($name, $admin_array)){ ?>
<form name="form1" method="post" action="">
  <table width="90%" border="1" >
    <tr>
      <td colspan="4" align="left" >Admins</td>
    </tr>
    <tr>
      <td colspan="4" align="center"> 
	
	<?php
	
	if(empty($admins)){
	echo "There are no admins.";
	}else{
	
	$admins_list = explode("-", $admins);
	 		  
foreach( $admins_list as $key => $value){
	echo "<input name=\"admin_name\" type=\"radio\" value=\"".$value."\" onfocus=\"if(this.blur)this.blur()\">".$value."";

}		
}// if no friends.  
		  ?></td>
    </tr>
    <tr>
      <td width="50" align="left" ><b>Name:</b></td>
      <td align="center" ><input name="admin" type="text"  id="admin" style='width: 95%; ' maxlength="20" /></td>
      <td width="100" align="right" ><input name="Add_admin" type="submit"  id="Add_admin" value="Add." onfocus="if(this.blur)this.blur()" /></td>
      <td width="100" align="right" ><input name="Remove_admin" type="submit"  id="Remove_admin" value="Remove." onfocus="if(this.blur)this.blur()"/></td>
    </tr>
  </table>
  <br>
  <table width="90%" border="1" >
    <tr>
      <td colspan="4" align="left" >MOD List: </td>
    </tr>
    <tr>
      <td height="20" colspan="4" align="center" >Names of Mods will appear here</td>
    </tr>
    <tr>
      <td width="50" align="left" ><b>Name:</b></td>
      <td align="center" ><input name="Mod" type="text" id="Mod" style='width: 95%; ' maxlength="20" /></td>
      <td width="100" align="right" ><input name="Add_mod" type="submit"  id="Add_mod" value="Add." onfocus="if(this.blur)this.blur()" /></td>
      <td width="100" align="right" ><input name="Remove_Mod" type="submit"  id="Remove_Mod" value="Remove." onfocus="if(this.blur)this.blur()"/></td>
    </tr>
  </table>
  <br>
  <table width="90%" border="1" >
    <tr>
      <td colspan="4" align="left" >Hdo List: </td>
    </tr>
    <tr>
      <td colspan="4" align="center" >Names of HDOs will appear here</td>
    </tr>
    <tr>
      <td width="50" align="left" ><b>Name:</b></td>
      <td align="center" ><input name="hdo" type="text" id="hdo" style='width: 95%; ' maxlength="20" /></td>
      <td width="100" align="right" ><input name="Add_hdo" type="submit"  id="Add_hdo" onfocus="if(this.blur)this.blur()" value="Add." /></td>
      <td width="100" align="right" ><input name="Remove_hdo" type="submit"  id="Remove_hdo" value="Remove." onfocus="if(this.blur)this.blur()"/></td>
    </tr>
  </table>
</form>
<?php } ?>