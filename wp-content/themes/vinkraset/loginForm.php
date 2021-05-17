<?php

/*
Template Name: Inloggning
*/

?>
<?php get_header()?>
  
<div class="wrapper-login">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 mx-auto text-end">
                <form method="POST" action="views/login.php">
                    Användarnamn:<input type="text" name="username" /><br> 
                    Lösenord:<input type="password" name="password" style="margin-left: 45px;" /><br>
                    <input type="submit" class="btn secondary-btn" name="submit" value="Logga in" id="loginbutton"/>
                </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>