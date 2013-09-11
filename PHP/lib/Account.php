<?php 
require_once 'lib/Account/Characters.php';
require_once 'lib/Request.php';
class Account extends Request 
{
	public function __construct($key,$code)
	{
		$this->keyID = $key;
		$this->vCode = $code;
	}

	public function getAccountStatus()
	{

	}

	public function getApiKeyInfo()
	{
		
	}

	public function getCharacters()
	{
		return new Characters($this->callWebService("/account/Characters.xml.aspx"));
	}
}
 ?>