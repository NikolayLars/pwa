let installEvent = null;
let installButton = document.getElementById("install");
let enableButton = document.getElementById("enable");

enableButton.addEventListener("click", function() {
    this.disabled = true;
    startPwa(true);
});

function updatePage() {
    fetch(window.location.href).then(function(response) {
        return response.text();
    }).then(function(html) {
        let newDocument = (new DOMParser()).parseFromString(html, "text/html");
        document.querySelector("div").innerHTML = newDocument.querySelector("div").innerHTML;
    });
    setTimeout(updatePage, 900);
}

updatePage();

if(localStorage["pwa-enabled"]) {
    startPwa();
}

function startPwa(firstStart) {
    localStorage["pwa-enabled"] = true;

    if(firstStart) {
        location.reload();
    }

    window.addEventListener("load", () => {
        navigator.serviceWorker.register("/PWA-2022/service-worker.js")
        .then(registration => {
            console.log("Service Worker is registered", registration);
            enableButton.parentNode.remove();
        })
        .catch(err => {
            console.error("Registration failed:", err);
        });
    });

    window.addEventListener("beforeinstallprompt", (e) => {
        e.preventDefault();
        console.log("Ready to install...");
        installEvent = e;
        document.getElementById("install").style.display = "initial";
    });

    setTimeout(cacheLinks, 500);

    function cacheLinks() {
        caches.open("pwa").then(function(cache) {
            let linksFound = [];
            document.querySelectorAll("a").forEach(function(a) {
                linksFound.push(a.href);
            });

            cache.addAll(linksFound);
        });
    }

    if(installButton) {
        installButton.addEventListener("click", function() {
            installEvent.prompt();
        });
    }
}

let db = new Dexie('Termine');

    // Declare tables, IDs and indexes
    db.version(1).stores({
        termien: 'id, name, module, date, note'
    });

/*
const termien = await db.termien
.toArray();

await db.termien.add({
    name: 'test',
    module: 'test modul',
    date: '01.01.2015',
    note: 'nur text'
});
*/

//get dexie and apend table