<?php
include "header.php";
include "person.php";
$person01 = new Person();
$person01->set_name( "Julkarnine Tamim" );
$person01->set_email( "julkarninetamim@gmail.com" );
?>
    <div class="row">
        <div class="column column-60 column-offset-20">
            <h1>HTML, Basic OOP, and Superglobal Variables in PHP</h1></div>
    </div>
    <div class="row my-4">
        <div class="col-md-4">
            <div class="wrap">
				<?php
				include "form.php";
				?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wrap">
                <h3 class="text-center">Task Two</h3>
                <b>Name: </b><?php echo $person01->get_name(); ?><br/>
                <b>Email: </b><?php echo $person01->get_email(); ?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="wrap">
                <h3 class="text-center">Task Three</h3>
				<?php
				if ( isset( $result ) ) {
					echo $result;
				}
				?>
            </div>
        </div>
    </div>
<?php
include "footer.php";
?>