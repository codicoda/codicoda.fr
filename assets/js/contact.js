document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form.contact');
    const messageResult = document.getElementById('messageResult');

    if (!form || !messageResult) return; // Ajout de la vérification

    form.addEventListener('submit', function(e) {
        e.preventDefault();

        const formData = new FormData(form);

        fetch('incoming/send', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            messageResult.innerHTML = data;
            if (data.includes('succès')) {
                form.reset();
                const widgetElement = document.getElementById('turnstile-widget');
                turnstile.reset(widgetElement);
            }
        })
        .catch(error => {
            messageResult.innerHTML = "Une erreur est survenue, veuillez réessayer.";
        });
    });
});
