const textWrapper = document.querySelector(".msN");
textWrapper.innerHTML = textWrapper.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
);
const textWrapper2 = document.querySelector(".msN2");
textWrapper2.innerHTML = textWrapper2.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
);
const textWrapper3 = document.querySelector(".msN3");
textWrapper3.innerHTML = textWrapper3.textContent.replace(
    /\S/g,
    "<span class='letter'>$&</span>"
);

setTimeout(() => {
    anime
        .timeline({
            loop: false
        })
        .add({
            targets: ".msN .letter",
            opacity: [0, 1],
            easing: "easeInQuad",
            duration: 550,
            delay: (el, i) => 100 * (i + 1)
        })
        .add({
            targets: ".msN2 .letter",
            opacity: [0, 1],
            // translateX: 0,
            easing: 'easeInOutQuad',
            duration: 1000,
            delay: (el, i) => 200 * (i + 1)
        })
        .add({
            targets: ".msN3 .letter",
            opacity: [0, 1],
            easing: "easeInQuad",
            duration: 750,
            delay: (el, i) => 100 * (i + 1)
        });
}, 2000);
