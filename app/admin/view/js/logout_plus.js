function logout_plus() {
    const logout = document.querySelector('.tool_out a'); // Not sure what this line does
    const pathInput = document.getElementById('txtpath');
    const titleInput = document.getElementById('txttitle');
    
    // Store current input values
    const path = pathInput.value.trim();
    const title = titleInput.value.trim();
    
    if (path !== "" || title !== "") {
        const confirmed = confirm('Bạn có muốn lưu lại dữ liệu?'); // Asks user if they want to save data
        if (confirmed) {
            // User wants to save data
            // No need to do anything here, data will be retained
            return true;
        } else {
            // User doesn't want to save data
            // Reset input fields
            pathInput.value = "";
            titleInput.value = "";
            return false;
        }
    }
}
