import AOS from 'aos';
import 'aos/dist/aos.css';

AOS.init({
    duration: 500,
    easing: 'ease-in-out',
    once: true
});

//Text circle
const text = document.querySelector(".text");
text.innerHTML = text.innerText
    .split("")
    .map(
        (char, i) => `<span style="transform:rotate(${i * 10.3}deg)">${char}</span>`
    )
    .join("");