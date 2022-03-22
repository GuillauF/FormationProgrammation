// console.log(document.querySelectorAll('form'));
let oForm = document.querySelector('form');
let oSexe = document.getElementsByName('sexe');
oSexe[0].checked = true;

oForm.addEventListener('submit', checkBeforeSubmit);

function checkBeforeSubmit(e)
{
    e.preventDefault(); // annule le comportement par défaut

    let oBiere = document.getElementById('biere');
    // oBiere.selectedIndex = 2;
    // for(let i = 0; i < oBiere.length; i++) {
    //     if("leffe" === oBiere.options[i].value) {
    //         oBiere.options[i].selected = true;
    //         break;
    //     }
    // }

    for (let i in oBiere) {
            if("leffe" === oBiere.options[i].value) {
                oBiere.options[i].selected = true;
                break;
            }
    }

    oBiere.selectedIndex = 2;

    // document.getElementById('biereResult').innerHTML = `Biere = ${oBiere.value}<br>index selectionné : ${oBiere.selectedIndex}`;


    let oCocktail = document.getElementById('cocktail');

    // let cocktail = '';
    // for(let i = 0; i < oCocktail.length; i++) {
    //     if(oCocktail.options[i].selected) {
    //         oCocktail.options[i].selected = false;
    //     } else {
    //         oCocktail.options[i].selected = true;
    //     }
    // }
    Array.from(oCocktail.options).map((el) => {
          // if (true === el.selected) {
          //     el.selected = false
          // } else {
          //     el.selected = true;
          // }

        el.selected = !el.selected;
      });

    // document.getElementById('cocktailResult').innerHTML = `cocktail = ${cocktail}`;

    // let tmp = '';
    let oSexe = document.getElementsByName('sexe');
    // oSexe[0].checked = true;

    if(oSexe[0].checked) { // homme
        oSexe[1].checked = true;
    } else { // femme
        oSexe[0].checked = true;
    }

    // document.getElementById('choixSexe').innerHTML = `sexe = ${tmp}`;

    // tmp = '';
    let oVehicule = document.getElementsByName('vehicule[]');
    Array.from(oVehicule).map((el) => {
        el.checked = el.checked ? false : true;
    });

    // document.getElementById('choixVehicule').innerHTML = `vehicule = ${tmp}`;

    ajax();
}

function ajax()
{
    var oFormData = new FormData(oForm);
    oFormData.append('test', 'formulaire de test');

    fetch("/jj/traiteajax", {
        method: 'post',
        body: oFormData
    }).then((reponse) => { // on vérifie la réponse donnée du site
            if(reponse.ok) {
                reponse.json().then((monJson)=>{
                    document.getElementById("messageErreur").innerHTML = monJson;
                    console.log(monJson);
                });// on recupere les données au format json si tout va bien
            }
    }).catch((e) => { // en cas d'une erreur interne
        alert(e.message);
    });
}