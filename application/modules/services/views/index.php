<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Breadcrumbs Section -->
<?php 
$this->load->view('about/dynamic_breadcrumbs', [
    'bc_current' => 'Our Services',
    'bc_title_white' => 'Turnkey Engineering &amp;',
    'bc_title_orange' => 'Services',
    'bc_desc' => 'Turnkey commercial kitchen engineering, industrial bakery plants, refrigeration &amp; ventilation systems, certified LPG gas pipelines, and custom SS 304 fabrication by ' . $company3 . '.'
]); 
?>

<!-- Services Showcase Widget -->
<div class="py-4">
    <?php $this->load->view('home/service_widget'); ?>
</div>
