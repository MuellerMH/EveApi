<?php 
$Key = "";
$vCode ="";

if(!empty($Key) && !empty($vCode))
{
	require_once 'lib/Account.php';
	$Account = new Account($Key,$vCode);
	$Characters = $Account->getCharacters();	
}
?>
<table>
	<tr>
		<td>Name</td>
		<td>ID</td>
		<td>Corp</td>
		<td>ID</td>
	</tr>
<?php for($i = 0; $i<$Characters->charCount; $i++) { $Char = $Characters->getCharacter($i); echo $i; ?>
	<tr>
		<td><?php echo $Char->name; ?></td>
		<td>ID</td>
		<td>Corp</td>
		<td>ID</td>
	</tr>
<?php } ?>

</table>