<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * @author Martin Njuguna
	 * @version 1.0
	 * @see http://martin.jamkara.co.ke/
	 */
	public function index()	{
		$data = array(
			'b_slides' => $this->queries->b_slides(),
			'goodies' => $this->queries->goodies(),
			'swiper_prods' => $this->queries->swiper_products(),
			'products' => $this->queries->get_products(),
			'services' => $this->queries->get_services(),
			'reviews' => $this->queries->get_reviews()
	  );
		$this->load->view('templates/header');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}

	public function cakes()	{
		$data = array('products' => $this->queries->get_all_products() );
		$this->load->view('templates/header');
		$this->load->view('cakes', $data);
		$this->load->view('templates/footer');
	}

	public function order()	{
		$data ['products'] = $this->queries->get_all_products();
		$this->load->view('templates/header');
		$this->load->view('order', $data);
		$this->load->view('templates/footer');
	}

	public function price_list()	{
		$data = array( 'prices' => $this->queries->get_prices() );
		$this->load->view('templates/header');
		$this->load->view('price_list', $data);
		$this->load->view('templates/footer');
	}

	public function gallery()	{
		$data['cakes'] = $this->queries->gallery();
		$this->load->view('templates/header');
		$this->load->view('gallery', $data);
		$this->load->view('templates/footer');
	}

	public function contacts()	{
		$this->load->view('templates/header');
		$this->load->view('contacts');
		$this->load->view('templates/footer');
	}

	public function pick_price(){
		$weight = $_POST['weight'];
		$id = $_POST['product_id'];

		$price = $this->queries->pick_price($weight, $id);
		echo json_encode($price);
	}

	public function place_order(){
		$site_signature = '<br /><br />'.'<p> <em>Jaris Bakers Online Orders.</em> </p>';
		$id = $_POST['product'];
		$product_name = $this->queries->get_cake($id);

		$cust_data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => "(+254)".$this->input->post('phone'),
			'address' => $this->input->post('address')
		);
		$cust_id = $this->queries->add_customer($cust_data);

		if($product_name == 'Bread'){
			$order_data = array(
				'cust_id' => $cust_id,
				'product' => $product_name,
				'product_id' => $id,
				'type' => $this->input->post('breadtype'),
				'qty' => $this->input->post('quantity'),
				'weight' => $this->input->post('breadWeight'),
				'icing' => "n/a",
				'color' => "n/a",
				'additional_info' => $this->input->post('additional_info'),
				'delivery_date' => $this->input->post('deliveryDate'),
				'mpesa_code' => $this->input->post('mpesa_code'),
				'amount' => $this->input->post('amount'),
				'subtotal' => ( $this->input->post('subtotal') )
			);
	    $msg = '
				<table width="100%" border="0" cellspacing="0" cellpadding="0">

					<tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">Name:</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['name'].'</font></td>
					</tr>

					<tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">E-mail :</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['email'].'</font></td>
					</tr>

					<tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">E-mail :</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['phone'].'</font></td>
					</tr>

					 <tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">Bread :</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$product_name.'</font></td>
					</tr>

					<tr>
					 <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Bread Type :</font></td>
					 <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['breadtype'].'</font></td>
				  </tr>

					<tr>
					 <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Quantity :</font></td>
					 <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['quantity'].' Loaves</font></td>
				  </tr>

					<tr>
					 <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Weight :</font></td>
					 <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['breadWeight'].' gms</font></td>
				  </tr>

			    <tr>
				   <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Amount Paid :</font></td>
				   <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">Ksh. '.$_POST['amount'].".  via M_Pesa. Code is: ".$_POST['mpesa_code'].'</font></td>
			    </tr>

			    <tr>
			     <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Delivery/Collection Date :</font></td>
			     <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['deliveryDate'].'</font></td>
		      </tr>

					<tr>
			     <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Delivery/Collection Date :</font></td>
			     <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['address'].'</font></td>
		      </tr>
      	</table> '.$site_signature;
		}elseif ($product_name == 'Cookies') {
			$order_data = array(
				'cust_id' => $cust_id,
				'product' => $product_name,
				'product_id' => $id,
				'qty' => 0.00,
				'weight' => $this->input->post('cookiesWeight'),
				'additional_info' => $this->input->post('additional_info'),
				'icing' => "n/a",
				'type' => $this->input->post('cookietype'),
				'color' => "n/a",
				'delivery_date' => $this->input->post('deliveryDate'),
				'mpesa_code' => $this->input->post('mpesa_code'),
				'amount' => $this->input->post('amount'),
				'subtotal' => ( $this->input->post('subtotal') )
		  );
		}elseif ($product_name == 'Cupcakes'){
			$order_data = array(
				'cust_id' => $cust_id,
				'product' => $product_name,
				'product_id' => $id,
				'qty' => $this->input->post('quantity'),
				'weight' => 0.00,
				'additional_info' => $this->input->post('additional_info'),
				'icing' => $this->input->post('icing'),
				'type' => $this->input->post('cupcaketype'),
				'color' => "n/a",
				'delivery_date' => $this->input->post('deliveryDate'),
				'mpesa_code' => $this->input->post('mpesa_code'),
				'amount' => $this->input->post('amount'),
				'subtotal' => ( $this->input->post('subtotal') )
			);
		}else{
			$order_data = array(
				'cust_id' => $cust_id,
				'product' => $product_name,
				'product_id' => $id,
				'qty' => 0.00,
				'weight' => $this->input->post('kgs'),
				'icing' => $this->input->post('icing'),
				'color' => $this->input->post('color'),
				'type' => "n/a",
				'additional_info' => $this->input->post('inscriptions'),
				'delivery_date' => $this->input->post('deliveryDate'),
				'mpesa_code' => $this->input->post('mpesa_code'),
				'amount' => $this->input->post('amount'),
				'subtotal' => ( $this->input->post('subtotal') )
			);
			$msg = '
				<table width="100%" border="0" cellspacing="0" cellpadding="0">

					<tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">Name:</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['name'].'</font></td>
					</tr>

					<tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">E-mail :</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['email'].'</font></td>
					</tr>

					 <tr>
						<td width="33%"><font color="#f35D14" size="2" face="Tahoma">Cake/Product :</font></td>
						<td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$product_name.'</font></td>
					</tr>

					<tr>
					 <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Weight :</font></td>
					 <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['kgs'].' Kgs</font></td>
				  </tr>

				  <tr>
					 <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Color :</font></td>
					 <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['color']."; with ".$_POST['icing'].'</font></td>
				  </tr>

				  <tr>
				   <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Inscriptions :</font></td>
				   <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['inscriptions'].'</font></td>
			    </tr>

			    <tr>
				   <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Amount Paid :</font></td>
				   <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">Ksh.'.$_POST['amount'].".  via M_Pesa. The Reference # is: ".$_POST['mpesa_code'].'</font></td>
			    </tr>

			    <tr>
			     <td width="33%"><font color="#f35D14" size="2" face="Tahoma">Delivery/Collection Date :</font></td>
			     <td width="67%" height="22"><font color="#333333" size="-1" face="Tahoma">'.$_POST['deliveryDate'].'</font></td>
		      </tr>
      	</table> '.$site_signature;
		}

		if ($this->queries->place_order($order_data) == FALSE) {
			$this->session->set_flashdata('error', 'Order was not successful, Kindly review your Enteries or try later!');
			// echo json_encode(0);
		}else{
			 $name = $this->input->post('name');
			 $to = "orders@jarisbakers.co.ke";
       $from = $this->input->post('email');
       $subject = "ORDER - ".$product_name;

       $headers[] = 'MIME-VERSION: 1.0';
       $headers[] = 'Content-type: text/html; charset=iso-8859-1';
       $headers[] = "Cc: Martin Njuguna <martin.njau@live.com>";
       $headers[] = 'From:'.$name.'<'.$from.'>';

			 $message = $msg;

       $sent = mail($to, $subject, $message, implode("\r\n", $headers));

       if ($sent == FALSE) {
         $this->session->set_flashdata('error', 'Oops, Order Failed, Check entries or try again later!');
				 // echo json_encode(0);
       } else {
         $this->session->set_flashdata('success', 'Thank you. Order successful, We will get back to you shortly!');
				 // echo json_encode(1);
       }
		}
		redirect('order#placeOrder', 'refresh');
	}

	public function checkout(){

	}

	public function send_email(){
		$name = $this->input->post('name');
		$to = "info@jarisbakers.co.ke";
    $from = $this->input->post('email');
    $subject = $this->input->post('subject');
    $site_signature = '<br /><br />'.'<p> <em>Jaris Webmail Inquiries.</em> </p>';
    $message = $this->input->post('message').$site_signature;

    $headers[] = 'MIME-VERSION: 1.0';
    $headers[] = 'Content-type: text/html; charset=iso-8859-1';
    $headers[] = "Cc: Martin Njuguna <martin.njau@live.com>";
    $headers[] = 'From:'.$name.'<'.$from.'>';

    $sent = mail($to, $subject, $message, implode("\r\n", $headers));

		if ( $sent == FALSE ) {
			$this->session->set_flashdata('error', 'Oops, Email sending failed. Kindly try again later');
			echo json_encode(0);
		}else {
			$this->session->set_flashdata('success', 'Thank you, Email sent. We will get back to you shortly');
			echo json_encode(1);
		}
	}

	public function view_orders(){

	}

	public function view_order(){

	}

	public function login(){

	}

	public function logout(){

	}

}

?>
