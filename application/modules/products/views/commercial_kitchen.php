<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Commercial Kitchen Equipment',
    'bc_desc' => 'Heavy-Duty Culinary Equipment Built for 24/7 High-Volume Commercial Cooking',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'Commercial Kitchen Equipment']
    ]
]);
?>

