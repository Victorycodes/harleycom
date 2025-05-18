import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



const logoGrid = document.getElementById('logoGrid');
const imagePath = 'assets/whiteTransparentLogo.svg';

for (let i = 0; i < 4; i++) {
    const img = document.createElement('img');
    img.src = imagePath;
    img.alt = '';

    // Tailwind: small size on mobile, larger on md+
    img.class = 'w-[200px] h-[60px] lg:w-[298px] lg:h-[72px]';

    // Hide last 2 on mobile, show on md+
    if (i >= 2) {
        img.classList.add('hidden', 'md:inline');
    }

    logoGrid.appendChild(img);
}
