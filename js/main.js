/**
 * SummerLawnCare - Interactive Core JavaScript
 * Brand: summerlawncare
 */

document.addEventListener('DOMContentLoaded', () => {
  initStickyHeader();
  initMobileNav();
  initWateringCalculator();
  initCalendarTabs();
  initContactFormHandler();
  initSmoothScrollSpy();
});

/* --------------------------------------------------------------------------
   1. Sticky Header & Elevation
   -------------------------------------------------------------------------- */
function initStickyHeader() {
  const header = document.getElementById('siteHeader');
  if (!header) return;

  const handleScroll = () => {
    if (window.scrollY > 25) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  };

  window.addEventListener('scroll', handleScroll, { passive: true });
  handleScroll();
}

/* --------------------------------------------------------------------------
   2. Mobile Navigation Toggle
   -------------------------------------------------------------------------- */
function initMobileNav() {
  const toggleBtn = document.getElementById('mobileToggle');
  const navLinks = document.getElementById('navLinks');
  if (!toggleBtn || !navLinks) return;

  toggleBtn.addEventListener('click', () => {
    const isExpanded = toggleBtn.getAttribute('aria-expanded') === 'true';
    toggleBtn.setAttribute('aria-expanded', !isExpanded);
    navLinks.classList.toggle('nav-open');
  });

  // Close when clicking any nav link
  navLinks.querySelectorAll('a').forEach(link => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('nav-open');
      toggleBtn.setAttribute('aria-expanded', 'false');
    });
  });

  // Close when clicking outside
  document.addEventListener('click', (e) => {
    if (!toggleBtn.contains(e.target) && !navLinks.contains(e.target)) {
      navLinks.classList.remove('nav-open');
      toggleBtn.setAttribute('aria-expanded', 'false');
    }
  });
}

/* --------------------------------------------------------------------------
   3. Interactive Summer Watering Calculator (Form-free client UI)
   -------------------------------------------------------------------------- */
function initWateringCalculator() {
  const calcContainer = document.getElementById('summerWaterCalculator');
  if (!calcContainer) return;

  // Selected State
  let selectedGrass = 'warm'; // 'warm' or 'cool'
  let selectedTemp = '90s';  // '80s', '90s', '100s'
  let selectedSoil = 'loam'; // 'sandy', 'loam', 'clay'
  let lawnSize = 5000;       // square feet

  const lawnSlider = document.getElementById('calcLawnSize');
  const lawnSizeVal = document.getElementById('calcLawnSizeVal');
  const outInches = document.getElementById('calcOutInches');
  const outMinutes = document.getElementById('calcOutMinutes');
  const outFrequency = document.getElementById('calcOutFrequency');
  const outGallons = document.getElementById('calcOutGallons');

  // Grass variety chips
  calcContainer.querySelectorAll('[data-grass-chip]').forEach(chip => {
    chip.addEventListener('click', () => {
      calcContainer.querySelectorAll('[data-grass-chip]').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      selectedGrass = chip.dataset.grassChip;
      calculateWater();
    });
  });

  // Temp chips
  calcContainer.querySelectorAll('[data-temp-chip]').forEach(chip => {
    chip.addEventListener('click', () => {
      calcContainer.querySelectorAll('[data-temp-chip]').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      selectedTemp = chip.dataset.tempChip;
      calculateWater();
    });
  });

  // Soil chips
  calcContainer.querySelectorAll('[data-soil-chip]').forEach(chip => {
    chip.addEventListener('click', () => {
      calcContainer.querySelectorAll('[data-soil-chip]').forEach(c => c.classList.remove('active'));
      chip.classList.add('active');
      selectedSoil = chip.dataset.soilChip;
      calculateWater();
    });
  });

  // Slider change
  if (lawnSlider && lawnSizeVal) {
    lawnSlider.addEventListener('input', (e) => {
      lawnSize = parseInt(e.target.value, 10);
      lawnSizeVal.textContent = Number(lawnSize).toLocaleString() + ' sq ft';
      calculateWater();
    });
  }

  function calculateWater() {
    // Base inches per week
    let weeklyInches = 1.0;

    // Grass factor
    if (selectedGrass === 'cool') {
      // Cool season requires more moisture in summer to survive heat dormancy
      weeklyInches += 0.35;
    }

    // Temperature factor
    if (selectedTemp === '90s') {
      weeklyInches += 0.25;
    } else if (selectedTemp === '100s') {
      weeklyInches += 0.5;
    }

    // Soil absorption factor & frequency
    let frequencyText = '2x per week';
    let durationMultiplier = 1.0;

    if (selectedSoil === 'sandy') {
      // Drains fast, needs 3 cycles to avoid runoff
      frequencyText = '3x per week (Deep)';
      durationMultiplier = 0.85;
    } else if (selectedSoil === 'clay') {
      // Absorbs slow, needs cycle and soak
      frequencyText = '2x per week (Cycle & Soak)';
      durationMultiplier = 1.15;
    } else {
      frequencyText = '2x per week (Deep Root)';
      durationMultiplier = 1.0;
    }

    // Minutes per session (Standard residential sprinkler delivers approx 0.5 inches in 30 mins)
    const sessionsPerWeek = selectedSoil === 'sandy' ? 3 : 2;
    const inchesPerSession = weeklyInches / sessionsPerWeek;
    const estMinutes = Math.round((inchesPerSession / 0.5) * 30 * durationMultiplier);

    // Gallons per week: 1 inch on 1000 sq ft = 623 gallons
    const totalGallons = Math.round((lawnSize / 1000) * 623 * weeklyInches);

    // Update UI
    if (outInches) outInches.textContent = weeklyInches.toFixed(2) + '"';
    if (outMinutes) outMinutes.textContent = `${estMinutes} mins`;
    if (outFrequency) outFrequency.textContent = frequencyText;
    if (outGallons) outGallons.textContent = Number(totalGallons).toLocaleString() + ' gal';
  }

  // Initial run
  calculateWater();
}

/* --------------------------------------------------------------------------
   4. 3-Month Summer Calendar Tabs
   -------------------------------------------------------------------------- */
function initCalendarTabs() {
  const tabs = document.querySelectorAll('.calendar-tab-btn');
  const panes = document.querySelectorAll('.calendar-tab-pane');
  if (!tabs.length || !panes.length) return;

  tabs.forEach(tab => {
    tab.addEventListener('click', () => {
      const targetMonth = tab.dataset.month;

      tabs.forEach(t => t.classList.remove('active'));
      panes.forEach(p => p.classList.remove('active'));

      tab.classList.add('active');
      const targetPane = document.getElementById(`tab-${targetMonth}`);
      if (targetPane) {
        targetPane.classList.add('active');
      }
    });
  });
}

/* --------------------------------------------------------------------------
   5. Smooth ScrollSpy for Anchor Links
   -------------------------------------------------------------------------- */
function initSmoothScrollSpy() {
  const sections = document.querySelectorAll('section[id]');
  const navLinks = document.querySelectorAll('.nav-links a[href^="#"]');
  if (!sections.length || !navLinks.length) return;

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const currentId = entry.target.getAttribute('id');
          navLinks.forEach(link => {
            if (link.getAttribute('href') === `#${currentId}`) {
              link.classList.add('active');
            } else {
              link.classList.remove('active');
            }
          });
        }
      });
    },
    { rootMargin: '-20% 0px -70% 0px', threshold: 0.1 }
  );

  sections.forEach(section => observer.observe(section));
}

/* --------------------------------------------------------------------------
   6. Contact Page Form Handler (Client-side validation & Feedback)
   -------------------------------------------------------------------------- */
function initContactFormHandler() {
  const contactForm = document.getElementById('summerContactForm');
  const feedbackBox = document.getElementById('formFeedbackAlert');
  if (!contactForm) return;

  contactForm.addEventListener('submit', (e) => {
    // If it's pure HTML client without backend PHP execution
    if (contactForm.getAttribute('action') === '#' || !contactForm.getAttribute('action')) {
      e.preventDefault();

      const name = contactForm.querySelector('#senderName')?.value.trim();
      const email = contactForm.querySelector('#senderEmail')?.value.trim();
      const message = contactForm.querySelector('#senderMessage')?.value.trim();

      if (!name || !email || !message) {
        showFeedback('Please fill out all required fields (Name, Email, and Message).', 'error');
        return;
      }

      const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      if (!emailRegex.test(email)) {
        showFeedback('Please enter a valid email address.', 'error');
        return;
      }

      // Simulate successful dispatch
      const submitBtn = contactForm.querySelector('button[type="submit"]');
      if (submitBtn) {
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Sending Consultation Request...';
      }

      setTimeout(() => {
        showFeedback(`Thank you, ${name}! Your summer turf consultation request has been received. Our agronomist team will respond within 24 hours.`, 'success');
        contactForm.reset();
        if (submitBtn) {
          submitBtn.disabled = false;
          submitBtn.innerHTML = 'Send Summer Turf Inquiry';
        }
      }, 700);
    }
  });

  function showFeedback(msg, type) {
    if (!feedbackBox) return;
    feedbackBox.textContent = msg;
    feedbackBox.className = `form-alert-feedback ${type}`;
    feedbackBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
  }
}
