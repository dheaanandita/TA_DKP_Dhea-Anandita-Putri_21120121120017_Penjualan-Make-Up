<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Penjualan Make Up</title>
        <link rel="stylesheet" href="css/style.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <head>
      
    <body>
      <header>
            <h2 class="text-center">
                Penjualan Make Up
            </h2>
      </header>
      <!DOCTYPE html>
<html>
<body>
<head>
 <style>
  h2{  
  color:black;  
  background-color:pink;  
  padding:5px;  
  }  
  p{  
  color:black;  
  }    
 </style>
</head>

<button type="button" >
      <div class="wrapper">
            <div class="container bg-white">
                  <h2 class="container-header text-center">Hasil Data</h2>
                  <table class="form">
                  <div class="row"> 
<div class="col"> 
                    <tr>
                      <td>Kode Barang</td> 
                      <td>: 
      <?php 
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; 

        $numbers = '0123456789'; 

        $charactersLength = strlen($characters); 

        $numbersLength = strlen($numbers); 

        $randomString = ''; 

        for ($i = 0; $i < 3; $i++) { 
            $randomString .= $characters[rand(0, $charactersLength - 1)]; 

        } 
        for ($i = 0; $i < 2; $i++) { 
          $randomString .= $numbers[rand(0, $numbersLength - 1)]; 
        } 
        echo $randomString; 
      ?> 
    </p> 
  </div>
                    <tr>
                      <td>Nama Barang</td> 
                      <td>: <?php echo $nama = $_POST['nama']; ?></td> 
                    </tr>
                    <tr>
                      <td>Harga Barang</td> 
                      <td>: <?php echo $harga = $_POST['harga']; ?></td> 
                    </tr>
                    <tr> 
                      <td>Jumlah Barang</td> 
                      <td>: <?php echo $jumlah = $_POST['jumlah']; ?></td> 
                    </tr>              
                      <td><br> 
                      <?php 
                      $jp = $_POST['product-type'];
                      if ($jp == 'Make Up') {
                          echo "Jenis produk yang dipilih : Make Up"; 
                         
                        } 
                      if ($jp == 'Skincare') {
                          echo "Jenis produk yang dipilih : Skincare";
                           
                        }  
     
                              
                      ?>
                          </td> 
                    </tr>
                    <tr>
                      <td>
                        Merk yang dipilih : <br>
                        <?php 
                        if (isset($_POST['check1'])) {  
                          echo $_POST['check1']." <br/>";  
                            }  
                        if (isset($_POST['check2'])) {  
                          echo $_POST['check2']." <br/>";  
                            }  
                        if (isset($_POST['check3'])) {  
                          echo $_POST['check3']." <br/>";  
                            }  
                        if (isset($_POST['check4'])) {  
                          echo $_POST['check4']." <br/>";  
                            }  
                        ?>
                      </td>
                    </tr>
                  </table>
            </div>
      </div>      
     </body>
</html>


<?php
class Admin {
private $nama;
private $role;
public function __construct($nama, $club){
$this->nama = $nama;
}
public function setRole($role){
$this->club = $role;
}
public function getNama(){
return $this->nama;
}
public function getRole(){
return $this->role;
}
}
$Dhea = new Admin("DHEA","ADMIN");
echo "Data diinput oleh : ";
echo $Dhea->getNama() . "<br>";
echo $Dhea->getRole() . "<br>";
$Dhea->setRole("ADMIN");
