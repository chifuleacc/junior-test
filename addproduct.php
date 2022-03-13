
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Junior Test</title>
  </head>
  <body>
    
</div>

<form action="..includes/signup.inc.php" method="POST">

<b id="heading2">Add Product</b>

<button id="save-product-btn" type="button">Save</button>
<button id="cancel-product-btn" onclick="window.location.href = 'index.php';" type="button">Cancel</button>

</div>
<hr id="horizontal-line2"/> 
</div>


<div id="product_form">

  <label for="sku">SKU:</label>
  <input type="text" id="sku" name="sku"> <br>
  <label for="name">Name:</label>
  <input type="text" id="name" name="name"> <br>
  <label for="price">Price ($):</label>
  <input type="text" id="price" name="price"> <br>
  
<div class="select">
  <select id="productType" name="productType">
  <option value="typeswitcher">TypeSwitcher</option>
  <option value="dvd">DVD</option>
  <option value="furniture">Furniture</option>
  <option value="book">Book</option>
  </select>

 <div class="content">
   <div id="dvd" class="data"><p><b>Size (MB)</b><input type="number" id="size" name="size"></p><br><b>Please,provide size</div>

   <div id="furniture" class="data">
   <p><b>Height (CM)</b><input type="number" id="height" name="height"><br>
   <b>Width (CM)</b><input type="number" id="width" name="width"><br>
   <b>Length (CM)</b><input type="number" id="length" name="length"></p><br>
   <b>Please, provide dimensions</div>

   <div id="book" class="data"><p><b>Weight (KG)</b><input type="number" id="weight" name="weight"></p><br>
   <b>Please, provide weight</div>

 </div>
 </div>
 </form>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"> </script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
     $(document).ready(function() {
        $("#productType").on('change', function() {
            $(".data").hide();
            $("#"+$(this).val()).fadeIn(700);
        }).change();
    });
  </script>
  </body>
</html>
