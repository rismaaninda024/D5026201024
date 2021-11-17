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
        p{
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
 <center> <b> <p> Masukkan angka yang anda inginkan:)</p> </b> </center>
    <div class="cari">
    <form name="formulir" action="hasilluas" method="POST" onSubmit="validasi()">
        @csrf
       <div>
        <label for="fname">Panjang (cm):</label><br>
        <input type="number" id="panjang" name="panjang"><br>
    </div>
    <div>
        <label for="lname">Lebar (cm):</label><br>
        <input type="number" id="lebar" name="lebar"><br><br>
    </div>
    <div>
		<input type="submit" value="Hasil" class="tombol">
	</div>

    </form>

    <script language="javascript"> function validasi(){
        let panjang = parseFloat(document.formulir.panjang.value);
        let lebar = parseFloat(document.formulir.lebar.value);
        let Luas  = panjang * lebar;
        alert("Luas persegi panjang" + Luas );
        hasil.innerText = Luas;
    }
    if (panjang != "" && lebar!="" ) {
			return true;
		}else{
			alert('Anda harus mengisi angka!');
		}
	}


    </script>
</body>

</html>
