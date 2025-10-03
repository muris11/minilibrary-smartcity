<!-- Supporting Technologies -->
<style>
    .tech-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 1.5rem 1rem;
    }

    .tech-container h1 {
        font-size: 2.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 1.2rem;
        color: #1565c0;
    }

    .tech-container p {
        font-size: 1.05rem;
        color: #333;
        margin-bottom: 1.2rem;
    }

    .custom-table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        margin-top: 1rem;
        font-size: 1rem;
        background: #fff;
        box-shadow: 0 2px 12px rgba(0, 0, 0, 0.07);
        border-radius: 16px;
        overflow: hidden;
    }

    .custom-table th,
    .custom-table td {
        border: none;
        padding: 14px 20px;
        text-align: left;
    }

    .custom-table th {
        background: linear-gradient(90deg, #e3f2fd 0%, #f5f7fa 100%);
        color: #1976d2;
        font-weight: 700;
        letter-spacing: 0.5px;
    }

    .custom-table tbody tr {
        transition: background 0.2s;
    }

    .custom-table tbody tr:hover {
        background: #e3f2fd;
    }

    .custom-table td {
        color: #444;
    }

    .custom-table td .custom-btn {
        display: inline-block;
        padding: 7px 22px;
        background: linear-gradient(90deg, #1976d2 60%, #42a5f5 100%);
        color: #fff;
        border: none;
        border-radius: 24px;
        font-size: 1rem;
        font-weight: 500;
        text-decoration: none;
        box-shadow: 0 1px 4px rgba(25, 118, 210, 0.12);
        transition: background 0.2s, box-shadow 0.2s;
    }

    .custom-table td .custom-btn:hover {
        background: linear-gradient(90deg, #1565c0 60%, #1976d2 100%);
        box-shadow: 0 2px 8px rgba(25, 118, 210, 0.18);
    }

    @media (max-width: 600px) {
        .tech-container {
            padding: 1rem 0.3rem;
        }

        .tech-container h1 {
            font-size: 1.3rem;
        }

        .custom-table th,
        .custom-table td {
            padding: 10px 8px;
            font-size: 0.97rem;
        }

        .tech-container p {
            font-size: 0.98rem;
        }
    }
</style>

<div id="technologies" class="section">
    <div class="tech-container">

        <h1>Supporting Technologies for Smart City</h1>

        <div style="text-align:center; margin: 1.5rem 0;">
            <img src="{{ asset('images/tech.png') }}" alt="Smart City"
                 style="max-width: 100%; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.10);">
        </div>

        <!-- 1. IoT + Big Data architecture for city-scale sensing and decisions -->
        <p>
            The study emphasizes an <strong>Internet of Things (IoT) and Big Data architecture</strong> that links
            distributed devices and sensors across the city to continuously collect environmental data for
            <em>planning and decision-making</em>. A citywide network of connected devices enables officials to monitor
            key indicators (e.g., emissions, humidity, microclimate) and feed analytics dashboards that inform
            proactive interventions and long-term urban planning.
        </p>

        <!-- 2. Buildings & Smart Homes -->
        <p>
            In the built environment, <strong>smart homes</strong> and energy-aware buildings are highlighted as
            foundations for environmental gains. Smart-home capabilities (pervasive computing within the dwelling)
            support <em>comfort, safety, and efficiency</em>, while sustainable building practices and
            <em>near/zero-energy</em> concepts reduce consumption at the asset level. Together, these measures raise
            building performance and align with the environment-related goals assessed in the study.
        </p>

        <!-- 3. Pollution monitoring: video analytics + ambient sensors -->
        <p>
            For <strong>pollution control</strong>, the article references a
            <em>video-analytics–based architecture</em> to estimate <strong>traffic emissions</strong> and the use of
            <strong>ambient sensors</strong> (e.g., air quality and humidity). These technologies create localized,
            high-frequency measurements that help identify hotspots, trigger alerts, and track the impact of targeted
            policies—forming an integrated approach to environmental management.
        </p>

        <!-- 4. Renewable energy + Smart grid integration -->
        <p>
            The study underlines the growing role of <strong>renewable energy</strong> in urban systems and the need
            for <strong>smart grids</strong> to integrate distributed generation, improve efficiency, and enable new
            services for consumers. Smart grids support advanced metering, demand coordination, and the seamless
            incorporation of clean energy sources into city operations—key enablers of sustainable growth.
        </p>

        <!-- 5. Water quality monitoring and distribution control -->
        <p>
            In <strong>water management</strong>, sensor-based solutions are spotlighted to safeguard quality and
            reliability. The paper points to technologies such as <em>aquifer salinization monitoring</em>,
            <em>heavy-metal detection in freshwater</em>, and <em>distribution control</em> systems that minimize
            contaminated drinking water. Continuous sensing and automated regulation reduce risk and enhance resilience.
        </p>

        <!-- 6. Waste: smart containers + route optimization -->
        <p>
            For <strong>waste management</strong>, the study notes <em>smart containers</em> that detect fill levels and
            notify operators before overflow, coupled with <em>route optimization</em> (including algorithmic approaches)
            to increase collection efficiency. This pairing cuts operational costs and emissions while keeping streets
            cleaner—especially in dense or visitor-heavy areas.
        </p>

        <h1 style="text-align:center; font-weight:bold;">More About Smart City Technologies</h1>
        <div class="mt-4">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th style="width:65%;"><b>Title & Source</b></th>
                        <th style="width:30%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><b>Planning Malaysia.</b> The Development of Smart Cities and Environment-Related Domain: A Case Study in Indonesia and France (2022)</td>
                        <td><a href="https://www.planningmalaysia.org/index.php/pmj/article/view/1084" class="custom-btn">View Details</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><b>Planning Malaysia (PDF).</b> Official full text of the same article</td>
                        <td><a href="https://www.planningmalaysia.org/index.php/pmj/article/view/1084/774" class="custom-btn">Open PDF</a></td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>
</div>
