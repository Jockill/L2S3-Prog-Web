<?php include "header.php" ?>
<link rel="stylesheet" href="../css/glitch.css">
<link rel="stylesheet" href="../css/style_forum.css">

<main>
    <h1>FORUM</h1>

    <div>
	    <article>
	        <div>
	            <img src="../ressources/discord-icon.png" alt="">
	            <h3>User</h3>
	        </div>
	        <span>Mon commentaire incendiaire sur ce forum</span>
	    </article>
	    <article>
	        <div>
	            <img src="../ressources/discord-icon.png" alt="">
	            <h3>User</h3>
	        </div>
	        <span>Mon 2e commentaire incendiaire sur ce forum</span>
	    </article>
	    <article>
	        <div>
	            <img src="../ressources/discord-icon.png" alt="">
	            <h3>User</h3>
	        </div>
	        <span>Mon 3e commentaire incendiaire sur ce forum</span>
	    </article>
    </div>

	<button id="more">Charger plus de messages</button>

    <div>
        <h2>Répondre</h2>
        <form action="">
          <!-- On suppose que l'user est connecté, on récupère son cookie de session pour le nom et l'image. -->
            <label for="titre">Titre</label>
	    <br>
            <input type="text" id="titre">
            <br>
            <label for="message">Message</label>
            <br>
            <textarea name="message" id="message"></textarea>

            <!-- Courtesy code from csspoint101.com -->
            <div class="container">
              <button class="btn-split" type="submit">
                <div class="name">Envoyer</div>
                <div class="letters">
                  <ul class="letters-list">
                    <li data-letters='["e"]' data-initial="e"></li>
                    <li data-letters='["e", "n"]' data-initial="n"></li>
                    <li data-letters='["e", "n", "v"]' data-initial="v"></li>
                    <li data-letters='["e", "n", "v", "o"]' data-initial="o"></li>
                    <li data-letters='["e", "n", "v", "o", "y"]' data-initial="y"></li>
                    <li data-letters='["e", "n", "v", "o", "y", "e"]' data-initial="e"></li>
                    <li data-letters='["e", "n", "v", "o", "y", "e", "r"]' data-initial="r"></li>
                  </ul>
                </div>
              </button>
            </div>
            <!-- My code again -->

        </form>
    </div>

</main>

<script src="../script/glitch.js" charset="utf-8"></script>
<script src="../script/script_forum.js" charset="utf-8"></script>

<?php include "footer.php" ?>
