function verif()
{
   
   /*  a=document.formulaire.titre.value;
    if(a.length==0)
    {
alert ('titre vide');
    }  
 */

    if(document.formulaire.titre.value == "")  {
        alert("Veuillez entrer votre nom!");
        document.formulaire.titre.focus();
        return false;
       }
}

