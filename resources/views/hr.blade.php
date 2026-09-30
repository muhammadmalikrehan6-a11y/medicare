<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>HR Management | MediCare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --p: #087fa8;
            --a: #13b8a5;
            --ink: #173544;
            --mut: #6b7c86;
            --bg: #f4f8fa;
            --line: #e2ebef;
            --danger: #df5570
        }

        * {
            box-sizing: border-box
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--ink);
            font-family: Inter, "Segoe UI", Arial, sans-serif;
            font-size: 14px;
            line-height: 1.5
        }

        a {
            text-decoration: none;
            color: inherit
        }

        h1 {
            margin: 0 0 8px
        }

        .shell {
            min-height: 100vh
        }

        .side {
            position: fixed;
            inset: 0 auto 0 0;
            width: 255px;
            background: #102d3b;
            color: #c9d9df;
            overflow-y: auto;
            z-index: 100
        }

        .brand {
            display: flex;
            align-items: center;
            gap: 10px;
            font-weight: 900;
            font-size: 20px;
            color: #fff
        }

        .side .brand {
            padding: 21px
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
            font-size: 14px;
            color: #c9d9df;
            border-left: 3px solid transparent
        }

        .slink:hover,
        .slink.active {
            background: rgba(19, 184, 165, .14);
            color: #fff;
            border-left-color: var(--a)
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
            border-radius: 9px;
            font: inherit
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

        .eyebrow {
            color: var(--p);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            font-weight: 900
        }

        .btn {
            border: 0;
            border-radius: 10px;
            padding: 11px 17px;
            font-weight: 800;
            font-size: 14px;
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

        .toolbar {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 15px;
            padding: 14px;
            display: flex;
            gap: 10px;
            margin-bottom: 14px;
            flex-wrap: wrap
        }

        .toolbar input,
        .toolbar select {
            padding: 12px;
            border: 1px solid #d9e5ea;
            border-radius: 9px;
            background: #fff;
            font: inherit
        }

        .toolbar input {
            flex: 1 1 240px
        }

        .kpis {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 18px
        }

        .kpi {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 15px;
            padding: 18px
        }

        .kpi span {
            color: var(--mut);
            font-size: 13px
        }

        .kpi .num {
            font-size: 24px;
            font-weight: 900;
            margin-top: 6px
        }

        .tablebox {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: 15px;
            overflow: auto
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
            text-transform: uppercase;
            letter-spacing: .6px
        }

        .table tbody tr:last-child td {
            border-bottom: 0
        }

        .table tbody tr:hover {
            background: #fafdfe
        }

        .badge {
            display: inline-block;
            padding: 5px 9px;
            border-radius: 99px;
            background: #e8f8f1;
            color: #16825e;
            font-size: 11px;
            font-weight: 900
        }

        .badge.contract {
            background: #fff4e0;
            color: #b87700
        }

        .badge.off {
            background: #fdecef;
            color: #c13f59
        }

        .muted {
            color: var(--mut)
        }

        @media(max-width:1000px) {
            .search {
                width: 200px
            }

            .kpis {
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

            .search {
                width: 160px
            }

            .title h1 {
                font-size: 22px
            }

            .kpis {
                grid-template-columns: 1fr
            }
        }
    </style>
</head>

<body>

    <div class="shell">
        <aside class="side">
            <a class="brand" href="/dashboard"><span class="mark"><i
                        class="bi bi-heart-pulse-fill"></i></span>MediCare</a>
            <div class="sect">Overview</div>
            <a class="slink" href="/dashboard"><i class="bi bi-grid-1x2"></i>Dashboard</a>
            <div class="sect">Clinical</div>
            <a class="slink" href="/patients"><i class="bi bi-people"></i>Patients</a>
            <a class="slink" href="/doctors"><i class="bi bi-person-badge"></i>Doctors</a>
            <a class="slink" href="/departments"><i class="bi bi-diagram-3"></i>Departments</a>
            <a class="slink" href="/appointments"><i class="bi bi-calendar2-check"></i>Appointments</a>
            <a class="slink" href="/opd"><i class="bi bi-person-lines-fill"></i>OPD</a>
            <a class="slink" href="/ipd"><i class="bi bi-hospital"></i>IPD / Admissions</a>
            <a class="slink" href="/rooms-beds"><i class="bi bi-door-open"></i>Rooms & Beds</a>
            <a class="slink" href="/prescriptions"><i class="bi bi-prescription2"></i>Prescriptions</a>
            <a class="slink" href="/laboratory"><i class="bi bi-eyedropper"></i>Laboratory</a>
            <a class="slink" href="/radiology"><i class="bi bi-bounding-box"></i>Radiology</a>
            <a class="slink" href="/surgeries"><i class="bi bi-scissors"></i>Surgeries</a>
            <div class="sect">Operations</div>
            <a class="slink" href="/pharmacy"><i class="bi bi-capsule"></i>Pharmacy</a>
            <a class="slink" href="/billing"><i class="bi bi-receipt"></i>Billing</a>
            <a class="slink" href="/expenses"><i class="bi bi-wallet2"></i>Expenses</a>
            <a class="slink" href="/insurance"><i class="bi bi-shield-check"></i>Insurance</a>
            <a class="slink" href="/blood-bank"><i class="bi bi-droplet"></i>Blood Bank</a>
            <a class="slink" href="/ambulance"><i class="bi bi-truck-front"></i>Ambulance</a>
            <a class="slink" href="/inventory"><i class="bi bi-box-seam"></i>Inventory / Assets</a>
            <a class="slink" href="/suppliers"><i class="bi bi-boxes"></i>Suppliers</a>
            <div class="sect">People</div>
            <a class="slink" href="/nurses"><i class="bi bi-person-heart"></i>Nurses</a>
            <a class="slink" href="/employees"><i class="bi bi-person-workspace"></i>Employees</a>
            <a class="slink active" href="/hr"><i class="bi bi-briefcase"></i>HR</a>
            <a class="slink" href="/attendance"><i class="bi bi-clock-history"></i>Attendance</a>
            <a class="slink" href="/leave"><i class="bi bi-calendar-x"></i>Leave</a>
            <a class="slink" href="/payroll"><i class="bi bi-cash-stack"></i>Payroll</a>
            <div class="sect">System</div>
            <a class="slink" href="/reports"><i class="bi bi-bar-chart"></i>Reports</a>
            <a class="slink" href="/notifications"><i class="bi bi-bell"></i>Notifications</a>
            <a class="slink" href="/documents"><i class="bi bi-folder2-open"></i>Documents</a>
            <a class="slink" href="/users-roles"><i class="bi bi-person-gear"></i>Users & Roles</a>
            <a class="slink" href="/activity-logs"><i class="bi bi-list-check"></i>Activity Logs</a>
            <a class="slink" href="/settings"><i class="bi bi-gear"></i>Settings</a>
        </aside>

        <main class="main">
            <header class="top">
                <input class="search" placeholder="Search anything...">
                <div><b>Admin User</b> <span class="muted">Hospital Admin</span> <a class="btn light"
                        href="/login">Logout</a></div>
            </header>

            <div class="content">
                <div class="title">
                    <div><span class="eyebrow">Management</span>
                        <h1>HR Management</h1>
                    </div>
                    <button class="btn primary">+ Add New</button>
                </div>

                <div class="kpis">
                    <div class="kpi"><span>Total Employees</span>
                        <div class="num">428</div>
                    </div>
                    <div class="kpi"><span>On Leave Today</span>
                        <div class="num">14</div>
                    </div>
                    <div class="kpi"><span>Open Positions</span>
                        <div class="num">7</div>
                    </div>
                </div>

                <div class="toolbar">
                    <input placeholder="Search HR records...">
                    <select>
                        <option>All Departments</option>
                        <option>Cardiology</option>
                        <option>Orthopedics</option>
                        <option>Pediatrics</option>
                        <option>Neurology</option>
                    </select>
                    <button class="btn light">Filters</button>
                    <button class="btn light">Export</button>
                </div>

                <div class="tablebox">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Employee</th>
                                <th>Department</th>
                                <th>Designation</th>
                                <th>Employment Type</th>
                                <th>Salary</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Ali Raza</td>
                                <td>Cardiology</td>
                                <td>Staff Nurse</td>
                                <td>Full-Time</td>
                                <td>₨ 85,000</td>
                                <td><span class="badge">Active</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Hassan Ahmed</td>
                                <td>Orthopedics</td>
                                <td>Technician</td>
                                <td>Contract</td>
                                <td>₨ 65,000</td>
                                <td><span class="badge contract">Contract</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Maryam Noor</td>
                                <td>Pediatrics</td>
                                <td>Receptionist</td>
                                <td>Full-Time</td>
                                <td>₨ 55,000</td>
                                <td><span class="badge">Active</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Usman Khan</td>
                                <td>Neurology</td>
                                <td>Lab Assistant</td>
                                <td>Part-Time</td>
                                <td>₨ 40,000</td>
                                <td><span class="badge off">Inactive</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>Areeba Shah</td>
                                <td>Cardiology</td>
                                <td>Pharmacist</td>
                                <td>Full-Time</td>
                                <td>₨ 92,000</td>
                                <td><span class="badge">Active</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="muted" style="padding:16px">Showing 1–5 of 428 records · Previous · 1 · 2 · Next</div>
            </div>
        </main>
    </div>

</body>

</html>