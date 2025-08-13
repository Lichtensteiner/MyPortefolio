<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link rel="icon" type="image/svg+xml" href="https://ludoconsulting.com/favicon.ico">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
            <link rel="stylesheet" href="./assets/css/blog.css">
            <link rel="shortcut icon" href="./assets/icones/logoLudo.PNG">
      <title> Ludo Consulting </title>
</head>
<body>
<nav class="navbar">
  <div class="nav-container">
    <img src="./assets/icones/logoLudo.PNG" alt="Ludo Consulting Logo" height="40">
    <ul class="nav-links">
      <li><a href="./index.php">Accueil</a></li>
      <li><a href="./services.php">Services</a></li>
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

<section class="blog-hero animate">
  <div class="container">
    <h1>Blog & Actualités</h1>
    <p class="lead">Restez informé des dernières tendances en technologie et innovation</p>
  </div>
</section>

<div class="container">
  <div class="row">
    <div class="col-lg-8">
      <article class="featured-post">
        <h2>Intelligence Artificielle : Les Tendances 2024</h2>
        <div class="blog-meta">
          <span><i class="far fa-calendar"></i> 15 Mars 2024</span>
          <span><i class="far fa-user"></i> Par Mve Zogo</span>
        </div>
        <img src="./assets/img/AI.jpg" alt="IA Trends 2024" class="img-fluid rounded mb-3">
        <p>Découvrez les dernières avancées en matière d'intelligence artificielle et leur impact sur le monde professionnel...</p>
        <a href="#" class="btn btn-primary">Lire la suite</a>
      </article>

      <div class="row">
        <div class="col-md-6">
          <article class="blog-card" data-category="cloud">
            <img src="./assets/img/DATA Base.jpg" alt="Cloud Computing" class="blog-image">
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="far fa-calendar"></i> 10 Mars 2024</span>
              </div>
              <h3>Migration vers le Cloud</h3>
              <p>Stratégies efficaces pour une transition réussie...</p>
              <div class="blog-tags">
                <span class="blog-tag">Cloud</span>
                <span class="blog-tag">Technologie</span>
              </div>
              <a href="#" class="btn btn-outline-primary">Lire plus</a>
            </div>
          </article>
        </div>
        <div class="col-md-6">
          <article class="blog-card" data-category="security">
            <img src="./assets/img/SC.webp" alt="Cybersécurité" class="blog-image">
            <div class="blog-content">
              <div class="blog-meta">
                <span><i class="far fa-calendar"></i> 5 Mars 2024</span>
              </div>
              <h3>Cybersécurité en 2024</h3>
              <p>Nouveaux défis et solutions pour protéger vos données...</p>
              <div class="blog-tags">
                <span class="blog-tag">Cybersécurité</span>
                <span class="blog-tag">Technologie</span>
              </div>
              <a href="#" class="btn btn-outline-primary">Lire plus</a>
            </div>
          </article>
        </div>
      </div>

      <section class="my-5">
        <h2>Prochaines Conférences</h2>
        <div class="conference-card">
          <h3>Digital Summit Libreville 2024</h3>
          <p class="conference-date">20-22 Avril 2024</p>
          <p>Une conférence majeure sur la transformation digitale en Afrique...</p>
          <a href="#" class="btn btn-primary">S'inscrire</a>
        </div>
      </section>

      <section class="trending-topics my-5">
        <h2>Sujets Tendances</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="trending-card">
              <div class="trend-icon">
                <i class="fas fa-robot"></i>
              </div>
              <h4>IA Générative</h4>
              <p>Explorez les dernières avancées en IA générative et leur impact sur l'industrie.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="trending-card">
              <div class="trend-icon">
                <i class="fas fa-shield-alt"></i>
              </div>
              <h4>Cybersécurité 2024</h4>
              <p>Nouvelles menaces et solutions de protection pour les entreprises.</p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="trending-card">
              <div class="trend-icon">
                <i class="fas fa-cloud"></i>
              </div>
              <h4>Cloud Native</h4>
              <p>Architecture moderne et déploiement dans le cloud.</p>
            </div>
          </div>
        </div>
      </section>

      <section class="newsletter-section my-5">
        <div class="newsletter-container">
          <h2>Restez à jour</h2>
          <p>Abonnez-vous à notre newsletter pour recevoir les derniers articles.</p>
          <form class="newsletter-form">
            <div class="input-group">
              <input type="email" class="form-control" placeholder="Votre adresse email">
              <button class="btn btn-primary">S'abonner</button>
            </div>
          </form>
        </div>
      </section>
    </div>

    <div class="col-lg-4">
      <div class="blog-sidebar">
        <div class="search-form">
          <input type="text" placeholder="Rechercher...">
          <button><i class="fas fa-search"></i></button>
        </div>

        <div class="categories">
          <h3>Catégories</h3>
          <ul class="category-list">
            <li><a href="#" data-category="transformation" class="active">Transformation Digitale (12)</a></li>
            <li><a href="#" data-category="ai">Intelligence Artificielle (8)</a></li>
            <li><a href="#" data-category="cloud">Cloud Computing (15)</a></li>
            <li><a href="#" data-category="security">Cybersécurité (10)</a></li>
            <li><a href="#" data-category="innovation">Innovation (14)</a></li>
            <li><a href="#" data-category="development">Développement Web (7)</a></li>
            <li><a href="#" data-category="mobile">Applications Mobiles (6)</a></li>
          </ul>
        </div>

        <div class="popular-posts">
          <h3>Articles Populaires</h3>
          <div class="popular-post-item">
            <img src="./assets/img/SCTY.jpg" alt="Cybersécurité" class="popular-post-image">
            <div>
              <h4>Cybersécurité en 2024</h4>
              <small>5 Mars 2024</small>
            </div>
          </div>
          <!-- Add more popular posts -->
        </div>
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
    <p>&copy; 2024 Ludo_Consulting. Tous droits réservés.</p>
  </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="./assets/js/blog.js"></script>
</body>
</html>