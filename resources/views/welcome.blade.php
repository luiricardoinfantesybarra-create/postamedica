
    <!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Clínica EsSalud — Iniciar Sesión</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
        <style>
            * { margin: 0; padding: 0; box-sizing: border-box; }
    
            :root {
                --verde:      #00A499;
                --verde-dark: #007f76;
                --verde-bg:   #e0f5f4;
                --azul:       #005DAA;
                --blanco:     #ffffff;
                --gris:       #f0f4f8;
                --texto:      #2d3748;
                --suave:      #718096;
            }
    
            body {
                font-family: 'Poppins', sans-serif;
                background-color: var(--blanco);
                min-height: 100vh;
                display: flex;
                flex-direction: column;
            }
    
            /* ── TOPBAR ── */
            .topbar {
                width: 100%;
                padding: 16px 40px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                background: white;
                box-shadow: 0 1px 6px rgba(0,0,0,0.08);
                position: relative;
                z-index: 10;
            }
    
            .logo {
                display: flex;
                align-items: center;
                gap: 12px;
                text-decoration: none;
            }
    
            .logo-icon {
                width: 46px;
                height: 46px;
                background: linear-gradient(135deg, var(--azul), var(--verde));
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                color: white;
                font-size: 22px;
            }
    
            .logo-text strong {
                display: block;
                font-family: 'Nunito', sans-serif;
                font-weight: 800;
                font-size: 17px;
                color: var(--azul);
                letter-spacing: 0.5px;
            }
    
            .logo-text small {
                font-size: 10px;
                color: var(--verde);
                font-weight: 600;
                letter-spacing: 2px;
                text-transform: uppercase;
            }
    
            .topbar-actions {
                display: flex;
                align-items: center;
                gap: 14px;
            }
    
            .topbar-actions a {
                text-decoration: none;
                font-family: 'Nunito', sans-serif;
                font-weight: 700;
                font-size: 14px;
                padding: 9px 22px;
                border-radius: 8px;
                transition: all 0.25s;
            }
    
            .btn-registro {
                background: var(--verde);
                color: white;
                box-shadow: 0 3px 12px rgba(0,164,153,0.35);
            }
    
            .btn-registro:hover {
                background: var(--verde-dark);
                transform: translateY(-1px);
            }
    
            .btn-inicio {
                color: var(--azul);
                border: 2px solid var(--azul);
            }
    
            .btn-inicio:hover {
                background: var(--azul);
                color: white;
            }
    
            /* ── MAIN ── */
            main {
                flex: 1;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 40px 20px;
                background: linear-gradient(135deg, var(--verde-bg) 0%, #cdf0ee 50%, var(--blanco) 100%);
                position: relative;
                overflow: hidden;
            }
    
            /* blob de fondo */
            main::before {
                content: '';
                position: absolute;
                width: 560px;
                height: 560px;
                background: var(--verde);
                border-radius: 60% 40% 55% 45% / 50% 60% 40% 50%;
                top: -80px;
                right: -100px;
                opacity: 0.12;
            }
    
            main::after {
                content: '';
                position: absolute;
                width: 300px;
                height: 300px;
                background: var(--azul);
                border-radius: 50% 60% 40% 55% / 45% 50% 60% 40%;
                bottom: -60px;
                left: -60px;
                opacity: 0.08;
            }
    
            /* ── CARD ── */
            .card {
                background: white;
                border-radius: 24px;
                box-shadow: 0 20px 60px rgba(0,0,0,0.12);
                display: flex;
                overflow: hidden;
                width: 100%;
                max-width: 820px;
                min-height: 420px;
                position: relative;
                z-index: 2;
                animation: popIn 0.5s cubic-bezier(0.34,1.56,0.64,1) both;
            }
    
            @keyframes popIn {
                from { opacity: 0; transform: scale(0.92) translateY(20px); }
                to   { opacity: 1; transform: scale(1) translateY(0); }
            }
    
            /* ── PANEL IZQUIERDO (foto) ── */
            .card-left {
                flex: 1;
                position: relative;
                background: linear-gradient(160deg, var(--verde) 0%, var(--verde-dark) 100%);
                display: flex;
                align-items: flex-end;
                justify-content: center;
                overflow: hidden;
                min-height: 420px;
            }
    
            .card-left::before {
                content: '';
                position: absolute;
                inset: 0;
                background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Ccircle cx='30' cy='30' r='20'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            }
    
            .card-left img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                object-position: top center;
                position: absolute;
                inset: 0;
            }
    
            .card-left-badge {
                position: absolute;
                top: 20px;
                left: 20px;
                background: rgba(255,255,255,0.2);
                backdrop-filter: blur(6px);
                border: 1px solid rgba(255,255,255,0.35);
                border-radius: 30px;
                padding: 6px 14px;
                color: white;
                font-size: 12px;
                font-weight: 600;
                display: flex;
                align-items: center;
                gap: 6px;
            }
    
            /* ── PANEL DERECHO (formulario) ── */
            .card-right {
                flex: 1;
                padding: 44px 44px;
                display: flex;
                flex-direction: column;
                justify-content: center;
            }
    
            .form-brand {
                margin-bottom: 28px;
            }
    
            .form-brand h1 {
                font-family: 'Nunito', sans-serif;
                font-weight: 800;
                font-size: 26px;
                color: var(--texto);
                letter-spacing: -0.5px;
            }
    
            .form-brand h1 span {
                color: var(--verde);
            }
    
            .form-brand p {
                font-size: 13px;
                color: var(--suave);
                margin-top: 4px;
            }
    
            .form-group {
                margin-bottom: 18px;
            }
    
            .form-group label {
                display: block;
                font-size: 13px;
                font-weight: 600;
                color: var(--texto);
                margin-bottom: 6px;
            }
    
            .input-wrap {
                position: relative;
            }
    
            .input-wrap i {
                position: absolute;
                left: 14px;
                top: 50%;
                transform: translateY(-50%);
                color: var(--verde);
                font-size: 15px;
            }
    
            .input-wrap input {
                width: 100%;
                padding: 12px 14px 12px 40px;
                border: 2px solid #e2e8f0;
                border-radius: 10px;
                font-family: 'Poppins', sans-serif;
                font-size: 14px;
                color: var(--texto);
                background: var(--gris);
                transition: border-color 0.25s, box-shadow 0.25s;
                outline: none;
            }
    
            .input-wrap input:focus {
                border-color: var(--verde);
                background: white;
                box-shadow: 0 0 0 4px rgba(0,164,153,0.12);
            }
    
            .form-forgot {
                text-align: right;
                margin-top: -10px;
                margin-bottom: 18px;
            }
    
            .form-forgot a {
                font-size: 12px;
                color: var(--suave);
                text-decoration: none;
                transition: color 0.2s;
            }
    
            .form-forgot a:hover {
                color: var(--verde);
            }
    
            .btn-submit {
                width: 100%;
                padding: 13px;
                background: linear-gradient(135deg, var(--verde), var(--verde-dark));
                color: white;
                border: none;
                border-radius: 10px;
                font-family: 'Nunito', sans-serif;
                font-weight: 700;
                font-size: 15px;
                cursor: pointer;
                letter-spacing: 0.5px;
                box-shadow: 0 4px 16px rgba(0,164,153,0.4);
                transition: transform 0.2s, box-shadow 0.2s;
            }
    
            .btn-submit:hover {
                transform: translateY(-2px);
                box-shadow: 0 8px 24px rgba(0,164,153,0.45);
            }
    
            .form-register {
                text-align: center;
                margin-top: 18px;
                font-size: 13px;
                color: var(--suave);
            }
    
            .form-register a {
                color: var(--verde);
                font-weight: 700;
                text-decoration: none;
            }
    
            .form-register a:hover {
                text-decoration: underline;
            }
    
            /* ── RESPONSIVE ── */
            @media (max-width: 640px) {
                .card { flex-direction: column; }
                .card-left { min-height: 200px; flex: none; }
                .card-right { padding: 30px 24px; }
                .topbar { padding: 12px 20px; }
            }
        </style>
    </head>
    <body>
    
        <!-- TOPBAR -->
        <header class="topbar">
            <a href="/" class="logo">
                <div class="logo-icon">
                    <i class="fa-solid fa-hospital"></i>
                </div>
                <div class="logo-text">
                    <strong>CLÍNICA</strong>
                    <small>EsSalud</small>
                </div>
            </a>
    
            <div class="topbar-actions">
                <a href="/register" class="btn-registro">
                    <i class="fa-solid fa-user-plus"></i> Regístrate
                </a>
                <a href="/" class="btn-inicio">
                    <i class="fa-solid fa-house"></i> Inicio
                </a>
            </div>
        </header>
    
        <!-- MAIN -->
        <main>
            <div class="card">
    
                <!-- IZQUIERDA: FOTO -->
                <div class="card-left">
                    <div class="card-left-badge">
                        <i class="fa-solid fa-circle-check"></i> Médico de confianza
                    </div>
                    <img src="{{ asset('images/doctor.png') }}" alt="Doctor EsSalud">
                </div>
    
                <!-- DERECHA: FORMULARIO -->
                <div class="card-right">
                    <div class="form-brand">
                        <h1>Clínica <span>EsSalud</span> <i class="fa-solid fa-plus" style="font-size:18px;color:var(--verde)"></i></h1>
                        <p>Ingresa tus credenciales para continuar</p>
                    </div>
    
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
    
                        <div class="form-group">
                            <label for="usuario">Usuario</label>
                            <div class="input-wrap">
                                <i class="fa-solid fa-user"></i>
                                <input type="text" id="usuario" name="email"
                                    placeholder="usuario@essalud.pe"
                                    value="{{ old('email') }}" required autofocus>
                            </div>
                        </div>
    
                        <div class="form-group">
                            <label for="password">Contraseña</label>
                            <div class="input-wrap">
                                <i class="fa-solid fa-lock"></i>
                                <input type="password" id="password" name="password"
                                    placeholder="••••••••" required>
                            </div>
                        </div>
    
                        <div class="form-forgot">
                            <a href="#">¿Olvidaste tu contraseña?</a>
                        </div>
    
                        <button type="submit" class="btn-submit">
                            <i class="fa-solid fa-right-to-bracket"></i> Iniciar sesión
                        </button>
                    </form>
    
                    <p class="form-register">
                        ¿No tienes cuenta?
                        <a href="{{ route('register') }}">Regístrate aquí</a>
                    </p>
                </div>
    
            </div>

            
        </main>
    
    </body>
    </html>