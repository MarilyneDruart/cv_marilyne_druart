<?php include 'php/inc/data.php'; ?>

<main>
    <div class="container_about" id="about">
        <h1 class="titreBorder">
            A propos de moi
        </h1>
        <div class="container_about_wrapper">
            <div class="container_about_left">
                <p>
                    Après un parcours évolutif au sein des entreprises pour lesquelles j’ai travaillé, ma dernière expérience consitait en la gestion d'un projet de refonte d’un site internet et de son Back-Office.
                </p>

                <p>
                    J’ai travaillé avec différents types de métiers dont les développeurs web. La collaboration avec ces derniers a été une révélation. Je voulais comprendre ce qu’ils faisaient, savoir le faire moi aussi. C’est comme ça que j’ai décidé d’entamer une reconversion professionnelle en
                    tant que développeuse Web.
                </p>

                <p>
                    J'ai suivi une formation de Développeur Web et Web mobile de 6 mois qui s'est concrétisée par un projet professionnel de groupe, d'une durée de 4 semaines, encadré par l’équipe pédagogique. De la conception au déploiement, nous avons pu mettre en application toutes les notions apprises en cours.
                </p> 
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
            <div class="container_formation_wrapper">
            <?php foreach ($formationList as $value) :?>
                <h2>
                    <?= $value['title'] ?>
                    <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse<?= $value['collapse'] ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $value['collapse'] ?>">
                        <i class="bi bi-search"></i>
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
                <?php endforeach; ?>
            </div>
    </div>
    <div class="container_experience" id="experience">
        <h1 class="titreBorder">
            Experience
        </h1>
            <div class="container_experience_wrapper">
                <?php foreach ($experienceList as $value) :?>
                <h2>
                    <?= $value['title'] ?>
                    <a class="btn btn-link" data-bs-toggle="collapse" href="#collapse<?= $value['collapse'] ?>" role="button" aria-expanded="false" aria-controls="collapse<?= $value['collapse'] ?>">
                        <i class="bi bi-search"></i>
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
                <?php endforeach; ?>
            </div>
    </div>
    <div class="container_competences" id="competences">
        <h1 class="titreBorder">
            Compétences techniques
        </h1>
        <div class="container_competences_wrapper">
            <?php foreach ($competenceList as $value) :?>
                <div class="container_competences_wrapper_hover">
                    <img src="<?= $value['picture'] ?>" alt=<?= $value['alt'] ?>/>
                    <div class="container_competences_wrapper_img_content">
                        <div class="text"><?= $value['title'] ?></div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container_realisations" id="realisations">
        <h1 class="titreBorder">
            Réalisations
        </h1>
        <div class="container_realisations_wrapper">
            <?php foreach ($realisationList as $value) :?>
            <a href="<?= $value['link'] ?>" target="_blank">
                <div class="card">
                    <div class="card-img-container">
                        <img class="card-img-top" src="<?= $value['picture'] ?>" alt="<?= $value['alt'] ?>">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title"><?= $value['title'] ?></h5>
                    </div>
                </div>
            </a>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container_contact" id="contact">
        <h1 class="titreBorder">
            Me contacter
        </h1>
        <div class="container_contact_wrapper">
            <a data-toggle="tooltip" href="mailto:marilyne.druart@outlook.com" target="_blank"><img src="php/public/img/logo_mail.png" alt="envoyer_mail" title="Envoyer un email" ></a>
            <a href="https://www.linkedin.com/in/marilyne-druart" target="_blank"><img src="php/public/img/logo_linkedin.png" alt="logo_linkedin" title="Envoyer un message sur Linkedin"></a>
            <a href="php/public/documents/CV_DRUART_Marilyne.pdf" target="_blank"><img src="php/public/img/logo_telechargement.png" alt="télécharger_CV" title="Coordonnées sur mon CV"></a>
        </div>
    </div>
    <a href="#top">
        <button id="scroll_to_top" type="button" class="btn btn-primary" alt="haut-de-page">
            <i id="arrow_up" class="bi bi-arrow-up"></i>
        </button>
    </a>
</main>