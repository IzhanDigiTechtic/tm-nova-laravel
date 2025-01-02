function Stripe(publishableKey, url, token, lead_id) {
    let checkout = '';
    const stripe = Stripe(publishableKey);
    async function initialize(amount) {
        const fetchClientSecret = async () => {
            const response = await fetch(url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": token
                },
                body: JSON.stringify({ lead_id, amount })
            });

            if (!response.ok) {
                const error = await response.json();
                console.error(error);
                return null;
            }

            const { clientSecret } = await response.json();
            return clientSecret;
        };

        const clientSecret = await fetchClientSecret();
        if (!clientSecret) {
            console.error('Failed to fetch client secret.');
            return;
        }

        if (checkout != '') {
            checkout.destroy();
        }

        checkout = await stripe.initEmbeddedCheckout({
            clientSecret
        });

        // Mount Checkout
        checkout.mount('#checkout');
    }
}