
<style>
    /* Style global */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 0;
  }
  
  /* Section de l'inscription */
  #form-section {
    background-color: #ffffff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 40px;
    max-width: 600px;
    margin: 50px auto;
    animation: fadeIn 0.5s ease-in-out;
  }
  
  /* Animation de la section */
  @keyframes fadeIn {
    0% {
      opacity: 0;
      transform: translateY(20px);
    }
    100% {
      opacity: 1;
      transform: translateY(0);
    }
  }
  
  /* Titre de la section */
  h2 {
    color: #333;
    font-size: 24px;
    margin-bottom: 20px;
  }
  
  /* Étiquette des champs */
  .form-label {
    color: #555;
    font-size: 14px;
    font-weight: bold;
  }
  
  /* Champ de saisie */
  .form-control {
    border-radius: 5px;
    border: 1px solid #ddd;
    padding: 12px;
    font-size: 16px;
    margin-top: 8px;
    width: 100%;
    box-sizing: border-box;
  }
  
  /* Bordure des champs au focus */
  .form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
  }
  
  /* Bouton d'inscription */
  .btn-primary {
    background-color: #007bff;
    border: none;
    color: white;
    font-size: 16px;
    font-weight: bold;
    padding: 15px;
    border-radius: 5px;
    width: 100%;
    cursor: pointer;
    transition: background-color 0.3s;
  }
  
  .btn-primary:hover {
    background-color: #0056b3;
  }
  
  /* Icônes */
  .form-control-icon {
    position: absolute;
    right: 15px;
    top: 50%;
    transform: translateY(-50%);
    color: #007bff;
  }
  
  /* Sélecteur de rôle */
  .form-select {
    border-radius: 5px;
    padding: 12px;
    font-size: 16px;
    margin-top: 8px;
    width: 100%;
    box-sizing: border-box;
    background-color: #f9f9f9;
  }
  
  /* Espacement entre les champs */
  .mb-3 {
    position: relative;
    margin-bottom: 20px;
  }
  
  /* Pied de page */
  footer {
    background-color: #333;
    color: white;
    padding: 15px;
    text-align: center;
    position: fixed;
    width: 100%;
    bottom: 0;
  }
  
  /* Style pour les icônes */
  i {
    font-size: 20px;
    margin-left: 10px;
  }
  
  /* Responsive */
  @media (max-width: 767px) {
    #form-section {
      padding: 25px;
      margin: 20px;
    }
  }
  
</style>

<section id="form-section" class="container my-5 animate">
    <h2 class="text-center mb-4">Inscription à Ludo Consulting</h2>
    <form action="" method="post" class="border p-4 rounded">
      <div class="mb-3">
        <label for="username" class="form-label">Nom d'utilisateur</label>
        <input type="text" id="username" name="username" class="form-control" placeholder="Entrez votre nom d'utilisateur" required>
      </div>
      <div class="mb-3">
        <label for="email" class="form-label">Adresse e-mail</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Entrez votre e-mail" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Mot de passe</label>
        <input type="password" id="password" name="password" class="form-control" placeholder="Choisissez un mot de passe" required>
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirmez le mot de passe</label>
        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirmez votre mot de passe" required>
      </div>
      <div class="mb-3">
        <label for="role" class="form-label">Rôle</label>
        <select id="role" name="role" class="form-select" required>
          <option value="">Sélectionnez un rôle</option>
          <option value="secretaire">Secrétaire</option>
          <option value="comptable">Comptable</option>
          <option value="direction">Direction</option>
          <option value="administrateur">Administrateur</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary w-100">S'inscrire</button>
    </form>
  </section>
  