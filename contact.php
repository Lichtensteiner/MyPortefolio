<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - Ludo Consulting</title>
  <link rel="icon" type="image/svg+xml" href="/assets/icones/logoLudo.PNG">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="shortcut icon" href="./assets/icones/logoLudo.PNG">
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

.header {
  background: linear-gradient(rgba(37, 99, 235, 0.9), rgba(30, 41, 59, 0.9)), 
              url('./assets/img/Ludo_Consulting.jpg');
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

.contact-hero {
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(198, 201, 206, 0.5)), 
      url('./assets/img/Ludo_Consulting.jpg');
  background-size: cover;
  background-position: center;
  color: white;
  padding: 10rem 0;
  text-align: center;
  margin-bottom: 4rem;
}

.contact-stats {
  padding: 5rem 0;
}

.stat-card {
  background: white;
  padding: 2rem;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}

.stat-card:hover {
  transform: translateY(-5px);
}

.contact-channels {
  padding: 5rem 0;
}

.contact-method-card {
  background: white;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  transition: transform 0.3s;
  height: 100%;
}

.contact-method-card:hover {
  transform: translateY(-5px);
}

.icon-circle {
  width: 80px;
  height: 80px;
  background: var(--light);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 auto;
  color: var(--primary);
}

.faq-section {
  padding: 5rem 0;
}

.accordion-button:not(.collapsed) {
  background-color: var(--light);
  color: var(--primary);
}

.counter {
  font-size: 2.5rem;
  font-weight: bold;
  color: var(--primary);
}

.team-section {
  padding: 4rem 0;
}

.executive-card {
  background: white;
  border-radius: 12px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  padding: 2rem;
  margin-bottom: 2rem;
  transition: transform 0.3s;
}

.executive-card:hover {
  transform: translateY(-5px);
}

.executive-image {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 1rem;
}

.staff-card {
  background: white;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  padding: 1.5rem;
  margin-bottom: 1.5rem;
  transition: transform 0.3s;
}

.staff-card:hover {
  transform: translateY(-3px);
}

.staff-image {
  width: 120px;
  height: 120px;
  border-radius: 50%;
  object-fit: cover;
  margin-bottom: 1rem;
}

.contact-info {
  font-size: 0.9rem;
  color: var(--secondary);
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

@keyframes fadeIn {
  from { opacity: 0; transform: translateY(20px); }
  to { opacity: 1; transform: translateY(0); }
}

.animate {
  animation: fadeIn 1s ease-out;
}
</style>
</head><body>
<nav class="navbar">
  <div class="nav-container">
    <img src="./assets/icones/logoLudo.PNG" alt="Ludo Consulting Logo" height="40">
    <ul class="nav-links">
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./services.php">Services</a></li>
      <li><a href="./a propos.php">À Propos-Vous</a></li>
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
      <!-- This will be populated by JavaScript -->
    </div>
  </div>
</nav>

<section class="contact-hero animate">
  <div class="container">
    <h1>Notre Équipe</h1>
    <p class="lead">Découvrez les personnes qui font de Ludo Consulting une entreprise exceptionnelle</p>
  </div>
</section>

<section class="contact-stats container py-5 animate">
  <div class="row text-center">
    <div class="col-md-3">
      <div class="stat-card">
        <i class="fas fa-users fa-3x text-primary mb-3"></i>
        <h3 class="counter">7+</h3>
        <p>Employés Dévoués</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">
        <i class="fas fa-project-diagram fa-3x text-primary mb-3"></i>
        <h3 class="counter">10+</h3>
        <p>Projets Réalisés</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">
        <i class="fas fa-globe-africa fa-3x text-primary mb-3"></i>
        <h3 class="counter">5+</h3>
        <p>Pays Desservis</p>
      </div>
    </div>
    <div class="col-md-3">
      <div class="stat-card">
        <i class="fas fa-certificate fa-3x text-primary mb-3"></i>
        <h3 class="counter">5+</h3>
        <p>Années d'Expérience</p>
      </div>
    </div>
  </div>
</section>

<section class="contact-channels container py-5 animate">
  <h2 class="text-center mb-5">Comment Nous Contacter</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="contact-method-card text-center p-4">
        <div class="icon-circle mb-3">
          <i class="fas fa-comments fa-2x"></i>
        </div>
        <h3>Chat en Direct</h3>
        <p>Disponible 24/7 pour répondre à vos questions</p>
        <a href="./chat.html" class="btn btn-primary mt-3">
          <i class="fas fa-arrow-right"></i> Accéder au Chat
        </a>
      </div>
    </div>
    <div class="col-md-4">
      <div class="contact-method-card text-center p-4">
        <div class="icon-circle mb-3">
          <i class="fas fa-calendar-check fa-2x"></i>
        </div>
        <h3>Rendez-vous</h3>
        <p>Planifiez une rencontre avec nos experts</p>
        <a href="./rendez-vous.html" class="btn btn-success mt-3">
          <i class="fas fa-calendar-plus"></i> Prendre un Rendez-vous
        </a>
      </div>
    </div>

    <div class="col-md-4">
      <div class="contact-method-card text-center p-4">
        <div class="icon-circle mb-3">
          <i class="fas fa-headset fa-2x"></i>
        </div>
        <h3>Support Technique</h3>
        <p>Assistance technique dédiée</p>
        <a href="support-technique.html" class="btn btn-warning mt-3">
          <i class="fas fa-tools"></i> Contacter le Support
        </a>
      </div>
    </div>
  </div>
</section>

<section class="container team-section animate">
  <h2 class="text-center mb-5">Direction & Administration</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/Img4.JPG" alt="Portrait du Directeur Général" class="executive-image">
        <h3>Mve Zogo </h3>
        <p class="text-primary fw-bold">Directeur Général</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 077 02 23 06<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Bikélé
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/Aimé.jpg" alt="Portrait du Juriste" class="executive-image">
        <h3>Ariane Rousleau</h3>
        <p class="text-primary fw-bold">Juriste</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 066 23 45 67<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier IAI
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/Laureine.jpg" alt="Portrait de l'Agent Marketing" class="executive-image">
        <h3>Laurene</h3>
        <p class="text-primary fw-bold">Agent Marketing</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 074 34 56 78<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Nzeng-Ayong
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/WhatsApp Image 2024-07-15 à 12.40.08_c029a2e2.jpg" alt="Portrait du Gestionnaire Comptable" class="executive-image">
        <h3>Chencelle christy</h3>
        <p class="text-primary fw-bold">Gestionnaire Comptable</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 066 89 01 23<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Glass
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/WhatsApp Image 2024-07-23 à 22.05.10_e6061c5e.jpg" alt="Portrait de l'Administrateur Système IT" class="executive-image">
        <h3>Andresse jolie</h3>
        <p class="text-primary fw-bold">Administrateur Système IT</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 066 16 97 06<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Plein Ciel
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/430478048_371484429036375_4193372184658702847_n.jpg" alt="Portrait de la Secrétaire Générale" class="executive-image">
        <h3>Christy</h3>
        <p class="text-primary fw-bold">Secrétaire Générale</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 076 48 52 76<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier PK7
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/IMG_0922.JPG" alt="Portrait de l'Assistante du Personnel" class="executive-image">
        <h3>Claire Beverly</h3>
        <p class="text-primary fw-bold">Assistante du Personnel</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 066 34 56 78<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Mindoubé
        </p>
      </div>
    </div>

    <div class="col-md-4">
      <div class="executive-card text-center">
        <img src="./assets/img/Vie10.JPG" alt="Portrait du Responsable des Formateurs" class="executive-image">
        <h3>Ludovic</h3>
        <p class="text-primary fw-bold">Responsable des Formateurs</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 062 64 11 20<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Bikélé
        </p>
      </div>
    </div>
  </div>
  
</section>

<section class="container team-section animate">
  <h2 class="text-center mb-5">Employés & Stagiaires</h2>
  <div class="row">
    <div class="col-md-3">
      <div class="staff-card text-center">
        <img src="./assets/img/IMG_0937.JPG" alt="Portrait de l'employé" class="staff-image">
        <h4>Alice Merveille</h4>
        <p class="text-primary">Développeuse Web</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 066 45 67 89<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier PK8
        </p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="staff-card text-center">
        <img src="./assets/img/Chelsea.jpg" alt="Portrait du stagiaire" class="staff-image">
        <h4>Chelsie </h4>
        <p class="text-primary">Stagiaire IT</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 077 56 78 90<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Akébé
        </p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="staff-card text-center">
        <img src="./assets/img/Milda belle pinture.jpg" alt="Portrait de l'employé" class="staff-image">
        <h4>Milda Nkouyi</h4>
        <p class="text-primary">Assistant Marketing</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 074 67 89 01<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier PK5
        </p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="staff-card text-center">
        <img src="./assets/img/WQIG7393.JPG" alt="Portrait de l'employé" class="staff-image">
        <h4>Sabine Emilie</h4>
        <p class="text-primary">Assistante Administrative</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 066 78 90 12<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Plein Ciel
        </p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="staff-card text-center">
        <img src="./assets/img/Chelsy.jpg" alt="Portrait du stagiaire" class="staff-image">
        <h4>Chelsy</h4>
        <p class="text-primary">Stagiaire Marketing</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 077 89 01 23<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Montagne Sainte
        </p>
      </div>
    </div>

    <div class="col-md-3">
      <div class="staff-card text-center">
        <img src="./assets/img/Dani.jpg" alt="Portrait du stagiaire" class="staff-image">
        <h4>Daciana</h4>
        <p class="text-primary">Stagiaire Comptabilité</p>
        <p class="contact-info">
          <i class="fas fa-phone me-2"></i>+241 074 90 12 34<br>
          <i class="fas fa-map-marker-alt me-2"></i>Quartier Nkembo
        </p>
      </div>
    </div>
  </div>
</section>

<section class="faq-section container py-5 animate">
  <h2 class="text-center mb-5">Questions Fréquentes</h2>
  <div class="accordion" id="contactFAQ">
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
          Quels sont vos horaires d'ouverture?
        </button>
      </h2>
      <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#contactFAQ">
        <div class="accordion-body">
          Nous sommes ouverts du lundi au vendredi de 8h à 17h.
        </div>
      </div>
    </div>
    <div class="accordion-item">
      <h2 class="accordion-header">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
          Comment puis-je postuler pour un stage?
        </button>
      </h2>
      <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#contactFAQ">
        <div class="accordion-body">
          Envoyez votre CV et lettre de motivation à stages@ludoconsulting.com
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

  document.addEventListener('click', function(event) {
    if (!event.target.closest('.user-menu')) {
      const dropdown = document.getElementById('userDropdown');
      if (dropdown) {
        dropdown.classList.remove('active');
      }
    }
  });

  updateUserSection();
  
  document.querySelector('.notification-icon').addEventListener('click', function() {
    alert('Notifications: \n- Nouveau message\n- Mise à jour disponible\n- Nouvel événement');
  });
});
</script>
</body></html>