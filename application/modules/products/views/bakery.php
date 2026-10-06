<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php $this->load->view('about/dynamic_breadcrumbs', [
    'bc_h1' => 'Bakery Equipment',
    'bc_desc' => 'Precision Temperature-Controlled Industrial Baking Ovens & Dough Processing Machinery',
    'breadcrumbs' => [
        ['name' => 'Product Catalogue', 'url' => site_url('products')],
        ['name' => 'Bakery Equipment']
    ]
]);
?>
