<?php 
requier_once 'lib/Account/Characters.php';
class Account extends Request 
{
	public function getAccountStatus()
	{

	}

	public function getApiKeyInfo()
	{
		
	}

	public function getCharacters()
	{
		$this->sUrl .= '/account/Characters.xml.aspx';
		return new Characters($this->callWebService());
	}
}
 ?>