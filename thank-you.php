<?php
$title = "Thank You";
$meta_description = "Thank you for contacting us. Our real estate experts will get back to you shortly.";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Meta Tags -->
    <title><?php echo $title; ?></title>
    <link rel="icon" type="image/webp" href="assets/icon.jpg">
    <meta name="description" content="<?php echo $meta_description; ?>">
    
    <link rel="stylesheet" href="style.css?v=2.1">
    <link rel="stylesheet" href="responsive.css?v=2.1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        .thankyou-hero {
            background: linear-gradient(rgba(0,0,0,0.85), rgba(0,0,0,0.85)), url('assets/reliance city.webp') center/cover;
            min-height: 80vh;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            padding: 120px 20px 80px;
        }
        .thankyou-card {
            background: rgba(255, 255, 255, 0.05);
            backdrop-filter: blur(15px);
            border: 1px solid rgba(212, 175, 55, 0.2);
            padding: 60px 40px;
            border-radius: 30px;
            max-width: 600px;
            width: 100%;
            box-shadow: 0 20px 50px rgba(0,0,0,0.3);
            transform: translateY(20px);
            opacity: 0;
            animation: fadeInUp 0.8s forwards ease-out;
        }
        .success-icon-wrap {
            width: 100px;
            height: 100px;
            background: radial-gradient(circle, rgba(212,175,55,0.2) 0%, rgba(212,175,55,0.05) 100%);
            border: 2px solid var(--royal-gold, #d4af37);
            color: var(--royal-gold, #d4af37);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
            margin: 0 auto 30px;
            box-shadow: 0 0 30px rgba(212,175,55,0.2);
            animation: pulse 2s infinite;
        }
        .thankyou-card h1 {
            font-size: 2.8rem;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 700;
        }
        .thankyou-card p {
            color: #ccc;
            font-size: 1.1rem;
            line-height: 1.8;
            margin-bottom: 40px;
        }
        .btn-back-home {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: var(--royal-gold, #d4af37);
            color: #111;
            padding: 15px 35px;
            border-radius: 50px;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 10px 20px rgba(212,175,55,0.2);
        }
        .btn-back-home:hover {
            background: #fff;
            color: #111;
            transform: translateY(-3px);
            box-shadow: 0 15px 30px rgba(255,255,255,0.2);
        }
        
        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        @keyframes pulse {
            0% {
                transform: scale(1);
                box-shadow: 0 0 30px rgba(212,175,55,0.2);
            }
            50% {
                transform: scale(1.05);
                box-shadow: 0 0 50px rgba(212,175,55,0.4);
            }
            100% {
                transform: scale(1);
                box-shadow: 0 0 30px rgba(212,175,55,0.2);
            }
        }
        @media (max-width: 576px) {
            .thankyou-card {
                padding: 40px 20px;
            }
            .thankyou-card h1 {
                font-size: 2.2rem;
            }
            .thankyou-card p {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body class="thankyou-page">

    <!-- Scroll Progress -->
    <div id="scroll-progress"></div>

    <!-- Header -->
    <?php include 'header.php'; ?>

    <main>
        <section class="thankyou-hero">
            <div class="thankyou-card">
                <div class="success-icon-wrap">
                    <i class="fas fa-check"></i>
                </div>
                <h1>Thank <span class="gold-text">You!</span></h1>
                <p>Your message has been received successfully. Our property experts will analyze your requirements and get in touch with you shortly.</p>
                <a href="/" class="btn-back-home"><i class="fas fa-arrow-left"></i> Back To Home</a>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <?php include 'footer.php'; ?>
</body>
</html>

