    <section class="container">
        <div class="col-sm-12">
           <h3>Willkommen bei MY</h3>  
           <p>Ich bin bereits MY-Kund*in</p>
           <form action="inc/login.php" method="POST"> 
           <input type="text" name="mail" placeholder="E-Mail-Adresse" class="form-control"required><br>
           <input type="password" name="pwd" placeholder="Password" class="form-control" required> <br>

           <button type="submit" name="submit_login" class="form-control">Anmelden</button>
            <a href="index1.php?page=register">neue Konto erstellen</a>
           <?php if(isset($_SESSION['error_msg'])):?>
             <div class="alert alert-danger fs-8 m-4">
                 <?= nl2br($_SESSION['error_msg'])?>
           </div>
            <?php endif;?>
        </form>
        </div>
        </div>
    </section>
 