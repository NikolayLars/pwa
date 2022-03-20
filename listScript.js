
//let db = new Dexie('Termine');
var db = new Dexie('Termine');
db.version(1).stores({
    termien: '++id, name, module, date, note'
});
const liste = document.getElementById("liste");
let dbInhalt;
getDexieList();
async function getDexieList() {



    if (navigator.onLine) {
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
    
    }

    
    dbInhalt = await db.termien.toArray();
    getDextoListTable();
}

window.addEventListener('online', getDextoListTable());

function getDextoListTable() {
    liste.innerHTML=`
    <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Date</th>
      <th scope="col">Subject</th>
      <th scope="col">Notes</th>
	  <th scope="col">Editing</th>
    </tr>
  </thead>
    `;
	let row = document.createElement("tr");
    try {
        dbInhalt.forEach(element => {
            console.log(element.datum);
            row.id=element.id;
            row.innerHTML = `
        <td>${element.name}</td>
                <td>${element.date}</td>
                <td>${element.module}</td>
                <td>${element.note}</td>
                <td><button type="button" onclick="deleteDexie(this)" class="btn btn-primary">Löschen</button></td>
        `;
        console.log(row.cloneNode(true));
        liste.appendChild(row.cloneNode(true));
        });
    } catch (error) {
        
    }
    
	
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

async function deleteDexie(e){
    let deleteId = e.parentNode.parentNode.id;

if(navigator.onLine) { 
    await fetch(`delete.php?id=${deleteId}`).then(location.reload());
} else {
    alert("Du musst online sein für diese Funktion");
}

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