import { AiFillCloseCircle } from "react-icons/ai";

const AddItemModal = ({setAddItem}) => {
    return ( 
     
            <div className="relative z-10 flex flex-row items-center justify-center "  >
                <div className="bg-[#f7f9f9] shadow-lg max-w-md w-full h-[500px] absolute -top-44 border-[1px] border-white rounded-lg">
                    <div className="flex flex-row items-start justify-between px-6 mt-8">
                        <p className="text-[#43436a] text-lg">Add New Item</p>
                        <div className="cursor-pointer" >
                            <AiFillCloseCircle className='h-7 w-7' onClick={() => {setAddItem(false) }} />
                        </div>
                    </div>
                    <div className="mt-16 flex flex-col items-center gap-y-8 justify-center">
                        <input type="text" className="block w-[80%] rounded-md border-0 py-3 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Item Name ...." />
                        <textarea rows="4"  className="block w-[80%] rounded-md border-0 px-2 pt-0.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:py-1.5 sm:text-sm sm:leading-6" placeholder="Item description ..."></textarea>
                        <input type="text" className="block w-[80%] rounded-md border-0 py-3 px-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="Price" />
                   
                    </div>
                    <div className="flex flex-row items-center justify-center">
                        <button type="button" className="rounded-md mt-8 bg-indigo-600 h-10 pt-1 px-5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Save</button>
                    </div>
                </div>
            </div>
     );
}
 
export default AddItemModal;