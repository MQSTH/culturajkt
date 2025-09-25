<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GigiMerah Studio - UI/UX Learner • Digital Asset Creator</title>
    <style>
        :root {
            --bg-base: #0B1016;
            --bg-panel: rgba(255,255,255,0.08);
            --panel-border: rgba(255,255,255,0.18);
            --accent-primary: #65D2FF;
            --accent-secondary: #FFB86B;
            --success: #2BD673;
            --danger: #FF5C7A;
            --text-primary: #E6EEFF;
            --text-muted: #9FB2C9;
            --glow: rgba(101,210,255,0.35);
            
            --font-display: 'Segoe UI', 'Microsoft JhengHei UI', 'Malgun Gothic', system-ui, -apple-system, sans-serif;
            --font-body: 'Segoe UI', 'Microsoft YaHei UI', 'Malgun Gothic', system-ui, -apple-system, sans-serif;
            
            --max-width: 1200px;
            --section-spacing: 80px;
            --grid-gap: 24px;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: var(--font-body);
            background: var(--bg-base);
            color: var(--text-primary);
            line-height: 1.6;
            overflow-x: hidden;
        }

        /* Background */
        .hero-bg {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: min(60vh, 700px);
            background: linear-gradient(135deg, #1a2332 0%, #0f1a2e 25%, #1e3a5f 50%, #2a4a7a 75%, #1a2849 100%);
            background-size: cover;
            z-index: -2;
        }

        .hero-bg::before {
            content: '';
            position: absolute;
            inset: 0;
            background: 
                radial-gradient(circle at 20% 30%, rgba(101,210,255,0.15) 0%, transparent 40%),
                radial-gradient(circle at 80% 60%, rgba(255,184,107,0.1) 0%, transparent 35%),
                radial-gradient(circle at 40% 80%, rgba(43,214,115,0.08) 0%, transparent 30%);
        }

        .hero-bg::after {
            content: '';
            position: absolute;
            inset: 0;
            background: 
                linear-gradient(180deg, rgba(0,0,0,0.25), rgba(0,0,0,0.55)),
                radial-gradient(circle at center, transparent 0%, rgba(11,16,22,0.4) 100%);
            backdrop-filter: blur(1px);
        }

        /* Layout wrapper */
        .wrapper {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Glass components */
        .glass {
            background: var(--bg-panel);
            backdrop-filter: blur(10px) saturate(115%);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.45);
        }

        /* Header */
        header {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            background: rgba(11,16,22,0.8);
            backdrop-filter: blur(10px) saturate(115%);
            border-bottom: 1px solid rgba(255,255,255,0.12);
            padding: 16px 0;
            transition: all 0.3s ease;
        }

        .header-content {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 32px;
            align-items: center;
        }

        nav a {
            color: var(--text-primary);
            text-decoration: none;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 8px 16px;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
        }

        nav a:hover, nav a:focus {
            color: var(--accent-primary);
            background: rgba(101,210,255,0.1);
            outline: none;
        }

        /* Buttons */
        .btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 600;
            text-decoration: none;
            font-size: 0.9rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-family: inherit;
        }

        .btn-primary {
            background: var(--accent-primary);
            color: var(--bg-base);
            box-shadow: 0 0 20px rgba(101,210,255,0.4), inset 0 1px 0 rgba(255,255,255,0.2);
        }

        .btn-primary:hover, .btn-primary:focus {
            background: #70d9ff;
            transform: translateY(-2px);
            box-shadow: 0 6px 25px rgba(101,210,255,0.6), inset 0 1px 0 rgba(255,255,255,0.3);
            outline: 2px solid var(--accent-primary);
            outline-offset: 2px;
        }

        .btn-secondary {
            background: transparent;
            color: var(--text-primary);
            border: 1px solid var(--panel-border);
            backdrop-filter: blur(10px);
        }

        .btn-secondary:hover, .btn-secondary:focus {
            border-color: var(--accent-primary);
            color: var(--accent-primary);
            box-shadow: 0 0 15px rgba(101,210,255,0.3);
            outline: 2px solid var(--accent-primary);
            outline-offset: 2px;
        }

        .btn-accent {
            background: var(--accent-secondary);
            color: var(--bg-base);
            box-shadow: 0 0 20px rgba(255,184,107,0.4);
        }

        .btn-accent:hover, .btn-accent:focus {
            background: #ffbe7a;
            transform: translateY(-2px);
            outline: 2px solid var(--accent-secondary);
            outline-offset: 2px;
        }

        .btn-small {
            font-size: 0.8rem;
            padding: 8px 16px;
        }

        /* Section spacing */
        section {
            padding: var(--section-spacing) 0;
        }

        /* Hero */
        #hero {
            height: min(60vh, 700px);
            display: flex;
            align-items: center;
            position: relative;
            text-align: center;
            margin-top: 80px;
        }

        .hero-content {
            position: relative;
            z-index: 1;
            max-width: 800px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .hero-content h1 {
            font-family: var(--font-display);
            font-size: clamp(2rem, 5vw, 3rem);
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 0 0 30px rgba(101,210,255,0.3);
        }

        .hero-content p {
            font-size: 1.1rem;
            color: var(--text-muted);
            margin-bottom: 32px;
            max-width: 600px;
            margin-left: auto;
            margin-right: auto;
        }

        .hero-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
        }

        /* Grid layouts */
        .grid {
            display: grid;
            gap: var(--grid-gap);
            margin: 0 auto;
            max-width: var(--max-width);
            padding: 0 20px;
        }

        .grid-4 {
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        }

        .grid-3 {
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
        }

        .grid-2 {
            grid-template-columns: repeat(auto-fit, minmax(400px, 1fr));
        }

        /* Cards */
        .card {
            background: var(--bg-panel);
            backdrop-filter: blur(10px) saturate(115%);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            box-shadow: 0 14px 36px rgba(0,0,0,0.45);
            overflow: hidden;
            transition: all 0.3s ease;
            position: relative;
        }

        .card:hover, .card:focus-within {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 20px 50px rgba(0,0,0,0.6);
        }

        .card-image {
            aspect-ratio: 1/1;
            background: linear-gradient(135deg, rgba(101,210,255,0.2), rgba(255,184,107,0.2));
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .card-icon {
            font-size: 3rem;
        }

        .card-icon-music {
            color: var(--success);
        }

        .card-icon-texture {
            color: var(--accent-primary);
        }

        .card-icon-ui {
            color: var(--accent-secondary);
        }

        .card-icon-campfire {
            color: var(--danger);
        }

        .card-icon-beatrix {
            color: var(--success);
        }

        .card-icon-miya {
            color: var(--accent-primary);
        }

        .card-icon-pack {
            color: var(--accent-secondary);
        }

        .card-icon-mobile {
            color: var(--accent-primary);
        }

        .card-icon-course {
            color: var(--accent-secondary);
        }

        .card-icon-travel {
            color: var(--success);
        }

        .card-icon-ecommerce {
            color: var(--danger);
        }

        .card-content {
            padding: 24px;
        }

        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--text-primary);
        }

        .card-meta {
            font-size: 0.85rem;
            color: var(--text-muted);
            margin-bottom: 12px;
        }

        .card-desc {
            font-size: 0.9rem;
            color: var(--text-muted);
            margin-bottom: 16px;
        }

        .card-buttons {
            display: flex;
            gap: 8px;
            margin-top: 16px;
        }

        /* Badges */
        .badge {
            position: absolute;
            top: 12px;
            left: 12px;
            padding: 4px 12px;
            border-radius: 8px;
            font-size: 0.75rem;
            font-weight: 600;
            box-shadow: 0 6px 16px rgba(0,0,0,0.35);
            z-index: 1;
        }

        .badge-free {
            background: var(--success);
            color: white;
        }

        .badge-paid {
            background: var(--accent-secondary);
            color: var(--bg-base);
        }

        .badge-status {
            background: var(--accent-primary);
            color: var(--bg-base);
        }

        /* Section headings */
        .section-heading {
            text-align: center;
            margin-bottom: 48px;
            max-width: var(--max-width);
            margin-left: auto;
            margin-right: auto;
            padding: 0 20px;
        }

        .section-heading h2 {
            font-family: var(--font-display);
            font-size: clamp(1.6rem, 3.2vw, 2.2rem);
            font-weight: 700;
            margin-bottom: 16px;
            text-shadow: 0 0 20px rgba(101,210,255,0.2);
        }

        .section-heading p {
            color: var(--text-muted);
            max-width: 600px;
            margin: 0 auto;
        }

        /* About section */
        .about-content {
            display: grid;
            grid-template-columns: 300px 1fr;
            gap: 48px;
            align-items: center;
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .about-avatar {
            aspect-ratio: 1;
            background: linear-gradient(135deg, rgba(101,210,255,0.3), rgba(255,184,107,0.3));
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 4rem;
        }

        .about-text h3 {
            font-family: var(--font-display);
            font-size: 1.8rem;
            margin-bottom: 24px;
            color: var(--text-primary);
        }

        .about-text ul {
            list-style: none;
        }

        .about-text li {
            margin-bottom: 16px;
            padding-left: 24px;
            position: relative;
            color: var(--text-muted);
        }

        .about-text li::before {
            content: '▶';
            position: absolute;
            left: 0;
            color: var(--accent-primary);
        }

        /* Filters */
        .filters {
            margin-bottom: 32px;
            text-align: center;
            max-width: var(--max-width);
            margin-left: auto;
            margin-right: auto;
            padding: 0 20px;
        }

        .filter-tabs {
            display: inline-flex;
            background: var(--bg-panel);
            border-radius: 50px;
            padding: 8px;
            margin-bottom: 16px;
            border: 1px solid var(--panel-border);
            flex-wrap: wrap;
            gap: 4px;
        }

        .filter-tab {
            padding: 8px 16px;
            border-radius: 25px;
            background: transparent;
            border: none;
            color: var(--text-muted);
            cursor: pointer;
            font-size: 0.9rem;
            font-weight: 500;
            font-family: var(--font-body);
            transition: all 0.3s ease;
        }

        .filter-tab.active,
        .filter-tab:hover,
        .filter-tab:focus {
            background: var(--accent-primary);
            color: var(--bg-base);
            outline: none;
        }

        /* News cards */
        .news-card {
            background: var(--bg-panel);
            backdrop-filter: blur(10px) saturate(115%);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .news-card:hover {
            transform: translateY(-4px);
        }

        .news-image {
            aspect-ratio: 16/9;
            background: linear-gradient(135deg, rgba(101,210,255,0.2), rgba(255,184,107,0.2));
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.3s ease;
        }

        .news-card:hover .news-image {
            transform: scale(1.05);
        }

        .news-icon {
            font-size: 2rem;
        }

        .news-icon-notes {
            color: var(--accent-primary);
        }

        .news-icon-release {
            color: var(--accent-secondary);
        }

        .news-icon-tools {
            color: var(--success);
        }

        .news-icon-celebration {
            color: var(--danger);
        }

        .news-icon-dev {
            color: var(--text-muted);
        }

        .news-icon-classic {
            color: var(--accent-primary);
        }

        .news-content {
            padding: 24px;
        }

        .news-meta {
            font-size: 0.8rem;
            color: var(--text-muted);
            margin-bottom: 8px;
        }

        .news-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: var(--text-primary);
        }

        /* CTA section */
        .cta-section {
            text-align: center;
            background: var(--bg-panel);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            padding: 48px 32px;
            backdrop-filter: blur(10px) saturate(115%);
            max-width: var(--max-width);
            margin: 0 auto;
            margin-left: auto;
            margin-right: auto;
        }

        .cta-wrapper {
            padding: 0 20px;
        }

        .cta-section h2 {
            font-family: var(--font-display);
            font-size: 1.8rem;
            margin-bottom: 16px;
        }

        .cta-section p {
            color: var(--text-muted);
            margin-bottom: 32px;
        }

        /* Contact form */
        .contact-content {
            display: grid;
            grid-template-columns: 1fr 300px;
            gap: 48px;
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .contact-form {
            background: var(--bg-panel);
            backdrop-filter: blur(10px) saturate(115%);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.45);
            padding: 32px;
        }

        .contact-socials {
            background: var(--bg-panel);
            backdrop-filter: blur(10px) saturate(115%);
            border: 1px solid var(--panel-border);
            border-radius: 20px;
            box-shadow: 0 12px 28px rgba(0,0,0,0.45);
            padding: 32px;
        }

        .contact-socials h3 {
            margin-bottom: 24px;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--text-primary);
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid var(--panel-border);
            border-radius: 12px;
            background: var(--bg-panel);
            color: var(--text-primary);
            font-family: var(--font-body);
            font-size: 1rem;
            backdrop-filter: blur(10px);
            transition: all 0.3s ease;
        }

        .form-control:focus {
            outline: 2px solid var(--accent-primary);
            outline-offset: 2px;
            border-color: var(--accent-primary);
        }

        textarea.form-control {
            resize: vertical;
            min-height: 120px;
        }

        .socials {
            list-style: none;
        }

        .socials li {
            margin-bottom: 12px;
        }

        .socials a {
            color: var(--text-muted);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .socials a:hover,
        .socials a:focus {
            color: var(--accent-primary);
            background: rgba(101,210,255,0.1);
            outline: none;
        }

        /* See more button wrapper */
        .see-more-wrapper {
            text-align: center;
            margin-top: 32px;
            max-width: var(--max-width);
            margin-left: auto;
            margin-right: auto;
            padding: 0 20px;
        }

        /* Footer */
        footer {
            background: rgba(0,0,0,0.3);
            border-top: 1px solid var(--panel-border);
            padding: 32px 0;
            margin-top: 64px;
        }

        .footer-content {
            max-width: var(--max-width);
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 32px;
            margin-bottom: 32px;
        }

        .footer-widget h4 {
            color: var(--text-primary);
            margin-bottom: 16px;
            font-weight: 600;
        }

        .footer-widget ul {
            list-style: none;
        }

        .footer-widget li {
            margin-bottom: 8px;
        }

        .footer-widget a {
            color: var(--text-muted);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-widget a:hover,
        .footer-widget a:focus {
            color: var(--accent-primary);
            outline: none;
        }

        .footer-bottom {
            text-align: center;
            padding-top: 32px;
            border-top: 1px solid var(--panel-border);
            color: var(--text-muted);
            font-size: 0.9rem;
        }

        .visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            padding: 0;
            margin: -1px;
            overflow: hidden;
            clip: rect(0, 0, 0, 0);
            white-space: nowrap;
            border: 0;
        }

        /* Animation preferences */
        @media (prefers-reduced-motion: reduce) {
            * {
                animation-duration: 0.01ms !important;
                animation-iteration-count: 1 !important;
                transition-duration: 0.01ms !important;
                scroll-behavior: auto !important;
            }
        }

        /* Animation keyframes */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Keyboard navigation styles */
        .keyboard-navigation *:focus {
            outline: 2px solid var(--accent-primary);
            outline-offset: 2px;
        }
    </style>
</head>
<body>

    <div class="hero-bg"></div>

    <header>
        <div class="header-content">
            <nav aria-label="Primary navigation">
                <ul>
                    <li><a href="#hero">Home</a></li>
                    <li><a href="#about">About</a></li>
                    <li><a href="#projects">Projects</a></li>
                    <li><a href="#products">Products</a></li>
                    <li><a href="#news">News</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
            <a href="#contact" class="btn btn-primary">Join Community</a>
        </div>
    </header>

    <main id="main">
        <section id="hero" aria-labelledby="hero-heading">
            <div class="hero-content">
                <h1 id="hero-heading">Aspiring UI/UX Designer & Digital Creator</h1>
                <p>High-school student building interfaces and game-ready assets. Some projects are in progress—feedback welcome!</p>
                <div class="hero-buttons">
                    <a href="#projects" class="btn btn-primary">Explore Projects</a>
                    <a href="#products" class="btn btn-secondary">Browse Products</a>
                </div>
            </div>
        </section>

        <section id="about" aria-labelledby="about-heading">
            <div class="about-content">
                <div class="about-avatar">
                    <span>🎨</span>
                </div>
                <div class="about-text">
                    <h3 id="about-heading">About Me</h3>
                    <ul>
                        <li>SMA student focusing on UI/UX fundamentals (research, wireframes, prototypes).</li>
                        <li>Self-taught creator of digital assets (templates, textures, add-ons).</li>
                        <li>Open to collaboration, internships, and feedback loops.</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="projects" aria-labelledby="projects-heading">
            <div class="section-heading">
                <h2 id="projects-heading">Projects (In Progress)</h2>
                <p>Concepts, wireframes, and partial builds. Final case studies coming soon.</p>
            </div>
            <div class="grid grid-4" role="list" aria-label="Project portfolio">
                <article class="card" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-status">On-going</span>
                        <div class="card-icon card-icon-mobile">📱</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Mobile Banking UI</h3>
                        <p class="card-desc">Onboarding & card dashboard.</p>
                    </div>
                </article>
                
                <article class="card" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-status">On-going</span>
                        <div class="card-icon card-icon-course">📚</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Course Platform UX</h3>
                        <p class="card-desc">IA, flows, and test plan.</p>
                    </div>
                </article>
                
                <article class="card" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-status">Concept</span>
                        <div class="card-icon card-icon-travel">✈️</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Travel App Redesign</h3>
                        <p class="card-desc">Search, filters, and cart UX.</p>
                    </div>
                </article>
                
                <article class="card" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-status">Prototype</span>
                        <div class="card-icon card-icon-ecommerce">🛒</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">E-commerce Checkout</h3>
                        <p class="card-desc">Funnel analysis & A/B ideas.</p>
                    </div>
                </article>
            </div>
        </section>

        <section id="products" aria-labelledby="products-heading">
            <div class="section-heading">
                <h2 id="products-heading">Digital Products</h2>
                <p>Original templates, portraits, and game assets. Purchases/Downloads via PlanetMinecraft and Lynk.id.</p>
            </div>
            
            <div class="filters">
                <div class="filter-tabs" role="tablist" aria-label="Product categories">
                    <button class="filter-tab active" role="tab" aria-selected="true" data-filter="all">All</button>
                    <button class="filter-tab" role="tab" aria-selected="false" data-filter="templates">Templates</button>
                    <button class="filter-tab" role="tab" aria-selected="false" data-filter="textures">Texture Packs / Add-ons</button>
                    <button class="filter-tab" role="tab" aria-selected="false" data-filter="portraits">Portraits</button>
                    <button class="filter-tab" role="tab" aria-selected="false" data-filter="free">Free</button>
                    <button class="filter-tab" role="tab" aria-selected="false" data-filter="paid">Paid</button>
                </div>
            </div>

            <div class="grid grid-4" id="products-grid" role="list" aria-label="Digital products">
                <article class="card product-item" data-category="templates" data-price="paid" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-paid">Paid</span>
                        <div class="card-icon card-icon-music">🎵</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">SPOTIFY POWERPOINT TEMPLATE</h3>
                        <div class="card-meta">Lynk.id • Templates</div>
                        <div class="card-buttons">
                            <a href="https://lynk.id/gigimerah" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://lynk.id/gigimerah" class="btn btn-primary btn-small">Buy</a>
                        </div>
                    </div>
                </article>

                <article class="card product-item" data-category="textures" data-price="free" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-free">Free</span>
                        <div class="card-icon card-icon-texture">🧱</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Uniform Textures</h3>
                        <div class="card-meta">PlanetMinecraft • Texture Packs</div>
                        <div class="card-buttons">
                            <a href="https://www.planetminecraft.com/member/gigimerah/submissions/?morder=order_" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://www.planetminecraft.com/member/gigimerah/submissions/?morder=order_" class="btn btn-primary btn-small">Download</a>
                        </div>
                    </div>
                </article>

                <article class="card product-item" data-category="textures" data-price="free" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-free">Free</span>
                        <div class="card-icon card-icon-ui">🖥️</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">UI/HUD Overhaul</h3>
                        <div class="card-meta">PlanetMinecraft • Add-ons</div>
                        <div class="card-buttons">
                            <a href="https://www.planetminecraft.com/member/gigimerah/submissions/?morder=order_" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://www.planetminecraft.com/member/gigimerah/submissions/?morder=order_" class="btn btn-primary btn-small">Download</a>
                        </div>
                    </div>
                </article>

                <article class="card product-item" data-category="textures" data-price="paid" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-paid">Paid</span>
                        <div class="card-icon card-icon-campfire">🔥</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Campfire Recreation</h3>
                        <div class="card-meta">Lynk.id • Texture Packs</div>
                        <div class="card-buttons">
                            <a href="https://lynk.id/gigimerah" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://lynk.id/gigimerah" class="btn btn-primary btn-small">Buy</a>
                        </div>
                    </div>
                </article>

                <article class="card product-item" data-category="portraits" data-price="paid" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-paid">Paid</span>
                        <div class="card-icon card-icon-beatrix">👑</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Hero Portrait – Beatrix</h3>
                        <div class="card-meta">Lynk.id • Portraits</div>
                        <div class="card-buttons">
                            <a href="https://lynk.id/gigimerah" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://lynk.id/gigimerah" class="btn btn-primary btn-small">Buy</a>
                        </div>
                    </div>
                </article>

                <article class="card product-item" data-category="portraits" data-price="paid" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-paid">Paid</span>
                        <div class="card-icon card-icon-miya">🏹</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Hero Portrait – Miya</h3>
                        <div class="card-meta">Lynk.id • Portraits</div>
                        <div class="card-buttons">
                            <a href="https://lynk.id/gigimerah" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://lynk.id/gigimerah" class="btn btn-primary btn-small">Buy</a>
                        </div>
                    </div>
                </article>

                <article class="card product-item" data-category="portraits" data-price="free" role="listitem">
                    <div class="card-image">
                        <span class="badge badge-free">Free</span>
                        <div class="card-icon card-icon-pack">🎭</div>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Hero Portrait Pack (Free)</h3>
                        <div class="card-meta">Lynk.id • Portraits</div>
                        <div class="card-buttons">
                            <a href="https://lynk.id/gigimerah" class="btn btn-secondary btn-small">Details</a>
                            <a href="https://lynk.id/gigimerah" class="btn btn-primary btn-small">Download</a>
                        </div>
                    </div>
                </article>
            </div>
        </section>

        <section id="news" aria-labelledby="news-heading">
            <div class="section-heading">
                <h2 id="news-heading">News & Updates</h2>
            </div>
            <div class="grid grid-3" role="list" aria-label="Recent news and updates">
                <article class="news-card" role="listitem">
                    <div class="news-image">
                        <div class="news-icon news-icon-notes">📝</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">Projects • Jul 5, 2025</div>
                        <h3 class="news-title">Quarterly Dev Notes</h3>
                    </div>
                </article>
                
                <article class="news-card" role="listitem">
                    <div class="news-image">
                        <div class="news-icon news-icon-release">🚀</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">Products • Jul 7, 2025</div>
                        <h3 class="news-title">Pre-release Notes</h3>
                    </div>
                </article>
                
                <article class="news-card" role="listitem">
                    <div class="news-image">
                        <div class="news-icon news-icon-tools">🔧</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">Tools • Jul 9, 2025</div>
                        <h3 class="news-title">Tooling Update 0.9.11</h3>
                    </div>
                </article>
                
                <article class="news-card" role="listitem">
                    <div class="news-image">
                        <div class="news-icon news-icon-celebration">🎉</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">Products • Jun 21, 2025</div>
                        <h3 class="news-title">June Pre-release</h3>
                    </div>
                </article>
                
                <article class="news-card" role="listitem">
                    <div class="news-image">
                        <div class="news-icon news-icon-dev">📖</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">All • Jun 27, 2025</div>
                        <h3 class="news-title">Dev Notes 10</h3>
                    </div>
                </article>
                
                <article class="news-card" role="listitem">
                    <div class="news-image">
                        <div class="news-icon news-icon-classic">📚</div>
                    </div>
                    <div class="news-content">
                        <div class="news-meta">Classic • Apr 28, 2025</div>
                        <h3 class="news-title">Dev Notes 6</h3>
                    </div>
                </article>
            </div>
            <div class="see-more-wrapper">
                <a href="#" class="btn btn-secondary">See More</a>
            </div>
        </section>

        <section id="cta" aria-labelledby="cta-heading">
            <div class="cta-wrapper">
                <div class="cta-section">
                    <h2 id="cta-heading">Join the Community</h2>
                    <p>Join the community, share feedback, and follow my learning journey.</p>
                    <a href="#contact" class="btn btn-accent">Join Discord</a>
                </div>
            </div>
        </section>

        <section id="contact" aria-labelledby="contact-heading">
            <div class="section-heading">
                <h2 id="contact-heading">Contact</h2>
            </div>
            <div class="contact-content">
                <div class="contact-form">
                    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" id="name" name="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" name="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea id="message" name="message" class="form-control" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])) {
                        $name = htmlspecialchars($_POST["name"]);
                        $email = htmlspecialchars($_POST["email"]);
                        $message = htmlspecialchars($_POST["message"]);
                        
                        // Basic validation
                        if (!empty($name) && !empty($email) && !empty($message)) {
                            // In a real implementation, you would process the form data here
                            // For example: send an email, save to database, etc.
                            
                            echo '<div style="margin-top: 20px; padding: 10px; background: var(--success); color: white; border-radius: 8px;">';
                            echo 'Thank you for your message, ' . $name . '! I\'ll get back to you soon.';
                            echo '</div>';
                        } else {
                            echo '<div style="margin-top: 20px; padding: 10px; background: var(--danger); color: white; border-radius: 8px;">';
                            echo 'Please fill in all required fields.';
                            echo '</div>';
                        }
                    }
                    ?>
                </div>
                
                <div class="contact-socials">
                    <h3>Connect</h3>
                    <ul class="socials">
                        <li><a href="#" aria-label="LinkedIn profile">🔗 LinkedIn</a></li>
                        <li><a href="#" aria-label="Discord server">💬 Discord</a></li>
                        <li><a href="#" aria-label="Twitter profile">🐦 Twitter/X</a></li>
                        <li><a href="https://www.planetminecraft.com/member/gigimerah/submissions/?morder=order_" aria-label="PlanetMinecraft profile">🌍 PlanetMinecraft</a></li>
                        <li><a href="https://lynk.id/gigimerah" aria-label="Lynk.id store">🛒 Lynk.id</a></li>
                    </ul>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-grid">
                <div class="footer-widget">
                    <h4>Info</h4>
                    <ul>
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Brand Kit</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h4>Listings</h4>
                    <ul>
                        <li><a href="#">Mod Platforms</a></li>
                        <li><a href="#">Mirrors</a></li>
                        <li><a href="#">Partners</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h4>Media</h4>
                    <ul>
                        <li><a href="#">YouTube</a></li>
                        <li><a href="#">Discord</a></li>
                        <li><a href="#">Twitter/X</a></li>
                    </ul>
                </div>
                <div class="footer-widget">
                    <h4>Resources</h4>
                    <ul>
                        <li><a href="#">Docs</a></li>
                        <li><a href="#">Contribute</a></li>
                        <li><a href="#">Changelog</a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; <?php echo date("Y"); ?> GigiMerah Studio — All assets are original.</p>
            </div>
        </div>
    </footer>

    <script>
        // Product filtering functionality
        const filterTabs = document.querySelectorAll('.filter-tab');
        const productItems = document.querySelectorAll('.product-item');

        filterTabs.forEach(tab => {
            tab.addEventListener('click', () => {
                // Update active tab
                filterTabs.forEach(t => {
                    t.classList.remove('active');
                    t.setAttribute('aria-selected', 'false');
                });
                tab.classList.add('active');
                tab.setAttribute('aria-selected', 'true');

                const filter = tab.getAttribute('data-filter');
                
                // Filter products
                productItems.forEach(item => {
                    const category = item.getAttribute('data-category');
                    const price = item.getAttribute('data-price');
                    
                    let show = false;
                    
                    if (filter === 'all') {
                        show = true;
                    } else if (filter === 'free' || filter === 'paid') {
                        show = price === filter;
                    } else {
                        show = category === filter;
                    }
                    
                    if (show) {
                        item.style.display = 'block';
                        item.style.animation = 'fadeIn 0.3s ease';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Header scroll effect
        let lastScrollTop = 0;
        const header = document.querySelector('header');
        
        window.addEventListener('scroll', () => {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 100) {
                header.style.background = 'rgba(11,16,22,0.95)';
                header.style.boxShadow = '0 8px 32px rgba(0,0,0,0.3)';
            } else {
                header.style.background = 'rgba(11,16,22,0.8)';
                header.style.boxShadow = 'none';
            }
            
            lastScrollTop = scrollTop;
        });

        // Keyboard navigation improvements
        document.addEventListener('keydown', (e) => {
            if (e.key === 'Tab') {
                document.body.classList.add('keyboard-navigation');
            }
        });

        document.addEventListener('mousedown', () => {
            document.body.classList.remove('keyboard-navigation');
        });
    </script>
</body>
</html>