import React, { Component } from "react";
import ReactDOM from "react-dom";
import _ from "lodash";

//load the JSON data
const events = JSON.parse(window.EVENTS);

class Events extends Component {

    constructor(props) {
        super(props);
        this.state = {
            page: 0,
            ...this.props.events[0]
        };

        this.prev = this.prev.bind(this);
    }

    prev = () => {
        const newPage = Math.max(0, this.state.page - 1);

        this.setState({
            page: newPage,
            ...this.props.events[newPage]
        });
    }

    next = () => {
        const newPage = Math.min(this.props.events.length - 1, this.state.page + 1);

        this.setState({
            page: newPage,
            ...this.props.events[newPage]
        });
    }

    render() {

        //display it
        return (
            <React.Fragment>
                <div>
                    <button onClick={this.prev}>PREV</button>
                    <button onClick={this.next}>NEXT</button>
                </div>
                <div>
                    <table class="vertical-table">
                        <tr>
                            <th scope="row">Page</th>
                            <td>{this.state.page}</td>
                        </tr>
                        <tr>
                            <th scope="row">Title</th>
                            <td>{this.state.title}</td>
                        </tr>
                        <tr>
                            <th scope="row">Created</th>
                            <td>{this.state.created}</td>
                        </tr>
                        <tr>
                            <th scope="row">Modified</th>
                            <td>{this.state.modified}</td>
                        </tr>
                    </table>
                    <div class="row">
                        <h4>Image using React</h4>
                        <img width="400" src={this.state.image} />
                    </div>
                    <div class="row">
                        <h4>Description using React</h4>
                        <div>{this.state.description}</div>
                    </div>
                </div>
            </React.Fragment>
        );
    }
}

ReactDOM.render(<Events events={events} />, document.getElementById("root"));
