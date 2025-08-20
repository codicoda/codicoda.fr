document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form.contact');
    const messageResult = document.getElementById('messageResult');
    const turnstileContainer = document.getElementById('turnstile-container');
    let turnstileLoaded = false;
    let token = '';
    let isSubmitting = false;

    if (!form || !messageResult) return;

    function loadTurnstile() {
        return new Promise((resolve, reject) => {
            if (turnstileLoaded) return resolve();

            const script = document.createElement('script');
            script.src = "https://challenges.cloudflare.com/turnstile/v0/api.js?onload=onTurnstileLoad";
            script.async = true;

            window.onTurnstileLoad = () => {
                turnstile.render('#turnstile-container', {
                    sitekey: window.TURNSTILE_KEY,
                    theme: 'dark',
                    callback: function (responseToken) {
                        token = responseToken;
                        messageResult.innerHTML = ''; // effacer les messages précédents
                    }
                });
                turnstileLoaded = true;
                resolve();
            };

            script.onerror = reject;
            document.head.appendChild(script);
        });
    }

    function submitForm() {
        if (isSubmitting) return;
        isSubmitting = true;

        const formData = new FormData(form);
        formData.append('cf-turnstile-response', token);

        fetch('/incoming/send', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            messageResult.innerHTML = data;

            if (data.includes('plus')) {
                form.reset();
                token = '';
                turnstile.reset('#turnstile-container');

                setTimeout(() => {
                    turnstileContainer.style.display = 'none';
                }, 500);
            }
        })
        .catch(() => {
            messageResult.innerHTML = "Une erreur est survenue, veuillez réessayer.";
        })
        .finally(() => {
            isSubmitting = false;
        });
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();

        if (!turnstileLoaded) {
            turnstileContainer.style.display = 'block';
            loadTurnstile().catch(() => {
                messageResult.innerHTML = "Erreur de chargement du captcha.";
            });
        } else if (!token) {
            messageResult.innerHTML = "Veuillez valider le captcha avant d'envoyer.";
        } else {
            submitForm();
        }
    });
});
