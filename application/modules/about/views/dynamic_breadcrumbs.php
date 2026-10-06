<?php if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// Build Schema for Breadcrumbs
$schema_items = [];
$schema_items[] = [
    '@type' => 'ListItem',
    'position' => 1,
    'name' => 'Home',
    'item' => site_url()
];

$position = 2;
if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    foreach ($breadcrumbs as $crumb) {
        $name = isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '');
        $url = (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)') ? $crumb['url'] : null;

        $item = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $name
        ];
        if ($url) {
            $item['item'] = $url;
        }
        $schema_items[] = $item;
        $position++;
    }
} else if (isset($bc_current) && !empty($bc_current)) {
    $schema_items[] = [
        '@type' => 'ListItem',
        'position' => $position,
        'name' => $bc_current
    ];
}

$schema_json = [
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => $schema_items
];

// Determine title if not explicitly passed as bc_h1
$heading = '';
if (isset($bc_h1) && !empty($bc_h1)) {
    $heading = $bc_h1;
} elseif (isset($bc_title_white) || isset($bc_title_orange)) {
    $heading = trim((@$bc_title_white ? $bc_title_white . ' ' : '') . (@$bc_title_orange ? $bc_title_orange : ''));
} elseif (isset($bc_current) && !empty($bc_current)) {
    $heading = $bc_current;
} elseif (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)) {
    $last_crumb = end($breadcrumbs);
    $heading = isset($last_crumb['name']) ? $last_crumb['name'] : (isset($last_crumb['title']) ? $last_crumb['title'] : '');
}
?>

<script type="application/ld+json">
<?= json_encode($schema_json, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) ?>
</script>

<!-- Breadcrumbs Section -->
<section class="dynamic-bc-section">
    <div class="container">
        <div class="dyn-bc-wrapper position-relative d-flex align-items-center justify-content-between flex-wrap gap-3">
            <div class="dyn-bc-left">
                <?php if (!empty($heading)): ?>
                    <h1 class="dyn-bc-title mb-1"><?= $heading ?></h1>
                <?php endif; ?>
                <?php if (isset($bc_desc) && !empty($bc_desc)): ?>
                    <p class="dyn-bc-desc mb-0"><?= $bc_desc ?></p>
                <?php endif; ?>
            </div>
            <nav class="dyn-bc-nav" aria-label="breadcrumb">
                <ol class="dyn-bc-list list-unstyled m-0 p-0 d-inline-flex align-items-center">
                    <li class="dyn-bc-item d-inline-flex align-items-center">
                        <a href="<?= site_url() ?>" class="dyn-bc-link text-decoration-none d-inline-flex align-items-center gap-2" title="Bijay Enterprises Home">
                            <svg class="dyn-bc-svg dyn-bc-svg-home flex-shrink-0" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m3 9 9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                                <polyline points="9 22 9 12 15 12 15 22"/>
                            </svg>
                            <span class="dyn-bc-text d-inline-block">Home</span>
                        </a>
                    </li>
                    <?php if (isset($breadcrumbs) && is_array($breadcrumbs) && !empty($breadcrumbs)): ?>
                        <?php foreach ($breadcrumbs as $crumb): ?>
                            <li class="dyn-bc-sep d-inline-flex align-items-center justify-content-center" aria-hidden="true">
                                <svg class="dyn-bc-svg dyn-bc-svg-sep flex-shrink-0" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="9 18 15 12 9 6"/>
                                </svg>
                            </li>
                            <?php if (isset($crumb['url']) && !empty($crumb['url']) && $crumb['url'] !== 'javascript:void(0)'): ?>
                                <li class="dyn-bc-item d-inline-flex align-items-center">
                                    <a href="<?= $crumb['url'] ?>" class="dyn-bc-link text-decoration-none d-inline-flex align-items-center gap-2">
                                        <span class="dyn-bc-text d-inline-block"><?= isset($crumb['name']) ? $crumb['name'] : $crumb['title'] ?></span>
                                    </a>
                                </li>
                            <?php else: ?>
                                <li class="dyn-bc-item dyn-bc-item--active d-inline-flex align-items-center" aria-current="page">
                                    <span class="dyn-bc-current d-inline-flex align-items-center gap-2">
                                        <svg class="dyn-bc-svg dyn-bc-svg-active flex-shrink-0" width="8" height="8" viewBox="0 0 8 8" fill="currentColor">
                                            <circle cx="4" cy="4" r="4"/>
                                        </svg>
                                        <span class="dyn-bc-text d-inline-block"><?= isset($crumb['name']) ? $crumb['name'] : (isset($crumb['title']) ? $crumb['title'] : '') ?></span>
                                    </span>
                                </li>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    <?php elseif (isset($bc_current) && !empty($bc_current)): ?>
                        <li class="dyn-bc-sep d-inline-flex align-items-center justify-content-center" aria-hidden="true">
                            <svg class="dyn-bc-svg dyn-bc-svg-sep flex-shrink-0" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9 18 15 12 9 6"/>
                            </svg>
                        </li>
                        <li class="dyn-bc-item dyn-bc-item--active d-inline-flex align-items-center" aria-current="page">
                            <span class="dyn-bc-current d-inline-flex align-items-center gap-2">
                                <svg class="dyn-bc-svg dyn-bc-svg-active flex-shrink-0" width="8" height="8" viewBox="0 0 8 8" fill="currentColor">
                                    <circle cx="4" cy="4" r="4"/>
                                </svg>
                                <span class="dyn-bc-text d-inline-block"><?= $bc_current ?></span>
                            </span>
                        </li>
                    <?php endif; ?>
                </ol>
            </nav>
        </div>
    </div>
</section>