
<style>


body{


             background-image:url('images/image1.jpg') ;
             margin: 0 auto;
             font-family: arial;
             background-size:cover;
            background-position:center;
            display:flex;
            flex-direction:column;
           justify-content:center;
           align-items:center;
           text-align:left;
           padding:0 20px;
            }

            h1{

             color: #09F;
             text-align: center;
            }
      label{

       color: #0CF;
       width: 15%;
       display: inline-block;

      }

      #container{


       padding: 20px;
       width: 60%;
       margin: 0 auto;
       margin-top: 1%;
       margin-bottom: 1%;
       background-color: white;
      }

   .userinput{

    padding-top: 7px;
    padding-bottom: 7px;
    padding-left: 5px;
    padding-right: 5px;
    margin-bottom: 30px;

   }
   label{

    color: #666;
    font-size: 14px;
   }
   textarea{
 color: #000;
    font-size: 14px;


   }

   select{

    color: #09F;
   }
  

   .sampleBtn{
      
       background-color: #FFF;
       width: 20%;
       height: 35px;
       font-size: 16px;

   }
   .sampleBtn:hover{

          color: white;
          background-color: red;
          cursor: pointer;
   }
   
   .sampleBtn1{
      
       background-color: #09F;
       width: 20%;
       height: 35px;
       font-size: 16px;
     color:white;

   }
   .sampleBtn1:hover{

          color: white;
          background-color: #09F;
          cursor: pointer;
   }
 
 h2{
   color:#666;
   text-align: center;

 }
</style>





<html>
<head>
  <title>D.C.A REGISTRATION</title>
</head>

<body>
<div id="container">
 <h1> DAMAGED CLASS ASSETS FORM </h1>
 <form name="submit" action="formvalidation.php" method="POST">
 
  
  
  <h2> Asset details: </h2>
  
  <div class="userinput">
   <label> Asset Number  </label>
   <td><input type="text" name="AssetNumber" value=""required></td>
  </div>
  
  <div class="userinput">
   <label> Type  </label>
   <td><input type="text" name="type" value=""required></td>
  </div>

  <div class="userinput">
   <label> Cost  </label>
   <td><input type="text" name="cost" value=""required></td>
  </div>

  <h2> Student details: </h2>
 

  <div class="userinput">
   <label> Full Name  </label>
   <td><input type="text" name="FullName" value=""required></td>
  </div>
  
  <div class="userinput">
   <label> Class   </label>
   <td><input type="text" name="Class" value=""required></td>
  </div>
  
  <div class="userinput">
   <label> Phone Number </label>   
   <td><input type="text" name="phone" value=""required></td>
  </div>
  
  <div class="userinput">
   <label> Student ID </label>   
   <td><input type="text" name="studentid" value=""required></td>
  </div>
  
  
  
  
  <h2> Coordinator details: </h2>
  <div class="userinput">
   <label> Coordinator ID </label>
   <td><input type="text" name="CoordinatorID" value=""required></td>
  </div>
  
  <div class="userinput">
   <label> Coordinator Name </label>
   <td><input type="text" name="CoordinatorName" value=""required></td>
  </div>
  
  <div class="userinput">
   <label> Coordinator Class </label>   
   <td><input type="text" name="CoordinatorClass" value=""required></td>
  </div>
  
  <div style="text-align:center">
   <input type="reset" class="sampleBtn"/>
   <input type="submit" class="sampleBtn1" name="submit"/>   
  </div>
  
  
 </form>
 
 </div>
 
</body>

</html>