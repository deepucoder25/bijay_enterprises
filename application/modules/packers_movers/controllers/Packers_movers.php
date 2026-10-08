<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class Packers_movers extends MX_Controller
{

    function index()
    {
        $data['title'] = "All India Commercial Kitchen Supply & Setup | " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " supplies commercial kitchen equipment and bakery machinery across India.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state()
    {
        $data['title'] = "All India Commercial Kitchen Supply & Setup | " . $this->comp['company3'];
        $data['description'] = $this->comp['company3'] . " supplies commercial kitchen equipment and bakery machinery across India.";
        $data['module'] = "packers_movers";
        $data['view_file'] = "states";
        echo Modules::run('template/layout2', $data);
    }
    function state_services($state)
    {
        $this->load->module('home');
        $this->home->oldurl_to_newurl();
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $data = array(
            "state" => $state,
            "title" => "Commercial Kitchen & Bakery Equipment in $state | " . $this->comp['company3'],
            "description" => "Looking for Commercial Kitchen Equipment or Bakery Machinery in $state? " . $this->comp['company3'] . " provides turnkey SS 304 fabrication, cooking ranges, display counters, and setup.",
            "keywords" => "Commercial kitchen equipment in $state, bakery machines $state, SS fabrication $state, " . $this->comp['company3'],
            "module" => "packers_movers",
            "view_file" => "city_list",
        );
        echo Modules::run('template/layout2', $data);
    }
    function get_title($city, $state)
    { 
        $seo = array(
            // "Siliguri" => array(
            //     "title" => "",
            //     "desc" => ""
            // ),
        );
        foreach ($seo as $k => $s) {
            if ($k == $city) {
                return $s;
            }
        }
        return array(
            'title' => "Commercial Kitchen & Bakery Equipment in $city, $state | " . $this->comp['company3'],
            "desc" => "Looking for Commercial Kitchen and Bakery Equipment in $city, $state? " . $this->comp['company3'] . " offers Food-Grade SS 304 fabrication, cooking ranges, display counters, and turnkey kitchen setup."
        );
    }
    function city($state = 'Bihar', $city = 'Patna')
    {
        $this->load->helper('text');
        $state = str_replace("_", " ", $state);
        $state = ucwords(str_replace("-", " ", $state));
        $city = str_replace("_", " ", $city);
        $city = urldecode(ucwords(str_replace("-", " ", $city)));
        $seo = $this->get_title($city, $state);
        $statelink=strtolower($state);
        $data = array(
            "city" => $city,
            "state" => $state,
            //'img' => base_url('assets') . "/img/state/google/$statelink.png",
            "title" => $seo['title'],
            "description" => $seo['desc'],
            "keywords" => "commercial kitchen equipment $city, bakery equipment manufacturer $city, SS 304 fabrication $city, display counter $city, restaurant equipment $city, kitchen exhaust hood $city, LPG pipeline $city",
            "module" => "packers_movers",
            "view_file" => "view_service",
        );
        echo Modules::run('template/layout2', $data);
    }
   
}
