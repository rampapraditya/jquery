<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Validasi</title>
        <script type="text/javascript" src="../jquery.min.js"></script>
        
        <script type="text/javascript">
            
            $(document).ready(function(){
                $('#btnProses').click(function (){
                    var nama = $('#txtNama').val();
                    if(nama === ""){
                        $('#err_name').show();
                    }else{
                        $('#err_name').hide();
                        alert(nama);
                    }
                });
            });
            
            
        </script>
    </head>
    <body>
        <table>
            <tr>
                <td>Nama</td>
                <td>
                    <input id="txtNama" type="text" autocomplete="off">
                    <label id="err_name" style="color: red; display: none;">Nama tidak boleh kosong</label>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input id="btnProses" type="button" value="Proses"></td>
            </tr>
        </table>
    </body>
</html>
