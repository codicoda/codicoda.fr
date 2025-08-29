<?php
$defaultTitle = "Développeur web freelance | Création & refonte de sites internet | Codicoda";
$defaultDesc  = "Développeur web freelance spécialisé dans la création et la refonte de sites internet professionnels. Maintenance, SEO et hébergement inclus. Codicoda accompagne artisans, indépendants et PME.";

$title = $title ?? $defaultTitle;
$desc  = $desc  ?? $defaultDesc;

function e(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

$reqUri = $_SERVER['REQUEST_URI'] ?? '/';
$scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
$host   = $_SERVER['HTTP_HOST'] ?? 'codicoda.fr';
$absUrl = $scheme . '://' . $host . $reqUri;

$ogImage = $ogImage ?? ($scheme . '://' . $host . '/fav.ico');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <title><?= e($title) ?></title>
  <meta name="description" content="<?= e($desc) ?>">
  <link rel="canonical" href="<?= e($absUrl) ?>">

  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e($title) ?>">
  <meta property="og:description" content="<?= e($desc) ?>">
  <meta property="og:url" content="<?= e($absUrl) ?>">
  <meta property="og:image" content="<?= e($ogImage) ?>">

  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= e($title) ?>">
  <meta name="twitter:description" content="<?= e($desc) ?>">
  <meta name="twitter:image" content="<?= e($ogImage) ?>">

  <meta name="google-site-verification" content="9g5ui2VcM5hBHnIR6fXZsjKghXmcUkVOSa83h1PB0RQ"/>

  <link rel="icon" href="/fav.ico" type="image/x-icon">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300..700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="/assets/css/style.tailwind.min.css">
  <link rel="stylesheet" href="/assets/css/style.min.css">

  <link rel="preload" href="/assets/js/common.js" as="script">
  <script src="/assets/js/common.js" defer></script>

  <link rel="preconnect" href="https://kit.fontawesome.com" crossorigin>
  <script src="https://kit.fontawesome.com/d086639e0f.js" crossorigin="anonymous" defer></script>

  <?php
  if (!empty($head_extra)) { echo $head_extra; }
  ?>
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
                                <a href="/#about" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">A propos</a>
                                <a href="/#services" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Services</a>
                                <a href="/#timeline" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Étapes</a>
                                <a href="/#tarifs" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Tarifs</a>
                                <a href="/#portfolio" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Portfolio</a>
                                <a href="/#contact" class="nav-link text-gray-300 hover:text-cyan-400 py-2 rounded-md transition-colors duration-200">Contact</a>
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
                            <div class="pt-2 pb-4 space-y-1">
                                <a href="/#about" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">A propos</a>
                                <a href="/#services" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Services</a>
                                <a href="/#timeline" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Étapes</a>
                                <a href="/#tarifs" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Tarifs</a>
                                <a href="/#portfolio" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Portfolio</a>
                                <a href="/#contact" class="mobile-nav-link block text-gray-300 hover:text-cyan-400 hover:bg-gray-800/50 rounded-md transition-colors duration-200">Contact</a>
                                <div class="px-4 pt-2 mt-8">
                                    <a href="https://calendly.com/codicoda/rendez-vous" target="blank" style="text-decoration: none;"><button class="contact-btn w-full px-4 py-3 bg-gradient-to-r from-indigo-700 to-purple-700 rounded-lg text-white text-sm font-medium flex items-center justify-center gap-2 hover:from-indigo-600 hover:to-purple-600 transition-all duration-300">
                                        <span class="bg-gradient-to-r from-cyan-300 to-indigo-300 bg-clip-text text-transparent">Prenons rendez-vous !</span>
                                    </button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>