<?php

/*
Template Name: Registrera
*/

?>

<?php get_header()?>
<div class="wrapper-signupform">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-10 mx-auto text-end">
                    <form method="POST" action="/registrera/">
                            Användarnamn: <input type="text" name="username" /><br />
                            Lösenord: <input type="password" name="password" /><br />
                        <input type="submit" class="btn secondary-btn" name="submit" value="Registrera dig" />
                    </form>
            </div>
        </div>
    </div>
</div>

<?php get_footer()?>
