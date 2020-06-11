<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accomodation extends CI_Controller {

    public function upload_handler1(){

               
        $record_id=$this->input->post('record_id',TRUE);
      
       $token = uniqidReal(4);

        $image_path = realpath(APPPATH . '../assets/img/properties/');
        $config['upload_path']          = $image_path;
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
        $config['max_size']             = 300;
        //$config['overwrite']             = true;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768; 
       // $config['file_name']="";
       
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $x = array('img1','img2','img3','img4','img5');
        $config['file_name'] = $token."_". $record_id. ".jpg";
        foreach($x as $k=>$y){
           
            $this->upload->do_upload($y);
           
            echo $this->upload->data('file_name');
          //  echo $config['file_name'];
        }
        
        return;
    }
    public function upload_handler2(){

               
        $record_id=$this->input->post('record_id',TRUE);
      
       $token = uniqidReal(4);

        $image_path = realpath(APPPATH . '../assets/img/properties/');
        $config['upload_path']          = $image_path;
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
        $config['max_size']             = 300;
        //$config['overwrite']             = true;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768; 
       // $config['file_name']="";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $x = array('img1','img2','img3','img4','img5');
        $config['file_name'] = $token."_". $record_id. ".jpg";
        foreach($x as $k=>$y){
           
            $this->upload->do_upload($y);
           
            echo $this->upload->data('file_name');
          //  echo $config['file_name'];
        }
        
        return;
    }
    public function upload_handler3(){

               
        $record_id=$this->input->post('record_id',TRUE);
      
       $token = uniqidReal(4);

        $image_path = realpath(APPPATH . '../assets/img/properties/');
        $config['upload_path']          = $image_path;
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
        $config['max_size']             = 300;
        //$config['overwrite']             = true;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768; 
       // $config['file_name']="";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $x = array('img1','img2','img3','img4','img5');
        $config['file_name'] = $token."_". $record_id. ".jpg";
        foreach($x as $k=>$y){
           
            $this->upload->do_upload($y);
           
            echo $this->upload->data('file_name');
          //  echo $config['file_name'];
        }
        
        return;
    }
    public function upload_handler4(){

               
        $record_id=$this->input->post('record_id',TRUE);
      
       $token = uniqidReal(4);

        $image_path = realpath(APPPATH . '../assets/img/properties/');
        $config['upload_path']          = $image_path;
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
        $config['max_size']             = 300;
        //$config['overwrite']             = true;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768; 
       // $config['file_name']="";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $x = array('img1','img2','img3','img4','img5');
        $config['file_name'] = $token."_". $record_id. ".jpg";
        foreach($x as $k=>$y){
           
            $this->upload->do_upload($y);
           
            echo $this->upload->data('file_name');
          //  echo $config['file_name'];
        }
        
        return;
    }
    public function upload_handler5(){

               
        $record_id=$this->input->post('record_id',TRUE);
      
       $token = uniqidReal(4);

        $image_path = realpath(APPPATH . '../assets/img/properties/');
        $config['upload_path']          = $image_path;
        $config['allowed_types']        = 'jpg|png|jpeg|gif';
        $config['max_size']             = 300;
        //$config['overwrite']             = true;
        //$config['max_width']            = 1024;
        //$config['max_height']           = 768; 
       // $config['file_name']="";
        $this->load->library('upload', $config);
        $this->upload->initialize($config);

        $x = array('img1','img2','img3','img4','img5');
        $config['file_name'] = $token."_". $record_id. ".jpg";
        foreach($x as $k=>$y){
           
            $this->upload->do_upload($y);
           
            echo $this->upload->data('file_name');
          //  echo $config['file_name'];
        }
        
        return;
    }
}
