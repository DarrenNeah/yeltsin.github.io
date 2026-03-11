<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PWTS · Enterprise Information System · Demo</title>
    <!-- Font Awesome 6 (free) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Google Fonts: Inter + Space Grotesk -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,400;14..32,500;14..32,600;14..32,700&family=Space+Grotesk:wght@500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', sans-serif;
            background: #f1f5f9;
            color: #0b1e33;
            line-height: 1.5;
            padding: 24px;
        }

        .app-container {
            max-width: 1600px;
            margin: 0 auto;
            background: white;
            border-radius: 32px;
            box-shadow: 0 25px 50px -12px rgba(0,0,0,0.25);
            overflow: hidden;
            border: 1px solid #e9eef2;
        }

        /* header / top navigation */
        .top-nav {
            background: #082032;
            padding: 0 32px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            border-bottom: 1px solid #1e3a5f;
            flex-wrap: wrap;
        }

        .logo-area {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 16px 0;
        }

        .logo-icon {
            background: #2f7bff;
            width: 40px;
            height: 40px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            color: white;
        }

        .logo-text h1 {
            font-size: 1.4rem;
            font-weight: 600;
            color: white;
            letter-spacing: -0.2px;
            line-height: 1.2;
        }

        .logo-text span {
            font-size: 0.7rem;
            color: #a4b8d3;
            font-weight: 500;
            display: block;
        }

        .nav-links {
            display: flex;
            gap: 8px;
        }

        .nav-item {
            padding: 8px 18px;
            border-radius: 40px;
            color: #d0e0ff;
            font-weight: 500;
            font-size: 0.9rem;
            transition: all 0.15s;
            cursor: default;
            display: flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
        }

        .nav-item i {
            font-size: 1rem;
        }

        .nav-item.active {
            background: #1f4a8f;
            color: white;
        }

        .nav-item:not(.active):hover {
            background: #1a334f;
            color: white;
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 16px;
            color: white;
            text-decoration: none;
        }

        .user-profile a {
            color: white;
            text-decoration: none;
        }

        .badge {
            background: #2f7bff;
            padding: 6px 14px;
            border-radius: 100px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        .avatar {
            width: 42px;
            height: 42px;
            background: #31688e;
            border-radius: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            border: 2px solid #5c8bc0;
        }

        /* main layout: sidebar + content */
        .main-layout {
            display: flex;
            min-height: 700px;
        }

        .sidebar {
            width: 280px;
            background: #fafcff;
            border-right: 1px solid #e0e8f0;
            padding: 24px 16px;
        }

        .sidebar-section {
            margin-bottom: 32px;
        }

        .sidebar-heading {
            font-size: 0.7rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            color: #597a9f;
            font-weight: 700;
            margin-bottom: 16px;
            padding-left: 12px;
        }

        .sidebar-menu {
            list-style: none;
        }

        .sidebar-menu li {
            padding: 10px 12px;
            margin-bottom: 4px;
            border-radius: 12px;
            font-weight: 500;
            color: #1e3a5f;
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: default;
            transition: 0.1s;
        }

        .sidebar-menu li i {
            width: 22px;
            color: #4a6f94;
        }

        .sidebar-menu a {
            color: #4a6f94;
            text-decoration: none;
        }

        .sidebar-menu li.active {
            background: #e6f0ff;
            color: #0f3b7a;
            font-weight: 600;
            border-left: 4px solid #2f7bff;
        }

        .sidebar-menu li:not(.active):hover {
            background: #edf2f9;
        }

        .content-panel {
            flex: 1;
            background: white;
            padding: 28px 32px;
            overflow-y: auto;
        }

        /* page header */
        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .page-header h2 {
            font-size: 1.9rem;
            font-weight: 600;
            letter-spacing: -0.02em;
            color: #0b1e33;
        }

        .btn-group {
            display: flex;
            gap: 12px;
        }

        .btn {
            padding: 10px 22px;
            border-radius: 40px;
            font-weight: 600;
            font-size: 0.9rem;
            border: none;
            background: white;
            box-shadow: 0 2px 6px rgba(0,0,0,0.03);
            border: 1px solid #cfddee;
            cursor: default;
            transition: 0.1s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .btn-primary {
            background: #0a2a44;
            color: white;
            border: none;
            box-shadow: 0 8px 16px -6px #1d4e8d;
        }

        .btn-outline {
            background: white;
            border: 1px solid #b7c9e0;
            color: #1a3d62;
        }

        .btn i {
            font-size: 1rem;
        }

        /* stat cards */
        .stat-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: #f9fcff;
            border-radius: 28px;
            padding: 24px 20px;
            border: 1px solid #dde6f2;
            box-shadow: 0 4px 10px -6px #abc0d6;
        }

        .stat-title {
            font-size: 0.85rem;
            text-transform: uppercase;
            font-weight: 600;
            color: #55799e;
        }

        .stat-number {
            font-size: 2.2rem;
            font-weight: 700;
            color: #082032;
            margin-top: 8px;
        }

        .stat-desc {
            font-size: 0.8rem;
            color: #3f688b;
            margin-top: 4px;
        }

        /* two column layout */
        .two-col {
            display: flex;
            gap: 28px;
            margin-bottom: 40px;
        }

        .col {
            flex: 1;
        }

        .section-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #173458;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .card {
            background: #ffffff;
            border: 1px solid #e3ebf6;
            border-radius: 24px;
            padding: 20px;
            box-shadow: 0 8px 20px -12px #b7c9da;
        }

        .payment-flow {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 20px 0 10px;
        }

        .flow-step {
            text-align: center;
            flex: 1;
        }

        .flow-icon {
            background: #ecf3fa;
            width: 48px;
            height: 48px;
            border-radius: 48px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            color: #1d4e8d;
        }

        .flow-label {
            font-weight: 600;
            font-size: 0.8rem;
        }

        .flow-role {
            font-size: 0.7rem;
            color: #5a779b;
        }

        /* table styling */
        .table-responsive {
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.9rem;
        }

        th {
            text-align: left;
            padding: 16px 8px 8px 8px;
            color: #527196;
            font-weight: 600;
            font-size: 0.8rem;
            border-bottom: 1px solid #dbe2ec;
        }

        td {
            padding: 12px 8px;
            border-bottom: 1px solid #edf2f8;
        }

        .badge-status {
            background: #daf1e7;
            color: #0b6e4f;
            font-weight: 600;
            padding: 4px 12px;
            border-radius: 40px;
            font-size: 0.7rem;
            display: inline-block;
        }

        .badge-warning {
            background: #fff3d1;
            color: #a86800;
        }

        .badge-urgent {
            background: #ffe6e5;
            color: #b53b3b;
        }

        .doc-tag {
            background: #eef4ff;
            padding: 4px 12px;
            border-radius: 40px;
            font-size: 0.7rem;
            font-weight: 500;
            margin-right: 6px;
        }

        .progress {
            height: 8px;
            background: #e2eaf3;
            border-radius: 20px;
            width: 100%;
            margin: 8px 0;
        }

        .progress-fill {
            height: 8px;
            background: #2f7bff;
            border-radius: 20px;
            width: 68%;
        }

        .footer-bar {
            margin-top: 40px;
            background: #f2f7fd;
            border-radius: 24px;
            padding: 24px 32px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            color: #2d4b73;
            border: 1px solid #dae4f0;
        }

        .signature-line {
            display: flex;
            gap: 40px;
        }

        .signature-item {
            font-size: 0.9rem;
        }

        hr {
            border: none;
            border-top: 2px dashed #cbd9eb;
            margin: 32px 0;
        }
        .gl-code {
            font-family: 'Space Grotesk', monospace;
            background: #eaf1fb;
            padding: 2px 8px;
            border-radius: 20px;
        }
        i {
            pointer-events: none;
        }
        /* demo hint */
        .demo-note {
            background: #f0f3f8;
            border-radius: 16px;
            padding: 16px 22px;
            color: #1f3f60;
            font-size: 0.85rem;
            border-left: 6px solid #2f7bff;
            margin-bottom: 28px;
        }
    </style>
</head>
<body>
<div class="app-container">

    <!-- top navigation -->
    <div class="top-nav">
        <div class="logo-area">
            <div class="logo-icon"><i class="fas fa-road"></i></div>
            <div class="logo-text">
                <h1>PWTS·Enterprise</h1>
                <span>Provincial Works & Technical Services</span>
            </div>
        </div>
        <div class="nav-links">
            <a class="nav-item active" href="index.php"><i class="fas fa-columns"></i> Dashboard</a>
            <a class="nav-item" href="nav_1_projects.php" target="" rel="noopener noreferrer"><i class="fas fa-hard-hat"></i> Projects</a>
            <a class="nav-item" href="nav_2_claims.php" target="" rel="noopener noreferrer"><i class="fas fa-file-invoice-dollar"></i> Claims</a>
            <a class="nav-item" href="nav_3_fleet.php" target="" rel="noopener noreferrer"><i class="fas fa-truck"></i> Fleet</a>
            <a class="nav-item" href="nav_4_materials.php" target="" rel="noopener noreferrer"><i class="fas fa-cubes"></i> Materials</a>
            <a class="nav-item" href="nav_5_reports.php" target="" rel="noopener noreferrer"><i class="fas fa-chart-pie"></i> Reports</a>
        </div>
        <div class="user-profile">
            <a href="nav_6_director_view.php" class="badge"><i class="fas fa-user-check"></i> Director's view</a>
            <div class="avatar">CKB</div>
        </div>
    </div>

    <!-- main sidebar + content -->
    <div class="main-layout">
        <!-- SIDEBAR (sections, quick filters) -->
        <div class="sidebar">
            <div class="sidebar-section">
                <div class="sidebar-heading">Governance</div>
                <ul class="sidebar-menu">
                    <li class="active"><a href="index.php"><i class="fas fa-tachometer-alt"></i> Executive Dashboard</a></li>
                    <li><a href="sidebar_2_delegation_register.php"><i class="fas fa-file-signature"></i> Delegation Register</a></li>
                    <li><a href="sidebar_3_pa_approval.php"><i class="fas fa-stamp"></i> Approvals (PA)</a></li>
                    <li><a href="sidebar_4_contractors.php"><i class="fas fa-handshake"></i> Contractors</a></li>
                </ul>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-heading">Operational</div>
                <ul class="sidebar-menu">
                    <li><i class="fas fa-bridge"></i> Technical Services</li>
                    <li><i class="fas fa-tools"></i> Building & Maintenance</li>
                    <li><i class="fas fa-oil-can"></i> Plant & Transport</li>
                    <li><i class="fas fa-clipboard-list"></i> Site Diaries</li>
                </ul>
            </div>
            <div class="sidebar-section">
                <div class="sidebar-heading">Finance & Claims</div>
                <ul class="sidebar-menu">
                    <li><i class="fas fa-file-invoice"></i> Contractor Claims</li>
                    <li><i class="fas fa-file-certificate"></i> IPCs (Engineer)</li>
                    <li><i class="fas fa-money-bill-wave"></i> Payment Vouchers</li>
                    <li><i class="fas fa-hand-holding-usd"></i> Petty Cash / Imprest</li>
                    <li><i class="fas fa-book-open"></i> GL Codes</li>
                </ul>
            </div>
            <div style="border-top: 1px dashed #b9cee8; margin: 20px 0; padding-top: 20px;">
                <div class="sidebar-heading">DOCUMENT VAULT</div>
                <ul class="sidebar-menu">
                    <li><i class="fas fa-file-pdf"></i> FIDIC contracts</li>
                    <li><i class="fas fa-file-excel"></i> BOQ templates</li>
                    <li><i class="fas fa-history"></i> Audit trail</li>
                </ul>
            </div>
        </div>

        <!-- MAIN CONTENT (demo of required modules) -->
        <div class="content-panel">
            <!-- demo info banner -->
            <div class="demo-note">
                <i class="fas fa-flask" style="margin-right: 12px;"></i> 
                <strong>Enterprise prototype · PWTS process flow</strong> — built from stakeholder interviews (Director, Technical, Finance, Site). Includes claims, certifications, FIDIC stages, delegation, and asset tracking.
            </div>

            <!-- page header -->
            <div class="page-header">
                <h2>Contractor payments & works dashboard</h2>
                <div class="btn-group">
                    <div class="btn btn-outline"><i class="fas fa-download"></i> Export</div>
                    <div class="btn btn-primary"><i class="fas fa-plus-circle"></i> New claim</div>
                </div>
            </div>

            <!-- stat cards -->
            <div class="stat-grid">
                <div class="stat-card">
                    <div class="stat-title"><i class="far fa-clock"></i> Pending certification</div>
                    <div class="stat-number">8</div>
                    <div class="stat-desc">Awaiting Engineer's IPC</div>
                </div>
                <div class="stat-card">
                    <div class="stat-title"><i class="fas fa-file-signature"></i> With Director</div>
                    <div class="stat-number">4</div>
                    <div class="stat-desc">> K50k · pending review</div>
                </div>
                <div class="stat-card">
                    <div class="stat-title"><i class="fas fa-coins"></i> At Finance</div>
                    <div class="stat-number">12</div>
                    <div class="stat-desc">PV stage / GL check</div>
                </div>
                <div class="stat-card">
                    <div class="stat-title"><i class="fas fa-check-circle"></i> Paid (this month)</div>
                    <div class="stat-number">K2.8M</div>
                    <div class="stat-desc">14 contractors</div>
                </div>
            </div>

            <!-- two column: claim lifecycle & delegation -->
            <div class="two-col">
                <div class="col">
                    <div class="section-title"><i class="fas fa-diagram-project" style="color:#1d4e8d;"></i> Claim · payment flow (FIDIC-based)</div>
                    <div class="card">
                        <div class="payment-flow">
                            <div class="flow-step"><div class="flow-icon"><i class="fas fa-file-import"></i></div><div class="flow-label">1. Submission</div><div class="flow-role">Contractor</div></div>
                            <div class="flow-step"><div class="flow-icon"><i class="fas fa-clipboard-check"></i></div><div class="flow-label">2. Verification</div><div class="flow-role">Engineer / Tech</div></div>
                            <div class="flow-step"><div class="flow-icon"><i class="fas fa-file-certificate"></i></div><div class="flow-label">3. IPC issued</div><div class="flow-role">Engineer</div></div>
                            <div class="flow-step"><div class="flow-icon"><i class="fas fa-signature"></i></div><div class="flow-label">4. Director</div><div class="flow-role">endorse</div></div>
                            <div class="flow-step"><div class="flow-icon"><i class="fas fa-landmark"></i></div><div class="flow-label">5. PA/Finance</div><div class="flow-role">approve</div></div>
                        </div>
                        <div style="background:#e9f2fc; border-radius:20px; padding:15px; margin-top:10px;">
                            <span class="doc-tag"><i class="far fa-file"></i> IPC #24-189</span>
                            <span class="doc-tag"><i class="fas fa-file-invoice"></i> PV-1044</span>
                            <span class="doc-tag"><i class="fas fa-file-signature"></i> Delegation >K100k</span>
                            <span class="doc-tag"><i class="fas fa-balance-scale"></i> FIDIC Red Book 2017</span>
                        </div>
                    </div>
                    <div style="margin-top:20px; background:#eef3f9; border-radius:20px; padding:20px;">
                        <i class="fas fa-gavel"></i> <strong>Business rules:</strong> Engineer certifies ≤ 14d; Director limit K100k; PA >100k; 5% retention; 42d payment target.
                    </div>
                </div>
                <div class="col">
                    <div class="section-title"><i class="fas fa-users-between-lines"></i> Delegation & approval</div>
                    <div class="card">
                        <table style="width:100%">
                            <tr><td><strong>Director (PWTS)</strong></td><td>Up to K100,000</td><td><span class="badge-status">active</span></td></tr>
                            <tr><td><strong>Provincial Administrator</strong></td><td>K100,000 – K500,000</td><td><span class="badge-status">active</span></td></tr>
                            <tr><td><strong>Governor / PEC</strong></td><td>> K500,000</td><td><span class="badge-warning">special</span></td></tr>
                            <tr><td><strong>Tech Manager (certify)</strong></td><td>Verifies IPC</td><td><span class="badge-status">mandatory</span></td></tr>
                        </table>
                        <hr style="margin:16px 0;">
                        <div><i class="fas fa-user-tie"></i> <strong>Acting director:</strong> J. Waigani (PA delegated 12–30 Apr)</div>
                    </div>
                </div>
            </div>

            <!-- pending claims table (critical path) -->
            <div class="section-title"><i class="fas fa-file-invoice"></i> Contractor claims · pending action</div>
            <div class="card" style="padding:0; overflow:hidden;">
                <div class="table-responsive">
                    <table>
                        <thead>
                            <tr><th>Claim ref</th><th>Contractor</th><th>Project</th><th>Amount claimed</th><th>Certified (IPC)</th><th>Status</th><th>Approval step</th><th>Days</th></tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><b>C-2409</b> <span style="font-size:0.7rem; color:#366092;">IPC attached</span></td>
                                <td>Highlands Const.</td>
                                <td>Wabag Road Bdg</td>
                                <td>K184,200</td>
                                <td>K176,500</td>
                                <td><span class="badge-warning">Director</span></td>
                                <td><i class="fas fa-hourglass-half"></i> with Director</td>
                                <td>6</td>
                            </tr>
                            <tr>
                                <td><b>C-2412</b> (variation #2)</td>
                                <td>Lagaip Builders</td>
                                <td>Market roofing</td>
                                <td>K47,800</td>
                                <td>K47,800</td>
                                <td><span class="badge-status">Tech verified</span></td>
                                <td>Engineer sign</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td><b>C-2415</b> (material)</td>
                                <td>PNG Aggregates</td>
                                <td>Bridge supplies</td>
                                <td>K312,000</td>
                                <td>K295,000</td>
                                <td><span class="badge">Finance</span></td>
                                <td>PA approval</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td><b>C-2401</b> (retention)</td>
                                <td>Kandep Civil</td>
                                <td>District office</td>
                                <td>K34,200</td>
                                <td>K34,200</td>
                                <td><span class="badge-urgent">GL error</span></td>
                                <td>recode required</td>
                                <td>21</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- supporting docs, site diary, materials -->
            <hr>
            <div class="two-col">
                <div class="col">
                    <div class="section-title"><i class="fas fa-clipboard-list"></i> Site diary · verification (Technical)</div>
                    <div class="card">
                        <div style="display:flex; justify-content:space-between;">
                            <span><strong>Laiagam road</strong> (daily report 04/10)</span>
                            <span class="badge-status"><i class="far fa-check-circle"></i> signed</span>
                        </div>
                        <div style="margin:15px 0; font-size:0.9rem;">
                            <i class="fas fa-ruler"></i> 240m gravel laid · 8h compactor<br>
                            <i class="fas fa-truck"></i> 3x agg deliveries (docket #A441-3)<br>
                            <i class="fas fa-camera"></i> 12 progress photos uploaded
                        </div>
                        <div><span class="doc-tag">labour hours</span> <span class="doc-tag">fuel log #F142</span> <span class="doc-tag">material BOQ line 4.2</span></div>
                        <div class="progress" style="margin-top:15px;"><div class="progress-fill" style="width:45%"></div></div>
                        <div style="display:flex; justify-content:space-between;"><span>weekly target</span> <span>45%</span></div>
                    </div>
                </div>
                <div class="col">
                    <div class="section-title"><i class="fas fa-oil-can"></i> Plant & transport · fuel / asset</div>
                    <div class="card">
                        <div style="display:flex; gap:15px; align-items:center;">
                            <i class="fas fa-truck-pickup" style="font-size:2rem;"></i>
                            <div><strong>Grader G-04</strong> · Komatsu <br> <span class="gl-code">operational</span> 89% uptime</div>
                        </div>
                        <table style="margin-top:15px;">
                            <tr><td>Last fuel (log #F88):</td><td>120L · 12/04</td><td> odo 3,421h</td></tr>
                            <tr><td>Next service:</td><td>50h (due 22 Apr)</td><td><span class="badge-warning">schedule</span></td></tr>
                            <tr><td>Assigned to:</td><td>Kompiam road</td><td>operator: K. Pamba</td></tr>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Payment voucher example + acquittal -->
            <div class="section-title"><i class="fas fa-file-invoice"></i> Payment voucher & acquittal (Finance)</div>
            <div class="card">
                <div style="display:flex; justify-content:space-between; align-items:center;">
                    <div><span class="gl-code">PV-2025-089</span> · GL 5210-430 (roads)  <span class="doc-tag">K74,200</span></div>
                    <div><span class="badge-status">attachments: 5</span></div>
                </div>
                <div style="display:flex; gap:25px; margin-top:15px; flex-wrap:wrap;">
                    <div><i class="fas fa-file-pdf"></i> IPC #24-156</div>
                    <div><i class="fas fa-file-image"></i> delivery dockets (3)</div>
                    <div><i class="fas fa-file-signature"></i> Director approval</div>
                    <div><i class="fas fa-stamp"></i> PA stamp 12/04</div>
                </div>
                <hr>
                <div><i class="fas fa-hand-holding-usd"></i> <strong>Petty cash imprest #IC23</strong> – K800 for site survey, acquitted 04/04, receipts attached.</div>
            </div>

            <!-- Footer signature simulation (director, PA, finance) -->
            <div class="footer-bar">
                <div class="signature-line">
                    <div class="signature-item"><i class="fas fa-pen"></i> Director PWTS: <u>J. Niale</u> (endorsed)</div>
                    <div class="signature-item"><i class="fas fa-pen"></i> Provincial Administrator: <u>R. Kuman</u> (pending >K100k)</div>
                    <div class="signature-item"><i class="fas fa-pen"></i> Finance Manager: <u>P. Wesley</u> (GL check)</div>
                </div>
                <div>
                    <span class="badge"><i class="far fa-clock"></i> 42d FIDIC countdown</span>
                </div>
            </div>

            <!-- final hint: integration docs / forms -->
            <div style="margin-top:30px; font-size:0.8rem; color:#506e91; background:#f5f9ff; border-radius:18px; padding:16px;">
                <i class="fas fa-circle-info"></i> System modules: Contractor registration · FIDIC contract library · IPC workflow · Delegation matrix · Plant/fuel logs · Site diaries · GL coding · Retention tracking · Audit trail · Integration with NPC & Treasury.
            </div>
        </div>
    </div>
    <!-- tiny footer -->
    <div style="background:#fafcff; border-top:1px solid #dfe9f2; padding:12px 32px; display:flex; justify-content:space-between; font-size:0.8rem; color:#2c577b">
        <span><i class="far fa-registered"></i> PWTS Enterprise · demo for requirements presentation</span>
        <span><i class="fas fa-database"></i> mockup v1.0 · based on Enga Province structure</span>
    </div>
</div>
<!-- end app-container -->
</body>
</html>
