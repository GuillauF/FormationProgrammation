- Qui a inventé React ?
Réponse : Jordan Walke, ingénieur logiciel chez Facebook

- Comment écrit-on l'importation de react ?
Réponse : import React from "react";

- A quoi sert ReactDom ?
Réponse : Le module react-dom permet de fournir des méthodes spécifiques au DOM
que l'on peut utiliser au niveau de la racine de notre projet

- Que faut-il pour que le JSX soit interpreté ?
Réponse : Il faut utiliser des balises ouvrantes et fermantes au niveau du return dans notre render
et mettre les variables entre accolades


    Il faut utiliser babel, sit l'installer ou ajouter la balise script pour les débutants mais sinon c'est ça

- Qu'est-ce qu'un composant ?
Réponse : les composants sont comme des fonctions JavaScript. Ils acceptent des objets,
appelées « props », et renvoient des éléments React décrivant ce qui doit apparaître à l’écran.

- Combien il y a de façon d'écrire un composant ?
Réponse : 3 façons : Les classes, les fonctions et les Hooks

- Qu'est qu'un props et écrivez un petit exemple d'utilisation ?
Réponse : Lorsque React rencontre un élément représentant un composant défini par l’utilisateur,
il transmet les attributs JSX et les enfants à ce composant sous la forme d’un objet unique.
Nous appelons cet objet « props ».

Exemple :

function Welcome(props) {
  return <h1>Bonjour, {props.name}</h1>;
}

const element = <Welcome name="Sara" />;
ReactDOM.render(
  element,
  document.getElementById('root')
);

- Dans quel composant peut-on écrire un état et donner un exemple d'écriture pour chaque
Réponse : Pour les Hooks, on utilise le composant useState, par exemple :
import React, {useState} from "react";

Pour les classes, on peut utiliser le composant didMount par exemple :
import React from 'react';
class App extends React.Component {
  constructor(props) {
    super(props);
  }
  componentDidMount() {
    setTimeout(() => {
    });
  }

    pour une classe, il faut créer l'état this.state.nomVariable = 'quelque chose'
    puis this.setState pour changer une valeur
    this.setState({nomVariable : 'quelque chose'})
    que tu as par ailleurs très bien utiliser dans ton métronnome  