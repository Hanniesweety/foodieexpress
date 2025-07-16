<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>FoodieExpress Japan - Home</title>
<style>
body{font-family:'Poppins',sans-serif;margin:0;background:#fffaf5;}
header{background:linear-gradient(45deg,#ffc1cc,#ffdee2);color:#5c4b51;text-align:center;padding:25px;
font-size:28px;font-weight:bold;letter-spacing:1px;box-shadow:0 3px 8px rgba(0,0,0,0.1);}
.banner{background:url('images/japanese_banner.jpg') center/cover no-repeat;height:250px;
display:flex;align-items:center;justify-content:center;color:#5c4b51;font-size:30px;font-weight:bold;
text-shadow:1px 1px 5px rgba(255,255,255,0.8);border-bottom:5px solid #ffc1cc;}
.container{max-width:1100px;margin:30px auto;display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:20px;padding:0 15px;}
.category{background:#fffaf5;padding:15px;text-align:center;border-radius:12px;border:2px solid #ffdee2;
box-shadow:0 5px 10px rgba(0,0,0,0.1);transition:transform 0.3s ease,box-shadow 0.3s ease;}
.category:hover{transform:translateY(-5px);box-shadow:0 8px 16px rgba(0,0,0,0.2);}
.category img{width:100%;height:150px;object-fit:cover;border-radius:8px;}
.category a{text-decoration:none;display:block;background:#ffc1cc;color:#5c4b51;font-weight:bold;
padding:10px;margin-top:10px;border-radius:6px;transition:background 0.3s ease,color 0.3s ease;}
.category a:hover{background:#ffb6c1;color:white;}
.footer{text-align:center;padding:15px;background:#ffdee2;color:#5c4b51;margin-top:30px;
font-size:14px;border-top:3px solid #ffc1cc;}
</style>
</head>
<body>

<header>🍱 FoodieExpress Japan - 
<?php echo isset($_SESSION['user_name'])?$_SESSION['user_name']:"Guest"; ?></header>

<div class="banner">Baby Pink & Cream Japanese Delights! 🍣</div>

<div class="container">
    <div class="category">
        <img src="images/breakfast.jpg" alt="Breakfast">
        <a href="part3_menu_cart/menu.php?category=breakfast">Asagohan (Breakfast)</a>
    </div>
    <div class="category">
        <img src="images/brunch.jpg" alt="Brunch">
        <a href="part3_menu_cart/menu.php?category=brunch">Buranchi (Brunch)</a>
    </div>
    <div class="category">
        <img src="images/lunch.jpg" alt="Lunch">
        <a href="part3_menu_cart/menu.php?category=lunch">Hirugohan (Lunch)</a>
    </div>
    <div class="category">
        <img src="images/dinner.jpg" alt="Dinner">
        <a href="part3_menu_cart/menu.php?category=dinner">Bangohan (Dinner)</a>
    </div>
    <div class="category">
        <img src="images/dessert.jpg" alt="Desserts">
        <a href="part3_menu_cart/menu.php?category=dessert">Dezāto (Desserts)</a>
    </div>
</div>

<div class="footer">© 2025 FoodieExpress Japan | Designed with 🎀 by Hannie Sweety</div>

</body>
</html>
