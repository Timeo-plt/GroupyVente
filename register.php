<?php
require 'fonctions/login_fonction.php';
if(isset($_POST['submit_client'])){
    array_pop($_POST);
    addClient($_POST);
}
else if(isset($_POST['submit_vendeur'])){
    array_pop($_POST);
    addVendeur($_POST);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription — Groupe Vente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 2rem 0;
        }
        .register-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        }
        .register-header {
            background-color: #1a3c5e;
            border-radius: 12px 12px 0 0;
            padding: 1.8rem 2rem;
            text-align: center;
        }
        .register-header h1 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
            letter-spacing: 0.5px;
        }
        .register-header p {
            color: #a8c4de;
            font-size: 0.85rem;
            margin: 0.4rem 0 0;
        }
        .type-btn {
            border: 2px solid #1a3c5e;
            border-radius: 10px;
            padding: 1.2rem;
            background: #fff;
            color: #1a3c5e;
            font-weight: 600;
            transition: all 0.2s;
            width: 100%;
        }
        .type-btn:hover {
            background-color: #1a3c5e;
            color: #fff;
        }
        .type-btn i {
            display: block;
            font-size: 2rem;
            margin-bottom: 0.4rem;
        }
        .form-control:focus {
            border-color: #1a3c5e;
            box-shadow: 0 0 0 0.2rem rgba(26,60,94,0.15);
        }
        .btn-submit {
            background-color: #1a3c5e;
            border-color: #1a3c5e;
            font-weight: 500;
        }
        .btn-submit:hover {
            background-color: #15304d;
            border-color: #15304d;
        }
        .input-group-text {
            background-color: #f8f9fa;
            color: #6c757d;
        }
        .section-divider {
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            color: #6c757d;
            border-bottom: 1px solid #dee2e6;
            padding-bottom: 0.4rem;
            margin: 1.2rem 0 1rem;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-8 col-lg-6 col-xl-5">

            <div class="card register-card">
                <div class="register-header">
                    <i class="bi bi-person-plus-fill fs-2 text-white mb-2 d-block"></i>
                    <h1>Groupe Vente</h1>
                    <p>Créez votre compte</p>
                </div>

                <div class="card-body p-4">

                <?php if(!isset($_POST['client']) && !isset($_POST['vendeur'])): ?>

                    <p class="text-center text-muted mb-4 small">Vous souhaitez vous inscrire en tant que :</p>
                    <div class="row g-3">
                        <div class="col-6">
                            <form method="post" action="">
                                <button type="submit" name="client" class="type-btn">
                                    <i class="bi bi-person"></i>
                                    Client
                                </button>
                            </form>
                        </div>
                        <div class="col-6">
                            <form method="post" action="">
                                <button type="submit" name="vendeur" class="type-btn">
                                    <i class="bi bi-shop"></i>
                                    Vendeur
                                </button>
                            </form>
                        </div>
                    </div>

                <?php elseif(isset($_POST['client'])): ?>

                    <p class="text-muted small mb-3"><i class="bi bi-person me-1"></i>Inscription <strong>Client</strong></p>

                    <form method="post" action="#">

                        <div class="section-divider">Informations personnelles</div>

                        <div class="row g-2 mb-2">
                            <div class="col-6">
                                <label for="nom" class="form-label fw-semibold small">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Dupont" required>
                            </div>
                            <div class="col-6">
                                <label for="prenom" class="form-label fw-semibold small">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Jean" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="adresse" class="form-label fw-semibold small">Adresse</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="12 rue des Lilas, Paris" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="phone" class="form-label fw-semibold small">Téléphone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="06 00 00 00 00" required>
                            </div>
                        </div>

                        <div class="section-divider">Identifiants de connexion</div>

                        <div class="mb-2">
                            <label for="email" class="form-label fw-semibold small">Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="motdepasse" class="form-label fw-semibold small">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="••••••••" required>
                            </div>
                        </div>

                        <button type="submit" name="submit_client" class="btn btn-submit btn-primary w-100 py-2">
                            <i class="bi bi-check-lg me-1"></i> Créer mon compte
                        </button>
                    </form>

                <?php elseif(isset($_POST['vendeur'])): ?>

                    <p class="text-muted small mb-3"><i class="bi bi-shop me-1"></i>Inscription <strong>Vendeur</strong></p>

                    <form method="post" action="#">

                        <div class="section-divider">Informations personnelles</div>

                        <div class="row g-2 mb-2">
                            <div class="col-6">
                                <label for="nom" class="form-label fw-semibold small">Nom</label>
                                <input type="text" class="form-control" id="nom" name="nom" placeholder="Dupont" required>
                            </div>
                            <div class="col-6">
                                <label for="prenom" class="form-label fw-semibold small">Prénom</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Jean" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="adresse" class="form-label fw-semibold small">Adresse</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="12 rue des Lilas, Paris" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="phone" class="form-label fw-semibold small">Téléphone</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-telephone"></i></span>
                                <input type="text" class="form-control" id="phone" name="phone" placeholder="06 00 00 00 00" required>
                            </div>
                        </div>

                        <div class="section-divider">Identifiants de connexion</div>

                        <div class="mb-2">
                            <label for="email" class="form-label fw-semibold small">Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" class="form-control" id="email" name="email" placeholder="exemple@mail.com" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="motdepasse" class="form-label fw-semibold small">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" class="form-control" id="motdepasse" name="motdepasse" placeholder="••••••••" required>
                            </div>
                        </div>

                        <div class="section-divider">Informations entreprise</div>

                        <div class="mb-2">
                            <label for="nom_entreprise" class="form-label fw-semibold small">Nom de l'entreprise</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-building"></i></span>
                                <input type="text" class="form-control" id="nom_entreprise" name="nom_entreprise" placeholder="Ma Société SAS" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="siret" class="form-label fw-semibold small">Numéro SIRET</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-hash"></i></span>
                                <input type="text" class="form-control" id="siret" name="siret" placeholder="000 000 000 00000" required>
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="adresse_entreprise" class="form-label fw-semibold small">Adresse de l'entreprise</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-geo-alt"></i></span>
                                <input type="text" class="form-control" id="adresse_entreprise" name="adresse_entreprise" placeholder="1 avenue de la République, Lyon" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="email_pro" class="form-label fw-semibold small">E-mail professionnel</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-at"></i></span>
                                <input type="email" class="form-control" id="email_pro" name="email_pro" placeholder="contact@masociete.fr" required>
                            </div>
                        </div>

                        <button type="submit" name="submit_vendeur" class="btn btn-submit btn-primary w-100 py-2">
                            <i class="bi bi-check-lg me-1"></i> Créer mon compte
                        </button>
                    </form>

                <?php endif; ?>

                </div>

                <div class="card-footer bg-white text-center py-3 rounded-bottom" style="border-top: 1px solid #e9ecef;">
                    <span class="text-muted small">Déjà un compte ?</span>
                    <a href="index.php" class="small fw-semibold ms-1 text-decoration-none" style="color:#1a3c5e;">
                        Se connecter
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
