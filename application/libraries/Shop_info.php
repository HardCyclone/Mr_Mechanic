<?php
class Shop_info {
    protected $ci;
    private $get_info;

    function __construct() {
        $this->ci =& get_instance();

        $this->get_info = $this->ci->db->get_where("shop_info",["id" => 1])->row();
    }
    function get_shop_logo() {
        return $this->get_info->logo;
    }
    function get_shop_name() {
        return $this->get_info->name;
    }
    function get_shop_address() {
        return $this->get_info->address;
    }
    function get_shop_email() {
        return $this->get_info->email;
    }
    function get_shop_whatsapp() {
        return $this->get_info->whatsapp;
    }
    function get_shop_facebook() {
        return $this->get_info->facebook;
    }
    function get_shop_instagram() {
        return $this->get_info->instagram;
    }
    function get_shop_youtube() {
        return $this->get_info->youtube;
    }
    function get_shop_bank() {
        return $this->get_info->bank_name;
    }
    function get_shop_bankno() {
        return $this->get_info->bank_no;
    }
    function get_shop_bankaccount() {
        return $this->get_info->bank_account;
    }
}