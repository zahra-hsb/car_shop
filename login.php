<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link href="style/bootstrap.min.css" rel="stylesheet">
    <!-- <style>
        .login-div{
            filter: invert(1) hue-rotate(100deg);
        }
    </style> -->
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" href="img/b0f935.png">

    <title>Shop</title>
</head>
<body class="login-body">
 
    <div class="login-div">
       <input type="checkbox" name="" id="chk" aria-hidden="true">

       <div class="signup">
           <form action="admin/dashboard.html">
               <label class="signup-label" for="chk" aria-hidden="true">Sign up</label>
               <input class="input" type="text" name="txt" placeholder="Username" required="">
               <input class="input" type="email" name="email" placeholder="Email" required="">
               <input class="input" type="password" name="pswd" placeholder="Password" required="">
               <div>
                <button class="login-btn" onclick="">Sign up</button>
               <button class="login-btn" onclick="location.href='index.html'" >Back</button>
               </div>
               

            </form>
       </div>
       
       <div class="login">
           <form action="admin/dashboard.html">
               <label class="login-label" for="chk" aria-hidden="true">Login</label>
               <input class="input" type="email" name="email" placeholder="Email" required="">
               <input class="input" type="password" name="pswd" placeholder="Password" required="">
               <div>
                    <button class="login-btn">Login</button>
                    <button class="login-btn">Back</button>
               </div>
              

            </form>
       </div>
    </div>
        <script src="js/script.js"></script>
    </body>
    </html>