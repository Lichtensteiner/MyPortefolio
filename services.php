<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Services - Ludo Consulting</title>
      <link rel="icon" type="image/svg+xml" href="./assets/icones/logoLudo.PNG">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <link rel="shortcut icons" href="./assets/icones/logoLudo.PNG">
</head>
<body>
<style>
:root {
  --primary: #2563eb;
  --secondary: #475569;
  --light: #f8fafc;
  --dark: #1e293b;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}

body {
  background-color: var(--light);
  color: var(--dark);
  line-height: 1.6;
}

header {
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(30, 41, 59, 0.5)), 
              url('/assets/img/Ludo_Consulting.jpg');
  background-size: cover;
  background-position: center;
  color: white;
  padding: 2rem 0;
  text-align: center;
  position: relative;
}


.navbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 1rem 2rem;
  background: white;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  position: sticky;
  top: 0;
  z-index: 100;
}

.nav-container {
  display: flex;
  align-items: center;
  gap: 2rem;
}

.nav-links {
  display: flex;
  gap: 2rem;
  list-style: none;
}

.nav-links a {
  color: var(--dark);
  text-decoration: none;
  font-weight: 500;
  transition: color 0.3s;
}

.nav-links a:hover {
  color: var(--primary);
}

.nav-right {
  display: flex;
  align-items: center;
  gap: 1.5rem;
}

.notification-icon {
  position: relative;
  cursor: pointer;
}

.notification-badge {
  position: absolute;
  top: -5px;
  right: -5px;
  background: red;
  color: white;
  border-radius: 50%;
  padding: 0.25rem 0.5rem;
  font-size: 0.75rem;
}

.login-btn {
  background: var(--primary);
  color: white;
  padding: 0.5rem 1rem;
  border-radius: 4px;
  text-decoration: none;
  transition: background 0.3s;
}

.login-btn:hover {
  background: #1d4ed8;
  color: white;
}

.service-hero {
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(198, 201, 206, 0.5)), 
      url('./assets/img/Ludo_Consulting.jpg');
  background-size: cover;
  background-position: center;
  color: white;
  padding: 10rem 0;
  text-align: center;
  margin-bottom: 4rem;
}

.service-detail {
  padding: 3rem 0;
  border-bottom: 1px solid #eee;
}

.service-detail:last-child {
  border-bottom: none;
}

.feature-list {
  list-style: none;
  padding: 0;
}

.feature-list li {
  padding: 0.5rem 0;
}

.feature-list li i {
  color: var(--primary);
  margin-right: 1rem;
}

.pricing-card {
  background: white;
  border-radius: 8px;
  padding: 2rem;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s;
}

.pricing-card:hover {
  transform: translateY(-10px);
}

.price {
  font-size: 2.5rem;
  font-weight: bold;
  color: var(--primary);
  margin: 1rem 0;
}

.testimonial-card {
  background: white;
  border-radius: 8px;
  padding: 2rem;
  margin: 1rem 0;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
}

.client-info {
  display: flex;
  align-items: center;
  margin-top: 1rem;
}

.client-avatar {
  width: 50px;
  height: 50px;
  border-radius: 50%;
  margin-right: 1rem;
  background-color: var(--primary);
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  font-weight: bold;
}

footer {
  background: var(--dark);
  color: white;
  padding: 4rem 0 2rem;
  margin-top: 4rem;
}

.footer-content {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 2rem;
}

.social-links {
  display: flex;
  gap: 1rem;
  margin-top: 1rem;
}

.social-links a {
  color: white;
  font-size: 1.5rem;
  transition: color 0.3s;
}

.social-links a:hover {
  color: var(--primary);
}

.stats-counter {
  font-size: 2rem;
  font-weight: bold;
  color: var(--primary);
  margin-bottom: 0.5rem;
}

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate {
  animation: fadeIn 1s ease-out;
}



.service-request {
  background: linear-gradient(to right, #f8f9fa, #e9ecef);
}

.service-request h2 {
  font-weight: 700;
  font-family: 'Arial', sans-serif;
}

.service-request form {
  border: 2px solid #ddd;
}

.service-request .form-label i {
  color: #0d6efd;
  margin-right: 5px;
}

.service-request .form-control,
.service-request .form-select {
  border: 1px solid #ced4da;
  border-radius: 5px;
}

.service-request .btn-primary {
  background-color: #0d6efd;
  border: none;
  transition: background-color 0.3s ease;
}

.service-request .btn-primary:hover {
  background-color: #0056b3;
}



</style>
</head><body>
<nav class="navbar">
  <div class="nav-container">
    <img src="./assets/icones/logoLudo.PNG" alt="Ludo Consulting Logo" height="40">
    <ul class="nav-links">
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./service.php">Services</a></li>
      <li><a href="./a propos.php">À Propos</a></li>
      <li><a href="./tutoriels.php">Tutoriels</a></li>
      <li><a href="./evenements.php">Événements</a></li>
      <li><a href="./forum.php">Forum</a></li>
      <li><a href="./blog.php">Blog</a></li>
      <li><a href="./contact.php">Contact</a></li>
    </ul>
  </div>
  <div class="nav-right">
    <div class="notification-icon">
      <i class="fas fa-bell"></i>
      <span class="notification-badge">3</span>
    </div>
    <div id="userSection">
    </div>
  </div>
</nav>

<section class="service-hero animate">
  <div class="container">
    <h1>Nos Services</h1>
    <p class="lead">Des solutions sur mesure pour votre réussite digitale</p>
  </div>
</section>

<section class="container animate">
  <div class="service-detail row align-items-center">
    <div class="col-md-6">
      <h2>Consultation Informatique</h2>
      <p>Notre expertise en consultation informatique vous aide à optimiser vos systèmes et à améliorer votre infrastructure technologique.</p>
      <ul class="feature-list">
        <li><i class="fas fa-check-circle"></i> Audit des systèmes informatiques</li>
        <li><i class="fas fa-check-circle"></i> Optimisation des performances</li>
        <li><i class="fas fa-check-circle"></i> Solutions cloud et hébergement</li>
        <li><i class="fas fa-check-circle"></i> Sécurité informatique</li>
      </ul>
    </div>
    <div class="col-md-6">
      <div class="service-card">
        <i class="fas fa-laptop-code service-icon fa-3x mb-4"></i>
        <h4>Pourquoi nous choisir ?</h4>
        <p>Expertise reconnue et solutions personnalisées pour répondre à vos besoins spécifiques.</p>
      </div>
    </div>
  </div>

  <div class="service-detail row align-items-center">
    <div class="col-md-6 order-md-2">
      <h2>Formation Mobile</h2>
      <p>Formez-vous au développement mobile avec nos cours pratiques et théoriques adaptés à tous les niveaux.</p>
      <ul class="feature-list">
        <li><i class="fas fa-check-circle"></i> Développement iOS (Swift)</li>
        <li><i class="fas fa-check-circle"></i> Développement Android (Kotlin/Java)</li>
        <li><i class="fas fa-check-circle"></i> Applications cross-platform</li>
        <li><i class="fas fa-check-circle"></i> UI/UX Design mobile</li>
      </ul>
    </div>
    <div class="col-md-6 order-md-1">
      <div class="service-card">
        <i class="fas fa-mobile-alt service-icon fa-3x mb-4"></i>
        <h4>Méthode d'apprentissage</h4>
        <p>Approche pratique avec des projets concrets et un suivi personnalisé.</p>
      </div>
    </div>
  </div>

  <div class="service-detail row align-items-center">
    <div class="col-md-6">
      <h2>Formation Web</h2>
      <p>Maîtrisez les technologies web modernes avec nos formations complètes et pratiques.</p>
      <ul class="feature-list">
        <li><i class="fas fa-check-circle"></i> HTML5, CSS3, JavaScript</li>
        <li><i class="fas fa-check-circle"></i> Frameworks modernes (React, Vue.js)</li>
        <li><i class="fas fa-check-circle"></i> Backend Development</li>
        <li><i class="fas fa-check-circle"></i> Base de données</li>
      </ul>
    </div>
    <div class="col-md-6">
      <div class="service-card">
        <i class="fas fa-code service-icon fa-3x mb-4"></i>
        <h4>Programme adapté</h4>
        <p>Formation progressive et adaptée à votre niveau et vos objectifs.</p>
      </div>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Nos Tarifs</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="pricing-card">
        <h3>Basic</h3>
        <div class="price">50.000 FCFA</div>
        <ul class="feature-list">
          <li><i class="fas fa-check"></i> Formation de base</li>
          <li><i class="fas fa-check"></i> Support email</li>
          <li><i class="fas fa-check"></i> Ressources en ligne</li>
        </ul>
        <a href="./login.php" class="btn btn-primary mt-3">Choisir</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pricing-card">
        <h3>Professional</h3>
        <div class="price">150.000 FCFA</div>
        <ul class="feature-list">
          <li><i class="fas fa-check"></i> Formation avancée</li>
          <li><i class="fas fa-check"></i> Support prioritaire</li>
          <li><i class="fas fa-check"></i> Projets pratiques</li>
        </ul>
        <a href="./login.php" class="btn btn-primary mt-3">Choisir</a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="pricing-card">
        <h3>Enterprise</h3>
        <div class="price">Sur mesure</div>
        <ul class="feature-list">
          <li><i class="fas fa-check"></i> Formation personnalisée</li>
          <li><i class="fas fa-check"></i> Support 24/7</li>
          <li><i class="fas fa-check"></i> Consulting dédié</li>
        </ul>
        <a href="#contact" class="btn btn-primary mt-3">Contacter</a>
      </div>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Témoignages</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="testimonial-card">
        <p>"Formation exceptionnelle qui m'a permis de lancer ma carrière dans le développement web."</p>
        <div class="client-info">
          <div class="client-avatar">S</div>
          <div>
            <h5>Stawiskowski</h5>
            <p class="text-muted">Développeur Web</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <p>"Une expertise remarquable en consultation informatique. Recommandé à 100% !"</p>
        <div class="client-info">
          <div class="client-avatar">MZ</div>
          <div>
            <h5>Mve Zogo</h5>
            <p class="text-muted">Chef de Projet IT</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <p>"La formation mobile m'a donné toutes les clés pour développer mes propres applications."</p>
        <div class="client-info">
          <div class="client-avatar">LL</div>
          <div>
            <h5>Ludovic Lichtensteiner</h5>
            <p class="text-muted">Développeur Mobile</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<<section class="service-request py-5">
  <div class="container">
    <h2 class="text-center mb-4 text-dark">Demandez un Devis</h2>
    <form class="p-4 bg-light shadow rounded">
      <div class="mb-3">
        <label for="name" class="form-label">
          <i class="fas fa-user"></i> Nom :
        </label>
        <input type="text" id="name" name="name" class="form-control" placeholder="Entrez votre nom" required>
      </div>
      <div class="mb-3">
        <label for="service" class="form-label">
          <i class="fas fa-briefcase"></i> Service :
        </label>
        <select id="service" name="service" class="form-select">
          <option value="cv">Création de CV</option>
          <option value="logo">Création de Logo</option>
          <option value="presentation">Création de présentation de Projet</option>
          <option value="Site web">Création de logiciel, Site Web et App Mobile</option>
          <option value="formation">Formation en Dev Web</option>
          <option value="formation">Formation en Bureautique</option>
          <option value="installation">Installation de Logiciels</option>
          <option value="pact office">Installation du Pack Office</option>
          <option value="redaction">Rédaction de lettre et motivation et demande d'emploi</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="message" class="form-label">
          <i class="fas fa-pencil-alt"></i> Description :
        </label>
        <textarea id="message" name="message" rows="4" class="form-control" placeholder="Décrivez vos besoins"></textarea>
      </div>
      <div class="text-center">
        <button type="submit" class="btn btn-primary px-4">
          <i class="fas fa-paper-plane"></i> Envoyer
        </button>
      </div>
    </form>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Nos Chiffres Clés</h2>
  <div class="row text-center">
    <div class="col-md-3 mb-4">
      <div class="stats-counter" data-target="500">0</div>
      <p>Clients Satisfaits</p>
    </div>
    <div class="col-md-3 mb-4">
      <div class="stats-counter" data-target="50">0</div>
      <p>Experts Formateurs</p>
    </div>
    <div class="col-md-3 mb-4">
      <div class="stats-counter" data-target="1000">0</div>
      <p>Projets Réalisés</p>
    </div>
    <div class="col-md-3 mb-4">
      <div class="stats-counter" data-target="15">0</div>
      <p>Années d'Expérience</p>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Nos Partenaires</h2>
  <div class="row align-items-center text-center">
    <div class="col-md-3 mb-4">
      <i class="fab fa-microsoft fa-4x text-primary mb-3"></i>
      <h5>Microsoft</h5>
    </div>
    <div class="col-md-3 mb-4">
      <i class="fab fa-aws fa-4x text-primary mb-3"></i>
      <h5>Amazon Web Services</h5>
    </div>
    <div class="col-md-3 mb-4">
      <i class="fab fa-google fa-4x text-primary mb-3"></i>
      <h5>Google Cloud</h5>
    </div>
    <div class="col-md-3 mb-4">
      <i class="fab fa-apple fa-4x text-primary mb-3"></i>
      <h5>Apple</h5>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Questions Fréquentes</h2>
  <div class="accordion" id="faqAccordion">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
          Quelle est la durée moyenne des formations ?
        </button>
      </h2>
      <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Nos formations durent généralement entre 2 et 6 mois, selon le niveau et le programme choisi.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
          Les formations sont-elles certifiantes ?
        </button>
      </h2>
      <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Oui, toutes nos formations sont certifiantes et reconnues internationalement.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
          Proposez-vous des formations à distance ?
        </button>
      </h2>
      <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
        <div class="accordion-body">
          Oui, nous proposons des formations en présentiel et à distance pour plus de flexibilité.
        </div>
      </div>
    </div>
  </div>
</section>

<footer>
  <div class="footer-content">
    <div>
      <h3>Ludo_Consulting</h3>
      <p>Expert en solutions digitales et formation professionnelle</p>
      <div class="social-links">
        <a href="http://www.linkedin.com/comm/mynetwork/discovery-see-all?usecase=PEOPLE_FOLLOWS&followMember=ludo-consulting-97ba30334"><i class="fab fa-linkedin"></i></a>
        <a href="https://github.com/Lichtensteiner"><i class="fab fa-github"></i></a>
        <a href="https://www.tiktok.com/@lichtensteiner10"><i class="fab fa-tiktok"></i></a>
        <a href="https://www.facebook.com/?ref=homescreenpwa"><i class="fab fa-facebook"></i></a>
        <a href="https://whatsapp.com/biz/"><i class="fab fa-whatsapp"></i></a>
        <a href="https://www.instagram.com/invites/contact/?igsh=1lq984andrir5&utm_content=wk79uyy"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div>
      <h4>Contact</h4>
      <p><i class="fas fa-envelope me-2"></i> ludo.consulting3@gmail.com</p>
      <p><i class="fas fa-phone me-2"></i> +241 062 64 11 20 / 077 02 23 06</p>
      <p><i class="fas fa-map-marker-alt me-2"></i> Libreville, Gabon</p>
    </div>
    <div>
      <h4>Newsletter</h4>
      <p>Restez informé de nos dernières actualités</p>
      <form class="mt-3">
        <div class="input-group">
          <input type="email" class="form-control" placeholder="Votre email">
          <button class="btn btn-primary">S'abonner</button>
        </div>
      </form>
    </div>
  </div>
  <div class="text-center mt-4">
    <p>&copy; 2024 Ludo_Consulting. Tous droits réservés.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
  const userSection = document.getElementById('userSection');
  let isLoggedIn = localStorage.getItem('isLoggedIn') === 'true';

  function updateUserSection() {
    if (isLoggedIn) {
      userSection.innerHTML = `
        <div class="user-menu">
          <button class="login-btn" onclick="toggleDropdown()">
            <i class="fas fa-user"></i> Mon Compte
          </button>
          <div class="dropdown-menu" id="userDropdown">
            <a href="#profile"><i class="fas fa-user-circle"></i> Profile</a>
            <a href="#settings"><i class="fas fa-cog"></i> Paramètres</a>
            <a href="#" onclick="logout()"><i class="fas fa-sign-out-alt"></i> Déconnexion</a>
          </div>
        </div>
      `;
    } else {
      userSection.innerHTML = `
        <a href="https://ludoconsulting.com/login" class="login-btn">
          <i class="fas fa-sign-in-alt"></i> Connexion
        </a>
      `;
    }
  }

  function toggleDropdown() {
    const dropdown = document.getElementById('userDropdown');
    dropdown.classList.toggle('active');
  }

  function logout() {
    localStorage.setItem('isLoggedIn', 'false');
    isLoggedIn = false;
    updateUserSection();
    window.location.href = 'https://ludoconsulting.com/login';
  }

  // Close dropdown when clicking outside
  document.addEventListener('click', function(event) {
    if (!event.target.closest('.user-menu')) {
      const dropdown = document.getElementById('userDropdown');
      if (dropdown) {
        dropdown.classList.remove('active');
      }
    }
  });

  updateUserSection();
  
  // Notification click handler
  document.querySelector('.notification-icon').addEventListener('click', function() {
    alert('Notifications: \n- Nouveau message\n- Mise à jour disponible\n- Nouvel événement');
  });

  // Counter Animation
  function animateCounter(element) {
    const target = parseInt(element.getAttribute('data-target'));
    const duration = 20; // 2 seconds
    const step = target / (duration / 6); // 60fps
    let current = 0;
    
    const timer = setInterval(() => {
      current += step;
      if (current >= target) {
        element.textContent = target;
        clearInterval(timer);
      } else {
        element.textContent = Math.floor(current);
      }
    }, 16);
  }

  // Intersection Observer for counter animation
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const counters = entry.target.querySelectorAll('.stats-counter');
        counters.forEach(counter => animateCounter(counter));
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  // Observe the statistics section
  document.querySelector('.stats-counter').parentElement.parentElement.parentElement.parentElement.parentElement
    .querySelectorAll('.stats-counter').forEach(counter => {
      observer.observe(counter.parentElement.parentElement.parentElement.parentElement);
    });
});


// chiffre statistique données automatique 

// chat auto



  document.addEventListener("DOMContentLoaded", () => {
    const counters = document.querySelectorAll(".stats-counter");

    counters.forEach(counter => {
      const target = +counter.getAttribute("data-target"); // Convertit la valeur en nombre
      const increment = Math.ceil(target / 5); // Détermine l'incrément

      const updateCounter = () => {
        const current = +counter.innerText; // Récupère la valeur actuelle

        if (current < target) {
          counter.innerText = current + increment; // Ajoute l'incrément
          setTimeout(updateCounter, 5); // Répète après un délai
        } else {
          counter.innerText = target; // Assure que la cible finale est atteinte
        }
      };

      updateCounter(); // Démarre l'animation
    });
  });

</script>
</body>
</html>