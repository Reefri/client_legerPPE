        <div class="header-left">
            <a href="index.php?page=home">
                <img src="picture/neige_et_soleil_logo.png" alt="Logo" class="logo">
            </a> 
        </div>

        <div class="user-info">
            <?php
                if (isset($_SESSION["email"])) {
                    echo "<p>Bienvenue ".$_SESSION["nom"]." ".$_SESSION["prenom"]."</p>";
                }
            ?>
        </div>
    
        <nav>
            <ul>

                <?php
                        if ( isset($_SESSION["id"])){ 
                            echo "<li><a href='index.php?page=connexion'>Deconnexion</a></li>";
                }

                else {
                    echo "<li><a href='index.php?page=inscription'>Inscription</a></li>";
                    echo "<li><a href='index.php?page=connexion'>Connexion</a></li>";
                } 

                ?>

                <li><a href="index.php?page=reservation">Réservation</a></li>
                <li><a href="index.php?page=equipement">Equipement</a></li>
                
                <?php
                    if (isset($_SESSION['id'])){
                        echo "<li><a href='index.php?page=panier'>Panier</a></li>";
                    if ($_SESSION["role"]=="proprio" or $_SESSION["role"]=='both'){
                            echo "<li><a href='index.php?page=propriete'>Mes Propriétés</a></li>";
                        }
                    }
                ?>
            </ul>
        </nav>
