<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Responsive Form</title>
        <style>
            body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                background-color: #f2f2f2;
            }


            .container {
                max-width: 400px;
                margin: 50px auto;
                padding: 20px;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }

            .form-group {
                margin-bottom: 20px;
            }

            .form-group label {
                display: block;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .form-group input[type="text"],
            .form-group select {
                width: 100%;
                padding: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
                box-sizing: border-box;
            }

            .form-group input[type="submit"] {
                background-color: #4CAF50;
                color: #fff;
                border: none;
                border-radius: 5px;
                padding: 10px 20px;
                cursor: pointer;
                font-size: 16px;
            }

            @media screen and (max-width: 480px) {
                .container {
                    width: 90%;
                }
            }
        </style>
    </head>

    <body>

        <div class="container">

            <h2>Responsive Form</h2>
            <div class="form-group">
                <a href="{{ route('get-method-form') }}"> <input type="submit" value="Get Method Form"></a>
            </div>
            <div class="form-group">
                <a href="{{ route('post-method-form') }}"> <input type="submit" value="Post Method Form"></a>
            </div>
            <div class="form-group">
                <a href="{{ route('put-method-form') }}"> <input type="submit" value="Put Method Form"></a>
            </div>
            <div class="form-group">
                <a href="{{ route('patch-method-form') }}"> <input type="submit" value="Patch Method Form"></a>
            </div>
            <div class="form-group">
                <a href="{{ route('delete-method-form') }}"> <input type="submit" value="Delete Method Form"></a>
            </div>

        </div>

    </body>

</html>
