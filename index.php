<?php
// ChicThreadBay - Main Landing Page
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ChicThreadBay — Haute Couture Textiles, Silk Thread Tailoring & Chic Apparel</title>
  <meta name="description" content="ChicThreadBay explores mulberry silk tailoring, organic cotton weaving, hand embroidery, botanical dyeing, and haute couture garment architecture.">
  
  <!-- Google tag (gtag.js) -->
  <script async src="https://images.unsplash.com/photo-1578632767115-351597cf2477?auto=format&fit=crop&w=1200&q=80"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-0LY0HY7L01');
  </script>

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;600;700;800&display=swap" rel="stylesheet">
  
  <link rel="stylesheet" href="css/style.css">
  <style>
    .active-fabric {
      background: var(--accent-gold) !important;
      color: #0f1714 !important;
      border-color: var(--accent-gold) !important;
      font-weight: 800 !important;
    }
  </style>
</head>
<body>

  <!-- Navigation Header -->
  <header class="navbar">
    <div class="container nav-container">
      <a href="index.php" class="brand-logo">Chic<span>ThreadBay</span></a>
      <button class="mobile-toggle" aria-label="Toggle navigation">☰</button>
      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="blog.html">Chic Journal</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="privacy-policy.html">Privacy</a></li>
      </ul>
    </div>
  </header>

  <!-- SECTION 1: Split-Screen Hero Header -->
  <section class="section" id="hero" style="padding-top: 0;">
    <div class="container">
      <div class="hero-split">
        <div>
          <span class="hero-badge">Haute Couture Textiles & Silk Thread Atelier</span>
          <h1 class="hero-title">The Art of Fine Silk & Bespoke Tailoring</h1>
          <p class="hero-desc">Deconstructing mulberry silk drape, hand-loomed organic cotton, botanical botanical dyes, and precision hand-embroidered silhouettes.</p>
          <div class="hero-btns">
            <a href="blog.html" class="btn btn-emerald">Explore Chic Essays</a>
            <a href="about.html" class="btn btn-outline-gold">Textile Atelier Lab</a>
          </div>
        </div>
        <div>
          <div class="hero-portrait-frame">
            <img src="https://images.unsplash.com/photo-1479064555552-3ef4979f8908?auto=format&fit=crop&w=1200&q=80" alt="Chic Fashion Model Display">
            <div class="hero-floating-tag">
              <strong style="color: var(--accent-gold); font-size: 0.95rem;">Empirical Drape Rating: 9.9/10</strong>
              <p style="color: var(--text-secondary); font-size: 0.85rem; margin-top: 0.25rem;">Haute Couture Silk Tailoring Standard</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 2: Haute Couture Textile & Silk Thread Pillars Grid -->
  <section class="section" id="craft-pillars">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Textile Standards</span>
        <h2 class="section-title">The Four Pillars of Chic Atelier Craft</h2>
      </div>
      <div class="grid-4">
        <div class="chic-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🪡</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Mulberry Silk Weave</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Grade 6A long-staple raw silk fibers offering unmatched luster and natural temperature regulation.</p>
        </div>
        <div class="chic-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.5rem;">🌿</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Organic Botanical Dyes</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Plant-extracted indigo, madder root, and marigold dyes free of toxic synthetic chemicals.</p>
        </div>
        <div class="chic-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">✨</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">French Knot & Zardozi</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Intricate goldwork embroidery and hand-sewn buttonholes crafted by master artisans.</p>
        </div>
        <div class="chic-card">
          <span style="font-size: 2.5rem; display: block; margin-bottom: 0.75rem;">📐</span>
          <h3 style="font-size: 1.3rem; color: var(--accent-gold); margin-bottom: 0.75rem;">Architectural Darts</h3>
          <p style="color: var(--text-secondary); font-size: 0.95rem;">Structured shoulder seam boning and waist darting for timeless silhouette elegance.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 3: Interactive Fabric Weave & Thread Density Explorer -->
  <section class="section" id="fabric-explorer" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Textile Explorer</span>
        <h2 class="section-title">The Chic Fabric Weave & Thread Density Explorer</h2>
      </div>
      <div style="max-width: 800px; margin: 0 auto; text-align: center;">
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Select a luxury textile specification to inspect its thread count, weave density, and drape benchmark:</p>
        <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap; margin-bottom: 1.5rem;">
          <button class="btn btn-outline-gold fabric-btn active-fabric" data-fabric="100% Grade 6A Mulberry Silk Charmeuse" data-desc="22 momme weight mulberry silk with satin weave front, fluid drape, and liquid sheen." data-score="9.9/10 Drape Rating">Mulberry Silk Charmeuse</button>
          <button class="btn btn-outline-gold fabric-btn" data-fabric="Hand-Loomed Long-Staple Organic Linen" data-desc="200 GSM organic European flax linen woven on traditional wooden handlooms for summer breathability." data-score="9.8/10 Breathability Index">Organic Hand-Loomed Linen</button>
          <button class="btn btn-outline-gold fabric-btn" data-fabric="Super 150s Mongolian Cashmere Wool" data-desc="15.5 micron ultra-fine cashmere fibers delivering weightless insulation and softness." data-score="9.9/10 Softness Rating">Super 150s Cashmere</button>
          <button class="btn btn-outline-gold fabric-btn" data-fabric="Bespoke Goldwork Zardozi Embroidered Velvet" data-desc="Heavy cotton velvet embroidered with real metallic thread, pearls, and French knots." data-score="9.7/10 Haute Couture Finish">Goldwork Velvet</button>
        </div>
        <div id="fabric-detail">
          <div class="chic-card" style="border-left: 4px solid var(--accent-gold);">
            <h3 style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;">100% Grade 6A Mulberry Silk Charmeuse Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">22 momme weight mulberry silk with satin weave front, fluid drape, and liquid sheen.</p>
            <strong style="color: var(--accent-emerald); font-size: 0.95rem;">Empirical Textile Luster Index: 9.9/10 Drape Rating</strong>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 4: Mulberry Silk Tanning & Organic Cotton Weaving Spotlight -->
  <section class="section" id="silk-spotlight">
    <div class="container">
      <div class="grid-2">
        <div>
          <span class="section-subtitle" style="display:block; text-align:left;">Atelier Metallurgy & Weaving</span>
          <h2 class="section-title" style="text-align:left; margin-bottom: 1.5rem;">Hand-Drawn Pattern Drafting & Bias-Cut Physics</h2>
          <p style="color: var(--text-secondary); margin-bottom: 1.25rem; line-height: 1.8;">
            Fast fashion uses cheap polyester synthetics that trap heat and pill after two washes. At ChicThreadBay, we evaluate natural fiber elasticity, bias-cut drape, and seam tension.
          </p>
          <ul style="list-style: none; color: var(--text-secondary); margin-bottom: 2rem;">
            <li style="margin-bottom: 0.75rem;">🪡 <strong style="color:var(--text-primary);">Bias-Cut Fluidity:</strong> Cutting fabric at a 45-degree angle for natural body-conforming elasticity.</li>
            <li style="margin-bottom: 0.75rem;">🌿 <strong style="color:var(--text-primary);">French Seams:</strong> Enclosed raw edges preventing fraying without bulky serged stitching.</li>
            <li style="margin-bottom: 0.75rem;">✨ <strong style="color:var(--text-primary);">Real Pearl Buttons:</strong> Hand-turned mother-of-pearl buttons secured with shank stitching.</li>
          </ul>
          <a href="about.html" class="btn btn-emerald">Our Fashion Manifesto</a>
        </div>
        <div>
          <img src="https://images.unsplash.com/photo-1434389677669-e08b4cac3105?auto=format&fit=crop&w=1200&q=80" alt="Chic Apparel Display" style="border-radius: 16px; border: 1px solid var(--border-color); box-shadow: 0 20px 40px rgba(0,0,0,0.6);">
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 5: Interactive Fashion Silhouette Matcher & Style Diagnostic Quiz -->
  <section class="section" id="style-quiz" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Style Diagnostic</span>
        <h2 class="section-title">Fashion Silhouette Matcher Quiz</h2>
      </div>
      <div class="chic-card" style="max-width: 750px; margin: 0 auto;">
        <h3 style="color: var(--accent-gold); margin-bottom: 1rem;">What Is Your Primary Wardrobe Architecture & Textile Preference?</h3>
        <div style="display: flex; flex-direction: column; gap: 1rem;">
          <button class="style-quiz-btn btn btn-outline-gold" style="text-align:left; justify-content:flex-start;" data-rec="Bias-Cut Mulberry Silk Slip Dress with French Seams & Mother-of-Pearl Buttons.">
            A. Fluid Evening Glamour, 22-Momme Mulberry Silk & Bias-Cut Silhouettes
          </button>
          <button class="style-quiz-btn btn btn-outline-gold" style="text-align:left; justify-content:flex-start;" data-rec="Structured Cashmere Wool Blazer with Hand-Stitched Lapels & Horn Buttons.">
            B. Tailored Executive Presence, Super 150s Cashmere Wool & Sharp Shoulder Seams
          </button>
          <button class="style-quiz-btn btn btn-outline-gold" style="text-align:left; justify-content:flex-start;" data-rec="Hand-Loomed European Linen Tunic with Botanical Indigo Dye.">
            C. Breathable Summer Chic, Organic Hand-Loomed Linen & Natural Plant Dyes
          </button>
        </div>
        <div id="style-quiz-result"></div>
      </div>
    </div>
  </section>

  <!-- SECTION 6: Thread Density & Sustainable Weave Certification Performance Metrics Counter -->
  <section class="section" id="metrics">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Laboratory Benchmarks</span>
        <h2 class="section-title">Chic Thread Bay Research Metrics</h2>
      </div>
      <div class="grid-4">
        <div class="chic-card" style="text-align: center;">
          <h3 class="metric-number text-emerald" data-target="12" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Masterclass Essays</p>
        </div>
        <div class="chic-card" style="text-align: center;">
          <h3 class="metric-number text-emerald" data-target="22" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Momme Silk Weight</p>
        </div>
        <div class="chic-card" style="text-align: center;">
          <h3 class="metric-number text-emerald" data-target="100" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">% Botanical Natural Dyes</p>
        </div>
        <div class="chic-card" style="text-align: center;">
          <h3 class="metric-number text-emerald" data-target="1500" style="font-size: 3rem; margin-bottom: 0.5rem;">0</h3>
          <p style="color: var(--text-secondary); text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Words Per Essay</p>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 7: Master Tailors & Fashion Editors Testimonials -->
  <section class="section" id="testimonials" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Chic Acclaim</span>
        <h2 class="section-title">Endorsements From Master Tailors & Fashion Editors</h2>
      </div>
      <div class="grid-3">
        <div class="chic-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "ChicThreadBay delivers masterclass analyses on mulberry silk momme weight, bias-cut drape, and French seam construction."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Camille Blanc</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Haute Couture Pattern Designer, Paris</span>
        </div>
        <div class="chic-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "Their research into botanical indigo dyeing, hand-loomed linen, and capsule wardrobe curation is remarkable."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Harrison Vance</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Fashion Director, Milan</span>
        </div>
        <div class="chic-card">
          <p style="color: var(--text-secondary); font-style: italic; margin-bottom: 1.5rem;">
            "The leading digital journal for hand embroidery techniques, cashmere micron grading, and sustainable fashion."
          </p>
          <strong style="color: var(--accent-gold); display: block;">— Sophia Chen</strong>
          <span style="color: var(--text-muted); font-size: 0.85rem;">Senior Textile Editor, New York</span>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 8: Recent Chic Dispatches & Article Grid -->
  <section class="section" id="journal-dispatches">
    <div class="container">
      <div class="section-title-wrap">
        <span class="section-subtitle">Chic Dispatches</span>
        <h2 class="section-title">Latest Fashion & Textile Essays</h2>
      </div>
      <div class="grid-3">
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?auto=format&fit=crop&w=1200&q=80" alt="Mulberry Silk Tailoring">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Mulberry Silk</span>
            <div class="blog-date">August 24, 2026</div>
            <h3 class="blog-title"><a href="blog/the-art-of-mulberry-silk-tailoring-drape-density-and-luster.html">The Art of Mulberry Silk Tailoring</a></h3>
            <p class="blog-excerpt">22-momme weight, satin weave sheen, and fluid drape physics.</p>
            <a href="blog/the-art-of-mulberry-silk-tailoring-drape-density-and-luster.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?auto=format&fit=crop&w=1200&q=80" alt="Organic Cotton">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Organic Cotton</span>
            <div class="blog-date">August 20, 2026</div>
            <h3 class="blog-title"><a href="blog/evaluating-organic-cotton-vs-synthetic-polyester-in-haute-couture.html">Organic Cotton vs Synthetic Polyester</a></h3>
            <p class="blog-excerpt">Long-staple fiber strength, moisture breathability, and eco-impact.</p>
            <a href="blog/evaluating-organic-cotton-vs-synthetic-polyester-in-haute-couture.html" class="read-more">Read Essay →</a>
          </div>
        </div>
        <div class="blog-card">
          <div class="blog-img-wrap">
            <img src="https://images.unsplash.com/photo-1490481651871-ab68de25d43d?auto=format&fit=crop&w=1200&q=80" alt="Hand Embroidery">
          </div>
          <div class="blog-content">
            <span class="blog-tag">Hand Embroidery</span>
            <div class="blog-date">August 15, 2026</div>
            <h3 class="blog-title"><a href="blog/hand-embroidery-techniques-goldwork-zardozi-and-french-knots.html">Hand Embroidery: Goldwork & French Knots</a></h3>
            <p class="blog-excerpt">Real metallic thread, beadwork, and couture embellishments.</p>
            <a href="blog/hand-embroidery-techniques-goldwork-zardozi-and-french-knots.html" class="read-more">Read Essay →</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- SECTION 9: VIP Chic Thread Gazette Newsletter & Unified Footer CTA -->
  <section class="section" id="newsletter" style="background: var(--bg-secondary);">
    <div class="container">
      <div class="chic-card" style="text-align: center; max-width: 800px; margin: 0 auto; border-color: var(--accent-gold);">
        <span class="section-subtitle">Chic Dispatch</span>
        <h2 class="section-title" style="margin-bottom: 1rem; font-size: 2.2rem;">Subscribe to The Chic Thread Gazette</h2>
        <p style="color: var(--text-secondary); margin-bottom: 2rem;">Receive bi-weekly analyses of haute couture textiles, silk thread tailoring, and sustainable fashion.</p>
        <form onsubmit="event.preventDefault(); alert('Thank you for subscribing to ChicThreadBay Gazette.');" style="display: flex; gap: 1rem; max-width: 550px; margin: 0 auto; flex-wrap: wrap;">
          <input type="email" placeholder="Enter your email address" required style="flex: 1; min-width: 250px; padding: 0.85rem 1.25rem; background: var(--bg-primary); border: 1px solid var(--border-color); color: var(--text-primary); border-radius: 50px;">
          <button type="submit" class="btn btn-emerald">Subscribe</button>
        </form>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-col">
          <a href="index.php" class="brand-logo" style="margin-bottom: 1rem; color: #fff;">Chic<span>ThreadBay</span></a>
          <p>ChicThreadBay is a premier editorial platform dedicated to haute couture textiles, silk thread tailoring, botanical dyeing, and sustainable chic fashion.</p>
          <p style="margin-top: 1rem; color: var(--accent-gold);">
            📍 181 Mercer Street, New York, NY 10012, United States<br>
            📞 +1-888-777-5845
          </p>
        </div>
        <div class="footer-col">
          <h4>Navigation</h4>
          <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="about.html">About Us</a></li>
            <li><a href="blog.html">Chic Journal</a></li>
            <li><a href="contact.html">Contact Us</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Legal Policies</h4>
          <ul>
            <li><a href="privacy-policy.html">Privacy Policy</a></li>
            <li><a href="cookies.html">Cookie Policy</a></li>
            <li><a href="disclaimer.html">Disclaimer</a></li>
            <li><a href="terms.html">Terms of Use</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Textile Focus</h4>
          <p>Deconstructing mulberry silk tailoring, organic cotton weaves, hand-embroidered goldwork, botanical dyes, and haute couture garment architecture globally.</p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>&copy; 2026 ChicThreadBay. All rights reserved. Registered Official Headquarters.</p>
        <p>Designed for Haute Couture Textile Excellence.</p>
      </div>
    </div>
  </footer>

  <script src="js/main.js"></script>
</body>
</html>
