<?php 
$title = "Portfolio développeur web freelance | Codicoda";
$desc  = "Découvrez des exemples de sites internet réalisés par Codicoda : projets sur mesure pour photographes, artisans, indépendants et PME.";
include '../includes/header.php'; ?>
<section id="portfolio" class="min-h-screen flex items-center relative py-20" style="padding-top:calc(var(--vh) * 20);">
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
<?php include '../includes/footer.php'; ?>
