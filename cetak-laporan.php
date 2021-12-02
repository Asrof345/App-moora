<!doctype html>
<html lang="en">
  <head>

    <!-- Required meta tags -->

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <style type="text/css">

        body { 
            font-family: 'Roboto', sans-serif;
        }
        h3,h4{
            font-family: 'Roboto Slab', serif;
        }

    </style>

    <title>Laporan</title>



  </head>

  <body>

  <center>

 

 <h3>PT. Mari IT Solution</h3>

 <h4>Jalan Jamin Ginting No. 272 B</h4>

 <h4>Laporan Hasil Keputusan</h4>

 

</center>





<table class="table table-bordered table-striped table-condensed" style="width:80%; margin:2rem auto ;">

             <thead>

                 <tr>
    
                     <th>No</th>

                     <th>Lokasi</th>

                     <th>Nilai Yi</th>

                     <th>Rangking</th>

                 </tr>

             </thead>

             <tbody>

                 <?php

                     include "config/koneksi.php";

                     $no = 1 ;
                     $sql = mysqli_query($con, "SELECT * FROM tbl_ranking ORDER BY nilai_yi desc");

                     $rank = 1 ;

                     while ($r = mysqli_fetch_array($sql)){

                       $lokasi        = $r['lokasi'];

                       $nilai_yi      = $r['nilai_yi'];

                 ?>

                 <tr>

                     <td> <?php echo $no++ ; ?> </td>
                     <td>

                         <?php echo $lokasi; ?>

                     </td>

                     <td>

                         <?php echo $nilai_yi; ?>

                     </td>

                     <td class="numeric">

                         <?php echo $rank++; ?>

                     </td>

                 </tr>

                 <?php } ?>

             </tbody>

         </table>



<script>

 window.print();

</script>



    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

  </body>

</html>