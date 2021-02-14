      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

          <title>Cars</title>
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
                <li class="breadcrumb-item active" aria-current="page">Cars</li>
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
                            Select Car OFF-Road
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="UAZ">
                            <label class="custom-control-label" for="UAZ">UAZ</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Buggy">
                            <label class="custom-control-label" for="Buggy">Buggy</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Pickup">
                            <label class="custom-control-label" for="Pickup">Pickup</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Rony">
                            <label class="custom-control-label" for="Rony">Rony</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Snowmobile">
                            <label class="custom-control-label" for="Snowmobile">Snowmobile</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Snow Bike">
                            <label class="custom-control-label" for="Snow Bike">Snow Bike</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Zima">
                            <label class="custom-control-label" for="Zima">Zima</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu1" role="button" aria-expanded="false" aria-controls="selectCpu1">
                            Select Car Sedan
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Dacia 1300">
                            <label class="custom-control-label" for="Dacia 1300">Dacia 1300</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Mirado">
                            <label class="custom-control-label" for="Mirado">Mirado</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectSize1" role="button" aria-expanded="false" aria-controls="selectSize1">
                            Select Car Trucks
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectSize1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="BRDM">
                            <label class="custom-control-label" for="BRDM">BRDM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Pickup">
                            <label class="custom-control-label" for="Pickup">Pickup</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Rony">
                            <label class="custom-control-label" for="Rony">Rony</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectBrand2" role="button" aria-expanded="false" aria-controls="selectBrand2">
                            Select Motorcycles
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Motorcycle">
                            <label class="custom-control-label" for="Motorcycle">Motorcycle</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Motorcycle w/ sidecar">
                            <label class="custom-control-label" for="Motorcycle w/ sidecar">Motorcycle w/ sidecar</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Tukshai">
                            <label class="custom-control-label" for="Tukshai">Tukshai</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Scooter">
                            <label class="custom-control-label" for="Scooter">Scooter</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu2" role="button" aria-expanded="false" aria-controls="selectCpu2">
                            Select Boats
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Speedboats">
                            <label class="custom-control-label" for="Speedboats">Speedboats</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Jet Skis">
                            <label class="custom-control-label" for="Jet Skis">Jet Skis</label>
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
                                <img class="w-100" src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/thumb/b/bf/Vehicle_skin_PGC_2019_Dacia.png/600px-Vehicle_skin_PGC_2019_Dacia.png?version=b4f9f44d89db15799e53a7dade0bcdff"   alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Dacia PGC 2019</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 4.</li>
                                    <li>Health: 1800.</li>
                                    <li>Top Speed: 131 Km/h.</li>
                                    <li>Type: Land.</li>
                                    <li>Appears in: Erangel, Vikendi‎‎.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$100</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/7/77/Vehicle_skin_Red_Zoned_UAZ.png?version=e9fef342cc9e3064bdf996d74a50836a" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">UAZ Red Zoned</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 4.</li>
                                    <li>Health: 2000.</li>
                                    <li>Top Speed: 116 km/h.</li>
                                    <li>Type: Land/Off-road.</li>
                                    <li>Appears in: Erangel.</li>
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
                                <img class="w-100" src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/thumb/0/09/Vehicle_skin_Route_Warrior_Zima.png/600px-Vehicle_skin_Route_Warrior_Zima.png?version=1366efab548102b38c85d38606cf0415" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Zima Route Warrior</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 4.</li>
                                    <li>Health: 1800.</li>
                                    <li>Top Speed: N/A.</li>
                                    <li>Type: Land/Off-road.</li>
                                    <li>Appears in: Vikendi.</li>
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
                                <img class="w-100" src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/thumb/2/25/Vehicle_skin_Racing_Stripe_Mirado.png/600px-Vehicle_skin_Racing_Stripe_Mirado.png?version=de16db82ab59d43867235bffa572a14c" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Mirado Racing Stripe</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 4.</li>
                                    <li>Health: 2000.</li>
                                    <li>Top Speed: 152 Km/h.</li>
                                    <li>Type: Land.</li>
                                    <li>Appears in: Miramar.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$100</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/thumb/2/27/Vehicle_skin_Cat_Scratch_Motorbike.png/600px-Vehicle_skin_Cat_Scratch_Motorbike.png?version=ca917c5f126d8c517f253ba8249594d7" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Motorbike Cat Scratch</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 3.</li>
                                    <li>Health: 1000.</li>
                                    <li>Top Speed: 152 Km/h.</li>
                                    <li>Type: Land</li>
                                    <li>Appears in: All</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$90</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://i.playground.ru/i/pix/2488939/image.jpg" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">Buggy Yellow</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 2.</li>
                                    <li>Health: ~ 1540.</li>
                                    <li>Top Speed: 100 Km/h.</li>
                                    <li>Type: Land/Off-road.</li>
                                    <li>Appears in: All</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$85</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/thumb/f/fc/Vehicle_skin_Public_Transit_Van.png/600px-Vehicle_skin_Public_Transit_Van.png?version=1dac11ef370de821d5640c597cc8915a" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="#" class="text-decoration-none">VAN Public Transit</a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <li>Occupants: 6.</li>
                                    <li>Health: 1000.</li>
                                    <li>Top Speed: 100 Km/h.</li>
                                    <li>Type: Land.</li>
                                    <li>Appears in: Miramar.</li>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$80</div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <nav class="col-12 mt-2">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="cars.php">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="cars.php">1</a></li>
                            <li class="page-item"><a class="page-link" href="cars.php">2</a></li>
                            <li class="page-item"><a class="page-link" href="cars.php">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="cars.php">Next</a>
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