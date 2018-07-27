<form class="form-inline" method="post" action="http://localhost/wordpress/connexion.php" id="loginform" name="loginform">
    <div class="form-group d-flex flex-column">

        <div class="form-group flex-column mtb-20">
            <label class="w-100 justify-content-start helvetica-1 fw-300" for="inlineFormInputGroupUsername2">Nom d'identifiant</label>
            <input type="text" class="form-control" id="inlineFormInputGroupUsername2">
        </div>

        <div class="form-group flex-column mtb-20">
            <label class="w-100 justify-content-start helvetica-1 fw-300" for="password">Mot de passe</label>
            <input type="password" class="form-control" tabindex="20" size="20" value="" id="user_pass" name="pwd" >
        </div>

        <div class="form-group mtb-20">
            <input type="checkbox" tabindex="90" value="forever" id="rememberme" name="rememberme">
            <label class="ml-10 helvetica-1 fw-300" for='rememberme'>Rester connecter</label>
        </div> 

        <div class="mtb-20-10">
            <input class="btn btn-primary" type="submit" tabindex="100" value="Connexion" id="wp-submit" name="wp-submit">
            <input type="hidden" value="http://localhost/wordpress/" name="redirect_to">
        </div>

        <a class="helvetica-1" href="http://localhost/wordpress/wp-login.php?action=lostpassword">Mot de passe oublié</a>            
    </div>
</form>