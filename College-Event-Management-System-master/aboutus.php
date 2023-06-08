<!DOCTYPE html>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>cems</title>
<?php require 'utils/styles.php'; ?><!--css links. file found in utils folder-->
</head>
<style>

/* Large rounded green border */
hr.blueline {
  border: 10px solid #00004d;
  border-radius: 5px;
}

#bj
{
  font-size: 22px;
}

  

/* .container {
      max-width: 800px;
      margin: 0 auto;
    }

    h1 {
      color: #333;
      font-size: 24px;
      margin-bottom: 20px;
    }

    p {
      color: #555;
      font-size: 16px;
      line-height: 1.5;
    }

    .profile {
      display: flex;
      align-items: center;
      margin-top: 40px;
    }

    .profile-image {
      width: 80px;
      height: 80px;
      border-radius: 50%;
      object-fit: cover;
      margin-right: 20px;
    }

    .profile-info {
      flex: 1;
    }

    .profile-info h2 {
      font-size: 18px;
      margin-bottom: 10px;
    }

    .profile-info p {
      margin-bottom: 5px;
    }

    .linkedin {
      margin-top: 20px;
    }

    .linkedin a {
      display: inline-block;
      background-color: #0077B5;
      color: #fff;
      text-decoration: none;
      padding: 10px 20px;
      border-radius: 4px;
      font-weight: bold;
    }
   */
</style>



  <?php require 'utils/header.php'; ?>
  <hr class="blueline">
 
<div class="container">
    <h1>About Us</h1>

    <p>Our college Mission is to impart quality technical education and higher moral ethics associated with skilled training to suit the modern day technology with innovative concepts, so as to learn to lead the future with full confidence.</p>

    <div style="display:flex;align-item:center;margin-top:40px;">
      <img class="profile-image" style="width:80px;height:80px;border-radius:50%;object-fit:cover;margin-right:20px;" src="images/gaming.jpg" alt="Profile Image">
      <div class="profile-info" style="flex:1;">
        <h2 style="font-size:18px;margin-bottom:10px;">John Doe</h2>
        <p style="margin-bottom:5px;">Software Engineer</p>
        <p style="margin-bottom:5px;">Experience: 5 years</p>
      </div>
    </div>

    <div class="linkedin" style="margin-top:20px;">
      <a style="display:inline-block;background-color:#0077B5;color:#fff;text-decoration:none;padding:10px 20px;border-radius :4px;font-weight:bold;" href="https://www.linkedin.com/in/ashutosh-raj-gupta-18230820b/" target="_blank">View Profile on LinkedIn</a>
    </div>

    <h2>Additional Information</h2>

    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor hendrerit gravida. Suspendisse potenti. Phasellus ac nunc consectetur, congue leo vel, ultrices enim. Mauris dapibus, mi nec ultricies vulputate, lectus enim volutpat arcu, vel elementum ligula est in urna.</p>

    <p>Curabitur convallis, dui sed finibus maximus, mi nisi consequat urna, id euismod erat turpis at sem. Vestibulum id nisi pretium, varius velit eu, commodo mauris. Nunc tempus orci in tortor interdum hendrerit. Duis sagittis purus et suscipit finibus. Nullam pharetra purus id diam efficitur, eget fringilla mauris aliquam.</p>
  </div>
<hr class="blueline">
</body>

 <?php require 'utils/footer.php'; ?>

</html>