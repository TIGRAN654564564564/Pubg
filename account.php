<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Orders</title>
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


    <main>   
<div class="row row1 col-12 mt-4 rounded mb-5 mr-4">
          <div class="col1 col-12 col-md-7">
            <div class="col1 col-12">
              <div class="row"><h2 class="col-12 text-center">Recent Activity</h2></div>
              <div class="row my-orders-bg">              
                <div class="p-1 order order1 col-12 col-md-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 text-center">
                      <img src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/e/ef/Weapon_skin_Pirate_KIM%27s_M416.png?version=e6d3ba7f2c15a7b190269502ef25b12a" width="200px" class="prod-img">
                    </div>
                    <div class="col-12 col-md-4 col-lg-6">
                      <div class="prod-text-header text-center">
                        <a class="text-dark" href="M416.php"><h5>M416 Pirate KIM's</h5></a>
                      </div>
                      <ul>
                        <li >Muzzles:Compensator(AR), Flash Hider(AR), Suppressor(AR).</li>
                        <li>Magazines:Extended Mag(AR), Quickdraw(AR).</li>
                      </ul>
                    </div>
                     <div class="col-12 col-md-4 col-lg-3 d-flex align-items-center">
                      <a href="card.php" class="col-12 btn btn-transperate mt-1 border border-dark text-dark">BUY</a>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col1 col-12">
              <div class="row my-orders-bg">              
                <div class="p-1 order order1 col-12 col-md-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 text-center">
                      <img src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/3/3c/Weapon_skin_Weathered_Mustang_Groza.png?version=1130e6c3a3fdf906a074caf90e7ab7f8" width="200px" class="prod-img">
                    </div>
                    <div class="col-12 col-md-4 col-lg-6">
                      <div class="prod-text-header text-center">
                        <a class="text-dark" href="groza.php"><h5>Groza Weathered Mustang</h5></a>
                      </div>
                      <ul>
                        <li >Muzzles: Suppressor (AR).</li>
                        <li>Magazines:Extended Mag(AR), Quickdraw(AR).</li>
                      </ul>
                    </div>
                     <div class="col-12 col-md-4 col-lg-3 d-flex align-items-center">
                      <a href="card.php" class="col-12 btn btn-transperate mt-1 border border-dark text-dark">BUY</a>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
            <div class="col1 col-12">
              <div class="row my-orders-bg">              
                <div class="p-1 order order1 col-12 col-md-12">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 text-center">
                      <img src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/4/4f/Weapon_skin_Wakgood%27s_AWM.png?version=80ae125d522efc5614a78d8d9c7fb22f" width="200px" class="prod-img">
                    </div>
                    <div class="col-12 col-md-4 col-lg-6">
                      <div class="prod-text-header text-center">
                        <a class="text-dark" href="AWM.php"><h5>AWM Wakgood's</h5></a>
                      </div>
                      <ul>
                       <li>Muzzle:Compensator(Snipers), Flash Hider(Snipers), Suppressor(Snipers)(recommended).</li>
                       <li>Stock:Cheek Pad (recommended),Bullet loops(Shotgun)</li>
                      </ul>
                    </div>
                     <div class="col-12 col-md-4 col-lg-3 d-flex align-items-center">
                      <a href="card.php" class="col-12 btn btn-transperate mt-1 border border-dark text-dark">BUY</a>
                    </div>
                  </div>  
                </div>
              </div>
            </div>
          </div>
          <div class="col2 col-12 col-md-5 mt-5">
            <div class="row row2 mt-3">
              <button type="button" class="btn btn-dark bg-transparent col-12 text-dark" data-toggle="modal" data-target="#MyWishListModal">My Wish List</button>
            </div>
            <div class="row row4 mt-3">
              <a type="button" class="btn btn-dark bg-transparent col-12 text-dark" href="info.php" >My info</a>
            </div>
           
          </div>
        </div>
        <div class="row row2 col-12 col-">
          
        </div>

         <?php include ('orders.php'); ?>


        <div class="modal fade bd-example-modal-lg" id="MyWishListModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">My Wish List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body m-1">
                <div class="p-1 prod col-8 col-md-12 border border-secondary rounded mt-1" id="Prod1">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                      <img src="images/psycho.png" width="150px" height="160px" class="prod-img">
                    </div>
                  <div class="col-12 col-md-4 col-lg-6">
                    <div class="prod-text-header text-center">
                      <a class="text-dark" ><h5>Psycho Jester</h5></a>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                      <button type="button" class="btn btn-success bg-transparent wishlist-button-star" id="star1">
                        <i class="fa fa-star text-success wishlist-star" aria-hidden="true" data-dismiss="#WishlistItem"><img src="https://image.flaticon.com/icons/svg/892/892349.svg" width="20px" height="20px"></i>
                      </button>
                    </div> 
                    <ul class="d-none d-lg-block">
                      <li class="text-success">Psycho Jester.</li>
                      <li class="text-success">Psycho Jester Mask.</li>
                      <li class="text-success">Psycho Jester Bag.</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="col-12 text-center">
                      <h1>$140
                    </h1></div>
                    <div class="mt-2">
                     <a href="card.php" class="col-12 btn btn-success">Buy Now</a>
                     <a href="skins.php" class="col-12 btn btn-transperate mt-1 border border-success text-success">Check It</a>
                    </div>
                  </div>
                  </div>  
                </div>
                <div class="p-1 prod col-8 col-md-12 border border-secondary rounded mt-1" id="Prod2">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                      <img src="images/a5.png" width="150px" height="160px" class="prod-img">
                    </div>
                  <div class="col-12 col-md-4 col-lg-6">
                    <div class="prod-text-header text-center">
                      <a class="text-dark" ><h5>Puppet Agent Set</h5></a>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                      <button type="button" class="btn btn-success bg-transparent wishlist-button-star" id="star1">
                        <i class="fa fa-star text-success wishlist-star" aria-hidden="true" data-dismiss="#WishlistItem"><img src="https://image.flaticon.com/icons/svg/892/892349.svg" width="20px" height="20px"></i>
                      </button>
                    </div> 
                    <ul class="d-none d-lg-block">
                      <li class="text-success">Puppet Agent Set.</li>
                      <li class="text-success">Puppet Agent Mask.</li>
                      <li class="text-success">Puppet Agent Set Bag.</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="col-12 text-center">
                      <h1>$105</h1>
                    </div>
                    <div class="mt-2">
                     <a href="card.php" class="col-12 btn btn-success">Buy Now</a>
                     <a href="skins.php" class="col-12 btn btn-transperate mt-1 border border-success text-success">Check It</a>
                    </div>
                  </div>
                  </div>  
                </div>
                <div class="p-1 prod col-8 col-md-12 border border-secondary rounded mt-1" id="Prod3">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                      <img src="https://gamepedia.cursecdn.com/battlegrounds_gamepedia_en/7/77/Vehicle_skin_Red_Zoned_UAZ.png?version=e9fef342cc9e3064bdf996d74a50836a" width="150px" height="160px" class="prod-img">
                    </div>
                  <div class="col-12 col-md-4 col-lg-6">
                    <div class="prod-text-header text-center">
                      <a class="text-dark" ><h5>UAZ Red Zoned</h5></a>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                      <button type="button" class="btn btn-success bg-transparent wishlist-button-star" id="star1">
                        <i class="fa fa-star text-success wishlist-star" aria-hidden="true" data-dismiss="#WishlistItem"><img src="https://image.flaticon.com/icons/svg/892/892349.svg" width="20px" height="20px"></i>
                      </button>
                    </div> 
                    <ul class="d-none d-lg-block">
                      <li class="text-success">Occupants: 4.</li>
                      <li class="text-success">Health: 2000.</li>
                      <li class="text-success">Top Speed: 116 km/h.</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="col-12 text-center">
                      <h1>$150</h1>
                    </div>
                    <div class="mt-2">
                     <a href="card.php" class="col-12 btn btn-success">Buy Now</a>
                     <a href="cars.php" class="col-12 btn btn-transperate mt-1 border border-success text-success">Check It</a>
                    </div>
                  </div>
                  </div>  
                </div>
                <div class="p-1 prod col-8 col-md-12 border border-secondary rounded mt-1" id="Prod4">
                  <div class="row">
                    <div class="col-12 col-md-4 col-lg-3 d-flex justify-content-center">
                      <img src="https://midas.gtimg.cn/store_config/15882121457677kabmODN.png" width="150px" height="160px" class="prod-img">
                    </div>
                  <div class="col-12 col-md-4 col-lg-6">
                    <div class="prod-text-header text-center">
                      <a class="text-dark" ><h5>Royal Pass</h5></a>
                    </div>
                    <div class="col-12 d-flex align-items-center justify-content-center">
                      <button type="button" class="btn btn-success bg-transparent wishlist-button-star" id="star1">
                        <i class="fa fa-star text-success wishlist-star" aria-hidden="true" data-dismiss="#WishlistItem"><img src="https://image.flaticon.com/icons/svg/892/892349.svg" width="20px" height="20px"></i>
                      </button>
                    </div>  
                    <ul class="d-none d-lg-block">
                      <li class="text-success">ROYALE PASS+30UC</li>
                      <li class="text-success">ROYALE PASS+30UC</li>
                    </ul>
                  </div>
                  <div class="col-12 col-md-4 col-lg-3">
                    <div class="col-12 text-center">
                      <h1>$9.99</h1>
                    </div>
                    <div class="mt-2">
                     <a href="card.php" class="col-12 btn btn-success">Buy Now</a>
                     <a href="UC.php" class="col-12 btn btn-transperate mt-1 border border-success text-success">Check It</a>
                    </div>
                  </div>
                  </div>  
                </div>
              </div>
            </div>
          </div> 
        </div>
       

       
         </main>

          <?php include ('footer.php'); ?>
        
        
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
</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>