function validateInput() {
    let password = document.getElementById("floatingPassword").value;

    if (password.length < 8) {
        console.log("Password must be at least 8 characters long.");
        return false;
    }
    return true;
}