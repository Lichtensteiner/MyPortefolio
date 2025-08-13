<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ludo Consulting</title>
        <link rel="icon" type="image/svg+xml" href="/assets/icones/logoLudo.PNG">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
        <link rel="shortcut icon" href="./assets/icones/logoLudo.PNG">
        <link rel="stylesheet" href="./assets/css/index.css">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>
<header class="header animate">
  <h1>Consultant Informatique & Formateur Web/Mobile</h1>
  <p>Solutions innovantes pour vos projets digitaux</p>
</header>

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
      
    </div>
    <!--<div class="nav-right">
      <div class="notification-icon" onclick="toggleNotifications()">
        <i class="fas fa-bell"></i>
        <span class="notification-badge">3</span>
      </div> -->
      <div id="notifications-box" class="hidden">
        <h4>Notifications</h4>
        <ul>
          <li>Nouvel utilisateur inscrit</li>
          <li>Nouvelle commande passée</li>
          <li>Mise à jour de votre profil</li>
        </ul>
        <a href="notifications.html" class="view-all">Voir toutes les notifications</a>
      </div>
      <div id="userSection"></div>
    </div>
  </div>
</nav>

<section id="news" class="news-ticker">
  <div class="container">
    <div class="news-content">
      <h3>Actualités Informatique</h3>
      <div class="news-items">
        <marquee behavior="scroll" direction="left" scrollamount="5">
          <div class="news-item">
            <img src="images/workshop.jpg" alt="Workshop" />
            🌍 Ludo Consulting organise un workshop à Libreville le 15 décembre.
          </div>
          <div class="news-item">
            <img src="images/app-update.jpg" alt="App Update" />
            📢 Nouvelles fonctionnalités sur l'application mobile disponible.
          </div>
          <div class="news-item">
            <img src="images/react-course.jpg" alt="React Course" />
            🌟 Formation avancée sur React.js en ligne !
          </div>
        </marquee>
      </div>
    </div>
  </div>
</section>

<section id="about" class="services animate">
  <div class="container">
    <h2 class="text-center mb-5">À Propos de Ludo Consulting</h2>
    <div class="row align-items-center">
      <div class="col-md-6">
        <div class="stats-counter">6+</div>
        <p>Années d'expérience</p>
        <div class="stats-counter">5+</div>
        <p>Projets Réalisés</p>
        <div class="stats-counter">10+</div>
        <p>Étudiants Formés</p>
      </div>
      <div class="col-md-6">
        <h3>Notre Mission</h3>
        <p>Chez Ludo Consulting, nous nous engageons à fournir des solutions informatiques innovantes et des formations
           de qualité pour aider nos clients à réussir dans leur transformation digitale.</p>
      </div>
    </div>
  </div>
</section>

<section id="services" class="services animate">
  <h2>Mes Services</h2>
  <div class="service-grid">
    <div class="service-card">
      <i class="fas fa-laptop-code service-icon"></i>
      <h3>Consultation Informatique</h3>
      <p>Analyse et optimisation de vos systèmes informatiques. Solutions personnalisées pour améliorer votre infrastructure.</p>
    </div>
    
    <div class="service-card">
      <i class="fas fa-mobile-alt service-icon"></i>
      <h3>Formation Mobile</h3>
      <p>Formation sur le développement d'applications mobiles iOS et Android. Cours pratiques et théoriques adaptés à tous niveaux.</p>
    </div>
    
    <div class="service-card">
      <i class="fas fa-code service-icon"></i>
      <h3>Formation Web</h3>
      <p>Apprentissage des technologies web modernes. HTML, CSS, JavaScript, React, Node.js et plus encore.</p>
    </div>
  </div>
</section>

<section id="tutorials" class="services animate">
  <div class="container">
    <h2 class="text-center mb-5">Tutoriels Vidéo</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="ratio ratio-16x9">
            <video src="./assets/videos/GKTX1182.MP4" autoplay muted loop playsinline>
              Votre navigateur ne supporte pas la lecture vidéo.
            </video>
          </div>
          <div class="card-body">
            <h5 class="card-title">Introduction de la configration </h5>
            <p class="card-text">Apprenez les bases du développement du réseau informatique avec ce tutoriel.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="ratio ratio-16x9">
            <video src="./assets/videos/Bleu Foncé Technologie Moderne Entreprise Informatique Présentation_20240515_000720_0000.mp4" autoplay muted loop playsinline>
              Votre navigateur ne supporte pas la lecture vidéo.
            </video>
          </div>
          <div class="card-body">
            <h5 class="card-title">Présentation de notre secteur </h5>
            <p class="card-text">différent projet de conception et soutenance de votre projet avenir.</p>
          </div>
        </div>
      </div>
      
      <div class="col-md-4 mb-4">
        <div class="card">
          <div class="ratio ratio-16x9">
            <video src="./assets/videos/video stage.mp4" autoplay muted loop playsinline>
              Votre navigateur ne supporte pas la lecture vidéo.
            </video>
          </div>
          <div class="card-body">
            <h5 class="card-title">Java Avancé</h5>
            <p class="card-text">Maîtrisez les concepts avancés de Java avec Sprint Boots.</p>
          </div>
        </div>
      </div>
      
</section>

<section id="events" class="services animate">
  <div class="container">
    <h2 class="text-center mb-5">Nos Événements</h2>
    <div class="row">
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="./assets/img/Vie5.JPG" alt="Atelier de formation web à Libreville, style moderne et professionnel" class="card-img-top" width="400" height="300">
          <div class="card-body">
            <h5 class="card-title">Workshop Web Development</h5>
            <p class="card-text">Session intensive de formation à Libreville</p>
            <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Libreville, Gabon</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="./assets/img/Img2.JPG" alt="Conférence tech à Libreville, ambiance professionnelle" class="card-img-top" width="400" height="300">
          <div class="card-body">
            <h5 class="card-title">Tech Conference 2024</h5>
            <p class="card-text">Conférence sur les nouvelles technologies</p>
            <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Libreville, Gabon</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="./assets/img/Vie15.JPG" alt="Hackathon à Libreville, participants concentrés" class="card-img-top" width="400" height="300">
          <div class="card-body">
            <h5 class="card-title">Hackathon Innovation</h5>
            <p class="card-text">48h de coding challenge en php et bien d'autre langage informatique.</p>
            <p class="text-muted"><i class="fas fa-map-marker-alt"></i> Libreville, Gabon</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="forum" class="services animate">
  <div class="container">
    <h2 class="text-center mb-5">Forum de Discussion</h2>
    <div class="row">
      <div class="col-md-8 mx-auto">
        <div class="card mb-4">
          <div class="card-header">
            <h5>Discussions Récentes</h5>
          </div>
          <div class="list-group list-group-flush">
            <a href="https://forum.ludoconsulting.com/topic1" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Développement Web Frontend</h6>
                <small>3 jours</small>
              </div>
              <p class="mb-1">Discussion sur les frameworks modernes</p>
            </a>
            <a href="https://forum.ludoconsulting.com/topic2" class="list-group-item list-group-item-action">
              <div class="d-flex w-100 justify-content-between">
                <h6 class="mb-1">Mobile Development</h6>
                <small>5 jours</small>
              </div>
              <p class="mb-1">Questions sur le développement Android</p>
            </a>
          </div>
        </div>
        <div class="text-center">
          <a href="https://forum.ludoconsulting.com" class="btn btn-primary">Accéder au Forum</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="blog" class="services animate">
  <div class="container">
    <h2 class="text-center mb-5">Blog & Actualités</h2>
    <div class="row">
      <div class="col-md-4">
        <article class="blog-post">
          <h3>Les Tendances du Développement Web </h3>
          <div class="blog-meta">
            <i class="far fa-calendar"></i> 15 Septembre 2024
            <i class="far fa-user ms-3"></i> Mr MVE ZOGO
          </div>
          <p>Découvrez les dernières tendances en matière de développement web et comment elles peuvent impacter.</p>
          <a href="https://ludoconsulting.com/blog/web-trends" class="btn btn-primary mt-3">Lire plus</a>
        </article>
      </div>
      <div class="col-md-4">
        <article class="blog-post">
          <h3>Sécurité Mobile : Les Bonnes Pratiques avec hacking</h3>
          <div class="blog-meta">
            <i class="far fa-calendar"></i> 10 Octobre 2024
            <i class="far fa-user ms-3"></i> Mr MVE ZOGO
          </div>
          <p>Guide complet sur la sécurisation de vos applications mobiles et la protection des données utilisateurs.</p>
          <a href="https://ludoconsulting.com/blog/mobile-security" class="btn btn-primary mt-3">Lire plus</a>
        </article>
      </div>
      <div class="col-md-4">
        <article class="blog-post">
          <h3>Formation Continue en IT</h3>
          <div class="blog-meta">
            <i class="far fa-calendar"></i> 5 Septembre 2024
            <i class="far fa-user ms-3"></i> Mr MVE ZOGO
          </div>
          <p>L'importance de la formation continue dans le domaine de l'informatique et comment rester à jour.</p>
          <a href="https://ludoconsulting.com/blog/formation-continue" class="btn btn-primary mt-3">Lire plus</a>
        </article>
      </div>
    </div>
  </div>
</section>

<section id="contact" class="animate">
  <div class="container">
    <h2 class="text-center mb-5">Contactez-moi</h2>
    <div class="row">
      <!-- Contact Form Column -->
      <div class="col-md-6">
        <div class="contact-form">
          <form id="contactForm">
            <div class="form-group">
              <label for="name">Nom</label>
              <input type="text" id="name" class="form-control" required>
            </div>
            
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" id="email" class="form-control" required>
            </div>
            
            <div class="form-group flex-grow-1">
              <label for="message">Message</label>
              <textarea id="message" class="form-control" required></textarea>
            </div>
            
            <button type="submit" class="btn">Envoyer</button>
          </form>
        </div>
      </div>
      
      <!-- Map Column -->
      <div class="col-md-6">
        <div class="map-container">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127100.36623379847!2d9.3851799!3d0.3915278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x107f3b76d825e807%3A0x849025bc4416daa4!2sLibreville%2C%20Gabon!5e0!3m2!1sfr!2s!4v1656238456789!5m2!1sfr!2s"
            width="100%" 
            height="100%" 
            style="border:0; border-radius: 8px;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
          </iframe>
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
<script src="./assets/js/index.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    const newsData = [
      {
        text: "🌍 Ludo Consulting organise un workshop à Libreville le 15 décembre.",
        img: "./assets/img/wor.jpg"
      },
      {
        text: "📢 Nouvelles fonctionnalités sur l'application mobile disponible.",
        img: "./assets/img/up.png"
      },
      {
        text: "🌟 Formation avancée sur React.js en ligne !",
        img: "./assets/img/react.jpg"
      }
    ];

    const marquee = document.querySelector(".news-items marquee");
    marquee.innerHTML = newsData
      .map(
        (news) => `
        <div class="news-item">
          <img src="${news.img}" alt="Actualité " />
          ${news.text}
        </div>
      `
      )
      .join("");
  });

  function toggleNotifications() {
    const notificationsBox = document.getElementById('notifications-box');
  
    // Toggle la visibilité de la boîte
    if (notificationsBox.style.display === 'block') {
      notificationsBox.style.display = 'none'; // Cache la boîte
    } else {
      notificationsBox.style.display = 'block'; // Affiche la boîte
    }
  }
  
  
</script>

</body>
</html>