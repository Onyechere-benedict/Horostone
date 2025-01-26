document.getElementById('loginForm').addEventListener('submit', function (e) {
    e.preventDefault(); // Prevent form submission

    const email = document.getElementById('email').value.trim();
    const password = document.getElementById('password').value.trim();

    // Helper functions for validation
    const isValidEmail = (email) => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    const isValidPassword = (password) => password.length >= 8;

    // Check if fields are empty
    if (!email || !password) {
        alert('All fields must be filled!');
        return;
    }

    // Validate email format
    if (!isValidEmail(email)) {
        alert('Invalid email address. Please enter a valid email.');
        return;
    }

    // Validate password length
    if (!isValidPassword(password)) {
        alert('Password must be at least 8 characters long.');
        return;
    }

    // If all validations pass
    alert('Login successful!');
    this.submit(); // Submit the form
});