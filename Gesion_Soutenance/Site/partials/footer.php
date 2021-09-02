  
    <!-- Footer Section Start -->
    <footer>
    	<!-- Footer Area Start -->

    	<!-- Footer area End -->
    	
    	<!-- Copyright Start  -->
    	<div id="copyright">
    		<div class="container">
    			<div class="row">
    				<div class="col-md-12">
              <div class="site-info pull-left">
                <p>Université Picardie Jules Verne @ 2020</p>
              </div>    					
              <div class="bottom-social-icons social-icon pull-right">  
                <a class="facebook" target="_blank" href="#"><i class="fa fa-facebook"></i></a> 
                <a class="twitter" target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                <a class="dribble" target="_blank" href="#"><i class="fa fa-dribbble"></i></a>
                <a class="flickr" target="_blank" href="#"><i class="fa fa-flickr"></i></a>
               <a class="linkedin" target="_blank" href="#"><i class="fa fa-linkedin"></i></a>
              </div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<!-- Copyright End -->

    </footer>
    <!-- Footer Section End -->  
    
    <!-- Go To Top Link -->
    <a href="#" class="back-to-top">
      <i class="fa fa-angle-up"></i>
    </a>
      
    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/material.min.js"></script>
    <script type="text/javascript" src="assets/js/material-kit.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/wow.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>
    <script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
    <script type="text/javascript" src="assets/js/waypoints.min.js"></script>
    <script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
        <script src="assets/js/bootstrap-select.min.js"></script>
   <script>

$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

   </script>     

    <script>
  $(document).ready(function(){
    $('#choix').click(function(){
      if(confirm("Etes vous sur de votre choix ?"))
        {
            var id = [];
            $(':checkbox:ckecked').each(function(i){

                id[i] = $(this).val();

            });
          if(id.length===0)
          {
            alert("Veuiller selectionner un et un seul creneau");
          }  

        }else{
          
            $.ajax({
                    url:'creneaux.php',
                    method:'POST',
                    data:{id:id},
                    success:function(){
                  for(var i=0; i<id.lenghth; i++){
                    $('tr#'+id[i]+'').css('background-color', '#ccc');
                    $('tr#'+id[i]+'').fadeOut('slow');
                  }

                    }

            });
        }
    });

  });

   </script>  
    
  </body>
</html>