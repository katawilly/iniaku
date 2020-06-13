<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pay extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct()
    {
        parent::__construct();

        // header("Access-Control-Allow-Origin: *");
        // header("Access-Control-Allow-Methods: POST,GET,PUT");
        // header("Access-Control-Allow-Headers: Origin,X-Requested-With,Content-Type,Accept");
        $params = array('server_key' => 'SB-Mid-server-05bQ1gLAFGrCGNQHw9C5uX7_', 'production' => false);
		$this->load->library('midtrans');
		$this->load->library('veritrans');
		$this->midtrans->config($params);
		$this->veritrans->config($params);
		$this->load->helper('url');	
    }

    public function notifikasi()
	{
		echo 'test notification handler';
		$json_result = file_get_contents('php://input');
		$result = json_decode($json_result);

		if($result){
		$notif = $this->midtrans->status($result->order_id);
		}

		error_log(print_r($result,TRUE));

		//notification handler sample

		$transaction = $notif->transaction_status;
		$type = $notif->payment_type;
		$order_id = $notif->order_id;
		$fraud = $notif->fraud_status;

		if ($transaction == 'capture') {
		  // For credit card transaction, we need to check whether transaction is challenge by FDS or not
		  if ($type == 'credit_card'){
		    if($fraud == 'challenge'){
		      // TODO set payment status in merchant's database to 'Challenge by FDS'
		      // TODO merchant should decide whether this transaction is authorized or not in MAP
		      echo "Transaction order_id: " . $order_id ." is challenged by FDS";
		      } 
		      else {
		      // TODO set payment status in merchant's database to 'Success'
		      echo "Transaction order_id: " . $order_id ." successfully captured using " . $type;
		      }
		    }
		  }
		else if ($transaction == 'settlement'){
		  // TODO set payment status in merchant's database to 'Settlement'
		  echo "Transaction order_id: " . $order_id ." successfully transfered using " . $type;
		  } 
		  else if($transaction == 'pending'){
		  // TODO set payment status in merchant's database to 'Pending'
		  echo "Waiting customer to finish transaction order_id: " . $order_id . " using " . $type;
		  } 
		  else if ($transaction == 'deny') {
		  // TODO set payment status in merchant's database to 'Denied'
		  echo "Payment using " . $type . " for transaction order_id: " . $order_id . " is denied.";
		}

	}
	function proses(){
		$query = "SELECT users.*,payment.status as status_payment,payment.puid FROM users RIGHT JOIN payment ON users.id = payment.user_id WHERE users.status = 0";
		$data = $this->db->query($query)->result_array();
		foreach ($data as $data) {
			$a = $this->midtrans->status($data['puid']);
			echo $data['puid'] . $a->transaction_status;
			
		}
		
	}

	public function status($order_id)
	{
		$data = $this->midtrans->status($order_id);
		echo $data->transaction_status;
		// var_dump($this->midtrans->status($order_id));
	}
    public function token(){
    	$order_id = rand();
		// Required
		$transaction_details = array(
		  'order_id' => $order_id,
		  'gross_amount' => 15000 // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => '1',
		  'price' => 15000,
		  'quantity' => 1,
		  'name' => "Pembayaran Aktivasi Akun Pro Iniaku.me"
		);

		// Optional
		$item_details = array ($item1_details);

		// Optional
		$billing_address = array(
		  'first_name'    => $this->session->name,
		  'last_name'     => "",
		  'address'       => $this->session->address,
		  'city'          => $this->session->kabupaten,
		  'postal_code'   => $this->session->kodepos,
		  'phone'         => $this->session->phone,
		  'country_code'  => 'IDN'
		);


		// Optional
		$customer_details = array(
		  'first_name'    =>$this->session->name,
		  'last_name'     => "",
		  'email'         => $this->session->email,
		  'phone'         => $this->session->phone,
		  'billing_address'  => $billing_address
		);

		// Data yang akan dikirim untuk request redirect_url.
        $credit_card['secure'] = true;
        //ser save_card true to enable oneclick or 2click
        //$credit_card['save_card'] = true;

        $time = time();
        $custom_expiry = array(
            'start_time' => date("Y-m-d H:i:s O",$time),
            'unit' => 'minute', 
            'duration'  => 2
        );
        
        $transaction_data = array(
            'transaction_details'=> $transaction_details,
            'item_details'       => $item_details,
            'customer_details'   => $customer_details,
            'credit_card'        => $credit_card,
            'expiry'             => $custom_expiry
        );
            //create payment
        $pay_data=array(
            'user_id' => $this->session->id,
            'puid' => $order_id,
            'package' =>'pro',
            'status' => 'pending',
            'created_at' => my_date_now()
        );
        $pay_data = $this->security->xss_clean($pay_data);
        $payment_id = $this->common_model->insert($pay_data, 'payment');


		error_log(json_encode($transaction_data));
		$snapToken = $this->midtrans->getSnapToken($transaction_data);
		error_log($snapToken);
		echo $snapToken;
    }
    public function vtweb_checkout()
	{
		$order_id = rand();
		// Required
		$transaction_details = array(
		  'order_id' => $order_id,
		  'gross_amount' => 15000 // no decimal allowed for creditcard
		);

		// Optional
		$item1_details = array(
		  'id' => '1',
		  'price' => 15000,
		  'quantity' => 1,
		  'name' => "Pembayaran Aktivasi Akun Pro Iniaku.me"
		);

		// Optional
		$item_details = array ($item1_details);

		// Populate customer's billing address
		$billing_address = array(
		  'first_name'    => $this->session->name,
		  'last_name'     => "",
		  'address'       => $this->session->address,
		  'city'          => $this->session->kabupaten,
		  'postal_code'   => $this->session->kodepos,
		  'phone'         => $this->session->phone,
		  'country_code'  => 'IDN'
		);


		// Optional
		$customer_details = array(
		  'first_name'    =>$this->session->name,
		  'last_name'     => "",
		  'email'         => $this->session->email,
		  'phone'         => $this->session->phone,
		  'billing_address'  => $billing_address
		);

		// Data yang akan dikirim untuk request redirect_url.
		// Uncomment 'credit_card_3d_secure' => true jika transaksi ingin diproses dengan 3DSecure.
		$transaction_data = array(
			'payment_type' 			=> 'vtweb', 
			'vtweb' 						=> array(
				//'enabled_payments' 	=> ['credit_card'],
				'credit_card_3d_secure' => true
			),
			'transaction_details'=> $transaction_details,
			'item_details' 			 => $item_details,
			'customer_details' 	 => $customer_details
		);
	
		try
		{
			$vtweb_url = $this->veritrans->vtweb_charge($transaction_data);
			header('Location: ' . $vtweb_url);
		} 
		catch (Exception $e) 
		{
    		echo $e->getMessage();	
		}
		
	}
    public function finish()
    {
    	echo 1;
    	// $result = json_decode($this->input->post('result_data'));
    	// var_dump($result);

    }
    

	
}