<?php
add_action( 'wp_ajax_main_callback', 'main_callback' );
add_action( 'wp_ajax_nopriv_main_callback', 'main_callback' );

function main_callback(){

    $my_error = new WP_Error();
    $message = [];
    $name = htmlspecialchars($_POST['order_name']);
    $email = htmlspecialchars($_POST['order_mail']);
    $phone = htmlspecialchars($_POST['order_tel']);
    $service = htmlspecialchars($_POST['order_service']);

    if(empty($name)){
        $my_error->add( 'order_name', 'Поле является обязательным.');
    }

    if(empty($phone)){
        $my_error->add( 'order_tel', 'Поле является обязательным.');
    }

    if(empty($email)){
        $my_error->add( 'order_mail', 'Поле является обязательным.');
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $my_error->add( 'order_mail', 'Введите действительный E-mail.');
        }
    }

    if (empty($my_error->errors)){

        $message2 = '<table width="600" border="0" cellspacing="0" cellpadding="0" style="font: 300 14px Arial;">';
        $message2 .= '<tr><td colspan="2" style="padding-top:15px; font-weight:bold;"><strong>Данные: </strong></td>';
        $message2 .= '<tr><td>Имя: </td><td>' . $name . '</td></tr>';
        if ($email){
            $message2 .= '<tr><td>E-mail: </td><td>' . $email . '</td></tr>';
        }
        if ($phone){
            $message2 .= '<tr><td>Телефон: </td><td>' . $phone . '</td></tr>';
        }
        if ($service){
            $message2 .= '<tr><td>Услуга: </td><td>' . $service . '</td></tr>';
        }
        $message2 .= '</table>';

        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: <wordpress@patent.veht.ru>\r\n";

        $mailstat = mail('shishakova180196@gmail.com', 'Письмо с сайта', $message2, $headers);

        wp_send_json([
            'success' => true,
            'class' => '_success',
        ]);

    } else {
        $message = [
            'success' => false,
            'errors' => $my_error->errors
        ];
    }

    wp_send_json($message);

    wp_die();
}