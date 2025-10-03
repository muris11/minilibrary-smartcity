<!-- Smart City Benefits -->
<style>
    .benefits-container {
        max-width: 900px;
        margin: 0 auto;
        padding: 1.5rem 1rem;
    }

    .benefits-container h1 {
        font-size: 2.2rem;
        font-weight: bold;
        text-align: center;
        margin-bottom: 1.2rem;
        color: #1565c0;
    }

    .benefits-container p {
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
        .benefits-container {
            padding: 1rem 0.3rem;
        }

        .benefits-container h1 {
            font-size: 1.3rem;
        }

        .custom-table th,
        .custom-table td {
            padding: 10px 8px;
            font-size: 0.97rem;
        }

        .benefits-container p {
            font-size: 0.98rem;
        }
    }
</style>

<div id="benefits" class="section">
    <div class="benefits-container">
        <h1>Benefits Of a Smart City in Lampung</h1>

        <div style="text-align:center; margin: 1.5rem 0;">
            <img src="{{ asset('images/ben.png') }}" alt="Smart City"
                style="max-width: 100%; border-radius: 16px; box-shadow: 0 2px 12px rgba(0,0,0,0.10);">
        </div>

        <p>
            In Lampung Province—especially Bandar Lampung—smart city solutions directly improve everyday public
            services.
            Integrated e-government portals and mobile reporting streamline permits, complaints, and social assistance,
            reducing processing time and increasing transparency. Real-time dashboards help local agencies prioritize
            issues
            (from road maintenance to healthcare queues) and coordinate faster emergency response. At the village level,
            digital services can be federated into city and regency platforms, enabling consistent service standards and
            better inclusion for residents in peri-urban and rural areas.
        </p>

        <p>
            Mobility, environment, and basic infrastructure management also benefit substantially. Smart traffic signals
            and
            real-time traffic information improve travel times on key corridors, while public transport users gain more
            reliable ETAs. Sensor networks for air quality, noise, and micro-climate create early alerts and evidence
            for
            targeted interventions, helping reduce exposure to pollution. In utilities, leak detection and pressure
            monitoring improve water distribution reliability; smart bins and analytics-based collection routes cut
            costs,
            lower emissions, and keep tourist and commercial zones cleaner. For coastal and flood-prone areas,
            integrated
            early-warning and situational awareness tools strengthen disaster preparedness.
        </p>

        <p>
            Smart city adoption in Lampung accelerates sustainability and local economic development. Energy-efficient
            public
            buildings, adaptive LED street lighting, and rooftop solar on government facilities lower operational costs
            and
            carbon footprint. Data-driven tourism management supports destinations such as beaches and natural
            attractions by
            smoothing visitor flows and protecting the environment. Open data and interoperable systems create
            opportunities
            for universities and startups to build local solutions, generating skilled jobs and fostering innovation.
            When
            combined with accessibility standards, public Wi-Fi, and digital literacy programs, these initiatives
            broaden
            participation and improve quality of life across communities.
        </p>

        <h1 style="text-align:center; font-weight:bold;">More About Benefits Smart City</h1>
        <div class="mt-4">
            <table class="custom-table">
                <thead>
                    <tr>
                        <th style="width:5%;">No</th>
                        <th style="width:65%;">Title & <b>Source</b></th>
                        <th style="width:30%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><b>Velatia Blog.</b> Main Benefits Of Smart City</td>
                        <td><a href="https://www.velatia.com/en/blog/main-benefits-of-smart-cities/"
                                class="custom-btn">View Details</a></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><b>Thames Freeport Blog.</b> The Future is Here: Advantages of a Smart City</td>
                        <td><a href="https://thamesfreeport.com/blog/advantages-of-a-smart-city/"
                                class="custom-btn">View Details</a></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td><b>Planning Malaysia.</b> <em>The Development of Smart Cities and Environment-Related
                                Domain: A Case Study in Indonesia and France</em> (2022)</td>
                        <td><a href="https://www.planningmalaysia.org/index.php/pmj/article/view/1084"
                                class="custom-btn">View Details</a></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td><b>Plant Moran Insights.</b> Thinking about becoming a smart city? 10 benefits of smart
                            cities</td>
                        <td><a href="https://www.plantemoran.com/explore-our-thinking/insight/2018/04/thinking-about-becoming-a-smart-city-10-benefits-of-smart-cities"
                                class="custom-btn">View Details</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
