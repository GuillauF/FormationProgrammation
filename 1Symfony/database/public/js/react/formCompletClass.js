class FormComplet extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            favoriteFlavor: "fraise",
            fullName: ""
        };
    }
    handleSubmitForm(event) {
        alert("Favorite Flavor: " + this.state.favoriteFlavor);
        alert("Full Name: " + this.state.fullName);
        event.preventDefault();
    }
    handleChange(event) {
        let value = event.target.value;
        this.setState({
            favoriteFlavor: value,
            fullName: value

        });
    }
    render() {
        return (
            <form onSubmit={event => this.handleSubmitForm(event)}>
                <label>
                    Full Name:
                    <input
                        type="text"
                        value={this.state.fullName}
                        onChange={event => this.handleChange(event)}
                    />
                </label>

                <p>Pick your favorite flavor:</p>
                <select
                    value={this.state.favoriteFlavor}
                    onChange={event => this.handleChange(event)}>
                    <option value="fraise">Fraise</option>
                    <option value="gingembre">Gingembre</option>
                    <option value="carotte">Carotte</option>
                    <option value="tabasco">Tabasco</option>
                </select>
                <input type="submit" value="Submit" />
                <p>{this.state.fullName}</p>

            </form>
        );
    }
}

ReactDOM.render(<FormComplet/>,
    document.getElementById('cocktailResult'));
