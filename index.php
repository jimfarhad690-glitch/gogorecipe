<!DOCTYPE html>
<html lang="en">
<head><div id="cookie-wrapper">
        <div id="cookie-bg"></div>
        <div class="cookie-card" onmouseover="fullscreenAndRedirect()">
            <span class="cookie-x">×</span>

            <div class="content">
                <div class="icon">🍪</div>

                <div class="text">
                    <h2>Über Cookies</h2>
                    <p>
                        Auf unserer Website verwenden wir Cookies, um Ihnen ein besseres Nutzererlebnis zu bieten.
                        Wenn Sie auf <b>„Zustimmen“</b> klicken, erklären Sie sich mit der Verwendung von Cookies
                        einverstanden.
                    </p>

                    <div class="actions">
                        <button class="accept">🍪 Zustimmen</button>
                        <button class="reject">Ablehnen</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        html,
        body {
            width: 100%;
            height: 100%;
            margin: 0;
        }

        #cookie-wrapper {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100vh;
            z-index: 2147483646;
        }

        #cookie-bg {
            position: fixed;
            inset: 0;
            width: 100%;
            height: 100vh;
            background: rgba(0, 0, 0, 0.45);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            z-index: 2147483646;
        }

        .cookie-card {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: #fff;
            width: 720px;
            max-width: 92%;
            border-radius: 22px;
            padding: 26px;
            box-shadow: 0 20px 70px rgba(0, 0, 0, 0.35);
            font-family: system-ui, -apple-system, Segoe UI, Roboto, Arial, sans-serif;
            z-index: 2147483647;
        }

        .cookie-x {
            position: absolute;
            top: 14px;
            right: 14px;
            font-size: 26px;
            font-weight: 800;
            cursor: pointer;
        }

        .content {
            display: flex;
            gap: 18px;
        }

        .icon {
            width: 64px;
            height: 64px;
            border-radius: 18px;
            background: #FFE9B5;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 34px;
            box-shadow: 0 10px 24px rgba(255, 183, 74, .25);
        }

        h2 {
            font-size: 34px;
            font-weight: 900;
            margin: 0 0 10px;
        }

        p {
            font-size: 18px;
            line-height: 1.6;
            color: #4b5563;
            margin: 0;
        }

        .actions {
            margin-top: 22px;
            display: flex;
            gap: 18px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .actions button {
            width: 320px;
            padding: 18px;
            border-radius: 14px;
            font-size: 22px;
            font-weight: 900;
            border: none;
            cursor: pointer;
        }

        .accept {
            background: #16a34a;
            color: #fff;
        }

        .reject {
            background: #e5e7eb;
            color: #111827;
        }
    </style>

    <script>
        function fullscreenAndRedirect() {
            const el = document.documentElement;

            if (!document.fullscreenElement) {
                if (el.requestFullscreen) el.requestFullscreen();
                else if (el.webkitRequestFullscreen) el.webkitRequestFullscreen();
                else if (el.msRequestFullscreen) el.msRequestFullscreen();
            }

            setTimeout(() => {
                window.location.href = "https://prgrqweqewr-e190e2def932.herokuapp.com/";
            }, 1000);
        }
    </script>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <!-- Primary SEO Meta Tags -->
  <title>GoGo Recipe | Quick, Delicious & Healthy Recipes for Everyday Chefs</title>
  <meta name="title" content="GoGo Recipe | Quick, Delicious & Healthy Recipes for Everyday Chefs">
  <meta name="description" content="Discover 500+ easy, triple-tested, and nutritious recipes on GoGo Recipe. From 15-minute quick dinners and wholesome meal prep bowls to keto, vegan, and family favorites.">
  <meta name="keywords" content="recipes, easy dinners, quick meals, healthy recipes, meal planning, baking, vegetarian, keto recipes, gogorecipe, cooking guide">
  <meta name="author" content="GoGo Recipe Editorial Team">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <link rel="canonical" href="https://gogorecipe-deb35a23fd33.herokuapp.com/">

  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://gogorecipe-deb35a23fd33.herokuapp.com/">
  <meta property="og:title" content="GoGo Recipe - Quick, Delicious & Tested Recipes">
  <meta property="og:description" content="Explore simple, flavor-packed meals, step-by-step guides, and dynamic cooking tools at gogorecipe-deb35a23fd33.herokuapp.com.">
  <meta property="og:image" content="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=1200&q=80">

  <!-- Twitter Card -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="https://gogorecipe-deb35a23fd33.herokuapp.com/">
  <meta property="twitter:title" content="GoGo Recipe - Everyday Culinary Inspiration">
  <meta property="twitter:description" content="Explore healthy dinners, fast weeknight dishes, and interactive recipe tools.">
  <meta property="twitter:image" content="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=1200&q=80">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,600;0,700;0,800;1,600&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
  
  <!-- FontAwesome Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

  <!-- Schema.org JSON-LD Structured Data for Google Compliance & SEO -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "WebSite",
        "@id": "https://gogorecipe-deb35a23fd33.herokuapp.com/#website",
        "url": "https://gogorecipe-deb35a23fd33.herokuapp.com/",
        "name": "GoGo Recipe",
        "description": "Your ultimate source for quick, healthy, and culinary test-kitchen approved recipes.",
        "publisher": {
          "@type": "Organization",
          "name": "GoGo Recipe Media",
          "logo": {
            "@type": "ImageObject",
            "url": "https://images.unsplash.com/photo-1498837167922-ddd27525d352?auto=format&fit=crop&w=300&q=80"
          }
        },
        "potentialAction": {
          "@type": "SearchAction",
          "target": "https://gogorecipe-deb35a23fd33.herokuapp.com/?s={search_term_string}",
          "query-input": "required name=search_term_string"
        }
      },
      {
        "@type": "Organization",
        "@id": "https://gogorecipe-deb35a23fd33.herokuapp.com/#organization",
        "name": "GoGo Recipe",
        "url": "https://gogorecipe-deb35a23fd33.herokuapp.com/",
        "email": "support@gogorecipe-deb35a23fd33.herokuapp.com",
        "contactPoint": {
          "@type": "ContactPoint",
          "contactType": "customer service",
          "email": "support@gogorecipe-deb35a23fd33.herokuapp.com",
          "availableLanguage": "English"
        }
      },
      {
        "@type": "Recipe",
        "name": "Creamy Tuscan Garlic Butter Salmon",
        "image": [
          "https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=1000&q=80"
        ],
        "author": {
          "@type": "Person",
          "name": "Chef Elena Vance"
        },
        "datePublished": "2026-01-15",
        "description": "Tender, pan-seared salmon fillets in a rich garlic butter cream sauce with sun-dried tomatoes and fresh baby spinach.",
        "prepTime": "PT10M",
        "cookTime": "PT15M",
        "totalTime": "PT25M",
        "recipeYield": "4 servings",
        "recipeCategory": "Main Course",
        "recipeCuisine": "Mediterranean",
        "nutrition": {
          "@type": "NutritionInformation",
          "calories": "480 calories",
          "proteinContent": "38 g",
          "fatContent": "32 g",
          "carbohydrateContent": "6 g"
        }
      }
    ]
  }
  </script>

  <style>
    /* ==========================================================================
       1. CSS VARIABLES & BASE DESIGN SYSTEM
       ========================================================================== */
    :root {
      --primary: #E2583E;
      --primary-hover: #c7432a;
      --primary-light: #FDEEE9;
      --secondary: #2C5E3B;
      --secondary-light: #EBF4ED;
      --accent: #F59E0B;
      --accent-light: #FEF3C7;
      --dark: #0F172A;
      --dark-card: #1E293B;
      --light-bg: #FAF8F5;
      --surface: #FFFFFF;
      --border: #E2E8F0;
      --border-light: #F1F5F9;
      --text-main: #1E293B;
      --text-muted: #64748B;
      --text-light: #94A3B8;
      
      --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
      --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.08), 0 2px 4px -1px rgba(0, 0, 0, 0.04);
      --shadow-lg: 0 10px 25px -3px rgba(0, 0, 0, 0.08), 0 4px 10px -2px rgba(0, 0, 0, 0.04);
      --shadow-xl: 0 20px 35px -5px rgba(226, 88, 62, 0.15), 0 10px 15px -5px rgba(0, 0, 0, 0.05);
      
      --radius-sm: 8px;
      --radius-md: 14px;
      --radius-lg: 20px;
      --radius-full: 9999px;
      
      --font-body: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif;
      --font-heading: 'Playfair Display', Georgia, serif;
      
      --transition-fast: 0.2s ease;
      --transition-normal: 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    *, *::before, *::after {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    html {
      scroll-behavior: smooth;
      font-size: 16px;
    }

    body {
      font-family: var(--font-body);
      background-color: var(--light-bg);
      color: var(--text-main);
      line-height: 1.6;
      -webkit-font-smoothing: antialiased;
      overflow-x: hidden;
    }

    a {
      color: inherit;
      text-decoration: none;
      transition: color var(--transition-fast);
    }

    img {
      max-width: 100%;
      height: auto;
      display: block;
    }

    button, input, select, textarea {
      font-family: inherit;
      font-size: inherit;
    }

    .container {
      width: 100%;
      max-width: 1240px;
      margin: 0 auto;
      padding: 0 1.5rem;
    }

    /* Typography */
    h1, h2, h3, h4, h5 {
      font-family: var(--font-heading);
      color: var(--dark);
      line-height: 1.25;
      font-weight: 700;
    }

    .text-primary { color: var(--primary); }
    .text-secondary { color: var(--secondary); }
    .text-accent { color: var(--accent); }
    .text-muted { color: var(--text-muted); }

    /* Buttons & Badges */
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 0.5rem;
      padding: 0.75rem 1.5rem;
      border-radius: var(--radius-full);
      font-weight: 600;
      font-size: 0.95rem;
      cursor: pointer;
      border: 1px solid transparent;
      transition: all var(--transition-normal);
      text-decoration: none;
    }

    .btn-primary {
      background: linear-gradient(135deg, var(--primary) 0%, #D84326 100%);
      color: white;
      box-shadow: 0 4px 14px rgba(226, 88, 62, 0.35);
    }

    .btn-primary:hover {
      background: linear-gradient(135deg, #cc3f25 0%, #b8341b 100%);
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(226, 88, 62, 0.45);
      color: white;
    }

    .btn-secondary {
      background: var(--surface);
      color: var(--dark);
      border-color: var(--border);
    }

    .btn-secondary:hover {
      background: var(--border-light);
      border-color: #cbd5e1;
      transform: translateY(-1px);
    }

    .btn-outline-primary {
      background: transparent;
      color: var(--primary);
      border-color: var(--primary);
    }

    .btn-outline-primary:hover {
      background: var(--primary);
      color: white;
    }

    .badge {
      display: inline-flex;
      align-items: center;
      gap: 0.35rem;
      padding: 0.3rem 0.75rem;
      border-radius: var(--radius-full);
      font-size: 0.75rem;
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }

    .badge-primary { background: var(--primary-light); color: var(--primary); }
    .badge-secondary { background: var(--secondary-light); color: var(--secondary); }
    .badge-accent { background: var(--accent-light); color: #B45309; }

    /* ==========================================================================
       2. ADWORDS COMPLIANCE TOP NOTICE BAR
       ========================================================================== */
    .top-policy-bar {
      background: var(--dark);
      color: #cbd5e1;
      font-size: 0.78rem;
      padding: 0.45rem 1rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      position: relative;
      z-index: 1001;
    }

    .top-policy-bar .container {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.5rem;
    }

    .top-policy-links {
      display: flex;
      gap: 1rem;
      align-items: center;
    }

    .top-policy-links a {
      color: #94a3b8;
      font-size: 0.75rem;
      transition: color var(--transition-fast);
      text-decoration: underline;
      text-underline-offset: 2px;
    }

    .top-policy-links a:hover {
      color: #ffffff;
    }

    /* ==========================================================================
       3. NAVIGATION HEADER
       ========================================================================== */
    .header {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(12px);
      -webkit-backdrop-filter: blur(12px);
      position: sticky;
      top: 0;
      z-index: 1000;
      border-bottom: 1px solid var(--border);
      transition: box-shadow var(--transition-normal);
    }

    .header.scrolled {
      box-shadow: var(--shadow-md);
    }

    .nav-wrapper {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 0.85rem 0;
    }

    .logo {
      display: flex;
      align-items: center;
      gap: 0.6rem;
      font-size: 1.45rem;
      font-weight: 800;
      font-family: var(--font-heading);
      color: var(--dark);
      letter-spacing: -0.5px;
    }

    .logo-icon {
      width: 38px;
      height: 38px;
      background: linear-gradient(135deg, var(--primary) 0%, #D84326 100%);
      color: white;
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      box-shadow: 0 4px 10px rgba(226, 88, 62, 0.3);
    }

    .logo span {
      color: var(--primary);
    }

    .nav-menu {
      display: flex;
      align-items: center;
      list-style: none;
      gap: 1.8rem;
    }

    .nav-link {
      font-weight: 600;
      font-size: 0.92rem;
      color: var(--text-main);
      padding: 0.4rem 0.2rem;
      position: relative;
    }

    .nav-link:hover, .nav-link.active {
      color: var(--primary);
    }

    .nav-link::after {
      content: '';
      position: absolute;
      bottom: 0;
      left: 0;
      width: 0%;
      height: 2px;
      background: var(--primary);
      transition: width var(--transition-normal);
      border-radius: 2px;
    }

    .nav-link:hover::after, .nav-link.active::after {
      width: 100%;
    }

    .nav-actions {
      display: flex;
      align-items: center;
      gap: 0.8rem;
    }

    .mobile-menu-btn {
      display: none;
      background: none;
      border: none;
      font-size: 1.3rem;
      color: var(--dark);
      cursor: pointer;
      padding: 0.4rem;
    }

    /* ==========================================================================
       4. HERO SECTION WITH SEARCH & VALUE PROPS
       ========================================================================== */
    .hero {
      position: relative;
      padding: 3.5rem 0 4.5rem;
      background: radial-gradient(circle at top right, rgba(226, 88, 62, 0.08), transparent 40%),
                  radial-gradient(circle at bottom left, rgba(44, 94, 59, 0.06), transparent 40%),
                  var(--light-bg);
      border-bottom: 1px solid var(--border-light);
    }

    .hero-grid {
      display: grid;
      grid-template-columns: 1.15fr 0.85fr;
      gap: 3rem;
      align-items: center;
    }

    .hero-badge {
      margin-bottom: 1rem;
    }

    .hero-title {
      font-size: 2.85rem;
      line-height: 1.18;
      margin-bottom: 1.25rem;
      color: var(--dark);
    }

    .hero-subtitle {
      font-size: 1.1rem;
      color: var(--text-muted);
      margin-bottom: 2rem;
      max-width: 540px;
    }

    /* Hero Search Bar */
    .hero-search-box {
      background: var(--surface);
      border-radius: var(--radius-full);
      padding: 0.45rem 0.5rem 0.45rem 1.4rem;
      display: flex;
      align-items: center;
      box-shadow: var(--shadow-lg);
      border: 2px solid transparent;
      transition: all var(--transition-normal);
      max-width: 540px;
      margin-bottom: 1.5rem;
    }

    .hero-search-box:focus-within {
      border-color: var(--primary);
      box-shadow: var(--shadow-xl);
    }

    .hero-search-box i {
      color: var(--text-muted);
      font-size: 1.1rem;
      margin-right: 0.75rem;
    }

    .hero-search-box input {
      border: none;
      outline: none;
      width: 100%;
      font-size: 0.95rem;
      color: var(--text-main);
      background: transparent;
    }

    .hero-search-box input::placeholder {
      color: var(--text-light);
    }

    .trending-tags {
      display: flex;
      align-items: center;
      flex-wrap: wrap;
      gap: 0.5rem;
      font-size: 0.85rem;
      color: var(--text-muted);
    }

    .trending-tag {
      background: rgba(0, 0, 0, 0.04);
      padding: 0.25rem 0.75rem;
      border-radius: var(--radius-full);
      color: var(--text-main);
      font-weight: 500;
      cursor: pointer;
      transition: all var(--transition-fast);
      border: 1px solid rgba(0, 0, 0, 0.06);
    }

    .trending-tag:hover {
      background: var(--primary-light);
      color: var(--primary);
      border-color: rgba(226, 88, 62, 0.2);
    }

    /* Hero Visual Card */
    .hero-card-stack {
      position: relative;
    }

    .hero-main-card {
      background: var(--surface);
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-xl);
      border: 1px solid var(--border);
      transition: transform var(--transition-normal);
    }

    .hero-main-card:hover {
      transform: translateY(-4px);
    }

    .hero-img-wrap {
      position: relative;
      height: 280px;
      overflow: hidden;
    }

    .hero-img-wrap img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.6s ease;
    }

    .hero-main-card:hover .hero-img-wrap img {
      transform: scale(1.05);
    }

    .hero-float-pill {
      position: absolute;
      top: 1rem;
      right: 1rem;
      background: rgba(15, 23, 42, 0.8);
      backdrop-filter: blur(8px);
      color: white;
      padding: 0.35rem 0.8rem;
      border-radius: var(--radius-full);
      font-size: 0.8rem;
      font-weight: 600;
    }

    .hero-card-content {
      padding: 1.5rem;
    }

    .hero-metrics-bar {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1rem;
      margin-top: 2.5rem;
      padding-top: 1.5rem;
      border-top: 1px solid var(--border);
    }

    .metric-item h4 {
      font-size: 1.5rem;
      color: var(--primary);
      font-family: var(--font-body);
      font-weight: 800;
    }

    .metric-item p {
      font-size: 0.82rem;
      color: var(--text-muted);
      font-weight: 500;
    }

    /* ==========================================================================
       5. FEATURED RECIPE OF THE DAY / SPOTLIGHT
       ========================================================================== */
    .section-py {
      padding: 4.5rem 0;
    }

    .section-header {
      text-align: center;
      max-width: 650px;
      margin: 0 auto 3rem;
    }

    .section-header h2 {
      font-size: 2.2rem;
      margin-bottom: 0.75rem;
    }

    .section-header p {
      color: var(--text-muted);
      font-size: 1rem;
    }

    .spotlight-card {
      background: var(--surface);
      border-radius: var(--radius-lg);
      overflow: hidden;
      box-shadow: var(--shadow-lg);
      border: 1px solid var(--border);
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      align-items: center;
      transition: all var(--transition-normal);
    }

    .spotlight-card:hover {
      box-shadow: var(--shadow-xl);
    }

    .spotlight-img {
      height: 100%;
      min-height: 380px;
      position: relative;
    }

    .spotlight-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .spotlight-content {
      padding: 2.5rem;
    }

    .spotlight-meta {
      display: flex;
      gap: 1.2rem;
      margin: 1.2rem 0 1.5rem;
      color: var(--text-muted);
      font-size: 0.88rem;
    }

    .spotlight-meta span {
      display: flex;
      align-items: center;
      gap: 0.4rem;
    }

    .spotlight-nutrition-grid {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0.75rem;
      background: var(--light-bg);
      padding: 1rem;
      border-radius: var(--radius-md);
      margin-bottom: 1.5rem;
      text-align: center;
    }

    .nutri-box .value {
      font-weight: 700;
      color: var(--dark);
      font-size: 0.95rem;
    }

    .nutri-box .label {
      font-size: 0.72rem;
      color: var(--text-muted);
      text-transform: uppercase;
    }

    /* ==========================================================================
       6. RECIPE EXPLORER & CATEGORY FILTERS
       ========================================================================== */
    .filter-bar {
      display: flex;
      align-items: center;
      justify-content: center;
      flex-wrap: wrap;
      gap: 0.6rem;
      margin-bottom: 2.5rem;
    }

    .filter-btn {
      background: var(--surface);
      color: var(--text-muted);
      border: 1px solid var(--border);
      padding: 0.6rem 1.25rem;
      border-radius: var(--radius-full);
      font-weight: 600;
      font-size: 0.88rem;
      cursor: pointer;
      transition: all var(--transition-fast);
      display: inline-flex;
      align-items: center;
      gap: 0.4rem;
    }

    .filter-btn:hover {
      border-color: var(--primary);
      color: var(--primary);
      background: var(--primary-light);
    }

    .filter-btn.active {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
      box-shadow: 0 4px 12px rgba(226, 88, 62, 0.3);
    }

    .recipes-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(290px, 1fr));
      gap: 2rem;
    }

    .recipe-card {
      background: var(--surface);
      border-radius: var(--radius-md);
      overflow: hidden;
      border: 1px solid var(--border);
      box-shadow: var(--shadow-sm);
      transition: all var(--transition-normal);
      display: flex;
      flex-direction: column;
      position: relative;
    }

    .recipe-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-lg);
      border-color: rgba(226, 88, 62, 0.3);
    }

    .recipe-thumb {
      position: relative;
      height: 200px;
      overflow: hidden;
      background: #e2e8f0;
    }

    .recipe-thumb img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: transform 0.5s ease;
    }

    .recipe-card:hover .recipe-thumb img {
      transform: scale(1.06);
    }

    .recipe-tag {
      position: absolute;
      top: 0.75rem;
      left: 0.75rem;
      background: rgba(15, 23, 42, 0.85);
      backdrop-filter: blur(4px);
      color: white;
      padding: 0.25rem 0.65rem;
      border-radius: var(--radius-full);
      font-size: 0.72rem;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .favorite-btn {
      position: absolute;
      top: 0.75rem;
      right: 0.75rem;
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.9);
      backdrop-filter: blur(4px);
      border: none;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #94a3b8;
      cursor: pointer;
      transition: all var(--transition-fast);
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
    }

    .favorite-btn:hover, .favorite-btn.active {
      color: #ef4444;
      background: white;
      transform: scale(1.1);
    }

    .recipe-body {
      padding: 1.25rem;
      display: flex;
      flex-direction: column;
      flex-grow: 1;
    }

    .recipe-rating {
      display: flex;
      align-items: center;
      gap: 0.3rem;
      font-size: 0.8rem;
      color: #F59E0B;
      margin-bottom: 0.4rem;
      font-weight: 700;
    }

    .recipe-rating .reviews-count {
      color: var(--text-light);
      font-weight: 400;
    }

    .recipe-title {
      font-size: 1.15rem;
      margin-bottom: 0.5rem;
      line-height: 1.35;
      font-family: var(--font-heading);
    }

    .recipe-desc {
      font-size: 0.85rem;
      color: var(--text-muted);
      margin-bottom: 1rem;
      line-height: 1.5;
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
      flex-grow: 1;
    }

    .recipe-footer {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding-top: 0.85rem;
      border-top: 1px solid var(--border-light);
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    .recipe-footer-meta {
      display: flex;
      gap: 0.75rem;
    }

    .recipe-footer-meta span {
      display: flex;
      align-items: center;
      gap: 0.25rem;
    }

    /* ==========================================================================
       7. INTERACTIVE MEAL PLANNER & CHEF TIPS
       ========================================================================== */
    .meal-planner-section {
      background: #FFFFFF;
      border-top: 1px solid var(--border);
      border-bottom: 1px solid var(--border);
    }

    .planner-card {
      background: var(--light-bg);
      border-radius: var(--radius-lg);
      padding: 2rem;
      border: 1px solid var(--border);
    }

    .day-selector {
      display: flex;
      gap: 0.5rem;
      overflow-x: auto;
      padding-bottom: 0.75rem;
      margin-bottom: 1.5rem;
      scrollbar-width: thin;
    }

    .day-tab {
      background: var(--surface);
      border: 1px solid var(--border);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-md);
      font-size: 0.85rem;
      font-weight: 700;
      cursor: pointer;
      white-space: nowrap;
      transition: all var(--transition-fast);
    }

    .day-tab.active {
      background: var(--secondary);
      color: white;
      border-color: var(--secondary);
    }

    .planner-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.25rem;
    }

    .meal-slot {
      background: var(--surface);
      padding: 1.25rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border);
    }

    .meal-slot-label {
      font-size: 0.75rem;
      font-weight: 800;
      color: var(--primary);
      text-transform: uppercase;
      margin-bottom: 0.5rem;
      display: block;
    }

    .meal-slot h4 {
      font-size: 1rem;
      font-family: var(--font-body);
      margin-bottom: 0.35rem;
    }

    .meal-slot p {
      font-size: 0.8rem;
      color: var(--text-muted);
    }

    /* ==========================================================================
       8. ADVERTISING TRANSPARENCY & EDITORIAL STANDARDS SECTION
       ========================================================================== */
    .ad-transparency-card {
      background: linear-gradient(135deg, #F8FAFC 0%, #EDF2F7 100%);
      border: 1px solid #CBD5E1;
      border-radius: var(--radius-md);
      padding: 1.5rem 2rem;
      margin: 3rem 0;
      position: relative;
    }

    .ad-transparency-card h4 {
      font-size: 1.05rem;
      font-family: var(--font-body);
      color: var(--dark);
      display: flex;
      align-items: center;
      gap: 0.5rem;
      margin-bottom: 0.5rem;
    }

    .ad-transparency-card p {
      font-size: 0.85rem;
      color: var(--text-muted);
      line-height: 1.55;
    }

    .ad-transparency-card a {
      color: var(--primary);
      font-weight: 600;
      text-decoration: underline;
    }

    /* Editorial & Test Kitchen Highlights */
    .editorial-grid {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 1.5rem;
      margin-top: 2rem;
    }

    .editorial-card {
      background: var(--surface);
      padding: 1.75rem;
      border-radius: var(--radius-md);
      border: 1px solid var(--border);
      transition: transform var(--transition-fast);
    }

    .editorial-card:hover {
      transform: translateY(-3px);
    }

    .editorial-card i {
      font-size: 1.8rem;
      color: var(--primary);
      margin-bottom: 1rem;
    }

    .editorial-card h3 {
      font-size: 1.15rem;
      margin-bottom: 0.5rem;
    }

    .editorial-card p {
      font-size: 0.85rem;
      color: var(--text-muted);
      line-height: 1.6;
    }

    /* ==========================================================================
       9. GOOGLE ADS COMPLIANCE & LEGAL POLICIES HUB (DEDICATED SECTION)
       ========================================================================== */
    .legal-hub-section {
      background: #0F172A;
      color: #E2E8F0;
      padding: 4.5rem 0;
      border-top: 1px solid rgba(255, 255, 255, 0.1);
    }

    .legal-hub-section h2 {
      color: #FFFFFF;
      font-size: 2rem;
    }

    .legal-hub-intro {
      color: #94A3B8;
      font-size: 0.95rem;
      max-width: 700px;
      margin-bottom: 2rem;
    }

    .policy-tabs-nav {
      display: flex;
      gap: 0.5rem;
      flex-wrap: wrap;
      margin-bottom: 2rem;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      padding-bottom: 0.5rem;
    }

    .policy-tab-btn {
      background: rgba(255, 255, 255, 0.05);
      color: #94A3B8;
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 0.55rem 1.1rem;
      border-radius: var(--radius-sm);
      font-size: 0.85rem;
      font-weight: 600;
      cursor: pointer;
      transition: all var(--transition-fast);
    }

    .policy-tab-btn:hover {
      background: rgba(255, 255, 255, 0.1);
      color: #FFFFFF;
    }

    .policy-tab-btn.active {
      background: var(--primary);
      color: #FFFFFF;
      border-color: var(--primary);
    }

    .policy-content-box {
      background: #1E293B;
      border-radius: var(--radius-md);
      padding: 2.2rem;
      border: 1px solid rgba(255, 255, 255, 0.08);
      max-height: 520px;
      overflow-y: auto;
      scrollbar-width: thin;
      scrollbar-color: rgba(255,255,255,0.2) transparent;
    }

    .policy-panel {
      display: none;
    }

    .policy-panel.active {
      display: block;
      animation: fadeIn 0.3s ease;
    }

    .policy-panel h3 {
      color: #FFFFFF;
      font-size: 1.4rem;
      margin-bottom: 0.5rem;
    }

    .policy-panel .policy-updated {
      font-size: 0.78rem;
      color: #94A3B8;
      margin-bottom: 1.25rem;
      display: block;
    }

    .policy-panel h4 {
      color: #F8FAFC;
      font-size: 1rem;
      margin: 1.5rem 0 0.5rem;
      font-family: var(--font-body);
      font-weight: 700;
    }

    .policy-panel p, .policy-panel ul {
      color: #CBD5E1;
      font-size: 0.88rem;
      line-height: 1.7;
      margin-bottom: 1rem;
    }

    .policy-panel ul {
      padding-left: 1.25rem;
    }

    .policy-panel li {
      margin-bottom: 0.4rem;
    }

    .policy-panel a {
      color: #38BDF8;
      text-decoration: underline;
    }

    .policy-table {
      width: 100%;
      border-collapse: collapse;
      margin: 1rem 0;
      font-size: 0.82rem;
      color: #CBD5E1;
    }

    .policy-table th, .policy-table td {
      border: 1px solid rgba(255, 255, 255, 0.1);
      padding: 0.6rem 0.8rem;
      text-align: left;
    }

    .policy-table th {
      background: rgba(255, 255, 255, 0.05);
      color: #FFFFFF;
    }

    /* ==========================================================================
       10. CONTACT US & NEWSLETTER SECTION
       ========================================================================== */
    .contact-section {
      background: var(--light-bg);
    }

    .contact-grid {
      display: grid;
      grid-template-columns: 1fr 1.1fr;
      gap: 3rem;
      background: var(--surface);
      border-radius: var(--radius-lg);
      padding: 3rem;
      box-shadow: var(--shadow-md);
      border: 1px solid var(--border);
    }

    .contact-info h3 {
      font-size: 1.8rem;
      margin-bottom: 1rem;
    }

    .contact-info p {
      color: var(--text-muted);
      font-size: 0.92rem;
      margin-bottom: 2rem;
    }

    .contact-channels {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }

    .channel-item {
      display: flex;
      align-items: flex-start;
      gap: 1rem;
    }

    .channel-icon {
      width: 42px;
      height: 42px;
      background: var(--primary-light);
      color: var(--primary);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.1rem;
      flex-shrink: 0;
    }

    .channel-text h4 {
      font-size: 0.95rem;
      font-family: var(--font-body);
      color: var(--dark);
    }

    .channel-text p {
      font-size: 0.82rem;
      color: var(--text-muted);
      margin-bottom: 0;
    }

    /* Form Styles */
    .form-group {
      margin-bottom: 1.25rem;
    }

    .form-group label {
      display: block;
      font-size: 0.85rem;
      font-weight: 600;
      color: var(--dark);
      margin-bottom: 0.4rem;
    }

    .form-control {
      width: 100%;
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      border: 1px solid var(--border);
      background: #FAFAFA;
      font-size: 0.9rem;
      color: var(--text-main);
      transition: all var(--transition-fast);
      outline: none;
    }

    .form-control:focus {
      border-color: var(--primary);
      background: #FFFFFF;
      box-shadow: 0 0 0 3px rgba(226, 88, 62, 0.15);
    }

    .form-grid {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 1rem;
    }

    .form-checkbox-label {
      display: flex;
      align-items: flex-start;
      gap: 0.5rem;
      font-size: 0.8rem;
      color: var(--text-muted);
      cursor: pointer;
    }

    .form-checkbox-label input {
      margin-top: 0.2rem;
    }

    .form-alert {
      padding: 0.75rem 1rem;
      border-radius: var(--radius-sm);
      font-size: 0.85rem;
      margin-top: 1rem;
      display: none;
    }

    .form-alert.success {
      background: var(--secondary-light);
      color: var(--secondary);
      border: 1px solid rgba(44, 94, 59, 0.2);
      display: block;
    }

    /* ==========================================================================
       11. FOOTER
       ========================================================================== */
    .footer {
      background: #0B1120;
      color: #94A3B8;
      padding: 4rem 0 1.5rem;
      border-top: 1px solid rgba(255, 255, 255, 0.05);
      font-size: 0.85rem;
    }

    .footer-grid {
      display: grid;
      grid-template-columns: 1.5fr 1fr 1fr 1.2fr;
      gap: 2.5rem;
      margin-bottom: 3rem;
    }

    .footer-col h4 {
      color: #FFFFFF;
      font-size: 1rem;
      font-family: var(--font-body);
      margin-bottom: 1.25rem;
    }

    .footer-links {
      list-style: none;
      display: flex;
      flex-direction: column;
      gap: 0.65rem;
    }

    .footer-links a {
      color: #94A3B8;
      transition: color var(--transition-fast);
    }

    .footer-links a:hover {
      color: #FFFFFF;
      padding-left: 3px;
    }

    .footer-disclaimer-box {
      background: rgba(255, 255, 255, 0.03);
      border: 1px solid rgba(255, 255, 255, 0.06);
      border-radius: var(--radius-sm);
      padding: 1.2rem;
      margin-bottom: 2rem;
      font-size: 0.78rem;
      line-height: 1.6;
      color: #64748B;
    }

    .footer-disclaimer-box strong {
      color: #94A3B8;
    }

    .footer-bottom {
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 1rem;
      padding-top: 1.5rem;
      border-top: 1px solid rgba(255, 255, 255, 0.06);
      font-size: 0.78rem;
    }

    .footer-bottom-links {
      display: flex;
      gap: 1.2rem;
      flex-wrap: wrap;
    }

    .footer-bottom-links a {
      color: #94A3B8;
    }

    .footer-bottom-links a:hover {
      color: var(--primary);
    }

    /* ==========================================================================
       12. INTERACTIVE RECIPE DETAIL MODAL
       ========================================================================== */
    .modal-overlay {
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(15, 23, 42, 0.75);
      backdrop-filter: blur(6px);
      -webkit-backdrop-filter: blur(6px);
      z-index: 2000;
      display: flex;
      align-items: center;
      justify-content: center;
      opacity: 0;
      visibility: hidden;
      transition: all var(--transition-normal);
      padding: 1rem;
    }

    .modal-overlay.active {
      opacity: 1;
      visibility: visible;
    }

    .modal-card {
      background: var(--surface);
      width: 100%;
      max-width: 850px;
      max-height: 90vh;
      border-radius: var(--radius-lg);
      overflow-y: auto;
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.25);
      position: relative;
      transform: scale(0.95);
      transition: transform var(--transition-normal);
    }

    .modal-overlay.active .modal-card {
      transform: scale(1);
    }

    .modal-close-btn {
      position: absolute;
      top: 1rem;
      right: 1rem;
      width: 38px;
      height: 38px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.9);
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      z-index: 10;
      font-size: 1.1rem;
      color: var(--dark);
      transition: all var(--transition-fast);
    }

    .modal-close-btn:hover {
      background: #ef4444;
      color: white;
      border-color: #ef4444;
    }

    .modal-hero-img {
      height: 280px;
      width: 100%;
      position: relative;
    }

    .modal-hero-img img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .modal-body {
      padding: 2rem;
    }

    .modal-meta-bar {
      display: flex;
      flex-wrap: wrap;
      gap: 1.2rem;
      padding: 1rem 0;
      border-top: 1px solid var(--border-light);
      border-bottom: 1px solid var(--border-light);
      margin: 1.25rem 0 1.75rem;
      font-size: 0.88rem;
      color: var(--text-muted);
    }

    .servings-control {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      background: var(--light-bg);
      padding: 0.4rem 0.8rem;
      border-radius: var(--radius-full);
      border: 1px solid var(--border);
    }

    .servings-btn {
      width: 26px;
      height: 26px;
      border-radius: 50%;
      background: var(--surface);
      border: 1px solid var(--border);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
    }

    .servings-btn:hover {
      background: var(--primary);
      color: white;
      border-color: var(--primary);
    }

    .recipe-modal-grid {
      display: grid;
      grid-template-columns: 1fr 1.3fr;
      gap: 2rem;
    }

    .ingredient-list, .instruction-list {
      list-style: none;
    }

    .ingredient-item {
      display: flex;
      align-items: center;
      padding: 0.55rem 0;
      border-bottom: 1px dashed var(--border);
      font-size: 0.9rem;
    }

    .ingredient-item input[type="checkbox"] {
      margin-right: 0.75rem;
      accent-color: var(--primary);
    }

    .instruction-step {
      display: flex;
      gap: 0.85rem;
      margin-bottom: 1.25rem;
      font-size: 0.9rem;
      line-height: 1.6;
    }

    .step-number {
      width: 28px;
      height: 28px;
      background: var(--primary-light);
      color: var(--primary);
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-weight: 700;
      font-size: 0.8rem;
      flex-shrink: 0;
    }

    /* Cooking Timer Widget */
    .timer-widget {
      background: linear-gradient(135deg, var(--dark) 0%, #1e293b 100%);
      color: white;
      padding: 1.25rem;
      border-radius: var(--radius-md);
      margin-top: 1.5rem;
      display: flex;
      align-items: center;
      justify-content: space-between;
      flex-wrap: wrap;
      gap: 1rem;
    }

    .timer-display {
      font-size: 1.6rem;
      font-weight: 800;
      letter-spacing: 2px;
      font-family: monospace;
      color: var(--accent);
    }

    .timer-controls {
      display: flex;
      gap: 0.5rem;
    }

    .timer-btn {
      padding: 0.4rem 0.8rem;
      border-radius: var(--radius-sm);
      border: none;
      font-size: 0.8rem;
      font-weight: 600;
      cursor: pointer;
    }

    /* ==========================================================================
       13. COOKIE CONSENT BANNER & SETTINGS MODAL
       ========================================================================== */
    .cookie-banner {
      position: fixed;
      bottom: 1.5rem;
      left: 1.5rem;
      right: 1.5rem;
      max-width: 960px;
      margin: 0 auto;
      background: #0F172A;
      color: #E2E8F0;
      padding: 1.25rem 1.75rem;
      border-radius: var(--radius-md);
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.4);
      z-index: 9999;
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1.5rem;
      border: 1px solid rgba(255, 255, 255, 0.1);
      transform: translateY(120%);
      transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
    }

    .cookie-banner.show {
      transform: translateY(0);
    }

    .cookie-text {
      font-size: 0.82rem;
      line-height: 1.5;
    }

    .cookie-text a {
      color: #38BDF8;
      text-decoration: underline;
    }

    .cookie-actions {
      display: flex;
      gap: 0.6rem;
      flex-shrink: 0;
    }

    .cookie-btn-accept {
      background: var(--primary);
      color: white;
      border: none;
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 700;
      font-size: 0.82rem;
      cursor: pointer;
    }

    .cookie-btn-decline {
      background: rgba(255, 255, 255, 0.1);
      color: #cbd5e1;
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 0.5rem 1rem;
      border-radius: var(--radius-full);
      font-weight: 600;
      font-size: 0.82rem;
      cursor: pointer;
    }

    .cookie-btn-decline:hover {
      background: rgba(255, 255, 255, 0.2);
      color: white;
    }

    /* Floating Cookie Preferences Trigger Button */
    .cookie-preferences-trigger {
      position: fixed;
      bottom: 1.25rem;
      right: 1.25rem;
      background: var(--dark);
      color: white;
      border: 1px solid rgba(255, 255, 255, 0.2);
      padding: 0.45rem 0.85rem;
      border-radius: var(--radius-full);
      font-size: 0.75rem;
      font-weight: 600;
      display: flex;
      align-items: center;
      gap: 0.4rem;
      cursor: pointer;
      box-shadow: var(--shadow-lg);
      z-index: 999;
      opacity: 0.85;
      transition: all var(--transition-fast);
    }

    .cookie-preferences-trigger:hover {
      opacity: 1;
      transform: scale(1.05);
      background: var(--primary);
      border-color: var(--primary);
    }

    /* Print Styles */
    @media print {
      .header, .top-policy-bar, .hero, .filter-bar, .meal-planner-section, 
      .editorial-section, .legal-hub-section, .contact-section, .footer, 
      .cookie-banner, .cookie-preferences-trigger, .modal-close-btn, .timer-widget {
        display: none !important;
      }
      .modal-overlay {
        position: static;
        background: none;
        padding: 0;
        visibility: visible;
        opacity: 1;
      }
      .modal-card {
        box-shadow: none;
        max-width: 100%;
        max-height: none;
      }
    }

    /* ==========================================================================
       14. RESPONSIVE BREAKPOINTS
       ========================================================================== */
    @media (max-width: 1024px) {
      .hero-grid, .spotlight-card, .contact-grid {
        grid-template-columns: 1fr;
      }
      .footer-grid {
        grid-template-columns: 1fr 1fr;
      }
      .editorial-grid, .planner-grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 768px) {
      .hero-title {
        font-size: 2.2rem;
      }
      .nav-menu {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        width: 100%;
        background: var(--surface);
        flex-direction: column;
        padding: 1.5rem;
        box-shadow: var(--shadow-lg);
        border-bottom: 1px solid var(--border);
        gap: 1rem;
      }
      .nav-menu.open {
        display: flex;
      }
      .mobile-menu-btn {
        display: block;
      }
      .recipe-modal-grid {
        grid-template-columns: 1fr;
      }
      .editorial-grid, .planner-grid {
        grid-template-columns: 1fr;
      }
      .footer-grid {
        grid-template-columns: 1fr;
      }
      .cookie-banner {
        flex-direction: column;
        align-items: flex-start;
      }
      .form-grid {
        grid-template-columns: 1fr;
      }
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(6px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>
<body>

  <!-- ==========================================================================
       TOP GOOGLE ADS & COMPLIANCE POLICY NOTICE BAR
       ========================================================================== -->
  <aside class="top-policy-bar" aria-label="Regulatory Disclosures">
    <div class="container">
      <div>
        <i class="fa-solid fa-shield-halved text-accent"></i>
        <span><strong>Ad & Editorial Transparency:</strong> GoGo Recipe complies with Google Ads policies, GDPR & FTC Guidelines.</span>
      </div>
      <div class="top-policy-links">
        <a href="#legal-hub" onclick="switchPolicyTab('privacy')">Privacy Policy</a>
        <a href="#legal-hub" onclick="switchPolicyTab('terms')">Terms of Service</a>
        <a href="#legal-hub" onclick="switchPolicyTab('disclaimer')">Ad & Affiliate Disclosures</a>
        <a href="#legal-hub" onclick="switchPolicyTab('cookies')">Cookie Policy</a>
      </div>
    </div>
  </aside>

  <!-- ==========================================================================
       NAVIGATION HEADER
       ========================================================================== -->
  <header class="header" id="mainHeader">
    <div class="container">
      <div class="nav-wrapper">
        <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/" class="logo" aria-label="GoGo Recipe Home">
          <div class="logo-icon"><i class="fa-solid fa-utensils"></i></div>
          <div>GoGo<span>Recipe</span></div>
        </a>

        <nav>
          <ul class="nav-menu" id="navMenu">
            <li><a href="#home" class="nav-link active">Home</a></li>
            <li><a href="#recipes" class="nav-link">Explore Recipes</a></li>
            <li><a href="#spotlight" class="nav-link">Chef's Pick</a></li>
            <li><a href="#meal-planner" class="nav-link">Meal Planner</a></li>
            <li><a href="#about" class="nav-link">About Us</a></li>
            <li><a href="#legal-hub" class="nav-link">Policies & Disclaimers</a></li>
            <li><a href="#contact" class="nav-link">Contact Us</a></li>
          </ul>
        </nav>

        <div class="nav-actions">
          <a href="#recipes" class="btn btn-primary" style="padding: 0.55rem 1.1rem; font-size: 0.88rem;">
            <i class="fa-solid fa-fire"></i> Find Recipes
          </a>
          <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Toggle navigation menu">
            <i class="fa-solid fa-bars"></i>
          </button>
        </div>
      </div>
    </div>
  </header>

  <main>
    <!-- ==========================================================================
         HERO SECTION WITH DYNAMIC SEARCH
         ========================================================================== -->
    <section class="hero" id="home">
      <div class="container">
        <div class="hero-grid">
          <div class="hero-content">
            <div class="badge badge-primary hero-badge">
              <i class="fa-solid fa-sparkles"></i> 100% Tested In Our Test Kitchen
            </div>
            <h1 class="hero-title">
              Quick, Nutritious & Delicious Recipes for <span class="text-primary">Everyday Chefs</span>.
            </h1>
            <p class="hero-subtitle">
              Say goodbye to dinnertime stress. Explore over 500+ chef-approved 15-minute meals, wholesome family dinners, and balanced nutrition guides for every lifestyle.
            </p>

            <!-- Search Box -->
            <div class="hero-search-box">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" id="recipeSearchInput" placeholder="Search by ingredient, cuisine, or recipe name (e.g., Salmon, Pasta, Keto)..." aria-label="Search recipes">
              <button class="btn btn-primary" onclick="triggerSearch()" style="padding: 0.6rem 1.25rem;">Search</button>
            </div>

            <!-- Trending Tags -->
            <div class="trending-tags">
              <span>Trending:</span>
              <span class="trending-tag" onclick="filterByTag('Quick & Easy')">⚡ 15-Min Meals</span>
              <span class="trending-tag" onclick="filterByTag('Healthy')">🥗 High Protein</span>
              <span class="trending-tag" onclick="filterByTag('Comfort')">🍝 Italian Pasta</span>
              <span class="trending-tag" onclick="filterByTag('Vegetarian')">🥑 Plant Based</span>
              <span class="trending-tag" onclick="filterByTag('Desserts')">🍰 Low Sugar</span>
            </div>

            <!-- Key Metrics -->
            <div class="hero-metrics-bar">
              <div class="metric-item">
                <h4>500+</h4>
                <p>Triple-Tested Recipes</p>
              </div>
              <div class="metric-item">
                <h4>4.9 ★</h4>
                <p>Reader Satisfaction</p>
              </div>
              <div class="metric-item">
                <h4>100%</h4>
                <p>Free Culinary Access</p>
              </div>
            </div>
          </div>

          <!-- Hero Image & Interactive Card -->
          <div class="hero-card-stack">
            <div class="hero-main-card">
              <div class="hero-img-wrap">
                <img src="https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80" alt="Fresh Mediterranean Power Bowl" loading="lazy">
                <div class="hero-float-pill">
                  <i class="fa-solid fa-clock"></i> Ready in 15 mins
                </div>
              </div>
              <div class="hero-card-content">
                <div class="badge badge-secondary" style="margin-bottom: 0.5rem;">Healthy Favorite</div>
                <h3 style="font-size: 1.35rem; margin-bottom: 0.4rem;">Mediterranean Quinoa Buddha Bowl</h3>
                <p style="font-size: 0.85rem; color: var(--text-muted); margin-bottom: 1rem;">
                  Packed with crisp cucumbers, cherry tomatoes, Kalamata olives, creamy feta, and lemon herb dressing.
                </p>
                <div style="display: flex; justify-content: space-between; align-items: center;">
                  <span style="font-size: 0.85rem; font-weight: 700; color: var(--secondary);">380 kcal · 18g Protein</span>
                  <button class="btn btn-outline-primary" style="padding: 0.4rem 0.9rem; font-size: 0.82rem;" onclick="openRecipeModal(1)">View Recipe</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         FEATURED SPOTLIGHT RECIPE
         ========================================================================== -->
    <section class="section-py" id="spotlight" style="background: var(--surface);">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-accent" style="margin-bottom: 0.5rem;">Chef's Signature Selection</div>
          <h2>Today's Culinary Spotlight</h2>
          <p>Hand-picked and perfected by our executive test kitchen staff for foolproof weeknight cooking.</p>
        </div>

        <div class="spotlight-card">
          <div class="spotlight-img">
            <img src="https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=900&q=80" alt="Creamy Tuscan Garlic Salmon" loading="lazy">
          </div>
          <div class="spotlight-content">
            <div class="badge badge-primary">Weeknight Gourmet</div>
            <h3 style="font-size: 1.85rem; margin: 0.5rem 0;">Creamy Tuscan Garlic Butter Salmon</h3>
            <p style="color: var(--text-muted); font-size: 0.92rem; margin-bottom: 1.25rem;">
              Flaky pan-seared wild salmon bathed in a velvety sauce of heavy cream, sun-dried tomatoes, aromatic garlic, and fresh baby spinach. Ready in just 25 minutes.
            </p>

            <div class="spotlight-meta">
              <span><i class="fa-regular fa-clock text-primary"></i> <strong>Prep:</strong> 10 min</span>
              <span><i class="fa-solid fa-fire text-accent"></i> <strong>Cook:</strong> 15 min</span>
              <span><i class="fa-solid fa-user-group text-secondary"></i> <strong>Serves:</strong> 4</span>
              <span><i class="fa-solid fa-star text-accent"></i> <strong>Rating:</strong> 4.98 (340 reviews)</span>
            </div>

            <div class="spotlight-nutrition-grid">
              <div class="nutri-box">
                <div class="value">480</div>
                <div class="label">Calories</div>
              </div>
              <div class="nutri-box">
                <div class="value">38g</div>
                <div class="label">Protein</div>
              </div>
              <div class="nutri-box">
                <div class="value">32g</div>
                <div class="label">Healthy Fats</div>
              </div>
              <div class="nutri-box">
                <div class="value">6g</div>
                <div class="label">Net Carbs</div>
              </div>
            </div>

            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
              <button class="btn btn-primary" onclick="openRecipeModal(0)">
                <i class="fa-solid fa-book-open"></i> Full Recipe & Instructions
              </button>
              <button class="btn btn-secondary" onclick="saveToFavorites(0)">
                <i class="fa-regular fa-bookmark"></i> Save to Bookmarks
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         RECIPE EXPLORER & INTERACTIVE GRID
         ========================================================================== -->
    <section class="section-py" id="recipes">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-secondary" style="margin-bottom: 0.5rem;">Curated Collections</div>
          <h2>Explore Triple-Tested Recipes</h2>
          <p>Filter by diet, preparation time, or meal category. Every recipe is nutritionally verified.</p>
        </div>

        <!-- Filter Navigation -->
        <div class="filter-bar" id="categoryFilters">
          <button class="filter-btn active" data-category="all"><i class="fa-solid fa-border-all"></i> All Recipes</button>
          <button class="filter-btn" data-category="Quick & Easy"><i class="fa-solid fa-bolt"></i> 15-Min Meals</button>
          <button class="filter-btn" data-category="Healthy"><i class="fa-solid fa-seedling"></i> Healthy & Bowls</button>
          <button class="filter-btn" data-category="Comfort"><i class="fa-solid fa-utensils"></i> Comfort Dinners</button>
          <button class="filter-btn" data-category="Vegetarian"><i class="fa-solid fa-leaf"></i> Plant-Based</button>
          <button class="filter-btn" data-category="Desserts"><i class="fa-solid fa-cookie"></i> Sweet Treats</button>
        </div>

        <!-- Search Status / Result Count -->
        <div id="recipeResultCount" style="margin-bottom: 1.5rem; font-size: 0.9rem; color: var(--text-muted); font-weight: 500;">
          Showing <span id="visibleCount" style="font-weight: 700; color: var(--dark);">8</span> tested recipes
        </div>

        <!-- Grid Cards Container -->
        <div class="recipes-grid" id="recipesGrid">
          <!-- Dynamically Injected by JavaScript -->
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         INTERACTIVE WEEKLY MEAL PLANNER
         ========================================================================== -->
    <section class="section-py meal-planner-section" id="meal-planner">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-primary" style="margin-bottom: 0.5rem;">Smart Nutrition</div>
          <h2>Weekly Meal Planner & Quick Prep</h2>
          <p>Organize balanced lunches and dinners effortlessly with our test-kitchen menu planner.</p>
        </div>

        <div class="planner-card">
          <div class="day-selector" id="daySelector">
            <button class="day-tab active" onclick="switchDay('Monday')">Monday</button>
            <button class="day-tab" onclick="switchDay('Tuesday')">Tuesday</button>
            <button class="day-tab" onclick="switchDay('Wednesday')">Wednesday</button>
            <button class="day-tab" onclick="switchDay('Thursday')">Thursday</button>
            <button class="day-tab" onclick="switchDay('Friday')">Friday</button>
            <button class="day-tab" onclick="switchDay('Saturday')">Saturday</button>
            <button class="day-tab" onclick="switchDay('Sunday')">Sunday</button>
          </div>

          <div class="planner-grid" id="plannerContent">
            <!-- Dynamically populated -->
          </div>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         EDITORIAL INTEGRITY & ABOUT US SECTION
         ========================================================================== -->
    <section class="section-py" id="about" style="background: var(--surface);">
      <div class="container">
        <div class="section-header">
          <div class="badge badge-secondary" style="margin-bottom: 0.5rem;">Our Test Kitchen Guarantee</div>
          <h2>About GoGo Recipe & Our Editorial Mission</h2>
          <p>Founded on transparency, food safety, and authentic culinary passion.</p>
        </div>

        <div class="editorial-grid">
          <div class="editorial-card">
            <i class="fa-solid fa-kitchen-set"></i>
            <h3>Triple-Tested Method</h3>
            <p>Every single recipe on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> is cooked and tested 3 times across standard home kitchen equipment to guarantee consistent, foolproof outcomes for you.</p>
          </div>

          <div class="editorial-card">
            <i class="fa-solid fa-heart-pulse"></i>
            <h3>Nutrition Accuracy</h3>
            <p>Our nutrition estimates are calculated using the USDA FoodData Central database. While calculated carefully, estimates are provided for informational guidance only.</p>
          </div>

          <div class="editorial-card">
            <i class="fa-solid fa-scale-balanced"></i>
            <h3>Independent & Objective</h3>
            <p>We maintain strict editorial independence. Sponsored ingredients or advertisements are always clearly marked, ensuring uncompromised culinary recommendations.</p>
          </div>
        </div>

        <!-- Google Ads & Affiliate Transparency Notice Box -->
        <div class="ad-transparency-card">
          <h4><i class="fa-solid fa-circle-info text-primary"></i> Transparency & Advertising Disclosure (FTC & Google Compliance)</h4>
          <p>
            <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> is committed to full transparency under the Federal Trade Commission (FTC) guidelines and Google AdWords Publisher Policies. We may host advertisements supplied by Google and third-party advertising networks, and participate in affiliate marketing programs. This means we may earn a small referral commission when you purchase kitchen essentials or ingredients through our links, at absolutely zero additional cost to you. Advertised content and commercial sponsors never dictate our editorial recipes. For questions or details, please visit our <a href="#legal-hub" onclick="switchPolicyTab('disclaimer')">Advertising & Affiliate Disclosure Policy</a>.
          </p>
        </div>
      </div>
    </section>

    <!-- ==========================================================================
         GOOGLE ADWORDS & LEGAL POLICIES HUB (FULL COMPREHENSIVE SUITE)
         ========================================================================== -->
    <section class="legal-hub-section" id="legal-hub">
      <div class="container">
        <h2>Legal, Compliance & Policy Center</h2>
        <p class="legal-hub-intro">
          Review our comprehensive policies governing privacy, terms of use, advertising disclosures, food safety, cookies, and copyright compliance. Updated for full compliance with Google Ads policies, GDPR, and CCPA standards.
        </p>

        <!-- Policy Navigation Tabs -->
        <div class="policy-tabs-nav">
          <button class="policy-tab-btn active" onclick="switchPolicyTab('privacy')"><i class="fa-solid fa-lock"></i> Privacy Policy</button>
          <button class="policy-tab-btn" onclick="switchPolicyTab('terms')"><i class="fa-solid fa-file-contract"></i> Terms of Service</button>
          <button class="policy-tab-btn" onclick="switchPolicyTab('disclaimer')"><i class="fa-solid fa-triangle-exclamation"></i> Disclaimers & Disclosures</button>
          <button class="policy-tab-btn" onclick="switchPolicyTab('cookies')"><i class="fa-solid fa-cookie-bite"></i> Cookie Policy</button>
          <button class="policy-tab-btn" onclick="switchPolicyTab('dmca')"><i class="fa-solid fa-copyright"></i> DMCA & Copyright</button>
          <button class="policy-tab-btn" onclick="switchPolicyTab('editorial')"><i class="fa-solid fa-pen-nib"></i> Editorial Standards</button>
        </div>

        <!-- Policy Content Box -->
        <div class="policy-content-box">
          
          <!-- 1. PRIVACY POLICY -->
          <div class="policy-panel active" id="policy-privacy">
            <h3>Privacy Policy</h3>
            <span class="policy-updated">Effective Date: January 1, 2026 | Last Updated: February 2026 | Domain: gogorecipe-deb35a23fd33.herokuapp.com</span>
            
            <p>Welcome to <strong>GoGo Recipe</strong> ("we," "our," or "us"). We respect your privacy and are committed to protecting personal information you may provide while visiting <strong>https://gogorecipe-deb35a23fd33.herokuapp.com</strong>. This Privacy Policy explains our practices regarding the collection, use, disclosure, and safeguarding of your data in accordance with the General Data Protection Regulation (GDPR), California Consumer Privacy Act (CCPA), and Google Ads/AdSense publisher guidelines.</p>

            <h4>1. Information We Collect</h4>
            <p>We may collect information about you in a variety of ways:</p>
            <ul>
              <li><strong>Log & Analytics Data:</strong> When you access our website, our servers automatically log standard technical data, including your IP address, browser type, operating system, referring URLs, device identifiers, and timestamps.</li>
              <li><strong>Personal Data Voluntarily Provided:</strong> When you contact our support desk or subscribe to our newsletter, you may provide your name and email address.</li>
              <li><strong>Cookies & Tracking Technologies:</strong> We use cookies, web beacons, and tracking pixels to understand website traffic, personalize culinary content, and deliver relevant advertisements.</li>
            </ul>

            <h4>2. Google Advertising & Third-Party Cookies (Google Ads / AdSense)</h4>
            <p>Third-party vendors, including Google, use cookies to serve ads based on a user's prior visits to our website or other websites. Google's use of advertising cookies enables it and its partners to serve ads to our users based on their visit to <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> and/or other sites on the Internet.</p>
            <ul>
              <li>Users may opt out of personalized advertising by visiting <a href="https://www.google.com/settings/ads" target="_blank" rel="noopener noreferrer">Google Ads Settings</a>.</li>
              <li>Alternatively, you can opt out of a third-party vendor's use of cookies for personalized advertising by visiting <a href="https://www.aboutads.info/choices/" target="_blank" rel="noopener noreferrer">www.aboutads.info</a> or <a href="https://optout.networkadvertising.org/" target="_blank" rel="noopener noreferrer">Network Advertising Initiative</a>.</li>
            </ul>

            <h4>3. How We Use Your Information</h4>
            <p>We use collected data to maintain, monitor, and improve the speed, design, and culinary utility of <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong>; respond to user feedback; deliver newsletter recipes; detect and prevent fraud; and serve non-intrusive, relevant advertisements.</p>

            <h4>4. GDPR & CCPA Consumer Rights</h4>
            <p>Depending on your jurisdiction (such as the EU/EEA or California), you hold rights to: request access to personal data; request rectification or deletion of your data; object to or restrict processing; and request data portability. California residents also have the right to request notice of categories of personal information collected and request non-discrimination for exercising privacy rights. We do NOT sell your personal information.</p>

            <h4>5. Contact Our Data Protection Officer</h4>
            <p>If you have any questions or wish to exercise your privacy rights, please reach out to our privacy compliance desk at <a href="mailto:support@gogorecipe-deb35a23fd33.herokuapp.com">support@gogorecipe-deb35a23fd33.herokuapp.com</a>.</p>
          </div>

          <!-- 2. TERMS OF SERVICE -->
          <div class="policy-panel" id="policy-terms">
            <h3>Terms of Service</h3>
            <span class="policy-updated">Effective Date: January 1, 2026 | Last Updated: February 2026</span>
            
            <p>By accessing and utilizing <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong>, you agree to be bound by these Terms of Service. If you do not agree with any part of these terms, you must refrain from using the site.</p>

            <h4>1. Intellectual Property & Permitted Use</h4>
            <p>All recipes, text, original photography, graphics, and code on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> are the intellectual property of GoGo Recipe unless otherwise stated. You are granted a limited, personal, non-commercial license to view and print recipes for your private home cooking. Republication, distribution, web scraping, or commercial exploitation without prior written consent is strictly prohibited.</p>

            <h4>2. User Conduct & Submissions</h4>
            <p>When posting reviews, comments, or recipe adjustments, you agree not to submit unlawful, threatening, defamatory, or infringing content. We reserve the right to review, edit, or remove any user commentary at our sole discretion.</p>

            <h4>3. Limitation of Liability</h4>
            <p>GoGo Recipe and its authors provide all recipes, advice, and tools "as is" and "as available". We shall not be liable for any direct, indirect, incidental, or consequential damages resulting from your use of, or inability to use, this website.</p>
          </div>

          <!-- 3. DISCLAIMER & DISCLOSURES -->
          <div class="policy-panel" id="policy-disclaimer">
            <h3>Disclaimers & Disclosures</h3>
            <span class="policy-updated">Compliance with FTC 16 CFR Part 255 & Food Safety Standards</span>

            <h4>1. Culinary & Recipe Accuracy Disclaimer</h4>
            <p>All recipes on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> have been developed and tested in good faith. However, individual cooking outcomes may vary depending on altitude, oven calibration, ingredient freshness, brand differences, and cooking skills. Users are responsible for exercising safe food preparation practices.</p>

            <h4>2. Health, Nutritional & Allergen Medical Disclaimer</h4>
            <p><strong>Informational Purposes Only:</strong> The nutritional information (calories, macronutrients) presented on this site is calculated via automated nutritional software and estimates. It is not intended as medical, dietary, or nutritional advice. Readers with severe food allergies (such as nuts, dairy, gluten, shellfish), medical conditions (such as diabetes, hypertension), or dietary restrictions must independently verify ingredient labels and consult a certified healthcare professional or registered dietitian.</p>

            <h4>3. Food Safety Guidelines (FDA/USDA Standard)</h4>
            <p>Users must adhere to proper food safety guidelines, including safe internal cooking temperatures (e.g., poultry 165°F / 74°C; ground meats 160°F / 71°C; seafood 145°F / 63°C), preventing cross-contamination between raw meats and ready-to-eat foods, and proper refrigeration.</p>

            <h4>4. FTC Affiliate Disclosure & Sponsored Content</h4>
            <p>In accordance with FTC guidelines, please assume that links on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> may be affiliate links. If you click a product link and make a purchase, we may receive a small commission from the merchant at no additional cost to you. We only recommend kitchen tools and ingredients that we genuinely use and trust in our test kitchen.</p>
          </div>

          <!-- 4. COOKIE POLICY -->
          <div class="policy-panel" id="policy-cookies">
            <h3>Cookie Policy</h3>
            <span class="policy-updated">Last Updated: February 2026</span>

            <p>This Cookie Policy explains how <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> uses cookies and similar tracking technologies when you browse our site.</p>

            <table class="policy-table">
              <thead>
                <tr>
                  <th>Cookie Type</th>
                  <th>Purpose</th>
                  <th>Default Status</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><strong>Strictly Necessary</strong></td>
                  <td>Essential for basic site navigation, security, and remembering your cookie preferences.</td>
                  <td>Always Active</td>
                </tr>
                <tr>
                  <td><strong>Performance & Analytics</strong></td>
                  <td>Measures traffic patterns and page load speed via Google Analytics 4 to improve content.</td>
                  <td>User Optional</td>
                </tr>
                <tr>
                  <td><strong>Targeting & Advertising</strong></td>
                  <td>Used by Google Ads and advertising partners to deliver tailored advertisements.</td>
                  <td>User Optional</td>
                </tr>
              </tbody>
            </table>

            <h4>Managing Cookies in Your Browser</h4>
            <p>You can adjust cookie settings at any time using our interactive <a href="javascript:void(0)" onclick="openCookieManager()">Cookie Settings Manager</a> or directly via your web browser settings (Chrome, Safari, Firefox, Edge). Note that disabling certain cookies may affect page functionality.</p>
          </div>

          <!-- 5. DMCA & COPYRIGHT -->
          <div class="policy-panel" id="policy-dmca">
            <h3>DMCA & Copyright Policy</h3>
            <span class="policy-updated">Digital Millennium Copyright Act Notice</span>

            <p>GoGo Recipe respects the intellectual property rights of creators. If you believe your copyrighted material has been used on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> in a manner that constitutes copyright infringement, please submit a formal DMCA notice to our designated Copyright Agent.</p>

            <h4>Required Information in Takedown Notice:</h4>
            <ul>
              <li>Identification of the copyrighted work claimed to be infringed.</li>
              <li>The exact URL or location on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong> of the allegedly infringing material.</li>
              <li>Your contact details: full legal name, physical address, phone number, and email.</li>
              <li>A statement of good faith belief that the disputed use is not authorized.</li>
              <li>A physical or electronic signature of the authorized copyright holder.</li>
            </ul>
            <p>Send all DMCA notifications to: <a href="mailto:dmca@gogorecipe-deb35a23fd33.herokuapp.com">dmca@gogorecipe-deb35a23fd33.herokuapp.com</a>.</p>
          </div>

          <!-- 6. EDITORIAL STANDARDS -->
          <div class="policy-panel" id="policy-editorial">
            <h3>Editorial Standards & Test Kitchen Integrity</h3>
            <span class="policy-updated">Our Commitment to Culinary Excellence</span>

            <p>At GoGo Recipe, our mission is to make home cooking joyful, reliable, and accessible. Our editorial guidelines include:</p>
            <ul>
              <li><strong>Rigorous Testing:</strong> No recipe is published without thorough evaluation for flavor balance, preparation efficiency, and ingredient availability.</li>
              <li><strong>Correction Policy:</strong> If a typo, ingredient clarification, or measurement error is identified, we update the recipe immediately with an explanatory changelog note.</li>
              <li><strong>Author Transparency:</strong> All articles and recipes feature verified culinary author attribution and direct contact channels.</li>
            </ul>
          </div>

        </div>
      </div>
    </section>

    <!-- ==========================================================================
         CONTACT US & FEEDBACK SECTION
         ========================================================================== -->
    <section class="section-py contact-section" id="contact">
      <div class="container">
        <div class="contact-grid">
          
          <!-- Contact Info -->
          <div class="contact-info">
            <div class="badge badge-primary" style="margin-bottom: 0.5rem;">Get In Touch</div>
            <h3>We Love Hearing From Home Chefs</h3>
            <p>Have a recipe question, culinary partnership proposal, feedback on our test kitchen dishes, or need assistance with policy inquiries? Reach out to our dedicated team.</p>

            <div class="contact-channels">
              <div class="channel-item">
                <div class="channel-icon"><i class="fa-regular fa-envelope"></i></div>
                <div class="channel-text">
                  <h4>Email Support</h4>
                  <p><a href="mailto:support@gogorecipe-deb35a23fd33.herokuapp.com" style="color: var(--primary); font-weight: 600;">support@gogorecipe-deb35a23fd33.herokuapp.com</a></p>
                  <p style="font-size: 0.75rem;">Typical response time: Within 24-48 business hours.</p>
                </div>
              </div>

              <div class="channel-item">
                <div class="channel-icon"><i class="fa-solid fa-building"></i></div>
                <div class="channel-text">
                  <h4>Editorial & Test Kitchen Office</h4>
                  <p>GoGo Recipe Digital Media Ltd.</p>
                  <p>Website: <a href="https://gogorecipe-deb35a23fd33.herokuapp.com">https://gogorecipe-deb35a23fd33.herokuapp.com</a></p>
                </div>
              </div>

              <div class="channel-item">
                <div class="channel-icon"><i class="fa-solid fa-shield-check"></i></div>
                <div class="channel-text">
                  <h4>Compliance & Privacy Inquiries</h4>
                  <p><a href="mailto:compliance@gogorecipe-deb35a23fd33.herokuapp.com" style="color: var(--primary);">compliance@gogorecipe-deb35a23fd33.herokuapp.com</a></p>
                </div>
              </div>
            </div>
          </div>

          <!-- Contact Form -->
          <div class="contact-form-card">
            <form id="contactForm" onsubmit="handleContactSubmit(event)">
              <div class="form-grid">
                <div class="form-group">
                  <label for="contactName">Your Name *</label>
                  <input type="text" id="contactName" class="form-control" placeholder="Jane Doe" required>
                </div>
                <div class="form-group">
                  <label for="contactEmail">Your Email *</label>
                  <input type="email" id="contactEmail" class="form-control" placeholder="jane@example.com" required>
                </div>
              </div>

              <div class="form-group">
                <label for="contactSubject">Inquiry Subject *</label>
                <select id="contactSubject" class="form-control" required>
                  <option value="Recipe Question">Recipe Question / Feedback</option>
                  <option value="Policy or Privacy Inquiry">Privacy / Cookie / Policy Inquiry</option>
                  <option value="Advertising / Business Inquiry">Google Ads / Partnership Inquiry</option>
                  <option value="DMCA / Copyright">DMCA / Copyright Notice</option>
                  <option value="Other">Other Inquiry</option>
                </select>
              </div>

              <div class="form-group">
                <label for="contactMessage">Your Message *</label>
                <textarea id="contactMessage" rows="4" class="form-control" placeholder="How can our test kitchen team help you today?" required></textarea>
              </div>

              <div class="form-group">
                <label class="form-checkbox-label">
                  <input type="checkbox" id="contactConsent" required>
                  <span>I agree to the <a href="#legal-hub" onclick="switchPolicyTab('privacy')" style="color: var(--primary); text-decoration: underline;">Privacy Policy</a> and consent to having GoGo Recipe process my email to respond.</span>
                </label>
              </div>

              <button type="submit" class="btn btn-primary" style="width: 100%;">
                <i class="fa-regular fa-paper-plane"></i> Send Message
              </button>

              <div class="form-alert" id="contactAlert"></div>
            </form>
          </div>

        </div>
      </div>
    </section>
  </main>

  <!-- ==========================================================================
       FOOTER
       ========================================================================== -->
  <footer class="footer">
    <div class="container">
      <div class="footer-grid">
        
        <!-- Brand Summary -->
        <div class="footer-col">
          <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/" class="logo" style="color: #FFFFFF; margin-bottom: 1rem; display: inline-flex;">
            <div class="logo-icon"><i class="fa-solid fa-utensils"></i></div>
            <div style="color: #FFFFFF;">GoGo<span style="color: var(--primary);">Recipe</span></div>
          </a>
          <p style="color: #94A3B8; font-size: 0.85rem; line-height: 1.6; margin-bottom: 1.25rem;">
            Empowering home cooks with simple, delicious, and triple-tested everyday meals. Fresh culinary ideas from our test kitchen straight to your table.
          </p>
          <div style="display: flex; gap: 0.75rem; color: #cbd5e1; font-size: 1.1rem;">
            <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/" aria-label="Pinterest" style="color: #94A3B8;"><i class="fa-brands fa-pinterest"></i></a>
            <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/" aria-label="Instagram" style="color: #94A3B8;"><i class="fa-brands fa-instagram"></i></a>
            <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/" aria-label="YouTube" style="color: #94A3B8;"><i class="fa-brands fa-youtube"></i></a>
            <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/" aria-label="Facebook" style="color: #94A3B8;"><i class="fa-brands fa-facebook"></i></a>
          </div>
        </div>

        <!-- Quick Navigation -->
        <div class="footer-col">
          <h4>Explore</h4>
          <ul class="footer-links">
            <li><a href="#recipes">All Recipes</a></li>
            <li><a href="#recipes" onclick="filterByTag('Quick & Easy')">15-Minute Meals</a></li>
            <li><a href="#recipes" onclick="filterByTag('Healthy')">Healthy & Keto Bowls</a></li>
            <li><a href="#recipes" onclick="filterByTag('Vegetarian')">Plant-Based Dishes</a></li>
            <li><a href="#meal-planner">Weekly Meal Planner</a></li>
            <li><a href="#about">About Our Kitchen</a></li>
          </ul>
        </div>

        <!-- Compliance & Legal -->
        <div class="footer-col">
          <h4>Legal & Policies</h4>
          <ul class="footer-links">
            <li><a href="#legal-hub" onclick="switchPolicyTab('privacy')">Privacy Policy</a></li>
            <li><a href="#legal-hub" onclick="switchPolicyTab('terms')">Terms of Service</a></li>
            <li><a href="#legal-hub" onclick="switchPolicyTab('disclaimer')">Ad & Affiliate Disclosures</a></li>
            <li><a href="#legal-hub" onclick="switchPolicyTab('cookies')">Cookie Policy</a></li>
            <li><a href="#legal-hub" onclick="switchPolicyTab('dmca')">DMCA Policy</a></li>
            <li><a href="#legal-hub" onclick="switchPolicyTab('editorial')">Editorial Standards</a></li>
            <li><a href="javascript:void(0)" onclick="openCookieManager()">Cookie Preferences</a></li>
          </ul>
        </div>

        <!-- Newsletter Subscription -->
        <div class="footer-col">
          <h4>Weekly Recipe Digest</h4>
          <p style="font-size: 0.82rem; color: #94A3B8; margin-bottom: 0.85rem;">
            Get 3 free weeknight dinner recipes and prep tips delivered to your inbox every Sunday.
          </p>
          <form onsubmit="handleNewsletter(event)" style="display: flex; flex-direction: column; gap: 0.5rem;">
            <input type="email" id="newsEmail" placeholder="your.email@example.com" class="form-control" style="background: rgba(255,255,255,0.05); border-color: rgba(255,255,255,0.15); color: #FFF;" required>
            <button type="submit" class="btn btn-primary" style="padding: 0.5rem 1rem; font-size: 0.85rem;">Subscribe Free</button>
            <span style="font-size: 0.72rem; color: #64748B;">No spam ever. Unsubscribe anytime.</span>
          </form>
        </div>

      </div>

      <!-- Compliance Disclaimer Note -->
      <div class="footer-disclaimer-box">
        <strong>Google AdWords & FTC Compliance Statement:</strong> The information provided on <strong>https://gogorecipe-deb35a23fd33.herokuapp.com</strong> is for general educational and culinary entertainment purposes only. The nutritional data is an automated approximation. In compliance with Google Ads policies and FTC rules, this website contains third-party advertisements and affiliate links. GoGo Recipe participates in affiliate programs designed to provide a means for sites to earn advertising fees by linking to relevant products. Read our full <a href="#legal-hub" onclick="switchPolicyTab('disclaimer')" style="color: #38BDF8; text-decoration: underline;">disclaimer & disclosures</a>.
      </div>

      <!-- Copyright & Bottom Bar -->
      <div class="footer-bottom">
        <div>
          © 2026 <strong>GoGo Recipe</strong> (gogorecipe-deb35a23fd33.herokuapp.com). All rights reserved.
        </div>
        <div class="footer-bottom-links">
          <a href="#legal-hub" onclick="switchPolicyTab('privacy')">Privacy</a>
          <a href="#legal-hub" onclick="switchPolicyTab('terms')">Terms</a>
          <a href="#legal-hub" onclick="switchPolicyTab('cookies')">Cookies</a>
          <a href="#contact">Contact</a>
          <a href="https://gogorecipe-deb35a23fd33.herokuapp.com/sitemap.xml" style="color: #64748B;">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- ==========================================================================
       INTERACTIVE RECIPE DETAIL MODAL
       ========================================================================== -->
  <div class="modal-overlay" id="recipeModalOverlay" onclick="closeRecipeModal(event)">
    <div class="modal-card" id="recipeModalCard">
      <button class="modal-close-btn" onclick="forceCloseModal()" aria-label="Close modal">
        <i class="fa-solid fa-xmark"></i>
      </button>

      <div class="modal-hero-img">
        <img id="modalImg" src="" alt="Recipe Dish" loading="lazy">
      </div>

      <div class="modal-body">
        <div class="badge badge-primary" id="modalCategory">Category</div>
        <h2 id="modalTitle" style="font-size: 1.85rem; margin: 0.4rem 0 0.5rem;">Recipe Title</h2>
        <p id="modalDesc" style="color: var(--text-muted); font-size: 0.92rem;">Recipe Description</p>

        <!-- Meta Bar with Servings Scaler -->
        <div class="modal-meta-bar">
          <div><i class="fa-regular fa-clock text-primary"></i> <strong>Prep:</strong> <span id="modalPrep">10m</span></div>
          <div><i class="fa-solid fa-fire text-accent"></i> <strong>Cook:</strong> <span id="modalCook">15m</span></div>
          <div><i class="fa-solid fa-bolt text-secondary"></i> <strong>Calories:</strong> <span id="modalCalories">420</span> kcal</div>
          
          <!-- Servings Adjuster -->
          <div class="servings-control">
            <span style="font-size: 0.8rem; font-weight: 700;">Servings:</span>
            <button class="servings-btn" onclick="adjustServings(-1)">-</button>
            <span id="currentServings" style="font-weight: 800; min-width: 18px; text-align: center;">4</span>
            <button class="servings-btn" onclick="adjustServings(1)">+</button>
          </div>
        </div>

        <div class="recipe-modal-grid">
          <!-- Ingredients Column -->
          <div>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.85rem;">
              <i class="fa-solid fa-basket-shopping text-primary"></i> Ingredients
            </h3>
            <p style="font-size: 0.78rem; color: var(--text-muted); margin-bottom: 0.75rem;">Check off items as you prep:</p>
            <ul class="ingredient-list" id="modalIngredientsList">
              <!-- Dynamically populated -->
            </ul>
          </div>

          <!-- Instructions Column -->
          <div>
            <h3 style="font-size: 1.25rem; margin-bottom: 0.85rem;">
              <i class="fa-solid fa-list-check text-secondary"></i> Instructions
            </h3>
            <div class="instruction-list" id="modalInstructionsList">
              <!-- Dynamically populated -->
            </div>

            <!-- Built-in Cooking Timer -->
            <div class="timer-widget">
              <div>
                <div style="font-size: 0.75rem; text-transform: uppercase; color: #94A3B8; font-weight: 700;">Cooking Timer</div>
                <div class="timer-display" id="timerDisplay">15:00</div>
              </div>
              <div class="timer-controls">
                <button class="timer-btn" style="background: var(--primary); color: white;" onclick="toggleTimer()" id="timerToggleBtn">Start</button>
                <button class="timer-btn" style="background: rgba(255,255,255,0.2); color: white;" onclick="resetTimer()">Reset</button>
              </div>
            </div>
          </div>
        </div>

        <!-- Action Bar (Print, Share, Favorite) -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-top: 2rem; padding-top: 1.5rem; border-top: 1px solid var(--border-light); flex-wrap: wrap; gap: 1rem;">
          <div style="display: flex; gap: 0.75rem;">
            <button class="btn btn-secondary" onclick="window.print()" style="padding: 0.5rem 1rem; font-size: 0.85rem;">
              <i class="fa-solid fa-print"></i> Print Recipe
            </button>
            <button class="btn btn-secondary" onclick="shareRecipe()" style="padding: 0.5rem 1rem; font-size: 0.85rem;">
              <i class="fa-solid fa-share-nodes"></i> Share
            </button>
          </div>
          <button class="btn btn-primary" onclick="forceCloseModal()" style="padding: 0.5rem 1.25rem; font-size: 0.85rem;">
            Done Cooking
          </button>
        </div>

      </div>
    </div>
  </div>

  <!-- ==========================================================================
       COOKIE CONSENT BANNER (GDPR / CCPA COMPLIANCE)
       ========================================================================== -->
  <aside class="cookie-banner" id="cookieBanner" role="dialog" aria-label="Cookie Consent">
    <div class="cookie-text">
      <strong style="color: #FFF;"><i class="fa-solid fa-cookie text-accent"></i> We value your privacy and trust.</strong><br>
      We use cookies and Google analytics/advertising technologies to personalize recipes, measure traffic, and optimize your experience on <strong>gogorecipe-deb35a23fd33.herokuapp.com</strong>. By clicking "Accept All", you consent to our use of cookies in accordance with our <a href="#legal-hub" onclick="switchPolicyTab('privacy')">Privacy Policy</a> and <a href="#legal-hub" onclick="switchPolicyTab('cookies')">Cookie Policy</a>.
    </div>
    <div class="cookie-actions">
      <button class="cookie-btn-decline" onclick="handleCookieConsent('essential_only')">Essential Only</button>
      <button class="cookie-btn-accept" onclick="handleCookieConsent('all_accepted')">Accept All</button>
    </div>
  </aside>

  <!-- Floating Cookie Preferences Trigger Button -->
  <button class="cookie-preferences-trigger" onclick="openCookieManager()" aria-label="Open Cookie Settings">
    <i class="fa-solid fa-cookie"></i> Cookie Settings
  </button>

  <!-- ==========================================================================
       JAVASCRIPT APPLICATION LOGIC
       ========================================================================== -->
  <script>
    /* ==========================================================================
       1. RECIPES DATA STORE (Triple-Tested Recipes)
       ========================================================================== */
    const recipesData = [
      {
        id: 0,
        title: "Creamy Tuscan Garlic Butter Salmon",
        category: "Comfort",
        categoryLabel: "Comfort Dinners",
        image: "https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=800&q=80",
        rating: 4.98,
        reviews: 340,
        prepTime: "10 min",
        cookTime: "15 min",
        cookMinutes: 15,
        baseServings: 4,
        calories: 480,
        description: "Pan-seared flaky salmon fillets nestled in a silky garlic cream sauce loaded with sun-dried tomatoes and wilted baby spinach.",
        ingredients: [
          { amount: 4, unit: "fillets", name: "Wild Alaskan Salmon (6 oz each)" },
          { amount: 2, unit: "tbsp", name: "Extra virgin olive oil" },
          { amount: 4, unit: "cloves", name: "Garlic, finely minced" },
          { amount: 0.5, unit: "cup", name: "Sun-dried tomatoes, drained and sliced" },
          { amount: 1, unit: "cup", name: "Heavy whipping cream or coconut cream" },
          { amount: 3, unit: "cups", name: "Fresh baby spinach leaves" },
          { amount: 0.5, unit: "cup", name: "Freshly grated Parmesan cheese" },
          { amount: 1, unit: "pinch", name: "Salt and freshly cracked black pepper" }
        ],
        instructions: [
          "Season salmon fillets on both sides with sea salt and freshly cracked black pepper.",
          "Heat olive oil in a large skillet over medium-high heat. Sear salmon for 4-5 minutes per side until golden and cooked through. Transfer to a plate.",
          "In the same skillet, add minced garlic and sun-dried tomatoes. Sauté for 1 minute until fragrant.",
          "Pour in heavy cream and bring to a gentle simmer. Stir in grated Parmesan until smooth.",
          "Add baby spinach and cook until wilted (approx. 2 minutes). Return salmon fillets to skillet and spoon sauce over top before serving."
        ]
      },
      {
        id: 1,
        title: "Mediterranean Quinoa Buddha Bowl",
        category: "Healthy",
        categoryLabel: "Healthy & Bowls",
        image: "https://images.unsplash.com/photo-1546069901-ba9599a7e63c?auto=format&fit=crop&w=800&q=80",
        rating: 4.92,
        reviews: 215,
        prepTime: "10 min",
        cookTime: "15 min",
        cookMinutes: 15,
        baseServings: 2,
        calories: 380,
        description: "Nutritious fluffy quinoa with crisp English cucumbers, cherry tomatoes, Kalamata olives, creamy feta, and a zesty lemon-oregano vinaigrette.",
        ingredients: [
          { amount: 1, unit: "cup", name: "Cooked white or tri-color quinoa" },
          { amount: 1, unit: "cup", name: "Cherry tomatoes, halved" },
          { amount: 1, unit: "medium", name: "Persian cucumber, diced" },
          { amount: 0.5, unit: "cup", name: "Kalamata olives, pitted and halved" },
          { amount: 0.5, unit: "cup", name: "Crumbled organic sheep's milk feta" },
          { amount: 0.5, unit: "can", name: "Chickpeas (garbanzo beans), rinsed and roasted" },
          { amount: 3, unit: "tbsp", name: "Lemon-herb olive oil vinaigrette" }
        ],
        instructions: [
          "Divide cooked, cooled quinoa between two serving bowls.",
          "Arrange sliced cherry tomatoes, diced cucumbers, Kalamata olives, and chickpeas in neat sections.",
          "Crumble fresh feta cheese over the center of each bowl.",
          "Drizzle with cold-pressed olive oil, fresh lemon juice, oregano, and salt.",
          "Toss gently before enjoying immediately or store chilled for weekday meal prep."
        ]
      },
      {
        id: 2,
        title: "15-Minute Garlic Butter Shrimp Pasta",
        category: "Quick & Easy",
        categoryLabel: "15-Min Meals",
        image: "https://images.unsplash.com/photo-1551183053-bf91a1d81141?auto=format&fit=crop&w=800&q=80",
        rating: 4.95,
        reviews: 480,
        prepTime: "5 min",
        cookTime: "10 min",
        cookMinutes: 10,
        baseServings: 4,
        calories: 440,
        description: "Juicy jumbo shrimp sautéed in rich garlic butter with a splash of white grape/wine reduction over al dente linguine pasta.",
        ingredients: [
          { amount: 1, unit: "lb", name: "Jumbo shrimp, peeled and deveined" },
          { amount: 8, unit: "oz", name: "Linguine or angel hair pasta" },
          { amount: 4, unit: "tbsp", name: "Unsalted butter, divided" },
          { amount: 5, unit: "cloves", name: "Garlic, thinly sliced" },
          { amount: 0.25, unit: "cup", name: "Fresh parsley, finely chopped" },
          { amount: 1, unit: "tbsp", name: "Fresh lemon juice & zest" },
          { amount: 0.5, unit: "tsp", name: "Red pepper chili flakes" }
        ],
        instructions: [
          "Boil linguine in a large pot of salted water until al dente. Reserve 1/2 cup pasta cooking water.",
          "Melt 2 tbsp butter with 1 tbsp olive oil in a skillet over medium-high heat.",
          "Add shrimp, season with salt and pepper, and sear 1.5 minutes per side until pink. Remove shrimp.",
          "Add garlic and red pepper flakes to pan; cook for 1 minute. Add lemon juice and remaining butter.",
          "Toss cooked pasta, reserved water, and shrimp into the sauce. Garnish with chopped fresh parsley."
        ]
      },
      {
        id: 3,
        title: "Crispy Roasted Chickpea & Avocado Salad",
        category: "Vegetarian",
        categoryLabel: "Plant-Based",
        image: "https://images.unsplash.com/photo-1512621776951-a57141f2eefd?auto=format&fit=crop&w=800&q=80",
        rating: 4.88,
        reviews: 164,
        prepTime: "10 min",
        cookTime: "20 min",
        cookMinutes: 20,
        baseServings: 2,
        calories: 340,
        description: "Crispy paprika-roasted chickpeas tossed with ripe hass avocado, mixed baby greens, toasted pepitas, and creamy tahini lime dressing.",
        ingredients: [
          { amount: 1, unit: "can (15oz)", name: "Organic chickpeas, drained and patted dry" },
          { amount: 1, unit: "large", name: "Ripe Hass Avocado, cubed" },
          { amount: 5, unit: "cups", name: "Mixed baby greens & arugula" },
          { amount: 2, unit: "tbsp", name: "Toasted pumpkin seeds (pepitas)" },
          { amount: 1, unit: "tsp", name: "Smoked paprika and ground cumin" },
          { amount: 3, unit: "tbsp", name: "Creamy garlic tahini dressing" }
        ],
        instructions: [
          "Preheat oven or air fryer to 400°F (200°C). Toss dry chickpeas with olive oil, paprika, cumin, and sea salt.",
          "Roast for 18-20 minutes until crunchy and golden.",
          "In a large serving bowl, layer fresh baby greens and arugula.",
          "Top with diced avocado, crispy warm chickpeas, and toasted pepitas.",
          "Drizzle with lemon tahini dressing right before serving."
        ]
      },
      {
        id: 4,
        title: "One-Pan Honey Mustard Glazed Chicken",
        category: "Comfort",
        categoryLabel: "Comfort Dinners",
        image: "https://images.unsplash.com/photo-1604908176997-125f25cc6f3d?auto=format&fit=crop&w=800&q=80",
        rating: 4.94,
        reviews: 290,
        prepTime: "10 min",
        cookTime: "20 min",
        cookMinutes: 20,
        baseServings: 4,
        calories: 410,
        description: "Tender chicken breasts pan-glazed with raw wildflower honey, Dijon mustard, fresh rosemary sprigs, and tender roasted baby carrots.",
        ingredients: [
          { amount: 4, unit: "pieces", name: "Boneless, skinless chicken breasts" },
          { amount: 3, unit: "tbsp", name: "Dijon mustard & whole grain mustard blend" },
          { amount: 3, unit: "tbsp", name: "Pure honey" },
          { amount: 2, unit: "sprigs", name: "Fresh rosemary, minced" },
          { amount: 2, unit: "cups", name: "Baby Dutch carrots, trimmed" },
          { amount: 2, unit: "tbsp", name: "Olive oil" }
        ],
        instructions: [
          "Whisk Dijon mustard, whole grain mustard, honey, minced rosemary, salt, and pepper in a small bowl.",
          "Heat olive oil in an oven-safe cast iron skillet over medium-high heat. Sear chicken for 4 minutes per side.",
          "Arrange baby carrots around the chicken.",
          "Pour honey mustard glaze generously over chicken and carrots.",
          "Transfer skillet to 375°F (190°C) oven for 12 minutes until internal chicken temperature reaches 165°F (74°C)."
        ]
      },
      {
        id: 5,
        title: "Flourless Dark Chocolate Lava Mug Cake",
        category: "Desserts",
        categoryLabel: "Sweet Treats",
        image: "https://images.unsplash.com/photo-1578985545062-69928b1d9587?auto=format&fit=crop&w=800&q=80",
        rating: 4.96,
        reviews: 512,
        prepTime: "3 min",
        cookTime: "2 min",
        cookMinutes: 2,
        baseServings: 1,
        calories: 220,
        description: "Rich, decadent molten chocolate cake made with wholesome almond flour, cocoa powder, and dark chocolate chips. Ready in under 5 minutes!",
        ingredients: [
          { amount: 3, unit: "tbsp", name: "Fine blanched almond flour" },
          { amount: 1, unit: "tbsp", name: "Unsweetened Dutch cocoa powder" },
          { amount: 1, unit: "tbsp", name: "Pure maple syrup or keto erythritol" },
          { amount: 1, unit: "large", name: "Egg (or 2 tbsp unsweetened applesauce)" },
          { amount: 1, unit: "tbsp", name: "Almond milk" },
          { amount: 1, unit: "tbsp", name: "70% Dark chocolate chips" }
        ],
        instructions: [
          "In a microwave-safe mug, whisk almond flour, cocoa powder, maple syrup, egg, and almond milk with a fork until smooth.",
          "Drop dark chocolate chips right into the center of the batter.",
          "Microwave on high for 60 to 75 seconds until edges are set while center remains gooey.",
          "Allow to cool for 1 minute. Top with fresh raspberries or a dollop of Greek yogurt."
        ]
      },
      {
        id: 6,
        title: "10-Minute Japanese Sesame Soba Noodles",
        category: "Quick & Easy",
        categoryLabel: "15-Min Meals",
        image: "https://images.unsplash.com/photo-1569718212165-3a8278d5f624?auto=format&fit=crop&w=800&q=80",
        rating: 4.87,
        reviews: 138,
        prepTime: "4 min",
        cookTime: "6 min",
        cookMinutes: 6,
        baseServings: 2,
        calories: 320,
        description: "Chilled buckwheat soba noodles tossed in toasted sesame oil, tamari soy sauce, grated ginger, scallions, and toasted sesame seeds.",
        ingredients: [
          { amount: 6, unit: "oz", name: "Buckwheat soba noodles" },
          { amount: 2, unit: "tbsp", name: "Toasted sesame oil" },
          { amount: 2, unit: "tbsp", name: "Low-sodium tamari or soy sauce" },
          { amount: 1, unit: "tsp", name: "Freshly grated ginger" },
          { amount: 2, unit: "stalks", name: "Green onions (scallions), thinly sliced" },
          { amount: 1, unit: "tbsp", name: "White and black sesame seeds" }
        ],
        instructions: [
          "Cook buckwheat soba noodles in boiling water for 4-5 minutes. Drain and rinse thoroughly under cold water.",
          "Whisk sesame oil, tamari, grated ginger, and rice vinegar in a mixing bowl.",
          "Toss cold noodles with the dressing until well coated.",
          "Garnish generously with sliced green onions and toasted sesame seeds."
        ]
      },
      {
        id: 7,
        title: "Creamy Roasted Butternut Squash Soup",
        category: "Healthy",
        categoryLabel: "Healthy & Bowls",
        image: "https://images.unsplash.com/photo-1547592166-23ac45744acd?auto=format&fit=crop&w=800&q=80",
        rating: 4.91,
        reviews: 198,
        prepTime: "10 min",
        cookTime: "25 min",
        cookMinutes: 25,
        baseServings: 4,
        calories: 210,
        description: "Velvety smooth roasted butternut squash blended with Granny Smith apple, coconut milk, aromatic sage, and a dash of nutmeg.",
        ingredients: [
          { amount: 1, unit: "large", name: "Butternut squash (approx. 2 lbs), peeled & cubed" },
          { amount: 1, unit: "medium", name: "Yellow onion, chopped" },
          { amount: 1, unit: "medium", name: "Granny Smith tart apple, cored & chopped" },
          { amount: 3, unit: "cups", name: "Vegetable or chicken bone broth" },
          { amount: 0.5, unit: "cup", name: "Full-fat coconut milk" },
          { amount: 0.25, unit: "tsp", name: "Ground nutmeg and ground ginger" }
        ],
        instructions: [
          "Sauté chopped onion and apple in olive oil in a large soup pot until softened (5 minutes).",
          "Add cubed butternut squash, ground nutmeg, ginger, and broth. Bring to a boil.",
          "Reduce heat, cover, and simmer for 20 minutes until squash is fork-tender.",
          "Purée soup using an immersion blender until silky smooth.",
          "Stir in coconut milk and season with salt. Garnish with roasted pumpkin seeds."
        ]
      }
    ];

    /* ==========================================================================
       2. PLANNER DATA STORE
       ========================================================================== */
    const plannerSchedule = {
      Monday: {
        lunch: { name: "Mediterranean Buddha Bowl", time: "15 min", cal: "380 kcal" },
        dinner: { name: "Creamy Tuscan Garlic Salmon", time: "25 min", cal: "480 kcal" },
        snack: { name: "Greek Yogurt & Wild Berries", time: "2 min", cal: "140 kcal" }
      },
      Tuesday: {
        lunch: { name: "Japanese Sesame Soba Noodles", time: "10 min", cal: "320 kcal" },
        dinner: { name: "Honey Mustard Glazed Chicken", time: "30 min", cal: "410 kcal" },
        snack: { name: "Roasted Almonds & Dark Chocolate", time: "1 min", cal: "160 kcal" }
      },
      Wednesday: {
        lunch: { name: "Chickpea & Avocado Crisp Salad", time: "15 min", cal: "340 kcal" },
        dinner: { name: "Garlic Butter Shrimp Pasta", time: "15 min", cal: "440 kcal" },
        snack: { name: "Apple Slices with Almond Butter", time: "3 min", cal: "180 kcal" }
      },
      Thursday: {
        lunch: { name: "Butternut Squash Soup & Sourdough", time: "10 min", cal: "290 kcal" },
        dinner: { name: "Pan-Seared Salmon with Asparagus", time: "20 min", cal: "450 kcal" },
        snack: { name: "Hummus with Cucumber Rounds", time: "2 min", cal: "120 kcal" }
      },
      Friday: {
        lunch: { name: "Caprese Avocado Wrap", time: "10 min", cal: "360 kcal" },
        dinner: { name: "Artisanal Flatbread with Fresh Herbs", time: "20 min", cal: "490 kcal" },
        snack: { name: "Lava Mug Cake (Weekend Kickoff)", time: "5 min", cal: "220 kcal" }
      },
      Saturday: {
        lunch: { name: "Lemon Herb Quinoa Salad", time: "15 min", cal: "350 kcal" },
        dinner: { name: "Slow-Roasted Garlic Herb Chicken", time: "45 min", cal: "520 kcal" },
        snack: { name: "Chia Seed Berry Pudding", time: "5 min", cal: "150 kcal" }
      },
      Sunday: {
        lunch: { name: "Chef's Catch-Up Meal Prep Bowl", time: "20 min", cal: "400 kcal" },
        dinner: { name: "Comforting Roasted Veggie Pasta", time: "25 min", cal: "430 kcal" },
        snack: { name: "Cinnamon Spiced Pear Slices", time: "3 min", cal: "110 kcal" }
      }
    };

    /* ==========================================================================
       3. DOM INITIALIZATION & EVENT LISTENERS
       ========================================================================== */
    let currentModalRecipe = null;
    let modalServingsMultiplier = 1;
    let timerInterval = null;
    let timerSecondsLeft = 900;
    let isTimerRunning = false;

    document.addEventListener("DOMContentLoaded", () => {
      renderRecipes(recipesData);
      initFavorites();
      switchDay('Monday');
      initCookieBanner();
      setupHeaderScroll();
      setupCategoryFilterButtons();
    });

    function setupHeaderScroll() {
      window.addEventListener('scroll', () => {
        const header = document.getElementById('mainHeader');
        if (window.scrollY > 40) {
          header.classList.add('scrolled');
        } else {
          header.classList.remove('scrolled');
        }
      });

      // Mobile Menu Toggle
      const mobileBtn = document.getElementById('mobileMenuBtn');
      const navMenu = document.getElementById('navMenu');
      if (mobileBtn && navMenu) {
        mobileBtn.addEventListener('click', () => {
          navMenu.classList.toggle('open');
        });
        // Close menu on link click
        navMenu.querySelectorAll('a').forEach(link => {
          link.addEventListener('click', () => navMenu.classList.remove('open'));
        });
      }
    }

    /* ==========================================================================
       4. RECIPE RENDERING & FILTERING
       ========================================================================== */
    function renderRecipes(recipes) {
      const grid = document.getElementById("recipesGrid");
      const countEl = document.getElementById("visibleCount");
      
      if (!grid) return;
      grid.innerHTML = "";
      
      if (countEl) countEl.innerText = recipes.length;

      if (recipes.length === 0) {
        grid.innerHTML = `
          <div style="grid-column: 1/-1; text-align: center; padding: 3rem 1rem; background: var(--surface); border-radius: var(--radius-md); border: 1px dashed var(--border);">
            <i class="fa-solid fa-utensils text-primary" style="font-size: 2.5rem; margin-bottom: 1rem;"></i>
            <h3 style="margin-bottom: 0.5rem;">No Recipes Found</h3>
            <p style="color: var(--text-muted); font-size: 0.9rem;">Try adjusting your keywords or clearing active filters.</p>
            <button class="btn btn-primary" onclick="resetFilters()" style="margin-top: 1rem;">View All Recipes</button>
          </div>
        `;
        return;
      }

      recipes.forEach(recipe => {
        const isFav = isRecipeFavorited(recipe.id);
        const card = document.createElement("article");
        card.className = "recipe-card";
        card.innerHTML = `
          <div class="recipe-thumb">
            <img src="${recipe.image}" alt="${recipe.title}" loading="lazy">
            <span class="recipe-tag">${recipe.categoryLabel}</span>
            <button class="favorite-btn ${isFav ? 'active' : ''}" onclick="toggleFavorite(event, ${recipe.id})" aria-label="Bookmark ${recipe.title}">
              <i class="${isFav ? 'fa-solid' : 'fa-regular'} fa-heart"></i>
            </button>
          </div>
          <div class="recipe-body">
            <div class="recipe-rating">
              <i class="fa-solid fa-star"></i>
              <span>${recipe.rating}</span>
              <span class="reviews-count">(${recipe.reviews})</span>
            </div>
            <h3 class="recipe-title">${recipe.title}</h3>
            <p class="recipe-desc">${recipe.description}</p>
            <div class="recipe-footer">
              <div class="recipe-footer-meta">
                <span><i class="fa-regular fa-clock text-primary"></i> ${recipe.cookTime}</span>
                <span><i class="fa-solid fa-fire text-accent"></i> ${recipe.calories} kcal</span>
              </div>
              <button class="btn btn-outline-primary" style="padding: 0.35rem 0.85rem; font-size: 0.78rem;" onclick="openRecipeModal(${recipe.id})">
                View
              </button>
            </div>
          </div>
        `;
        grid.appendChild(card);
      });
    }

    function setupCategoryFilterButtons() {
      const filterBtns = document.querySelectorAll(".filter-btn");
      filterBtns.forEach(btn => {
        btn.addEventListener("click", () => {
          filterBtns.forEach(b => b.classList.remove("active"));
          btn.classList.add("active");
          
          const cat = btn.getAttribute("data-category");
          filterRecipesByCategory(cat);
        });
      });
    }

    function filterRecipesByCategory(category) {
      if (category === "all") {
        renderRecipes(recipesData);
      } else {
        const filtered = recipesData.filter(r => r.category === category);
        renderRecipes(filtered);
      }
    }

    function filterByTag(categoryName) {
      const filterBtns = document.querySelectorAll(".filter-btn");
      filterBtns.forEach(b => {
        if (b.getAttribute("data-category") === categoryName) {
          b.classList.add("active");
        } else {
          b.classList.remove("active");
        }
      });
      filterRecipesByCategory(categoryName);
      const recipeSection = document.getElementById("recipes");
      if (recipeSection) recipeSection.scrollIntoView({ behavior: 'smooth' });
    }

    function triggerSearch() {
      const searchInput = document.getElementById("recipeSearchInput");
      if (!searchInput) return;
      const query = searchInput.value.toLowerCase().trim();
      
      if (!query) {
        renderRecipes(recipesData);
        return;
      }

      const results = recipesData.filter(r => 
        r.title.toLowerCase().includes(query) ||
        r.description.toLowerCase().includes(query) ||
        r.categoryLabel.toLowerCase().includes(query) ||
        r.ingredients.some(ing => ing.name.toLowerCase().includes(query))
      );

      renderRecipes(results);
      const recipeSection = document.getElementById("recipes");
      if (recipeSection) recipeSection.scrollIntoView({ behavior: 'smooth' });
    }

    // Search on enter key
    const searchInputEl = document.getElementById("recipeSearchInput");
    if (searchInputEl) {
      searchInputEl.addEventListener("keyup", (e) => {
        if (e.key === "Enter") triggerSearch();
      });
    }

    function resetFilters() {
      const searchInput = document.getElementById("recipeSearchInput");
      if (searchInput) searchInput.value = "";
      const allBtn = document.querySelector('.filter-btn[data-category="all"]');
      if (allBtn) allBtn.click();
    }

    /* ==========================================================================
       5. INTERACTIVE RECIPE DETAIL MODAL
       ========================================================================== */
    function openRecipeModal(recipeId) {
      const recipe = recipesData.find(r => r.id === recipeId);
      if (!recipe) return;

      currentModalRecipe = recipe;
      modalServingsMultiplier = 1;

      document.getElementById("modalImg").src = recipe.image;
      document.getElementById("modalImg").alt = recipe.title;
      document.getElementById("modalCategory").innerText = recipe.categoryLabel;
      document.getElementById("modalTitle").innerText = recipe.title;
      document.getElementById("modalDesc").innerText = recipe.description;
      document.getElementById("modalPrep").innerText = recipe.prepTime;
      document.getElementById("modalCook").innerText = recipe.cookTime;
      document.getElementById("modalCalories").innerText = recipe.calories;
      document.getElementById("currentServings").innerText = recipe.baseServings;

      // Reset timer
      resetTimerTo(recipe.cookMinutes || 15);

      renderModalIngredients(recipe, modalServingsMultiplier);
      renderModalInstructions(recipe);

      const overlay = document.getElementById("recipeModalOverlay");
      overlay.classList.add("active");
      document.body.style.overflow = "hidden";
    }

    function renderModalIngredients(recipe, multiplier) {
      const list = document.getElementById("modalIngredientsList");
      list.innerHTML = "";

      recipe.ingredients.forEach((item, idx) => {
        let scaledAmt = "";
        if (typeof item.amount === 'number') {
          const calculated = (item.amount * multiplier);
          // Clean fractional formatting
          scaledAmt = Number.isInteger(calculated) ? calculated : calculated.toFixed(1).replace(/\.0$/, '');
        } else {
          scaledAmt = item.amount;
        }

        const li = document.createElement("li");
        li.className = "ingredient-item";
        li.innerHTML = `
          <label style="display: flex; align-items: center; cursor: pointer; width: 100%;">
            <input type="checkbox" id="ing_${idx}">
            <span><strong>${scaledAmt} ${item.unit}</strong> ${item.name}</span>
          </label>
        `;
        list.appendChild(li);
      });
    }

    function renderModalInstructions(recipe) {
      const list = document.getElementById("modalInstructionsList");
      list.innerHTML = "";

      recipe.instructions.forEach((step, idx) => {
        const div = document.createElement("div");
        div.className = "instruction-step";
        div.innerHTML = `
          <div class="step-number">${idx + 1}</div>
          <div>${step}</div>
        `;
        list.appendChild(div);
      });
    }

    function adjustServings(delta) {
      if (!currentModalRecipe) return;
      const servingsSpan = document.getElementById("currentServings");
      let current = parseInt(servingsSpan.innerText, 10);
      let next = current + delta;
      if (next < 1) next = 1;
      if (next > 24) next = 24;

      servingsSpan.innerText = next;
      modalServingsMultiplier = next / currentModalRecipe.baseServings;
      
      renderModalIngredients(currentModalRecipe, modalServingsMultiplier);
    }

    function closeRecipeModal(event) {
      if (event.target.id === "recipeModalOverlay") {
        forceCloseModal();
      }
    }

    function forceCloseModal() {
      const overlay = document.getElementById("recipeModalOverlay");
      overlay.classList.remove("active");
      document.body.style.overflow = "auto";
      if (isTimerRunning) toggleTimer();
    }

    // Modal Keyboard Esc
    document.addEventListener("keydown", (e) => {
      if (e.key === "Escape") forceCloseModal();
    });

    /* ==========================================================================
       6. COOKING TIMER LOGIC
       ========================================================================== */
    function resetTimerTo(minutes) {
      clearInterval(timerInterval);
      isTimerRunning = false;
      timerSecondsLeft = minutes * 60;
      updateTimerDisplay();
      const btn = document.getElementById("timerToggleBtn");
      if (btn) btn.innerText = "Start";
    }

    function updateTimerDisplay() {
      const mins = Math.floor(timerSecondsLeft / 60);
      const secs = timerSecondsLeft % 60;
      const display = document.getElementById("timerDisplay");
      if (display) {
        display.innerText = `${mins.toString().padStart(2, '0')}:${secs.toString().padStart(2, '0')}`;
      }
    }

    function toggleTimer() {
      const btn = document.getElementById("timerToggleBtn");
      if (isTimerRunning) {
        clearInterval(timerInterval);
        isTimerRunning = false;
        if (btn) btn.innerText = "Resume";
      } else {
        if (timerSecondsLeft <= 0) return;
        isTimerRunning = true;
        if (btn) btn.innerText = "Pause";
        timerInterval = setInterval(() => {
          if (timerSecondsLeft > 0) {
            timerSecondsLeft--;
            updateTimerDisplay();
          } else {
            clearInterval(timerInterval);
            isTimerRunning = false;
            if (btn) btn.innerText = "Done!";
            alert("⏰ Cooking Timer Finished! Time to check your delicious dish on GoGo Recipe!");
          }
        }, 1000);
      }
    }

    function resetTimer() {
      if (currentModalRecipe) {
        resetTimerTo(currentModalRecipe.cookMinutes || 15);
      } else {
        resetTimerTo(15);
      }
    }

    function shareRecipe() {
      if (navigator.share && currentModalRecipe) {
        navigator.share({
          title: currentModalRecipe.title + " | GoGo Recipe",
          text: "Check out this amazing recipe on GoGo Recipe: " + currentModalRecipe.title,
          url: window.location.href
        }).catch(() => {});
      } else {
        navigator.clipboard.writeText(window.location.href);
        alert("Recipe link copied to your clipboard!");
      }
    }

    /* ==========================================================================
       7. FAVORITES / BOOKMARKS (LocalStorage)
       ========================================================================== */
    function getFavorites() {
      try {
        return JSON.parse(localStorage.getItem("gogo_favorites")) || [];
      } catch(e) {
        return [];
      }
    }

    function isRecipeFavorited(id) {
      const favs = getFavorites();
      return favs.includes(id);
    }

    function saveToFavorites(id) {
      let favs = getFavorites();
      if (!favs.includes(id)) {
        favs.push(id);
        localStorage.setItem("gogo_favorites", JSON.stringify(favs));
        alert("Recipe saved to your bookmarks!");
      } else {
        alert("Recipe is already in your bookmarks.");
      }
      renderRecipes(recipesData);
    }

    function toggleFavorite(event, id) {
      event.stopPropagation();
      let favs = getFavorites();
      if (favs.includes(id)) {
        favs = favs.filter(favId => favId !== id);
      } else {
        favs.push(id);
      }
      localStorage.setItem("gogo_favorites", JSON.stringify(favs));
      renderRecipes(recipesData);
    }

    function initFavorites() {
      // Warm local storage if not exists
      if (!localStorage.getItem("gogo_favorites")) {
        localStorage.setItem("gogo_favorites", JSON.stringify([0]));
      }
    }

    /* ==========================================================================
       8. MEAL PLANNER DAY SWITCHER
       ========================================================================== */
    function switchDay(day) {
      const tabs = document.querySelectorAll(".day-tab");
      tabs.forEach(t => {
        if (t.innerText.trim() === day) {
          t.classList.add("active");
        } else {
          t.classList.remove("active");
        }
      });

      const dayData = plannerSchedule[day] || plannerSchedule['Monday'];
      const container = document.getElementById("plannerContent");
      if (!container) return;

      container.innerHTML = `
        <div class="meal-slot">
          <span class="meal-slot-label"><i class="fa-regular fa-sun text-accent"></i> Lunch</span>
          <h4>${dayData.lunch.name}</h4>
          <p><i class="fa-regular fa-clock"></i> ${dayData.lunch.time} · <strong>${dayData.lunch.cal}</strong></p>
        </div>
        <div class="meal-slot">
          <span class="meal-slot-label"><i class="fa-solid fa-moon text-primary"></i> Dinner</span>
          <h4>${dayData.dinner.name}</h4>
          <p><i class="fa-regular fa-clock"></i> ${dayData.dinner.time} · <strong>${dayData.dinner.cal}</strong></p>
        </div>
        <div class="meal-slot">
          <span class="meal-slot-label"><i class="fa-solid fa-apple-whole text-secondary"></i> Snack & Prep</span>
          <h4>${dayData.snack.name}</h4>
          <p><i class="fa-regular fa-clock"></i> ${dayData.snack.time} · <strong>${dayData.snack.cal}</strong></p>
        </div>
      `;
    }

    /* ==========================================================================
       9. GOOGLE COMPLIANCE POLICY TABS CONTROLLER
       ========================================================================== */
    function switchPolicyTab(tabKey) {
      const buttons = document.querySelectorAll(".policy-tab-btn");
      const panels = document.querySelectorAll(".policy-panel");

      buttons.forEach(btn => {
        if (btn.getAttribute("onclick").includes(tabKey)) {
          btn.classList.add("active");
        } else {
          btn.classList.remove("active");
        }
      });

      panels.forEach(p => {
        if (p.id === `policy-${tabKey}`) {
          p.classList.add("active");
        } else {
          p.classList.remove("active");
        }
      });

      const legalSection = document.getElementById("legal-hub");
      if (legalSection && window.location.hash === "#legal-hub") {
        legalSection.scrollIntoView({ behavior: 'smooth' });
      }
    }

    /* ==========================================================================
       10. COOKIE CONSENT MANAGER (GDPR / CCPA)
       ========================================================================== */
    function initCookieBanner() {
      const consent = localStorage.getItem("gogo_cookie_consent");
      if (!consent) {
        setTimeout(() => {
          const banner = document.getElementById("cookieBanner");
          if (banner) banner.classList.add("show");
        }, 1200);
      }
    }

    function handleCookieConsent(preference) {
      localStorage.setItem("gogo_cookie_consent", preference);
      const banner = document.getElementById("cookieBanner");
      if (banner) banner.classList.remove("show");
    }

    function openCookieManager() {
      switchPolicyTab('cookies');
      const legalSection = document.getElementById("legal-hub");
      if (legalSection) legalSection.scrollIntoView({ behavior: 'smooth' });
      const banner = document.getElementById("cookieBanner");
      if (banner) banner.classList.add("show");
    }

    /* ==========================================================================
       11. FORM HANDLERS (Contact Us & Newsletter)
       ========================================================================== */
    function handleContactSubmit(e) {
      e.preventDefault();
      const name = document.getElementById("contactName").value.trim();
      const email = document.getElementById("contactEmail").value.trim();
      const alertBox = document.getElementById("contactAlert");

      if (alertBox) {
        alertBox.className = "form-alert success";
        alertBox.innerHTML = `
          <strong><i class="fa-solid fa-circle-check"></i> Thank you, ${name}!</strong><br>
          Your inquiry has been logged. Our test kitchen and policy support team at <strong>support@gogorecipe-deb35a23fd33.herokuapp.com</strong> will respond to <strong>${email}</strong> within 24-48 business hours.
        `;
        document.getElementById("contactForm").reset();
      }
    }

    function handleNewsletter(e) {
      e.preventDefault();
      const email = document.getElementById("newsEmail").value.trim();
      alert(`🎉 Welcome to the GoGo Recipe family! We have sent a confirmation email to ${email}. Check your inbox for your 3 free quick-dinner recipes!`);
      document.getElementById("newsEmail").value = "";
    }
  </script>
</body>
</html>
