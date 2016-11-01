<?php 
class Home_model extends CI_Model
{
	public function getNames()
	{
		$names=array(
			array("en"=>'Liisa',"sn"=>'Joki'),
			array("en"=>'Maija',"sn"=>'Joki'),
			array("en"=>'Jenna',"sn"=>'Joki')
		);

	return $names;
	}
}
