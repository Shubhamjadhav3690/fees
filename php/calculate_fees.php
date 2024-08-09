<?php
include 'config.php'; // Include the database connection file

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $course = $_POST['course'];
    $semester = $_POST['semester'];
    $discountCode = $_POST['discountCode'];
    $membershipDiscountCode = $_POST['membershipDiscountCode'];
    $creditPoints = $_POST['creditPoints'];
    $installments = $_POST['installments'];

    // Define base fees for each course
    $baseFees = [
        'BSc IT' => ['Semester 1' => 6000, 'Semester 2' => 8000, 'Semester 3' => 7000, 'Semester 4' => 5500],
        'BSc CS' => ['Semester 1' => 9000, 'Semester 2' => 8900, 'Semester 3' => 6900, 'Semester 4' => 10900],
        'BAF' => ['Semester 1' => 5600, 'Semester 2' => 7200, 'Semester 3' => 4600, 'Semester 4' => 4200],
        'BBI' => ['Semester 1' => 6700, 'Semester 2' => 6100, 'Semester 3' => 6700, 'Semester 4' => 6100],
        'B.Com' => ['Semester 1' => 2400, 'Semester 2' => 2200, 'Semester 3' => 6700, 'Semester 4' => 6100],
        'M.Com' => ['Semester 1' => 2500, 'Semester 2' => 2300, 'Semester 3' => 16700, 'Semester 4' => 16100],
        'MSc IT' => ['Semester 1' => 22600, 'Semester 2' => 22400, 'Semester 3' => 26700, 'Semester 4' => 26100],
    ];

    // Base fee for the selected course and semester
    $fee = $baseFees[$course][$semester];

    // Apply discount code
    if ($discountCode == 'scholarship') {
        $fee -= 400;
    }

    // Apply membership discount code
    if ($membershipDiscountCode == 'subscribed') {
        $fee -= 100;
    }

    // Apply credit points discount
    if ($creditPoints > 30) {
        $fee -= 5;
    }

    // Apply installments fee
    if ($installments > 0) {
        $fee += 100 * ($installments + 0);
    }

    // Ensure fee does not go below zero
    if ($fee < 0) {
        $fee = 0;
    }

    echo json_encode(['finalFees' => $fee]);
    exit();
}
?>
