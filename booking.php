<!DOCTYPE html>
<?php
include 'connection.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="booking1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&family=BBH+Sans+Hegarty&family=Oswald:wght@200..700&family=Quintessential&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container">
       <div class="contentbox">
        <?php
        if (isset($_GET['place_id'])) {
      $placeId = $_GET['place_id'];
      $sql="SELECT * FROM touristplace WHERE id =$placeId";
      $result=mysqli_query($conn,$sql);
     if ($result && mysqli_num_rows($result) > 0) {
         $place = mysqli_fetch_assoc($result);
       ?>
       <section id="part1">
   <img id="img1" src="phpphoto/<?= htmlspecialchars($place['img']) ?>" alt="" />
       </section>
    <section id="part2">
   <h2>placename: <?php echo htmlspecialchars($place['placename'])?></h2>
        <h3>location:<?php echo htmlspecialchars($place['location'])?></h3>
           <p><strong>description:</strong><?php echo htmlspecialchars($place['description'])?></p>
           <p> <strong>places-coverd:</strong> 
           <?php echo htmlspecialchars($place['placescovered'])?></p>
           <h3>price:<?php echo htmlspecialchars($place['price'])?></h3>
           <section id="btn">
            <button>booknow</button>
            <button id="backbtn">back</button>
    </section>
     
           </section>

    <?php
    }}
    else{
      echo "<p>No place ID provided.</p>";
    }
    ?>
       </div>
    </div>
</body>
<script>

let backbtn= document.querySelector("#backbtn");
if(backbtn)
backbtn.addEventListener('click',()=>{
    window.location.href="Touristplace.php";
})

</script>
</html>