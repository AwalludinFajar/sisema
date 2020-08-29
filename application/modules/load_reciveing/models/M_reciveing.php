<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class M_reciveing extends CI_Model
{

  function __construct(){
    parent::__construct();
  }

  public function reciveingdata($where = NULL)
  {
    $this->db->select('id','no_rv','name_user_reciveing','date_reciveing','keterangan');
    $this->db->from('tab_recive_storage');
    if(isset($where) or $where!=NULL){
      $this->db->where('no_rv',$where);
    }
    $query = $this->db->get();
    if($query->num_rows()>0){
      if(isset($where) or $where!=NULL){
          return $query->row();
      }else{
          return $query->result();
      }
    }
    return FALSE;
  }
}

?>
