 <?php
 
 use Illuminate\Support\Str;
 
 $token = Str::random('13');
 // misal terdapat beberapa foto yang terdaftar
 $getExtention = ['jpg', 'png', 'gif'];
 // terdapat method getClientOriginalExtension
 foreach ($getExtention as $get) {
     $token = Str::random('13');
     $file = $token . '.' . $get . '<br>';
     echo "$file";
 }
 
 ?>
