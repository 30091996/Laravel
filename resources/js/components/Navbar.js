import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Navbar extends Component {
    render() {
        return (
            <div className="container">
                <div className="row">
                    <div className="col">
                        <a
                            href="http://127.0.0.1:8000/"
                            className="btn btn-primary btn-block"
                        >
                            Cvecara
                        </a>
                    </div>
                    <div className="col">
                        <a
                            href="http://127.0.0.1:8000/dashboard"
                            className="btn btn-primary btn-block"
                        >
                            Dashboard
                        </a>
                    </div>
                </div>
            </div>
        );
    }
}

if (document.getElementById("navbar")) {
    ReactDOM.render(<Navbar />, document.getElementById("navbar"));
}
