<?php
class MasukModel {
    // Dummy user data
    private $dummy_user = [
        'email' => 'user@example.com',
        'password_hash' => '$2y$10$7xPdclvWc8sXOedweDmtHegRNDNQi5j36MaFh.2Cxak/6XwLm.EBm' // Hashed password for "password123"
    ];

    // Validate user credentials
    public function validateUser($email, $password) {
        if ($email == $this->dummy_user['email'] && password_verify($password, $this->dummy_user['password_hash'])) {
            return true;
        } else {
            return false;
        }
    }
}
?>
