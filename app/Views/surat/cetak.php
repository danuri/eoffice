<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

    <style>
    body {
      font-family: 'American Typewriter', serif;
      font-size: 15px;
      padding-left: 50px;
    }
    </style>
  </head>
  <body>
    <div style="padding-left:300px;margin-top:100px;margin-bottom:20px;">
      <?= $surat->srt_kode?>
    </div>
    <table border="1" width="30%">
      <tr>
        <td height="20px"><?= $surat->srt_asal_nomor?></td>
      </tr>
      <tr>
        <td height="20px"><?= $surat->srt_asal?></td>
      </tr>
      <tr>
        <td height="20px"><?= $surat->srt_asal_perihal?> - <?= $surat->srt_asal_nama?></td>
      </tr>
      <tr>
        <td height="20px"><?= $surat->srt_asal_tanggal?></td>
      </tr>
    </table>
    <div style="padding-left:250px;margin-top:50px;">
      <?= $surat->srt_arah?>
    </div>

    <script type="text/javascript">
    // window.addEventListener("afterprint", function(event) {
    //     window.close()
    // })
    // window.print()
    </script>
  </body>
</html>
