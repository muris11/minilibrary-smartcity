<!-- Second English Quiz Section -->
<div id="quiz" class="section">
    <style>
        #quiz2.section {
            background: linear-gradient(135deg, #fff9e6 0%, #fff3cd 100%);
            border-radius: 20px;
            box-shadow: 0 10px 28px rgba(178, 135, 4, 0.15);
            padding: 2.5rem 2rem;
            max-width: 650px;
            margin: 2rem auto;
            border: 2px solid #f8d24b;
        }

        #quiz2 h2 {
            background: linear-gradient(135deg, #b28704, #f8b500);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            font-size: 2.4rem;
            text-align: center;
            font-weight: 800;
            margin-bottom: 1.5rem;
        }

        #quiz2 p {
            text-align: center;
            font-size: 1.15rem;
            color: #856404;
            margin-bottom: 2rem;
            font-weight: 500;
        }

        #quiz2-form label {
            font-weight: 600;
            color: #5f4300;
            font-size: 1.05rem;
        }

        #quiz2-form div {
            background: #fff;
            border-radius: 12px;
            box-shadow: 0 4px 12px rgba(178, 135, 4, 0.12);
            margin-bottom: 1.2rem;
            padding: 1rem 1.3rem;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        #quiz2-form div:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(178, 135, 4, 0.18);
        }

        #quiz2-form input[type="radio"] {
            accent-color: #f8b500;
            margin-right: 0.6rem;
            cursor: pointer;
        }

        #quiz2-form button {
            background: linear-gradient(135deg, #b28704, #f8b500);
            color: #fff;
            border: none;
            border-radius: 30px;
            padding: 0.8rem 2.2rem;
            font-size: 1.15rem;
            font-weight: 700;
            cursor: pointer;
            margin: 1.5rem auto 0 auto;
            display: block;
            box-shadow: 0 6px 18px rgba(178, 135, 4, 0.2);
            transition: all 0.3s ease;
        }

        #quiz2-form button:hover:not(:disabled) {
            background: linear-gradient(135deg, #d4a017, #ffca2c);
            box-shadow: 0 8px 22px rgba(178, 135, 4, 0.28);
            transform: translateY(-2px);
        }

        #quiz2-form button:disabled {
            background: #d6d6d6;
            color: #fff;
            cursor: not-allowed;
            box-shadow: none;
        }

        #quiz2-result {
            background: rgba(248, 181, 0, 0.9);
            background: linear-gradient(135deg, rgba(248, 181, 0, 0.9) 0%, rgba(255, 221, 85, 0.95) 100%);
            color: #fff;
            border-radius: 14px;
            font-size: 1.3rem;
            text-align: center;
            padding: 1.4rem;
            margin-top: 2rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 6px 20px rgba(178, 135, 4, 0.18);
        }

        h1 {
            font-size: 2.2rem;
            font-weight: bold;
            text-align: center;
            margin-bottom: 1.2rem;
            color: #1565c0;
        }
    </style>
    <h1 style="text-align:center; font-weight:bold;">Quiz Smart City</h1>
    <p style="text-align: center">Challenge yourself with these 10 advanced Smart City questions:</p>
    <form id="quiz2-form">
        <div>
            <label>1. Which technology is essential for autonomous vehicles in Smart Cities?</label><br>
            <input type="radio" name="q1_2" value="a"> Blockchain<br>
            <input type="radio" name="q1_2" value="b"> 5G Network<br>
            <input type="radio" name="q1_2" value="c"> GIS<br>
            <input type="radio" name="q1_2" value="d"> E-Government<br>
        </div>
        <div>
            <label>2. What does IoT stand for?</label><br>
            <input type="radio" name="q2_2" value="a"> Internet of Things<br>
            <input type="radio" name="q2_2" value="b"> Information of Technology<br>
            <input type="radio" name="q2_2" value="c"> Integrated Online Tools<br>
            <input type="radio" name="q2_2" value="d"> Intelligent Operations Team<br>
        </div>
        <div>
            <label>3. Which pillar is most related to citizen participation?</label><br>
            <input type="radio" name="q3_2" value="a"> Smart Mobility<br>
            <input type="radio" name="q3_2" value="b"> Smart People<br>
            <input type="radio" name="q3_2" value="c"> Smart Economy<br>
            <input type="radio" name="q3_2" value="d"> Smart Environment<br>
        </div>
        <div>
            <label>4. What is a benefit of using Big Data in Smart Cities?</label><br>
            <input type="radio" name="q4_2" value="a"> Faster internet<br>
            <input type="radio" name="q4_2" value="b"> Data-driven decision making<br>
            <input type="radio" name="q4_2" value="c"> More pollution<br>
            <input type="radio" name="q4_2" value="d"> Higher taxes<br>
        </div>
        <div>
            <label>5. Which system helps monitor air quality in real time?</label><br>
            <input type="radio" name="q5_2" value="a"> Smart Grid<br>
            <input type="radio" name="q5_2" value="b"> Air Quality Monitoring System<br>
            <input type="radio" name="q5_2" value="c"> Blockchain<br>
            <input type="radio" name="q5_2" value="d"> E-Commerce Platform<br>
        </div>
        <div>
            <label>6. What is the main purpose of Smart Waste Management?</label><br>
            <input type="radio" name="q6_2" value="a"> Increase landfill size<br>
            <input type="radio" name="q6_2" value="b"> Optimize waste collection and recycling<br>
            <input type="radio" name="q6_2" value="c"> Sell waste online<br>
            <input type="radio" name="q6_2" value="d"> Reduce citizen participation<br>
        </div>
        <div>
            <label>7. Which technology enables remote healthcare in Smart Cities?</label><br>
            <input type="radio" name="q7_2" value="a"> Telemedicine<br>
            <input type="radio" name="q7_2" value="b"> Smart Grid<br>
            <input type="radio" name="q7_2" value="c"> Blockchain<br>
            <input type="radio" name="q7_2" value="d"> GIS<br>
        </div>
        <div>
            <label>8. What is a challenge for Smart City implementation?</label><br>
            <input type="radio" name="q8_2" value="a"> Digital divide<br>
            <input type="radio" name="q8_2" value="b"> Unlimited budget<br>
            <input type="radio" name="q8_2" value="c"> No need for data security<br>
            <input type="radio" name="q8_2" value="d"> No need for collaboration<br>
        </div>
        <div>
            <label>9. Which platform is used for participatory planning in Surabaya?</label><br>
            <input type="radio" name="q9_2" value="a"> E-Musrenbang<br>
            <input type="radio" name="q9_2" value="b"> Qlue<br>
            <input type="radio" name="q9_2" value="c"> LAPOR<br>
            <input type="radio" name="q9_2" value="d"> OK-OTrip<br>
        </div>
        <div>
            <label>10. What is the main goal of Smart Living?</label><br>
            <input type="radio" name="q10_2" value="a"> Increase bureaucracy<br>
            <input type="radio" name="q10_2" value="b"> Improve quality of life<br>
            <input type="radio" name="q10_2" value="c"> Reduce citizen engagement<br>
            <input type="radio" name="q10_2" value="d"> Increase pollution<br>
        </div>
        <button type="button" id="submit-btn-2" onclick="submitQuiz2()">Submit Quiz</button>
        <button type="button" id="reset-btn-2" class="btn btn-outline-danger rounded-pill px-4 py-2"
            style="font-weight:600; font-size:1.05rem; margin-top:1rem; display:block;" onclick="resetQuiz2()">Reset
            Quiz</button>
        <button type="button" id="download-certificate-btn" class="btn btn-success rounded-pill px-4 py-2"
            style="font-weight:600; font-size:1.05rem; margin-top:1rem; display:block;"
            onclick="downloadCertificate()" disabled>Download
            Certificate (PDF)</button>
    </form>
    <div id="quiz2-result" style="margin-top:1rem;"></div>
    <!-- Quiz2 Feedback Modal -->
    <div class="modal fade" id="quiz2FeedbackModal" tabindex="-1" aria-labelledby="quiz2FeedbackLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quiz2FeedbackLabel">Quiz Result</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="quiz2FeedbackBody">
                    <!-- Feedback message will be inserted here -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal for incomplete answers -->
    <div class="modal fade" id="quiz2IncompleteModal" tabindex="-1" aria-labelledby="quiz2IncompleteLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="quiz2IncompleteLabel">Incomplete Answers</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Please answer all questions before submitting the quiz.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script>
        function allAnswered2() {
            for (let i = 1; i <= 10; i++) {
                if (!document.querySelector('input[name="q' + i + '_2' + '"]:checked')) {
                    return false;
                }
            }
            return true;
        }

        function lockQuiz2(scoreText) {
            document.getElementById('submit-btn-2').disabled = true;
            const radios = document.querySelectorAll('#quiz2-form input[type="radio"]');
            radios.forEach(r => r.setAttribute('disabled', 'disabled'));
            document.getElementById('quiz2-result').innerText = scoreText;
            showDownloadButtonState();
        }

        function submitQuiz2() {
            if (!allAnswered2()) {
                var incompleteModal = new bootstrap.Modal(document.getElementById('quiz2IncompleteModal'));
                incompleteModal.show();
                return;
            }
            const answers2 = {
                q1_2: 'b',
                q2_2: 'a',
                q3_2: 'b',
                q4_2: 'b',
                q5_2: 'b',
                q6_2: 'b',
                q7_2: 'a',
                q8_2: 'a',
                q9_2: 'a',
                q10_2: 'b'
            };
            let score2 = 0;
            for (let i = 1; i <= 10; i++) {
                const q = document.querySelector('input[name="q' + i + '_2' + '"]:checked');
                if (q && q.value === answers2['q' + i + '_2']) score2++;
            }
            let result2 = `Your score: ${score2}/10`;
            if (score2 === 10) result2 += ' - Excellent!';
            else if (score2 >= 7) result2 += ' - Good!';
            else result2 += ' - Needs Improvement.';
            localStorage.setItem('quiz2Score', result2);
            lockQuiz2(result2);
            // Show Bootstrap modal with emote
            var feedbackBody2 = document.getElementById('quiz2FeedbackBody');
            if (score2 < 7) {
                feedbackBody2.innerHTML = "Don't cry 😢";
            } else {
                feedbackBody2.innerHTML = "Great job! 😃";
            }
            var feedbackModal2 = new bootstrap.Modal(document.getElementById('quiz2FeedbackModal'));
            feedbackModal2.show();
        }

        function resetQuiz2() {
            document.getElementById('quiz2-form').reset();
            document.getElementById('quiz2-result').innerText = '';
            document.getElementById('submit-btn-2').disabled = false;
            const radios2 = document.querySelectorAll('#quiz2-form input[type="radio"]');
            radios2.forEach(r => {
                r.removeAttribute('disabled');
                r.checked = false;
            });
            localStorage.removeItem('quiz2Score');
            showDownloadButtonState();
        }

        function downloadCertificate() {
            if (!window.jspdf || !window.jspdf.jsPDF) {
                alert('jsPDF library is not loaded. Please check your internet connection or CDN.');
                return;
            }
            const score = localStorage.getItem('quiz2Score');
            if (!score) {
                alert('Please complete the quiz first to download the certificate.');
                return;
            }

            const {
                jsPDF
            } = window.jspdf;
            const doc = new jsPDF({
                orientation: 'landscape',
                unit: 'mm',
                format: 'a4'
            });

            // Background with subtle gradient effect
            doc.setFillColor(245, 247, 250);
            doc.rect(0, 0, 297, 210, 'F');

            // Outer border with rounded corners
            doc.setDrawColor(25, 118, 210);
            doc.setLineWidth(3);
            doc.roundedRect(10, 10, 277, 190, 8, 8, 'S');

            // Inner decorative border
            doc.setDrawColor(248, 181, 0);
            doc.setLineWidth(1);
            doc.roundedRect(15, 15, 267, 180, 5, 5, 'S');

            // Header background
            doc.setFillColor(25, 118, 210);
            doc.roundedRect(20, 25, 257, 35, 3, 3, 'F');

            // Logo placement with proper spacing
            var logoImg = new Image();
            logoImg.src = window.location.origin + '/images/lg.png';
            doc.addImage(logoImg, 'PNG', 25, 25, 40, 40);
            
            // Certificate title with proper hierarchy
            doc.setFont('helvetica', 'bold');
            doc.setTextColor(255, 255, 255);
            doc.setFontSize(24);
            doc.text('CERTIFICATE OF COMPLETION', 148, 42, {
                align: 'center'
            });

            doc.setFontSize(14);
            doc.setTextColor(240, 240, 240);
            doc.text('Smart City Advanced Quiz', 148, 52, {
                align: 'center'
            });

            // Main content area with better spacing
            doc.setTextColor(60, 60, 60);
            doc.setFont('helvetica', 'normal');
            doc.setFontSize(16);
            doc.text('This is to certify that', 148, 85, {
                align: 'center'
            });

            // Participant name placeholder (could be dynamic)
            doc.setFont('helvetica', 'bold');
            doc.setFontSize(20);
            doc.setTextColor(25, 118, 210);
            doc.text('Quiz Participant', 148, 100, {
                align: 'center'
            });

            // Achievement line
            doc.setFont('helvetica', 'normal');
            doc.setFontSize(14);
            doc.setTextColor(80, 80, 80);
            doc.text('has successfully completed the Smart City Advanced Quiz', 148, 115, {
                align: 'center'
            });

            // Score display with emphasis
            doc.setFont('helvetica', 'bold');
            doc.setFontSize(18);
            doc.setTextColor(248, 181, 0);
            doc.text('Achievement: ' + score, 148, 135, {
                align: 'center'
            });

            // Completion date
            doc.setFont('helvetica', 'normal');
            doc.setFontSize(12);
            doc.setTextColor(120, 120, 120);
            const currentDate = new Date().toLocaleDateString('en-US', {
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            });
            doc.text('Completed on: ' + currentDate, 148, 150, {
                align: 'center'
            });

            // Motivational message
            doc.setFont('helvetica', 'italic');
            doc.setFontSize(11);
            doc.setTextColor(25, 118, 210);
            doc.text('Continue your journey in Smart City innovation and technology!', 148, 165, {
                align: 'center'
            });

            // Footer section with organization info
            doc.setFillColor(248, 181, 0);
            doc.roundedRect(20, 175, 257, 15, 2, 2, 'F');

            doc.setFont('helvetica', 'bold');
            doc.setFontSize(12);
            doc.setTextColor(255, 255, 255);
            doc.text('Mini Library Smart City', 148, 185, {
                align: 'center'
            });

            // Decorative elements for visual appeal
            // Left decorative element
            doc.setFillColor(90, 202, 249);
            doc.circle(40, 140, 3, 'F');
            doc.circle(35, 135, 2, 'F');
            doc.circle(45, 135, 2, 'F');

            // Right decorative element
            doc.setFillColor(90, 202, 249);
            doc.circle(257, 140, 3, 'F');
            doc.circle(252, 135, 2, 'F');
            doc.circle(262, 135, 2, 'F');

            // Save the certificate
            doc.save('Smart_City_Advanced_Quiz_Certificate.pdf');
        }

        function showDownloadButtonState() {
            var downloadBtn = document.getElementById('download-certificate-btn');
            var score = localStorage.getItem('quiz2Score');
            if (score) {
                downloadBtn.removeAttribute('disabled');
            } else {
                downloadBtn.setAttribute('disabled', 'disabled');
            }
        }

        window.onload = function() {
            // ...existing code...
            // Quiz2 logic
            const savedScore2 = localStorage.getItem('quiz2Score');
            const radios2 = document.querySelectorAll('#quiz2-form input[type="radio"]');
            if (savedScore2) {
                lockQuiz2(savedScore2);
            } else {
                document.getElementById('submit-btn-2').disabled = false;
                radios2.forEach(r => r.removeAttribute('disabled'));
                document.getElementById('quiz2-result').innerText = '';
            }
            showDownloadButtonState();
            if (window.location.search.includes('loggedout')) {
                localStorage.removeItem('quiz2Score');
            }
        };
        document.addEventListener('DOMContentLoaded', function() {
            // ...existing code...
            // Quiz2 reset on logout
            var logoutBtn = document.querySelector('.dropdown-item.text-danger, .logout-btn');
            if (logoutBtn) {
                logoutBtn.addEventListener('click', function() {
                    localStorage.removeItem('quiz2Score');
                });
            }
            var logoutForm = document.querySelector('form[action="/logout"]');
            if (logoutForm) {
                logoutForm.addEventListener('submit', function() {
                    localStorage.removeItem('quiz2Score');
                });
            }
        });
    </script>
</div>
