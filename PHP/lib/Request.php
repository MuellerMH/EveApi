<?php

class Request {

	private $sUrl = "";
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
		return $response;
	}

}

?>