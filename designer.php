<?php
// Configurações da página
$pageTitle = "Design & Arte Gráfica | Tanque Digital";
$pageDescription = "Design estratégico, criação de marcas e arte gráfica profissional para impressão. Soluções visuais completas pela Tanque Digital.";
$whatsappNumber = "5584994554714"; // Seu número formatado
$email = "ldtnettelecom@gmail.com";
$mainSite = "https://tanquedigital.com.br";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= $pageDescription ?>">
    <meta name="author" content="Akiles Leopoldo - Tanque Digital">
    <title><?= $pageTitle ?></title>
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <style>
        :root {
            --azul-escuro: #0A2540;
            --azul-medio: #0F3A63;
            --ciano: #00D4FF;
            --ciano-escuro: #00A8CC;
            --branco: #FFFFFF;
            --cinza-claro: #F5F7FA;
            --cinza-texto: #B8C5D1;
            --gradiente-principal: linear-gradient(135deg, #0A2540 0%, #0F3A63 50%, #00A8CC 100%);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }
        
        html { scroll-behavior: smooth; }
        
        body {
            background: var(--azul-escuro);
            color: var(--branco);
            overflow-x: hidden;
        }
        
        /* ===== HEADER ===== */
        header {
            position: fixed;
            top: 0;
            width: 100%;
            background: rgba(10, 37, 64, 0.95);
            backdrop-filter: blur(10px);
            z-index: 1000;
            padding: 15px 0;
            border-bottom: 1px solid rgba(0, 212, 255, 0.2);
        }
        
        .nav-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: var(--branco);
            text-decoration: none;
        }
        .logo span { color: var(--ciano); }
        
        .nav-menu {
            display: flex;
            gap: 30px;
            list-style: none;
        }
        .nav-menu a {
            color: var(--branco);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            font-size: 0.95rem;
        }
        .nav-menu a:hover { color: var(--ciano); }
        
        .btn-voltar {
            background: transparent;
            border: 2px solid var(--ciano);
            color: var(--ciano);
            padding: 8px 20px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
        }
        .btn-voltar:hover {
            background: var(--ciano);
            color: var(--azul-escuro);
        }
        
        .menu-toggle {
            display: none;
            background: none;
            border: none;
            color: var(--branco);
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        /* ===== HERO ===== */
        .hero {
            min-height: 100vh;
            background: var(--gradiente-principal);
            display: flex;
            align-items: center;
            padding: 120px 20px 60px;
            position: relative;
            overflow: hidden;
        }
        
        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            right: -20%;
            width: 600px;
            height: 600px;
            background: radial-gradient(circle, rgba(0,212,255,0.15) 0%, transparent 70%);
            border-radius: 50%;
            animation: pulse 4s ease-in-out infinite;
        }
        
        @keyframes pulse {
            0%, 100% { transform: scale(1); opacity: 0.5; }
            50% { transform: scale(1.1); opacity: 0.8; }
        }
        
        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
            position: relative;
            z-index: 2;
        }
        
        .hero-text h1 {
            font-size: 3.2rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }
        .hero-text h1 span { color: var(--ciano); }
        
        .hero-text p {
            font-size: 1.15rem;
            color: var(--cinza-texto);
            margin-bottom: 30px;
            line-height: 1.6;
        }
        
        .hero-buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }
        
        .btn-primary {
            background: var(--ciano);
            color: var(--azul-escuro);
            padding: 14px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: 2px solid var(--ciano);
        }
        .btn-primary:hover {
            background: transparent;
            color: var(--ciano);
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(0, 212, 255, 0.3);
        }
        
        .btn-secondary {
            background: transparent;
            color: var(--branco);
            padding: 14px 32px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: 700;
            transition: all 0.3s;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            border: 2px solid var(--branco);
        }
        .btn-secondary:hover {
            background: var(--branco);
            color: var(--azul-escuro);
            transform: translateY(-3px);
        }
        
        /* ===== AVATAR ===== */
        .hero-avatar {
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        
        .avatar-wrapper {
            width: 380px;
            height: 380px;
            border-radius: 50%;
            background: linear-gradient(135deg, var(--ciano) 0%, var(--ciano-escuro) 100%);
            padding: 8px;
            position: relative;
            box-shadow: 0 20px 60px rgba(0, 212, 255, 0.3);
            animation: float 6s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
        }
        
        .avatar-wrapper img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid var(--azul-escuro);
        }
        
        .floating-icon {
            position: absolute;
            background: var(--branco);
            color: var(--ciano);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }
        
        .icon-1 { top: 10%; left: -10%; animation: float 4s ease-in-out infinite; }
        .icon-2 { top: 50%; right: -15%; animation: float 5s ease-in-out infinite 1s; }
        .icon-3 { bottom: 5%; left: 5%; animation: float 4.5s ease-in-out infinite 0.5s; }
        
        /* ===== SECTIONS ===== */
        section {
            padding: 80px 20px;
        }
        
        .section-container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }
        
        .section-title h2 {
            font-size: 2.5rem;
            font-weight: 800;
            margin-bottom: 15px;
        }
        .section-title h2 span { color: var(--ciano); }
        
        .section-title p {
            color: var(--cinza-texto);
            font-size: 1.1rem;
            max-width: 600px;
            margin: 0 auto;
        }
        
        /* ===== SERVIÇOS ===== */
        .servicos {
            background: var(--azul-medio);
        }
        
        .servicos-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 30px;
        }
        
        .servico-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(0, 212, 255, 0.2);
            border-radius: 15px;
            padding: 35px 25px;
            transition: all 0.3s;
            text-align: center;
        }
        
        .servico-card:hover {
            transform: translateY(-10px);
            border-color: var(--ciano);
            box-shadow: 0 15px 40px rgba(0, 212, 255, 0.15);
        }
        
        .servico-icon {
            width: 80px;
            height: 80px;
            background: var(--gradiente-principal);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 2rem;
            color: var(--ciano);
        }
        
        .servico-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--branco);
        }
        
        .servico-card p {
            color: var(--cinza-texto);
            line-height: 1.6;
            font-size: 0.95rem;
        }
        
        /* ===== DIFERENCIAL ===== */
        .diferencial {
            background: var(--azul-escuro);
        }
        
        .diferencial-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        
        .diferencial-text h2 {
            font-size: 2.3rem;
            margin-bottom: 20px;
        }
        .diferencial-text h2 span { color: var(--ciano); }
        
        .diferencial-text p {
            color: var(--cinza-texto);
            line-height: 1.7;
            margin-bottom: 20px;
            font-size: 1.05rem;
        }
        
        .diferencial-list {
            list-style: none;
        }
        
        .diferencial-list li {
            padding: 12px 0;
            color: var(--branco);
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 1rem;
        }
        
        .diferencial-list i {
            color: var(--ciano);
            font-size: 1.2rem;
        }
        
        .diferencial-visual {
            background: linear-gradient(135deg, rgba(0, 212, 255, 0.1), rgba(0, 168, 204, 0.05));
            border: 1px solid rgba(0, 212, 255, 0.3);
            border-radius: 20px;
            padding: 40px;
            text-align: center;
        }
        
        .diferencial-visual i {
            font-size: 5rem;
            color: var(--ciano);
            margin-bottom: 20px;
        }
        
        .diferencial-visual h3 {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }
        
        /* ===== PORTFÓLIO ===== */
        .portfolio {
            background: var(--azul-medio);
        }
        
        .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }
        
        .portfolio-item {
            position: relative;
            border-radius: 15px;
            overflow: hidden;
            aspect-ratio: 4/3;
            background: var(--azul-escuro);
            border: 1px solid rgba(0, 212, 255, 0.2);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .portfolio-item:hover {
            transform: scale(1.03);
            border-color: var(--ciano);
        }
        
        .portfolio-placeholder {
            width: 100%;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            color: var(--cinza-texto);
            gap: 10px;
        }
        
        .portfolio-placeholder i {
            font-size: 3rem;
            color: var(--ciano);
        }
        
        /* ===== CONTATO ===== */
        .contato {
            background: var(--azul-escuro);
        }
        
        .contato-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 40px;
        }
        
        .contato-card {
            background: rgba(255,255,255,0.05);
            border: 1px solid rgba(0, 212, 255, 0.2);
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            transition: all 0.3s;
        }
        
        .contato-card:hover {
            border-color: var(--ciano);
            transform: translateY(-5px);
        }
        
        .contato-card i {
            font-size: 2.5rem;
            color: var(--ciano);
            margin-bottom: 15px;
        }
        
        .contato-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
        }
        
        .contato-card a {
            color: var(--cinza-texto);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .contato-card a:hover { color: var(--ciano); }
        
        .cta-final {
            text-align: center;
            background: var(--gradiente-principal);
            padding: 50px 30px;
            border-radius: 20px;
            border: 1px solid rgba(0, 212, 255, 0.3);
        }
        
        .cta-final h2 {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        
        .cta-final p {
            color: var(--cinza-texto);
            margin-bottom: 25px;
            font-size: 1.05rem;
        }
        
        /* ===== FOOTER ===== */
        footer {
            background: #061A2E;
            padding: 40px 20px 20px;
            text-align: center;
            border-top: 1px solid rgba(0, 212, 255, 0.2);
        }
        
        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 20px;
            flex-wrap: wrap;
        }
        
        .footer-links a {
            color: var(--cinza-texto);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover { color: var(--ciano); }
        
        .footer-copy {
            color: var(--cinza-texto);
            font-size: 0.9rem;
            margin-top: 20px;
        }
        
        /* ===== WHATSAPP FLUTUANTE ===== */
        .whatsapp-float {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 60px;
            height: 60px;
            background: #25D366;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            text-decoration: none;
            box-shadow: 0 5px 20px rgba(37, 211, 102, 0.4);
            z-index: 999;
            transition: all 0.3s;
            animation: pulse-wpp 2s infinite;
        }
        
        @keyframes pulse-wpp {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        
        .whatsapp-float:hover {
            transform: scale(1.15);
        }
        
        /* ===== RESPONSIVO ===== */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: var(--azul-escuro);
                flex-direction: column;
                padding: 20px;
                gap: 15px;
            }
            
            .nav-menu.active { display: flex; }
            .menu-toggle { display: block; }
            
            .hero-container,
            .diferencial-content {
                grid-template-columns: 1fr;
                text-align: center;
            }
            
            .hero-text h1 { font-size: 2.2rem; }
            
            .avatar-wrapper {
                width: 280px;
                height: 280px;
            }
            
            .floating-icon {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }
            
            .hero-buttons { justify-content: center; }
            
            .section-title h2 { font-size: 1.8rem; }
        }
    </style>
</head>
<body>

    <!-- HEADER -->
    <header>
        <div class="nav-container">
            <a href="#" class="logo">Tanque<span>Digital</span></a>
            <button class="menu-toggle" onclick="toggleMenu()">
                <i class="fas fa-bars"></i>
            </button>
            <ul class="nav-menu" id="navMenu">
                <li><a href="#servicos">Serviços</a></li>
                <li><a href="#diferencial">Diferenciais</a></li>
                <li><a href="#portfolio">Portfólio</a></li>
                <li><a href="#contato">Contato</a></li>
                <li><a href="<?= $mainSite ?>" class="btn-voltar">Voltar ao Site</a></li>
            </ul>
        </div>
    </header>

    <!-- HERO -->
    <section class="hero">
        <div class="hero-container">
            <div class="hero-text">
                <h1>Design Estratégico &<br><span>Arte Gráfica Profissional</span></h1>
                <p>Da criação da marca à arte final para impressão. Soluções visuais completas, criativas e técnicas pela Tanque Digital.</p>
                <div class="hero-buttons">
                    <a href="https://wa.me/<?= $whatsappNumber ?>?text=Olá! Gostaria de solicitar um orçamento de design." class="btn-primary">
                        <i class="fab fa-whatsapp"></i> Solicitar Orçamento
                    </a>
                    <a href="#portfolio" class="btn-secondary">
                        <i class="fas fa-images"></i> Ver Portfólio
                    </a>
                </div>
            </div>
            <div class="hero-avatar">
                <div class="avatar-wrapper">
                    <!-- Substitua pelo caminho do seu avatar -->
                    <img src="avatar.jpg" alt="Akiles Leopoldo - Designer Tanque Digital" onerror="this.src='data:image/svg+xml;utf8,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 200 200%22><rect fill=%22%2300D4FF%22 width=%22200%22 height=%22200%22/><text x=%2250%25%22 y=%2250%25%22 dominant-baseline=%22middle%22 text-anchor=%22middle%22 font-size=%2280%22 fill=%22%230A2540%22 font-family=%22Arial%22 font-weight=%22bold%22>AL</text></svg>'">
                    
                    <div class="floating-icon icon-1"><i class="fas fa-pen-nib"></i></div>
                    <div class="floating-icon icon-2"><i class="fas fa-palette"></i></div>
                    <div class="floating-icon icon-3"><i class="fas fa-bezier-curve"></i></div>
                </div>
            </div>
        </div>
    </section>

    <!-- SERVIÇOS -->
    <section class="servicos" id="servicos">
        <div class="section-container">
            <div class="section-title">
                <h2>Como Posso <span>Te Ajudar</span></h2>
                <p>Soluções completas em design e arte gráfica para fortalecer sua marca e comunicar suas ideias.</p>
            </div>
            
            <div class="servicos-grid">
                <div class="servico-card">
                    <div class="servico-icon"><i class="fas fa-fingerprint"></i></div>
                    <h3>Identidade Visual</h3>
                    <p>Criação de logotipos, branding completo e manual de marca para posicionar sua empresa no mercado.</p>
                </div>
                
                <div class="servico-card">
                    <div class="servico-icon"><i class="fas fa-print"></i></div>
                    <h3>Arte para Impressão</h3>
                    <p>Flyers, banners, cartões de visita, cardápios e materiais gráficos com especificações técnicas corretas.</p>
                </div>
                
                <div class="servico-card">
                    <div class="servico-icon"><i class="fas fa-mobile-alt"></i></div>
                    <h3>Social Media</h3>
                    <p>Posts, stories, capas e artes para redes sociais com identidade visual consistente e estratégica.</p>
                </div>
                
                <div class="servico-card">
                    <div class="servico-icon"><i class="fas fa-vector-square"></i></div>
                    <h3>Vetorização</h3>
                    <p>Conversão de imagens e logotipos para formato vetorial, garantindo qualidade em qualquer tamanho.</p>
                </div>
                
                <div class="servico-card">
                    <div class="servico-icon"><i class="fas fa-file-alt"></i></div>
                    <h3>Diagramação</h3>
                    <p>Layout de livros, revistas, e-books e apresentações com design profissional e legível.</p>
                </div>
                
                <div class="servico-card">
                    <div class="servico-icon"><i class="fas fa-laptop-code"></i></div>
                    <h3>Design Web</h3>
                    <p>Interfaces modernas para sites e landing pages, unindo estética e experiência do usuário.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- DIFERENCIAL -->
    <section class="diferencial" id="diferencial">
        <div class="section-container">
            <div class="diferencial-content">
                <div class="diferencial-text">
                    <h2>Do <span>Pixel</span> à <span>Impressão</span></h2>
                    <p>Como especialista em design e desenvolvimento, crio suas artes já pensando nas especificações técnicas de impressão: sangria, CMYK, resolução, acabamentos e formatos ideais.</p>
                    <p>Isso significa <strong>zero retrabalho</strong>, <strong>zero surpresas</strong> na hora de imprimir e um resultado final muito superior.</p>
                    
                    <ul class="diferencial-list">
                        <li><i class="fas fa-check-circle"></i> Arquivos prontos para gráfica</li>
                        <li><i class="fas fa-check-circle"></i> Atendimento personalizado via WhatsApp</li>
                        <li><i class="fas fa-check-circle"></i> Revisões incluídas no orçamento</li>
                        <li><i class="fas fa-check-circle"></i> Entrega dentro do prazo combinado</li>
                        <li><i class="fas fa-check-circle"></i> Integração com serviços de impressão</li>
                    </ul>
                </div>
                
                <div class="diferencial-visual">
                    <i class="fas fa-award"></i>
                    <h3>Qualidade Garantida</h3>
                    <p style="color: var(--cinza-texto);">Mais de 4 anos entregando projetos visuais de alta qualidade para empresas e empreendedores.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- PORTFÓLIO -->
    <section class="portfolio" id="portfolio">
        <div class="section-container">
            <div class="section-title">
                <h2>Meu <span>Portfólio</span></h2>
                <p>Uma seleção de trabalhos recentes em design gráfico, identidade visual e arte para impressão.</p>
            </div>
            
            <div class="portfolio-grid">
                <div class="portfolio-item">
                    <div class="portfolio-placeholder">
                        <i class="fas fa-image"></i>
                        <span>Identidade Visual</span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-placeholder">
                        <i class="fas fa-image"></i>
                        <span>Cartão de Visita</span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-placeholder">
                        <i class="fas fa-image"></i>
                        <span>Social Media</span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-placeholder">
                        <i class="fas fa-image"></i>
                        <span>Banner</span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-placeholder">
                        <i class="fas fa-image"></i>
                        <span>Cardápio</span>
                    </div>
                </div>
                <div class="portfolio-item">
                    <div class="portfolio-placeholder">
                        <i class="fas fa-image"></i>
                        <span>Logo</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CONTATO -->
    <section class="contato" id="contato">
        <div class="section-container">
            <div class="section-title">
                <h2>Vamos <span>Conversar?</span></h2>
                <p>Entre em contato e solicite seu orçamento sem compromisso.</p>
            </div>
            
            <div class="contato-grid">
                <div class="contato-card">
                    <i class="fab fa-whatsapp"></i>
                    <h3>WhatsApp</h3>
                    <a href="https://wa.me/<?= $whatsappNumber ?>" target="_blank">(84) 99455-4714</a>
                </div>
                
                <div class="contato-card">
                    <i class="fas fa-envelope"></i>
                    <h3>E-mail</h3>
                    <a href="mailto:<?= $email ?>"><?= $email ?></a>
                </div>
                
                <div class="contato-card">
                    <i class="fas fa-globe"></i>
                    <h3>Site Principal</h3>
                    <a href="<?= $mainSite ?>" target="_blank">tanquedigital.com.br</a>
                </div>
            </div>
            
            <div class="cta-final">
                <h2>Pronto para transformar suas ideias em design?</h2>
                <p>Atendimento rápido e personalizado. Respondo em até 1 hora em horário comercial.</p>
                <a href="https://wa.me/<?= $whatsappNumber ?>?text=Olá! Vi seu site de design e gostaria de um orçamento." class="btn-primary">
                    <i class="fab fa-whatsapp"></i> Chamar no WhatsApp
                </a>
            </div>
        </div>
    </section>

    <!-- FOOTER -->
    <footer>
        <div class="footer-content">
            <div class="footer-links">
                <a href="#servicos">Serviços</a>
                <a href="#diferencial">Diferenciais</a>
                <a href="#portfolio">Portfólio</a>
                <a href="#contato">Contato</a>
                <a href="<?= $mainSite ?>">Tanque Digital</a>
            </div>
            <p class="footer-copy">
                © <?= date('Y') ?> Tanque Digital - Design & Arte Gráfica<br>
                Desenvolvido por <strong style="color: var(--ciano);">Akiles Leopoldo</strong>
            </p>
        </div>
    </footer>

    <!-- WHATSAPP FLUTUANTE -->
    <a href="https://wa.me/<?= $whatsappNumber ?>?text=Olá! Vim pelo site de design." class="whatsapp-float" target="_blank" title="Fale no WhatsApp">
        <i class="fab fa-whatsapp"></i>
    </a>

    <script>
        function toggleMenu() {
            document.getElementById('navMenu').classList.toggle('active');
        }
        
        // Fecha menu ao clicar em link (mobile)
        document.querySelectorAll('.nav-menu a').forEach(link => {
            link.addEventListener('click', () => {
                document.getElementById('navMenu').classList.remove('active');
            });
        });
        
        // Animação ao rolar
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, { threshold: 0.1 });
        
        document.querySelectorAll('.servico-card, .portfolio-item, .contato-card').forEach(el => {
            el.style.opacity = '0';
            el.style.transform = 'translateY(30px)';
            el.style.transition = 'all 0.6s ease';
            observer.observe(el);
        });
    </script>

</body>
</html>
