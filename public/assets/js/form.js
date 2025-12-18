// Form Validation and Submission
// Uses Pristine.js for form validation

document.addEventListener('DOMContentLoaded', function() {
    // Initialize Pristine for all forms
    const forms = document.querySelectorAll('form');
    
    forms.forEach(form => {
        if (typeof Pristine !== 'undefined') {
            const pristine = new Pristine(form, {
                classTo: 'form-field',
                errorClass: 'has-error',
                errorTextParent: 'form-field',
                errorTextTag: 'div',
                errorTextClass: 'form-error'
            });

            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                const isValid = pristine.validate();
                
                if (isValid) {
                    // Show success message
                    const successHidden = form.querySelectorAll('.form-success-hidden');
                    const successVisible = form.querySelectorAll('.form-success-visible');
                    
                    successHidden.forEach(el => el.style.display = 'none');
                    successVisible.forEach(el => {
                        el.style.display = 'block';
                        el.setAttribute('aria-hidden', 'false');
                    });

                    // Here you would normally send the form data to your server
                    // Example: fetch('/api/contact', { method: 'POST', body: formData })
                    
                    console.log('Form is valid, ready to submit');
                } else {
                    console.log('Form has validation errors');
                }
            });
        } else {
            // Fallback validation if Pristine is not loaded
            form.addEventListener('submit', function(e) {
                e.preventDefault();
                
                let isValid = true;
                const requiredFields = form.querySelectorAll('[required]');
                
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        isValid = false;
                        field.classList.add('has-error');
                    } else {
                        field.classList.remove('has-error');
                    }
                });

                if (isValid) {
                    const successHidden = form.querySelectorAll('.form-success-hidden');
                    const successVisible = form.querySelectorAll('.form-success-visible');
                    
                    successHidden.forEach(el => el.style.display = 'none');
                    successVisible.forEach(el => {
                        el.style.display = 'block';
                        el.setAttribute('aria-hidden', 'false');
                    });
                }
            });
        }
    });
});
