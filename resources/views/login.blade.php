<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Admin Login | MediCare</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        :root {
            --p: #087fa8;
            --a: #13b8a5;
            --ink: #173544;
            --mut: #6b7c86;
            --bg: #f4f8fa;
            --line: #e2ebef;
            --shadow: 0 12px 32px rgba(23, 53, 68, .08)
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
            font-size: 52px;
            line-height: 1.08;
            margin: 10px 0 18px
        }

        h2 {
            font-size: 32px;
            margin: 0 0 10px
        }

        .muted {
            color: var(--mut)
        }

        .eyebrow {
            color: var(--p);
            font-size: 12px;
            text-transform: uppercase;
            letter-spacing: 1.4px;
            font-weight: 900
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

        .btn {
            border: 0;
            border-radius: 10px;
            padding: 11px 17px;
            font-weight: 800;
            font-size: 14px;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            font-family: inherit
        }

        .primary {
            background: var(--p);
            color: #fff
        }

        .login {
            min-height: 100vh;
            display: grid;
            grid-template-columns: 1fr 1fr
        }

        .login-left {
            background: linear-gradient(145deg, var(--p), var(--a));
            color: #fff;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 50px
        }

        .login-left p {
            font-size: 18px;
            line-height: 1.7;
            margin: 0
        }

        .login-box {
            max-width: 430px;
            margin: auto;
            background: #fff;
            padding: 34px;
            border-radius: 20px;
            box-shadow: var(--shadow);
            width: 100%
        }

        .login-box label {
            display: block;
            font-weight: 800;
            font-size: 14px;
            margin-bottom: 6px
        }

        .login-box input {
            width: 100%;
            padding: 13px;
            border: 1px solid var(--line);
            border-radius: 9px;
            margin: 6px 0 15px;
            font: inherit
        }

        .login-box .btn {
            width: 100%;
            justify-content: center
        }

        .login-box p {
            text-align: center;
            margin: 14px 0 0
        }

        @media(max-width:900px) {
            .login {
                grid-template-columns: 1fr
            }

            .login-left {
                display: none
            }

            h1 {
                font-size: 38px
            }
        }
    </style>
</head>

<body>

    <div class="login">
        <div class="login-left">
            <div>
                <div class="brand" style="color:#fff;margin-bottom:24px">
                    <span class="mark"><i class="bi bi-heart-pulse-fill"></i></span>MediCare Hospital
                </div>
                <h1>Hospital Management Portal</h1>
                <p>Secure role-based workspace for clinical, operational and administrative teams.</p>
            </div>
        </div>

        <div style="display:flex;align-items:center;padding:20px">
            <form class="login-box" onsubmit="event.preventDefault();location.href='/dashboard'">
                <span class="eyebrow">Secure access</span>
                <h2>Welcome back</h2>
                <p class="muted" style="text-align:left;margin:0 0 20px">Sign in to continue.</p>

                <label>Email</label>
                <input type="email" placeholder="admin@medicare.test" required>

                <label>Password</label>
                <input type="password" placeholder="••••••••" required>

                <button class="btn primary" type="submit">Sign in</button>

                <p><a class="muted" href="#">Forgot password?</a></p>
            </form>
        </div>
    </div>

</body>

</html>