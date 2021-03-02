import React, { Component } from "react";
import ReactDOM from "react-dom";

export default class Dashboard extends Component {
    constructor(props) {
        super(props);

        this.state = {
            porudzbine: []
        };
        this.loadPorudzbine();
    }

    loadPorudzbine() {
        axios
            .get("http://127.0.0.1:8000/porudzbina/pregledaj-porudzbine")
            .then(res => {
                const porudzbine = res.data.porudzbine;
                this.setState({ porudzbine });
            });
    }

    deleteHandler(id) {
        axios.delete("http://127.0.0.1:8000/porudzbina/delete?id=" + id);
    }

    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <table className="table table-dark">
                        <thead>
                            <tr>
                                <th>Ime i prezime</th>
                                <th>Email</th>
                                <th>Broj telefona</th>
                                <th>Adresa</th>
                                <th>Cvece</th>
                                <th>Akcije</th>
                            </tr>
                        </thead>
                        <tbody>
                            {this.state.porudzbine.map(p => {
                                return (
                                    <tr>
                                        <td>{p.ime_prezime}</td>
                                        <td>{p.email}</td>
                                        <td>{p.broj_telefona}</td>
                                        <td>{p.adresa}</td>
                                        <td>{p.proizvod.naziv_proizvoda}</td>
                                        <td>
                                            <button
                                                onClick={() =>
                                                    this.deleteHandler(p.id)
                                                }
                                                className="btn btn-danger"
                                            >
                                                Izbrisi
                                            </button>
                                        </td>
                                    </tr>
                                );
                            })}
                        </tbody>
                    </table>
                </div>
            </div>
        );
    }
}

if (document.getElementById("dashboard")) {
    ReactDOM.render(<Dashboard />, document.getElementById("dashboard"));
}
