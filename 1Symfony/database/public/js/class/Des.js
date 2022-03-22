export default class Des
{
    constructor(elDice, elThrowDice, elResult)
    {
        this.elDice = elDice;
        this.elThrowDice = elThrowDice;
        this.elResult = elResult;

        this.dice = '';
    }

    ev()
    {
        this.elThrowDice.addEventListener('click', () => this.render());
    }

    render()
    {
        this.dice = this.elDice.value;

        this.elResult.textContent = this.calcul();
    }

    calcul()
    {
        let total = 0;
        let diceList = this.dice.split('+');

        for (let dice in diceList) {
            let diceValues = diceList[dice].split('D');

            if (diceValues.length > 1) {
                for (let i = 0; i < diceValues[0]; i++) {
                    let rand = Math.random();
                    total += Math.floor(rand * diceValues[1]) + 1;
                }
            } else {
                total += diceValues[0];
            }
        }

        return total;
    }

}