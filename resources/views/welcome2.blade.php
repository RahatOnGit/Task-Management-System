<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TaskManagementSystem</title>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            min-height: 100vh;
            background-image: url(/img/task1.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        nav{
            background-color: white;
            box-shadow: 3px 3x 5px rgba(0,0,0,0.1);
        }

       nav ul{
        width: 100%;
        list-style: none;
        display: flex;
        justify-content: flex-end;
        align-items: center;

       }

       nav li{
         height: 50px;
       }

       nav a{
        height: 100%;
        padding: 0 30px;
        text-decoration: none;
        display: flex;
        align-items: center;
        color: black;
       }
       nav a:hover{
        background-color: #f0f0f0;
       }

       nav li:first-child{
        margin-right: auto;
       }


    @media(max-width: 800px){
        .hideOnMobile{
            display: none;
        }
    }
    </style>
</head>
<body>
    <nav>

        

        <ul>
            <li ><a href="#">TaskApp</a></li>
            <li class="hideOnMobile"><a href="{{url('register')}}">SignUp</a></li>
            <li class="hideOnMobile"><a href="{{url('login')}}">Login</a></li>
        </ul>
    </nav>


    
    
</body>
</html>