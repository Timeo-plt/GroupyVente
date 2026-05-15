<?php
require_once('fonctions/login_fonction.php');
if(isset($_POST['submit'])){
    connectUser($_POST);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion — Groupe Vente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background-color: #f0f2f5;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .login-card {
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.10);
        }
        .login-header {
            background-color: #1a3c5e;
            border-radius: 12px 12px 0 0;
            padding: 2rem;
            text-align: center;
        }
        .login-header h1 {
            font-size: 1.4rem;
            font-weight: 600;
            color: #fff;
            margin: 0;
            letter-spacing: 0.5px;
        }
        .login-header p {
            color: #a8c4de;
            font-size: 0.85rem;
            margin: 0.4rem 0 0;
        }
        .form-control:focus {
            border-color: #1a3c5e;
            box-shadow: 0 0 0 0.2rem rgba(26,60,94,0.15);
        }
        .btn-login {
            background-color: #1a3c5e;
            border-color: #1a3c5e;
            font-weight: 500;
        }
        .btn-login:hover {
            background-color: #15304d;
            border-color: #15304d;
        }
        .input-group-text {
            background-color: #f8f9fa;
            color: #6c757d;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-10 col-md-7 col-lg-5 col-xl-4">

            <div class="card login-card">
                <div class="login-header">
                    <i class="bi bi-bag-heart-fill fs-2 text-white mb-2 d-block"></i>
                    <h1>Groupe Vente</h1>
                    <p>Connectez-vous à votre espace</p>
                </div>

                <div class="card-body p-4">
                    <form action="#" method="post">

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold small">Adresse e-mail</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                                <input type="email" name="email" id="email" class="form-control"
                                       placeholder="exemple@mail.com" required>
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="motdepasse" class="form-label fw-semibold small">Mot de passe</label>
                            <div class="input-group">
                                <span class="input-group-text"><i class="bi bi-lock"></i></span>
                                <input type="password" name="motdepasse" id="motdepasse" class="form-control"
                                       placeholder="••••••••" required>
                            </div>
                        </div>

                        <button type="submit" name="submit" class="btn btn-login btn-primary w-100 py-2">
                            <i class="bi bi-box-arrow-in-right me-1"></i> Se connecter
                        </button>

                    </form>
                </div>

                <div class="card-footer bg-white text-center py-3 rounded-bottom" style="border-top: 1px solid #e9ecef;">
                    <span class="text-muted small">Pas encore de compte ?</span>
                    <a href="register.php" class="small fw-semibold ms-1 text-decoration-none" style="color:#1a3c5e;">
                        S'inscrire
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
