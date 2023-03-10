import './bootstrap';
import React from 'react';
import ReactDOM from "react-dom/client";
import App from './src/App';
import { BrowserRouter } from 'react-router-dom';

if (document.getElementById('app')) {

  const root = ReactDOM.createRoot(document.getElementById("app"));
  root.render(
    <React.StrictMode>
      <BrowserRouter>
        <App />
      </BrowserRouter>
    </React.StrictMode>
  );
}
