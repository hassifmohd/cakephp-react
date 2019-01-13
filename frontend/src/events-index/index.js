import React, { Component } from "react";
import ReactDOM from "react-dom";
import _ from "lodash";

//load the JSON data
const events = JSON.parse(window.EVENTS);

class Events extends Component {

    constructor(props) {
        super(props);
        this.state = {};
    }

    render() {

        //show an event
        const showEvent = (eventData) => {
            return (
                <div>
                    <div><h2>{eventData.title}</h2></div>
                    <div><img width="300" src={eventData.image} /></div>
                    <div>{eventData.description}</div>
                    <div>Last updated: {eventData.modified}</div>
                    <div><a href={`events/view/${eventData.id}`}>VIEW</a></div>
                </div>
            )
        }

        //loop events
        let eventBlock = [];
        _.forEach(this.props.events, (value) => {
            eventBlock.push(showEvent(value))
        });

        //display it
        return (
            <React.Fragment>
                {eventBlock}
            </React.Fragment>
        );
    }
}

ReactDOM.render(<Events events={events} />, document.getElementById("root"));
