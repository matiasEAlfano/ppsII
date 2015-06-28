<?php require("partials/header.php"); ?>
        
        <div class="jumbotron flyer">
            
            <h1>Gimnasio de alto rendimiento deportivo</h1>
            <p>La mejor forma de manterte activo y saludable!</p>           
            
        </div>
        
        <div class="container-fluid cuerpo">
            
            <div class="container cuerpo-index">
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="row sedes">
                            <h3>Nuestros Gimnasios</h3>
                        </div>                        
                        <div id="googleMap"></div>             
                    </div>

                    <div class="col-md-6">
                        <div class="row horarios">
                            <h3>Proximas Actividades</h3>
                        </div>
                        
                        
<!--                        VOY CON EL CARROUSEL ACA-->
                        
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/indorrCycle.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/body_combat.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
      <div class="item">
      <img src="img/yoga.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

                        
                        
                        
<!--                        TERMINA EL CARROUSEL-->
                        
                    </div>
                </div>

            </div>
            
        </div>


<?php require("partials/footer.php"); ?>

<script src="js/main.js"></script>
