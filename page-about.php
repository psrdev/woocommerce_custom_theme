<?php
/**
 * Template Name: About
 */
get_header(); ?>

<style>
/* =====================================================
   ELEGANT CRAFT ABOUT PAGE (Full Template Styles)
   Uses your theme CSS variables (defined elsewhere)
   ===================================================== */

.about-wrapper {
  font-family: var(--font-body);
  color: var(--color-text);
  padding-bottom: var(--space-xl);
}

/* --------------------- HERO -------------------------- */
.about-hero {
  background: linear-gradient(135deg, #f6ede4, #fff9f4);
  padding: var(--space-xl) var(--space-md);
  text-align: center;
  border-radius: var(--radius-lg);
  position: relative;
  overflow: hidden;
  box-shadow: var(--shadow-soft);
  margin-bottom: var(--space-xl);
}

.about-hero::before,
.about-hero::after {
  content: "";
  position: absolute;
  width: 320px;
  height: 320px;
  background: rgba(198, 40, 40, 0.06);
  border-radius: 60% 40% 55% 45%;
  filter: blur(80px);
  animation: blob-move 10s infinite alternate ease-in-out;
}

.about-hero::before { top: -120px; left: -80px; }
.about-hero::after { bottom: -120px; right: -80px; }

@keyframes blob-move {
  0% { transform: translate(0,0) rotate(0deg); }
  100% { transform: translate(40px,40px) rotate(35deg); }
}

.about-hero h1 {
  font-size: 3rem;
  font-family: var(--font-heading);
  font-weight: 700;
  margin-bottom: var(--space-sm);
  color: var(--color-dark);
}

.about-hero p {
  font-size: 1.15rem;
  color: rgba(0,0,0,0.72);
  margin: 0 auto;
  max-width: 800px;
}

/* --------------------- SECTION WRAPPER ---------------- */
.about-section {
  background: var(--color-white);
  padding: var(--space-lg);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-soft);
  margin-bottom: var(--space-lg);
  transition: var(--bs-transition);
}

.about-section:hover {
  box-shadow: var(--shadow-hover);
}

.section-title {
  text-align: center;
  font-family: var(--font-heading);
  color: var(--color-dark);
  font-size: 1.9rem;
  margin-bottom: var(--space-md);
}

/* --------------------- STORY ------------------------- */
.about-story p {
  line-height: 1.85;
  font-size: 1.05rem;
  margin-bottom: var(--space-md);
}

/* --------------------- VALUES GRID -------------------- */
.values-grid {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-md);
}

@media (min-width: 768px) {
  .values-grid { grid-template-columns: repeat(2, 1fr); }
}
@media (min-width: 992px) {
  .values-grid { grid-template-columns: repeat(3, 1fr); }
}

.value-card {
  padding: var(--space-md);
  background: #fff7f3;
  border-radius: var(--radius-lg);
  text-align: center;
  border: 1px solid #ffe4db;
  box-shadow: var(--shadow-soft);
  transition: var(--bs-transition);
}
.value-card:hover {
  transform: translateY(-6px);
  box-shadow: var(--shadow-hover);
}
.value-card i {
  font-size: 2rem;
  color: var(--color-primary);
  display: inline-block;
  margin-bottom: var(--space-xs);
}
.value-card h3 {
  font-family: var(--font-heading);
  font-size: 1.15rem;
  margin-top: var(--space-xs);
}

/* --------------------- STATS ------------------------- */
.stats-container {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-md);
  text-align: center;
}

@media (min-width: 768px) {
  .stats-container { grid-template-columns: repeat(3, 1fr); }
}

.stat-block {
  background: var(--color-white);
  padding: var(--space-md);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-soft);
}
.stat-block h3 {
  font-size: 2.2rem;
  font-family: var(--font-heading);
  color: var(--color-primary);
  margin-bottom: var(--space-xs);
}
.stat-block p { color: var(--color-text); }

/* --------------------- TIMELINE ---------------------- */
/* Desktop: vertical left-line with numbered dots.
   Mobile: stacked, no left-line to avoid overflow. */

.modern-timeline {
  position: relative;
  padding-left: 0;
  display: grid;
  gap: var(--space-md);
}

@media (min-width: 768px) {
  .modern-timeline {
    padding-left: 60px;
  }
  .modern-timeline::before {
    content: "";
    position: absolute;
    left: 30px;
    top: 0;
    bottom: 0;
    width: 4px;
    background: var(--color-primary);
    border-radius: 4px;
    opacity: 0.12;
  }
}

.timeline-item {
  display: flex;
  gap: var(--space-md);
  align-items: flex-start;
  position: relative;
  padding: var(--space-sm) 0;
}

.timeline-dot {
  width: 46px;
  height: 46px;
  flex-shrink: 0;
  background: var(--color-primary);
  border-radius: 50%;
  color: var(--color-white);
  display: flex;
  align-items: center;
  justify-content: center;
  font-weight: 700;
  box-shadow: var(--shadow-soft);
  font-size: 1rem;
}

.timeline-content {
  background: var(--color-white);
  padding: var(--space-sm);
  border-radius: var(--radius-md);
  box-shadow: var(--shadow-soft);
  border-left: 4px solid rgba(198,40,40,0.06);
}
.timeline-content h4 {
  font-family: var(--font-heading);
  margin-bottom: var(--space-xs);
  font-size: 1.12rem;
}
.timeline-content p {
  margin: 0;
  color: var(--color-text);
  font-size: 0.98rem;
}

/* --------------------- GALLERY ----------------------- */
.manufacture-gallery {
  display: grid;
  grid-template-columns: 1fr;
  gap: var(--space-md);
  margin-top: var(--space-md);
}
@media (min-width: 768px) {
  .manufacture-gallery { grid-template-columns: repeat(2, 1fr); }
}
@media (min-width: 992px) {
  .manufacture-gallery { grid-template-columns: repeat(4, 1fr); }
}
.manufacture-item {
  padding: var(--space-md);
  background: #fffefe;
  border: 1px solid #f2e7e3;
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-soft);
  text-align: center;
  font-weight: 600;
}
.manufacture-item i { font-size: 1.8rem; margin-bottom: var(--space-xs); }

/* --------------------- TRUST BADGES ------------------- */
.trust-badges {
  display: flex;
  gap: var(--space-sm);
  flex-direction: column;
  align-items: center;
}
@media (min-width: 768px) {
  .trust-badges { flex-direction: row; justify-content: center; flex-wrap: wrap; }
}
.trust-badge {
  background: #fff6f2;
  border: 1px solid #ffd9cf;
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-lg);
  font-weight: 600;
  box-shadow: var(--shadow-soft);
}

/* --------------------- CTA --------------------------- */
.about-cta {
  background: var(--color-primary);
  color: var(--color-white);
  text-align: center;
  padding: var(--space-lg);
  border-radius: var(--radius-lg);
  box-shadow: var(--shadow-hover);
  margin: var(--space-lg) 0;
}
.about-cta a {
  background: var(--color-white);
  color: var(--color-primary);
  padding: var(--space-sm) var(--space-md);
  border-radius: var(--radius-lg);
  font-weight: 700;
  text-decoration: none;
  display: inline-block;
  transition: var(--bs-transition);
}
.about-cta a:hover {
  background: var(--color-primary-light);
  color: white;
}

/* --------------------- RESPONSIVE TWEAKS ---------------- */
@media (max-width: 480px) {
  .about-hero h1 { font-size: 1.8rem; }
  .about-hero p { font-size: 0.98rem; }
  .timeline-dot { width: 38px; height: 38px; font-size: 0.95rem; }
  .value-card { padding: var(--space-sm); }
  .about-section { padding: var(--space-md); }
}
</style>

<div class="container about-wrapper">

  <!-- HERO -->
  <section class="about-hero">
    <h1>About Us</h1>
    <p>Crafted With Heart in Ayodhya — Trusted By Thousands of Indian Makers</p>
  </section>

  <!-- STORY -->
  <section class="about-section">
    <h2 class="section-title">Our Story</h2>

    <div class="about-story">
      <p>
        Our journey began not as a manufacturer—but as passionate <strong>craft creators</strong>.
        We experienced the same struggles you did: inconsistent MDF quality, expensive materials,
        unreliable suppliers, and delays that held back creativity.
      </p>

      <p>
        Driven by the vision to support creators like us, we founded
        <strong>AWADH HANDICRAFT</strong> in the holy city of <strong>Ayodhya</strong>.
        Today, we proudly produce high-quality MDF cutouts and raw craft materials
        trusted by thousands of businesses, studios, and artisans.
      </p>

      <p>
        Our promise is simple:
        <strong>Premium quality at true manufacturer pricing — crafted with care, honesty, and precision.</strong>
      </p>
    </div>
  </section>

  <!-- VALUES -->
  <section class="about-section">
    <h2 class="section-title">Why India Trusts Us</h2>

    <div class="values-grid">

      <div class="value-card">
        <i class="bi bi-currency-rupee" aria-hidden="true"></i>
        <h3>Factory Direct Prices</h3>
        <p>As real manufacturers, we offer unbeatable wholesale rates.</p>
      </div>

      <div class="value-card">
        <i class="bi bi-award" aria-hidden="true"></i>
        <h3>Best MDF Quality</h3>
        <p>Smooth, durable, perfectly cut MDF trusted by professionals.</p>
      </div>

      <div class="value-card">
        <i class="bi bi-building-gear" aria-hidden="true"></i>
        <h3>100% In-House Production</h3>
        <p>Every piece is crafted in our Ayodhya workshop.</p>
      </div>

      <div class="value-card">
        <i class="bi bi-box-seam" aria-hidden="true"></i>
        <h3>Safe, Secure Delivery</h3>
        <p>Premium packaging ensures safe delivery across India.</p>
      </div>

      <div class="value-card">
        <i class="bi bi-scissors" aria-hidden="true"></i>
        <h3>Custom Bulk Orders</h3>
        <p>Any size. Any shape. Fully customizable for bulk orders.</p>
      </div>

      <div class="value-card">
        <i class="bi bi-people-fill" aria-hidden="true"></i>
        <h3>Creators First</h3>
        <p>We understand your needs — because we’re creators too.</p>
      </div>

    </div>
  </section>

  <!-- STATS -->
  <section class="about-section">
    <h2 class="section-title">Our Impact</h2>

    <div class="stats-container">
      <div class="stat-block">
        <h3 class="counter" data-target="10000">0</h3>
        <p>Orders Delivered</p>
      </div>
      <div class="stat-block">
        <h3 class="counter" data-target="2500">0</h3>
        <p>Happy Businesses</p>
      </div>
      <div class="stat-block">
        <h3 class="counter" data-target="500">0</h3>
        <p>Custom Designs Created</p>
      </div>
    </div>
  </section>

  <!-- TIMELINE -->
  <section class="about-section">
    <h2 class="section-title">Our Journey</h2>

    <div class="modern-timeline">

      <div class="timeline-item">
        <div class="timeline-dot">1</div>
        <div class="timeline-content">
          <h4>2018 — The Beginning</h4>
          <p>Started as small-scale craft makers working from home.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-dot">2</div>
        <div class="timeline-content">
          <h4>2020 — First Workshop</h4>
          <p>Built our workshop and upgraded our tools and machinery.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-dot">3</div>
        <div class="timeline-content">
          <h4>2022 — Full-Scale Manufacturing</h4>
          <p>Launched bulk MDF cutouts and expanded nationwide.</p>
        </div>
      </div>

      <div class="timeline-item">
        <div class="timeline-dot">4</div>
        <div class="timeline-content">
          <h4>2023–2025 — Pan-India Brand</h4>
          <p>Became one of India’s trusted suppliers for craft material.</p>
        </div>
      </div>

    </div>
  </section>

  <!-- GALLERY -->
  <section class="about-section">
    <h2 class="section-title">Inside Our Manufacturing</h2>

    <p>
      Every MDF cutout is carefully processed using a blend of precision machinery and
      handcrafted finishing techniques.
    </p>

    <div class="manufacture-gallery">
      <div class="manufacture-item"><i class="bi bi-layers" aria-hidden="true"></i><div>Laser Cutting</div></div>
      <div class="manufacture-item"><i class="bi bi-brush" aria-hidden="true"></i><div>Hand Sanding</div></div>
      <div class="manufacture-item"><i class="bi bi-check-circle" aria-hidden="true"></i><div>Quality Check</div></div>
      <div class="manufacture-item"><i class="bi bi-box" aria-hidden="true"></i><div>Premium Packing</div></div>
    </div>
  </section>

  <!-- BADGES -->
  <section class="about-section">
    <h2 class="section-title">You’re In Safe Hands</h2>

    <div class="trust-badges">
      <div class="trust-badge">Secure Payments</div>
      <div class="trust-badge">Verified Manufacturer</div>
      <div class="trust-badge">Pan-India Delivery</div>
      <div class="trust-badge">Strong Quality Control</div>
    </div>
  </section>

  <!-- CTA -->
  <section class="about-cta">
    <h2>Ready to Order?</h2>
    <p>Explore premium MDF cutouts or send us your custom bulk requirements.</p>
    <a href="<?php echo esc_url(site_url('/shop')); ?>">Browse Products</a>
  </section>

</div>

<!-- Counter Animation JS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const counters = document.querySelectorAll(".counter");

  function animateCounter(el) {
    const target = +el.getAttribute("data-target");
    const step = Math.max(1, Math.floor(target / 120));
    let count = 0;

    function tick() {
      count += step;
      if (count >= target) {
        el.textContent = target.toLocaleString();
      } else {
        el.textContent = count.toLocaleString();
        requestAnimationFrame(tick);
      }
    }
    tick();
  }

  if ('IntersectionObserver' in window) {
    const obs = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          animateCounter(entry.target);
          obs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.4 });

    counters.forEach(c => obs.observe(c));
  } else {
    counters.forEach(c => animateCounter(c));
  }
});
</script>

<?php get_footer(); ?>
