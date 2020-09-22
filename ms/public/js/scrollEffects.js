const rotatingSquares = document.querySelectorAll(".bg-sq");


rotatingSquares.forEach((squareItem) => {

    window.addEventListener("scroll", () => {
        const scrolled = scrollY / 10;
        squareItem.style.setProperty("transform", `rotate(${scrolled}deg)`)

    })

})



window.addEventListener("scroll", () => {

    const winScroll = document.body.scrollTop || document.documentElement.scrollTop;
    const height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
    let scrolled = (winScroll / height) * 100;
    const sections = document.querySelectorAll(".div-container");
    console.log(height)
    const s = scrollY;
    const sections_wrap = document.querySelector(".show-box");

    for (let i = 0; i < sections.length; i++) {
        if (s >= sections[i].offsetTop - sections_wrap.clientHeight) {

            sections[i].classList.add("section-visible-flex");
        } else {
            sections[i].classList.remove("section-visible-flex");
        }
    }

    const scrollPoint = document.querySelector(".point");


    scrollPoint.style.setProperty("top", `${scrolled - 0.25}%`)

})




const arrowUp = document.querySelector(".arrow-back-top");


arrowUp.addEventListener("click", () => {
    window.scrollTo({
        top: 0,
      
        behavior: 'smooth'
    })
})


// showSections()
// function loop() {
//     window.addEventListener("scroll", () => {
//         sections.forEach(function (element) {
//             if (isElementInViewport(element)) {
//                 // element.classList.add('is-visible');
//                 console.log("ok")
//             } else {
//                 // element.classList.remove('is-visible');
//                 console.log("ooooo")
//             }
//         });
//     })

// }
// scroll(loop);
