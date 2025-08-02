<?php
// Veritabanı yapılandırma dosyasını dahil ediyoruz
include ('dbConfig.php');

// Oturum başlatılıyor
session_start();

// Belirtilen e-posta adresinin veritabanında olup olmadığını kontrol eden fonksiyon
function emailExists($email, $db)
{
    // SQL sorgusu hazırlıyoruz
    $statement_users = $db->prepare("SELECT COUNT(*) as count FROM users WHERE email = :email");
    // E-posta parametresi ile sorguyu çalıştırıyoruz
    $statement_users->execute([':email' => $email]);
    // Sonuçları alıyoruz
    $result_users = $statement_users->fetch(PDO::FETCH_ASSOC);
    // E-posta adresinin veritabanında olup olmadığını kontrol ediyoruz
    return $result_users['count'] > 0;
}

// Kullanıcı kayıt formu gönderildiğinde çalışacak kod bloğu
if (isset($_POST['register'])) {
    // Kullanıcıdan gelen e-posta adresini alıyoruz
    $email = $_POST['email'];
    // E-posta adresi veritabanında var mı kontrol ediyoruz
    if (emailExists($email, $db)) {
        // E-posta adresi varsa, uyarı mesajı gösteriyoruz
        echo "<script> alert('E-mail you entered already exists.'); </script>";
    } else {
        // E-posta adresi yoksa, yeni kullanıcıyı eklemek için SQL sorgusu hazırlıyoruz
        $add = $db->prepare("INSERT INTO users (first_name, surname, email, passwd) VALUES (:first_name, :surname, :email, :passwd)");
        // Kullanıcı bilgilerini kullanarak sorguyu çalıştırıyoruz
        $control = $add->execute([
            'first_name' => $_POST['name'],
            'surname' => $_POST['surname'],
            'email' => $email,
            'passwd' => $_POST['password']  // Parola düz metin olarak saklanıyor (güvensiz)
        ]);

        // Kullanıcı başarıyla eklendi mi kontrol ediyoruz
        if ($control) {
            // Oturuma başarı mesajı ekliyoruz
            $_SESSION['register_success'] = true;
            // Kullanıcıyı ana sayfaya yönlendiriyoruz
            header('Location: index.php');
            exit;
        } else {
            // Bilinmeyen bir hata oluştuysa, uyarı mesajı gösteriyoruz
            echo "<script> alert('Unknown Error !.'); </script>";
        }
    }
}

// Kullanıcı giriş formu gönderildiğinde çalışacak kod bloğu
if (isset($_POST['login'])) {
    // Kullanıcıdan gelen e-posta adresini alıyoruz
    $email = $_POST['email'];
    // Kullanıcıdan gelen parolayı alıyoruz
    $password = $_POST['password'];

    // Kullanıcı bilgilerini kontrol etmek için SQL sorgusu hazırlıyoruz
    $statement = $db->prepare("SELECT * FROM users WHERE email = :email AND passwd = :passwd");
    // E-posta ve parola parametreleri ile sorguyu çalıştırıyoruz
    $statement->execute([
        ':email' => $email,
        ':passwd' => $password
    ]);
    // Sonuçları alıyoruz
    $user = $statement->fetch(PDO::FETCH_ASSOC);

    // Kullanıcı bulundu mu kontrol ediyoruz
    if ($user) {
        // Oturuma kullanıcı bilgilerini ekliyoruz
        $_SESSION['user_id'] = $user['ID'];
        $_SESSION['user_name'] = $user['first_name'];
        $_SESSION['login_success'] = true;
        // Kullanıcıyı ana sayfaya yönlendiriyoruz
        header("Location: index.php");
        exit;
    } else {
        // Geçersiz e-posta veya parola durumunda uyarı mesajı gösteriyoruz
        echo "<script> alert('Invalid email or password.'); </script>";
    }
}
?>
