<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tom GUERIN | Portfolio</title>
    <link rel="stylesheet" href="index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-iconv2.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-16x16v2.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-32x32v2.png">
    <link rel="manifest" href="/site.webmanifest">
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
                    <li><a href="#projets">Projets</a></li>
                    <li><a href="#competences">Compétences</a></li>
                    <li><a href="#stages">Stages</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <main>
        <section id="profil" class="hero">
            <div class="container">
                <div class="hero-content">
                    <h1>Tom <span>GUERIN</span></h1>
                    <p class="subtitle">BTS SIO option SISR | En recherche d'alternance <b>Systèmes et Réseaux</b> pour ma 3ème année</p>

                    <div class="code-box">
                        <div class="code-header">
                            <span class="dot"></span><span class="dot"></span><span class="dot"></span>
                            <span class="file-name">index.php</span>
                        </div>
                        <div class="code-body">
                            <code>
                                <span class="keyword">user:</span> "GUERIN Tom";<br>
                                <span class="keyword">quote:</span> "Bienvenue sur mon portfolio";<br>
                                <span class="keyword">role:</span> "BTS SIO option SISR";<br>
                                <span class="keyword">location:</span> "Mâcon / Dijon";
                            </code>
                        </div>
                    </div>
                    <a href="profil.php" class="btn">Consulter mon profil</a>
                </div>
            </div>

            <div class="wave-container">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
                    <defs>
                        <path id="gentle-wave"
                            d="M-160 44c30 0 58-14 88-14s58 14 88 14 58-14 88-14 58 14 88 14v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use href="#gentle-wave" x="48" y="0" fill="rgba(178, 245, 200, 0.42)" />
                        <use href="#gentle-wave" x="48" y="3" fill="rgba(132, 203, 170, 0.31)" />
                        <use href="#gentle-wave" x="48" y="7" fill="rgba(16, 39, 50, 0.36)" />
                    </g>
                </svg>
            </div>
        </section>

        <!-- PROJET PERSO NUMERO n1 --> 

        <section id="projets" class="content-section">
            <div class="container">
                <h1>Projets Personnels</h1>

                <div class="project-showcase project-perso-1">
                    <div class="project-visual">
                        <div class="carousel">
                            <div class="carousel-container project-image-container" id="carousel-1">
                                <div class="carousel-image carousel-img active">
                                    <img src="img/pialpine.png" alt="Screen 1">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/serices.png" alt="Screen 2">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/Capture d'écran 2026-02-22 002634.png" alt="Screen 3">
                                </div>
                            </div>
                            <div class="carousel-nav">
                                <button type="button" aria-label="Image précédente" onclick="prevSlide('carousel-1')">❮</button>
                                <button type="button" aria-label="Image suivante" onclick="nextSlide('carousel-1')">❯</button>
                            </div>
                        </div>
                    </div>
                    <div class="project-details">
                        <div class="project-header-static">
                            <span class="badge-tech">Serveur Web</span>
                            <span class="badge-tech">Auto-hébergé</span>
                            <h2>Conception et hébergement de Portfolio</h2>
                        </div>

                        <div class="project-scroll-area">
                            <div class="project-description">
                                <h3>Les besoins</h3>
                                <p>Ce projet conciste à transformer un
                                    micro-ordinateur à ressources limitées en un serveur web de production fiable et
                                    sécurisé.
                                </p>

                                <h4>Performance et Accessibilité</h4>
                                <ul>
                                    <li>
                                        Accessibilité 24h/24 via un nom de domaine dédié et une
                                        résolution DNS stable.
                                    </li>
                                    <br>
                                    <li>
                                        Fluidité : Temps de chargement inférieur à 2 secondes et design Responsive
                                        pour tous les terminaux.
                                    </li>
                                    <br>
                                    <li>
                                        Autonomie technique : Maîtrise de l'ensemble de la stack (DevOps) pour
                                        s'affranchir des solutions Cloud.
                                    </li>
                                </ul>

                                <h4>Contraintes Logicielles et Hardware</h4>
                                <ul>
                                    <li>Légèreté : Optimisation pour les 512 Mo de RAM du Raspberry Pi Zero 2W via du
                                        PHP sans framework.</li>
                                    <br>
                                    <li>Préservation du matériel : Limitation des cycles d'écriture sur la carte SD pour
                                        éviter l'usure prématurée</li>
                                </ul>

                                <h4>Sécurité</h4>
                                <ul>
                                    <li>
                                        Chiffrement obligatoire des flux via le protocole HTTPS
                                    </li>
                                    <br>
                                    <li>
                                        Isolation du serveur par un filtrage strict des ports (80 et 443 uniquement).
                                    </li>
                                    <br>
                                    <li>
                                        Mise en œuvre d'une solution capable de détecter et de bannir automatiquement
                                        les comportements malveillants. (Fail2ban)
                                    </li>
                                </ul>
                                <h2>Réalisation</h2>
                                <ul>
                                    <li>
                                        Installation : Déploiement d'Alpine Linux
                                        adaptée à l'architecture ARM.
                                    </li>
                                    <br>
                                    <li>
        Architecture applicative : Développement d’un site en PHP modulaire sans framework afin de garantir performance, légèreté et maîtrise complète de la stack logicielle. Configuration du serveur web et intégration de PHP-FPM pour un traitement efficace des requêtes dynamiques.
    </li>
    <br>
    <li>
        Infrastructure réseau : Configuration DNS et mise en production sécurisée via HTTPS. Déploiement d’un tunnel Cloudflare pour contourner les contraintes du CG-NAT imposées par le routeur, permettant l’exposition publique du serveur sans ouverture de ports entrants.
    </li>
                                </ul>
                                <h2>Sécurisation</h2>
                                <ul>
                                    <li>
                                        Surveillance : Analyse en temps réel des journaux access.log et error.log.
                                    </li>
                                    <br>
                                    <li>
                                        Bannissement automatique au niveau du pare-feu des IP suspectes (scans de
                                        failles ou brute-force).
                                    </li>
                                    <br>
                                    <li>
                                        Modification du port 22 par défaut pour bloquer les robots de scan.
                                    </li>
                                    <br>
                                    <li>
                                        Whitelist : Restriction de l'accès SSH à une seule adresse IP source, isolant
                                        totalement l'administration du serveur.
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJET PERSO NUMERO 2 -->

            <div class="container">
                <div class="project-showcase">
                    <div class="project-visual">
                        <div class="carousel">
                            <div class="carousel-container project-image-container" id="carousel-2">
                                <div class="carousel-image carousel-img active">
                                    <img src="img/IMG_0070.jpeg" alt="Screen 1">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/IMG_0004.jpeg" alt="Screen 2">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/IMG_0005.jpeg" alt="Screen 3">
                                </div>
                            </div>
                            <div class="carousel-nav">
                                <button type="button" aria-label="Image précédente" onclick="prevSlide('carousel-2')">❮</button>
                                <button type="button" aria-label="Image suivante" onclick="nextSlide('carousel-2')">❯</button>
                            </div>
                        </div>
                    </div>

                    <div class="project-details">
                        <div class="project-header-static">
                            <span class="badge-tech">Hardware</span>
                            <span class="badge-tech">PC</span>
                            <h2>Montage PC</h2>
                        </div>

                        <div class="project-scroll-area">
                            <div class="project-description">
                                <h3>Besoins</h3>
                                <p>Ce projet conciste à monter un
                                    ordinateur de A à Z pour mes besoins proffesionnels et personnels.
                                </p>

                                <h4>Configuration</h4>
                                <ul>
                                    <li>
                                        Ryzen 9 5900x / xfx AMD 7800xt / RAM 32go
                                    </li>
                                </ul>
                                <p>Projet qui ma été utile pour apprendre le hardware et régler des problèmes
                                    physique sur ma machine.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROJET PERSO NUMERO 3 -->

            <div class="container">
                <div class="project-showcase">
                    <div class="project-visual">
                        <div class="carousel">
                            <div class="carousel-container project-image-container" id="carousel-3">
                                <div class="carousel-image carousel-img active">
                                    <img src="img/IMG_3281.jpeg" alt="Screen 1">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/IMG_7506.jpg" alt="Screen 2">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/IMG_7507.jpg" alt="Screen 3">
                                </div>
                                <div class="carousel-image carousel-img">
                                    <img src="img/IMG_7677.PNG" alt="Screen 4">
                                </div>
                            </div>
                            <div class="carousel-nav">
                                <button type="button" aria-label="Image précédente" onclick="prevSlide('carousel-3')">❮</button>
                                <button type="button" aria-label="Image suivante" onclick="nextSlide('carousel-3')">❯</button>
                            </div>
                        </div>
                    </div>

                    <div class="project-details">
                        <div class="project-header-static">
                            <span class="badge-tech">3D</span>
                            <span class="badge-tech">Blender</span>
                            <h2>Modélisation 3D</h2>
                        </div>

                        <div class="project-scroll-area">
                            <div class="project-description">
                                <p>Conception 3D sur le logiciel gratuit et open-source Blender
                                </p>
                            </div>
                        </div>

                        <!-- <div class="project-actions">
                            <a href="https://github.com/ton-lien" class="btn-github">Voir le code (GitHub)</a>
                        </div> -->
                    </div>
                </div>
            </div>

            <!-- PROJET PROFFESSIONNELS NUMERO 1  -->


            <div class="container" id="projets-professionnels">
                <h1>Projets Proffesionnels</h1>

                <div class="project-showcase">
                    <div class="project-visual">
                        <div class="carousel">
                            <div class="carousel-container project-image-container" id="carousel-4">
                                <div class="carousel-image carousel-img active">
                                    <img src="img/Capture d'écran 2026-02-17 112953.png" alt="Screen 1">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="project-details">
                        <div class="project-header-static">
                            <span class="badge-tech">Web design</span>
                            <span class="badge-tech">Site internet</span>
                            <a href="https://annuaire-entreprises.data.gouv.fr/entreprise/bushfire-934470022"
                                class="social-link">lien societé</a>
                            <h2>Conception et refonte de sites internet</h2>
                        </div>

                        <div class="project-scroll-area">
                            <div class="project-description">
                                <h3>SAS Bushfire</h3>
                                <p>Projet de conception de site web et webmarketing.
                                    Né en début d'année 2024 avec un ami lors de notre première année d'université.
                                    Nous nous sommes naturellement agraffé à un 3ème associés jusqu'en
                                    octobre 2024,
                                    date officielle de création de la societé ou un dernier collaborateur nous rejoignit
                                    afin de s'occcuper exclusivement de la communication et des réseaux sociaux.
                                    Bushfire est une expérience enrichissante sur beaucoup d'aspects,
                                    qui nous ont permis de developper nos compétences sur un spectre très large ;
                                    conception de site, refonte, herbergement, gestion de réseaux sociaux,
                                    reférencement SEO, logiciels CMS, travail d'équipe, organisation, prise de décisions
                                    mais également tout ce qui entoure les démarches de création et de gestion
                                    administrative de la societé.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </section>

        <section id="competences" class="content-section">
            <div class="container">
                <h1>Compétences</h1>
                <div class="skills-grid">

                    <div class="skill-card">
                        <div class="skill-header">
                            <span class="skill-icon">🖥️</span>
                            <h3>Systèmes & Annuaires</h3>
                        </div>
                        <ul>
                            <li><strong>OS :</strong> Windows Server 2019/16, Debian 12, Ubuntu</li>
                            <li><strong>Annuaires :</strong> Active Directory, OpenLDAP</li>
                            <li><strong>Services :</strong> DNS (Bind9), DHCP, SMB (Samba), NFS</li>
                        </ul>
                    </div>

                    <div class="skill-card">
                        <div class="skill-header">
                            <span class="skill-icon">🛡️</span>
                            <h3>Réseaux & Sécurité</h3>
                        </div>
                        <ul>
                            <li><strong>Routage/Filtrage :</strong> VLAN (802.1q), pfSense, nftables</li>
                            <li><strong>VPN :</strong> IPSEC, OpenVPN, WireGuard</li>
                            <li><strong>Sécurité :</strong> Snort, Suricata, Kali Linux, Metasploit</li>
                        </ul>
                    </div>

                    <div class="skill-card">
                        <div class="skill-header">
                            <span class="skill-icon">☁️</span>
                            <h3>Virtualisation & DevOps</h3>
                        </div>
                        <ul>
                            <li><strong>Hyperviseurs :</strong> Proxmox, Docker</li>
                            <li><strong>Infrastructure :</strong> Ansible, Vagrant</li>
                            <li><strong>Sources :</strong> Git / Gitea</li>
                        </ul>
                    </div>

                    <div class="skill-card">
                        <div class="skill-header">
                            <span class="skill-icon">💾</span>
                            <h3>Stockage & Disponibilité</h3>
                        </div>
                        <ul>
                            <li><strong>Stockage :</strong> RAID, LVM, NAS (OMV), SAN ISCSI</li>
                            <li><strong>Haute Dispo :</strong> HAProxy, Heartbeat, LVS</li>
                            <li><strong>Bases de données :</strong> MySQL, MariaDB</li>
                        </ul>
                    </div>

                    <div class="skill-card">
                        <div class="skill-header">
                            <span class="skill-icon">📊</span>
                            <h3>Supervision & Gestion</h3>
                        </div>
                        <ul>
                            <li><strong>Supervision :</strong> Zabbix, Nagios, SNMP</li>
                            <li><strong>Gestion :</strong> GLPI, NetBox, FOG (Déploiement PXE)</li>
                            <li><strong>Logs :</strong> Rsyslog, Journald</li>
                        </ul>
                    </div>

                    <div class="skill-card">
                        <div class="skill-header">
                            <span class="skill-icon">💻</span>
                            <h3>Scripting & Programmation</h3>
                        </div>
                        <ul>
                            <li><strong>Automatisation :</strong> Bash, PowerShell, Python</li>
                            <li><strong>Web & Dev :</strong> PHP, Java</li>
                            <li><strong>Analyse :</strong> Wireshark, Tcpdump</li>
                        </ul>
                    </div>

                </div>
            </div>
        </section>


        <section id="stages" class="content-section gray-bg">
            <div class="container">
                <h1>Stages</h1>

                <div class="stage-interface compact">
                    <aside class="stage-sidebar">
                        <div class="company-logo">
                            <!-- <img src="logo-secondaire.png" alt="Logo"
                                onerror="this.src='https://via.placeholder.com/50'"> -->
                        </div>
                        <h3>Stage d'observation</h3>
                        <p class="company-name">Entreprise <strong>Schneider Electric AMT Mâcon</strong></p>
                        <p><strong>Période :</strong> 35 heures / 2019</p>
                    </aside>

                    <div class="stage-main">
                        <div class="mission-grid compact">
                            <div class="mission-card">
                                <h4>Découverte du service informatique</h4>
                                <ul>
                                    <li>Travail en enterprise</li>
                                    <li>Travail collaboratif</li>
                                </ul>
                            </div>

                            <div class="mission-card">
                                <h4>Chaine de production </h4>
                                <p class="mission-loc"></p>
                                <ul>
                                    <li>Gestion de parc et informatique pour la ligne de production</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="stage-interface stage-first-year">
                    <aside class="stage-sidebar">
                        <div class="company-logo">
                            <!-- <img src="logo-entreprise.png" alt="Logo"
                                onerror="this.src='https://via.placeholder.com/80'"> -->
                        </div>
                        <h3>Tom — Stage de Première année</h3>
                        <p class="company-name">Stage chez <strong>Schneider Electric AMT Mâcon</strong></p>

                        <div class="stage-info">
                            <span class="badge">Stage</span>
                            <p><strong>Période :</strong> 2 juin au 4 juillet 2025</p>
                            <p><strong>Encadrant :</strong> PEINET David</p>
                        </div>

                        <div class="stage-links">
                            <div class="stage-link-row">
                                <a href="#" class="link-item">Tableau de synthèse</a>
                                <a href="pdf/3-tableau_de_synthe_se_-_e_preuve_e4_-_bts_sio_2022.xlsx - Tableau de synthèse Épreuve E4.pdf"
                                    class="download-link">Télécharger le PDF</a>
                            </div>
                            <div class="stage-link-row">
                                <a href="#" class="link-item">Attestation de stage</a>
                                <a href="pdf/attestation_stage_schneider_btssio.pdf" class="download-link">Télécharger le
                                    PDF</a>
                            </div>
                        </div>
                    </aside>

                    <div class="stage-main">
                        <h3>Missions & réalisations</h3>
                        <p class="stage-intro">Résumé des missions réalisées pendant le stage.</p>

                        <div class="mission-grid">
                            <div class="mission-card">
                                <h4>Présentation de l'entreprise</h4>
                                <p class="mission-loc">SCHNEIDER ELECTRIC — Mâcon</p>

                                <a href="pdf/AMT Macon - Jan 2025.pdf" class="btn-doc">Documents PDF</a>
                            </div>

                            <div class="mission-card">
                                <h4>Mise à jour Firmware T300</h4>
                                <p class="mission-loc">Production • Sécurité</p>
                                <ul>
                                    <li>Directive RED</li>
                                    <li>Politique de sécurité</li>
                                </ul>
                                <a href="pdf/Mission 2 Module T300 .pdf" class="btn-doc">Documents PDF</a>
                            </div>

                            <div class="mission-card">
                                <h4>Refonte infrastructure réseau</h4>
                                <p class="mission-loc">Réseau • Ligne SM6 / SMR7</p>
                                <ul>
                                    <li>Audit du matériel</li>
                                    <li>Respect des normes</li>
                                </ul>
                                <a href="pdf/Mision 1 Refonte de la ligne SM6_SMR 7.pdf" class="btn-doc">Documents
                                    PDF</a>
                            </div>

                            <div class="mission-card">
                                <h4>Migration Windows 10 vers 11</h4>
                                <p class="mission-loc">Production • Parc Informatique</p>
                                <ul>
                                    <li>Gestion des licences logicielles</li>
                                    <li>Assistance utilisateurs</li>
                                </ul>
                                <a href="pdf/Mission 3 Gestion de licence.pdf" class="btn-doc">Documents PDF</a>
                            </div>
                        </div>

                        <p class="stage-conclusion">
                            Effectué dans le service de transition digitale (SI) chez Schneider Electric du
                            02 juin au 04 juillet. <br><br> Je tiens à remercier l’ensemble de l’équipe du service
                            informatique de Schneider Electric AMT Mâcon pour m’avoir accueilli tout au long
                            de mon stage. Je remercie également mon tuteur pour son accompagnement et ses conseils.
                            Merci à Florence Chevasson pour m’avoir permis d’intégrer l’entreprise. Cela m'a permis
                            d'enrichir mes connaissances et compétences.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" class="mini-contact">
            <div class="container">
                <div class="contact-bar">
                    <div class="contact-item">
                        <span class="icon">📍</span>
                        <span class="label">Mâcon / Dijon</span>
                    </div>
                    <div class="contact-item">
                        <span class="icon">✉️</span>
                        <p>guerintom1@proton.me</p>
                    </div>
                    <div class="contact-socials">
                        <a href="https://fr.linkedin.com/in/tom-guerin-8914bb35a" class="social-link">LinkedIn</a>
                        <a href="https://github.com/balta1271" class="social-link">GitHub</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <p>&copy; <?php echo date('Y'); ?> - Tom GUERIN - Portfolio auto-hébergé sur Raspberry Pi <a href="mentions.php" class="footer-link">Mentions Légales</a></p>
    </footer>

    <script>
        function nextSlide(id) {
            const container = document.getElementById(id);
            if (!container) {
                return;
            }

            const slides = container.getElementsByClassName('carousel-img');
            if (slides.length === 0) {
                return;
            }

            let activeIndex = 0;

            // Trouver l'image qui a la classe 'active'
            for (let i = 0; i < slides.length; i++) {
                if (slides[i].classList.contains('active')) {
                    activeIndex = i;
                    slides[i].classList.remove('active');
                }
            }

            // Calculer la suivante (et revenir à 0 si c'est la fin)
            let nextIndex = (activeIndex + 1) % slides.length;
            slides[nextIndex].classList.add('active');
        }

        function prevSlide(id) {
            const container = document.getElementById(id);
            if (!container) {
                return;
            }

            const slides = container.getElementsByClassName('carousel-img');
            if (slides.length === 0) {
                return;
            }

            let activeIndex = 0;

            for (let i = 0; i < slides.length; i++) {
                if (slides[i].classList.contains('active')) {
                    activeIndex = i;
                    slides[i].classList.remove('active');
                }
            }

            // Calculer la précédente (et aller à la fin si on est au début)
            let prevIndex = (activeIndex - 1 + slides.length) % slides.length;
            slides[prevIndex].classList.add('active');
        }
    </script>

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
