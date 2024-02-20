document.getElementById("employeeName").addEventListener("input", function() {
    var nameLength = this.value.length;
    if (nameLength > 30) {
        document.getElementById("nameError").textContent = "Name must be 30 characters or less.";
    } else {
        document.getElementById("nameError").textContent = "";
    }
});

document.getElementById("salary").addEventListener("input", function() {
    var salary = this.value;
    if (salary.length > 8) {
        document.getElementById("salaryError").textContent = "Salary must be 8 digits or less.";
    } else {
        document.getElementById("salaryError").textContent = "";
    }
});
//document.getElementById('employeeForm').addEventListener('submit', function() {
   // alert('Form submitted successfully!');
//});
document.getElementById('employeeForm').addEventListener('submit', function(event) {
    var form = event.target;
    var fields = form.querySelectorAll('[required]');
    var incompleteFields = [];

    fields.forEach(function(field) {
        if (!field.value) {
            incompleteFields.push(field.getAttribute('name'));
        }
    });

    if (incompleteFields.length > 0) {
        event.preventDefault();
        alert('Please fill in all required fields: ' + incompleteFields.join(', '));
    }
});
document.getElementById('employeeForm').addEventListener('submit', function(event) {
    var form = event.target;
    var employeeName = form.elements['employeeName'].value;
    var salary = form.elements['salary'].value;

    if (employeeName.length > 30 || salary.length > 8) {
        event.preventDefault();
        alert('Employee name must be 30 characters or less and salary must be 8 digits or less.');
    }
    else{
        alert('Form submitted successfully!');
    }
});

