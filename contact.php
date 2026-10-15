<?php
/**
 * SummerLawnCare - Dedicated Contact Us & Consultation Page
 * Brand: summerlawncare
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Contact Turf Specialists | ' . SITE_NAME;
$pageDescription = 'Get in touch with SummerLawnCare specialists. Request a custom summer turf consultation, irrigation audit, or pest diagnosis for your lawn.';
$currentPage = 'contact';

$formSuccess = false;
$formErrors = [];
$formData = [
    'name' => '',
    'email' => '',
    'phone' => '',
    'grass_type' => '',
    'primary_issue' => '',
    'message' => ''
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $submittedToken = $_POST['csrf_token'] ?? '';
    if (!validateCsrfToken($submittedToken)) {
        $formErrors[] = 'Security token validation failed. Please refresh the page and try again.';
    } else {
        $formData['name'] = trim($_POST['name'] ?? '');
        $formData['email'] = trim($_POST['email'] ?? '');
        $formData['phone'] = trim($_POST['phone'] ?? '');
        $formData['grass_type'] = trim($_POST['grass_type'] ?? '');
        $formData['primary_issue'] = trim($_POST['primary_issue'] ?? '');
        $formData['message'] = trim($_POST['message'] ?? '');

        if (empty($formData['name'])) {
            $formErrors[] = 'Please provide your full name.';
        }
        if (empty($formData['email']) || !filter_var($formData['email'], FILTER_VALIDATE_EMAIL)) {
            $formErrors[] = 'Please provide a valid email address.';
        }
        if (empty($formData['message'])) {
            $formErrors[] = 'Please describe your summer lawn problem or question.';
        }

        if (empty($formErrors)) {
            $formSuccess = true;
            // Regenerate CSRF token on success
            unset($_SESSION['csrf_token']);
        }
    }
}

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content">
    <!-- Page Hero Banner -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="index.php">Home</a>
          <span>&rsaquo;</span>
          <span>Contact Us</span>
        </nav>
        <h1 class="page-hero-title">Contact Summer Turf Specialists</h1>
        <p class="page-hero-desc">
          Have an urgent summer lawn question, drought damage, or mysterious brown patches? Reach out below for tailored agronomic recommendations.
        </p>
      </div>
    </section>

    <!-- Contact Form & Info Section -->
    <section class="section-padding">
      <div class="container">
        <div class="contact-layout">
          <!-- Left Column: Direct Info & Support -->
          <div class="contact-info-card">
            <span class="badge-tag">Fast Support</span>
            <h2 class="contact-info-title">Let's Protect Your Summer Turf</h2>
            <p class="contact-info-desc">
              Summer lawn problems develop rapidly when temperatures top 90°F. Our specialist agronomy team reviews inquiries daily to provide fast, actionable solutions.
            </p>

            <div class="info-points">
              <div class="info-point-item">
                <div class="info-icon">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                  </svg>
                </div>
                <div class="info-detail">
                  <strong>Email Direct Support</strong>
                  <p><?= e(CONTACT_EMAIL) ?></p>
                </div>
              </div>

              <div class="info-point-item">
                <div class="info-icon">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                  </svg>
                </div>
                <div class="info-detail">
                  <strong>Turf Hotline (Toll-Free)</strong>
                  <p><?= e(CONTACT_PHONE) ?></p>
                </div>
              </div>

              <div class="info-point-item">
                <div class="info-icon">
                  <svg width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                  </svg>
                </div>
                <div class="info-detail">
                  <strong>Consultation Hours</strong>
                  <p>Monday – Saturday: 7:00 AM – 7:00 PM EST</p>
                </div>
              </div>
            </div>

            <!-- Response Guarantee Badge -->
            <div class="guarantee-box">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
              <p>Guaranteed response within 24 hours during peak summer season (June – August).</p>
            </div>
          </div>

          <!-- Right Column: Contact & Consultation Request Form -->
          <div class="contact-form-card">
            <h2 class="contact-info-title" style="margin-bottom: 0.5rem;">Send a Consultation Request</h2>
            <p style="font-size: 0.94rem; color: var(--text-secondary); margin-bottom: 1.75rem;">
              Fill in your lawn details below. We'll analyze your situation and respond with science-based recommendations.
            </p>

            <?php if ($formSuccess): ?>
              <div class="form-alert-feedback success" role="alert">
                <strong>Thank you, <?= e($formData['name']) ?>!</strong> Your summer turf consultation request has been submitted successfully. A specialist will review your lawn specs and reply to <strong><?= e($formData['email']) ?></strong> within 24 hours.
              </div>
            <?php elseif (!empty($formErrors)): ?>
              <div class="form-alert-feedback error" role="alert">
                <strong>Please correct the following:</strong>
                <ul style="margin-top: 0.5rem; margin-left: 1.25rem;">
                  <?php foreach ($formErrors as $err): ?>
                    <li><?= e($err) ?></li>
                  <?php endforeach; ?>
                </ul>
              </div>
            <?php endif; ?>

            <div id="formFeedbackAlert" class="form-alert-feedback" role="alert"></div>

            <?php if (!$formSuccess): ?>
            <form id="summerContactForm" action="contact.php" method="POST">
              <input type="hidden" name="csrf_token" value="<?= e(getCsrfToken()) ?>">

              <div class="form-group-row">
                <div class="form-group">
                  <label for="senderName" class="form-label">Full Name <span class="required">*</span></label>
                  <input type="text" id="senderName" name="name" class="form-control" placeholder="e.g. John Miller" value="<?= e($formData['name']) ?>" required>
                </div>
                <div class="form-group">
                  <label for="senderEmail" class="form-label">Email Address <span class="required">*</span></label>
                  <input type="email" id="senderEmail" name="email" class="form-control" placeholder="john@example.com" value="<?= e($formData['email']) ?>" required>
                </div>
              </div>

              <div class="form-group-row">
                <div class="form-group">
                  <label for="senderPhone" class="form-label">Phone Number (Optional)</label>
                  <input type="tel" id="senderPhone" name="phone" class="form-control" placeholder="(555) 000-0000" value="<?= e($formData['phone']) ?>">
                </div>
                <div class="form-group">
                  <label for="grassVariety" class="form-label">Grass Variety / Type</label>
                  <select id="grassVariety" name="grass_type" class="form-control">
                    <option value="">Select your lawn variety...</option>
                    <option value="bermuda" <?= $formData['grass_type'] === 'bermuda' ? 'selected' : '' ?>>Bermuda Grass (Warm)</option>
                    <option value="zoysia" <?= $formData['grass_type'] === 'zoysia' ? 'selected' : '' ?>>Zoysia Grass (Warm)</option>
                    <option value="st_augustine" <?= $formData['grass_type'] === 'st_augustine' ? 'selected' : '' ?>>St. Augustine Grass (Warm)</option>
                    <option value="tall_fescue" <?= $formData['grass_type'] === 'tall_fescue' ? 'selected' : '' ?>>Tall Fescue (Cool)</option>
                    <option value="kentucky_bluegrass" <?= $formData['grass_type'] === 'kentucky_bluegrass' ? 'selected' : '' ?>>Kentucky Bluegrass (Cool)</option>
                    <option value="perennial_rye" <?= $formData['grass_type'] === 'perennial_rye' ? 'selected' : '' ?>>Perennial Ryegrass (Cool)</option>
                    <option value="unsure" <?= $formData['grass_type'] === 'unsure' ? 'selected' : '' ?>>Not Sure / Mixed Lawn</option>
                  </select>
                </div>
              </div>

              <div class="form-group">
                <label for="summerIssue" class="form-label">Primary Summer Lawn Concern</label>
                <select id="summerIssue" name="primary_issue" class="form-control">
                  <option value="heat_stress" <?= $formData['primary_issue'] === 'heat_stress' ? 'selected' : '' ?>>Heat Stress &amp; Severe Browning</option>
                  <option value="irrigation" <?= $formData['primary_issue'] === 'irrigation' ? 'selected' : '' ?>>Sprinkler / Watering Schedule Guidance</option>
                  <option value="grubs_pests" <?= $formData['primary_issue'] === 'grubs_pests' ? 'selected' : '' ?>>Suspected White Grubs or Chinch Bugs</option>
                  <option value="fungus_patch" <?= $formData['primary_issue'] === 'fungus_patch' ? 'selected' : '' ?>>Brown Patch / Summer Fungus Rings</option>
                  <option value="summer_weeds" <?= $formData['primary_issue'] === 'summer_weeds' ? 'selected' : '' ?>>Crabgrass &amp; Summer Weed Outbreak</option>
                  <option value="general_consultation" <?= $formData['primary_issue'] === 'general_consultation' ? 'selected' : '' ?>>General Summer Care Advice</option>
                </select>
              </div>

              <div class="form-group">
                <label for="senderMessage" class="form-label">Describe Your Summer Lawn Problem <span class="required">*</span></label>
                <textarea id="senderMessage" name="message" class="form-control" placeholder="Tell us about your soil type, watering habits, current mower height, and when the issue started..." required><?= e($formData['message']) ?></textarea>
              </div>

              <div class="form-checkbox-group">
                <input type="checkbox" id="termsConsent" name="consent" required checked>
                <label for="termsConsent">
                  I agree to the <a href="terms.php" style="color: var(--primary-700); text-decoration: underline;">Terms of Service</a> and acknowledge the <a href="privacy.php" style="color: var(--primary-700); text-decoration: underline;">Privacy Policy</a>.
                </label>
              </div>

              <button type="submit" class="btn-primary" style="width: 100%; border-radius: var(--radius-md);">
                <span>Send Summer Turf Inquiry</span>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                  <line x1="22" y1="2" x2="11" y2="13"></line>
                  <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                </svg>
              </button>
            </form>
            <?php else: ?>
              <div style="margin-top: 1.5rem;">
                <a href="index.php" class="btn-primary">Return to Summer Guide</a>
              </div>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
