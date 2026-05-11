<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title>Blog & Insights - Reliance MET City</title>
    <link rel="icon" type="image/webp" href="assets/icon.jpg">
    <meta name="description"
        content="Read the latest news, updates, and investment insights about Reliance MET City Jhajjar.">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .blog-hero {
            background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('assets/reliance city.webp') center/cover;
            padding: 120px 0;
            text-align: center;
        }
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
            padding: 80px 0;
        }
        .blog-card {
            background: #fff;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            cursor: pointer;
            display: flex;
            flex-direction: column;
        }
        .blog-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.15);
        }
        .blog-img-wrapper {
            width: 100%;
            height: 250px;
            overflow: hidden;
            position: relative;
        }
        .blog-img-wrapper img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        .blog-card:hover .blog-img-wrapper img {
            transform: scale(1.1);
        }
        .blog-content {
            padding: 30px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .blog-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 0.9rem;
            color: #888;
            margin-bottom: 15px;
        }
        .blog-tag {
            background: rgba(212, 175, 55, 0.1);
            color: var(--royal-gold, #d4af37);
            padding: 5px 12px;
            border-radius: 20px;
            font-weight: 600;
        }
        .blog-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
            color: #222;
            transition: color 0.3s ease;
            line-height: 1.4;
        }
        .blog-card:hover .blog-title {
            color: var(--royal-gold, #d4af37);
        }
        .blog-excerpt {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
            flex-grow: 1;
        }
        .read-more {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            font-weight: 600;
            color: var(--royal-gold, #d4af37);
            text-decoration: none;
            transition: gap 0.3s ease;
            margin-top: auto;
        }
        .blog-card:hover .read-more {
            gap: 15px;
        }
    </style>
</head>

<body class="blog-page">

    <!-- Scroll Progress -->
    <div id="scroll-progress"></div>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <main>
        <!-- Blog Hero Section -->
        <section class="blog-hero">
            <div class="container white-text reveal">
                <span class="luxury-badge">News & Insights</span>
                <h1 style="font-size: 3.5rem; margin-bottom: 20px;">Our <span class="gold-text">Blog</span></h1>
                <p style="font-size: 1.2rem; max-width: 800px; margin: 0 auto;">Stay updated with the latest news, investment trends, and development milestones at Reliance MET City.</p>
            </div>
        </section>

        <!-- Blog Grid -->
        <section class="bg-light">
            <div class="container blog-grid">
                <!-- Blog Post New -->
                <article class="blog-card reveal">
                    <div class="blog-img-wrapper">
                        <img src="assets/reliance city.webp" alt="Invest in MET City">
                    </div>
                    <div class="blog-content">
                        <div class="blog-meta">
                            <span class="blog-tag">Investment</span>
                            <span><i class="far fa-calendar-alt"></i> May 11, 2026</span>
                        </div>
                        <h3 class="blog-title">Is It Good to Invest in Reliance MET City?</h3>
                        <p class="blog-excerpt">Explore whether it is good to invest in Reliance MET City, including location benefits, growth potential, risks, and expert insights for smart real estate investment.</p>
                        <a href="is-it-good-to-invest-in-reliance-met-city" class="read-more">Read Full Article <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>

            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>
