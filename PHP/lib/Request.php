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

	public function callWebService()
	{
		$this->setOptions();
		$response = http_get ($this->sUrl,$this->aArray,$this->aHeaderLog);
		return xml_parse_into_struct ($response);
	}

}

?>