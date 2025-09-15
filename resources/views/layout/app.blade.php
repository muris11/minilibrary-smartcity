<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Mini Library') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Custom CSS should be loaded after Bootstrap for override -->
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background: linear-gradient(135deg, #aee2ff 0%, #e0f2fe 100%);
            min-height: 100vh;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background: none;
            border-radius: 0;
            margin-top: 20px;
            margin-bottom: 20px;
            box-shadow: none;
        }

        header {
            background: linear-gradient(135deg, #aee2ff 0%, #e0f2fe 100%);
            color: #1565c0;
            text-align: center;
            padding: 2rem 1.5rem;
            position: relative;
            overflow: hidden;
        }

        header::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle,
                    rgba(255, 255, 255, 0.1) 0%,
                    transparent 70%);
            animation: pulse 4s ease-in-out infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.3;
            }

            50% {
                transform: scale(1.1);
                opacity: 0.5;
            }
        }

        .header-content {
            position: relative;
            z-index: 2;
        }

        h1 {
            font-size: 2.5rem;
            margin-bottom: 0.5rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);
        }

        .subtitle {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* Enhanced Navigation Styles */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            max-width: 1200px;
            margin: 0 auto;
            gap: 1rem;
        }

        .hamburger-btn {
            display: none;
            background: linear-gradient(135deg, #1565c0, #64b5f6);
            color: white;
            border: none;
            padding: 0.6rem;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1.2rem;
            box-shadow: 0 2px 8px rgba(21, 101, 192, 0.3);
            transition: all 0.3s ease;
            z-index: 101;
            position: relative;
        }

        .hamburger-btn:hover {
            background: linear-gradient(135deg, #1976d2, #42a5f5);
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(21, 101, 192, 0.4);
        }

        .mobile-nav-header {
            display: none;
            justify-content: space-between;
            align-items: center;
            width: 100%;
        }

        .nav-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 0.5rem;
            flex: 1;
            width: 100%;
            transition: all 0.3s ease;
        }

        .nav-links.mobile-hidden {
            display: none;
        }

        .nav-links.mobile-show {
            display: grid;
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.98);
            backdrop-filter: blur(15px);
            padding: 1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            border-radius: 0 0 15px 15px;
            grid-template-columns: 1fr;
            gap: 0.5rem;
            z-index: 100;
            animation: slideDown 0.3s ease-out;
        }

        @keyframes slideDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .nav-btn {
            background: linear-gradient(135deg, #90caf9, #64b5f6);
            color: #1565c0;
            border: none;
            padding: 0.6rem 1rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.85rem;
            text-transform: capitalize;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 8px rgba(144, 202, 249, 0.3);
            white-space: nowrap;
            text-align: center;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .nav-btn:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(144, 202, 249, 0.4);
            background: linear-gradient(135deg, #64b5f6, #42a5f5);
            color: white;
        }

        .nav-btn.active {
            background: linear-gradient(135deg, #1565c0, #1976d2);
            color: white;
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(21, 101, 192, 0.4);
        }

        .user-section {
            min-width: 200px;
            flex-shrink: 0;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            background: linear-gradient(135deg, #1565c0, #64b5f6);
            color: white;
            border: none;
            padding: 0.6rem 1.2rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.85rem;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 8px rgba(21, 101, 192, 0.3);
            white-space: nowrap;
            width: 100%;
            min-height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .dropdown-toggle:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(21, 101, 192, 0.4);
            background: linear-gradient(135deg, #1976d2, #42a5f5);
        }

        .dropdown-menu {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            margin-top: 0.5rem;
        }

        .dropdown-item {
            padding: 0.6rem 1.2rem;
            font-size: 0.85rem;
            color: #333;
            transition: background 0.3s;
        }

        .dropdown-item:hover {
            background: rgba(144, 202, 249, 0.2);
        }

        .content {
            padding: 0;
            max-height: none;
            overflow-y: visible;
            box-shadow: none;
            background: none;
        }

        .section {
            display: none;
            animation: fadeIn 0.5s ease-in-out;
            background: none;
            border-radius: 0;
            box-shadow: none;
            border: none;
            margin-bottom: 0;
            padding: 0;
        }

        .section.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Remove all box/border styles from other elements as well */
        .card,
        .pillar-card,
        .tech-item,
        .quiz-container,
        .question,
        .explanation,
        .reference-list li,
        .highlight {
            background: none !important;
            border: none !important;
            box-shadow: none !important;
            border-radius: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
        }

        .footer-modern {
            background: linear-gradient(135deg, #90caf9 0%, #64b5f6 100%);
            color: #1565c0;
            padding: 0.8rem 1rem;
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            box-shadow: 0 -2px 12px rgba(144, 202, 249, 0.15);
            font-size: 0.85rem;
            margin-top: auto;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.5rem;
        }

        .footer-title {
            font-weight: 600;
            font-size: 0.9rem;
        }

        .footer-copyright {
            opacity: 0.8;
            font-size: 0.8rem;
        }

        .scroll-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            background: linear-gradient(135deg, #aee2ff, #90caf9);
            color: #1565c0;
            border: none;
            width: 45px;
            height: 45px;
            border-radius: 50%;
            cursor: pointer;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            transition: all 0.3s ease;
        }

        .scroll-top:hover {
            box-shadow: 0 6px 20px rgba(144, 202, 249, 0.3);
            transform: translateY(-2px);
        }

        /* Mobile Navigation Improvements */
        @media (max-width: 992px) {
            .nav-links:not(.mobile-show) {
                grid-template-columns: repeat(3, 1fr);
                gap: 0.4rem;
            }
            
            .nav-btn {
                padding: 0.5rem 0.8rem;
                font-size: 0.8rem;
            }
        }

        @media (max-width: 768px) {
            .container {
                margin: 8px;
                padding: 15px;
            }

            h1 {
                font-size: 2rem;
            }

            header {
                padding: 1.5rem 1rem;
            }

            .nav-container {
                flex-direction: column;
                align-items: stretch;
                gap: 0;
                position: relative;
            }

            .mobile-nav-header {
                display: flex;
            }

            .hamburger-btn {
                display: block;
            }

            .nav-links:not(.mobile-show) {
                display: none;
            }

            .nav-links.mobile-show {
                display: grid;
                margin-top: 0;
            }

            .user-section {
                min-width: auto;
                width: auto;
                order: 0;
            }

            .nav-btn {
                padding: 0.6rem 1rem;
                font-size: 0.85rem;
                min-height: 44px;
                text-align: center;
                justify-content: center;
            }

            .dropdown-toggle {
                padding: 0.6rem 1rem;
                font-size: 0.8rem;
                min-height: 44px;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 0.3rem;
                align-items: center;
            }

            .footer-title,
            .footer-copyright {
                font-size: 0.8rem;
            }
        }

        /* Small Mobile Devices */
        @media (max-width: 576px) {
            h1 {
                font-size: 1.8rem;
            }

            .subtitle {
                font-size: 1rem;
            }

            .scroll-top {
                width: 40px;
                height: 40px;
                bottom: 1.5rem;
                right: 1.5rem;
            }

            .container {
                padding: 10px;
            }

            .nav-btn {
                padding: 0.6rem 1rem;
                font-size: 0.8rem;
                min-height: 42px;
            }
        }

        /* Very Small Mobile Devices */
        @media (max-width: 400px) {
            h1 {
                font-size: 1.6rem;
            }

            nav {
                padding: 0.8rem;
            }

            .nav-btn {
                font-size: 0.75rem;
            }

            .dropdown-toggle {
                font-size: 0.75rem;
            }
        }

        /* Loading Animation for Smooth Transitions */
        .nav-btn {
            position: relative;
            overflow: hidden;
        }

        .nav-btn::after {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
            transition: left 0.5s;
        }

        .nav-btn:hover::after {
            left: 100%;
        }

        /* Improved Grid Layout for Navigation */
        @media (min-width: 1200px) {
            .nav-links {
                grid-template-columns: repeat(6, 1fr);
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            .nav-links {
                grid-template-columns: repeat(4, 1fr);
            }
        }
    </style>
</head>

<body class="bg-light">
    <nav>
        <div class="nav-container">
            <!-- Mobile Header with Hamburger -->
            <div class="mobile-nav-header">
                <div class="user-section">
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdown"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <span class="me-2"><i class="bi bi-person-circle"></i></span>{{ Auth::user()->name }}
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdown">
                            <li>
                                <form method="POST" action="/logout" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
                <button class="hamburger-btn" onclick="toggleMobileNav()" type="button" id="hamburgerBtn">
                    <i class="bi bi-list"></i>
                </button>
            </div>

            <!-- Desktop User Section -->
            <div class="user-section d-none d-md-block">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="userDropdownDesktop"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <span class="me-2"><i class="bi bi-person-circle"></i></span>{{ Auth::user()->name }}
                    </button>
                    <ul class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="userDropdownDesktop">
                        <li>
                            <form method="POST" action="/logout" class="d-inline">
                                @csrf
                                <button type="submit" class="dropdown-item text-danger">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="nav-links" id="navLinks">
                <button class="nav-btn active" onclick="showSection('intro')" type="button">Introduction</button>
                <button class="nav-btn" onclick="showSection('pillars')" type="button">6 Pillars</button>
                <button class="nav-btn" onclick="showSection('tech')" type="button">Technology</button>
                <button class="nav-btn" onclick="showSection('benefits')" type="button">Benefits</button>
                <button class="nav-btn" onclick="showSection('challenges')" type="button">Challenges</button>
                <button class="nav-btn" onclick="showSection('stories')" type="button">Case Studies</button>
                <button class="nav-btn" onclick="showSection('indonesia')" type="button">Indonesia</button>
                <button class="nav-btn" onclick="showSection('future')" type="button">Future</button>
                <button class="nav-btn" onclick="showSection('conclusion')" type="button">Conclusion</button>
                <button class="nav-btn" onclick="showSection('references')" type="button">References</button>
                <button class="nav-btn" onclick="showSection('quiz')" type="button">Quiz</button>
            </div>
        </div>
    </nav>

    <main class="container mb-3">
        @yield('content')
    </main>

    <footer class="footer-modern">
        <div class="footer-content">
            <div class="footer-title">Mini Library Smart City Lampung</div>
            <div class="footer-copyright">&copy; {{ date('Y') }} All rights reserved</div>
        </div>
    </footer>

    <button class="scroll-top" onclick="scrollToTop()">↑</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Mobile navigation toggle
        function toggleMobileNav() {
            const navLinks = document.getElementById('navLinks');
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const hamburgerIcon = hamburgerBtn.querySelector('i');
            
            if (navLinks.classList.contains('mobile-show')) {
                navLinks.classList.remove('mobile-show');
                navLinks.classList.add('mobile-hidden');
                hamburgerIcon.className = 'bi bi-list';
            } else {
                navLinks.classList.remove('mobile-hidden');
                navLinks.classList.add('mobile-show');
                hamburgerIcon.className = 'bi bi-x-lg';
            }
        }

        // Close mobile nav when clicking nav buttons
        function closeMobileNavOnClick() {
            if (window.innerWidth <= 768) {
                const navLinks = document.getElementById('navLinks');
                const hamburgerBtn = document.getElementById('hamburgerBtn');
                const hamburgerIcon = hamburgerBtn.querySelector('i');
                
                if (navLinks.classList.contains('mobile-show')) {
                    navLinks.classList.remove('mobile-show');
                    navLinks.classList.add('mobile-hidden');
                    hamburgerIcon.className = 'bi bi-list';
                }
            }
        }

        function showSection(sectionId) {
            // Close mobile nav first
            closeMobileNavOnClick();
            
            // Only run if dashboard sections exist
            if (!document.getElementById(sectionId)) return;

            // Hide all sections
            const sections = document.querySelectorAll('.section');
            sections.forEach(section => {
                section.classList.remove('active');
            });

            // Show selected section
            const selected = document.getElementById(sectionId);
            if (selected) selected.classList.add('active');

            // Update navigation buttons
            const navButtons = document.querySelectorAll('.nav-btn[type="button"]');
            navButtons.forEach(btn => {
                btn.classList.remove('active');
            });

            // Only highlight button if it's not a link
            if (event.target.tagName === 'BUTTON') {
                event.target.classList.add('active');
            }

            // Scroll to top smoothly when switching sections
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Scroll to top functionality
        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        }

        // Show/hide scroll to top button
        window.addEventListener('scroll', function() {
            const scrollBtn = document.querySelector('.scroll-top');
            if (window.pageYOffset > 300) {
                scrollBtn.style.display = 'flex';
            } else {
                scrollBtn.style.display = 'none';
            }
        });

        // Handle window resize
        window.addEventListener('resize', function() {
            const navLinks = document.getElementById('navLinks');
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const hamburgerIcon = hamburgerBtn.querySelector('i');
            
            if (window.innerWidth > 768) {
                // Desktop view - reset mobile nav
                navLinks.classList.remove('mobile-show', 'mobile-hidden');
                hamburgerIcon.className = 'bi bi-list';
            } else {
                // Mobile view - ensure nav is hidden initially
                if (!navLinks.classList.contains('mobile-show')) {
                    navLinks.classList.add('mobile-hidden');
                }
            }
        });

        // Close mobile nav when clicking outside
        document.addEventListener('click', function(event) {
            const navLinks = document.getElementById('navLinks');
            const hamburgerBtn = document.getElementById('hamburgerBtn');
            const navContainer = document.querySelector('.nav-container');
            
            if (window.innerWidth <= 768 && 
                navLinks.classList.contains('mobile-show') && 
                !navContainer.contains(event.target)) {
                
                const hamburgerIcon = hamburgerBtn.querySelector('i');
                navLinks.classList.remove('mobile-show');
                navLinks.classList.add('mobile-hidden');
                hamburgerIcon.className = 'bi bi-list';
            }
        });

        // Add smooth scrolling behavior for better UX
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize scroll button visibility
            const scrollBtn = document.querySelector('.scroll-top');
            scrollBtn.style.display = 'none';
            
            // Initialize mobile nav state
            const navLinks = document.getElementById('navLinks');
            if (window.innerWidth <= 768) {
                navLinks.classList.add('mobile-hidden');
            }
        });
    </script>
</body>

</html>