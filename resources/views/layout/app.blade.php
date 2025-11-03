<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Mini Library Smart City')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('images/lg.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <style>
        :root {
            --primary-color: #1976d2;
            --primary-dark: #1565c0;
            --primary-light: #64b5f6;
            --secondary-color: #0d47a1;
            --accent-color: #29b6f6;
            --text-color: #333333;
            --text-light: #ffffff;
            --bg-color: #f5f7fa;
            --card-bg: #ffffff;
            --shadow-color: rgba(0, 0, 0, 0.08);
            --transition-speed: 0.3s;

            /* Profile/Admin specific variables */
            --profile-radius: 8px;
            --profile-radius-lg: 12px;
            --profile-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            --profile-shadow-lg: 0 4px 20px rgba(0, 0, 0, 0.15);
            --profile-border: #e0e0e0;
            --profile-error: #dc3545;
            --profile-success: #28a745;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.6;
            background: linear-gradient(135deg, #aee2ff 0%, #e0f2fe 100%);
            min-height: 100vh;
            overflow-x: hidden;
            position: relative;
            padding-top: 80px;
            /* Account for fixed nav */
        }

        /* Elegant Background Animation */
        .bg-animation {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            overflow: hidden;
            background: linear-gradient(135deg, #f5f7fa 0%, #e3f2fd 100%);
        }

        .bg-circle {
            position: absolute;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(25, 118, 210, 0.05) 0%, rgba(25, 118, 210, 0) 70%);
            animation: float 20s infinite ease-in-out;
        }

        .bg-circle:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -100px;
            animation-delay: 0s;
        }

        .bg-circle:nth-child(2) {
            width: 400px;
            height: 400px;
            bottom: -200px;
            left: -150px;
            animation-delay: 5s;
        }

        .bg-circle:nth-child(3) {
            width: 250px;
            height: 250px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            animation-delay: 10s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translate(0, 0) scale(1);
            }

            33% {
                transform: translate(30px, -30px) scale(1.05);
            }

            66% {
                transform: translate(-20px, 20px) scale(0.95);
            }
        }

        /* Network Lines Animation */
        .network-lines {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
            opacity: 0.4;
        }

        .network-line {
            position: absolute;
            background: linear-gradient(90deg, transparent, rgba(25, 118, 210, 0.2), transparent);
            height: 1px;
            transform-origin: left center;
            animation: pulse 8s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 0;
            }

            50% {
                opacity: 0.4;
            }
        }

        /* Floating Particles */
        .particles-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
            pointer-events: none;
        }

        .particle {
            position: absolute;
            background-color: rgba(25, 118, 210, 0.4);
            border-radius: 50%;
            pointer-events: none;
            opacity: 0;
            animation: particleFloat 15s infinite;
        }

        @keyframes particleFloat {
            0% {
                transform: translateY(100vh) translateX(0) scale(0);
                opacity: 0;
            }

            10% {
                opacity: 0.4;
                transform: translateY(90vh) translateX(10px) scale(1);
            }

            90% {
                opacity: 0.4;
                transform: translateY(10vh) translateX(20px) scale(1);
            }

            100% {
                transform: translateY(0) translateX(30px) scale(0);
                opacity: 0;
            }
        }

        /* Connection Nodes */
        .connection-node {
            position: absolute;
            width: 8px;
            height: 8px;
            background-color: rgba(25, 118, 210, 0.6);
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(25, 118, 210, 0.4);
            animation: nodePulse 3s infinite;
        }

        @keyframes nodePulse {

            0%,
            100% {
                transform: scale(1);
                opacity: 0.6;
            }

            50% {
                transform: scale(1.5);
                opacity: 1;
            }
        }

        /* Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #1976d2, #0d47a1);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .loading-screen.hidden {
            opacity: 0;
            visibility: hidden;
        }

        .loading-dots {
            display: flex;
            gap: 10px;
        }

        .loading-dot {
            width: 15px;
            height: 15px;
            border-radius: 50%;
            background-color: #ffffff;
            animation: loadingDot 1.5s infinite ease-in-out;
        }

        .loading-dot:nth-child(1) {
            animation-delay: 0s;
        }

        .loading-dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .loading-dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes loadingDot {

            0%,
            100% {
                transform: translateY(0);
                opacity: 0.5;
            }

            50% {
                transform: translateY(-20px);
                opacity: 1;
            }
        }

        /* Scroll Progress Bar */
        .scroll-progress {
            position: fixed;
            top: 0;
            left: 0;
            width: 0%;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            z-index: 1000;
            transition: width 0.2s ease;
        }

        /* Parallax Elements */
        .parallax-element {
            position: absolute;
            pointer-events: none;
            opacity: 0.1;
            z-index: -1;
        }

        .parallax-circle {
            border-radius: 50%;
            background: var(--primary-color);
        }

        /* Floating Action Button */
        .fab {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 56px;
            height: 56px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: var(--text-light);
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.3);
            cursor: pointer;
            transition: all var(--transition-speed) ease;
            z-index: 100;
            opacity: 0;
            animation: fabReveal 1s forwards;
            animation-delay: 2s;
        }

        @keyframes fabReveal {
            from {
                opacity: 0;
                transform: scale(0);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .fab:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.4);
        }

        .fab i {
            font-size: 1.5rem;
            transition: transform 0.3s ease;
        }

        .fab:hover i {
            transform: translateY(-3px);
        }

        /* ===== NAVIGATION ===== */
        nav {
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.98), rgba(248, 250, 252, 0.95));
            backdrop-filter: blur(15px);
            padding: 1.2rem 1rem;
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 1000;
            box-shadow: 0 8px 32px rgba(25, 118, 210, 0.1);
            border-bottom: 1px solid rgba(25, 118, 210, 0.1);
        }

        .nav-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 2rem;
        }

        /* Desktop Navigation */
        .nav-links {
            display: flex;
            gap: 0.8rem;
            flex: 1 1 0%;
            min-width: 0;
            justify-content: center;
            max-width: 900px;
        }

        .nav-btn {
            background: linear-gradient(135deg, #1976d2, #1565c0);
            color: white;
            border: none;
            padding: 0.8rem 1.4rem;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            font-size: 0.95rem;
            box-shadow: 0 4px 16px rgba(25, 118, 210, 0.15);
            transition: all 0.3s ease;
            white-space: nowrap;
            position: relative;
            overflow: hidden;
            pointer-events: auto;
        }

        .nav-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .nav-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .nav-btn:hover {
            background: linear-gradient(135deg, #1565c0, #0d47a1);
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(25, 118, 210, 0.25);
        }

        .nav-btn.active {
            background: linear-gradient(135deg, #f8b500, #ff9800);
            box-shadow: 0 6px 20px rgba(248, 181, 0, 0.3);
        }

        /* Admin Navigation Styles */
        .admin-nav-btn {
            background: linear-gradient(135deg, #dc3545, #c82333) !important;
            color: white !important;
            text-decoration: none !important;
            display: inline-flex !important;
            align-items: center !important;
            justify-content: center !important;
        }

        .admin-nav-btn:hover {
            background: linear-gradient(135deg, #c82333, #a02622) !important;
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(220, 53, 69, 0.3);
        }

        .nav-divider {
            width: 2px;
            height: 40px;
            background: rgba(255, 255, 255, 0.3);
            margin: 0 1rem;
            border-radius: 1px;
        }

        /* User Section */
        .user-section {
            display: flex;
            min-width: 200px;
            justify-content: flex-end;
            flex-shrink: 0;
        }

        .dropdown-toggle {
            background: linear-gradient(135deg, #1976d2, #1565c0);
            border: none;
            border-radius: 30px;
            padding: 0.8rem 1.5rem;
            color: white !important;
            font-weight: 600;
            font-size: 0.95rem;
            box-shadow: 0 4px 16px rgba(25, 118, 210, 0.15);
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .dropdown-toggle:hover {
            background: linear-gradient(135deg, #1565c0, #0d47a1);
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.25);
            color: white !important;
        }

        .dropdown-toggle img {
            border: 2px solid rgba(255, 255, 255, 0.3);
        }

        .dropdown-menu {
            background: white;
            border: none;
            border-radius: 15px;
            box-shadow: 0 10px 40px rgba(0, 0, 0, 0.1);
            margin-top: 0.5rem;
            padding: 0.5rem 0;
            z-index: 1050;
            position: relative;
        }

        .dropdown-item {
            padding: 0.8rem 1.5rem;
            transition: all 0.3s ease;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, #e3f2fd, #f0f8ff);
            color: #1976d2;
        }

        .dropdown-item.text-danger:hover {
            background: linear-gradient(135deg, #ffebee, #fce4ec);
            color: #d32f2f;
        }

        /* Desktop Navigation - Ensure visible on desktop */
        @media (min-width: 769px) {
            .nav-links {
                display: flex !important;
            }
        }

        /* ===== MAIN CONTENT ===== */
        .main-content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            position: relative;
            z-index: 10;
        }

        /* Section Styles */
        .section {
            display: block;
            padding: 2rem 0;
            animation: fadeIn 0.8s ease;
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

        /* Header Styles */
        h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: var(--primary-color);
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        h1::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, var(--primary-color), var(--accent-color));
            border-radius: 3px;
            animation: expandWidth 1.5s forwards;
        }

        @keyframes expandWidth {
            from {
                width: 0;
            }

            to {
                width: 100px;
            }
        }

        h2 {
            font-size: 2rem;
            font-weight: 600;
            margin: 2rem 0 1rem 0;
            color: var(--primary-color);
            text-align: center;
            position: relative;
        }

        h2::before {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 2px;
            background-color: var(--primary-light);
            border-radius: 2px;
            animation: expandWidth 1.5s forwards;
        }

        h3 {
            font-size: 1.5rem;
            font-weight: 600;
            margin: 1.5rem 0 1rem 0;
            color: var(--primary-dark);
            position: relative;
            padding-left: 20px;
        }

        h3::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 8px;
            height: 8px;
            background-color: var(--primary-light);
            border-radius: 50%;
            animation: nodePulse 3s infinite;
        }

        /* Paragraph Styles */
        p {
            margin-bottom: 1.2rem;
            font-size: 1.1rem;
            line-height: 1.7;
            color: var(--text-color);
            opacity: 0;
            animation: fadeInUp 0.8s forwards;
        }

        p:nth-child(1) {
            animation-delay: 0.1s;
        }

        p:nth-child(2) {
            animation-delay: 0.2s;
        }

        p:nth-child(3) {
            animation-delay: 0.3s;
        }

        p:nth-child(4) {
            animation-delay: 0.4s;
        }

        p:nth-child(5) {
            animation-delay: 0.5s;
        }

        p:nth-child(6) {
            animation-delay: 0.6s;
        }

        p:nth-child(7) {
            animation-delay: 0.7s;
        }

        p:nth-child(8) {
            animation-delay: 0.8s;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Image Styles */
        .modern-image-container {
            text-align: center;
            margin: 2rem 0;
            position: relative;
            overflow: hidden;
            border-radius: 16px;
        }

        .modern-image {
            max-width: 100%;
            height: auto;
            border-radius: 16px;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            transition: all var(--transition-speed) ease;
            opacity: 0;
            animation: zoomIn 0.8s forwards;
        }

        .modern-image:nth-of-type(1) {
            animation-delay: 0.5s;
        }

        .modern-image:nth-of-type(2) {
            animation-delay: 1.5s;
        }

        @keyframes zoomIn {
            from {
                opacity: 0;
                transform: scale(0.95);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .modern-image:hover {
            transform: scale(1.02);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        .modern-image-container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, transparent, rgba(25, 118, 210, 0.1), transparent);
            transform: translateX(-100%);
            transition: transform 0.6s;
            border-radius: 16px;
        }

        .modern-image-container:hover::before {
            transform: translateX(100%);
        }

        /* Video Container Styles */
        .video-container-wrapper {
            text-align: center;
            margin: 2rem 0;
            position: relative;
        }

        .video-container {
            position: relative;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding-bottom: 56.25%;
            height: 0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
            border-radius: 16px;
        }

        /* Table Styles */
        .modern-table-container {
            margin: 2rem 0;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            opacity: 0;
            animation: fadeInUp 0.8s forwards;
            animation-delay: 1.8s;
        }

        .custom-table {
            width: 100%;
            border-collapse: collapse;
            background: var(--card-bg);
            font-size: 1rem;
        }

        .custom-table th {
            background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
            color: var(--text-light);
            padding: 1rem;
            text-align: left;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .custom-table td {
            padding: 1rem;
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            color: var(--text-color);
        }

        .custom-table tbody tr {
            transition: all var(--transition-speed) ease;
            transform: translateX(-10px);
            opacity: 0;
            animation: slideInFromLeft 0.5s forwards;
        }

        .custom-table tbody tr:nth-child(1) {
            animation-delay: 2.2s;
        }

        .custom-table tbody tr:nth-child(2) {
            animation-delay: 2.4s;
        }

        .custom-table tbody tr:nth-child(3) {
            animation-delay: 2.6s;
        }

        .custom-table tbody tr:nth-child(4) {
            animation-delay: 2.8s;
        }

        .custom-table tbody tr:nth-child(5) {
            animation-delay: 3s;
        }

        @keyframes slideInFromLeft {
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .custom-table tbody tr:hover {
            background-color: rgba(25, 118, 210, 0.05);
            transform: translateX(5px);
        }

        /* Button Styles */
        .custom-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 0.6rem 1.5rem;
            background: linear-gradient(90deg, var(--primary-color), var(--primary-dark));
            color: var(--text-light);
            text-decoration: none;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all var(--transition-speed) ease;
            box-shadow: 0 4px 15px rgba(25, 118, 210, 0.2);
            position: relative;
            overflow: hidden;
        }

        .custom-btn i {
            margin-left: 5px;
            font-size: 1rem;
            transition: transform 0.3s ease;
        }

        .custom-btn::before {
            content: '';
            position: absolute;
            top: 50%;
            left: 50%;
            width: 0;
            height: 0;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.2);
            transform: translate(-50%, -50%);
            transition: width 0.6s, height 0.6s;
        }

        .custom-btn:hover::before {
            width: 300px;
            height: 300px;
        }

        .custom-btn:hover {
            background: linear-gradient(90deg, var(--primary-dark), var(--secondary-color));
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(25, 118, 210, 0.3);
            color: var(--text-light);
        }

        .custom-btn:hover i {
            transform: translateX(3px);
        }

        /* Card Component */
        .card {
            background: var(--card-bg);
            border-radius: 16px;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.12);
            transition: all var(--transition-speed) ease;
            transform: translateY(0);
            opacity: 0;
            animation: cardReveal 0.8s forwards;
        }

        .card:nth-child(1) {
            animation-delay: 0.2s;
        }

        .card:nth-child(2) {
            animation-delay: 0.4s;
        }

        .card:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes cardReveal {
            from {
                opacity: 0;
                transform: translateY(30px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.15);
        }

        /* Reveal Animation */
        .reveal {
            opacity: 0;
            transform: translateY(20px);
            transition: all 0.8s ease;
        }

        .reveal-visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* ===== RESPONSIVE DESIGN ===== */
        @media (max-width: 768px) {

            /* Mobile Navigation Layout */
            .nav-container {
                flex-direction: column;
                gap: 1rem;
            }

            /* Show Mobile Header */
            .mobile-header {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                order: 1;
            }

            .hamburger-btn {
                background: linear-gradient(135deg, #1976d2, #1565c0);
                color: white;
                border: none;
                padding: 0.8rem 1rem;
                border-radius: 12px;
                cursor: pointer;
                font-size: 1.2rem;
                box-shadow: 0 4px 12px rgba(25, 118, 210, 0.2);
                transition: all 0.3s ease;
                display: flex;
                align-items: center;
                justify-content: center;
                min-width: 50px;
            }

            .hamburger-btn:hover {
                background: linear-gradient(135deg, #1565c0, #0d47a1);
            }

            .mobile-user {
                flex: 1;
                display: flex;
                justify-content: flex-end;
                position: relative;
            }

            .mobile-user .dropdown {
                position: relative;
            }

            .mobile-user .dropdown-toggle {
                padding: 0.7rem 1.2rem;
                white-space: nowrap;
                overflow: hidden;
            }

            .mobile-user .dropdown-toggle span {
                max-width: 120px;
                overflow: hidden;
                text-overflow: ellipsis;
            }

            /* Hide Desktop User Section */
            .user-section {
                display: none;
            }

            /* Navigation Links - Collapsed by default */
            .nav-links {
                display: none;
                order: 2;
            }

            .nav-links.mobile-show {
                display: flex;
                flex-direction: column;
                width: 100%;
                gap: 0.8rem;
                padding: 1rem 0;
                background: rgba(255, 255, 255, 0.05);
                border-radius: 15px;
            }

            .nav-links.mobile-show .nav-btn {
                width: 100%;
                text-align: center;
                padding: 1rem 1.5rem;
            }

            /* Content */
            .main-content-wrapper {
                margin: 1rem;
                padding: 1.5rem;
            }

            h1 {
                font-size: 2rem !important;
                margin-bottom: 1rem !important;
            }

            h2 {
                font-size: 1.7rem !important;
                margin: 1.5rem 0 0.8rem 0 !important;
            }

            h3 {
                font-size: 1.3rem !important;
                margin: 1.2rem 0 0.8rem 0 !important;
            }

            p {
                font-size: 1rem !important;
                line-height: 1.6 !important;
                margin-bottom: 1rem !important;
            }

            .modern-image-container {
                margin: 1.5rem 0 !important;
            }

            .video-container-wrapper {
                margin: 1.5rem 0 !important;
            }

            .custom-table th,
            .custom-table td {
                padding: 0.8rem 0.5rem !important;
                font-size: 0.9rem !important;
            }

            .custom-btn {
                padding: 0.6rem 1.2rem !important;
                font-size: 0.85rem !important;
            }

            .card {
                padding: 1.5rem;
            }

            .fab {
                bottom: 20px;
                right: 20px;
                width: 48px;
                height: 48px;
            }
        }

        @media (max-width: 480px) {
            .hamburger-btn {
                padding: 0.7rem 0.9rem;
                font-size: 1.1rem;
            }

            .mobile-user .dropdown-toggle {
                padding: 0.6rem 1rem;
                font-size: 0.9rem;
            }

            .mobile-user .dropdown-toggle span {
                max-width: 80px;
            }

            .mobile-user .dropdown-toggle img {
                width: 28px;
                height: 28px;
            }

            .main-content-wrapper {
                margin: 0.5rem;
                padding: 1rem;
            }

            h1 {
                font-size: 1.7rem !important;
            }

            h2 {
                font-size: 1.4rem !important;
            }

            h3 {
                font-size: 1.2rem !important;
            }

            p {
                font-size: 0.95rem !important;
            }

            .custom-table {
                font-size: 0.85rem !important;
            }

            .custom-table th,
            .custom-table td {
                padding: 0.6rem 0.4rem !important;
            }

            .custom-btn {
                padding: 0.5rem 1rem !important;
                font-size: 0.8rem !important;
            }

            .card {
                padding: 1rem;
            }
        }
    </style>
    @stack('styles')
</head>

<body>
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loading-dots">
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
            <div class="loading-dot"></div>
        </div>
    </div>

    <!-- Scroll Progress Bar -->
    <div class="scroll-progress" id="scrollProgress"></div>

    <!-- Background Animation -->
    <div class="bg-animation">
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
        <div class="bg-circle"></div>
    </div>

    <!-- Network Lines -->
    <div class="network-lines" id="networkLines"></div>

    <!-- Floating Particles -->
    <div class="particles-container" id="particlesContainer"></div>

    <!-- Parallax Elements -->
    <div class="parallax-element parallax-circle" style="width: 100px; height: 100px; top: 10%; left: 5%;"></div>
    <div class="parallax-element parallax-circle" style="width: 150px; height: 150px; top: 60%; right: 10%;"></div>
    <div class="parallax-element parallax-circle" style="width: 80px; height: 80px; bottom: 20%; left: 15%;"></div>

    <!-- Floating Action Button -->
    <div class="fab" id="scrollTop">
        <i class="material-icons">keyboard_arrow_up</i>
    </div>

    <nav>
        <div class="nav-container">
            <!-- Mobile Header (visible on mobile only) -->
            <div class="mobile-header d-flex d-md-none">
                <button class="hamburger-btn" onclick="toggleMobileNav()" type="button" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <div class="mobile-user ms-auto">
                    @auth
                        <div class="dropdown">
                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=1976d2&color=fff&size=32"
                                    alt="User Avatar" class="rounded-circle" width="32" height="32">
                                <span>{{ Auth::user()->name }}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li><a class="dropdown-item" href="{{ route('profile') }}"><i
                                            class="bi bi-person me-2"></i>Profile</a>
                                </li>
                                <li><a class="dropdown-item" href="{{ route('setting') }}"><i
                                            class="bi bi-gear me-2"></i>Settings</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                        @csrf
                                        <button type="submit" class="dropdown-item text-danger">
                                            <i class="bi bi-box-arrow-right me-2"></i>Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a href="{{ route('login') }}" class="btn btn-sm btn-primary">Login</a>
                    @endauth
                </div>
            </div>

            <!-- Navigation Links -->
            <div class="nav-links" id="navLinks">
                @auth
                    @if (Auth::user() && Auth::user()->role === 'admin')
                        <!-- Admin Navigation Only -->
                        <a href="{{ route('admin.dashboard') }}" class="nav-btn admin-nav-btn">
                            <i class="bi bi-speedometer2 me-1"></i>Admin Dashboard
                        </a>
                        <a href="{{ route('admin.users') }}" class="nav-btn admin-nav-btn">
                            <i class="bi bi-people me-1"></i>Manage Users
                        </a>
                        <a href="{{ route('admin.team-members') }}" class="nav-btn admin-nav-btn">
                            <i class="bi bi-people me-1"></i>Manage Team
                        </a>
                        <a href="{{ route('admin.partials') }}" class="nav-btn admin-nav-btn">
                            <i class="bi bi-layout-text-sidebar me-1"></i>Edit Sections
                        </a>
                    @else
                        <!-- Public Navigation for Regular Users -->
                        <button
                            class="nav-btn {{ !request()->routeIs('page.*') || request()->route('page.slug') === 'intro' ? 'active' : '' }}"
                            data-section="intro" onclick="navigateToSection('intro')" type="button">
                            <i class="bi bi-house-door me-1"></i>Introduction
                        </button>
                        <button class="nav-btn {{ request()->route('page.slug') === 'pillars' ? 'active' : '' }}"
                            data-section="pillars" onclick="navigateToSection('pillars')" type="button">
                            <i class="bi bi-stack me-1"></i>6 Pillars
                        </button>
                        <button class="nav-btn {{ request()->route('page.slug') === 'challenges' ? 'active' : '' }}"
                            data-section="challenges" onclick="navigateToSection('challenges')" type="button">
                            <i class="bi bi-geo-alt me-1"></i>Lampung City
                        </button>
                        <button class="nav-btn {{ request()->route('page.slug') === 'technologies' ? 'active' : '' }}"
                            data-section="technologies" onclick="navigateToSection('technologies')" type="button">
                            <i class="bi bi-cpu me-1"></i>Technology
                        </button>
                        <button class="nav-btn {{ request()->route('page.slug') === 'benefits' ? 'active' : '' }}"
                            data-section="benefits" onclick="navigateToSection('benefits')" type="button">
                            <i class="bi bi-graph-up me-1"></i>Benefits
                        </button>
                        <button class="nav-btn {{ request()->route('page.slug') === 'team' ? 'active' : '' }}"
                            data-section="team" onclick="navigateToSection('team')" type="button">
                            <i class="bi bi-people-fill me-1"></i>Our Team
                        </button>
                        <button class="nav-btn {{ request()->route('page.slug') === 'quiz' ? 'active' : '' }}"
                            data-section="quiz" onclick="navigateToSection('quiz')" type="button">
                            <i class="bi bi-question-circle me-1"></i>Quiz
                        </button>
                    @endif
                @else
                    <!-- Public Navigation for Guests -->
                    <button
                        class="nav-btn {{ !request()->routeIs('page.*') || request()->route('page.slug') === 'intro' ? 'active' : '' }}"
                        data-section="intro" onclick="navigateToSection('intro')" type="button">
                        <i class="bi bi-house-door me-1"></i>Introduction
                    </button>
                    <button class="nav-btn {{ request()->route('page.slug') === 'pillars' ? 'active' : '' }}"
                        data-section="pillars" onclick="navigateToSection('pillars')" type="button">
                        <i class="bi bi-stack me-1"></i>6 Pillars
                    </button>
                    <button class="nav-btn {{ request()->route('page.slug') === 'challenges' ? 'active' : '' }}"
                        data-section="challenges" onclick="navigateToSection('challenges')" type="button">
                        <i class="bi bi-geo-alt me-1"></i>Lampung City
                    </button>
                    <button class="nav-btn {{ request()->route('page.slug') === 'technologies' ? 'active' : '' }}"
                        data-section="technologies" onclick="navigateToSection('technologies')" type="button">
                        <i class="bi bi-cpu me-1"></i>Technology
                    </button>
                    <button class="nav-btn {{ request()->route('page.slug') === 'benefits' ? 'active' : '' }}"
                        data-section="benefits" onclick="navigateToSection('benefits')" type="button">
                        <i class="bi bi-graph-up me-1"></i>Benefits
                    </button>
                    <button class="nav-btn {{ request()->route('page.slug') === 'team' ? 'active' : '' }}"
                        data-section="team" onclick="navigateToSection('team')" type="button">
                        <i class="bi bi-people-fill me-1"></i>Our Team
                    </button>
                    <button class="nav-btn {{ request()->route('page.slug') === 'quiz' ? 'active' : '' }}"
                        data-section="quiz" onclick="navigateToSection('quiz')" type="button">
                        <i class="bi bi-question-circle me-1"></i>Quiz
                    </button>
                @endauth
            </div>

            <!-- Desktop User Section (visible on desktop only) -->
            <div class="user-section d-none d-md-flex">
                @auth
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="https://ui-avatars.com/api/?name={{ urlencode(Auth::user()->name) }}&background=1976d2&color=fff&size=32"
                                alt="User Avatar" class="rounded-circle" width="32" height="32">
                            <span>{{ Auth::user()->name }}</span>
                        </button>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="{{ route('profile') }}"><i
                                        class="bi bi-person me-2"></i>Profile</a></li>
                            <li><a class="dropdown-item" href="{{ route('setting') }}"><i
                                        class="bi bi-gear me-2"></i>Settings</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST" class="d-inline">
                                    @csrf
                                    <button type="submit" class="dropdown-item text-danger">
                                        <i class="bi bi-box-arrow-right me-2"></i>Logout
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @else
                    <a href="{{ route('login') }}" class="btn btn-outline-primary me-2 d-none d-md-inline">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-primary d-none d-md-inline">Register</a>
                @endauth
            </div>
        </div>
    </nav>

    <main class="container">
        <div class="main-content-wrapper">
            @yield('content')
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Loading Screen
        window.addEventListener('load', function() {
            setTimeout(function() {
                document.getElementById('loadingScreen').classList.add('hidden');
            }, 1000);
        });

        // Scroll Progress Bar
        window.addEventListener('scroll', function() {
            const scrollHeight = document.documentElement.scrollHeight - window.innerHeight;
            const scrollPosition = window.scrollY;
            const scrollPercentage = (scrollPosition / scrollHeight) * 100;
            document.getElementById('scrollProgress').style.width = scrollPercentage + '%';
        });

        // Scroll to Top
        document.getElementById('scrollTop').addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

        // Network Lines Animation
        function createNetworkLines() {
            const networkLines = document.getElementById('networkLines');
            const lineCount = 15;

            for (let i = 0; i < lineCount; i++) {
                const line = document.createElement('div');
                line.classList.add('network-line');

                // Random position
                const posX = Math.random() * window.innerWidth;
                const posY = Math.random() * window.innerHeight;
                line.style.left = `${posX}px`;
                line.style.top = `${posY}px`;

                // Random width
                const width = Math.random() * 200 + 50;
                line.style.width = `${width}px`;

                // Random rotation
                const rotation = Math.random() * 360;
                line.style.transform = `rotate(${rotation}deg)`;

                // Random animation duration
                const duration = Math.random() * 5 + 3;
                line.style.animationDuration = `${duration}s`;

                // Random animation delay
                const delay = Math.random() * 5;
                line.style.animationDelay = `${delay}s`;

                networkLines.appendChild(line);
            }
        }

        createNetworkLines();

        // Floating Particles
        function createParticles() {
            const particlesContainer = document.getElementById('particlesContainer');
            const particleCount = 30;

            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.classList.add('particle');

                // Random size
                const size = Math.random() * 6 + 2;
                particle.style.width = `${size}px`;
                particle.style.height = `${size}px`;

                // Random position
                const posX = Math.random() * window.innerWidth;
                particle.style.left = `${posX}px`;

                // Random animation duration
                const duration = Math.random() * 15 + 10;
                particle.style.animationDuration = `${duration}s`;

                // Random animation delay
                const delay = Math.random() * 5;
                particle.style.animationDelay = `${delay}s`;

                particlesContainer.appendChild(particle);
            }
        }

        createParticles();

        // Connection Nodes
        function createConnectionNodes() {
            const nodeCount = 8;

            for (let i = 0; i < nodeCount; i++) {
                const node = document.createElement('div');
                node.classList.add('connection-node');

                // Random position
                const posX = Math.random() * window.innerWidth;
                const posY = Math.random() * window.innerHeight;
                node.style.left = `${posX}px`;
                node.style.top = `${posY}px`;

                // Random animation delay
                const delay = Math.random() * 3;
                node.style.animationDelay = `${delay}s`;

                document.querySelector('.particles-container').appendChild(node);
            }
        }

        createConnectionNodes();

        // Parallax Effect
        window.addEventListener('scroll', () => {
            const scrolled = window.pageYOffset;
            const parallaxElements = document.querySelectorAll('.parallax-element');

            parallaxElements.forEach((element, index) => {
                const speed = 0.5 + (index * 0.1);
                element.style.transform = `translateY(${scrolled * speed}px)`;
            });
        });

        // Button Ripple Effect
        const buttons = document.querySelectorAll('.custom-btn, .nav-btn');
        buttons.forEach(button => {
            button.addEventListener('click', function(e) {
                const ripple = document.createElement('span');
                const rect = this.getBoundingClientRect();
                const size = Math.max(rect.width, rect.height);
                const x = e.clientX - rect.left - size / 2;
                const y = e.clientY - rect.top - size / 2;

                ripple.style.width = ripple.style.height = size + 'px';
                ripple.style.left = x + 'px';
                ripple.style.top = y + 'px';
                ripple.classList.add('ripple');

                this.appendChild(ripple);

                setTimeout(() => {
                    ripple.remove();
                }, 600);
            });
        });

        // Mouse Interaction with Particles
        document.addEventListener('mousemove', (e) => {
            const mouseX = e.clientX;
            const mouseY = e.clientY;
            const particles = document.querySelectorAll('.particle');

            particles.forEach(particle => {
                const rect = particle.getBoundingClientRect();
                const particleX = rect.left + rect.width / 2;
                const particleY = rect.top + rect.height / 2;

                const distanceX = mouseX - particleX;
                const distanceY = mouseY - particleY;
                const distance = Math.sqrt(distanceX * distanceX + distanceY * distanceY);

                if (distance < 100) {
                    const force = (100 - distance) / 100;
                    const moveX = distanceX * force * 0.1;
                    const moveY = distanceY * force * 0.1;

                    particle.style.transform = `translate(${moveX}px, ${moveY}px)`;
                } else {
                    particle.style.transform = 'translate(0, 0)';
                }
            });
        });

        // Navigation Functions
        function updateActiveNav(sectionId) {
            const navButtons = document.querySelectorAll('.nav-btn');
            navButtons.forEach(btn => {
                const isActive = btn.getAttribute('data-section') === sectionId;
                btn.classList.toggle('active', !!isActive);
            });
        }

        function navigateToSection(sectionId) {
            // Check if we're already on the dashboard page
            const dashboardUrl = '{{ route('dashboard') }}';
            const currentPath = window.location.pathname;

            if (currentPath === dashboardUrl || currentPath === '/') {
                // Already on dashboard, just show the section
                showSection(sectionId);
            } else {
                // Redirect to dashboard with hash
                window.location.href = dashboardUrl + '#' + sectionId;
            }
        }

        function showSection(sectionId) {
            // Close mobile nav if open
            closeMobileNav();

            // Hide all sections
            const allSections = document.querySelectorAll('.section');
            allSections.forEach(section => {
                section.classList.remove('active');
                section.style.display = 'none';
            });

            // Show the selected section
            const element = document.getElementById(sectionId);
            if (element) {
                element.classList.add('active');
                element.style.display = 'block';

                // Add animations for team section
                if (sectionId === 'team') {
                    animateTeamSection();
                }

                // Add animations for quiz section
                if (sectionId === 'quiz') {
                    animateQuizSection();
                }
            }

            // Update nav button active state centrally
            updateActiveNav(sectionId);
        }

        function animateTeamSection() {
            // Animate team stats with stagger
            const statItems = document.querySelectorAll('.stat-item');
            statItems.forEach((item, index) => {
                setTimeout(() => {
                    item.style.animation = 'staggerFadeIn 0.6s ease-out forwards';
                }, index * 150);
            });

            // Animate team cards with stagger
            const teamCards = document.querySelectorAll('.team-card');
            teamCards.forEach((card, index) => {
                setTimeout(() => {
                    card.style.animation = 'cardSlideIn 0.8s ease-out forwards';
                }, index * 200);
            });

            // Animate contact section
            const contactSection = document.querySelector('.contact-section');
            if (contactSection) {
                setTimeout(() => {
                    contactSection.style.animation = 'slideInUp 0.8s ease-out forwards';
                }, 800);
            }
        }

        function animateQuizSection() {
            // Animate quiz questions with stagger
            const quizQuestions = document.querySelectorAll('.quiz-question');
            quizQuestions.forEach((question, index) => {
                setTimeout(() => {
                    question.style.animation = 'cardSlideIn 0.8s ease-out forwards';
                }, index * 150);
            });

            // Animate quiz actions
            const quizActions = document.querySelector('.quiz-actions');
            if (quizActions) {
                setTimeout(() => {
                    quizActions.style.animation = 'slideInUp 0.8s ease-out forwards';
                }, 1000);
            }
        }

        function toggleMobileNav() {
            const navLinks = document.getElementById('navLinks');
            if (navLinks) {
                navLinks.classList.toggle('mobile-show');
            }
        }

        function closeMobileNav() {
            const navLinks = document.getElementById('navLinks');
            if (navLinks && window.innerWidth <= 768) {
                navLinks.classList.remove('mobile-show');
            }
        }

        // Close mobile nav when clicking outside
        document.addEventListener('click', function(event) {
            const nav = document.querySelector('.nav-container');
            const hamburger = document.querySelector('.hamburger-btn');

            if (window.innerWidth <= 768 && !nav.contains(event.target) && !hamburger.contains(event.target)) {
                closeMobileNav();
            }
        });

        // IntersectionObserver to animate elements with data-animate when visible
        const io = ('IntersectionObserver' in window) ? new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('reveal-visible');
                    io.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        }) : null;

        function observeReveal(root = document) {
            if (!io) return;
            root.querySelectorAll('[data-animate]').forEach(el => {
                el.classList.add('reveal');
                io.observe(el);
            });
        }

        // Initial setup
        window.addEventListener('DOMContentLoaded', () => {
            // Handle hash navigation
            const hash = window.location.hash.substring(1);
            if (hash && typeof showSection === 'function') {
                showSection(hash);
            } else {
                // ensure nav reflects default active section (intro)
                updateActiveNav('intro');
            }
            // Auto-tag default elements for reveal animations
            const autoTargets = document.querySelectorAll([
                'h1',
                'h2',
                '.card',
                '.team-card',
                '.modern-image',
                '.video-container',
                '.custom-table',
                '.team-stats .stat-item',
                '.contact-item',
                'form div'
            ].join(','));
            autoTargets.forEach(el => el.setAttribute('data-animate', ''));
            observeReveal(document);
        });
    </script>
    @stack('scripts')
</body>

</html>
