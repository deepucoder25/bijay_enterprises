<?php (defined('BASEPATH')) or exit('No direct script access allowed');

/** load the CI class for Modular Extensions **/
require dirname(__FILE__) . '/Base.php';

/**
 * Modular Extensions - HMVC
 *
 * Adapted from the CodeIgniter Core Classes
 * @link    http://codeigniter.com
 *
 * Description:
 * This library replaces the CodeIgniter Controller class
 * and adds features allowing use of modules and the HMVC design pattern.
 *
 * Install this file as application/third_party/MX/Controller.php
 *
 * @copyright   Copyright (c) 2015 Wiredesignz
 * @version     5.5
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 **/
class MX_Controller
{
    public $autoload = array();
    public $comp;
    public $data;
    public function __construct()
    {
        $class = str_replace(CI::$APP->config->item('controller_suffix'), '', get_class($this));
        log_message('debug', $class . " MX_Controller Initialized");
        Modules::$registry[strtolower($class)] = $this;

        /* copy a loader instance and initialize */
        $this->load = clone load_class('Loader');
        $this->load->initialize($this);

        $this->comp['phone'] = '+91 9474771671';
        $this->comp['phonehtml'] = 'href="tel:+919474771671"';
        $this->comp['phone1'] = '+91 8617399278';
        $this->comp['phonehtml1'] = 'href="tel:+918617399278"';
        $this->comp['mail'] = 'bijayenterprises11@gmail.com';
        $this->comp['mailhtml'] = "mailto:bijayenterprises11@gmail.com";
        $this->comp['company3'] = 'Bijay Enterprises';
        $this->comp['companydomain'] = 'mycompany.com';

        $this->comp['facebookhtml'] = "";
        $this->comp['youtubehtml'] = "";
        $this->comp['instagramhtml'] = "";
        $this->comp['twitterhtml'] = "";
        $this->comp['linkedinhtml'] = "";
        $this->comp['whatsapphtml'] = "https://wa.me/919474771671";
        $this->comp['whatsapphtml1'] = "https://wa.me/918617399278";

        $this->comp['address'] = "Jhankar More, 4th Mahananda Bridge,Thokkar Near Hanuman Mandir,W/No. 1,Dist. Darjeeling,Pin. 734003";
        $this->comp['address1'] = "Jhankar More, 4th Mahananda Bridge,Thokkar Near Hanuman Mandir";
        $this->comp['address2'] = "W/No. 1,Dist. Darjeeling,Pin. 734003";
        $this->comp['addressRegion'] = "Darjeeling";
        $this->comp['postalCode'] = "734003";
        $this->comp['companystate'] = "West Bengal";
        $this->comp['themeColor'] = "#0a4ebd";

        $this->comp['experience'] = "30+";
        $this->comp['startYear'] = "1996";

        $this->comp['ratingValue'] = "4.9";
        $this->comp['datePublished'] = "15 May, 2026";
        $this->comp['reviewBody'] = "Best Packing And Moving Company in India.";
        $this->comp['reviewperson'] = "Arshad Ali";

        /* autoload module items */
        $this->load->_autoloader($this->autoload);
    }

    public function __get($class)
    {
        return CI::$APP->$class;
    }
}
