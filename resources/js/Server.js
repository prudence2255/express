/* global context, dispatch */
import Index from './components/Index';
import React from 'react';
import ReactDOMServer from 'react-dom/server';
import { StaticRouter } from 'react-router-dom';

// Compile an initial state
const { packages } = context;

const html = ReactDOMServer.renderToString(
    <div>
        <StaticRouter location={context.url}>
            <Index packages={packages} />
        </StaticRouter>
    </div>
);

dispatch(html);
