<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class About extends MX_Controller
{
    function index()
    {
        $data['title'] = "About Us | " . $this->comp['company3'];
        $data['description'] = "Learn more about " . $this->comp['company3'] . ", our 30+ Years Legacy, manufacturing facility in Siliguri, expert engineering team, mission, and vision in commercial kitchen equipment and SS 304 fabrication.";
        $data['module'] = "about";
        $data['view_file'] = "about";
        echo Modules::run('template/layout2', $data);
    }
    function faqs()
    {
        $data['title'] = "Frequently Asked Questions (FAQs) | " . $this->comp['company3'];
        $data['description'] = "Get answers to common queries about food-grade SS 304 commercial kitchen equipment, CAD layouts, LPG gas pipelines, and warranties at " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "faqs";
        echo Modules::run('template/layout2', $data);
    }

    function testimonials()
    {
        $data['title'] = "Customer Reviews & Testimonials | " . $this->comp['company3'];
        $data['description'] = "Read genuine client testimonials and feedback about " . $this->comp['company3'] . " commercial kitchen equipment, industrial bakery plants, and turnkey SS 304 fabrication.";
        $data['module'] = "about";
        $data['view_file'] = "testimonials";
        echo Modules::run('template/layout2', $data);
    }

    function reviews()
    {
        // Redirect to main reviews module
        redirect('reviews');
    }

    function privacy()
    {
        $data['title'] = "Privacy Policy | " . $this->comp['company3'] . " - Siliguri, West Bengal";
        $data['description'] = "Learn how " . $this->comp['company3'] . " collects, protects, and handles commercial client inquiry data, kitchen blueprints, CAD designs, and contact information.";
        $data['module'] = "about";
        $data['view_file'] = "privacy";
        echo Modules::run('template/layout2', $data);
    }

    function terms()
    {
        $data['title'] = "Terms & Conditions | " . $this->comp['company3'] . " - Commercial Kitchen Equipment";
        $data['description'] = "Review the official terms, quotation guidelines, custom SS 304 fabrication terms, warranty policies, and delivery procedures of " . $this->comp['company3'] . ".";
        $data['module'] = "about";
        $data['view_file'] = "terms";
        echo Modules::run('template/layout2', $data);
    }
}

