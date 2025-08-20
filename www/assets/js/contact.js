document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form.contact');
    const messageResult = document.getElementById('messageResult');
    const turnstileContainer = document.getElementById('turnstile-container');
    let turnstileLoaded = false;
    let token = '';

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
                        submitForm(); // envoyer le formulaire après validation
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
        const formData = new FormData(form);
        formData.append('cf-turnstile-response', token);

        fetch('/incoming/send', {
            method: 'POST',
            body: formData
        })
        .then(response => response.text())
        .then(data => {
            messageResult.innerHTML = data;
            if (data.includes('succès')) {
                form.reset();
                token = '';
                turnstile.reset();
            }
        })
        .catch(() => {
            messageResult.innerHTML = "Une erreur est survenue, veuillez réessayer.";
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
