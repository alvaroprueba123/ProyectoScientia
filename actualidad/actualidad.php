<?php
    include('../layouts/layout.php');
    

?>


<style>
    #subtitle{
      font-size:35px;
    }
  </style>

  <section>
    <div class="container"  style="background-image: url('../imagenes/portadas/becas.jpg'); max-height:100%; max-width: 100%; background-repeat: no-repeat;background-size:cover;background-position:center; padding:25px 0px 25px 0px; ">
      <div class="row w-100">

        <div class="col-md-3" style="display: table;height:300px;margin-left: 75px;">
          <a href="ciencias.php" style="text-decoration-line: none; display: table-cell; vertical-align: middle;"><h1 style="color:black; font-size:50px; text-align:center">Actualidad</h1></a>
        </div>

        <div class="col-md-3" style="margin-left: 20px;">
          <br>
          <a href="cultura.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Cultura</h5></a>
          <br>
          <a href="economia.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Economia</h5></a>
          <br>
          <a href="mundo.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Mundo</h5></a>
          <br>
          <a href="tecnologia.php" style="color:white; text-decoration-line: none;"><h5 id="subtitle">Tecnologia</h5></a>
        </div>

      </div>
    </div>
  </section>


<hr>
  <section id="enterview" class="mt-4 mb-4" style="padding-left:30px">
          <div class="container-fluid ">
              <div class="row"> 
                  <div  class="col-md-8 "> 
                    <div  class="card ml-3 mr-3" style="max-width: 100%">
                      <div class="row no-gutters">
                        <div class="col">
                          <img src="../img_sci/CULTURA/img1.jpeg" class="card-img" alt="">
                        </div>
                        <div class="col-md-8 col-sm-12 col-12">
                          <div class="card-body ">
                            <h2 class="card-title">Tecnología 5G...</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <button type="button" class="btn btn-primary enlas"  ><a href="./result_entrevistas/index.htm">Leer más...</a></button>
                            <button type="button" class="btn btn-success">podcast-spotify</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div  class="card ml-3 mr-3" style="max-width: 100%">
                      <div class="row no-gutters">
                        <div class="col">
                          <img src="../img_sci/CULTURA/img2.jpeg" class="card-img" alt="">
                        </div>
                        <div class="col-md-8 col-sm-12 col-12">
                          <div class="card-body ">
                            <h2 class="card-title">Contaminación minera</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <button type="button" class="btn btn-primary">Leer más...</button>
                            <button type="button" class="btn btn-success">podcast-spotify</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div  class="card ml-3 mr-3" style="max-width: 100%">
                      <div class="row no-gutters">
                        <div class="col">
                          <img src="../img_sci/CULTURA/img3.jpeg"  class="card-img"  alt="">
                        </div>
                        <div class="col-md-8 col-sm-12 col-12">
                          <div class="card-body ">
                            <h2 class="card-title">El futuro de la educación...</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <button type="button" class="btn btn-primary">Leer más...</button>
                            <button type="button" class="btn btn-success">podcast-spotify</button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div  class="card ml-3 mr-3" style="max-width: 100%">
                      <div class="row no-gutters">
                        <div class="col">
                          <img src="../img_sci/CULTURA/img1.jpeg" class="card-img" alt="">
                        </div>
                        <div class="col-md-8 col-sm-12 col-12">
                          <div class="card-body ">
                            <h2 class="card-title">ETAPAS DEL COVID-19</h2>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                            <button type="button" class="btn btn-primary">Leer más...</button>
                            <button type="button" class="btn btn-success">podcast-spotify</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-4">
                      <div class="container">
                        <div class="row">
                          <div class="card" style="width: 100%; margin-right: 10%; margin-left: 10%;">
                            <div class="card-header">
                                <h3>Recomendaciones</h3>
                            </div>
                            <ul class="list-group list-group-flush">
                              <li  id="view1" class="list-group-item ">Cras justo odio</li>
                              <li  id="view2" class="list-group-item ">Dapibus ac facilisis in</li>
                              <li id="view3" class="list-group-item ">Vestibulum at eros</li>
                            </ul>
                          </div>
                        </div>
                      </div>
                  </div>
              </div>
          </div>
  </section>

<?php
  include('../layouts/footer.php');
?>