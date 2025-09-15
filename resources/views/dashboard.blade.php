@extends('layout.app')

@section('content')
    <div class="container">
        <div class="content">
            <!-- Introduction Section -->
            <div id="intro" class="section active">
                <h2>🌟 Smart City Introduction</h2>
                <h3>Definition of Smart City</h3>
                <p>A Smart City is an urban development concept that integrates information and communication technology
                    (ICT) and the Internet of Things (IoT) into city asset management systems effectively. According to
                    Caragliu et al. (2011), a Smart City is a city that invests in human and social capital as well as
                    traditional and modern communication infrastructure to drive sustainable economic growth and high
                    quality of life, with wise management of natural resources through participatory governance.</p>
                <div class="highlight">
                    <strong>💡 Key Concept:</strong> Smart City is not just about technology, but about how technology can
                    improve quality of life, government efficiency, and environmental sustainability.
                </div>
                <h3>The Importance of Smart Cities in Modern Life</h3>
                <p>By 2050, it is estimated that 68% of the world's population will live in urban areas. Smart Cities are
                    solutions to address various urbanization challenges such as:</p>
                <ul>
                    <li><strong>Public Service Efficiency:</strong> Reducing bureaucracy and increasing government
                        responsiveness</li>
                    <li><strong>Resource Management:</strong> Optimizing the use of energy, water, and city infrastructure
                    </li>
                    <li><strong>Quality of Life:</strong> Improving health, education, and security services</li>
                    <li><strong>Economic Growth:</strong> Creating innovation ecosystems and new business opportunities</li>
                    <li><strong>Environmental Sustainability:</strong> Reducing pollution and carbon footprint</li>
                    <li><strong>Community Participation:</strong> Increasing citizen involvement in public decision-making
                    </li>
                </ul>
                <h3>Challenges Faced by Cities Without Smart City Concepts</h3>
                <p>Cities that have not implemented Smart City concepts face various complex problems that can hinder
                    development and community welfare:</p>
                <div class="challenge-item">
                    <h4>🚦 Traffic Congestion</h4>
                    <p>Without smart transportation systems, travel times increase drastically and productivity decreases.
                        Congestion also leads to increased greenhouse gas emissions and air pollution.</p>
                </div>
                <div class="challenge-item">
                    <h4>🏢 Complicated Bureaucracy</h4>
                    <p>Slow and non-transparent public services. Citizens must wait in long lines for administrative matters
                        that should be handled digitally.</p>
                </div>
                <div class="challenge-item">
                    <h4>🌫️ Environmental Pollution</h4>
                    <p>Poor air quality, suboptimal waste management, and excessive energy consumption. This impacts public
                        health and climate change.</p>
                </div>
                <div class="challenge-item">
                    <h4>📊 Data-Unsupported Decision Making</h4>
                    <p>Policies are made without accurate data support, often missing the target and causing new problems.
                        Lack of real-time monitoring systems makes it difficult for governments to identify problems early.
                    </p>
                </div>
                <div class="challenge-item">
                    <h4>💰 Budget Inefficiency</h4>
                    <p>Suboptimal city financial management due to lack of integrated monitoring and evaluation systems.
                        Many projects are wasteful or off-target.</p>
                </div>
                <div class="challenge-item">
                    <h4>🏥 Suboptimal Emergency Services</h4>
                    <p>Slow emergency response systems due to lack of coordination and real-time information. This can
                        endanger lives and property.</p>
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>
            <!-- 6 Smart City Pillars -->
            <div id="pillars" class="section">
                <h2>🏛️ 6 Smart City Pillars</h2>
                <p>Based on the model developed by Rudolf Giffinger et al. (2007) from Vienna University of Technology,
                    Smart City has 6 main integrated pillars:</p>

                <div class="pillar-section">
                    <div class="pillar-header">
                        <span>🏛️</span>
                        <span>Smart Governance</span>
                    </div>
                    <div class="pillar-definition">
                        <strong>Definition:</strong> A transparent, participatory, and responsive government system
                        using digital technology to improve the quality of public services and community engagement.
                    </div>
                    <h4>Main Characteristics:</h4>
                    <ul>
                        <li>Transparency in decision-making and budget management</li>
                        <li>Active citizen participation in policy-making</li>
                        <li>Efficient and easily accessible public services</li>
                        <li>High accountability of public officials</li>
                    </ul>
                    <h4>Technologies Used:</h4>
                    <div class="tech-list">
                        <div class="tech-item">E-Government Platforms</div>
                        <div class="tech-item">Blockchain for transparency</div>
                        <div class="tech-item">AI for policy analysis</div>
                        <div class="tech-item">Public service mobile apps</div>
                    </div>
                    <div class="applications">
                        <strong>Examples:</strong> Online licensing portals, e-voting systems, budget transparency
                        dashboards,
                        citizen service chatbots, online complaint systems.
                    </div>
                </div>

                <div class="pillar-section">
                    <div class="pillar-header">
                        <span>🚗</span>
                        <span>Smart Mobility</span>
                    </div>
                    <div class="pillar-definition">
                        <strong>Definition:</strong> An integrated, efficient, and sustainable transportation system
                        using smart technology to optimize the movement of people and goods within the city.
                    </div>
                    <h4>Main Characteristics:</h4>
                    <ul>
                        <li>Integrated and multimodal transportation systems</li>
                        <li>Route optimization and congestion reduction</li>
                        <li>Use of eco-friendly vehicles</li>
                        <li>High accessibility for all groups</li>
                    </ul>
                    <h4>Technologies Used:</h4>
                    <div class="tech-list">
                        <div class="tech-item">Intelligent Traffic Systems (ITS)</div>
                        <div class="tech-item">IoT sensors for traffic monitoring</div>
                        <div class="tech-item">Electric vehicle infrastructure</div>
                        <div class="tech-item">Mobility as a Service (MaaS)</div>
                    </div>
                    <div class="applications">
                        <strong>Examples:</strong> Adaptive traffic lights, ride-sharing apps, EV charging stations,
                        bike-sharing systems, real-time traffic information.
                    </div>
                </div>

                <div class="pillar-section">
                    <div class="pillar-header">
                        <span>🌱</span>
                        <span>Smart Environment</span>
                    </div>
                    <div class="pillar-definition">
                        <strong>Definition:</strong> Sustainable environmental management using technology
                        for monitoring, mitigation, and adaptation to urban environmental challenges.
                    </div>
                    <h4>Main Characteristics:</h4>
                    <ul>
                        <li>Real-time environmental quality monitoring</li>
                        <li>Use of renewable energy and energy efficiency</li>
                        <li>Optimal waste management and circular economy</li>
                        <li>Climate change mitigation and adaptation</li>
                    </ul>
                    <h4>Technologies Used:</h4>
                    <div class="tech-list">
                        <div class="tech-item">Air Quality Monitoring Systems</div>
                        <div class="tech-item">Smart Waste Management</div>
                        <div class="tech-item">Smart Grids for renewable energy</div>
                        <div class="tech-item">IoT for environmental monitoring</div>
                    </div>
                    <div class="applications">
                        <strong>Examples:</strong> Air quality sensors, smart bins with sensors, on-grid solar panels,
                        disaster early warning systems, smart irrigation.
                    </div>
                </div>

                <div class="pillar-section">
                    <div class="pillar-header">
                        <span>💼</span>
                        <span>Smart Economy</span>
                    </div>
                    <div class="pillar-definition">
                        <strong>Definition:</strong> An economic ecosystem driven by innovation,
                        entrepreneurship, and digital transformation to create added value and city competitiveness.
                    </div>
                    <h4>Main Characteristics:</h4>
                    <ul>
                        <li>A growing startup and innovation ecosystem</li>
                        <li>Digitalization of SMEs and traditional sectors</li>
                        <li>Collaboration between government, academia, and industry</li>
                        <li>Easy and inclusive access to financial services</li>
                    </ul>
                    <h4>Technologies Used:</h4>
                    <div class="tech-list">
                        <div class="tech-item">FinTech and Digital Payments</div>
                        <div class="tech-item">E-commerce Platforms</div>
                        <div class="tech-item">Digital Marketing Tools</div>
                        <div class="tech-item">Blockchain for supply chain</div>
                    </div>
                    <div class="applications">
                        <strong>Examples:</strong> Startup incubators, local marketplace platforms,
                        digital payment systems, co-working spaces, SME digitalization programs.
                    </div>
                </div>

                <div class="pillar-section">
                    <div class="pillar-header">
                        <span>🏠</span>
                        <span>Smart Living</span>
                    </div>
                    <div class="pillar-definition">
                        <strong>Definition:</strong> A high quality of life through smart, safe, and sustainable
                        public services by leveraging technology to enhance community well-being.
                    </div>
                    <h4>Main Characteristics:</h4>
                    <ul>
                        <li>Access to quality healthcare and education</li>
                        <li>Guaranteed security and safety</li>
                        <li>Adequate recreational and cultural facilities</li>
                        <li>Decent and affordable housing</li>
                    </ul>
                    <h4>Technologies Used:</h4>
                    <div class="tech-list">
                        <div class="tech-item">Smart Healthcare Systems</div>
                        <div class="tech-item">Smart Home Technology</div>
                        <div class="tech-item">Digital Education Platforms</div>
                        <div class="tech-item">Smart Security Systems</div>
                    </div>
                    <div class="applications">
                        <strong>Examples:</strong> Telemedicine, smart building management, e-learning platforms,
                        AI-powered CCTV, smart lighting.
                    </div>
                </div>

                <div class="pillar-section">
                    <div class="pillar-header">
                        <span>👥</span>
                        <span>Smart People</span>
                    </div>
                    <div class="pillar-definition">
                        <strong>Definition:</strong> Educated, innovative citizens with digital skills
                        who actively participate in the Smart City ecosystem.
                    </div>
                    <h4>Main Characteristics:</h4>
                    <ul>
                        <li>High digital literacy</li>
                        <li>Creativity and innovation in problem-solving</li>
                        <li>Openness to lifelong learning</li>
                        <li>Active participation in social and political life</li>
                    </ul>
                    <h4>Technologies Used:</h4>
                    <div class="tech-list">
                        <div class="tech-item">E-learning Platforms</div>
                        <div class="tech-item">Digital Literacy Programs</div>
                        <div class="tech-item">Innovation Labs</div>
                        <div class="tech-item">Civic Engagement Apps</div>
                    </div>
                    <div class="applications">
                        <strong>Examples:</strong> MOOCs (Massive Open Online Courses), digital skills training,
                        hackathons, citizen journalism platforms, online community forums.
                    </div>
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Supporting Technologies -->
            <div id="tech" class="section">
                <h2>⚙️ Supporting Technologies for Smart City</h2>
                <p>Smart City is supported by various advanced technologies that are integrated to create an intelligent and
                    efficient city ecosystem:</p>
                <div class="tech-section">
                    <div class="tech-icon">🌐</div>
                    <h3>Internet of Things (IoT)</h3>
                    <p>A network of interconnected physical devices that exchange data. IoT is the backbone of Smart Cities
                        by
                        connecting sensors, actuators, and other smart devices to collect real-time data from various
                        aspects of
                        the city.</p>
                    <h4>Main Components of IoT:</h4>
                    <ul>
                        <li><strong>Sensors:</strong> Collect data from the environment (temperature, humidity, air quality,
                            noise)</li>
                        <li><strong>Connectivity:</strong> Connect devices via networks (WiFi, 5G, LoRaWAN)</li>
                        <li><strong>Data Processing:</strong> Analyze collected data to generate insights</li>
                        <li><strong>User Interface:</strong> Present information to users via apps or dashboards</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> Smart lighting that adjusts intensity based on
                        activity,
                        real-time traffic monitoring, automated waste management, air and water quality sensors.
                    </div>
                </div>
                <div class="tech-section">
                    <div class="tech-icon">📊</div>
                    <h3>Big Data & Artificial Intelligence</h3>
                    <p>Analysis of large volumes of data to generate insights for decision-making. AI helps in prediction,
                        optimization, and automation of city systems, as well as providing more personalized and efficient
                        services to citizens.</p>
                    <h4>Types of AI in Smart Cities:</h4>
                    <ul>
                        <li><strong>Machine Learning:</strong> Learns patterns from historical data for prediction</li>
                        <li><strong>Computer Vision:</strong> Analyzes images and videos for monitoring</li>
                        <li><strong>Natural Language Processing:</strong> Processes natural language for chatbot services
                        </li>
                        <li><strong>Deep Learning:</strong> Complex analysis for automated decision-making</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> Predictive analytics for infrastructure maintenance,
                        traffic route optimization, automated customer service, crime and disaster prediction.
                    </div>
                </div>
                <div class="tech-section">
                    <div class="tech-icon">☁️</div>
                    <h3>Cloud Computing</h3>
                    <p>Computing infrastructure accessible via the internet, providing flexibility and scalability for Smart
                        City
                        applications. Cloud computing enables large-scale data storage and processing at efficient costs.
                    </p>
                    <h4>Cloud Computing Models:</h4>
                    <ul>
                        <li><strong>Public Cloud:</strong> Cloud services shared with other users</li>
                        <li><strong>Private Cloud:</strong> Exclusive cloud infrastructure for one organization</li>
                        <li><strong>Hybrid Cloud:</strong> Combination of public and private cloud</li>
                        <li><strong>Multi-Cloud:</strong> Use of multiple cloud providers simultaneously</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> City data storage, scalable government applications,
                        disaster recovery, service integration across departments.
                    </div>
                </div>
                <div class="tech-section">
                    <div class="tech-icon">🔗</div>
                    <h3>Blockchain</h3>
                    <p>A distributed ledger technology that provides transparency, security, and trust in digital government
                        transactions. Blockchain ensures data cannot be manipulated and all transactions are recorded
                        permanently.</p>
                    <h4>Advantages of Blockchain:</h4>
                    <ul>
                        <li><strong>Immutability:</strong> Data cannot be changed once stored</li>
                        <li><strong>Transparency:</strong> All transactions can be publicly verified</li>
                        <li><strong>Decentralization:</strong> No single point of failure</li>
                        <li><strong>Security:</strong> Strong encryption protects data</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> Digital identity for citizens, electronic voting
                        systems,
                        supply chain transparency, smart contracts for public services.
                    </div>
                </div>
                <div class="tech-section">
                    <div class="tech-icon">🗺️</div>
                    <h3>Geographic Information System (GIS)</h3>
                    <p>A geographic information system that integrates, stores, edits, analyzes, and displays geographic
                        information. GIS enables spatial analysis for planning and location-based decision-making.</p>
                    <h4>Components of GIS:</h4>
                    <ul>
                        <li><strong>Hardware:</strong> Computers, servers, and GPS devices</li>
                        <li><strong>Software:</strong> Applications for geographic data analysis and visualization</li>
                        <li><strong>Data:</strong> Geographic information and related attributes</li>
                        <li><strong>People:</strong> Users who operate and analyze the system</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> Urban planning, disaster management, infrastructure
                        asset
                        management, location-based services.
                    </div>
                </div>
                <div class="tech-section">
                    <div class="tech-icon">📡</div>
                    <h3>5G & Advanced Connectivity</h3>
                    <p>Fifth-generation network technology that provides high speed, low latency, and massive connectivity
                        for IoT
                        devices. 5G is an enabler for Smart City applications requiring real-time communication.</p>
                    <h4>Advantages of 5G:</h4>
                    <ul>
                        <li><strong>Ultra-High Speed:</strong> Download speeds up to 10 Gbps</li>
                        <li><strong>Ultra-Low Latency:</strong> Delay of less than 1 millisecond</li>
                        <li><strong>Massive Connectivity:</strong> Can connect 1 million devices per km²</li>
                        <li><strong>Network Slicing:</strong> Network partitioning for specific applications</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> Autonomous vehicles, AR/VR services, real-time
                        monitoring,
                        smart manufacturing, remote surgery.
                    </div>
                </div>
                <div class="tech-section">
                    <div class="tech-icon">🔐</div>
                    <h3>Cybersecurity</h3>
                    <p>Cybersecurity is a critical aspect of Smart Cities due to the large amount of sensitive data and
                        connected
                        infrastructure. Robust security systems are needed to protect citizen data and prevent cyberattacks
                        that
                        could paralyze city services.</p>
                    <h4>Components of Cybersecurity:</h4>
                    <ul>
                        <li><strong>Network Security:</strong> Firewalls, IDS/IPS, and network segmentation</li>
                        <li><strong>Data Protection:</strong> Data encryption, backup, and data masking</li>
                        <li><strong>Identity Management:</strong> Multi-factor authentication and access control</li>
                        <li><strong>Incident Response:</strong> Fast threat detection and response systems</li>
                    </ul>
                    <div class="applications">
                        <strong>Applications in Smart Cities:</strong> City network security systems, citizen personal data
                        protection, cyber threat monitoring, disaster recovery plans.
                    </div>
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Smart City Benefits -->
            <div id="benefits" class="section">
                <h2>🌟 Smart City Implementation Benefits</h2>
                <p>Smart City implementation provides significant benefits for governments, citizens, and the environment:
                </p>
                <h3>Benefits for Government</h3>
                <ul>
                    <li><strong>Operational Efficiency:</strong> Automation of administrative processes can reduce
                        operational costs by up to 30%</li>
                    <li><strong>Data-Driven Decision Making:</strong> Real-time data enables more targeted policies</li>
                    <li><strong>Transparency and Accountability:</strong> Digital systems increase transparency in budget
                        management and services</li>
                    <li><strong>Revenue Enhancement:</strong> Tax and levy optimization through digital systems</li>
                </ul>
                <h3>Benefits for Citizens</h3>
                <ul>
                    <li><strong>Easy Access to Services:</strong> 24/7 public services through digital platforms</li>
                    <li><strong>Improved Quality of Life:</strong> Cleaner, safer, and more comfortable living environments
                    </li>
                    <li><strong>Participation in Decision Making:</strong> E-participation platforms allow citizens to
                        provide feedback</li>
                    <li><strong>New Economic Opportunities:</strong> Access to digital markets and skills training</li>
                </ul>
                <h3>Benefits for the Environment</h3>
                <ul>
                    <li><strong>Reduction of Carbon Emissions:</strong> Optimized transportation and energy use can reduce
                        emissions by up to 15%</li>
                    <li><strong>Efficient Resource Use:</strong> Smart grids and water management save energy and water</li>
                    <li><strong>Optimal Waste Management:</strong> Monitoring and routing systems improve waste collection
                    </li>
                    <li><strong>Real-Time Environmental Monitoring:</strong> Early detection of pollution and environmental
                        degradation</li>
                </ul>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Implementation Challenges -->
            <div id="challenges" class="section">
                <h2>⚠️ Smart City Implementation Challenges</h2>
                <p>Although offering many benefits, Smart City implementation faces several challenges that must be
                    addressed:</p>
                <h3>Technical Challenges</h3>
                <div class="challenge-item">
                    <h4>🔧 Integration of Legacy Systems</h4>
                    <p>Connecting old systems with new technology requires significant investment and time. Many local
                        governments still rely on manual or semi-digital systems that are difficult to integrate.</p>
                </div>
                <div class="challenge-item">
                    <h4>📶 Uneven Digital Infrastructure</h4>
                    <p>Limited internet access, especially in suburban and rural areas, hinders equal access to digital
                        services for all citizens.</p>
                </div>
                <h3>Financial Challenges</h3>
                <div class="challenge-item">
                    <h4>💰 High Initial Investment</h4>
                    <p>Smart City implementation requires large-scale technology infrastructure investments, which can be
                        challenging for regions with limited budgets.</p>
                </div>
                <div class="challenge-item">
                    <h4>📈 Financial Sustainability</h4>
                    <p>Ensuring sustainable financing for system maintenance, upgrades, and continuous development requires
                        long-term financial planning.</p>
                </div>
                <h3>Social Challenges</h3>
                <div class="challenge-item">
                    <h4>📱 Digital Divide</h4>
                    <p>Inequality in access to and use of technology among different social groups, especially the elderly
                        and low-income communities.</p>
                </div>
                <div class="challenge-item">
                    <h4>🔒 Privacy and Data Security</h4>
                    <p>Public concerns over the collection and use of personal data by governments, as well as the risks of
                        data leaks and misuse.</p>
                </div>
                <h3>Governance Challenges</h3>
                <div class="challenge-item">
                    <h4>🏛️ Inter-Agency Coordination</h4>
                    <p>Smart City projects require close coordination between multiple departments and agencies, which often
                        have sectoral silos and different systems.</p>
                </div>
                <div class="challenge-item">
                    <h4>📋 Incomplete Regulations</h4>
                    <p>Regulatory frameworks for data protection, technology standards, and digital governance are still
                        under development in many regions.</p>
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Success Stories -->
            <div id="stories" class="section">
                <h2>🏆 Smart City Case Studies Worldwide</h2>
                <p>Several cities around the world have successfully implemented Smart City concepts with inspiring results:
                </p>

                <h3>Singapore - Comprehensive and Integrated</h3>
                <p>Singapore is recognized as one of the leading Smart Cities with a holistic approach:</p>
                <ul>
                    <li><strong>Smart Nation Initiative:</strong> A national program integrating all aspects of life</li>
                    <li><strong>Urban Sensing Platform:</strong> A city-wide IoT sensor network for real-time monitoring
                    </li>
                    <li><strong>Electronic Road Pricing:</strong> An electronic toll system effectively reducing traffic
                        congestion</li>
                    <li><strong>Smart Health:</strong> An integrated digital healthcare system</li>
                </ul>
                <div class="highlight">
                    <strong>Results:</strong> 15% reduction in travel time, 20% energy savings, and an increase in citizen
                    satisfaction index to 8.7/10.
                </div>

                <h3>Barcelona - Focus on Citizen Participation</h3>
                <p>Barcelona prioritizes citizen participation in Smart City development:</p>
                <ul>
                    <li><strong>Decidim Platform:</strong> A digital platform enabling citizens to participate in
                        decision-making</li>
                    <li><strong>Smart Lighting:</strong> 20,000 LED streetlights with sensors saving 30% energy</li>
                    <li><strong>Smart Water:</strong> Real-time water quality monitoring system</li>
                    <li><strong>Fab City Movement:</strong> Local production and circular economy initiatives</li>
                </ul>
                <div class="highlight">
                    <strong>Results:</strong> 42,000 citizens actively participated in the digital platform, 25% reduction
                    in water consumption, and €3 million annual savings from smart lighting.
                </div>

                <h3>Amsterdam - Circular Economy Focus</h3>
                <p>Amsterdam leads in implementing circular economy principles within Smart City initiatives:</p>
                <ul>
                    <li><strong>Amsterdam Smart City (ASC):</strong> A collaboration platform for innovation projects</li>
                    <li><strong>Circular Economy Program:</strong> Targeting 50% reduction in raw material usage by 2030
                    </li>
                    <li><strong>Smart Energy:</strong> 100% renewable energy for public transport</li>
                    <li><strong>Algorithm Transparency:</strong> Public disclosure of algorithms used by the government</li>
                </ul>
                <div class="highlight">
                    <strong>Results:</strong> 300+ active smart city projects, 35% reduction in CO2 emissions, and
                    recognition as a global model for algorithm transparency.
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Indonesia Context -->
            <div id="indonesia" class="section">
                <h2>🇮🇩 Smart City in Indonesia</h2>
                <p>Indonesia has started its journey towards Smart City development with various initiatives and national
                    programs:</p>
                <h3>National Programs</h3>
                <ul>
                    <li><strong>Gerakan Menuju 100 Smart City:</strong> A program by the Ministry of Communication and
                        Information Technology</li>
                    <li><strong>Making Indonesia 4.0:</strong> An Industry 4.0 roadmap supporting Smart City development
                    </li>
                    <li><strong>Digital Indonesia:</strong> A vision for Indonesia to become a leading digital nation in
                        Asia</li>
                </ul>
                <h3>Pioneer Smart Cities in Indonesia</h3>
                <h4>Jakarta - Jakarta Smart City</h4>
                <ul>
                    <li>Qlue platform for city issue reporting</li>
                    <li>OK OCE program for empowering MSMEs</li>
                    <li>Smart Transportation through Transjakarta and MRT</li>
                    <li>Integrated CCTV system for city security</li>
                </ul>
                <h4>Bandung - Bandung Command Center</h4>
                <ul>
                    <li>Bandung Command Center for 24/7 city monitoring</li>
                    <li>E-Budgeting for budget transparency</li>
                    <li>Smart Parking system</li>
                    <li>Sapawarga app for citizen services</li>
                </ul>
                <h4>Surabaya - E-Government Pioneer</h4>
                <ul>
                    <li>Surabaya Single Window for online licensing</li>
                    <li>Smart Governance with transparent data management</li>
                    <li>Smart Health with telemedicine services</li>
                    <li>E-Musrenbang app for participatory planning</li>
                </ul>
                <h3>Challenges of Smart City in Indonesia</h3>
                <div class="challenge-item">
                    <h4>🌐 Wide Digital Divide</h4>
                    <p>The gap in internet access between major cities and remote areas, as well as between younger and
                        older generations, remains a major challenge.</p>
                </div>
                <div class="challenge-item">
                    <h4>💰 Limited Regional Budget</h4>
                    <p>Many local governments have limited budgets for investing in Smart City technology infrastructure.
                    </p>
                </div>
                <div class="challenge-item">
                    <h4>👨‍💼 Quality of Human Resources</h4>
                    <p>The lack of civil servants with sufficient ICT competencies to manage Smart City systems.</p>
                </div>
                <div class="applications">
                    <strong>Possible Solutions:</strong> Public-Private Partnerships (PPP), continuous human resource
                    training programs, phased implementation based on regional capacity, and sharing best practices between
                    cities.
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Future of Smart Cities -->
            <div id="future" class="section">
                <h2>🔮 The Future of Smart Cities</h2>
                <p>Rapid technological advancements will shape the new face of Smart Cities in the coming years:</p>
                <h3>Emerging Technologies</h3>
                <h4>🤖 Artificial Intelligence & Machine Learning</h4>
                <p>AI will become increasingly sophisticated in predicting and optimizing various aspects of the city, from
                    traffic flow to energy consumption. A "city brain" will be able to make automated decisions for
                    real-time city optimization.</p>
                <h4>🥽 Extended Reality (AR/VR/MR)</h4>
                <p>Extended Reality technologies will transform how citizens interact with city services, from virtual
                    participation in city planning to immersive education and training for government officials.</p>
                <h4>🧬 Digital Twin</h4>
                <p>An accurate digital replica of the city will allow simulation and testing of various policy scenarios
                    before implementation in the real world, reducing risks and costs of trial and error.</p>
                <h4>⚡ Edge Computing</h4>
                <p>Processing data at the edge will reduce latency and improve the responsiveness of Smart City systems,
                    enabling faster and more efficient decision-making.</p>
                <h3>Future Trends</h3>
                <div class="highlight">
                    <h4>🌍 Climate-Resilient Smart Cities</h4>
                    <p>Future Smart Cities will focus on climate adaptation and mitigation, with advanced early warning
                        systems and infrastructure resilient to extreme weather.</p>
                </div>
                <div class="highlight">
                    <h4>👥 Hyper-Personalized Services</h4>
                    <p>City services will be personalized based on each citizen's preferences, needs, and behavior patterns,
                        while maintaining privacy and data security.</p>
                </div>
                <div class="highlight">
                    <h4>🔄 Autonomous City Operations</h4>
                    <p>City systems that can operate autonomously with minimal human intervention, from autonomous vehicles
                        to self-healing infrastructure.</p>
                </div>
                <h3>Implications for Indonesia</h3>
                <p>Indonesia needs to prepare for the Smart City future by focusing on:</p>
                <ul>
                    <li><strong>Investment in Digital Education:</strong> Preparing human resources for future technologies
                    </li>
                    <li><strong>Adaptive Regulations:</strong> Flexible legal frameworks that can adapt to new technologies
                    </li>
                    <li><strong>Ecosystem Collaboration:</strong> Strong collaboration among government, academia, industry,
                        and society</li>
                    <li><strong>National Standardization:</strong> Technology and interoperability standards to ensure
                        inter-city integration</li>
                </ul>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- Conclusion -->
            <div id="conclusion" class="section">
                <h2>📝 Conclusion</h2>
                <p>Smart City represents the natural evolution of urban development in the digital era. The concept is not
                    only about deploying advanced technologies but about how technology can improve quality of life,
                    government efficiency, and environmental sustainability.</p>
                <p>Successful Smart City implementation requires a holistic approach involving all stakeholders: government
                    as regulator and facilitator, industry as solution provider, academia as innovation driver, and citizens
                    as the primary users and beneficiaries.</p>
                <div class="highlight">
                    <strong>🎯 Key Takeaways:</strong>
                    <ul>
                        <li>Smart City is about people-centric technology, not technology for technology's sake</li>
                        <li>Implementation should be gradual, sustainable, and tailored to local contexts</li>
                        <li>Data privacy, security, and digital inclusion must be top priorities</li>
                        <li>Collaboration and citizen participation are key to success</li>
                        <li>Investment in human capital is as important as investment in technology</li>
                    </ul>
                </div>
                <p>Indonesia has great potential to become a Smart City leader in Southeast Asia, with a large population,
                    growing economy, and high innovation spirit. However, challenges such as the digital divide, budget
                    limitations, and inter-agency coordination must be addressed systematically.</p>
                <p>The future of Smart Cities will be even more exciting with technologies such as AI, IoT, 5G, and
                    blockchain. Cities that can wisely adapt and adopt these technologies will become more livable,
                    sustainable, and competitive in the global era.</p>
                <div class="applications">
                    <strong>💡 Recommendations for Stakeholders:</strong><br>
                    <strong>Government:</strong> Develop long-term roadmaps, invest in human resources, and create
                    regulations that support innovation.<br>
                    <strong>Industry:</strong> Develop affordable solutions adapted to Indonesia’s local context.<br>
                    <strong>Academia:</strong> Conduct applicable research and collaborate with practitioners.<br>
                    <strong>Citizens:</strong> Actively participate and continuously improve digital literacy.
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

            <!-- References -->
            <div id="references" class="section">
                <h2>📚 References</h2>
                <ul style="text-align: left;">
                    <li>Caragliu, A., Del Bo, C., & Nijkamp, P. (2011). Smart cities in Europe. Journal of Urban Technology,
                        18(2), 65-82.</li>
                    <li>Giffinger, R., Fertner, C., Kramar, H., & Meijers, E. (2007). Smart cities: Ranking of European
                        medium-sized cities. Centre of Regional Science, Vienna University of Technology.</li>
                    <li>Hollands, R. G. (2015). Critical interventions into the corporate smart city. Cambridge Journal of
                        Regions, Economy and Society, 8(1), 61-77.</li>
                    <li>Kitchin, R. (2014). The real-time city? Big data and smart urbanism. GeoJournal, 79(1), 1-14.</li>
                    <li>Komninos, N. (2013). Intelligent cities: Innovation, knowledge systems and digital spaces.
                        Routledge.</li>
                    <li>UN-Habitat. (2020). World Cities Report 2020: The Value of Sustainable Urbanization. United Nations
                        Human Settlements Programme.</li>
                    <li>World Bank. (2021). Smart Cities: Digital Solutions for a More Livable Future. World Bank Group.
                    </li>
                    <li>Ministry of Communication and Information Technology of Indonesia. (2021). Indonesia Smart City
                        Roadmap 2021-2045.</li>
                    <li>Bappenas. (2020). National Medium-Term Development Plan (RPJMN) 2020-2024: Advanced Indonesia that
                        is Sovereign, Independent, and with Strong Character.</li>
                    <li>ITU-T. (2019). Smart sustainable cities: An analysis of definitions. International Telecommunication
                        Union.</li>
                </ul>
                <div class="highlight">
                    <strong>📖 Additional Resources for Further Learning:</strong><br>
                    • Indonesia Smart City Guidelines (Ministry of Communication and Information Technology)<br>
                    • ISO/IEC 30071-1:2019 - Smart city ICT indicators<br>
                    • ASEAN Smart Cities Network (ASCN) Best Practices<br>
                    • Smart City Index 2021 by IMD World Competitiveness Center<br>
                    • Digital Government Index 2019 by OECD
                </div>
                <!-- See More Button -->
                <div class="text-center mt-4">
                    <a href="#" class="btn btn-outline-primary rounded-pill px-4 py-2" style="font-weight:500;">See
                        More</a>
                </div>
            </div>

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
    background: linear-gradient(135deg, rgba(248,181,0,0.9) 0%, rgba(255,221,85,0.95) 100%);
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

                </style>
                <h2 style="text-align: center">🧠 Smart City Advanced Quiz</h2>
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
                </form>
                <div id="quiz2-result" style="margin-top:1rem;"></div>
                <!-- Quiz2 Feedback Modal -->
                <div class="modal fade" id="quiz2FeedbackModal" tabindex="-1" aria-labelledby="quiz2FeedbackLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="quiz2FeedbackLabel">Quiz Result</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
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
        </div>
    </div>
    </div>
@endsection
