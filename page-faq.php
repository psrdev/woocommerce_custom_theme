<?php
/**
 * Template Name: FAQ
 */
get_header(); ?>



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