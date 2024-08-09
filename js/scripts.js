document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('calculateFees').addEventListener('click', function() {
        const course = document.getElementById('courseSelect').value;
        const semester = document.getElementById('semesterSelect').value;
        const discountCode = document.getElementById('discountCode').value;
        const membershipDiscountCode = document.getElementById('membershipDiscountCode').value;
        const creditPoints = parseFloat(document.getElementById('creditPoints').value) || 0;
        const installments = parseInt(document.getElementById('installments').value, 10) || 1;

        if (installments < 1 || installments > 2) {
            document.getElementById('feesResult').textContent = 'Installments must be between 1 and 2.';
            return;
        }

        const xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/calculate_fees.php', true);
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onload = function() {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.responseText);
                if (response.error) {
                    document.getElementById('feesResult').textContent = response.error;
                } else {
                    document.getElementById('feesResult').textContent = `Final Fees: ${response.finalFees}`;
                    document.getElementById('paymentSection').style.display = 'block';
                }
            } else {
                document.getElementById('feesResult').textContent = 'An error occurred while calculating fees.';
            }
        };
        xhr.send(new URLSearchParams({
            'course': course,
            'semester': semester,
            'discountCode': discountCode,
            'membershipDiscountCode': membershipDiscountCode,
            'creditPoints': creditPoints,
            'installments': installments
        }).toString());
    });
});
