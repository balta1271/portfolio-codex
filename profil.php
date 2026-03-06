<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Profil</title>
    <link rel="stylesheet" href="index.css">
    <style>
        .profil-page {
            padding-top: 100px;
            padding-bottom: 50px;
        }

        .grid-profil {
            display: grid;
            grid-template-columns: 1fr 2fr;
            gap: 30px;
            margin-top: 30px;
        }

        .sidebar-profil {
            background: #111;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #333;
            height: fit-content;
        }

        .main-profil {
            display: flex;
            flex-direction: column;
            gap: 30px;
        }

        .card-profil {
            background: #111;
            padding: 30px;
            border-radius: 15px;
            border: 1px solid #333;
        }

        .card-profil h2 {
            color: #72d572;
            border-bottom: 1px solid #222;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .cv-btn {
            display: block;
            width: 100%;
            text-align: center;
            background: #fff;
            color: #000;
            padding: 12px;
            border-radius: 5px;
            text-decoration: none;
            font-weight: bold;
            margin-top: 20px;
            transition: 0.3s;
        }

        .cv-btn:hover {
            background: #72d572;
            color: #fff;
        }

        .timeline-item {
            border-left: 2px solid #72d572;
            padding-left: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            left: -7px;
            top: 0;
            width: 12px;
            height: 12px;
            background: #72d572;
            border-radius: 50%;
        }

        .tag-veille {
            display: inline-block;
            background: #222;
            color: #72d572;
            padding: 5px 10px;
            border-radius: 4px;
            font-size: 0.8rem;
            margin-right: 5px;
            margin-bottom: 5px;
            border: 1px solid #333;
        }

        @media (max-width: 900px) {
            .grid-profil {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>

<body>

    <header>
        <div class="container nav-flex">
            <div class="logo">PORTFOLIO</div>
            <nav>
                <ul class="nav-links">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="index.php#projets">Projets</a></li>
                    <li><a href="index.php#stages">Stages</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main class="container profil-page">
        <div class="grid-profil">

            <aside class="sidebar-profil">
                <div style="text-align:center; margin-bottom: 20px;">
                    <div
                        style="width:120px; height:120px; background:#222; border-radius:50%; margin:0 auto 15px; border:2px solid #72d572; display:flex; align-items:center; justify-content:center; font-size:3rem;">
                    </div>
                    <h3>Tom GUERIN</h3>
                    <p style="color:#666;">Étudiant BTS SIO</p>
                </div>
                <p style="font-size: 0.9rem; color:#ccc;">option SISR</p>
                <a href="pdf/CVpro.pdf" class="cv-btn" target="_blank">📄mon CV</a>
                <a href="pdf/3-tableau_de_synthe_se_-_e_preuve_e4_-_bts_sio_2022.xlsx - Tableau de synthèse Épreuve E4.pdf"
                    class="cv-btn" style="background:transparent; border:1px solid #333; color:#fff;">📊 Le tableau de
                    synthèse E5</a>
            </aside>

            <div class="main-profil">

                <section class="card-profil">
                    <h2>Formation actuelle : BTS SIO</h2>
                    <p><strong>Option SISR :</strong> Solutions d'infrastructure, systèmes et réseaux.</p>
                    <p>Le BTS SIO forme aux métiers de la gestion d'un parc informatique. L'option SISR se concentre sur
                        :</p>
                    <ul style="color:#ccc; padding-left: 20px;">
                        <li>La conception et maintenance d'infrastructures réseaux</li>
                        <li>L'administration de serveurs (Windows/Linux)</li>
                        <li>La cybersécurité et la haute disponibilité</li>
                    </ul>
                </section>

                <section class="card-profil">
                    <h2>Mon Parcours</h2>
                    <div class="timeline-item">
                        <h4>BTS Services Informatiques aux Organisations</h4>
                        <p style="color:#666; font-size:0.8rem;">sep. 2024 – mai 2026 | Dijon</p>
                        <p>Option SISR</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Université de Bourgogne</h4>
                        <p style="color:#666; font-size:0.8rem;">sep. 2023 – juin 2024 | Dijon</p>
                        <p>1ère année Licence Sciences & Techniques , parcours mathématiques / informatique</p>
                    </div>
                    <div class="timeline-item">
                        <h4>Baccalauréat général</h4>
                        <p style="color:#666; font-size:0.8rem;">sep. 2020 – juin 2023 | Lycée Lamartine Mâcon</p>
                        <p>Spécialités; Sciences de l'ingénieur, mathématiques, physique-chimie</p>
                    </div>
                </section>

                <section class="card-profil">
                    <h2>Veille Technologique</h2>
                    <p>Méthodes :<strong> Youtube, newletters, réseaux et comptes dédiés.</strong></p>
                    <div style="margin: 15px 0;">
                        <span class="tag-veille">Micode - Underscore</span>
                        <span class="tag-veille">Newletters The Next Big Sh*t</span>
                        <span class="tag-veille">Discord </span>
                        <span class="tag-veille">Autres comptes dédiés sur les réseaux</span>
                        <span class="tag-veille">Site IT connect</span>
                    </div>
                </section>

                <section class="card-profil">
                    <h2>Certifications</h2>
                    <ul style="list-style: none; padding: 0;">
                        <li
                            style="margin-bottom:15px; display: flex; align-items: center; justify-content: space-between;">
                            <span>🛡️ <strong>MOOC Cybersécurité (ANSSI)</strong></span>
                            <a href="pdf/attestation_anssi.pdf" target="_blank"
                                class="btn-mini-certif">Certification</a>
                        </li>
                        <li style="display: flex; align-items: center; justify-content: space-between;">
                            <span>🌐 <strong>Certifications RGPD CNIL
                                    Protection des données numériques.</strong></span>
                            <a href="pdf/MODULE 1 _ LE RGPD ET SES NOTIONS CLÉS_Attestation du Module 1.pdf"
                                target="_blank" class="btn-mini-certif">Certification</a>
                        </li>
                        <br>
                        <li style="display: flex; align-items: center; justify-content: space-between;">
                            <span> ☁ <strong>Certifications Microsoft Azure Fundamentals (az-900)
                                compétences de base en cloud computing, architecture Azure, sécurité et gestion des services cloud.    </strong></span>
                            <a href=""
                                target="_blank" class="btn-mini-certif">En cours</a>
                        </li>
                    </ul>
                </section>

            </div>
        </div>
    </main>

    <footer>
        <p>&copy;
            <?php echo date('Y'); ?> - Tom GUERIN - Portfolio SISR
        </p>
    </footer>

</body>

</html>