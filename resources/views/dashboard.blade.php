<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Dashboard | MediCare</title>

    <style>
        :root {
            --p: #087fa8;
            --p2: #075e7e;
            --a: #13b8a5;
            --ink: #173544;
            --mut: #6b7c86;
            --bg: #f4f8fa;
            --line: #e2ebef;
            --danger: #df5570;
            --shadow: 0 12px 32px rgba(23, 53, 68, .08)
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: Inter, Segoe UI, Arial, sans-serif
        }

        a {
            text-decoration: none;
            color: inherit
        }

        .container {
            max-width: 1200px;
            margin: auto;
            padding: 0 20px
        }

        .navbar {
            height: 74px;
            background: #fff;
            border-bottom: 1px solid var(--line);
            position: sticky;
            top: 0;
            z-index: 50
        }

        .nav {
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 18px
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 900;
            font-size: 20px
        }

        .mark {
            width: 39px;
            height: 39px;
            border-radius: 12px;
            background: linear-gradient(135deg, var(--p), var(--a));
            color: #fff;
            display: grid;
            place-items: center
        }

        .links {
            display: flex;
            gap: 20px;
            color: #536a75;
            font-weight: 650
        }

        .links a:hover {
            color: var(--p)
        }

        .btn {
            border: 0;
            border-radius: 10px;
            padding: 11px 17px;
            font-weight: 800;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer
        }

        .primary {
            background: var(--p);
            color: #fff
        }

        .light {
            background: #fff;
            border: 1px solid var(--line);
            color: var(--ink)
        }

        .danger {
            background: #fff0f3;
            color: #c13f59
        }

        .success {
            background: #e8f8f1;
            color: #16825e
        }

        .hero {
            padding: 82px 0;
            background: linear-gradient(120deg, #e8f7fb, #f8fcfd 60%, #e9faf5)
        }

        .hero-grid {
            display: grid;
            grid-template-columns: 1.1fr .9fr;
            gap: 45px;
            align-items: center
        }

        .eyebrow {
            color: var(--p);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            font-weight: 900
        }

        h1 {
            font-size: 52px;
            line-height: 1.08;
            margin: 10px 0 18px
        }

        h2 {
            font-size: 32px;
            margin: 0 0 10px
        }

        h3 {
            margin: 0 0 8px
        }

        .lead {
            font-size: 18px;
            line-height: 1.7;
            color: var(--mut)
        }

        .hero-visual {
            height: 400px;
            border-radius: 24px;
            background: linear-gradient(135deg, #c8edf5, #ddf7ef);
            display: grid;
            place-items: center;
            font-size: 110px;
            color: var(--p);
            box-shadow: var(--shadow)
        }

        .card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 16px;
            padding: 22px;
            box-shadow: 0 5px 18px rgba(23, 53, 68, .04)
        }

        .section {
            padding: 70px 0
        }

        .head {
            display: flex;
            justify-content: space-between;
            align-items: end;
            margin-bottom: 25px
        }

        .grid {
            display: grid;
            gap: 18px
        }

        .g3 {
            grid-template-columns: repeat(3, 1fr)
        }

        .g4 {
            grid-template-columns: repeat(4, 1fr)
        }

        .icon {
            width: 48px;
            height: 48px;
            border-radius: 13px;
            background: #eaf7fb;
            color: var(--p);
            display: grid;
            place-items: center;
            font-size: 21px;
            margin-bottom: 14px
        }

        .muted {
            color: var(--mut)
        }

        .stats {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px
        }

        .stat {
            background: #fff;
            border: 1px solid var(--line);
            padding: 20px;
            border-radius: 15px
        }

        .stat b {
            font-size: 28px;
            display: block;
            margin: 5px 0
        }

        .doctor {
            overflow: hidden;
            padding: 0
        }

        .avatar {
            height: 210px;
            background: linear-gradient(135deg, #d7eff5, #eaf9f4);
            display: grid;
            place-items: center;
            font-size: 70px;
            color: #69a6b6
        }

        .doctor-body {
            padding: 18px
        }

        .badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 99px;
            background: #eaf5fa;
            color: var(--p);
            font-size: 11px;
            font-weight: 900
        }

        .footer {
            background: #102d3b;
            color: #dce8ec;
            padding: 48px 0
        }

        .footer-grid {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr 1fr;
            gap: 30px
        }

        .footer a {
            color: #dce8ec
        }

        .pagehero {
            padding: 55px 0;
            background: #eaf7fb
        }

        .pagehero h1 {
            font-size: 42px
        }

        .form {
            max-width: 900px;
            margin: auto;
            background: #fff;
            padding: 28px;
            border-radius: 18px;
            box-shadow: var(--shadow)
        }

        .fields {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        .field label {
            display: block;
            font-size: 14px;
            font-weight: 800;
            margin-bottom: 6px
        }

        .field input,
        .field select,
        .field textarea,
        .toolbar input,
        .toolbar select {
            width: 100%;
            padding: 12px;
            border: 1px solid #d9e5ea;
            border-radius: 9px;
            background: #fff
        }

        .field textarea {
            min-height: 120px
        }

        .full {
            grid-column: 1/-1
        }

        .shell {
            min-height: 100vh
        }

        .side {
            position: fixed;
            left: 0;
            top: 0;
            bottom: 0;
            width: 255px;
            background: #102d3b;
            color: #c9d9df;
            overflow: auto;
            z-index: 100
        }

        .side .brand {
            padding: 21px;
            color: #fff
        }

        .sect {
            padding: 14px 19px 7px;
            font-size: 10px;
            text-transform: uppercase;
            letter-spacing: 1.2px;
            color: #7895a1
        }

        .slink {
            display: flex;
            align-items: center;
            gap: 10px;
            padding: 11px 19px;
            font-size: 14px
        }

        .slink:hover,
        .slink.active {
            background: rgba(19, 184, 165, .14);
            color: #fff;
            border-left: 3px solid var(--a)
        }

        .main {
            margin-left: 255px
        }

        .top {
            height: 72px;
            background: #fff;
            border-bottom: 1px solid var(--line);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 27px;
            position: sticky;
            top: 0;
            z-index: 80
        }

        .search {
            width: 280px;
            background: #f3f7f9;
            border: 0;
            padding: 11px 14px;
            border-radius: 9px
        }

        .content {
            padding: 27px
        }

        .title {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 22px
        }

        .title h1 {
            font-size: 28px;
            margin: 0
        }

        .kpis {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px
        }

        .kpi {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 15px;
            padding: 18px
        }

        .kpi .num {
            font-size: 27px;
            font-weight: 900;
            margin: 8px 0
        }

        .two {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 18px
        }

        .chart {
            height: 250px;
            display: flex;
            align-items: end;
            gap: 9px;
            padding: 20px
        }

        .bar {
            flex: 1;
            background: linear-gradient(180deg, var(--a), var(--p));
            border-radius: 7px 7px 0 0
        }

        .tablebox {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 15px;
            overflow: auto
        }

        .toolbar {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 15px;
            padding: 14px;
            display: flex;
            gap: 10px;
            margin-bottom: 14px
        }

        .table {
            width: 100%;
            border-collapse: collapse
        }

        .table th,
        .table td {
            padding: 13px 15px;
            border-bottom: 1px solid var(--line);
            text-align: left;
            white-space: nowrap
        }

        .table th {
            font-size: 11px;
            color: #70828b;
            background: #f8fbfc;
            text-transform: uppercase
        }

        @media(max-width:1000px) {
            .links {
                display: none
            }

            .hero-grid,
            .two {
                grid-template-columns: 1fr
            }

            .g4,
            .stats,
            .kpis {
                grid-template-columns: repeat(2, 1fr)
            }

            .g3 {
                grid-template-columns: 1fr 1fr
            }
        }

        @media(max-width:700px) {
            .side {
                transform: translateX(-100%)
            }

            .main {
                margin-left: 0
            }

            .content {
                padding: 17px
            }

            .g3,
            .g4,
            .stats,
            .kpis,
            .fields {
                grid-template-columns: 1fr
            }

            .hero h1,
            h1 {
                font-size: 38px
            }

            .search {
                width: 160px
            }
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <div class="shell">

        {{-- ============ SIDEBAR ============ --}}
        <aside class="side">
            <a class="brand" href="{{ route('dashboard') }}">
                <span class="mark"><i class="bi bi-heart-pulse-fill"></i></span>MediCare
            </a>

            <div class="sect">Overview</div>
            <a class="slink active" href="{{ route('dashboard') }}"><i class="bi bi-grid-1x2"></i>Dashboard</a>

            <div class="sect">Clinical</div>
            <a class="slink" href="{{ route('patients') }}"><i class="bi bi-people"></i>Patients</a>
            <a class="slink" href="{{ route('doctors') }}"><i class="bi bi-person-badge"></i>Doctors</a>
            <a class="slink" href="{{ route('departments') }}"><i class="bi bi-diagram-3"></i>Departments</a>
            <a class="slink" href="{{ route('appointments') }}"><i class="bi bi-calendar2-check"></i>Appointments</a>
            <a class="slink" href="{{ route('opd') }}"><i class="bi bi-person-lines-fill"></i>OPD</a>
            <a class="slink" href="{{ route('ipd') }}"><i class="bi bi-hospital"></i>IPD / Admissions</a>
            <a class="slink" href="{{ route('rooms-beds') }}"><i class="bi bi-door-open"></i>Rooms & Beds</a>
            <a class="slink" href="{{ route('prescriptions') }}"><i class="bi bi-prescription2"></i>Prescriptions</a>
            <a class="slink" href="{{ route('laboratory') }}"><i class="bi bi-eyedropper"></i>Laboratory</a>
            <a class="slink" href="{{ route('radiology') }}"><i class="bi bi-bounding-box"></i>Radiology</a>
            <a class="slink" href="{{ route('surgeries') }}"><i class="bi bi-scissors"></i>Surgeries</a>

            <div class="sect">Operations</div>
            <a class="slink" href="{{ route('pharmacy') }}"><i class="bi bi-capsule"></i>Pharmacy</a>
            <a class="slink" href="{{ route('billing') }}"><i class="bi bi-receipt"></i>Billing</a>
            <a class="slink" href="{{ route('expenses') }}"><i class="bi bi-wallet2"></i>Expenses</a>
            <a class="slink" href="{{ route('insurance') }}"><i class="bi bi-shield-check"></i>Insurance</a>
            <a class="slink" href="{{ route('blood-bank') }}"><i class="bi bi-droplet"></i>Blood Bank</a>
            <a class="slink" href="{{ route('ambulance') }}"><i class="bi bi-truck-front"></i>Ambulance</a>
            <a class="slink" href="{{ route('inventory') }}"><i class="bi bi-box-seam"></i>Inventory / Assets</a>
            <a class="slink" href="{{ route('suppliers') }}"><i class="bi bi-boxes"></i>Suppliers</a>

            <div class="sect">People</div>
            <a class="slink" href="{{ route('nurses') }}"><i class="bi bi-person-heart"></i>Nurses</a>
            <a class="slink" href="{{ route('employees') }}"><i class="bi bi-person-workspace"></i>Employees</a>
            <a class="slink" href="{{ route('hr') }}"><i class="bi bi-briefcase"></i>HR</a>
            <a class="slink" href="{{ route('attendance') }}"><i class="bi bi-clock-history"></i>Attendance</a>
            <a class="slink" href="{{ route('leave') }}"><i class="bi bi-calendar-x"></i>Leave</a>
            <a class="slink" href="{{ route('payroll') }}"><i class="bi bi-cash-stack"></i>Payroll</a>

            <div class="sect">System</div>
            <a class="slink" href="{{ route('reports') }}"><i class="bi bi-bar-chart"></i>Reports</a>
            <a class="slink" href="{{ route('notifications') }}"><i class="bi bi-bell"></i>Notifications</a>
            <a class="slink" href="{{ route('documents') }}"><i class="bi bi-folder2-open"></i>Documents</a>
            <a class="slink" href="{{ route('users-roles') }}"><i class="bi bi-person-gear"></i>Users & Roles</a>
            <a class="slink" href="{{ route('activity-logs') }}"><i class="bi bi-list-check"></i>Activity Logs</a>
            <a class="slink" href="{{ route('settings') }}"><i class="bi bi-gear"></i>Settings</a>
        </aside>

        {{-- ============ MAIN ============ --}}
        <main class="main">
            <header class="top">
                <input class="search" placeholder="Search anything...">
                <div>
                    <b>{{ Auth::user()->name ?? 'Admin User' }}</b>
                    <span class="muted">Hospital Admin</span>

                    {{-- Logout using a form (Laravel standard) --}}
                    <form method="POST" action="{{ route('logout') }}" style="display:inline">
                        @csrf
                        <button type="submit" class="btn light">Logout</button>
                    </form>
                </div>
            </header>

            <div class="content">
                <div class="title">
                    <div>
                        <span class="eyebrow">{{ now()->format('l, d F Y') }}</span>
                        <h1>Dashboard</h1>
                    </div>
                    <button class="btn primary">+ Quick Action</button>
                </div>

                <div class="kpis">
                    <div class="kpi"><span class="muted">Total Patients</span>
                        <div class="num">12,840</div><span class="muted">+8.4% this month</span>
                    </div>
                    <div class="kpi"><span class="muted">Today's Appointments</span>
                        <div class="num">186</div><span class="muted">42 pending</span>
                    </div>
                    <div class="kpi"><span class="muted">Emergency Cases</span>
                        <div class="num">18</div><span class="muted">6 active</span>
                    </div>
                    <div class="kpi"><span class="muted">Today's Revenue</span>
                        <div class="num">₨ 1.28M</div><span class="muted">+12.1% vs yesterday</span>
                    </div>
                </div>

                <div class="two" style="margin-top:18px">
                    <div class="card">
                        <div class="head">
                            <div>
                                <h3>Patient & Appointment Trends</h3><span class="muted">Last 10 periods</span>
                            </div>
                        </div>
                        <div class="chart">
                            <div class="bar" style="height:55%"></div>
                            <div class="bar" style="height:75%"></div>
                            <div class="bar" style="height:62%"></div>
                            <div class="bar" style="height:88%"></div>
                            <div class="bar" style="height:70%"></div>
                            <div class="bar" style="height:95%"></div>
                            <div class="bar" style="height:82%"></div>
                            <div class="bar" style="height:100%"></div>
                            <div class="bar" style="height:76%"></div>
                            <div class="bar" style="height:91%"></div>
                        </div>
                    </div>
                    <div class="card">
                        <h3>Department-wise Patients</h3>
                        <p>Cardiology <b style="float:right">28%</b></p>
                        <p>General Medicine <b style="float:right">22%</b></p>
                        <p>Orthopedics <b style="float:right">18%</b></p>
                        <p>Pediatrics <b style="float:right">14%</b></p>
                    </div>
                </div>

                <div class="two" style="margin-top:18px">
                    <div class="tablebox">
                        <div style="padding:18px">
                            <h3>Today’s Appointments</h3>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Patient</th>
                                    <th>Doctor</th>
                                    <th>Time</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Ali Raza</td>
                                    <td>Dr. Ayesha Khan</td>
                                    <td>09:30</td>
                                    <td><span class="badge">Confirmed</span></td>
                                </tr>
                                <tr>
                                    <td>Hassan Ahmed</td>
                                    <td>Dr. Hamza Malik</td>
                                    <td>10:15</td>
                                    <td><span class="badge">Checked In</span></td>
                                </tr>
                                <tr>
                                    <td>Maryam Noor</td>
                                    <td>Dr. Sara Ahmed</td>
                                    <td>11:00</td>
                                    <td><span class="badge">Pending</span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card">
                        <h3>Recent Activities</h3>
                        <p><b>Lab report approved</b><br><span class="muted">CBC · 5 min ago</span></p>
                        <p><b>Payment received</b><br><span class="muted">INV-20491 · 18 min ago</span></p>
                        <p><b>New patient registered</b><br><span class="muted">MR-109284 · 32 min ago</span></p>
                    </div>
                </div>
            </div>
        </main>
    </div>
</body>

</html>