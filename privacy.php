<?php
/**
 * SummerLawnCare - Privacy Policy
 * Brand: summerlawncare
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Privacy Policy | ' . SITE_NAME;
$pageDescription = 'Privacy Policy for SummerLawnCare. Learn how we handle, collect, and protect your personal information and lawn inquiry data.';
$currentPage = 'privacy';

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content">
    <!-- Page Hero Banner -->
    <section class="page-hero">
      <div class="container">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="index.php">Home</a>
          <span>&rsaquo;</span>
          <span>Privacy Policy</span>
        </nav>
        <h1 class="page-hero-title">Privacy Policy</h1>
        <p class="page-hero-desc">
          Transparency and integrity regarding how SummerLawnCare collects, uses, and safeguards your personal data.
        </p>
      </div>
    </section>

    <!-- Legal Document Content -->
    <section class="section-padding" style="padding-top: 1rem;">
      <div class="container container-narrow">
        <article class="legal-content-wrap">
          <div class="legal-header">
            <span class="badge-tag">Legal Disclosure</span>
            <div class="legal-meta">
              <span><strong>Effective Date:</strong> October 15, <?= e(CURRENT_YEAR) ?></span>
              <span><strong>Brand:</strong> <?= e(BRAND_SLUG) ?></span>
            </div>
          </div>

          <div class="legal-body">
            <div class="legal-callout">
              <p>
                <strong>Privacy Commitment:</strong> At <strong><?= e(BRAND_SLUG) ?></strong>, accessible from our digital platform, the privacy of our visitors is paramount. This Privacy Policy documents the types of information collected and recorded by <?= e(BRAND_SLUG) ?> and how we protect it.
              </p>
            </div>

            <h2>1. Introduction &amp; Scope</h2>
            <p>
              This Privacy Policy applies solely to our online activities and is valid for visitors to our website with regards to the information that they share and/or collect in <strong><?= e(BRAND_SLUG) ?></strong>. This policy is not applicable to any information collected offline or via channels other than this website.
            </p>

            <h2>2. Information We Collect</h2>
            <p>
              The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to you at the point we ask you to provide your personal information.
            </p>
            <ul>
              <li><strong>Direct Consultation Submissions:</strong> If you contact us directly via our dedicated <a href="contact.php" style="color: var(--primary-700); text-decoration: underline;">Contact Us</a> page, we may receive additional information about you such as your name, email address, phone number, grass species, lawn dimensions, and the contents of the message or attachments you may send us.</li>
              <li><strong>Non-Personal Technical Logs:</strong> Like most standard web servers, <?= e(BRAND_SLUG) ?> follows a standard procedure of using log files. These files log visitors when they visit websites. The information collected by log files includes internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks. These are not linked to any information that is personally identifiable.</li>
            </ul>

            <h2>3. How We Use Your Information</h2>
            <p>We use the information we collect in various ways, including to:</p>
            <ul>
              <li>Provide, operate, and maintain our summer lawn care guide and diagnostic calculator.</li>
              <li>Improve, personalize, and expand our educational gardening content and agronomic guidance.</li>
              <li>Understand and analyze how visitors interact with our website to optimize page speed and mobile usability.</li>
              <li>Communicate with you to provide customer support, answer lawn health questions, and deliver tailored turf maintenance advice.</li>
              <li>Detect, prevent, and mitigate technical errors or security threats.</li>
            </ul>

            <h2>4. No Sale of Personal Information</h2>
            <p>
              We firmly uphold a zero-data-monetization standard: <strong>we do not sell, rent, or lease your personal information to third parties or marketing brokers</strong>. Any lawn data submitted through our consultation channels is strictly used to evaluate your turf requirements and provide agronomic advice.
            </p>

            <h2>5. Cookies &amp; Web Beacons</h2>
            <p>
              Like any other website, <?= e(BRAND_SLUG) ?> may use 'cookies'. These cookies are used to store information including visitors' preferences, such as selected lawn calculator configurations or recent reading history. The information is used to optimize the users' experience by customizing our web page content based on visitors' browser type and/or other information.
            </p>
            <p>
              You can choose to disable cookies through your individual browser options. More detailed information about cookie management with specific web browsers can be found at the browsers' respective websites.
            </p>

            <h2>6. CCPA / CPRA Privacy Rights (Do Not Sell My Personal Information)</h2>
            <p>Under the California Consumer Privacy Act (CCPA) and California Privacy Rights Act (CPRA), California consumers have the right to:</p>
            <ul>
              <li>Request that a business disclose the categories and specific pieces of personal data that a business has collected about consumers.</li>
              <li>Request that a business delete any personal data about the consumer that a business has collected.</li>
              <li>Request that a business that sells a consumer's personal data, not sell the consumer's personal data (we do not sell data).</li>
              <li>Right to non-discrimination for exercising your privacy rights.</li>
            </ul>
            <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us.</p>

            <h2>7. GDPR Data Protection Rights</h2>
            <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
            <ul>
              <li><strong>The right to access:</strong> You have the right to request copies of your personal data.</li>
              <li><strong>The right to rectification:</strong> You have the right to request that we correct any information you believe is inaccurate.</li>
              <li><strong>The right to erasure:</strong> You have the right to request that we erase your personal data, under certain conditions.</li>
              <li><strong>The right to restrict processing:</strong> You have the right to request that we restrict the processing of your personal data.</li>
              <li><strong>The right to object to processing:</strong> You have the right to object to our processing of your personal data.</li>
              <li><strong>The right to data portability:</strong> You have the right to request that we transfer the data that we have collected to another organization, or directly to you.</li>
            </ul>

            <h2>8. Children's Information Protection</h2>
            <p>
              Another part of our priority is adding protection for children while using the internet. We encourage parents and guardians to observe, participate in, and/or monitor and guide their online activity.
            </p>
            <p>
              <?= e(BRAND_SLUG) ?> does not knowingly collect any Personal Identifiable Information from children under the age of 13. If you think that your child provided this kind of information on our website, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.
            </p>

            <h2>9. Changes to This Privacy Policy</h2>
            <p>
              We may update our Privacy Policy from time to time. Thus, we advise you to review this page periodically for any changes. We will notify you of any changes by posting the new Privacy Policy on this page. These changes are effective immediately after they are posted.
            </p>

            <h2>10. Contact Us</h2>
            <p>
              If you have any questions or suggestions about our Privacy Policy, do not hesitate to contact us at:
            </p>
            <ul>
              <li><strong>Email:</strong> <?= e(CONTACT_EMAIL) ?></li>
              <li><strong>Contact Page:</strong> <a href="contact.php" style="color: var(--primary-700); text-decoration: underline;">SummerLawnCare Contact Form</a></li>
              <li><strong>Hours:</strong> Monday – Saturday, 7:00 AM – 7:00 PM EST</li>
            </ul>
          </div>
        </article>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
