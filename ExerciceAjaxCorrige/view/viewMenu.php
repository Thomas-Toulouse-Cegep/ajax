<!-- Nav tabs -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand <?php parDefaut();?> <?php navClass("accueil");?>"
            href="index.php?action=accueil">Acceuil</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link <?php navClass("information");?>"
                    href="index.php?action=information">Information</a>
            </div>
        </div>
    </div>
</nav>

<?php
function parDefaut()
{
    if (!isset($_GET["action"])) {
        echo "active";
    }
}

function navClass($menu)
{
    if (isset($_GET["action"])) {
        hightligtMenu($_GET["action"], $menu);
    }
}

function hightligtMenu($action, $choixMenu)
{
    if ($action == $choixMenu) {
        echo ' active ';
    } else {
        echo "";
    }
}
?>