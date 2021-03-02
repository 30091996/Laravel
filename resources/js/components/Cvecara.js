import React, { Component } from "react";
import ReactDOM from "react-dom";
import Cvece from "./Cvece";

export default class Cvecara extends Component {
    constructor(props) {
        super(props);

        this.state = {
            cvecara: []
        };
        this.loadSveCvece();
    }

    loadSveCvece() {
        axios.get("http://127.0.0.1:8000/proizvod/get").then(res => {
            const proizvodi = res.data.proizvodi;
            this.setState({ cvecara: proizvodi });
        });
    }
    render() {
        return (
            <div className="container">
                <div className="row">
                    {this.state.cvecara.map(c => {
                        return (
                            <div className="col-4">
                                <div className="card">
                                    <img
                                        className="card-img-top"
                                        alt={"Slika cveca " + c.naziv_proizvoda}
                                    ></img>
                                    <div className="card-body">
                                        <Cvece key={c.id} c={c} />
                                    </div>
                                </div>
                            </div>
                        );
                    })}
                </div>
            </div>
        );
    }
}

if (document.getElementById("cvecara")) {
    ReactDOM.render(<Cvecara />, document.getElementById("cvecara"));
}
