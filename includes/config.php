<?php
/**
 * SummerLawnCare - Configuration & Helper Functions
 * Brand: summerlawncare
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('SITE_NAME', 'SummerLawnCare');
define('BRAND_SLUG', 'summerlawncare');
define('SITE_URL', '');
define('CONTACT_EMAIL', 'support@summerlawncare.com');
define('CONTACT_PHONE', '1-800-LAWN-CARE');
define('CURRENT_YEAR', date('Y'));

/**
 * Escape HTML output for XSS prevention
 */
function e(?string $string): string {
    return htmlspecialchars($string ?? '', ENT_QUOTES, 'UTF-8');
}

/**
 * Generate or get CSRF token
 */
function getCsrfToken(): string {
    if (empty($_SESSION['csrf_token'])) {
        $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
    }
    return $_SESSION['csrf_token'];
}

/**
 * Validate CSRF token
 */
function validateCsrfToken(?string $token): bool {
    if (empty($_SESSION['csrf_token']) || empty($token)) {
        return false;
    }
    return hash_equals($_SESSION['csrf_token'], $token);
}
