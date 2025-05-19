import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();


const logoSlider = document.getElementById('logoSlider');
const imagePath = 'assets/whiteTransparentLogo.svg';
const logosToShow = 4;

// Add logos twice (duplicate set for seamless loop)
for (let i = 0; i < logosToShow * 2; i++) {
    const img = document.createElement('img');
    img.src = imagePath;
    img.alt = 'Logo';
    img.className = 'w-[298px] h-[72px] object-contain';
    logoSlider.appendChild(img);
}
