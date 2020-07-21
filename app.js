const items = document.querySelectorAll('.item')
const links = document.querySelectorAll('.link') //tra todos los elementos de la clase link guarda en un array
const next = document.getElementById('next')
const prev = document.getElementById('prev')

links.forEach(e => { // iterar en cada boton- en cada evento de click
	e.addEventListener('click', async event => { //async esat funcion controla la asincronia
		event.preventDefault()

		const active = document.querySelector('.active')
		const activeId = parseInt(active.id)

		console.log(e.id)
		let id = e.id
		let node = e 

		if(id === 'next') {
			id = activeId + 1
			node = document.getElementById(id)
		}
		if(id === 'prev') {
			id = activeId - 1
			node = document.getElementById(id)
		}

		console.log(id)
		await getList(id) // espera a que se termine el evento - para que espere la funcion tiene que ser promesa
		
		active.classList.remove('active')
		node.classList.add('active')

		if (id === 1) prev.classList.add('disable')
			else prev.classList.remove('disable')

		if(id === 4) next.classList.add('disable')
			else next.classList.remove('disable')
	})
})

function getList (page) {
	return new Promise((resolve, reject) => { // rechazo-reject---- retorna una nueva promesa (dos estados exitosa o rechaza)
		console.log("probando")
		fetch("http://localhost/PRogra-Teoria/API.php?page=" + page) //promesa (traer los archivos) - funcion asincrona
		.then(response => response.json()) //array de json (objetos)--- estamos pasando de json a objetos
		.then(response => { //procesando json convertidos a objetos
			console.log(response)
			items.forEach((e, i) => { //pintamos con un bucle for de cada uno de los elemtos items y se guarda en la variable e y el indice en la variable i
			  	e.innerHTML = response[i].ID + '. ' + response[i].lista
			})
			resolve()//promesa resuelta
		})
		.catch(error => console.log("ha ocurrido un error"))//error de fetch
		console.log("fin de prueba")
	})
}
