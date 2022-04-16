<?php include_once "header.php" ?>
<?php include_once '../trad/trad_contact.php'; ?>

<link rel="stylesheet" href="../css/style_contact.css">
<link rel="stylesheet" href="../css/glitch.css">

    <main>
        <form id="contact" action="" method="post">
            <label for="nom">
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

	    <label for="note">
                <?php echo $note; ?>
                <br>
		<select name="note" id="note">
			<option value="20">20</option>
			<option value="20"><?php echo $probablement;?> 20</option>
			<option value="20"><?php echo $certainement;?> 20</option>
			<option value="20"><?php echo $absoulement;?> 20</option>
		</select>
            </label>
            <br>


            <!-- radio 1337 ? -->
            <!-- random phone -->
            <br>
            <!-- Courtesy code from csspoint101.com -->
            <div class="container">
              <button class="btn-split" type="submit">
                <div class="name"><?php echo $envoyer ?></div>
                <div class="letters">
                  <ul class="letters-list">
                    <?php echo $button; ?>
                  </ul>
                </div>
              </button>
            </div>
            <!-- My code again -->
        </form>

        <div role="log" aria-live="polite">.</div>

    </main>

<script src="../script/glitch.js" charset="utf-8"></script>
<script src="../script/script_contact.js" charset="utf-8"></script>

<?php include "footer.php" ?>
