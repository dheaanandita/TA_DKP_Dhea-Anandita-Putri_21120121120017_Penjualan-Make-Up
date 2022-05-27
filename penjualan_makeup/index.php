<html leng="en">
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
                    <h2 class="container-header text-center">Selamat Datang</h2>
                    <form class="form" action="hasil.php" method="post" id="form">
                         <div class="form-group form-book">
                              <label for="nama">Nama Barang</label>
                              <input type="text" id="title" name="nama" required>
                         </div>
                         <div class="form-group form-book">
                              <label for="harga">Harga Barang</label>
                              <input type="text" id="title" name="harga" required>
                         </div>
                         <div class="form-group form-book">
                              <label for="jumlah">Jumlah Barang</label>
                              <input type="text" id="title" name="jumlah" required>
                         </div>
                         <br>
                         <div class="form-group">
                              <label for="exampleFormControlSelect1">Jenis Produk</label>
                              <select class="form-control" id="exampleFormControlSelect1" name="product-type">
                                   <option value="Make Up">Make Up</option>
                                   <option value="Skincare">Skincare</option>
                              </select>
                         </div>
                         <br>
                         <div class="form-group form-book">
                              <label for="pmntn">Merk</label>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check1" value="Emina" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Emina
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check2" value="Wardah" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Wardah
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check3" value="Make Over" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Make Over
                                   </label>
                              </div>
                              <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="check4" value="Luxcrime" id="flexCheckDefault">
                                   <label class="form-check-label">
                                        Luxcrime
                                   </label>
                              </div>
                         </div>
                         <input type="submit" value="Submit" name="Submit" class="btn-submit">
                    </form>
               </div>
          </div>
     </body>

     <?php
include("userService.php");

$user = new userService ($_POST['email'], $_POST['password']);

if($get_user = $user->login()) {
     echo 'Selamat Datang '.$user->getRole();
     echo ', Masuk sebagai email: '.$get_user;
} else {
     echo 'Invalid Login';
}