function validateForm(event) {
    event.preventDefault();

    const form = document.querySelector('form');
    const fields = {
        title: document.getElementById('title').value.trim(),
        destination: document.getElementById('destination').value.trim(),
        departureDate: new Date(document.getElementById('departureDate').value),
        returnDate: new Date(document.getElementById('returnDate').value),
        price: parseFloat(document.getElementById('price').value)
    };

    const messages = {
        title: '',
        destination: '',
        departureDate: '',
        returnDate: '',
        price: ''
    };

    // Validation rules
    if (fields.title.length < 3) {
        messages.title = 'Le titre doit contenir au moins 3 caractères.';
    }

    const destinationRegex = /^[a-zA-Z\s]{3,}$/;
    if (!fields.destination.match(destinationRegex)) {
        messages.destination = 'La destination doit contenir uniquement des lettres et des espaces, et au moins 3 caractères.';
    }

    if (isNaN(fields.departureDate.getTime())) {
        messages.departureDate = 'La date de départ doit être valide.';
    }

    if (isNaN(fields.returnDate.getTime()) || fields.returnDate <= fields.departureDate) {
        messages.returnDate = 'La date de retour doit être ultérieure à la date de départ.';
    }

    if (isNaN(fields.price) || fields.price <= 0) {
        messages.price = 'Le prix doit être un nombre positif.';
    }

    // Clear previous error messages
    Object.keys(messages).forEach(field => {
        const errorElement = document.querySelector(`#${field} + .error`);
        if (errorElement) {
            errorElement.remove();
        }
    });

    // Display error messages under the corresponding labels
    let isValid = true;
    for (const [field, message] of Object.entries(messages)) {
        if (message) {
            isValid = false;

            const inputField = document.getElementById(field);
            const errorElement = document.createElement('div');
            errorElement.className = 'error';
            errorElement.style.color = 'red';
            errorElement.textContent = message;

            // Insert the error message after the input field
            inputField.parentNode.insertBefore(errorElement, inputField.nextSibling);
        }
    }

    // If valid, display success message
    if (isValid) {
        const successMessage = document.createElement('div');
        successMessage.className = 'success';
        successMessage.style.color = 'green';
        successMessage.textContent = 'Formulaire validé avec succès !';
        form.appendChild(successMessage);

        // Optionally reset the form after successful submission
        form.reset();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form');
    form.addEventListener('submit', validateForm);

    const validateField = (fieldId, validationFn) => {
        const field = document.getElementById(fieldId);
        const messageElement = document.querySelector(`#${fieldId} + .validation-message`);

        if (messageElement) {
            messageElement.remove();
        }
        const value = field.value.trim();
        const isValid = validationFn(value);

        const message = document.createElement('div');
        message.className = 'validation-message';
        message.style.color = isValid ? 'green' : 'red';
        message.textContent = isValid ? 'correct' : `${field.placeholder} est incorrect`;

        field.parentNode.insertBefore(message, field.nextSibling);
    };

    const titleValidation = (value) => value.length >= 3;
    const destinationValidation = (value) => /^[a-zA-Z\s]{3,}$/.test(value);

    const titleField = document.getElementById('title');
    titleField.addEventListener('keyup', () => validateField('title', titleValidation));

    const destinationField = document.getElementById('destination');
    destinationField.addEventListener('keyup', () => validateField('destination', destinationValidation));


});

