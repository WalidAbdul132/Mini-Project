<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Lato:400,500,600,700&display=swap');
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Lato', sans-serif;
        }
        
        html,
        body {
            display: grid;
            height: 100%;
            place-items: center;
            font-family: 'Lato', sans-serif;
        }
        
        .wrapper {
            display: inline-flex;
            background: #fff;
            height: 100px;
            width: 800px;
            align-items: center;
            justify-content: space-evenly;
            border-radius: 5px;
            padding: 20px 15px;
            box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
        }
        
        .wrapper .option {
            background: #fff;
            height: 100%;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin: 0 10px;
            border-radius: 5px;
            cursor: pointer;
            padding: 0 10px;
            border: 2px solid lightgrey;
            transition: all 0.3s ease;
        }
        
        .wrapper .option .dot {
            height: 20px;
            width: 20px;
            background: #d9d9d9;
            border-radius: 50%;
            position: relative;
        }
        
        .wrapper .option .dot::before {
            position: absolute;
            content: "";
            top: 4px;
            left: 4px;
            width: 12px;
            height: 12px;
            background: #ed455d;
            border-radius: 50%;
            opacity: 0;
            transform: scale(1.5);
            transition: all 0.3s ease;
        }
        
        input[type="radio"] {
            display: none;
        }
        
        #option-1:checked:checked~.option-1,
        #option-2:checked:checked~.option-2,
        #option-3:checked:checked~.option-3,
        #option-4:checked:checked~.option-4 {
            border-color: #ed455d;
            background: #ed455d;
        }
        
        #option-1:checked:checked~.option-1 .dot,
        #option-2:checked:checked~.option-2 .dot,
        #option-3:checked:checked~.option-3 .dot,
        #option-4:checked:checked~.option-4 .dot {
            background: #fff;
        }
        
        #option-1:checked:checked~.option-1 .dot::before,
        #option-2:checked:checked~.option-2 .dot::before,
        #option-3:checked:checked~.option-3 .dot::before,
        #option-4:checked:checked~.option-4 .dot::before {
            opacity: 1;
            transform: scale(1);
        }
        
        .wrapper .option span {
            font-size: 20px;
            color: #808080;
        }
        
        #option-1:checked:checked~.option-1 span,
        #option-2:checked:checked~.option-2 span,
        #option-3:checked:checked~.option-3 span,
        #option-4:checked:checked~.option-4 span {
            color: #fff;
        }
    </style>
</head>

<body>
    <!-- <div class="wrapper">
        <input type="radio" name="select" id="option-1" checked>
        <label for="option-1" class="option option-1">
          <div class="dot"></div>
          <span>Student</span>
        </label>
        <input type="radio" name="select" id="option-2">
        <label for="option-2" class="option option-2">
          <div class="dot"></div>
          <span>Teacher</span>
        </label>
        <input type="radio" name="select" id="option-3">
        <label for="option-3" class="option option-3">
          <div class="dot"></div>
          <span>Front</span>
        </label>
        <input type="radio" name="select" id="option-4">
        <label for="option-4" class="option option-4">
          <div class="dot"></div>
          <span>Back</span>
        </label>
    </div> -->

    <?php
        $num = 4
        for($i = 1; $i <= $num; $i++){
                echo '<input type="radio" name="select" id="option-1" checked>';
                echo '<label for="option-1" class="option option-1">';
                echo '<div class="dot"></div>';
                echo '<span>Student</span>';
                echo '</label>';
        }
    ?>
</body>

</html>