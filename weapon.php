      <!doctype html>
      <html lang="en">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

          <!-- Bootstrap CSS -->
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

          <title>WEAPON</title>
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
                <li class="breadcrumb-item active" aria-current="page">Weapon</li>
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
                            Select Weapon AR
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="AKM">
                            <label class="custom-control-label" for="AKM">AKM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="M16A4">
                            <label class="custom-control-label" for="M16A4">M16A4</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="SCAR-L">
                            <label class="custom-control-label" for="SCAR-L">SCAR-L</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="M416">
                            <label class="custom-control-label" for="M416">M416</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="GROZA">
                            <label class="custom-control-label" for="GROZA">GROZA</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="AUG">
                            <label class="custom-control-label" for="AUG">AUG</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="QBZ">
                            <label class="custom-control-label" for="QBZ">QBZ</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="M762">
                            <label class="custom-control-label" for="M762">M762</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="MK47">
                            <label class="custom-control-label" for="MK47">MK47</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="G36C">
                            <label class="custom-control-label" for="G36C">G36C</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu1" role="button" aria-expanded="false" aria-controls="selectCpu1">
                            Select Weapon Bolt Action Sniper Rifles
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Kar98k">
                            <label class="custom-control-label" for="Kar98k">Kar98k</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="M24">
                            <label class="custom-control-label" for="M24">M24</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="AWM">
                            <label class="custom-control-label" for="AWM">AWM</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="WIN-94">
                            <label class="custom-control-label" for="WIN-94">WIN-94</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectSize1" role="button" aria-expanded="false" aria-controls="selectSize1">
                            Select Weapon Automatic Sniper Rifles
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectSize1">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="SKS">
                            <label class="custom-control-label" for="SKS">SKS</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="VSS">
                            <label class="custom-control-label" for="VSS">VSS</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Mini14">
                            <label class="custom-control-label" for="Mini14">Mini14</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="MK14">
                            <label class="custom-control-label" for="MK14">MK14</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="SLR">
                            <label class="custom-control-label" for="SLR">SLR</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="QBU">
                            <label class="custom-control-label" for="QBU">QBU</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectBrand2" role="button" aria-expanded="false" aria-controls="selectBrand2">
                            Select Weapon SMG
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="UZI">
                            <label class="custom-control-label" for="UZI">UZI</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="UMP45">
                            <label class="custom-control-label" for="UMP45">UMP45</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Vector">
                            <label class="custom-control-label" for="Vector">Vector</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Thompson SMG">
                            <label class="custom-control-label" for="Thompson SMG">Thompson SMG</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Bizon">
                            <label class="custom-control-label" for="Bizon">Bizon</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="MP5K">
                            <label class="custom-control-label" for="MP5K">MP5K</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu2" role="button" aria-expanded="false" aria-controls="selectCpu2">
                            Select Weapon Shotguns
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="S686">
                            <label class="custom-control-label" for="S686">S686</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="S1897">
                            <label class="custom-control-label" for="S1897">S1897</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="S12K">
                            <label class="custom-control-label" for="S12K">S12K</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="DBS">
                            <label class="custom-control-label" for="DBS">DBS</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectSize2" role="button" aria-expanded="false" aria-controls="selectSize2">
                            Select Weapon Light Machine Gun
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectSize2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="M249">
                            <label class="custom-control-label" for="M249">M249"</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="DP-28">
                            <label class="custom-control-label" for="DP-28">DP-28"</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectBrand3" role="button" aria-expanded="false" aria-controls="selectBrand3">
                            Select Weapon Pistol
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectBrand3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="P92">
                            <label class="custom-control-label" for="P92">P92</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="P1911">
                            <label class="custom-control-label" for="P1911">P1911</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="R1895">
                            <label class="custom-control-label" for="R1895">R1895</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="P18C">
                            <label class="custom-control-label" for="P18C">P18C</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="R45">
                            <label class="custom-control-label" for="R45">R45</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Sawed-off">
                            <label class="custom-control-label" for="Sawed-off">Sawed-off</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Scorpion">
                            <label class="custom-control-label" for="Scorpion">Scorpion</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Desert Eagle">
                            <label class="custom-control-label" for="Desert Eagle">Desert Eagle</label>
                        </div>
                    </div>
                    <p>
                        <a class="text-primary" data-toggle="collapse" href="#selectCpu3" role="button" aria-expanded="false" aria-controls="selectCpu3">
                            Select Weapon Melee
                        </a>
                    </p>
                    <div class="collapse bg-secondary p-2" id="selectCpu3">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Machete">
                            <label class="custom-control-label" for="Machete">Machete</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Crowbar">
                            <label class="custom-control-label" for="Crowbar">Crowbar</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Sickle">
                            <label class="custom-control-label" for="Sickle">Sickle</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="Pan">
                            <label class="custom-control-label" for="Pan">Pan</label>
                        </div>
                    </div>
                        <a class="text-primary" data-toggle="collapse" href="#selectBrand4" role="button" aria-expanded="false" aria-controls="selectBrand4">
                            Select Weapon Other
                        </a>
                    </p>
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

    <?php 

    $link = mysqli_connect("localhost", "root", "usbw","pubg");

    $sql = "SELECT * FROM `weapon`";

    $result = mysqli_query($link,$sql);

    mysqli_close($link); 

    
                    

                    while ($r = mysqli_fetch_assoc($result)) { ?>
                        <div class="col-6 col-sm-6 col-md-12 product-card border p-2">
                        <div class="row align-items-center">
                            <div class="col-12 col-md-4 col-lg-3">
                                <img class="w-100" src="<?php echo $r['image'] ?>" alt="">
                            </div>
                            <div class="col-12 col-md-4 col-lg-6">
                                <h6><a href="single.php?id=<?php echo $r['id'];?>" class="text-decoration-none"><?php echo $r['title']; ?></a>
                                </h6>
                                <ul class="d-none d-lg-block">
                                    <?php echo $r['description'] ?>
                                </ul>
                            </div>
                            <div class="col-12 col-md-4 col-lg-3 text-center h-100">
                                <div class="display-4">$<?php echo $r['price']; ?></div>
                                <a href="card.php" class="btn btn-primary w-100">Add To Cart</a>
                            </div>
                        </div>
                    </div>
                    <?php  }
                    

                     ?>


                    <nav class="col-12 mt-2">
                        <ul class="pagination justify-content-center">
                            <li class="page-item">
                                <a class="page-link" href="weapon.phpphp">Previous</a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="weapon.phpphp">1</a></li>
                            <li class="page-item"><a class="page-link" href="weapon.phpphp">2</a></li>
                            <li class="page-item"><a class="page-link" href="weapon.phpphp">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="weapon.phpphp">Next</a>
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