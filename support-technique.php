<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Support Technique</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="./assets/icones/logoLudo.PNG">
  <style>
    body {
      background-color: #f9f9f9;
      color: #333;
    }
    /* Style de la carte de support */
.support-card {
    background-color: #ffffff;
    border: 1px solid #ddd;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  }
  
  /* Titre et description */
  .support-card h4 {
    font-size: 1.5rem;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .support-card p {
    font-size: 1rem;
    margin-bottom: 15px;
  }
  
  /* Liste des guides */
  .guide-list {
    list-style: none;
    padding: 0;
  }
  
  .guide-list li {
    margin-bottom: 10px;
  }
  
  .guide-list li a {
    display: flex;
    align-items: center;
    gap: 10px;
    text-decoration: none;
    color: #007bff;
    font-weight: bold;
    border: 1px solid #007bff;
    padding: 10px 15px;
    border-radius: 5px;
    transition: background-color 0.3s, color 0.3s;
  }
  
  .guide-list li a:hover {
    background-color: #007bff;
    color: #ffffff;
  }
  
  /* Icônes */
  .guide-list li i {
    font-size: 1.2rem;
  }
  
  </style>
</head>
<body>
  <div class="support-container">
    <h2 class="text-center text-dark">Support Technique</h2>
    <p class="text-center mb-5">Trouvez les ressources et l'assistance dont vous avez besoin.</p>
    
    <!-- Section Guides PDF -->
    <div class="support-card mb-4">
      <h4>Guides d'Utilisation</h4>
      <p>Téléchargez nos guides pour mieux comprendre nos services :</p>
      <ul>
        <li><a href="docs/guide-installation.pdf" class="btn-download" download>Télécharger le Guide d'Installation</a></li>
        <li><a href="docs/guide-utilisation.pdf" class="btn-download" download>Télécharger le Guide d'Utilisation</a></li>
        <li><a href="docs/faq.pdf" class="btn-download" download>Télécharger la FAQ</a></li>
      </ul>
    </div>

    <!-- Section Assistance en Direct -->
    <div class="support-card mb-4">
      <h4>Assistance en Direct</h4>
      <p>Discutez avec un membre de notre équipe pour obtenir une assistance immédiate.</p>
      <a href="./chat.php" class="btn btn-primary"><i class="fas fa-comments"></i> Lancer le Chat</a>
    </div>

    <!-- Section Formulaire de Contact -->
    <div class="support-card">
      <h4>Envoyer une Demande de Support</h4>
      <form>
        <div class="form-group">
          <label for="name">Nom complet :</label>
          <input type="text" id="name" class="form-control" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <label for="email">Adresse email :</label>
          <input type="email" id="email" class="form-control" placeholder="Votre email" required>
        </div>
        <div class="form-group">
          <label for="issue">Sujet :</label>
          <input type="text" id="issue" class="form-control" placeholder="Sujet de votre demande" required>
        </div>
        <div class="form-group">
          <label for="message">Message :</label>
          <textarea id="message" rows="4" class="form-control" placeholder="Décrivez votre problème"></textarea>
        </div>
        <div class="text-center">
          <button type="submit" class="btn btn-success">Envoyer la Demande</button>
        </div>
      </form>
    </div>
  </div>
</body>
</html>
