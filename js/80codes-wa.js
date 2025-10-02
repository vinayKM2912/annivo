/**
 * 80codes WhatsApp Widget SDK
 * A lightweight SDK for integrating WhatsApp chat widgets
 */

(function(window) {
    'use strict';

    // SDK Configuration
    const EightyCodesWA = {
        config: {
            phone: '',
            text: '',
            mode: 'floating',
            color: '#25D366',
            position: 'bottom-right'
        },

        /**
         * Initialize the SDK with user configuration
         * @param {Object} options - Configuration options
         */
        init: function(options) {
            // Merge user options with defaults
            this.config = Object.assign({}, this.config, options);

            // Validate phone number
            if (!this.config.phone) {
                console.error('EightyCodesWA: Phone number is required');
                return;
            }

            // Initialize based on mode
            if (this.config.mode === 'floating') {
                this.createFloatingWidget();
            }
        },

        /**
         * Create and inject the floating widget into the DOM
         */
        createFloatingWidget: function() {
            // Create floating button container
            const button = document.createElement('div');
            button.id = 'wa-floating-widget';
            button.setAttribute('role', 'button');
            button.setAttribute('aria-label', 'Chat on WhatsApp');
            button.style.cssText = `
                position: fixed;
                bottom: 20px;
                right: 20px;
                width: 60px;
                height: 60px;
                background-color: ${this.config.color};
                border-radius: 50%;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
                cursor: pointer;
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            `;

            // WhatsApp icon SVG
            button.innerHTML = `
                <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M16 0C7.164 0 0 7.164 0 16c0 2.826.736 5.586 2.134 8.006L.078 31.922l8.084-2.028A15.93 15.93 0 0016 32c8.836 0 16-7.164 16-16S24.836 0 16 0z" fill="#fff"/>
                    <path d="M25.36 22.36c-.44 1.24-2.18 2.274-3.558 2.574-.942.2-2.168.36-6.294-1.352-5.276-2.188-8.678-7.54-8.942-7.888-.254-.348-2.118-2.82-2.118-5.378 0-2.558 1.34-3.816 1.816-4.336.476-.52 1.038-.65 1.386-.65.348 0 .696.006.998.018.32.014.748-.122 1.17.892.434 1.044 1.486 3.626 1.616 3.888.13.262.218.566.044.914-.174.348-.26.566-.522.87-.26.304-.548.678-.784.91-.26.262-.532.544-.228.1.304.566 1.352 2.23 2.902 3.612 1.994 1.778 3.672 2.332 4.194 2.594.522.262.826.218 1.13-.13.304-.348 1.308-1.526 1.656-2.05.348-.522.696-.436 1.174-.262.478.174 3.036 1.432 3.558 1.694.522.262.87.392 1 .61.13.218.13 1.262-.308 2.502z" fill="${this.config.color}"/>
                </svg>
            `;

            // Hover effects
            button.addEventListener('mouseenter', function() {
                button.style.transform = 'scale(1.1)';
                button.style.boxShadow = '0 6px 20px rgba(0, 0, 0, 0.25)';
            });

            button.addEventListener('mouseleave', function() {
                button.style.transform = 'scale(1)';
                button.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
            });

            // Click handler
            const self = this;
            button.addEventListener('click', function() {
                self.sendWhatsApp({
                    phone: self.config.phone,
                    text: self.config.text
                });
            });

            // Inject into DOM
            if (document.readyState === 'loading') {
                document.addEventListener('DOMContentLoaded', function() {
                    document.body.appendChild(button);
                });
            } else {
                document.body.appendChild(button);
            }
        },

        /**
         * Open WhatsApp chat with pre-filled message
         * @param {Object} data - Chat data (phone, text)
         */
        sendWhatsApp: function(data) {
            const phone = data.phone || this.config.phone;
            const text = data.text || this.config.text;

            if (!phone) {
                console.error('EightyCodesWA: Phone number is required');
                return;
            }

            // Format phone number (remove non-numeric characters)
            const formattedPhone = phone.replace(/\D/g, '');

            // Encode message text
            const encodedText = encodeURIComponent(text);

            // Build WhatsApp URL
            const whatsappURL = `https://wa.me/${formattedPhone}?text=${encodedText}`;

            // Open in new window
            window.open(whatsappURL, '_blank', 'noopener,noreferrer');
        }
    };

    // Expose SDK to global scope
    window.EightyCodesWA = EightyCodesWA;

})(window);