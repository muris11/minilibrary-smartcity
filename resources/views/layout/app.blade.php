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

        /* Compact Navigation Styles */
        nav {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 0.5rem 1rem;
            position: sticky;
            top: 0;
            z-index: 100;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
            gap: 1rem;
        }

        .nav-links {
            display: flex;
            gap: 0.3rem;
            flex-wrap: wrap;
            align-items: center;
            flex: 1;
        }

        .nav-btn {
            background: linear-gradient(135deg, #90caf9, #64b5f6);
            color: #1565c0;
            border: none;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.85rem;
            text-transform: capitalize;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 8px rgba(144, 202, 249, 0.3);
            white-space: nowrap;
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

        .dropdown {
            position: relative;
        }

        .dropdown-toggle {
            background: linear-gradient(135deg, #90caf9, #64b5f6);
            color: #1565c0;
            border: none;
            padding: 0.4rem 0.8rem;
            border-radius: 20px;
            cursor: pointer;
            transition: all 0.3s ease;
            font-weight: 500;
            font-size: 0.85rem;
            text-transform: capitalize;
            letter-spacing: 0.3px;
            box-shadow: 0 2px 8px rgba(144, 202, 249, 0.3);
            white-space: nowrap;
        }

        .dropdown-toggle:hover {
            transform: translateY(-1px);
            box-shadow: 0 4px 12px rgba(144, 202, 249, 0.4);
            background: linear-gradient(135deg, #64b5f6, #42a5f5);
            color: white;
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
            padding: 0.4rem 1rem;
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
        @media (max-width: 768px) {
            .container {
                margin: 8px;
                border-radius: 15px;
            }

            h1 {
                font-size: 2rem;
            }

            header {
                padding: 1.5rem 1rem;
            }

            .content {
                padding: 1rem;
            }

            .nav-container {
                flex-direction: column;
                gap: 0.8rem;
            }

            .nav-links {
                justify-content: center;
                gap: 0.2rem;
                max-width: 100%;
                overflow-x: auto;
                padding: 0.2rem;
            }

            .nav-btn {
                padding: 0.35rem 0.6rem;
                font-size: 0.8rem;
                min-width: fit-content;
                flex-shrink: 0;
            }

            .dropdown-toggle {
                width: 100%;
                text-align: left;
            }

            .logout-form {
                margin-left: 0;
                order: -1;
            }

            .pillar-grid {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
                text-align: center;
                gap: 0.3rem;
            }

            .footer-title,
            .footer-copyright {
                font-size: 0.8rem;
            }
        }

        /* Small Mobile Devices */
        @media (max-width: 480px) {
            .nav-links {
                flex-wrap: wrap;
            }

            .nav-btn {
                padding: 0.3rem 0.5rem;
                font-size: 0.75rem;
            }

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
        }

        /* Horizontal scroll for nav on very small screens */
        @media (max-width: 320px) {
            .nav-links {
                flex-wrap: nowrap;
                justify-content: flex-start;
                padding-bottom: 0.5rem;
            }

            .nav-links::-webkit-scrollbar {
                height: 3px;
            }

            .nav-links::-webkit-scrollbar-track {
                background: rgba(144, 202, 249, 0.1);
                border-radius: 2px;
            }

            .nav-links::-webkit-scrollbar-thumb {
                background: rgba(144, 202, 249, 0.5);
                border-radius: 2px;
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
    </style>
</head>

<body class="bg-light">
    <nav>
        <div class="nav-container flex-row d-flex align-items-center justify-content-between"
            style="gap:1rem; flex-wrap:nowrap;">
            <div class="nav-links d-flex align-items-center flex-row flex-nowrap" style="gap:0.3rem;">
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
            <div class="d-flex align-items-center" style="gap:0.5rem;">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle px-3 py-2" type="button" id="userDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false"
                        style="border-radius: 20px; font-weight: 500; background: linear-gradient(135deg, #1565c0, #64b5f6);">
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
        function showSection(sectionId) {
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

        // Add smooth scrolling behavior for better UX
        document.addEventListener('DOMContentLoaded', function() {
            // Initialize scroll button visibility
            const scrollBtn = document.querySelector('.scroll-top');
            scrollBtn.style.display = 'none';
        });
    </script>
</body>

</html>
