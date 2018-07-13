<?php
session_start();
include_once '../../common_lib/createLink_db.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>야! 몰</title>
  <link rel="stylesheet" href="../../common_css/shop_index_css3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../shopping/css/shopping3.css?ver=1">
  <link rel="stylesheet" href="../css/cart.css?ver=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
    <header style="border:1px solid black;">
   		<?php include_once '../../common_lib/top_login3.php';?>
    </header>
    <nav id="shop_aside">
    	<?php include_once '../../common_lib/shop_main_menu2.php';?>  	
    </nav>
    <section>
    	<div id="wish_list_section">WISH LIST
    		<div id="wish_list_section2">관심상품</div>
    	</div>
    </section>
    <section>
    	<div id="cart_section">
    		<table>
    			<tr>
    				<td class="prod_check_box"><input type="checkbox"></td>
    				<td class="prod_image">이미지</td>
    				<td class="prod_info">상품정보</td>
    				<td class="prod_price">판매가</td>
    				<td class="prod_baesong">배송비</td>
    				<td class="prod_total">합계</td>
    				<td class="prod)choice">선택</td>
    			</tr>
    		</table>
    	</div>
    </section>
    
    
    
	<div class="clear"></div>
	<footer style="border:1px solid black;">
 		<?php include_once '../../common_lib/footer2.php';?>
  	</footer>
</body>
</html>