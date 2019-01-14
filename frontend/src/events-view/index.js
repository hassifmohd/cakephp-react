import React, { Component } from "react";
import ReactDOM from "react-dom";

//load the JSON data
const event = JSON.parse(window.EVENT);

class Event extends Component {

    constructor(props) {
        super(props);
        this.state = {};
    }

    render() {

        //display it
        return (
            <React.Fragment>
                <table class="vertical-table">
                    <tr>
                        <th scope="row">Title</th>
                        <td>{this.props.event.title}</td>
                    </tr>
                    <tr>
                        <th scope="row">Created</th>
                        <td>{this.props.event.created}</td>
                    </tr>
                    <tr>
                        <th scope="row">Modified</th>
                        <td>{this.props.event.modified}</td>
                    </tr>
                </table>
                <div class="row">
                    <h4>Image using React</h4>
                    <img width="400" src={this.props.event.image} />
                </div>
                <div class="row">
                    <h4>Description using React</h4>
                    <div>{this.props.event.description}</div>
                </div>
            </React.Fragment>
        );
    }
}

ReactDOM.render(<Event event={event} />, document.getElementById("root"));
