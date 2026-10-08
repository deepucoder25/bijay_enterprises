<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>

<!-- Company Navigation Sidebar -->
<div class="company-sidebar-wrap sticky-top" style="top: 100px;">
    
    <!-- Navigation Widget -->
    <div class="card border-0 shadow-sm rounded-3 mb-4 overflow-hidden">
        <div class="card-header bg-dark text-white py-3 px-4">
            <h5 class="card-title mb-0 fs-6 fw-bold text-uppercase tracking-wider">
                <i class="bi bi-building me-2 text-warning"></i> Quick Navigation
            </h5>
        </div>
        <div class="list-group list-group-flush">
            <a href="<?= site_url('about-us') ?>" class="list-group-item list-group-item-action py-3 px-4 d-flex justify-content-between align-items-center <?= ($active_link ?? '') == 'about-us' ? 'active bg-primary text-white' : '' ?>">
                <span><i class="bi bi-info-circle me-2"></i> About Our Company</span>
                <i class="bi bi-chevron-right small opacity-75"></i>
            </a>
            <a href="<?= site_url('photo-gallery') ?>" class="list-group-item list-group-item-action py-3 px-4 d-flex justify-content-between align-items-center <?= ($active_link ?? '') == 'photo-gallery' ? 'active bg-primary text-white' : '' ?>">
                <span><i class="bi bi-images me-2"></i> Photo Gallery</span>
                <i class="bi bi-chevron-right small opacity-75"></i>
            </a>
            <a href="<?= site_url('video-gallery') ?>" class="list-group-item list-group-item-action py-3 px-4 d-flex justify-content-between align-items-center <?= ($active_link ?? '') == 'video-gallery' ? 'active bg-primary text-white' : '' ?>">
                <span><i class="bi bi-camera-video me-2"></i> Video Gallery</span>
                <i class="bi bi-chevron-right small opacity-75"></i>
            </a>
            <a href="<?= site_url('testimonials') ?>" class="list-group-item list-group-item-action py-3 px-4 d-flex justify-content-between align-items-center <?= ($active_link ?? '') == 'testimonials' ? 'active bg-primary text-white' : '' ?>">
                <span><i class="bi bi-chat-quote me-2"></i> Client Testimonials</span>
                <i class="bi bi-chevron-right small opacity-75"></i>
            </a>
            <a href="<?= site_url('faqs') ?>" class="list-group-item list-group-item-action py-3 px-4 d-flex justify-content-between align-items-center <?= ($active_link ?? '') == 'faqs' ? 'active bg-primary text-white' : '' ?>">
                <span><i class="bi bi-question-circle me-2"></i> Frequently Asked Questions</span>
                <i class="bi bi-chevron-right small opacity-75"></i>
            </a>
            <a href="<?= site_url('contact-us') ?>" class="list-group-item list-group-item-action py-3 px-4 d-flex justify-content-between align-items-center <?= ($active_link ?? '') == 'contact-us' ? 'active bg-primary text-white' : '' ?>">
                <span><i class="bi bi-geo-alt me-2"></i> Contact Factory</span>
                <i class="bi bi-chevron-right small opacity-75"></i>
            </a>
        </div>
    </div>

    <!-- Direct Assistance Card -->
    <div class="card border-0 shadow-sm rounded-3 p-4 bg-light text-center">
        <div class="mb-3">
            <span class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle" style="width: 50px; height: 50px;">
                <i class="bi bi-headset fs-4"></i>
            </span>
        </div>
        <h5 class="fw-bold mb-2">Need Direct Factory Advice?</h5>
        <p class="text-muted small mb-3">Speak with our commercial kitchen and bakery equipment engineers in Siliguri.</p>
        <div class="d-grid gap-2">
            <a <?= $phonehtml ?> class="btn btn-primary rounded-pill py-2 fw-semibold">
                <i class="bi bi-telephone-fill me-2"></i> Call: <?= $phone ?>
            </a>
            <a href="<?= $whatsapphtml ?>&text=<?= urlencode('Hello Bijay Enterprises, I would like to inquire about your commercial kitchen equipment.') ?>" target="_blank" rel="noopener" class="btn btn-success rounded-pill py-2 fw-semibold">
                <i class="bi bi-whatsapp me-2"></i> Chat on WhatsApp
            </a>
        </div>
    </div>

</div>
