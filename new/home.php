<link rel="stylesheet" href="css/profil.css">
<div class="profil" id="particles-js">
    <div  id="particles-js" class="titre">
        <h1>Bienvenue sur mon portfolio</h1>
        <script src="js/particles.js"></script>
        <script src="js/app.js"></script>
    </div>
    <div  id="particles-js" class="home">
        <p>Bonjour,</p>
       <h2>JE M'APPELLE ADRIEN PIOMBINI </h2> 
       <p>Etudiant en BTS SIO SLAM</p>
       <form method="post">
            <input type="submit" value="EN SAVOIR PLUS"  name='en_savoir_plus'>
       </form>
       <?php
       if(isset($_POST['en_savoir_plus'])){
        header("Location: index.php?page=1");
       }
       
         ?>

    </div>

</div>