
// -----PEGUEI TUDO FODACI-----

const pweb = document.querySelector("[data-pweb]");
const pwebLinks = document.querySelector("[data-pweb-links]");

const paw = document.querySelector("[data-paw]");
const pawLinks = document.querySelector("[data-paw-links]");

const marketing = document.querySelector("[data-marketing]");
const marketingLinks = document.querySelector("[data-marketing-links]");

const appweb = document.querySelector("[data-appweb]");
const appwebLinks = document.querySelector("[data-appweb-links]");



// -----FUNÇÃO PARA TORNAR VISÍVEL OU INVISÍVEL-----

function selectItem(item, box) {
    item.addEventListener("click", () => {
        if (item.classList.contains("selected")) {
            item.classList.remove("selected");
        } else {
            item.classList.add("selected"); 
        }
    })
}



// -----UTILIZANDO A FUNÇÃO EM CADA ITEM-----

selectItem(pweb, pwebLinks);
selectItem(paw, pawLinks);
selectItem(marketing, marketingLinks);
selectItem(appweb, appwebLinks);
