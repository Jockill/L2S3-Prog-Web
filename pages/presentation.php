<?php include_once "./header.php" ?>
<?php include_once "../trad/trad_presentation.php"; ?>
<link rel="stylesheet" href="../css/style_presentation.css">
    <main>
	<button type="button" id="tourner">Cliquez ici pour retourner les cartes</button>
        <h2> <?php echo $important; ?> </h2>


        <div id="cartes" role="presentation">
            <div class="portrait">
                <h5 aria-describedby="Nom de la personne">Mr. R0bøt</h5>
                <div aria-describedby="Cout d'invocation de la personne">
                    99
                </div>
                <div>
                    <img aria-describedby="Représentation de la personne" src="../ressources/mrrobot.jpg" alt="">
                    <p aria-describedby="Présentation de la personne">
                    	<?php echo $p_robot; ?>
                    </p>
                </div>
                <div aria-describedby="Nombre de points de vie de la personne">
                    99
                </div>
            </div>

            <div class="portrait">
                <h5 aria-describedby="Nom de la personne">Hackerman</h5>
                <div aria-describedby="Cout d'invocation de la personne">
                    3.14
                </div>
                <div>
                    <img aria-describedby="Représentation de la personne" src="../ressources/hackerman.png">
                    <p aria-describedby="Présentation de la personne">
			<?php echo $p_hackerman; ?>
		    </p>
                </div>
                <div aria-describedby="Nombre de points de vie de la personne">
                    42
                </div>
            </div>

            <div class="portrait">
                <h5 aria-describedby="Nom de la personne">Zelda</h5>
                <div aria-describedby="Cout d'invocation de la personne">
                    420
                </div>
                <div>
                    <img aria-describedby="Représentation de la personne" src="../ressources/zelda.jpg">
                    <p aria-describedby="Présentation de la personne">
                    	<?php echo $p_zelda; ?>
                    </p>
                </div>
                <div aria-describedby="Nombre de points de vie de la personne">
                    16
                </div>
            </div>
    </div>

        <h2> <?php echo $retrouver; ?> </h2>
        <div id="map">
            <p>
            	<?php echo $p_retrouver; ?>
            </p>
                <div>
                    <iframe width="300" height="250" id="gmap_canvas" src="https://maps.google.com/maps?q=L33T%20LTD%20manchester&t=&z=5&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
                </div>
        </div>

    </main>

<script src="../script/script_presentation.js" charset="utf-8"></script>
<?php include_once "./footer.php" ?>
