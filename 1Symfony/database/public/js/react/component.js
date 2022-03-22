function Header()
{
    return <>

    </>;
}

function Contenu({value})
{
    return <div>{value}</div>;
}

function Footer({val})
{
    return <div>{val}</div>;
}

function Body()
{
    return <>
        <Header maPropriete="Le header tout moche" />

        <br />

        <Contenu value =
        "Ut enim benefici liberalesque sumus, non ut exigamus gratiam (neque enim beneficium faeneramur sed natura propensi
        ad liberalitatem sumus), sic amicitiam non spe mercedis adducti sed quod omnis eius fructus in ipso amore inest,
        expetendam putamus."
        />
        <br />
        <Contenu value =
        "Superatis Tauri montis verticibus qui ad solis ortum sublimius attolluntur, Cilicia spatiis porrigitur late distentis
        dives bonis omnibus terra, eiusque lateri dextro adnexa Isauria, pari sorte uberi palmite viget et frugibus minutis,
        quam mediam navigabile flumen Calycadnus interscindit."
        />
        <br />
        <Contenu value =
        "Novitates autem si spem adferunt, ut tamquam in herbis non fallacibus fructus appareat, non sunt illae quidem
        repudiandae, vetustas tamen suo loco conservanda; maxima est enim vis vetustatis et consuetudinis. Quin in ipso equo,
        cuius modo feci mentionem, si nulla res impediat, nemo est, quin eo, quo consuevit, libentius utatur quam intractato
        et novo. Nec vero in hoc quod est animal, sed in iis etiam quae sunt inanima, consuetudo valet, cum locis ipsis
        delectemur, montuosis etiam et silvestribus, in quibus diutius commorati sumus."
        />

        <br />

        <Footer val="Le footer tout moche - CopyLeft" />
        </>;
}

ReactDOM.render(<Body/>,
    document.getElementById('maPageNulle'));

