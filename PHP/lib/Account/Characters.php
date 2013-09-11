<?php 
class Characters 
{
	private $characterID;
	private $characterName;
	private $corporationID;
	private $corportationName;
	public $charCount=0;

	public function __construct( $data )
	{
		foreach($data->result->rowset as $Char)
		{		
			++$this->charCount;
			$this->characterID = $Char->row["characterID"];
			$this->characterName = $Char->row["name"];
			$this->corporationID = $Char->row["corporationID"];
			$this->corportationName = $Char->row["corporationName"];
		}		
	}

	public function getCharacter($key)
	{
		$Char["characterID"] = $this->characterID[$key];
		$Char["characterName"] = $this->characterName[$key];
		$Char["corporationID"] = $this->corporationID[$key];
		$Char["corportationName"] = $this->corportationName[$key];
		return $Char;
	}
}
 ?>