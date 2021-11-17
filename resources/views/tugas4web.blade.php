<html>

<head>
    <title>Luas Pesegi Panjang</title>
    <style>
        body {
            background-color: rgb(122, 148, 219);
        }
        h2 {
  color: #fff;
}

        div {
            font-size: larger;
            font-weight: bolder;
        }
        .cari{
            padding: 1em;
  margin: 2em auto;
  width: 17em;
  background: #fff;
  border-radius: 3px;
        }
    </style>
</head>

<body>
   <center> <h2>Menghitung Luas Persegi Panjang</h2> </center>

    <br>
    <div class="cari">
    <form name="formulir" action="input.php" method="get" >
       <div>
        <label for="fname">Panjang (cm):</label><br>
        <input type="number" id="panjang" name="panjang"><br>
    </div>
    <div>
        <label for="lname">Lebar (cm):</label><br>
        <input type="number" id="lebar" name="lebar"><br><br>
    </div>
    <div>
        <input type="button" id="submit" value="Submit" onclick="validasi()">
    </div>
    </form>



    <script language="javascript"> function validasi(){
        let panjang = parseFloat(document.formulir.panjang.value);
        let lebar = parseFloat(document.formulir.lebar.value);
        let Luas  = panjang * lebar;
        alert("Luas persegi panjang: " + Luas );
        hasil.innerText = Luas;
    }


    </script>
</body>

</html>
