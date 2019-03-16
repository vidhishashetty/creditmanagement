 <!DOCTYPE html>
<html>
<title>Modal Popup Box</title>
<head>
    <meta name = "viewport" content = "width = device-width, initial-scale = 1">
    <link rel="stylesheet" type="text/css" href="popup.css">
    <link rel="stylesheet" type="text/css" href=>
</head>
<body background="../background1.png">

<h1 style="text-align:center; font-size:50px; color:#fff">Modal Popup Box Login Form</h1>

<button onclick="document.getElementById('modal-wrapper').style.display='block'" style="width:200px; margin-top:200px; margin-left:160px;">
View</button>


<div id="modal-wrapper" class="modal">
  
  <form class="modal-content animate" method="GET">
        
    <div>
      <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
    </div>

    <div class="container">
      <?php 
         include_once'../viewuser.php'
      ?>
    </div>
    
  </form>
  
</div>
<script>
// If user clicks anywhere outside of the modal, Modal will close

var modal = document.getElementById('modal-wrapper');
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
