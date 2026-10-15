<?php
/**
 * SummerLawnCare - Header Template
 */
require_once __DIR__ . '/config.php';

$pageTitle = $pageTitle ?? 'Summer Lawn Care Tips & Turf Heat Defense | ' . SITE_NAME;
$pageDescription = $pageDescription ?? 'Discover science-backed summer lawn care tips with SummerLawnCare. Master mowing heights, deep early morning watering, weed prevention, and heat dormancy revival.';
$currentPage = $currentPage ?? 'index';
$homeUrl = ($currentPage === 'index') ? '' : 'index.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($pageTitle) ?></title>
  <meta name="description" content="<?= e($pageDescription) ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Plus+Jakarta+Sans:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Top Sticky Navigation Header -->
  <header class="site-header" id="siteHeader">
    <div class="container nav-wrapper">
      <a href="<?= $homeUrl ?: 'index.php' ?>" class="brand-logo" aria-label="SummerLawnCare Home">
        <span class="logo-icon">
          <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
            <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
            <circle cx="12" cy="12" r="5" fill="#f59e0b" stroke="#f59e0b"/>
          </svg>
        </span>
        <span>summer<span class="brand-highlight">lawn</span><span class="brand-sun">care</span></span>
      </a>

      <!-- Navigation Links -->
      <nav aria-label="Primary Navigation">
        <ul class="nav-links" id="navLinks">
          <li><a href="<?= $homeUrl ?>#core-tips" class="<?= $currentPage === 'index' ? 'active' : '' ?>">Summer Tips</a></li>
          <li><a href="<?= $homeUrl ?>#watering-guide">Watering Guide</a></li>
          <li><a href="<?= $homeUrl ?>#turf-varieties">Grass Types</a></li>
          <li><a href="<?= $homeUrl ?>#summer-calendar">Summer Calendar</a></li>
          <li><a href="<?= $homeUrl ?>#dos-donts">Checklist</a></li>
          <li><a href="<?= $homeUrl ?>#summer-faq">FAQ</a></li>
          <li><a href="contact.php" class="nav-cta-btn <?= $currentPage === 'contact' ? 'active' : '' ?>">Contact Us</a></li>
        </ul>
      </nav>

      <!-- Mobile Hamburger Button -->
      <button class="mobile-toggle" id="mobileToggle" aria-label="Open mobile navigation menu" aria-expanded="false" aria-controls="navLinks">
        <svg width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
          <line x1="3" y1="12" x2="21" y2="12"></line>
          <line x1="3" y1="6" x2="21" y2="6"></line>
          <line x1="3" y1="18" x2="21" y2="18"></line>
        </svg>
      </button>
    </div>
  </header>
