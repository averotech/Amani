import { useState } from 'react';
import { AiOutlineMenu, AiFillCloseCircle } from 'react-icons/ai';
import { NavLink } from 'react-router-dom';
import { SidebarData } from '../data/SideBardata';

const SideBarModel = () => {
    const [openModel, setOpenModel] = useState(false);
    const activeLink = 'hover:bg-slate-100	  mt-2 pl-7 w-full h-14 flex justify-start gap-x-2 items-center text-white text-2xl space-x-1 font-bold bg-[#24adae]'
    const normalLink = 'hover:bg-slate-100 pl-7 mt-2 w-full h-14 flex justify-start gap-x-2 items-center text-white text-2xl space-x-1 font-bold'

    return (
        <>
            <div className='flex justify-start px-4 items-center h-12 md:hidden w-full'>
                <AiOutlineMenu onClick={() => setOpenModel((val) => val = !val)} className="w-6 h-7 " />
            </div>
            {openModel == true ?
                <>
                    <div className="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>
                    <div className="fixed inset-0 z-40 overflow-y-auto">
                        <div className='flex items-center justify-center'></div>
                        <div className='relative overflow-hidden rounded-tr-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all max-w-[280px]  min-h-full'>
                            <div className="flex flex-row w-full items-center justify-end">
                                <AiFillCloseCircle className='h-7 w-7' onClick={() => setOpenModel(false)} />
                            </div>
                            <div className="flex flex-row items-center justify-start pt-8 mb-12">
                                <img
                                    className="h-16 w-auto"
                                    src="https://media.discordapp.net/attachments/938405759996276806/1083065868260495380/amani_logo_png_1.png?width=280&height=280"
                                    alt="Your Company"
                                />
                                <p className="text-[#24adae] text-[18px] font-extrabold ">Amani Restaurant</p>
                            </div>
                            {
                                SidebarData?.map((item, index) => {
                                    return (
                                        <div className="" key={index}>
                                            <NavLink onClick={() => setOpenModel(false)} to={item.path}
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
                </>
                : null}
        </>
    );
}

export default SideBarModel;