<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Washing Equipment',
    'bc_desc' => 'Commercial Stainless Steel Pot Wash Sinks, Dishwasher Landing Benches & Scrap Tables',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'Washing Equipment']
    ]
]);
?>
