<!DOCTYPE html>
<html>
<head>
<title>My personal information</title>


<style>
body {
  background-image: url('snow.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}
img {
  border-radius: 50%;
  }
h1 {
color: maroon;
  text-align: center;
}
h2 {text-align: center;
color: maroon;
}
p {

  font-family: verdana;
  font-size: 15px;
}



</style>

</head>
<body>


<h1 style="background-color:MediumSeaGreen;">My Personal Information</h1>

<img src="mousa.png" width="150" height="122";>
 <img src="imag.png" style="float:right;width:222px;height:122px;">
 <img src="img_tree.png" style="float:right;width:222px;height:122px;">
 <img src="sky.png" style="float:right; width="200" height="200">
 
 
 
 
<p id="demo2"></p>

<script>
// Create an object:
const person = {
  firstName: "Name: Mamadou Djouhe",
  lastName: "Bah",
  id: 5566,
  fullName: function() {
    return this.firstName + " " + this.lastName;
  }
};

// Display data from the object:
document.getElementById("demo2").innerHTML = person.fullName();
</script>


<p id="demo"></p>

<script>
document.getElementById("demo").innerHTML = 'Nickname: Mamadou';
</script>
  
  <section>
    <h2 style="background-color:MediumSeaGreen;">Personal Details</h2>
	<ul>
      <li><strong>Age: 24</strong></li>
      <li><strong>Senior High School Graduated From: GS Keitayah Conkry Guinea</strong></li>
      <li><strong>Course: Mathmatics</strong></li>
      <li><strong>Scholarship? Yes / No If yes, %? type?Yes, 
	  20%, Entrance Academic Scholar. I am also a DOST scholar.</strong></li>
      
      <li><strong>Did you choose this course: Yes, 
	  <strong>Reason:</strong> Yes, I chose this course 
	  because I want be a programmer.</strong></li>
    </ul>
	</section>
	<h2 style="background-color:MediumSeaGreen;">Experience </h2>
    <ul>
      <li><strong>BPO :French Operation CSR at Telus international Philippines since March 2021</strong> </li>
      <li><strong>Hobbies/Interests: I'm a big fan of football</strong></li>
      <li><strong>Expectations from Web Programming Course: I expect 
	  to become expert in web designing after taking this course (Web Programming). 
	  I expect that this subject will be an enjoyable and fun course to 
	  learn more about web programming.</strong></li>
    </ul>
	
	 <h2 style="background-color:MediumSeaGreen;">Languages Spoken</h2>
	 
	<div> <ul>
	<li><strong>French </strong></li> 
	<li><strong>English</strong></li>
</ul> 
</div>
 

   <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 style="background-color:MediumSeaGreen;">Contact me</h2>
    

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> <strong>Manila, PH</strong></p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> <strong>Phone: +63 9391003428</strong></p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i><strong> Email: djouheoumou@mail.com</strong></p>
    </div><br>
    <p><strong>Let's get in touch. Send me a message:<strong></p>

    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Email" required name="Email"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Subject" required name="Subject"></p>
      <p><input class="w3-input w3-padding-16" type="text" placeholder="Message" required name="Message"></p>
      <p>
        <button class="w3-button w3-light-grey w3-padding-large" type="submit">
          <i class="fa fa-paper-plane"></i> SEND MESSAGE
        </button>
      </p>
    </form>
 
<button onclick="this.innerHTML=Date()">The time is?</button>


<p id="demo1"></p>

<script>
const price1 = 5;
const price2 = 6;
let total = price1 + price2;
document.getElementById("demo1").innerHTML =
"The total is: " + total;
</script>



 
	</body>


</html>