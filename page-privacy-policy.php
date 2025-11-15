<?php
/**
 * Template Name: Privacy Policy
 * Description: A modern styled Privacy Policy page for your custom theme.
 */

get_header();
?>

<style>
    /* -------------------------
   Privacy Policy – Styling
----------------------------*/
    .privacy-hero {
        background: var(--color-primary);
        color: var(--color-white);
        padding: 80px 0;
        text-align: center;
    }

    .privacy-hero h1 {
        font-size: 2.8rem;
        font-weight: 700;
        margin-bottom: 10px;
    }

    .privacy-hero p {
        font-size: 1.1rem;
        opacity: 0.9;
    }

    .privacy-section {
        padding: 60px 0;
        background: var(--color-bg);
    }

    .privacy-card {
        background: var(--color-white);
        border-radius: 14px;
        padding: 30px 35px;
        margin-bottom: 30px;
        box-shadow: 0 6px 22px rgba(0, 0, 0, 0.08);
        transition: 0.3s ease;
        position: relative;
        overflow: hidden;
    }

    .privacy-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 35px rgba(0, 0, 0, 0.15);
    }

    .privacy-card h3 {
        font-size: 1.55rem;
        color: var(--color-primary);
        margin-bottom: 15px;
        font-weight: 600;
    }

    .privacy-card p,
    .privacy-card li {
        font-size: 1rem;
        color: var(--color-text);
        line-height: 1.7;
    }

    .privacy-card ul {
        padding-left: 20px;
        margin: 0;
    }

    @media (max-width: 767px) {
        .privacy-hero h1 {
            font-size: 2.2rem;
        }

        .privacy-card {
            padding: 25px;
        }
    }
</style>

<!-- ==============================
     HERO SECTION
================================= -->
<div class="privacy-hero">
    <div class="container">
        <h1>Privacy Policy</h1>
        <p>Last updated: <?php echo date('F j, Y'); ?></p>
    </div>
</div>

<!-- ==============================
     CONTENT SECTION
================================= -->
<section class="privacy-section">
    <div class="container">

        <div class="privacy-card">
            <h3>1. Introduction</h3>
            <p>
                We value your privacy and are committed to protecting your personal information.
                This Privacy Policy describes how we collect, use, and protect your data when you use our website or
                services.
            </p>
        </div>

        <div class="privacy-card">
            <h3>2. Information We Collect</h3>
            <p>We may collect the following types of information:</p>
            <ul>
                <li>Personal details (name, email, phone number, address)</li>
                <li>Payment and billing information</li>
                <li>Order and transaction history</li>
                <li>Device and browser information</li>
                <li>IP address and location data</li>
                <li>Cookies & usage data</li>
            </ul>
        </div>

        <div class="privacy-card">
            <h3>3. How We Use Your Information</h3>
            <ul>
                <li>To process orders and deliver services</li>
                <li>To improve our website and customer experience</li>
                <li>To send important notifications and updates</li>
                <li>To handle support requests</li>
                <li>To comply with legal obligations</li>
            </ul>
        </div>

        <div class="privacy-card">
            <h3>4. Sharing of Information</h3>
            <p>We never sell your personal data. We may share your information with:</p>
            <ul>
                <li>Trusted service providers (e.g., payment gateways, delivery partners)</li>
                <li>Legal authorities when required by law</li>
                <li>Analytics and security tools</li>
            </ul>
        </div>

        <div class="privacy-card">
            <h3>5. Cookies & Tracking Technology</h3>
            <p>
                We use cookies to improve website performance and user experience.
                You may disable cookies in your browser settings if you prefer.
            </p>
        </div>

        <div class="privacy-card">
            <h3>6. Data Security</h3>
            <p>
                We implement strong security measures, including encryption, secure servers,
                and regular audits to protect your personal information.
            </p>
        </div>

        <div class="privacy-card">
            <h3>7. Your Rights</h3>
            <p>You have the right to:</p>
            <ul>
                <li>Request access to your personal data</li>
                <li>Request correction of incorrect information</li>
                <li>Request deletion of your data</li>
                <li>Withdraw consent at any time</li>
            </ul>
        </div>

        <div class="privacy-card">
            <h3>8. Third-Party Services</h3>
            <p>
                Our website may contain links to third-party websites.
                We are not responsible for their privacy policies or practices.
            </p>
        </div>

        <div class="privacy-card">
            <h3>9. Updates to This Policy</h3>
            <p>
                We may update this Privacy Policy from time to time.
                Changes will be posted on this page with the updated date.
            </p>
        </div>

        <div class="privacy-card">
            <h3>10. Contact Us</h3>
            <p>
                If you have questions regarding this Privacy Policy, you can contact us at:<br>
                <strong>support@awadhcrafts.com</strong>
            </p>
        </div>

    </div>
</section>

<?php get_footer(); ?>