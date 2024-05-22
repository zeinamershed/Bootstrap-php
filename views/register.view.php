    <section class="container">
        <div class="col-sm-12 col-md-6">
            <h4>Ich bin neu bei MY</h4>
            <p>Erstelle ein Konto und sichere dir viele Vorteile mit der Beauty Card:</p>
            <ul>
                <ol>- Punkte sammeln & von Direktrabatten profitieren</ol>
                <ol>- Exklusive & persönliche Angebote</ol>
                <ol>- Beauty-Tipps & News</ol>
            </ul>
           
            <form  action="inc/register.php" method="POST"> 
            <input type="text" name="vorname" placeholder="Vorname" class="form-control"><br>
            <input type="text" name="nachname" placeholder="Nachname" class="form-control"><br>
           <input type="text" name="mail" placeholder="E-Mail-Adresse" class="form-control"><br>
           <input type="text" name="pwd" placeholder="Password" class="form-control"><br>
           <button type="submit" name="submit_register" class="form-control">Konto erstellen</button>

           <?php if(isset($_SESSION['error_msg'])):?>
             <div class="alert alert-danger fs-8 m-4">
                 <?= nl2br($_SESSION['error_msg'])?>
           </div>
           <?php endif;?>
        </form>
        </div>
    </section>
  