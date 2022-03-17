
//let db = new Dexie('Termine');
var db = new Dexie('Termine');
db.version(1).stores({
    termien: '++id, name, module, date, note'
});
const liste = document.getElementById("liste");
let dbInhalt;
getDexieList();
async function getDexieList() {
    dbInhalt = await db.termien.toArray();
    db.termien.clear();

    await fetch("getTermine.php").then(response => response.json()).then(data => data.forEach(async element => {
        await db.termien.add({
            name: element.name,
            module: element.modul,
            date: element.datum,
            note: element.note
        });
    }));
        


    getDextoListTable();
}



function getDextoListTable() {
	let row = document.createElement("tr");
    dbInhalt.forEach(element => {
        console.log(element.datum);
        row.id=element.id;
        row.innerHTML = `
	<td>${element.name}</td>
			<td>${element.date}</td>
			<td>${element.module}</td>
			<td>${element.note}</td>
			<td><button type="button" class="btn btn-primary">Bearbeiten</button> <input type="checkbox" name="" id=""> <button type="button" class="btn btn-primary">Löschen</button></td>
	`;
    console.log(row.cloneNode(true));
    liste.appendChild(row.cloneNode(true));
    });
	
}

async function add() {
    let name = document.getElementById("name").value;
    let notitzen = document.getElementById("notitzen").value;
    let datum = document.getElementById("datum").value;
    let modul = document.getElementById("modul").value;

    notitzen = notitzen.replace(/\s/g, '_');
    modul = modul.replace(/\s/g, '_');
    name = name.replace(/\s/g, '_');
    console.log(name + " " + notitzen + " " + datum + " " + modul);
    
    
    await fetch(`setTermin.php?name=${name}&datum=${datum}&note=${notitzen}&modul=${modul}`).then(response => response.text()).then(data =>
        getDexieList());
    
}
