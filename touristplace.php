<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="Touristplaces.css" />
  <title>Document</title>
</head>

<body>
  <div class="page1">
    <div class="header">
      <section>
        <img src="images\logo4.png" alt="dfgg" />
      </section>
      <section>
        <li><a href="homepage.html">home</a></li>
        <li><a href="">packages</a></li>
        <li><a href="userloginpage.php">register</a></li>
        <li><a href="">contact</a></li>
      </section>
    </div>
    <div class="pagecontent">
      <?php 
  include 'connection.php';
  $sql = "SELECT * FROM touristplace";
  $res= mysqli_query($conn,$sql);
  if(mysqli_num_rows($res)>0){
     $all_places = mysqli_fetch_all($res, MYSQLI_ASSOC); 
        foreach($all_places as $row){ ?>
      <div class="carddetails">
        <img id="img1" src="phpphoto/<?= htmlspecialchars($row['img']) ?>" alt="" />
        <h3>
          <?php echo htmlspecialchars($row['placename']) ?>
        </h3>
        <p>
          <b> location:</b>
          <?php echo htmlspecialchars($row['location'])?>
        </p>
        <p>
          <b>places_to_visit:</b>
          <?php echo htmlspecialchars($row['placescovered'])?>
        </p>
        <h4>
          price:
          <?php echo htmlspecialchars($row['price'])?>
          /per-person
        </h4>
        <input type="hidden" name="placename">
        <!--<button id="bookbtn"  data-place_id="<?= $row['id'] ?>">book now</button>-->
        <a href="booking.php?place_id=<?= $row['id'] ?>">
  <button id="bookbtn">Book Now</button>
</a>
      </div>
      <?php
   }
  }
  ?>
    </div>
  </div>
</body>
 <script src="Touristplace.js"></script>
</html>