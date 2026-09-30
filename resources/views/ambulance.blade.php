<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Ambulance | MediCare</title>
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

        h1,
        h3 {
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
            font-size: 11px;
            font-weight: 900;
            background: #e8f8f1;
            color: #16825e
        }

        .badge.busy {
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

        .pager {
            padding: 16px;
            font-size: 14px
        }

        @media(max-width:1000px) {
            .search {
                width: 200px
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
            <a class="slink" href="/appointments"><i class="bi bi-calendar2-check"></i>Appointments</a>
            <div class="sect">Operations</div>
            <a class="slink active" href="/ambulance"><i class="bi bi-truck-front"></i>Ambulance</a>
            <a class="slink" href="/billing"><i class="bi bi-receipt"></i>Billing</a>
            <div class="sect">People</div>
            <a class="slink" href="/attendance"><i class="bi bi-clock-history"></i>Attendance</a>
            <a class="slink" href="/payroll"><i class="bi bi-cash-stack"></i>Payroll</a>
            <div class="sect">System</div>
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
                    <div>
                        <span class="eyebrow">Management</span>
                        <h1>Ambulance</h1>
                    </div>
                    <button class="btn primary">+ Add Vehicle</button>
                </div>

                <div class="toolbar">
                    <input placeholder="Search ambulance...">
                    <select>
                        <option>All Statuses</option>
                        <option>Available</option>
                        <option>On Trip</option>
                        <option>Maintenance</option>
                    </select>
                    <button class="btn light">Filters</button>
                    <button class="btn light">Export</button>
                </div>

                <div class="tablebox">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Vehicle No.</th>
                                <th>Driver</th>
                                <th>Type</th>
                                <th>Availability</th>
                                <th>Location</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>MD-109201</td>
                                <td>Rashid Ali</td>
                                <td>ALS</td>
                                <td>Available</td>
                                <td>Main Gate</td>
                                <td><span class="badge">Active</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>MD-109202</td>
                                <td>Imran Khan</td>
                                <td>BLS</td>
                                <td>On Trip</td>
                                <td>City Center</td>
                                <td><span class="badge busy">Busy</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>MD-109203</td>
                                <td>Salman Iqbal</td>
                                <td>ALS</td>
                                <td>Available</td>
                                <td>Parking B</td>
                                <td><span class="badge">Active</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>MD-109204</td>
                                <td>Bilal Ahmed</td>
                                <td>ICU</td>
                                <td>Maintenance</td>
                                <td>Workshop</td>
                                <td><span class="badge off">Offline</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                            <tr>
                                <td>MD-109205</td>
                                <td>Naveed Akhtar</td>
                                <td>BLS</td>
                                <td>Available</td>
                                <td>Parking A</td>
                                <td><span class="badge">Active</span></td>
                                <td><button class="btn light">View</button> <button class="btn light">Edit</button>
                                    <button class="btn danger">Delete</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="pager muted">Showing 1–5 of 24 vehicles</div>
            </div>
        </main>
    </div>

</body>

</html>