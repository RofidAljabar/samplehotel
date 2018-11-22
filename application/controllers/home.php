<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public $fileName;


	public function index(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
		// $curl_handle = curl_init();
		// curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHumanResources/format/json');
		// curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		// curl_setopt($curl_handle, CURLOPT_POST, 0);
		// $buffer = curl_exec($curl_handle);
		// curl_close($curl_handle);
		// $result = json_decode($buffer, true);
		// $data['hr'] = $result;

  //     $this->load->view('pages/home', $data);


        $this->getToken();
        $token = $this->session->userdata('token');

        $data =  array(
            'first' => '2018-11-01 00:00:00',
            'last' => '2018-11-30 23:59:59',
            'siteId' => '',
            'siteProvince' => '',
            'tagIds' => array(),
            'untagged' => 'false',
            'tagDate' => '',
            'siteGroup' => '',
            'brand' => '',
            'categoryId' => ''
        );
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, 'http://sentral.co.id/erp/backend-2.0/public/index.php/api/v2/action/Report/getReportProductSales/0');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array("token:$token"));
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($data));
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
        $response = json_decode($buffer);
        if(isset($response->status) && $response->status == 'success'){
            $data['reportAR'] = $response->list;
        }else{
            $data['reportAR'] = [];
        }


      $this->load->view('pages/header');
      $this->load->view('pages/home',$data);
      $this->load->view('pages/footer');   
    }
	}

  // Start CRUD Hotel Information

  public function HotelInformation(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHumanResources/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCity/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvince/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountry/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);


      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHotelInformation/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityHotel/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceHotel/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $curl_handle8 = curl_init();
      curl_setopt($curl_handle8, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountryHotel/format/json');
      curl_setopt($curl_handle8, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle8, CURLOPT_POST, 0);
      $buffer8 = curl_exec($curl_handle8);
      curl_close($curl_handle8);
      $result8 = json_decode($buffer8, true);

      $curl_handle9 = curl_init();
      curl_setopt($curl_handle9, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountryHotelModal/format/json');
      curl_setopt($curl_handle9, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle9, CURLOPT_POST, 0);
      $buffer9 = curl_exec($curl_handle9);
      curl_close($curl_handle9);
      $result9 = json_decode($buffer9, true);


      $data['hr']       = $result;
      $data['city']     = $result2;
      $data['province'] = $result3;
      $data['country']  = $result4;
      // Start Hotel Information
      $data['hi']       = $result5;
      $data['ch']       = $result6;
      $data['ph']       = $result7;
      $data['coh']      = $result8;
      $data['cohm']     = $result9;
      // End Hotel Information

      $this->load->view('pages/header');
      $this->load->view('pages/hotel_information', $data);
      $this->load->view('pages/footer');

    }

  }

  public function ganti_password()
  {
    
    // $username = $this->session->userdata('name_session');
    // $this->load->set_error_delimiters
    $this->load->library('form_validation');
    $username = $this->session->userdata('admin_session');
    
     $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/changepsw/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

    $this->form_validation->set_rules('old_pass', 'Old Password', 'required');
    $this->form_validation->set_rules('new_pass', 'New Password', 'required');
    $this->form_validation->set_rules('re_new_pass', 'Re Password', 'required|matches[newpass]');

    if($this->form_validation->run() == false)
    {
      // echo "form is validated";
      $this->load->view('pages/header');
      $this->load->view('pages/changepsw');
      $this->load->view('pages/footer');
    }else{
      $data = array(
        'password' => md5($this->input->post('new_pass'))
      );
    }
      // $this->load->view('pages/header');
      // $this->load->view('pages/changepsw');
      // $this->load->view('pages/footer');

  }

   public function getDetailNew()
  {
    $id_detail_guest_type = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailNew/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail_guest_type' => $id_detail_guest_type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['CityNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function getCityNew()
  {
    $id_city = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityNew/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['CityNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function getProvinceNew()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceNew/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['ProvinceNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function getCityRegistration()
  {
    $id_city = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityRegistration/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['CityNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function getProvinceRegistration()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceRegistration/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['ProvinceNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function getNoRoomRegistration()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoomRegistration/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_room' => $id_room
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['ProvinceNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function getCityGuest()
  {
    $id_city = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    print_r($buffer);

  }

  public function getProvinceGuest()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    print_r($buffer);

  }

   public function getPriceRoomGuest()
  {
    $id_regist = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getPriceRoomGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_regist' => $id_regist
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    print_r($buffer);

  }

  public function getCityHIModal()
  {
    $id_city = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityHIModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    print_r($buffer);

  }

  public function getProvinceHIModal()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceHIModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    print_r($buffer);

  }

  public function getCityModal()
  {
    $id_city = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    print_r($buffer);

  }

  public function getProvinceModal()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    // $data['ProvinceNew'] = $result;

    // echo json_encode($data);
    print_r($buffer);

  }

  public function addHotelInformation(){

    $company_name    = $this->input->post('company_name');
    $email           = $this->input->post('email');
    $website         = $this->input->post('website');
    $phone           = $this->input->post('phone');
    $fax             = $this->input->post('fax');
    $address         = $this->input->post('address');
    $city            = $this->input->post('Icity');
    $zip_code        = $this->input->post('zip_code');
    $province        = $this->input->post('Iprovince');
    $country         = $this->input->post('Icountry');

    $curl_handle     = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addHotelInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'company_name' => $company_name,
      'email'        => $email,
      'website'      => $website,
      'phone'        => $phone,
      'fax'          => $fax,
      'address'      => $address,
      'city'         => $city,
      'zip_code'     => $zip_code,
      'province'     => $province,
      'country'      => $country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/HotelInformation');
  }

  

  public function editHotel()
  {
    $id_hotel = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editHotelInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_hotel' => $id_hotel
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editHotel'] = $result;

    echo json_encode($data);

  }

  public function editSegmentation()
  {
    $id_segment = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editSegment/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_segment' => $id_segment
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editSegment'] = $result;

    echo json_encode($data);

  }

  public function editGuestType()
  {
    $id_guest_type = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editGuestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_guest_type' => $id_guest_type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editGuestType'] = $result;

    echo json_encode($data);

  }

  public function editDetailGuestType()
  {
    $id_detail_guest_type = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editDetailGuestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail_guest_type' => $id_detail_guest_type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editDetailGuestType'] = $result;

    echo json_encode($data);

  }

  public function updateHotel()
  {
    $company_name     = $this->input->post('company_name');
    $email            = $this->input->post('email');
    $website          = $this->input->post('website');
    $phone            = $this->input->post('phone');
    $fax              = $this->input->post('fax');
    $address          = $this->input->post('address');
    $city             = $this->input->post('cityhi_modal');
    $zip_code         = $this->input->post('zip_code');
    $province         = $this->input->post('provincehi_modal');
    $country          = $this->input->post('countryhi_modal');
    $id_hotel         = $this->input->post('id_hotel');

    $curl_handle      = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateHotelInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_hotel'          => $id_hotel,
      'company_name'      => $company_name,
      'email'             => $email,
      'website'           => $website,
      'phone'             => $phone,
      'fax'               => $fax,
      'address'           => $address,
      'cityhi_modal'      => $city,
      'zip_code'          => $zip_code,
      'provincehi_modal'  => $province,
      'countryhi_modal'   => $country
    ));
    $buffer           = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result           = json_decode($buffer, true);
    
    redirect('home/HotelInformation');
  }

  function hapusHotelInformation()
    {
       $id_hotel      = $this->input->post('id');
       $curl_handle   = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusHotelInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_hotel'      => $id_hotel
    ));
    $buffer           = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result           = json_decode($buffer, true);
    echo $result;  
    }

    public function editGuest()
  {
    $id_regist = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_regist' => $id_regist
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editGuest'] = $result;

    echo json_encode($data);

  }

    function hapusGuest()
    {
       $id_regist     = $this->input->post('id');
       $curl_handle   = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_regist'     => $id_regist
    ));
    $buffer           = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result           = json_decode($buffer, true);
    echo $result;  
    }


    public function editRegist()
  {
    $id_regist = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editRegist/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_regist' => $id_regist
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editRegist'] = $result;

    echo json_encode($data);

  }
  // End CRUD Hotel Information

// Master Tax
public function tax(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTax/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['mtax'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/tax', $data);
      $this->load->view('pages/footer');

    }

  }

public function addTax(){

    $nama            = $this->input->post('nama');
    $nominal           = $this->input->post('nominal');

    $curl_handle     = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addTax/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'nama'           => $nama,
      'nominal'        => $nominal
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/tax');
  }

public function editTax()
  {
    $id = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editTax/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id' => $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editTax'] = $result;

    echo json_encode($data);

  }

  public function updateTax()
  {
    $nama     = $this->input->post('nama_modal');
    $nominal            = $this->input->post('nominal_modal');
    $id_tax         = $this->input->post('id_tax');

    $curl_handle      = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateTax/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_tax'          => $id_tax,
      'nama'      => $nama,
      'nominal'   => $nominal
    ));
    $buffer           = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result           = json_decode($buffer, true);
    
    redirect('home/tax');
  }

  function hapusTax()
    {
      $id   = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusTax/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id' => $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

// END Master Tax



// START MASTER PRICE MANAGEMENT
public function PriceManagement(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getPriceManagement/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['mtax'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/tax', $data);
      $this->load->view('pages/footer');

    }

  }
// END MASTER PRICE MANAGEMENT
/*-------------------------------------------------------------------------------------------------------------------------------*/

    // Start CRUD Country, Province, City

      public function inputHotel(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getinputHotel/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getInputProvinceHotel/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getInputCountryHotel/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);    

      $data['ic'] = $result;
      $data['iph'] = $result2;
      $data['icohh'] = $result3;      

      $this->load->view('pages/header');
      $this->load->view('pages/input_hotel', $data);
      $this->load->view('pages/footer');

    }

  }

  public function addinputCityHotel(){
    $name_city = $this->input->post('city');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addinputCityHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_city' => $name_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/inputHotel');

  }

  public function ubahCityHotel()
  {
    $id_city = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahCityHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahCityHotel'] = $result;

    echo json_encode($data);

  }

  public function gettypekamar(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/gettypekamar/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);


      $data['gettyperooms'] = $result;

      // $result = array();

      // foreach($rooms as $room) {
      //   $r = new Room();
      //   $r->id_tipe = $room['id_tipe'];
      //   $r->dsc_tipe = $room['dsc_tipe'];
      //   $result[] = $r;
      //   }
      //   echo json_encode($result);
}
}

  public function updateCityHotel()
  {
    $name_city = $this->input->post('name_city_edit');
    $id_city = $this->input->post('id_city');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateCityHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city,
      'name_city'=>$name_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/inputHotel');
  }

  function hapusInputCityHotel()
    {
      $id_city = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusInputCityHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_city' => $id_city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    public function addProvinceHotel(){
    $name_province = $this->input->post('province');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addProvinceHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_province' => $name_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/inputHotel');

  }

   public function ubahProvinceHotel()
  {
    $id_province = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahProvinceHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahProvinceHotel'] = $result;

    echo json_encode($data);

  }

  public function updateProvinceHotel()
  {
    $name_province = $this->input->post('name_province');
    $id_province = $this->input->post('id_province');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateProvinceHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province'   => $id_province,
      'name_province' => $name_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/inputHotel');
  }

  function hapusProvinceHotel()
    {
      $id_province = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusProvinceHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_province' => $id_province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    public function addCountryHotel(){
    $name_country = $this->input->post('country');

    $curl_handle  = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addCountryHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_country' => $name_country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/inputHotel');

  }

  public function ubahCountryHotel()
  {
    $id_country  = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahCountryHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_country' => $id_country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahCountryHotel'] = $result;

    echo json_encode($data);

  }

  public function updateCountryHotel()
  {
    $name_country = $this->input->post('name_country');
    $id_country   = $this->input->post('id_country');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateCountryHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_country'   => $id_country,
      'name_country' => $name_country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/inputHotel');
  }

  function hapusCountryHotel()
    {
    $id_country = $this->input->post('id');
    
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusCountryHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_country' => $id_country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }


    // End CRUD Country, Province, City

/* -----------------------------------------------------------------------------------------------------------------------------*/

    // Start User dan Role Management

    public function UserManagement(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCourse/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getChapter/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getUserHotel/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRoleHotel/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNewRole/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);
      
      $data['course'] = $result;
      $data['chapter'] = $result2;
      $data['user'] = $result3;
      $data['role'] = $result4;
      $data['newrole'] = $result5;

      $this->load->view('pages/header');
      $this->load->view('pages/user_management',$data);
      $this->load->view('pages/footer');

    }

  }

  public function Promo(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getPromo/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);
      
      $data['promo'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/promo_management',$data);
      $this->load->view('pages/footer');

    }

  }

  public function addPromo(){

    $name_promo      = $this->input->post('name_promo');
    $status_promo    = $this->input->post('status_promo');
    $start_promo     = $this->input->post('start_promo');
    $end_promo       = $this->input->post('end_promo');
    $code_promo       = $this->input->post('code_promo');

    $curl_handle     = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addPromo/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_promo'   => $name_promo,
      'status_promo' => $status_promo,
      'start_promo'  => $start_promo,
      'end_promo'    => $end_promo,
      'code_promo'   => $code_promo
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/Promo');
  }

  public function editPromo()
  {
    $id = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editPromo/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id' => $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editPromo'] = $result;

    echo json_encode($data);

  }

  public function updatePromo()
  {
    $name_promo        = $this->input->post('name_promo_modal');
    $status_promo      = $this->input->post('status_promo_modal');
    $start_promo       = $this->input->post('start_promo_modal');
    $end_promo         = $this->input->post('end_promo_modal');
    $code_promo        = $this->input->post('code_promo_modal');
    $id                = $this->input->post('id_promo_modal');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updatePromo/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_promo_modal'     => $id,
      'name_promo_modal'   => $name_promo,
      'status_promo_modal' => $status_promo,
      'start_promo_modal'  => $start_promo,
      'end_promo_modal'    => $end_promo,
      'code_promo_modal'   => $code_promo
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/Promo');
  }

  public function addUser(){

    $this->load->helper(array('form','file'));

                $this->load->library('upload');

                // $nmfile = "user"; //nama file saya beri nama langsung dan diikuti fungsi time

                $config = array();

                $config['upload_path'] = './assets/foto'; //path folder

                $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

                $config['max_size'] = '10096'; //maksimum besar file 5M

                $config['overwrite'] = FALSE;  

    // $this->load->library('upload', $config);

    $this->upload->initialize($config);

    if( ! $this->upload->do_upload("user_photo")){

    //echo the errors
    $this->upload->display_errors();
    }
    $file_name = $this->upload->file_name;

    $role         = $this->input->post('role');
    // $user_photo   = $this->input->post('user_photo');
    $full_name    = $this->input->post('full_name');
    $email        = $this->input->post('email');
    $mobile_phone = $this->input->post('mobile_phone');
    // $password = $this->input->post('password');
    // $re_password = $this->input->post('re_password');

     $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addUser/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'role'         => $role,
      'user_photo'   => $file_name,
      'full_name'    => $full_name,
      'email'        => $email,
      'mobile_phone' => $mobile_phone,
      'password'     => md5(hoteluser),
      're_password'  => md5(hoteluser)
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/UserManagement');
  }


  public function laporanPDF(){

    $idReg = $this->input->get('idreg');

       $curl_handlepdf = curl_init();
      curl_setopt($curl_handlepdf, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getlaporanPDF/format/json');
      curl_setopt($curl_handlepdf, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handlepdf, CURLOPT_POST, 1);
      curl_setopt($curl_handlepdf, CURLOPT_POSTFIELDS, array(
      'idReg'         => $idReg
       ));
      $bufferpdf = curl_exec($curl_handlepdf);
      curl_close($curl_handlepdf);
      $resultpdf = json_decode($bufferpdf, true);
      $resultpdf;

      
       $curl_handlepdf1 = curl_init();
      curl_setopt($curl_handlepdf1, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHeightfasilitas/format/json');
      curl_setopt($curl_handlepdf1, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handlepdf1, CURLOPT_POST, 0);     
      $bufferpdf1 = curl_exec($curl_handlepdf1);
      curl_close($curl_handlepdf1);
      $resultpdf1 = json_decode($bufferpdf1, true);
      $resultpdf1;
      $itung=count($resultpdf1);

      $curl_handlepdf2 = curl_init();
      curl_setopt($curl_handlepdf2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHotelInformationPDF/format/json');
      curl_setopt($curl_handlepdf2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handlepdf2, CURLOPT_POST, 0);     
      $bufferpdf2 = curl_exec($curl_handlepdf2);
      curl_close($curl_handlepdf2);
      $resultpdf2 = json_decode($bufferpdf2, true);



        $this->load->library('pdf');
        $pdf = new FPDF('p','mm','A4');
        // $pdf->AddFont('arial','','arial.php');
        // ('P','in',array(15,12));
        // membuat halaman baru
        $pdf->AddPage();
        $pdf->Image('assets/img/HMSPDF.png', 160,8,40,25);
        // setting jenis font yang akan digunakan
        $pdf->SetFont('arial','B',15);
        // mencetak string
        foreach ($resultpdf2 as $row){ 
        $pdf->Cell(10,6,$row['company_name'],0,1);
      }

        $pdf->SetFont('helvetica','',9);
        $pdf->Cell(35,4,'Address',0,0);
        $pdf->Cell(2,4,':',0,0);
        foreach ($resultpdf2 as $key) {
        $pdf->Cell(350,4,$row['address'],0,1);
      }

        $pdf->SetFont('helvetica','',9);
        $pdf->Cell(35,4,'Phone',0,0);
        $pdf->Cell(2,4,':',0,0);
        foreach ($resultpdf2 as $key) {
        $pdf->Cell(350,4,$row['phone'],0,1);
      }

        $pdf->SetFont('helvetica','',9);
        $pdf->Cell(35,4,'Website',0,0);
        $pdf->Cell(2,4,':',0,0);
        foreach ($resultpdf2 as $key) {
        $pdf->Cell(350,4,$row['website'],0,1);
      }

        $pdf->SetFont('helvetica','',9);
        $pdf->Cell(35,4,'Email',0,0);
        $pdf->Cell(2,4,':',0,0);
        foreach ($resultpdf2 as $key) {
        $pdf->Cell(350,4,$row['email'],0,1);
      }

        $pdf->SetFont('helvetica','B',16);
        $pdf->Cell(190,8,'','B',6,'L');
        $pdf->Cell(190,10,'GUEST REGISTRATION FORM',0,1, 'C');
        $pdf->Cell(190,0,'','B',6,'L');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,5,'',0,1);

        $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,6,'NAME',0,0);
        $pdf->Cell(3,6,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(95,6,$row['tittle'].". ".$row['first_name']." ".$row['middle_name']." ".$row['last_name'],0,1);
      }
      

        $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'ADDRESS',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(95,8,$row['address'],0,1);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'CITY',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['name_city'],0,0);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'PROVINCE',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(35,8,$row['name_province'],0,1);
      }


       $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'COUNTRY',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['name_country'],0,0);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'ZIP CODE',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(35,8,$row['zip_code'],0,1);
      }


      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'CONTACT',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['phone'],0,0);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'EMAIL',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(35,8,$row['email'],0,1);
      }


       $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'ARRIVAL DATE',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10); 
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['adf_date'],0,0);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'DEPARTURE DATE',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(100,8,$row['adt_date'],0,1);
      }


        $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'PAYMENT',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10); 
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['pay_method'],0,0);
      }

       $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'PRICE',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10); 
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['price_regist'],0,1);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'AGENT',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['name_agent'],0,0);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'GROUP',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(35,8,$row['name_group'],0,1);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'TYPE ROOM',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(70,8,$row['dsc_tipe'],0,0);
      }

      $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(35,8,'NO ROOM',0,0);
        $pdf->Cell(3,8,":",0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(35,8,$row['no_of_room'],0,1);
      }


      

       foreach ($resultpdf1 as $row)

       $ini=ceil($itung/6);
       {
        $pdf->Cell(190,$ini*7,' ', 1 , 1);
       }

       //echo $ini;

       $nilai_kolom = 32;
       $nilai_pindah_baris = 7;
       $countBaru = 1;
       $countBaris = 1;

       $start = 12;
       $end = 126;

        // $pdf->setXY(12,110);
        // $pdf->SetFont('ZapfDingbats','', 10);
        // $pdf->Cell(5,5,' ', 1 , 0);
        // $pdf->SetFont('helvetica','B',10);
        // $pdf->Cell(33,5,$row['dsc_detail'],0,0);

      
       
      
      foreach ($resultpdf1 as $row){

        if ($countBaru == 1) {
          $pdf->setXY($start,$end);
        } elseif ($countBaru > 1 && $countBaru < 7 ) {
          $pdf->setXY($start+=$nilai_kolom,$end);
        } elseif ($countBaru > 6) {
          // pindah baris
          $start = 12;
          $pdf->setXY($start,$end += $nilai_pindah_baris);
          $countBaru = 1;
        } 
        $pdf->SetFont('ZapfDingbats','', 10);
        if($row['addressexists']=='ADA'){
        $pdf->Cell(5,5,4, 1 , 0);}
        else {
        $pdf->Cell(5,5,' ', 1 , 0);
        }


        $pdf->SetFont('helvetica','B',10);
        $pdf->Cell(33,5,$row['DESCDET'],0,0);

        $countBaru++;
      }    


      $pdf->SetFont('helvetica','B',10);
      $pdf->Cell(35,8,'',0,1);


      $pdf->SetFont('helvetica','B',8);
        $pdf->Cell(115,8,'Terms and Condition',0,1);


      $pdf->SetFont('helvetica','',8);
      $pdf->Multicell(0,2,"1. Dilarang Merokok Didalam Kamar\n\n2. Dilarang Membawa Hewan Peliharaan Kedalam Kamar\n\n3. Dilarang Semua dah pokoknya");

        $pdf->Cell(120,15,'',0,0);
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf2 as $row){
        $pdf->Cell(25,70,$row['name_city'],0,0);
        $pdf->Cell(3,70,',',0,0);
      }
        $pdf->SetFont('helvetica','',10);
        foreach ($resultpdf as $row){
        $pdf->Cell(1,70,date('d - m - Y'),0,1);
        $pdf->Cell(130,1,'',0,0);
        $pdf->Cell(100,1,$row['first_name']." ".$row['middle_name']." ".$row['last_name'],0,1);
      }

        $pdf->Output();
    }


  public function ubahUserHotel()
  {
    $id_user = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahUserHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_user' => $id_user
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahUserHotel'] = $result;

    echo json_encode($data);

  }

  public function updateUserHotel()
  {
    $role        = $this->input->post('role');
    $user_photo  = $this->input->post('user_photo');
    $full_name   = $this->input->post('full_name');
    $email       = $this->input->post('email');
    $mobile_phone = $this->input->post('mobile_phone');
    $password    = $this->input->post('password');
    $re_password = $this->input->post('re_password');
    $id_user     = $this->input->post('id_user');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateUserHotel/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_user'     => $id_user,
      'role'        => $role,
      'user_photo'  => $user_photo,
      'full_name'   => $full_name,
      'email'       => $email,
      'mobile_phone' => $mobile_phone,
      'password'    => md5($password),
      're_password' => md5($re_password)
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/UserManagement');
  }

   function hapusUser()
    {
      $id_user = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusUser/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_user' => $id_user
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    function hapusSegment()
    {
      $id_segment = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusSegment/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_segment' => $id_segment
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    function hapusPromo()
    {
      $id_promo = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusPromo/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_promo' => $id_promo
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

     function hapusGuestType()
    {
      $id_guest_type = $this->input->post('id');
      $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusGuestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_guest_type' => $id_guest_type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    function hapusDetailGuestType()
    {
      $id_detail_guest_type = $this->input->post('id');
      $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusDetailGuestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail_guest_type' => $id_detail_guest_type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    //  $data['types'] = $active;

    // $this->session->set_flashdata('active','detail');
    $result = json_decode($buffer, true);
    echo $result;  
    }

    public function addNewGroup(){
    $name_group = $this->input->post('name_group');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addNewGroup/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_group' => $name_group
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/masterGroup');

  }

  public function addNewSegmentation(){
    $name_segment = $this->input->post('name_segment');
    $segment = $this->input->post('segment');


    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addNewSegmentation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      // 'name_segment' => $name_segment,
      'segment'      => $segment

    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/segmentation');

  }

  public function addNewRole(){
    $name_role = $this->input->post('newrole');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addNewRole/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_role' => $name_role
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/UserManagement');

  }


  public function ubahNewRole()
  {
    $id_role = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahNewRole/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_role' => $id_role
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahNewRole'] = $result;

    echo json_encode($data);

  }

  public function updateNewRole()
  {
    $name_role   = $this->input->post('name_role');
    $id_role     = $this->input->post('id_role');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateNewRole/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_role'   => $id_role,
      'name_role' => $name_role
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/UserManagement');
  }

  public function editRole(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/geteditRole/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['editRole'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/editRole', $data);
      $this->load->view('pages/footer');

    }

  }

  function hapusNewRole()
    {
    $id_role = $this->input->post('id');
    
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusNewRole/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_role' => $id_role
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    public function updateMasterAgent()
  {
    $name_agent   = $this->input->post('name_agent_modal');
    $id_agent     = $this->input->post('id_agent_modal');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateMasterAgent/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_agent'   => $id_agent,
      'name_agent' => $name_agent
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/masterAgent');
  }

     function hapusMasterAgent()
    {
    $id_agent = $this->input->post('id');
    
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusMasterAgent/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_agent' => $id_agent
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    public function ubahMasterGroup()
  {
    $id_group = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahMasterGroup/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_group' => $id_group
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahMasterGroup'] = $result;

    echo json_encode($data);

  }

    function hapusMasterGroup()
    {
    $id_group = $this->input->post('id');
    
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusMasterGroup/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_group' => $id_group
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  
    }

    public function ubahMasterAgent()
  {
    $id_agent = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahMasterAgent/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_agent' => $id_agent
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahMasterAgent'] = $result;

    echo json_encode($data);

  }

    public function addNewAgent(){
    $name_agent = $this->input->post('name_agent');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addNewAgent/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'name_agent' => $name_agent
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/masterAgent');

  }


    public function viewProfile(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getviewProfile/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getroleProfile/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $data['vp'] = $result;
      $data['roleprofile'] = $result2;

      $this->load->view('pages/header');
      $this->load->view('pages/view_profile',$data);
      $this->load->view('pages/footer');

    }

  }

   public function ubahviewProfile()
  {
    $id_user = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/ubahviewProfile/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_user' => $id_user
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['ubahviewProfile'] = $result;

    echo json_encode($data);

  }


   public function registrationGuest(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getregistrationGuest/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getIdentityTipe/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountryRegist/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceRegist/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityRegist/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRegionRegist/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatusRegist/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $curl_handle8 = curl_init();
      curl_setopt($curl_handle8, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCurrencyRegist/format/json');
      curl_setopt($curl_handle8, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle8, CURLOPT_POST, 0);
      $buffer8 = curl_exec($curl_handle8);
      curl_close($curl_handle8);
      $result8 = json_decode($buffer8, true);

      $curl_handle9 = curl_init();
      curl_setopt($curl_handle9, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getAgentRegist/format/json');
      curl_setopt($curl_handle9, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle9, CURLOPT_POST, 0);
      $buffer9 = curl_exec($curl_handle9);
      curl_close($curl_handle9);
      $result9 = json_decode($buffer9, true);

      $curl_handle10 = curl_init();
      curl_setopt($curl_handle10, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRoomTypeRegist/format/json');
      curl_setopt($curl_handle10, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle10, CURLOPT_POST, 0);
      $buffer10 = curl_exec($curl_handle10);
      curl_close($curl_handle10);
      $result10 = json_decode($buffer10, true);

      $curl_handle11 = curl_init();
      curl_setopt($curl_handle11, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGroupRegist/format/json');
      curl_setopt($curl_handle11, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle11, CURLOPT_POST, 0);
      $buffer11 = curl_exec($curl_handle11);
      curl_close($curl_handle11);
      $result11 = json_decode($buffer11, true);

      $curl_handle12 = curl_init();
      curl_setopt($curl_handle12, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoomRegist/format/json');
      curl_setopt($curl_handle12, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle12, CURLOPT_POST, 0);
      $buffer12 = curl_exec($curl_handle12);
      curl_close($curl_handle12);
      $result12 = json_decode($buffer12, true);

      $curl_handle13 = curl_init();
      curl_setopt($curl_handle13, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailFasilitas/format/json');
      curl_setopt($curl_handle13, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle13, CURLOPT_POST, 0);
      $buffer13 = curl_exec($curl_handle13);
      curl_close($curl_handle13);
      $result13 = json_decode($buffer13, true);

      $curl_handle14 = curl_init();
      curl_setopt($curl_handle14, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getSegmentationRegist/format/json');
      curl_setopt($curl_handle14, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle14, CURLOPT_POST, 0);
      $buffer14 = curl_exec($curl_handle14);
      curl_close($curl_handle14);
      $result14 = json_decode($buffer14, true);

      $curl_handle15 = curl_init();
      curl_setopt($curl_handle15, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuestTypeRegist/format/json');
      curl_setopt($curl_handle15, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle15, CURLOPT_POST, 0);
      $buffer15 = curl_exec($curl_handle15);
      curl_close($curl_handle15);
      $result15 = json_decode($buffer15, true);

      $curl_handle16 = curl_init();
      curl_setopt($curl_handle16, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailGuestTypeRegist/format/json');
      curl_setopt($curl_handle16, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle16, CURLOPT_POST, 0);
      $buffer16 = curl_exec($curl_handle16);
      curl_close($curl_handle16);
      $result16 = json_decode($buffer16, true);

      $curl_handle17 = curl_init();
      curl_setopt($curl_handle17, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterBuilding/format/json');
      curl_setopt($curl_handle17, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle17, CURLOPT_POST, 0);
      $buffer17 = curl_exec($curl_handle17);
      curl_close($curl_handle17);
      $result17 = json_decode($buffer17, true);

      $curl_handle18 = curl_init();
      curl_setopt($curl_handle18, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getBuildingMaster/format/json');
      curl_setopt($curl_handle18, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle18, CURLOPT_POST, 0);
      $buffer18 = curl_exec($curl_handle18);
      curl_close($curl_handle18);
      $result18 = json_decode($buffer18, true);

      $curl_handle19 = curl_init();
      curl_setopt($curl_handle19, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeCardGuestRegistration/format/json');
      curl_setopt($curl_handle19, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle19, CURLOPT_POST, 0);
      $buffer19 = curl_exec($curl_handle19);
      curl_close($curl_handle19);
      $result19 = json_decode($buffer19, true);

      $data['rg']       = $result;
      $data['it']       = $result2;
      $data['cor']      = $result3;
      $data['pr']       = $result4;
      $data['cr']       = $result5;
      $data['rr']       = $result6;
      $data['status']   = $result7;
      $data['curr']     = $result8;
      $data['agent']    = $result9;
      $data['rtg']      = $result10;
      $data['ggg']      = $result11;
      $data['nrg']      = $result12;
      $data['gdf']      = $result13;
      $data['sgmnt']    = $result14;
      $data['ggt']      = $result15;
      $data['dgtr']     = $result16;
      $data['building'] = $result17;
      $data['gbm']      = $result18;
      $data['gtcgr']    = $result19;




      $this->load->view('pages/header');
      $this->load->view('pages/registration_guest',$data);
      $this->load->view('pages/footer');

    }

  }

   public function reservationGuest(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getregistrationGuest/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getIdentityTipe/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountryRegist/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceRegist/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityRegist/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRegionRegist/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatusRegist/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $curl_handle8 = curl_init();
      curl_setopt($curl_handle8, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCurrencyRegist/format/json');
      curl_setopt($curl_handle8, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle8, CURLOPT_POST, 0);
      $buffer8 = curl_exec($curl_handle8);
      curl_close($curl_handle8);
      $result8 = json_decode($buffer8, true);

      $curl_handle9 = curl_init();
      curl_setopt($curl_handle9, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getAgentRegist/format/json');
      curl_setopt($curl_handle9, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle9, CURLOPT_POST, 0);
      $buffer9 = curl_exec($curl_handle9);
      curl_close($curl_handle9);
      $result9 = json_decode($buffer9, true);

      $curl_handle10 = curl_init();
      curl_setopt($curl_handle10, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRoomTypeRegist/format/json');
      curl_setopt($curl_handle10, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle10, CURLOPT_POST, 0);
      $buffer10 = curl_exec($curl_handle10);
      curl_close($curl_handle10);
      $result10 = json_decode($buffer10, true);

      $curl_handle11 = curl_init();
      curl_setopt($curl_handle11, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGroupRegist/format/json');
      curl_setopt($curl_handle11, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle11, CURLOPT_POST, 0);
      $buffer11 = curl_exec($curl_handle11);
      curl_close($curl_handle11);
      $result11 = json_decode($buffer11, true);

      $curl_handle12 = curl_init();
      curl_setopt($curl_handle12, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoomRegist/format/json');
      curl_setopt($curl_handle12, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle12, CURLOPT_POST, 0);
      $buffer12 = curl_exec($curl_handle12);
      curl_close($curl_handle12);
      $result12 = json_decode($buffer12, true);

      $curl_handle13 = curl_init();
      curl_setopt($curl_handle13, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailFasilitas/format/json');
      curl_setopt($curl_handle13, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle13, CURLOPT_POST, 0);
      $buffer13 = curl_exec($curl_handle13);
      curl_close($curl_handle13);
      $result13 = json_decode($buffer13, true);

      $curl_handle14 = curl_init();
      curl_setopt($curl_handle14, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getSegmentationRegist/format/json');
      curl_setopt($curl_handle14, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle14, CURLOPT_POST, 0);
      $buffer14 = curl_exec($curl_handle14);
      curl_close($curl_handle14);
      $result14 = json_decode($buffer14, true);

      $curl_handle15 = curl_init();
      curl_setopt($curl_handle15, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuestTypeRegist/format/json');
      curl_setopt($curl_handle15, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle15, CURLOPT_POST, 0);
      $buffer15 = curl_exec($curl_handle15);
      curl_close($curl_handle15);
      $result15 = json_decode($buffer15, true);

      $curl_handle16 = curl_init();
      curl_setopt($curl_handle16, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailGuestTypeRegist/format/json');
      curl_setopt($curl_handle16, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle16, CURLOPT_POST, 0);
      $buffer16 = curl_exec($curl_handle16);
      curl_close($curl_handle16);
      $result16 = json_decode($buffer16, true);

      $curl_handle17 = curl_init();
      curl_setopt($curl_handle17, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeCard/format/json');
      curl_setopt($curl_handle17, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle17, CURLOPT_POST, 0);
      $buffer17 = curl_exec($curl_handle17);
      curl_close($curl_handle17);
      $result17 = json_decode($buffer17, true);

      $curl_handle18 = curl_init();
      curl_setopt($curl_handle18, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatusReservation/format/json');
      curl_setopt($curl_handle18, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle18, CURLOPT_POST, 0);
      $buffer18 = curl_exec($curl_handle18);
      curl_close($curl_handle18);
      $result18 = json_decode($buffer18, true);

      $curl_handle19 = curl_init();
      curl_setopt($curl_handle19, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterBuilding/format/json');
      curl_setopt($curl_handle19, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle19, CURLOPT_POST, 0);
      $buffer19 = curl_exec($curl_handle19);
      curl_close($curl_handle19);
      $result19 = json_decode($buffer19, true);

      // $curl_handle20 = curl_init();
      // curl_setopt($curl_handle20, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getFloor/format/json');
      // curl_setopt($curl_handle20, CURLOPT_RETURNTRANSFER, 1);
      // curl_setopt($curl_handle20, CURLOPT_POST, 0);
      // $buffer20 = curl_exec($curl_handle20);
      // curl_close($curl_handle20);
      // $result20 = json_decode($buffer20, true);

      $data['rg']      = $result;
      $data['it']      = $result2;
      $data['cor']     = $result3;
      $data['pr']      = $result4;
      $data['cr']      = $result5;
      $data['rr']      = $result6;
      $data['status']  = $result7;
      $data['curr']    = $result8;
      $data['agent']   = $result9;
      $data['rtg']     = $result10;
      $data['ggg']     = $result11;
      $data['nrg']     = $result12;
      $data['gdf']     = $result13;
      $data['sgmnt']   = $result14;
      $data['ggt']     = $result15;
      $data['dgtr']    = $result16;
      $data['gtc']     = $result17;
      $data['gsr']     = $result18;
      $data['building']     = $result19;

      $this->load->view('pages/header');
      $this->load->view('pages/reservation_guest',$data);
      $this->load->view('pages/footer');

    }

  }

 public function get_events_calendar()
     {
      if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
         // Our Start and End Dates
         // $id_regist = $this->input->get("id_regist");
         /*$adf_date = $this->input->get("adf_date");
         $adt_date = $this->input->get("adt_date");
*/
         // $startdt = new DateTime('now'); // setup a local datetime
         // $startdt->setTimestamp($adf_date); // Set the date based on timestamp
         // $start_format = $startdt->format('Y-m-d H:i:s');

         // $enddt = new DateTime('now'); // setup a local datetime
         // $enddt->setTimestamp($adt_date); // Set the date based on timestamp
         // $end_format = $enddt->format('Y-m-d H:i:s');

         $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/get_events_calendar/format/json');
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 0);
          // curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
          //   // 'id_regist' => $id_regist,
          //   'adf_date' => $adf_date,
          //   'adt_date' => $adt_date
          // ));
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);

          $result = json_decode($buffer, true);
          
          $data['getEventsCalendar'] = $result;

          // echo json_encode($data);


         // $events = $this->calendar_model->get_events($start_format, $end_format);

         // $data_events = array();

         // foreach($result->result() as $r) {

         //     $data_events[] = array(
         //         "id_regist" => $r->id_regist,
         //         "guest_room_type" => $r->guest_room_type,
         //         "adf_date" => $r->adf_date,
         //         "adt_date" => $r->adt_date
         //     );
         // }

         // echo json_encode(array("events" => $data_events));
         // exit();
     }
    }

    public function addReservTORegistrationGuest(){
    $this->load->helper(array('form','file'));

    $this->load->library('upload');

    // $nmfile = "user"; //nama file saya beri nama langsung dan diikuti fungsi time

    $config = array();

    $config['upload_path'] = './assets/guest_foto/'; //path folder

    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

    $config['max_size'] = '10096'; //maksimum besar file 5M

    $config['overwrite'] = FALSE;

    // $config['file_name'] = $nmfile; //nama yang terupload nantinya



    $this->upload->initialize($config);

    if( ! $this->upload->do_upload("identity_foto")){

    //echo the errors
    $this->upload->display_errors();
    }

    $file_name = $this->upload->file_name;

    $TittleRegistrationEditModal            = $this->input->post('tittle_edit2');
    $FirstNameRegistrationEditModal         = $this->input->post('first_name_edit2');
    $MiddleNameRegistrationEditModal        = $this->input->post('middle_name_edit2');
    $LastnameRegistrationEditModal          = $this->input->post('last_name_edit2');
    // $AddressRegistrationEditModal           = $this->input->post('email_cp_edit2');
    // $CountryRegistrationEditModal           = $this->input->post('regist_country_edit');
    // $CityRegistrationEditModal              = $this->input->post('CityRegist');
    // $ZipCodeRegistrationEditModal           = $this->input->post('zip_code_edit');
    $PhoneRegistrationEditModal             = $this->input->post('phone_number_cp_modal2');
    $GuestTypeRegistrationEditModal         = $this->input->post('guest_type');
    $DetailRegistrationEditModal            = $this->input->post('DetailGuestTypeReservationEditModal');
    // $JabatanRegistrationEditModal           = $this->input->post('jabatan_edit');
    // $IdentityTypeRegistrationEditModal      = $this->input->post('identity_type_edit');
    // $IdentityNumberRegistrationEditModal    = $this->input->post('identity_number_edit');
    // $DateofBirthRegistrationEditModal       = $this->input->post('date_birth_edit');
    $EmailRegistrationEditModal             = $this->input->post('email_cp_edit2');
    // $NationalityRegistrationEditModal       = $this->input->post('nationality_edit');
    $DepositRegistrationEditModal           = $this->input->post('pay_method');
    $TypeCardRegistrationEditModal          = $this->input->post('TypeCardReservationEditModal');
    $CardNoRegistrationEditModal            = $this->input->post('CardNoReservationEditModal');
    $ExpiredDateRegistrationEditModal       = $this->input->post('exp_date_edit2');
    // $ReservByRegistrationEditModal          = $this->input->post('reserv_handled_edit2');
    // $CheckedByRegistrationEditModal         = $this->input->post('CheckedByRegistrationEditModal');
    // $PurposeofVisitRegistrationEditModal    = $this->input->post('PurposeofVisitRegistrationEditModal');
    $BuildingRegistrationEditModal          = $this->input->post('building_edit2');
    $FloorRegistrationEditModal             = $this->input->post('floor_edit2');
    $NoRoomRegistrationEditModal            = $this->input->post('no_room_edit2');
    $RoomRateRegistrationEditModal          = $this->input->post('room_rate_edit2');
    $TypeRoomRegistrationEditModal          = $this->input->post('room_type_edit2');
    $TotalPaxRegistrationEditModal          = $this->input->post('total_edit2');
    $StatusRegistrationEditModal            = $this->input->post('status_edit2');
    $SpesialRequestRegistrationEditModal    = $this->input->post('spesial_request_edit2');
    $CheckInRegistrationEditModal           = date( 'Y-m-d H:i:s', strtotime($this->input->post('arrival_edit2')));
    $CheckOutRegistrationEditModal          = date( 'Y-m-d H:i:s', strtotime($this->input->post('departure_edit2')));
         
    




    // $CheckInRegistrationEditModal           = $this->input->post('arrival_edit2');
    // $CheckOutRegistrationEditModal          = $this->input->post('departure_edit2');
    // $segmentation              = $this->input->post('segment_edit2');
    // $guest_type                = $this->input->post('guest_type_edit2');
    // $detail_guest_type         = $this->input->post('detail_guest_type');
    // $tittle                    = $this->input->post('tittle_edit2');
    // $first_name                = $this->input->post('first_name_edit2');
    // $middle_name               = $this->input->post('middle_name_edit2');
    // $last_name                 = $this->input->post('last_name_edit2');
    // $file_name                 = $this->input->post('identity_foto');
    // $identity_tipe             = $this->input->post('identity_type_edit2');
    // $identity_number           = $this->input->post('identity_number_edit2');
    // $gender                    = $this->input->post('gender_view_reservation');
    // $email                     = $this->input->post('email_edit2');
    // $phone                     = $this->input->post('phone_number_edit2');
    // $regist_country            = $this->input->post('regist_country_viewReserv');
    // $regist_province           = $this->input->post('regist_province_viewReserv');
    // $regist_city               = $this->input->post('regist_city_viewReserv');
    // $zip_code                  = $this->input->post('zip_code');
    // $address                   = $updateGuestthis->input->post('address_edit2');
    // $date2                     = date( 'Y-m-d H:i:s', strtotime($this->input->post('departure_edit2')));
    // $total_pax                 = $this->input->post('total_edit2');    
    // $room_type                 = $this->input->post('room_type_edit2');
    // $room_rate                 = $this->input->post('room_rate_edit2');
    // $no_of_room                = $this->input->post('no_room_edit2');
    // $status                    = $this->input->post('status_edit2');
    // $remarks                   = $this->input->post('remarks_edit2');
    // $pay_method                = $this->input->post('pay_method');
    // $stat_payment              = $this->input->post('stat_payment');
    // $tot_bill                  = $this->input->post('tot_bill');


    $curl_handle     = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addReservTORegistrationGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(

      'tittle_edit2'                   => $TittleRegistrationEditModal,
      'first_name_edit2'               => $FirstNameRegistrationEditModal,
      'middle_name_edit2'              => $MiddleNameRegistrationEditModal,
      'last_name_edit2'                => $LastnameRegistrationEditModal,
      // 'address_edit'                  => $AddressRegistrationEditModal,
      // 'regist_country_edit'           => $CountryRegistrationEditModal,
      // 'CityRegist'                    => $CityRegistrationEditModal,
      // 'zip_code_edit'                 => $ZipCodeRegistrationEditModal,
      'phone_number_cp_modal2'         => $PhoneRegistrationEditModal,
      'guest_type'                     => $GuestTypeRegistrationEditModal,
      'DetailGuestTypeReservationEditModal' => $DetailRegistrationEditModal,
      // 'jabatan_edit'                  => $JabatanRegistrationEditModal,
      // 'identity_type_edit'            => $IdentityTypeRegistrationEditModal,
      // 'identity_number_edit'          => $IdentityNumberRegistrationEditModal,
      // 'date_birth_edit'               => $DateofBirthRegistrationEditModal,
      'email_cp_edit2'                 => $EmailRegistrationEditModal,
      // 'nationality_edit'              => $NationalityRegistrationEditModal,
      'pay_method'                     => $DepositRegistrationEditModal,
      'TypeCardReservationEditModal'   => $TypeCardRegistrationEditModal,
      'CardNoReservationEditModal'     => $CardNoRegistrationEditModal,
      'exp_date_edit2'                 => $ExpiredDateRegistrationEditModal,
      // 'ReservByRegistrationEditModal' => $ReservByRegistrationEditModal,
      // 'CheckedByRegistrationEditModal'=> $CheckedByRegistrationEditModal,
      // 'PurposeofVisitRegistrationEditModal' => $PurposeofVisitRegistrationEditModal,
      'building_edit2'                 => $BuildingRegistrationEditModal,
      'floor_edit2'                    => $FloorRegistrationEditModal,
      'no_room_edit2'                  => $NoRoomRegistrationEditModal,
      'room_rate_edit2'                => str_replace(".","","$RoomRateRegistrationEditModal"),
      'room_type_edit2'                => $TypeRoomRegistrationEditModal,
      'total_edit2'                    => $TotalPaxRegistrationEditModal,
      'status_edit2'                   => $StatusRegistrationEditModal,
      'spesial_request_edit2'          => $SpesialRequestRegistrationEditModal,
      'arrival_edit2'                  => $CheckInRegistrationEditModal,
      'departure_edit2'                => $CheckOutRegistrationEditModal






      
      // 'segment_edit2'                 => $segmentation,
      // 'guest_type_edit2'              => $guest_type,
      // 'detail_guest_type'             => $detail_guest_type,
      // 'tittle_edit2'                  => $tittle,
      // 'first_name_edit2'              => $first_name,
      // 'middle_name_edit2'             => $middle_name,
      // 'last_name_edit2'               => $last_name,
      // 'identity_foto'                 => $file_name,
      // 'identity_type_edit2'           => $identity_tipe,
      // 'identity_number_edit2'         => $identity_number,
      // 'gender_view_reservation'       => $gender,
      // 'email_edit2'                   => $email,
      // 'phone_number_edit2'            => $phone,
      // 'regist_country_viewReserv'     => $regist_country,
      // 'regist_province_viewReserv'    => $regist_province,
      // 'regist_city_viewReserv'        => $regist_city,
      // 'zip_code'                      => $zip_code,
      // 'address_edit2'                 => $address,
      // 'arrival_edit2'                 => $date1,
      // 'departure_edit2'               => $date2,
      // 'total_edit2'                   => $total_pax,
      // 'room_type_edit2'               => $room_type,
      // 'room_rate_edit2'               => str_replace(".","","$room_rate"),
      // 'no_room_edit2'                 => $no_of_room,
      // 'status_edit2'                  => $status,
      // 'remarks_edit2'                 => $remarks,
      // 'pay_method'                    => $pay_method,
      // 'stat_payment'                  => $stat_payment,
      // 'tot_bill'                      => $tot_bill
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/Guest');
  }

  public function addRegistrationGuest(){
    $this->load->helper(array('form','file'));

    $this->load->library('upload');

    // $nmfile = "user"; //nama file saya beri nama langsung dan diikuti fungsi time

    $config = array();

    $config['upload_path'] = './assets/guest_foto/'; //path folder

    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

    $config['max_size'] = '10096'; //maksimum besar file 5M

    $config['overwrite'] = FALSE;

    // $config['file_name'] = $nmfile; //nama yang terupload nantinya



    $this->upload->initialize($config);

    if( ! $this->upload->do_upload("identity_foto")){

    //echo the errors
    $this->upload->display_errors();
    }

    $file_name = $this->upload->file_name;

    $TittleRegistrationGuest                   = $this->input->post('TittleRegistrationGuest');
    $FirstNameRegistrationGuest                = $this->input->post('FirstNameRegistrationGuest');
    $SurnameRegistrationGuest                  = $this->input->post('SurnameRegistrationGuest');
    // $MiddleNameRegistrationGuest               = $this->input->post('MiddleNameRegistrationGuest');
    // $LastNameRegistrationGuest                 = $this->input->post('LastNameRegistrationGuest');
    $AddressRegistrationGuest                  = $this->input->post('AddressRegistrationGuest');
    $CountryRegistrationGuest                  = $this->input->post('CountryRegistrationGuest');
    $CityRegistrationGuest                     = $this->input->post('CityRegistrationGuest');
    $ZipCodeRegistrationGuest                  = $this->input->post('ZipCodeRegistrationGuest');
    $PhoneRegistrationGuest                    = $this->input->post('PhoneRegistrationGuest');
    $GuestTypeRegistrationGuest                = $this->input->post('GuestTypeRegistrationGuest');
    $DetailGuestTypeRegistrationGuest          = $this->input->post('DetailGuestTypeRegistrationGuest');
    $JabatanRegistrationGuest                  = $this->input->post('JabatanRegistrationGuest');
    $IdentityTypeRegistrationGuest             = $this->input->post('IdentityTypeRegistrationGuest');
    $IdentityNumberRegistrationGuest           = $this->input->post('IdentityNumberRegistrationGuest');
    $DateBirthRegistrationGuest                = $this->input->post('DateBirthRegistrationGuest');
    $EmailRegistrationGuest                    = $this->input->post('EmailRegistrationGuest');
    $NationalityRegistrationGuest              = $this->input->post('NationalityRegistrationGuest');
    $DepositRegistrationGuest                  = $this->input->post('DepositRegistrationGuest');
    $TypeCardRegistrationGuest                 = $this->input->post('TypeCardRegistrationGuest');
    $CardNoRegistrationGuest                   = $this->input->post('CardNoRegistrationGuest');
    $ExpDateRegistrationGuest                  = $this->input->post('ExpDateRegistrationGuest');
    $ReservByRegistrationGuest                 = $this->input->post('ReservByRegistrationGuest');
    $CheckedByRegistrationGuest                = $this->input->post('CheckedByRegistrationGuest');
    $PurposeofVisitRegistrationGuest           = $this->input->post('PurposeofVisitRegistrationGuest');
    $RoomTypeRegistrationGuest                 = $this->input->post('room_type');
    $BuildingRegistration                      = $this->input->post('BuildingRegistration');
    $FloorRegistrationGuest                    = $this->input->post('FloorRegistration');
    $NoOfRoomRegistrationGuest                 = $this->input->post('no_of_room');
    $RoomRateRegistrationGuest                 = $this->input->post('room_rate');
    $IdentityFotoRegistrationGuest             = $this->input->post('identity_foto');
    $CheckInDateRegistrationGuest              = date('Y-m-d', strtotime( $this->input->post('CheckInDateRegistrationGuest')));
    $CheckInTimeRegistrationGuest              = date('H:i:s', strtotime( $this->input->post('CheckInTimeRegistrationGuest')));
    $CheckOutDateRegistrationGuest             = date('Y-m-d', strtotime( $this->input->post('CheckOutDateRegistrationGuest')));
    $CheckOutTimeRegistrationGuest             = date('H:i:s', strtotime( $this->input->post('CheckOutTimeRegistrationGuest')));
    $TotalPaxRegistrationGuest                 = $this->input->post('TotalPaxRegistrationGuest');
    $StatusRegistrationGuest                   = $this->input->post('StatusRegistrationGuest');
    $TotalBillRegistrationGuest                = $this->input->post('TotalBillRegistrationGuest');
    $AdultRegistrationGuest                    = $this->input->post('AdultRegistrationGuest');
    $ChildRegistrationGuest                    = $this->input->post('ChildRegistrationGuest');
    $SpesialRequestRegistrationGuest           = $this->input->post('SpesialRequestRegistrationGuest');










    // $segmentation              = $this->input->post('segment');
    // $guest_type                = $this->input->post('guest_type');
    // $detail_guest_type         = $this->input->post('detail_guest_type');
    // $tittle                    = $this->input->post('tittle');
    // $first_name                = $this->input->post('first_name');
    // $middle_name               = $this->input->post('middle_name');
    // $last_name                 = $this->input->post('last_name');
    // $identity_foto             = $this->input->post('identity_foto');
    // $identity_tipe             = $this->input->post('identity_tipe');
    // $identity_number           = $this->input->post('identity_number');
    // $gender                    = $this->input->post('gender');
    // $email                     = $this->input->post('email');
    // $phone                     = $this->input->post('phone');
    // $regist_country            = $this->input->post('regist_country');
    // $regist_country_2            = $this->input->post('regist_country_2');
    // $regist_province           = $this->input->post('regist_province');
    // $regist_province_2           = $this->input->post('regist_province_2');
    // $regist_city               = $this->input->post('regist_city');
    // $regist_city_2               = $this->input->post('regist_city_2');
    // $zip_code                  = $this->input->post('zip_code');
    // $address                   = $this->input->post('address');
    // $date2                     = date( 'Y-m-d H:i:s', strtotime( $this->input->post('date2')));
    // $total_pax                 = $this->input->post('total_pax');    
    // $room_type                 = $this->input->post('room_type');
    // $BuildingRegistration      = $this->input->post('BuildingRegistration');
    // $FloorRegistration         = $this->input->post('FloorRegistration');
    // $room_rate                 = $this->input->post('room_rate');
    // $no_of_room                = $this->input->post('no_of_room');
    // $status                    = $this->input->post('status');
    // $remarks                   = $this->input->post('remarks');
    // $pay_method                = $this->input->post('pay_method');
    // $stat_payment              = $this->input->post('stat_payment');
    // $tot_bill                  = $this->input->post('tot_bill');

    // $currency                  = $this->input->post('currency');
    // $agent                     = $this->input->post('agent');
    // $group_registration        = $this->input->post('group_registration');
    // $valid_code                = $this->input->post('val_code');

    for ($i=0; $i < count($RoomTypeRegistrationGuest); $i++) {
    $curl_handle     = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addRegistrationGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(

      'TittleRegistrationGuest'                => $TittleRegistrationGuest,
      'FirstNameRegistrationGuest'             => $FirstNameRegistrationGuest,
      'SurnameRegistrationGuest'               => $SurnameRegistrationGuest,
      // 'MiddleNameRegistrationGuest'            => $MiddleNameRegistrationGuest,
      // 'LastNameRegistrationGuest'              => $LastNameRegistrationGuest,
      'AddressRegistrationGuest'               => $AddressRegistrationGuest,
      'CountryRegistrationGuest'               => $CountryRegistrationGuest,
      'CityRegistrationGuest'                  => $CityRegistrationGuest,
      'ZipCodeRegistrationGuest'               => $ZipCodeRegistrationGuest,
      'PhoneRegistrationGuest'                 => $PhoneRegistrationGuest,
      'GuestTypeRegistrationGuest'             => $GuestTypeRegistrationGuest,
      'DetailGuestTypeRegistrationGuest'       => $DetailGuestTypeRegistrationGuest,
      'JabatanRegistrationGuest'               => $JabatanRegistrationGuest,
      'IdentityTypeRegistrationGuest'          => $IdentityTypeRegistrationGuest,
      'IdentityNumberRegistrationGuest'        => $IdentityNumberRegistrationGuest,
      'DateBirthRegistrationGuest'             => $DateBirthRegistrationGuest,
      'EmailRegistrationGuest'                 => $EmailRegistrationGuest,
      'NationalityRegistrationGuest'           => $NationalityRegistrationGuest,
      'DepositRegistrationGuest'               => $DepositRegistrationGuest,
      'TypeCardRegistrationGuest'              => $TypeCardRegistrationGuest,
      'CardNoRegistrationGuest'                => $CardNoRegistrationGuest,
      'ExpDateRegistrationGuest'               => $ExpDateRegistrationGuest,
      'ReservByRegistrationGuest'              => $ReservByRegistrationGuest,
      'CheckedByRegistrationGuest'             => $CheckedByRegistrationGuest,
      'PurposeofVisitRegistrationGuest'        => $PurposeofVisitRegistrationGuest,
      'room_type'                              => $RoomTypeRegistrationGuest[$i],
      'BuildingRegistration'                   => $BuildingRegistration[$i],
      'FloorRegistration'                      => $FloorRegistrationGuest[$i],
      'no_of_room'                             => $NoOfRoomRegistrationGuest[$i],
      'room_rate'                              => $RoomRateRegistrationGuest[$i],
      'identity_foto'                          => $file_name,

      'CheckInDateRegistrationGuest'           => $CheckInDateRegistrationGuest,
      'CheckInTimeRegistrationGuest'           => $CheckInTimeRegistrationGuest,

      'CheckOutDateRegistrationGuest'          => $CheckOutDateRegistrationGuest,
      'CheckOutTimeRegistrationGuest'          => $CheckOutTimeRegistrationGuest,

      'TotalPaxRegistrationGuest'              => $TotalPaxRegistrationGuest,
      'StatusRegistrationGuest'                => $StatusRegistrationGuest,
      'TotalBillRegistrationGuest'             => $TotalBillRegistrationGuest,
      'AdultRegistrationGuest'                 => $AdultRegistrationGuest,
      'ChildRegistrationGuest'                 => $ChildRegistrationGuest,
      'SpesialRequestRegistrationGuest'        => $SpesialRequestRegistrationGuest






      
      // 'segment'            => $segmentation,
      // 'guest_type'         => $guest_type,
      // 'detail_guest_type'  => $detail_guest_type,
      // 'tittle'             => $tittle,
      // 'first_name'         => $first_name,
      // 'middle_name'        => $middle_name,
      // 'last_name'          => $last_name,
      // 'identity_foto'      => $file_name,
      // 'identity_tipe'      => $identity_tipe,
      // 'identity_number'    => $identity_number,
      // 'gender'             => $gender,
      // 'email'              => $email,
      // 'phone'              => $phone,
      // 'regist_country'     => $regist_country,
      // 'regist_country_2'     => $regist_country_2,
      // 'regist_province'    => $regist_province,
      // 'regist_province_2'    => $regist_province_2,
      // 'regist_city'        => $regist_city,
      // 'regist_city_2'        => $regist_city_2,
      // 'zip_code'           => $zip_code,
      // 'address'            => $address,
      // 'date1'              => $date1,
      // 'date2'              => $date2,
      // 'total_pax'          => $total_pax,
      // 'room_type'          => $room_type[$i],
      // 'BuildingRegistration' => $BuildingRegistration[$i],
      // 'FloorRegistration' => $FloorRegistration[$i],
      // 'room_rate'          => str_replace(".","","$room_rate[$i]"),
      // 'no_of_room'         => $no_of_room[$i],
      // 'status'             => $status,
      // 'remarks'            => $remarks,
      // 'pay_method'         => $pay_method,
      // 'stat_payment'       => $stat_payment,
      // 'tot_bill'           => $tot_bill      
      
      // 'currency'           => $currency,
      // 'agent'              => $agent,
      // 'group_registration' => $group_registration,
      // 'val_code'           => $valid_code
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    }
    redirect('home/Guest');
  }

  public function Guest(){
    // if ($this->session->userdata('admin_session') == '') {
    //   $this->load->view('pages/login');
    // } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuest/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getIdentityTipe/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityGuestModal/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceGuestModal/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountryGuestModal/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatusGuestModal/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCurrencyGuestModal/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $curl_handle8 = curl_init();
      curl_setopt($curl_handle8, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getAgentGuestModal/format/json');
      curl_setopt($curl_handle8, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle8, CURLOPT_POST, 0);
      $buffer8 = curl_exec($curl_handle8);
      curl_close($curl_handle8);
      $result8 = json_decode($buffer8, true);

      $curl_handle9 = curl_init();
      curl_setopt($curl_handle9, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRTypeGuestModal/format/json');
      curl_setopt($curl_handle9, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle9, CURLOPT_POST, 0);
      $buffer9 = curl_exec($curl_handle9);
      curl_close($curl_handle9);
      $result9 = json_decode($buffer9, true);

      $curl_handle10 = curl_init();
      curl_setopt($curl_handle10, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatus/format/json');
      curl_setopt($curl_handle10, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle10, CURLOPT_POST, 0);
      $buffer10 = curl_exec($curl_handle10);
      curl_close($curl_handle10);
      $result10 = json_decode($buffer10, true);

      $curl_handle11 = curl_init();
      curl_setopt($curl_handle11, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getSegmentationViewRegist/format/json');
      curl_setopt($curl_handle11, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle11, CURLOPT_POST, 0);
      $buffer11 = curl_exec($curl_handle11);
      curl_close($curl_handle11);
      $result11 = json_decode($buffer11, true);

      $curl_handle12 = curl_init();
      curl_setopt($curl_handle12, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuestTypeViewRegist/format/json');
      curl_setopt($curl_handle12, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle12, CURLOPT_POST, 0);
      $buffer12 = curl_exec($curl_handle12);
      curl_close($curl_handle12);
      $result12 = json_decode($buffer12, true);

      $curl_handle13 = curl_init();
      curl_setopt($curl_handle13, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailGuestTypeViewRegist/format/json');
      curl_setopt($curl_handle13, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle13, CURLOPT_POST, 0);
      $buffer13 = curl_exec($curl_handle13);
      curl_close($curl_handle13);
      $result13 = json_decode($buffer13, true);

      $curl_handle14 = curl_init();
      curl_setopt($curl_handle14, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHotelCountryViewRegist/format/json');
      curl_setopt($curl_handle14, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle14, CURLOPT_POST, 0);
      $buffer14 = curl_exec($curl_handle14);
      curl_close($curl_handle14);
      $result14 = json_decode($buffer14, true);

      $curl_handle15 = curl_init();
      curl_setopt($curl_handle15, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCurrencyViewRegist/format/json');
      curl_setopt($curl_handle15, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle15, CURLOPT_POST, 0);
      $buffer15 = curl_exec($curl_handle15);
      curl_close($curl_handle15);
      $result15 = json_decode($buffer15, true);

      $curl_handle16 = curl_init();
      curl_setopt($curl_handle16, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTipeRoomViewRegist/format/json');
      curl_setopt($curl_handle16, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle16, CURLOPT_POST, 0);
      $buffer16 = curl_exec($curl_handle16);
      curl_close($curl_handle16);
      $result16 = json_decode($buffer16, true);

      $curl_handle17 = curl_init();
      curl_setopt($curl_handle17, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoomViewRegist/format/json');
      curl_setopt($curl_handle17, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle17, CURLOPT_POST, 0);
      $buffer17 = curl_exec($curl_handle17);
      curl_close($curl_handle17);
      $result17 = json_decode($buffer17, true);


      $curl_handle18 = curl_init();
      curl_setopt($curl_handle18, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeCardViewRegist/format/json');
      curl_setopt($curl_handle18, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle18, CURLOPT_POST, 0);
      $buffer18 = curl_exec($curl_handle18);
      curl_close($curl_handle18);
      $result18= json_decode($buffer18, true);

      $curl_handle19 = curl_init();
      curl_setopt($curl_handle19, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getBuildingViewRegist/format/json');
      curl_setopt($curl_handle19, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle19, CURLOPT_POST, 0);
      $buffer19 = curl_exec($curl_handle19);
      curl_close($curl_handle19);
      $result19 = json_decode($buffer19, true);



      $data['guest']        = $result;
      $data['it']           = $result2;
      $data['cg']           = $result3;
      $data['pg']           = $result4;
      $data['cog']          = $result5;
      $data['stts']         = $result6;
      $data['crrncy']       = $result7;
      $data['agnt']         = $result8;
      $data['rtypeguest']   = $result9;
      $data['status']       = $result10;
      $data['gsvr']         = $result11;
      $data['ggtvr']        = $result12;
      $data['gdgtvr']       = $result13;
      $data['ghcvr']        = $result14;
      $data['gcvr']         = $result15;
      $data['gtrvr']        = $result16;
      $data['gnrvr']        = $result17;
      $data['gtcvr']        = $result18;
      $data['gbvr']         = $result19;                                        


      $this->load->view('pages/header');
      $this->load->view('pages/guest', $data);
      $this->load->view('pages/footer');

    // }

  }

  public function Reservation(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getReservation/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getIdentityTipe/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRoomTypeModal/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoomModal/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getSegmentationReservation/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuestTypeReservation/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailGuestTypeReservation/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $curl_handle8 = curl_init();
      curl_setopt($curl_handle8, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountryViewReservation/format/json');
      curl_setopt($curl_handle8, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle8, CURLOPT_POST, 0);
      $buffer8 = curl_exec($curl_handle8);
      curl_close($curl_handle8);
      $result8 = json_decode($buffer8, true);

      $curl_handle9 = curl_init();
      curl_setopt($curl_handle9, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvinceViewReservation/format/json');
      curl_setopt($curl_handle9, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle9, CURLOPT_POST, 0);
      $buffer9 = curl_exec($curl_handle9);
      curl_close($curl_handle9);
      $result9 = json_decode($buffer9, true);

      $curl_handle10 = curl_init();
      curl_setopt($curl_handle10, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCityViewReservation/format/json');
      curl_setopt($curl_handle10, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle10, CURLOPT_POST, 0);
      $buffer10 = curl_exec($curl_handle10);
      curl_close($curl_handle10);
      $result10 = json_decode($buffer10, true);

      $curl_handle11 = curl_init();
      curl_setopt($curl_handle11, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatusViewReservation/format/json');
      curl_setopt($curl_handle11, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle11, CURLOPT_POST, 0);
      $buffer11 = curl_exec($curl_handle11);
      curl_close($curl_handle11);
      $result11 = json_decode($buffer11, true);

      $curl_handle12 = curl_init();
      curl_setopt($curl_handle12, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getPayMethodViewReservation/format/json');
      curl_setopt($curl_handle12, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle12, CURLOPT_POST, 0);
      $buffer12 = curl_exec($curl_handle12);
      curl_close($curl_handle12);
      $result12 = json_decode($buffer12, true);

      $curl_handle13 = curl_init();
      curl_setopt($curl_handle13, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterStatus/format/json');
      curl_setopt($curl_handle13, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle13, CURLOPT_POST, 0);
      $buffer13 = curl_exec($curl_handle13);
      curl_close($curl_handle13);
      $result13 = json_decode($buffer13, true);

      $curl_handle14 = curl_init();
      curl_setopt($curl_handle14, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getStatPayment/format/json');
      curl_setopt($curl_handle14, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle14, CURLOPT_POST, 0);
      $buffer14 = curl_exec($curl_handle14);
      curl_close($curl_handle14);
      $result14 = json_decode($buffer14, true);

      $curl_handle15 = curl_init();
      curl_setopt($curl_handle15, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeRoom/format/json');
      curl_setopt($curl_handle15, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle15, CURLOPT_POST, 0);
      $buffer15 = curl_exec($curl_handle15);
      curl_close($curl_handle15);
      $result15 = json_decode($buffer15, true);

      $curl_handle16 = curl_init();
      curl_setopt($curl_handle16, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoomEditReservation/format/json');
      curl_setopt($curl_handle16, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle16, CURLOPT_POST, 0);
      $buffer16 = curl_exec($curl_handle16);
      curl_close($curl_handle16);
      $result16 = json_decode($buffer16, true);

      $curl_handle17 = curl_init();
      curl_setopt($curl_handle17, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeCardEditReservation/format/json');
      curl_setopt($curl_handle17, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle17, CURLOPT_POST, 0);
      $buffer17 = curl_exec($curl_handle17);
      curl_close($curl_handle17);
      $result17 = json_decode($buffer17, true);

      $curl_handle18 = curl_init();
      curl_setopt($curl_handle18, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuestTypeEditReservation/format/json');
      curl_setopt($curl_handle18, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle18, CURLOPT_POST, 0);
      $buffer18 = curl_exec($curl_handle18);
      curl_close($curl_handle18);
      $result18 = json_decode($buffer18, true);

      $curl_handle19 = curl_init();
      curl_setopt($curl_handle19, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailGuestTypeEditReservation/format/json');
      curl_setopt($curl_handle19, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle19, CURLOPT_POST, 0);
      $buffer19 = curl_exec($curl_handle19);
      curl_close($curl_handle19);
      $result19 = json_decode($buffer19, true);

      $curl_handle20 = curl_init();
      curl_setopt($curl_handle20, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getBuilding/format/json');
      curl_setopt($curl_handle20, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle20, CURLOPT_POST, 0);
      $buffer20 = curl_exec($curl_handle20);
      curl_close($curl_handle20);
      $result20 = json_decode($buffer20, true);

      $curl_handle21 = curl_init();
      curl_setopt($curl_handle21, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getFloor/format/json');
      curl_setopt($curl_handle21, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle21, CURLOPT_POST, 0);
      $buffer21 = curl_exec($curl_handle21);
      curl_close($curl_handle21);
      $result21 = json_decode($buffer21, true);

      $curl_handle22 = curl_init();
      curl_setopt($curl_handle22, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getBillingInstruction/format/json');
      curl_setopt($curl_handle22, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle22, CURLOPT_POST, 0);
      $buffer22 = curl_exec($curl_handle22);
      curl_close($curl_handle22);
      $result22 = json_decode($buffer22, true);

      $data['rsv']  = $result;
      $data['identipe'] = $result2;
      $data['rtm'] = $result3;
      $data['gnrm'] = $result4;
      $data['gsr'] = $result5;
      $data['ggtr'] = $result6;
      $data['gdgtr'] = $result7;
      $data['gcvr'] = $result8;
      $data['gpvr'] = $result9;
      $data['gcivr'] = $result10;
      $data['status'] = $result11;
      $data['pay_method'] = $result12;
      $data['getsts'] = $result13;
      $data['gsp'] = $result14;
      $data['gtr'] = $result15;
      $data['gnrer'] = $result16;
      $data['gtcer'] = $result17;
      $data['ggter'] = $result18;
      $data['gdgter'] = $result19;
      $data['gb'] = $result20;
      $data['gf'] = $result21;
      $data['gbi'] = $result22;                                                                                                                                                                                                                                                                


      $this->load->view('pages/header');
      $this->load->view('pages/reservation',$data);
      $this->load->view('pages/footer');

    }

  }

  public function addRegistrationReservation(){
    $this->load->helper(array('form','file'));

    $this->load->library('upload');

    // $nmfile = "user"; //nama file saya beri nama langsung dan diikuti fungsi time

    $config = array();

    $config['upload_path'] = './assets/reservation_foto/'; //path folder

    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

    $config['max_size'] = '10096'; //maksimum besar file 5M

    $config['overwrite'] = FALSE;

    // $config['file_name'] = $nmfile; //nama yang terupload nantinya



    $this->upload->initialize($config);

    if( ! $this->upload->do_upload("identity_foto")){

    //echo the errors
    $this->upload->display_errors();
    }

    $file_name = $this->upload->file_name;

    // $TotalPaxReservation = $this->input->post('TotalPaxReservation[]');

    //var_dump($FirstNameReservation);

    // print_r($FirstNameReservation);
        // $NoRoomReservation = $this->input->post('NoRoomReservation[]');
        // $RoomTypeReservation = $this->input->post('RoomTypeReservation[]');
       
        //$TotalPaxReservation = $this->input->post('TotalPaxReservation[]');
        // $RoomRateReservation = $this->input->post('RoomRateReservation[]');
        // var_dump($NoRoomReservation);
        // var_dump($RoomTypeReservation);
        // var_dump($TotalPaxReservation);
        // var_dump($RoomRateReservation);

// for ($x=0; $x < sizeof($TotalPaxReservation); $x++) {
    $TittleReservation                    = $this->input->post('TittleReservation');
    $FirstNameReservation                 = $this->input->post('FirstNameReservation');
    $SurnameReservation                   = $this->input->post('SurnameReservation');
    // $MiddleNameReservation                = $this->input->post('MiddleNameReservation');
    // $LastNameReservation                  = $this->input->post('LastNameReservation');
    // $ArrivalDateReservation               = date( 'Y-m-d H:i:s', strtotime( $this->input->post('ArrivalDateReservation')));
    // $DepartDateReservation                = date( 'Y-m-d H:i:s', strtotime( $this->input->post('DepartDateReservation')));
    $ArrDateReservation                   = date('Y-m-d', strtotime($this->input->post('ArrDateReservation')));
    $ArrTimeReservation                   = date('H:i:s', strtotime($this->input->post('ArrTimeReservation')));
    $DprtDateReservation                  = date('Y-m-d', strtotime($this->input->post('DprtDateReservation')));
    $DprtTimeReservation                  = date('H:i:s', strtotime($this->input->post('DprtTimeReservation')));
    $TotalPaxReservation                  = $this->input->post('TotalPaxReservation');
    $RoomTypeReservation                  = $this->input->post('RoomTypeReservation');
    $NoRoomReservation                    = $this->input->post('NoRoomReservation');
    $RoomRateReservation                  = $this->input->post('RoomRateReservation');
    $SpesialRequestReservation            = $this->input->post('SpesialRequestReservation');
    $BillingInstructionReservation        = $this->input->post('BillingInstructionReservation');
    $DepositByReservation                 = $this->input->post('DepositByReservation');
    $TypeCardReservation                  = $this->input->post('TypeCardReservation');
    $CardNoReservation                    = $this->input->post('CardNoReservation');
    $ExpiredDateReservation                  = date('Y-m-d', strtotime($this->input->post('ExpDateReservation')));
    $NoteReservation                      = $this->input->post('NoteReservation');
    $StatusReservation                    = $this->input->post('StatusReservation');
    $GuestTypeReservation                 = $this->input->post('GuestTypeReservation');
    $DetailGuestTypeReservation           = $this->input->post('DetailGuestTypeReservation');
    $RemarksReservation                   = $this->input->post('RemarksReservation');
    $TittleCPReservation                  = $this->input->post('TittleCPReservation');
    $FirstNameCPReservation               = $this->input->post('FirstNameCPReservation');
    $SurnameCPReservation                 = $this->input->post('SurnameCPReservation');
    // $MiddleNameCPReservation              = $this->input->post('MiddleNameCPReservation');
    // $LastNameCPReservation                = $this->input->post('LastNameCPReservation');
    $PhoneNumberCPReservation             = $this->input->post('PhoneNumberCPReservation');
    $EmailCPReservation                   = $this->input->post('EmailCPReservation');
    $DateTimeCPReservation                = $this->input->post('DateTimeCPReservation');
    $ReservByReservation                  = $this->input->post('ReservByReservation');
    $BuildingReservation                  = $this->input->post('BuildingReservation');
    $FloorReservation                     = $this->input->post('FloorReservation');

    // print_r($NoRoomReservation);

// }


    for ($i=0; $i < count($TotalPaxReservation); $i++) {

    $curl_handle     = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addRegistrationReservation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      
      'TittleReservation'                 => $TittleReservation,
      'FirstNameReservation'              => $FirstNameReservation,
      'SurnameReservation'                => $SurnameReservation,
      // 'MiddleNameReservation'             => $MiddleNameReservation,
      // 'LastNameReservation'               => $LastNameReservation,
      // 'ArrivalDateReservation'            => $ArrivalDateReservation,
      // 'DepartDateReservation'             => $DepartDateReservation,
      'ArrDateReservation'                => $ArrDateReservation,
      'ArrTimeReservation'                => $ArrTimeReservation,
      'DprtDateReservation'               => $DprtDateReservation,
      'DprtTimeReservation'               => $DprtTimeReservation,
      'TotalPaxReservation'               => $TotalPaxReservation[$i],
      'RoomTypeReservation'               => $RoomTypeReservation[$i],
      'NoRoomReservation'                 => $NoRoomReservation[$i],
      'RoomRateReservation'               => $RoomRateReservation[$i],
      'SpesialRequestReservation'         => $SpesialRequestReservation,
      'BillingInstructionReservation'     => $BillingInstructionReservation,
      'DepositByReservation'              => $DepositByReservation,
      'TypeCardReservation'               => $TypeCardReservation,
      'CardNoReservation'                 => $CardNoReservation,
      'ExpDateReservation'                => $ExpiredDateReservation,
      'NoteReservation'                   => $NoteReservation,
      'StatusReservation'                 => $StatusReservation,
      'GuestTypeReservation'              => $GuestTypeReservation,
      'DetailGuestTypeReservation'        => $DetailGuestTypeReservation,
      'RemarksReservation'                => $RemarksReservation,
      'TittleCPReservation'               => $TittleCPReservation,
      'FirstNameCPReservation'            => $FirstNameCPReservation,
      'SurnameCPReservation'              => $SurnameCPReservation,
      // 'MiddleNameCPReservation'           => $MiddleNameCPReservation,
      // 'LastNameCPReservation'             => $LastNameCPReservation,
      'PhoneNumberCPReservation'          => $PhoneNumberCPReservation,
      'EmailCPReservation'                => $EmailCPReservation,
      'DateTimeCPReservation'             => $DateTimeCPReservation,
      'ReservByReservation'               => $ReservByReservation,
      'BuildingReservation'               => $BuildingReservation[$i],
      'FloorReservation'                  => $FloorReservation[$i]

    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
  }



    redirect('home/reservation');
  
  }

  public function editReservation()
  {
    $id_reservation = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editReservation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_reservation' => $id_reservation
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editModalReservation'] = $result;

    echo json_encode($data);

  }

  public function viewReservation()
  {
    $id_reservation = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/viewReservation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_reservation' => $id_reservation
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['viewDetailReservation'] = $result;

    echo json_encode($data);

  }

  public function masterAgent(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getmasterAgent/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['mg']  = $result;


      $this->load->view('pages/header');
      $this->load->view('pages/master_agent',$data);
      $this->load->view('pages/footer');

    }

  }

  public function masterGroup(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getmasterGroup/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['mgrup']  = $result;


      $this->load->view('pages/header');
      $this->load->view('pages/master_grup',$data);
      $this->load->view('pages/footer');

    }

  }



  public function course(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCourse/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);
      $data['course'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/course', $data);
      $this->load->view('pages/footer');

    }

  }

  public function venueOfTraining(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCity/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvince/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountry/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getVenueOfTraining/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);
      
      $data['city'] = $result;
      $data['province'] = $result2;
      $data['country'] = $result3;
      $data['venue'] = $result4;

      $this->load->view('pages/header');
      $this->load->view('pages/venueOfTraining',$data);
      $this->load->view('pages/footer');

    }

  }

  public function instructor(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getInstructor/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['instructor'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/instructor', $data);
      $this->load->view('pages/footer');

    }

  }

  public function userAccount(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getUserAccount/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['userAccount'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/userAccount',$data);
      $this->load->view('pages/footer');

    }

  }

  public function officeBoy(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getLogisticOfficer/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['logisticOfficer'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/officeBoy', $data);
      $this->load->view('pages/footer');

    }

  }

  public function typeExdepro(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeExdepro/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['typeExdepro'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/typeExdepro', $data);
      $this->load->view('pages/footer');

    }

  }

  public function typeTraining(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getTypeTraining/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['typeTraining'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/typeTraining', $data);
      $this->load->view('pages/footer');

    }

  }

  public function religion(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getReligion/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['religion'] = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/religion', $data);
      $this->load->view('pages/footer');

    }

  }

  public function region(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCity/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvince/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountry/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);
      
      
      $data['city'] = $result;
      $data['province'] = $result2;
      $data['country'] = $result3;


      $this->load->view('pages/header');
      $this->load->view('pages/region',$data);
      $this->load->view('pages/footer');

    }

  }

  public function batchMaster(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCourse/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getVenueOfTraining/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getBatchMaster/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $data['course'] = $result;
      $data['venue'] = $result2;
      $data['batchMaster'] = $result3;

      $this->load->view('pages/header');
      $this->load->view('pages/batchMaster',$data);
      $this->load->view('pages/footer');

    }

  }

  public function addBatchMaster(){
    $course = $this->input->post('course');
    $batchCode = $this->input->post('batchCode');
    $classInput = $this->input->post('classInput');
    $venue = $this->input->post('venue');
    $room = $this->input->post('room');
    $begin = $this->input->post('begin');
    $end = $this->input->post('end');
    $location1 = $this->input->post('location1');
    $type1 = $this->input->post('type1');
    $language1 = $this->input->post('language1');
    $venue1 = $this->input->post('venue1');
    $dateSimulation = $this->input->post('dateSimulation');

    $newBegin = date('Y-m-d',strtotime($begin));
    $newEnd = date('Y-m-d',strtotime($end));
    $newdateSimulation = date('Y-m-d',strtotime($dateSimulation));


    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addBatchMaster/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'course' => $course,
      'batchCode' => $batchCode,
      'classInput' => $classInput,
      'venue'=>$venue,
      'room'=>$room,
      'begin'=>$newBegin,
      'end'=>$newEnd,
      'location1'=>$location1,
      'type1'=>$type1,
      'language1'=>$language1,
      'venue1'=>$venue1,
      'dateSimulation'=>$newdateSimulation
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/batchMaster');
  }

  public function detailfasilitas(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
    $dsc = $this->input->get('dsc');
    //$dscf = $this->input->get('dscf');
    $idFasilitas = $this->input->get('idFasilitas');
    //$idDetail = $this->input->get('idDetail');


    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterSubFacilities/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_fasilitas' => $idFasilitas
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    $result = json_decode($buffer, true);

    $curl_handle2 = curl_init();
    curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterFacilities/format/json');
    curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle2, CURLOPT_POST, 0);
    $buffer2 = curl_exec($curl_handle2);
    curl_close($curl_handle2);
    $result2 = json_decode($buffer2, true);

    $data['msubfasilitas'] = $result;
    $data['mfasilitas'] = $result2;
    $data['dscFasilitas'] = $dsc;
    //$data['dscfFasilitas'] = $dscf;
    $data['idFasilitas'] = $idFasilitas;
    //$data['idDetail'] = $idDetail;

    $this->load->view('pages/header');
    $this->load->view('pages/detail', $data);
    $this->load->view('pages/footer');
    }
  }

  function hapusSubFasilitas()
    {
      $id_detail = $this->input->post('id');
       $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusSubFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail' => $id_detail
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;  


    }

   public function bookchart(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getReligion/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailsInformation/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoRoom/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterBuilding/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterStatusRoom/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterRoom/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRoomCounter/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $data['chart'] = $result;
      $data['typesroom'] = $result2;
      $data['noroom'] = $result3;
      $data['building'] = $result4;
      $data['statusRoom'] = $result5;
      $data['masterRoom'] = $result6;
      $data['counterRoom'] = $result7;


      $this->load->view('pages/header');
      $this->load->view('pages/bookchart',$data);
      $this->load->view('pages/footer');

    }
  }

  public function changepswd(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
       $this->load->library('form_validation');
    $username = $this->session->userdata('admin_session');
    $password = $this->input->post('password');

    $curl_handle = curl_init();
    //curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.0.5/kurirsmiserver/user_controller/login/format/json');
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/login/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
        'username' => $username,
        'password' => $password
      ));

    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);

    $this->form_validation->set_rules('old_pass', 'Old Password', 'required');
    $this->form_validation->set_rules('new_pass', 'New Password', 'required');
    $this->form_validation->set_rules('re_new_pass', 'Re Password', 'required|matches[new_pass]');

    if($this->form_validation->run() == false)
    {
      // echo "form is validated";
      $this->load->view('pages/header');
      $this->load->view('pages/changepsw');
      $this->load->view('pages/footer');
    }else{
      $data = array(
        'password' => md5($this->input->post('new_pass'))
      );

    }

      // $this->load->view('pages/header');
      // $this->load->view('pages/changepsw',$data);
      // $this->load->view('pages/footer');

    }
  }

  public function editPsw()
  {
    $id_user = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editPassword/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_user' => $id_user
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editPassword'] = $result;

    echo json_encode($data);

  }

  public function updatePsw()
  {
    $password = $this->input->post('pass_edit');
    $id_user = $this->input->post('id_user');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updatePswd/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_user' => $id_user,
      'password'=>$password
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/changepswd');
  }
  

  public function RoomManagement(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getReligion/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getPersonalData/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHumanResources/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $curl_handle4 = curl_init();
      curl_setopt($curl_handle4, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCity/format/json');
      curl_setopt($curl_handle4, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle4, CURLOPT_POST, 0);
      $buffer4 = curl_exec($curl_handle4);
      curl_close($curl_handle4);
      $result4 = json_decode($buffer4, true);

      $curl_handle5 = curl_init();
      curl_setopt($curl_handle5, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getProvince/format/json');
      curl_setopt($curl_handle5, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle5, CURLOPT_POST, 0);
      $buffer5 = curl_exec($curl_handle5);
      curl_close($curl_handle5);
      $result5 = json_decode($buffer5, true);

      $curl_handle6 = curl_init();
      curl_setopt($curl_handle6, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getCountry/format/json');
      curl_setopt($curl_handle6, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle6, CURLOPT_POST, 0);
      $buffer6 = curl_exec($curl_handle6);
      curl_close($curl_handle6);
      $result6 = json_decode($buffer6, true);

      $curl_handle7 = curl_init();
      curl_setopt($curl_handle7, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailsInformation/format/json');
      curl_setopt($curl_handle7, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle7, CURLOPT_POST, 0);
      $buffer7 = curl_exec($curl_handle7);
      curl_close($curl_handle7);
      $result7 = json_decode($buffer7, true);

      $curl_handle8 = curl_init();
      curl_setopt($curl_handle8, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getRoom/format/json');
      curl_setopt($curl_handle8, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle8, CURLOPT_POST, 0);
      $buffer8 = curl_exec($curl_handle8);
      curl_close($curl_handle8);
      $result8 = json_decode($buffer8, true);

      $curl_handle9 = curl_init();
      curl_setopt($curl_handle9, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getFasilitas/format/json');
      curl_setopt($curl_handle9, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle9, CURLOPT_POST, 0);
      $buffer9 = curl_exec($curl_handle9);
      curl_close($curl_handle9);
      $result9 = json_decode($buffer9, true);

      $curl_handle10 = curl_init();
      curl_setopt($curl_handle10, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailSubFasilitas/format/json');
      curl_setopt($curl_handle10, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle10, CURLOPT_POST, 0);
      $buffer10 = curl_exec($curl_handle10);
      curl_close($curl_handle10);
      $result10 = json_decode($buffer10, true);

      $curl_handle11 = curl_init();
      curl_setopt($curl_handle11, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/viewDetFasilitas1/format/json');
      curl_setopt($curl_handle11, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle11, CURLOPT_POST, 0);
    
      $buffer11 = curl_exec($curl_handle11);
      curl_close($curl_handle11);
      $result11 = json_decode($buffer11, true);

      $curl_handle12 = curl_init();
      curl_setopt($curl_handle12, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getFasilitasMain/format/json');
      curl_setopt($curl_handle12, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle12, CURLOPT_POST, 0);
      $buffer12 = curl_exec($curl_handle12);
      curl_close($curl_handle12);
      $result12 = json_decode($buffer12, true);

      $curl_handle13 = curl_init();
      curl_setopt($curl_handle13, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getFasilitas2/format/json');
      curl_setopt($curl_handle13, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle13, CURLOPT_POST, 0);
      $buffer13 = curl_exec($curl_handle13);
      curl_close($curl_handle13);
      $result13 = json_decode($buffer13, true);

      $curl_handle14 = curl_init();
      curl_setopt($curl_handle14, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterStatusRoom/format/json');
      curl_setopt($curl_handle14, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle14, CURLOPT_POST, 0);
      $buffer14 = curl_exec($curl_handle14);
      curl_close($curl_handle14);
      $result14 = json_decode($buffer14, true);

      $curl_handle15 = curl_init();
      curl_setopt($curl_handle15, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterTax/format/json');
      curl_setopt($curl_handle15, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle15, CURLOPT_POST, 0);
      $buffer15 = curl_exec($curl_handle15);
      curl_close($curl_handle15);
      $result15 = json_decode($buffer15, true);

      $curl_handle16 = curl_init();
      curl_setopt($curl_handle16, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getMasterBuilding/format/json');
      curl_setopt($curl_handle16, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle16, CURLOPT_POST, 0);
      $buffer16 = curl_exec($curl_handle16);
      curl_close($curl_handle16);
      $result16 = json_decode($buffer16, true);

      $data['religion'] = $result;
      $data['personalData'] = $result2;
      $data['hr'] = $result3;
      $data['city'] = $result4;
      $data['province'] = $result5;
      $data['country'] = $result6;
      $data['typroom'] = $result7;
      $data['room'] = $result8;
      $data['dfasilitas'] = $result9;
      $data['dsubfasilitas'] = $result10;
      $data['subfasiliti'] = $result11;
      $data['dfasilitasmain'] = $result12;
      $data['dfasilitas2'] = $result13;
      $data['statusRoom'] = $result14;
      $data['Taxget'] = $result15;
      $data['building'] = $result16;


      //print_r($data);

      //$data['first'] = "type";
      // if ($this->session->flashdata('active') == 'type') {
         // $this->session->set_flashdata('active','type');
      // }

      

      
      $this->session->set_flashdata('active','type');
      $this->load->view('pages/header');
      $this->load->view('pages/room_management',$data);
      $this->load->view('pages/footer');

    }
  }

  // Start Segmentation

  public function segmentation(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getSegmentation/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $data['segment']       = $result;

      $this->load->view('pages/header');
      $this->load->view('pages/segmentation', $data);
      $this->load->view('pages/footer');

    }

  }

  // End Segmentation

  // Start Segmentation

  public function guestType(){
    if ($this->session->userdata('admin_session') == '') {
      $this->load->view('pages/login');
    } else {
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getguestType/format/json');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 0);
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $result = json_decode($buffer, true);

      $curl_handle2 = curl_init();
      curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getguestTypeDetail/format/json');
      curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle2, CURLOPT_POST, 0);
      $buffer2 = curl_exec($curl_handle2);
      curl_close($curl_handle2);
      $result2 = json_decode($buffer2, true);

      $curl_handle3 = curl_init();
      curl_setopt($curl_handle3, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getviewGuestTypeDetail/format/json');
      curl_setopt($curl_handle3, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle3, CURLOPT_POST, 0);
      $buffer3 = curl_exec($curl_handle3);
      curl_close($curl_handle3);
      $result3 = json_decode($buffer3, true);

      $data['gt']       = $result;
      $data['gtd']      = $result2;
      $data['vgtd']     = $result3;


      $this->session->set_flashdata('active','type');
      $this->load->view('pages/header');
      $this->load->view('pages/guestType', $data);
      $this->load->view('pages/footer');

    }

  }

  // End Segmentation

  public function addHumanResources(){

    $companyName = $this->input->post('companyName');
    $officeBuilding = $this->input->post('officeBuilding');
    $floor = $this->input->post('floor');
    $address = $this->input->post('address');
    $city = $this->input->post('city');
    $zipCode = $this->input->post('zipCode');
    $province = $this->input->post('province');
    $country = $this->input->post('country');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addHumanResources/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'companyName' => $companyName,
      'officeBuilding' => $officeBuilding,
      'floor' => $floor,
      'address'=>$address,
      'city'=>$city,
      'zipCode'=>$zipCode,
      'province'=>$province,
      'country'=>$country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/humanResources');
  }

  public function addHumanResourcesCP(){
    $contactPerson = $this->input->post('contactPerson');
    $jobTitle = $this->input->post('jobTitle');
    $phoneNumber = $this->input->post('phoneNumber');
    $ext = $this->input->post('ext');
    $mobilePhone1 = $this->input->post('mobilePhone1');
    $mobilePhone2 = $this->input->post('mobilePhone2');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addHumanResourcesCP/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'contactPerson' => $contactPerson,
      'jobTitle' => $jobTitle,
      'phoneNumber' => $phoneNumber,
      'ext'=>$ext,
      'mobilePhone1'=>$mobilePhone1,
      'mobilePhone2'=>$mobilePhone2
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    //echo $buffer;

    redirect('home/humanResources');
  }

  public function addCourse(){
    $courseName = $this->input->post('courseName');
    $type = $this->input->post('optionsCourse1');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addCourse/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'courseName' => $courseName,
      'type' => $type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/course');
  }

  public function addChapter(){
    $courseName = $this->input->post('courseName');
    $chapter = $this->input->post('chapter');
    $duration = $this->input->post('duration');

     $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addChapter/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'courseName' => $courseName,
      'chapter' => $chapter,
      'duration' => $duration
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/chapter');
  }

  public function addCity(){
    $city = $this->input->post('city');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addCity/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'city' => $city
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/region');
  }

  public function addProvince(){
    $province = $this->input->post('province');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addProvince/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'province' => $province
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/region');
  }

  public function addCountry(){
    $country = $this->input->post('country');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addCountry/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'country' => $country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/region');
  }

  public function addReligion(){
    $religion = $this->input->post('religion');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addReligion/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'religion' => $religion
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/religion');
  }

  public function addTypeOfTraining(){
    $typeTraining = $this->input->post('typeTraining');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addTypeOfTraining/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'typeTraining' => $typeTraining
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/typeTraining');
  }

  public function addTypeExdepro(){
    $typeExdepro = $this->input->post('typeExdepro');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addTypeOfExdepro/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'typeExdepro' => $typeExdepro
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/typeExdepro');
  }

  public function addVenueOfTraining(){
    $venueName = $this->input->post('venueName');
    $address = $this->input->post('address');
    $city = $this->input->post('city');
    $zipCode = $this->input->post('zipCode');
    $province = $this->input->post('province');
    $country = $this->input->post('country');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addVenueOfTraining/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'venueName' => $venueName,
      'address'=> $address,
      'city'=> $city,
      'zipCode' => $zipCode,
      'province' => $province,
      'country' => $country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/venueOfTraining');
  }

  public function addVenueOfTrainingCP(){
    $contactPerson = $this->input->post('contactPerson');
    $jobTitle = $this->input->post('jobTitle');
    $phoneNumber = $this->input->post('phoneNumber');
    $ext = $this->input->post('ext');
    $faxNumber = $this->input->post('faxNumber');
    $mobileNumber = $this->input->post('mobilePhone');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addVenueOfTrainingCP/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'contactPerson' => $contactPerson,
      'jobTitle'=> $jobTitle,
      'phoneNumber'=> $phoneNumber,
      'ext' => $ext,
      'faxNumber' => $faxNumber,
      'mobileNumber' => $mobileNumber
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/venueOfTraining');
  }

  public function addInstructor(){
    $instructorName = $this->input->post('instructorName');
    $instructorMobilePhone1 = $this->input->post('instructorMobilePhone1');
    $instructorMobilePhone2 = $this->input->post('instructorMobilePhone2');
    $instructorEmailAddress = $this->input->post('instructorEmailAddress');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addInstructor/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'instructorName' => $instructorName,
      'instructorMobilePhone1'=> $instructorMobilePhone1,
      'instructorMobilePhone2'=> $instructorMobilePhone2,
      'instructorEmailAddress' => $instructorEmailAddress
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/instructor');

  }

  public function addUserAccount(){
    $fullName = $this->input->post('fullName');
    $username = $this->input->post('username');
    $initial = $this->input->post('initial');
    $department = $this->input->post('department');
    $userLevel = $this->input->post('userLevel');
    $status = $this->input->post('status');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addUserAccount/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'fullName' => $fullName,
      'username'=> $username,
      'initial'=> $initial,
      'department' => $department,
      'userLevel' => $userLevel,
      'status' => $status
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/userAccount');
  }

  public function addLogisticOfficer(){
    $logisticOfficer = $this->input->post('logisticOfficer');
    $initial = $this->input->post('initial');
    $status = $this->input->post('status');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addLogisticOfficer/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'logisticOfficer' => $logisticOfficer,
      'initial'=> $initial,
      'status' => $status
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/officeBoy');

  }

  public function addPersonalData(){
    $kiranId = $this->input->post('kiranId');
    $bsmrId = $this->input->post('bsmrId');
    $fullName = $this->input->post('fullName');
    $mobilePhone1 = $this->input->post('mobilePhone1');
    $mobilePhone2 = $this->input->post('mobilePhone2');
    $birthDate = $this->input->post('birthDate');
    $religion = $this->input->post('religion');
    $status = $this->input->post('status');

    $newBirthDate = date('Y-m-d', strtotime($birthDate));

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addPersonalData/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'kiranId' => $kiranId,
      'bsmrId'=> $bsmrId,
      'fullName' => $fullName,
      'mobilePhone1' => $mobilePhone1,
      'mobilePhone2' => $mobilePhone2,
      'birthDate' => $newBirthDate,
      'religion' => $religion,
      'status' => $status
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    redirect('home/participant');

  }

  public function addRoom(){
    $name_room = $this->input->post('name_room');
    $type_room = $this->input->post('type_room');
    $no_of_room = $this->input->post('no_of_room');
    $building = $this->input->post('building');
    $floor = $this->input->post('floor');
    $price_room = $this->input->post('price_room');
    $max_person_room = $this->input->post('max_person_room');
    $status_room = $this->input->post('status_room');

    
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, http_build_query(array(
      'name_room' => $name_room,
      'type_room'=> $type_room,
      'no_of_room' => $no_of_room,
      'building' => $building,
      'floor' => $floor,
      'price_room' => $price_room,
      'max_person_room' => $max_person_room,
      'status_room'=>$status_room
      //'fasilitas' => $decode
    )));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    // echo $buffer;

    $this->session->set_flashdata('active','room');
    redirect('home/RoomManagement');
  }

  // public function addFasilitasRoomNew()
  // {
  //   $id_room = $this->input->post('id');
  //   $curl_handle = curl_init();
  //   curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editRoom/format/json');
  //   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  //   curl_setopt($curl_handle, CURLOPT_POST, 1);
  //   curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
  //     'id_room' => $id_room
  //   ));
  //   $buffer = curl_exec($curl_handle);
  //   curl_close($curl_handle);

  //   $result = json_decode($buffer, true);
    
  //   $data['editSubFasilitasNew'] = $result;

  //   echo json_encode($data);

  // }

  public function addFasilitasRoom(){
    $fasilitas = $this->input->post('fasilitas');
    $newFasilitas = json_encode($fasilitas);
    $decode = json_decode($newFasilitas);
    $idRoom  = $this->input->post('id_room_f');


    //print_r($fasilitas);
    //echo sizeof($fasilitas);

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addFasilitasRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, http_build_query(array(
      'fasilitas' => $decode,
      'id_room' => $idRoom
    )));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);
    // echo $buffer;

    $this->session->set_flashdata('active','room');
    redirect('home/participant');
  }

   public function updateFasilitasRoom(){
    echo $id_room = $this->input->post('id_rooms');
    $fasilitas = $this->input->post('fasilitas');
    $newFasilitas = json_encode($fasilitas);
    $decode = json_decode($newFasilitas, TRUE);
    //print_r($id_room);
    $curl_handle = curl_init(); 
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateFasilitasRoom/format/json'); 
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1); 
    curl_setopt($curl_handle,CURLOPT_POSTFIELDS, array(   
      'id_room' => $id_room,   
      'fasilitas' => $decode 
    )); 
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    print_r($buffer);
    //redirect('home/participant');
  }

  public function editRoom()
  {
    $id_room = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_room' => $id_room
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editDetailRoom'] = $result;

    echo json_encode($data);

  }

  public function viewDetFasilitas()
  {
    $id_room = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/viewDetFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_room' => $id_room
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    //$data['viewDetailFasilitas'] = $result;

    //echo json_encode($data);

    print_r($buffer);
  }


  public function viewDetFasilitas2()
  {
    $id_room = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/viewDetFasilitas2/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_room' => $id_room
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    //$data['viewDetailFasilitas'] = $result;

    //echo json_encode($data);

    print_r($buffer);
  }

  public function updateRoom()
  {
    $name_room = $this->input->post('name_room_edit');
    $type_room = $this->input->post('type_room_edit');
    $no_of_room = $this->input->post('no_of_room_edit');
    $building = $this->input->post('building_edit');
    $floor = $this->input->post('floor_edit');
    $price_room = $this->input->post('price_room_edit');
    $max_person_room = $this->input->post('max_person_room_edit');
    $id_room = $this->input->post('id_room');
    $fasilitas = $this->input->post('fasilitas');
    $newFasilitas = json_encode($fasilitas);
    $decode = json_decode($newFasilitas, TRUE);
    $status_room = $this->input->post('status_room_edit');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_room' => $id_room,
      'name_room' => $name_room,
      'type_room' => $type_room,
      'no_of_room' => $no_of_room,
      'building' => $building,
      'floor' => $floor,
      'price_room' => $price_room,
      'max_person_room' => $max_person_room,
      'fasilitas' => $decode,
      'status_room' => $status_room
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/RoomManagement');
  }

  public function hapusRoom()
    {
      $id_room = $this->input->post('id');
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/removeRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_room' => $id_room
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;
    
    $this->session->set_flashdata('active','room');


    //redirect('home/participant');
    }

  public function addMasterFacilities(){

    $dsc_fasilitas = $this->input->post('dsc_fasilitas');
    $dsc_detail = $this->input->post('dsc_detail');
    $qty = $this->input->post('qty');
    $brand = $this->input->post('brand');
    $note = $this->input->post('note');
    $id = $this->input->post('id_fasilitas');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addMasterFacilities/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'dsc_fasilitas' => $dsc_fasilitas,
      'dsc_detail' => $dsc_detail,
      'qty' => $qty,
      'brand' => $brand,
      'note' => $note,
      'id'=> $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    // $data['types'] = $active;

    // $this->session->set_flashdata('active','type');

    redirect('home/detailfasilitas/?dsc='.$dsc_fasilitas.'&idFasilitas='.$id);

  }

  public function editSubFasilitas()
  {
    $id_detail = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editSubFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail' => $id_detail
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editDetailSubFasilitas'] = $result;

    echo json_encode($data);

  }

  public function updateSubFasilitas()
  {
    $id_fasilitas_detail = $this->input->post('id_fasilitas_detail');
    $dsc_detail = $this->input->post('detail_sub_fasilitas');
    $qty = $this->input->post('detail_sub_qty');
    $brand = $this->input->post('detail_sub_brand');
    $note = $this->input->post('note_modal');
    $id_detail = $this->input->post('id_detail');
    $id = $this->input->post('id_fasilitas');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateSubFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail' => $id_detail,
      'dsc_detail' => $dsc_detail,
      'qty' => $qty,
      'brand' => $brand,
      'note' => $note,
      'id'=> $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/detailfasilitas/?dsc='.$id_fasilitas_detail.'&idFasilitas='.$id);
    //redirect('home/detailfasilitas/?dsc='.$dsc_detail.'$idFasilitas='.$id_detail);
  
  }

  

  public function addDetailsInformation(){
    $dsc_tipe = $this->input->post('dsc_tipe');
    $price = $this->input->post('price');
    // $company = $this->input->post('company');
    // $status = $this->input->post('status');
    // $jobTitle = $this->input->post('jobTitle');
    // $division = $this->input->post('division');
    // $officeBuilding = $this->input->post('officeBuilding');
    // $floor = $this->input->post('floor');
    // $officeNumber = $this->input->post('officeNumber');
    // $ext = $this->input->post('ext');
    // $address = $this->input->post('address');
    // $faxNumber = $this->input->post('faxNumber');
    // $emailAddress = $this->input->post('emailAddress');
    // $city = $this->input->post('city');
    // $zipCode = $this->input->post('zipCode');
    // $province = $this->input->post('province');
    // $country = $this->input->post('country');

    $active = $this->input->post('active');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addDetailsInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'dsc_tipe' => $dsc_tipe,
      'price' => str_replace(".","","$price")

      // 'company' => $company,
      // 'status'=> $status,
      // 'jobTitle' => $jobTitle,
      // 'division' => $division,
      // 'officeBuilding' => $officeBuilding,
      // 'floor' => $floor,
      // 'officeNumber' => $officeNumber,
      // 'ext' => $ext,
      // 'address' => $address,
      // 'faxNumber' => $faxNumber,
      // 'emailAddress' => $emailAddress,
      // 'city' => $city,
      // 'zipCode' => $zipCode,
      // 'province' => $province,
      // 'country' => $country
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $data['types'] = $active;

    $this->session->set_flashdata('active','type');

    redirect('home/RoomManagement');

  }

  public function addguestType(){
    $guest_type = $this->input->post('guest_type');

    $active = $this->input->post('active');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addguestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'guest_type' => $guest_type,
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $data['types'] = $active;

    $this->session->set_flashdata('active','type');

    redirect('home/guestType');

  }

  public function newGuestType(){
    $active = $this->input->post('active');
    $data['types'] = $active;

    $this->session->set_flashdata('active','type');

    redirect('home/guestType');

  }

  public function newDetail(){
    $active = $this->input->post('active');
    $data['types'] = $active;

    $this->session->set_flashdata('active','detail');
    redirect('home/guestType');

  }

   public function addviewGuestTypeDetail(){
    $type_guest = $this->input->post('detail_type_guest');
    $detail = $this->input->post('detail');
    $price = $this->input->post('price');


    $active = $this->input->post('active');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addviewGuestTypeDetail/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'detail_type_guest' => $type_guest,
      'detail'     => $detail,
      'price' => $price
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $data['types'] = $active;

    $this->session->set_flashdata('active','detail');

    redirect('home/guestType');

  }

  public function getGuestTentativeModal()
  {
    $id_regist = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editGuestTentativeModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_regist' => $id_regist
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editGuestTentative'] = $result;

    echo json_encode($data);

  }

  // public function updateGuest()
  // {
  //   $segmentation                   = $this->input->post('segmen_edit');
  //   $guest_type                     = $this->input->post('guest_type_edit');
  //   $detail_guest_type              = $this->input->post('detail_guest_type_edit');
  //   $first_name                     = $this->input->post('first_edit');
  //   $middle_name                    = $this->input->post('middle_edit');
  //   $last_name                      = $this->input->post('last_edit');
  //   $identity_foto                  = $this->input->post('identity_foto_edit');
  //   $identity_tipe                  = $this->input->post('identity_tipe_edit');
  //   $identity_number                = $this->input->post('identity_number_edit');
  //   $gender                         = $this->input->post('gender_edit');
  //   $email                          = $this->input->post('email_edit');
  //   $phone                          = $this->input->post('phone_edit');
  //   $regist_country                 = $this->input->post('regist_country');
  //   $regist_province                = $this->input->post('regist_province');
  //   $regist_city                    = $this->input->post('regist_city');
  //   $zipCode                        = $this->input->post('zip_code');
  //   $address                        = $this->input->post('address');
  //   $check_in                       = $this->input->post('chki_edit');
  //   $check_out                      = $this->input->post('chko_edit');
  //   $status                         = $this->input->post('status_edit');
  //   $agent                          = $this->input->post('agent_edit');
  //   $currency                       = $this->input->post('currency_edit');
  //   $room_type                      = $this->input->post('room_edit');
  //   $room_number                    = $this->input->post('rm_edit');
  //   $price_regist                   = $this->input->post('price_regist_edit');
  //   $pay_method                     = $this->input->post('pay_method');
  //   $val_code                       = $this->input->post('val_code_edit');
  //   $id_regist                      = $this->input->post('id_regist');

  //   // $phone                          = $this->input->post('phone_edit');
  //   // $type_room                      = $this->input->post('room_edit');
   

  //   $curl_handle      = curl_init();
  //   curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateGuestInformation/format/json');
  //   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  //   curl_setopt($curl_handle, CURLOPT_POST, 1);
  //   curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
  //     'id_regist'                     => $id_regist,
  //     'segmentation'                  => $segmentation,
  //     'guest_type'                    => $guest_type,
  //     'detail_guest_type'             => $detail_guest_type,
  //     'first_name'                    => $first_name,
  //     'middle_name'                   => $middle_name,
  //     'last_name'                     => $last_name,
  //     'identity_foto'                 => $identity_foto,
  //     'identity_tipe'                 => $identity_tipe,
  //     'identity_number'               => $identity_number,
  //     'gender'                        => $gender,
  //     'email'                         => $email,
  //     'phone'                         => $phone,
  //     'regist_country'                => $regist_country,
  //     'regist_province'               => $regist_province,
  //     'regist_city '                  => $regist_city,
  //     'zip_code'                      => $zip_code,
  //     'address'                       => $address,
  //     'adf_date'                      => $check_in,
  //     'adt_date'                      => $check_out,
  //     'status'                        => $status,
  //     'agent'                         => $agent,
  //     'currency'                      => $currency,
  //     'guest_room_type'               => $room_type,
  //     'no_of_room'                    => $room_number,
  //     'price_regist'                  => $price_regist,
  //     'pay_method'                    => $pay_method,
  //     'val_code'                      => $val_code
  //     // 'phone'                         => $phone,
  //     // 'type_room'                     => $type_room,
  //   ));
  //   $buffer           = curl_exec($curl_handle);
  //   curl_close($curl_handle);

  //   $result           = json_decode($buffer, true);
    
  //   redirect('home/Guest');
  // }

  public function updateGuest()
  {
    $this->load->helper(array('form','file'));

    $this->load->library('upload');

    $config = array();

    $config['upload_path'] = './assets/guest_foto/'; //path folder

    $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan

    $config['max_size'] = '10096'; //maksimum besar file 5M

    $config['overwrite'] = FALSE;

    $this->upload->initialize($config);

    if( ! $this->upload->do_upload("identity_foto_edit")){

    //echo the errors
    $this->upload->display_errors();
    }
      if($this->input->post('submitCompany') == 'payment'){

          $ERPID = $this->postToERP();

      }else{
          $ERPID = "";
      }
    $file_name = $this->upload->file_name;
    
    // $segment            = $this->input->post('segment_edit');
    $tittle             = $this->input->post('tittle_edit');
    $first_name         = $this->input->post('first_name_edit');
    $surname            = $this->input->post('surname_edit');
    // $middle_name        = $this->input->post('middle_name_edit');
    // $last_name          = $this->input->post('last_name_edit');
    $address            = $this->input->post('address_edit');
    $regist_country     = $this->input->post('regist_country_edit');
    $CityRegist         = $this->input->post('CityRegist');
    $zip_code           = $this->input->post('zip_code_edit');
    $phone              = $this->input->post('phone_edit');
    $guest_type         = $this->input->post('guest_type_edit');
    $guest_detail       = $this->input->post('detail_guest_type_edit');
    $jabatan            = $this->input->post('jabatan_edit');
    $identity_tipe      = $this->input->post('identity_type_edit');
    $identity_number    = $this->input->post('identity_number_edit');
    $date_of_birth      = $this->input->post('date_birth_edit');
    $email              = $this->input->post('email_edit');
    $nationality        = $this->input->post('nationality_edit');
    $deposit            = $this->input->post('DepositRegistrationEditModal');
    $type_card          = $this->input->post('TypeCardRegistrationEditModal');
    $card_no            = $this->input->post('CardNoRegistrationEditModal');
    $exp_date           = $this->input->post('ExpDateRegistrationEditModal');
    $reserv_handled     = $this->input->post('ReservByRegistrationEditModal');
    $check_by           = $this->input->post('CheckedByRegistrationEditModal');
    $purpose_visit      = $this->input->post('PurposeofVisitRegistrationEditModal');
    $building           = $this->input->post('BuildingReservationEditModal');
    $floor              = $this->input->post('FloorReservationEditModal');
    $no_room            = $this->input->post('NoRoomReservationEditModal');
    $room_rate          = $this->input->post('room_rate_edit');
    $room               = $this->input->post('room_edit');

    $ArrDateUpdateRegistration             = date( 'Y-m-d', strtotime($this->input->post('checkInDateEdit')));
    $ArrTimeUpdateRegistration             = date( 'H:i:s', strtotime($this->input->post('checkInTimeEdit')));

    $DprtDateUpdateRegistration            = date( 'Y-m-d', strtotime($this->input->post('checkOutDateEdit')));
    $DprtTimeUpdateRegistration            = date( 'H:i:s', strtotime($this->input->post('checkOutTimeEdit')));

    // $arrival_date       = $this->input->post('chki_edit');
    // $departure_date     = $this->input->post('chko_edit');  
    $total_pax          = $this->input->post('total_pax_edit');
    $status             = $this->input->post('status_edit');
    $identity_photo     = $this->input->post('identity_foto_edit');
    $spesial_request    = $this->input->post('SpesialRequestRegistrationEditModal'); 

    // $identity_foto      = $this->input->post('identity_foto_edit');
    // $gender             = $this->input->post('gender_edit');
    // $regist_province    = $this->input->post('regist_province_edit');
    // $regist_city        = $this->input->post('regist_city_edit');
    // $address            = $this->input->post('address_edit');
  
    // $remarks            = $this->input->post('remarks_edit');
    // $payment_method     = $this->input->post('pay_method_edit');
    // $status_payment     = $this->input->post('stat_payment_edit');
    // $total_bil          = $this->input->post('tot_bill_edit');
        $id_regist          = $this->input->post('id_regist');

    $payment_type = $this->input->post('payment_type');
    if($payment_type == 'cash'){
      $dataPayment = array(
          'date_payment' => $this->input->post('cash_date_payment'),
          'remark_payment' => $this->input->post('cash_remark_payment'),
          'bank_code' => "",
          'card_owner_name' => "",
          'payment_amount' => $this->input->post('cash_payment_amount'),
          'card_number' => "",
          'bank_issuer' => "",
          //'stat_payment' => "complete"
      );
    }elseif ($payment_type == 'transfer'){
        $dataPayment = array(
            'date_payment' => $this->input->post('transfer_date_payment'),
            'remark_payment' => $this->input->post('transfer_remark_payment'),
            'bank_code' => $this->input->post('transfer_from_bank'),
            'card_owner_name' => "",
            'payment_amount' => $this->input->post('transfer_payment_amount'),
            'card_number' => $this->input->post('transfer_bank_account_number'),
            'bank_issuer' => "",
            //'stat_payment' => "complete"
        );
    }elseif ($payment_type == 'debit'){
        $dataPayment = array(
            'date_payment' => $this->input->post('debit_date_payment'),
            'remark_payment' => $this->input->post('debit_remark_payment'),
            'bank_code' => "",
            'card_owner_name' => "",
            'payment_amount' => $this->input->post('debit_payment_amount'),
            'card_number' => "",
            'bank_issuer' => $this->input->post('debit_bank_issuer'),
            //'stat_payment' => "complete"
        );
    }elseif ($payment_type == 'kredit'){
        $dataPayment = array(
            'date_payment' => $this->input->post('kredit_date_payment'),
            'remark_payment' => $this->input->post('kredit_remark_payment'),
            'bank_code' => "",
            'card_owner_name' => $this->input->post('kredit_name'),
            'payment_amount' => $this->input->post('kredit_payment_amount'),
            'card_number' => $this->input->post('kredit_card_number'),
            'bank_issuer' => $this->input->post('kredit_bank_issuer'),
            //'stat_payment' => "complete"
        );
    }
      if($this->input->post('submitCompany') == 'payment'){

          $dataPayment['stat_payment'] = 'complete';

      }else{
          $dataPayment['stat_payment'] = 'incomplete';
      }

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateGuestInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(

      'id_regist'                   => $id_regist,
      'tittle_edit'                 => $tittle,
      'first_name_edit'             => $first_name,
      'surname_edit'                => $surname,
      // 'middle_name_edit'            => $middle_name,
      // 'last_name_edit'              => $last_name,
      'address_edit'                => $address,
      'regist_country_edit'         => $regist_country,
      'CityRegist'                  => $CityRegist,
      'zip_code_edit'               => $zip_code,
      'phone_edit'                  => $phone,
      'guest_type_edit'             => $guest_type,
      'detail_guest_type_edit'      => $guest_detail,
      'jabatan_edit'                => $jabatan,
      'identity_type_edit'          => $identity_tipe,
      'identity_number_edit'        => $identity_number,
      'date_birth_edit'             => $date_of_birth,
      'email_edit'                  => $email,
      'nationality_edit'            => $nationality,
      'DepositRegistrationEditModal'=> $deposit,
      'TypeCardRegistrationEditModal'=> $type_card,
      'CardNoRegistrationEditModal' => $card_no,
      'ExpDateRegistrationEditModal'=> $exp_date,
      'ReservByRegistrationEditModal'=> $reserv_handled,
      'CheckedByRegistrationEditModal'=> $check_by,
      'PurposeofVisitRegistrationEditModal'=> $purpose_visit,
      'BuildingReservationEditModal'=> $building,
      'FloorReservationEditModal'   => $floor,
      'NoRoomReservationEditModal'  => $no_room,
      'room_rate_edit'              => $room_rate,
      'room_edit'                   => $room,
      'checkInDateEdit'             => $ArrDateUpdateRegistration,
      'checkInTimeEdit'             => $ArrTimeUpdateRegistration,
      'checkOutDateEdit'            => $DprtDateUpdateRegistration,
      'checkOutTimeEdit'            => $DprtTimeUpdateRegistration,

      // 'chki_edit'                   => $arrival_date,
      // 'chko_edit'                   => $departure_date,
      'total_pax_edit'              => $total_pax,
      'status_edit'                 => $status,
      'identity_foto_edit'          => $file_name,
      'SpesialRequestRegistrationEditModal' => $spesial_request,
      'date_payment'                => $dataPayment['date_payment'],
      'remark_payment'              => $dataPayment['remark_payment'],
      'bank_code'                   => $dataPayment['bank_code'],
      'card_owner_name'             => $dataPayment['card_owner_name'],
      'payment_amount'              => $dataPayment['payment_amount'],
      'card_number'                 => $dataPayment['card_number'],
      'bank_issuer'                 => $dataPayment['bank_issuer'],
      'stat_payment_edit'           => $dataPayment['stat_payment'],
      'pembayaran'                  => $ERPID
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);

    redirect('home/guest');
  }



  function getToken(){

      if ($this->session->userdata('token') == '') {
          $curl_handle = curl_init();
          curl_setopt($curl_handle, CURLOPT_URL, 'http://sentral.co.id/erp/backend-2.0/public/index.php/api/v2/auth/login');
          curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($curl_handle, CURLOPT_POST, 1);
          curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
              'username' => "admin",
              'password' => "password",
          ));
          $buffer = curl_exec($curl_handle);
          curl_close($curl_handle);

          $response = json_decode($buffer);
          if(isset($response->status) && $response->status == 'success'){
              $this->session->set_userdata('token',$response->token);
          }else{
              die("failed to login to erp");
          }
      }
  }

  function getTaxList(){
      $this->getToken();
      $token = $this->session->userdata('token');
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://sentral.co.id/erp/backend-2.0/public/index.php/api/v2/list/Tax');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 1);
      curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array("token:$token"));
      curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array());
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $response = json_decode($buffer);
      if(isset($response->status) && $response->status == 'success'){
          $this->session->set_userdata('token',$response->token);
      }else{
          die("failed to get tax list");
      }
  }

    function searchCustomer(){
        $this->getToken();
        $token = $this->session->userdata('token');
        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, 'http://sentral.co.id/erp/backend-2.0/public/index.php/api/v2/list/Customer');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array("token:$token"));
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array());
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);
        $response = json_decode($buffer);
        if(isset($response->status) && $response->status == 'success'){
            echo json_encode($response);
        }else{
            die("failed to get customer list");
        }
    }

  function postToERP(){

      $segment            = $this->input->post('segment_edit');
      $guest_type         = $this->input->post('guest_type_edit');
      $guest_detail       = $this->input->post('detail_guest_type_edit');
      $tittle             = $this->input->post('tittle_edit');
      $first_name         = $this->input->post('first_name_edit');
      $middle_name        = $this->input->post('middle_name_edit');
      $last_name          = $this->input->post('last_name_edit');
      $identity_foto      = $this->input->post('identity_foto_edit');
      $identity_tipe      = $this->input->post('identity_type_edit');
      $identity_number    = $this->input->post('identity_number_edit');
      $gender             = $this->input->post('gender_edit');
      $email              = $this->input->post('email_edit');
      $phone              = $this->input->post('phone_edit');
      $regist_country     = $this->input->post('regist_country_edit');
      $regist_province    = $this->input->post('regist_province_edit');
      $regist_city        = $this->input->post('regist_city_edit');
      $zip_code           = $this->input->post('zip_code_edit');
      $address            = $this->input->post('address_edit');
      $arrival_date       = $this->input->post('chki_edit');
      $departure_date     = $this->input->post('chko_edit');
      $total_pax          = $this->input->post('total_pax_edit');
      $room               = $this->input->post('room_edit');
      $room_rate          = $this->input->post('room_rate_edit');
      $no_room            = $this->input->post('no_room_edit');
      $status             = $this->input->post('status_edit');
      $remarks            = $this->input->post('remarks_edit');
      $payment_method     = $this->input->post('pay_method_edit');
      $status_payment     = $this->input->post('stat_payment_edit');
      $total_bil          = $this->input->post('tot_bill_edit');
      $id_regist          = $this->input->post('id_regist');

      $payment_type = $this->input->post('payment_type');
      if($payment_type == 'cash'){
          $dataPayment = array(
              'payment_date' => $this->input->post('cash_date_payment'),
              'payment_remark' => $this->input->post('cash_remark_payment'),
              'card_number' => "",
              'card_owner' => "",
              'pay_amount' => $this->input->post('cash_payment_amount'),
              'source_bank' => "",
              'bank_issuer' => 'CASH',
              'bank_account_number' => "",
              'target_bank_issuer' => 'N/A',
              'target_bank_account_number' => "",
              'bank' => "",
              'status' => 'ACTIVE',
              'payment_type' => 'CASH',
          );
      }elseif ($payment_type == 'transfer'){
          $dataPayment = array(
              'payment_date' => $this->input->post('transfer_date_payment'),
              'payment_remark' => $this->input->post('transfer_remark_payment'),
              'card_number' => "",
              'card_owner' => "",
              'pay_amount' => $this->input->post('transfer_payment_amount'),
              'source_bank' => $this->input->post('transfer_from_bank'),
              'bank_issuer' => $this->input->post('transfer_from_bank'),
              'bank_account_number' => $this->input->post('transfer_bank_account_number'),
              'target_bank_issuer' => 'N/A',
              'target_bank_account_number' => "",
              'bank' => "",
              'status' => 'ACTIVE',
              'payment_type' => 'TRANSFER',
          );
      }elseif ($payment_type == 'debit'){
          $dataPayment = array(
              'payment_date' => $this->input->post('debit_date_payment'),
              'payment_remark' => $this->input->post('debit_remark_payment'),
              'card_number' => "",
              'card_owner' => "",
              'pay_amount' => $this->input->post('debit_payment_amount'),
              'source_bank' => '',
              'bank_issuer' => $this->input->post('debit_bank_issuer'),
              'bank_account_number' => '',
              'target_bank_issuer' => 'N/A',
              'target_bank_account_number' => "",
              'bank' => "",
              'status' => 'ACTIVE',
              'payment_type' => 'DEBIT',
          );
      }elseif ($payment_type == 'kredit'){
          $dataPayment = array(
              'payment_date' => $this->input->post('kredit_date_payment'),
              'payment_remark' => $this->input->post('kredit_remark_payment'),
              'card_number' => $this->input->post('kredit_card_number'),
              'card_owner' => $this->input->post('kredit_name'),
              'pay_amount' => $this->input->post('kredit_payment_amount'),
              'source_bank' => '',
              'bank_issuer' => $this->input->post('kredit_bank_issuer'),
              'bank_account_number' => '',
              'target_bank_issuer' => 'N/A',
              'target_bank_account_number' => "",
              'bank' => "",
              'status' => 'ACTIVE',
              'payment_type' => 'CREDIT',
          );
      }
        $data = array (
            'site_id' => 1,
            'customer_input_type' => 'N',
            'customer' => array(
                'customer_title' => $tittle,
                'customer_name' => $first_name." ".$middle_name." ".$last_name,
                'customer_gender' => $gender,
                "pic_name" => "",
                "address" => $address,
                "city" => "",
                "postcode" => $zip_code,
                "phone_number" => $phone,
                "fax_number" => "",
                "customer_email" => $email
            ),
            'sales_order_items' => array(array(
                "item_id"=>1,
                "item_varian_id"=>1,
                "quantity"=>1,
                "cost"=>$total_bil,
                "price"=>"20000",
                "quantity_sent"=>1,
                "quantity_sent_actual"=>1,
                "promotions"=>array()
            )),
            'deliveries' => array(),
            'delivery_type' => 'PICKUP',
            'order_type' => 'POS',
            'type' => 'POS',
            'product_type' => '',
            'supplier_email' => '',
            'disc_additional' => 0,
            'tax' => '',
            'service_charge' => 0,
            'status' => 'COMPLETED',
            'order_date' => 'today',
            'promotions' => array(),
            'site_area_id' => 1,
            'invoice' => array(
                'invoice_id' => '',
                'invoice_reference' => '',
                'pay_amount' => 0,
                'payment_date' => 'today',
                'payment_type' => $payment_type,
                'payments' =>array($dataPayment),
            ),
        );

        var_dump($data);
      $this->getToken();
      $token = $this->session->userdata('token');
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://sentral.co.id/erp/backend-2.0/public/index.php/api/v2/action/SalesOrder/create_pos/0');
      curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl_handle, CURLOPT_POST, 1);
      curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array("token:$token"));
      curl_setopt($curl_handle, CURLOPT_POSTFIELDS, json_encode($data));
      $buffer = curl_exec($curl_handle);
      curl_close($curl_handle);
      $response = json_decode($buffer);

      if(isset($response->status) && $response->status == 'success'){
          $order_id = $response->order_id;
          return $order_id;
      }else{
          die("failed to create order");
      }

  }

  public function updateReservation()
  {

    $TittleUpdateReservation              = $this->input->post('TittleReservationEditModal');
    $FirstnameUpdateReservation           = $this->input->post('FirstNameReservationEditModal');
    $SurnameUpdateReservation             = $this->input->post('SurnameReservationEditModal');
    // $MiddleNameUpdateReservation          = $this->input->post('MiddleNameReservationEditModal');
    // $LastNameUpdateReservation            = $this->input->post('LastNameReservationEditModal');
    // $ArrivalDateUpdateReservation         = $this->input->post('ArrivalDateReservationEditModal');
    // $DepartDateUpdateReservation          = $this->input->post('DepartDateReservationEditModal');
    $ArrDateUpdateReservation             = date( 'Y-m-d', strtotime($this->input->post('ArrivalDateReservationEditModal')));
    $ArrTimeUpdateReservation             = date( 'H:i:s', strtotime($this->input->post('ArrivalTimeReservationEditModal')));

    $DprtDateUpdateReservation            = date( 'Y-m-d', strtotime($this->input->post('DepartureDateReservationEditModal')));
    $DprtTimeUpdateReservation            = date( 'H:i:s', strtotime($this->input->post('DepartureTimeReservationEditModal')));


    $TotalPaxUpdateReservation            = $this->input->post('TotalPaxReservationEditModal');
    $BuildingUpdateReservation            = $this->input->post('BuildingReservationEditModal');
    $FloorUpdateReservation               = $this->input->post('FloorReservationEditModal');
    $NoRoomUpdateReservation              = $this->input->post('NoRoomReservationEditModal');
    $RoomTypeUpdateReservation            = $this->input->post('RoomTypeReservationEditModal');
    $RoomRateUpdateReservation            = $this->input->post('RoomRateReservationEditModal');
    $SpesialRequestUpdateReservation      = $this->input->post('SpesialRequestReservationEditModal');
    $BillingInstructionUpdateReservation  = $this->input->post('BillingInstructionReservationEditModal');
    $DepositUpdateReservation             = $this->input->post('DepositByReservationEditModal');
    $TypeCardUpdateReservation            = $this->input->post('TypeCardReservationEditModal');
    $CardNoUpdateReservation              = $this->input->post('CardNoReservationEditModal');
    $ExpDateUpdateReservation             = date( 'Y-m-d', strtotime($this->input->post('ExpDateReservationEditModal')));
    $NoteUpdateReservation                = $this->input->post('NoteReservationEditModal');
    $StatusUpdateReservation              = $this->input->post('StatusReservationEditModal');
    $GuestTypeUpdateReservation           = $this->input->post('GuestTypeReservationEditModal');
    $DetailGuestTypeUpdateReservation     = $this->input->post('DetailGuestTypeReservationEditModal');
    $RemarksUpdateReservation             = $this->input->post('RemarksReservationEditModal');
    $TittleCPUpdateReservation            = $this->input->post('TittleCPReservationEditModal');
    $FirstNameCPUpdateReservation         = $this->input->post('FirstNameCPReservationEditModal');
    $MiddleNameCPUpdateReservation        = $this->input->post('MiddleNameCPReservationEditModal');
    $LastNameCPUpdateReservation          = $this->input->post('LastNameCPReservationEditModal');
    $PhoneNumberCPUpdateReservation       = $this->input->post('PhoneNumberCPReservationEditModal');
    $EmailCPUpdateReservation             = $this->input->post('EmailCPReservationEditModal');
    $DateTimeCPUpdateReservation          = $this->input->post('DateTimeCPReservationEditModal');
    $ReservByUpdateReservation            = $this->input->post('ReservByReservationEditModal');
    $id_reservation                       = $this->input->post('id_reservation');

    $curl_handle      = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateReservation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(

      'id_reservation'                            => $id_reservation,
      'TittleReservationEditModal'                => $TittleUpdateReservation,
      'FirstNameReservationEditModal'             => $FirstnameUpdateReservation,
      'SurnameReservationEditModal'               => $SurnameUpdateReservation,
      // 'MiddleNameReservationEditModal'            => $MiddleNameUpdateReservation,
      // 'LastNameReservationEditModal'              => $LastNameUpdateReservation,
      'ArrivalDateReservationEditModal'           => $ArrDateUpdateReservation,
      'ArrivalTimeReservationEditModal'           => $ArrTimeUpdateReservation,

      'DepartureDateReservationEditModal'         => $DprtDateUpdateReservation,
      'DepartureTimeReservationEditModal'         => $DprtTimeUpdateReservation,

      'TotalPaxReservationEditModal'              => $TotalPaxUpdateReservation,
      'BuildingReservationEditModal'              => $BuildingUpdateReservation,
      'FloorReservationEditModal'                 => $FloorUpdateReservation,
      'NoRoomReservationEditModal'                => $NoRoomUpdateReservation,
      'RoomTypeReservationEditModal'              => $RoomTypeUpdateReservation,
      'RoomRateReservationEditModal'              => $RoomRateUpdateReservation,
      'SpesialRequestReservationEditModal'        => $SpesialRequestUpdateReservation,
      'BillingInstructionReservationEditModal'    => $BillingInstructionUpdateReservation,
      'DepositByReservationEditModal'             => $DepositUpdateReservation,
      'TypeCardReservationEditModal'              => $TypeCardUpdateReservation,
      'CardNoReservationEditModal'                => $CardNoUpdateReservation,
      'ExpDateReservationEditModal'               => $ExpDateUpdateReservation,
      'NoteReservationEditModal'                  => $NoteUpdateReservation,
      'StatusReservationEditModal'                => $StatusUpdateReservation,
      'GuestTypeReservationEditModal'             => $GuestTypeUpdateReservation,
      'DetailGuestTypeReservationEditModal'       => $DetailGuestTypeUpdateReservation,
      'RemarksReservationEditModal'               => $RemarksUpdateReservation,
      'TittleCPReservationEditModal'              => $TittleCPUpdateReservation,
      'FirstNameCPReservationEditModal'           => $FirstNameCPUpdateReservation,
      'MiddleNameCPReservationEditModal'          => $MiddleNameCPUpdateReservation,
      'LastNameCPReservationEditModal'            => $LastNameCPUpdateReservation,
      'PhoneNumberCPReservationEditModal'         => $PhoneNumberCPUpdateReservation,
      'EmailCPReservationEditModal'               => $EmailCPUpdateReservation,
      'DateTimeCPReservationEditModal'            => $DateTimeCPUpdateReservation,
      'ReservByReservationEditModal'              => $ReservByUpdateReservation
      
    ));
    $buffer           = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result           = json_decode($buffer, true);
    
    redirect('home/reservation');
  }

  public function hapusReservation()
    {
      $id_reservation = $this->input->post('id');
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusReservation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_reservation' => $id_reservation
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;
    
    $this->session->set_flashdata('active','room');


    //redirect('home/participant');
    }

    public function update()
  {
    $dsc_tipe = $this->input->post('dsc_tipe_edit');
    $price = $this->input->post('price_edit');
    $id_tipe = $this->input->post('id_tipe');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateDetailsInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_tipe' => $id_tipe,
      'dsc_tipe'=>$dsc_tipe,
      'price' => $price
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/RoomManagement');
  }
  
  public function updateSegmentation()
  {
    $segment = $this->input->post('segment');
    $id_segment = $this->input->post('id_segment');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateSegmentation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_segment' => $id_segment,
      'segment'=> $segment
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/Segmentation');
  }


  public function updateGuestType()
  {
    $guest_type = $this->input->post('type_guest_edit');
    $id_type_guest = $this->input->post('id_type_guest');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateGuestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_type_guest' => $id_type_guest,
      'type_guest_edit'=> $guest_type
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/guestType');
  }

  public function updateDetailGuestType()
  {
    $select_detail_type_guest_modal = $this->input->post('select_detail_type_guest_modal');
    $detail            = $this->input->post('detail_type_guest_modal');
    $id_detail_type_guest = $this->input->post('id_detail_guest_type');
    $price_edit = $this->input->post('price_edit');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateDetailGuestType/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_detail_guest_type' => $id_detail_type_guest,
      'select_detail_type_guest_modal'=> $select_detail_type_guest_modal,
      'detail_type_guest_modal'       => $detail,
      'price_edit' => $price_edit
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/guestType');
  }

  public function edit()
  {
    $id_tipe = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editDetailsInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_tipe' => $id_tipe
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editDetail'] = $result;

    echo json_encode($data);

  }

  public function hapus()
    {
      $id_tipe = $this->input->post('id');
      $curl_handle = curl_init();
      curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/removeDetailsInformation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_tipe' => $id_tipe
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;

    $this->session->set_flashdata('active','type');




    

    //redirect('home/participant');
    }

  public function addFasilitas(){
    $dsc_fasilitas = $this->input->post('dsc_fasilitas');

    $active = $this->input->post('active');


    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'dsc_fasilitas' => $dsc_fasilitas
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $data['fasilitas'] = $active;

    $this->session->set_flashdata('active','fasilitas');
    
    redirect('home/RoomManagement');

  }  

  // public function addFacilities(){
  //   $dsc_fasilitas = $this->input->post('dsc_fasilitas');

  //   $curl_handle = curl_init();
  //   curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/addFacilities/format/json');
  //   curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  //   curl_setopt($curl_handle, CURLOPT_POST, 1);
  //   curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
  //     'dsc_fasilitas' => $dsc_fasilitas
  //   ));
  //   $buffer = curl_exec($curl_handle);
  //   curl_close($curl_handle);

  //   redirect('home/participant');

  // }

  public function hapusFasilitas()
    {
    $id_fasilitas = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/hapusFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_fasilitas' => $id_fasilitas
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    echo $result;

    $this->session->set_flashdata('active','fasilitas');


    //redirect('home/participant');
    }

    public function editFasilitas()
  {
    $id_fasilitas = $this->input->post('id');
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/editFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_fasilitas' => $id_fasilitas
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $data['editDetailFasilitas'] = $result;

    echo json_encode($data);

  }

  public function updateFasilitas()
  {
    $dsc_fasilitas = $this->input->post('dsc_fasilitas_edit');
    $id_fasilitas = $this->input->post('id_fasilitas');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateFasilitas/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_fasilitas' => $id_fasilitas,
      'dsc_fasilitas'=>$dsc_fasilitas
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    redirect('home/RoomManagement');
  }

  public function hrView(){
    $id = $this->input->post('id');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHrView/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id' => $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);

    $curl_handle2 = curl_init();
    curl_setopt($curl_handle2, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getContactPerson/format/json');
    curl_setopt($curl_handle2, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle2, CURLOPT_POST, 1);
    curl_setopt($curl_handle2, CURLOPT_POSTFIELDS, array(
      'id' => $id
    ));
    $buffer2 = curl_exec($curl_handle2);
    curl_close($curl_handle2);

    $result2 = json_decode($buffer2, true);

    $data['hrView'] = $result;
    $data['contactPerson'] = $result2;

    echo json_encode($data);

    //$this->load->view('pages/header');
    //$this->load->view('pages/modal_hrView',$data);
    //$this->load->view('pages/footer');
  }

  public function changeTypeRoom(){
    $typeRoomId = $this->input->post('typeRoomId');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/changeTypeRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'typeRoomId' => $typeRoomId
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    //print_r($result);
    echo json_encode($result);
  }

  public function changeTypeRoomReservation(){
    $room_rate = $this->input->post('room_rate');
    $room_building = $this->input->post('room_building');
    $room_floor = $this->input->post('room_floor');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/changeTypeRoomReservation/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'room_rate' => $room_rate,
      'room_building' => $room_building,
      'room_floor' => $room_floor
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    //print_r($result);
    echo json_encode($result);
  }

  public function changeTypeRoomReservationModal(){
    $room_rate_edit = $this->input->post('room_rate_edit');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/changeTypeRoomReservationModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'room_rate_edit' => $room_rate_edit
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    //print_r($result);
    echo json_encode($result);
  }

  public function changeTypeRoomGuestModal(){
    $price_regist_edit = $this->input->post('price_regist_edit');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/changeTypeRoomGuestModal/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'price_regist_edit' => $price_regist_edit
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    //print_r($result);
    echo json_encode($result);
  }

  public function getHotelInformation2(){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getHotelInformation2/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 0);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);

    echo json_encode($result);
  }

  public function getDpRoom(){
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDpRoom/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 0);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);

    echo json_encode($result);
  }

  public function getDetailRoomChart(){
    $id = $this->input->post('id');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getDetailRoomChart/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id' => $id
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    //print_r($result);
    echo json_encode($result);
  }

  public function updateRoomChart(){
    $id = $this->input->post('editChartId');
    $status = $this->input->post('editChartStatus');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateRoomChart/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id'=>$id,
      'status'=>$status
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    $this->session->set_flashdata('alert', 'Room Status Updated');
    redirect('home/bookchart');

  }

  public function getFloorReserv(){
    $idBuilding = $this->input->post('idBuilding');


    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getFloorReserv/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'idBuilding'=>$idBuilding,
    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    echo json_encode($result);
  }

  public function getNoReserv(){
    $buildingValue = $this->input->post('buildingValue');
    $floorValue = $this->input->post('floorValue');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getNoReserv/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'buildingValue'=>$buildingValue,
      'floorValue'=>$floorValue,

    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    echo json_encode($result);

  }

  public function getPrintPdfGuest(){
    $id_regist = $this->input->post('id_regist');

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getPrintPdfGuest/format/json');
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_POST, 1);
    curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
      'id_regist'=>$id_regist,

    ));
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    $result = json_decode($buffer, true);
    
    echo json_encode($result);
  }




  // public function GuestPDF(){
  //   // if ($this->session->userdata('admin_session') == '') {
  //   //   $this->load->view('pages/login');
  //   // } else {
  //     $curl_handle = curl_init();
  //     curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/getGuestPDF/format/json');
  //     curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  //     curl_setopt($curl_handle, CURLOPT_POST, 0);
  //     $buffer = curl_exec($curl_handle);
  //     curl_close($curl_handle);
  //     $result = json_decode($buffer, true);

  //     $data['guest']        = $result;

  //     $this->load->view('pages/header');
  //     $this->load->view('pages/guest', $data);
  //     $this->load->view('pages/footer');

  //   // }

  // }



    public function updateDeposit(){
        $id_regist = $_POST['id_regist'];
        $depositAmount = $_POST['deposit_amount'];
        $remarkDeposit = $_POST['remark_deposit'];

        $curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/jobs_controller/updateDeposit/format/json');
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_POST, 1);
        curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
            'id_regist'=>$id_regist,
            'deposit_amount'=>$depositAmount,
            'remark_deposit'=>$remarkDeposit,

        ));
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);

        $result = json_decode($buffer, true);

        echo json_encode($result);
    }


}