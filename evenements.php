<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/svg+xml" href="./assets/icones/logoLudo.PNG">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="shortcut icons" href="./assets/icones/logoLudo.PNG">
  <title>Événements - Ludo Consulting</title>
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

.events-hero {
  background: linear-gradient(rgba(37, 99, 235, 0.5), rgba(198, 201, 206, 0.5)), 
  url('./assets/img/Ludo_Consulting.jpg');
background-size: cover;
background-position: center;
color: white;
padding: 10rem 0;
text-align: center;
margin-bottom: 4rem;
}

.event-card {
  display: block;
  background: white;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  margin-bottom: 2rem;
  transition: all 0.3s ease;
}

.event-card:hover {
  transform: translateY(-5px);
}

.event-image {
  width: 100%;
  height: 200px;
  object-fit: cover;
}

.event-content {
  padding: 1.5rem;
}

.event-date {
  color: var(--primary);
  font-weight: 600;
  margin-bottom: 0.5rem;
}

.event-location {
  color: var(--secondary);
  margin-bottom: 1rem;
}

.event-category {
  display: inline-block;
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.875rem;
  margin-bottom: 1rem;
}

.category-conference {
  background: #dbeafe;
  color: #1e40af;
}

.category-workshop {
  background: #fef3c7;
  color: #92400e;
}

.category-webinar {
  background: #dcfce7;
  color: #166534;
}

.category-formation {
  background: #e0e7ff;
  color: #3730a3;
}

.event-registration {
  margin-top: 1rem;
}

.calendar-section {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  margin-bottom: 2rem;
}

.calendar-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: 1rem;
}

.filters-section {
  background: var(--light);
  padding: 1rem;
  border-radius: 8px;
  margin-bottom: 2rem;
}

.filter-tag {
  display: inline-block;
  padding: 0.5rem 1rem;
  margin: 0.25rem;
  border-radius: 20px;
  background: white;
  border: 1px solid var(--primary);
  color: var(--primary);
  cursor: pointer;
  transition: all 0.3s;
}

.filter-tag.active {
  background: var(--primary);
  color: white;
}

.countdown-timer {
  background: linear-gradient(to right, var(--primary), #1d4ed8);
  color: white;
  padding: 2rem;
  border-radius: 8px;
  text-align: center;
  margin-bottom: 2rem;
}

.countdown-values {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-top: 1rem;
}

.countdown-item {
  text-align: center;
}

.countdown-number {
  font-size: 2.5rem;
  font-weight: bold;
}

.countdown-label {
  font-size: 0.875rem;
  text-transform: uppercase;
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

.stats-card {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  margin-bottom: 2rem;
  transition: transform 0.3s;
}

.stats-card:hover {
  transform: translateY(-5px);
}

.stats-card h3 {
  font-size: 2.5rem;
  color: var(--primary);
  margin: 1rem 0;
}

.testimonial-card {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  box-shadow: 0 4px 6px rgba(0,0,0,0.1);
  margin-bottom: 2rem;
  transition: transform 0.3s;
}

.testimonial-card:hover {
  transform: translateY(-5px);
}

.testimonial-content {
  text-align: center;
}

.testimonial-author {
  margin-top: 1.5rem;
}

.testimonial-author h5 {
  color: var(--primary);
  margin-bottom: 0.25rem;
}

.testimonial-author p {
  color: var(--secondary);
  font-size: 0.875rem;
}

.modal {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.5);
  z-index: 1000;
}

.modal.show {
  display: flex;
  align-items: center;
  justify-content: center;
}

.modal-content {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  width: 90%;
  max-width: 500px;
  position: relative;
}

.close-modal {
  position: absolute;
  right: 1rem;
  top: 1rem;
  font-size: 1.5rem;
  cursor: pointer;
  color: var(--secondary);
}

.close-modal:hover {
  color: var(--dark);
}

.registration-form {
  margin-top: 1rem;
}

.registration-form .form-group {
  margin-bottom: 1.5rem;
}

.registration-form input {
  width: 100%;
  padding: 0.75rem;
  border: 1px solid #e2e8f0;
  border-radius: 6px;
  font-size: 1rem;
  transition: border-color 0.3s ease;
}

.registration-form input:focus {
  outline: none;
  border-color: var(--primary);
  box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.1);
}

.registration-form button {
  width: 100%;
  padding: 1rem;
  background: var(--primary);
  color: white;
  border: none;
  border-radius: 6px;
  font-size: 1rem;
  font-weight: 500;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

.registration-form button:hover {
  background: #1d4ed8;
}

.form-success {
  display: none;
  text-align: center;
  color: #059669;
  padding: 1rem;
  margin-top: 1rem;
  background: #d1fae5;
  border-radius: 6px;
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

<section class="events-hero animate">
  <div class="container">
    <h1>Nos Événements</h1>
    <p class="lead">Découvrez nos conférences, formations et rencontres professionnelles</p>
  </div>
</section>

<section class="container">
  <div class="countdown-timer animate">
    <h2>Prochain Événement Majeur</h2>
    <h3>Conférence Annuelle sur l'Innovation Digitale</h3>
    <div class="countdown-values">
      <div class="countdown-item">
        <div class="countdown-number" id="days">15</div>
        <div class="countdown-label">Jours</div>
      </div>
      <div class="countdown-item">
        <div class="countdown-number" id="hours">08</div>
        <div class="countdown-label">Heures</div>
      </div>
      <div class="countdown-item">
        <div class="countdown-number" id="minutes">45</div>
        <div class="countdown-label">Minutes</div>
      </div>
      <div class="countdown-item">
        <div class="countdown-number" id="seconds">30</div>
        <div class="countdown-label">Secondes</div>
      </div>
    </div>
  </div>

  <div class="filters-section animate">
    <h3>Filtrer par type d'événement</h3>
    <div class="filter-tags">
      <span class="filter-tag active">Tous</span>
      <span class="filter-tag">Conférences</span>
      <span class="filter-tag">Workshops</span>
      <span class="filter-tag">Webinaires</span>
      <span class="filter-tag">Formations</span>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8">
      <div class="event-card animate">
        <img src="./assets/img/artificiel.jpg" alt="Conférence sur l'Intelligence Artificielle" class="event-image">
        <div class="event-content">
          <span class="event-category category-conference">Conférence</span>
          <h3>L'Intelligence Artificielle en Entreprise</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 15 Mai 2024
          </div>
          <div class="event-location">
            <i class="fas fa-map-marker-alt"></i> Radisson Blu Okoumé Palace, Libreville
          </div>
          <p>Une journée dédiée à l'exploration des applications pratiques de l'IA dans le contexte entrepreneurial africain.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>

      <div class="event-card animate">
        <img src="./assets/img/dev web.png" alt="Workshop sur le Développement Web" class="event-image">
        <div class="event-content">
          <span class="event-category category-workshop">Workshop</span>
          <h3>Développement Web Moderne</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 20 Mai 2024
          </div>
          <div class="event-location">
            <i class="fas fa-map-marker-alt"></i> Centre de Formation Ludo Consulting
          </div>
          <p>Formation pratique sur les technologies web modernes et les frameworks populaires.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>

      <div class="event-card animate">
        <img src="./assets/img/cybersécurity.webp" alt="Webinar Cybersécurité" class="event-image">
        <div class="event-content">
          <span class="event-category category-webinar">Webinar</span>
          <h3>Cybersécurité pour les Entreprises</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 25 Mai 2024
          </div>
          <div class="event-location">
            <i class="fas fa-video"></i> En ligne
          </div>
          <p>Webinar gratuit sur les bonnes pratiques de sécurité informatique en entreprise.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>

      <!-- Additional Conference Events -->
      <div class="event-card animate">
        <img src="./assets/img/africque.jpg" alt="Conférence sur la Transformation Digitale" class="event-image">
        <div class="event-content">
          <span class="event-category category-conference">Conférence</span>
          <h3>Transformation Digitale en Afrique</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 30 Mai 2024
          </div>
          <div class="event-location">
            <i class="fas fa-map-marker-alt"></i> Hôtel Le Méridien, Libreville
          </div>
          <p>Découvrez les enjeux et opportunités de la transformation digitale en Afrique.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>

      <!-- Additional Workshop Events -->
      <div class="event-card animate">
        <img src="./assets/img/science.webp" alt="Workshop Data Science" class="event-image">
        <div class="event-content">
          <span class="event-category category-workshop">Workshop</span>
          <h3>Introduction à la Data Science</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 5 Juin 2024
          </div>
          <div class="event-location">
            <i class="fas fa-map-marker-alt"></i> Centre Ludo Consulting
          </div>
          <p>Atelier pratique sur l'analyse de données et le machine learning.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>

      <!-- Additional Webinar Events -->
      <div class="event-card animate">
        <img src="./assets/img/marketing.jpg" alt="Webinar Marketing Digital" class="event-image">
        <div class="event-content">
          <span class="event-category category-webinar">Webinar</span>
          <h3>Stratégies de Marketing Digital 2024</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 12 Juin 2024
          </div>
          <div class="event-location">
            <i class="fas fa-video"></i> En ligne
          </div>
          <p>Les dernières tendances et stratégies en marketing digital.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>

      <!-- Add Formation Events -->
      <div class="event-card animate">
        <img src="./assets/img/agil.jpg" alt="Formation Management" class="event-image">
        <div class="event-content">
          <span class="event-category category-workshop">Formation</span>
          <h3>Management d'Équipe Agile</h3>
          <div class="event-date">
            <i class="fas fa-calendar-alt"></i> 20 Juin 2024
          </div>
          <div class="event-location">
            <i class="fas fa-map-marker-alt"></i> Centre de Formation Ludo_Consulting
          </div>
          <p>Formation certifiante en management agile et leadership d'équipe.</p>
          <div class="event-registration">
            <a href="#" class="btn btn-primary">S'inscrire</a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="calendar-section">
        <div class="calendar-header">
          <h3>Calendrier des Événements</h3>
        </div>
        <div id="events-calendar"></div>
      </div>

      <div class="upcoming-events">
        <h3>Prochains Événements</h3>
        <ul class="list-unstyled">
          <li class="mb-3">
            <div class="small text-primary">15 Mai 2024</div>
            <div>Conférence IA</div>
          </li>
          <li class="mb-3">
            <div class="small text-primary">20 Mai 2024</div>
            <div>Workshop Dev Web</div>
          </li>
          <li class="mb-3">
            <div class="small text-primary">25 Mai 2024</div>
            <div>Webinaire Cybersécurité</div>
          </li>
          <li class="mb-3">
            <div class="small text-primary">30 Mai 2024</div>
            <div>Conférence et Transformation Digitale</div>
          </li>
          <li class="mb-3">
            <div class="small text-primary">5 Juin 2024</div>
            <div>Workshop Data Science</div>
          </li>
          <li class="mb-3">
            <div class="small text-primary">12 Juin 2024</div>
            <div>Webinaire Marketing Digital</div>
          </li>
          <li class="mb-3">
            <div class="small text-primary">20 Juin 2024</div>
            <div>Formation Management d'Équipe Agile</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="container mb-5">
  <h2 class="text-center mb-4">Statistiques des Événements</h2>
  <div class="row stats-row">
    <div class="col-md-3 text-center">
      <div class="stats-card">
        <i class="fas fa-calendar-check fa-3x mb-3 text-primary"></i>
        <h3>1+</h3>
        <p>Événements par an</p>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="stats-card">
        <i class="fas fa-users fa-3x mb-3 text-primary"></i>
        <h3>10+</h3>
        <p>Participants</p>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="stats-card">
        <i class="fas fa-globe-africa fa-3x mb-3 text-primary"></i>
        <h3>3+</h3>
        <p>Pays représentés</p>
      </div>
    </div>
    <div class="col-md-3 text-center">
      <div class="stats-card">
        <i class="fas fa-star fa-3x mb-3 text-primary"></i>
        <h3>6.8/5</h3>
        <p>Note moyenne</p>
      </div>
    </div>
  </div>
</section>

<section class="container mb-5">
  <h2 class="text-center mb-4">Témoignages des Participants</h2>
  <div class="row">
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-content">
          <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
          <p>"Les conférences de Ludo Consulting sont toujours enrichissantes. J'ai pu développer mon réseau professionnel."</p>
          <div class="testimonial-author">
            <h5>Marie Kombé</h5>
            <p>Directrice Marketing</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-content">
          <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
          <p>"Les workshops sont pratiques et directement applicables dans notre contexte professionnel."</p>
          <div class="testimonial-author">
            <h5>Jean Moubamba</h5>
            <p>Chef de Projet IT</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-4">
      <div class="testimonial-card">
        <div class="testimonial-content">
          <i class="fas fa-quote-left fa-2x text-primary mb-3"></i>
          <p>"Une expertise reconnue et des intervenants de qualité. Je recommande vivement."</p>
          <div class="testimonial-author">
            <h5>Sarah Koumba</h5>
            <p>Consultante Digital</p>
          </div>
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

<div class="modal" id="registrationModal">
  <div class="modal-content">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <h2 class="mb-4">Inscription à l'événement</h2>
    <form class="registration-form" onsubmit="handleRegistration(event)">
      <div class="form-group">
        <label for="firstname">Prénom</label>
        <input type="text" id="firstname" name="firstname" required>
      </div>
      <div class="form-group">
        <label for="lastname">Nom</label>
        <input type="text" id="lastname" name="lastname" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="phone">Numéro de téléphone</label>
        <input type="tel" id="phone" name="phone" required>
      </div>
      <div class="form-group">
        <label for="city">Ville/Région</label>
        <input type="text" id="city" name="city" required>
      </div>
      <button type="submit">Confirmer l'inscription</button>
    </form>
  </div>
</div>

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

  // Add countdown timer functionality
  function updateCountdown() {
    const eventDate = new Date('2024-05-15T09:00:00').getTime();
    
    setInterval(() => {
      const now = new Date().getTime();
      const distance = eventDate - now;

      const days = Math.floor(distance / (1000 * 60 * 60 * 24));
      const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
      const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
      const seconds = Math.floor((distance % (1000 * 60)) / 1000);

      document.getElementById('days').innerText = days;
      document.getElementById('hours').innerText = hours.toString().padStart(2, '0');
      document.getElementById('minutes').innerText = minutes.toString().padStart(2, '0');
      document.getElementById('seconds').innerText = seconds.toString().padStart(2, '0');
    }, 1000);
  }

  // Enhanced filter functionality
  function filterEvents(category) {
    const eventCards = document.querySelectorAll('.event-card');
    
    eventCards.forEach(card => {
      if (category === 'Tous') {
        card.style.display = 'block';
        return;
      }
      
      const cardCategory = card.querySelector('.event-category').textContent;
      if (cardCategory === category) {
        card.style.display = 'block';
        // Animate the cards that are shown
        card.style.animation = 'fadeIn 0.5s ease-out';
      } else {
        card.style.display = 'none';
      }
    });
  }

  document.querySelectorAll('.filter-tag').forEach(tag => {
    tag.addEventListener('click', () => {
      document.querySelectorAll('.filter-tag').forEach(t => t.classList.remove('active'));
      tag.classList.add('active');
      filterEvents(tag.textContent);
    });
  });

  // Initialize countdown
  updateCountdown();

  // Show modal for registration
  function showModal() {
    const modal = document.getElementById('registrationModal');
    modal.classList.add('show');
    // Reset form and hide success message when opening modal
    document.querySelector('.registration-form').reset();
    document.querySelector('.form-success').style.display = 'none';
  }

  function closeModal() {
    document.getElementById('registrationModal').classList.remove('show');
  }

  function handleRegistration(event) {
    event.preventDefault();
    
    // Get form data
    const formData = {
      firstname: document.getElementById('firstname').value.trim(),
      lastname: document.getElementById('lastname').value.trim(),
      email: document.getElementById('email').value.trim(),
      phone: document.getElementById('phone').value.trim(),
      city: document.getElementById('city').value.trim()
    };

    // Basic validation
    for (let field in formData) {
      if (!formData[field]) {
        alert('Veuillez remplir tous les champs');
        return;
      }
    }

    // Email validation
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(formData.email)) {
      alert('Veuillez entrer une adresse email valide');
      return;
    }

    // Phone validation
    const phoneRegex = /^\+?[0-9]{8,}$/;
    if (!phoneRegex.test(formData.phone.replace(/\s/g, ''))) {
      alert('Veuillez entrer un numéro de téléphone valide');
      return;
    }

    // Simulate form submission
    console.log('Registration data:', formData);
    
    // Show success message and close modal after delay
    const form = event.target;
    form.style.display = 'none';
    const successMessage = document.createElement('div');
    successMessage.className = 'form-success';
    successMessage.innerHTML = `
      <i class="fas fa-check-circle fa-2x mb-2"></i>
      <h4>Inscription réussie!</h4>
      <p>Nous vous contacterons bientôt avec plus de détails.</p>
    `;
    form.parentNode.appendChild(successMessage);
    successMessage.style.display = 'block';
    
    setTimeout(() => {
      closeModal();
      form.style.display = 'block';
      successMessage.remove();
      form.reset();
    }, 3000);
  }

  document.querySelectorAll('.event-registration .btn-primary').forEach(button => {
    button.setAttribute('onclick', 'showModal()');
  });

  window.onclick = function(event) {
    const modal = document.getElementById('registrationModal');
    if (event.target === modal) {
      closeModal();
    }
  }
});
</script>
</body></html>