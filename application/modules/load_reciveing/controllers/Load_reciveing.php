<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 *
 */
class Load_reciveing extends MX_Controller
{

  public function __construct() {
      parent::__construct();
      $this->load->model('m_reciveing');
  }

  public function index($value='')
  {
    $data['found'] = $this->m_reciveing->reciveingdata();
    $data['breadcrumbs'] = array(
			array (
				'link' => 'welcome',
				'name' => 'Home'
			),
			array (
				'link' => 'load_reciveing',
				'name' => 'Reciveing'
			)
		);
    $data['sub_judul_form']="Reciveing Process";
    $this->template->load('template_frontend','v_index',$data);
  }

  public function add($value='')
  {
    $data['breadcrumbs'] = array(
			array (
				'link' => 'welcome',
				'name' => 'Home'
			),
			array (
				'link' => 'load_reciveing',
				'name' => 'Reciveing'
			),
			array (
				'link' => 'load_reciveing/add',
				'name' => 'Add'
			)
		);
    $data['sub_judul_form']="Reciveing Add New";
    $this->template->load('template_frontend','v_add',$data);
  }
}

?>
