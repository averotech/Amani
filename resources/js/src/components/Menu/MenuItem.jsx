const MenuItem = ({item}) => {
    return (
        <div className="h-[310px] bg-white w-64 border-2 border-[#f2f3f3] rounded-md flex flex-col items-start justify-start px-4 pt-4 gap-y-3">
            {/* item Menu */}
            <p className="text-[#687be5] text-center text-lg">{item.name_en} </p>
            <p className="text-[#656585] pt-3 text-left text-base min-h-[120px]">{item.description_en} </p>
            <div className="bg-[#e5e8fa] w-[60px] h-[25px] rounded-3xl flex flex-row items-center justify-center">
                <p className="text-xs text-[#788af0] pt-1">{item.price}</p>
            </div>
            <p className=" text-lg text-[#53d69f] pt-2">Avalable</p>
        </div>
    );
}

export default MenuItem;