import React, {Component} from 'react';
import ReactDOM from "react-dom";

import Hook from "./module/Hook";
import Calc from "./module/Calc";
import TodoList from "./module/TodoList";
import Metronome from "./module/Metronome";

class App extends Component {

    constructor(props) {
        super(props);
        this.state = {
          name: 'React'
        };
    }

    render() {
        return (
            <div>
                <Hook />
            <div>
                <Calc />
            </div>

            <div>
                <TodoList />
            </div>
                <div>
                    <Metronome />
                </div>
            </div>
        );
    }
}

ReactDOM.render(<App />, document.getElementById('firstHook'),

);
