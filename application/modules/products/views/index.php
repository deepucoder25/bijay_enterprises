<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Product Catalogue',
    'bc_title_white' => 'Commercial Product',
    'bc_title_orange' => 'Catalogue',
    'bc_desc' => 'Explore heavy-duty commercial kitchen equipment, industrial bakery ovens, display counters, refrigeration systems, exhaust hoods, and LPG gas pipelines manufactured by ' . $company3 . '.'
]); 
?>

<!-- Product Showcase Widget -->
<div class="py-4">
    <?php $this->load->view('home/product_widget'); ?>
</div>
