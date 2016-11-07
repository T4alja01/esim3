<!--
7.11 lisätty
-->

<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Asiakas extends CI_Controller { #1
public function listaa() { #2
	$this->load->model('Asiakas_model');
	$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
	$data['sivun_sisalto']='asiakas/listaa';
	$this->load->view('menu/sisalto',$data);
} #1
public function lisaa() { #3
	$btn=$this->input->post('btnTallenna');
	$lisaa_asiakas=array(
		"etunimi"=>$this->input->post('en'),
		"sukunimi"=>$this->input->post('sn'),
		"email"=>$this->input->post('em')
		); 
	$this->load->model('Asiakas_model');
	if(isset($btn)) { #4
			$lisays=$this->Asiakas_model->addAsiakas($lisaa_asiakas);
			if($lisays>0) { #5
				echo '<script>alert("Lisäys onnistui")</script>';
			} #2
	} #3
	$data['sivun_sisalto']='asiakas/lisaa';
	$this->load->view('menu/sisalto',$data);
} #4
public function nayta_poistettavat() { #6
	$this->load->model('Asiakas_model');
	$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
	$data['sivun_sisalto']='asiakas/poista';
	$this->load->view('menu/sisalto',$data);
} #5
public function poista($id) { #7
	$this->load->model('Asiakas_model');
	$poista=$this->Asiakas_model->delAsiakas($id);
	if($poista>0) { #8
		echo '<script>alert("Poisto onnistui")</script>';
	} #6
	$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
	$data['sivun_sisalto']='asiakas/listaa';
	$this->load->view('menu/sisalto',$data);
} #7
public function etsi_tilaus() { #9
	$id=$this->input->post('valittu_id');
	$btn=$this->input->post('btnEtsi');
	$this->load->model('Asiakas_model');
	$this->load->model('Tilaus_model');
	$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
	if(isset($btn)) { #10
		$data['tilaus']=$this->Tilaus_model->searchTilaus($id);
	} #8
	$data['sivun_sisalto']='asiakas/etsi_tilaus';
	$this->load->view('menu/sisalto',$data);
} #9

public function naytaMuokattavaAsiakas($id)
	{#11
	$data['asiakas']=$this->Asiakas_model->getValittuasiakas($id);
	$data['sivun_sisalto']='asiakas/nayta_muokattava_asiakas';
	$this->load->view('menu/sisalto',)
	} #10

public function paivita_asiakas()
	{ #12
		$btn=$this->input->post('btnTallenna')
		if(isset($btn)) 
		{

		$uusiData=array(
			'etunimi'=>$this->input->post('en')
			'sukunimi'=>$this->input->post('sn')
			'email'=>$this->input->post('email')
			);
		$id=$this->input->post('id');
		$testi=$this->Asiakas_model->updateValittuAsiakas($uusiData,$id);
		if($testi<0)
		{ #13
		echo '<script>alert("Päivitys onnistui")</script>';
		} #11
	else
		echo '<script>alert("Päivitys epäonnistui")</script>';
		} #12

	} #13
public function nayta_muokattavaT_asiakkaat()
	$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
	$data['sivun_sisältö']='asiakas/nayta_muokattavat_asiakkaat';
	$this->load->view('menu/sisalto',$data);
{ #14

public function muokkaa_asiakkaat()
{ #15
	$btn->this->input->post('btnTallenna');
	if(isset($btn))
	{ #16
		$id->$this->input->post('id');
		$enimi=$this->input->post('en');
		$snimi=$this->input->post('sn');
		$email=$this->input->post('email');
		$lkm=0;
		foreach ($id as $rivi) 
		{ #17
			$lkm++;
		} #14

		for($x=0); $x<lkm; $x++)
		{ #18
			$paivita_asiakas=array
			(
				"etunimi"=>enimi[$x],
				"sukunimi"=>snimi[$x],
				"email"=>email[$]
			);
			$testi=$this->Asiakas_model->updateValittuAsiakas($paivita_asiakas,$id[$]);
		} #15
		$this->listaa();
	} #16
} #17

} #18




#<!--
#Aiemmin 1.11 kirjoitettu
#<?php
#defined('BASEPATH') OR exit('no direct script access allowed');
#
#class Asiakas extends CI_Controller 
#{
#	public function listaa()
#	{
#		$this->load->model('Asiakas_model')
#		$data['asiakkaat']=$this->Asiakas_model->getAsiakas();
#		$this->load->view('asiakas/listaa',$data);
#	}
#}
#
#-->