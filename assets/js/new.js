// const openPopup = document.getElementById('openPopup');
// const closePopup = document.getElementById('closePopup');
// const popupForm = document.getElementById('popupForm');
// const content = document.querySelector('.content');

// openPopup.addEventListener('click', () => {
//     popupForm.style.display = 'flex';
//     content.classList.add('blur'); // Add blur effect
// });

// closePopup.addEventListener('click', () => {
//     popupForm.style.display = 'none';
//     content.classList.remove('blur'); // Remove blur effect
// });


const openPopupButtons = document.querySelectorAll('.openPopup');
const closePopup = document.getElementById('closePopup');
const popupForm = document.getElementById('popupForm');
const content = document.querySelector('.content');

// Add event listeners to all "Enquire Now" buttons
openPopupButtons.forEach(button => {
    button.addEventListener('click', () => {
        popupForm.style.display = 'flex';
        content.classList.add('blur'); // Add blur effect
        document.body.classList.add('no-scroll'); // Disable body scrolling
    });
});

// Close popup
closePopup.addEventListener('click', () => {
    popupForm.style.display = 'none';
    content.classList.remove('blur'); // Remove blur effect
    document.body.classList.remove('no-scroll'); // Re-enable body scrolling
});

// Close popup when 'Esc' key is pressed
document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') {
        popupForm.style.display = 'none';
        content.classList.remove('blur');
        document.body.classList.remove('no-scroll');
    }
});
