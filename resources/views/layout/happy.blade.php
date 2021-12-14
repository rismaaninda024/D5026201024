<!DOCTYPE html>
<html>
<head>
    <title>Aplikasi Kepegawaian - @yield('title')</title>
    <link href="/css/tambah.css"rel="stylesheet">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">
    <link
        href="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/build/css/bootstrap-datetimepicker.css"
        rel="stylesheet">
    <script type="text/javascript" src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.js"></script>
    <script
        src="http://cdn.rawgit.com/Eonasdan/bootstrap-datetimepicker/e8bddc60e73c1ec2475f827be36e1957af72e2ea/src/js/bootstrap-datetimepicker.js">
    </script>
    </head>
<body>
    <div class="grid-container">
        <div class="col-header">
            <center> <div class="col ">

    <img src="https://media-exp1.licdn.com/dms/image/C4D03AQH0mmzhKlbARA/profile-displayphoto-shrink_100_100/0/1638926124131?e=1644451200&amp;v=beta&amp;t=mn6FZBGkpmzquceztg_OAj_tNC1kE8ISqbBYstgpfT0" loading="lazy" alt="Foto Risma Aninda"  style="width:100px;height:100px">
            </div></center>
            <div class="col">
               <center> <h4  style="font-weight: 800;" id=nrp>
                   Risma Aninda
                </h4></center>
                <center> <h4 style="font-weight: 800;" id=name>
                    5026201024
                </h4></center>
            </div>
        </div>
        <div class="col-menu-pil">
            <h3 id=menu>MENU</h3>
            <a href="/pegawai" class="btn btn-block" role="button">Pegawai </a>
            <br>
            <a href="/absen" class="btn btn-block" role="button">  Absen </a>
            <br>
            <a href="/mouse" class="btn btn-block" role="button"> Mouse </a>
            <br>
            <a href="" class="btn btn-block" role="button"> Praktikum </a>
        </div>
        <div class="col-section">
            @section('konten')
            @show
        </div>
        <div class="col-foot">
        <footer id="footer" class="footer">
           <center> <div class="copyright">
              &copy; Copyright <strong><span>Risma aninda-5026201024</span></strong></div></center>
            </div>
</div>
</body>
</html>
