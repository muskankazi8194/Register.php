<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>static webssite</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *{
                padding: 0;
                margin: 0;
                box-sizing: border-box;
            }
            header{
                width:100%;
                height: 100vh;
                font-family: sans-serif;
                background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.2)),
                 url('learning.jpg');
                background-size:cover;
                font-family: sans-serif;
                font-weight: bold;
            }
            nav{
                width: 100%;
                height: 100px;
                color: black;
                display: flex;
                justify-content:flex-end;
                align-items: self-end;
            }
            .logo{
                font-size: x-large;
                letter-spacing: 1.5px;
                color: azure;
                padding-right: 110px;
            }
            .menu a{
                text-decoration: none;
                font-size: 19px;
                padding: 15px 40px;
                color: white;
                /*  background-color:darkgoldenrod; */
                border-radius: 8px;
                position: relative;
            }
             .menu a:before{
                content: '';
                position: absolute;
                top: 0%;
                left: 0%;
                height: 100%;
                width: 0%;
                border-bottom: 2px solid indianred;
                transition: 0.4s linear;
             }
            .menu a:hover:before{
                width: 90%;
            }

            .container{
                max-width:650px;
                position: absolute;
                top: 50%;
                bottom: 50%;
                text-align: center;
                transform: translate(50%);
                color: white;
            }
            .container a{
                background-color:indianred;
                font-size: 25px;
                color: black;
                text-decoration: none;
                border-radius: 8px;
                padding:10px;
                letter-spacing: 3px;
                transition: 0.4s;

            }
            .container a:hover{
                background-color: transparent;
                border: 1px solid blue;
                color: greenyellow;

                
            }
            h1{
                padding-top: 13px;
            }
            
        </style>
        
    </head>
    <body>
       <header>
        <nav>
            <div class="logo">Infotech Company</div>
            <div class="menu"> 
                <a href="index.php">Home</a>
                <a href="contact.php">Contact</a>
                <a href="about.php">About</a>
                <a href="services.php">Services</a>
                <a href="profile.php"> My Profile</a>
                <a href="login2.php"> Logout</a>



            </div>
        </nav>
            <section class="container">
                <spam>Employee Stuff</spam>
                <h1>A dream Does`t become Reality though the magic; It takes sweat , determine, and Hard Work</h1>
                <br><br><a href="contact.php">Join Now</a>
            </section>
       </header>
       <footer>
        <div cl></div>
       </footer>
        </body>
</html>