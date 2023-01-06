let list = [...document.getElementById("list").children];
let view = [...document.getElementById("caroussel").children][0];
list.forEach(figure => {
    figure.addEventListener("focus", afficher);
});
function afficher(event) {
    view.setAttribute("src", [...event.target.children][0].dataset.src);
}