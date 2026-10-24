<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="userlogin.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Alan+Sans:wght@300..900&family=Oswald:wght@200..700&family=Quintessential&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <title>Document</title>
  </head>
  <body>
    <div class="header">
      <section></section>
      <section>
        <li><a href="homepage.html">home</a></li>
        <li><a href="touristplace.php">packages</a></li>
        <li><a href="userloginpage.html">register</a></li>
        <li><a href="">contact</a></li>
      </section>
    </div>
    <div class="container">
      <div class="formsection">
        <section id="formimg">
          <img src="phpphoto\loginimage.png" alt="" />
        </section>
        <section id="logindata">
          <section id="formheader">
            <h3>register</h3>
            <p>create a account to access all the features</p>
          </section>
          <form action="" method="post" id="formdata">
            <section id="formuname">
              <section>
                <label for="">firstname:</label>
                <input
                  type="text"
                  name="firstname"
                  id="firstname"
                  placeholder="firstname"
                  required
                />
              </section>
              <section>
                <label for="">lastname:</label>
                <input
                  type="text"
                  name="lastname"
                  id="lastname"
                  placeholder="lastname"
                  required
                />
              </section>
            </section>
            <section id="formemail">
              <label for="">email:</label>
              <input
                type="email"
                name="email"
                id="email"
                placeholder="email"
                required
              />
            </section>
            <section id="formpass">
              <section>
                <label for="">password:</label>
                <input
                  type="password"
                  name="pass"
                  id="pass"
                  placeholder="password"
                  required
                />
              </section>
              <section>
                <label for=""> confirm password:</label>
                <input
                  type="password"
                  name="confirm"
                  id="confirm"
                  placeholder="confirm password"
                  required
                />
              </section>
            </section>
            <section id="formbtn">
              <input type="submit" name="" id="sub" />
            </section>
          </form>
          <section id="formadditional">
            <p>------------or------------------</p>
            <p>already have an account ? <a href="">login</a></p>
          </section>
        </section>
      </div>
    </div>
  </body>
  <script>
    const subtn = document.querySelector("#formdata");

    subtn.addEventListener("submit", (e) => {
      //preventing submission of form 
      e.preventDefault();


      //getting access to form elements
      const pass = document.querySelector("#pass");
      const confirm = document.querySelector("#confirm");
      const fname = document.querySelector("#firstname");
      const lname = document.querySelector("#lastname");


      //regex for checking the firstname and lastname wheter they contain only alphabets
      const regex = /^[A-Za-z]+$/;
 
       //getting acess to the value of input form 
      const passval = pass.value;
      const fnameval = fname.value.trim();
      const confirmval = confirm.value;
      const lnameval = lname.value.trim();

      //for checking if all the fileds have correct data in it
      let isvalid = true;

      if (!regex.test(fnameval)) {
        alert("inavlid name");
        fname.value = "";
        isvalid = false;
      }
      if (!regex.test(lnameval)) {
        alert("Invalid last name (must be alphabet only).");
        lname.value = ""; // Clear the invalid input
        isvalid = false;
      }
      if (passval != confirmval) {
        alert("password misss matched");
        pass.value = "";
        confirm.value = "";
        isvalid = false;
      }

      // if all the data are valid then only submit the form 
      if (isvalid) {
        document.querySelector("#formdata").submit();
      }
    });
  </script>
  <?php
include'connection.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $email=$_POST['email'];
 $pass=$_POST['pass'];
 $confirm=$_POST['confirm'];


 /*
 echo "$firstname  <br>";
 echo" $lastname  <br>";
 echo "$email  <br>";
 echo "$pass  <br>";
 echo "$confirm   <br>";
 */

 $sql="INSERT INTO userdata(firstname,lastname,email,password,confirmpass) VALUES ('$firstname','$lastname','$email','$pass','$confirm')";
 $res=mysqli_query($conn,$sql );
 if($res){?>
 <script>
    alert("submmited ");
    window.location.href="homepage.html";

 </script>
 <?php
 }
}
?>
</html>
