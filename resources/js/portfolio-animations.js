document.addEventListener('DOMContentLoaded', function () {
    // Initialize ScrollTrigger
    gsap.registerPlugin(ScrollTrigger);

    // Hero section animation
    const heroTimeline = gsap.timeline();
    heroTimeline
        .fromTo('.hero-title', { opacity: 0 }, {
            opacity: 1,
            duration: 1,
            ease: 'power3.out'
        })
        .fromTo('.hero-title span:first-child', { x: -80 }, {
            x: 0,
            duration: 0.8,
            ease: 'back.out(1.7)'
        }, 0)
        .fromTo('.hero-title span:last-child', { x: 80 }, {
            x: 0,
            duration: 0.8,
            ease: 'back.out(1.7)'
        }, 0)
        .fromTo('.hero-button', { opacity: 0, y: 20 }, {
            opacity: 1,
            y: 0,
            duration: 0.8,
            ease: 'power2.out'
        }, 0.6);

    // Section reveal animations
    const sections = [
        { selector: '.about-section', delay: 0 },
        { selector: '.about-image', delay: 0.2 },
        { selector: '.about-content', delay: 0.4 },
        { selector: '.skills-section', delay: 0 },
        { selector: '.skill-category', delay: 0.1, stagger: 0.1 },
        { selector: '.experience-section', delay: 0 },
        { selector: '.experience-item', delay: 0.2, stagger: 0.3 },
        { selector: '.projects-section', delay: 0 },
        { selector: '.project-item', delay: 0.2, stagger: 0.3 },
        { selector: '.contact-section', delay: 0 },
        { selector: '.contact-info', delay: 0.2 },
        { selector: '.contact-form', delay: 0.4 }
    ];

    sections.forEach(section => {
        gsap.fromTo(section.selector,
            { opacity: 0, y: 30 },
            {
                opacity: 1,
                y: 0,
                duration: 0.8,
                delay: section.delay,
                stagger: section.stagger || 0,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: section.selector,
                    start: 'top 80%',
                    toggleActions: 'play none none none',
                    onEnter: () => {
                        // Reset animation when scrolling back up
                        gsap.to(section.selector, { opacity: 0, y: 30, duration: 0 });
                    }
                }
            }
        );
    });

    // File structure animation for hero section
    const fileStructureAnimation = () => {
        const structureTimeline = gsap.timeline({
            scrollTrigger: {
                trigger: '#hero',
                start: 'top top',
                end: '+=500',
                scrub: 1,
                pin: true,
                anticipatePin: 1
            }
        });

        // Initial portfolio text
        structureTimeline
            .to('.hero-title, .hero-button', { opacity: 0, duration: 0.5 })
            .to('#hero', { backgroundColor: '#1A1A1A', duration: 0.5 })
            .fromTo('.portfolio-text', { opacity: 0 }, { opacity: 1, duration: 0.5 })
            .to('.portfolio-text', {
                text: 'portfolio/',
                duration: 1,
                ease: 'none'
            });

        // Add layouts folder
        structureTimeline
            .to('.portfolio-text', {
                y: -20,
                duration: 0.5
            })
            .fromTo('.layouts-folder', { opacity: 0, y: -20 }, {
                opacity: 1,
                y: 0,
                duration: 0.5
            }, '-=0.25')
            .to('.layouts-folder', {
                text: 'layouts/',
                duration: 0.5
            });

        // Add layout files
        const layoutFiles = ['.base-file', '.head-file', '.navigation-file', '.footer-file'];
        layoutFiles.forEach((file, index) => {
            structureTimeline.fromTo(file,
                { opacity: 0, y: -10 },
                {
                    opacity: 1,
                    y: 0,
                    duration: 0.3,
                    delay: index * 0.1
                },
                index === 0 ? '-=0.25' : '+=0.1'
            );
        });

        // Transition to partials
        structureTimeline
            .to('.layouts-folder, .layout-file', {
                x: -100,
                opacity: 0,
                duration: 0.8,
                ease: 'power2.in'
            })
            .fromTo('.partials-folder', { opacity: 0, scale: 0.8 }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: 'back.out(1.7)'
            })
            .to('.partials-folder', {
                text: 'partials/',
                duration: 0.5
            });

        // Add partial components
        const partialComponents = [
            '.hero-component', '.about-component', '.skills-component',
            '.experience-component', '.education-component', '.projects-component',
            '.timeline-component', '.contact-component'
        ];

        partialComponents.forEach((component, index) => {
            structureTimeline.fromTo(component,
                { opacity: 0, scale: 0.8 },
                {
                    opacity: 1,
                    scale: 1,
                    duration: 0.4,
                    delay: index * 0.05,
                    ease: 'back.out(1.7)'
                },
                index === 0 ? '-=0.25' : '+=0.05'
            );
        });

        // Final composition
        structureTimeline
            .to('.partials-folder, .partial-component', {
                opacity: 0,
                duration: 0.5
            })
            .fromTo('.portfolio-main', { opacity: 0, scale: 0.8 }, {
                opacity: 1,
                scale: 1,
                duration: 0.8,
                ease: 'back.out(1.7)'
            })
            .to('.portfolio-main', {
                text: 'portfolio.blade.php',
                duration: 0.5
            })
            .fromTo('.connecting-line', { scaleX: 0 }, {
                scaleX: 1,
                duration: 0.5,
                ease: 'power2.out'
            })
            .to('.portfolio-main', {
                boxShadow: '0 0 20px rgba(251, 191, 36, 0.3)',
                duration: 0.5,
                repeat: -1,
                yoyo: true,
                ease: 'sine.inOut'
            });
    };

    // Only run file structure animation if screen is wide enough
    if (window.innerWidth > 1024) {
        fileStructureAnimation();
    }

    // Smooth scrolling for anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();

            const targetId = this.getAttribute('href');
            const targetElement = document.querySelector(targetId);

            if (targetElement) {
                window.scrollTo({
                    top: targetElement.offsetTop - 80,
                    behavior: 'smooth'
                });
            }
        });
    });
});