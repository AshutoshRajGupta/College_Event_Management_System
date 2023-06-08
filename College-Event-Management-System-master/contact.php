<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cems</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
        
</head>
    <body>
        <?php require 'utils/header.php'; ?><!--header content. file found in utils folder-->
        <div class = "content"><!--body content holder-->
            <div class = "container">
                <div class = "col-md-12"><!--body content title holder with 12 grid columns-->
                    <h1 style="color:#003300 ; font-size:38px ;"><strong>Contact Us</strong></h1><!--body content title-->
                </div>
            </div>
			
            <div class="container">
            <div class="col-md-12">
            <hr>
            </div>
            </div>
            
            <!-- <div class="container">
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> College</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: collegeevent@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9123456789
                    </p>
                </div>
                <div class="col-md-6 contacts">
                    <h1 style="color:#000080 ; font-size:42px ; font-style:bold "><span class="glyphicon glyphicon-user"></span> Example</h1>
                    <p>
                        <span class="glyphicon glyphicon-envelope"></span> Email: example@gmail.com<br>
    
                        <span class="glyphicon glyphicon-phone"></span> Mobile: 9876543210
                    </p>
                </div>
            </div> -->

            <div class="container">
    <div class="row">
      <div class="col-md-6 contacts">
        <h1><span class="glyphicon glyphicon-user"></span> College</h1>
        <p>
          <span class="glyphicon glyphicon-envelope"></span> Email: collegeevent@gmail.com<br>
          <span class="glyphicon glyphicon-phone"></span> Mobile: 9123456789
        </p>
      </div>
      <div class="col-md-6 contacts">
        <h1><span class="glyphicon glyphicon-user"></span> Example</h1>
        <p>
          <span class="glyphicon glyphicon-envelope"></span> Email: example@gmail.com<br>
          <span class="glyphicon glyphicon-phone"></span> Mobile: 9876543210
        </p>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
        <h2>Contact Us</h2>
        <form>
          <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" placeholder="Enter your name">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" placeholder="Enter your message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
			
            
        </div><!--body content div-->
        <?php require 'utils/footer.php'; ?><!--footer content. file found in utils folder-->
    </body>
</html>
