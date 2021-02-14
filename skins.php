      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

          <title>Skins</title>
        </head>
        <body>
          <div class="container bg-warning">

           
           
           
          
            
            <?php include ('menu.php'); ?>
            
            
          
       <div class="row justify-content-center">
              <div class="col-12 col-md-10 mt-2">
                  <div class="alert alert-danger" role="alert" id="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                      </button>
                      Due to technical issues, the Support section does not work
                  </div>
              </div>
          </div>
          
    <nav aria-label="breadcrumb" class="row">
            <ol class="breadcrumb mt-3 col mr-auto">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Skins</li>
            </ol>
            <form action="" class="form-inline col-12 col-md-auto">
                <label for="sortBy" class="mr-2">Sort By</label>
                <select class="custom-select" id="sortBy">
                    <option value="1">Price: Low to High</option>
                    <option value="2">Price: High to Low</option>
                    <option value="3">Rating</option>
                </select>
            </form>
        </nav>

    <div class="row border-top">
            <div class="d-none d-md-block col-md-3 sidebar bg-light border-right border-left border-bottom">
                <form>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectBrand1" role="button" aria-expanded="false" aria-controls="selectBrand1">
                            Select Clothes 
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Clothes">
                            <label class="custom-control-label" for="Clothes">Clothes</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Hat">
                            <label class="custom-control-label" for="Hat">Hat</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Glasses">
                            <label class="custom-control-label" for="Glasses">Glasses</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Mask">
                            <label class="custom-control-label" for="Mask">Mask</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Jacket">
                            <label class="custom-control-label" for="Jacket">Jacket</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Pants">
                            <label class="custom-control-label" for="Pants">Pants</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Shoes">
                            <label class="custom-control-label" for="Shoes">Shoes</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu1" role="button" aria-expanded="false" aria-controls="selectCpu1">
                            Select Helmet 
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Helmet Level 1">
                            <label class="custom-control-label" for="Helmet Level 1">Helmet Level 1</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Helmet Level 2">
                            <label class="custom-control-label" for="Helmet Level 2">Helmet Level 2</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Helmet Level 3">
                            <label class="custom-control-label" for="Helmet Level 3">Helmet Level 3</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu2" role="button" aria-expanded="false" aria-controls="selectCpu2">
                            Select Bag  
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Bag Level 1">
                            <label class="custom-control-label" for="Bag Level 1">Bag Level 1</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Bag Level 2">
                            <label class="custom-control-label" for="Bag Level 2">Bagt Level 2</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Bag Level 3">
                            <label class="custom-control-label" for="Bag Level 3">Bag Level 3</label>
                        </div>
                    </div>
                    <div class="collapse bg-secondary p-2" id="selectBrand4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Crossbow">
                            <label class="custom-control-label" for="Crossbow">Crossbow</label>
                        </div>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="imgOnly">
                        <label class="custom-control-label" for="imgOnly">With Images Only</label>
                    </div>
                    <div class="custom-control custom-switch">
                        <input type="checkbox" class="custom-control-input" id="freeImages">
                        <label class="custom-control-label" for="freeImages">Discounted Products</label>
                    </div>
                </form>

  
 
            </div>
            <div class="col-12 col-md-9 main border-right border-left">
                <div class="row justify-content-center">
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/joker.jpg" height="300px"  alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">JOKER</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>JOKER Skin</li>
                                    <li>JOKER M416 Skin</li>
                                    <li>JOKER Bag Skin</li>
                                    <li>JOKER Mask Skin</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$220 </div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/a1.png" height="300px" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Invader Set</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Invader Set</li>
                                    <li>Invader Set Bag</li>
                                    <li>Invader Set AKM</li>
                                    <li>Invader Set Mask</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$200</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/a3.png" height="300px" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Sea Serpert Cover</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Sea Serpert Cover</li>
                                    <li>Sea Serpert Cover Mask</li>
                                    <li>Sea Serpert Cover Bag</li>
                                    <li>Sea Serpert Cover M416</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$180</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/a2.png" height="300px" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Pinacchio Set</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Pinacchio Set</li>
                                    <li>Pinacchio Set Mask</li>
                                    <li>Pinacchio Set Bag</li>
                                    <li>Pinacchio Set UMP45</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$150</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/a4.png" height="300px" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Scarlet Crawlen</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Scarlet Crawlen</li>
                                    <li>Scarlet Crawlen Mask</li>
                                    <li>Scarlet Crawlen Bag</li>
                                    <li>Scarlet Crawlen M762</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$110</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/a5.png" height="300px" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Puppet Agent Set</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Puppet Agent Set</li>
                                    <li>Puppet Agent Set Mask</li>
                                    <li>Puppet Agent Set Bag</li>
                                    <li>Puppet Agent Set Vector</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$105</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="images/psycho.png"  height="300px" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Psycho Jester</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Psycho Jester</li>
                                    <li>Psycho Jester Mask</li>
                                    <li>Psycho Jester Bag</li>
                                    <li>Psycho Jester AKM</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$140</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <nav class="col-12 mt-2">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="skins.php">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="skins.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="skins.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="skins.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="skins.php">Next</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
          
          
    <?php include ('footer.php'); ?>
          
     </div>     
          <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
             
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
      </form>
            </div>    
          </div>
        </div>
      </div>
          
              
          <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header"> 
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Email address</label>
          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
                 <div class="form-group">
          <label for="exampleInputPassword1">Confirm Password</label>
          <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
                <div class="form-group form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Remember Me</label>
        </div>
        <button type="submit" class="btn btn-primary">Sign up</button>
      </form>
            </div>    
          </div>
        </div>
      </div>

     <?php include ('orders.php'); ?>

          <!-- Optional JavaScript -->
          <!-- jQuery first, then Popper.js, then Bootstrap JS -->
          <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
          <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        </body>
      </html>