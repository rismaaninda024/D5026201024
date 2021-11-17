<html>

<head>
    <title>Luas Pesegi Panjang</title>
    <style>
        body {
            background-color: rgb(122, 148, 219);
  font-family: sans-serif;
}

h2 {
  color: #fff;
}
.card{
            padding: 1em;
            margin: 2em auto;
            width: 17em;
            background: #fff;
            border-radius: 3px;
}
    </style>
</head>

<body>
   <center> <h2>Hasil Menghitung Luas Persegi Panjang</h2> </center>

	<div class="container">
        <div class="card ">
            <div class="card-body">
                <div class="row">
                    <div class="col-3-sm"><b>panjang :</b></div>
                    <div class="col-3-sm"><?php
                    $panjang = $_POST["panjang"] ;
                    echo $panjang ;
                    ?></div>
                </div>
                <br>
                <div class="row">
                    <div class="col-3-sm"><b>lebar:</b></div>
                    <div class="col-3-sm"><?php echo $_POST["lebar"] ; ?></div>
                </div>
               <br>
                <div class="row">
                    <div class="col-3-sm"><b>Hasil :</b></div>
                    <div class="col-3-sm"><?php echo  "Luas persegi panjang =  ".$_POST["panjang"]*$_POST["lebar"];?></div>
                </div>
            </div>

        </div>

	</div>



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
