<?php


class Home_m extends CI_model{
   
    public function get_menu(){
		 $cont_array=array('visibility' => 1);
		$this->db->order_by('menu_order', 'ASC');
		$cont_query = $this->db->get_where('menu_tb',$cont_array,"","");
    
  //  print_r($cont_query->result_array());			
    return $cont_query->result_array();			
    //return;			

    }
	public function get_services(){
		 $cont_array=array('visibility' => 1);
		$cont_query = $this->db->get_where('services_tb',$cont_array,"","");
    
  //  print_r($cont_query->result_array());			
    return $cont_query->result_array();			
    //return;			

    }
    public function get_news(){
      $cont_array=array('visibility' => 1);
     $cont_query = $this->db->get_where('news_tb',$cont_array,"","3");
     
   //  print_r($cont_query->result_array());			
     return $cont_query->result_array();			
     //return;			
 
     }
	 //{"PayRef":"1350021872","PayID":"1","":"https:\/\/aksu.edu.ng\/pg\/","FormerName":"","GenderFemale":0,"Occupation":"","StatusSingle":1,"Degree":"Degree","AreaofSpecial":"Computer Science(Software Engineering)","StudyModeFullTime":1,"StudyModePartTime":0,"ResearchTopic":"","FacID":"1","OtherAddress":"5 Jackson Udo Asanga Street,Ikot Ambang,Ibiono Ibom","OtherInfo":["kingsley Umani","Aniefiok Otu","Emmanuel Essien"],"UniqueName":["kingsleyumani@aksu.edu.ng","aniefiokotu@gmail.com","zokkaman@yahoo.com"],"UniqueDetails":"ubonge80@gmail.com","SendMailUnique":"1","FromName":"noreply","Subject":"Online Referee Form","Mail":"..\/..\/portals\/tempPages\/mailhtml.html","SecEdu":[{"col1":"SSCE Neco","col2":"1\/5\/2003","col3":"Government secondary School Afaha Eket"},{"col1":"","col2":"","col3":""},{"col1":"","col2":"","col3":""}],"TerEdu":[{"col1":"","col2":"","col3":""},{"col1":"","col2":"","col3":""},{"col1":"","col2":"","col3":""}],"UniEdu":[{"col1":"BSc","col2":"1\/2\/2013","col3":"University Of Calabar,calabar"},{"col1":"","col2":"","col3":""},{"col1":"","col2":"","col3":""}],"Referee":[{"col1":"kingsley Umani","col2":"08068023280","col3":"kingsleyumani@aksu.edu.ng"},{"col1":"Aniefiok Otu","col2":"08063534152","col3":"aniefiokotu@gmail.com"},{"col1":"Emmanuel Essien","col2":"08023532735","col3":"zokkaman@yahoo.com"}],"Credentials":"..\/..\/epconfig\/UserImages\/PUTME\/ubonge80@gmail.com_credential_0.jpg;..\/..\/epconfig\/UserImages\/PUTME\/ubonge80@gmail.com_credential_1.jpg;..\/..\/epconfig\/UserImages\/PUTME\/ubonge80@gmail.com_credential_2.jpg;"}
}
?>