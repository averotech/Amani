import { Route, Routes } from 'react-router';
import SideBarltr from './components/SideBarltr';
import Dashboard from './Pages/Dashboard';
import MenuPg from './Pages/MenuPage/MenuPg';
import Order from './Pages/Order';
import Kds from './Pages/Kds';
import SideBarModel from './components/SideBarModel';
import EditMenuPage from './Pages/MenuPage/EditMenuPage';


const App = () => {
  return (
    <>
      <SideBarModel />
      <div className='grid grid-cols-12	gap-4'>
        <div className='hidden md:flex md:col-span-3 lg:col-span-2'>
          <SideBarltr />
        </div>
        <div className='relative col-span-12 md:col-span-9 lg:col-span-10 bg-[#696be4]' style={{ height: '330px' }}>
          <Routes>
            <Route path="admin/home" element={<Dashboard />} />
            <Route exact path="admin/menu" element={<MenuPg />} />
            <Route exact path="admin/menu/:id" element={<EditMenuPage />} />

            <Route exact path="/admin/orders" element={<Order />} />
            <Route exact path="/admin/kds" element={<Kds />} />
          </Routes>
        </div>
      </div>
    </>
  );
}

export default App;