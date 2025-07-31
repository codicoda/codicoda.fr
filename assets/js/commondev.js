window.addEventListener('load', function () {
  document.body.classList.add('loaded');
});

document.addEventListener('touchstart', () => {}, true);

function setInitialVH() {
  const vh = window.innerHeight * 0.01;
  document.documentElement.style.setProperty('--vh', `${vh}px`);
}

document.addEventListener('DOMContentLoaded', () => {
  setInitialVH();
  const navbar = document.getElementById('navbar');
  const mobileMenuButton = document.getElementById('mobile-menu-button');
  const mobileMenu = document.getElementById('mobile-menu');
  const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
  const btnMensuel = document.getElementById("btn-mensuel");
  const btnLoc = document.getElementById("btn-loc");
  const gridMensuel = document.getElementById("mensuel");
  const gridLoc = document.getElementById("loc");
  const explainMensuel = document.getElementById('explain-mensuel');
  const explainLoc = document.getElementById('explain-loc');
  const offersTitle = document.getElementById('offers-title');
  const tableauComptant = document.getElementById("onebuy");
  const tableauMensuel = document.getElementById("monthly");
  const engag = document.getElementById("engagement");
  const toggler = document.getElementById('toggler-1');
  const switchMonthlyElements = document.querySelectorAll('.switchmonthly');
  const maintenance = document.getElementById('maintenance');
  const label = document.querySelector('label[for="toggler-1"]');
  const divToggler = document.getElementById('divtog');
  const mensualites = document.getElementById('mensualites');
  const coutsCoco = document.getElementById('coutscoco');
  const coutsCodi = document.getElementById('coutscodi');
  const coutsCodico = document.getElementById('coutscodico');
  const coutsCodicoda = document.getElementById('coutscodicoda');
  const coutsname = document.getElementById('coutsname');
  const textOffres = document.getElementById('texteoffres');


    btnMensuel.addEventListener("click", () => {
    toggler.checked = true; 
    label.classList.add('glow-green');
    btnMensuel.classList.add("active-tab");
    btnLoc.classList.remove("active-tab");
    if (tableauComptant) {
      tableauComptant.classList.add("hide");
      tableauMensuel.classList.remove("hide");
      toggler.checked = true;
      divToggler.classList.remove("hide");
      mensualites.textContent = "40 €";
      textOffres.textContent = "Le service d'hébergement & maintenance est une option facultative à 40 €/mois.*";
      textOffres.style.margin="0 0 0 2em";
      textOffres.style.fontSize="1rem";
      textOffres.style.color="inherit";
      engag.classList.remove("hide");
      coutsCoco.textContent = "600 €";
    coutsCodi.textContent = "900 €";
    coutsCodico.textContent = "1400 €";
    coutsCodicoda.textContent = "2000 €";
      }
    if (gridMensuel) {
    maintenance.innerHTML = "<i class='fa-solid fa-shield-halved'></i> Confiez toute la partie technique ! Un site <strong>livré clé en main</strong>, avec hébergement, mises à jour et maintenance inclus.<br><strong>Un seul interlocuteur pour tout gérer, en toute simplicité.</strong>";
    gridMensuel.classList.remove("hide");
    gridLoc.classList.add("hide");
    explainMensuel.classList.remove("hide");
    explainLoc.classList.add("hide");
    offersTitle.textContent = "Développement Web et Maintenance";
    offersTitle.className = "text-cyan-400";
    engag.classList.remove("hide");
    }
  });

  btnLoc.addEventListener("click", () => { 
    btnMensuel.classList.remove("active-tab");
    btnLoc.classList.add("active-tab");
    if (tableauComptant) {
    tableauComptant.classList.add("hide");
    tableauMensuel.classList.remove("hide");
    toggler.checked = true;
    divToggler.classList.add("hide");
    mensualites.textContent = "Inclus";
    coutsname.textContent = "Abonnement tout compris";
    coutsCoco.textContent = " 60 € ";
    coutsCodi.textContent = " 90 € ";
    coutsCodico.textContent = " 140 € ";
    coutsCodicoda.textContent = " 200 € ";
    textOffres.textContent = "Infogérance incluse, un choix complet et sans engagement.";
    textOffres.style.margin="0";
    textOffres.style.fontSize="1.72rem";
    textOffres.style.color="var(--color-indigo-400)";
    engag.classList.add("hide");
    }
    if (gridMensuel) {
    gridMensuel.classList.add("hide");
    gridLoc.classList.remove("hide");
    explainMensuel.classList.add("hide");
    explainLoc.classList.remove("hide");
    offersTitle.textContent = "Location tout compris";
    offersTitle.className = "text-indigo-400";
    switchMonthlyElements.forEach(el => el.classList.remove('masked'));
    engag.classList.add("hide");
  }
  });

  if (mobileMenuButton && mobileMenu) {
    mobileMenuButton.addEventListener('click', () => {
      mobileMenuButton.classList.toggle('active');
      if (mobileMenu.classList.contains('open')) {
        mobileMenu.style.height = '0';
        mobileMenu.classList.remove('open');
      } else {
        mobileMenu.classList.add('open');
        mobileMenu.style.height = `${mobileMenu.scrollHeight}px`;
      }
    });
  }

  mobileNavLinks.forEach(link => {
    link.addEventListener('click', () => {
      if (mobileMenuButton) mobileMenuButton.classList.remove('active');
      if (mobileMenu) {
        mobileMenu.style.height = '0';
        mobileMenu.classList.remove('open');
      }
    });
  });

  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  }

  
  function updateSwitchMonthly() {
    if (toggler.checked) {
      switchMonthlyElements.forEach(el => el.classList.remove('masked'));
      if (tableauComptant) {
      tableauComptant.classList.add("hide");
      tableauMensuel.classList.remove("hide");
      engag.style.textDecoration="none";
      }
      if (maintenance) {
      maintenance.innerHTML = "<i class='fa-solid fa-shield-halved'></i> Confiez toute la partie technique ! Un site <strong>livré clé en main</strong>, avec hébergement, mises à jour et maintenance inclus.<br><strong>Un seul interlocuteur pour tout gérer, en toute simplicité.</strong>";
      offersTitle.textContent = "Développement Web et Maintenance";
      }

    } else {
      switchMonthlyElements.forEach(el => el.classList.add('masked'));
      if (tableauComptant) {
      tableauComptant.classList.remove("hide");
      tableauMensuel.classList.add("hide");
      engag.style.textDecoration="line-through";
      }
      if (maintenance) {
      maintenance.innerHTML = "<i class='fa-solid fa-gamepad'></i> Prenez le contrôle : nous vous remettons le code source de votre site, vous gérez hébergement et maintenance.<br><strong>Idéal si vous avez des compétences techniques ou un partenaire dédié.</strong>";
      offersTitle.textContent = "Développement Web";
      }
    }
  }
  if (toggler) {
    toggler.addEventListener('change', updateSwitchMonthly);
    updateSwitchMonthly();
  }

  function updateTogglerGlow() {
    if (!toggler) return;
    if (!label) return;
    label.classList.remove('glow-green', 'glow-red');
    if (toggler.checked) {
      label.classList.add('glow-green');
    } else {
      label.classList.add('glow-red');
    }
  }
  if (toggler) {
    toggler.addEventListener('change', updateTogglerGlow);
    updateTogglerGlow();
  }

  const toggletipButtons = document.querySelectorAll('.toggletip-button');
  const allTips = document.querySelectorAll('.toggletip');

  toggletipButtons.forEach(btn => {
    btn.addEventListener('click', function(event) {
      event.stopPropagation();
      let tip = btn.nextElementSibling;
      if (!tip || !tip.classList.contains('toggletip')) {
        tip = btn.parentElement.querySelector('.toggletip');
      }
      allTips.forEach(t => { if (t !== tip) t.classList.remove('show'); });
      if (tip) tip.classList.toggle('show');
    });
  });

  document.addEventListener('click', function(event) {
    allTips.forEach(tip => {
      if (tip.classList.contains('show')) {
        if (!tip.contains(event.target) && !event.target.classList.contains('toggletip-button')) {
          tip.classList.remove('show');
        }
      }
    });
  });
});
