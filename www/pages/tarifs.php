<?php 
$title = "Tarifs site internet professionnel | Codicoda";
$desc  = "Découvrez des packs clairs pour la création et la maintenance de sites internet professionnels. Solutions flexibles adaptées à tous budgets.";
include '../includes/header.php'; ?>
<section id="tarifs" class="min-h-screen flex items-center relative py-20" style="padding-top:calc(var(--vh) * 20);">
                        <div class="wrapper mx-auto px-6">
                            <div class="max-w-5xl mx-auto">
                            <div class="text-center mb-12">
                                <div class="inline-block mb-3">
                                <h2 id="sectiontitle" class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Combien coûte un site internet professionnel ?</h2>
                                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Des packs clairs & flexibles</div>
                                </div>
                                <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
                                <p class="text-gray-300 mt-8 text-center max-w-3xl mx-auto" style="margin: 3rem 0 3rem 0;">Nos offres sont souples : <a href="/#contact" class="underline text-white hover:text-gray-100 transition-colors">échangeons ensemble</a> pour construire une solution sur mesure, même au-delà des formules proposées. Toutes les offres sont modulables : options ajoutables ou supprimables selon vos besoins.
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
                                        <div style="font-size:1.5em;max-width:505px">
                                     <strong>Complet, simple, sans engagement. <i class="fa-regular fa-circle-check" style="color:var(--color-green-600);"></i></strong><br><br><p style="font-size:0.8em;margin:0;"><i class="fa-solid fa-parachute-box"></i> Ne payez que pour l'usage du site. Tout est inclus, sans surprise. Un tarif fixe garanti pour toute la durée de votre abonnement. En cas de résiliation, l'accès est simplement désactivé. <br><strong> Idéal pour démarrer à petit prix.</strong></p>
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
                                    <div style="font-size:1.5em;max-width:505px">
                                        <strong>Vous êtes propriétaire du site. <i class="fa-solid fa-key" style="color:#c9bd16"></i></strong><br><br> <div id="maintenance" style="font-size:0.8em;">
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
<?php include '../includes/footer.php'; ?>
