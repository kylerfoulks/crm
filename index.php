<?php require_once('header.php');
$app->get('/cowsay', function() use($app) {
  $app['monolog']->addDebug('cowsay');
  return "<pre>".\Cowsayphp\Cow::say("Cool beans")."</pre>";
});
?>




    	<div class="row">
    		<?php require_once('userNav.php');?> 

            <div class="col-md-8 content-wrap">
                <div class="page-title">Dashboard</div>
            </div>


<?php
$dsn = "pgsql:"
    . "host=ec2-54-83-59-203.compute-1.amazonaws.com;"
    . "dbname=ddrn1hhgb465rs;"
    . "user=apduhqpapfemah;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=rF0iut51FBnE5UcSFFOjnPqGNs";

if ($db = new PDO($dsn)) {
    echo 'yes';
}?>


    	</div>

</div><!-- /Usernav -->




<?php require_once('footer.php');?>