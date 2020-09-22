const menuHamburger = document.querySelector(".drop-toggle-ham");
const menu = document.querySelector(".container");

function crossLines() {
    menuHamburger.classList.toggle("hamburger-menu-mobile-crossed");
    menu.classList.toggle("container-show-menu");
};
menuHamburger.addEventListener("click", crossLines);

const scrl = () => {








    // class ShowNodes {

    //     constructor(selectors, container, thisHeight) {

    //       this.selectors = selectors;
    //       this.container = container;
    //       this.thisHeight = thisHeight;


    //     }

    //     translateYup() {
    //       for (let i = 0; i < this.selectors.length; i++) {
    //         if (scrollY >= this.selectors[i].offsetTop - this.container.clientHeight / this.thisHeight) {
    //           this.selectors[i].style.setProperty("transform", `translateY(${0})`);
    //           this.selectors[i].style.setProperty("opacity", 1);
    //         }
    //       }
    //     }
    //   }




    if (scrollY > 885) {
        document.querySelector(".nav-wrap").style.setProperty("background-color", "rgb(134, 110, 148)");

    } else {
        document.querySelector(".nav-wrap").style.setProperty("background-color", "transparent");
    }



}

window.addEventListener("scroll", scrl)
