<!DOCTYPE html>
<html>
<head>


<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Home</title>

 <a href="home.php">Home</a> 2. <a href="conversion.php">Conversion Rate</a> 3. <a href="history.php">History</a>
<style>
       body{
          padding: 0px;
          margin: 0px;
       }

      h1{
          background-color:red;
          color:white;
          text-align:center;
          font-size:50px;
          padding:10px;
      }
      div{
          background-color:blue;
          width:250px;
          margin-left:500px;
          margin-top:100px;
          font-size:20px;
          padding-bottom: 20px ;
      }

      label{
          font-weight:bold;
          font-size:28px;

      }

      form{
          margin-left: 50px;


      }

 </style>     
</head>
<body>
      <h1>conversion-site</h1>



      <div>
           <p>converter</p>
           <form action="conversion-site.php" method="post">
               <level for="">select category</level><br>
               <select name="number">
                    
                    <option value="feet to inch">feet to inch</option>
                    <option value="inch to feet">inch to feet</option>
               </select>  

               <br><br>

               <level for="">Enter amount</level><br>
               <input type="number" name="amount" placeholder="Enter value" required><br><br>



<h2>
     <?php

         if(isset($_POST['submit'])){

          $number=$_POST['number'];
          $amount=$_POST['amount'];


          if($number=='feet to inch'){
               echo $amount." feet "." = ";
               echo $amount*12;
               echo "inch";
          }


          if($number=='inch to feet'){

               echo $amount." inch "." = ";
               echo $amount/12;
               echo "feet";
          }

         }





     ?>


 



</h2>
<input type="submit" name="submit" value="convert">
               
</div>


</body>
</html>