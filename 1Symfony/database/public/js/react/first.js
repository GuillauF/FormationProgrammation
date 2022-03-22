let oTest = React.createElement('span', {className:'container-sm'}, `test` );
let oFirst = React.createElement('div', null, `Bonjour Alkas`, oTest);

ReactDOM.render(oFirst, document.getElementById('bonjourFirst'));


let bonjour = <h1 id="monId" className="gdgs">bonjour</h1>;
ReactDOM.render(bonjour, document.getElementById('bonjourSecond'));

let content = <React.Fragment>
    <h1>bonjour</h1>

    <div>image</div>
</React.Fragment>

ReactDOM.render(content, document.getElementById('heure'));


let time = new Date().toLocaleTimeString();

let pasContent = <>
    <h1>Bonjour, </h1>

    <div>Il est : {time}</div>
</>

ReactDOM.render(pasContent, document.getElementById('heure'));