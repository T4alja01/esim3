<!--
7.11 lisätty
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
public function index() {
	echo "Tämä on Home-controllerin index-funktio";
}
public function toka() {
	echo "Tämä on Home-controllerin toka-funktio";
}
public function kolmas() {
	$data['nimet']=array(
		array("en"=>'Jussi',"sn"=>'Virta'),
		array("en"=>'Antti',"sn"=>'Virta'),
		array("en"=>'Mikko',"sn"=>'Virta')
		);
	$data['user']="Pekka";
	$data['vuosi']=2016;
	$this->load->view('home/kolmas',$data);
}
public function neljas() {
	$this->load->model('Home_model');
	$data['sisalto']=$this->Home_model->getNames();
	$this->load->view('home/neljas',$data);
}
}

#<!--
#Aiemmin 1.11 kirjoitettu
#<?php
#defined('BASEPATH') OR exit('No direct script access allowed');
#
#class Home extends CI_Controller {
#	public function index()
#	{
#		echo "tämä on home-controllerin index-funktio";
#	}
#
#	public function toka()
#	{
#		echo "tämä on home-controllerin toka-funktio";
#	}
#
#	public function kolmas()
#	{
#		$data['nimet']=array
#			(
#				array("en"=>'Jussi','sn'=>'Virta'),
#				array("en"=>'antti','sn'=>'Virta'),
#				array("en"=>'Mikko','sn'=>'Virta')
#			);
#	$data['user']="Pekka";
#	$data['vuosi']=2016;
#
#	$this->load->view('home/kolmas',$data);
#	}
#
p#ublic function neljas() 
#{
#	$this->load->model('Home_model');
#	$data['sisalto']=$this->Home_model->getNames();
#	$this->load->view('home/neljas',$data);
#}
#
#}
#-->