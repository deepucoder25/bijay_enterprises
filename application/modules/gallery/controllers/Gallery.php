<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery extends MX_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function photo_gallery()
    {
        $data['title'] = "Photo Gallery | " . $this->comp['company3'] . " - Commercial Kitchen & Bakery Installations";
        $data['description'] = "Explore photos of commercial kitchen setups, SS 304 fabrication projects, industrial bakery machinery, display counters, and exhaust ventilation systems by " . $this->comp['company3'] . " in Siliguri.";
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['photos'] = $this->db->get('gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "photo-gallery";
        echo Modules::run('template/layout2', $data);
    }

    function video_gallery()
    {
        $data['title'] = "Video Gallery | " . $this->comp['company3'] . " - Equipment Demonstrations";
        $data['description'] = "Watch live machinery demonstrations, factory fabrication walkthroughs, bakery oven baking tests, and turnkey kitchen installations by " . $this->comp['company3'] . ".";
        
        $this->db->where('status', 1);
        $this->db->order_by('auto_id', 'DESC');
        $data['videos'] = $this->db->get('video_gallery')->result();
        
        $data['module'] = "gallery";
        $data['view_file'] = "video-gallery";
        echo Modules::run('template/layout2', $data);
    }
}