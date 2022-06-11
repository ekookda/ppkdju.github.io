<?php
include_once dirname(__DIR__, 1) . '/connection.php';
include_once dirname(__DIR__, 1) . '/function.php';

$url = isset($_GET['f']) ? $_GET['f'] : "";

if ($url == 'login') {
    login($db);
} else if ($url == 'logout') {
    logout($db);
} else {
    header('Location: login.php', true, 301);
}

//function login
function login($db)
{
    $email = validasi_input($_POST['email']);
    $password = validasi_input($_POST['password']);
    $sql = "SELECT * FROM admin WHERE username = '$email'";
    $result = $db->query($sql);
    if ($result->num_rows > 0) {
        $result_array = $result->fetch_assoc();
        if (password_verify($password, $result_array['password'])) {
            // Simpan session untuk nama di dashboard dan check login
            $_SESSION['admin'] = $result_array['nama'];
            $_SESSION['is_logged_in'] = true;
            echo json_encode(['data' => $result_array]);
            // header('Location: ' . base_url() . 'admin/index.php', true, 301);
        } else {
            header('Location: ' . base_url() . 'admin/login.php?f=login', true, 301);
        }
    } else {
        echo json_encode(['data' => 'Login tidak berhasil. Data tidak ditemukan!']);
    }
}

// function logout
function logout()
{
    // unset all session variables
    session_unset();
    // destroy the session
    session_destroy();
    // redirect to login page
    header('Location: login.php', true, 301);
}