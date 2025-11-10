<!-- Smart City Quiz -->
<div id="quiz" class="section px-4 py-8">
    <div class="max-w-4xl mx-auto">
        <div class="bg-white rounded-lg shadow-lg p-6 mb-6">
            <div class="text-center">
                <h1 class="text-3xl md:text-4xl font-bold text-blue-600 mb-2">Smart City Quiz</h1>
                <p class="text-gray-600 text-sm md:text-base">Test your knowledge about Smart City concepts and
                    innovations. Answer all questions to earn your certificate!</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow-lg p-4 md:p-6 mb-6">
            <div class="quiz-progress-container">
                <div class="quiz-progress__text text-sm md:text-base font-semibold" id="quiz-progress-text">0/10 answered
                </div>
                <div class="quiz-progress flex-1 ml-4" aria-hidden="true">
                    <div class="quiz-progress__bar h-3 bg-gradient-to-r from-orange-400 to-red-500 rounded-full transition-all duration-500"
                        id="quiz-progress-bar"></div>
                </div>
            </div>
        </div>

        <form id="quiz-form" class="space-y-6">
            <div
                class="quiz-question bg-white rounded-lg shadow-md p-4 md:p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow duration-300">
                <label class="block text-base md:text-lg font-semibold text-gray-800 mb-4">1. What best describes the
                    study's research design in comparing Lyon and Bandar Lampung?</label>
                <div class="quiz-options space-y-3">
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q1" value="a" id="q1a"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Randomized controlled trial across multiple
                            cities</span>
                    </label>
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q1" value="b" id="q1b"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Qualitative comparative case study of two
                            cities</span>
                    </label>
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q1" value="c" id="q1c"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Cross-sectional econometric analysis using
                            panel data</span>
                    </label>
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q1" value="d" id="q1d"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Laboratory experiment on simulated urban
                            networks</span>
                    </label>
                </div>
            </div>

            <div
                class="quiz-question bg-white rounded-lg shadow-md p-4 md:p-6 border-l-4 border-blue-500 hover:shadow-lg transition-shadow duration-300">
                <label class="block text-base md:text-lg font-semibold text-gray-800 mb-4">2. Which primary instruments
                    were used to collect data for the environment-related indicators?</label>
                <div class="quiz-options space-y-3">
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q2" value="a" id="q2a"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Interviews with officials and a five-point
                            Likert survey</span>
                    </label>
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q2" value="b" id="q2b"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Satellite imagery and mobile phone CDRs
                            only</span>
                    </label>
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q2" value="c" id="q2c"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Randomized citizen trials with IoT kits</span>
                    </label>
                    <label
                        class="flex items-center p-3 rounded-lg hover:bg-blue-50 cursor-pointer transition-colors duration-200">
                        <input type="radio" name="q2" value="d" id="q2d"
                            class="mr-3 text-blue-600 focus:ring-blue-500">
                        <span class="text-sm md:text-base text-gray-700">Fiscal audits of municipal procurement</span>
                    </label>
                </div>
            </div>

            <div class="quiz-question">
                <label>3. What is the focal domain assessed in the study's comparison of the two cities?</label>
                <div class="quiz-options">
                    <input type="radio" name="q3" value="a" id="q3a">
                    <label for="q3a">Smart Economy (innovation & jobs)</label>
                    <input type="radio" name="q3" value="b" id="q3b">
                    <label for="q3b">Environment-related domain (e.g., buildings, housing, pollution, water,
                        waste)</label>
                    <input type="radio" name="q3" value="c" id="q3c">
                    <label for="q3c">Smart Governance (e-government & open data)</label>
                    <input type="radio" name="q3" value="d" id="q3d">
                    <label for="q3d">Smart Mobility (autonomous & EV systems)</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>4. Which of the following is included as an environment-related subdomain in the study?</label>
                <div class="quiz-options">
                    <input type="radio" name="q4" value="a" id="q4a">
                    <label for="q4a">FinTech services for SMEs</label>
                    <input type="radio" name="q4" value="b" id="q4b">
                    <label for="q4b">Waste management (e.g., smart containers, routing)</label>
                    <input type="radio" name="q4" value="c" id="q4c">
                    <label for="q4c">E-commerce logistics optimization</label>
                    <input type="radio" name="q4" value="d" id="q4d">
                    <label for="q4d">Digital identity for citizen authentication</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>5. What technology is cited for pollution control in the environment-related domain?</label>
                <div class="quiz-options">
                    <input type="radio" name="q5" value="a" id="q5a">
                    <label for="q5a">Paper-based reporting and manual patrols</label>
                    <input type="radio" name="q5" value="b" id="q5b">
                    <label for="q5b">Video-analytics for traffic emissions and sensors for air/humidity</label>
                    <input type="radio" name="q5" value="c" id="q5c">
                    <label for="q5c">Blockchain ledger for waste tokenization</label>
                    <input type="radio" name="q5" value="d" id="q5d">
                    <label for="q5d">Drone surveillance alone without fixed sensors</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>6. What gap is highlighted for the building domain in Bandar Lampung?</label>
                <div class="quiz-options">
                    <input type="radio" name="q6" value="a" id="q6a">
                    <label for="q6a">Too much adoption of zero-energy building concepts throughout the
                        city</label>
                    <input type="radio" name="q6" value="b" id="q6b">
                    <label for="q6b">Limited mainstream adoption of zero-energy building (ZEB) concepts</label>
                    <input type="radio" name="q6" value="c" id="q6c">
                    <label for="q6c">Lack of any sustainable principles in construction</label>
                    <input type="radio" name="q6" value="d" id="q6d">
                    <label for="q6d">No consideration of organized building networks</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>7. In the housing subdomain, what aspect is still not implemented in Bandar Lampung?</label>
                <div class="quiz-options">
                    <input type="radio" name="q7" value="a" id="q7a">
                    <label for="q7a">Disability accessibility features in housing communities</label>
                    <input type="radio" name="q7" value="b" id="q7b">
                    <label for="q7b">Use of green plants as facilities</label>
                    <input type="radio" name="q7" value="c" id="q7c">
                    <label for="q7c">Creation of enjoyable home environments</label>
                    <input type="radio" name="q7" value="d" id="q7d">
                    <label for="q7d">Use of household renewable energy (at least partially)</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>8. What challenge in pollution control does the study suggest to strengthen in Bandar
                    Lampung?</label>
                <div class="quiz-options">
                    <input type="radio" name="q8" value="a" id="q8a">
                    <label for="q8a">Community data operations and management for air quality</label>
                    <input type="radio" name="q8" value="b" id="q8b">
                    <label for="q8b">Use of green plants as facilities</label>
                    <input type="radio" name="q8" value="c" id="q8c">
                    <label for="q8c">Creation of enjoyable home environments</label>
                    <input type="radio" name="q8" value="d" id="q8d">
                    <label for="q8d">Use of household renewable energy (at least partially)</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>9. What is the primary recommendation for water management in Bandar Lampung?</label>
                <div class="quiz-options">
                    <input type="radio" name="q9" value="a" id="q9a">
                    <label for="q9a">Implement smart water meters and leak detection systems</label>
                    <input type="radio" name="q9" value="b" id="q9b">
                    <label for="q9b">Use of green plants as facilities</label>
                    <input type="radio" name="q9" value="c" id="q9c">
                    <label for="q9c">Creation of enjoyable home environments</label>
                    <input type="radio" name="q9" value="d" id="q9d">
                    <label for="q9d">Use of household renewable energy (at least partially)</label>
                </div>
            </div>

            <div class="quiz-question">
                <label>10. What is the main conclusion about smart city development in Bandar Lampung?</label>
                <div class="quiz-options">
                    <input type="radio" name="q10" value="a" id="q10a">
                    <label for="q10a">The city is already fully developed and needs no further investment</label>
                    <input type="radio" name="q10" value="b" id="q10b">
                    <label for="q10b">The city shows potential but needs strategic investments in IoT and capacity
                        building</label>
                    <input type="radio" name="q10" value="c" id="q10c">
                    <label for="q10c">The city should abandon smart city initiatives entirely</label>
                    <input type="radio" name="q10" value="d" id="q10d">
                    <label for="q10d">The city should focus only on economic development</label>
                </div>
            </div>

            <div class="quiz-actions bg-white rounded-lg shadow-lg p-6 mt-8">
                <div class="quiz-actions-flex flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <button type="button"
                        class="quiz-btn bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none"
                        id="submit-btn" onclick="submitQuiz()">Submit Quiz</button>
                    <button type="button"
                        class="quiz-btn secondary bg-gradient-to-r from-gray-500 to-gray-600 hover:from-gray-600 hover:to-gray-700 text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1"
                        onclick="resetQuiz()">Reset Quiz</button>
                    <button type="button"
                        class="quiz-btn secondary bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-semibold py-3 px-8 rounded-full transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-1 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none"
                        id="download-certificate-btn" onclick="downloadCertificate()" disabled>Download
                        Certificate</button>
                </div>
            </div>
        </form>
    </div>

    <div id="quiz-result" class="mt-8"></div>
</div>

<script>
    function allAnswered() {
        for (let i = 1; i <= 10; i++) {
            if (!document.querySelector('input[name="q' + i + '"]:checked')) return false;
        }
        return true;
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
            alert('Please answer all questions before submitting the quiz.');
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

    function lockQuiz(result) {
        document.getElementById('quiz-result').innerHTML = result;
        document.getElementById('submit-btn').disabled = true;
        const radios = document.querySelectorAll('#quiz-form input[type="radio"]');
        radios.forEach(r => r.setAttribute('disabled', 'disabled'));
        showDownloadButtonState();
    }

    function downloadCertificate() {
        const {
            jsPDF
        } = window.jspdf;
        const doc = new jsPDF();

        // Certificate styling
        doc.setFillColor(240, 248, 255);
        doc.rect(0, 0, 210, 297, 'F');

        // Border
        doc.setDrawColor(25, 118, 210);
        doc.setLineWidth(3);
        doc.rect(10, 10, 190, 277);

        // Title
        doc.setFont('helvetica', 'bold');
        doc.setFontSize(24);
        doc.setTextColor(25, 118, 210);
        doc.text('SMART CITY CERTIFICATE', 105, 40, {
            align: 'center'
        });

        // Subtitle
        doc.setFontSize(16);
        doc.setTextColor(100, 100, 100);
        doc.text('Certificate of Completion', 105, 55, {
            align: 'center'
        });

        // Main text
        doc.setFontSize(14);
        doc.setTextColor(50, 50, 50);
        doc.text('This is to certify that', 105, 80, {
            align: 'center'
        });

        // Name (placeholder)
        doc.setFont('helvetica', 'bold');
        doc.setFontSize(18);
        doc.setTextColor(25, 118, 210);
        doc.text('Participant', 105, 95, {
            align: 'center'
        });

        // Completion text
        doc.setFont('helvetica', 'normal');
        doc.setFontSize(12);
        doc.setTextColor(50, 50, 50);
        const completionText = 'has successfully completed the Smart City Knowledge Assessment';
        const splitText = doc.splitTextToSize(completionText, 150);
        doc.text(splitText, 105, 110, {
            align: 'center'
        });

        // Score
        const score = localStorage.getItem('quizScore') || 'Score: 10/10';
        doc.setFontSize(14);
        doc.setTextColor(25, 118, 210);
        doc.text(score, 105, 130, {
            align: 'center'
        });

        // Date
        const today = new Date();
        const dateStr = today.toLocaleDateString();
        doc.setFontSize(12);
        doc.setTextColor(100, 100, 100);
        doc.text('Date: ' + dateStr, 105, 150, {
            align: 'center'
        });

        // Footer
        doc.setFontSize(10);
        doc.setTextColor(150, 150, 150);
        doc.text('Mini Library Smart City - Lampung Province', 105, 270, {
            align: 'center'
        });

        // Download
        doc.save('Smart_City_Certificate.pdf');
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
