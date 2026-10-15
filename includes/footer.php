<?php
/**
 * SummerLawnCare - Footer Template
 */
require_once __DIR__ . '/config.php';
$homeUrl = ($currentPage === 'index') ? '' : 'index.php';
?>
  <!-- Comprehensive Site Footer -->
  <footer class="site-footer">
    <div class="container">
      <div class="footer-top-grid">
        <!-- Brand Summary -->
        <div class="footer-brand">
          <a href="<?= $homeUrl ?: 'index.php' ?>" class="brand-logo" aria-label="SummerLawnCare Homepage">
            <span class="logo-icon">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5" fill="#f59e0b" stroke="#f59e0b"/>
                <path d="M12 2v2M12 20v2M4.93 4.93l1.41 1.41M17.66 17.66l1.41 1.41M2 12h2M20 12h2M6.34 17.66l-1.41 1.41M19.07 4.93l-1.41 1.41"/>
              </svg>
            </span>
            <span>summer<span class="brand-highlight">lawn</span><span class="brand-sun">care</span></span>
          </a>
          <p class="footer-tagline">
            Your definitive scientific guide to beating extreme summer heat, protecting deep root systems, and keeping home lawns vibrant and green from June through August.
          </p>
        </div>

        <!-- Quick Tips Navigation -->
        <div>
          <h4 class="footer-col-title">Summer Guide</h4>
          <ul class="footer-nav-list">
            <li><a href="<?= $homeUrl ?>#core-tips">6 Core Summer Pillars</a></li>
            <li><a href="<?= $homeUrl ?>#watering-guide">Watering Calculator</a></li>
            <li><a href="<?= $homeUrl ?>#turf-varieties">Warm vs Cool Turf</a></li>
            <li><a href="<?= $homeUrl ?>#summer-calendar">3-Month Roadmap</a></li>
            <li><a href="<?= $homeUrl ?>#dos-donts">Summer Checklist</a></li>
            <li><a href="<?= $homeUrl ?>#summer-faq">Summer FAQs</a></li>
          </ul>
        </div>

        <!-- Direct Resources -->
        <div>
          <h4 class="footer-col-title">Turf Resources</h4>
          <ul class="footer-nav-list">
            <li><a href="contact.php">Turf Consultation</a></li>
            <li><a href="contact.php">Soil Test Advice</a></li>
            <li><a href="contact.php">Pest Diagnosis Request</a></li>
            <li><a href="privacy.php">Privacy Policy</a></li>
            <li><a href="terms.php">Terms of Service</a></li>
          </ul>
        </div>

        <!-- Contact Support -->
        <div>
          <h4 class="footer-col-title">Get in Touch</h4>
          <div class="footer-contact-info">
            <div class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                <polyline points="22,6 12,13 2,6"></polyline>
              </svg>
              <span><?= e(CONTACT_EMAIL) ?></span>
            </div>
            <div class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
              </svg>
              <span><?= e(CONTACT_PHONE) ?></span>
            </div>
            <div class="footer-contact-item">
              <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <circle cx="12" cy="12" r="10"></circle>
                <polyline points="12 6 12 12 16 14"></polyline>
              </svg>
              <span>Mon – Sat: 7:00 AM – 7:00 PM EST</span>
            </div>
            <div style="margin-top: 0.5rem;">
              <a href="contact.php" class="nav-cta-btn" style="padding: 0.45rem 1rem; font-size: 0.85rem;">Contact Page &rarr;</a>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer Bottom Legal Notice -->
      <div class="footer-bottom">
        <p>&copy; <?= e(CURRENT_YEAR) ?> summerlawncare. All rights reserved. Professional agronomic advice and summer lawn care guidance.</p>
        <div class="footer-legal-links">
          <a href="privacy.php">Privacy Policy</a>
          <a href="terms.php">Terms of Service</a>
          <a href="contact.php">Contact Us</a>
        </div>
      </div>
    </div>
    <script id="_wauuca">var _wau = _wau || []; _wau.push(["small", "lvpkn2v2vo", "uca"]);</script><script async src="//waust.at/s.js"></script>
  </footer>

  <!-- Core JavaScript -->
  <script src="js/main.js"></script>
</body>
</html>
