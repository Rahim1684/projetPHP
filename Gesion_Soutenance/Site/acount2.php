
<?php require_once('partials/header.php');?>
<?php 

require('lib/auth.php');




 $req = $db->query("SELECT * FROM enseignant");
  $user = $req->fetch();
  $usertype = $user['TYPE_USER'] ;
 if($usertype=="enseignant"){ 
 session_start();
 $_SESSION['connecte']=1;
 $_SESSION['id']=$user['ID_ENS'];
 $_SESSION['nom']=$user['NOM_ENS'];
 $_SESSION['prenom']=$user['PRENOM_ENS'];
 $_SESSION['numero']=$user['NUMERO_ENS'];
 $_SESSION['email']=$user['EMAIL_ENS'];
 $_SESSION['adresse']=$user['ADRESSE_ENS'];

 }



?>
    <!-- Start intro section -->
   

 <!-- end intro section -->

    <a href="https://icons8.com/icon/85430/user-male"></a>
    <div class="main-container">
      <div class="container">
        <div class="row">   
          
        <div class="col-sm-3 page-sidebar">
            <aside>
              <div class="inner-box">
                <div class="categories">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
width="96" height="96"
viewBox="0 0 226 226"
style=" fill:#000000;"><g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal"><path d="M0,226v-226h226v226z" fill="none"></path><path d="M16.95,113c0,-53.04695 43.00305,-96.05 96.05,-96.05c53.04695,0 96.05,43.00305 96.05,96.05c0,53.04695 -43.00305,96.05 -96.05,96.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05zM113,204.53c50.55062,0 91.53,-40.97938 91.53,-91.53c0,-50.55062 -40.97938,-91.53 -91.53,-91.53c-50.55062,0 -91.53,40.97938 -91.53,91.53c0,50.55062 40.97938,91.53 91.53,91.53z" fill="#000000"></path><g fill="#000000"><path d="M113,36.725c-33.69829,0 -61.02,27.32171 -61.02,61.02v7.6275v6.88263c-4.37597,4.17275 -7.6275,9.54049 -7.6275,15.99987c0,9.47311 6.54097,16.49755 14.82297,19.9328c9.92364,23.7201 29.79971,41.0872 53.82453,41.0872c24.02482,0 43.90089,-17.3671 53.82453,-41.0872c8.282,-3.43525 14.82297,-10.45969 14.82297,-19.9328c0,-6.45938 -3.25153,-11.82712 -7.6275,-15.99987v-6.88263v-7.6275c0,-33.69829 -27.3217,-61.02 -61.02,-61.02zM74.8625,97.745h76.275c4.21038,0 7.6275,3.41712 7.6275,7.6275v7.6275v6.49529l3.82865,2.18993c2.316,1.32948 3.79885,3.63325 3.79885,6.56978c0,3.92909 -2.81326,6.96171 -6.56978,7.47853l-4.46924,0.62569l-1.62382,4.20108c-7.86243,20.48916 -23.50335,33.4597 -40.72966,33.4597c-17.22631,0 -32.86722,-12.97055 -40.72966,-33.4597l-1.62382,-4.20108l-4.46924,-0.62569c-3.75652,-0.51682 -6.56978,-3.54944 -6.56978,-7.47853c0,-2.93653 1.48285,-5.2403 3.79885,-6.56978l3.82865,-2.18993v-6.49529v-7.6275c0,-4.21038 3.41712,-7.6275 7.6275,-7.6275z"></path></g><path d="M113,226c-62.40818,0 -113,-50.59182 -113,-113v0c0,-62.40818 50.59182,-113 113,-113v0c62.40818,0 113,50.59182 113,113v0c0,62.40818 -50.59182,113 -113,113z" fill="none"></path><path d="M113,221.48c-59.91185,0 -108.48,-48.56815 -108.48,-108.48v0c0,-59.91185 48.56815,-108.48 108.48,-108.48h0c59.91185,0 108.48,48.56815 108.48,108.48v0c0,59.91185 -48.56815,108.48 -108.48,108.48z" fill="none"></path><path d="M113,222.61c-60.53593,0 -109.61,-49.07407 -109.61,-109.61v0c0,-60.53593 49.07407,-109.61 109.61,-109.61h0c60.53593,0 109.61,49.07407 109.61,109.61v0c0,60.53593 -49.07407,109.61 -109.61,109.61z" fill="none"></path><path d="M113,218.09c-58.0396,0 -105.09,-47.0504 -105.09,-105.09v0c0,-58.0396 47.0504,-105.09 105.09,-105.09v0c58.0396,0 105.09,47.0504 105.09,105.09v0c0,58.0396 -47.0504,105.09 -105.09,105.09z" fill="none"></path><path d="M113,200.01c-48.0543,0 -87.01,-38.9557 -87.01,-87.01v0c0,-48.0543 38.9557,-87.01 87.01,-87.01h0c48.0543,0 87.01,38.9557 87.01,87.01v0c0,48.0543 -38.9557,87.01 -87.01,87.01z" fill="none"></path><path d="M113,195.49c-45.55797,0 -82.49,-36.93203 -82.49,-82.49v0c0,-45.55797 36.93203,-82.49 82.49,-82.49v0c45.55797,0 82.49,36.93203 82.49,82.49v0c0,45.55797 -36.93203,82.49 -82.49,82.49z" fill="none"></path><path d="M113,193.23c-44.30981,0 -80.23,-35.92019 -80.23,-80.23v0c0,-44.30981 35.92019,-80.23 80.23,-80.23h0c44.30981,0 80.23,35.92019 80.23,80.23v0c0,44.30981 -35.92019,80.23 -80.23,80.23z" fill="none"></path><path d="M113,188.71c-41.81348,0 -75.71,-33.89652 -75.71,-75.71v0c0,-41.81348 33.89652,-75.71 75.71,-75.71v0c41.81348,0 75.71,33.89652 75.71,75.71v0c0,41.81348 -33.89652,75.71 -75.71,75.71z" fill="none"></path><path d="M113,184.19c-39.31715,0 -71.19,-31.87285 -71.19,-71.19v0c0,-39.31715 31.87285,-71.19 71.19,-71.19v0c39.31715,0 71.19,31.87285 71.19,71.19v0c0,39.31715 -31.87285,71.19 -71.19,71.19z" fill="none"></path><path d="M113,179.67c-36.82082,0 -66.67,-29.84918 -66.67,-66.67v0c0,-36.82082 29.84918,-66.67 66.67,-66.67h0c36.82082,0 66.67,29.84918 66.67,66.67v0c0,36.82082 -29.84918,66.67 -66.67,66.67z" fill="none"></path><path d="M113,185.32c-39.94123,0 -72.32,-32.37877 -72.32,-72.32v0c0,-39.94123 32.37877,-72.32 72.32,-72.32v0c39.94123,0 72.32,32.37877 72.32,72.32v0c0,39.94123 -32.37877,72.32 -72.32,72.32z" fill="none"></path><path d="M113,180.8c-37.44491,0 -67.8,-30.35509 -67.8,-67.8v0c0,-37.44491 30.35509,-67.8 67.8,-67.8h0c37.44491,0 67.8,30.35509 67.8,67.8v0c0,37.44491 -30.35509,67.8 -67.8,67.8z" fill="none"></path><path d="M113,193.23c-44.30981,0 -80.23,-35.92019 -80.23,-80.23v0c0,-44.30981 35.92019,-80.23 80.23,-80.23h0c44.30981,0 80.23,35.92019 80.23,80.23v0c0,44.30981 -35.92019,80.23 -80.23,80.23z" fill="none"></path><path d="M113,188.71c-41.81348,0 -75.71,-33.89652 -75.71,-75.71v0c0,-41.81348 33.89652,-75.71 75.71,-75.71v0c41.81348,0 75.71,33.89652 75.71,75.71v0c0,41.81348 -33.89652,75.71 -75.71,75.71z" fill="none"></path><path d="M113,197.75c-46.80613,0 -84.75,-37.94387 -84.75,-84.75v0c0,-46.80613 37.94387,-84.75 84.75,-84.75v0c46.80613,0 84.75,37.94387 84.75,84.75v0c0,46.80613 -37.94387,84.75 -84.75,84.75z" fill="none"></path><path d="M113,193.23c-44.30981,0 -80.23,-35.92019 -80.23,-80.23v0c0,-44.30981 35.92019,-80.23 80.23,-80.23h0c44.30981,0 80.23,35.92019 80.23,80.23v0c0,44.30981 -35.92019,80.23 -80.23,80.23z" fill="none"></path><path d="M113,198.88c-47.43021,0 -85.88,-38.44979 -85.88,-85.88v0c0,-47.43021 38.44979,-85.88 85.88,-85.88v0c47.43021,0 85.88,38.44979 85.88,85.88v0c0,47.43021 -38.44979,85.88 -85.88,85.88z" fill="none"></path><path d="M113,194.36c-44.93389,0 -81.36,-36.42611 -81.36,-81.36v0c0,-44.93389 36.42611,-81.36 81.36,-81.36h0c44.93389,0 81.36,36.42611 81.36,81.36v0c0,44.93389 -36.42611,81.36 -81.36,81.36z" fill="none"></path><path d="M113,200.01c-48.0543,0 -87.01,-38.9557 -87.01,-87.01v0c0,-48.0543 38.9557,-87.01 87.01,-87.01h0c48.0543,0 87.01,38.9557 87.01,87.01v0c0,48.0543 -38.9557,87.01 -87.01,87.01z" fill="none"></path><path d="M113,195.49c-45.55797,0 -82.49,-36.93203 -82.49,-82.49v0c0,-45.55797 36.93203,-82.49 82.49,-82.49v0c45.55797,0 82.49,36.93203 82.49,82.49v0c0,45.55797 -36.93203,82.49 -82.49,82.49z" fill="none"></path><path d="M113,201.14c-48.67838,0 -88.14,-39.46162 -88.14,-88.14v0c0,-48.67838 39.46162,-88.14 88.14,-88.14h0c48.67838,0 88.14,39.46162 88.14,88.14v0c0,48.67838 -39.46162,88.14 -88.14,88.14z" fill="none"></path><path d="M113,196.62c-46.18205,0 -83.62,-37.43795 -83.62,-83.62v0c0,-46.18205 37.43795,-83.62 83.62,-83.62v0c46.18205,0 83.62,37.43795 83.62,83.62v0c0,46.18205 -37.43795,83.62 -83.62,83.62z" fill="none"></path><path d="M113,202.27c-49.30246,0 -89.27,-39.96754 -89.27,-89.27v0c0,-49.30246 39.96754,-89.27 89.27,-89.27h0c49.30246,0 89.27,39.96754 89.27,89.27v0c0,49.30246 -39.96754,89.27 -89.27,89.27z" fill="none"></path><path d="M113,197.75c-46.80613,0 -84.75,-37.94387 -84.75,-84.75v0c0,-46.80613 37.94387,-84.75 84.75,-84.75v0c46.80613,0 84.75,37.94387 84.75,84.75v0c0,46.80613 -37.94387,84.75 -84.75,84.75z" fill="none"></path><path d="M113,205.66c-51.1747,0 -92.66,-41.4853 -92.66,-92.66v0c0,-51.1747 41.4853,-92.66 92.66,-92.66v0c51.1747,0 92.66,41.4853 92.66,92.66v0c0,51.1747 -41.4853,92.66 -92.66,92.66z" fill="none"></path><path d="M113,201.14c-48.67838,0 -88.14,-39.46162 -88.14,-88.14v0c0,-48.67838 39.46162,-88.14 88.14,-88.14h0c48.67838,0 88.14,39.46162 88.14,88.14v0c0,48.67838 -39.46162,88.14 -88.14,88.14z" fill="none"></path><path d="M113,206.79c-51.79879,0 -93.79,-41.99121 -93.79,-93.79v0c0,-51.79879 41.99121,-93.79 93.79,-93.79h0c51.79879,0 93.79,41.99121 93.79,93.79v0c0,51.79879 -41.99121,93.79 -93.79,93.79z" fill="none"></path><path d="M113,202.27c-49.30246,0 -89.27,-39.96754 -89.27,-89.27v0c0,-49.30246 39.96754,-89.27 89.27,-89.27v0c49.30246,0 89.27,39.96754 89.27,89.27v0c0,49.30246 -39.96754,89.27 -89.27,89.27z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path><path d="M113,209.05c-53.04695,0 -96.05,-43.00305 -96.05,-96.05v0c0,-53.04695 43.00305,-96.05 96.05,-96.05h0c53.04695,0 96.05,43.00305 96.05,96.05v0c0,53.04695 -43.00305,96.05 -96.05,96.05z" fill="none"></path><path d="M113,204.53c-50.55062,0 -91.53,-40.97938 -91.53,-91.53v0c0,-50.55062 40.97938,-91.53 91.53,-91.53v0c50.55062,0 91.53,40.97938 91.53,91.53v0c0,50.55062 -40.97938,91.53 -91.53,91.53z" fill="none"></path></g></svg>
                  <div class="widget-title">




                    
                  <?php if(isset($_SESSION['email'])){ ?>
                    <h4>Mon compte</h4>
                  </div>
                  <div class="categories-list">
                    <ul>
                      <li>
                       <?= $_SESSION['nom']." ".$_SESSION['prenom'] ;?>
                      </li>
                      
                      <li>
                      <?= $_SESSION['numero'] ;?>
                      </li>
                      <li>
                      <?= $_SESSION['adresse'] ;?>
                      </li>
                     

                  



          <?php        } ?>


                     
                    </ul>
                  </div>
                </div>
              </div>



         </div>

         <div class="col-sm-8 r">
            <div class="inner-box">
            
            <div class="row">

            <button type="button" class="btn btn-primary" ><a href="module.php" style="background-color:#337ab7; color : #fff;">Ajouter modules</a></button>
            
            <button type="button" class="btn btn-primary" data-toggle="" data-target="" data-whatever="@fat"><a href="session.php" style="background-color:#337ab7; color : #fff;">Ouvrir une Session</a></button>

            

            </div>


            <div class="row" style="margin-top: 20px;">
               
            <button type="button" class="btn btn-primary" ><a href="rapports.php" style="background-color:#337ab7; color : #fff;">Evaluer des rapports</a></button>
            
            

            
            
              </div>
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Deposer votre rendu</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form method="POST" action="acount.php">
                  
                  <div class="custom-file">

                  <label class="custom-file-label" for="inputGroupFile04">Importer le rendu :</label>
                    <input type="file" class="custom-file-input" name="file" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04">
                  </div>
                
                  <div class="custom-file">
                      <label for="message-text" class="col-form-label">titre du rapport :</label>
                      <input type="text" class="form-control" id="" name="titre" aria-describedby="" placeholder="intitulé">
                  </div>

                  <div class="custom-file">
                      <label for="message-text" class="col-form-label">Type de rapport :</label>
                      <input type="text" class="form-control" id="" name="type" aria-describedby="" placeholder="Tel ou Tel">
                    </div>

                    <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fermer</button>
                  <button type="submit" class="btn btn-primary">Envoyer</button>
                  </div>
                  </form>
                </div>
                
              </div>
            </div>
          </div>

            
        
            

           

              

            
             
       
         

            </div>

         </div>
     </div>
 </div>

  <?php require('partials/footer.php') ;?>