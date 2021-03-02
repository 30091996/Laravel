import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Cvece extends Component {
    constructor(props) {
        super(props);

        this.state = {
            cvece: this.props.c
        };
    }

    render() {
        return [
            <h5 align="center">{this.state.cvece.naziv_proizvoda}</h5>,

            <a
                href={`http://127.0.0.1:8000/porudzbina?id=${this.state.cvece.id}&na_lageru=${this.state.cvece.na_lageru}`}
                className="btn btn-success btn-block"
            >
                Poruci
            </a>
        ];
    }
}

if (document.getElementById("cvece")) {
    ReactDOM.render(<Cvece />, document.getElementById("cvece"));
}
