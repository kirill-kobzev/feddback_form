 
$("button").click(function() {
  $.post(
     "submit.php",
    // передача в качестве строки
    // кодирование выполняется "вручную"
   { 
        theme: $('[name="theme"]').val(),
        name: $('[name="name"]').val(),
        email: $('[name="email"]').val(), 
        text: $('[name="text"]').val()
        },

    function( data ) { 
      $( ".result" ).html(data);
    }
    
    );
  

});