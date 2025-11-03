<!-- Quiz Section -->
<div id="quiz" class="section">
    <style>
        /* General Styles */
        #quiz {
            font-family: 'Arial', sans-serif;
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            animation: fadeIn 1s ease-in-out;
        }

        .card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            margin-bottom: 1.5rem;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
        }

        h1 {
            color: #1976d2;
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            animation: slideInFromTop 1s ease-out;
        }

        /* Quiz Progress */
        .quiz-progress-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 1rem;
        }

        .quiz-progress {
            width: 70%;
            height: 10px;
            background: #e0e0e0;
            border-radius: 5px;
            overflow: hidden;
        }

        .quiz-progress__bar {
            height: 100%;
            background: linear-gradient(90deg, #ff9800, #ff5722);
            width: 0%;
            transition: width 0.5s ease;
            animation: progressGlow 2s infinite alternate;
        }

        .quiz-progress__text {
            font-weight: bold;
            color: #333;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Quiz Questions */
        .quiz-question {
            margin-bottom: 2rem;
            padding: 1rem;
            border-left: 5px solid #1976d2;
            background: #f9f9f9;
            border-radius: 8px;
            animation: slideInFromLeft 0.8s ease-out;
            animation-fill-mode: both;
        }

        .quiz-question:nth-child(1) {
            animation-delay: 0.1s;
        }

        .quiz-question:nth-child(2) {
            animation-delay: 0.2s;
        }

        .quiz-question:nth-child(3) {
            animation-delay: 0.3s;
        }

        .quiz-question:nth-child(4) {
            animation-delay: 0.4s;
        }

        .quiz-question:nth-child(5) {
            animation-delay: 0.5s;
        }

        .quiz-question:nth-child(6) {
            animation-delay: 0.6s;
        }

        .quiz-question:nth-child(7) {
            animation-delay: 0.7s;
        }

        .quiz-question:nth-child(8) {
            animation-delay: 0.8s;
        }

        .quiz-question:nth-child(9) {
            animation-delay: 0.9s;
        }

        .quiz-question:nth-child(10) {
            animation-delay: 1s;
        }

        .quiz-question label {
            font-weight: bold;
            color: #333;
            margin-bottom: 1rem;
            display: block;
        }

        .quiz-options {
            margin-top: 0.5rem;
        }

        .quiz-options input[type="radio"] {
            margin-right: 0.5rem;
            transform: scale(1.2);
            transition: transform 0.2s ease;
        }

        .quiz-options input[type="radio"]:hover {
            transform: scale(1.4);
        }

        .quiz-options label {
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .quiz-options label:hover {
            color: #1976d2;
        }

        /* Buttons */
        .quiz-actions {
            text-align: center;
            margin-top: 2rem;
        }

        .quiz-actions-flex {
            display: flex;
            justify-content: center;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .quiz-btn {
            background: linear-gradient(135deg, #1976d2, #1565c0);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 25px;
            font-size: 1rem;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .quiz-btn:hover {
            background: linear-gradient(135deg, #1565c0, #0d47a1);
            transform: translateY(-2px);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.3);
        }

        .quiz-btn:disabled {
            background: #ccc;
            cursor: not-allowed;
            transform: none;
            box-shadow: none;
        }

        /* Result */
        #quiz-result {
            animation: bounceIn 1s ease-out;
        }

        /* Animations */
        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideInFromTop {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes slideInFromLeft {
            from {
                transform: translateX(-50px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        @keyframes progressGlow {
            from {
                box-shadow: 0 0 5px #ff9800;
            }

            to {
                box-shadow: 0 0 15px #ff5722;
            }
        }

        @keyframes bounceIn {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }

            50% {
                transform: scale(1.05);
            }

            70% {
                transform: scale(0.9);
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .quiz-actions-flex {
                flex-direction: column;
                align-items: center;
            }

            .quiz-btn {
                width: 100%;
                max-width: 200px;
            }
        }
    </style>

    <div class="card">
        <h1>Smart City Quiz</h1>
        <p style="text-align: center; font-size: 1.125rem; color: var(--text-secondary); margin-bottom: 2rem;">
            Test your knowledge about Smart City concepts and innovations. Answer all questions to earn your
            certificate!
        </p>
    </div>

    <div class="card">
        <div class="quiz-progress-container">
            <div class="quiz-progress__text" id="quiz-progress-text">0/10 answered</div>
            <div class="quiz-progress" aria-hidden="true">
                <div class="quiz-progress__bar" id="quiz-progress-bar"></div>
            </div>
        </div>
    </div>

    <div class="card">
        <form id="quiz-form">
            <div class="quiz-question">
                <label>1. What best describes the study's research design in comparing Lyon and Bandar
                    Lampung?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q1" value="a" id="q1a">
                    <label for="q1a">Randomized controlled trial across multiple cities</label><br>
                    <input type="radio" name="q1" value="b" id="q1b">
                    <label for="q1b">Qualitative comparative case study of two cities</label><br>
                    <input type="radio" name="q1" value="c" id="q1c">
                    <label for="q1c">Cross-sectional econometric analysis using panel data</label><br>
                    <input type="radio" name="q1" value="d" id="q1d">
                    <label for="q1d">Laboratory experiment on simulated urban networks</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>2. Which primary instruments were used to collect data for the environment-related
                    indicators?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q2" value="a" id="q2a">
                    <label for="q2a">Interviews with officials and a five-point Likert survey</label><br>
                    <input type="radio" name="q2" value="b" id="q2b">
                    <label for="q2b">Satellite imagery and mobile phone CDRs only</label><br>
                    <input type="radio" name="q2" value="c" id="q2c">
                    <label for="q2c">Randomized citizen trials with IoT kits</label><br>
                    <input type="radio" name="q2" value="d" id="q2d">
                    <label for="q2d">Fiscal audits of municipal procurement</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>3. What is the focal domain assessed in the study's comparison of the two cities?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q3" value="a" id="q3a">
                    <label for="q3a">Smart Economy (innovation & jobs)</label><br>
                    <input type="radio" name="q3" value="b" id="q3b">
                    <label for="q3b">Environment-related domain (e.g., buildings, housing, pollution, water,
                        waste)</label><br>
                    <input type="radio" name="q3" value="c" id="q3c">
                    <label for="q3c">Smart Governance (e-government & open data)</label><br>
                    <input type="radio" name="q3" value="d" id="q3d">
                    <label for="q3d">Smart Mobility (autonomous & EV systems)</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>4. Which of the following is included as an environment-related subdomain in the
                    study?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q4" value="a" id="q4a">
                    <label for="q4a">FinTech services for SMEs</label><br>
                    <input type="radio" name="q4" value="b" id="q4b">
                    <label for="q4b">Waste management (e.g., smart containers, routing)</label><br>
                    <input type="radio" name="q4" value="c" id="q4c">
                    <label for="q4c">E-commerce logistics optimization</label><br>
                    <input type="radio" name="q4" value="d" id="q4d">
                    <label for="q4d">Digital identity for citizen authentication</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>5. What technology is cited for pollution control in the environment-related
                    domain?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q5" value="a" id="q5a">
                    <label for="q5a">Paper-based reporting and manual patrols</label><br>
                    <input type="radio" name="q5" value="b" id="q5b">
                    <label for="q5b">Video-analytics for traffic emissions and sensors for
                        air/humidity</label><br>
                    <input type="radio" name="q5" value="c" id="q5c">
                    <label for="q5c">Blockchain ledger for waste tokenization</label><br>
                    <input type="radio" name="q5" value="d" id="q5d">
                    <label for="q5d">Drone surveillance alone without fixed sensors</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>6. What gap is highlighted for the building domain in Bandar Lampung?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q6" value="a" id="q6a">
                    <label for="q6a">Too much adoption of zero-energy building concepts throughout the
                        city</label><br>
                    <input type="radio" name="q6" value="b" id="q6b">
                    <label for="q6b">Limited mainstream adoption of zero-energy building (ZEB)
                        concepts</label><br>
                    <input type="radio" name="q6" value="c" id="q6c">
                    <label for="q6c">Lack of any sustainable principles in construction</label><br>
                    <input type="radio" name="q6" value="d" id="q6d">
                    <label for="q6d">No consideration of organized building networks</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>7. In the housing subdomain, what aspect is still not implemented in Bandar
                    Lampung?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q7" value="a" id="q7a">
                    <label for="q7a">Disability accessibility features in housing communities</label><br>
                    <input type="radio" name="q7" value="b" id="q7b">
                    <label for="q7b">Use of green plants as facilities</label><br>
                    <input type="radio" name="q7" value="c" id="q7c">
                    <label for="q7c">Creation of enjoyable home environments</label><br>
                    <input type="radio" name="q7" value="d" id="q7d">
                    <label for="q7d">Use of household renewable energy (at least partially)</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>8. What challenge in pollution control does the study suggest to strengthen in Bandar
                    Lampung?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q8" value="a" id="q8a">
                    <label for="q8a">Community data operations and management for air quality
                        technologies</label><br>
                    <input type="radio" name="q8" value="b" id="q8b">
                    <label for="q8b">Absolute absence of regulations</label><br>
                    <input type="radio" name="q8" value="c" id="q8c">
                    <label for="q8c">Overloading of integrated systems</label><br>
                    <input type="radio" name="q8" value="d" id="q8d">
                    <label for="q8d">Lack of monitoring efforts altogether</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>9. Which comparative statement reflects the study's findings about Lyon and Bandar
                    Lampung?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q9" value="a" id="q9a">
                    <label for="q9a">Lyon is more advanced with strong private sector involvement; Bandar
                        Lampung is preparing foundations</label><br>
                    <input type="radio" name="q9" value="b" id="q9b">
                    <label for="q9b">Bandar Lampung is fully advanced; Lyon is in preparation
                        stage</label><br>
                    <input type="radio" name="q9" value="c" id="q9c">
                    <label for="q9c">Both cities are at identical maturity levels in all
                        subdomains</label><br>
                    <input type="radio" name="q9" value="d" id="q9d">
                    <label for="q9d">Neither city has adopted smart technologies in environmental
                        domains</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>10. What methodological practice was used to ensure data quality and clarity?</label><br>
                <div class="quiz-options">
                    <input type="radio" name="q10" value="a" id="q10a">
                    <label for="q10a">Ignoring respondent feedback during data collection</label><br>
                    <input type="radio" name="q10" value="b" id="q10b">
                    <label for="q10b">Pilot testing of questionnaires and triangulation by reporting back to
                        informants</label><br>
                    <input type="radio" name="q10" value="c" id="q10c">
                    <label for="q10c">Relying entirely on social media mining</label><br>
                    <input type="radio" name="q10" value="d" id="q10d">
                    <label for="q10d">Using only financial records to infer perceptions</label>
                </div>
            </div>

            <div class="quiz-actions">
                <div class="quiz-actions-flex">
                    <button type="button" id="submit-btn" class="quiz-btn" onclick="submitQuiz()">Submit
                        Quiz</button>
                    <button type="button" id="reset-btn" class="quiz-btn" onclick="resetQuiz()">Reset
                        Quiz</button>
                    <button type="button" id="download-certificate-btn" class="quiz-btn"
                        onclick="downloadCertificate()" disabled>Download Certificate (PDF)</button>
                </div>
            </div>
        </form>
    </div>

    <div class="card">
        <div id="quiz-result"></div>
    </div>

    <script>
        // Ensure jsPDF is available after script load
        function downloadCertificate() {
            if (!(window.jspdf && window.jspdf.jsPDF)) {
                alert('jsPDF library not loaded. Please check your internet connection.');
                return;
            }
            const jsPDFConstructor = window.jspdf.jsPDF;
            const score = localStorage.getItem('quizScore');
            if (!score) {
                alert('Please complete the quiz first to download the certificate.');
                return;
            }
            const doc = new jsPDFConstructor({
                orientation: 'landscape',
                unit: 'mm',
                format: 'a4'
            });

            // Background
            doc.setFillColor(245, 247, 250);
            doc.rect(0, 0, 297, 210, 'F');

            // Border
            doc.setDrawColor(25, 118, 210);
            doc.setLineWidth(3);
            doc.roundedRect(10, 10, 277, 190, 8, 8, 'S');

            doc.setDrawColor(248, 181, 0);
            doc.setLineWidth(1);
            doc.roundedRect(15, 15, 267, 180, 5, 5, 'S');

            // Header
            doc.setFillColor(25, 118, 210);
            doc.roundedRect(20, 25, 257, 35, 3, 3, 'F');

            // Logo
            try {
                var logoImg = new Image();
                logoImg.src = window.location.origin + '/images/lg.png';
                doc.addImage(logoImg, 'PNG', 25, 25, 40, 40);
            } catch (e) {
                // Logo tidak ada, lanjutkan
            }

            // Title
            doc.setFont('helvetica', 'bold');
            doc.setTextColor(255, 255, 255);
            doc.setFontSize(24);
            doc.text('SERTIFIKAT PENYELESAIAN', 148, 42, {
                align: 'center'
            });

            doc.setFontSize(14);
            doc.setTextColor(240, 240, 240);
            doc.text('Kuis Lanjutan Smart City', 148, 52, {
                align: 'center'
            });

            // Content
            doc.setTextColor(60, 60, 60);
            doc.setFont('helvetica', 'normal');
            doc.setFontSize(16);
            doc.text('This is to certify that', 148, 85, {
                align: 'center'
            });

            doc.setFont('helvetica', 'bold');
            doc.setFontSize(20);
            doc.setTextColor(25, 118, 210);
            doc.text('Quiz Participant', 148, 100, {
                align: 'center'
            });

            doc.setFont('helvetica', 'normal');
            doc.setFontSize(14);
            doc.setTextColor(80, 80, 80);
            doc.text('has successfully completed the Advanced Smart City Quiz', 148, 115, {
                align: 'center'
            });

            doc.setFont('helvetica', 'bold');
            doc.setFontSize(18);
            doc.setTextColor(248, 181, 0);
            doc.text('Achievement: ' + score, 148, 135, {
                align: 'center'
            });

            const currentDate = new Date().toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            doc.setFont('helvetica', 'normal');
            doc.setFontSize(12);
            doc.setTextColor(120, 120, 120);
            doc.text('Completed on: ' + currentDate, 148, 150, {
                align: 'center'
            });

            doc.setFont('helvetica', 'italic');
            doc.setFontSize(11);
            doc.setTextColor(25, 118, 210);
            doc.text('Continue your journey in Smart City innovation and technology!', 148, 165, {
                align: 'center'
            });

            // Footer
            doc.setFillColor(248, 181, 0);
            doc.roundedRect(20, 175, 257, 15, 2, 2, 'F');

            doc.setFont('helvetica', 'bold');
            doc.setFontSize(12);
            doc.setTextColor(255, 255, 255);
            doc.text('Mini Library Smart City', 148, 185, {
                align: 'center'
            });

            doc.save('Sertifikat_Smart_City.pdf');
        }

        function allAnswered() {
            for (let i = 1; i <= 10; i++) {
                if (!document.querySelector('input[name="q' + i + '"]:checked')) {
                    return false;
                }
            }
            return true;
        }

        function lockQuiz(scoreText) {
            document.getElementById('submit-btn').disabled = true;
            const radios = document.querySelectorAll('#quiz-form input[type="radio"]');
            radios.forEach(r => r.setAttribute('disabled', 'disabled'));
            document.getElementById('quiz-result').innerHTML = scoreText;
            showDownloadButtonState();
        }

        function updateProgress() {
            let answered = 0;
            for (let i = 1; i <= 10; i++) {
                if (document.querySelector('input[name="q' + i + '"]:checked')) answered++;
            }
            const pct = Math.round(answered / 10 * 100);
            const bar = document.getElementById('quiz-progress-bar');
            const txt = document.getElementById('quiz-progress-text');
            if (bar) bar.style.width = pct + '%';
            if (txt) txt.textContent = answered + '/10 answered';
        }

        function submitQuiz() {
            if (!allAnswered()) {
                alert('Silakan jawab semua pertanyaan sebelum mengirimkan kuis.');
                return;
            }

            const answers = {
                q1: 'b',
                q2: 'a',
                q3: 'b',
                q4: 'b',
                q5: 'b',
                q6: 'b',
                q7: 'a',
                q8: 'a',
                q9: 'a',
                q10: 'b'
            };

            let score = 0;
            for (let i = 1; i <= 10; i++) {
                const q = document.querySelector('input[name="q' + i + '"]:checked');
                if (q && q.value === answers['q' + i]) score++;
            }

            let result = `<div style="background: linear-gradient(135deg, #fff9e6 0%, #fff3cd 100%); border: 2px solid #f8d24b; border-radius: 15px; padding: 2rem; text-align: center; margin: 2rem 0;">
                <h3 style="color: #333; margin-bottom: 1rem;">🎯 Smart City Quiz Results</h3>
                <h2 style="color: #f8b500; font-size: 2.5rem; margin: 1rem 0;">Score: ${score}/10</h2>`;

            if (score === 10) {
                result +=
                    '<p style="color: #28a745; font-weight: bold; font-size: 1.2rem;">🎉 Perfect! You completely master the Smart City material!</p>';
            } else if (score >= 9) {
                result +=
                    '<p style="color: #17a2b8; font-weight: bold; font-size: 1.2rem;">🌟 Excellent! Almost perfect. Your knowledge is very good!</p>';
            } else if (score >= 7) {
                result +=
                    '<p style="color: #ffc107; font-weight: bold; font-size: 1.2rem;">👍 Good! You passed well. Keep studying deeper!</p>';
            } else if (score >= 5) {
                result +=
                    '<p style="color: #fd7e14; font-weight: bold; font-size: 1.2rem;">💪 Quite good! There is room for improvement. Try again!</p>';
            } else {
                result +=
                    '<p style="color: #dc3545; font-weight: bold; font-size: 1.2rem;">📚 Don\'t be discouraged! Learning is a process. Try again!</p>';
            }

            result +=
                '<p style="margin-top: 1rem; color: #666;">Thank you for taking the Smart City quiz! 🚀</p></div>';

            localStorage.setItem('quizScore', `Score: ${score}/10`);
            lockQuiz(result);
        }

        function resetQuiz() {
            document.getElementById('quiz-form').reset();
            document.getElementById('quiz-result').innerHTML = '';
            document.getElementById('submit-btn').disabled = false;
            const radios = document.querySelectorAll('#quiz-form input[type="radio"]');
            radios.forEach(r => {
                r.removeAttribute('disabled');
                r.checked = false;
            });
            localStorage.removeItem('quizScore');
            showDownloadButtonState();
        }

        function showDownloadButtonState() {
            var downloadBtn = document.getElementById('download-certificate-btn');
            var score = localStorage.getItem('quizScore');
            if (score) {
                downloadBtn.removeAttribute('disabled');
            } else {
                downloadBtn.setAttribute('disabled', 'disabled');
            }
        }

        window.onload = function() {
            const savedScore = localStorage.getItem('quizScore');
            const radios = document.querySelectorAll('#quiz-form input[type="radio"]');
            if (savedScore) {
                lockQuiz(`<div style="background: #e9ecef; padding: 1rem; border-radius: 10px; text-align: center;">
                    <h4>Quiz already completed</h4>
                    <p>${savedScore}</p>
                    <p>Click "Reset Quiz" to try again.</p>
                </div>`);
            } else {
                document.getElementById('submit-btn').disabled = false;
                radios.forEach(r => r.removeAttribute('disabled'));
                document.getElementById('quiz-result').innerHTML = '';
            }
            showDownloadButtonState();
            radios.forEach(r => r.addEventListener('change', updateProgress));
            updateProgress();
        };

        document.addEventListener('DOMContentLoaded', function() {
            var logoutBtn = document.querySelector('.dropdown-item.text-danger, .logout-btn');
            if (logoutBtn) {
                logoutBtn.addEventListener('click', function() {
                    localStorage.removeItem('quizScore');
                });
            }
            var logoutForm = document.querySelector('form[action="/logout"]');
            if (logoutForm) {
                logoutForm.addEventListener('submit', function() {
                    localStorage.removeItem('quizScore');
                });
            }
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js" crossorigin="anonymous"
        referrerpolicy="no-referrer"></script>
</div>
