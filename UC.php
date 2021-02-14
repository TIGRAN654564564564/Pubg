      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

          <title>UC & Royal Pass</title>
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
                <li class="breadcrumb-item active" aria-current="page">UC & Royal Pass</li>
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
                            Select UC
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="60UC">
                            <label class="custom-control-label" for="60UC">60UC</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="300UC">
                            <label class="custom-control-label" for="300UC">300UC</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="600UC">
                            <label class="custom-control-label" for="600UC">600UC</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="1500UC">
                            <label class="custom-control-label" for="1500UC">1500UC</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="3000UC">
                            <label class="custom-control-label" for="3000UC">3000UC</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="6000UC">
                            <label class="custom-control-label" for="6000UC">6000UC</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu1" role="button" aria-expanded="false" aria-controls="selectCpu1">
                            Select Royal Pass
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Royal Pass">
                            <label class="custom-control-label" for="Royal Pass">Royal Pass</label>
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
                                <img class="w-100" src="https://gametame.com/img/UC.png"   alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UC</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>60+3 UC.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$0.99 </div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gametame.com/img/UC.png" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UC</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>300+40 UC</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$4.99</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gametame.com/img/UC.png" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UC</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>600+90 UC</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$9.99</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gametame.com/img/UC.png" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UC</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>1500+375 UC</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$24.99</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gametame.com/img/UC.png" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UC</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>3000+1000 UC</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$49.99</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gametame.com/img/UC.png" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UC</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>6000+2400 UC</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$99.99</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://midas.gtimg.cn/store_config/15882121457677kabmODN.png" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Royal Pass</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>ROYALE PASS+30UC</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$9.99</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <nav class="col-12 mt-2">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="UC.php">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="UC.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="UC.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="UC.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="UC.php">Next</a>
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