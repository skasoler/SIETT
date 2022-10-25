<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $phone =$_POST['phone'];
  $subject =$_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'skasoler@gmail.com';

  $email_subject = "Nuevo mensaje a través del formulario de contacto";

  $email_body = "Ha recibido un nuevo mensaje de parte de $name.\n Número de teléfono $phone \n Email: $email".
                          "El asunto es $subject y el mensaje es:\n $message".


  $to = "csoler@gmail.com, skasoler@gmail.com,name3@website-name.com";
  
mail($to,$email_subject,$email_body);

?>