import React from "react";
import { NavLink } from "react-router-dom";
import { SidebarData } from "../data/SideBardata";

const SideBarltr = () => {
  const activeLink = 'hover:bg-slate-100	  mt-2 pl-7 w-full h-14 flex justify-start gap-x-2 items-center text-white text-2xl space-x-1 font-bold bg-[#24adae]'
  const normalLink = 'hover:bg-slate-100 pl-7 mt-2 w-full h-14 flex justify-start gap-x-2 items-center text-white text-2xl space-x-1 font-bold'
  return (
    <div className="bg-white z-40 h-full">
      <div className="flex flex-col ">
        <div className="flex flex-row items-center justify-start pt-8 mb-12">
          <img
            className="h-16 w-auto"
            src="https://media.discordapp.net/attachments/938405759996276806/1083065868260495380/amani_logo_png_1.png?width=280&height=280"
            alt="Your Company"
          />
          <p className="text-[#24adae] text-[18px] font-extrabold ">Amani Restaurant</p>
        </div>

        {
          SidebarData.map((item, index) => {
            return (
              <div className="" key={index}>
                <NavLink to={item.path}
                  className={({ isActive }) =>
                    isActive ? activeLink : normalLink}>
                  <span className="">{item.icon}</span>
                  <span className="text-gray-700 text-lg">{item.title}</span>
                </NavLink>

              </div>
            )
          })
        }
      </div>
    </div>
  );
}

export default SideBarltr;