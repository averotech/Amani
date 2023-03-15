import { PlusIcon } from "@heroicons/react/24/outline";
import MenuItem from "../../components/Menu/MenuItem";
import { AiOutlineGlobal, AiOutlineLogout, AiOutlineEdit, AiOutlineDelete } from "react-icons/ai";
import { useState } from "react";
import AddCategoryModel from "../../components/Menu/AddCategoryModel";
import AddItemModal from "../../components/Menu/AddItemModel";
import { Category } from '../../data/TestData';
import './styles.css'



const MenuPg = () => {
    const [newCategory, setNewCategory] = useState(false)
    const [editCategory, setEditCategory] = useState(false)
    const [addItem, setAddItem] = useState(false)


    return (
        <>
            <div className="flex flex-row items-center justify-between mx-8 pt-8">
                <p className="text-white text-lg">Menu</p>
                <div className="flex flex-row items-center justify-start">
                    <button className="text-white flex flex-row  items-center justify-center  gap-x-1 py-1 px-4">
                        <AiOutlineGlobal />
                        <p className="mt-1.5">English</p>
                    </button>
                    <button className="text-white flex flex-row  items-center justify-center  gap-x-2 py-1 px-4">
                        <AiOutlineLogout className="w-5 h-5" />
                        <p className="mt-1.5">Demo</p>
                    </button>
                </div>
            </div>
            <div className="flex flex-row justify-end items-end max-w-7xl mx-[4.5%] mt-32">
                <button onClick={() => setNewCategory(openModel => openModel = !openModel)}
                    type="button"
                    className="flex min-h-[35px] justify-center items-center  gap-x-2 rounded-md bg-[#11cdef]  px-2.5 text-sm font-semibold text-white shadow-sm
                             hover:bg-[#3c4d69] focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    <div>
                        <PlusIcon className="h-5 w-5" aria-hidden="true" />
                    </div>
                    <p className="pt-2">Add new category</p>
                </button>
            </div>
            {Category && Category.map((item, key) => {
                return <div key={item.id} className="Menucontainer  first:z-50">
                    <div className="mx-auto  max-w-6xl px-6 lg:px-8 bg-transparent py-4 rounded-md  mt-8  border-gray-300 border-2" style={{ background: 'white' }}>
                     {key==0?  <div className="flex flex-row items-center flex-wrap md:flex-nowrap  gap-y-4 justify-center gap-x-6 sm:gap-x-0 sm:justify-between min-w-[50px]  ">
                            <p className="text-[#32325d] font-bold text-xl">Restaurant Menu Management</p>
                        </div>:null} 

                        {/* AddNewCategoryModel */}
                        {newCategory == true || editCategory == true ? <AddCategoryModel newCategory={newCategory} editCategory={editCategory} setEditCategory={setEditCategory} setNewCategory={setNewCategory} /> : null}
                        {/* AddNewItem */}
                        {addItem == true ? <AddItemModal setAddItem={setAddItem} /> : null}
                        {/* CategoryName */}
                        <div key={item.id} className="flex flex-row items-center justify-between bg-[#3c4d69] w-full h-[75px]  mt-8 px-6 rounded-lg">
                            <p className="text-white text-xl">{item.name_en}</p>
                            <div className="flex flex-row items-start justify-start gap-x-2">
                                <div className=" flex flex-row items-start justify-start gap-x-2 border-r-2 border-black pr-3">
                                    <button onClick={() => setAddItem(openModal => openModal = !openModal)}
                                        type="button"
                                        className="rounded-lg bg-[#5e72e4] p-1.5 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <PlusIcon className="h-4 w-4" aria-hidden="true" />
                                    </button>
                                    <button
                                        type="button" onClick={() => setEditCategory(openModel => openModel = !openModel)}
                                        className="rounded-lg bg-[#fc8e74] p-1.5 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <AiOutlineEdit />
                                    </button>
                                    <button
                                        type="button"
                                        className="rounded-lg bg-[#FD2A54] p-1.5 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                        <AiOutlineDelete color="white" />
                                    </button>
                                </div>
                                <button
                                    type="button"
                                    className="rounded-lg bg-[#2DCE89] p-1.5 text-white shadow-sm  focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M7.20293 0.0218259C5.10605 0.246826 3.20605 1.24995 1.86855 2.8437C0.92793 3.96245 0.343555 5.2312 0.0841797 6.7187C0.0248047 7.05933 0.0185547 7.22495 0.0185547 7.99995C0.0185547 8.77495 0.0248047 8.94058 0.0841797 9.2812C0.37793 10.9687 1.08418 12.3656 2.2498 13.575C3.44668 14.8187 4.95605 15.6062 6.71855 15.9156C7.05918 15.975 7.2248 15.9812 7.9998 15.9812C8.97793 15.9812 9.27168 15.95 10.0404 15.7531C12.7967 15.0406 15.0404 12.7968 15.7529 10.0406C15.9498 9.27183 15.9811 8.97808 15.9811 7.99995C15.9811 7.02183 15.9498 6.72808 15.7529 5.95933C15.0404 3.2062 12.7967 0.959326 10.0404 0.246826C9.33105 0.0655759 8.99668 0.0249509 8.1248 0.0155759C7.6873 0.00932593 7.27168 0.0124509 7.20293 0.0218259ZM9.03105 0.890576C10.5842 1.12495 11.9498 1.81558 13.0654 2.93433C14.1904 4.05933 14.8717 5.4062 15.1154 6.99995C15.1904 7.4937 15.1904 8.5062 15.1154 8.99995C14.8717 10.5937 14.1904 11.9406 13.0654 13.0656C11.9404 14.1906 10.5936 14.8718 8.9998 15.1156C8.50605 15.1906 7.49355 15.1906 6.9998 15.1156C5.40605 14.8718 4.05918 14.1906 2.93418 13.0656C1.80918 11.9406 1.12793 10.5937 0.88418 8.99995C0.80918 8.5062 0.80918 7.4937 0.88418 6.99995C1.12793 5.4062 1.80918 4.05933 2.93418 2.93433C4.17168 1.69683 5.6873 0.993701 7.46855 0.831201C7.74668 0.806201 8.70918 0.843701 9.03105 0.890576Z" fill="black" />
                                        <path d="M7.8906 4.12811C7.7781 4.16249 7.71872 4.20624 7.64685 4.31249C7.59685 4.38436 7.59372 4.61561 7.59372 7.43436V10.4812L6.77497 9.66561C5.88747 8.78124 5.85935 8.76249 5.6156 8.84061C5.40935 8.90936 5.29997 9.13124 5.35935 9.36561C5.37185 9.42499 5.74997 9.82499 6.49372 10.575C7.10622 11.1906 7.6656 11.7344 7.73122 11.7844C7.86247 11.8812 8.0656 11.9062 8.19685 11.8406C8.29372 11.7906 10.5562 9.53436 10.6125 9.43124C10.7718 9.12811 10.5062 8.76561 10.1656 8.82811C10.0625 8.84686 9.93747 8.95936 9.2281 9.66561L8.40622 10.4812V7.44061C8.40622 4.68124 8.39997 4.39374 8.35622 4.31249C8.2656 4.15936 8.05935 4.07811 7.8906 4.12811Z" fill="black" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        {/* Menu Item */}
                        <div className="flex flex-row items-center flex-wrap gap-y-14 justify-center md:justify-start gap-x-4 mt-12">
                            {item.items.map(item => <MenuItem item={item} />)}
                        </div>
                    </div>
                </div>
            })
            }
            <div className="bg-[#f3f5fa] h-[200vh] absolute top-72 w-full -z-50"></div>

        </>
    );
}

export default MenuPg;