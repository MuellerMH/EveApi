<?php

class Request {

	private $sUrl = "https://api.eveonline.com";
	private $keyID = "";
	private $vCode = "";
	private $aHeaderLog = array();
	private $aOptions = array();


	private function setOptions()
	{
		$this->aOptions['timeout']=10;
	}

	public function callWebService($url)
	{

		$ch = curl_init();


		curl_setopt($ch,CURLOPT_URL,$this->sUrl.$url.'?keyId='.$this->keyID.'&vcode='.$this->vCode);

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_TIMEOUT, 15);
		curl_setopt($ch, 156, 2500);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, false);


		$result = curl_exec($ch);
		return simplexml_load_string(trim($result));
	}

}

?>