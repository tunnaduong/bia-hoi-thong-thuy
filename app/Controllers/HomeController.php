<?php

namespace App\Controllers;

use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;

class HomeController extends BaseController
{
    public function index()
    {
        $this->render("pages.home");
    }

    public function about()
    {
        $this->render("pages.about");
    }

    public function product()
    {
        $this->render("pages.product");
    }

    public function news()
    {
        $this->render("pages.news");
    }

    public function contact()
    {
        $this->render("pages.contact");
    }

    public function admin()
    {
        if (!isset($_SESSION['user'])) {
            header('Location: /login');
            exit;
        }
        $this->render("admin.index", ['section' => 'home']);
    }

    public function login()
    {
        if (isset($_SESSION['user'])) {
            header('Location: /admin');
            exit;
        }
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'] ?? '';
            $password = $_POST['password'] ?? '';

            if ($username === ADMIN_USERNAME && $password === ADMIN_PASSWORD) {
                $_SESSION['user'] = [
                    'username' => $username
                ];
                header('Location: /admin');
                exit;
            }
            return $this->render("admin.auth.login", ['error' => 'Tài khoản hoặc mật khẩu không đúng']);
        }
        return $this->render("admin.auth.login");
    }

    public function logout()
    {
        unset($_SESSION['user']);
        header('Location: /login');
        exit;
    }

    public function sendMail()
    {
        // send mail using PHPMailer
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->isSMTP();                                            // Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     // Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
            $mail->Username   = MAIL_USERNAME;                     // SMTP username
            $mail->Password   = MAIL_PASSWORD;                               // SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->Port       = 587;     // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
            $mail->CharSet = "UTF-8";
            $mail->Encoding = 'base64';
            $mail->SMTPDebug  = SMTP::DEBUG_OFF;

            //Recipients
            $mail->setFrom('biahoithongthuy@gmail.com', 'Bia Hơi Thông Thủy');
            $mail->addAddress('biahoithongthuy@gmail.com');     // Add a recipient
            $mail->addAddress('tunnaduong@gmail.com');     // Add a recipient
            $mail->addAddress('bichthuykb73@gmail.com');     // Add a recipient

            // Content
            $mail->isHTML(true);                                  // Set email format to HTML
            $mail->Subject = 'Có người đăng ký tư vấn mở quán bia hơi';
            $data = json_decode(file_get_contents('php://input'), true);
            $mail->Body    = 'Thông tin người đăng ký: <br> Họ tên: ' . html_entity_decode($data['ho-va-ten'] ?? "") . '<br> Số điện thoại: <a href="tel:' . html_entity_decode($data['so-dien-thoai'] ?? "") . '">' . html_entity_decode($data['so-dien-thoai'] ?? "") . '</a><br> Email: ' . html_entity_decode($data['email'] ?? "") . '<br> Địa chỉ: ' . html_entity_decode($data['dia-chi'] ?? "") . '<br> Nội dung: ' . html_entity_decode($data['noi-dung'] ?? "");

            $mail->send();
        } catch (Exception $e) {
            die('Message could not be sent. Mailer Error: ' . $mail->ErrorInfo);
        }
        echo json_encode(['code' => 'success', 'message' => 'Gửi mail thành công', 'status' => 200]);
    }
}
