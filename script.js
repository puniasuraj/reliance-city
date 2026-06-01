document.addEventListener('DOMContentLoaded', () => {
    // 1. Reveal Animations with Intersection Observer
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -50px 0px'
    };

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            }
        });
    }, observerOptions);

    document.querySelectorAll('.reveal').forEach(el => revealObserver.observe(el));

    // 2. Sticky Header Logic
    const navbar = document.getElementById('navbar');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 100) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });

    // 3. Scroll Progress Indicator
    const progressIndicator = document.getElementById('scroll-progress');
    window.addEventListener('scroll', () => {
        const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
        const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (winScroll / height) * 100;
        progressIndicator.style.width = scrolled + "%";
    });

    // 4. Parallax Effect for Hero - Handled via CSS background-attachment: fixed
    /*
    window.addEventListener('scroll', () => {
        const scrolled = window.scrollY;
        const parallax = document.querySelector('.hero-bg-parallax');
        if (parallax) {
            parallax.style.transform = `translateY(${scrolled * 0.4}px)`;
        }
    });
    */

    // 5. Mobile Menu Toggle
    const mobileMenu = document.getElementById('mobile-menu');
    const navLinks = document.querySelector('.nav-links');

    if (mobileMenu) {
        mobileMenu.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenu.classList.toggle('active');
        });
    }

    // Mobile Dropdown Toggle
    const dropdownToggles = document.querySelectorAll('.has-dropdown > a');
    dropdownToggles.forEach(toggle => {
        toggle.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault();
                const parent = toggle.parentElement;
                parent.classList.toggle('active');
            }
        });
    });

    // 6. Lazy Loading with Intersection Observer - Optimized
    const lazyImages = document.querySelectorAll('img.lazy');
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;

                // Actual lazy loading: Swap data-src to src if it exists
                if (img.dataset.src) {
                    img.src = img.dataset.src;
                }

                img.classList.add('loaded');
                observer.unobserve(img);
            }
        });
    }, {
        rootMargin: '100px 0px', // Start loading 100px before reaching the image
        threshold: 0.01
    });
    lazyImages.forEach(img => imageObserver.observe(img));

    // 7. Counter Animation
    const counters = document.querySelectorAll('.counter');
    const animateCounter = (counter) => {
        const target = +counter.getAttribute('data-target');
        const count = +counter.innerText;
        const speed = 200; // Lower is faster
        const increment = target / speed;

        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(() => animateCounter(counter), 10);
        } else {
            counter.innerText = target + (counter.parentElement.innerText.includes('%') ? '%' : '+');
        }
    };

    const counterObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                animateCounter(entry.target);
                counterObserver.unobserve(entry.target);
            }
        });
    }, { threshold: 1.0 });

    counters.forEach(counter => counterObserver.observe(counter));

    // 8. Horizontal Scroll Controllers
    const setupSlider = (sliderId, prevId, nextId) => {
        const slider = document.getElementById(sliderId);
        const prev = document.getElementById(prevId);
        const next = document.getElementById(nextId);

        if (!slider || !prev || !next) return;

        const scrollAmount = window.innerWidth < 768 ? 300 : 500;
        next.addEventListener('click', () => {
            slider.scrollBy({ left: scrollAmount, behavior: 'smooth' });
        });

        prev.addEventListener('click', () => {
            slider.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
        });
    };

    setupSlider('gallery-slider', 'gallery-prev', 'gallery-next');
    setupSlider('price-slider', 'price-prev', 'price-next');
    setupSlider('video-slider', 'video-prev', 'video-next');

    // 9. Lazy Load Iframes
    const lazyIframes = document.querySelectorAll('iframe.lazy');
    const iframeObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const iframe = entry.target;
                iframe.src = iframe.getAttribute('data-src');
                iframe.classList.add('loaded');
                observer.unobserve(iframe);
            }
        });
    });
    lazyIframes.forEach(iframe => iframeObserver.observe(iframe));

    // 10. FAQ Accordion Logic
    const faqItems = document.querySelectorAll('.faq-item-modern');
    if (faqItems) {
        faqItems.forEach(item => {
            const header = item.querySelector('.faq-header-modern');
            if (header) {
                header.addEventListener('click', () => {
                    const isActive = item.classList.contains('active');
                    // Close other items
                    faqItems.forEach(faq => faq.classList.remove('active'));
                    if (!isActive) {
                        item.classList.add('active');
                    }
                });
            }
        });
    }

    // 12. Interactive Testimonials
    const floatingAvatars = document.querySelectorAll('.floating-avatar');
    const mainAvatar = document.getElementById('main-testimonial-avatar');
    const mainName = document.getElementById('main-testimonial-name');
    const mainEmail = document.getElementById('main-testimonial-email');
    const mainQuote = document.getElementById('main-testimonial-quote');
    const centralCard = document.querySelector('.testimonial-central-card');
    const prevBtn = document.getElementById('testimonial-prev');
    const nextBtn = document.getElementById('testimonial-next');

    let currentIndex = 0;

    const updateTestimonial = (index) => {
        const avatar = floatingAvatars[index];
        // Remove active class from all
        floatingAvatars.forEach(a => a.classList.remove('active'));
        // Add to targeted
        avatar.classList.add('active');

        // Get data
        const name = avatar.getAttribute('data-name');
        const email = avatar.getAttribute('data-email');
        const quote = avatar.getAttribute('data-quote');
        const imgSrc = avatar.querySelector('img').src;

        // Simple fade effect
        centralCard.style.opacity = '0';
        centralCard.style.transform = 'translateY(20px)';

        setTimeout(() => {
            mainName.innerText = name;
            mainEmail.innerText = email;
            mainQuote.innerText = `"${quote}"`;
            mainAvatar.src = imgSrc;

            centralCard.style.opacity = '1';
            centralCard.style.transform = 'translateY(0)';
        }, 300);
    };

    if (floatingAvatars.length > 0 && mainAvatar) {
        floatingAvatars.forEach((avatar, index) => {
            avatar.addEventListener('click', () => {
                currentIndex = index;
                updateTestimonial(currentIndex);
            });
        });

        if (prevBtn && nextBtn) {
            prevBtn.addEventListener('click', () => {
                currentIndex = (currentIndex - 1 + floatingAvatars.length) % floatingAvatars.length;
                updateTestimonial(currentIndex);
            });

            nextBtn.addEventListener('click', () => {
                currentIndex = (currentIndex + 1) % floatingAvatars.length;
                updateTestimonial(currentIndex);
            });
        }
    }
    // 11. Back to Top Button
    const backToTop = document.getElementById('back-to-top');
    if (backToTop) {
        window.addEventListener('scroll', () => {
            if (window.scrollY > 500) {
                backToTop.style.display = 'block';
            } else {
                backToTop.style.display = 'none';
            }
        });

        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    // 13. Lead Form Submission Logic (AJAX submission to FormSubmit.co / Gmail)
    const forms = document.querySelectorAll('form[action*="formsubmit.co"]');
    forms.forEach(form => {
        form.addEventListener("submit", (e) => {
            e.preventDefault();
            
            // Show a loading state on the button
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn ? submitBtn.innerText : "Send Message";
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.innerText = "Sending...";
            }
            
            // Get form action URL and convert to AJAX endpoint if it isn't already
            let actionUrl = form.getAttribute('action');
            if (actionUrl && !actionUrl.includes('/ajax/')) {
                actionUrl = actionUrl.replace('formsubmit.co/', 'formsubmit.co/ajax/');
            }
            
            const formData = new FormData(form);
            
            fetch(actionUrl, {
                method: "POST",
                body: formData,
                headers: {
                    'Accept': 'application/json'
                }
            })
            .then(response => {
                if (response.ok) {
                    return response.json();
                }
                throw new Error('Network response was not ok.');
            })
            .then(data => {
                form.reset();
                window.location.href = "thank-you";
            })
            .catch(error => {
                console.error('Error submitting form:', error);
                // Fallback to standard form submission if AJAX fails
                form.submit();
            })
            .finally(() => {
                if (submitBtn) {
                    submitBtn.disabled = false;
                    submitBtn.innerText = originalBtnText;
                }
            });
        });
    });

    // Modal close logic
    window.closeModal = function () {
        const thankYouModal = document.getElementById("thankYouModal");
        if (thankYouModal) thankYouModal.style.display = "none";
    };

    // Close modal when clicking outside
    window.addEventListener('click', (e) => {
        const thankYouModal = document.getElementById("thankYouModal");
        if (e.target === thankYouModal) {
            closeModal();
        }
    });
});

