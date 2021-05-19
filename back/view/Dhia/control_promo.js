const id_artiste = document.getElementById('id_artiste')
const id_produit = document.getElementById('id_produit')
const reduction = document.getElementById('reduction')
const nom = document.getElementById('nom')
const description = document.getElementById('description')
const form = document.getElementById('form')
const errorElement = document.getElementById('error')

form.addEventListener('submit', (e) => {
    let messages = []
    if (reduction.value === '' || reduction.value == null) {
      messages.push('Reduction est Obligatoire')
    }
  
    if (nom.value.length <= 6) {
      messages.push('nom doit etre plus que 6 chars')
    }
  
    if (messages.length > 0) {
      e.preventDefault()
      document.getElementById("error12").innerHTML =messages;
    }
  })
