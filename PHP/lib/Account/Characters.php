<?php 
class Characters 
{
	private $characterID;
	private $characterName;
	private $corporationID;
	private $corportationName;

	public $aChar;

	public function __construct( $data )
	{
		foreach($data->result->rowset as $key=>$Char)
		{			
			$this->aChar[$key] = $this;
			$this->aChar[$key]->characterID = $Char->characterID;
			$this->aChar[$key]->characterName = $Char->name;
			$this->aChar[$key]->corporationID = $Char->corporationID;
			$this->aChar[$key]->corportationName = $Char->corporationName;
		}		
	}

	public function getCharacter($key)
	{
		return $this->aChar[$key];
	}
}
 ?>