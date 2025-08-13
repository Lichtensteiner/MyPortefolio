<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>À Propos - Ludo Consulting</title>
  <link rel="icon" type="image/svg+xml" href="./assets/icones/logoLudo.PNG">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
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
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(30, 41, 59, 0.5)), 
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

.about-hero {
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(198, 201, 206, 0.5)), 
      url('./assets/img/Ludo_Consulting.jpg');
  background-size: cover;
  background-position: center;
  color: white;
  padding: 10rem 0;
  text-align: center;
  margin-bottom: 4rem;
}



.timeline {
  position: relative;
  padding: 2rem 0;
}

.timeline::before {
  content: '';
  position: absolute;
  left: 50%;
  transform: translateX(-50%);
  width: 2px;
  height: 100%;
  background-color: var(--primary);
}

.timeline-item {
  display: flex;
  justify-content: space-between;
  margin-bottom: 3rem;
}

.timeline-content {
  width: 45%;
  padding: 1.5rem;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  position: relative;
}

.timeline-content::before {
  content: '';
  position: absolute;
  top: 50%;
  width: 20px;
  height: 20px;
  background: var(--primary);
  border-radius: 50%;
}

.timeline-left::before {
  right: -60px;
}

.timeline-right::before {
  left: -60px;
}

.team-member {
  text-align: center;
  margin-bottom: 2rem;
}

.team-member img {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  margin-bottom: 1rem;
  object-fit: cover;
}

.values-card {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  margin-bottom: 2rem;
  transition: transform 0.3s;
}

.values-card:hover {
  transform: translateY(-5px);
}

.values-icon {
  font-size: 2.5rem;
  color: var(--primary);
  margin-bottom: 1rem;
}

.awards-section {
  background-color: var(--light);
  padding: 4rem 0;
}

.award-item {
  text-align: center;
  padding: 2rem;
}

.award-icon {
  font-size: 3rem;
  color: var(--primary);
  margin-bottom: 1rem;
}

.mission-vision {
  background: linear-gradient(rgba(37, 99, 235, 0.05), rgba(37, 99, 235, 0.1));
  padding: 4rem 0;
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

.history-container {
  display: flex;
  justify-content: space-between;
  gap: 4rem;
  margin-bottom: 4rem;
}

.timeline-container {
  flex: 1;
}

.company-summary {
  flex: 1;
  padding: 2rem;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  align-self: flex-start;
  position: sticky;
  top: 100px;
}

.company-summary h3 {
  color: var(--primary);
  margin-bottom: 1.5rem;
}

.company-summary p {
  margin-bottom: 1rem;
}

.highlight-text {
  color: var(--primary);
  font-weight: 500;
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

<section class="about-hero animate">
  <div class="container">
    <h1>À Propos de Nous</h1>
    <p class="lead">Découvrez notre histoire, notre mission et nos valeurs</p>
  </div>
</section>

<section class="container mission-vision animate">
  <div class="row">
    <div class="col-md-6 mb-4">
      <h2>Notre Mission</h2>
      <p>Accompagner les entreprises et les particuliers dans leur transformation digitale en fournissant des solutions innovantes et des formations de qualité.</p>
    </div>
    <div class="col-md-6 mb-4">
      <h2>Notre Vision</h2>
      <p>Devenir le leader de la consultation informatique et de la formation digitale en Afrique Centrale, en innovant constamment pour répondre aux besoins du marché.</p>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Nos Valeurs</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="values-card">
        <i class="fas fa-lightbulb values-icon"></i>
        <h3>Innovation</h3>
        <p>Nous recherchons constamment de nouvelles solutions.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="values-card">
        <i class="fas fa-users values-icon"></i>
        <h3>Collaboration</h3>
        <p>Nous croyons en la force du travail d'équipe et de la synergie collective.</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="values-card">
        <i class="fas fa-award values-icon"></i>
        <h3>Excellence</h3>
        <p>Nous visons l'excellence dans chacune de nos actions et services.</p>
      </div>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Notre Histoire</h2>
  <div class="history-container">
    <div class="timeline-container">
      <div class="timeline">
        <div class="timeline-item">
          <div class="timeline-content timeline-left">
            <h3>2019</h3>
            <p>Création de Ludo Consulting</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-content timeline-right">
            <h3>2012</h3>
            <p>Lancement des premières formations en développement web</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-content timeline-left">
            <h3>2020</h3>
            <p>Expansion vers la formation mobile et le cloud computing</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-content timeline-right">
            <h3>2023</h3>
            <p>Ouverture de notre nouveau centre de formation à Libreville</p>
          </div>
        </div>
        <div class="timeline-item">
          <div class="timeline-content timeline-left">
            <h3>2024</h3>
            <p>Leader de la formation IT en Afrique Centrale</p>
          </div>
        </div>
      </div>
    </div>
    
    <div class="company-summary">
      <h3>Notre Excellence en Innovation</h3>
      <p>Depuis sa création, <span class="highlight-text">Ludo Consulting</span> s'est imposée comme un acteur majeur de la transformation digitale au Gabon et en Afrique Centrale. Notre expertise s'étend bien au-delà des frontières nationales, créant des ponts entre le savoir-faire local et les standards internationaux.</p>
      
      <p>Nous excellons dans plusieurs domaines stratégiques :</p>
      <ul>
        <li>Formation professionnelle en IT</li>
        <li>Consultation en transformation digitale</li>
        <li>Développement de solutions sur mesure</li>
        <li>Innovation technologique</li>
        <li>Accompagnement des entreprises</li>
      </ul>
      
      <p>Au niveau national, nous sommes fiers d'être un catalyseur de l'innovation au Gabon, travaillant en étroite collaboration avec les entreprises locales, les institutions gouvernementales et le secteur éducatif pour développer les compétences numériques et accompagner la transformation digitale du pays.</p>
      
      <p>Sur le plan international, nos partenariats stratégiques avec des leaders mondiaux de la technologie nous permettent d'offrir des solutions et des formations alignées sur les meilleurs standards internationaux, tout en les adaptant aux réalités locales.</p>
      
      <p>Notre engagement pour l'excellence et l'innovation continue de guider notre croissance, faisant de nous un partenaire de confiance pour tous vos projets digitaux.</p>
    </div>
  </div>
</section>

<section class="container my-5 animate">
  <h2 class="text-center mb-5">Notre Équipe</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="team-member">
        <img src="./assets/img/Vie9.JPG" alt="CEO Portrait" class="team-img">
        <h3>Mve Zogo</h3>
        <p>CEO & Fondateur</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="team-member">
        <img src="./assets/img/Img3.JPG" alt="CTO Portrait" class="team-img">
        <h3>Ossima Stael</h3>
        <p>Directeur Technique</p>
      </div>
    </div>
    <div class="col-md-4">
      <div class="team-member">
        <img src="./assets/img/Vie14.JPG" alt="Lead Trainer Portrait" class="team-img">
        <h3>Ludovic Lichtensteiner</h3>
        <p>Responsable Formation</p>
      </div>
    </div>
  </div>
</section>

<section class="awards-section animate">
  <div class="container">
    <h2 class="text-center mb-5">Nos Récompenses</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="award-item">
          <i class="fas fa-trophy award-icon"></i>
          <h3>Meilleur Centre de Formation 2023</h3>
          <p>Prix de l'Excellence en Formation IT</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="award-item">
          <i class="fas fa-medal award-icon"></i>
          <h3>Innovation Award 2022</h3>
          <p>Pour nos méthodes pédagogiques innovantes</p>
        </div>
      </div>
      <div class="col-md-4">
        <div class="award-item">
          <i class="fas fa-star award-icon"></i>
          <h3>Top Employer 2024</h3>
          <p>Meilleur employeur du secteur IT</p>
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