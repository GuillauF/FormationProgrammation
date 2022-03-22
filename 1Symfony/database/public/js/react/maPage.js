
function MonHeader()
{
    return <>
        <header>
            <nav>
                <ul>
                    <li><a href="/">accueil</a></li>
                    <li><a href="/contact">contact</a></li>
                    <li><a href="/faq">faq</a></li>
                </ul>
            </nav>
        </header>
    </>;
}

function MonMain({titre, children})
{
    return <main>
        <article>
            <h1>{titre}</h1>

            <div>{children}</div>
            <div>bolo bolo</div>
        </article>
    </main>;
}

function MonFooter()
{
    return <>
        <footer>copyleft</footer>
    </>;
}

function MaPage()
{
    return <>
        <MonHeader/>
        <MonMain titre="Bonne soirée à tous">blabla</MonMain>
        <MonFooter/>
    </>;
}

ReactDOM.render(<MaPage />,
    document.getElementById('maPage'));