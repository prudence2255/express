import React from 'react';
import ReactDOM from 'react-dom';

function Index(props) {
    // Grab the state from a global variable injected into the server-generated HTML
    const { packages } = window.__PRELOADED_STATE__;

// Allow the passed state to be garbage-collected
    delete window.__PRELOADED_STATE__;

    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card">
                        <div className="card-header">Index Component</div>

                        <div className="card-body">I'm an example component!</div>
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Index;

if (document.getElementById('app')) {
    ReactDOM.render(<Index />, document.getElementById('app'));
}
