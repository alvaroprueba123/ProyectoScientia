<?php
        include('../layouts/layout.php');
    ?>

    <style>
        #bloque{
            background:#9ACDCD;
            text-align: justify;
            padding:20px 20px 0px 20px;
            
        }
        h3{
            text-align: center;
        }
        #carrusel1{
            margin:20px 10px 20px 10px;
        }
        #bleft{
            float:left;
            margin-bottom:30px
        }
        #bright{
            float:right;
            margin-bottom:30px
        }
        #img{
            max-width:100%;
            max-height:100%;
        }
    
    </style>


    <section style="place-items:center; display:flex; justify-content:center; flex-direction:column;">
        <div class="col-md-10">
            <div class="row" style="place-items:center; display:flex; justify-content:center; flex-direction:column;"> 
                <div  class="col-md-8"> 
                    <br>
                    <div  class="ml-1 mr-2" style="max-width: 100%">
                        <div class="row">

                            <div class="col-md-12" id="bloque">

                                <div id="carrusel1" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                        <img class="d-block w-100" src="../imagenes/audiovisual/fotografia/imgfot3.jpg" alt="First slide" id=img>
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="../imagenes/audiovisual/fotografia/imgfot3.jpg" alt="Second slide" id=img>
                                        </div>
                                        <div class="carousel-item">
                                        <img class="d-block w-100" src="../imagenes/audiovisual/fotografia/imgfot3.jpg" alt="Third slide" id=img>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carrusel1" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carrusel1" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                <h3>Titulo del album</h3>
                                <p>
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Dolorum blanditiis maiores a, exercitationem expedita fuga! 
                                        Natus illum, ut dolor enim nostrum nisi? Quod sit saepe, 
                                        expedita sequi fuga ut aperiam.
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                        Dolorum blanditiis maiores a, exercitationem expedita fuga! 
                                        Natus illum, ut dolor enim nostrum nisi? Quod sit saepe, 
                                        expedita sequi fuga ut aperiam.
                                    </p>

                            </div>

                            <div class="col-md-12 mb-3" id="bloque">
                                <div class="col-md-6" id="bleft">
                                        
                                    <div id="carrusel2" class="carousel slide" data-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                            <img class="d-block w-100" src="../imagenes/audiovisual/fotografia/imgfot2.jpg" alt="First slide" id=img>
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100" src="../imagenes/audiovisual/fotografia/imgfot2.jpg" alt="Second slide" id=img>
                                            </div>
                                            <div class="carousel-item">
                                            <img class="d-block w-100" src="../imagenes/audiovisual/fotografia/imgfot2.jpg" alt="Third slide" id=img>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#carrusel2" role="button" data-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="carousel-control-next" href="#carrusel2" role="button" data-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-6" id="bright">
                                    <ul style="list-style-type:decimal;">
                                        <li>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            Necessitatibus dolore nihil, atque alias culpa 
                                            reiciendis perspiciatis aperiam expedita quos aliquid dolores. 
                                            Veniam placeat nemo dolore quisquam ad voluptatem consequuntur enim!
                                        </li>
                                        <li>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            Necessitatibus dolore nihil, atque alias culpa 
                                            reiciendis perspiciatis aperiam expedita quos aliquid dolores. 
                                            Veniam placeat nemo dolore quisquam ad voluptatem consequuntur enim!
                                        </li>
                                        <li>
                                            Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
                                            Necessitatibus dolore nihil, atque alias culpa 
                                            reiciendis perspiciatis aperiam expedita quos aliquid dolores. 
                                            Veniam placeat nemo dolore quisquam ad voluptatem consequuntur enim!
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>


        <br>
    </section>












    <?php
        include('../layouts/footer.php');
    ?>