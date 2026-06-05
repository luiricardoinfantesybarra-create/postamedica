<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clínica EsSalud — Panel de Gestión</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        :root {
            --azul-primary: #005DAA;
            --celeste-bright: #00a8e8;
            --celeste-light: #e6f4fa;
            --celeste-bg: #f4f9fd;
            --blanco: #ffffff;
            --texto-dark: #1e293b;
            --texto-suave: #64748b;
            --rojo-danger: #ef4444;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--celeste-bg);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }

        /* ── NAVBAR SUPERIOR ── */
        .navbar {
            background: var(--blanco);
            padding: 15px 40px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            box-shadow: 0 4px 12px rgba(0, 93, 170, 0.05);
            border-bottom: 1px solid var(--celeste-light);
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-icon {
            width: 42px;
            height: 42px;
            background: linear-gradient(135deg, var(--azul-primary), var(--celeste-bright));
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 20px;
        }

        .logo-text strong {
            display: block;
            font-family: 'Nunito', sans-serif;
            font-weight: 800;
            font-size: 16px;
            color: var(--azul-primary);
        }

        .user-profile {
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .user-info {
            text-align: right;
        }

        .user-name {
            font-size: 14px;
            font-weight: 600;
            color: var(--texto-dark);
        }

        .user-role {
            font-size: 11px;
            color: var(--celeste-bright);
            font-weight: 500;
            text-transform: uppercase;
        }

        /* ── CONTENIDO PRINCIPAL ── */
        .container {
            flex: 1;
            max-width: 1200px;
            width: 100%;
            margin: 0 auto;
            padding: 40px 20px;
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .welcome-header {
            text-align: center;
            animation: fadeInDown 0.6s ease-out;
        }

        .welcome-header h1 {
            font-family: 'Nunito', sans-serif;
            font-size: 28px;
            color: var(--texto-dark);
            font-weight: 800;
        }

        .welcome-header h1 span {
            color: var(--azul-primary);
        }

        .welcome-header p {
            color: var(--texto-suave);
            font-size: 14px;
            margin-top: 5px;
        }

        /* ── CUADRÍCULA DE MÓDULOS ── */
        .modules-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            animation: fadeInUp 0.6s ease-out both;
        }

        .module-card {
            background: var(--blanco);
            border: 1px solid var(--celeste-light);
            border-radius: 20px;
            padding: 30px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            position: relative;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.02);
        }

        /* Efecto de fondo celeste al pasar el mouse */
        .module-card::before {
            content: '';
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            background: linear-gradient(135deg, rgba(230,244,250,0.4) 0%, rgba(255,255,255,0) 100%);
            opacity: 0;
            transition: opacity 0.3s ease;
            z-index: 1;
        }

        .module-card:hover {
            transform: translateY(-5px);
            border-color: var(--celeste-bright);
            box-shadow: 0 12px 24px rgba(0, 168, 232, 0.1);
        }

        .module-card:hover::before {
            opacity: 1;
        }

        .card-icon {
            width: 70px;
            height: 70px;
            background: var(--celeste-bg);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--azul-primary);
            font-size: 28px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            z-index: 2;
        }

        .module-card:hover .card-icon {
            background: var(--azul-primary);
            color: var(--blanco);
            transform: scale(1.05);
        }

        .card-title {
            font-family: 'Nunito', sans-serif;
            font-size: 18px;
            font-weight: 700;
            color: var(--texto-dark);
            margin-bottom: 8px;
            z-index: 2;
        }

        .card-desc {
            font-size: 12px;
            color: var(--texto-suave);
            line-height: 1.5;
            z-index: 2;
        }

        /* ── BOTÓN CERRAR SESIÓN ── */
        .logout-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
            animation: fadeIn 0.8s ease-out both;
        }

        .btn-logout {
            background: transparent;
            border: 2px solid var(--rojo-danger);
            color: var(--rojo-danger);
            padding: 10px 24px;
            border-radius: 12px;
            font-family: 'Nunito', sans-serif;
            font-weight: 700;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.25s;
        }

        .btn-logout:hover {
            background: var(--rojo-danger);
            color: var(--blanco);
            box-shadow: 0 4px 12px rgba(239, 68, 68, 0.2);
            transform: translateY(-1px);
        }

        /* ── ANIMACIONES ── */
        @keyframes fadeInDown {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @media (max-width: 640px) {
            .navbar { padding: 15px 20px; }
            .user-info { display: none; }
        }
    </style>
</head>
<body>

    <header class="navbar">
        <a href="#" class="logo">
            <div class="logo-icon">
                <i class="fa-solid fa-hospital"></i>
            </div>
            <div class="logo-text">
                <strong>SISTEMA DE GESTIÓN</strong>
                <span style="font-size: 11px; color: var(--celeste-bright); font-weight:600;">Sanar +</span>
            </div>
        </a>

        <div class="user-profile">
            <div class="user-info">
                <p class="user-name">{{ Auth::user()->name ?? 'Personal Médico' }}</p>
                <p class="user-role">Panel Activo</p>
            </div>
            <div class="logo-icon" style="background: var(--celeste-light); color: var(--azul-primary)">
                <i class="fa-solid fa-user-doctor"></i>
            </div>
        </div>
    </header>

    <main class="container">
        
        <div class="welcome-header">
            <h1>Bienvenido al Panel <span>Sanar +</span></h1>
            <p>Selecciona un módulo para gestionar los servicios de la clínica</p>
        </div>

        <div class="modules-grid">
            
            <a href="#" class="module-card">
                <div class="card-icon"><i class="fa-solid fa-user-injured"></i></div>
                <h3 class="card-title">Pacientes</h3>
                <p class="card-desc">Registro, historias clínicas y control de ingresos.</p>
            </a>

            <a href="#" class="module-card">
                <div class="card-icon"><i class="fa-solid fa-user-md"></i></div>
                <h3 class="card-title">Médicos</h3>
                <p class="card-desc">Gestión del staff médico, horarios y especialidades.</p>
            </a>

            <a href="#" class="module-card">
                <div class="card-icon"><i class="fa-solid fa-calendar-check"></i></div>
                <h3 class="card-title">Citas</h3>
                <p class="card-desc">Programación, cancelaciones y control de calendarios.</p>
            </a>

            <a href="#" class="module-card">
                <div class="card-icon"><i class="fa-solid fa-notes-medical"></i></div>
                <h3 class="card-title">Diagnósticos</h3>
                <p class="card-desc">Informes médicos, resultados y evaluaciones.</p>
            </a>

            <a href="#" class="module-card">
                <div class="card-icon"><i class="fa-solid fa-heartbeat"></i></div>
                <h3 class="card-title">Tratamientos</h3>
                <p class="card-desc">Planes de recuperación y seguimiento de pacientes.</p>
            </a>

            <a href="#" class="module-card">
                <div class="card-icon"><i class="fa-solid fa-pills"></i></div>
                <h3 class="card-title">Medicamentos</h3>
                <p class="card-desc">Inventario de farmacia, recetas y stock disponible.</p>
            </a>

        </div>

        <div class="logout-container">
            <button class="btn-logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fa-solid fa-right-from-bracket"></i> Cerrar sesión
            </button>
            
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>

    </main>

</body>
</html>