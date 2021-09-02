<?php require('../partials/header_admin.php'); ?>

<?php
try{

    if(isset($_POST['salle']) && isset($_POST['bat'])){

        $salle = $db->quote($_POST['salle']);
        $bat = $db->quote($_POST['bat']);
        
        
        
        $db->query("INSERT INTO salle SET NOM_SALLE=$salle, BAT_SALLE=$bat");
        header('Location: /salle.php');
        die();
        
        
        }

}catch(PDOException $e){

    var_dump($e->getMessage());

    die();

}






$select = $db->query("SELECT * FROM salle ORDER BY NOM_SALLE");

$salles = $select->fetchAll();




?>

      <!--sideba
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Gerer</li>
						<li><i class="fa fa-files-o"></i>Etudiants</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Ajouter une salle
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal" id="" method="POST" action="salle.php">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Salle<span class="required">*</span></label>
                                       <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="salle" minlength="" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Batiment<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" type="texte" name="bat" required />
                                          </div>
                                      </div>
                                      
                                   

                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <button class="btn btn-primary" type="submit">Enregistrer</button>
                                              <button class="btn btn-default" type="reset">Annuler</button>
                                          </div>
                                      </div>
                                  </form>
                              </div>

                          </div>
                      </section>
                  </div>
              </div>


              <!-- page end-->
          </section>


          <section class="wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Listes des salles
                        </header>
                        
                        <table class="table table-striped table-advance table-hover">
                         <tbody>
                        
                         <tr>
                               
                               <th><i class="icon_calendar"></i> Nom de la salle</th>
                               <th><i class="icon_mail_alt"></i> Batiment</th>
                               
                         </tr>

                         <?php foreach($salles as $salle){ ?>

                                                    
                        <tr>
                            <td><?= $salle["NOM_SALLE"] ;?></td>
                            <td><?= $salle["BAT_SALLE"] ;?></td>
                             
                         </tr>

                     <?php    } ?>                               
                         </tbody>
                      </table>
                    </section>
                </section>
                </div>
            </div>
            <!-- page end-->
       

      </section>
      <!--main content end-->
    
  </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
    <!-- jquery validate js -->
    <script type="text/javascript" src="js/jquery.validate.min.js"></script>

    <!-- custom form validation script for this page-->
    <script src="js/form-validation-script.js"></script>
    <!--custome script for all page-->
    <script src="js/scripts.js"></script>    


  </body>
</html>