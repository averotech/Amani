import { AiFillCloseCircle } from "react-icons/ai";

const AddCategoryModel = ({ setNewCategory, editCategory, newCategory, setEditCategory }) => {
    return (
        <div className="relative z-10 flex flex-row items-center justify-center "  >
            <div className="bg-[#f7f9f9] shadow-lg max-w-xl w-full h-72 absolute top-4 border-[1px] border-white rounded-lg">
                <div className="flex flex-row items-start justify-between px-6 mt-8">
                    <p className="text-[#43436a] text-lg">{newCategory ? 'Add New Category' : 'Edit Category'}</p>
                    <div className="cursor-pointer" >
                        <AiFillCloseCircle className='h-7 w-7' onClick={() => { newCategory ? setNewCategory(false) : setEditCategory(false) }} />
                    </div>
                </div>
                <div className="mt-16 flex items-center justify-center">
                    <input type="text" className="block w-[80%] rounded-md border-0 py-3 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Category Name ...." />
                </div>
                <div className="flex flex-row items-center justify-center">
                    <button type="button" className="rounded-md mt-8 bg-indigo-600 h-10 pt-1 px-5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                </div>
            </div>
        </div>
    );
}

export default AddCategoryModel;