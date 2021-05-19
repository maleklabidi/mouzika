const nom = document.getElementById('nom')
const emplacement = document.getElementById('emplacement')
const capacite = document.getElementById('capacite')
const artiste = document.getElementById('artiste')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (capacite.value === '' || capacite.value == null) {
      messages.push('capacite est Obligatoire')
    }
  
    if (nom.value.length <= 6) {
      messages.push('nom doit etre plus que 6 chars')
    }
  
    if (messages.length > 0) {
      e.preventDefault()
      document.getElementById("error12").innerHTML =messages;
    }
  })
