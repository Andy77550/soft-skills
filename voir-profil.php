<?php

session_start();

@include 'config.php';

$utilisateur_id = (int) trim($_GET['id']);

// echo $utilisateur_id;exit;

if(empty($utilisateur_id)){
    header('Location: admin_page.php');
    exit;
}

/*Données Personnelles*/
$req = $conn->prepare("SELECT * FROM user_form WHERE user_form.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_utilisateur = $resultSet->fetch_assoc();

if(!isset($voir_utilisateur['id'])){
    header('Location: admin_page.php');
    exit;
}

/*Données de la roue */
$req = $conn->prepare("SELECT * FROM roue WHERE roue.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_roue = $resultSet->fetch_assoc();

if(!isset($voir_roue['id'])){
    header('Location: admin_page.php');
    exit;
}

/*Données tableau de la roue*/

//Apprentisage 

$req = $conn->prepare("SELECT * FROM apprentissage WHERE apprentissage.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_apprentissage = $resultSet->fetch_assoc();

if(!isset($voir_apprentissage['id'])){
    header('Location: admin_page.php');
    exit;
}

// Compétences intrapersonnelles

$req = $conn->prepare("SELECT * FROM intrapersonnelles WHERE intrapersonnelles.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_intrapersonnelles = $resultSet->fetch_assoc();

if(!isset($voir_intrapersonnelles['id'])){
    header('Location: admin_page.php');
    exit;
}

// Réfléxion et imagination

$req = $conn->prepare("SELECT * FROM reflexion WHERE reflexion.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_reflexion = $resultSet->fetch_assoc();

if(!isset($voir_reflexion['id'])){
    header('Location: admin_page.php');
    exit;
}

// Communication

$req = $conn->prepare("SELECT * FROM communication WHERE communication.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_communication = $resultSet->fetch_assoc();

if(!isset($voir_communication['id'])){
    header('Location: admin_page.php');
    exit;
}

// Compétences interpersonnelles

$req = $conn->prepare("SELECT * FROM interpersonnelles WHERE interpersonnelles.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_interpersonnelles = $resultSet->fetch_assoc();

if(!isset($voir_interpersonnelles['id'])){
    header('Location: admin_page.php');
    exit;
}


// Leadership

$req = $conn->prepare("SELECT * FROM leadership WHERE leadership.id = ? ");
$req->execute(array($utilisateur_id));

$resultSet = $req->get_result();
$voir_leadership = $resultSet->fetch_assoc();

if(!isset($voir_leadership['id'])){
    header('Location: admin_page.php');
    exit;
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/roues.css">
    <title>Profil de <?= $voir_utilisateur['name']; ?></title>
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">

    <!-- Demo styles -->
   <style>
      
      .swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }


   </style>
</head>
<body>
    <nav>
        <div class="logo">Profil de <?= $voir_utilisateur['name']; ?></div>
    </nav>
    <section class="data-user section-padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="card" style="width: 40rem;">

                    <div class="card-body">
                        <h2 class="card-title">Informations personnelles</h2>
                        <br>
                        <div class="card-text">
                            <h6>Nom et Prénom: <?= $voir_utilisateur['name']; ?></h6>
                            <h6>Email: <?= $voir_utilisateur['email']; ?></h6>
                            <h6>Téléphone: <?= $voir_utilisateur['phone']; ?></h6>
                        </div>
                    </div>
                </div>
                <br><br><br>
                <div class="card" style="width: 40rem;">
                    <div class="card-container">
                        <div class="chart-container">
                            <h2>Roue des compétences</h2>
                            <br>
                            <canvas id="barCanvas" aria-label="chart" role="img"></canvas>
                        </div>

                        <p id="apprentissage" style="display: none;"><?php echo $voir_roue['apprentissage']; ?></p>

                        <p id="intrapersonnelles" style="display: none;"><?php echo $voir_roue['competenceIntra']; ?></p>

                        <p id="reflexion" style="display: none;"><?php echo $voir_roue['reflexion']; ?></p>

                        <p id="communication" style="display: none;"><?php echo $voir_roue['communication']; ?></p>

                        <p id="interpersonnelles" style="display: none;"><?php echo $voir_roue['competenceInter'];  ?></p>

                        <p id="leadership" style="display: none;"><?php echo $voir_roue['leadership']; ?></p>
                    </div>
                </div>
                <div class="card" style="width: 40rem;">
                    <div class="swiper-body">
                        <div class="swiper mySwiper">
                            <div class="swiper-wrapper">
                                <!-- Apprentissage -->

                                <div class="swiper-slide">
                                    <div class="tab-container">
                                        <h2> Apprentissage</h2>
                                        <br>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Items</th>
                                                    <th>Taux</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Volonté d'apprendre</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Volonte']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Apprendre à apprendre</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Apprendre']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Auto-évaluation</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['evaluation']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Contrôle de qualité</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Controle']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Autonomie</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Autonomie']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Esprit d'entreprendre</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Esprit']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Curiosité</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Curiosite']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status status-apprentissage">Compétence méthodologique</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_apprentissage['Methodologie']. " %"; ?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                

                                <!-- Compétences intrapersonnelles -->

                                <div class="swiper-slide">
                                        <div class="tab-container">
                                        <h3> Compétences intrapersonnelles</h3>
                                        <br>

                                        <table>
                                                <thead>
                                                    <tr>
                                                    <th>Items</th>
                                                    <th>Taux</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr>
                                                    <td>
                                                            <p class="status status-intrapersonnelles">Attitude positive</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['positive']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Éthique</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['ethique']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Gestion du temps</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['temps']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Capacité à travailler sous pression</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['pression']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles"> Gestion du stress</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['stress']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Présence</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['presence']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Motivation intrinsèque</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['motivation']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Faire confiance</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['faire_confiance']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Confiance en soi</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['confiance_soi']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td>
                                                            <p class="status  status-intrapersonnelles">Résilience</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_intrapersonnelles['resilience']. " %"; ?></td>
                                                    </tr>

                                                </tbody>
                                        </table>
                                        </div>
                                </div>

                                <!-- Réfléxion et imagination -->

                                <div class="swiper-slide">
                                    <div class="tab-container">
                                        <h3> Réfléxion et imagination</h3>
                                        <br>

                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>Items</th>
                                                    <th>Taux</th>
                                                </tr>
                                            </thead>
                                            <tbody>


                                                <tr>
                                                    <td>
                                                        <p class="status status-reflexion">Résolution de problème</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_reflexion['resolution']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status  status-reflexion">Compétence analytique</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_reflexion['analytique']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status  status-reflexion">Esprit Critique</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_reflexion['critique']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status  status-reflexion">Créativité</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_reflexion['creativite']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status  status-reflexion"> Ouverture à la nouveauté</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_reflexion['ouverture']. " %"; ?></td>
                                                </tr>


                                                <tr>
                                                    <td>
                                                        <p class="status  status-reflexion">Intuition</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_reflexion['intuition']. " %"; ?></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Communication -->

                                <div class="swiper-slide">
                                        <div class="tab-container" >
                                        <h3> Communication</h3>
                                        <br>

                                        <table>
                                                <thead>
                                                    <tr>
                                                    <th>Items</th>
                                                    <th>Taux</th>
                                                    </tr>
                                                </thead>
                                                <tbody>


                                                    <tr>
                                                    <td>
                                                            <p class="status status-communication">Communication orale</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_communication['orale']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-communication">Communication écrite</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_communication['ecrite']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-communication">Communication non verbale</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_communication['nonverbale']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-communication">Écoute active</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_communication['active']. " %"; ?></td>
                                                    </tr>


                                                </tbody>
                                        </table>
                                        </div>
                                </div>

                                <!-- Compétences interpersonnelles -->

                                <div class="swiper-slide">
                                        <div class="tab-container">
                                            <h3> Compétences intrapersonnelles</h3>
                                            <br>

                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th>Items</th>
                                                        <th>Taux</th>
                                                    </tr>
                                                </thead>
                                                <tbody>



                                                    <tr>
                                                        <td>
                                                            <p class="status status-interpersonnelles">Travail en équipe</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['travailequipe']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Sens du collectif</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['collectif']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Coordination</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['coordination']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles"> Gestion de conflit</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['conflit']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles"> Fiabilité</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['fiabilite']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Flexibilité et adaptabilité</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['flexibilite']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Respect</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['respect']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Assertivité</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['assertivite']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Acceptation du feedback</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['feedback']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td>
                                                            <p class="status  status-interpersonnelles">Politesse</p>
                                                        </td>
                                                        <td class="amount"><?= $voir_interpersonnelles['politesse']. " %"; ?></td>
                                                    </tr>

                                                </tbody>
                                            </table>
                                        </div>
                                </div>

                                
                                <!-- Leadership  -->

                                <div class="swiper-slide">
                                        <div class="tab-container">
                                        <h3> Leadership </h3>
                                        <br>

                                        <table>
                                                <thead>
                                                    <tr>
                                                    <th>Items</th>
                                                    <th>Taux</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                    <td>
                                                            <p class="status status-leadership">Responsabilité</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['responsabilite']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Capacité à faire face à l'incertitude</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['incertitude']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Vision, visualisation</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['vision']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Pensée stratégique</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['strategique']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Jugement et prise de décision</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['decision']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Intégrité</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['integrite']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Audace</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['audace']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Négociation</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['negociation']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership"> Intelligence émotionnelle</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['emotionnelle']. " %"; ?></td>
                                                    </tr>


                                                    <tr>
                                                    <td>
                                                            <p class="status  status-leadership">Professionnalisme</p>
                                                    </td>
                                                    <td class="amount"><?= $voir_leadership['professionnalisme']. " %"; ?></td>
                                                    </tr>

                                                    <tr>
                                                    <td>


                                                </tbody>
                                        </table>
                                        </div>
                                </div>   
                            </div>
                            <div class="swiper-pagination"></div> 
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
<script src="js/don.js"></script>
</body>
</html>