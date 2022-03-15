
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
    getDextoListTable()
}



function getDextoListTable() {
	let row = document.createElement("tr");
    dbInhalt.forEach(element => {
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