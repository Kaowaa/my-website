<!DOCTYPE html>
<html lang="th">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login Page</title>
        <link href="style.css"rel="stylesheet">
    </head>
    <body>
        <div class="login-box">
            <h2>เข้าสู่ระบบ</h2>
            <form action="login_check.php" method="post">
                <input type="text" placeholder="ชื่อผู้ใช้" name="form_username" required>
                <input type="password" placeholder="รหัสผ่าน" name="form_pass"required>
                <button type="submit" name="submit">เข้าสู่ระบบ</button>
            </form>
            <div class="register-link">
                ยังไม่มีบัญชี? <a href="#">สมัครสมาชิก</a>
            </div>
        </div>
        
    </body>
</html>
