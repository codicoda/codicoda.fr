<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $_SESSION['startTime'] = time();
}

$isLocal = in_array($_SERVER['SERVER_NAME'], ['localhost', '127.0.0.1', 'dev.codicoda.fr']);

$turnstile_site_key = $isLocal
    ? ('1x00000000000000000000AA')
    : ('0x4AAAAAABafKuhf-vdXQkNh');
?>

    <!DOCTYPE html>
    <html lang="fr">
        <head>
            <link rel="preload" href="/assets/js/common.js" as="script">
            <link rel="preload" href="/assets/js/index.js" as="script">
            <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
            <script src="https://kit.fontawesome.com/d086639e0f.js" crossorigin="anonymous" defer></script>
            <script src="/assets/js/index.js" defer></script>
            <script src="/assets/js/common.js" defer></script>
            <link rel="stylesheet" href="/assets/css/style.tailwind.min.css">
            <script>window.TURNSTILE_KEY = "<?php echo htmlspecialchars($turnstile_site_key); ?>";</script>
            <script src="/assets/js/contact.js"></script>
            <link rel="icon" href="/fav.ico" type="image/x-icon">
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="/assets/css/style.min.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
            <title>Création de site internet professionnel | Refonte & maintenance web sur mesure | Codicoda</title>
            <meta name="description" content="Codicoda conçoit des sites internet professionnels sur mesure : création, refonte, maintenance, SEO, hébergement et déploiement. Un accompagnement complet, de A à Z.">
            <meta name="google-site-verification" content="9g5ui2VcM5hBHnIR6fXZsjKghXmcUkVOSa83h1PB0RQ"/>
            <meta property="og:description" content="Développement Web: Codicoda vous accompagne dans la création, la refonte et la maintenance de sites web modernes et performants. De l'hébergement au déploiement, vos projets sont gérés de A à Z.">
            <meta property="og:image" content="https://codicoda.fr/fav.ico">
        </head>
        <body>        
            <div class="bg-black text-white font-['Space_Grotesk']">
                <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
                    <div class="absolute top-20 left-10 w-96 h-96 bg-indigo-900/10 rounded-full blur-3xl"></div>
                    <div class="absolute bottom-10 right-10 w-80 h-80 bg-purple-900/10 rounded-full blur-3xl"></div>
                    <div class="absolute top-40 right-20 w-64 h-64 bg-cyan-900/10 rounded-full blur-3xl"></div>
                    
                    <div class="absolute inset-0 grid grid-cols-12 opacity-5 pointer-events-none">
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                        <div class="border-r border-cyan-500"></div>
                    </div>
                    <div class="absolute inset-0 grid grid-rows-12 opacity-5 pointer-events-none">
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                        <div class="border-b border-cyan-500"></div>
                    </div>
                </div>
            
                <nav id="navbar" class="fixed top-0 left-0 right-0 bg-gray-900/70 backdrop-blur-lg border-b border-cyan-500/30 z-50 transition-all duration-300">
                    <div class="wrapper mx-auto px-6 py-3">
                        <div class="flex items-center justify-between">
                            <a href="/" class="logo">
                            <div class="flex items-center">
                                <div class="relative mr-2">
                                    <div class="absolute inset-0 bg-cyan-400/30 rounded-md blur-sm"></div>
                                    <div class="w-10 h-10 rounded-md bg-gradient-to-br from-indigo-600 to-purple-600 border border-indigo-400/30 flex items-center justify-center relative shadow-lg shadow-indigo-800/20">
                                        <div class="absolute inset-[3px] bg-gray-900 rounded-[4px] flex items-center justify-center overflow-hidden">
                                            <div class="absolute inset-0 bg-gradient-to-br from-indigo-900/20 to-purple-900/20"></div>
                                            <button class="font-bold text-lg bg-gradient-to-r from-cyan-400 to-indigo-400 bg-clip-text text-transparent">>_</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-xl font-medium bg-gradient-to-r from-indigo-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent flex items-center">
                                    Codicoda
                                </div>
                            </div></a>
            
                            <div class="hidden lg:flex items-center space-x-1" style="overflow: hidden;padding-left:1rem">
                                <a href="#about" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">A propos</a>
                                <a href="#services" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Services</a>
                                <a href="#timeline" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Étapes</a>
                                <a href="#tarifs" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Tarifs</a>
                                <a href="#portfolio" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Portfolio</a>
                                <a href="#contact" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Contact</a>
                                <div class="relative ml-4 group">
                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-indigo-600/50 to-purple-600/50 rounded-lg blur opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
                                    <a href="https://calendly.com/codicoda/rendez-vous" target="blank" style="text-decoration: none; white-space:nowrap"><button class="contact-btn px-4 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-sm font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300">
                                        <span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Prenons rendez-vous !</span>
                                    </button></a>
                                </div>
                            </div>
            
                            <div class="flex lg:hidden">
                                <button id="mobile-menu-button" class="relative w-10 h-10 focus:outline-none group" aria-label="Toggle menu">
                                    <div class="absolute w-5 transform -translate-x-1/2 -translate-y-1/2 left-1/2 top-1/2">
                                        <span class="block h-0.5 w-5 bg-cyan-400 mb-1 transform transition duration-300 ease-in-out" id="line1"></span>
                                        <span class="block h-0.5 w-5 bg-cyan-400 mb-1 transform transition duration-300 ease-in-out" id="line2"></span>
                                        <span class="block h-0.5 w-5 bg-cyan-400 transform transition duration-300 ease-in-out" id="line3"></span>
                                    </div>
                                </button>
                            </div>
                        </div>
            
                        <div id="mobile-menu" class="lg:hidden h-0 overflow-hidden transition-all duration-300 ease-in-out">
                            <div class="pt-2 pb-4 space-y-1 mt-8">
                                <a href="#about" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">A propos</a>
                                <a href="#services" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Services</a>
                                <a href="#timeline" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Étapes</a>
                                <a href="#tarifs" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Tarifs</a>
                                <a href="#portfolio" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Portfolio</a>
                                <a href="#contact" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Contact</a>
                                <div class="px-4 pt-2 mt-8">
                                    <a href="https://calendly.com/codicoda/rendez-vous" target="blank" style="text-decoration: none;"><button class="contact-btn w-full px-4 py-3 bg-gradient-to-r from-indigo-700 to-purple-700 rounded-lg text-white text-sm font-medium flex items-center justify-center gap-2 hover:from-indigo-600 hover:to-purple-600 transition-all duration-300">
                                        <span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Prenons rendez-vous !</span>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
                <main>
                    <section id="home" class="min-h-screen flex items-center justify-center relative pt-20">
                        <div class="wrapper mx-auto px-6 py-20">
                            <div class="flex flex-col items-center text-center">
                                <div class="relative mb-4">
                                    <div class="absolute inset-0 bg-cyan-500/20 rounded-full blur-3xl"></div>
                                    <div class="text-6xl md:text-7xl lg:text-8xl font-bold bg-gradient-to-r from-indigo-400 via-cyan-400 to-purple-400 bg-clip-text text-transparent pb-2 relative">
                                        Codicoda
                                    </div>
                                </div>
                                <div>
                                <h1 id="subtitle" class="text-xl md:text-2xl text-gray-400 max-w-3xl mb-8">
                                    Création, refonte et maintenance de sites web professionnels sur mesure :
                                    <span id="write"></span>
                                    <span class="blink">|</span>
                                </h1></div>
                                <div class="flex gap-4 flex-wrap justify-center">
                                    <div class="relative group">
                                        <div class="absolute -inset-0.5 bg-gradient-to-r from-indigo-600/50 to-purple-600/50 rounded-lg blur opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
                                        <a href="#contact" style="text-decoration: none;"><button class="px-6 py-3 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95">
                                            <span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Envoyez un mail</span>
                                        </button></a>
                                    </div>
                                    <a href="#portfolio" style="text-decoration: none;"><button class="px-6 py-3 bg-transparent border border-cyan-500/30 rounded-lg text-cyan-400 text-base font-medium flex items-center justify-center gap-2 hover:bg-cyan-900/10 hover:border-cyan-500/50 transition-all duration-300">
                                        Les projets réalisés
                                    </button></a>
                                </div>
                            </div>
                        </div>
                        <div class="arrow absolute bottom-10 left-1/2 transform -translate-x-1/2 animate-bounce">
                            <svg class="w-6 h-6 text-cyan-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                            </svg>
                        </div>
                    </section>
            
                    <section id="about" class="min-h-screen flex items-center relative py-20">
                        <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                                <div class="text-center mb-12">
                                    <div class="inline-block mb-3">
                                        <div class="text-xs text-cyan-400 tracking-widest uppercase mb-1">A propos</div>
                                        <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Une approche technique et humaine</div>
                                    </div>
                                    <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                </div>
                                <p class="text-gray-400 mt-8 text-center max-w-3xl mx-auto" style="margin: 5em 0;">Spécialisé dans le développement de sites sur mesure pour <strong>artisans, indépendants et petites structures.</strong> Des solutions modernes, simples et bien référencées, conçues pour rendre le web accessible, utile et efficace, même pour les plus petits projets.
                                </p>
                                <div class="grid md:grid-cols-2 gap-8 items-center">
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-gradient-to-r from-indigo-500/20 to-purple-500/20 rounded-xl blur-sm group-hover:bg-indigo-500/30 transition-all duration-500"></div>
                                        <div class="relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                                            <div class="flex flex-col">
                                                <div class="font-medium text-xl text-white mb-3">Valeurs</div>
                                                <p class="text-gray-400">Donner forme à une idée, partir de zéro, trouver une réponse adaptée à un besoin. La technique est au service de ce qui compte vraiment, résoudre un problème, répondre à une attente, construire quelque chose d'utile et qui a du sens pour vous.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-gradient-to-r from-purple-500/20 to-cyan-500/20 rounded-xl blur-sm group-hover:bg-purple-500/30 transition-all duration-500"></div>
                                        <div class="relative bg-gray-900/70 backdrop-blur-lg border border-purple-500/20 p-6 rounded-xl shadow-xl group-hover:border-purple-500/40 transition-all duration-300">
                                            <div class="flex flex-col">
                                                <div class="font-medium text-xl text-white mb-3">Méthode</div>
                                                <p class="text-gray-400">Chaque projet démarre par une phase d'analyse pour comprendre les besoins et les objectifs. L'intervention peut couvrir tout ou partie du processus : choix techniques, développement, déploiement, performance ou référencement. Le cadre s'ajuste selon vos besoins.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                        <div class="marquee" id="marquee">
                            <ul class="marquee-content">
                                <li><i class="fab fa-github"></i> </li>
                                <li><i class="fab fa-php" style="color:#4F5B93;"></i> </li>
                                <li><i class="fab fa-gitlab" style="color:rgb(252, 109, 38);"></i> </li>
                                <li><i class="fab fa-css3-alt text-blue-300"></i> </li>
                                <li><i class="fab fa-html5" style="color:rgb(252, 109, 38);"></i> </li>
                                <li><i class="fab fa-docker" style="color:#1d63ed;"></i> </li>
                                <li><i class="fab fa-linux"></i> </li>
                                <li><i class="fab fa-debian" style="color:#a80030;"></i> </li>
                                <li><i class="fab fa-js" style="color:rgb(252, 223, 38);"></i> </li>
                                <li><i class="fa fa-globe"></i> </li>
                            </ul>
                        </div>
                    <section id="services" class="min-h-screen flex items-center relative py-20">
                        <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                                <div class="text-center mb-12">
                                    <div class="inline-block mb-3">
                                        <h2 id="sectiontitle"class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Création et refonte de sites web professionnels</h2>
                                        <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Les services</div>
                                    </div>
                                    <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                </div>
                                <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-indigo-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                        <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-indigo-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-indigo-500/40 transition-all duration-300">
                                            <div class="flex flex-col h-full">
                                                <div class="flex items-center mb-4">
                                                    <div class="w-10 h-10 rounded bg-indigo-900/60 flex items-center justify-center mr-3 group-hover:bg-indigo-800/70 transition-colors">
                                                        <svg class="w-5 h-5 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                                        </svg>
                                                        </svg>
                                                    </div>
                                                    <div class="font-medium text-lg text-indigo-300 group-hover:text-indigo-200 transition-colors">Développement</div>
                                                </div>
                                                <p class="text-gray-400 mb-4">Création de sites web modernes, performants et adaptés à vos besoins.</p>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-purple-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                        <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-purple-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-purple-500/40 transition-all duration-300">
                                            <div class="flex flex-col h-full">
                                                <div class="flex items-center mb-4">
                                                    <div class="w-10 h-10 rounded bg-purple-900/60 flex items-center justify-center mr-3 group-hover:bg-purple-800/70 transition-colors">
                                                        <svg class="w-5 h-5 text-purple-300" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                                            <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.27 3.27a.997.997 0 0 0 1.414 0l1.586-1.586a.997.997 0 0 0 0-1.414l-3.27-3.27a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3q0-.405-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814zm9.646 10.646a.5.5 0 0 1 .708 0l2.914 2.915a.5.5 0 0 1-.707.707l-2.915-2.914a.5.5 0 0 1 0-.708M3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z"/>
                                                        </svg>
                                                    </div>
                                                    <div class="font-medium text-lg text-purple-300 group-hover:text-purple-200 transition-colors">Maintenance</div>
                                                </div>
                                                <p class="text-gray-400 mb-4">Suivi, mises à jour et corrections pour assurer la stabilité et l'évolution de votre site.</p>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                        <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300">
                                            <div class="flex flex-col h-full">
                                                <div class="flex items-center mb-4">
                                                    <div class="w-10 h-10 rounded bg-cyan-900/60 flex items-center justify-center mr-3 group-hover:bg-cyan-800/70 transition-colors">
                                                        <svg class="w-5 h-5 text-cyan-300" width="16" height="16" fill="currentColor" class="bi bi-globe" viewBox="0 0 16 16">
                                                            <path d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m7.5-6.923c-.67.204-1.335.82-1.887 1.855A8 8 0 0 0 5.145 4H7.5zM4.09 4a9.3 9.3 0 0 1 .64-1.539 7 7 0 0 1 .597-.933A7.03 7.03 0 0 0 2.255 4zm-.582 3.5c.03-.877.138-1.718.312-2.5H1.674a7 7 0 0 0-.656 2.5zM4.847 5a12.5 12.5 0 0 0-.338 2.5H7.5V5zM8.5 5v2.5h2.99a12.5 12.5 0 0 0-.337-2.5zM4.51 8.5a12.5 12.5 0 0 0 .337 2.5H7.5V8.5zm3.99 0V11h2.653c.187-.765.306-1.608.338-2.5zM5.145 12q.208.58.468 1.068c.552 1.035 1.218 1.65 1.887 1.855V12zm.182 2.472a7 7 0 0 1-.597-.933A9.3 9.3 0 0 1 4.09 12H2.255a7 7 0 0 0 3.072 2.472M3.82 11a13.7 13.7 0 0 1-.312-2.5h-2.49c.062.89.291 1.733.656 2.5zm6.853 3.472A7 7 0 0 0 13.745 12H11.91a9.3 9.3 0 0 1-.64 1.539 7 7 0 0 1-.597.933M8.5 12v2.923c.67-.204 1.335-.82 1.887-1.855q.26-.487.468-1.068zm3.68-1h2.146c.365-.767.594-1.61.656-2.5h-2.49a13.7 13.7 0 0 1-.312 2.5m2.802-3.5a7 7 0 0 0-.656-2.5H12.18c.174.782.282 1.623.312 2.5zM11.27 2.461c.247.464.462.98.64 1.539h1.835a7 7 0 0 0-3.072-2.472c.218.284.418.598.597.933M10.855 4a8 8 0 0 0-.468-1.068C9.835 1.897 9.17 1.282 8.5 1.077V4z"/></svg>
                                                        </svg>
                                                    </div>
                                                    <div class="font-medium text-lg text-cyan-300 group-hover:text-cyan-200 transition-colors">Déploiement</div>
                                                </div>
                                                <p class="text-gray-400 mb-4">Mise en ligne professionnelle et sécurisée de vos projets web sur serveur.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="relative group">
                                        <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                        <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300">
                                            <div class="flex flex-col h-full">
                                                <div class="flex items-center mb-4">
                                                    <div class="w-10 h-10 rounded bg-blue-900/60 flex items-center justify-center mr-3 group-hover:bg-blue-800/70 transition-colors">
                                                        <svg class="w-5 h-5 text-blue-300" width="16" height="16" fill="currentColor" class="bi bi-recycle" viewBox="0 0 16 16">
                                                            <path d="M9.302 1.256a1.5 1.5 0 0 0-2.604 0l-1.704 2.98a.5.5 0 0 0 .869.497l1.703-2.981a.5.5 0 0 1 .868 0l2.54 4.444-1.256-.337a.5.5 0 1 0-.26.966l2.415.647a.5.5 0 0 0 .613-.353l.647-2.415a.5.5 0 1 0-.966-.259l-.333 1.242zM2.973 7.773l-1.255.337a.5.5 0 1 1-.26-.966l2.416-.647a.5.5 0 0 1 .612.353l.647 2.415a.5.5 0 0 1-.966.259l-.333-1.242-2.545 4.454a.5.5 0 0 0 .434.748H5a.5.5 0 0 1 0 1H1.723A1.5 1.5 0 0 1 .421 12.24zm10.89 1.463a.5.5 0 1 0-.868.496l1.716 3.004a.5.5 0 0 1-.434.748h-5.57l.647-.646a.5.5 0 1 0-.708-.707l-1.5 1.5a.5.5 0 0 0 0 .707l1.5 1.5a.5.5 0 1 0 .708-.707l-.647-.647h5.57a1.5 1.5 0 0 0 1.302-2.244z"/></svg>
                                                        </svg>
                                                    </div>
                                                    <div class="font-medium text-lg text-blue-300 group-hover:text-blue-200 transition-colors">Reprise</div>
                                                </div>
                                                <p class="text-gray-400 mb-4">Donnez une nouvelle vie à votre site existant grâce à une reprise soignée.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </section>
            
                <section id="timeline" class="max-w-5xl mx-auto min-h-screen flex items-center relative py-20 section-hidden">
                <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                                <div class="text-center mb-12">
                                    <div class="inline-block mb-3">
                                        <h2 id="sectiontitle" class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Comment se déroule la création de votre site web ?</h2>
                                        <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Processus</div>
                                    </div>
                                    <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                    <div class="grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                                    </div></div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-timeline4">
                                <div class="timeline">
                                    <div class="timeline-content relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                                        <span class="year"><i class ="fas fa-mug-hot text-cyan-400 text-2xl"></i> </span>
                                        <div class="inner-content">
                                            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Premier contact</h3>
                                            <p class="description">
                                            Un échange initial (mail ou visioconférence) pour faire connaissance, comprendre votre projet, vos attentes, votre univers. Cette première prise de contact permet aussi de valider que le feeling est bon, c'est l'essentiel !
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline">
                                    <div class="timeline-content relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                                        <span class="year"><i class ="fas fa-magnifying-glass text-cyan-400 text-2xl"></i> </span>
                                        <div class="inner-content">
                                            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Les besoins</h3>
                                            <p class="description">
                                            Après notre premier échange, on entre dans le détail : vos objectifs, vos contraintes, vos contenus, vos préférences graphiques ou techniques. Cette phase permet de poser les bases solides du projet et d'identifier les solutions adaptées.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline" style="margin-top:7%">
                                    <div class="timeline-content relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                                        <span class="year"><i class ="fas fa-file-code text-cyan-400 text-2xl"></i> </span>
                                        <div class="inner-content">
                                            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Proposition</h3>
                                            <p class="description">
                                            Envoi d'un document synthétique reprenant les besoins identifiés, les solutions proposées, le périmètre, un planning estimatif et un devis. Vous êtes libre de le valider, de l'ajuster et de poser des questions.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline" style="margin-top:50%">
                                    <div class="timeline-content relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                                        <span class="year"><i class ="fas fa-laptop-code text-cyan-400 text-2xl"></i> </span>
                                        <div class="inner-content">
                                            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Code</h3>
                                            <p class="description">
                                            Lancement du développement une fois la proposition validée. Le travail progresse de manière transparente, avec la possibilité de points réguliers et d'un accès à un espace de prévisualisation pour suivre l'évolution du projet.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline" style="margin-top:11%">
                                    <div class="timeline-content relative bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl group-hover:border-indigo-500/40 transition-all duration-300">
                                        <span class="year"><i class ="fas fa-rocket text-cyan-400 text-2xl"></i> </span>
                                        <div class="inner-content">
                                            <h3 class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Livraison</h3>
                                            <p class="description">
                                            Mise en ligne du projet une fois celui-ci terminé et validé. Fourniture des différents accès, et, si nécessaire, d'une formation à l'utilisation du site. Un suivi post-livraison est également assuré.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                    <section id="tarifs" class="min-h-screen flex items-center relative py-20" style="padding-top:calc(var(--vh) * 20);">
                        <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                            <div class="text-center mb-12">
                                <div class="inline-block mb-3">
                                <h2 id="sectiontitle" class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Combien coûte un site internet professionnel ?</h2>
                                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Des packs clairs & flexibles</div>
                                </div>
                                <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                <p class="text-gray-300 mt-8 text-center max-w-3xl mx-auto" style="margin: 3rem 0 3rem 0;">Nos offres sont souples : <a href="#contact" class="underline text-white hover:text-gray-100 transition-colors">échangeons ensemble</a> pour construire une solution sur mesure, même au-delà des formules proposées. Toutes les offres sont modulables : options ajoutables ou supprimables selon vos besoins.
                                </p>
                                <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                <div class="flex justify-center mb-12" style="margin-top:3rem;">
                                    <div class="btn-container">
                                        <button id="btn-mensuel" class="tab-btn px-4 py-2 border-gray-600 text-gray-300 rounded hover:bg-gray-700/40 transition active-tab">
                                        Achetez votre site
                                        </button>
                                        <button id="btn-loc" class="tab-btn px-4 py-2 border-gray-600 text-gray-300 rounded hover:bg-gray-700/40 transition">
                                        Louez votre site
                                        </button>
                                    </div>
                                </div>
                                <div class="mb-3">
                                <h3 id="offers-title" class="text-cyan-400" style="margin-top:2rem;font-size:1.5rem;">Développement Web et Maintenance</h3>
                                <div id="explain-loc" class="text-gray-300 mt-8 text-center max-w-3xl hide" style="display:flex; margin: 2rem auto 3rem auto; gap:2rem;justify-content:space-between;min-width:100%;">
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="text-align:left;">
                                        <h3 class="text-indigo-400" style="text-align:center;font-size:1.2rem;">Configuration et Maintenance du serveur</h3>
                                        <div class="toggler">
                                        <i class="fa-solid fa-check-double"style="color:var(--color-green-600);font-size:2.8em;"></i>
                                        <p style="margin: 0 0 0 2em;">Le service d'hébergement et de maintenance est inclus dans l'abonnement.</p>
                                    </div>
                                    <button class="toggletip-button">A quoi ça sert ?</button>
                                    <div class="toggletip-container">
                                    <div class="toggletip" id="myTip">
                                        <div>Un site web, c'est un peu comme une maison.<br>
                                        <strong>Le développement (code)</strong> : c'est l'architecture, le design, les contenus, les fonctionnalités.<br>
                                        Mais pour que cette maison soit visible, il faut un terrain, une adresse, et des fondations solides :<strong> c'est le rôle du serveur.</strong>
                                        <br><br><i class="fa-solid fa-server text-cyan-400"></i> <strong>Le serveur héberge le code de votre site</strong> et permet d'y accéder 24h/24. Il doit être configuré, sécurisé, surveillé et entretenu. Ce service assure tout cela pour vous.</div>
                                        <div><i class="fa-solid fa-list-check text-cyan-400"></i> <strong>Inclus :</strong><br>
                                        <ul style="margin-top:0.5em">
                                            <li> Site sécurisé (HTTPS avec certificat SSL)</li>
                                            <li> Adresse mail professionnelle liée à votre domaine</li>
                                            <li> Surveillance du domaine et du certificat SSL</li>
                                            <li> Gestion des DNS, mails et support technique</li>
                                            <li> Mises à jour de sécurité régulières</li>
                                            <li> Protection antibot avancée</li>
                                            <li> Reverse-proxy pour améliorer vitesse & sécurité</li>
                                            <li> Pare-feu applicatif pour bloquer les menaces</li>
                                            <li> Sauvegardes automatiques de votre site</li>
                                            <li> Optimisation SEO et performance serveur</li>
                                        </ul>

                                        <br><i class="fa-solid fa-circle-info text-cyan-400"></i> <strong>En résumé :</strong><br>
                                        Vous profitez d'un hébergement stable, sécurisé et géré de A à Z. Votre site est toujours en ligne, sans que vous ayez à lever le petit doigt côté technique.</div>
                                    </div>
                                    </div>
                                    </div>
                                        <div class="p-6" style="font-size:1.5em;max-width:505px">
                                     <strong>Complet, simple, sans engagement. <i class="fa-regular fa-circle-check" style="color:var(--color-green-600);"></i></strong><br><br><p style="font-size:0.7em;margin:0;"><i class="fa-solid fa-parachute-box"></i> Ne payez que pour l'usage du site. Tout est inclus, sans surprise. Un tarif fixe garanti pour toute la durée de votre abonnement. En cas de résiliation, l'accès est simplement désactivé. <br><strong> Idéal pour démarrer à petit prix.</strong></p>
                                        </div>
                                </div>
                                <div id="explain-mensuel" class="text-gray-300 mt-8 text-center max-w-3xl" style="display:flex; margin: 2rem auto 3rem auto; gap:2rem;justify-content:space-between;min-width:100%;">
                                    <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="text-align:left;">
                                        <h3 class="text-indigo-400" style="text-align:center;font-size:1.2rem;">Configuration et Maintenance du serveur</h3>
                                        <div class="toggler">
                                        <input id="toggler-1" name="toggler-1" type="checkbox" value="1" checked>
                                        <label class ="glow-green" for="toggler-1">
                                            <svg class="toggler-on" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <polyline class="path check" points="100.2,40.2 51.5,88.8 29.8,67.5"></polyline>
                                            </svg>
                                            <svg class="toggler-off" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
                                                <line class="path line" x1="34.4" y1="34.4" x2="95.8" y2="95.8"></line>
                                                <line class="path line" x1="95.8" y1="34.4" x2="34.4" y2="95.8"></line>
                                            </svg>
                                        </label>
                                        <p style="margin: 0 0 0 2em;">Le service d'hébergement & maintenance est une option facultative à 40 €/mois.</p>
                                    </div>
                                    <button class="toggletip-button">A quoi ça sert ?</button>
                                        <div class="toggletip-container">
                                    <div class="toggletip" id="myTip">
                                        <div>Un site web, c'est un peu comme une maison.<br>
                                        <strong>Le développement (code)</strong> : c'est l'architecture, le design, les contenus, les fonctionnalités.<br>
                                        Mais pour que cette maison soit visible, il faut un terrain, une adresse, et des fondations solides :<strong> c'est le rôle du serveur.</strong>
                                        <br><br><i class="fa-solid fa-server text-cyan-400"></i> <strong>Le serveur héberge le code de votre site</strong> et permet d'y accéder 24h/24. Il doit être configuré, sécurisé, surveillé et entretenu. Ce service assure tout cela pour vous.</div>
                                        <div><i class="fa-solid fa-list-check text-cyan-400"></i> <strong>Inclus :</strong><br>
                                        <ul style="margin-top:0.5em">
                                            <li> Site sécurisé (HTTPS avec certificat SSL)</li>
                                            <li> Adresse mail professionnelle liée à votre domaine</li>
                                            <li> Surveillance du domaine et du certificat SSL</li>
                                            <li> Gestion des DNS, mails et support technique</li>
                                            <li> Mises à jour de sécurité régulières</li>
                                            <li> Protection antibot avancée</li>
                                            <li> Reverse-proxy pour améliorer vitesse & sécurité</li>
                                            <li> Pare-feu applicatif pour bloquer les menaces</li>
                                            <li> Sauvegardes automatiques de votre site</li>
                                            <li> Optimisation SEO et performance serveur</li>
                                        </ul>

                                        <br><i class="fa-solid fa-circle-info text-cyan-400"></i> <strong>En résumé :</strong><br>
                                        Vous profitez d'un hébergement stable, sécurisé et géré de A à Z. Votre site est toujours en ligne, sans que vous ayez à lever le petit doigt côté technique.</div>
                                    </div>
                                    </div>
                                    </div>
                                    <div class="p-6" style="font-size:1.5em;max-width:505px">
                                        <strong>Vous êtes propriétaire du site. <i class="fa-solid fa-key" style="color:#c9bd16"></i></strong><br><br> <div id="maintenance" style="font-size:0.7em;">
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <div id="loc" class="grid-price hide">
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-indigo-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Coco</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">60 €/mois*<br><span class="price-abo masked"></span></p>
                                    <p class="text-gray-400 text-sm mb-3">Une page web au contenu modifiable, pour avoir une présence <strong>en ligne</strong> rapidement.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-indigo-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Codi</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">90 €/mois*<br><span class="price-abo masked"></span></p>
                                    <p class="text-gray-400 text-sm mb-3">Un site vitrine <strong>facile à modifier</strong>. Gardez une autonomie sur le contenu de votre site.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-indigo-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Codico</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">140 €/mois*<br><span class="price-abo masked"></span></p>
                                    <p class="text-gray-400 text-sm mb-3">Un site vitrine complet et <strong>évolutif</strong>. Ajoutez vous-même ce que vous souhaitez.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-indigo-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Codicoda</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">200 €/mois*<br><span class="price-abo masked"></span></p>
                                    <p class="text-gray-400 text-sm mb-3">Une solution haut de gamme, sur mesure et <strong>sans limite</strong>. Toutes vos envies sur votre site.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                            </div>
                            <div id="mensuel" class="grid-month">
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-cyan-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Coco</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">600 €<br><span class="price-abo switchmonthly">+ 40 €/mois*</span></p>
                                    <p class="text-gray-400 text-sm mb-3">Une page web au contenu modifiable, pour avoir une présence <strong>en ligne</strong> rapidement.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                                <div class="relative group">
                               <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-cyan-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Codi</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">900 €<br><span class="price-abo switchmonthly">+ 40 €/mois*</span></p>
                                    <p class="text-gray-400 text-sm mb-3">Un site vitrine <strong>facile à modifier</strong>. Gardez une autonomie sur le contenu de votre site.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-cyan-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Codico</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">1 400 €<br><span class="price-abo switchmonthly">+ 40 €/mois*</span></p>
                                    <p class="text-gray-400 text-sm mb-3">Un site vitrine complet et <strong>évolutif</strong>. Ajoutez vous-même ce que vous souhaitez.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                                <div class="relative group">
                                <div class="absolute inset-0 bg-cyan-500/5 rounded-lg opacity-0 group-hover:opacity-100 blur-sm transition-opacity"></div>
                                <div class="bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg p-6 relative z-10 h-full group-hover:border-cyan-500/40 transition-all duration-300" style="display:flex;flex-direction:column;justify-content:space-between;">
                                    <div class="absolute top-0 left-0 bg-cyan-600 text-white text-xs px-2 py-1 rounded-br-lg font-semibold switchmonthly">Tranquillité garantie</div>
                                    <h4 class="bold-name text-xl text-white mb-2">Codicoda</h4>
                                    <p class="text-cyan-400 font-semibold mb-2 firstprice">2 000 €<br><span class="price-abo switchmonthly">+ 40 €/mois*</span></p>
                                    <p class="text-gray-400 text-sm mb-3">Une solution haut de gamme, sur mesure et <strong>sans limite</strong>. Toutes vos envies sur votre site.</p>
                                    <button onclick="window.location.href='/offres';" class="px-3 py-2 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300 transform group-hover:scale-105 group-active:scale-95"><span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Détails de l'offre</span></button>
                                </div>
                                </div>
                            </div>
                            <div id="engagement" class="text-center mt-8 max-w-4xl mx-auto text-gray-400 text-sm switchmonthly">
                                    <p style="margin:0;">
                                    <strong>* Engagement initial de 12 mois :</strong> vous pouvez résilier à tout moment. En cas de départ anticipé, des frais de transfert de 150 € s'appliquent. <br>Après les 12 premiers mois, l'abonnement se prolonge sans engagement, et peut être résilié librement avec un préavis de 30 jours. Tarif fixe garanti pour toute la durée de votre abonnement.</p>
                                </div>
                            </div>
        </div>
    </div>
</section>
                    
                    <section id="portfolio" class="min-h-screen flex items-center relative py-20">
                        <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                                <div class="text-center mb-12">
                                    <div class="inline-block mb-3">
                                        <h2 id="sectiontitle" class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Exemples de sites internet réalisés</h2>
                                        <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Les projets</div>
                                    </div>
                                    <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                </div>
                                
                                <div class="grid md:grid-cols-1 gap-6"><!-- A ADAPTER LORS DES NOUVEAUX PROJETS -->
                                    <!--<div class="relative group overflow-hidden rounded-xl project">
                                        <div class="absolute inset-0 bg-gradient-to-br from-indigo-600/80 to-purple-600/80 opacity-0 group-hover:opacity-90 transition-all duration-300 z-10 flex items-center justify-center" >
                                            <div class="text-center p-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                                                <div class="text-xl font-medium text-white mb-2">AI Dashboard</div>
                                                <p class="text-gray-200 mb-4">Site web de yoga coaching.</p>
                                                <button class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded text-white hover:bg-white/30 transition-colors duration-300">View Details</button>
                                            </div>
                                        </div>
                                        <div class="aspect-video bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                                            <div class="text-cyan-400/30 font-medium img-wrapper"><img loading="lazy" src="f"></div>
                                        </div>
                                    </div>-->
                                    
                                    <div class="relative group overflow-hidden rounded-xl project">
                                        <div class="absolute inset-0 bg-gradient-to-br from-cyan-600/80 to-indigo-600/80 opacity-0 group-hover:opacity-90 transition-all duration-300 z-10 flex items-center justify-center" >
                                            <div class="text-center p-4 transform translate-y-8 group-hover:translate-y-0 transition-transform duration-300">
                                                <div class="text-xl font-medium text-white mb-2">jacquespagephotographie.fr</div>
                                                <p class="text-gray-200 mb-4">Gallerie web de photographe.</p>
                                                <a href="https://www.jacquespagephotographie.fr" target="blank"><button class="px-4 py-2 bg-white/20 backdrop-blur-sm rounded text-white hover:bg-white/30 transition-colors duration-300">Visiter</button></a>
                                            </div>
                                        </div>
                                        <div class="aspect-video bg-gradient-to-br from-gray-700 to-gray-900 rounded-xl flex items-center justify-center">
                                            <div class="text-cyan-400/30 font-medium img-wrapper"><img loading="lazy" src="/assets/images/jacquespagephotographie.webp" alt="Page d'accueil du site de Jacques Page"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
            
                    <section id="contact" class="min-h-screen flex items-center relative py-20">
                        <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                                <div class="text-center mb-12">
                                    <div class="inline-block mb-3">
                                    <h2 id="sectiontitle" class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Un projet de site web ? Une question ?</h2>
                                        <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Contact</div>
                                    </div>
                                    <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                </div>
                                
                                <div class="grid md:grid-cols-5 gap-8">                            
                                    <div class="md:col-span-5">
                                        <div class="bg-gray-900/70 backdrop-blur-lg border border-indigo-500/20 p-6 rounded-xl shadow-xl">
                                            <form action="incoming/send" method="post" id="contact" class="contact">
                                                <div class="mb-2">
                                                    <div>
                                                        <label for="email" class="block text-sm text-gray-400 mb-1">Email</label>
                                                        <input type="email" name="email" id="email" class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors">
                                                    </div>
                                                </div>
                                                <div class="mb-4 sr-only">
                                                <label for="name" class="block text-sm text-gray-400 mb-1">name</label>
                                                <input type="text" name="name" id="name" class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outlindee-none focus:ring-1 focus:ring-cyan-500/50 transition-colors">
                                                </div>
                                                <div class="mb-6">
                                                    <label for="subject" class="block text-sm text-gray-400 mb-1">Objet</label>
                                                    <input type="text" name="objet" id="subject" class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors">
                                                </div>
                                                <div class="mb-8">
                                                    <label for="message" class="block text-sm text-gray-400 mb-1">Message</label>
                                                    <textarea id="message" name="message" rows="4" class="w-full bg-gray-800/50 border border-gray-700 focus:border-cyan-500 rounded-lg py-2 px-3 text-white focus:outline-none focus:ring-1 focus:ring-cyan-500/50 transition-colors resize-none"></textarea>
                                                </div>
                                                <div id="turnstile-container" style="display:none; margin-bottom: 1rem;"></div>
                                                <div class="relative group">
                                                    <div class="absolute -inset-0.5 bg-gradient-to-r from-indigo-600/50 to-purple-600/50 rounded-lg blur opacity-75 group-hover:opacity-100 transition-all duration-500"></div>
                                                    <button type="submit" class="w-full px-6 py-3 bg-gradient-to-r from-indigo-900/90 to-purple-900/90 rounded-lg text-white text-base font-medium relative z-10 flex items-center justify-center gap-2 group-hover:from-indigo-800/90 group-hover:to-purple-800/90 transition-all duration-300">
                                                        <span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Envoyer</span>
                                                    </button>
                                                </div>
                                                <div id="messageResult"></div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>    
                    </section>
                </main>        
            </div>
            <footer class="bg-gray-900/70 backdrop-blur-lg border-b border-cyan-500/30 z-50 transition-all duration-300">
                <div class="wrapper mx-auto px-6 py-4 flex items-center justify-between">
                    <ul>
                        <li class="inline-block mr-4"><a href="/legal-notices">Mentions légales</a></li>
                        <li class="inline-block mr-4"><a href="/privacy-policy">Politique de confidentialité</a></li>
                        <li class="inline-block mr-4"><a href="/cgv">Conditions générales de vente</a></li>
                        <li class="inline-block mr-4"><a href="/cgu">Conditions générales d'utilisation</a></li>
                    </ul>
            </footer>
        </body>
    </html>
