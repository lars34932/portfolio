<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/6c294d23a1.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/projecten.css">
    <title>Document</title>
</head>
<body>
    <header class="header">
        <i class="header__icon fa-solid fa-house"></i>
        <i class="header__icon fa-solid fa-code"></i>
        <i class="header__icon fa-solid fa-user"></i>
    </header>
    <section class="project__section">
        
        <?php
            $amount = 20;
            while ($amount > 0) {
                echo '<article class="project">
                <div class="project__top">
                    <div class="top__div1">
                        <a href="">test 1</a>
                    </div>
                    <div class="top__div2">
                        <p class="project__type php">php</p>
                        <p class="project__type js">js</p>
                        <p class="project__type sql">sql</p>
                    </div>
                </div>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti impedit sunt fugiat quasi, quae asperiores quis hic, tempora odit quod consequuntur optio aperiam adipisci, ducimus aspernatur laborum laboriosam temporibus dolor?</p>
            </article>';
                $amount = $amount - 1;
            }
            ?>
    </section>
    <footer class="footer">

    </footer>
</body>
</html>