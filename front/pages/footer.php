    <footer>

	<?php include_once "../trad/trad_footer.php"; ?>

        <div> <!-- Gauche -->
            <form action="">
                <label for="signup">Newsletter</label><br>
                <input type="text" name="mail" id="mail">
                <button type="submit"> <?php echo $abonement; ?> </button>
            </form>

            <div> <!-- Reseaux -->
                <ul>
                    <li>
                        <a href="">
                            <img src="../ressources/fb-icon.png" alt="Facebook"/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../ressources/twitter-icon.png" alt="Twitter"/>
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../ressources/ig-icon.png" alt="Instagram">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../ressources/reddit-icon.png" alt="Reddit">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../ressources/discord-icon.png" alt="Discord">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../ressources/steam-icon.png" alt="Steam">
                        </a>
                    </li>
                    <li>
                        <a href="">
                            <img src="../ressources/onlyF-icon.png" alt="OnlyFans">
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div> <!-- Millieu -->
            <h3> <?php echo $mission; ?> </h3>
            <p>
		<?php echo $mission2; ?>
            </p>
        </div>

        <div> <!-- Droite -->
	    <p>
		<?php echo $cookie; ?>
	    </p>
	    <br>
	    <p>
		<?php echo $lang; ?>
            	<?php include "trad_button.php" ?>
	    </p>
        </div>

    </footer>
</body>
</html>
