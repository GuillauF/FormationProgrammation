class Todo {
    /**
     *
     * @param el = c'est element dont on veut l'injecter
     */
    constructor(el)
    {
        this.el = el;

        this.oTodoPrompt;
        this.oTodoList;
        this.oTodoListDone;
    }

    render()
    {
        let oContainer = document.createElement('span');
        let oDivTodoPrompt = document.createElement('div');
        this.oTodoPrompt = document.createElement('input');
        let oBoutonAjouterUneTache = document.createElement('button');
        let oAFaire = document.createElement('p');
        this.oTodoList = document.createElement('ul');
        let oFait = document.createElement('p');
        this.oTodoListDone = document.createElement('ul');

        // oContainer.classList.add('container-sm');

        oDivTodoPrompt.classList.add('col-sm-8');
        this.oTodoPrompt.classList.add('form-control');

        oDivTodoPrompt.appendChild(this.oTodoPrompt);

        oBoutonAjouterUneTache.addEventListener('click', () => this.ajouterUneTache());
        oBoutonAjouterUneTache.classList.add("btn");
        oBoutonAjouterUneTache.classList.add("btn-primary");
        oBoutonAjouterUneTache.classList.add("mt-3");
        oBoutonAjouterUneTache.textContent = "Ajouter";

        oAFaire.textContent = "Tache.s à faire";
        oFait.textContent = "Tache.s faite.s";

        oContainer.appendChild(oDivTodoPrompt);
        oContainer.appendChild(oBoutonAjouterUneTache);
        oContainer.appendChild(oAFaire);
        oContainer.appendChild(this.oTodoList);
        oContainer.appendChild(oFait);
        oContainer.appendChild(this.oTodoListDone);

        this.el.appendChild(oContainer);

        // this.oTodoPrompt.focus();
    }

    ajouterUneTache()
    {
        let oNouveau = document.createElement("li");

        oNouveau.textContent = this.oTodoPrompt.value;
        oNouveau.appendChild(this.supprimeTache(oNouveau));
        oNouveau.appendChild(this.creationBtFait(oNouveau));
        this.oTodoList.appendChild(oNouveau);
    }

    supprimeTache(oNouveau)
    {
        let oSupprime = document.createElement("button");

        oSupprime.textContent = "supprimer";
        oSupprime.addEventListener('click', () => oNouveau.remove());

        oSupprime.classList.add("btn");
        oSupprime.classList.add("btn-danger");
        oSupprime.classList.add("ms-3");
        oSupprime.classList.add("me-3");

        return oSupprime;
    }

    creationBtFait(el)
    {
        let oFaitBoutton = document.createElement("button");

        oFaitBoutton.textContent = "Fait";
        oFaitBoutton.classList.add("btn");
        oFaitBoutton.classList.add("btn-success");
        oFaitBoutton.classList.add("ms-3");
        oFaitBoutton.addEventListener('click', () => this.oTodoListDone.appendChild(el));

        return oFaitBoutton;
    }
}