<?php
require_once("/var/www/html/source/connect.php");

function makeCards() {
    $pdo = db_connect();
    $stmt = $pdo->prepare('SELECT * FROM Projects');
    $stmt->execute();
    $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($projects as $project) {
        $tags = [
            'phpTag' => 'php',
            'cssTag' => 'css',
            'jsTag' => 'js',
            'sqlTag' => 'sql',
            'pythonTag' => 'python',
            'wordpressTag' => 'wordpress'
        ];

        $classes = [];
        foreach ($tags as $key => $class) {
            if (!empty($project[$key])) {
                $classes[] = $class . "__project";
            }
        }

        $classesString = implode(' ', $classes);

        echo '<li class="projects__card ' . $classesString . '">
                <div class="title__div">
                    <h2 class="card__title">' . $project['name'] . '</h2>
                    <ul class="card__tags">';
        foreach ($tags as $key => $class) {
            if (!empty($project[$key])) {
                echo '<li class="tags__tag ' . $class . '">' . $class . '</li>';
            }
        }

        echo '  </ul>
                </div>
                <img class="card__img" src="assets/img/projects/' . $project['image'] . '" alt="">
                <p class="card__text">' . $project['smallText'] . '</p>
                <a class="card__link" href="projectPage.php?name=' . $project['name'] . '"><button class="project__button">Lees meer <i class="fa-solid fa-arrow-up fa-rotate-by" style="--fa-rotate-angle: 45deg;"></i></button></a>
            </li>';
    }
}
