

var db = new Dexie('Termine');
db.version(1).stores({
    termien: '++id, name, module, date, note'
});

let dbInhalt;
getDexieList();
async function getDexieList() {
    db.termien.clear();
    

    await fetch("getTermine.php").then(response => response.json()).then(data => data.forEach(async element => {
        await db.termien.add({
            id: element.ID,
            name: element.name,
            module: element.modul,
            date: element.datum,
            note: element.note
        });
    }));
    dbInhalt = await db.termien.toArray();
    getDextoCalender();
}



function getDextoCalender() {
    
	let termienFeld = document.createElement("a");
    termienFeld.classList.add("fc-day-grid-event", "fc-h-event", "fc-event", "fc-start", "fc-end", "fc-draggable", "fc-resizable");

    dbInhalt.forEach(element => {
        termienFeld.innerHTML = `
        <div class="fc-content"> <span class="fc-title">${element.name}</span></div><div class="fc-resizer fc-end-resizer"></div>
	`;

    document.querySelectorAll(`[data-date="${element.date}"]`)[1].appendChild(termienFeld.cloneNode(true));
    });
	console.log("ok");
}

async function add() {
    let name = document.getElementById("inputEmail3").value;
    let notitzen = document.getElementById("inputNotes").value;
    let datum = document.getElementById("inputDate").value;
    let modul = document.getElementById("inputSubject").value;

    notitzen = notitzen.replace(/\s/g, '_');
    modul = modul.replace(/\s/g, '_');
    name = name.replace(/\s/g, '_');
    console.log(name + " " + notitzen + " " + datum + " " + modul);
    
    
    await fetch(`setTermin.php?name=${name}&datum=${datum}&note=${notitzen}&modul=${modul}`).then(response => response.text()).then(location.reload());
    
    
}

window.addEventListener('online', notifyMe);
function notifyMe() {
    if (Notification.permission !== 'granted')
     Notification.requestPermission();
    else {
        console.log('test');
     let notification = new Notification('Hey, es koennte Updates geben!', {
      icon: 'http://cdn.sstatic.net/stackexchange/img/logos/so/so-icon.png',
      body: 'Du bist wieder Online!',
     });
     notification.onclick = function() {
      location.reload();
     };
    }
   }