<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Kitchen Ventilation System',
    'bc_desc' => 'High-CFM Exhaust Hoods, Stainless Baffle Filters & Fresh Air Supply Management',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'Kitchen Ventilation System']
    ]
]);
?>
