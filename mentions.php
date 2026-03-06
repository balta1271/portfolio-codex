<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales | Tom GUERIN</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .legal-content {
            padding-top: 120px;
            padding-bottom: 60px;
            line-height: 1.8;
        }

        .legal-box {
            background: #111;
            border: 1px solid #333;
            padding: 40px;
            border-radius: 15px;
        }

        .legal-box h2 {
            color: #72d572;
            margin-top: 30px;
            border-bottom: 1px solid #222;
            padding-bottom: 10px;
        }

        .legal-box p,
        .legal-box li {
            color: #ccc;
            font-size: 0.95rem;
        }

        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #72d572;
            text-decoration: none;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <header>
        <div class="container nav-flex">
            <div class="logo">PORTFOLIO</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Retour au site</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container legal-content">
        <a href="index.php" class="back-link">← Retour à l'accueil</a>

        <div class="legal-box">
            <h1>Mentions Légales</h1>
            <p>Conformément aux dispositions de la loi n° 2004-575 du 21 juin 2004 pour la confiance dans l'économie
                numérique (LCEN).</p>

            <h2>1. Éditeur du site</h2>
            <p>
                <strong>Nom :</strong> GUERIN Tom<br>
                <strong>Statut :</strong> Étudiant en BTS SIO<br>
                <strong>Contact :</strong> guerintom1@proton.me<br>
                <strong>Localisation :</strong> Mâcon / Dijon, France
            </p>

            <h2>2. Hébergement</h2>
            <p>
                <strong>Hébergeur :</strong> Auto-hébergé sur Raspberry Pi<br>
                <strong>Fournisseur d'accès (FAI) :</strong>Orange <br>
                <strong>Adresse FAI :</strong> TSA 30103 - Orange Service Clients, 59878 Lille Cedex 9
            </p>

            <h2>3. Propriété intellectuelle</h2>
            <p>
                L'ensemble de ce site relève de la législation française et internationale sur le droit d'auteur et la
                propriété intellectuelle. Tous les droits de reproduction sont réservés, y compris pour les documents
                téléchargeables et les représentations iconographiques et photographiques.
            </p>

            <h2>4. Données personnelles (RGPD)</h2>
            <p>
                Ce site ne collecte aucune donnée personnelle à l'insu de l'utilisateur. En cas de contact par email,
                vos informations ne seront jamais cédées à des tiers et ne servent qu'à vous répondre.
            </p>

            <h2>5. Cookies</h2>
            <p>
                Ce site n'utilise pas de cookies de suivi ou de publicité. Seuls des cookies techniques nécessaires au
                fonctionnement peuvent être utilisés.
            </p>
        </div>
    </main>

    <footer>
        <p>&copy;
            <?php echo date('Y'); ?> - Tom GUERIN
        </p>
    </footer>

</body>

</html>