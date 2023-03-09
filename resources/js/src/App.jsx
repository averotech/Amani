import SideBar from './components/SideBar';
import { Route, Routes } from 'react-router';
import RoutesLink from './Routes/Route';
import Dashboard from './Pages/Dashboard';
import Menu from './Pages/MenuPg';
import Order from './Pages/Order';
import Kds from './Pages/Kds';
import { Link } from 'react-router-dom';

const App = () => {
  return (
    <>

      <SideBar />
      <Routes>
        <Route exact path="/admin/home"  />
        <Route exact path="/admin/menu"  />
        <Route exact path="/admin/orders"  />
        <Route exact path="/admin/kds"  />
      </Routes>
    </>
  );
}

export default App;