import * as FaIcons from "react-icons/fa";
import {HiOutlineServer } from "react-icons/hi";


export const SidebarData=[
    {
        title: "Dashboard",
        path: "admin/home",
        icon: <FaIcons.FaHome  color="#6578e4"/>,
        
      },
      {
        title: "Menu",
        path: "admin/menu",
        icon: <HiOutlineServer color="#f6beca"/>,
      },
      {
        title: "Orders",
        path: "admin/orders",
        icon: <HiOutlineServer color="#7f7f7f"/>,
      },
      {
        title: "Kds",
        path: "admin/kds",
        icon: <HiOutlineServer color="#7385e7"/>,
      },
  
]