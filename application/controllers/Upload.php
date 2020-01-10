<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    class Upload extends CI_Controller {
    
    
    public function index(){

    $this->load->view('up_view', array('error' => ' ' ));

}


    public function do_upload(){
       $config = array(
       'upload_path' => "./uploads",
       'allowed_types' => "gif|jpg|png|jpeg|PNG|webp",
       'overwrite' => TRUE,
        'max_size' => "5048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
         'max_height' => "5000",
         'max_width' => "5000"
        );

      $this->load->library('upload', $config);
      if($this->upload->do_upload())
      {
       $data = array('upload_data' => $this->upload->data());
             

       $this->load->library('session');
      $img=$this->upload->data("file_name");
       $dis= $this->input->post('discription');
      $session_img=array('img' => $img);
      $session_dis=array('dis' => $dis);
      $this->session->set_userdata($session_img);
      $this->session->set_userdata($session_dis);
      // $this->session->set_userdata($img);
     //  $this->session->set_userdata($dis);
                          
                      
     /*         $this->load->model('upload_model');

             $this->upload_model->insert_data($upload_data);


             //$count= $this->upload_model->countRow();
             $query=$this->db->query("SELECT * from image where id = (select max(id) from image)");
                          
            // print_r($query->result_array());
             //print_r($query->result_array(['file_name']));
             foreach ($query->result_array() as $row)
             {
                     $count=$row['id'];
                     $_SESSION["record"]=$row['id'];
             
                 }



              for($i=1; $i<=10; $i=$i+1){
                $query = $this->db->query("SELECT * FROM image where id=$count");
                    $count=$count-1;
                                     
                 foreach ($query->result_array() as $row)
                 {
                      echo $row['file_name'];
                          $_SESSION["img_".$i] = $row['file_name'];
                          $_SESSION["dis_".$i] = $row['dis'];

                          
                         
                 }         
                              
              }                 
       */        //$yourFile = base_url()."uploads";
             //  session_write_close();
               $this->load->view('videoup_view');
          //     $this->load->view('Upload_success', $data);

       
      
      }
    else
      {
      $error = array('error' => $this->upload->display_errors());
      $this->load->view('nav1_view', $error);
      }
    }




   public function do_upload_video(){
     
    $config = array(
      'upload_path' => "./uploads_video",
      'allowed_types' => "mkv|mp4|avi|wmv|flv",
      'overwrite' => TRUE,
       'max_size' => "200048", // Can be set to particular file size , here it is 2 MB(2048 Kb)
       );

     $this->load->library('upload', $config);
    if($this->upload->do_upload())
     {
      


      $data = array('upload_data' => $this->upload->data());
            

             $data=array(
                          "file_name"=>$this->session->userdata('img'),
                           "dis"=>$this->session->userdata('dis'),
                           "video_name"=>$this->upload->data("file_name")
                          
              );
            
      
             $this->load->model('upload_model');

            $this->upload_model->insert_data($data);




    $query=$this->db->query("SELECT * from image where id = (select max(id) from image)");
                          
    // print_r($query->result_array());
     //print_r($query->result_array(['file_name']));
     foreach ($query->result_array() as $row)
     {
             $count=$row['id'];
            // $_SESSION["record"]=$row['id'];
     
         }



      for($i=1; $i<=10; $i=$i+1){
        $query = $this->db->query("SELECT * FROM image where id=$count");
            $count=$count-1;
                             
         foreach ($query->result_array() as $row)
         {
              echo $row['file_name'];
                  $_SESSION["img_".$i] = $row['file_name'];
                  $_SESSION["dis_".$i] = $row['dis'];
                  $_SESSION["vid_".$i] = $row['video_name'];

                  
                 
         }         
                      
      }
   
        
      $this->load->view('image_view');



    
  


    




}
    }
  }
