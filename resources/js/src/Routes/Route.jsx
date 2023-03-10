import { Route, Routes } from "react-router";
import Dashboard from "../Pages/Dashboard";
import Kds from "../Pages/Kds";
import Order from "../Pages/Order";
import MenuPg from './../Pages/MenuPg';

const RoutesLink = () => {
    <Routes>
        <Route path="/admin">
            <Route path="/home" element={<Dashboard />} />
            <Route exact path="/menu" element={<MenuPg />} />
            <Route exact path="/orders" element={<Order />} />
            <Route exact path="/kds" element={<Kds />} />
        </Route>
    </Routes>
}

export default RoutesLink;