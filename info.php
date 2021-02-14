<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>My Info</title>
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
        <div class="row justify-content-center">
            <div class="col-12 col-md-3 col-lg-2 p-2 d-none d-md-block">
                <div class="list-group">
                    <a class="list-group-item list-group-item-action btn btn-dark bg-transparent text-dark" href="account.php">My
                        Account</a>
                  
                </div>
                <div class="col-12 mt-3">
                    <a href="#AccountDetails">Account Details</a>
                    <br>
                    <a href="#PaymentOptions">Payment Options</a>
                    <br>
                    <a href="#Shipping">Billing and Shipping</a>
                </div>
            </div>
            <div class="col-md-8 m-3">
                <div class="row justify-content-center">
                    <div id="AccountDetails" class="col-12 bg-light p-3">
                        <h3 class="text-success">Account Details</h3>
                        <p class="text-secondary" style="font-size: 12px;">
                            Update your password, addresses, payment methods, language and currency settings.
                        </p>
                        <div class="row">
                            <div class="col-12 ">
                                <p class="text-secondary" style="font-size: 13px;">Account Information:</p>
                                <p>Tigran Mkrtchyan</p>
                                <p>tigran.mkrtchyan8.y@tumo.org</p>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="text-secondary" style="font-size: 13px;">Currency:</p>
                               
                                <select class="custom-select col-5" id="inputGroupSelect01">
                                    <option selected="">$/USD</option>
                                    <option value="1">&#1423/AMD</option>
                                    <option value="2">₽/RUB</option>
                                </select>
                            </div>
                            <div class="col-12 col-md-6">
                                <p class="text-secondary" style="font-size: 13px;">Language:</p>
                               
                                <select class="custom-select col-5" id="inputGroupSelect01">
                                    <option selected="">English</option>
                                    <option value="1">Հայերեն</option>
                                    <option value="2">Русский</option>
                                </select>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ">
                    <div class="col-12 bg-light p-3">
                        <h3 id="PaymentOptions" class="text-success">Payment Options</h3>
                        <p class="text-secondary" style="font-size: 12px;">
                            Manage saved credit cards. New payment methods may only be added in checkout due to
                            verification
                            requirements.
                        </p>
                        <div class="row">
                            <div class="col-10">

                                <div class="form-row">
    <div class="col-md-12 mb-3">
      <label for="validationCustom01">CARD NUMBER</label>
      <input type="text" class="form-control" id="validationCustom01"  required placeholder="XXXX XXXX XXXX XXXX">
      
    </div>
    <div class="col-md-12 mb-3">
      <label for="validationCustom02">NAME ON CARD</label>
      <input type="text" class="form-control" id="validationCustom02"  required placeholder="Full Name">
     
    </div>
  </div>
  <div class="form-row">
    <div class="col-md-6 mb-3">
      <label for="validationCustom03">EXPIRY DATE</label>
      <input type="text" class="form-control" id="validationCustom03" required placeholder="MM/YY">
      
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationCustom05">SECURITY CODE</label>
      <input type="text" class="form-control" id="validationCustom05" required placeholder="XXXX">
                                </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center ">
                <div id="Shipping" class="col-12 bg-light p-3">
                    <div class="row ">
                        <div class="col-md-8 m-3">
                            <h3 id="PaymentOptions" class="text-success">Billing and Shipping</h3>
                            <p class="text-secondary" style="font-size: 12px;">
                                Make changes to your billing and shipping information and save them for future orders.
                            </p>
                        </div>
                        <div class="col-3">
                            <a  class="text-success" href="#">+ Add New Address</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-10 border-bottom">
                            <p><strong>Tigran Mkrtchyan</strong> | TumoCenter | Armenia | Yerevan </p>
                        </div>
                        <div class="col-3 m-2">
                            <a class="text-success" href="#">Edit</a>
                            /
                            <a class="text-success" href="#">Remove</a> 
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
        
        <?php include ('orders.php'); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  </body>
</html>