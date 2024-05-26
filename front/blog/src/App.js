import React from "react";
import Login from "./componments/Login";
import Inscri from "./componments/inscri";
import Home from "./componments";
//import './style.sass';
import "./App.scss";

import { createBrowserRouter, RouterProvider } from "react-router-dom";
const Route = createBrowserRouter([
  {
    path: "/Login",
    element: <Login />,
  },
  {
    path: "/Inscri",
    element: <Inscri />,
  },
  {
    path: "/index",
    element: <Home />,
  },
]);
function App() {
  return (
    <div className="App">
      <RouterProvider router={Route} />
    </div>
  );
}

export default App;
