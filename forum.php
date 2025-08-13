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
  <title>Forum - Ludo Consulting</title>>
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

.forum-category {
  background: white;
  border-radius: 8px;
  padding: 1.5rem;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
  transition: transform 0.3s;
}

.forum-category:hover {
  transform: translateY(-3px);
}

.forum-topic {
  border-bottom: 1px solid #eee;
  padding: 1rem 0;
}

.forum-topic:last-child {
  border-bottom: none;
}

.topic-stats {
  font-size: 0.9rem;
  color: var(--secondary);
}

.tag {
  background: var(--light);
  color: var(--primary);
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.8rem;
  margin-right: 0.5rem;
}

.forum-search {
  background: white;
  padding: 2rem;
  border-radius: 8px;
  margin-bottom: 2rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.popular-topics {
  background: white;
  padding: 1.5rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.topic-author {
  display: flex;
  align-items: center;
  gap: 0.5rem;
}

.author-avatar {
  width: 30px;
  height: 30px;
  border-radius: 50%;
  object-fit: cover;
}

.status-badge {
  padding: 0.25rem 0.75rem;
  border-radius: 20px;
  font-size: 0.8rem;
}

.status-resolved {
  background: #4ade80;
  color: white;
}

.status-ongoing {
  background: #fbbf24;
  color: white;
}

.forum-filters {
  display: flex;
  gap: 1rem;
  margin-bottom: 1rem;
  flex-wrap: wrap;
}

.filter-btn {
  background: white;
  border: 1px solid var(--primary);
  color: var(--primary);
  padding: 0.5rem 1rem;
  border-radius: 20px;
  cursor: pointer;
  transition: all 0.3s;
}

.filter-btn:hover, .filter-btn.active {
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

.create-topic-btn {
  position: fixed;
  bottom: 30px;
  right: 30px;
  background: var(--primary);
  color: white;
  padding: 1rem;
  border-radius: 50%;
  box-shadow: 0 4px 12px rgba(37, 99, 235, 0.3);
  cursor: pointer;
  transition: transform 0.3s;
  z-index: 99;
}

.create-topic-btn:hover {
  transform: scale(1.1);
}

.trending-tags {
  background: white;
  padding: 1.5rem;
  border-radius: 8px;
  margin-bottom: 1.5rem;
  box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

.tag-cloud {
  display: flex;
  flex-wrap: wrap;
  gap: 0.5rem;
  margin-top: 1rem;
}

.category-stats {
  display: flex;
  justify-content: space-between;
  margin-top: 1rem;
  color: var(--secondary);
  font-size: 0.9rem;
}

.topic-preview {
  color: var(--secondary);
  font-size: 0.9rem;
  margin-top: 0.5rem;
  display: -webkit-box;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

.last-activity {
  font-size: 0.8rem;
  color: var(--secondary);
  margin-top: 0.5rem;
}

.tooltip {
  position: relative;
  display: inline-block;
}

.tooltip:hover .tooltip-text {
  visibility: visible;
  opacity: 1;
}

.tooltip-text {
  visibility: hidden;
  opacity: 0;
  background-color: var(--dark);
  color: white;
  text-align: center;
  padding: 5px 10px;
  border-radius: 6px;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  transform: translateX(-50%);
  transition: opacity 0.3s;
  font-size: 0.8rem;
  white-space: nowrap;
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

<section class="contact-hero animate">
  <div class="container">
    <h1>Forum Communautaire</h1>
    <p class="lead">Échangez, apprenez et partagez avec la communauté Ludo Consulting</p>
  </div>
</section>

<div class="container py-5">
  <div class="row">
    <div class="col-md-8">
      <div class="forum-search mb-4">
        <h4>Rechercher dans le forum</h4>
        <div class="input-group">
          <input type="text" class="form-control" placeholder="Rechercher un sujet...">
          <button class="btn btn-primary">Rechercher</button>
        </div>
        <div class="forum-filters mt-3">
          <button class="filter-btn active">Tous</button>
          <button class="filter-btn">Résolu</button>
          <button class="filter-btn">Non résolu</button>
          <button class="filter-btn">Popular</button>
          <button class="filter-btn">Récent</button>
        </div>
      </div>

      <div class="forum-category mb-4">
        <h3 class="mb-3">Catégories Populaires</h3>
        <div class="row">
          <div class="col-md-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="fas fa-code"></i> Programmation</h5>
                <div class="category-stats">
                  <span>345 sujets</span>
                  <span>1.2k messages</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="fas fa-paint-brush"></i> Design</h5>
                <div class="category-stats">
                  <span>234 sujets</span>
                  <span>890 messages</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 mb-3">
            <div class="card h-100">
              <div class="card-body">
                <h5><i class="fas fa-server"></i> DevOps</h5>
                <div class="category-stats">
                  <span>178 sujets</span>
                  <span>567 messages</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="forum-category">
        <h3><i class="fas fa-laptop-code me-2"></i>Développement Web</h3>
        <div class="forum-topic">
          <div class="d-flex justify-content-between align-items-center">
            <h5><a href="#" class="text-dark" data-topic-id="1">Comment optimiser les performances d'une application React?</a></h5>
            <span class="status-badge status-resolved">Résolu</span>
          </div>
          <div class="topic-stats d-flex justify-content-between align-items-center" data-date="2023-10-01">
            <div class="topic-author">
              <img src="./assets/img/Vie14.JPG" alt="Avatar utilisateur" class="author-avatar">
              <span>Lichtensteiner Stawiskowski</span>
            </div>
            <div>
              <span><i class="fas fa-comment me-1"></i> 23 réponses</span>
              <span class="ms-3"><i class="fas fa-eye me-1"></i> 156 vues</span>
            </div>
          </div>
        </div>
      </div>

      <div class="forum-category">
        <h3><i class="fas fa-database me-2"></i>Base de Données</h3>
        <div class="forum-topic">
          <div class="d-flex justify-content-between align-items-center">
            <h5><a href="#" class="text-dark" data-topic-id="2">Comment gérer les transactions en SQL?</a></h5>
            <span class="status-badge status-ongoing">En cours</span>
          </div>
          <div class="topic-stats d-flex justify-content-between align-items-center" data-date="2023-10-02">
            <div class="topic-author">
              <img src="./assets/img/Img5.JPG" alt="Avatar utilisateur" class="author-avatar">
              <span>Mve Zogo</span>
            </div>
            <div>
              <span><i class="fas fa-comment me-1"></i> 10 réponses</span>
              <span class="ms-3"><i class="fas fa-eye me-1"></i> 90 vues</span>
            </div>
          </div>
        </div>
      </div>

      <div class="forum-category">
        <h3><i class="fas fa-mobile-alt me-2"></i>Développement Mobile</h3>
        <div class="forum-topic">
          <div class="d-flex justify-content-between align-items-center">
            <h5><a href="#" class="text-dark" data-topic-id="3">Meilleures pratiques pour l'App iOS?</a></h5>
            <span class="status-badge status-resolved">Résolu</span>
          </div>
          <div class="topic-stats d-flex justify-content-between align-items-center" data-date="2023-10-03">
            <div class="topic-author">
              <img src="./assets/img/Img3.JPG" alt="Avatar utilisateur" class="author-avatar">
              <span>Par Mr Mve Zogo et Mr Ossima</span>
            </div>
            <div>
              <span><i class="fas fa-comment me-1"></i> 5 réponses</span>
              <span class="ms-3"><i class="fas fa-eye me-1"></i> 45 vues</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="trending-tags mb-4">
        <h4>Tags Populaires</h4>
        <div class="tag-cloud">
          <span class="tag">#JavaScript</span>
          <span class="tag">#Python</span>
          <span class="tag">#React</span>
          <span class="tag">#DevOps</span>
          <span class="tag">#AWS</span>
          <span class="tag">#UI/UX</span>
        </div>
      </div>

      <div class="popular-topics">
        <h4>Sujets Populaires</h4>
        <ul class="list-unstyled">
          <li class="mb-3">
            <a href="#" class="text-dark" data-topic-id="4">
              <div class="d-flex justify-content-between">
                <span>Meilleures pratiques SEO 2024</span>
                <small class="text-muted">324 vues</small>
              </div>
            </a>
          </li>
          <li class="mb-3">
            <a href="#" class="text-dark" data-topic-id="5">
              <div class="d-flex justify-content-between">
                <span>Comment sécuriser une API REST?</span>
                <small class="text-muted">210 vues</small>
              </div>
            </a>
          </li>
          <li class="mb-3">
            <a href="#" class="text-dark" data-topic-id="6">
              <div class="d-flex justify-content-between">
                <span>Les tendances du design UI/UX</span>
                <small class="text-muted">189 vues</small>
              </div>
            </a>
          </li>
        </ul>
      </div>

      <div class="popular-topics">
        <h4>Statistiques Forum</h4>
        <ul class="list-unstyled">
          <li class="mb-2"><i class="fas fa-users me-2"></i>1,234 membres</li>
          <li class="mb-2"><i class="fas fa-comments me-2"></i>5,678 discussions</li>
          <li class="mb-2"><i class="fas fa-reply me-2"></i>12,345 réponses</li>
        </ul>
      </div>

      <div class="popular-topics">
        <h4>Top Contributeurs</h4>
        <ul class="list-unstyled">
          <li class="mb-2">Alice Mezui</li>
          <li class="mb-2">Pierre Ondo</li>
          <li class="mb-2">Sophie Mengue</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<button class="create-topic-btn" onclick="openCreateTopic()">
  <i class="fas fa-plus fa-lg"></i>
</button>

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

  const searchInput = document.querySelector('.forum-search input');
  const searchButton = document.querySelector('.forum-search button');

  searchButton.addEventListener('click', function() {
    const searchTerm = searchInput.value.toLowerCase();
    const forumTopics = document.querySelectorAll('.forum-topic');
    
    forumTopics.forEach(topic => {
      const topicTitle = topic.querySelector('h5').textContent.toLowerCase();
      if(topicTitle.includes(searchTerm)) {
        topic.style.display = 'block';
      } else {
        topic.style.display = 'none';
      }
    });
  });

  document.querySelectorAll('.forum-topic h5 a').forEach(topicLink => {
    topicLink.addEventListener('click', function(e) {
      e.preventDefault();
      const topicTitle = this.textContent;
      const topicId = this.getAttribute('data-topic-id') || Math.random().toString(36).substr(2, 9);
      
      window.location.href = `https://ludoconsulting.com/forum/topic/${topicId}`;
    });
  });

  const filterButtons = document.querySelectorAll('.filter-btn');
  filterButtons.forEach(button => {
    button.addEventListener('click', function() {
      filterButtons.forEach(btn => btn.classList.remove('active'));
      this.classList.add('active');
      
      const filter = this.textContent.toLowerCase();
      const topics = document.querySelectorAll('.forum-topic');
      
      topics.forEach(topic => {
        const status = topic.querySelector('.status-badge').textContent.toLowerCase();
        const views = parseInt(topic.querySelector('.fa-eye + span').textContent);
        const date = topic.querySelector('.topic-stats').dataset.date;
        
        switch(filter) {
          case 'résolu':
            topic.style.display = status.includes('résolu') ? 'block' : 'none';
            break;
          case 'non résolu':
            topic.style.display = status.includes('en cours') ? 'block' : 'none';
            break;
          case 'popular':
            topic.style.display = views > 100 ? 'block' : 'none';
            break;
          case 'récent':
            const isRecent = new Date(date) > new Date(Date.now() - 7 * 24 * 60 * 60 * 1000);
            topic.style.display = isRecent ? 'block' : 'none';
            break;
          default:
            topic.style.display = 'block';
        }
      });
    });
  });

  document.querySelectorAll('.tag').forEach(tag => {
    tag.style.cursor = 'pointer';
    tag.addEventListener('click', function() {
      const tagText = this.textContent.slice(1);
      searchInput.value = tagText;
      searchButton.click();
    });
  });

  document.querySelectorAll('.popular-topics a').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const topicTitle = this.querySelector('span').textContent;
      const topicId = this.getAttribute('data-topic-id') || Math.random().toString(36).substr(2, 9);
      window.location.href = `https://ludoconsulting.com/forum/topic/${topicId}`;
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

// Add new functions for creating topics
function openCreateTopic() {
  const modal = document.createElement('div');
  modal.className = 'modal fade';
  modal.innerHTML = `
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Créer un nouveau sujet</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body">
          <form id="newTopicForm">
            <div class="mb-3">
              <label class="form-label">Titre</label>
              <input type="text" class="form-control" required>
            </div>
            <div class="mb-3">
              <label class="form-label">Catégorie</label>
              <select class="form-select" required>
                <option value="">Choisir une catégorie</option>
                <option>Développement Web</option>
                <option>Base de Données</option>
                <option>Développement Mobile</option>
              </select>
            </div>
            <div class="mb-3">
              <label class="form-label">Description</label>
              <textarea class="form-control" rows="4" required></textarea>
            </div>
            <div class="mb-3">
              <label class="form-label">Tags</label>
              <input type="text" class="form-control" placeholder="Séparez les tags par des virgules">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
          <button type="button" class="btn btn-primary" onclick="submitTopic()">Publier</button>
        </div>
      </div>
    </div>
  `;
  document.body.appendChild(modal);
  new bootstrap.Modal(modal).show();
}

function submitTopic() {
  const form = document.getElementById('newTopicForm');
  const title = form.querySelector('input[type="text"]').value;
  const category = form.querySelector('select').value;
  const description = form.querySelector('textarea').value;
  const tags = form.querySelector('input[placeholder*="tags"]').value;
  
  if(title && category && description) {
    alert('Votre sujet a été créé avec succès!');
    location.reload();
  } else {
    alert('Veuillez remplir tous les champs obligatoires');
  }
}

// Add auto-refresh for forum stats
setInterval(() => {
  const views = document.querySelectorAll('.fa-eye + span');
  views.forEach(view => {
    const current = parseInt(view.textContent);
    view.textContent = ` ${current + Math.floor(Math.random() * 3)}`;
  });
}, 30000);
</script>
</body></html>