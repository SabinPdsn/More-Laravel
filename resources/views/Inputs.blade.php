<!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Input Form</title>
</head>
<body>

    <style>
        form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top: 100px;
        }
        form input{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            border: none;
            outline: none;
            height: 40px;
            width: 600px;
            text-align: center;
            border-radius: 4px;
            font-size: 24px;
            box-shadow: 0px 0px 2px 4px red, 0px 0px 1px 8px blue, 0px 0px 1px 14px rgb(251, 113, 0);
        }
        button{
            font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            color: gray;
            height: 40px;
            width: 200px;
            font-size: 24px;
            border-radius: 4px;
            cursor: pointer;
            border: none;
            outline: none;
            box-shadow: 0px 0px 2px 4px red, 0px 0px 1px 8px blue, 0px 0px 1px 14px rgb(251, 113, 0);

        }
        button:hover{
            background-color: rgb(229, 214, 214);
            transition: 0.1s;
            transform: scale(1.04);
        }

    </style>
    <form action="{{route('inputs')}}" method="post">
        @csrf
            <input type="text" name="name" placeholder="Enter Your Name"> <br> <br>
            <input type="email" name="email" placeholder="Enter Your Email" autocomplete="new-password"><br> <br>
            <input type="password" name="password" placeholder="Enter Your Password" autocomplete="new-password"> <br> <br>
            <button type="submit">Submit Form</button>
    </form>
</body>
</html>
