<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('add_model');
		$this->load->helper('form');
		$this->load->helper('url');

	}


	public function index()
	{
		$this->load->view('home_view');
	}

	public function addform()
	{
		$this->load->view('welcome_message');
	}

	public function add(){
		$this->load->view("add_w");
		if($this->input->post("bntsave") != null){
			
			$data = array(
				'id'=> '',
				'user' => $this->input->post("user") ,
				'pass' => $this->input->post("pass") ,
				'status'=> $this->input->post("status")
			);
			$this->db->insert('user', $data);
			redirect("welcome/show", "refresh");
			exit();
		}
	}

	public function update($id){
		$this->load->view("edit_w");
		if($this->input->post("bntsave") != null){
			
			$data = array(
				'user' => $this->input->post("user") ,
				'pass' => $this->input->post("pass") ,
				'status'=> $this->input->post("status")
			);
			$this->db->where('id', $id);
			$this->db->update('user', $data); 
			redirect("welcome/show", "refresh");
			exit();
		}
	}

	public function del($id){
		$this->db->delete('user', array('id'=> $id)); 
		redirect("welcome/show", "refresh");
		exit();
	}
	public function edit($id){
		$sql = "select * from user where id='$id' ";
		$rs=$this->db->query($sql);
		if($rs->num_rows()==0){
			$data['rs']=array();
	}else{
		$data['rs']=$rs->row_array();
	}
	$this->load->view("edit_w", $data);
	}

	public function show(){
		$sql="select * from user";
		$rs=$this->db->query($sql);
		$data['rs']=$rs->result_array();
		$this->load->view("show_w",$data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */