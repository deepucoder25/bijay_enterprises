<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Display Counter',
    'bc_desc' => 'Luxury Curved Glass Food Showcases & Heated Presentation Stations with Warm LED Accents',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'Display Counter']
    ]
]);
?>