<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
</head>
<body>
      <?php echo "privet";?> 
        <strong>Ваше имя</strong><br>
        <input  name = "name" placeholder = "Введите имя" ><br>
        <strong>Ваш e-mail</strong><br>
        <input  name = "email" placeholder = "Введите е-mail" ><br>
        <strong>Тема вопроса</strong><br>
        <input  name = "theme" placeholder = "Введите тему вопроса" ><br>
        <strong>Сообщение</strong><br>
        <textarea name = "text"  placeholder = "Введите сообщение" ></textarea><br>
        <button>Отправить сообщение</button>
  
    <div class='result'></div>
    <script src='js/jquery-3.2.0.min.js'></script>
    <script src='js/script.js'></script>
</body>
</html>
