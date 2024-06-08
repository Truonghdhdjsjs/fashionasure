function btnsearch() {
    // Get the value of the input field with id 'txtsearch' and trim any whitespace
    const inputsrc = document.getElementById('txtsearch').value.trim();
    
    // Check if the input is empty
    if (inputsrc === "") {
        // If input is empty, display an error message inside an element with the tag 'error'
        document.querySelector('.error').innerHTML = '*Bạn chưa nhập dữ liệu vào'; // This line might need correction
        document.querySelector('.error').style.color='red';
        return false; // Return false to prevent further action (e.g., form submission)
    }
    
    // If input is not empty, return true
    return true;
}
