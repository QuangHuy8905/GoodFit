// Functionality for the Edit/Save button in Settings
const editBtn = document.querySelector('.edit-btn');

if (editBtn) {
    editBtn.addEventListener('click', () => {
        const formInputs = document.querySelectorAll('.setting-form input');
        
        // Toggle readonly state for inputs
        formInputs.forEach(input => {
            input.readOnly = !input.readOnly;
            // Visual feedback: change background color when editable
            input.style.backgroundColor = input.readOnly ? '#f2f2f2' : '#fff'; 
        });

        // Toggle button text and style
        if (editBtn.textContent === 'CHỈNH SỬA') {
            editBtn.textContent = 'LƯU';
            editBtn.classList.add('save-mode');
        } else {
            editBtn.textContent = 'CHỈNH SỬA';
            editBtn.classList.remove('save-mode');
            // In a real application, you would send data to the server here
            alert('Thông tin đã được lưu!'); // Placeholder for saving data
        }
    });
}

// Logic to ensure the Settings icon and section are active on page load
// Since this is now a dedicated page, we just set the active states directly.
const icons = document.querySelectorAll(".sidebar .icon"); // Select icons only within sidebar
const mainTabs = document.querySelectorAll(".main-tab"); // Select main content tabs

// Remove active class from all icons and tabs first
icons.forEach(icon => {
    icon.classList.remove("active");
});
mainTabs.forEach(tab => {
    tab.classList.remove("active");
});

// Add active class to the Settings icon and the Settings content section
document.querySelector('.sidebar .icon[data-target="settings"]').classList.add("active");
document.getElementById("settings-section").classList.add("active");
