<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <style>
        *{
            margin: 0;
            padding: 0;
        }

        body{
            min-height: 100vh;
            
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center; 
            background-color: rgb(221, 211, 211);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        nav{
            background-color: yellowgreen;
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
            <li ><a href="<?php echo e(url('home')); ?>">TaskApp</a></li>
            
            <li ><a href="<?php echo e(url('add_new_task')); ?>">Add new Task</a></li>
    
            <li ><a href="<?php echo e(url('all_tasks')); ?>">All Tasks</a></li>
    
    
    
    
            <li class="hideOnMobile"><form method="POST" action="<?php echo e(route('logout')); ?>">
                <?php echo csrf_field(); ?>
            
               <button class="btn btn-outline"  style="color: blue; padding-top: 11px;">Logout</button>
            </form>
           </li>
    
    
        </ul>
    </nav>
    

    
    
</body>
</html><?php /**PATH D:\laravel-project\TaskManagementSystem\resources\views/home/header.blade.php ENDPATH**/ ?>