<?php /* Our Team page — drop into Oxygen code block. Header/footer provided by template. */ ?>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "In The Event",
  "url": "https://intheevent.com",
  "logo": "https://intheevent.com/wp-content/uploads/2024/05/ite_nav_logo-300x40.png",
  "description": "Full-service event production, design, and rentals based in Salt Lake City, Utah. Serving clients across Utah and nationwide.",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "Salt Lake City",
    "addressRegion": "UT",
    "addressCountry": "US"
  },
  "sameAs": [
    "https://www.facebook.com/intheeventutah",
    "https://www.instagram.com/intheeventutah",
    "https://www.linkedin.com/company/in-the-event"
  ],
  "employee": [
    { "@type": "Person", "name": "Robert LaSpina", "jobTitle": "Owner", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Tyson LaSpina", "jobTitle": "Vice President of Operations", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Dawn Lynch", "jobTitle": "Director of Warehouse Operations", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Jennifer Hollm", "jobTitle": "Director of Sales", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Carra Hood", "jobTitle": "Vice President of Sales", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Kennedy Gray", "jobTitle": "Senior Account Executive", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Karsen Stimola", "jobTitle": "Account Executive", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Kara Hansen", "jobTitle": "Event Rental Specialist", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Jonathan Nguyen", "jobTitle": "Creative Director & Marketing Manager", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Gabriela Parra", "jobTitle": "Junior Graphic Designer", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Evan Cordova", "jobTitle": "Junior Graphic Designer", "worksFor": { "@type": "Organization", "name": "In The Event" } },
    { "@type": "Person", "name": "Anthony Eversole", "jobTitle": "Junior Graphic Designer", "worksFor": { "@type": "Organization", "name": "In The Event" } }
  ]
}
</script>

<style>
  :root {
    --green:        #C3FF8A;
    --dark:         #080809;
    --navy:         #1c1f2e;
    --white:        #ffffff;
    --grey:         #8a8d99;
    --card-bg:      #111116;
    --green-faint:  rgba(195,255,138,0.15);
    --green-mid:    rgba(195,255,138,0.35);
    --green-strong: rgba(195,255,138,0.5);
    --max-w:        1200px;
  }

  /* ── SCROLL PROGRESS ── */
  #ite-scroll-progress {
    position: fixed; top: 0; left: 0;
    height: 2px; width: 0%;
    background: var(--green);
    z-index: 9999;
    transition: width 0.1s linear;
  }

  /* ── CONTAINER ── */
  .ite-container { max-width: var(--max-w); margin: 0 auto; padding: 0 40px; }
  @media (max-width: 640px) { .ite-container { padding: 0 20px; } }

  /* ── REVEAL ── */
  .js-reveal-ready .reveal {
    opacity: 0;
    transform: translateY(56px);
    transition: opacity 0.75s cubic-bezier(0.16, 1, 0.3, 1), transform 0.75s cubic-bezier(0.16, 1, 0.3, 1);
  }
  .js-reveal-ready .reveal.in-view { opacity: 1 !important; transform: none !important; }

  /* ── SECTIONS ── */
  .ite-section { padding: 80px 0; }
  .ite-section-dark { background: var(--dark); }

  /* ── BUTTONS ── */
  .ite-btn {
    display: inline-block;
    background: var(--green); color: var(--dark) !important;
    border: 2px solid var(--green); border-radius: 10px;
    padding: 12px 28px;
    font-size: 13px; font-weight: 500;
    letter-spacing: 0.14em; text-transform: uppercase;
    cursor: pointer; transition: background 0.2s, color 0.2s;
    text-decoration: none;
  }
  .ite-btn:hover { background: transparent !important; color: var(--green) !important; }
  .ite-btn.btn-outline { background: transparent; color: var(--green) !important; }
  .ite-btn.btn-outline:hover { background: var(--green) !important; color: var(--dark) !important; }

  /* ── EYEBROW ── */
  .ite-eyebrow {
    display: inline-block;
    font-size: 13px; font-weight: 500;
    letter-spacing: 0.32em; text-transform: uppercase;
    color: var(--green); margin-bottom: 18px;
  }

  /* ════════════════════════════════════════
     HERO
  ════════════════════════════════════════ */
  .ite-hero {
    position: relative;
    height: clamp(280px, 60vw, 900px);
    display: flex; align-items: center; justify-content: center;
    overflow: hidden;
    margin-bottom: -80px;
  }
  .ite-hero-bg {
    position: absolute; inset: 0;
    background-image: url('https://intheevent.com/wp-content/uploads/2026/06/team-group-pic_wKarsenJon2_2026.png');
    background-size: cover;
    background-position: center center;
    background-color: var(--dark);
  }
  .ite-hero-overlay {
    position: absolute; inset: 0;
    background: linear-gradient(to bottom, rgba(8,8,9,0.1) 0%, rgba(8,8,9,0.2) 65%, rgba(8,8,9,0.95) 90%, rgba(8,8,9,1) 100%);
    pointer-events: none;
  }
  .ite-hero-content {
    position: relative; z-index: 2;
    width: 100%;
    text-align: center;
  }
  .ite-hero h1 {
    font-size: clamp(3.5rem, 8vw, 7rem);
    font-weight: 500; line-height: 1;
    letter-spacing: 0.1em; text-transform: uppercase;
    color: var(--green);
    margin: 0;
  }

  /* ════════════════════════════════════════
     TEAM CARDS
  ════════════════════════════════════════ */
  #ite-meet-the-team {
    position: relative;
    z-index: 2;
    padding-top: 160px;
  }

  .ite-team-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
  }
  @media (max-width: 900px) {
    .ite-team-grid { grid-template-columns: repeat(2, 1fr); }
  }
  @media (max-width: 640px) {
    .ite-team-grid { grid-template-columns: 1fr 1fr; gap: 14px; }
  }
  @media (max-width: 420px) {
    .ite-team-grid { grid-template-columns: 1fr; }
  }

  .ite-team-card {
    background: var(--card-bg);
    border: 1px solid var(--green-faint);
    border-radius: 12px;
    overflow: hidden;
    transition: border-color 0.3s, transform 0.3s;
  }
  .ite-team-card:hover {
    border-color: var(--green-mid);
    transform: translateY(-4px);
  }
  .ite-team-card-photo {
    width: 100%; aspect-ratio: 3/4;
    overflow: hidden;
  }
  .ite-team-card-photo img {
    width: 100%; height: 100%;
    object-fit: cover; object-position: center top;
    display: block;
    transition: transform 0.5s ease;
  }
  .ite-team-card:hover .ite-team-card-photo img { transform: scale(1.04); }
  .ite-team-card-body { padding: 20px; }
  .ite-team-card-title {
    font-size: 11px; font-weight: 500;
    letter-spacing: 0.28em; text-transform: uppercase;
    color: var(--green); margin-bottom: 6px;
  }
  .ite-team-card-name {
    font-size: 17px; font-weight: 500;
    letter-spacing: 0.08em; text-transform: uppercase;
    color: var(--white); line-height: 1.25;
    margin-bottom: 12px;
  }
  .ite-team-card-bio {
    font-size: 15px; line-height: 1.65;
    color: rgba(255,255,255,0.72);
  }

  /* ════════════════════════════════════════
     FOUNDER SECTION
  ════════════════════════════════════════ */
  .ite-founder-section {
    padding: 100px 0;
    background: var(--navy);
  }
  .ite-founder-inner {
    display: grid;
    grid-template-columns: 1fr 1.5fr;
    gap: 72px;
    align-items: stretch;
  }
  .ite-founder-photo {
    width: 100%; min-height: 480px;
    overflow: hidden; border-radius: 12px;
    border: 1px solid var(--green-faint);
  }
  .ite-founder-photo img {
    width: 100%; height: 100%;
    object-fit: cover; object-position: center top;
    display: block;
  }
  .ite-founder-copy .ite-eyebrow { margin-bottom: 12px; }
  .ite-founder-name {
    font-size: clamp(2rem, 4vw, 3.2rem);
    font-weight: 500; line-height: 1.1;
    letter-spacing: 0.08em; text-transform: uppercase;
    color: var(--white); margin-bottom: 8px;
  }
  .ite-founder-title {
    font-size: 13px; font-weight: 500;
    letter-spacing: 0.28em; text-transform: uppercase;
    color: var(--green); margin-bottom: 28px;
  }
  .ite-founder-bio {
    font-size: 17px; line-height: 1.8;
    color: rgba(255,255,255,0.78);
  }
  .ite-founder-full {
    display: block;
    width: 100%;
    max-width: 100%;
    box-sizing: border-box;
    margin-top: 48px;
    padding-top: 40px;
    border-top: 1px solid rgba(195,255,138,0.12);
  }
  @media (max-width: 820px) {
    .ite-founder-inner { grid-template-columns: 1fr; gap: 40px; }
    .ite-founder-photo { min-height: 360px; max-width: 360px; }
    .ite-founder-full { margin-top: 28px; padding-top: 28px; }
  }

  /* ════════════════════════════════════════
     CTA SECTION
  ════════════════════════════════════════ */
  .ite-cta-section {
    position: relative; text-align: center;
    padding: 80px 0; overflow: hidden;
    background: var(--dark);
  }
  .ite-cta-overlay {
    position: absolute; inset: 0;
    pointer-events: none; opacity: 0;
    transition: opacity 0.6s ease;
  }
  .ite-cta-content { position: relative; z-index: 2; }
  .ite-cta-section h2 {
    font-size: clamp(1.6rem, 2.5vw, 2.4rem);
    font-weight: 500; letter-spacing: 0.1em;
    text-transform: uppercase; color: var(--white);
    margin-bottom: 14px;
  }
  .ite-cta-section h2 span { color: var(--green); }
  .ite-cta-section p {
    font-size: 18px; color: rgba(255,255,255,0.72);
    margin-bottom: 40px; max-width: 520px;
    margin-left: auto; margin-right: auto;
  }
  .ite-cta-btns { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
</style>

<div id="ite-scroll-progress"></div>

<!-- HERO -->
<section class="ite-hero" aria-label="Our Team hero">
  <div class="ite-hero-bg"></div>
  <div class="ite-hero-overlay"></div>
  <div class="ite-hero-content ite-container">
    <h1 class="reveal">Our Team</h1>
  </div>
</section>

<!-- TEAM GRID -->
<section class="ite-section ite-section-dark" id="ite-meet-the-team" aria-label="Meet the team">
  <div class="ite-container">
    <div class="ite-team-grid">

      <article class="ite-team-card reveal" aria-label="Tyson LaSpina">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2026/05/26-0331ITE-TysonLaSpina17083-2-600x750.jpg" alt="Tyson LaSpina, Vice President of Operations at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Vice President of Operations</p>
          <h3 class="ite-team-card-name">Tyson LaSpina</h3>
          <p class="ite-team-card-bio">Born into the event industry, Tyson has spent 15+ years with In The Event — starting as an event technician on the warehouse floor, rising to Warehouse Manager, and now serving as VP of Operations. He oversees inventory, logistics, production execution, and the full event technician and sales staff.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Dawn Lynch">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/01/26-0331ITE-DawnLynch17045-Edit-2-600x750.jpg" alt="Dawn Lynch, Director of Warehouse Operations at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Director of Warehouse Operations</p>
          <h3 class="ite-team-card-name">Dawn Lynch</h3>
          <p class="ite-team-card-bio">Dawn brings deep expertise in Production Management, Technical Direction, Stage Management, Audio Engineering, Lighting Design, and Video Editing. A theater veteran and former Technical Director of the Ed Kenley Amphitheater, she also served as Floor Producer for Fox KSTU. Dawn is a graduate of the University of Utah.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Jennifer Hollm">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/01/Jennifer-Hollm-600x750.jpg" alt="Jennifer Hollm, Director of Sales at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Director of Sales</p>
          <h3 class="ite-team-card-name">Jennifer Hollm</h3>
          <p class="ite-team-card-bio">An Account Executive at In The Event since 2018, Jennifer holds a B.S. in Tourism and Events Management from George Mason University. She specializes in full-service events across tourism, non-profit, weddings, social, corporate galas, and conferences — with a particular love for event decor and stage installations.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Carra Hood">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2026/05/26-0331ITE-CarraHood17223-2-600x750.jpg" alt="Carra Hood, Vice President of Sales at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Vice President of Sales</p>
          <h3 class="ite-team-card-name">Carra Hood</h3>
          <p class="ite-team-card-bio">With over a decade in events, Carra has worked across collegiate athletics, non-profit fundraising, pharmaceutical marketing, live stage production, and social events. She designs and produces events for social and corporate clients and serves as the team's lead floral designer.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Kennedy Gray">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/01/Kennedy-Gray-600x750.jpg" alt="Kennedy Gray, Senior Account Executive at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Senior Account Executive</p>
          <h3 class="ite-team-card-name">Kennedy Gray</h3>
          <p class="ite-team-card-bio">Kennedy brings six years of event planning experience to her role, ranging from small-scale meetings to large corporate productions. She excels in fast-paced environments and has advanced expertise in Vectorworks for detailed event layouts. Outside of work, she enjoys walks with her three dogs and weekends at her family cabin.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Karsen Stimola">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/12/23-1214ITE-CarsonStimola8169-3-scaled.jpg" alt="Karsen Stimola, Account Executive at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Account Executive</p>
          <h3 class="ite-team-card-name">Karsen Stimola</h3>
          <p class="ite-team-card-bio">A New England native with a business degree in Event Management from Champlain College, Karsen has a decade of experience in social, corporate, and non-profit events with a specialty in weddings. She brings an eclectic style, creative zest, and a passion for creating memorable experiences.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Kara Hansen">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2026/04/26-0331ITE-KaraHansen16956-Edit-2-600x750.jpg" alt="Kara Hansen, Event Rental Specialist at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Event Rental Specialist</p>
          <h3 class="ite-team-card-name">Kara Hansen</h3>
          <p class="ite-team-card-bio">With five years of customer service experience, Kara helps clients navigate rentals and bring their event visions to life. She loves meeting people, problem solving, and streamlining every step of the process. Outside of work, she's an avid camper and crafter.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Jonathan Nguyen">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/01/Jonathan-Nguyen-600x750.jpg" alt="Jonathan Nguyen, Creative Director and Marketing Manager at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Creative Director &amp; Marketing Manager</p>
          <h3 class="ite-team-card-name">Jonathan Nguyen</h3>
          <p class="ite-team-card-bio">Jonathan has been creating art since before he can remember — starting with drawing and painting before discovering a passion for digital art in high school. At In The Event, he leads the creative team with expertise in graphic design, motion graphics, and animation, helping clients bring their dream events to life.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Gabriela Parra">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2024/09/24-0813ITE-GabrielaParra2998-scaled.jpg" alt="Gabriela Parra, Junior Graphic Designer at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Junior Graphic Designer</p>
          <h3 class="ite-team-card-name">Gabriela Parra</h3>
          <p class="ite-team-card-bio">Gabby focuses on motion graphics and 3D design, bringing ideas to life through visually engaging artwork for events and social media. With a background in architecture, she has a talent for designing cohesive and navigable spaces. Her skills span motion graphics, 3D modeling, and video editing.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Evan Cordova">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2026/04/26-0331ITE-EvanCordova17258-Edit-2-600x750.jpg" alt="Evan Cordova, Junior Graphic Designer at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Junior Graphic Designer</p>
          <h3 class="ite-team-card-name">Evan Cordova</h3>
          <p class="ite-team-card-bio">With strengths rooted in video, Evan flows effortlessly across the Adobe suite to create something fun and unique for every client. Obsessed with branding and marketing, he finds fulfillment in creative insight, brainstorming, and watching a project come to fruition — limited only by scale or the laws of physics.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Anthony Eversole">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2026/04/26-0331ITE-AnthonyEversole16881-Edit-2-600x750.jpg" alt="Anthony Eversole, Junior Graphic Designer at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Junior Graphic Designer</p>
          <h3 class="ite-team-card-name">Anthony Eversole</h3>
          <p class="ite-team-card-bio">Anthony brings a decade in the performing arts to his role in visual design. His expertise spans brand identity, illustration, environmental graphics, 3D rendering, and motion graphics. Bilingual in English and Spanish, he has a passion for vintage design techniques and a range of influences from pop culture to fine art.</p>
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Kolby Butts">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/01/Kolby-Butts-600x750.jpg" alt="Kolby Butts, Event Technician at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Event Technician</p>
          <h3 class="ite-team-card-name">Kolby Butts</h3>
          
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Chris Bergin">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/12/23-1214ITE-ChrisBergin8112-2-600x750.jpg" alt="Chris Bergin, Event Technician at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Event Technician</p>
          <h3 class="ite-team-card-name">Chris Bergin</h3>
          
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Kaden Warr">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2023/12/23-1214ITE-KadenWarr8083-2-600x750.jpg" alt="Kaden Warr, Event Technician at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Event Technician</p>
          <h3 class="ite-team-card-name">Kaden Warr</h3>
          
        </div>
      </article>

      <article class="ite-team-card reveal" aria-label="Morgan Butts">
        <div class="ite-team-card-photo"><img src="https://intheevent.com/wp-content/uploads/2026/04/26-0331ITE-MorganButts16999-Edit-2-600x750.jpg" alt="Morgan Butts, Event Technician at In The Event" width="600" height="750" loading="lazy" /></div>
        <div class="ite-team-card-body">
          <p class="ite-team-card-title">Event Technician</p>
          <h3 class="ite-team-card-name">Morgan Butts</h3>
          
        </div>
      </article>

    </div>
  </div>
</section>

<!-- FOUNDER -->
<section class="ite-founder-section" id="ite-founder" aria-label="Robert LaSpina, Founder">
  <div class="ite-container">
    <div class="ite-founder-inner">
      <div class="ite-founder-photo reveal">
        <img src="https://intheevent.com/wp-content/uploads/2023/01/Robert-LaSpina-600x750.jpg" alt="Robert LaSpina, Owner and Founder of In The Event" width="600" height="750" loading="lazy" />
      </div>
      <div class="ite-founder-copy">
        <span class="ite-eyebrow reveal">Founder &amp; Owner</span>
        <h2 class="ite-founder-name reveal">Robert LaSpina</h2>
        <p class="ite-founder-title reveal">Owner</p>
        <p class="ite-founder-bio reveal">With over 40 years in the event industry, Robert LaSpina has built a reputation for innovation, leadership, and precision. Born and raised in Las Vegas, Robert was immersed in live entertainment from an early age, traveling the world with his family, who were pioneers in theatrical, casino, and presidential productions. His mother was the lead dancer for the original Casino De Paris and his father produced, directed, and choreographed countless shows on the Las Vegas Strip. This unique upbringing laid the foundation for his expertise in lighting, sound, video, staging, and special effects, shaping him into a well-rounded leader in the event production space.</p>
        <p class="ite-founder-bio reveal" style="margin-top:1.4em;">Robert's career spans high-profile roles, including Executive Director of Hotels &amp; Logistics – Corporate for Encore Productions in Las Vegas and Director of Sales for a leading Utah-based AV company. He has overseen multimillion-dollar corporate events across premier venues from Mandalay Bay to Caesars Palace, managing productions for major hotels and convention centers. In 2004, he relocated to Utah, bringing his expertise to a new market and later launching In The Event in 2007.</p>
        <p class="ite-founder-bio reveal" style="margin-top:1.4em;">As the owner of In The Event, Robert has transformed the company into a premier full-service event production and design firm, specializing in cutting-edge event technology, immersive experiences, and seamless execution. Under his leadership, the company has expanded nationwide and grown into a family of businesses that includes Business Jaunt and Mannequin Rental Co., each serving a unique role in the event and marketing industry.</p>
      </div>
    </div>
    <p class="ite-founder-bio ite-founder-full reveal">Beyond his companies, Robert is deeply committed to advancing both his industry and community. Since 2021, he has served on the Utah Valley University Event Management Advisory Board, mentoring and shaping the next generation of event professionals. In 2025, he was honored to be recruited into the 388th Fighter Wing Honorary Commanders Program at Hill Air Force Base, where he serves with the 421st Fighter Squadron in support of the F-35A Lightning II mission. That same year, he joined the Board of Trustees at the Utah Museum of Contemporary Art (UMOCA), further aligning his lifelong passion for creativity and design with the advancement of the arts in Utah.</p>
  </div>
</section>

<!-- CTA -->
<section class="ite-cta-section" id="ite-cta-section" aria-label="Call to action">
  <div class="ite-cta-overlay" id="ite-cta-overlay"></div>
  <div class="ite-container ite-cta-content">
    <h2 class="reveal">Ready to Meet the Team<br><span>in Person?</span></h2>
    <p class="reveal">Let's talk about your next event.</p>
    <div class="ite-cta-btns reveal">
      <a class="ite-btn" href="https://intheevent.com/contact-us/">Start Planning</a>
      <a class="ite-btn btn-outline" href="https://intheevent.com/event-planning/">View Our Work</a>
    </div>
  </div>
</section>

<script>
(function () {

  /* Scroll Progress */
  var bar = document.getElementById('ite-scroll-progress');
  if (bar) {
    window.addEventListener('scroll', function () {
      var pct = window.scrollY / (document.documentElement.scrollHeight - window.innerHeight) * 100;
      bar.style.width = Math.min(pct, 100) + '%';
    }, { passive: true });
  }

  /* CTA Spotlight */
  var ctaOverlay = document.getElementById('ite-cta-overlay');
  var ctaSection = document.getElementById('ite-cta-section');
  if (ctaSection && ctaOverlay) {
    ctaSection.addEventListener('mousemove', function (e) {
      var r = ctaSection.getBoundingClientRect();
      ctaOverlay.style.background =
        'radial-gradient(600px circle at ' + (e.clientX - r.left) + 'px ' + (e.clientY - r.top) + 'px, rgba(195,255,138,0.10), transparent 85%)';
      ctaOverlay.style.opacity = '1';
    });
    ctaSection.addEventListener('mouseleave', function () {
      ctaOverlay.style.opacity = '0';
    });
  }

  /* Scroll Reveal */
  document.body.classList.add('js-reveal-ready');
  var observer = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in-view');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12 });
  document.querySelectorAll('.reveal').forEach(function (el) {
    observer.observe(el);
  });

})();
</script>
