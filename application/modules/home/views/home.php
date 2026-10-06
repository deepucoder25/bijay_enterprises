<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- 1. About Us Section -->
<?php $this->load->view('about_widget'); ?>

<!-- 2. Industrial Product Catalogue Section (Matching Navbar #catalogueShowcase) -->
<?php $this->load->view('product_widget'); ?>

<!-- 3. Our Services Section (Matching Navbar #servicesShowcase) -->
<?php $this->load->view('service_widget'); ?>

<!-- 4. Client Testimonials / Reviews Section -->
<?php $this->load->view('review_widget'); ?>

<!-- 5. Frequently Asked Questions Section -->
<?php $this->load->view('faqs_widget'); ?>
