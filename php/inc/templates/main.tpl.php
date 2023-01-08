<?php include 'php/inc/data.php'; ?>

<main>
    <div class="container_about" id="about">
        <h1 class="titreBorder">
            A propos de moi
        </h1>
        <div class="container_about_wrapper">
            <div class="container_about_left">
                <p>
                    Après un parcours évolutif au sein des entreprises pour lesquelles j’ai travaillé, j’ai été recrutée
                    pour gérer un projet de refonte d’un site internet et de son Back-Office.
                </p>

                <p>
                    Cette expérience a été très enrichissante sur les plans professionnel et personnel. J’ai travaillé avec
                    différents types de métiers dont direction, RH, administration, finance, agence de conseil et de
                    marketing digital , agence de conception et développement de sites et de logiciels web, … . La
                    collaboration avec les développeurs a été une révélation. Je voulais comprendre ce qu’ils faisaient,
                    savoir le faire moi aussi. C’est comme ça que j’ai décidé d’entamer une reconversion professionnelle en
                    tant que développeuse Web et que j’ai trouvé l’école O’clock pour y parvenir.
                </p>

                <!-- <p>
                    La formation de Développeur Web et Web mobile dispensée par l’école est très complète. En 6 mois nous
                    avons appris comment faire une intégration HTML/CSS, le Responsive Design et son Mobile First ; le DOM,
                    JavaScript et ses événements ; la programmation PHP et la Programmation Orientée Objet ; la création
                    d’une base de données et les requêtes SQL, la création d’une API ; les bonnes pratiques et le rangement
                    du code grâce à des architectures telles le MVC ou encore le CRUD ; la spécialisation Symfony et tous
                    ses composants qui facilitent la vie du développeur.
                </p>

                <p>
                    Pour conclure la formation, nous avons réalisé un projet de groupe, encadrés par l’équipe pédagogique,
                    dans un délai de 4 semaines. De la conception au déploiement, nous avons pu mettre en application toutes
                    les notions apprises en cours.
                </p>  -->
            </div>
            <div class="container_about_right">
                <img class="container_about_right_profil" src="php/public/img/MD.jpg" alt="photo_profil">
            </div>
        </div>
    </div>
    <div class="container_formation" id="formation">
        <h1 class="titreBorder">
            Formation
        </h1>
        <?php foreach ($formationList as $value) :?>
            <div class="container_formation_wrapper">
                <h2>
                    <?= $value['title'] ?>
                    <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse<?= $value['collapse'] ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $value['collapse'] ?>">
                        ... détail
                    </a>
                </h2>
                <div class="collapse" id="collapse<?= $value['collapse'] ?>">
                    <div class="card card-body">
                        <h3><?= $value['location'] ?></h3>
                        <h4><?= $value['date'] ?></h4>
                        <a href="<?= $value['link'] ?>" target="_blank" ><?= $value['nameLink'] ?></a>
                        <p>
                            <?= $value['observation'] ?>
                        </p>
                        <ul>
                            <?php foreach ($value['detail'] as $key => $value) :?>
                                <li><?= $value ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container_experience" id="experience">
        <h1 class="titreBorder">
            Experience
        </h1>
        <?php foreach ($experienceList as $value) :?>
            <div class="container_experience_wrapper">
                <h2>
                    <?= $value['title'] ?>
                    <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse<?= $value['collapse'] ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $value['collapse'] ?>">
                        ... détail
                    </a>
                </h2>
                <div class="collapse" id="collapse<?= $value['collapse'] ?>">
                    <div class="card card-body">
                        <h3><?= $value['location'] ?></h3>
                        <h4><?= $value['date'] ?></h4>
                        <a href="<?= $value['link'] ?>" target="_blank" ><?= $value['nameLink'] ?></a>
                        <p>
                            <?= $value['observation'] ?>
                        </p>
                        <ul>
                            <?php foreach ($value['detail'] as $key => $value) :?>
                                <li><?= $value ?></li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container_realisations" id="realisations">
        <h1 class="titreBorder">
            Réalisations
        </h1>
        <?php foreach ($realisationList as $value) :?>
            <div class="container_realisations_wrapper">
                <ul>
                    <li><h2><?= $value['type'] ?></h2></li>
                    <li><h3><?= $value['title'] ?></h3></li>
                    <li><a href="<?= $value['link'] ?>" target="_blank"><img src="<?= $value['picture'] ?>" alt="<?= $value['alt'] ?>"></a></li>
                </ul>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="container_contact" id="contact">
        <h1 class="titreBorder">
            Me contacter
        </h1>
        <div class="container_contact_wrapper">
            <a href="https://www.linkedin.com/in/marilyne-druart" target="_blank"><img src="php/public/img/logo_linkedin.png" alt="<?= $value['alt'] ?>"></a>
            <a href="https://github.com/MarilyneDruart" target="_blank"><img src="php/public/img/logo_github.png" alt="<?= $value['alt'] ?>"></a>
        </div>
    </div>
    <a href="#top">
        <button id="scroll_to_top" type="button" class="btn btn-primary" alt="haut-de-page">
            <i id="arrow_up" class="bi bi-arrow-up"></i>
        </button>
    </a>
</main>