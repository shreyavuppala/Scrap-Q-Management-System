<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Scrap Q</title>
  </head>
  <body>
    
<?php include ('header.php');?>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/slider.jpg" alt="First slide">
    </div>
  </div>
</div>
      
   
 <div class="container" id="about">
  <center><h2>About Us</h2></center>
     <br><br>
     <div class="row">
         <div class="col-sm-6">
             <img style="height: 100%;width: 100%;border-radius: 10px" src="images/about.avif">
         </div>
         <div class="col-sm-6">
            <h2> Scrap Q</h2>
            <p>Are you tired of cluttered spaces and unused items taking up precious room in your home or office? Do you want to contribute to a greener environment while also earning some extra cash? Look no further! Introducing ScrapQ, your one-stop destination for seamless scrap selling and eco-friendly disposal.</p>

<p>At ScrapQ, we believe in the power of recycling and reusing to create a sustainable future for our planet. Our user-friendly platform connects scrap sellers with eager buyers, making the process of selling your unwanted items and recyclables easier than ever before.</p>
<br>
<a href="https://en.wikipedia.org/wiki/Recycling" class="btn btn-primary">Read More</a>
         </div>
     </div>
 </div>

<style type="text/css">
    .col-sm-4
    {
        padding-bottom: 10px;
    }
</style>

 <div class="container-fluid" id="Services" style="padding-bottom:35px;padding-top: 35px;background: #f0f4c3;padding:25px">
             <h2 style="text-align: center">Categories</h2>
             <br>
     <div class="row">
         <div class="col-sm-3">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/paper.jpg">

            <h4 style="text-align: center;padding-top: 10px">NewsPapers</h4>
            <p style="text-align: center;">Rs : 10.00/KG</p>
            <center><a href="services-details.php?cat=NewsPapers&p=10"    class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Pickup</a></center>
         </div>

          <div class="col-sm-3">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/magazin.jpg">

            <h4 style="text-align: center;padding-top: 10px">Magazines</h4>
            <p style="text-align: center;">Rs : 20.00/KG</p>
            <center><a href="services-details.php?cat=Magazines&p=20"   class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Pickup</a></center>
         </div>

          <div class="col-sm-3">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/cardboard.jpg">

            <h4 style="text-align: center;padding-top: 10px">Cardboards</h4>
            <p style="text-align: center;">Rs : 30.00/KG</p>
            <center><a href="services-details.php?cat=Cardboards&p=30"   class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Pickup</a></center>
         </div>

         <div class="col-sm-3">
            <img style="border-radius:7px;height: 300px;width: 100%" src="images/2-500x500.webp">

            <h4 style="text-align: center;padding-top: 10px">Books</h4>
            <p style="text-align: center;">Rs : 40.00/KG</p>
            <center><a href="services-details.php?cat=Books&p=40"  class="btn btn-success"><img src="images/icon.png" class="icon"> Request For Pickup</a></center>
         </div>

     </div></div>


     <div class="container" id="contact" style="padding-bottom:35px;padding-top: 35px">
     <div class="row">
         <div class="col-sm-6">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSAYPIqNM6p25Kj0A0FAUuZatxhjYgBeQ4Cg&usqp=CAU" style="height: 100%;width: 100%">
         </div>


         <div class="col-sm-6">
            <h4>Contact Us</h4>
            <form>
                <label>Name</label>
                <input type="text" name="" class="form-control">

                <br>
                <label>Phone</label>
                <input type="number" name="" class="form-control">

                <br>
                <label>Email</label>
                <input type="email" name="" class="form-control">

                <br>
                <label>Message</label>
                <textarea name="" class="form-control"></textarea>

                <br>
                <button class="btn btn-primary">Submit</button>
            </form>
         </div>
     </div></div>
 <?php include ('footer.php');?>

 
  </body>
</html>

 