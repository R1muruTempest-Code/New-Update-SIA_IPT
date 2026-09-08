document.getElementById('contactForm').addEventListener('submit',(e) => {
    e.preventDefault();
    // Handle form submission logic here
    const statusEl = document.getElementById('FormStatus');
    statusEl.textContent = 'Thank you for your message! We will get back to you soon.';
    statusEl.classList.add('active');
    e.target.reset();
});

