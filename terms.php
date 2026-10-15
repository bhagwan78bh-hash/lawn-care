<?php
/**
 * SummerLawnCare - Terms of Service
 * Brand: summerlawncare
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Terms of Service | ' . SITE_NAME;
$pageDescription = 'Terms of Service for SummerLawnCare. Review our terms of use, horticultural disclaimer, and intellectual property conditions.';
$currentPage = 'terms';

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content">
    <!-- Page Hero Banner -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="index.php">Home</a>
          <span>&rsaquo;</span>
          <span>Terms of Service</span>
        </nav>
        <h1 class="page-hero-title">Terms of Service</h1>
        <p class="page-hero-desc">
          Please review the terms and conditions governing the use of SummerLawnCare and our agronomic educational services.
        </p>
      </div>
    </section>

    <!-- Legal Document Content -->
    <section class="section-padding" style="padding-top: 1rem;">
      <div class="container container-narrow">
        <article class="legal-content-wrap">
          <div class="legal-header">
            <span class="badge-tag">Terms &amp; Conditions</span>
            <div class="legal-meta">
              <span><strong>Last Updated:</strong> October 15, <?= e(CURRENT_YEAR) ?></span>
              <span><strong>Brand:</strong> <?= e(BRAND_SLUG) ?></span>
            </div>
          </div>

          <div class="legal-body">
            <div class="legal-callout">
              <p>
                <strong>Welcome to <?= e(BRAND_SLUG) ?>.</strong> By accessing or using our website, interactive lawn calculators, educational guides, and consultation forms, you agree to comply with and be bound by the following Terms of Service. If you do not agree with these terms, please do not use this site.
              </p>
            </div>

            <h2>1. Educational &amp; Agronomic Advice Disclaimer</h2>
            <p>
              All turf management tips, seasonal schedules, watering guidelines, fertilizer suggestions, and pest identification information published on <strong><?= e(BRAND_SLUG) ?></strong> are provided for general educational and informational purposes only.
            </p>
            <p>
              Soil conditions, microclimates, local municipal water restrictions, turf cultivars, and disease pathogens vary dramatically by geographic region. While our guides reflect accepted horticultural best practices, <strong><?= e(BRAND_SLUG) ?> makes no warranty or guarantee of specific botanical results</strong>. Users are responsible for verifying local weather forecasts, county pesticide application rules, and municipal watering ordinances before applying any treatments.
            </p>

            <h2>2. Interactive Calculators &amp; Estimations</h2>
            <p>
              The Summer Lawn Watering Calculator and any diagnostic estimation widgets provided on this site are designed as planning benchmarks. Actual water pressure, precipitation rates, soil compaction depth, and sprinkler nozzle specifications can produce variances. We strongly advise validating runtimes with a physical audit (such as the Tuna Can test) before permanently setting automatic irrigation timers.
            </p>

            <h2>3. Intellectual Property Rights</h2>
            <p>
              Unless otherwise stated, <?= e(BRAND_SLUG) ?> and/or its licensors own the intellectual property rights for all material on <?= e(BRAND_SLUG) ?>. All intellectual property rights are reserved. You may access this from <?= e(BRAND_SLUG) ?> for your own personal use subjected to restrictions set in these terms and conditions.
            </p>
            <p>You must not:</p>
            <ul>
              <li>Republish material, guides, or custom imagery from <?= e(BRAND_SLUG) ?> without written authorization.</li>
              <li>Sell, rent, or sub-license material from <?= e(BRAND_SLUG) ?>.</li>
              <li>Reproduce, duplicate, or copy material from <?= e(BRAND_SLUG) ?> for commercial resale.</li>
              <li>Redistribute content from <?= e(BRAND_SLUG) ?>, except content specifically made for redistribution (such as printable checklists).</li>
            </ul>

            <h2>4. Dedicated Contact &amp; Consultation Inquiries</h2>
            <p>
              As part of our commitment to clean user experience, our homepage does not contain embedded input forms. All consultation requests and inquiries must be submitted through our designated <a href="contact.php" style="color: var(--primary-700); text-decoration: underline;">Contact Us</a> page.
            </p>
            <p>
              By submitting an inquiry through our contact form, you agree to provide truthful and accurate information regarding your contact details and lawn care situation. You grant our agronomy team permission to communicate with you via email or telephone regarding your inquiry.
            </p>

            <h2>5. Chemical &amp; Herbicide Safety Precautions</h2>
            <p>
              Any references to fertilizers, pre-emergents, fungicides, or pesticides must always be used strictly in compliance with the manufacturer's Environmental Protection Agency (EPA) product label. <strong>The label is the law.</strong>
            </p>
            <p>
              Always wear appropriate personal protective equipment (PPE) when applying chemicals. Never apply post-emergent selective herbicides when ambient temperatures exceed product thresholds (typically 85°F to 90°F) to avoid chemical turf phytotoxicity and volatile drift.
            </p>

            <h2>6. Limitation of Liability</h2>
            <p>
              In no event shall <?= e(BRAND_SLUG) ?>, its founders, horticulturists, or contributors be liable for any direct, indirect, incidental, special, consequential, or punitive damages arising out of your access to, use of, or inability to use this website, including but not limited to turf yellowing, root desiccation, chemical scorch, or over-irrigation utility charges.
            </p>

            <h2>7. External Links &amp; Third-Party Services</h2>
            <p>
              Our website may contain links to external third-party websites or services (e.g. extension university turf fact sheets, weather bureaus) that are not owned or controlled by <?= e(BRAND_SLUG) ?>. We have no control over, and assume no responsibility for, the content, privacy policies, or practices of any third-party websites or services.
            </p>

            <h2>8. Modifications to Terms</h2>
            <p>
              We reserve the right, at our sole discretion, to modify or replace these Terms at any time. Changes become effective immediately upon posting to this URL. By continuing to access or use our Service after those revisions become effective, you agree to be bound by the revised terms.
            </p>

            <h2>9. Governing Law</h2>
            <p>
              These Terms shall be governed and construed in accordance with the laws of the jurisdiction in which the site operator resides, without regard to its conflict of law provisions.
            </p>

            <h2>10. Inquiries &amp; Support</h2>
            <p>
              If you have any questions about these Terms of Service, please reach out through our official channels:
            </p>
            <ul>
              <li><strong>Email:</strong> <?= e(CONTACT_EMAIL) ?></li>
              <li><strong>Contact Page:</strong> <a href="contact.php" style="color: var(--primary-700); text-decoration: underline;">SummerLawnCare Contact Page</a></li>
              <li><strong>Phone:</strong> <?= e(CONTACT_PHONE) ?></li>
            </ul>
          </div>
        </article>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
