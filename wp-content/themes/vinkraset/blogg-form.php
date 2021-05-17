<?php
/*
Template Name: blogg-form
*/

?>
<?php
if(isset($_POST['submit']) && !empty($_POST['submit'])) 
{
$title = $_POST['post_title'];
$post_date = $_POST['post_date'];
$post_image = $_POST['post_image'];
$post_company = $_POST['post_company'];
$post_location = $_POST['post_location'];
$post_decription = $_POST['post_decription'];
$rating = '1';
$post_id = wp_insert_post([
    'post_title' => wp_strip_all_tags($title),
    'post_type' => 'post',
    'post_content' => '',
    'post_status' => 'publish',
    'post_author' => 1
]);
update_field("rating", $rating, $post_id);
update_field("title", $post_title, $post_id);
update_field("post_date", $post_date, $post_id);
update_field("post_image", $post_image, $post_id);
update_field("post_company", $post_company, $post_id);
update_field("post_location", $post_location, $post_id);
update_field("post_decription", $post_decription, $post_id);
}
?>

<?php get_header()?>


<section class="blogg-input">
    <div class="wrapper">   
        <div class="container"> 
            <div class="row">
                    <div class="col-10 col-md-8 mx-auto">
                    <form class="form-group" method="POST" action="/blogg-form/">
                        <div class="form-titel d-flex col-4">
                            <input name="post_title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Titel">
                        </div>
                        <div class="form-date d-flex col-4">
                            <input name="post_image" type="date" class="form-control" id="formGroupExampleInput2" placeholder="datum">
                        </div>
                        <div class="form-date d-flex col-4">
                            <input name="post_image" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Bild">
                        </div>
                        <div class="form-where d-flex col-6">
                            <input name="post_location" type="text" class="form-control" id="formGroupExampleInput" placeholder="Vart?">
                        </div>
                        <div class="form-who d-flex col-6">
                            <input name="post_company" type="text" class="form-control" id="formGroupExampleInput" placeholder="Med vem?">
                        </div>
                        <div class="form-decription d-flex col-8">
                            <input name="post_decription" type="text" class="form-control" id="formGroupExampleInput" placeholder="Beskrivning"> <br>
                        </div>
                        <input type="submit" class="btn secondary-btn" name="submit" value="Publicera" />
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
            <div class="row">
                <div class="col-12 col-md-10">
                  <div class="form-check text-end">
                    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                    <label class="form-check-label" for="flexRadioDefault2">
                        <p>Jag har läst och godkänner <a href="url">Vinkraset´s villkor</a> </p>
                    </label>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer()?>