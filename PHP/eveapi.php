<table>
	<tr>
		<td>Name</td>
		<td>ID</td>
		<td>Corp</td>
		<td>ID</td>
	</tr>

<?php 

require_once '../../db.php';
require_once 'lib/Account.php';

$resource = db::query('Select sKey,vCode FROM Accounts where status = 1 and type ="Char";');
$aAccount = db::fetch($resource);
foreach($aAccount as $aAcc)
{
	$Account = new Account($aAcc['sKey'],$aAcc['vCode']);
	$Characters = $Account->getCharacters();	
	
	for($i = 0; $i<$Characters->charCount; $i++) { 
	 	$Char = $Characters->getCharacter($i); 
		echo '
		<tr>
			<td>'.$Char->name.'</td>
			<td>ID</td>
			<td>Corp</td>
			<td>ID</td>
		</tr>
		';
	 } 
	 $Account=null;
}
?>



</table>