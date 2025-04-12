<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        .highlight {
            color: red;
            font-weight: bold;
            background-color: yellow;
        }
    </style>

<style>
        body { font-family: Arial, sans-serif; }

        /* Overlay */
        .modal-overlay {
            display: none;
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            background: rgba(0, 0, 0, 0.7);
            z-index: 999;
        }

        /* Modal Box */
        .modal-box {
            position: fixed;
            top: 50%; left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            width: 300px;
            border-radius: 8px;
            box-shadow: 0 0 10px #000;
            display: none;
            z-index: 1000;
        }

        .modal-header {
            font-size: 18px;
            margin-bottom: 10px;
        }

        .modal-body {
            margin-bottom: 20px;
        }

        .close-btn {
            background: red;
            color: white;
            border: none;
            padding: 5px 10px;
            float: right;
            cursor: pointer;
        }
    </style>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    
    <script src="js/jquery-3.7.1.min.js"> </script>
    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h1>Hello, world!</h1>
        <h2 style="display: none;" class="showTitle" >This is test title H2</h2>
        <h3 style="display: none;" class="showTitle" >This is test title H3</h3>

        <!-- modal box example -->
        <button id="openModal">Open Modal</button>

        <!-- Modal Elements -->
        <div class="modal-overlay"></div>
        <div class="modal-box">
            <button class="close-btn">&times;</button>
            <div class="modal-header">Welcome</div>
            <div class="modal-body">
                This is a custom modal using jQuery only.
            </div>
        </div>

        <button id="btn-test" class="btn btn-primary">Click me</button>
        <p id="togglePara">This paragraph will toggle.</p>
        <p id="stylePara">This is a para to apply css dynamically with JS</p>
        
        <p id="directCSS">Responsive containers allow you to specify a class that is 100% wide until the specified breakpoint is reached, after which we apply max-widths for each of the higher breakpoints. For example, .container-sm is 100% wide to start until the sm breakpoint is reached, where it will scale up with md, lg, xl, and xxl.</p>

        <div class="col-md-auto">
            <input name="name" id="myName" placeholder="Enter your name"/>
            <button id="getInpputValue" class="btn btn-info">Get Value</button>
            <p id="displyName"></p>

            <div id="hoverBox" style="width:200px;height:100px;background-color:lightblue;">Hover me!</div>
        </div>
        
        <br>
        <div class="col-md-auto">
            <input type="text" id="typingInput" placeholder="Type here...">
            <p id="liveOutput"></p>
        </div>
        <br>
        <div class="col-md-auto">
            <form class="row g-3" id="simpleForm">
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputEmail3">
                    </div>
                    <p id="formMessageEmail"></p>
                </div>
                <div class="row mb-3">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-5">
                        <input type="password" class="form-control" id="inputPassword3">
                    </div>
                    <p id="formMessagePassword"></p>
                </div>
                <div class="col-sm-2">
                    <button type="submit" class="btn btn-primary">Sign in</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        $(document).ready(function () {
            console.log("Hello Javascript, You are ready");

            // Model example
            $("#openModal").click(function() {
                $(".modal-overlay, .modal-box").fadeIn();
            });

            $(".close-btn, .modal-overlay").click(function() {
                $(".modal-overlay, .modal-box").fadeOut();
            });

            $("#btn-test").click(function () {
                $("#btn-test").text("Clicked"); // changing the text for selected element
                $("#togglePara").toggle(); // To show/hide for selected element
                $("#stylePara").addClass("highlight"); // To apply a css class on selected element

                $(".showTitle").show(); // To hide the selected element
                //$(".showTitle").hide(); // To hide the selected element
                
                $("#directCSS").css("color", "red");
            });

            $("#getInpputValue").click(function () {
                var myName = $("#myName").val();
                alert(myName);
                console.log(myName);
                $("#displyName").text("You typed: " + myName);
            });

            $("#hoverBox").hover(
                function (){
                    $(this).css("background-color", "green");
                }
            );

            $("#typingInput").keyup(function() {
                $("#liveOutput").text("Live: " + $(this).val());
            });

            $("#simpleForm").submit(function(e) {
                e.preventDefault();

                var email = $("#inputEmail3").val();
                var isValid = validateEmail(email);
         
                if (email === "") {
                    $("#formMessageEmail").text("Email is required").css("color", "red");
                } else if (!validateEmail(email)) {
                    $("#formMessageEmail").text("Email is not valid").css("color", "red");
                }

                var password = $("#inputPassword3").val();
                if(password = "" || password.length < 6) {
                    $("#formMessagePassword").text("password is required & has to be more then 6 char").css("color", "red");
                } 
            });
        });

        function validateEmail(email) {
            const pattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            return pattern.test(email);
        }

    </script>
  </body>
</html>