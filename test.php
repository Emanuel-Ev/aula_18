<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Galera Tech — Entrar</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />

    <link
        href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Sans:wght@400;500&display=swap"
        rel="stylesheet" />

    <!-- Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@tabler/icons-webfont@latest/tabler-icons.min.css" />

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --green: #00c878;
            --bg: #08080f;
            --surface: #111118;
            --surface-2: #0d0d14;
            --border: #1e1e2e;
            --text: #f0f0f5;
            --text-muted: #6b6b88;
            --text-dim: #3a3a52;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: 'DM Sans', sans-serif;

            min-height: 100vh;

            display: flex;
            align-items: center;
            justify-content: center;

            overflow: hidden;
            position: relative;
        }

        body::before {
            content: '';
            position: fixed;
            inset: 0;

            background-image:
                linear-gradient(rgba(0, 200, 120, 0.03) 1px, transparent 1px),
                linear-gradient(90deg, rgba(0, 200, 120, 0.03) 1px, transparent 1px);

            background-size: 48px 48px;
        }

        .blob {
            position: fixed;
            border-radius: 50%;
            filter: blur(80px);
            opacity: 0.5;
        }

        .blob-1 {
            width: 400px;
            height: 400px;
            background: rgba(0, 200, 120, 0.08);
            top: -100px;
            left: -100px;
        }

        .blob-2 {
            width: 300px;
            height: 300px;
            background: rgba(0, 120, 200, 0.06);
            bottom: -80px;
            right: -80px;
        }

        .card {
            width: 100%;
            max-width: 400px;

            background: var(--surface);

            border: 1px solid var(--border);

            border-radius: 24px;

            padding: 2.5rem;

            position: relative;
            z-index: 2;
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;

            gap: 10px;

            margin-bottom: 2rem;
        }

        .logo-icon {
            width: 42px;
            height: 42px;

            background: var(--green);

            border-radius: 12px;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logo-name {
            font-family: 'Syne', sans-serif;
            font-size: 24px;
            font-weight: 800;
        }

        .logo-name span {
            color: var(--green);
        }

        .subtitle {
            text-align: center;

            color: var(--text-muted);

            margin-bottom: 2rem;

            font-size: 14px;
        }

        .field {
            position: relative;
            margin-bottom: 15px;
        }

        .field i {
            position: absolute;

            left: 14px;
            top: 50%;

            transform: translateY(-50%);

            color: var(--text-dim);
        }

        .field input {
            width: 100%;

            background: var(--surface-2);

            border: 1px solid var(--border);

            border-radius: 12px;

            padding: 14px 14px 14px 45px;

            color: var(--text);

            outline: none;
        }

        .field input:focus {
            border-color: var(--green);
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;

            margin: 1rem 0 1.5rem;
        }

        .check-label {
            display: flex;
            gap: 8px;
            align-items: center;

            font-size: 13px;

            color: var(--text-muted);
        }

        .check-label input {
            accent-color: var(--green);
        }

        .link-btn {
            color: var(--green);

            background: none;
            border: none;

            cursor: pointer;
        }

        .btn-primary {
            width: 100%;

            border: none;

            border-radius: 12px;

            padding: 14px;

            background: var(--green);

            color: #08080f;

            font-weight: 700;

            font-family: 'Syne', sans-serif;

            cursor: pointer;

            transition: 0.2s;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }
    </style>
</head>

<body>

    <div class="blob blob-1"></div>
    <div class="blob blob-2"></div>

    <div class="card">

        <div class="logo">

            <div class="logo-icon">

                <svg width="22" height="22" viewBox="0 0 22 22"
                    fill="none"
                    xmlns="http://www.w3.org/2000/svg">

                    <polygon
                        points="11,2 20,7 20,15 11,20 2,15 2,7"
                        stroke="#08080f"
                        stroke-width="2"
                        fill="none" />

                    <circle cx="11" cy="11" r="3.5" fill="#08080f" />

                </svg>

            </div>

            <div class="logo-name">
                Galera<span>Tech</span>
            </div>

        </div>

        <p class="subtitle">
            Bem-vindo de volta 👾
        </p>

        <!-- FORM PHP -->
        <form method="POST">

            <div class="field">

                <i class="ti ti-mail"></i>

                <input
                    type="email"
                    name="email"
                    placeholder="Digite seu e-mail"
                    required>

            </div>

            <div class="field">

                <i class="ti ti-lock"></i>

                <input
                    type="password"
                    name="senha"
                    placeholder="Digite sua senha"
                    required>

            </div>

            <div class="row">

                <label class="check-label">

                    <input type="checkbox">

                    Manter conectado

                </label>

                <button type="button" class="link-btn">
                    Esqueci a senha
                </button>

            </div>

            <button type="submit" class="btn-primary">

                <i class="ti ti-login-2"></i>

                Entrar

            </button>

        </form>

    </div>

</body>

</html>