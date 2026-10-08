<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class City_services extends MX_Controller
{
    function __construct() {
        parent::__construct();
        $this->load->helper('text');
    }

    private function format_city($city_slug) {
        $city = str_replace("_", " ", $city_slug);
        return urldecode(ucwords(str_replace("-", " ", $city)));
    }

    function home_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Commercial Kitchen Equipment Supply & Setup in $city | " . $this->comp['company3'];
        $data['description'] = "Get reliable commercial kitchen equipment manufacturing, SS 304 fabrication, and turnkey setup in $city from " . $this->comp['company3'] . ". Call " . $this->comp['phone'] . ".";
        $data['module'] = "city_services";
        $data['view_file'] = "home_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function office_shifting($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Hotel & Restaurant Kitchen Setup in $city | " . $this->comp['company3'];
        $data['description'] = "Professional hotel, canteen, and restaurant commercial kitchen installation in $city by " . $this->comp['company3'] . ". Complete CAD planning and SS fabrication.";
        $data['module'] = "city_services";
        $data['view_file'] = "office_shifting";
        echo Modules::run('template/layout2', $data);
    }

    function car_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Commercial Kitchen Machinery Transport & Delivery in $city | " . $this->comp['company3'];
        $data['description'] = "Safe heavy kitchen machinery transit, crating, and on-site delivery in $city by " . $this->comp['company3'] . ". Damage-free equipment dispatch across India.";
        $data['module'] = "city_services";
        $data['view_file'] = "car_transport";
        echo Modules::run('template/layout2', $data);
    }

    function bike_transport($city_slug)
    {
        $city = $this->format_city($city_slug);
        $data['city'] = $city;
        $data['ctlink'] = $city_slug;
        $data['title'] = "Bakery & Food Machine Dispatch in $city | " . $this->comp['company3'];
        $data['description'] = "Fast delivery and installation of industrial bakery ovens, mixers, and SS equipment in $city from " . $this->comp['company3'] . ".";
        $data['module'] = "city_services";
        $data['view_file'] = "bike_transport";
        echo Modules::run('template/layout2', $data);
    }
}
