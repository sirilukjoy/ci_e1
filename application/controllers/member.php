<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

    public function index()
    {
        $this->load->view('booking');
    }
    public function add(){
        $data=array(
            'image'=>$this->input->get('image'),
            'license_plate'=>$this->input->get('license_plate'),
            'province'=>$this->input->get('province'),
            'type_car'=>$this->input->get('type_car'),
            'status'=>$this->input->get('status'),
            'fuel'=>$this->input->get('fuel'),
            'generation'=>$this->input->get('generation'),
            'brand'=>$this->input->get('brand'),
            'price'=>$this->input->get('price'),
            'color'=>$this->input->get('color'),
            'date_buy'=>$this->input->get('date_buy'),
        );
        $this->db->insert("table_car", $data);
        redirect("member/show","refresh");
        exit();

    }
    public function show(){
        $sql = "SELECT * FROM table_car";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('cards',$data);
        //$this->load->view('footer_view');
    }
    public function del($id){
		$this->db->delete('table_car', array('car_id'=> $id)); 
		redirect("member/show", "refresh");
		exit();
    }
    public function edit($id){
        $sql ="select * from table_car where car_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('edit_show_detail',$data);
    }
    public function update($id){
        $data=array(
            'image'=>$this->input->post('image'),
            'license_plate'=>$this->input->post('license_plate'),
            'province'=>$this->input->post('province'),
            'type_car'=>$this->input->post('type_car'),
            'status'=>$this->input->post('status'),
            'fuel'=>$this->input->post('fuel'),
            'generation'=>$this->input->post('generation'),
            'brand'=>$this->input->post('brand'),
            'price'=>$this->input->post('price'),
            'color'=>$this->input->post('color'),
            'date_buy'=>$this->input->post('date_buy')
        );
        $this->db->where('car_id', $id);
        $this->db->update('table_car', $data); 
		redirect("member/show", "refresh");
		exit();

    }
    public function login_regiter(){
        $this->load->view('login_regiter');
    }
    public function login_1(){//echo "login 1";
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $que=$this->db->query("select * from member where username='".$username."' and password='".$password."'");
       // $num=$que->num_rows();
       // $data['rs']=$que->result_array();
       // echo $num;
        //if($num!=0){
          //// echo "member";
          $sql = "SELECT * FROM table_car";
          $rs = $this->db->query($sql);
           $data ['rs'] = $rs->result_array();
           $this->load->view('booking_user',$data);
        //}else{echo "no data";}
       //exit();
    }
    public function login(){
        $this->load->view('login');
    }
    public function login_2(){
        $username=$this->input->post('username');
        $password=$this->input->post('password');
        $que=$this->db->query("select * from member where username='".$username."' and password='".$password."'");
        //$num=$que->num_rows();
        //if($num!=0){
           // $data['rs']=$que->result_array();
           $sql = "SELECT * FROM table_car";
           $rs = $this->db->query($sql);
            $data ['rs'] = $rs->result_array();
            $this->load->view('booking',$data);
        //}else{echo "no data";}
        //exit();
    }
    public function logout(){
        $this->session->session_destroy();
        redirect("login");
        //$this->load->view('footer_view');
    }
    public function sa(){
        $this->load->view('testcalendar');
        //$this->load->view('footer_view');
    }
    public function card(){
         $this->load->view('cards');
     }
    public function adddetail(){
         $this->load->view('add_show_detail');
     }
    public function detail($id){
        $sql ="select * from table_car where car_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('show_detail_admin',$data);
    }
    public function question(){
        $sql = "SELECT * FROM table_car,booking_car  where booking_car.booking_id=table_car.car_id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('question',$data);
        //$this->load->view('footer_view');
    }
    public function allow(){
        $sql = "SELECT * FROM booking_car,table_car where booking_car.booking_id=table_car.car_id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('allow',$data);
        //$this->load->view('footer_view');
    }
    public function detail_allow($id){
        $sql ="SELECT * from booking_car where booking_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('allow_detail_admin',$data);
    }
    public function edit_allow($id){
        $sql ="select * from booking_car where booking_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('allow_detail_admin',$data);
    }
    public function update_allow($id){
        $data=array(
            'status_allow'=>$this->input->post('status_allow'),
        );
        $this->db->where('booking_id', $id);
        $this->db->update('booking_car', $data); 
		redirect("member/allow", "refresh");
		exit();

    }
    public function del_allow($id){
		$this->db->delete('table_car', array('car_id'=> $id)); 
		redirect("member/allow", "refresh");
		exit();
    }
    public function booking(){
        $sql = "SELECT * FROM table_car";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('booking',$data);
        //$this->load->view('footer_view');
    }
    public function booking_detail($id){
        $sql ="select * from table_car where car_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('booking_detail',$data);
    }
    public function update_booking($id){
        $data=array(
            'status'=>$this->input->post('status')
        );
        $this->db->where('car_id', $id);
        $this->db->update('table_car', $data); 
		redirect("member/detail_booking_car", "refresh");
		exit();

    }
    public function detail_booking_car(){
        $this->load->view('detail_booking_car');
        //$this->load->view('footer_view');
    }
    public function add_booking(){
        $data=array(
            'borrow'=>$this->input->get('borrow'),
            'return'=>$this->input->get('return'),
            'subject'=>$this->input->get('subject'),
            'location'=>$this->input->get('location'),
            'status_allow'=>$this->input->get('status_allow')
        );
        $this->db->insert("booking_car", $data);
        redirect("member/booking","refresh");
        exit();

    }
    public function return_car(){
        $sql = "SELECT * FROM table_car";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

        $this->load->view('return_car',$data);
    }
    public function return_car_detail($id){
        $sql ="select * from table_car where car_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('return_car_detail',$data);
    }
    public function update_return($id){
        $data=array(
            'status'=>$this->input->post('status')
        );
        $this->db->where('car_id', $id);
        $this->db->update('table_car', $data); 
		redirect("member/return_car", "refresh");
		exit();

    }
    public function user(){
        $sql = "SELECT * FROM member";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('user',$data);
        //$this->load->view('footer_view');
    }
    public function update_user($id){
        $data=array(
            'name'=>$this->input->post('name'),
            'lastname'=>$this->input->post('lastname'),
            'email'=>$this->input->post('email'),
            'tel'=>$this->input->post('tel'),
            'address'=>$this->input->post('address'),
            'username'=>$this->input->post('username'),
            'password'=>$this->input->post('password'),
            'status'=>$this->input->post('status')
        );
        $this->db->where('member_id', $id);
        $this->db->update('member', $data); 
		redirect("member/user", "refresh");
		exit();

    }
    public function edit_user($id){
        $sql ="select * from member where member_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('edit_user_user',$data);
    }
    public function add_user_add(){
        $data=array(
            'name'=>$this->input->get('name'),
            'lastname'=>$this->input->get('lastname'),
            'email'=>$this->input->get('email'),
            'tel'=>$this->input->get('tel'),
            'address'=>$this->input->get('address'),
            'username'=>$this->input->get('username'),
            'password'=>$this->input->get('password'),
            'status'=>$this->input->get('status')
        );
        $this->db->insert("member", $data);
        redirect("member/user","refresh");
        exit();
    }
    public function del_user($id){
		$this->db->delete('member', array('member_id'=> $id)); 
		redirect("member/user", "refresh");
		exit();
    }
    public function add_user(){
        $this->load->view('add_user');
    }
    public function data_car(){
        $sql = "SELECT * FROM table_car";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('data_car',$data);
        //$this->load->view('footer_view');
    }
    public function defective_car(){
        $sql = "SELECT * FROM table_defective,table_car";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('defective_car',$data);
        //$this->load->view('footer_view');
    }
    public function fuel_car(){
        $sql = "SELECT * FROM table_fuel";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('fuel_car',$data);
        //$this->load->view('footer_view');
    }
    public function add_fuel(){
        $this->load->view('add_fuel_car');
    }
    public function add_fuel_add(){
        $data=array(
            'type_fuel'=>$this->input->get('type_fuel'),
            'price_fuel'=>$this->input->get('price_fuel')
        );
        $this->db->insert("table_fuel", $data);
        redirect("member/fuel_car","refresh");
        exit();
    }
    public function update_fuel($id){
        $data=array(
            'type_fuel'=>$this->input->post('type_fuel'),
            'price_fuel'=>$this->input->post('price_fuel')
        );
        $this->db->where('fuel_id', $id);
        $this->db->update('table_fuel', $data); 
		redirect("member/fuel_car", "refresh");
		exit();

    }
    public function edit_fuel($id){
        $sql ="select * from table_fuel where fuel_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('edit_fuel_car',$data);
    }
    public function del_fuel($id){
		$this->db->delete('table_fuel', array('fuel_id'=> $id)); 
		redirect("member/fuel_car", "refresh");
		exit();
    }
    public function company_repair(){
        $sql = "SELECT * FROM table_company_repair";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('company_repair',$data);
        //$this->load->view('footer_view');
    }
    public function add_company(){
        $this->load->view('add_company_repair');
    }
    public function add_company_add(){
        $data=array(
            'type_company'=>$this->input->get('type_company'),
            'name'=>$this->input->get('name'),
            'tel'=>$this->input->get('tel'),
            'address'=>$this->input->get('address')
        );
        $this->db->insert("table_company_repair", $data);
        redirect("member/company_repair","refresh");
        exit();
    }
    public function update_company($id){
        $data=array(
            'type_company'=>$this->input->post('type_company'),
            'name'=>$this->input->post('name'),
            'tel'=>$this->input->post('tel'),
            'address'=>$this->input->post('address')
        );
        $this->db->where('company_id', $id);
        $this->db->update('table_company_repair', $data); 
		redirect("member/company_repair", "refresh");
		exit();

    }
    public function edit_company($id){
        $sql ="select * from table_company_repair where company_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('edit_company_repair',$data);
    }
    public function del_company($id){
		$this->db->delete('table_company_repair', array('company_id'=> $id)); 
		redirect("member/company_repair", "refresh");
		exit();
    }






    public function booking_user(){
        $sql = "SELECT * FROM table_car";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

        $this->load->view('booking_user',$data);
    }
    public function allow_user(){
        $sql = "SELECT * FROM booking_car,table_car where booking_car.booking_id=table_car.car_id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('allow_user',$data);
        //$this->load->view('footer_view');
    }
    public function question_user(){
        $sql = "SELECT * FROM table_car,booking_car  where booking_car.booking_id=table_car.car_id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->result_array();

       // $this->load->view('head_view');
        $this->load->view('question_user',$data);
        //$this->load->view('footer_view');
    }
    public function detail_car_user($id){
        $sql ="select * from table_car where car_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('show_detail_user',$data);
    }
    public function booking_detail_user($id){
        $sql ="select * from table_car where car_id=$id";
        $rs = $this->db->query($sql);
        $data ['rs'] = $rs->row_array();
        $this->load->view('booking_detail_user',$data);
    }
    public function update_booking_user($id){
        $data=array(
            'status'=>$this->input->post('status')
        );
        $this->db->where('car_id', $id);
        $this->db->update('table_car', $data); 
		redirect("member/detail_booking_car_user", "refresh");
		exit();

    }
    public function detail_booking_car_user(){
        $this->load->view('detail_booking_car_user');
    }
    public function add_booking_user(){
        $data=array(
            'borrow'=>$this->input->get('borrow'),
            'return'=>$this->input->get('return'),
            'subject'=>$this->input->get('subject'),
            'location'=>$this->input->get('location'),
            'status_allow'=>$this->input->get('status_allow')
        );
        $this->db->insert("booking_car", $data);
        redirect("member/booking_user","refresh");
        exit();
    }
    public function regiter(){
        $this->load->view('regiter');
    }
    public function add_regiter_add(){
        $data=array(
            'name'=>$this->input->get('name'),
            'lastname'=>$this->input->get('lastname'),
            'email'=>$this->input->get('email'),
            'tel'=>$this->input->get('tel'),
            'address'=>$this->input->get('address'),
            'username'=>$this->input->get('username'),
            'password'=>$this->input->get('password'),
            'status'=>$this->input->get('status')
        );
        $this->db->insert("member", $data);
        redirect("member/page_login","refresh");
        exit();
    }
}