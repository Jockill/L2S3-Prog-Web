<?php include "header.php" ?>

<link rel="stylesheet" href="../css/style_contact.css">
<link rel="stylesheet" href="../css/glitch.css">

    <main>
        <form id="contact" action="presentation.php" method="post">
            <label for="nom" class="">
                <?php echo $nom; ?>
                <br>
                <input type="text" class="" name="nom" id="nom">
            </label>

            <label for="prenom">
                <?php echo $prenom; ?>
                <br>
                <input type="text" name="prenom" id="prenom">
            </label>
            <br>

            <label for="mail">
                <?php echo $mail; ?>
                <br>
                <input type="text" name="mail" id="mail">
            </label>
            <br>

            <label for="message">
                <?php echo $message; ?>
                <br>
                <textarea name="message" id="message" cols="30" rows="10"></textarea>
            </label>
            <!-- radio 1337 ? -->
            <!-- random phone -->
            <br>
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

        <div>.</div>

    </main>

<script src="../script/glitch.js" charset="utf-8"></script>
<script src="../script/script_contact.js" charset="utf-8"></script>

<?php include "footer.php" ?>
