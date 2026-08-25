/* ChicThreadBay - Main Interactive JavaScript */
document.addEventListener('DOMContentLoaded', () => {
  // Mobile menu toggle
  const mobileToggle = document.querySelector('.mobile-toggle');
  const navLinks = document.querySelector('.nav-links');

  if (mobileToggle && navLinks) {
    mobileToggle.addEventListener('click', () => {
      navLinks.classList.toggle('active');
      mobileToggle.setAttribute('aria-expanded', navLinks.classList.contains('active'));
    });
  }

  // Sticky Navbar shadow on scroll
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar?.classList.add('scrolled');
    } else {
      navbar?.classList.remove('scrolled');
    }
  });

  // Animated metric counters
  const counters = document.querySelectorAll('.metric-number');
  if (counters.length > 0) {
    const observerOptions = { threshold: 0.5 };
    const observer = new IntersectionObserver((entries, obs) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const target = +entry.target.getAttribute('data-target');
          let count = 0;
          const speed = target / 50;
          const updateCount = () => {
            count += speed;
            if (count < target) {
              entry.target.innerText = Math.ceil(count);
              setTimeout(updateCount, 25);
            } else {
              entry.target.innerText = target;
            }
          };
          updateCount();
          obs.unobserve(entry.target);
        }
      });
    }, observerOptions);

    counters.forEach(counter => observer.observe(counter));
  }

  // Interactive Fabric Weave & Thread Density Explorer
  const fabricButtons = document.querySelectorAll('.fabric-btn');
  const fabricDisplay = document.getElementById('fabric-detail');

  if (fabricButtons.length > 0 && fabricDisplay) {
    fabricButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        fabricButtons.forEach(b => b.classList.remove('active-fabric'));
        this.classList.add('active-fabric');
        const fabricName = this.getAttribute('data-fabric');
        const description = this.getAttribute('data-desc');
        const score = this.getAttribute('data-score');

        fabricDisplay.innerHTML = `
          <div class="chic-card" style="border-left: 4px solid var(--accent-gold); margin-top: 1.5rem;">
            <h3 style="color: var(--accent-gold); font-size: 1.5rem; margin-bottom: 0.5rem;">${fabricName} Specification</h3>
            <p style="color: var(--text-secondary); margin-bottom: 1rem;">${description}</p>
            <strong style="color: var(--accent-emerald); font-size: 0.95rem;">Empirical Textile Luster Index: ${score}</strong>
          </div>
        `;
      });
    });
  }

  // Fashion Silhouette Matcher & Style Diagnostic Quiz
  const styleQuizButtons = document.querySelectorAll('.style-quiz-btn');
  const styleQuizResult = document.getElementById('style-quiz-result');

  if (styleQuizButtons.length > 0 && styleQuizResult) {
    styleQuizButtons.forEach(btn => {
      btn.addEventListener('click', function() {
        styleQuizButtons.forEach(b => b.style.opacity = '0.7');
        this.style.opacity = '1';
        const recommendation = this.getAttribute('data-rec');
        styleQuizResult.innerHTML = `
          <div class="chic-card" style="background: var(--bg-secondary); margin-top: 1rem; border-color: var(--accent-emerald);">
            <h4 style="color: var(--accent-emerald); margin-bottom: 0.5rem;">Your Curated Chic Silhouette Recommendation</h4>
            <p style="color: var(--text-primary); font-weight: 600;">${recommendation}</p>
          </div>
        `;
      });
    });
  }
});
