export function init() {
    const nav = document.querySelector("#mainnav");
    const list = nav.querySelector("ul");
    const button = nav.querySelector("button");

    //Toggle aria-expanded attribute
    button.addEventListener("click", (e) => {
        if (button.classList.contains("closed")) {
            button.classList.add("open");
            button.classList.remove("closed");
        } else {
            button.classList.add("closed");
            button.classList.remove("open");
        }
    });

    //Hide list on keydown Escape
    nav.addEventListener("keyup", (e) => {
        if (button.classList.contains("closed")) {
            button.classList.add("open");
            button.classList.remove("closed");
        } else {
            button.classList.add("closed");
            button.classList.remove("open");
        }
    });

    // //Toggle aria-expanded attribute
    // button.addEventListener("click", (e) => {
    //     if (button.getAttribute("aria-expanded") === "false") {
    //         button.setAttribute("aria-expanded", true);
    //     } else {
    //         button.setAttribute("aria-expanded", false);
    //     }
    // });

    // //HIde list on keydown Escape
    // nav.addEventListener("keyup", (e) => {
    //     if (e.code === "Escape") {
    //         button.setAttribute("aria-expanded", false);
    //     }
    // });
}
