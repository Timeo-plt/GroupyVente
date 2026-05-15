<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parrainage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-body">
                        <h1 class="card-title mb-4">Parrainage</h1>
                        <p class="lead">Bienvenue sur la page de parrainage !</p>
                        <p>Invitez vos amis à rejoindre notre plateforme et bénéficiez de récompenses exclusives.</p>
                        
                        <div class="alert alert-info mt-4">
                            <p class="mb-0"><strong>✓ Pour chaque ami qui s'inscrit</strong> via votre invitation, vous recevrez <span class="badge bg-success">30 points</span> de fidélité.</p>
                        </div>
                        
                        <div class="alert alert-warning">
                            <p class="mb-0"><strong>✓ Au bout de 100 points</strong> de fidélité, vous avez une <span class="badge bg-danger">réduction de 10%</span> sur chaque prévente.</p>
                        </div>
                        
                        <form action="traitement_parrainage.php" method="POST" class="mt-5">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email de votre ami :</label>
                                <input type="email" id="email" name="email" class="form-control" placeholder="exemple@email.com" required>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Envoyer l'invitation</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>