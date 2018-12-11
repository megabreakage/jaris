<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Martin Njuguna
 * @version 1.0
 * @see http://martin.jamkara.co.ke/
 */
class Queries extends CI_Model {

  function __construct() {
    parent::__construct();
  }

  public function b_slides(){
    return $this->db->get('landing_page_slides')->result_array();
  }

  public function goodies(){
    return $this->db->get('goodies_slides')->result_array();
  }

  public function swiper_products(){
    return $this->db->get('products_swiper')->result_array();
  }

  public function get_products(){
    return $this->db->get('products', 4)->result_array();
  }

  public function get_all_products(){
    return $this->db->get('products')->result_array();
  }

  public function get_services(){
    return $this->db->get('services', 3)->result_array();
  }

  public function get_reviews(){
    return $this->db->get('reviews')->result_array();
  }

  public function get_prices(){
    $get_sql = "SELECT a.product_id, b.product, a.half, a.one, a.one_half, a.two,
                a.two_half, a.three, a.three_half, a.four, a.four_half, a.five, b.filter
                FROM price_list a
                INNER JOIN products b ON a.product_id = b.product_id
                WHERE a.filter = 'cake'";

    return $this->db->query($get_sql)->result_array();
  }

  public function gallery(){
    return $this->db->get('gallery')->result_array();
  }

  public function add_customer($cust_data){
    $this->db->insert('customers', $cust_data);
    return $this->db->insert_id();
  }

  public function pick_price($weight, $id){
    return $this->db->get_where('price_list', array('product_id' => $id))->row()->$weight;
  }

  public function get_cake($id){
    return $this->db->get_where('products', array('product_id' => $id))->row()->product;
  }

  public function place_order($order_data){
    $order_info = array(
      'customer_id' => $order_data['cust_id'],
      'deposit' => $order_data['amount'],
      'mpesa_code' => $order_data['mpesa_code'],
      'delivery_date' => $order_data['delivery_date']
    );
    $this->db->insert('orders', $order_info);

    $order_details_data = array(
      'order_id' => $this->db->insert_id(),
      'product' => $order_data['product'],
      'product_id' => $order_data['product_id'],
      'icing' => $order_data['icing'],
      'type' => $order_data['type'],
      'icing' => $order_data['icing'],
      'additional_info' => $order_data['additional_info'],
      'color' => $order_data['color'],
      'quantity' => $order_data['qty'],
      'weight' => $order_data['weight'],
      'subtotal' => $order_data['subtotal']
    );
    return $this->db->insert('order_details', $order_details_data);
  }

}
 ?>
