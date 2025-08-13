<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutoriels - Ludo Consulting</title>
  <link rel="icon" type="image/svg+xml" href="./assets/icones/logoLudo.PNG">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link href="https://vjs.zencdn.net/8.0.4/video-js.css" rel="stylesheet">
  <script src="https://vjs.zencdn.net/8.0.4/video.min.js"></script>
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

.header {
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(198, 201, 206, 0.5)), 
  url('./assets/img/Ludo_Consulting.jpg');
background-size: cover;
background-position: center;
color: white;
padding: 2rem 0;
text-align: center;
margin-bottom: 4rem;
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

.tutorial-card {
  background: white;
  border-radius: 8px;
  padding: 1.5rem;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}

.tutorial-card:hover {
  transform: translateY(-5px);
}

.tutorial-video {
  width: 100%;
  height: 200px;
  background: var(--dark);
  border-radius: 8px;
  margin-bottom: 1rem;
  position: relative;
  overflow: hidden;
}

.tutorial-video img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.play-button {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  width: 60px;
  height: 60px;
  background: rgba(37, 99, 235, 0.9);
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  color: white;
  cursor: pointer;
  transition: background 0.3s;
}

.play-button:hover {
  background: var(--primary);
}

.tutorial-meta {
  display: flex;
  align-items: center;
  gap: 1rem;
  color: var(--secondary);
  font-size: 0.9rem;
  margin-bottom: 0.5rem;
}

.tutorial-difficulty {
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.8rem;
}

.difficulty-beginner { background: #4ade80; color: white; }
.difficulty-intermediate { background: #fbbf24; color: white; }
.difficulty-advanced { background: #ef4444; color: white; }

.tutorial-progress {
  height: 4px;
  background: #e2e8f0;
  border-radius: 2px;
  margin-top: 1rem;
}

.progress-bar {
  height: 100%;
  background: var(--primary);
  border-radius: 2px;
  transition: width 0.3s;
}

.category-header {
  background: linear-gradient(rgba(37, 99, 235, 0.05), rgba(37, 99, 235, 0.1));
  padding: 2rem;
  border-radius: 8px;
  margin-bottom: 2rem;
}

.resource-link {
  display: block;
  padding: 1rem;
  background: white;
  border-radius: 8px;
  margin-bottom: 1rem;
  color: var(--dark);
  text-decoration: none;
  transition: all 0.3s;
}

.resource-link:hover {
  background: var(--primary);
  color: white;
  transform: translateX(10px);
}

.tutorial-filters {
  display: flex;
  gap: 1rem;
  margin-bottom: 2rem;
  flex-wrap: wrap;
}

.tutorial-filter {
  padding: 0.5rem 1rem;
  border: 2px solid var(--primary);
  border-radius: 20px;
  color: var(--primary);
  cursor: pointer;
  transition: all 0.3s;
}

.tutorial-filter:hover,
.tutorial-filter.active {
  background: var(--primary);
  color: white;
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
      <!-- This will be populated by JavaScript -->
    </div>
  </div>
</nav>

<section class="contact-hero animate">
  <div class="container">
    <h1>Tutoriels & Formations</h1>
    <p class="lead">Développez vos compétences avec nos tutoriels professionnels</p>
  </div>
</section>

<div class="container py-5">
  <div class="tutorial-filters">
    <div class="tutorial-filter active">Tous</div>
    <div class="tutorial-filter">Conférences</div>
    <div class="tutorial-filter">Formations</div>
    <div class="tutorial-filter">Publicité</div>
    <div class="tutorial-filter">Annonces</div>
  </div>

  <div class="category-header">
    <h2><i class="fas fa-chalkboard-teacher me-2"></i>Conférences</h2>
    <p>Explorez nos conférences enregistrées sur divers sujets professionnels</p>
  </div>
  
  <div class="row">
    <div class="col-md-4">
      <div class="tutorial-card" data-video-id="conf1">
        <div class="tutorial-video">
          <img src="./assets/videos/1.mp4" alt="Conference sur le leadership">
          <div class="play-button">
            <i class="fas fa-play fa-lg"></i>
          </div>
        </div>
        <h4>Leadership et Management d'Équipe</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 2h 30min</span>
          <span class="tutorial-difficulty difficulty-intermediate">Intermédiaire</span>
        </div>
        <p>Découvrez les meilleures pratiques de leadership moderne...</p>
        <div class="tutorial-progress">
          <div class="progress-bar" style="width: 60%"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="tutorial-card" data-video-id="conf2">
        <div class="tutorial-video">
          <img src="./assets/videos/2.mp4" alt="Conference sur le marketing digital">
          <div class="play-button">
            <i class="fas fa-play fa-lg"></i>
          </div>
        </div>
        <h4>Marketing Digital pour les Entreprises</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 1h 45min</span>
          <span class="tutorial-difficulty difficulty-beginner">Débutant</span>
        </div>
        <p>Apprenez à promouvoir votre entreprise en ligne...</p>
        <div class="tutorial-progress">
          <div class="progress-bar" style="width: 50%"></div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="tutorial-card" data-video-id="conf3">
        <div class="tutorial-video">
          <img src="./assets/videos/3.mp4" alt="Conference sur la gestion du temps">
          <div class="play-button">
            <i class="fas fa-play fa-lg"></i>
          </div>
        </div>
        <h4>Gestion du Temps et Productivité</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 1h 30min</span>
          <span class="tutorial-difficulty difficulty-intermediate">Intermédiaire</span>
        </div>
        <p>Améliorez votre efficacité avec des techniques de gestion du temps...</p>
        <div class="tutorial-progress">
          <div class="progress-bar" style="width: 80%"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="category-header mt-5">
    <h2><i class="fas fa-ad me-2"></i>Publicité</h2>
    <p>Découvrez nos tutoriels sur la publicité et le marketing</p>
  </div>

  <div class="row">
    <div class="col-md-4">
      <div class="tutorial-card" data-video-id="pub1">
        <div class="tutorial-video">
          <img src="https://ludoconsulting.com/tutorials/pub1.jpg" alt="Tutoriel publicité sur les réseaux sociaux">
          <div class="play-button">
            <i class="fas fa-play fa-lg"></i>
          </div>
        </div>
        <h4>Publicité sur internet</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 45min</span>
          <span class="tutorial-difficulty difficulty-beginner">Débutant</span>
        </div>
        <p>Apprenez à créer des campagnes publicitaires efficaces...</p>
        <div class="tutorial-progress">
          <div class="progress-bar" style="width: 20%"></div>
        </div>
      </div>
    </div>
    
    <div class="col-md-4">
      <div class="tutorial-card" data-video-id="pub2">
        <div class="tutorial-video">
          <img src="https://ludoconsulting.com/tutorials/pub2.jpg" alt="Tutoriel stratégies publicitaires">
          <div class="play-button">
            <i class="fas fa-play fa-lg"></i>
          </div>
        </div>
        <h4>Stratégies Publicitaires </h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 1h 15min</span>
          <span class="tutorial-difficulty difficulty-intermediate">Intermédiaire</span>
        </div>
        <p>Stratégies avancées pour le marketing</p>
        <div class="tutorial-progress">
          <div class="progress-bar" style="width: 40%"></div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="tutorial-card" data-video-id="pub3">
        <div class="tutorial-video">
          <img src="https://ludoconsulting.com/tutorials/pub3.jpg" alt="Tutoriel publicité Google Ads">
          <div class="play-button">
            <i class="fas fa-play fa-lg"></i>
          </div>
        </div>
        <h4>Google Ads Masterclass</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 2h</span>
          <span class="tutorial-difficulty difficulty-advanced">Avancé</span>
        </div>
        <p>Maîtrisez Google Ads de A à Z pour votre expérience</p>
        <div class="tutorial-progress">
          <div class="progress-bar" style="width: 65%"></div>
        </div>
      </div>
    </div>
  </div>

  <div class="category-header mt-5">
    <h2><i class="fas fa-bullhorn me-2"></i>Annonces</h2>
    <p>Dernières annonces et mises à jour importantes</p>
  </div>
  <div class="row">
    <!-- Première vidéo -->
    <div class="col-md-4">
      <div class="tutorial-card">
        <div class="tutorial-video">
          <!-- Balise vidéo -->
          <video controls width="100%" poster="./assets/images/startup-thumbnail.jpg">
            <source src="./assets/videos/formations/la première startup dEtat gabonaise_360P.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos.
          </video>
        </div>
        <h4>Nouveaux Partenariats</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 3:40</span>
          <span class="tutorial-difficulty difficulty-beginner">Information</span>
        </div>
        <p>Découvrez nos nouveaux partenaires stratégiques...</p>
      </div>
    </div>


    
    <!-- Deuxième vidéo -->
    <div class="col-md-4">
      <div class="tutorial-card">
        <div class="tutorial-video">
          <video controls width="100%" poster="./assets/images/mentorat-thumbnail.jpg">
            <source src="./assets/videos/Bleu Foncé Technologie Moderne Entreprise Informatique Présentation_20240515_000720_0000.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos.
          </video>
        </div>
        <h4>Programme de stratégie</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 0:50</span>
          <span class="tutorial-difficulty difficulty-intermediate">Annonce</span>
        </div>
        <p>Présentation du nouvelle méthode de travail...</p>
        <div class="tutorial-progress"></div>
      </div>
    </div>
  
    <!-- Troisième vidéo -->
    <div class="col-md-4">
      <div class="tutorial-card">
        <div class="tutorial-video">
          <video controls width="100%" poster="./assets/images/mentorat-thumbnail.jpg">
            <source src="./assets/videos/formations/Le programme de mentorat_360P.mp4" type="video/mp4">
            Votre navigateur ne supporte pas les vidéos.
          </video>
        </div>
        <h4>Programme de Mentorat</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 4:02</span>
          <span class="tutorial-difficulty difficulty-intermediate">Annonce</span>
        </div>
        <p>Présentation du nouveau programme de mentorat...</p>
        <div class="tutorial-progress"></div>
      </div>
    </div>
  </div>
  


      
  <div class="category-header mt-5">
    <h2><i class="fas fa-graduation-cap me-2"></i>Formations</h2>
    <p>Formations professionnelles certifiantes</p>
  </div>
  <div class="row">
    <div class="col-md-6">
      <div class="tutorial-card">
        <div class="tutorial-video">
          <video width="100%" height="315" controls>
            <source src="./assets/videos/formations/utomp3.com - Apprenez ceci pour devenir développeur  Roadmap en 9 étapes pour débutants.mp4" type="video/mp4">
            Votre navigateur ne prend pas en charge la lecture vidéo.
          </video>
        </div>
        <h4>Développement Web Full Stack</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 10:45</span>
          <span class="tutorial-difficulty difficulty-advanced">Avancé</span>
        </div>
        <p>Formation complète sur le développement web et Application mobile moderne...</p>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tutorial-card">
        <div class="tutorial-video">
          <video width="100%" height="315" controls>
            <source src="./assets/videos/formations/Top 6 Des Meilleures Stratégies Marketing Digitales En 2024_360P.mp4" type="video/mp4">
            Votre navigateur ne prend pas en charge la lecture vidéo.
          </video>
        </div>
        <h4>Marketing Numérique Avancé</h4>
        <div class="tutorial-meta">
          <span><i class="far fa-clock"></i> 15:09</span>
          <span class="tutorial-difficulty difficulty-intermediate">Intermédiaire</span>
        </div>
        <p>Stratégies avancées pour réussir dans le marketing numérique...</p>
      </div>
    </div>
  </div>

  
  

  <div class="row mt-5">
    <div class="col-md-4">
      <div class="tutorial-card">
        <h4>Ressources Complémentaires</h4>
        <a href="https://ludoconsulting.com/resources/ebooks" class="resource-link">
          <i class="fas fa-book me-2"></i> E-Books Gratuits
        </a>
        <a href="https://ludoconsulting.com/resources/templates" class="resource-link">
          <i class="fas fa-file-alt me-2"></i> Templates & Outils
        </a>
        <a href="https://ludoconsulting.com/resources/certification" class="resource-link">
          <i class="fas fa-certificate me-2"></i> Certifications
        </a>
      </div>
    </div>
  </div>
</div>

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
    <p>&copy; 2024 Ludo Consulting. Tous droits réservés.</p>
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
            <a href="https://ludoconsulting.com/profile"><i class="fas fa-user-circle"></i> Profile</a>
            <a href="https://ludoconsulting.com/settings"><i class="fas fa-cog"></i> Paramètres</a>
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
    const notifications = [
      {title: 'Nouveau message', time: '2 min ago'},
      {title: 'Mise à jour disponible', time: '1 hour ago'},
      {title: 'Nouvel événement', time: '2 hours ago'}
    ];
    
    const notificationList = notifications.map(n => 
      `<div class="notification-item">
        <strong>${n.title}</strong>
        <small>${n.time}</small>
       </div>`
    ).join('');
    
    const modal = new bootstrap.Modal(document.createElement('div'));
    modal.element.innerHTML = `
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Notifications</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
          </div>
          <div class="modal-body">
            ${notificationList}
          </div>
        </div>
      </div>
    `;
    
    document.body.appendChild(modal.element);
    modal.show();
  });

  const filters = document.querySelectorAll('.tutorial-filter');
  filters.forEach(filter => {
    filter.addEventListener('click', function() {
      filters.forEach(f => f.classList.remove('active'));
      this.classList.add('active');
      // Add filtering logic here
    });
  });

  document.querySelectorAll('.play-button').forEach(button => {
    button.addEventListener('click', function() {
      const videoId = this.closest('.tutorial-card').dataset.videoId;
      // Add video player logic here
      alert('Lancement de la vidéo...');
    });
  });

  document.querySelector('footer form').addEventListener('submit', function(e) {
    e.preventDefault();
    const email = this.querySelector('input[type="email"]').value;
    
    if(email) {
      alert(`Merci de votre inscription! Un email de confirmation a été envoyé à ${email}`);
      this.reset();
    }
  });
});
</script>
</body></html>