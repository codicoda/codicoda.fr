// Code spécifique à la page d'accueil (index.php)
document.addEventListener('DOMContentLoaded', () => {
  const navLinks = document.querySelectorAll('.nav-link');
  const sections = document.querySelectorAll('section');
  const root = document.documentElement;
  const marqueeContent = document.querySelector("ul.marquee-content");
  const timelines = document.querySelectorAll('.main-timeline4 .timeline');

// Marquee
if (marqueeContent) {
  const marqueeElementsDisplayed = parseInt(
    getComputedStyle(root).getPropertyValue("--marquee-elements-displayed"),
    10
  );
  
  // Sélection de tous les éléments enfants
  const originalItems = Array.from(marqueeContent.children);
  const marqueeItems = originalItems; // <- ici on prend toute la liste

  // Clonage pour rendre la boucle infinie
  marqueeItems.forEach(item => {
    marqueeContent.appendChild(item.cloneNode(true));
  });

  const totalElements = marqueeContent.children.length;
  root.style.setProperty("--marquee-elements", totalElements);
}



  navLinks.forEach(link => {
    link.addEventListener('click', (e) => {
      const href = link.getAttribute('href');
      // Ne pas intercepter les liens absolus (commencent par /)
      if (!href || href[0] !== '#') return;
      e.preventDefault();
      const targetSection = document.querySelector(href);
      if (targetSection) {
        const offsetTop = targetSection.offsetTop - 70;
        window.scrollTo({
          top: offsetTop,
          behavior: 'smooth'
        });
        targetSection.classList.add('section-highlight');
        setTimeout(() => {
          targetSection.classList.remove('section-highlight');
        }, 1000);
      }
    });
  });

  function highlightCurrentSection() {
    let current = '';
    sections.forEach(section => {
      const sectionTop = section.offsetTop - 100;
      const sectionHeight = section.offsetHeight;
      if (window.scrollY >= sectionTop && window.scrollY < sectionTop + sectionHeight) {
        current = section.getAttribute('id');
      }
    });
    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');
    mobileNavLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href') === `#${current}`) {
        link.classList.add('active');
      }
    });
  }

  window.addEventListener('scroll', highlightCurrentSection);
  highlightCurrentSection();

  // Intersection Observer pour les sections
  if (sections.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('section-visible');
        }
      });
    }, { threshold: 0.1 });
    sections.forEach(section => {
      section.classList.add('section-hidden');
      observer.observe(section);
    });
  }

  // Animation texte #write
  const text = document.querySelector("#write"),
    arrayText = ["votre projet géré de A à Z."];
  let motSplit = [],
    delay = 7;
  if (text) {
    for (let i = 0; i < arrayText.length; i++) {
      motSplit.push(arrayText[i].split(''));
    }
    for (let i = 0; i < motSplit.length; i++) {
      for (let j = 0; j < motSplit[i].length; j++) {
        setTimeout(() => { text.innerHTML += (motSplit[i][j]) }, (100 * delay));
        j === (motSplit[i].length - 1) ? delay += 5 : delay++;
      }
    }
  }

  // Animation header
  setTimeout(() => {
    const headerText = document.querySelector('.text-6xl');
    if (headerText) {
      headerText.style.opacity = 1;
      headerText.style.transform = 'translateY(0)';
    }
  }, 300);

  // Timeline
  function updateTimelineOpacity() {
    let found = false;
    const center = window.innerHeight / 2;
    timelines.forEach((timeline) => {
      const rect = timeline.getBoundingClientRect();
      const inView = rect.top < center && rect.bottom > center;
      if (inView && !found) {
        timeline.classList.add('active-timeline');
        found = true;
      } else if (rect.top + rect.height / 2 <= 0) {
        timeline.classList.remove('active-timeline');
      } else if (rect.top + rect.height / 2 >= window.innerHeight) {
        timeline.classList.remove('active-timeline');
      }
    });
  }
  window.addEventListener('scroll', updateTimelineOpacity);
  updateTimelineOpacity();
  
//Portfolio
  function isTouchDevice() {
    return (
      'ontouchstart' in window ||
      navigator.maxTouchPoints > 0 ||
      window.matchMedia('(pointer: coarse)').matches
    );
  }
  const projects = document.querySelectorAll('.project');
  projects.forEach(project => {
    const overlay = project.querySelector('div.absolute');
    if (!overlay) return;
    project.addEventListener('click', function (e) {
      if (!isTouchDevice()) return;
      if (e.target.closest('a, button')) return;
      if (overlay.classList.contains('opacity-0')) {
        overlay.classList.remove('opacity-0');
        overlay.classList.add('opacity-90');
      } else {
        overlay.classList.remove('opacity-90');
        overlay.classList.add('opacity-0');
      }
    });
    document.addEventListener('click', function (event) {
      if (!isTouchDevice()) return;
      if (!project.contains(event.target)) {
        overlay.classList.remove('opacity-90');
        overlay.classList.add('opacity-0');
      }
    });
  });
});
