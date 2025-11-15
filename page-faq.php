<?php
/**
 * Template Name: FAQ
 */
get_header(); ?>

<style>
    /* --------------------------------------------------
   MODERN FAQ PAGE (Bootstrap + PostCSS Variables)
-------------------------------------------------- */

    .faq-wrapper {
        padding: var(--space-xl) var(--space-md);
        font-family: var(--font-body);
    }

    /* ===================== HERO ===================== */
    .faq-hero {
        background: linear-gradient(135deg, #fff4ef, #fffdfb);
        padding: var(--space-xl) var(--space-md);
        text-align: center;
        border-radius: var(--radius-xl);
        box-shadow: var(--shadow-soft);
        margin-bottom: var(--space-xl);
        position: relative;
        overflow: hidden;
    }

    .faq-hero::before,
    .faq-hero::after {
        content: "";
        position: absolute;
        width: 300px;
        height: 300px;
        background: rgba(198, 40, 40, 0.10);
        border-radius: 58% 42% 65% 35%;
        filter: blur(80px);
        animation: floating 9s ease-in-out infinite alternate;
    }

    .faq-hero::before {
        top: -120px;
        left: -90px;
    }

    .faq-hero::after {
        bottom: -130px;
        right: -90px;
    }

    @keyframes floating {
        0% {
            transform: translate(0, 0) rotate(0deg);
        }

        100% {
            transform: translate(45px, 40px) rotate(25deg);
        }
    }

    .faq-hero h1 {
        font-size: 2.5rem;
        font-family: var(--font-heading);
        font-weight: 700;
        color: var(--color-dark);
        margin-bottom: var(--space-sm);
    }

    .faq-hero p {
        font-size: 1.15rem;
        opacity: 0.8;
    }

    /* ===================== FAQ ACCORDION ===================== */
    .faq-section {
        background: var(--color-white);
        padding: var(--space-xl) var(--space-lg);
        border-radius: var(--radius-xl);
        box-shadow: var(--shadow-soft);
        margin-bottom: var(--space-xl);
    }

    .section-title {
        text-align: center;
        font-family: var(--font-heading);
        font-size: 1.9rem;
        color: var(--color-dark);
        margin-bottom: var(--space-lg);
    }

    .accordion-button {
        font-size: 1.1rem;
        font-weight: 600;
        color: var(--color-dark);
        background: #fff7f4;
        border-radius: var(--radius-md) !important;
        padding: var(--space-md);
        box-shadow: none;
    }

    .accordion-button:not(.collapsed) {
        color: var(--color-primary);
        background: #ffe8e3;
    }

    .accordion-item {
        margin-bottom: var(--space-md);
        border-radius: var(--radius-md) !important;
        border: 1px solid #ffe3dc;
        overflow: hidden;
    }

    .accordion-body {
        background: #fff;
        padding: var(--space-md);
        font-size: 1rem;
        line-height: 1.7;
    }

    /* ===================== CONTACT BOX ===================== */
    .faq-contact {
        background: var(--color-primary);
        color: white;
        padding: var(--space-xl);
        border-radius: var(--radius-xl);
        text-align: center;
        box-shadow: var(--shadow-hover);
    }

    .faq-contact a {
        margin-top: var(--space-sm);
        background: #fff;
        color: var(--color-primary);
        text-decoration: none;
        padding: var(--space-sm) var(--space-lg);
        font-weight: 600;
        border-radius: var(--radius-lg);
        display: inline-block;
        transition: var(--bs-transition);
    }

    .faq-contact a:hover {
        background: var(--color-primary-light);
        color: white;
    }

    /* ================ MOBILE FIXES ================ */
    @media (max-width: 576px) {
        .faq-hero h1 {
            font-size: 1.8rem;
        }

        .faq-hero p {
            font-size: 1rem;
        }

        .accordion-button {
            font-size: 1rem;
            padding: var(--space-sm);
        }
    }
</style>

<div class="container faq-wrapper">

    <!-- =========== HERO =========== -->
    <section class="faq-hero">
        <h1>Frequently Asked Questions</h1>
        <p>Your most common questions — answered clearly.</p>
    </section>

    <!-- =========== FAQ SECTION =========== -->
    <section class="faq-section">
        <h2 class="section-title">General Questions</h2>

        <div class="accordion" id="faqAccordion">

            <!-- Q1 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="q1">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#a1">
                        Do you manufacture all MDF cutouts in-house?
                    </button>
                </h2>
                <div id="a1" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes. All MDF cutouts are produced in our Ayodhya workshop using high-precision machinery
                        and experienced craftsmen.
                    </div>
                </div>
            </div>

            <!-- Q2 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="q2">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a2">
                        Do you accept custom size or custom shape orders?
                    </button>
                </h2>
                <div id="a2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Absolutely! We specialize in custom bulk production. Share your size, shape, and quantity
                        — we’ll manufacture it for you.
                    </div>
                </div>
            </div>

            <!-- Q3 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="q3">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a3">
                        How long does delivery take?
                    </button>
                </h2>
                <div id="a3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Orders are dispatched within 24–48 hours. Delivery time depends on your location and takes
                        3–7 working days on average.
                    </div>
                </div>
            </div>

            <!-- Q4 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="q4">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a4">
                        Do you offer wholesale pricing?
                    </button>
                </h2>
                <div id="a4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Yes — we are real manufacturers. All our pricing is factory-direct and best suited for
                        small businesses, creators, and studios.
                    </div>
                </div>
            </div>

            <!-- Q5 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="q5">
                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#a5">
                        How do you ensure product quality?
                    </button>
                </h2>
                <div id="a5" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Every product goes through multiple quality checks:
                        <ul>
                            <li>Laser cutting accuracy</li>
                            <li>Smooth finishing</li>
                            <li>Shape correctness</li>
                            <li>Strong packaging for safe delivery</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========== CONTACT CTA =========== -->
    <section class="faq-contact">
        <h2>Still have questions?</h2>
        <p>We’re here to help you with product info, bulk orders, or custom shapes.</p>
        <a href="/contact">Contact Us</a>
    </section>

</div>

<?php get_footer(); ?>