<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
*chart/grafik = PLUG_CHART
 * datatable    = PLUG_DATATABLE
 * checkbox     = PLUG_CHECKBOX
 * dropdown     = PLUG_DROPDOWN
 * date/tanggal = PLUG_DATE
 * daterange    = PLUG_DATERANGE
 * textarea_word= PLUG_TEXTAREA
 * time/jam     = PLUG_TIME
*/
class Sample extends CI_Controller 
{
	public function index()
	{
		$data['content_view'] = 'sample/v_dashboard';
		$data['title_page'] = 'Dashboard';
		// mode halaman
		$data['mode'] = '';
		// active menu
		$data['active_menu'] = 'dashboard';
		$data['active_sub_menu'] = '';
		$data['active_menu_level'] = '';
		$data['plugins'] = [];
		$data['script_js'] = 'dashboard';
		$this->load->view('v_index',$data);
	}
	// menu multi level
	public function multilevel_menu()
	{
		$data['content_view'] = 'sample/v_sample';
		$data['title_page'] = 'Contoh Menu Multi Level';
		// mode halaman
		$data['mode'] = '';
		// active menu
		$data['active_menu'] = 'multilevel';
		$data['active_sub_menu'] = 'menu2';
		$data['active_menu_level'] = 'menu1';
		$data['plugins'] = [];
		$data['script_js'] = '';
		$this->load->view('v_index',$data);
	}
	// sample page controller
	public function page()
	{
		$data['content_view'] = 'sample/v_page';
		$data['title_page'] = 'Contoh Halaman';
		// mode halaman
		$data['mode'] = 'view';
		// active menu
		$data['active_menu'] = 'page';
		$data['active_sub_menu'] = '';
		$data['active_menu_level'] = '';
		$data['plugins'] = [PLUG_DATATABLE];
		$data['script_js'] = 'sample_page';
		$this->load->view('v_index',$data);
	}
	public function add_page()
	{
		$data['content_view'] = 'sample/v_page';
		$data['title_page'] = 'Contoh Halaman Edit';
		// mode halaman
		$data['mode'] = 'add';
		$data['edit_data']='';
		// active menu
		$data['active_menu'] = 'page';
		$data['active_sub_menu'] = '';
		$data['active_menu_level'] = '';
		$data['plugins'] = [];
		$data['script_js'] = 'sample_page';
		$this->load->view('v_index',$data);
	}
	
	// sample edit controller
	public function page_edit()
	{
		$data['content_view'] = 'sample/v_page';
		$data['title_page'] = 'Contoh Halaman Edit';
		// mode halaman
		$data['mode'] = 'edit';
		$data['edit_data']='';
		// active menu
		$data['active_menu'] = 'page';
		$data['active_sub_menu'] = '';
		$data['active_menu_level'] = '';
		$data['plugins'] = 'plugin_1';
		$data['script_js'] = 'sample_page';
		$this->load->view('v_index',$data);
	}

	// sample save controller
	public function save_page()
	{
		// $this->load->model('model_configuration');
		// $this->form_validation->set_rules('item_name_txt','','required');
		// $this->form_validation->set_rules('id_category_txt','','required');
		// $this->form_validation->set_rules('id_subcategory_txt','','required');

		// if($this->form_validation->run()==FALSE){
		// 	$this->session->set_flashdata('message_modal', "Please fill all required field");
		// 	redirect($this->agent->referrer());
		// }else{
			// $save = $this->model_configuration->save_inv_item_data();

			$save = ['status'=>'success', 'message'=>'Simpan Berhasil'];
			if($save['status'] == 'success'){
				$arrMsg = array('sts'=>'1','msg'=>$save['message']);
			}else{
				$arrMsg = array('sts'=>'0','msg'=>$save['message']);
			}

		// }

		$this->session->set_flashdata('message', $arrMsg);
		redirect(base_url('sample/page'));
	}
	// sample delete controller
	public function delete_page(){
		// $this->load->model('');
		// $del = $this->xx->delete_user();
		$del = ['status'=>'success', 'message'=>'Hapus Berhasil'];
		$arrMsg="";
		if($del['status'] == 'success'){
			$arrMsg = array('sts'=>'1','msg'=>$del['message']);
		}else{
			$arrMsg = array('sts'=>'0','msg'=>$del['message']);
		}
		echo json_encode($arrMsg);
	}
	public function form_general()
	{
		$data['content_view'] = 'sample/v_form_general';
		$data['title_page'] = 'Contoh Form General';
		// mode halaman
		$data['mode'] = '';
		// active menu
		$data['active_menu'] = 'form';
		$data['active_sub_menu'] = 'form_general';
		$data['active_menu_level'] = '';
		$data['plugins'] = [];
		$data['script_js'] = '';
		$this->load->view('v_index',$data);
	}
	public function form_advanced()
	{
		$data['content_view'] = 'sample/v_form_advanced';
		$data['title_page'] = 'Contoh Advanced Elements';
		// mode halaman
		$data['mode'] = '';
		// active menu
		$data['active_menu'] = 'form';
		$data['active_sub_menu'] = 'form_advanced';
		$data['active_menu_level'] = '';
		$data['plugins'] = [PLUG_CHECKBOX, PLUG_DROPDOWN, PLUG_DATE, PLUG_DATERANGE, PLUG_TIME];
		$data['script_js'] = 'sample_form';
		$this->load->view('v_index',$data);
	}

	public function form_editor()
	{
		$data['content_view'] = 'sample/v_form_editor';
		$data['title_page'] = 'Contoh Form Editor';
		// mode halaman
		$data['mode'] = '';
		// active menu
		$data['active_menu'] = 'form';
		$data['active_sub_menu'] = 'form_editor';
		$data['active_menu_level'] = '';
		$data['plugins'] = [PLUG_TEXTAREA];
		$data['script_js'] = 'sample_form2';
		$this->load->view('v_index',$data);
	}
}

/* End of file ${TM_FILENAME:${1/(.+)/Sample.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)/Sample/:application/controllers/${1/(.+)/Sample.php/}} */






