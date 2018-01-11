<?php
require APPPATH . '/libraries/REST_Controller.php';

class Login extends REST_Controller
{
	function __construct($config = 'rest')
    {
        parent::__construct($config);
    }

    function index_post()
    {
    	$email = $this->post('email');
    	$password = md5($this->post('password'));

    	$this->db->where("email = '$email' and password = '$password'");
    	$result = $this->db->get('user')->result();

    	if(sizeof($result) == 1)
    	{
			$data = array(
				'status'=>'sukses login',
				'user'=>$result
			);
		}
		else
		{
			$data = array(
				'status'=>'gagal login',
				'user'=>null
			);
		}

		return $this -> response($data,200);
    }
}