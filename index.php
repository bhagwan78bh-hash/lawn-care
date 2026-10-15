<?php
/**
 * SummerLawnCare - Single Page Summer Lawn Care Tips Hub
 * Brand: summerlawncare
 */
require_once __DIR__ . '/includes/config.php';

$pageTitle = 'Summer Lawn Care Tips & Turf Heat Defense | ' . SITE_NAME;
$pageDescription = 'Discover science-backed summer lawn care tips with SummerLawnCare. Master mowing heights, deep early morning watering, weed prevention, and heat dormancy revival.';
$currentPage = 'index';

require_once __DIR__ . '/includes/header.php';
?>

  <main id="main-content">
    <!-- Hero Section with Visual Backdrop -->
    <section class="hero-section" id="hero">
      <div class="hero-bg-overlay"></div>
      <img src="images/hero-summer-lawn.jpg" alt="Pristine green summer lawn with lush turf stripes in morning sunlight" class="hero-bg-img" width="1280" height="720">

      <div class="container hero-content">
        <div class="hero-pill">
          <span class="hero-pill-dot"></span>
          <span>Summer Turf Resilience Protocol <?= e(CURRENT_YEAR) ?></span>
        </div>

        <h1 class="hero-title">
          Keep Your Lawn <span class="hero-title-highlight">Lush, Green &amp; Resilient</span> All Summer
        </h1>

        <p class="hero-lead">
          Protect your turf from brutal heatwaves, dry dormancy, and scorching summer sun. Follow our agronomist-proven guidelines for precision mowing, deep irrigation, and root protection.
        </p>

        <!-- Homepage Call-to-Actions (Strictly Anchor Links - No Forms!) -->
        <div class="hero-actions">
          <a href="#core-tips" class="btn-primary">
            <span>Explore Summer Guide</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="contact.php" class="btn-secondary">
            <span>Contact Turf Team</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path>
            </svg>
          </a>
        </div>

        <!-- Quick Stat Pills Under Hero -->
        <div class="hero-stats-grid">
          <div class="stat-item">
            <span class="stat-value">1.0 – 1.5"</span>
            <span class="stat-label">Water Needed / Week</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">3.5 – 4.0"</span>
            <span class="stat-label">Optimal Summer Cut Height</span>
          </div>
          <div class="stat-item">
            <span class="stat-value">5 AM – 9 AM</span>
            <span class="stat-label">Best Watering Window</span>
          </div>
        </div>
      </div>
    </section>

    <!-- Summer Heat Alert Banner -->
    <aside class="heat-alert-bar" aria-label="Summer lawn care alert">
      <div class="container alert-wrapper">
        <div class="alert-content">
          <svg class="alert-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
            <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z"></path>
            <line x1="12" y1="9" x2="12" y2="13"></line>
            <line x1="12" y1="17" x2="12.01" y2="17"></line>
          </svg>
          <span><strong>Summer Alert:</strong> When ambient temperatures exceed 90°F, never apply high-nitrogen synthetic fertilizers or selective broadleaf herbicides.</span>
        </div>
        <a href="contact.php" class="alert-link">Ask an Agronomist &rarr;</a>
      </div>
    </aside>

    <!-- The 6 Summer Care Pillars -->
    <section class="section-padding" id="core-tips">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Agronomic Foundation</span>
          <h2 class="section-title">The 6 Pillars of Summer Lawn Care</h2>
          <p class="section-desc">Summer brings intense UV radiation, high soil evaporation, and peak pest pressure. These core practices keep your turf healthy and green throughout the hottest months.</p>
        </div>

        <div class="pillars-grid">
          <!-- Pillar 1 -->
          <article class="pillar-card">
            <span class="pillar-number">01</span>
            <div class="pillar-icon-box">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="6" cy="6" r="3"></circle>
                <circle cx="6" cy="18" r="3"></circle>
                <line x1="20" y1="4" x2="8.12" y2="15.88"></line>
                <line x1="14.47" y1="14.48" x2="20" y2="20"></line>
                <line x1="8.12" y1="8.12" x2="12" y2="12"></line>
              </svg>
            </div>
            <h3 class="pillar-title">Raise Your Mowing Height</h3>
            <p class="pillar-text">Never scalp grass in summer. Taller grass blades cast shade over the soil crown, reducing evaporation by 40% and preventing weed seed germination.</p>
            <div>
              <span class="pillar-rule-pill">Summer Rule: Cut at 3.5" – 4.0"</span>
            </div>
          </article>

          <!-- Pillar 2 -->
          <article class="pillar-card">
            <span class="pillar-number">02</span>
            <div class="pillar-icon-box">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 2.69l5.66 5.66a8 8 0 1 1-11.31 0z"></path>
              </svg>
            </div>
            <h3 class="pillar-title">Water Deeply &amp; Infrequently</h3>
            <p class="pillar-text">Shallow daily sprinklings create weak, surface-level roots that fry in afternoon heat. Water 2 to 3 times weekly, delivering 0.5" per session to drive root depth.</p>
            <div>
              <span class="pillar-rule-pill">Soak 6"–8" Into The Soil</span>
            </div>
          </article>

          <!-- Pillar 3 -->
          <article class="pillar-card">
            <span class="pillar-number">03</span>
            <div class="pillar-icon-box">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="12" cy="12" r="5"></circle>
                <line x1="12" y1="1" x2="12" y2="3"></line>
                <line x1="12" y1="21" x2="12" y2="23"></line>
                <line x1="4.22" y1="4.22" x2="5.64" y2="5.64"></line>
                <line x1="18.36" y1="18.36" x2="19.78" y2="19.78"></line>
                <line x1="1" y1="12" x2="3" y2="12"></line>
                <line x1="21" y1="12" x2="23" y2="12"></line>
                <line x1="4.22" y1="19.78" x2="5.64" y2="18.36"></line>
                <line x1="18.36" y1="5.64" x2="19.78" y2="4.22"></line>
              </svg>
            </div>
            <h3 class="pillar-title">Water in Early Morning</h3>
            <p class="pillar-text">Irrigate between 5:00 AM and 9:00 AM. Midday watering loses up to 45% to evaporation, while late evening watering leaves foliage wet, inviting fungal blight.</p>
            <div>
              <span class="pillar-rule-pill">Prime Window: 5 AM – 9 AM</span>
            </div>
          </article>

          <!-- Pillar 4 -->
          <article class="pillar-card">
            <span class="pillar-number">04</span>
            <div class="pillar-icon-box">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path>
                <polyline points="14 2 14 8 20 8"></polyline>
                <line x1="16" y1="13" x2="8" y2="13"></line>
                <line x1="16" y1="17" x2="8" y2="17"></line>
                <polyline points="10 9 9 9 8 9"></polyline>
              </svg>
            </div>
            <h3 class="pillar-title">Sharpen Mower Blades</h3>
            <p class="pillar-text">Dull mower blades tear grass blades rather than slicing them cleanly. Frayed grass tips turn brown within 24 hours and multiply water loss by 30%.</p>
            <div>
              <span class="pillar-rule-pill">Sharpen Every 20–25 Mows</span>
            </div>
          </article>

          <!-- Pillar 5 -->
          <article class="pillar-card">
            <span class="pillar-number">05</span>
            <div class="pillar-icon-box">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path>
              </svg>
            </div>
            <h3 class="pillar-title">Summer Pest &amp; Grub Shield</h3>
            <p class="pillar-text">June and July are critical windows for preventative grub treatments before beetles lay eggs. Watch for surface feeders like chinch bugs and armyworms in sunny patches.</p>
            <div>
              <span class="pillar-rule-pill">Preventative Window: June–July</span>
            </div>
          </article>

          <!-- Pillar 6 -->
          <article class="pillar-card">
            <span class="pillar-number">06</span>
            <div class="pillar-icon-box">
              <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M20.24 12.24a6 6 0 0 0-8.49-8.49L5 10.5V19h8.5z"></path>
                <line x1="16" y1="8" x2="2" y2="22"></line>
                <line x1="17.5" y1="15" x2="9" y2="15"></line>
              </svg>
            </div>
            <h3 class="pillar-title">Dormancy vs. Dead Grass</h3>
            <p class="pillar-text">Cool-season grasses naturally enter dormancy when soil heats above 85°F. Perform the Tug Test: if roots resist pulling, grass is alive and resting, not dead.</p>
            <div>
              <span class="pillar-rule-pill">Tug Test: Firm Roots = Alive</span>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- Feature Deep Dive 1: Deep Irrigation & Tuna Can Test -->
    <section class="section-padding" style="background-color: var(--bg-surface-alt);">
      <div class="container">
        <div class="feature-split">
          <div class="feature-content">
            <span class="badge-tag">Hydration Science</span>
            <h2 class="section-title">The Tuna Can Irrigation Audit</h2>
            <p class="section-desc">
              How do you know if your sprinkler system is actually delivering the required 1 to 1.5 inches of water each week? The tuna can test is the gold standard used by master turf managers.
            </p>

            <div class="feature-checklist">
              <div class="checklist-item">
                <div class="check-icon">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="checklist-text">
                  <h4>Place 4–5 Shallow Cans Across The Yard</h4>
                  <p>Distribute empty tuna or cat food cans at equal intervals throughout your sprinkler zone.</p>
                </div>
              </div>

              <div class="checklist-item">
                <div class="check-icon">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="checklist-text">
                  <h4>Run Your Sprinklers for 20 Minutes</h4>
                  <p>Record your start and stop time with standard water pressure under normal wind conditions.</p>
                </div>
              </div>

              <div class="checklist-item">
                <div class="check-icon">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="checklist-text">
                  <h4>Measure Depth with a Wooden Ruler</h4>
                  <p>If you collect 0.5 inches in 20 minutes, two 20-minute sessions per week deliver your exact 1-inch target.</p>
                </div>
              </div>
            </div>

            <p style="font-size: 0.95rem; color: var(--text-secondary); margin-bottom: 1.5rem;">
              Need help fine-tuning irrigation controllers or diagnosing dry spots? Reach out to our specialist team.
            </p>
            <a href="contact.php" class="nav-cta-btn" style="display: inline-flex;">Schedule Irrigation Consultation &rarr;</a>
          </div>

          <div class="feature-media">
            <img src="images/summer-irrigation.jpg" alt="Oscillating garden sprinkler watering emerald summer lawn during morning golden hour" class="feature-img" width="600" height="420" loading="lazy">
            <div class="feature-media-overlay">
              <div class="feature-media-badge">Morning Hydration</div>
              <div class="feature-media-caption">Deep root soaking minimizes evaporation and halts fungal leaf spot.</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Feature Deep Dive 2: Summer Mowing Deck & The 1/3 Rule -->
    <section class="section-padding">
      <div class="container">
        <div class="feature-split reverse-mobile">
          <div class="feature-media">
            <img src="images/summer-mowing-deck.jpg" alt="Modern lawn mower cutting healthy tall summer grass with sharp blade" class="feature-img" width="600" height="420" loading="lazy">
            <div class="feature-media-overlay">
              <div class="feature-media-badge">Deck Elevation</div>
              <div class="feature-media-caption">Taller summer grass shades delicate roots and locks in moisture.</div>
            </div>
          </div>

          <div class="feature-content">
            <span class="badge-tag badge-amber">Mowing Mastery</span>
            <h2 class="section-title">The One-Third Summer Mowing Rule</h2>
            <p class="section-desc">
              During summer heat, cutting off too much leaf surface triggers severe shock. The "One-Third Rule" dictates that you should never remove more than 1/3 of the total grass blade length in a single cut.
            </p>

            <div class="feature-checklist">
              <div class="checklist-item">
                <div class="check-icon">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="checklist-text">
                  <h4>Adjust Deck Upward by 0.5 to 1.0 Inch</h4>
                  <p>If your spring mowing height was 2.5 inches, raise the deck setting to 3.5 inches throughout July and August.</p>
                </div>
              </div>

              <div class="checklist-item">
                <div class="check-icon">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="checklist-text">
                  <h4>Leave Clippings as Natural Soil Mulch</h4>
                  <p>Grass clippings are 85% water and return valuable nitrogen back to soil without contributing to thatch.</p>
                </div>
              </div>

              <div class="checklist-item">
                <div class="check-icon">
                  <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3">
                    <polyline points="20 6 9 17 4 12"></polyline>
                  </svg>
                </div>
                <div class="checklist-text">
                  <h4>Never Mow During The Midday Heat Peak</h4>
                  <p>Mow in the cooler evening hours (after 6:00 PM) to allow sliced blades to heal overnight without scorching.</p>
                </div>
              </div>
            </div>

            <a href="contact.php" class="nav-cta-btn" style="display: inline-flex;">Consult Our Mowing Experts &rarr;</a>
          </div>
        </div>
      </div>
    </section>

    <!-- Interactive Summer Lawn Watering Calculator (Form-free client UI) -->
    <section class="section-padding" id="watering-guide" style="background-color: var(--bg-surface-alt);">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Interactive Tool</span>
          <h2 class="section-title">Summer Lawn Watering Calculator</h2>
          <p class="section-desc">Calculate your lawn's exact water demands based on grass variety, current temperature range, and yard dimensions. 100% interactive estimation.</p>
        </div>

        <div class="calculator-card" id="summerWaterCalculator">
          <div class="calc-bg-glow"></div>
          <div class="calc-grid">
            <!-- Controls (Form-Free with Buttons and Range Sliders) -->
            <div class="calc-controls">
              <!-- Grass Variety Selection -->
              <div class="calc-control-group">
                <span class="calc-label">1. Select Grass Category</span>
                <div class="chip-group">
                  <button type="button" class="calc-chip active" data-grass-chip="warm">Warm-Season (Bermuda / Zoysia / St. Augustine)</button>
                  <button type="button" class="calc-chip" data-grass-chip="cool">Cool-Season (Fescue / Kentucky Bluegrass / Rye)</button>
                </div>
              </div>

              <!-- Temperature Range Selection -->
              <div class="calc-control-group">
                <span class="calc-label">2. Current Summer Temperature</span>
                <div class="chip-group">
                  <button type="button" class="calc-chip" data-temp-chip="80s">Moderate (80°F – 89°F)</button>
                  <button type="button" class="calc-chip active" data-temp-chip="90s">High Heat (90°F – 99°F)</button>
                  <button type="button" class="calc-chip" data-temp-chip="100s">Heatwave (100°F+)</button>
                </div>
              </div>

              <!-- Soil Texture Selection -->
              <div class="calc-control-group">
                <span class="calc-label">3. Soil Texture</span>
                <div class="chip-group">
                  <button type="button" class="calc-chip" data-soil-chip="sandy">Sandy (Fast Draining)</button>
                  <button type="button" class="calc-chip active" data-soil-chip="loam">Loam (Balanced)</button>
                  <button type="button" class="calc-chip" data-soil-chip="clay">Clay (Heavy / Dense)</button>
                </div>
              </div>

              <!-- Lawn Area Slider -->
              <div class="calc-control-group">
                <div class="range-slider-wrapper">
                  <div class="range-header">
                    <span class="calc-label" style="margin-bottom: 0;">4. Estimated Yard Size</span>
                    <span class="range-val-badge" id="calcLawnSizeVal">5,000 sq ft</span>
                  </div>
                  <input type="range" class="calc-range-slider" id="calcLawnSize" min="1000" max="20000" step="500" value="5000" aria-label="Lawn Size in Square Feet">
                </div>
              </div>
            </div>

            <!-- Live Calculated Results -->
            <div class="calc-result-box">
              <div class="calc-result-tag">Recommended Weekly Irrigation</div>
              <div class="calc-output-big" id="calcOutInches">1.25"</div>
              <div class="calc-output-unit">Total Inches Needed This Week</div>

              <div class="calc-metric-row">
                <div class="calc-sub-metric">
                  <strong id="calcOutMinutes">38 mins</strong>
                  <span>Per Sprinkler Zone</span>
                </div>
                <div class="calc-sub-metric">
                  <strong id="calcOutFrequency">2x per week</strong>
                  <span>Optimal Schedule</span>
                </div>
              </div>

              <div class="calc-metric-row" style="margin-top: 1rem;">
                <div class="calc-sub-metric">
                  <strong id="calcOutGallons">3,894 gal</strong>
                  <span>Weekly Total Volume</span>
                </div>
                <div class="calc-sub-metric">
                  <strong>5:00 – 8:30 AM</strong>
                  <span>Optimal Window</span>
                </div>
              </div>

              <p class="calc-note">
                Tip: Cycle-and-soak in two 15-minute intervals to eliminate water runoff on compacted soil.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Warm-Season vs. Cool-Season Summer Turf Matrix -->
    <section class="section-padding" id="turf-varieties">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Turf Biology</span>
          <h2 class="section-title">Warm-Season vs. Cool-Season Summer Care</h2>
          <p class="section-desc">Different turf species behave completely differently in summer heat. Match your maintenance routine to your lawn's specific physiology.</p>
        </div>

        <div class="turf-matrix-grid">
          <!-- Warm Season Card -->
          <article class="turf-card">
            <div class="turf-card-header warm-turf">
              <span class="turf-badge">Peak Growth Season</span>
              <h3 class="turf-title">Warm-Season Grasses</h3>
              <p class="turf-grasses">Bermuda, Zoysia, St. Augustine, Centipede, Bahiagrass</p>
            </div>
            <div class="turf-card-body">
              <p style="font-size: 0.95rem; color: var(--text-secondary); margin-bottom: 1.5rem;">
                Warm-season grasses thrive in temperatures between 80°F and 95°F. Summer is their primary vegetative growth period requiring consistent feeding and regular mowing.
              </p>
              <table class="turf-spec-table">
                <tbody>
                  <tr>
                    <th>Summer Mowing</th>
                    <td>Bermuda: 1.5–2.5" | Zoysia: 2.0–2.5" | St. Augustine: 3.5–4.0"</td>
                  </tr>
                  <tr>
                    <th>Summer Feeding</th>
                    <td>Active feeding window; apply slow-release nitrogen with potassium.</td>
                  </tr>
                  <tr>
                    <th>Water Requirement</th>
                    <td>1.0" to 1.25" per week; highly drought-resilient root structures.</td>
                  </tr>
                  <tr>
                    <th>Aeration Timing</th>
                    <td>Ideal time is early summer (June) when roots recover rapidly.</td>
                  </tr>
                  <tr>
                    <th>Top Summer Threat</th>
                    <td>Chinch bugs in sunny drought pockets, large patch disease in heavy humidity.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </article>

          <!-- Cool Season Card -->
          <article class="turf-card">
            <div class="turf-card-header cool-turf">
              <span class="turf-badge">Stress &amp; Survival Mode</span>
              <h3 class="turf-title">Cool-Season Grasses</h3>
              <p class="turf-grasses">Kentucky Bluegrass, Tall Fescue, Perennial Ryegrass</p>
            </div>
            <div class="turf-card-body">
              <p style="font-size: 0.95rem; color: var(--text-secondary); margin-bottom: 1.5rem;">
                Cool-season grasses prefer temperatures between 60°F and 75°F. In summer, they slow their growth and enter protective semi-dormancy to conserve cellular water.
              </p>
              <table class="turf-spec-table">
                <tbody>
                  <tr>
                    <th>Summer Mowing</th>
                    <td>Tall Fescue: 3.5–4.5" | Bluegrass: 3.0–3.5" | Never cut short.</td>
                  </tr>
                  <tr>
                    <th>Summer Feeding</th>
                    <td>Zero heavy nitrogen; nitrogen causes tissue burn and disease outbreak.</td>
                  </tr>
                  <tr>
                    <th>Water Requirement</th>
                    <td>1.25" to 1.75" per week or 0.5" every 2 weeks if allowed to stay dormant.</td>
                  </tr>
                  <tr>
                    <th>Aeration Timing</th>
                    <td>Avoid summer aeration; wait for early autumn (September).</td>
                  </tr>
                  <tr>
                    <th>Top Summer Threat</th>
                    <td>Brown Patch fungus, Pythium blight, summer crabgrass invasion.</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </article>
        </div>
      </div>
    </section>

    <!-- 3-Month Summer Calendar (June, July, August) -->
    <section class="section-padding" id="summer-calendar" style="background-color: var(--bg-surface-alt);">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag badge-amber">Seasonal Roadmap</span>
          <h2 class="section-title">The 3-Month Summer Lawn Roadmap</h2>
          <p class="section-desc">A month-by-month actionable blueprint to safeguard your lawn from summer inception through the peak dog days and late-summer recovery.</p>
        </div>

        <div class="calendar-wrapper">
          <div class="calendar-tabs" role="tablist">
            <button class="calendar-tab-btn active" role="tab" data-month="june" aria-selected="true">
              <span>June</span>
              <span class="tab-sub">Early Summer Prep</span>
            </button>
            <button class="calendar-tab-btn" role="tab" data-month="july" aria-selected="false">
              <span>July</span>
              <span class="tab-sub">Peak Heat Defense</span>
            </button>
            <button class="calendar-tab-btn" role="tab" data-month="august" aria-selected="false">
              <span>August</span>
              <span class="tab-sub">Late Summer Recovery</span>
            </button>
          </div>

          <!-- June Pane -->
          <div class="calendar-tab-pane active" id="tab-june" role="tabpanel">
            <div class="calendar-step-grid">
              <div class="cal-step">
                <div class="cal-step-phase">Step 1 &bull; Mower Prep</div>
                <h3 class="cal-step-title">Sharpen Blades &amp; Raise Deck</h3>
                <p class="cal-step-desc">Inspect mower blades for nicks and balance. Raise the cutting height by 0.5 to 1.0 inch before hot temperatures settle in permanently.</p>
              </div>
              <div class="cal-step">
                <div class="cal-step-phase">Step 2 &bull; Irrigation Audit</div>
                <h3 class="cal-step-title">Sprinkler System Calibration</h3>
                <p class="cal-step-desc">Run each sprinkler zone to check for clogged nozzles, misaligned heads, and low water pressure. Conduct the tuna can test to calculate runtime.</p>
              </div>
              <div class="cal-step">
                <div class="cal-step-phase">Step 3 &bull; Pest Prevention</div>
                <h3 class="cal-step-title">Grub Preventative Application</h3>
                <p class="cal-step-desc">Apply preventative chlorantraniliprole or imidacloprid to neutralize newly hatched beetle grubs before they sever root systems in August.</p>
              </div>
            </div>
          </div>

          <!-- July Pane -->
          <div class="calendar-tab-pane" id="tab-july" role="tabpanel">
            <div class="calendar-step-grid">
              <div class="cal-step">
                <div class="cal-step-phase">Step 1 &bull; Heat Mitigation</div>
                <h3 class="cal-step-title">Morning Deep Hydration</h3>
                <p class="cal-step-desc">Water strictly between 5 AM and 9 AM. Avoid any foot or vehicular traffic on heat-stressed lawns during afternoon 90°F+ temperature spikes.</p>
              </div>
              <div class="cal-step">
                <div class="cal-step-phase">Step 2 &bull; Fungus Surveillance</div>
                <h3 class="cal-step-title">Scout for Summer Patch &amp; Blight</h3>
                <p class="cal-step-desc">High nighttime humidity creates breeding grounds for Brown Patch. Check for smoke rings on grass edges and reduce evening watering immediately.</p>
              </div>
              <div class="cal-step">
                <div class="cal-step-phase">Step 3 &bull; No Chemical Burn</div>
                <h3 class="cal-step-title">Pause Broadleaf Herbicides</h3>
                <p class="cal-step-desc">Chemical herbicides volatilize into toxic gas above 85°F and cause severe turf scorch. Pull stubborn weeds by hand until temperatures drop.</p>
              </div>
            </div>
          </div>

          <!-- August Pane -->
          <div class="calendar-tab-pane" id="tab-august" role="tabpanel">
            <div class="calendar-step-grid">
              <div class="cal-step">
                <div class="cal-step-phase">Step 1 &bull; Soil Assessment</div>
                <h3 class="cal-step-title">Conduct Summer Soil Test</h3>
                <p class="cal-step-desc">Collect 10 to 12 soil core samples 4 inches deep to test pH, calcium, and phosphorus levels ahead of the autumn renovation season.</p>
              </div>
              <div class="cal-step">
                <div class="cal-step-phase">Step 2 &bull; Grub Damage Check</div>
                <h3 class="cal-step-title">Peel Back Loose Brown Patches</h3>
                <p class="cal-step-desc">If brown patches roll up easily like a loose carpet with roots chewed away, grubs are active. Apply curative grub control and water deeply.</p>
              </div>
              <div class="cal-step">
                <div class="cal-step-phase">Step 3 &bull; Autumn Transition</div>
                <h3 class="cal-step-title">Plan Fall Overseeding</h3>
                <p class="cal-step-desc">Select certified high-germination seed blends for cool-season lawns. Schedule core aeration for September to relieve summer foot compaction.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Summer Mistakes vs. Pro Solutions Checklist -->
    <section class="section-padding" id="dos-donts">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Field Proven</span>
          <h2 class="section-title">Summer Lawn Care: Dos and Don'ts</h2>
          <p class="section-desc">Avoid the five most catastrophic summer turf blunders that turn lush green grass into brittle yellow straw.</p>
        </div>

        <div class="comparison-grid">
          <!-- DON'TS -->
          <div class="comparison-col dont-col">
            <div class="comparison-header">
              <div class="comparison-header-icon">&times;</div>
              <h3 class="comparison-header-title">Common Summer Mistakes</h3>
            </div>
            <div class="comp-list">
              <div class="comp-item">
                <span class="comp-symbol">&times;</span>
                <div class="comp-body">
                  <strong>Scalping The Grass</strong>
                  <p>Cutting grass too short in hot weather strips shade from the soil and leaves crowns exposed to solar burning.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&times;</span>
                <div class="comp-body">
                  <strong>Sprinkling Shallowly Every Day</strong>
                  <p>Daily 5-minute sprinklings evaporate before penetrating deep soil, training roots to stay weak and shallow.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&times;</span>
                <div class="comp-body">
                  <strong>Applying High-Nitrogen Fertilizer</strong>
                  <p>Feeding fast-release nitrogen during 90°F heat forces tender leaf growth that quickly burns and desiccates.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&times;</span>
                <div class="comp-body">
                  <strong>Spraying Weeds in 85°F+ Heat</strong>
                  <p>Selective herbicides will burn your surrounding turfgrass into yellow patches when applied on hot afternoons.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&times;</span>
                <div class="comp-body">
                  <strong>Watering at Dusk or Night</strong>
                  <p>Leaving lawn foliage wet overnight in warm summer temperatures invites devastating fungal outbreaks like Brown Patch.</p>
                </div>
              </div>
            </div>
          </div>

          <!-- DOS -->
          <div class="comparison-col do-col">
            <div class="comparison-header">
              <div class="comparison-header-icon">&check;</div>
              <h3 class="comparison-header-title">Agronomist Best Practices</h3>
            </div>
            <div class="comp-list">
              <div class="comp-item">
                <span class="comp-symbol">&check;</span>
                <div class="comp-body">
                  <strong>Maintain 3.5" to 4.0" Blade Height</strong>
                  <p>Longer grass blades produce deep, resilient root structures and suppress weed seedlings naturally.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&check;</span>
                <div class="comp-body">
                  <strong>Deep &amp; Infrequent 1.0–1.5" Irrigation</strong>
                  <p>Water 2 to 3 times weekly in the early morning to push moisture 6 to 8 inches into the root zone.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&check;</span>
                <div class="comp-body">
                  <strong>Apply Potassium &amp; Micronutrients</strong>
                  <p>Strengthen cell wall integrity with potassium and chelated iron for deep color without surge growth.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&check;</span>
                <div class="comp-body">
                  <strong>Spot Hand-Weed During Heat Spikes</strong>
                  <p>Pull mature crabgrass and dandelions by hand after watering, reserving chemical spot sprays for cool autumn days.</p>
                </div>
              </div>
              <div class="comp-item">
                <span class="comp-symbol">&check;</span>
                <div class="comp-body">
                  <strong>Mulch Your Clippings</strong>
                  <p>Recycle nutrient-rich organic matter and conserve precious soil moisture with a dedicated mulching blade.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Summer Lawn Care FAQ Accordion (Using Accessible Native <details name="summer-faq">) -->
    <section class="section-padding" id="summer-faq" style="background-color: var(--bg-surface);">
      <div class="container">
        <div class="section-header">
          <span class="badge-tag">Got Questions?</span>
          <h2 class="section-title">Frequently Asked Summer Lawn Questions</h2>
          <p class="section-desc">Quick, authoritative answers to the most common challenges homeowners face during summer turf maintenance.</p>
        </div>

        <div class="faq-accordion-group">
          <!-- FAQ 1 -->
          <details class="faq-disclosure" name="summer-faq" open>
            <summary class="faq-summary">
              <span>How often should I water my lawn during a summer heatwave?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </summary>
            <div class="faq-body">
              During heatwaves with temperatures above 90°F, water 2 to 3 times per week, delivering a combined total of 1.25 to 1.5 inches of water. Avoid shallow daily waterings which fail to reach lower roots and encourage weed seeds. Always water between 5:00 AM and 9:00 AM to minimize evaporation losses.
            </div>
          </details>

          <!-- FAQ 2 -->
          <details class="faq-disclosure" name="summer-faq">
            <summary class="faq-summary">
              <span>Is my lawn dead or just dormant from the summer heat?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </summary>
            <div class="faq-body">
              Perform the simple "Tug Test": grasp a handful of brown grass blades and pull upward gently. If the grass resists firmly, the root system is alive and the turf is merely in protective heat dormancy. If it pulls easily out of the soil with no resistance and brittle roots, the grass is dead or has had its roots severed by white grubs.
            </div>
          </details>

          <!-- FAQ 3 -->
          <details class="faq-disclosure" name="summer-faq">
            <summary class="faq-summary">
              <span>Should I fertilize my lawn in July and August?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </summary>
            <div class="faq-body">
              For cool-season grasses (Tall Fescue, Kentucky Bluegrass), do NOT apply nitrogen in mid-summer; doing so burns heat-stressed crowns and accelerates fungal rot. For warm-season grasses (Bermuda, Zoysia, St. Augustine), summer is peak vegetative growth, so light, slow-release fertilizers or liquid iron can be applied safely if irrigated properly.
            </div>
          </details>

          <!-- FAQ 4 -->
          <details class="faq-disclosure" name="summer-faq">
            <summary class="faq-summary">
              <span>Why are circular brown patches appearing on my lawn during summer?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </summary>
            <div class="faq-body">
              Circular brown patches in summer are typically caused by either fungal pathogens (like Rhizoctonia solani / Brown Patch), subterranean white grubs chewing roots, or pet urine burns. If the patches exhibit dark smoke-colored outer margins in early morning dew, fungus is likely. If the grass lifts up like a carpet, grubs are the culprit.
            </div>
          </details>

          <!-- FAQ 5 -->
          <details class="faq-disclosure" name="summer-faq">
            <summary class="faq-summary">
              <span>Can I spray broadleaf weed killer when temperatures are over 90°F?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </summary>
            <div class="faq-body">
              No. Post-emergent liquid herbicides (especially 2,4-D and dicamba) become volatile when ambient temperatures exceed 85°F to 90°F. The chemical can evaporate into surrounding vapor, drifting onto ornamental plants and causing severe phytotoxic yellow scorching on your desired turfgrass. Wait for a cooler day or hand-pull summer weeds.
            </div>
          </details>

          <!-- FAQ 6 -->
          <details class="faq-disclosure" name="summer-faq">
            <summary class="faq-summary">
              <span>Should I bag my clippings or mulch them in summer?</span>
              <svg class="faq-chevron" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="6 9 12 15 18 9"></polyline>
              </svg>
            </summary>
            <div class="faq-body">
              Mulch them! As long as you follow the 1/3 mowing rule, mulched clippings consist of nearly 85% water and decompose within days, acting as a natural micro-mulch that shades the soil surface, prevents moisture evaporation, and supplies up to 25% of your lawn's seasonal nitrogen requirement naturally.
            </div>
          </details>
        </div>
      </div>
    </section>

    <!-- Bottom Call-To-Action Banner (NO FORMS - Direct Link to Separate Contact Page!) -->
    <section class="cta-banner-section" aria-label="Consultation call to action">
      <div class="container cta-banner-card">
        <span class="badge-tag" style="background: rgba(255,255,255,0.15); color: #fef08a; border-color: rgba(255,255,255,0.3);">Turf Diagnostics</span>
        <h2 class="section-title">Need Personalized Advice For Your Summer Lawn?</h2>
        <p class="section-desc">
          Struggling with stubborn brown patches, mysterious pest damage, or irrigation dilemmas? Our certified turfgrass specialists are ready to help analyze your yard and craft a custom summer defense plan.
        </p>
        <div class="cta-button-group">
          <a href="contact.php" class="btn-primary">
            <span>Go to Contact Us Page</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12"></line>
              <polyline points="12 5 19 12 12 19"></polyline>
            </svg>
          </a>
          <a href="#core-tips" class="btn-secondary">
            <span>Back to Top Tips</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="12" y1="19" x2="12" y2="5"></line>
              <polyline points="5 12 12 5 19 12"></polyline>
            </svg>
          </a>
        </div>
      </div>
    </section>
  </main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>
