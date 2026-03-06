<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions Légales | Tom GUERIN</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .legal-content {
            padding-top: 110px;
            padding-bottom: 60px;
            line-height: 1.8;
        }

        .legal-box {
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid var(--border);
            padding: 30px;
            border-radius: var(--radius-lg);
            box-shadow: var(--shadow);
        }

        .legal-box h1 {
            margin-top: 0;
        }

        .legal-box h2 {
            color: #ffffff;
            margin-top: 30px;
            border-bottom: 1px solid var(--border);
            padding-bottom: 10px;
        }

        .legal-box p,
        .legal-box li {
            color: var(--text-muted);
            font-size: 0.95rem;
        }

        .back-link {
            display: inline-flex;
            align-items: center;
            margin-bottom: 16px;
            text-decoration: none;
            font-weight: 600;
            color: #d5fff5;
            border: 1px solid rgba(43, 198, 168, 0.35);
            border-radius: 999px;
            padding: 0.45rem 0.85rem;
            background: rgba(43, 198, 168, 0.12);
            transition: transform 0.2s ease;
        }

        .back-link:hover {
            transform: translateY(-2px);
        }
    </style>
</head>

<body>

    <header>
        <div class="container nav-flex">
            <div class="logo">PORTFOLIO</div>
            <button class="burger" type="button" onclick="toggleMenu()" aria-label="Ouvrir ou fermer le menu">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <nav>
                <ul class="nav-links">
                    <li><a href="profil.php">Profil</a></li>
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

    <script>
        function toggleMenu() {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.nav-links');

            if (!burger || !nav) {
                return;
            }

            burger.classList.toggle('active');
            nav.classList.toggle('active');
        }
    </script>

</body>

</html>
