<!-- About -->
    <section class="bg-primary" id="about">
      <div class="container">
	  <center>
<table >
<th> <form method="POST" action="">
KALKULATOR COIL
<table>
<tr>	
	<td> OHM : </td>
	<td> <input type="text" name="ohm" size="20"> Ohm </td>
</tr>

<tr>	
	<td> AMPER : </td>
	<td> <input type="text" name="amper" size="20"> Ampere Batre </td>
</tr>


<tr>
	<td> <input type="submit" name="hitung" value="Hitung"> </td>
	<td> <a href="kalkulatorcoil.php"> <button> Reset </button> </a> </td>
</tr>
</th>
<tr>
	"Voltase yang di sarankan 
untuk menjaga ketahanan Baterai adalah $hasil Volt"
	</tr>
</center> </table> </table>
<br>
<br>
<img src="IMG/OHMLAW.jpg"  >
        <div class="row">
		
          <div class="col-lg-8 mx-auto text-center">
		  
            <h2 class="section-heading text-white">Tabel Hukum OHM</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Dengan menggunakan setingan resistant dan ampere baterai yang tepat, akan meminimalisir resiko bahaya penggunaan vape</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Pengertian Vape secara Umum </a>
          </div>
        </div>
      </div>
    </section>
	
	<?php
if(isset($_POST['hitung'])) {
$ohm = ($_POST['ohm']);
$amper = ($_POST['amper']);
$hasil = $ohm * $amper ;
echo "Voltase yang di sarankan 
untuk menjaga ketahanan Baterai adalah $hasil Volt";}
?>
	