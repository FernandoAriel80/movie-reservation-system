const routes = {
    "/": "/views/home.html",
    "/crear-productos": "/views/productos/create.html",
};

function navigateTo(path) {
    history.pushState({}, "", path);
    loadView(path);
}

function loadView(path) {
    const content = document.querySelector(".app"); // Ahora selecciona el div con class="app"
    const view = routes[path] || "/views/404.html";

    fetch(view)
        .then(response => response.text())
        .then(html => content.innerHTML = html)
        .catch(() => content.innerHTML = "<h1>Error al cargar la vista</h1>");
}

export function initRouter() {
    window.addEventListener("popstate", () => loadView(window.location.pathname));

    document.body.addEventListener("click", (event) => {
        if (event.target.tagName === "A") {
            event.preventDefault();
            navigateTo(event.target.getAttribute("href"));
        }
    });

    loadView(window.location.pathname);
}
