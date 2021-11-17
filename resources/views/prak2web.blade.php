<!DOCTYPE html>
<html>

<head>
    <title>Javascript Set Form Action Example</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <style>
        h2 {
            background-color: #FEFFED;
            padding: 30px 30px;
            margin: -10px -50px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }




        .back {
            font-size: 14px;
            padding: 5px 15px;
            text-decoration: none;
            color: white;
            background-color: rgb(34, 128, 172);
            border-radius: 3px;
            border: 1px solid rgb(9, 78, 133);
        }

        hr {
            margin: 10px -50px;
            border: 0;
            border-top: 1px solid #ccc;
            margin-bottom: 40px;
        }

        div.container {
            width: 300px;
            height: 700px;
            margin: 35px auto;
            font-family: 'Raleway', sans-serif;

        }

        div.main {
            width: 300px;
            height: 700px;
            padding: 10px 50px 25px;
            border: 2px solid gray;
            border-radius: 5px;
            font-family: raleway;
            margin-top: 30px;
        }
        input[type=email] {
            width: 95%;
            height: 25px;
            padding: 5px;
            margin-bottom: 25px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-size: 16px;
            border-radius: 5px;
        }

        input[type=text] {
            width: 95%;
            height: 25px;
            padding: 5px;
            margin-bottom: 25px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-size: 16px;
            border-radius: 5px;
        }

        label {
            color: #464646;
            text-shadow: 0 1px 0 #fff;
            font-size: 14px;
            font-weight: bold;
        }

        input[type=button] {
            font-size: 16px;
            background: linear-gradient(#ffbc00 5%, #ffdd7f 100%);
            border: 1px solid #e5a900;
            color: #4E4D4B;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            border-radius: 5px;
            margin-bottom: 20px;
            padding: 10px 0;
            outline: none;
        }
select{
    width: 95%;
            height: 40px;
            width: 100%;
            padding: 5px;
            margin-bottom: 25px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-size: 16px;
            border-radius: 5px;
}
        input[type=submit] {
            background: linear-gradient(#f5cc5d 5%, #f5cc5d 100%);
            height: 40px;
            width: 100%;
            padding: 5px;
            font-size: 16px;
            border: 1px solid #f5cc5d;
            color: #4E4D4B;
            font-weight: bold;
            border-radius: 5px;
        }
        input[type=tel]{
            width: 95%;
            height: 25px;
            padding: 5px;
            margin-bottom: 25px;
            margin-top: 5px;
            border: 2px solid #ccc;
            color: #4f4f4f;
            font-size: 16px;
            border-radius: 5px;
        }

    </style>
    <link href="css/style.css" rel="stylesheet">


</head>

<body>

    <div class="container main" >
        <form id="form_id" action="/action_page.php" method="post" name="myform" onsubmit="return  myvalidate()" >
            <h2>Javascript  Form Validation</h2>
            <p style="color: red;">All fields are mandatory</p>
            <label>FullName :</label>
            <input id="name" name="name" type="text" required >
            <label>Username(6-8 characters)</label>
            <input id="username" name="username" maxlength="8" minlength="6 " type="text" required>
            <label>Email :</label>
            <input id="email" name="email"  class="form-control" type="email" placeholder="name@gmail.com" required>
            <label for="country">Country:</label>
            <select id="country" name="country" required>
                <option value="">Please choose</option>
                <option value="Indonesia">Indonesia</option>
                <option value="Thailand">Thailand</option>
                <option value="Malaysia">Malaysia</option>
            </select>
            <label>Addres :</label>
            <input id="addres" name="addres"  type="text" required>
            <label for="zip">Zip Code :</label>
            <input   type="tel"required>
            <input  type="submit"  value="Submit">
        </form>

    </div>
<!-- Optional JavaScript -->
    <!-- Popper.js first, then Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

    <script>
      var forms = document.querySelectorAll("form_id");

      Array.prototype.slice.call(forms).forEach(function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (!form.checkValidity()) {
              event.preventDefault();
              event.stopPropagation();
            }

            form.classList.add("was-validated");
          },
          false
        );
      });
    </script>

</body>

</html>
