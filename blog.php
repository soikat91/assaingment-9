<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>
<?php include "./includes/navbar.php"?>
   <section>
        <div class="container">
        <h1 class="text-center text-secondary font-weight-bold m-3">All Blogs</h1>
            <div class="row mt-3">                

                <div class="col-lg-8">

                    <div class="row ">

                        <div class="col-lg-4">
                            <div class="card bg-light  text-left">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="show.php">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card bg-light ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="data:image/jpeg;base64,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" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="show.php">read more</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="show.php">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="show.php">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="">read more</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 mt-3">
                            <div class="card bg-light  ">

                                <div class="card-body">

                                    <h4 class="card-title">CSS</h4>
                                    <img class="card-img-top" src="https://cdn.mos.cms.futurecdn.net/Vp9WvV7YKdH4k8sKRePcE8.jpg" alt="">
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, cum!</p>
                                    <a class="card-link stretched-link float-right" href="">read more</a>
                                </div>
                            </div>
                        </div>
                     </div>

                </div>
                <div class="col-lg-4">

                    <section class="mt-3 float-right">
                        <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                        </form>

                        <div class="mt-5">
                            <h1 class="text-secondary font-weight-bold">Categories</h1>
                            <ul>
                                <li>HTMl</li>
                                <li>CSS</li>
                                <li>PHP</li>
                                <li>JAVA</li>
                            </ul>
                        </div>
                    </section>           


                </div>

            </div>



                    
               
            </div>

        
   </section>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

</html>