<form class="row g-3" method="post" action="traitement/userTraitement.php">
<div class="col-8">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" name="nom">
  </div>
  <div class="col-8">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" name="prenom">
  </div>
  <div class="col-8">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-8">
    <label for="motDePasse" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="motDePasse" name="motDePasse">
  </div>
  <div class="col-8">
    <label for="confirmedMotDePasse" class="form-label">Confirmer Mot de passe</label>
    <input type="password" class="form-control" id="confirmedMotDePasse" name="confirmedMotDePasse">
  </div>
  
  <div class="col-12">
    <button type="submit" class="btn btn-primary" name="submit">S'inscrire</button>
  </div>
</form>
