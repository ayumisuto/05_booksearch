<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>booksearch.com</title>
  <link href="css/style2.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
</head>
<body>

<!-- Head[Start] -->
<header class="header">
<div class="imgbox">
  <p><img src="img/images.jpeg" alt=""></p>
  <p><img src="img/book2.jpeg" alt=""></p>
  <p><img src="img/book9.jpeg" alt=""></p>

  
</div>

  <nav class="navbar navbar-default">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select.php">DATA</a></div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<!-- ここでinsert.phpにデータを送っている -->
<form method="post" action="insert.php">
  <div class="jumbotron">
   <fieldset>
    <legend>BookSearch</legend>
    <!-- name="xxx" の部分に注目するようにしておいてください🤗 -->
    <div class="box">
     <label>Title：<input type="text" name="name"></label><br>
     <label>Product id：<input type="text" name="email"></label><br>
     <label>Contents：<textArea name="naiyou" rows="4" cols="40"></textArea></label><br>
     <!-- <input type="submit" value="GO"> -->
     <input type="submit" value="GO" style="background-color:#ffff99" 
     onmouseover="this.style.background='#99ccff'" onmouseout="this.style.background='#ffff99'">
    </div>
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<footer class="fotter">
<div class="imgbox2">
<p><img src="img/book3.jpg" alt=""></p>
<p><img src="img/book5.jpg" alt=""></p>

</div>
</footer>

</body>
</html>