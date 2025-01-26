document.getElementById('registrationForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission

    // Get form values
    const email = document.getElementById('email').value.trim();
    const verifyEmail = document.getElementById('verifyEmail').value.trim();
    const password = document.getElementById('password').value.trim();
    const verifyPassword = document.getElementById('verifyPassword').value.trim();
    const requiredFields = document.querySelectorAll('input[required], select[required], textarea[required]');

    // Helper functions
    const isValidEmail = (email) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    const isValidPassword = (password) => /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/.test(password);

    // Check for empty fields
    for (const field of requiredFields) {
        if (!field.value.trim()) {
            alert(`Please fill out the ${field.placeholder || 'required field'}`);
            field.focus();
            return;
        }
    }

    // Validate email
    if (!isValidEmail(email)) {
        alert('Please enter a valid email address.');
        document.getElementById('email').focus();
        return;
    }

    // Verify email matches
    if (email !== verifyEmail) {
        alert('Email and Verify Email must match.');
        document.getElementById('verifyEmail').focus();
        return;
    }

    // Validate password
    if (!isValidPassword(password)) {
        alert('Password must be at least 8 characters long, containing both letters and numbers.');
        document.getElementById('password').focus();
        return;
    }

    // Verify password matches
    if (password !== verifyPassword) {
        alert('Password and Verify Password must match.');
        document.getElementById('verifyPassword').focus();
        return;
    }

    // If all validations pass
    alert('Form submitted successfully!');
    this.submit(); // Submit the form
});