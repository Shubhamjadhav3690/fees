<?php include '../includes/header.php'; ?>



<h2>Fees Calculator</h2>
<form id="feesForm">
    <label for="courseSelect">Select Course:</label>
    <select id="courseSelect">
        <option value="BSc IT">BSc IT</option>
        <option value="BSc CS">BSc CS</option>
        <option value="BAF">BAF</option>
        <option value="BBI">BBI</option>
        <option value="B.Com">B.Com</option>
        <option value="M.Com">M.Com</option>
        <option value="MSc IT">MSc IT</option>
    </select>

    <label for="semesterSelect">Select Semester:</label>
    <select id="semesterSelect">
        <option value="Semester 1">Semester 1</option>
        <option value="Semester 2">Semester 2</option>
        <option value="Semester 3">Semester 3</option>
        <option value="Semester 4">Semester 4</option>
    </select>

    <label for="discountCode">Special Discount Code:</label>
    <input type="text" id="discountCode" placeholder="Enter Discount Code">

    <label>
        <input type="checkbox" id="membershipDiscountCheckbox"> Membership Discount
    </label>
    <input type="text" id="membershipDiscountCode" placeholder="Enter Membership Discount Code" style="display: none;">

    <label for="creditPoints">Credit Points:</label>
    <input type="number" id="creditPoints" placeholder="Enter Credit Points">

    <label for="installments">Number of Installments:</label>
    <input type="number" id="installments" placeholder="Enter Number of Installments">

    <button type="button" id="calculateFees">Calculate Fees</button>
</form>
<div id="feesResult"></div>
<form action="../php/payment.php">

<button id="makePayment">Make payment</button></form>


<br><BR><BR><?php include '../includes/footer.php'; ?>
