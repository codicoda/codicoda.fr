<?php 
$title = "Offres de création de site internet | Codicoda";
$desc  = "Choisissez l’offre adaptée à vos besoins : site vitrine, e-commerce, maintenance et hébergement inclus. Codicoda conçoit des solutions évolutives.";
include '../includes/header.php'; ?>
<section class="offres" style="padding-top:calc(var(--vh) * 20")>
    <div class="wrapper mx-auto px-6" style="max-width: 95vw;">
                            <div class="mx-auto">
                            <div class="text-center mb-12">
                                <div class="inline-block mb-3">
                                <h2 id="sectiontitle" class="text-xs text-cyan-400 tracking-widest uppercase mb-1">Combien coûte un site internet professionnel ?</h2>
                                <div class="text-4xl md:text-5xl font-bold bg-gradient-to-r from-indigo-400 to-purple-400 bg-clip-text text-transparent">Des packs clairs & flexibles</div>
                                </div>
                                <div class="w-20 h-1 bg-gradient-to-r from-cyan-500 to-indigo-500 mx-auto"></div>
    <div class="offres-page bg-gradient-to-br from-gray-900 to-gray-950 border border-cyan-500/20 rounded-lg relative z-10 group-hover:border-cyan-500/40 transition-all duration-300 p-8 mx-auto my-12" style="padding: 2em;margin:1em 0 1em 0;max-width: 95vw;">
        <div class="flex justify-center mb-8 space-x-4" style="flex-direction: column">
            <div style="display: flex; justify-content: center;">
                <div class="btn-container" style="text-align: center;">
                    <button id="btn-mensuel" class="tab-btn px-4 py-2 border-gray-600 text-gray-300 rounded hover:bg-gray-700/40 transition active-tab">
                    Achetez votre site
                    </button>
                    <button id="btn-loc" class="tab-btn px-4 py-2 border-gray-600 text-gray-300 rounded hover:bg-gray-700/40 transition">
                    Louez votre site
                    </button>
                </div>
            </div>
            <div class="toggler">
                <div id="divtog">
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
                </div>
                    <p id="texteoffres" style="margin: 0 0 0 2em;">Le service d'hébergement & maintenance est une option facultative à 40 €/mois.*</p>
                </div>
        </div>
        <table id ="onebuy" class="tableau comptant hide">
            <thead>
                <tr>
                    <th></th>
                    <th>Coco</th>
                    <th>Codi</th>
                    <th>Codico</th>
                    <th>Codicoda</th>
                </tr>
                <tr>
                    <th class="text-gray-300"><strong>Coût de développement :</strong></th>
                    <th>600 €</th>
                    <th>900 €</th>
                    <th>1400 €</th>
                    <th>2000 €</th>
                </tr>
                <tr>
                    <th class="text-gray-300"><strong>Mensualités pour l'infogérance :</strong></th>
                    <th colspan=4>0 €</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-gray-400">Landing page</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Jusqu'à 5 pages (accueil, à propos, services...)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Jusqu'à 10 pages</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Nombre de pages illimité</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Formulaire de contact</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Formulaire de contact enrichi (champs personnalisés, antibot)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Version mobile responsive</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design simple adapté à votre activité</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design personnalisé à partir d'un template modifié</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design sur mesure en fonction de votre image</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design 100 % sur-mesure/complexe (animations...)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Interface simple pour changer vous-même les contenus de vos pages existantes</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Interface pour créer facilement de nouveaux contenus (nouvelles pages, sections, etc.)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Formation à l'utilisation</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Travail sur le référencement</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Fonctionnalités spécifiques</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Hébergement optimisé & support personnalisé</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td colspan=5 class="text-gray-300"><strong>Infogérance de l'hébergement</strong></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Site sécurisé (HTTPS)</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Adresse mail professionnelle</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Surveillance du domaine et du certificat SSL</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Gestion DNS, mails & support technique</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Mises à jour de sécurité</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Antibot avancé</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Reverse-proxy pour un site plus rapide et mieux protégé</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Mise en place de pare-feu web</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Sauvegardes automatiques</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Optimisation référencement avancée & performance</td>
                    <td colspan=4><i class="fa-solid fa-xmark text-red-500"></i></td>
                </tr>
            </tbody>
        </table>
        <table id ="monthly" class="tableau mensuel">
            <thead>
                <tr>
                    <th></th>
                    <th>Coco</th>
                    <th>Codi</th>
                    <th>Codico</th>
                    <th>Codicoda</th>
                </tr>
                <tr>
                    <th class="text-gray-300"><strong id="coutsname">Coût de développement :</strong></th>
                    <th id="coutscoco">600 €</th>
                    <th id="coutscodi">900 €</th>
                    <th id="coutscodico">1400 €</th>
                    <th id="coutscodicoda">2000 €</th>
                </tr>
                <tr>
                    <th class="text-gray-300"><strong>Mensualités pour l'infogérance :</strong></th>
                    <th colspan=4 id="mensualites">40 €</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-gray-400">Landing page</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Jusqu'à 5 pages (accueil, à propos, services...)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Jusqu'à 10 pages</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Nombre de pages illimité</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Formulaire de contact</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Formulaire de contact enrichi (champs personnalisés, antibot)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Version mobile responsive</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design simple adapté à votre activité</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design personnalisé à partir d'un template modifié</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design sur mesure en fonction de votre image</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Design 100 % sur-mesure/complexe (animations...)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Interface simple pour changer vous-même les contenus de vos pages existantes</td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Interface pour créer facilement de nouveaux contenus (nouvelles pages, sections, etc.)</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Formation à l'utilisation</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Travail sur le référencement</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Fonctionnalités spécifiques</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Hébergement optimisé & support personnalisé</td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-xmark text-red-500"></i></td>
                    <td><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td colspan=5 class="text-gray-300"><strong>Infogérance de l'hébergement</strong></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Site sécurisé (HTTPS)</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Adresse mail professionnelle</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Surveillance du domaine et du certificat SSL</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Gestion DNS, mails & support technique</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Mises à jour de sécurité</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Antibot avancé</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Reverse-proxy pour un site plus rapide et mieux protégé</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Mise en place de pare-feu web</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Sauvegardes automatiques</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
                <tr>
                    <td class="text-gray-400">Optimisation référencement avancée & performance</td>
                    <td colspan=4><i class="fa-solid fa-check text-green-600"></i></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="engagement" class="text-center mt-8 max-w-4xl mx-auto text-gray-400 text-sm" style="margin-bottom: 2em;">
                                    <p class="mb-2">
                                    <strong>* Engagement initial de 12 mois :</strong> vous pouvez résilier à tout moment. En cas de départ anticipé, des frais de transfert de 150 € s'appliquent. <br>Après les 12 premiers mois, l'abonnement se prolonge sans engagement, et peut être résilié librement avec un préavis de 30 jours.</p>
                                </div>
</section>
<?php include '../includes/footer.php'; ?>
