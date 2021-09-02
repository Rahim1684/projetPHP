<?php require('../partials/header_admin.php')?>

<?php 



try{

    if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email'])){

        $nom = $db->quote($_POST['nom']);
        $num = $db->quote($_POST['numero']);
        $prenom = $db->quote($_POST['prenom']);
        $tel = $db->quote($_POST['tel']);
        $role = $db->quote($_POST['role']);
        $email = $db->quote($_POST['email']);
        $adresse = $db->quote($_POST['adresse']);
        $type = $db->quote($_POST['type_user']);
        
        
        $db->query("INSERT INTO enseignant SET NOM_ENS=$nom, PRENOM_ENS=$prenom, TEL_ENS=$tel, ADRESSE_ENS=$adresse, EMAIL_ENS=$email, ROLE_ENS=$role, TYPE_USER=$type, NUMERO_ENS=$num");
        header('Location: /form_validation.php');
        die();
        
        
        }

}catch(PDOException $e){

    var_dump($e->getMessage());

  
    die();

}




$select = $db->query("SELECT * FROM enseignant ORDER BY NOM_ENS");

$enseignants = $select->fetchAll();









?>
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa-files-o"></i> Form Validation</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="icon_document_alt"></i>Gerer</li>
						<li><i class="fa fa-files-o"></i>Enseignants</li>
					</ol>
				</div>
			</div>
              <!-- Form validations -->              
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                          <header class="panel-heading">
                             Ajouter un enseignant
                          </header>
                          <div class="panel-body">
                              <div class="form">
                                  <form class="form-validate form-horizontal"  method="POST" action="form_validation.php">
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Nom<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control" id="cname" name="nom" minlength="5" type="text" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                          <label for="cname" class="control-label col-lg-2">Prenom<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                              <input class="form-control " id="cname" type="texte" name="prenom" required />
                                          </div>
                                      </div>
                                      <div class="form-group ">
                                        <label for="ctel" class="control-label col-lg-2">Telephone<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="ctel" type="texte" name="tel" required />
                                        </div>
                                    </div>
                                      <div class="form-group ">
                                          <label for="cemail" class="control-label col-lg-2">Email<span class="required">*</span></label>
                                          <div class="col-lg-10">
                                            <input class="form-control " id="cemail" type="email" name="email" required />
                                        </div>
                                      </div>                                      
                                      <div class="form-group ">
                                        <label for="cadresse" class="control-label col-lg-2">Adresse<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="cadresse" type="texte" name="adresse" required />
                                        </div>
                                       
                                    </div>
                                    <div class="form-group ">
                                        <label for="crole" class="control-label col-lg-2">Role<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="crole" type="texte" name="role" required />
                                        </div>
                                    </div>

                                    <div class="form-group ">
                                        <label for="cadresse" class="control-label col-lg-2">Numero<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <input class="form-control " id="cadresse" type="texte" name="numero" required />
                                        </div>
                                    </div>
                                    <div class="form-group ">
                                        <label for="crole" class="control-label col-lg-2">Type d'utlisateur<span class="required">*</span></label>
                                        <div class="col-lg-10">
                                            <select name="type_user" id="" class="form-control">
                                                <option value="etudiant">Etudiant</option>
                                                <option value="enseignant">Enseignant</option>
                                            </select>
                                        </div>
                                    </div>
                                      <div class="form-group">
                                          <div class="col-lg-offset-2 col-lg-10">
                                              <input class="btn btn-primary" type="submit" value="Envoyer"/>
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
                            Listes des enseignants
                        </header>
                        
                        <table class="table table-striped table-advance table-hover">
                         <tbody>
                            <tr>
                            <th><i class="icon_profile"></i> Nom</th>
                               <th><i class="icon_calendar"></i> prenom</th>
                               <th><i class="icon_mail_alt"></i> Email</th>
                               <th><i class="icon_pin_alt"></i> Telephone</th>
                               <th><i class="icon_mobile"></i> Adresse</th>
                               <th><i class="icon_cogs"></i> Role</th>
                               <th><i class="icon_cogs"></i> Action</th>
                            </tr>
                           
                            <?php foreach($enseignants as $enseignant){ ?>

                                                    
                            <tr>
                            <td><?= $enseignant["NOM_ENS"] ;?></td>
                            <td><?= $enseignant["PRENOM_ENS"] ;?></td>
                            <td><?= $enseignant["EMAIL_ENS"] ;?></td>
                            <td><?= $enseignant["TEL_ENS"] ;?></td>
                            <td><?= $enseignant["ADRESSE_ENS"] ;?></td>
                            <td><?= $enseignant["ROLE_ENS"] ;?></td>
                            <td>
                                <div class="btn-group">
                                    <a class="btn btn-primary" href="#"><i class="icon_plus_alt2"></i></a>
                                    <a class="btn btn-success" href="#"><i class="icon_check_alt2"></i></a>
                                    <a class="btn btn-danger" href="#"><i class="icon_close_alt2"></i></a>
                                </div>
                                </td>
                            </tr>



                            <?php } ?>
       
                                                       
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
