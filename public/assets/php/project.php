<?php
require_once("/var/www/html/source/connect.php");

function makeCards() {
    $pdo = db_connect();
    $stmt = $pdo->prepare('SELECT * FROM Projects');
    $stmt->execute();
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($projects as $project) {
        echo '<li class="projects__card">
                <div class="title__div">
                    <h2 class="card__title">' . $project['name'] . '</h2>
                    <ul class="card__tags">';

        if ($project["phpTag"]) {
            echo '<li class="tags__tag php">php</li>';
        }
        if ($project["cssTag"]) {
            echo '<li class="tags__tag css">css</li>';
        }
        if ($project["jsTag"]) {
            echo '<li class="tags__tag js">js</li>';
        }
        if ($project["sqlTag"]) {
            echo '<li class="tags__tag sql">sql</li>';
        }
        if ($project["pythonTag"]) {
            echo '<li class="tags__tag python">python</li>';
        }
        if ($project["wordpressTag"]) {
            echo '<li class="tags__tag wordpress">wordpress</li>';
        }

        echo '  </ul>
                </div>
                <div class="card__div">
                    <img class="card__img" src="' . $project['image'] . '" alt="">
                    <p class="card__text">' . $project['smallText'] . '</p>
                </div>
                <button class="project__button">Project 1 <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button>
            </li>';
    }
}
