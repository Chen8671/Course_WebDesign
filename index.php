<html>
   <head>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
      <meta http-equiv="Content-Language" content="$ACCEPT_LANGUAGE">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <title> </title>
      <style type="text/css">
         .bg01 {
         background-color: #E3E9F2;
         }
         .bg02 {
         background-color: #CCCCE6;
         }
         .cssTrEvn {
         background-color: #FFFFFF;
         }
         .cssTrOdd {
         background-color: #EAEAF4;
         }
         .font01 {
         font-size: 12px;
         line-height: 16px;
         color: #000000;
         text-decoration: none;
         letter-spacing: 2px;
         }
         .pic {
         height: 200px;
         }
         .pic img {
         max-height: 100%;
         }
      </style>
   </head>
   <body>
      <div class="container" >
         <!-- CSS -->
         <div class="row " style=" height: 200px; width: 200px;" >
            <div class="col ">
               <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-intercal="1000">
                  <div class="carousel-item pic" >
                     <img src="./img/1.jpg" class="d-block w-100"  alt="toy" >
                  </div>
                  <div class="carousel-item pic">
                     <img src="./img/2.jpeg" class="d-block w-100"  alt=".." >
                  </div>
                  <div class="carousel-item active pic">
                     <img src="./img/3.jpeg" class="d-block w-100"  alt=".." >
                  </div>
               </div>
            </div>
         </div>
         <!-- CSS -->
         <!-- JS -->
         <div class="row">
            <p id="demo">Hello!</p>
            <button type="button" class="disabled aria-label" onclick="buttonFunction()">點我!</button>
         </div>
         <!-- JS -->
         <!-- HTML	 -->
         <div class="row">
            <table id="stud_list" width="100%" border="0" cellspacing="1" cellpadding="3" id="delTable2" style="display:block" class="box01">
               <tr class="bg02">
                  <td colspan="18">課程名稱：11102伺服網頁程式設計_四技資工二Ａ</td>
               </tr>
               <td align="center">帳號 </td>
               <td align="center">姓名 </td>
               </tr>
               <tr class="cssTrOdd">
                  <td>1</td>
                  <td>A</td>
               <tr class="cssTrEvn">
                  <td>2</td>
                  <td>B</td>
               <tr class="cssTrOdd">
                  <td>3</td>
                  <td>c</td>
               <tr class="cssTrEvn">
                  <td>4</td>
                  <td>d</td>
            </table>
         </div>
         <!-- HTML	 -->
	<?php 
	#$myName='sarah';
	#session_start();
	#$_SESSION["name"]=$myName;
	#$_SESSION["c_cnt"]=htmlspecialchars($_COOKIE["cnt"]);
	#echo $_SESSION["name"].'<br>';
	#echo $_SESSION["c_cnt"];
	?>
         <p id="theCookie">
            <?php
               echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
               ?>
         </p>
      </div>
      <script>
         var originalText = "Week4";
         var newText = "php basic";
	 let cnt =0;//"<?php $_SESSION["c_cnt"] ?>";
         
         function buttonFunction() {
          const url = window.location.href;
         // const querystr = (url.split('?')[1]).split('=')[1];
          var theCookie = document.getElementById("theCookie");
	  cnt +=1;
	  document.cookie = 'count='+cnt+';SameSite=Lax';
	  theCookie.innerHTML = document.cookie;
//          var myvar="<?php echo $_SESSION["name"];?>";
//	  alert(myvar);
//         document.cookie = 'name='+querystr+myvar+';SameSite=Lax';
//         theCookie .innerHTML = "<?php
//               echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
//               ?>";
         }
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
   </body>
</html>
