class Magicien extends Human
{
    test = 6;

    constructor()
    {
        // parent::__construct();
        super();
        this.blabla = "Gre gneu gneu";
    }

    lanceDesSorts()
    {
        this.test = 7;
        this.calculForce();
        console.log(this.test);
    }

    calculForce()
    {

    }

    static url()
    {
        // this.lanceDesSorts();
        console.log('methode static');
        super.url();

        return 'http://mon.url';
    }
}