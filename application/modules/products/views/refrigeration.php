<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Refrigeration Equipment',
    'bc_desc' => 'Tropicalized +43°C Commercial Cold Storage Chillers, Deep Freezers & Undercounter Tables',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'Refrigeration Equipment']
    ]
]);
?>
