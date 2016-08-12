<?php
$recepient = "dialoggg1994@gmail.com";
$sitename = "Усадьба НИКА";

$username = trim($_POST["username"]);
$phone = trim($_POST["phone"]);
$people = trim($_POST["people"]);
$rooms = trim($_POST["rooms"]);
$datepickerfrom = trim($_POST["datepicker-from"]);
$datepickerto = trim($_POST["datepicker-to"]);
$email = trim($_POST["email"]);
$comments = trim($_POST["comments"]);
$message = "<table width='100%' cellspacing='0' cellpadding='0' border='0' style='background:#fffff0;min-height:400px'>
        <tr>
            <td align='center'>
                <table width='960px' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;border:1px solid #463b38'>
                    <!--header line statrs-->
                    <tr style='background:#4CAF50'>
                        <td style='color:white;padding:10px;font-size:20px;border:1px solid #463b38;text-align:center;'>  Заявка на бронирование номера</td>
                    </tr>
                    <!--header line end-->
                    <!--content statrs-->
                    <tr>
                        <td colspan='3' align='center'>
                            <table width='960px' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                                <tr>
                                    <td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> Имя</td>
									<td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> Телефон </td>
									<td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> Кол-во</td>
									<td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> Номер</td>
									<td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> Дата Заезда</td>
									<td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> Дата Выезда</td>
									<td style='width:100px;padding:5px;background:#463b38;color:white;border:1px solid black'> E-mail</td>
                                </tr>
								<tr>
                                    <td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $username</td>
									<td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $phone </td>
									<td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $people </td>
									<td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $rooms </td>
									<td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $datepickerfrom </td>
									<td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $datepickerto </td>
									<td style='width:100px;padding:5px;border:1px solid #463b38;background:#ffffff;vertical-align: top;'> $email </td>
                                </tr>
								<tr>
								<td colspan='7' style='padding:10px;border:1px solid #463b38;'> Дополнительный комментарий к бронированию </td>
								</tr>
								<tr>
								<td colspan='7' style='padding:15px;border:1px solid #463b38;background:#ffffff'> $comments </td>
								</tr>
                            </table>
                        </td>
                    </tr>
                    <!--content end-->
                </table>
                <!--footer img starts-->
                <table width='960px' cellpadding='0' cellspacing='0' border='0' style='border-collapse: collapse;'>
                    <tr>
                        <td><img ... /></td>
                    </tr>
                </table>
                <!--footer img end-->
            </td>
        </tr>
    </table>";
$pagetitle = "Новая заявка на Бронирование Номера \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/html; charset=\"utf-8\"\n From: $recepient");