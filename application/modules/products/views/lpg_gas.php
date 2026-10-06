<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'L.P.G. Gas Pipeline Installation',
    'bc_desc' => 'Certified Commercial Gas Cylinder Manifold Banks, Safety Valves & Leak Detection Systems',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'L.P.G. Gas Pipeline Installation']
    ]
]);
?>