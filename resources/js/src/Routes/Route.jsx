import { Route, Routes } from "react-router";
import Dashboard from "../Pages/Dashboard";
import Kds from "../Pages/Kds";
import Menu from '../Pages/MenuPg';
import Order from "../Pages/Order";

const RoutesLink = () => {
    <Route path="/admin">
        <Route  path="/home" element={<Dashboard />} />
        <Route exact path="/menu" element={<Menu />} />
        <Route exact path="/orders" element={<Order />} />
        <Route exact path="/kds" element={<Kds />} />
    </Route>
}

export default RoutesLink;