const MenuItem = () => {
    return (
        <div className="h-[310px] bg-white w-64 border-2 border-[#f2f3f3] rounded-md flex flex-col items-start justify-start px-4 pt-4 gap-y-3">
            {/* item Menu */}
            <p className="text-[#687be5] text-center text-lg">Caprese Salad (350gr) </p>
            <p className="text-[#656585] pt-3 text-left text-base">iceberg, arugula, cherry tomatoes, mozzarella salad, salad dressing: (Extra Virgin olive oil, Modena balsamic vinegar, honey and mustard) </p>
            <div className="bg-[#e5e8fa] w-[60px] h-[25px] rounded-3xl flex flex-row items-center justify-center">
                <p className="text-xs text-[#788af0] pt-1">9,99$</p>
            </div>
            <p className=" text-lg text-[#53d69f] pt-2">Avalable</p>
        </div>
    );
}

export default MenuItem;