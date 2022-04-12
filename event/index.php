<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Event</title>
        <script type="text/javascript" src="../jquery.min.js"></script>
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                $('#tombol1').click(function(){
                    alert("Event klik");
                });
                
                $('#tombol2').dblclick(function (){
                    alert("Event double klik");
                });
                
                $('#lb_nama').mouseenter(function (){
                    $('#lb_nama').css("color", "red");
                });
                
                $('#lb_nama').mouseleave(function (){
                    $('#lb_nama').css("color", "black");
                });
                
                $('#btnProses').click(function (){
                    var bil1 = parseInt($('#bil1').val());
                    var bil2 = parseInt($('#bil2').val());
                    var hasil = bil1 + bil2;
                    $('#txtHasil').val(hasil);
                });
                
            });
            
            
        </script>
    </head>
    <body>
        <button id="tombol1">TOMBOL 1</button>
        
        <button id="tombol2">TOMBOL 2</button>
        
        <label id="lb_nama">Nama Saya Rampa Pradita</label>
        
        <hr>
        <table>
            <tr>
                <td>Bilangan 1</td>
                <td><input type="text" id="bil1" placeholder="Bilangan 1"></td>
            </tr>
            <tr>
                <td>Bilangan 2</td>
                <td><input type="text" id="bil2" placeholder="Bilangan 2"></td>
            </tr>
            <tr>
                <td></td>
                <td><input id="btnProses" type="button" value="Proses"></td>
            </tr>
            <tr>
                <td>Hasil</td>
                <td><input id="txtHasil" type="text"></td>
            </tr>
        </table>
        
    </body>
</html>
