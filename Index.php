<?php
 include_once('demo.php');
 ?>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Demo project</title>
    <link rel="stylesheet" href="styles.css" />
    <style>
      select,textarea{
        width:20%;
        text-indent:20px;
      }
      label{
        
        text-indent:20px;
      }
      
      
    </style>
   
  </head>
  <body>
    <h1 id="heading1"> Suggestion Page</h1>
    
      
       
        <label for="referrer">How did you see our Assigment?<br>
          <select  style =width:80px; name="referrer">
            <option value="">(select one)</option>
            <option value="1">is poor</option>
            <option value="2">Good</option>
            <option value="3">Very Good</option>
            <option value="4">Excellent</option>
          </select>
        </label>
        <label for="bio">Provide a comment:
          <textarea  style =width:500px; id="bio" name="bio" rows="3" cols="30" placeholder="give us a comment..."></textarea>
        </label>
      
      
      <a href="thank.php"><button>submit</button></a>
    
    <hr/>
    
    <?php
 include('footer.php');
 ?>
    <p><em class="bold">Thank you!!!</em></p>
  </body>
</html>


